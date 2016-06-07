
<div class="table-responsive">
<table class="table table-bordered table-striped table-vertical-middle">
    <tbody><tr>
        <th class="variable">Variable Name</th>
        <th>Description(Allowed Values)[Format]</th>
    </tr>
    <tr>
        <td>username<sup>*</sup></td>
        <td>Merchant username.</td>
    </tr>
    <tr>
        <td>password<sup>*</sup></td>
        <td>Merchant password.</td>
    </tr>
    <tr>
        <td rowspan="7">condition</td>
        <td>
            A combination of values listed below can be passed and should be separated by commas. For example, to retrieve all transactions pending settlement or complete, the following could be used:                    <br><br>Example: condition=pendingsettlement,complete
        </td>
    </tr>
    <tr>
        <td><span class="value">pending:</span> 'Auth Only' transactions that are awaiting capture.</td>
    </tr>
    <tr>
        <td><span class="value">pendingsettlement:</span> This transaction is awaiting settlement.</td>
    </tr>
    <tr>
        <td><span class="value">failed:</span> This transaction has failed.</td>
    </tr>
    <tr>
        <td><span class="value">canceled:</span> This transaction has been voided.</td>
    </tr>
    <tr>
        <td><span class="value">complete:</span> This transaction has settled.</td>
    </tr>
    <tr>
        <td><span class="value">unknown:</span> An unknown error was encountered while processing this transaction.</td>
    </tr>
    <tr>
        <td rowspan="3">transaction_type</td>
        <td>Retrieves only transactions with the specified transaction type. Use one of the following to specify payment type:</td>
    </tr>
    <tr>
        <td>cc: A credit card transaction.</td>
    </tr>
    <tr>
        <td>ck: A check transaction.</td>
    </tr>
    <tr>
        <td rowspan="8">action_type</td>
        <td>
            Retrieves only transactions specified action types. A combination of the values can be used and should be separated by commas. For example, to retrieve all transactions with credit or refund actions, use the following:                    <br><br>Example: action_type=refund,credit
        </td>
    </tr>
    <tr>
        <td><span class="value">sale:</span> Sale transactions.</td>
    </tr>
    <tr>
        <td><span class="value">refund:</span> Refund transactions.</td>
    </tr>
    <tr>
        <td><span class="value">credit:</span> Credit transactions.</td>
    </tr>
    <tr>
        <td><span class="value">auth:</span> 'Auth Only' transactions.</td>
    </tr>
    <tr>
        <td><span class="value">capture:</span> Captured transactions.</td>
    </tr>
    <tr>
        <td><span class="value">void:</span> Voided transactions.</td>
    </tr>
    <tr>
        <td><span class="value">return:</span> Electronic Check (ACH) transactions that have returned before (return) or after settlement (late_return).</td>
    </tr>
    <tr>
        <td>transaction_id</td>
        <td>Specify a transaction ID or a comma separated list of transaction IDs to retrieve information on.</td>
    </tr>
    <tr>
        <td>order_id</td>
        <td>Retrieves only transactions with the specified Order ID.</td>
    </tr>
    <tr>
        <td>last_name</td>
        <td>Retrieves only transactions with the specified last name.</td>
    </tr>
    <tr>
        <td>email</td>
        <td>Retrieves only transactions with the specified billing email address.</td>
    </tr>
    <tr>
        <td>cc_number</td>
        <td>Retrieves only transactions with the specified credit card number. You can use either the full number or the last 4 digits of the credit card number.</td>
    </tr>
    <tr>
        <td>merchant_defined_field_#</td>
        <td>Retrieves only transactions with the specified merchant defined field value.<br>Replace the '#' with a field number (1-20) (Example: merchant_defined_field_12=value)</td>
    </tr>
    <tr>
        <td>start_date</td>
        <td>Only transactions that have been modified on or after this date will be retrieved. Note that any actions performed on a transaction will cause the modified date to be updated.                    <br><br>Format: YYYYMMDDhhmmss</td>
    </tr>
    <tr>
        <td>end_date</td>
        <td>Only transactions that have been modified on or before this date will be retrieved. Note that any actions performed on a transaction will cause the modified date to be updated.                    <br><br>Format: YYYYMMDDhhmmss</td>
    </tr>
    <tr>
        <td rowspan="3">report_type</td>
        <td>
            Allows customer vault information or a html receipt to be returned. If you would like to query the Customer Vault to view what customer information is stored in the Customer Vault, you must set the customer_vault variable.<br>
            If you omit the customer_vault_id, the system will return all customers that are stored in the vault. If you include a customer_vault_id, it will return the customer record associated with that ID.<br>
            Example: report_type=customer_vault&amp;customer_vault_id=123456789
        </td>
    </tr>
    <tr>
        <td><span class="value">receipt:</span> Will return an html receipt for a specified transaction id.</td>
    </tr>
    <tr>
        <td><span class="value">customer_vault:</span> Set the Query API to return Customer Vault data.</td>
    </tr>
    <tr>
        <td>mobile_device_license</td>
        <td>
            Retrieves only transactions processed using the specified mobile device.<br>
            The device IDs for this parameter are available in the License Manager.<br>
            Use 'any_mobile' to retrieve all mobile transactions.<br>
            A combination of the values can be used and should be separated by commas.<br>
            Can not be used with 'mobile_device_nickname'.                    <br><br>Example 1: mobile_device_license=D91AC56A-4242-3131-2323-2AE4AA6DB6EB                    <br>Example 2: mobile_device_license=any_mobile                </td>
    </tr>
    <tr>
        <td>mobile_device_nickname</td>
        <td>
            Retrieves only transactions processed using mobile devices with the specified nickname.<br>
            The nicknames for this parameter are available in the License Manager.<br>
            Can not be used with 'mobile_device_license'.                    <br><br>Example (URL encoded): mobile_device_nickname=Jim's%20iPhone                </td>
    </tr>
    <tr>
        <td>customer_vault_id</td>
        <td>Set a specific Customer Vault record. Should only be used when report_type=customer_vault.</td>
    </tr>
</tbody></table>
</div>

