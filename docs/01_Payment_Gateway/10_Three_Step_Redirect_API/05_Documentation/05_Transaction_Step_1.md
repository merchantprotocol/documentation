#### Sale/Auth/Credit/Validate/Offline XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody>
        <tr>
            <th class="variable">XML Element</th>
            <th>Description</th>
        </tr>
        <tr>
            <td class="outerElement">&lt;sale|auth|credit|validate|offline&gt;</td>
            <td>Type of transaction to perform.</td>
        </tr>
        <tr>
            <td>api-key<sup>*</sup></td>
            <td>api-key is obtained in the security keys section of the control panel settings.</td>
        </tr>
        <tr>
            <td>redirect-url<sup>*</sup></td>
            <td>A URL on your web server that the gateway will redirect your customer to after sensitive data collection.</td>
        </tr>
        <tr>
            <td>amount<sup>*</sup></td>
            <td>Total amount to be charged (For "validate" actions, amount must be 0.00 or omitted).</td>
        </tr>
        <tr>
            <td>authorization-code<sup>**</sup></td>
            <td>Specify authorization code. For use with "offline" action only.</td>
        </tr>
        <tr>
            <td>ip-address</td>
            <td>Cardholder's IP address.<br>
                <span class="allowed">Format: xxx.xxx.xxx.xxx</span></td>
        </tr>
        <tr>
            <td>industry</td>
            <td>Specify industry classification of transaction.<br>
                <span class="allowed">Values: 'ecommerce', 'moto', or 'retail'</span></td>
        </tr>
        <tr>
            <td>billing-method</td>
            <td>Set additional billing indicators.<br>
                <span class="allowed">Values: 'recurring' or 'installment'</span></td>
        </tr>
        <tr>
            <td>billing-number</td>
            <td>Specify installment billing number, on supported processors. For use when "billing-method" is set to installment.<br>
                <span class="allowed">Values: 0-99</span></td>
        </tr>
        <tr>
            <td>billing-total</td>
            <td>Specify installment billing total on supported processors. For use when "billing-method" is set to installment.</td>
        </tr>
        <tr>
            <td>processor-id</td>
            <td>If using multiple processors, route to specified processor. Obtained under Settings-&gt;Load Balancing in the merchant control panel.</td>
        </tr>
        <tr>
            <td>sec-code</td>
            <td>ACH standard entry class codes.<br>
                <span class="allowed">Values: 'PPD', 'WEB', 'TEL', 'CCD', 'POP', or 'ARC'</span></td>
        </tr>
        <tr>
            <td>descriptor</td>
            <td>Set payment descriptor on supported processors.</td>
        </tr>
        <tr>
            <td>descriptor-phone</td>
            <td>Set payment descriptor phone on supported processors.</td>
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
            <td>Set transaction currency.<br>
                <span class="allowed">Format: ISO 4217</span></td>
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
            <td>Load customer details from an existing customer vault record. If set, no payment information is required during step two.</td>
        </tr>
        <tr>
            <td>merchant-receipt-email</td>
            <td>Send merchant receipt to email</td>
        </tr>
        <tr>
            <td>customer-receipt</td>
            <td>Send receipt if billing email included.<br>
                <span class="allowed">Values: 'true' or 'false'</span></td>
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
            <td>order-id<sup>***</sup></td>
            <td>Order id.</td>
        </tr>
        <tr>
            <td>po-number<sup>***</sup></td>
            <td>Cardholder's purchase order number.</td>
        </tr>
        <tr>
            <td>tax-amount<sup>***</sup></td>
            <td>The sales tax included in the transaction amount associated with the purchase. Setting tax equal to '-1' indicates an order that is exempt from sales tax.<br>
                <span class="allowed">Default: '0.00'</span><br>
                <span class="allowed">Format: x.xx</span></td>
        </tr>
        <tr>
            <td>shipping-amount<sup>***</sup></td>
            <td>Total shipping amount.</td>
        </tr>
        <tr>
            <td>ship-from-postal<sup>****</sup></td>
            <td>Postal/ZIP code of the address from where purchased goods are being shipped. Defaults to merchant profile postal code.</td>
        </tr>
        <tr>
            <td>summary-commodity-code<sup>****</sup></td>
            <td>A code representing the type of commodity being purchased. The acquirer or processor will provide a list of current codes.</td>
        </tr>
        <tr>
            <td>duty-amount</td>
            <td>Amount included in the transaction amount associated with the import of the purchased goods.<br>
                <span class="allowed">Default: '0.00'</span><br>
        </td></tr>
        <tr>
            <td>discount-amount</td>
            <td>Amount included in the transaction amount of any discount applied to the complete order by the merchant.<br>
                <span class="allowed">Default: '0.00'</span><br>
        </td></tr>
        <tr>
            <td>national-tax-amount</td>
            <td>The national tax amount included in the transaction amount.<br>
                <span class="allowed">Default: '0.00'</span><br>
        </td></tr>
        <tr>
            <td>alternate-tax-amount</td>
            <td>Second tax amount included in the transaction amount in countries where more than one type of tax can be applied to the purchases.<br>
                <span class="allowed">Default: '0.00'</span><br>
        </td></tr>
        <tr>
            <td>alternate-tax-id</td>
            <td>Tax identification number of the merchant that reported the alternate tax amount.</td>
        </tr>
        <tr>
            <td>vat-tax-amount</td>
            <td>Contains the amount of any value added taxes which can be associated with the purchased item.<br>
                <span class="allowed">Default: '0.00'</span><br>
        </td></tr>
        <tr>
            <td>vat-tax-rate</td>
            <td>Contains the tax rate used to calculate the sales tax amount appearing. Can contain up to 2 decimal places, ie 1% = 1.00.<br>
                <span class="allowed">Default: '0.00'</span><br>
        </td></tr>
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
            <td>Purchase order date. Defaults to the date of the transaction.<br>
                <span class="allowed">Format: YYMMDD</span></td>
        </tr>
        <tr>
            <td>cardholder-auth<sup>†</sup></td>
            <td>Set 3D Secure condition.<br>
                <span class="allowed">Values: 'verified' or 'attempted'</span></td>
        </tr>
        <tr>
            <td>eci<sup>†</sup></td>
            <td>E-commerce indicator.<br>
                <span class="allowed">Values: '2', '5', or '7'</span></td>
        </tr>
        <tr>
            <td>cavv<sup>†</sup></td>
            <td>Cardholder authentication verification value.<br>
                <span class="allowed">Format: base64 encoded</span></td>
        </tr>
        <tr>
            <td>xid<sup>†</sup></td>
            <td>Cardholder authentication transaction id.<br>
                <span class="allowed">Format: base64 encoded</span></td>
        </tr>
        <tr>
            <td>dup-seconds<sup>‡</sup></td>
            <td>Override duplicate transaction detection time in seconds.</td>
        </tr>
        <tr>
            <td>avs-reject<sup>‡</sup></td>
            <td>The transaction is rejected if the address verification result is a code in this list. Values are letters obtained under Settings-&gt;Address Verification in the control panel.<br>
                <span class="allowed">Format: x|x|x|x...</span></td>
        </tr>
        <tr>
            <td>cvv-reject<sup>‡</sup></td>
            <td>The transaction is rejected if the card ID verification result is a code in this list.  Values are letters obtained under Settings-&gt;Card ID Verification in the control panel.<br>
                <span class="allowed">Format: x|x|x|x...</span></td>
        </tr>
        <tr>
            <td class="outerElement">&lt;billing&gt;</td>
            <td>The customer's billing information</td>
        </tr>
        <tr>
            <td>billing-id</td>
            <td>Specify billing id. Recommended when using customer vault hybrid action. Will be ignored if no hybrid add/update-customer is done.</td>
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
            <td>account-type<sup>§</sup></td>
            <td>The customer's ACH account type.<br>
                <span class="allowed">Values: 'checking' or 'savings'</span></td>
        </tr>
        <tr>
            <td>entity-type<sup>§</sup></td>
            <td>The customer's ACH account entity.<br>
                <span class="allowed">Values: 'personal' or 'business'</span></td>
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
            <td>Specify shipping id. Recommended when using customer vault hybrid action. Will be ignored if no hybrid add/update-customer is done.</td>
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
            <td>postal<sup>****</sup></td>
            <td>Shipping postal code.</td>
        </tr>
        <tr>
            <td>country<sup>****</sup></td>
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
            <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
        </tr>
        <tr>
            <td class="outerElement">&lt;product&gt;</td>
            <td>Product line item detail. Multiple product elements are allowed.</td>
        </tr>
        <tr>
            <td>product-code<sup>****¶</sup></td>
            <td>Merchant defined description code of the item being purchased.</td>
        </tr>
        <tr>
            <td>description<sup>****</sup></td>
            <td>Description of the item(s) being supplied.</td>
        </tr>
        <tr>
            <td>commodity-code<sup>****</sup></td>
            <td>International description code of the individual good or service being supplied. The acquirer or processor will provide a list of current codes.</td>
        </tr>
        <tr>
            <td>unit-of-measure<sup>****</sup></td>
            <td>Code for units of measurement as used in international trade.<br>
                <span class="allowed">Default: 'EACH'</span></td>
        </tr>
        <tr>
            <td>unit-cost<sup>****</sup></td>
            <td>Unit cost of item purchased. May contain up to 4 decimal places.</td>
        </tr>
        <tr>
            <td>quantity<sup>****</sup></td>
            <td>Quantity of the item(s) being purchased.<br>
                 <span class="allowed">Default: '1'</span></td>
        </tr>
        <tr>
            <td>total-amount<sup>****</sup></td>
            <td>Purchase amount associated with the item. Default to 'unit-cost' x 'quantity' rounded to the nearest penny.</td>
        </tr>
        <tr>
            <td>tax-amount<sup>****</sup></td>
            <td>Amount of tax on specific item. Amount should not be included in item-total-amount.<br>
                <span class="allowed">Default: '0.00'</span></td>
        </tr>
        <tr>
            <td>tax-rate<sup>****</sup></td>
            <td>Percentage representing the value-added tax applied. 1% = 1.00.<br>
                <span class="allowed">Default: '0.00'</span></td>
        </tr>
        <tr>
            <td>discount-amount</td>
            <td>Discount amount which can have been applied by the merchant on the sale of the specific item. Amount should not be included in 'item-total-amount'.</td>
        </tr>
        <tr>
            <td>discount-rate</td>
            <td>Discount rate for the line item. 1% = 1.00.<br>
                <span class="allowed">Default: '0.00'</span></td>
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
            <td class="outerElement">&lt;add-subscription&gt;</td>
            <td>Perform a simultaneous 'hybrid' recurring action while processing a transaction.</td>
       </tr>
        <tr>
            <td>start-date</td>
            <td>The first day that the customer will be charged.                       <span class="allowed">Format: YYYYMMDD</span></td>
        </tr>
        <tr>
            <td class="outerElement">&lt;plan&gt;</td>
        </tr>
        <tr>
            <td>plan-id</td>
            <td>The unique plan ID that references only this recurring plan.</td>
        </tr>
        <tr>
            <td>payments</td>
            <td>The number of payments before the recurring plan is complete.<br>
                <span class="allowed">Note: Use '0' for 'until canceled'</span></td>
        </tr>
        <tr>
            <td>amount</td>
            <td>The plan amount to be charged each billing cycle.<br>
            <span class="allowed">Format: x.xx</span></td>
        </tr>
        <tr>
            <td>day-frequency</td>
            <td>How often, in days, to charge the customer. Cannot be set with 'month-frequency' or 'day-of-month'.</td>
        </tr>
        <tr>
            <td>month-frequency</td>
            <td>How often, in months, to charge the customer. Cannot be set with 'day-frequency'. Must be set with 'day-of-month'.<br>
            <span class="allowed">Values: 1 through 24</span></td>
        </tr>
        <tr>
            <td>day-of-month</td>
            <td>The day that the customer will be charged. Cannot be set with 'day-frequency'. Must be set with 'month-frequency'.<br>
            <span class="allowed">Values: 1 through 31 - for months without 29, 30, or 31 days, the charge will be on the last day</span></td>
        </tr>
        <tr>
            <td class="outerElement" colspan="2">&lt;/plan&gt;</td>
        </tr>
        <tr>
            <td class="outerElement" colspan="2">&lt;/add-subscription&gt;</td>
        </tr>
        <tr>                    <td class="outerElement">&lt;add-customer|update-customer&gt;</td>
            <td>Perform a simultaneous 'hybrid' customer vault action while processing a transaction. This tag can be blank if submitting an 'add-customer' without specifying a 'customer-vault-id'.</td>
        </tr>
        <tr>
            <td>customer-vault-id</td>
            <td>Specify customer vault id. If omitted, will be auto-generated and returned in response. Required for 'update-customer'.</td>
        </tr>
        <tr>
            <td class="outerElement" colspan="2">&lt;/add-customer|update-customer&gt;</td>
        </tr>
        <tr>
            <td>partial-payments<sup>††</sup></td>
            <td>Specify whether a partial amount or full amount of the transaction should be settled.<br>
                <span class="allowed">Format: 'settle_partial' or 'payment_in_full'</span></td>
        </tr>
        <tr>
            <td>partial-payment-id<sup>††</sup></td>
            <td>Specify a partial payment ID. Required to collect an additional amount associated with an existing Partial Payment Transaction. Do not use on initial transaction.</td>
        </tr>
        <tr>
            <td class="outerElement" colspan="2">&lt;/sale|auth|credit|validate|offline&gt;</td>
        </tr>
    </tbody>
