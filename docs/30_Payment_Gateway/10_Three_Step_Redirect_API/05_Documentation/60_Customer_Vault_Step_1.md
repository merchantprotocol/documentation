#### Add/Update Customer XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">XML Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;add-customer|update-customer&gt;</td>
        <td>Type of transaction to perform.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>redirect-url<sup>*</sup></td>
        <td>
            A URL on your web server that the gateway will redirect your customer to after sensitive data collection.                        Value is not required for 'update-customer' requests when sensitive data is not being presented.<br>
            <span class="allowed">Example: Updating an address or zip code only.                        </span>
        </td>
    </tr>
    <tr>
        <td>customer-vault-id</td>
        <td>Load customer details from an existing customer vault record. If set, no payment information is required during step two.</td>
    </tr>
    <tr>
        <td>merchant-defined-field-#</td>
        <td>Merchant specified custom fields.<br>
            <span class="allowed">Format:                             &lt;merchant-defined-field-1&gt;Value&lt;/merchant-defined-field-1&gt;
            </span>
        </td>
    </tr>
    <tr>
        <td class="outerElement">&lt;billing&gt;</td>
        <td>The customer's billing information</td>
    </tr>
    <tr>
        <td>billing-id</td>
        <td>Specify billing id. Required for 'update-customer' if multiple billing-ids exist, optional for 'add-billing'.</td>
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
        <td>Specify priority (If omitted, will be auto-generated and returned in response).<br>
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
        <td>Specify shipping id (Required for update-customer if multiple shipping-ids exist. Optional for add-billing).</td>
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
        <td>Specify priority, if omitted, will be auto-generated and returned in response.<br>
            <span class="allowed">Format: Numeric, 1-255</span></td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/add-customer|update-customer&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Required</pre>

#### XML Response

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
            1=Approved<br>
            2=Declined<br>
            3=Error in transaction data or system error                    </td>
    </tr>
    <tr>
        <td>result-text</td>
        <td>Textual response.</td>
    </tr>
    <tr>
        <td>result-code</td>
        <td>Numeric mapping of processor responses. (See Appendix 3)</td>
    </tr>
    <tr>
        <td>form-url</td>
        <td>URL used as the action of the HTML form in step two.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/response&gt;</td>
    </tr>
</tbody></table>
</div>