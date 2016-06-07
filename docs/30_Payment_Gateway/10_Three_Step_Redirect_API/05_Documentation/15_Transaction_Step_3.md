#### Complete Transaction XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">XML Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;complete-action&gt;</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>token-id<sup>*</sup></td>
        <td>Customer payment token returned during step two.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/complete-action&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Required
</pre>

#### Complete Transaction XML Response

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">XML Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;response&gt;</td>
    </tr>
    <tr>
        <td>result</td>
        <td>
            1=Transaction Approved<br>
            2=Transaction Declined<br>
            3=Error in transaction data or system error                    </td>
    </tr>
    <tr>
        <td>result-text</td>
        <td>Textual response.</td>
    </tr>
    <tr>
        <td>transaction-id</td>
        <td>Payment Gateway transaction ID</td>
    </tr>
    <tr>
        <td>result-code</td>
        <td>Numeric mapping of processor responses. (See Appendix 3)</td>
    </tr>
    <tr>
        <td>authorization-code</td>
        <td>Transaction authorization code.</td>
    </tr>
    <tr>
        <td>avs-result</td>
        <td>AVS response code. (See Appendix 1)</td>
    </tr>
    <tr>
        <td>cvv-result</td>
        <td>CVV response code. (See Appendix 2)</td>
    </tr>
    <tr>
        <td>action-type</td>
        <td>Action type that was initially specified.<br>
            <span class="allowed">Values: 'sale', 'auth', 'credit', 'validate', or 'offline'</span></td>
    </tr>
    <tr>
        <td>amount</td>
        <td>Total amount charged.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>amount-authorized</td>
        <td>Returns the amount authorized.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>ip-address</td>
        <td>Cardholder's IP address.<br>
            <span class="allowed">Format: xxx.xxx.xxx.xxx</span></td>
    </tr>
    <tr>
        <td>industry</td>
        <td>Industry classification of transaction.<br>
            <span class="allowed">Values: 'ecommerce', 'moto', or 'retail'</span></td>
    </tr>
    <tr>
        <td>billing-method</td>
        <td>Billing indicators used.<br>
            <span class="allowed">Values: 'recurring' or 'installment'</span></td>
    </tr>
    <tr>
        <td>processor-id</td>
        <td>Processor transaction was made through.</td>
    </tr>
    <tr>
        <td>sec-code</td>
        <td>ACH standard entry class codes.<br>
            <span class="allowed">Values: 'PPD', 'WEB', 'TEL', 'CCD', 'POP', or \ARC'</span></td>
    </tr>
    <tr>
        <td>descriptor</td>
        <td>Payment descriptor.</td>
    </tr>
    <tr>
        <td>descriptor-phone</td>
        <td>Payment descriptor phone.</td>
    </tr>
    <tr>
        <td>descriptor-address</td>
        <td>Set payment descriptor address on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-city</td>
        <td>Set payment descriptor city on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-state</td>
        <td>Set payment descriptor state on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-postal</td>
        <td>Set payment descriptor postal code on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-country</td>
        <td>Set payment descriptor country on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-mcc</td>
        <td>Set payment descriptor mcc on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-merchant-id</td>
        <td>Set payment descriptor merchant id on supported processors.</td>
    </tr>
    <tr>
        <td>descriptor-url</td>
        <td>Set payment descriptor url on supported processors.</td>
    </tr>
    <tr>
        <td>currency</td>
        <td>Transaction currency used. (Table 1.b)</td>
    </tr>
    <tr>
        <td>order-description</td>
        <td>Order description.</td>
    </tr>
    <tr>
        <td>customer-id</td>
        <td>Customer identification.</td>
    </tr>
    <tr>
        <td>customer-vault-id</td>
        <td>Customer vault id used or created during action.</td>
    </tr>
    <tr>
        <td>merchant-receipt-email</td>
        <td>Merchant receipt email.</td>
    </tr>
    <tr>
        <td>customer-receipt</td>
        <td>Customer email receipt sent.<br>
            <span class="allowed">Values: 'true' or 'false'</span></td>
    </tr>
    <tr>
        <td>partial-payment-balance</td>
        <td>Returns the payment's remaining balance.</td>
    </tr>
    <tr>
        <td>partial-payment-id</td>
        <td>Numeric identifier used to submit subsequent partial payment transactions.</td>
    </tr>
    <tr>
        <td>merchant-defined-field-#</td>
        <td>Merchant specified custom fields.<br>
            <span class="allowed">Format:                             &lt;merchant-defined-field-1&gt;Value&lt;/merchant-defined-field-1&gt;
            </span>
        </td>
    </tr>
    <tr>
        <td>tracking-number</td>
        <td>Shipping tracking number.</td>
    </tr>
    <tr>
        <td>shipping-carrier</td>
        <td>Shipping carrier.<br>
            <span class="allowed">Values: 'ups', 'fedex', 'dhl', or 'usps'</span></td>
    </tr>
    <tr>
        <td>order-id</td>
        <td>Order id.</td>
    </tr>
    <tr>
        <td>po-number</td>
        <td>Cardholder's purchase order number.</td>
    </tr>
    <tr>
        <td>tax-amount</td>
        <td>The sales tax included in the transaction amount associated with the purchase.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>shipping-amount</td>
        <td>Total shipping amount.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>ship-from-postal</td>
        <td>Postal/ZIP code of the address from where purchased goods are being shipped.</td>
    </tr>
    <tr>
        <td>summary-commodity-code</td>
        <td>A code representing the type of commodity being purchased. The acquirer or processor will provide a list of current codes.</td>
    </tr>
    <tr>
        <td>duty-amount</td>
        <td>Amount included in the transaction amount associated with the import of the purchased goods.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>discount-amount</td>
        <td>Amount included in the transaction amount of any discount applied to the complete order by the merchant.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>national-tax-amount</td>
        <td>The national tax amount included in the transaction amount.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>alternate-tax-amount</td>
        <td>Second tax amount included in the transaction amount in countries where more than one type of tax can be applied to the purchases.<br>
            <span class="allowed">Default: '0.00'</span><br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>alternate-tax-id</td>
        <td>Tax identification number of the merchant that reported the alternate tax amount.</td>
    </tr>
    <tr>
        <td>vat-tax-amount</td>
        <td>Contains the amount of any value added taxes which can be associated with the purchased item.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>vat-tax-rate</td>
        <td>Contains the tax rate used to calculate the sales tax amount appearing. Can contain up to 2 decimal places, ie 1% = 1.00.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>vat-invoice-reference-number</td>
        <td>Invoice number that is associated with the VAT invoice.</td>
    </tr>
    <tr>
        <td>customer-vat-registration</td>
        <td>Value added tax registration number supplied by the cardholder.</td>
    </tr>
    <tr>
        <td>merchant-vat-registration</td>
        <td>Government assigned tax identification number of the merchant from whom the goods or services were purchased.</td>
    </tr>
    <tr>
        <td>order-date</td>
        <td>Purchase order date.<br>
            <span class="allowed">Format: YYMMDD</span></td>
    </tr>
    <tr>
        <td>cardholder-auth</td>
        <td>3D Secure condition.<br>
            <span class="allowed">Values: 'verified' or 'attempted'</span></td>
    </tr>
    <tr>
        <td>eci</td>
        <td>E-commerce indicator.<br>
            <span class="allowed">Values: '2', '5', or '7'</span></td>
    </tr>
    <tr>
        <td>cavv</td>
        <td>Cardholder authentication verification value.<br>
            <span class="allowed">Format: base64 encoded</span></td>
    </tr>
    <tr>
        <td>xid</td>
        <td>Cardholder authentication transaction id.<br>
            <span class="allowed">Format: base64 encoded</span></td>
    </tr>
    <tr>
        <td>dup-seconds</td>
        <td>Override duplicate transaction detection checking in seconds.</td>
    </tr>
    <tr>
        <td>avs-reject</td>
        <td>Values are letters obtained under Settings-&gt;Address Verification in the control panel.</td>
    </tr>
    <tr>
        <td>cvv-reject</td>
        <td>Values are letters obtained under Settings-&gt;Card ID Verification in the control panel.</td>
    </tr>
    <tr>
        <td class="outerElement">&lt;billing&gt;</td>
        <td>The customer's billing information</td>
    </tr>
    <tr>
        <td>billing-id</td>
        <td>Billing id used or created for this action.</td>
    </tr>
    <tr>
        <td>first-name</td>
        <td>Cardholder's first name.</td>
    </tr>
    <tr>
        <td>last-name</td>
        <td>Cardholder's last name.</td>
    </tr>
    <tr>
        <td>address1</td>
        <td>Cardholder's billing address.</td>
    </tr>
    <tr>
        <td>city</td>
        <td>Card billing city.</td>
    </tr>
    <tr>
        <td>state</td>
        <td>Card billing state/province.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>postal</td>
        <td>Card billing postal code.</td>
    </tr>
    <tr>
        <td>country</td>
        <td>Card billing country code.<br>
            <span class="allowed">Format: CC/ISO 3166</span></td>
    </tr>
    <tr>
        <td>phone</td>
        <td>Billing phone number.</td>
    </tr>
    <tr>
        <td>email</td>
        <td>Billing email address.</td>
    </tr>
    <tr>
        <td>company</td>
        <td>Cardholder's company.</td>
    </tr>
    <tr>
        <td>address2</td>
        <td>Card billing address, line 2.</td>
    </tr>
    <tr>
        <td>fax</td>
        <td>Billing fax number.</td>
    </tr>
    <tr>
        <td>social-security-number</td>
        <td>Customer's social security number</td>
    </tr>
    <tr>
        <td>drivers-license-number</td>
        <td>Driver's license number.</td>
    </tr>
    <tr>
        <td>drivers-license-dob</td>
        <td>Driver's license date of birth.</td>
    </tr>
    <tr>
        <td>drivers-license-state</td>
        <td>Customer's driver's license state.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>cc-number</td>
        <td>Masked credit card number.<br>
            <span class="allowed">Format: XXXXXX********XXXX</span></td>
    </tr>
    <tr>
        <td>cc-exp</td>
        <td>Credit card expiration<br>
            <span class="allowed">Format: MMYY</span></td>
    </tr>
    <tr>
        <td>account-name</td>
        <td>The name on the customer's bank account.</td>
    </tr>
    <tr>
        <td>account-number</td>
        <td>Masked bank account number.<br>
            <span class="allowed">Format: X****XXXX</span></td>
    </tr>
    <tr>
        <td>routing-number</td>
        <td>Masked bank routing number.<br>
            <span class="allowed">Format: X****XXXX</span></td>
    </tr>
    <tr>
        <td>account-type</td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>entity-type</td>
        <td>The customer's ACH account entity.<br>
            <span class="allowed">Values: 'personal' or 'business'</span></td>
    </tr>
    <tr>
        <td>priority</td>
        <td>Billing id priority.<br>
            <span class="allowed">Format: Numeric, 1-255</span></td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/billing&gt;</td>
    </tr>
    <tr>
        <td class="outerElement">&lt;shipping&gt;</td>
        <td>The customer's shipping information.</td>
    </tr>
    <tr>
        <td>shipping-id</td>
        <td>Shipping id used or created for this action.  Recommended when using customer vault hybrid action; will be ignored if no hybrid add/update-customer is done.</td>
    </tr>
    <tr>
        <td>first-name</td>
        <td>Shipping first name.</td>
    </tr>
    <tr>
        <td>last-name</td>
        <td>Shipping last name.</td>
    </tr>
    <tr>
        <td>address1</td>
        <td>Shipping billing address.</td>
    </tr>
    <tr>
        <td>city</td>
        <td>Shipping city.</td>
    </tr>
    <tr>
        <td>state</td>
        <td>Shipping state/province.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>postal</td>
        <td>Shipping postal code.</td>
    </tr>
    <tr>
        <td>country</td>
        <td>Shipping country code.<br>
            <span class="allowed">Format: CC/ISO 3166</span></td>
    </tr>
    <tr>
        <td>phone</td>
        <td>Shipping phone number.</td>
    </tr>
    <tr>
        <td>email</td>
        <td>Shipping email address.</td>
    </tr>
    <tr>
        <td>company</td>
        <td>Shipping company.</td>
    </tr>
    <tr>
        <td>address2</td>
        <td>Shipping address, line 2.</td>
    </tr>
    <tr>
        <td>fax</td>
        <td>Shipping fax number.</td>
    </tr>
    <tr>
        <td>priority</td>
        <td>Shipping id priority.<br>
            <span class="allowed">Format: Numeric, 1-255</span></td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement">&lt;product&gt;</td>
        <td>Product line item detail. Multiple product elements are allowed.</td>
    </tr>
    <tr>
        <td>product-code</td>
        <td>Merchant defined description code of the item being purchased.</td>
    </tr>
    <tr>
        <td>description</td>
        <td>Description of the item(s) being supplied.</td>
    </tr>
    <tr>
        <td>commodity-code</td>
        <td>International description code of the individual good or service being supplied. The acquirer or processor will provide a list of current codes.</td>
    </tr>
    <tr>
        <td>unit-of-measure</td>
        <td>Code for unites of measurement as used in international trade.</td>
    </tr>
    <tr>
        <td>unit-cost</td>
        <td>Unit cost of item purchased. May contain up to 4 decimal places.</td>
    </tr>
    <tr>
        <td>quantity</td>
        <td>Quantity of the item(s) being purchased.</td>
    </tr>
    <tr>
        <td>total-amount</td>
        <td>Purchase amount associated with the item.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>tax-amount</td>
        <td>Amount of tax on specific item. Amount should not be included in item-total-amount.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>tax-rate</td>
        <td>Percentage representing the value-added tax applied. 1% = 1.00.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>discount-amount</td>
        <td>Discount amount which can have been applied by the merchant on the sale of the specific item.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>discount-rate</td>
        <td>Discount rate for the line item. 1% = 1.00<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>tax-type</td>
        <td>Type of value-added taxes that are being used.</td>
    </tr>
    <tr>
        <td>alternate-tax-id</td>
        <td>Tax identification number of the merchant that reported the alternate tax amount.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/product&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/response&gt;</td>
    </tr>
</tbody></table>
</div>