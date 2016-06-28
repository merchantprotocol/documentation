
First, we would like to suggest that you keep a development copy of the live installation for new or updated extension testing. Follow the steps listed below:

1. Make sure that your system corresponds to Magento requirements. Additionally, mbstring PHP extension is required for the geolocation function.

2. Make sure that the PHP compilation function is disabled. In the admin panel navigate to System > Tools > Compilation. If Compiler Status field equals to Enabled, then press the Disable button or:

Open file includes/config.php (the file path is related to the document root).

Replace
```define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

with
```#define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

3. Make sure that the files and database caching tools are disabled (e.g. APC cache).

4. Back up Magento files and database to be able to revert changes in a couple of minutes in case of possible problems.

5. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find errors information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

6. Extract extension and upload files into the document root. Double check that all files were uploaded successfully to the correct directory.

7. Navigate to System > Cache Management. Press the Flush Cache Storage button.

8. If the installer fails during cache flushing, let us know the error messages from the logs.

9. Check if the extension is recognized by Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

10. Check if the module conflicts with any 3rd party modules before instlaling it on your system.

Note, conflict resolving services aren't included in the support package.

11. Navigate to System > Manage Currency Rates or System > Manage Currency > Rates (if your Magento version is equal or above 1.7.0.0). Make sure that rates are populated. If not, then press the Import button or populate rates manually, save them by pressing the Save Currency Rates button.

12. Navigate to System > Index Management. Click "Select All" to select all index types and press "Submit". If indexing fails then you have a 3rd party module conflict.(see 10th step). Let us know the full error messages from the logs for further information.

13. Create the directory var/GeoIP/ (the directory path is related to the document root). Download and extract GeoLite City database into the directory created. As a result,he database file var/GeoIP/GeoLiteCity.dat should be accessible by the Magento installation.

14. Navigate to System > Configuration > Catalog > Warehouses. Enter configuration settings and save.

You made it!

Please don’t hesitate to contact us if you met troubles during the installation process.
