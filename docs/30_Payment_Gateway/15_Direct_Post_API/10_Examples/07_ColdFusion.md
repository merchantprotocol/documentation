#### ccon.cfm

	<CFLOCK Name="#session.sessionID#" timeout="10" Type ="Exclusive">
	<CFPARAM NAME="session.status" Default="none">
	<CFPARAM NAME="emsg" Default="A connection with the financial gateway failed.">
	<CFSET oid = ''>
	<CFSET em = 0>
	
	<CFIF not IsDefined('URL.ccinterim')>
	<CFSET em = 100>
	<CFELSEIF not IsDefined('session.store')>
	<CFSET em = 101>
	<CFELSEIF not session.active>
	<CFSET em = 102>
	<CFELSEIF not session.store>
	<CFSET em = 103>
	<CFELSEIF #session.retry# gt 2>
	<CFSET em = 400>
	</CFIF>
	<CFIF em gt 0>
	<CFLOCATION URL="../Templates/process_error.cfm?#session.URLtoken#&em=#em#">
	</CFIF>
	
	<CFSET start = GetTickCount()>
	<CFPARAM NAME="result" DEFAULT="false">
	<CFPARAM NAME="com_error" DEFAULT="none">
	<CFPARAM NAME="session.redirect" Default="x">
	<CFPARAM NAME="session.status" Default="none">
	<CFPARAM NAME="theactioncode" Default="">
	<CFSET oid = session.ponumber>
	
	<!--- fix date for 4 digits only now 09/09--->
	<CFSET ccmonth = SpanExcluding(session.exprdate, '/')>
	<CFSET ccyear = Mid(session.exprdate, 4, 2)>
	<CFSET session.exprdate = '#ccmonth##ccyear#'>
	<!--- the session.cvv value is set to a form default in ccinterim --->
	
	<!--- the session order values come from paydirect and the cc values from ccinterim --->
	<!--- Tax(default=0), shipping(default=0), and PO Number provide Level II processing --->
	<CFHTTP url="https://merchantprotocol.transactiongateway.com/api/transact.php"
	method="POST" resolveurl="yes" throwonerror="yes"
	PATH="d:\html\users\cfxa2\zanaducom\html\Test\CardTech\" FILE="tempfile.txt">
	<CFHTTPPARAM type="FORMFIELD" name="username" value="#session.TRNSID#">
	<CFHTTPPARAM type="FORMFIELD" name="password" value="#session.TRNSKEY#">
	<CFHTTPPARAM type="FORMFIELD" name="type" value="#session.TRNSTYPE#">
	<CFHTTPPARAM type="FORMFIELD" name="amount" value="#session.ustotal#">
	<CFHTTPPARAM type="FORMFIELD" name="ccnumber" value="#session.ccnumber#">
	<CFHTTPPARAM type="FORMFIELD" name="ccexp" value="#session.exprdate#">
	<CFHTTPPARAM type="FORMFIELD" name="address1" value="#session.ccaddress#">
	<CFHTTPPARAM type="FORMFIELD" name="zip" value="#session.cczip#">
	<CFHTTPPARAM type="FORMFIELD" name="orderid" value="#session.ponumber#">
	<CFHTTPPARAM type="FORMFIELD" name="cvv" value="#session.cvv#">
	<CFHTTPPARAM type="FORMFIELD" name="tax" value="#session.ustax#">
	<CFHTTPPARAM type="FORMFIELD" name="shipping" value="#session.usshipping#">
	<!---CFHTTPPARAM type="FORMFIELD" name="transactionid" value="#form.transid#"--->
	</CFHTTP>
	<!---CFSET result = cfhttp.filecontent would be the usual method of getting the
	stored reply;  however, when working in a shared server environment with ColdFusion,
	the user may not have authorization to access this storage area and instead will
	have to specify the full path within their domain for the file storage location
	and again specify the path for a file read action. With multiple domains in a
	sandbox environment, any of the domains can be used for saving the reply file.  On
	each transaction this file gets over written.--->
	<CFFILE ACTION="read"
	FILE="d:\html\users\cfxa2\zanaducom\html\Test\CardTech\tempfile.txt"
	VARIABLE="result">
	
	<CFIF IsDefined('result')>
	<!--- create array of names and then loop to populate a query structure
	called "crdck".  Map mynames to Island names for standardization. If
	this is a first time gateway setup, the mapping will not be necessary.  Simply
	parse the names and values.--->
	<CFSET mystring = result>
	<!--- CFSET mynames = "response,responsetext,authcode,transactionid,avsresponse,cvvresponse,orderid,type" --->
	<!--- create arrays from the strings --->
	<CFSET myarray = ListToArray(mystring, "&")>
	<CFSET islandnames = "ActionCode,Status,AuthNumber,MerchantTransaction,AVSCode,CVVcode,OrderID,Referencecode">
	<CFSET islandnamearray = ListToArray(islandnames, ",")>
	<!--- create a new array called crdck and then populate it in a loop with the Island
	names and the values.  This is done to remain compatible with previous
	instances of other gateways without having to change all of the downstream syntax. --->
	<CFSET crdck = QueryNew(islandnames)>
	<CFSET temp = QueryAddRow(crdck)>
	<!--- loop to populate array with desired names (island names) and values --->
	<CFLOOP  INDEX="k" FROM="1" TO="#ArrayLen(myarray)#">
	<CFSET sz = Len(myarray[k])>
	<CFSET m = FindNoCase("=", myarray[k], 1)>
	<CFIF m is 0><!--- create dummy value in case the = sign not found --->
	<CFSET temp = QuerySetCell(crdck, islandnamearray[k], "xxx")>
	<CFELSE>
	<CFSET n = Find("=", myarray[k], m+sz)>
	<CFSET avalue = Mid(myarray[k], m+1, sz)>
	<CFSET temp = QuerySetCell(crdck, islandnamearray[k], avalue)>
	</CFIF>
	<CFIF #k# gt 20><CFBREAK></CFIF><!--- prevent an endless loop for any reason --->
	</CFLOOP>
	</CFIF>
	
	<CFIF IsDefined('crdck.Actioncode')>
	<CFSET theactioncode = crdck.Actioncode>
	<!--- this call will timeout based on server configuration --->
	
	<CFSET thedate = DateFormat(now(), 'mm/dd/yy')>
	
	<!--- some mapping is required because CardTech gateway uses their Responsetext 
	field, our STATUS field, for both status and error messages. --->
	
	<!--- In our database STATUS is a short advisory to the merchant on the order
	summary page.  Their 'response' is our actioncode--->
	<CFSET thestatus = crdck.Actioncode>
	<CFIF thestatus eq 1>
	<CFSET thestatus = 'auth-settle::1'>
	<CFELSEIF thestatus eq 2>
	<CFSET thestatus = 'retry-auth(credit)::2'>
	<CFELSEIF thestatus eq 3>
	<CFSET thestatus = 'retry-auth(data)::3'>
	<CFELSEIF thestatus eq "">
	<CFSET thestatus = 'retry-auth(comm)::'>
	</CFIF>
	
	<!--- A short statement for the 'trnsmsg' on the order detail page. CardTech
	returns 'success' in their responsetext field when actioncode=1 --->
	<CFSET msg = crdck.status>
	<CFIF crdck.Actioncode is not 1>
	<CFSET msg = 'declined'>
	</CFIF>
	
	<!--- CardTech Responsetext(our status) is a message which is mapped to our
	error message when 'success' (CardTech actioncode is not equal to 1)is not
	returned. The emsg(error message) is for the customer and order detail page. --->
	<CFSET emsg = crdck.status>
	<CFIF crdck.Actioncode is 1>
	<CFSET emsg = 'no-error'>
	</CFIF>
	
	<!--- zero lenth not allowed in database table entry --->
	<CFSET oid = crdck.OrderID>
	<CFIF #Len(oid)# is 0>
	<CFSET oid = #session.ponumber#>
	</CFIF>
	
	<CFSET avs = crdck.AVSCode>
	<CFIF Len(avs) is 0>
	<CFSET avs = 'no return'>
	</CFIF>
	
	<CFSET cvv = crdck.CVVCode>
	<CFIF Len(cvv) is 0>
	<CFSET cvv = 'no return'>
	</CFIF>
	
	<CFSET authnum = crdck.AuthNumber>
	<CFIF Len(authnum) is 0>
	<CFSET authnum = 'xxx'>
	</CFIF>
	
	<CFSET trnsmsg = '#authnum#::#msg#::#crdck.ActionCode#'>
	<CFSET trnsid = '#crdck.MerchantTransaction#::#crdck.ReferenceCode#'>
	
	<CFQUERY NAME="logpayment" DATASOURCE="#application.ordersDSN#">
		UPDATE #session.table#
		SET	TRNSMSG = '#trnsmsg#',<!--- this is RESULT entry on order detail page --->
			STATUS = '#thestatus#',
			AVS = '#avs#',
			TRNSRSV = '#cvv#',
			ERRORMSG = '#emsg#',
			TRANSID = '#trnsid#' <!--- this is Authorize ID on order detail page --->
			WHERE
			PONUMBER = '#oid#'
	</CFQUERY>
	
	<CFSET session.retry = session.retry +1>
	<CFSET end = GetTickCount()>
	<CFSET session.duration = evaluate((end - session.start)/1000)>
	
	<CFIF crdck.Actioncode is 1>
	<CFLOCATION URL = "../Templates/cc_good.cfm?#session.URLToken#&ccon=1">
	
	<CFELSEIF crdck.Actioncode is 2>
	<CFSET em = 401>
	<CFLOCATION URL="../Templates/process_error.cfm?#session.URLToken#&em=#em#&emsg=#emsg#">
	
	<CFELSEIF crdck.ActionCode is 3 AND FindNoCase('expiration', emsg,1) gt 0>
	<CFSET em = 402>
	<CFLOCATION URL="../Templates/process_error.cfm?#session.URLToken#&em=#em#&emsg=#emsg#">
	
	<CFELSEIF crdck.ActionCode is 3 AND FindNoCase('invalid', emsg,1) gt 0>
	<CFSET em = 405>
	<CFLOCATION URL="../Templates/process_error.cfm?#session.URLToken#&em=#em#&emsg=#emsg#">
	
	<CFELSEIF crdck.ActionCode is 3>
	<CFSET em = 404>
	<CFLOCATION URL="../Templates/process_error.cfm?#session.URLToken#&em=#em#&emsg=#emsg#">
	</CFIF>
	</CFIF><!--- end of crdck.actioncode defined --->
	
	<CFIF theactioncode is ""><!--- from the default value modified by crdck.actioncode --->
	<CFSET em = 406>
	<CFLOCATION URL="../Templates/process_error.cfm?#session.URLToken#&em=#em#&emsg=""">
	</CFIF>
	</CFLOCK>

