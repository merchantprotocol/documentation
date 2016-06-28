On this page we will describe how to manage product stocks for each warehouse with SOAP API remotely. You will need an API user with approprite permissions.

In administrator panel: System -> Web Services -> Roles

Let's create an inventory manager role here. Enter the next data:

 - Role Name – Warehouse Manager
 - Resource Access – Custom
 - Resources – check Catalog Inventory

Save role and then type: System -> Web Services -> Users

Users should be created here:

 - User Name – multiwarehouse
 - First Name – Warehouse
 - Last Name – Manager
 - Email – multiwarehouse@innoexts.com
 - API Key – multiwarehouse1
 - User Role – Warehouse Manager

Save the user and it's done.

 
#### List Product Stocks

Save the next php script, set variables, correct according to your needs and run it: 

	<?php
	# API URL. Replace domain name with yours
	$apiUrl          = 'http://demo.merchantprotocol.com/M1-warehouse/api/soap/?wsdl';
	# API Username
	$apiUsername     = 'multiwarehouse';
	# API Key
	$apiPassword     = 'multiwarehouse1';
	# Product SKUs to list
	$productSkus     = array('amda64', 'intelc2d');
	# Stock identifier. 3 is New York in our case
	$stockId         = 3;
	
	$soapClient = new SoapClient($apiUrl);
	$sessionId = $soapClient->login($apiUsername, $apiPassword);
	$responce = $soapClient->call($sessionId, 'product_stock.listByStock', array($productSkus, $stockId));
	
	print_r($responce);
	
	/*
	Responce:
	Array
	(
	    [0] => Array
	        (
	            [product_id] => 148
	            [sku] => amda64
	            [qty] => 100.0000
	            [is_in_stock] => 1
	            [stock_id] => 3
	        )
	    [1] => Array
	        (
	            [product_id] => 151
	            [sku] => intelc2d
	            [qty] => 0
	            [is_in_stock] => 0
	            [stock_id] => 3
	        )
	)
	*/
	?>

#### Update Product Stocks

Save the next php script, set variables, correct according to your needs and run it: 

	<?php
	# API URL. Replace domain name with yours
	$apiUrl          = 'http://multiwarehouse.innoexts.com/api/soap/?wsdl';
	# API Username
	$apiUsername     = 'multiwarehouse';
	# API Key
	$apiPassword     = 'multiwarehouse1';
	# Product SKUs to update
	$productSku      = 'amda64';
	# Stock item data
	$stockItem       = array('qty' => 105);
	# Stock identifier. 3 is New York in our case
	$stockId         = 3;
	
	$soapClient = new SoapClient($apiUrl);
	$sessionId = $soapClient->login($apiUsername, $apiPassword);
	$soapClient->call($sessionId, 'product_stock.updateByStock', array($productSku, $stockItem, $stockId));
	?>
	
#### List Product Stocks V2

Save the next php script, set variables, correct according to your needs and run it: 

	<?php
	# API URL. Replace domain name with yours
	$apiUrl          = 'http://multiwarehouse.innoexts.com/api/v2_soap/?wsdl';
	# API Username
	$apiUsername     = 'multiwarehouse';
	# API Key
	$apiPassword     = 'multiwarehouse1';
	# Product SKUs to list
	$productSkus     = array('amda64', 'intelc2d');
	# Stock identifier. 3 is New York in our case
	$stockId         = 3;
	
	$soapClient = new SoapClient($apiUrl, array('trace' => 1));
	$sessionId = $soapClient->login($apiUsername, $apiPassword);
	$responce = $soapClient->catalogInventoryStockItemListByStock($sessionId, $productSkus, $stockId);
	
	print_r($responce);
	
	/*
	Responce:
	Array
	(
	    [0] => stdClass Object
	        (
	            [product_id] => 148
	            [sku] => amda64
	            [qty] => 105.0000
	            [is_in_stock] => 1
	            [stock_id] => 3
	        )
	    [1] => stdClass Object
	        (
	            [product_id] => 151
	            [sku] => intelc2d
	            [qty] => 0
	            [is_in_stock] => 0
	            [stock_id] => 3
	        )
	)
	*/
	?>
 
#### Update Product Stocks V2

Save the next php script, set variables, correct it according to your needs and run it:

	<?php
	# API URL. Replace domain name with yours
	$apiUrl          = 'http://multiwarehouse.innoexts.com/api/v2_soap/?wsdl';
	# API Username
	$apiUsername     = 'multiwarehouse';
	# API Key
	$apiPassword     = 'multiwarehouse1';
	# Product SKUs to update
	$productSku      = 'amda64';
	# Stock item data
	$stockItem       = array('qty' => 110);
	# Stock identifier. 3 is New York in our case
	$stockId         = 3;
	
	$soapClient = new SoapClient($apiUrl, array('trace' => 1));
	$sessionId = $soapClient->login($apiUsername, $apiPassword);
	$soapClient->catalogInventoryStockItemUpdateByStock($sessionId, $productSku, $stockItem, $stockId);
	?>

 
