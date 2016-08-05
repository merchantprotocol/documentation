In administrator panel: System -> Configuration -> General -> Currency Setup -> Geo Filter.

![Currency Geo Filter - Configuration](currency-geo-filter-configuration.png) 

You can see the set of options to control the extension behaviour here.

### Enabled

Enable / disable extension. The system manages currency handling by default if the extension is disabled. Although the Currency Geo Filter manager remains available.

### Read only the Order Currency

If enabled, the currency will be corrected during the checkout process, according to the method chosen below.

### Read Order Currency 

Available options are: Shipping Address, Billing Address. Shipping address option means currency must be recalculated according to the shipping address entered. Billing Address makes currency dependent on billing address accordingly.

The system allows you to adjust the currency within the checkout process automatically. Lets look at a sample. The visitor comes form Germany. Germany has a Euro currency allowed. But the shipping address is in USA. The currency will be switched to the US Dollar in this case automatically (optionally). The same option is available for the billing address as well. This way the administrator has advanced control with currencies.