#### mytest.htm

	<DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
	<html><head><title>ColdFusion test</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta http-equiv="Expires" content="Mon,23 Sept 1998 00:00:00 GMT">
	<meta name='description' content=''>
	<meta name='keywords' content=''>
	<meta name='author' content='ImagineNation'>
	<meta name='url' content='http://www.ImagineNation.com'>
	<!--- COPYRIGHT:===============================================
	Any commercial use or duplication, in part or in whole, of this		
	copyright material without prior licensing is forbidden by 
	federal law.  Violators may be subject to civil and/or criminal
	penalties, (Title 17, Sections 501 and 506). 
	========================================================== --->
	<!-- script language="JavaScript1.1" src="whatever.js" type="text/javascript" -->
	<script language="JavaScript1.1" type="text/javascript">
	//<!-- ==========================Hide SCRIPT=============================
	//onError = null
	//===============================The End============================= -->
	</script>
	<style>
	body{background-color:#cadaca; margin: 5px 0px 0px 5px; 
	font-family:verdana; font-size:12pt; font-weight:bold; color:#000000;
	}
	.toptable{background-color:#daeaca; font-family:Verdana; font-size:10pt;
	font-weight:bold; color:#000000; padding:10px; width:350px; height:150px;
	border-width:2px; border-color:#b07050; border-style:solid; float:left; 
	display:inline; 
	}
	.cr{color:#000000; font-family:Ariel; font-size:8pt;
	font-weight:normal; font-style:italic;
	}
	</style>
	</head>
	
	<body>
	<h4>HTML Test File<br>
	Submits to the ColdFusion process.cfm File</h4>
	<div class="toptable" align="right">
	The names in parenthesis are the processing names which are
	populated with values in the form fields.  The values demo and password allow
	test transactions on the gateway.<br>
	<form name="testtrans" action="process.cfm" method="post">
	username:  <input type="text" name="username" size=20 value="demo"><br>
	password:  <input type="text" name="password" size=20 value="password"><br>
	amount:  <input type="text" name="amount" size=20 value="2.00"><br>
	transtype:  <input type="text" name="transtype" size=20 value="auth"><br>
	ccnumber:  <input type="text" name="ccnumber" size=20 value="4111111111111111"><br>
	ccexp:  <input type="text" name="ccexp" size=20 value="0407"><br>
	address1:  <input type="text" name="ccaddress" size=20 value="20 demo lane"><br>
	zip:  <input type="text" name="cczip" size=20 value="20123"><br>
	cvv:  <input type="text" name="cvv" size=20 value="444"><br>
	orderid:  <input type="text" name="orderid" size=20 value="UM12345678"><br>
	tax:  <input type="text" name="tax" size=20 value="1.20"><br>
	transid:  <input type="text" name="transid" size=20 value=""><br>
	<input type="submit" value=" SUBMIT ">
	</form><br>
	Transid is the transaction ID number returned and the number that must be used 
	to capture an authorization or make a return.
	</div>
	
	<center class="cr">
	<p> <p><a href="http://ImagineNation.com" target="_blank">ImagineNation</a><br>© 1996 - 2006
	</center>
	</body></html>

