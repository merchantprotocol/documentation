## Installation

First of all, we would like to suggest that you keep a development copy of the live installation for the new and updated extensions. Follow the steps listed below:

1. Make sure that your system corresponds to the Magento requirements.

2. Make sure that the PHP compilation function is disabled. In the admin panel, navigate to System > Tools > Compilation. If the Compiler Status field equals Enabled, then press the "Disable" button or:

Open file `includes/config.php` (the file path is related to the document root).

Replace

```define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

with

```#define('COMPILER_INCLUDE_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'src');```

3. Make sure that the files and database caching tools are disabled (e.g. APC cache).

4. Back up the Magento files and database to be able to revert changes in a couple of minutes in case of problems.

5. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find errors information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

6. Extract the extension and upload the files into the document root. Double check that all files were uploaded successfully into the correct directory.

7. Navigate to System > Cache Management. Press the Flush Cache Storage button.

8. If the installer fails during the cache flushing, let us know the error messages from the logs.

9. Check if the extension is recognized by Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

10. Check if the module conflicts with any 3rd party modules previously installed on your system.

Note, the conflict resolving service isn’t included in the support package. Please check the module for conflicts before opening the code.

13. Navigate to System > Configuration > Merchant Protocol > Shortcut. Enter configuration settings and save.

You made it!

Please don’t hesitate to contact us if you experience troubles during the installation process.
