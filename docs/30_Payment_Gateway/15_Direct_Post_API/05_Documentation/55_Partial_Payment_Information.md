#### Request Details

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>partial_payment_id</td>
        <td>Unique identifier returned when making the original transaction. This should only be used for secondary transactions.</td>
    </tr>
    <tr>
        <td rowspan="3">partial_payments</td>
        <td>This variable allows the following two values to be passed to it:            </td></tr>
    <tr>
        <td><span class="value">settle_partial:</span> Settles any amount of tender collected (captured partial auth's and approved partial sales) at cut off.</td>
    </tr>
    <tr>
        <td><span class="value">payment_in_full:</span> Required that any split tendered transaction is collected in-full before settlement gets initiated.</td>
    </tr>
    <tr>
        <td>type</td>
        <td>This variable can be passed the value 'complete_partial_payment' which will complete a payment_in_full transaction that has not been collected in full. This allows industries that require payment_in_full but subsequently decide to still settle the transaction even though it has not been collected in full.</td>
    </tr>
</tbody></table>
</div>

#### Response Details

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>partial_payment_id</td>
        <td>A numeric identifier which is used when submitting subsequent transactions.</td>
    </tr>
    <tr>
        <td>partial_payment_balance</td>
        <td>Returns the payment's remaining balance.</td>
    </tr>
    <tr>
        <td>amount_authorized</td>
        <td>Provides the amount that was authorized.</td>
    </tr>
</tbody></table>
</div>

#### Examples

Example 1: In this request, if nothing more was done, a transaction for 30.00 would settle at the next cut-off.

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <td>Request</td>
        <td>...type=sale&amp;partial_payments=settle_partial&amp;ccnumber=4111111111111111&amp;ccexp=1016&amp;amount=100.00...</td>
    </tr>
    <tr>
        <td>Response</td>
        <td>...response=1&amp;partial_payment_id=123456789&amp;partial_payment_balance=70.00&amp;amount=30.00...</td>
    </tr>
</tbody></table>
</div>

Example 2: In this request, payment_in_full was required and two transaction were collected - this transaction would settle at the next cut-off.

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
<tbody><tr>
    <td>Request 1</td>
    <td>...type=sale&amp;partial_payments=payment_in_full&amp;ccnumber=4111111111111111&amp;ccexp=1016&amp;amount=100.00...</td>
</tr>
<tr>
    <td>Response 1</td>
    <td>...response=1&amp;partial_payment_id=123456789&amp;partial_payment_balance=70.00&amp;amount=30.00...</td>
</tr>
<tr>
    <td>Request 2</td>
    <td>...type=sale&amp;partial_payment_id=123456789&amp;partial_payments=payment_in_full&amp;ccnumber=4000000000000002&amp;ccexp=1016&amp;amount=70.00...</td>
</tr>
<tr>
    <td>Response 2</td>
    <td>...response=1&amp; partial_payment_id=123456789&amp;partial_payment _balance=0.00&amp;amount=70.00...</td>
</tr>
</tbody></table>
</div>

Example 3: In this example, payment_in_full was required and two transactions were attempted, but only one collected. The merchant decided to force it out anyways - this transaction would settle at the next cut-off.

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <td>Request 1</td>
        <td>...type=sale&amp;partial_payments=payment_in_full&amp;ccnumber=4111111111111111&amp;ccexp=1016&amp;amount=100.00...</td>
    </tr>
    <tr>
        <td>Response 1</td>
        <td>...response=1&amp;partial_payment_id=123456789&amp;partial_payment_balance=70.00&amp;amount=30.00...</td>
    </tr>
    <tr>
        <td>Request 2</td>
        <td>...type=sale&amp;partial_payment_id=123456789&amp;partial_payments=payment_in_full&amp;ccnumber=4000000000000002&amp;ccexp=1016&amp;amount=70.00...</td>
    </tr>
    <tr>
        <td>Response 2</td>
        <td>...response=2&amp;partial_payment_id=123456789&amp;partial_payment_balance=70.00&amp;amount=70.00...</td>
    </tr>
    <tr>
        <td>Request 3</td>
        <td>...type=complete_partial_payment&amp; partial_payment_id=123456789&amp;partial_payments=payment_in_full&amp;amount=70.00...</td>
    </tr>
    <tr>
        <td>Response 3</td>
        <td>...response=1&amp; partial_payment_id=123456789&amp;partial_payment_balance=0.00&amp;amount=70.00...</td>
    </tr>
</tbody></table>
</div>