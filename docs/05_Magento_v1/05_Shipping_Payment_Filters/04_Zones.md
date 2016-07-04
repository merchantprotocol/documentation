In administrator panel: Zones -> Manage Zones

Here you can create new customer zones by pressing the Add New Zone button or by editing existing ones by clicking the Edit link. The Default zone is created during the installation. This zone is applied in case there aren't any zones matching a visitor and it can’t be removed from the system.

![Zones Manager - Manage Zones](zone-zone-700x412.png)
 
### General

![Zones Manager - Manage Zones - Add / Edit Zone - General](zone-zone-edit-general-700x536.png)

The only tab that is available for the create new zone process is General. Here you fill in zone general details

#### Code

Zone code is the unique human readable alternative to the identifier attribute.

#### Name

Zone display name.

#### Description

Zone description. This attribute is for the internal use of the administrator. 

#### Priority

Zone priority is needed if there is  more than 1 zone matching a customer location (zones are intersecting). The zone with the lowest priority value is assigned to the customer.

#### Default Currency

This is the currency that is selected automatically for a customer's zone. the Default Currency option must be selected in Currencies.

#### Default Store

This is the store which a customer is being redirected to initially. The value must be selected in Stores.

#### Default Payment Method

The payment method that is selected by default for the checkout process. The value must be selected in Payment Methods.

#### Default Shipping Method

The shipping method that is selected by default for the checkout and shipping estimate functions. The value must be selected in Shipping Methods.

#### Minimum Order Amount

The minimum order amount for the zone. Select the Use Config Minimum Order Amount checkbox if the value should be similar to that is set in the configuration globally.

#### Default Redirect URL

The default redirection URL is needed if a store isn’t allowed for a customer. Check Use Config Default Redirect URL to inherit the value that is set in the configuration globally.

### Subzones

![Zones Manager - Manage Zones - Add / Edit Zone - Subzones](zone-zone-edit-subzones-700x359.png)

Each zone can include a number of subzones in it for the flexibility. Each subzone can be defined as country, region, exact zip code or zip codes range.

Note, region select is available for the specific countries only with regions data installed initially.

### Currencies

![Zones Manager - Manage Zones - Add / Edit Zone - Currencies](zone-zone-edit-currencies-700x235.png)

This is the allowed currencies list for a specific zone. The store base currency is available independently of this attribute. The currency must be enabled in the configuration initially: System -> General -> Currency Setup -> Currency Options -> Allowed Currencies.

### Stores

![Zones Manager - Manage Zones - Add / Edit Zone - Stores](zone-zone-edit-stores-700x287.png)

Allowed stores list for the zone.

### Payment Methods

![Zones Manager - Manage Zones - Add / Edit Zone - Payment Methods](zone-zone-edit-payment-methods-700x288.png)
 

Allowed payment methods list for the zone. The payment method must be previously enabled in the Payment Methods configuration settings section: System -> Configuration -> Sales -> Payment Methods.

### Shipping Methods

![Zones Manager - Manage Zones - Add / Edit Zone - Shipping Methods](zone-zone-edit-shipping-methods-700x565.png)
 

Allowed shipping methods list for the zone. The shipping carrier must be previously enabled in the Shipping Methods configuration settings section: System -> Configuration -> Sales -> Shipping Methods.

### Product Categories

![Zones Manager - Manage Zones - Add / Edit Zone - Product Categories](zone-zone-edit-product-categories-700x244.png) 

The administrator is able to overwrite the available product category list depending on the zone here.

Note, the product category availability doesn’t affect the product's availability itself.

### Products

![Zones Manager - Manage Zones - Add / Edit Zone - Products](zone-zone-edit-products-700x417.png) 

The list of products enabled for the zone. The zone can be enabled for the specific product in the product's manager.
