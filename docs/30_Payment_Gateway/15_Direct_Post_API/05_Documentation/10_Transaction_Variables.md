#### Sale/Authorization/Credit/Validate

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
<tbody><tr>
    <th class="variable">Variable Name</th>
    <th>Description</th>
</tr>
<tr>
    <td>type<sup>*</sup></td>
    <td>The type of transaction to be processed.<br>
        <span class="allowed">Values: 'sale', 'auth', 'credit', 'validate', or 'offline'</span></td>
</tr>
<tr>
    <td>username<sup>*</sup></td>
    <td>Username assigned to merchant account.</td>
</tr>
<tr>
    <td>password<sup>*</sup></td>
    <td>Password for the specified username.</td>
</tr>
<tr>
    <td>ccnumber<sup>**</sup></td>
    <td>Credit card number.</td>
</tr>
<tr>
    <td>ccexp<sup>**</sup></td>
    <td>Credit card expiration date.<br>
        <span class="allowed">Format: MMYY</span></td>
</tr>
<tr>
    <td>cvv</td>
    <td>The card security code. While this is not required, it is strongly recommended.</td>
</tr>
<tr>
    <td>checkname<sup>***</sup></td>
    <td>The name on the customer's ACH account.</td>
</tr>
<tr>
    <td>checkaba<sup>***</sup></td>
    <td>The customer's bank routing number.</td>
</tr>
<tr>
    <td>checkaccount<sup>***</sup></td>
    <td>The customer's bank account number.</td>
</tr>
<tr>
    <td>account_holder_type<sup>***</sup></td>
    <td>The type of ACH account the customer has.<br>
        <span class="allowed">Values: 'business' or 'personal'</span></td>
</tr>
<tr>
    <td>account_type<sup>***</sup></td>
    <td>The ACH account entity of the customer.<br>
        <span class="allowed">Values: 'checking' or 'savings'</span></td>
</tr>
<tr>
    <td>sec_code<sup>***</sup></td>
    <td>The Standard Entry Class code of the ACH transaction.<br>
        <span class="allowed">Values: 'PPD', 'WEB', 'TEL', or 'CCD'</span></td>
</tr>
<tr>
    <td>amount</td>
    <td>Total amount to be charged. For validate, the amount must be omitted or set to 0.00.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>currency</td>
    <td>The transaction currency.                    <span class="allowed">Format: ISO 4217</span></td>
</tr>
<tr>
    <td>payment<sup>***</sup></td>
    <td>The type of payment.<br>
        <span class="allowed">Default: 'creditcard'</span><br>
        <span class="allowed">Values: 'creditcard' or 'check'</span></td>
</tr>
<tr>
    <td>processor_id</td>
    <td>If using Multiple MIDs, route to this processor (processor_id is obtained under Settings-&gt;Load Balancing in the Control Panel).</td>
</tr>
<tr>
    <td>authorization_code<sup>‡</sup></td>
    <td>Specify authorization code. For use with "offline" action only.</td>
</tr>
<tr>
    <td>dup_seconds</td>
    <td>Sets the time in seconds for duplicate transaction checking on supported processors.  Set to 0 to disable duplicate checking.</td>
</tr>
<tr>
    <td>descriptor</td>
    <td>Set payment descriptor on supported processors.</td>
</tr>
<tr>
    <td>descriptor_phone</td>
    <td>Set payment descriptor phone on supported processors.</td>
</tr>
<tr>
    <td>descriptor_address</td>
    <td>Set payment descriptor address on supported processors.</td>
</tr>
<tr>
    <td>descriptor_city</td>
    <td>Set payment descriptor city on supported processors.</td>
</tr>
<tr>
    <td>descriptor_state</td>
    <td>Set payment descriptor state on supported processors.</td>
</tr>
<tr>
    <td>descriptor_postal</td>
    <td>Set payment descriptor postal code on supported processors.</td>
</tr>
<tr>
    <td>descriptor_country</td>
    <td>Set payment descriptor country on supported processors.</td>
</tr>
<tr>
    <td>descriptor_mcc</td>
    <td>Set payment descriptor mcc on supported processors.</td>
</tr>
<tr>
    <td>descriptor_merchant_id</td>
    <td>Set payment descriptor merchant id on supported processors.</td>
</tr>
<tr>
    <td>descriptor_url</td>
    <td>Set payment descriptor url on supported processors.</td>
</tr>
<tr>
    <td>billing_method</td>
    <td>Should be set to 'recurring' to mark payment as a recurring transaction.<br>
        <span class="allowed">Values: 'recurring'</span></td>