</table>
</div>

<pre>
* 	Always required
** 	Required for offline transactions
*** 	Required for Level 2 and Level 3 transactions
**** 	Required for Level 3 transactions
† 	Required for 3D-Secure transactions
‡ 	Required for Override transactions
†† 	Required for Partial Payment Transactions
§ 	Required for ACH transactions
¶ 	Required for Line Item Reporting
</pre>

#### Sale/Auth/Credit/Validate/Offline XML Response

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody>
        <tr>
            <th class="variable">XML Element</th>
            <th>Description</th>
        </tr>
        <tr>
            <td class="outerElement" colspan="2">&lt;response&gt;</td>
        </tr>
        <tr>
            <td>result</td>
            <td>
                1=Approved<br>
                2=Declined<br>
                3=Error in transaction data or system error                    </td>
        </tr>
        <tr>
            <td>result-text</td>
            <td>Textual response.</td>
        </tr>
        <tr>
            <td>transaction-id</td>
            <td>Payment Gateway transaction id.</td>
        </tr>
        <tr>
            <td>result-code</td>
            <td>Numeric mapping of processor responses (See Appendix 3).</td>
        </tr>
        <tr>
            <td>form-url</td>
            <td>URL used as the action of the HTML form in step two.</td>
        </tr>
        <tr>
            <td class="outerElement" colspan="2">&lt;/response&gt;</td>
        </tr>
    </tbody>
</table>
</div>