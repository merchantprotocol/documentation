#### Add Plan XML Request

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;add-plan&gt;</td>
        <td>Add a recurring plan that subscriptions can be added to in the future.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the Security Keys section of the Control Panel Settings.</td>
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
        <td>name<sup>*</sup></td>
        <td>The display name of the plan.</td>
    </tr>
    <tr>
        <td>plan-id<sup>*</sup></td>
        <td>The unique plan ID that references only this recurring plan.</td>
    </tr>
    <tr>
        <td>day-frequency<sup>**</sup></td>
        <td>How often, in days, to charge the customer. Cannot be set with 'month-frequency' or 'day-of-month'.</td>
    </tr>
    <tr>
        <td>month-frequency<sup>***</sup></td>
        <td>How often, in months, to charge the customer. Cannot be set with 'day-frequency'. Must be set with 'day-of-month'.<br>
        <span class="allowed">Values: 1 through 24</span></td>
    </tr>
    <tr>
        <td>day-of-month<sup>***</sup></td>
        <td>The day that the customer will be charged. Cannot be set with 'day-frequency'. Must be set with 'month-frequency'.<br>
        <span class="allowed">Values: 1 through 31 - for months without 29, 30, or 31 days, the charge will be on the last day</span></td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/plan&gt;</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/add-plan&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required
** 	Required unless 'month-frequency' and 'day-of-month' is set.
*** 	Required unless 'day-frequency' is set.</pre>

#### Delete a Subscription

<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th>Element</th>
        <th>Description</th>
    </tr>
    <tr>
        <td class="outerElement">&lt;delete-subscription&gt;</td>
        <td>Delete the subscription. Customer will no longer be charged.</td>
    </tr>
    <tr>
        <td>api-key<sup>*</sup></td>
        <td>api-key is obtained in the Security Keys section of the Control Panel Settings.</td>
    </tr>
    <tr>
        <td>subscription-id<sup>*</sup></td>
        <td>The subscription ID that will be deleted.</td>
    </tr>
    <tr>
        <td class="outerElement" colspan="2">&lt;/delete-subscription&gt;</td>
    </tr>
</tbody></table>
</div>

<pre>* 	Always required</pre>