</tr>
<tr>
    <td>order_description</td>
    <td>Order description.<br>
        <span class="allowed">Legacy variable includes: orderdescription</span></td>
</tr>
<tr>
    <td>orderid</td>
    <td>Order Id</td>
</tr>
<tr>
    <td>ipaddress</td>
    <td>IP address of cardholder, this field is recommended.<br>
        <span class="allowed">Format: xxx.xxx.xxx.xxx</span></td>
</tr>
<tr>
    <td>tax<sup>****</sup></td>
    <td>Total tax amount.</td>
</tr>
<tr>
    <td>shipping<sup>****</sup></td>
    <td>Total shipping amount</td>
</tr>
<tr>
    <td>ponumber<sup>****</sup></td>
    <td>Original purchase order</td>
</tr>
<tr>
    <td>first_name</td>
    <td>Cardholder's first name.<br>
        <span class="allowed">Legacy variable includes: firstname</span></td>
</tr>
<tr>
    <td>last_name</td>
    <td>Cardholder's last name<br>
        <span class="allowed">Legacy variable includes: lastname</span></td>
</tr>
<tr>
    <td>company</td>
    <td>Cardholder's company</td>
</tr>
<tr>
    <td>address1</td>
    <td>Card billing address</td>
</tr>
<tr>
    <td>address2</td>
    <td>Card billing address, line 2</td>
</tr>
<tr>
    <td>city</td>
    <td>Card billing city</td>
</tr>
<tr>
    <td>state</td>
    <td>Card billing state.<br>
        <span class="allowed">Format: CC</span></td>
</tr>
<tr>
    <td>zip</td>
    <td>Card billing zip code</td>
</tr>
<tr>
    <td>country</td>
    <td>Card billing country.<br>
        <span class="allowed">Country codes are as shown in ISO 3166.  Format: CC</span></td>
</tr>
<tr>
    <td>phone</td>
    <td>Billing phone number</td>
</tr>
<tr>
    <td>fax</td>
    <td>Billing fax number</td>
</tr>
<tr>
    <td>email</td>
    <td>Billing email address</td>
</tr>
<tr>
    <td>social_security_number</td>
    <td>Customer's social security number, checked against bad check writers database if check verification is enabled.</td>
</tr>
<tr>
    <td>drivers_license_number</td>
    <td>Driver's license number.</td>
</tr>
<tr>
    <td>drivers_license_dob</td>
    <td>Driver's license date of birth.</td>
</tr>
<tr>
    <td>drivers_license_state</td>
    <td>The state that issued the customer's driver's license.</td>
</tr>
<tr>
    <td>shipping_firstname</td>
    <td>Shipping first name</td>
</tr>
<tr>
    <td>shipping_lastname</td>
    <td>Shipping last name</td>
</tr>
<tr>
    <td>shipping_company</td>
    <td>Shipping company</td>
</tr>
<tr>
    <td>shipping_address1</td>
    <td>Shipping address</td>
</tr>
<tr>
    <td>shipping_address2</td>
    <td>Shipping address, line 2</td>
</tr>
<tr>
    <td>shipping_city</td>
    <td>Shipping city</td>
</tr>
<tr>
    <td>shipping_state</td>
    <td>Shipping state<br>
        <span class="allowed">Format: CC</span></td>
</tr>
<tr>
    <td>shipping_zip</td>
    <td>Shipping zip code</td>
</tr>
<tr>
    <td>shipping_country</td>
    <td>Shipping country<br>
        <span class="allowed">Country codes are as shown in ISO 3166.  Format: CC</span></td>
</tr>
<tr>
    <td>shipping_email</td>
    <td>Shipping email address</td>
</tr>
<tr>
    <td>merchant_defined_field_#</td>
    <td>You can pass custom information in up to 20 fields.<br>
        <span class="allowed">Format: merchant_defined_field_1=Value</span></td>
</tr>
<tr>
    <td>customer_receipt</td>
    <td>If set to true, when the customer is charged, they will be sent a transaction receipt.<br>
    <span class="allowed">Values: 'true' or 'false'</span></td>
</tr>
<tr>
    <th colspan="2">Recurring specific fields</th>
</tr>
<tr>
    <td>recurring</td>
    <td>Recurring action to be processed.<br>
        <span class="allowed">Values: add_subscription</span></td>
</tr>
<tr>
    <td>plan_id</td>
    <td>Create a subscription tied to a Plan ID if the sale/auth transaction is successful.</td>
