1. Make sure that the PHP compilation function is disabled. This procedure was described in the installation topic (see 2nd step).

2. Make sure that the files and database's additional caching tools are disabled (e.g. APC cache).

3. Back up the tMagento files and database to be able to revert changes in a couple of minutes in case of possible problems.

4. Enable the Magento error logs: System > Configuration > Advanced > Developer > Log Settings, Set Enabled to Yes. You can find erro information in the file: var/log/system.log and var/log/exception.log (the file paths are related to the document root).

5. Open file app/etc/modules/MP_PaymentMethodPricing.xml (the file path is related to the document root)

6. Replace
```<active>true</active>```

with
```<active>false</active>```

Note, you can find the list of modules that the current module depends on under the next XML node: config > modules > depends

7. Run MySQL queries from the file: sql/mp_paymentmethodpricing/uninstall.sql

Note, if the database tables are prefixed, then the file should be run instead: sql/mp_paymentmethodpricing/prefixed_uninstall.sql. Replace [prefix] with your tables prefix.

8. Navigate to System > Cache Management. Press the Flush Cache Storage button.

9. If the cache flushing fails, let us know the error messages from the logs.

10. Check if  the extension is listed in Magento: System > Configuration > Advanced > Advanced. The module should be listed there.

11. Navigate to System > Index Management. Click "Select All" to select all index types and press the Submit button.
