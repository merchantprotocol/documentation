1. Open file app/etc/modules/Innoexts_ZonePricing.xml

2. Replace
```<active>true</active>```

with
```<active>false</active>```

3. If you don’t have any InnoExts extension installed, then repeat the above steps for `app/etc/modules/Innoexts_CustomerLocator.xml`, `app/etc/modules/Innoexts_GeoIp.xml` and Innoexts_InnoCore.xml:

4. Run MySQL query:

	DROP TABLE IF EXISTS `catalog_product_zone_price`;
	DELETE FROM `core_resource` WHERE `code` = 'zonepricing_setup';

5. Flush & Refresh the cache

6. Regenerate Product Prices index

