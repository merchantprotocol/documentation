### Enable Currencies

We will describe how to add more currencies to the system here. Please note, this feature is a standard Magento Community Edition function.

In administrator panel: System -> Configuration -> General -> Currency Setup -> Allowed Currencies.

![Currency - Configuration - Currency Setup - Currency Options - Allowed Currencies](advanced-pricing-currency-configuration-currency-setup-allowed-currencies-700x423.png) 

Choose as many currencies as you need. If you have a wide range of international consumers you will need a list of all your customers money units. Make the list of all required currencies.

In administrator panel: System -> Manage Currency Rates or System -> Manage Currency -> Rates (if your Magento version is equal or above 1.7.0).

![Currency - Manage Currency Rates](advanced-pricing-currency-manage-currency-rates-700x204.png) 

Now you can set the currency rates that are beneficial (most appropriate) to you manually or import rates from a service like Webservicex. Save results.

So, you can choose as many currencies as you want. But if your currency list is too long you may limit it with the Currency Geo Filter extension. It will let your customer select currencies from the short list of monetary units which are common in their region.

### Price

You can overwrite the product price for each currency separately.

In administrator panel: Catalog -> Manage Products -> Edit Product -> Prices -> Price Per Currency.

![Currency - Price - Manage Products - Edit Product - Prices](advanced-pricing-currency-price-manage-products-edit-product-prices-700x381.png) 

Uncheck appropriate Default check box if you need to overwrite any currency price. If Default checkbox is marked then currency price will be dynamically calculated according to currency rates (default behaviour of Magento). Recalculate by function may assist you to overwrite currencies prices by desired currency. Check Recalculate by checkbox and select primary currency you want to use for recalculation. Once primary currency changed other currencies prices are coming updated depending on rates automatically.

Now when a customer comes to your store and selects currency he will see next:

![Currency - Price - Products](advanced-pricing-currency-price-products-700x547.png)
 
### Special Price

You can overwrite the product special price for each currency separately, similar to the price described above.

In administrator panel: Catalog -> Manage Products -> Edit Product -> Prices -> Special Price Per Currency.

![Currency - Special Price - Manage Products - Edit Product - Prices](advanced-pricing-currency-special-price-manage-products-edit-product-prices-700x423.png) 

On the frontend:

![Currency - Special Price - Products](advanced-pricing-currency-special-price-products-700x532.png)
 
### Tier Price

Tier price can be applied either for each currency individually or for all currencies in base monetary unit.

In administrator panel: Catalog -> Manage Products -> Edit Product -> Prices -> Tier Price.

![Currency - Tier Price - Manage Products - Edit Product - Prices](advanced-pricing-currency-tier-price-manage-products-edit-product-prices-700x366.png) 

On the frontend:

![Currency - Tier Price - Products](advanced-pricing-currency-tier-price-products-700x469.png) 

![Currency - Tier Price - Product](advanced-pricing-currency-tier-price-product-700x468.png)

 