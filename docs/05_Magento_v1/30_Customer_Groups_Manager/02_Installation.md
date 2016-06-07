First of all we would like to suggest you to keep a development copy of a live installation for a new or updated extensions testing. Follow the steps listed below.

1. Make sure that your system corresponds to Magento requirements. Additionally, mbstring PHP extension is required for the geolocation function.

2. Make sure that PHP compilation function is disabled. In admin panel navigate to System > Tools > Compilation. If Compiler Status field equals to Enabled then press Disable button or:

Open file includes/config.php (the file path is related to the document root).

Replace
```define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

with
```#define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

3. Make sure that files and database additional caching tools are disabled (e.g. APC cache).

4. Back up Magento files and database to be able to revert changes in a couple of minutes in case of possible problems.

5. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find errors information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

6. Extract extension and upload files into the document root. Double check that all files were uploaded successfully into the correct directory.

7. Navigate to System > Cache Management. Press Flush Cache Storage button.

8. If installer fails during the cache flushing then let us know error messages from the logs.

9. Check if extension is recognized by Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

10. Check if the module conflicts with 3rd party modules previously installed on your system.

Note, conflicts resolving service isn’t included into the support package. Please, check the module for conflicts before open code purchasing with an encoded trial requested (php files are encoded only).

11. Navigate to System > Configuration > Customers > Customer Groups. Enter configuration settings and save.

You made it!

Please don’t hesitate to contact us if you met troubles during the installation process.