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

#### Use Coordinate Geolocation

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

This function allows the customer to change his location manually.

 
### IP Geolocation

In administrator panel: System > Configuration > Customers > IP Geolocation

![Zones Manager - Customer Locator - IP Geolocation](zone-customer-locator-ip-geolocation-700x493.png) 

The IP Geolocator options are placed here: Use PHP Extension, Database File. This function is based on the MaxMind GeoCity database. The PHP Extension option directs the system to use the built-in geoip PHP extension. If the geo-ip PHP extensions aren't installed correctly with the GeoCity database or the Use PHP Extension option, then the function relies on it's own database. The correct GeoCity database path must be entered in the Database File option if there aren't any geo-ip PHP extension installed properly with the GeoCity database.

This supplementary tool allows you to detect a visitor’s location as soon as he comes to the website. The location can be either the default shipping address, geolocated IP address, default location or be manualy entered by the visitor.

In administrator panel: System > Configuration > Customers > Customer Locator

![Customer Locator - Configuration - Customer Locator](customer-locator-configuration-customer-locator-700x543.png) 

You can see Options and Default Location sections there.

**Options**

 - Allow to Modify – If the option is enabled, the customer will be able to enter / correct his location on the frontend side.
 - Select Default Shipping Address – If this option is enabled then the customer's default shipping address will be used as the current location instead of the geolocated IP address (if default shipping address is present).
 - Allowed Attributes – Address attributes list to display in "Your Location" box.
 - Required Attributes – Required address attributes.

**Default Address**

The default visitor’s location can be defined here. Country, Region / State, Zip / Postal Code, City can be entered. The system sets the visitor’s location to default if the IP address geolocation failed (it is possible for a small percentage of visitors).

On the frontend:

![Customer Locator - Products](customer-locator-products-700x468.png)
 
