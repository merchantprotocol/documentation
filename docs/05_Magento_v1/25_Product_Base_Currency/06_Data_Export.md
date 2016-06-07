Data exporting can be handled with the number of CLI (command line interface) scripts built-in.

### Base Currency

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/BaseCurrency/Export.php \
	    --file-path /var/export/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-base-currency.csv

Note, The script path is related to the document root in the sample but can be replaced with the absolute path (to run via cron service for example), file-path directory is always related to the document root.

Run the next command to get arguments description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/BaseCurrency/Export.php --help

The output data feed `var/export/Innoexts/ProductBaseCurrency/product-base-currency.csv` should have the next format:

	sku,store,currency
	"HTC Touch Diamond",,EUR
	"HTC Touch Diamond",default,USD

 
### Price

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Price/Export.php \
	    --file-path /var/export/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-price.csv

Note, The script path is related to the document root in the sample but can be replaced with the absolute path (to run via cron service for example), file-path directory is always related to the document root.

Run the next command to get arguments description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Price/Export.php --help

The output data feed var/export/Innoexts/ProductBaseCurrency/product-price.csv should have the next format:

	sku,store,price
	"HTC Touch Diamond",,750
	"HTC Touch Diamond",default,755

 
### Special Price

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Special/Export.php \
	    --file-path /var/export/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-special-price.csv

Note, The script path is related to the document root in the sample but can be replaced with the absolute path (to run via cron service for example), file-path directory is always related to the document root.

Run the next command to get arguments description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Special/Export.php --help

The output data feed var/export/Innoexts/ProductBaseCurrency/product-special-price.csv should have the next format:

	sku,store,price
	"HTC Touch Diamond",,740
	"HTC Touch Diamond",default,745

 
### Customer Group Price

Note, Group Price function is available for Magento CE 1.7.0.0+ only.

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Group/Export.php \
	    --file-path /var/export/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-group-price.csv

Note, The script path is related to the document root in the sample but can be replaced with the absolute path (to run via cron service for example), file-path directory is always related to the document root.

Run the next command to get arguments description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Group/Export.php --help

The output data feed var/export/Innoexts/ProductBaseCurrency/product-group-price.csv should have the next format:

	sku,all_groups,customer_group,website,price
	"HTC Touch Diamond",,"General",,730

 
### Tier Price

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Tier/Export.php \
	    --file-path /var/export/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-tier-price.csv

Note, The script path is related to the document root in the sample but can be replaced with the absolute path (to run via cron service for example), file-path directory is always related to the document root.

Run the next command to get arguments description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Tier/Export.php --help

The output data feed var/export/Innoexts/ProductBaseCurrency/product-tier-price.csv should have the next format:

	sku,all_groups,customer_group,website,qty,price
	"HTC Touch Diamond",,"General",,2,725
	"HTC Touch Diamond",,"General",,3,720

 