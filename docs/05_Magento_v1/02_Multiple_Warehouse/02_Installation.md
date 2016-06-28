First of all we would like to suggest that you keep a development copy of the live installation for the new and updated extensions. Follow the steps listed below:

1. Make sure that your system corresponds to the Magento requirements. Additionally, the mbstring PHP extension is required for the geolocation function.

2. Make sure that the PHP compilation function is disabled. In the admin panel, navigate to System > Tools > Compilation. If the Compiler Status field equals Enabled, then press the "Disable" button or:

Open file `includes/config.php` (the file path is related to the document root).

Replace

```define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

with

```#define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

3. Make sure that the files and database caching tools are disabled (e.g. APC cache).

4. Back up the Magento files and database to be able to revert changes in a couple of minutes in case of possible problems.

5. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find errors information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

6. Extract the extension and upload the files into the document root. Double check that all files were uploaded successfully into the correct directory.

7. Navigate to System > Cache Management. Press Flush Cache Storage button.

8. If the installer fails during the cache flushing then let us know the rror messages from the logs.

9. Check if the extension is recognized by Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

10. Check if the module conflicts with any 3rd party modules previously installed on your system.

Note, the conflict resolving service isn’t included in the support package. Please check the module for conflicts before opening the code.

11. Navigate to System > Manage Currency Rates or System > Manage Currency > Rates (if your Magento version is equal or above the 1.7.0.0). Make sure that the rates are populated. If not, then press the "Import" button or populate the rates manually. Save them by pressing the "Save Currency Rates" button.

12. Navigate to System > Index Management. Click Select All to select all index types and press the Submit button. If indexing fails then you could have a 3rd party module conflict. Let us know the full error messages from the logs for further information.

13. Create the directory var/GeoIP/ (the directory path is related to the document root). Download and extract the GeoLite City database into the directory created. As a result, the database file var/GeoIP/GeoLiteCity.dat should be accessible by the Magento installation.

14. Navigate to System > Configuration > Catalog > Warehouses. Enter configuration settings and save.

You made it!

Please don’t hesitate to contact us if you met troubles during the installation process.
