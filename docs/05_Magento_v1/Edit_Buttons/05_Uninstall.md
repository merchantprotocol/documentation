1. Make sure that the PHP compilation function is disabled. This procedure was described in the installation topic (see 2nd step).

2. Make sure that the files and database caching tools are disabled (e.g. APC cache).

3. Back up the Magento files and database to be able to revert changes in a couple of minutes in case of possible problems.

4. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find error information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

5. Run script from the file: sh/mp/Shortcut/uninstall.sh (the file path is related to the document root). This process will delete all files belonging to the module, clear the cache and run a full reindex.

6. Navigate to System > Cache Management. Press Flush Cache Storage button.

7. If the cache flushing fails, then let us know the error messages from the logs.

8. Check if the extension isn’t listed in Magento anymore: System > Configuration > Advanced > Advanced. The module should be listed there.
