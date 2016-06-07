#### Sale (sale)

Transaction sales are submitted and immediately flagged for settlement.

#### Authorization (auth)

Transaction authorizations are authorized immediately but are not flagged for settlement. These transactions must be flagged for settlement using the capture transaction type. Authorizations typically remain active for three to seven business days.

#### Capture (capture)

Transaction captures flag existing authorizations for settlement. Only authorizations can be captured. Captures can be submitted for an amount equal to or less than the original authorization.

#### Void (void)

Transaction voids will cancel an existing sale or captured authorization. In addition, non-captured authorizations can be voided to prevent any future capture. Voids can only occur if the transaction has not been settled.

#### Refund (refund)

Transaction refunds will reverse a previously settled transaction. If the transaction has not been settled, it must be voided instead of refunded.

#### Credit (credit)

Transaction credits apply an amount to the cardholder's card that was not originally processed through the Gateway. In most situations credits are disabled as transaction refunds should be used instead.

#### Validate (validate)

This action is used for doing an "Account Verification" on the cardholder's credit card without actually doing an authorization.

#### Update (update)

Transaction updates can be used to update previous transactions with specific order information, such as a tracking number and shipping carrier.