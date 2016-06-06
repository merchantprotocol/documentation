In administrator panel: System -> Configuration -> General -> Currency Setup -> Geo Filter.

![Currency Geo Filter - Configuration](currency-geo-filter-configuration.png) 

You can see the set of options to control extension behaviour here.

### Enabled

Enable / disable extension. The system does currencies handling by default if extension is disabled. Although Currency Geo Filter manager remains available.

### Readjust Order Currency

If enabled then currency will be corrected during the checkout process according to the method chosen below.

### Readjust Order Currency By

Readjust order currency method selector. Available options are: Shipping Address, Billing Address. Shipping address option means currency must be recalculated according to the shipping address entered. Billing Address makes currency dependent on billing address accordingly.

The system allows to adjust currency within the checkout process automatically. Lets look at sample. The visitor comes form Germany. Germany has Euro currency allowed only. But the shipping address is USA. The currency will be switched to the US Dollar in this case automatically (optionally). The same option is available for billing address as well. This way the administrator has currencies advanced control.