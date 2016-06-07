#### Add Subscription to an Existing Plan

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;add-subscription&gt;</td>
        <td>Associate payment information with a recurring plan.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the Security Keys section of the Control Panel Settings.</td>
    </tr>
    <tr>
        <td>redirect-url<sup>*</sup></td>
        <td>A URL on your web server that the gateway will redirect your customer to after sensitive data collection. Value is not required when sensitive data is not presented.<br>
        <span class="allowed">Example: Adding a Subscription using a Customer Vault ID.</span></td>
    </tr>
    <tr>
        <td>customer-vault-id</td>
        <td>Load customer details from an existing customer vault record. If set, no payment information is required during step two.</td>
    </tr>
    <tr>
        <td>start-date</td>
        <td>The first day that the customer will be charged.<br>
        <span class="allowed">Format: YYYYMMDD</span></td>
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
        <td>order-description</td>
        <td>Order description.</td>
    </tr>
    <tr>
        <td>currency</td>
        <td>Set transaction currency.<br>
            <span class="allowed">Format: ISO 4217</span></td>
    </tr>
    <tr>
        <td>tax-amount</td>
        <td>The sales tax included in the transaction amount associated with the purchase. Setting tax equal to '-1' indicates an order that is exampt from sales tax.<br>
            <span class="allowed">Default: 0.00'</span><br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>shipping-amount</td>
        <td>Total shipping amount.</td>
    </tr>
    <tr>
        <td>merchant-defined-field-#</td>
        <td>Merchant specified custom fields.<br>
            <span class="allowed">Format:                         &lt;merchant-defined-field-1&gt;Value&lt;/merchant-defined-field-1&gt;
            </span>
        </td>
    </tr>
    <tr>
        <td class="outerElement">&lt;plan&gt;</td>
    </tr>
    <tr>
        <td>plan-id<sup>*</sup></td>
        <td>The unique plan ID that references only this recurring plan.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/plan&gt;</td>
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
        <td>account-type<sup>**</sup></td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>entity-type<sup>**</sup></td>
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
        <td>Shipping address.</td>
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
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/add-subscription&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Always required
** 	Required for ACH transactions
</pre>

#### Add Subscription to a Custom Plan

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;add-subscription&gt;</td>
        <td>Associate payment information with a recurring plan.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the Security Keys section of the Control Panel Settings.</td>
    </tr>
    <tr>
        <td>redirect-url<sup>*</sup></td>
        <td>A URL on your web server that the gateway will redirect your customer to after sensitive data collection. Value is not required when sensitive data is not presented.<br>
        <span class="allowed">Example: Adding a Subscription using a Customer Vault ID.</span></td>
    </tr>
    <tr>
        <td>customer-vault-id</td>
        <td>Load customer details from an existing customer vault record. If set, no payment information is required during step two.</td>
    </tr>
    <tr>
        <td>start-date</td>
        <td>The first day that the customer will be charged.<br>
        <span class="allowed">Format: YYYYMMDD</span></td>
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
        <td>order-description</td>
        <td>Order description.</td>
    </tr>
    <tr>
        <td>currency</td>
        <td>Set transaction currency.<br>
            <span class="allowed">Format: ISO 4217</span></td>
    </tr>
    <tr>
        <td>tax-amount</td>
        <td>The sales tax included in the transaction amount associated with the purchase. Setting tax equal to '-1' indicates an order that is exampt from sales tax.<br>
            <span class="allowed">Default: '0.00'</span><br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>shipping-amount</td>
        <td>Total shipping amount.</td>
    </tr>
    <tr>
        <td>merchant-defined-field-#</td>
        <td>Merchant specified custom fields.<br>
            <span class="allowed">Format:                         &lt;merchant-defined-field-1&gt;Value&lt;/merchant-defined-field-1&gt;
            </span>
        </td>
    </tr>
    <tr>
        <td class="outerElement">&lt;plan&gt;</td>
    </tr>
    <tr>
        <td>payments<sup>*</sup></td>
        <td>The number of payments before the recurring plan is complete.<br>
            <span class="allowed">Notes: '0' for until canceled</span></td>
    </tr>
    <tr>
        <td>amount<sup>*</sup></td>
        <td>The plan amount to be charged each billing cycle.<br>
        <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>day-frequency<sup>***</sup></td>
        <td>How often, in days, to charge the customer. Cannot be set with 'month-frequency' or 'day-of-month'.</td>
    </tr>
    <tr>
        <td>month-frequency<sup>****</sup></td>
        <td>How often, in months, to charge the customer. Cannot be set with 'day-frequency'. Must be set with 'day-of-month'.<br>
        <span class="allowed">Values: 1 through 24</span></td>
    </tr>
    <tr>
        <td>day-of-month<sup>****</sup></td>
        <td>The day that the customer will be charged. Cannot be set with 'day-frequency'. Must be set with 'month-frequency'.<br>
        <span class="allowed">Values: 1 through 31 - for months without 29, 30, or 31 days, the charge will be on the last day</span></td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/plan&gt;</td>
    </tr>
    <tr>
        <td class="outerElement">&lt;billing&gt;</td>
        <td>The customer's biling information</td>
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
        <td>account-type<sup>**</sup></td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>entity-type<sup>**</sup></td>
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
        <td>Shipping address.</td>
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
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/add-subscription&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required
** 	Required for ACH transactions
*** 	Required unless 'month-frequency' and 'day-of-month' is set.
**** 	Required unless 'day-frequency' is set.</pre>

#### Update Subscription Information

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;update-subscription&gt;</td>
        <td>Update Customer's information for a subscription.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the Security Keys section of the Control Panel Settings.</td>
    </tr>
    <tr>
        <td>redirect-url<sup>*</sup></td>
        <td>A URL on your web server that the gateway will redirect your customer to after sensitive data collection. Value is not required when sensitive data is not presented.<br>
        <span class="allowed">Example: Updating a Subscription using a Customer Vault ID.</span></td>
    </tr>
    <tr>
        <td>subscription-id<sup>*</sup></td>
        <td>The subscription that will be updated.</td>
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
        <td>order-description</td>
        <td>Order description.</td>
    </tr>
    <tr>
        <td>currency</td>
        <td>Set transaction currency.<br>
            <span class="allowed">Format: ISO 4217</span></td>
    </tr>
    <tr>
        <td>merchant-defined-field-#</td>
        <td>Merchant specified custom fields.<br>
            <span class="allowed">Format:                         &lt;merchant-defined-field-1&gt;Value&lt;/merchant-defined-field-1&gt;
            </span>
        </td>
    </tr>
    <tr>
        <td class="outerElement">&lt;billing&gt;</td>
        <td>The customer's billing information</td>
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
        <td>account-type<sup>**</sup></td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>entity-type<sup>**</sup></td>
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
        <td>first-name</td>
        <td>Shipping first name.</td>
    </tr>
    <tr>
        <td>last-name</td>
        <td>Shipping last name.</td>
    </tr>
    <tr>
        <td>address1</td>
        <td>Shipping address.</td>
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
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/update-subscription&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always Required.
** 	Required for ACH subscriptions.</pre>