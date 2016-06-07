#### Supported Processors

Currently Apple Pay is supported only on the Vital platform.

#### Configuring Apple Pay

**Creating an Apple Merchant ID**

First, you must obtain an Apple Merchant ID before you can generate the Certificate Signing Request that Apple requires. You will need to set up an Apple Merchant ID in your iOS Developer Account. Follow these steps to complete the setup:

1. Go to Apple's Developer Portal and log in to the Member Center to create a new Merchant ID.
1. Navigate to the Certificates, Identifiers, and Profiles area of the Member Center, and then begin the Register Merchant ID process.
1. You must then set the Apple Merchant ID within your gateway Control Panel under Settings -> Apple Pay.

**Generating the Certificate Signing Request**

Next, you will need to associate a Certificate with the Merchant ID in Apple's Developer Portal. After downloading the Certificate Signing Request from the gateway's options page, follow these steps.

1. In Apple's Developer Portal, click on the Merchant ID and then click "Edit".
1. Click "Create Certificate".
1. You are obtaining a CSR file from a Payment Provider so you will not have to create one. Click "Continue" to proceed to the upload page.
1. Click "Choose File..." and select the Gateway.certSigningRequest file you downloaded from the gateway's options page.

#### How to Obtain Apple Pay Payment Data

[PassKit](https://developer.apple.com/library/ios/documentation/UserExperience/Reference/PassKit_Framework/index.html) provides the payment data in the (PKPayment *)payment that is returned to your app's paymentAuthorizationViewController:didAuthorizePayment:completion method. The Apple Pay encrypted payment data is found in payment.token.paymentData.

payment.token.paymentData is a binary (NSData) object, so you must encode it as a hexadecimal string before it can be passed to the Gateway.

#### Passing Apple Pay Payment Data

To submit a payment with Apple Pay, send the encrypted token data into the applepay_payment_data variable. There is no need to decrypt the data in your app. Only the Gateway will have access to the private key that can decrypt the token.

#### Notes

When passing in applepay_payment_data, you should not include the variables ccnumber or ccexp; they are extracted from the token data.

**Important Note:** The authorization amount must match the amount the customer approves in the app. If you pass in a currency, that must also match the currency approved in the app. If omitted, the currency from the app is used.

For working example code, including how to obtain the PKPayment object and how to pass a simple transaction to the Gateway, [download the sample project.](https://merchantprotocol.transactiongateway.com/gw/merchants/resources/integration/download.php?document=applepayexample)

#### Variables

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>applepay_payment_data</td>
        <td>
            The encrypted Apple Pay payment data (payment.token.paymentData) from PassKit encoded as a hexadecimal string                </td>
    </tr>
</tbody></table>
</div>

#### Troubleshooting

If you receive the error "Failed to decrypt Apple Pay data. Ensure that the Apple Pay Merchant ID is correct in the Gateway Settings and that the certificate was generated from a Gateway Certificate Signing Request.", try these steps:

1. Verify that the Merchant ID that Apple has in the developer portal exactly matches the Merchant ID in the Gateway's settings.
1. Verify that your app's PKPaymentRequest's merchantIdentifier exactly matches the Merchant ID in the Gateway's settings.
1. Ensure that the correct Merchant ID is checked in the Apple Pay section of the Capabilities tab in your project's target settings.
1. Try creating a new Merchant ID. Reusing an existing Merchant ID with a new certificate may sometimes cause issues with encryption.
