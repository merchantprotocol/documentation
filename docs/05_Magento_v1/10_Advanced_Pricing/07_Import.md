Advanced Pricing includes a built-in script to import prices in a fast way (much faster than the Dataflow function may do it).

Run the php command with your arguments:

	php shell/AdvancedPricing/Product/Price/Importer.php \
	    --ftp \
	    --ftp-host ftp.yourhost.com \
	    --ftp-user username \
	    --ftp-password password \
	    --ftp-filename remotefilename.csv \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Omit ftp arguments to run import from local data feed:

	php shell/AdvancedPricing/Product/Price/Importer.php \
	    --file-path /var/import/ \
	    --file-filename localfilename.csv

Run the next command to get arguments description

	php shell/AdvancedPricing/Product/Price/Importer.php --help

The data feed should have the next format:

	sku,price_USD,price_EUR,special_price_USD,special_price_EUR,store
	"HTC Touch Diamond","756.00","565.00",,,0
	"HTC Touch Diamond","755.00","564.00","745.00","554.00","french"
