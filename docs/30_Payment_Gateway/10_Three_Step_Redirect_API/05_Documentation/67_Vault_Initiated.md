#### Customer Vault initiated Sale/Auth/Credit/Offline XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;sale|auth|credit|offline&gt;</td>
        <td>Any and all optional fields described here can be appended to this request.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>amount<sup>*</sup></td>
        <td>Total amount to be charged.<br>
            <span class="allowed">Format: x.xx</span></td>
    </tr>
    <tr>
        <td>processor-id</td>
        <td>If using multiple MIDs, route to this processor. The values for 'processor-id' are obtained under 'Settings'-&gt;'Load Balancing' in the Control Panel.</td>
    </tr>
    <tr>
        <td>customer-vault-id<sup>*</sup></td>
        <td>Load Customer details from an existing Customer Vault record.</td>
    </tr>
    <tr>
        <td class="outerElement">&lt;billing&gt;</td>
        <td>The customer's billing information.</td>
    </tr>
    <tr>
        <td>billing-id</td>
        <td>Load Billing ID details from an existing Billing record. If not set, the billing-id with the highest priority will be used by default.</td>
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
        <td>Load shipping id details from an existing shipping record. If unset, the billing-id with the highest priority will be used by default.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/shipping&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/sale|auth|credit|offline&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Required
</pre>