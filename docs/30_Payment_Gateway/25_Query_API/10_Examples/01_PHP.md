
	function testXmlQuery($username,$password,$constraints)
	{
	    // transactionFields has all of the fields we want to validate
	    // in the transaction tag in the XML output
	    $transactionFields = array(
	        'transaction_id',
	        'transaction_type',
	        'condition',
	        'order_id',
	        'authorization_code',
	        'ponumber',
	        'orderdescription',
	        'avs_response',
	        'csc_response',
	
	
	        'first_name',
	        'last_name',
	        'address_1',
	        'address_2',
	        'company',
	        'city',
	        'state',
	        'postal_code',
	        'country',
	        'email',
	        'phone',
	        'fax',
	        'cell_phone',
	        'customertaxid',
	        'customerid',
	        'website',
	
	        'shipping_last_name',
	        'shipping_address_1',
	        'shipping_address_2',
	        'shipping_company',
	        'shipping_city',
	        'shipping_state',
	        'shipping_postal_code',
	        'shipping_country',
	        'shipping_email',
	        'shipping_carrier',
	        'tracking_number',
	
	        'cc_number',
	        'cc_hash',
	        'cc_exp',
	        'cc_bin',
	        'avs_response',
	        'csc_response',
	        'cardholder_auth',
	
	        'processor_id',
	
	        'tax');
	    // actionFields is used to validate the XML tags in the
	    // action element
	     $actionFields = array(
	         'amount',
	         'action_type',
	         'date',
	         'success',
	         'ip_address',
	         'source',
	         'response_text'
	          );
	
	    $mycurl=new curl();
	    $postStr='username='.$username.'&password='.$password. $constraints;
	    $url="https://merchantprotocol.transactiongateway.com/api/query.php?". $postStr;
	    $mycurl->execute($url);
	
	    $testXmlSimple= new SimpleXMLElement($mycurl->data);
	
	    if (!isset($testXmlSimple->transaction)) {
	            throw new NmExUser('No transactions returned');
	    }
	
	    $transNum = 1;
	    foreach($testXmlSimple->transaction as $transaction) {
	        foreach ($transactionFields as $xmlField) {
	            if (!isset($transaction->{$xmlField}[0])){
	                throw new NmExUser('Error in transaction_id:'. $transaction->transaction_id[0] .' id  Transaction tag is missing  field ' . $xmlField);
	            }
	        }
	        if (!isset ($transaction->action)) {
	            throw new nmExUser('Error, Action tag is missing from transaction_id '. $transaction->transaction_id[0]);
	        }
	
	        $actionNum = 1;
	        foreach ($transaction->action as $action){
	            foreach ($actionFields as $xmlField){
	                if (!isset($action->{$xmlField}[0])){
	                    throw new NmExUser('Error with transaction_id'.$transaction->transaction_id[0].'
	                                        Action number '. $actionNum . ' Action tag is missing field ' . $xmlField);
	                }
	            }
	            $actionNum++;
	        }
	        $transNum++;
	    }
	
	    return;
	}
	
	try {
	
	    $constraints = "&action_type=sale&start_date=20060913";
	    $result = testXmlQuery('test123','test1234',$constraints);
	    print "Success.\n";
	
	} catch (Exception $e) {
	
	    $e->outputText();
	
	}