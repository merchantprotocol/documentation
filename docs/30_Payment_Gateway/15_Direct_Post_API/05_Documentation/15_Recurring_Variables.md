#### Add a Plan

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>recurring<sup>*</sup></td>
        <td>Add a recurring plan that subscriptions can be added to in the future.<br>
            <span class="allowed">Value: 'add_plan'</span></td>
    </tr>
    <tr>
        <td>plan_payments<sup>*</sup></td>
        <td>The number of payments before the recurring plan is complete.<br>
            <span class="allowed">Notes: '0' for until canceled</span></td>
    </tr>
    <tr>
        <td>plan_amount<sup>*</sup></td>
        <td>The plan amount to be charged each billing cycle.<br>
        <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>plan_name<sup>*</sup></td>
        <td>The display name of the plan.</td>
    </tr>
    <tr>
        <td>plan_id<sup>*</sup></td>
        <td>The unique plan ID that references only this recurring plan.</td>
    </tr>
    <tr>
        <td>day_frequency<sup>**</sup></td>
        <td>How often, in days, to charge the customer. Cannot be set with 'month_frequency' or 'day_of_month'.</td>
    </tr>
    <tr>
        <td>month_frequency<sup>***</sup></td>
        <td>How often, in months, to charge the customer. Cannot be set with 'day_frequency'. Must be set with 'day_of_month'.<br>
        <span class="allowed">Values: 1 through 24</span></td>
    </tr>
    <tr>
        <td>day_of_month<sup>***</sup></td>
        <td>The day that the customer will be charged. Cannot be set with 'day_frequency'. Must be set with 'month_frequency'.<br>
        <span class="allowed">Values: 1 through 31 - for months without 29, 30, or 31 days, the charge will be on the last day</span></td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required
** 	Required unless 'month_frequency' and 'day_of_month' is set.
*** 	Required unless 'day_frequency' is set.</pre>

#### Add a Subscription to an Existing Plan

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>recurring<sup>*</sup></td>
        <td>Associate payment information with a recurring plan.<br>
        <span class="allowed">Value: add_subscription</span></td>
    </tr>
    <tr>
        <td>plan_id<sup>*</sup></td>
        <td>The plan ID of the plan that the subscription will be associated with.</td>
    </tr>
    <tr>
        <td>start_date</td>
        <td>The first day that the customer will be charged.<br>
        <span class="allowed">Format: YYYYMMDD</span></td>
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
        <td>payment<sup>***</sup></td>
        <td>The type of payment.<br>
            <span class="allowed">Default: 'creditcard'</span><br>
            <span class="allowed">Values: 'creditcard' or 'check'</span></td>
    </tr>
    <tr>
        <td>checkname<sup>***</sup></td>
        <td>The name on the customer's ACH account.</td>
    </tr>
    <tr>
        <td>checkaccount<sup>***</sup></td>
        <td>The customer's bank account number.</td>
    </tr>
    <tr>
        <td>checkaba<sup>***</sup></td>
        <td>The customer's bank routing number.</td>
    </tr>
    <tr>
        <td>account_type<sup>***</sup></td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>account_holder_type<sup>***</sup></td>
        <td>The customer's ACH account entity.<br>
            <span class="allowed">Values: 'personal' or 'business'</span></td>
    </tr>
    <tr>
        <td>sec_code</td>
        <td>ACH standard entry class codes.<br>
            <span class="allowed">Values: 'PPD', 'WEB', 'TEL', or 'CCD'</span></td>
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
        <td>orderid</td>
        <td>Order ID</td>
    </tr>
    <tr>
        <td>order_description</td>
        <td>Order Description</td>
    </tr>
    <tr>
        <td>merchant_defined_field_#</td>
        <td>Can be set up in merchant control panel under 'Settings'-&gt;'Merchant Defined Fields'.</td>
    </tr>
    <tr>
        <td>ponumber</td>
        <td>Cardholder's purchase order number.</td>
    </tr>
    <tr>
        <td>processor_id</td>
        <td>If using Multiple MIDs, route to this processor (processor_id is obtained under Settings-&gt;Load Balancing in the Control Panel).</td>
    </tr>
    <tr>
        <td>customer_receipt</td>
        <td>If set to true, when the customer is charged, they will be sent a transaction receipt.<br>
        <span class="allowed">Values: 'true' or 'false'</span></td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required
** 	Required for credit card transactions
*** 	Required for ACH transactions</pre>

