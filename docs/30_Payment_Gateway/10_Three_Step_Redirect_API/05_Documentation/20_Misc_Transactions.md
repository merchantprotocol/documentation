#### Capture XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;capture&gt;</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>transaction-id<sup>*</sup></td>
        <td>Original Payment Gateway transaction id.</td>
    </tr>
    <tr>
        <td>amount</td>
        <td>Total amount to be settled, this amount may be equal to or less than the authorized amount.</td>
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
        <td>Shipping carrier used.<br>
            <span class="allowed">Values: 'ups', 'fedex', 'dhl', or 'usps'</span></td>
    </tr>
    <tr>
        <td>order-id</td>
        <td>Order ID.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/capture&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Required
</pre>

#### Void XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;void&gt;</td>
    </tr><tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>transaction-id<sup>*</sup></td>
        <td>Original Payment Gateway transaction id.</td>
    </tr>
    <tr>
        <td>merchant-defined-field-#</td>
        <td>Merchant specified custom fields.<br>
            <span class="allowed">Format:                             &lt;merchant-defined-field-1&gt;Value&lt;/merchant-defined-field-1&gt;
            </span>
        </td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/void&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Required
</pre>

#### Update XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;update&gt;</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>transaction-id<sup>*</sup></td>
        <td>Original Payment Gateway transaction id.</td>
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
        <td>Shipping carrier used.<br>
            <span class="allowed">Values: 'ups', 'fedex', 'dhl', or 'usps'</span></td>
    </tr>
    <tr>
        <td>order-id</td>
        <td>Order ID.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/update&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Required
</pre>

#### Complete Partial Payment XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;complete-partial-payment&gt;</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the security keys section of the control panel settings.</td>
    </tr>
    <tr>
        <td>partial-payment-id<sup>*</sup></td>
        <td>Specify a partial payment ID. Required to collect an additional amount associated with an existing Partial Payment Transaction. Do not use on initial transaction.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/complete-partial-payment&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>
* 	Required
</pre>