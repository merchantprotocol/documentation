#### Acquiring a Public Key

1. After logging into the Payment Gateway, navigate to Settings->Security Keys->View Mobile SDK Key. You can click on the Objective-C example link to get a version that can easily be copied and pasted into your project.
1. Use the Query API. In order to get the public key, you will need to use 'report_type=sdk_key'. The key will be returned in the <sdk_key> tag.

#### Encrypting a Card

	#import "PGEncrypt.h"
	#import "PGCards.h"
	
	PGEncrypt encryption = [[PGEncrypt alloc] init];
	[encryption setKey:
	    @"***999|MIIEEjCCA3ugAwIBAgIBADANBgkqhkiG9w0BAQQFADCBvTELMAkGA1UEBh"
	    "MCVVMxETAPBgNVBAgTCElsbGlub2lzMRMwEQYDVQQHEwpTY2hhdW1idXJnMRgwFg"
	                    [Several lines omitted]
	    "cNAQEEBQADgYEAKY8xYc91ESNeXZYTVxEsFA9twZDpRjSKShDCcbutgPlC0XcHUt"
	    "a2MfFPsdgQoq0I8y1nEn1qJiOuEG1t9Uwux4GAvAPzsWSsKyKQkZhqxrxkJUB39K"
	    "Pg57pPytfJnlQTgYiSrycCEVHdDvhk92X7K2cab3aVV1+j0rKlR/Sy6b4=***"];
	
	
	PGCard *cardData = [[PGKeyedCard alloc] initWithCardNumber:cardNumberField.text
	                                            expirationDate:expirationField.text
	                                                       cvv:cvvField.text];
	
	NSString *encryptedCardData = [encryption encrypt:cardData includeCVV:NO];

encryptedCardData will contain a string that can be passed to the Payment Gateway in place of credit card information. The parameter name to use when passing this value through DirectPost is "encrypted_payment". For example, a simple DirectPost API string would look something like this:

(This example assumes your Merchant server is running a PHP script that has received the encrypted card data through a POST parameter called 'cardData'.)


	//Business logic, validation, etc.  When ready to process the payment...
	$cardData = $_POST['cardData'];
	$postString = "username=demo&password=1234&type=sale&amount=1.00&encrypted_payment=$cardData";
	
	//Post to Gateway            

For more information on how to communicate with the Payment Gateway, see the API documentation.