</tr>
<tr>
    <td>plan_payments</td>
    <td>The number of payments before the recurring plan is complete.<br>
        <span class="allowed">Note: Use '0' for 'until canceled'</span></td>
</tr>
<tr>
    <td>plan_amount</td>
    <td>The plan amount to be charged each billing cycle.<br>
    <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>day_frequency</td>
    <td>How often, in days, to charge the customer. Cannot be set with 'month_frequency' or 'day_of_month'.</td>
</tr>
<tr>
    <td>month_frequency</td>
    <td>How often, in months, to charge the customer. Cannot be set with 'day_frequency'. Must be set with 'day_of_month'.<br>
    <span class="allowed">Values: 1 through 24</span></td>
</tr>
<tr>
    <td>day_of_month</td>
    <td>The day that the customer will be charged. Cannot be set with 'day_frequency'. Must be set with 'month_frequency'.<br>
    <span class="allowed">Values: 1 through 31 - for months without 29, 30, or 31 days, the charge will be on the last day</span></td>
</tr>
<tr>
    <td>start_date</td>
    <td>The first day that the customer will be charged.<br>
    <span class="allowed">Format: YYYYMMDD</span></td>
</tr>
<tr>
    <th colspan="2">Customer Vault specific fields</th>
</tr>
<tr>
    <td>customer_vault</td>
    <td>Associate payment information with a Customer Vault record if the transaction is successful.<br>
    <span class="allowed">Values: 'add_customer' or 'update_customer'</span></td>
</tr>
<tr>
    <td>customer_vault_id</td>
    <td>Specifies a customer vault id. If not set, the payment gateway will randomly generate a customer vault id.</td>
</tr>
<tr>
    <th colspan="2">Level III specific order fields</th>
</tr>
<tr>
    <td>shipping</td>
    <td>Freight or shipping amount included in the transaction amount<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>tax</td>
    <td>The sales tax, included in the transaction amount, associated with the purchase. Setting tax equal to '-1' indicates an order that is exempt from sales tax.<br>
            <span class="allowed">Default: '0.00'</span><br>
            <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>ponumber<sup>†</sup></td>
    <td>Purchase order number supplied by cardholder</td>
</tr>
<tr>
    <td>orderid<sup>†</sup></td>
    <td>Identifier assigned by the merchant. This defaults to gateway transaction id.</td>
</tr>
<tr>
    <td>shipping_country<sup>†</sup></td>
    <td>Shipping country (e.g. US)<br>
        <span class="allowed">Format: CC</span></td>
</tr>
<tr>
    <td>shipping_postal<sup>†</sup></td>
    <td>Postal/ZIP code of the address where purchased goods will be delivered. This field can be identical to the 'ship_from_postal' if the customer is present and takes immediate possession of the goods.</td>
</tr>
<tr>
    <td>ship_from_postal<sup>†</sup></td>
    <td>Postal/ZIP code of the address from where purchased goods are being shipped, defaults to merchant profile postal code.</td>
</tr>
<tr>
    <td>summary_commodity_code<sup>†</sup></td>
    <td>4 character international description code of the overall goods or services being supplied. The acquirer or processor will provide a list of current codes.</td>
</tr>
<tr>
    <td>duty_amount</td>
    <td>Amount included in the transaction amount associated with the import of purchased goods.<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>discount_amount</td>
    <td>Amount included in the transaction amount of any discount applied to complete order by the merchant.<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>national_tax_amount</td>
    <td>The national tax amount included in the transaction amount.<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>alternate_tax_amount</td>
    <td>Second tax amount included in the transaction amount in countries where more than one type of tax can be applied to the purchases.<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>alternate_tax_id</td>
    <td>Tax identification number of the merchant that reported the alternate tax amount.</td>
</tr>
<tr>
    <td>vat_tax_amount</td>
    <td>Contains the amount of any value added taxes which can be associated with the purchased item.<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>vat_tax_rate</td>
    <td>Contains the tax rate used to calculate the sales tax amount appearing. Can contain up to 2 decimal places, e.g. 1% = 1.00.<br>
        <span class="allowed">Default: '0.00'</span><br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>vat_invoice_reference_number</td>
    <td>Invoice number that is associated with the VAT invoice.</td>
</tr>
<tr>
    <td>customer_vat_registration</td>
    <td>Value added tax registration number supplied by the cardholder.</td>
</tr>
<tr>
    <td>merchant_vat_registration</td>
    <td>Government assigned tax identification number of the merchant for whom the goods or services were purchased from.</td>
