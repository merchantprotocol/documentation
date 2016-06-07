#### Complete Action XML Request

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
* 	Required</pre>

#### Complete Action XML Response

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">XML Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">response</td>
    </tr>
    <tr>
        <td>result</td>
        <td>
            1=Transaction Approved<br>
            2=Transction Declined<br>
            3=Error in transaction data or system error                </td>
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
        <td>action-type</td>
        <td>Action type that was initially specified.<br>
            <span class="allowed">Values: 'sale', 'auth', 'credit', 'validate', or 'offline'</span></td>
    </tr>
    <tr>
        <td>subscription-id</td>
        <td>Subscription ID used or created during action.</td>
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
        <td>payments</td>
        <td>The number of payments before the recurring plan is complete.<br>
            <span class="allowed">Notes: '0' for until canceled</span></td>
    </tr>
    <tr>
        <td>amount</td>
        <td>The plan amount to be charged each billing cycle.<br>
        <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>name</td>
        <td>The display name of the plan.</td>
    </tr>
    <tr>
        <td>plan-id</td>
        <td>The plan ID that is associated with this subscription.</td>
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
        <td class="outerElement">&lt;billing&gt;</td>
        <td>The customer's billing information.</td>
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
        <td>Drivers license number.</td>
    </tr>
    <tr>
        <td>drivers-license-dob</td>
        <td>Drivers license date of birth.</td>
    </tr>
    <tr>
        <td>drivers-license-state</td>
        <td>Customer's drivers license state.<br>
            <span class="allowed">Format: CC</span></td>
    </tr>
    <tr>
        <td>cc-number</td>
        <td>Masked credit card number.<br>
            <span class="allowed">Format: XXXXXX********XXXX</span></td>
    </tr>
    <tr>
        <td>cc-exp</td>
        <td>Credit card expiration.<br>
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
        <td>Shipping id used or created during action.</td>
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
        <td>priority</td>
        <td>Shipping id priority.<br>
            <span class="allowed">Format: Numeric, 1-255</span></td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/response&gt;</td>
    </tr>
</tbody></table>
</div>