#### process.cfm

	<!--- It is advisable to run this file in a managed application with a lock on
	the session to avoid interference from some other operation while waiting for
	the return information. --->
	
	<CFLOCK Name="testfiles" timeout="10" Type ="Exclusive">
	<CFSET begin =GetTickCount()>
	
	<!--- These default values are provided to prevent errors of omission. --->
	<CFPARAM NAME="form.username" DEFAULT="xx">
	<CFPARAM NAME="form.password" DEFAULT="xx">
	<CFPARAM NAME="form.amount" DEFAULT="xx">
	<CFPARAM NAME="form.transtype" DEFAULT="xx">
	<CFPARAM NAME="form.ccnumber" DEFAULT="xx">
	<CFPARAM NAME="form.ccexp" DEFAULT="xx">
	<CFPARAM NAME="form.ccaddress" DEFAULT="xx">
	<CFPARAM NAME="form.cczip" DEFAULT="xx">
	<CFPARAM NAME="form.orderid" DEFAULT="xx">
	<CFPARAM NAME="form.ccv" DEFAULT="">
	<CFPARAM NAME="form.tax" DEFAULT="0.75">
	<CFPARAM NAME="form.transid" DEFAULT="">
	<CFPARAM NAME="result" DEFAULT="xx">
	
	<!--- CFSET result = cfhttp.filecontent would be the usual method of getting the
	stored reply from a post action without specifying a path;  however, when working
	in a shared server environment with ColdFusion, the user may not have authorization
	to access this storage area and instead will have to specify the full path within
	their own domain for the file storage location and again specify the same path for
	a file read action.  With multiple domains in a sandbox environment, any of the
	domains can be used for saving the reply file.  On each transaction this file gets
	over written.  The example below is specific to ImagineNation and must be changed
	for your own testing.--->
	
	<!--- This is the post to the gateway server. --->
	<cfhttp url="https://merchantprotocol.transactiongateway.com/api/transact.php"
	method="POST" resolveurl="yes" throwonerror="yes"
	PATH="d:\html\users\cfxa2\zanaducom\html\Test\CardTech\" FILE="tempfile.txt">
	<cfhttpparam type="FORMFIELD" name="username" value="#form.Username#">
	<cfhttpparam type="FORMFIELD" name="password" value="#form.Password#">
	<cfhttpparam type="FORMFIELD" name="amount" value="#form.Amount#">
	<cfhttpparam type="FORMFIELD" name="type" value="#form.transtype#">
	<cfhttpparam type="FORMFIELD" name="ccnumber" value="#form.CCNumber#">
	<cfhttpparam type="FORMFIELD" name="ccexp" value="#form.CCExp#">
	<cfhttpparam type="FORMFIELD" name="address1" value="#form.ccaddress#">
	<cfhttpparam type="FORMFIELD" name="zip" value="#form.cczip#">
	<cfhttpparam type="FORMFIELD" name="orderid" value="#form.orderid#">
	<cfhttpparam type="FORMFIELD" name="cvv" value="#form.cvv#">
	<cfhttpparam type="FORMFIELD" name="tax" value="#form.tax#">
	<cfhttpparam type="FORMFIELD" name="transactionid" value="#form.transid#">
	</CFHTTP>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
	<html><head><title>ImagineNation: ColdFusion process</title>
	<style>
	body{background-color:#cadaca; margin: 5px 0px 0px 5px; 
	font-family:verdana; font-size:12pt; font-weight:bold; color:#000000;
	}
	.toptable{background-color:#daeaca; font-family:Verdana; font-size:10pt;
	font-weight:bold; color:#000000; padding:10px; width:350px; height:150px;
	border-width:2px; border-color:#b07050; border-style:solid; float:left; 
	display:inline; 
	}
	.cr{color:#000000; font-family:Ariel; font-size:8pt;
	font-weight:normal; font-style:italic;
	}
	</style>
	</head>
	
	<body>
	<h4>Transaction results appear here.</h4>
	<CFFILE ACTION="read"
	FILE="d:\html\users\cfxa2\zanaducom\html\Test\CardTech\tempfile.txt"
	VARIABLE="result">
	<CFOUTPUT>
	<CFIF IsDefined('result')>
	<b>The returned string is:<br>
	<font size="-1">#result#</font></b>
	<CFELSE>
	<b>
	No return found</b>
	</CFIF>
	<div class="toptable">
	The string can be converted to an array of name/value pairs by splitting on the "&" sign.<br><br>
	<CFSET responsearray = ListToArray(result, "&")>
	The array length is #ArrayLen(responsearray)#
	<br><br>
	The returned array values are:<br><br>
	<CFLOOP INDEX="k" FROM="1" TO="#ArrayLen(responsearray)#">
	#responsearray[k]#<br>
	<CFIF #k# gt 20><CFBREAK></CFIF><!--- prevent an endless loop for any reason --->
	</CFLOOP>
	</CFOUTPUT><br><br>
	If this was a type=auth transaction, you can return to the <a href="mytest.htm">
	form page</a> and enter the transaction id and change type to capture to test
	the capture mode.
	</div>
	
	<CFOUTPUT>
	<p><CFSET end =GetTickCount()>
	process duration = #Evaluate((end-begin)/1000)# seconds
	</CFOUTPUT>
	</CFLOCK>
	
	<center class="cr">
	<p> <p><a href="http://ImagineNation.com" target="_blank">ImagineNation</a><br>© 1996 - 2006
	</center>
	</body></html>