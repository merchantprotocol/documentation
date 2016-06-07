Zones Manager includes built-in scripts to import compound prices, compound special prices and tier prices in a fast way.

### Compound Price

Run the php command with your arguments:
	php shell/Innoexts/Zone/Catalog/Product/Price/Importer.php \
	    --ftp \
	    --ftp-host ftp.yourhost.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remotefilename.csv \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Omit ftp arguments to run import from local data feed:

	php shell/Innoexts/Zone/Catalog/Product/Price/Importer.php \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Run the next command to get arguments description

	php shell/Innoexts/Zone/Catalog/Product/Price/Importer.php --help

The data feed should have the next format:

	sku,website,zone,price
	"HTC Touch Diamond","","default","755.00"
	"HTC Touch Diamond","base","europe","760.00"

### Compound Special Price

Run the php command with your arguments:

	php shell/Innoexts/Zone/Catalog/Product/Specialprice/Importer.php \
	    --ftp \
	    --ftp-host ftp.yourhost.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remotefilename.csv \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Omit ftp arguments to run import from local data feed:

	php shell/Innoexts/Zone/Catalog/Product/Specialprice/Importer.php \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Run the next command to get arguments description

	php shell/Innoexts/Zone/Catalog/Product/Specialprice/Importer.php --help

The data feed should have the next format:

	sku,website,zone,price
	"HTC Touch Diamond","","default","745.00"
	"HTC Touch Diamond","base","europe","740.00"

 
### Tier Price

Run the php command with your arguments:

	php shell/Innoexts/Zone/Catalog/Product/Tierprice/Importer.php \
	    --ftp \
	    --ftp-host ftp.yourhost.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remotefilename.csv \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Omit ftp arguments to run import from local data feed:

	php shell/Innoexts/Zone/Catalog/Product/Tierprice/Importer.php \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Run the next command to get arguments description

	php shell/Innoexts/Zone/Catalog/Product/Tierprice/Importer.php --help

The data feed should have the next format:

	sku,all_customer_groups,customer_group,website,zone,qty,price
	"HTC Touch Diamond","1","0","","","2","740"
	"HTC Touch Diamond","0","1","base","europe","3","730"

 