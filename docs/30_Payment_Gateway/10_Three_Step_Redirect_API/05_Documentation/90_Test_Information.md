#### Transaction Testing Credentials

Transactions can be tested using one of two methods. First, transactions can be submitted to any merchant account that is in test mode. Keep in mind that if an account is in test mode, all valid credit cards will be approved but no charges will actually be processed.

The Payment Gateway demo account can also be used for testing at any time. Please use the following api-key for testing with this account:

	api-key: 	2F822Rw39fx762MaV7Yy86jXGTC7sCDy

#### Transaction POST URL

In step one and step three, transaction details should be POST'ed using XML to the following URL:

	POST URL 	https://merchantprotocol.transactiongateway.com/api/v2/three-step
	
#### Test Data

Transactions can be submitted using the following information:

Test Card | Card Number
----- | -----
Visa: | 4111111111111111
MasterCard: | 5431111111111111
Discover: | 6011601160116611
American Express: | 341111111111111
Credit Card Expiration: | 10/25
account (ACH): | 123123123
routing (ACH): | 123123123
amount | 1.00 (Amounts under 1.00 generate failure).

#### Triggering Errors in Test Mode

 - To cause a declined message, pass an amount less than 1.00.
 - To trigger a fatal error message, pass an invalid card number.
 - To simulate an AVS match, pass 888 in the address1 field, 77777 for zip.
 - To simulate a CVV match, pass 999 in the cvv field.
