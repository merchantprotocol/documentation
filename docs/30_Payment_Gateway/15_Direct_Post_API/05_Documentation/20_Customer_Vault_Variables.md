#### Add/Update Customer Record

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variables</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>customer_vault<sup>*</sup></td>
        <td>Add/Update a secure customer vault record.<br>
            <span class="allowed">Values: 'add_customer' or 'update_customer'</span></td>
    </tr>
    <tr>
        <td>customer_vault_id</td>
        <td>Specifies a customer vault id. If not set, the payment gateway will randomly generate a customer vault id.</td>
    </tr>
    <tr>
        <td>billing_id</td>
        <td>Billing id to be assigned or updated. If none is provided, one will be created or the billing id with priority '1' will be updated.</td>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Username assigned to merchant account.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Password assigned to merchant account.</td>
    </tr>
    <tr>
        <td>ccnumber<sup>**</sup></td>
        <td>Credit card number.</td>
    </tr>
    <tr>
        <td>ccexp<sup>**</sup></td>
        <td>Credit card expiration.<br>
            <span class="allowed">Format: MMYY</span></td>
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
        <td>The customer's ACH account entity.<br>
            <span class="allowed">Values: 'personal' or 'business'</span></td>
    </tr>
    <tr>
        <td>account_type<sup>***</sup></td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>sec_code</td>
        <td>ACH standard entry class codes.<br>
            <span class="allowed">Values: 'PPD', 'WEB', 'TEL', or 'CCD'</span></td>
    </tr>
    <tr>
        <td>currency</td>
        <td>Set transaction currency.</td>
    </tr>
    <tr>
        <td>payment</td>
        <td>Set payment type to ACH or credit card.<br>
            <span class="allowed">Values: 'creditcard' or 'check'</span></td>
    </tr>
    <tr>
        <td>orderid</td>
        <td>Order id</td>
    </tr>
    <tr>
        <td>order_description</td>
        <td>Order Description<br>
            <span class="allowed">Legacy variable includes: orderdescription</span></td>
    </tr>
    <tr>
        <td>merchant_defined_field_#</td>
        <td>Can be set up in merchant control panel under 'Settings'-&gt;'Merchant Defined Fields'.<br>
            <span class="allowed">Format: merchant_defined_field_1=Value</span></td>
    </tr>
    <tr>
        <td>ponumber<sup>****</sup></td>
        <td>Cardholder's purchase order number.</td>
    </tr>
    <tr>
        <td>tax<sup>****</sup></td>
        <td>Total tax amount.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>tax_exempt<sup>****</sup></td>
        <td>Set whether cardholder is tax exempt.<br>
            <span class="allowed">Values: 'true' or 'false'</span></td>
    </tr>
    <tr>
        <td>shipping<sup>****</sup></td>
        <td>Total shipping amount</td>
    </tr>
    <tr>
        <td>first_name</td>
        <td>Cardholder's first name.<br>
            <span class="allowed">Legacy variable includes: firstname</span></td>
    </tr>
    <tr>
        <td>last_name</td>
        <td>Cardholder's last name.<br>
            <span class="allowed">Legacy variable includes: lastname</span></td>
    </tr>
    <tr>
        <td>address1</td>
        <td>Card billing address.</td>
    </tr>
    <tr>
        <td>city</td>
        <td>Card billing city</td>
    </tr>
    <tr>
        <td>state</td>
        <td>Card billing state.</td>
    </tr>
    <tr>
        <td>zip</td>
        <td>Card billing postal code.</td>
    </tr>
    <tr>
        <td>country</td>
        <td>Card billing country code.</td>
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
        <td>shipping_id</td>
        <td>Shipping entry id. If none is provided, one will be created or the billing id with priority '1' will be updated.</td>
    </tr>
    <tr>
        <td>shipping_firstname</td>
        <td>Shipping first name.</td>
    </tr>
    <tr>
        <td>shipping_lastname</td>
        <td>Shipping last name.</td>
    </tr>
    <tr>
        <td>shipping_company</td>
        <td>Shipping company.</td>
    </tr>
    <tr>
        <td>shipping_address1</td>
        <td>Shipping address.</td>
    </tr>
    <tr>
        <td>shipping_address2</td>
        <td>Shipping address, line 2.</td>
    </tr>
    <tr>
        <td>shipping_city</td>
        <td>Shipping city</td>
    </tr>
    <tr>
        <td>shipping_state</td>
        <td>Shipping state.</td>
    </tr>
    <tr>
        <td>shipping_zip</td>
        <td>Shipping postal code.</td>
    </tr>
    <tr>
        <td>shipping_country</td>
        <td>Shipping country code.</td>
    </tr>
    <tr>
        <td>shipping_phone</td>
        <td>Shipping phone number.</td>
    </tr>
    <tr>
        <td>shipping_fax</td>
        <td>Shipping fax number.</td>
    </tr>
    <tr>
        <td>shipping_email</td>
        <td>Shipping email address.</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required
** 	Required for credit card transactions
*** 	Required for ACH transactions
**** 	Required for Level 2 transactions</pre>

#### Customer Vault initiated Sale/Auth/Credit/Offline

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Username assigned to merchant account.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Password assigned to merchant account.</td>
    </tr>
    <tr>
        <td>customer_vault_id<sup>*</sup></td>
        <td>Specifies a customer vault id.</td>
    </tr>
    <tr>
        <td>amount</td>
        <td>Total amount to be charged. For validate, the amount must be omitted or set to 0.00.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>currency</td>
        <td>The transaction currency.
            <span class="allowed">Format: ISO 4217</span></td>
    </tr>
    <tr>
        <td>processor_id</td>
        <td>If using Multiple MIDs, route to this processor (processor_id is obtained under Settings-&gt;Load Balancing in the Control Panel).</td>
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
        <td>order_description</td>
        <td>Order description.<br>
            <span class="allowed">Legacy variable includes: orderdescription</span></td>
    </tr>
    <tr>
        <td>orderid</td>
        <td>Order ID</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>

#### Delete Customer Record

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>customer_vault<sup>*</sup></td>
        <td>Deletes a secure customer vault record.<br>
            <span class="allowed">Values: 'delete_customer'</span></td>
    </tr>
    <tr>
        <td>customer_vault_id<sup>*</sup></td>
        <td>Specifies a customer vault id.</td>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Username assigned to merchant account.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Password assigned to merchant account.</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>

**Notes:**

 - If you do not pass a customer_vault_id, our system will randomly generate one. If you include a customer_id and customer_vault_id, they must match.
 - You can only pass Credit Card or Electronic Check transaction variables.
