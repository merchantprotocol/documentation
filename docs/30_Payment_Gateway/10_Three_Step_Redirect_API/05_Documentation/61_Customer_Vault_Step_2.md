#### HTML Form Fields Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">HTML Form Fields</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>billing-cc-number<sup>*</sup></td>
        <td>Credit card number.</td>
    </tr>
    <tr>
        <td>billing-cc-exp<sup>*</sup></td>
        <td>Credit card expiration.<br>
            <span class="allowed">Format: MMYY</span></td>
    </tr>
    <tr>
        <td>billing-cvv</td>
        <td>Card security code.</td>
    </tr>
    <tr>
        <td>billing-account-name<sup>**</sup></td>
        <td>The name on the customer's ACH Account.</td>
    </tr>
    <tr>
        <td>billing-account-number<sup>**</sup></td>
        <td>The customer's bank account number.</td>
    </tr>
    <tr>
        <td>billing-routing-number<sup>**</sup></td>
        <td>The customer's bank routing number.</td>
    </tr>
    <tr>
        <td>billing-account-type</td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>billing-entity-type</td>
        <td>The customer's ACH account entity.<br>
            <span class="allowed">Values: 'personal' or 'business'</span></td>
    </tr>
    <tr>
        <td>billing-micr<sup>†</sup></td>
        <td>Physical check's Magnetic ink strip, on supported check processors. For use with 'POP' or 'ARC' sec-code.</td>
    </tr>
    <tr>
        <td>billing-track-1<sup>***</sup></td>
        <td>Raw magnetic stripe data, track 1.</td>
    </tr>
    <tr>
        <td>billing-track-2<sup>***</sup></td>
        <td>Raw magnetic stripe data, track 2.</td>
    </tr>
    <tr>
        <td>billing-track-3<sup>***</sup></td>
        <td>Raw magnetic stripe data, track 3.</td>
    </tr>
    <tr>
        <td>billing-magnesafe-track-1<sup>***</sup></td>
        <td>Raw MagTek Magensa encrypted reader data.</td>
    </tr>
    <tr>
        <td>billing-magnesafe-track-2<sup>***</sup></td>
        <td>Raw MagTek Magensa encrypted reader data.</td>
    </tr>
    <tr>
        <td>billing-magnesafe-track-3<sup>***</sup></td>
        <td>Raw MagTek Magensa encrypted reader data.</td>
    </tr>
    <tr>
        <td>billing-magnesafe-ksn<sup>***</sup></td>
        <td>Raw MagTek Magensa encrypted reader data.</td>
    </tr>
    <tr>
        <td>billing-magnesafe-magneprint-status<sup>***</sup></td>
        <td>Raw MagTek Magensa encrypted reader data.</td>
    </tr>
    <tr>
        <td>billing-social-security-number<sup>****</sup></td>
        <td>Customer's social security number (Checked against bad check writers database if check verification is enabled).</td>
    </tr>
    <tr>
        <td>billing-drivers-license-number<sup>****</sup></td>
        <td>Driver's license number (Checked against bad check writers database if check verification is enabled).</td>
    </tr>
    <tr>
        <td>billing-drivers-license-dob<sup>****</sup></td>
        <td>Driver's license date of birth.</td>
    </tr>
    <tr>
        <td>billing-drivers-license-state<sup>****</sup></td>
        <td>Customer's driver's license state.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>billing-first-name</td>
        <td>Cardholder's first name, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-last-name</td>
        <td>Cardholder's last name, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-address1</td>
        <td>Cardholder's billing address, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-city</td>
        <td>Card billing city, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-state</td>
        <td>Card billing state/province, overwrites value if passed during step one.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>billing-postal</td>
        <td>Card billing postal code, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-country</td>
        <td>Card billing country code, overwrites value if passed during step one.<br>
            <span class="allowed">Format: CC/ISO 3166</span></td>
    </tr>
    <tr>
        <td>billing-phone</td>
        <td>Billing phone number, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-email</td>
        <td>Billing email address, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-company</td>
        <td>Cardholder's company, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-address2</td>
        <td>Card billing address, line 2, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>billing-fax</td>
        <td>Billing fax number, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-first-name</td>
        <td>Shipping first name, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-last-name</td>
        <td>Shipping last name, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-address1</td>
        <td>Shipping billing address, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-city</td>
        <td>Shipping city, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-state</td>
        <td>Shipping state/province, overwrites value if passed during step one.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>shipping-postal</td>
        <td>Shipping postal code, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-country</td>
        <td>Shipping country code, overwrites value if passed during step one.<br>
            <span class="allowed">Format: CC/ISO 3166</span></td>
    </tr>
    <tr>
        <td>shipping-phone</td>
        <td>Shipping phone number, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-email</td>
        <td>Shipping email address, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-company</td>
        <td>Shipping company, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-address2</td>
        <td>Shipping address, line 2, overwrites value if passed during step one.</td>
    </tr>
    <tr>
        <td>shipping-fax</td>
        <td>Shipping fax number, overwrites value if passed during step one.</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Required for keyed credit card transactions.
** 	Required for ACH transactions.
*** 	Used for retail transactions. Variables used dependent on swipe device.
**** 	Required for check verification.
† 	Required for check scanning.</pre>

#### HTML Form Fields Response

Once the Payment Gateway has collected the customer's sensitive payment details, the customer's browser will immediately be redirected back to the `redirect-url` on your web server. A variable named `token-id` will be appended to the `redirect-url` in the GET query string as described below:

	https://redirect-url/?token-id=[token]