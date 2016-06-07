	
	' ***** DISCLAIMER *****
	' This code is to be used as an example and not in production.
	' It lacks thorough testing and debugging.  The Results below will be
	    ' returned when posting against a gateway Test Account or an Active Account with Test Mode Enabled
	
	
	
	GatewayUsername = "[[Gateway Username Here]]"
	GatewayPassword = "[[Gateway Password Here]]"
	
	' Returns True on Success, False on Failure
	Function GatewaySale(amount, ccnumber, ccexp, cvv, name, address, zip)
	    Set OGateway = Server.CreateObject("MSXML2.ServerXMLHTTP")
	    OGateway.Open "POST", "https://merchantprotocol.transactiongateway.com/api/transact.php", false
	    OGateway.setRequestHeader "Content-Type", "application/x-www-form-urlencoded"
	    DataToSend = "username=" & Server.URLEncode(GatewayUsername) &_
	             "&password=" & Server.URLEncode(GatewayPassword) &_
	             "&ccnumber=" & Server.URLEncode(ccnumber) &_
	             "&ccexp=" & Server.URLEncode(ccexp) &_
	             "&cvv=" & Server.URLEncode(cvv) &_
	             "&amount=" & Server.URLEncode(amount) &_
	             "&firstname=" & Server.URLEncode(name) &_
	             "&address1=" & Server.URLEncode(address) &_
	             "&zip=" & Server.URLEncode(zip)
	
	    OGateway.Send DataToSend
	
	    ResponseString = OGateway.responseText
	    Results = Split(ResponseString, "&")
	
	    GatewaySale = False
	    For Each i in Results
	        Result = Split(i,"=")
	        If UBound(Result)>0 Then
	            If  LCase(Result(0))="response" Then
	                If Result(1) = "1" Then
	                    GatewaySale = True
	                End If
	            End If
	        End If
	    Next
	End Function
	
	Results = GatewaySale("10.00","4111111111111111","0112","","John Smith","123 Main St", "60123")
	Response.Write("This should be true: " & Results & "
	")
	
	Results = GatewaySale("0.99","4111111111111111","0112","","John Smith","123 Main St", "60123")
	Response.Write("This should be false: " & Results & "
	")