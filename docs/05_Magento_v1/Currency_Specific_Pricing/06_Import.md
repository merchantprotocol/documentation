Currency price importing is not a built-in feature currently. However, we have a ready-made script to accommodate you. The source data feed can vary. Therefore, some custom corrections may be needed. This script allows you to import prices in a fast way (much more faster then Dataflow may do it).

Follow the next sequence:

1. [Download](ProductPriceImporter.tar.gz) and extract the script to Magento document root directory

2. Run php command with your arguments:

	php shell/product-price-importer.php \
	    --ftp \
	    --ftp-host ftp.yourhost.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remotefilename.csv \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Run the next command to get the arguments description

	php shell/product-price-importer.php --help

FTP arguments can be omitted in case if no data feed downloading is required. The data feed should have the next format:

	sku,price_USD,price_EUR,price_GBP
	"HTC Touch Diamond","756.00","565.00","473.00"