</tr>
<tr>
    <td>order_date</td>
    <td>Purchase order date, defaults to the date of the transaction.<br>
        <span class="allowed">Format: YYMMDD</span></td>
</tr>
<tr>
    <th colspan="2">Level III specific line item detail fields</th>
</tr>
<tr>
    <td>item_product_code_#<sup>†</sup></td>
    <td>Merchant defined description code of the item being purchased.</td>
</tr>
<tr>
    <td>item_description_#<sup>†</sup></td>
    <td>Description of the item(s) being supplied.</td>
</tr>
<tr>
    <td>item_commodity_code_#<sup>†</sup></td>
    <td>International description code of the individual good or service being supplied. The acquirer or processor will provide a list of current codes.</td>
</tr>
<tr>
    <td>item_unit_of_measure_#<sup>†</sup></td>
    <td>Code for units of measurement as used in international trade.<br>
        <span class="allowed">Default: 'EACH'</span><br>
</td></tr>
<tr>
    <td>item_unit_cost_#<sup>†</sup></td>
    <td>Unit cost of item purchased, may contain up to 4 decimal places.</td>
</tr>
<tr>
    <td>item_quantity_#<sup>†</sup></td>
    <td>Quantity of the item(s) being purchased.<br>
        <span class="allowed">Default: '1'</span><br>
</td></tr>
<tr>
    <td>item_total_amount_#<sup>†</sup></td>
    <td>Purchase amount associated with the item. Defaults to: 'item_unit_cost_#' x 'item_quantity_#' rounded to the nearest penny.</td>
</tr>
<tr>
    <td>item_tax_amount_#<sup>†</sup></td>
    <td>Amount of tax on specific item, amount should not be included in 'total_amount_#'.<br>
        <span class="allowed">Default: '0.00'</span><br>
</td></tr>
<tr>
    <td>item_tax_rate_#<sup>†</sup></td>
    <td>Percentage representing the value-added tax applied.<br>
        <span class="allowed">Default: '0.00'</span><br>
</td></tr>
<tr>
    <td>item_discount_amount_#</td>
    <td>Discount amount which can have been applied by the merchant on the sale of the specific item. Amount should not be included in 'total_amount_#'.</td>
</tr>
<tr>
    <td>item_discount_rate_#</td>
    <td>Discount rate for the line item. 1% = 1.00.<br>
        <span class="allowed">Default: '0.00'</span><br>
</td></tr>
<tr>
    <td>item_tax_type_#</td>
    <td>Type of value-added taxes that are being used.</td>
</tr>
<tr>
    <td>item_alternate_tax_id_#</td>
    <td>Tax identification number of the merchant that reported the alternate tax amount.</td>
</tr>
</tbody></table>
</div>

<pre>
* 	Always required
** 	Required for credit card transactions
*** 	Required for ACH transactions
**** 	Required for Level 2 transactions
† 	Required for Level 3 transactions
‡ 	Required for offline transactions</pre>

**Notes:**

 - Level II fields are required for Level II processing.
 - Level II and Level III fields are required for Level III processing.
 - You can pass only credit card or e-check transaction variables in a request, not both in the same request.
 - Certain banks may require some optional fields.

#### Capture

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>type<sup>*</sup></td>
        <td>Type of transaction.<br>
            <span class="allowed">Values: 'capture'</span></td>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Username assigned to merchant account.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Password for the specified username.</td>
    </tr>
    <tr>
        <td>transactionid<sup>*</sup></td>
        <td>Original payment gateway transaction id</td>
    </tr>
    <tr>
        <td>amount<sup>*</sup></td>
        <td>Total amount to be settled. This amount must be equal to or less than the original authorized amount.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>tracking_number</td>
        <td>Shipping tracking number</td>
    </tr>
    <tr>
        <td>shipping_carrier</td>
        <td>Shipping carrier.<br>
            <span class="allowed">Values: 'ups', 'fedex', 'dhl', or 'usps'</span></td>
    </tr>
    <tr>
        <td>orderid</td>
        <td>Order id.</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>

#### Void

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>type<sup>*</sup></td>
        <td>Type of transaction.<br>
            <span class="allowed">Values: 'void'</span></td>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Username assigned to merchant account.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Password for the specified username.</td>
    </tr>
    <tr>
        <td>transactionid<sup>*</sup></td>
        <td>Original payment gateway transaction id</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>

