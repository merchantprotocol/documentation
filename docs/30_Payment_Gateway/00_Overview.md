Merchant Protocol offers a comprehensive payment gateway API for Mobile, POS and Ecommerce transactions. Here's an overview of the integration methods that we offer.

### [Three Step Redirect API](https://merchantprotocol.com/user_manuals/Payment_Gateway/Three_Step_Redirect_API)

The three step API provides the highest level of protection for the store owner. Customers will still enter their credit card information into a form that resides on your server, but the form will post the information to our servers. Once we've received the customers data securely, we'll redirect the customer back to your checkout method for them to complete the order. Upon redirecting the user back to your checkout method we will provide your store with a transaction-id that may be used to charge the temporarily stored customer card.

### [Direct Post API](https://merchantprotocol.com/user_manuals/Payment_Gateway/Direct_Post_API)

Our Direct Post functionality works as most payment gateways do. Your customer will fill out the credit card information on your website and that information will be posted to your servers. Once you've received valid information you'll post that information to Merchant Protocol to be processed or stored.

#### [Direct Post Emulator](https://merchantprotocol.com/user_manuals/Payment_Gateway/Gateway_Emulator)

We also have an Authorize.net emulator which will allow you to directly post to Merchant Protocol using your authorize.net formatted requests.

### [Mobile API](https://merchantprotocol.com/user_manuals/Payment_Gateway/Mobile_API)

The Mobile API works with a number of credit card swiping devices which will allow you to send the received swipe data to Merchant Protocol to be processed.

### [Query API](https://merchantprotocol.com/user_manuals/Payment_Gateway/Query_API)

While our online reporting interface allows merchants to quickly and easily retrieve detailed information about past transactions, a need for additional flexibility may be required. For example, a merchant may have custom accounting software that requires up-to-date information about the settlement status of all credit card transactions every day.