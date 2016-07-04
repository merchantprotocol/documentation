This supplementary tool allows you to detect the visitor’s location as soon as he comes to the website. The location can be either the default shipping address, the geolocated coordinates, the geolocated IP address, the default location or manualy entered by the visitor depending on needs.


### Configuration

In administrator panel: System > Configuration > Customers > Customer Locator

![Zones Manager - Customer Locator - Configuration](zone-customer-locator-configuration-700x478.png) 

You can see the Options and the Default Location sections there.

### Options

#### Allow to Modify

If the option is enabled, then the customer will be able to enter/correct his location manually on the frontend side.

#### Use Default Shipping Address

If the option is enabled, then the customer default shipping address will be used as the current location. This option has the highest priority in the address determination process.

#### Use Coordinates Geolocation

If the option is enabled, then the customer becomes geolocated by coordinates through the Google Geocoder service. The client's browser provides coordinates if it is allowed by the customer. The coordinate's geolocation takes effect if the default shipping address isn’t set or is disabled.

#### Use IP Geolocation

If the option is enabled, the customer is geolocated by IP through the MaxMind GeoCity database. The IP geolocation takes effect if the default shipping address isn’t set or is disabled and coordinates geolocation is disbaled.

#### Adjust Address on Checkout

This option allows the customer's location to be updated if the actual checkout address is different.

#### Allowed Attributes

The Address attribute's list, which customers are able to change manually.

#### Required Attributes

Required address attributes to be entered by a customer.

#### Default Address

The default visitor’s location can be defined here. Country, Region / State, Zip / Postal Code, City can be entered. The system sets visitor’s location to default if none of the other methods are allowed to determine the customer location.

 
### Manual Selection

![Zones Manager - Customer Locator - Manual Selection](zone-customer-locator-manual-location-700x465.png)

This function allows customer to change his location manually.

 
### IP Geolocation

In administrator panel: System > Configuration > Customers > IP Geolocation

![Zones Manager - Customer Locator - IP Geolocation](zone-customer-locator-ip-geolocation-700x493.png) 

IP Geolocator options are placed here: Use PHP Extension, Database File. This function is based on MaxMind GeoCity database. Use PHP Extension option directs system to use built-in geoip PHP extension in the first turn. If no geoip PHP extensions is installed correctly with GeoCity database or Use PHP Extension option is set to No then function relies on the own database. The correct GeoCity database path must be entered in Database File option if no geoip PHP extension is installed properly with GeoCity database.

This supplementary tool allows to detect visitor’s location as soon as he / she comes to the website. The location can be either default shipping address or geolocated IP address or the default location or manualy entered by the visitor depending on needs.

In administrator panel: System > Configuration > Customers > Customer Locator

![Customer Locator - Configuration - Customer Locator](customer-locator-configuration-customer-locator-700x543.png) 

You can see Options and Default Location sections there.

**Options**

 - Allow to Modify – If option is enabled then customer will be able to enter / correct his / her location on the frontend side.
 - Select Default Shipping Address – If option is enabled then customer default shipping address will be used as the current location instead of geolocated IP address geolocated (if default shipping address is present).
 - Allowed Attributes – Address attributes list to display in Your Location box.
 - Required Attributes – Required address attributes.

**Default Address**

The default visitor’s location can be defined here. Country, Region / State, Zip / Postal Code, City can be entered. The system sets visitor’s location to default if IP address geolocation failed (it is possible for small percentage of visitors).

On the frontend:

![Customer Locator - Products](customer-locator-products-700x468.png)
 
