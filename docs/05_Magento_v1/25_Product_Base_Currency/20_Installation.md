We would like to suggest that you keep a development copy of a live installation for a new or updated extensions testing. Follow the steps listed below.

1. Make sure that your system corresponds to Magento requirements.

2. Make sure that the PHP compilation function is disabled. In the admin panel navigate to System > Tools > Compilation. If the Compiler Status field equals Enabled, then press the Disable button or:

Open file includes/config.php (the file path is related to the document root).

Replace
```define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

with
```#define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

3. Make sure that the files and database's additional caching tools are disabled (e.g. APC cache).

4. Back up the Magento files and database to be able to revert changes in a couple of minutes in case of possible problems.

5. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find errors information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

6. Extract extension and upload the files into the document root. Double check that all files were uploaded successfully into the correct directory.

7. Navigate to System > Cache Management. Press the Flush Cache Storage button.

8. If the installer fails during the cache flushing, let us know the error messages from the logs.

9. Check if the extension is recognized by Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

10. Check if the module conflicts with 3rd party modules previously installed on your system.

Note, a conflicts resolving service isn’t included into the support package. Please, check the module for conflicts before opening the code.

11. Navigate to System > Manage Currency Rates or System > Manage Currency > Rates (if your Magento version is equal or above the 1.7.0.0). Make sure that rates are populated. If not, then press the Import button or populate rates manually, save them by pressing th eSave Currency Rates button.

12. Navigate to System > Index Management. Click Select All to select all index types and press the Submit button. If indexing fails, then you have 3rd party module conflicts, let us know the full error message from the logs for further information.

You made it!

Please don’t hesitate to contact us if you've had trouble during the installation process.
