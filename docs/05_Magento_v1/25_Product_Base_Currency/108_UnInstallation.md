1. Make sure that the PHP compilation function is disabled. This procedure was described in the installation topic (see 2nd step).

2. Make sure that the files and database's additional caching tools are disabled (e.g. APC cache).

3. Back up the Magento files and database to be able to revert changes in a couple of minutes in case of possible problems.

4. Enable Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find errors information in files: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

5. Open file app/etc/modules/Innoexts_ProductBaseCurrency.xml (the file path is related to the document root)

6. Replace
```<active>true</active>```

with
```<active>false</active>```

7. If you don’t have any other extensions installed that depend on the same sub-module, then repeat the steps above for app/etc/modules/Innoexts_Core.xml.

Note, you can find the list of modules that the current module depends on under the next XML node: config > modules > depends

8. Run MySQL queries from the file: sql/Innoexts/ProductBaseCurrency/uninstall.sql (the file path is related to the document root). If some query fails due to the database inconsistency for some reason then continue from the next query after the failed one and so on.

Note, if the database tables are prefixed,then the file should be run instead: sql/Innoexts/ProductBaseCurrency/prefixed_uninstall.sql. Replace [prefix] with your tables prefix.

9. Navigate to System > Cache Management. Press Flush Cache Storage button.

10. If the cache flushing fails then let us know the error messages from the logs.

11. Make sure the extension is listed in Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

12. Navigate to System > Index Management. Click Select All to select all index types and press the Submit button.
