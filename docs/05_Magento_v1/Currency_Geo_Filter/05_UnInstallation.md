1. Open file app/etc/modules/Innoexts_CurrencyGeoFilter.xml

2. Replace

```<active>true</active>```

with

```<active>false</active>```

3. If you don’t have any InnoExts extension installed, then repeat the above steps for app/etc/modules/Innoexts_CustomerLocator.xml, app/etc/modules/Innoexts_GeoIp.xml and Innoexts_InnoCore.xml:

4. Run MySQL query:

	DROP TABLE `currencygeofilter_currency_country`;
	DELETE FROM `core_resource` WHERE `code` = 'currencygeofilter_setup';

5. Refresh the cache

 