#### Adding a Custom Subscription

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>recurring<sup>*</sup></td>
        <td>Add a custom recurring subscription that is NOT associated with an existing plan<br>
            <span class="allowed">Value: 'add_subscription'</span></td>
    </tr>
    <tr>
        <td>plan_payments<sup>*</sup></td>
        <td>The number of payments before the recurring plan is complete.<br>
            <span class="allowed">Notes: '0' for until canceled</span></td>
    </tr>
    <tr>
        <td>plan_amount<sup>*</sup></td>
        <td>The plan amount to be charged each billing cycle.<br>
        <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>day_frequency<sup>**</sup></td>
        <td>How often, in days, to charge the customer. Cannot be set with 'month_frequency' or 'day_of_month'.</td>
    </tr>
    <tr>
        <td>month_frequency<sup>***</sup></td>
        <td>How often, in months, to charge the customer. Cannot be set with 'day_frequency'. Must be set with 'day_of_month'.<br>
        <span class="allowed">Values: 1 through 24</span></td>
    </tr>
    <tr>
        <td>day_of_month<sup>***</sup></td>
        <td>The day that the customer will be charged. Cannot be set with 'day_frequency'. Must be set with 'month_frequency'.<br>
        <span class="allowed">Values: 1 through 31 - for months without 29, 30, or 31 days, the charge will be on the last day</span></td>
    </tr>
    <tr>
        <td>start_date</td>
        <td>The first day that the customer will be charged.<br>
        <span class="allowed">Format: YYYYMMDD</span></td>
    </tr>
    <tr>
        <td>ccnumber<sup>****</sup></td>
        <td>Credit card number.</td>
    </tr>
    <tr>
        <td>ccexp<sup>****</sup></td>
        <td>Credit card expiration.<br>
            <span class="allowed">Format: MMYY</span></td>
    </tr>
    <tr>
        <td>payment<sup>†</sup></td>
        <td>The type of payment.<br>
            <span class="allowed">Default: 'creditcard'</span><br>
            <span class="allowed">Values: 'creditcard' or 'check'</span></td>
    </tr>
    <tr>
        <td>checkname<sup>†</sup></td>
        <td>The name on the customer's ACH account.</td>
    </tr>
    <tr>
        <td>checkaccount<sup>†</sup></td>
        <td>The customer's bank account number.</td>
    </tr>
    <tr>
        <td>checkaba<sup>†</sup></td>
        <td>The customer's bank routing number.</td>
    </tr>
    <tr>
        <td>account_type<sup>†</sup></td>
        <td>The customer's ACH account type.<br>
            <span class="allowed">Values: 'checking' or 'savings'</span></td>
    </tr>
    <tr>
        <td>account_holder_type<sup>†</sup></td>
        <td>The customer's ACH account entity.<br>
            <span class="allowed">Values: 'personal' or 'business'</span></td>
    </tr>
    <tr>
        <td>sec_code</td>
        <td>ACH standard entry class codes.<br>
            <span class="allowed">Values: 'PPD', 'WEB', 'TEL', or 'CCD'</span></td>
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
        <td>orderid</td>
        <td>Order ID</td>
    </tr>
    <tr>
        <td>order_description</td>
        <td>Order Description<br>
            <span class="allowed">Legacy variable includes: orderdescription</span></td>
    </tr>
    <tr>
        <td>merchant_defined_field_#</td>
        <td>Can be set up in merchant control panel under 'Settings'-&gt;'Merchant Defined Fields'.</td>
    </tr>
    <tr>
        <td>ponumber</td>
        <td>Cardholder's purchase order number.</td>
    </tr>
    <tr>
        <td>processor_id</td>
        <td>If using Multiple MIDs, route to this processor (processor_id is obtained under Settings-&gt;Load Balancing in the Control Panel).</td>
    </tr>
    <tr>
        <td>customer_receipt</td>
        <td>If set to true, when the customer is charged, they will be sent a transaction receipt.<br>
        <span class="allowed">Values: 'true' or 'false'</span></td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required
** 	Required unless 'month_frequency' and 'day_of_month' is set.
*** 	Required unless 'day_frequency' is set.
**** 	Required for credit card transactions
† 	Required for ACH transactions</pre>

#### Update a Subscription's Billing Information

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>recurring<sup>*</sup></td>
        <td>Update the subscription's billing information.<br>
            <span class="allowed">Value: 'update_subscription'</span></td>
    </tr>
    <tr>
        <td>subscription_id<sup>*</sup></td>
        <td>The subscription ID that will be updated.</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>

#### Delete a Subscription

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>recurring<sup>*</sup></td>
        <td>Delete the subscription. Customer will no longer be charged.<br>
            <span class="allowed">Value: 'delete_subscription'</span></td>
    </tr>
    <tr>
        <td>subscription_id<sup>*</sup></td>
        <td>The subscription ID that will be deleted.</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>
