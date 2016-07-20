Data importing can be handled with a number of CLI (command line interface) scripts built-in.

### Base Currency

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/BaseCurrency/Import.php \
	    --ftp \
	    --ftp-host ftp.hostname.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remote-product-base-currency.csv \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-base-currency.csv

Note, The script path is related to the document root in the sample but can be replaced with the absolute path (to run via cron service for example), the file-path directory is always related to the document root.

Omit the ftp arguments to run the import from the local data feed:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/BaseCurrency/Import.php \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-base-currency.csv

Run the next command to get the argument description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/BaseCurrency/Import.php --help

The input data feed var/import/Innoexts/ProductBaseCurrency/product-base-currency.csv should have the next format:

	sku,store,currency
	"HTC Touch Diamond",,EUR
	"HTC Touch Diamond",default,USD
	
Data Feed Format

Property | Description
----- | -----
sku	| Product SKU
store |	Store ID or code
currency |	Currency code

### Price

Run the script with these arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Price/Import.php \
	    --ftp \
	    --ftp-host ftp.hostname.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remote-product-price.csv \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-price.csv

Note, The script path is related to the document root in the sample, but can be replaced with the absolute path (to run via cron service for example), the file-path directory is always related to the document root.

Omit ftp arguments to run the import from the localfile-path data feed:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Price/Import.php \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-price.csv

Run the next command to get the argument's description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Price/Import.php --help

The input data feed var/import/Innoexts/ProductBaseCurrency/product-price.csv should have the following format:

	sku,store,price
	"HTC Touch Diamond",,750
	"HTC Touch Diamond",default,755

Data Feed Format

Property | Description
----- | -----
sku	| Product SKU
store |	Store ID or code
price	| Price value

### Special Price

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Special/Import.php \
	    --ftp \
	    --ftp-host ftp.hostname.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remote-product-special-price.csv \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-special-price.csv

Note, The script path is related to the document root in the sample, but can be replaced with the absolute path (to run via cron service for example), the file-path directory is always related to the document root.

Omit the ftp arguments to run the import from the local data feed:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Special/Import.php \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-special-price.csv

Run the next command to get the argument's description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Special/Import.php --help

The input data feed var/import/Innoexts/ProductBaseCurrency/product-special-price.csv should have the next format:

	sku,store,price
	"HTC Touch Diamond",,740
	"HTC Touch Diamond",default,745

Data Feed Format

Property | Description
----- | -----
sku	| Product SKU
store |	Store ID or code
price |	Price value

### Customer Group Price

Run the script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Group/Import.php \
	    --ftp \
	    --ftp-host ftp.hostname.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remote-product-group-price.csv \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-group-price.csv

Note, The script path is related to the document root in the sample, but can be replaced with the absolute path (to run via cron service for example), the file-path directory is always related to the document root.

Omit the ftp arguments to run the import from the local data feed:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Group/Import.php \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-group-price.csv

Run the next command to get the arguments description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Group/Import.php --help

The input data feed var/import/Innoexts/ProductBaseCurrency/product-group-price.csv should have the following format:

	sku,all_groups,customer_group,website,price
	"HTC Touch Diamond",,"General",,730

Data Feed Format

Property | Description
----- | -----
sku	| Product SKU
all_groups |	Either price should be applied for all groups or not (1 or 0). For Group Price it equals to 0 (or empty)
customer_group |	Customer group ID or name
website	| website ID or code
price	| Price value

### Tier Price

Run this script with your arguments:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Tier/Import.php \
	    --ftp \
	    --ftp-host ftp.hostname.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remote-product-tier-price.csv \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-tier-price.csv

Note, The script path is related to the document root in the sample, but can be replaced with the absolute path (to run via cron service for example), the file-path directory is always related to the document root.

Omit the ftp arguments to run the import from the local data feed:

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Tier/Import.php \
	    --file-path /var/import/Innoexts/ProductBaseCurrency/ \
	    --file-filename product-tier-price.csv

Run the next command to get the argument's description

	php shell/Innoexts/ProductBaseCurrency/Catalog/Product/Price/Tier/Import.php --help

The input data feed var/import/Innoexts/ProductBaseCurrency/product-tier-price.csv should have the following format:

	sku,all_groups,customer_group,website,qty,price
	"HTC Touch Diamond",,"General",,2,725
	"HTC Touch Diamond",,"General",,3,720

Data Feed Format

Property | Description
----- | -----
sku	|Product SKU
all_groups |	Either price should be applied for all groups or not (1 or 0)
customer_group |	Customer group ID or name
website	| Website ID or code
qty	| Quantity value
price |	Price value

