#### Standard Response

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>response</td>
        <td>
            1 = Transaction Approved<br>
            2 = Transaction Declined<br>
            3 = Error in transaction data or system error                </td>
    </tr>
    <tr>
        <td>responsetext</td>
        <td>Textual response</td>
    </tr>
    <tr>
        <td>authcode</td>
        <td>Transaction authorization code.</td>
    </tr>
    <tr>
        <td>transactionid</td>
        <td>Payment gateway transaction id.</td>
    </tr>
    <tr>
        <td>avsresponse</td>
        <td>AVS response code (See Appendix 1).</td>
    </tr>
    <tr>
        <td>cvvresponse</td>
        <td>CVV response code (See Appendix 2).</td>
    </tr>
    <tr>
        <td>orderid</td>
        <td>The original order id passed in the transaction request.</td>
    </tr>
    <tr>
        <td>response_code</td>
        <td>Numeric mapping of processor responses (See Appendix 3).</td>
    </tr>
</tbody></table>
</div>