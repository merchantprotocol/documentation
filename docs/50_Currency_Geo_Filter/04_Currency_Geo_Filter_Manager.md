You may find Currency Geo Filter manager page under System -> Currency Geo Filter in administrator panel.

![Currency Geo Filter - Manager](currency-geo-filter-manager.png) 

This screen allows to assign each currency to multiple countries. We may have the next cases per country.

### The country assigned to multiple currencies

To be correct some currencies assigned to the same country in this case. The visitor will be permitted to select the most appropriate currency among allowed. The first matching currency enabled by default unless default store currency is present in allowed currencies list. For example administrator selects Germany for Euro and US Dollar currencies. Then any visitor coming from Germany address has 2 currency switcher options: Euro and US Dollar. Euro is active by default as first matching currency unless US dollar is default store currency

### The country assigned to the single currency

The system switches currency automatically in this case and no currency switcher displayed for visitor. For example the Germany was selected for Euro currency only. Visitors coming from Germany are seeing prices in Euro and no currency switcher box is displaying in this case.

### The country is not assigned to any currency

The default currency will be applied for visitors and no currency switcher box displayed.