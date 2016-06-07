#### Acquiring a Public Key

a. After logging into the Payment Gateway, navigate to Settings -> Security Keys -> View Mobile SDK Key. You can click on the Java example button to get a version that can easily be copied and pasted into your project.

b. Use the Query API. In order to get the public key, you will need to use 'report_type=sdk_key'. The key will be returned in the <sdk_key> tag.

#### Encrypting a Card

The following is an example of the entire encryption process:

	import com.SafeWebServices.PaymentGateway.PGEncrypt;
	
	PGEncrypt pg = new PGEncrypt();
	Pg. setKey(
	    "***999|MIIEEjCCA3ugAwIBAgIBADANBgkqhkiG9w0BAQQFADCBvTELMAkGA1UEBh"
	    "MCVVMxETAPBgNVBAgTCElsbGlub2lzMRMwEQYDVQQHEwpTY2hhdW1idXJnMRgwFg"
	                    [Several lines omitted]
	    "cNAQEEBQADgYEAKY8xYc91ESNeXZYTVxEsFA9twZDpRjSKShDCcbutgPlC0XcHUt"
	    "a2MfFPsdgQoq0I8y1nEn1qJiOuEG1t9Uwux4GAvAPzsWSsKyKQkZhqxrxkJUB39K"
	    "Pg57pPytfJnlQTgYiSrycCEVHdDvhk92X7K2cab3aVV1+j0rKlR/Sy6b4=***");
	
	
	PGKeyedCard cardData = new PGKeyedCard(cardNumber, expiration, cvv);
	Boolean includeCVV = true;
	String encryptedCardData = pg.encrypt(cardData, includeCVV);

In this example, 'encryptedCardData' would now contain a string that can be passed to the Payment Gateway in place of credit card information. The parameter name to use when passing this value is 'encrypted_payment'.

For example, a simple DirectPost API string would look something like this:

(This example assumes your Merchant server is running a PHP script that has received the encrypted card data through a POST parameter called 'cardData'.)

	//Business logic, validation, etc.  When ready to process the payment...
	$cardData = $_POST['cardData'];
	$postString = "username=demo&password=1234&type=sale&amount=1.00&encrypted_payment=$cardData";
	
	//Post to Gateway            

We suggest using POST instead of GET to reduce the possibility of the data being kept in a log file. For more information on how to communicate with the Payment Gateway, see the API documentation.