#### Refund

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>type<sup>*</sup></td>
        <td>Type of transaction.<br>
            <span class="allowed">Values: 'refund'</span></td>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Username assigned to merchant account.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Password for the specified username.</td>
    </tr>
    <tr>
        <td>transactionid<sup>*</sup></td>
        <td>Original payment gateway transaction id</td>
    </tr>
    <tr>
        <td>amount</td>
        <td>Total amount to be refunded. This amount may be equal to or less than the settled amount.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>

#### Update

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
<tbody>
<tr>
    <th class="variable">Variable Name</th>
    <th>Description</th>
</tr>
<tr>
    <td>type<sup>*</sup></td>
    <td>Type of transactions.<br>
        <span class="allowed">Values: 'update'</span></td>
</tr>
<tr>
    <td>username<sup>*</sup></td>
    <td>Username assigned to merchant account.</td>
</tr>
<tr>
    <td>password<sup>*</sup></td>
    <td>Password for the specified username.</td>
</tr>
<tr>
    <td>transactionid<sup>*</sup></td>
    <td>Original payment gateway transaction id</td>
</tr>
<tr>
    <td>tracking_number</td>
    <td>Shipping tracking number</td>
</tr>
<tr>
    <td>shipping</td>
    <td>Total shipping amount.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>shipping_postal</td>
    <td>Postal/ZIP code of the address where purchased goods will be delivered. This field can be identical to the 'ship_from_postal' if the customer is present and takes immediate possession of the goods.</td>
</tr>
<tr>
    <td>ship_from_postal</td>
    <td>Postal/ZIP code of the address from where purchased goods are being shipped, defaults to merchant profile postal code.</td>
</tr>
<tr>
    <td>shipping_country</td>
    <td>Shipping Country Code.</td>
</tr>
<tr>
    <td>shipping_carrier</td>
    <td>Shipping carrier.<br>
        <span class="allowed">Values: 'ups', 'fedex', 'dhl', or 'usps'</span></td>
</tr>
<tr>
    <td>shipping_date</td>
    <td>Shipping date.<br>
        <span class="allowed">Format: YYYYMMDD</span></td>
</tr>
<tr>
    <td>order_description</td>
    <td>Order Description.<br>
        <span class="allowed">Legacy variable includes: orderdescription</span></td>
</tr>
<tr>
    <td>order_date</td>
    <td>Order date.<br>
        <span class="allowed">Format: YYYYMMDD</span></td>
</tr>
<tr>
    <td>customer_receipt</td>
    <td>If set to true, when the customer is charged, they will be sent a transaction receipt.<br>
    <span class="allowed">Values: 'true' or 'false'</span></td>
</tr>
<tr>
    <td>ponumber</td>
    <td>Cardholder's purchase order number.</td>
</tr>
<tr>
    <td>summary_commodity_code</td>
    <td>4 character international description code of the overall goods or services being supplied. The acquirer or processor will provide a list of current codes.</td>
</tr>
<tr>
    <td>duty_amount</td>
    <td>Amount included in the transaction amount associated with the import of purchased goods.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>discount_amount</td>
    <td>Amount included in the transaction amount of any discount applied to complete order by the merchant.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>tax</td>
    <td>Tax amount.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>national_tax_amount</td>
    <td>The national tax amount included in the transaction amount.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>alternate_tax_amount</td>
    <td>Second tax amount included in the transaction amount in countries where more than one type of tax can be applied to the purchases.<br>
        <span class="allowed">Format: x.xx</span></td>
</tr>
<tr>
    <td>alternate_tax_id</td>
    <td>Tax identification number of the merchant that reported the alternate tax amount.</td>
</tr>
<tr>
    <td>vat_tax_amount</td>
    <td>Contains the amount of any value added taxes which can be associated with the purchased item.<br>
</td></tr>
<tr>
    <td>vat_tax_rate</td>
    <td>Contains the tax rate used to calculate the sales tax amount appearing. Can contain up to 2 decimal places, e.g. 1% = 1.00.<br>
</td></tr>
<tr>
    <td>vat_invoice_reference_number</td>
    <td>Invoice number that is associated with the VAT invoice.</td>
</tr>
<tr>
    <td>customer_vat_registration</td>
    <td>Value added tax registration number supplied by the cardholder.</td>
</tr>
<tr>
    <td>merchant_vat_registration</td>
    <td>Government assigned tax identification number of the merchant for whom the goods or services were purchased from.</td>
</tr>
<tr>
    <td>merchant_defined_field_#</td>
    <td>Merchant Defined Fields.<br>
        <span class="allowed">Format: merchant_defined_field_1=Value</span></td>
</tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>