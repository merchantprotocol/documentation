## Variables Available for Transactional Emails

Not all emails will have all variables available to them. Each email trigger provides different variables that you can use in the template.


### Recurring Order Failed to Process

This email is sent whenever an attempt on a recurring order fails. The system provides you with the ability to attempt a to process a recurring order up to four times before it is cancelled or ignored. The transactional email should be generic because there are many, many reasons why a recurring order should fail. The most common reason is insufficient funds.

**expired_url** This url will allow customers to place a new credit card on file.

    {{var expired_url}}

**recurring** The entire recurring order object is made available with this variable. You can see more about the recurring order object in these docs.

**quote** Each recurring order is associated with a Magento quote object. This is the entire quote object that was used to create the order object.

**billing** The billing address object.

**payment** The payment object associated with the order. Typically this may have additional information about why the order failed.

**attempt** The number of attempts that have been made to process the order. 1,2,3,4

    {{var attempt}}

**error_message** This is the exact error message returned by Magento as to why the recurring order failed to process and create an order.

    {{var error_message}}


### Recurring Order was Created

Recurring Orders may be created by the administrators from the Magento Admin area, or during checkout when a customer purchases a Trigger Product. Read more about trigger products under the Recurring Plan section of these docs.

**recurring** The entire recurring order object is made available with this variable. You can see more about the recurring order object in these docs.

**quote** Each recurring order is associated with a Magento quote object. This is the entire quote object that was used to create the order object.

**billing** The billing address object.

**payment** The payment object associated with the order. Typically this may have additional information about why the order failed.


### Recurring Order Reminder

This email is sent a few days before the Recurring Order is processed and an order is created.

**recurring** The entire recurring order object is made available with this variable. You can see more about the recurring order object in these docs.

**quote** Each recurring order is associated with a Magento quote object. This is the entire quote object that was used to create the order object.

**billing** The billing address object.

**payment** The payment object associated with the order. Typically this may have additional information about why the order failed.


### Expiring Credit Card on File

After each Recurring Order is processed a check against the credit card expiration date is made. If the credit card is going to expire prior to the next order date this email will be sent to the customer.

**expired_url** This url will allow customers to place a new credit card on file.

    {{var expired_url}}

**recurring** The entire recurring order object is made available with this variable. You can see more about the recurring order object in these docs.

**quote** Each recurring order is associated with a Magento quote object. This is the entire quote object that was used to create the order object.

**billing** The billing address object.

**payment** The payment object associated with the order. Typically this may have additional information about why the order failed.


### Recurring Order Updated

**recurring** The entire recurring order object is made available with this variable. You can see more about the recurring order object in these docs.

**quote** Each recurring order is associated with a Magento quote object. This is the entire quote object that was used to create the order object.

**billing** The billing address object.

**payment** The payment object associated with the order. Typically this may have additional information about why the order failed.


### Recurring Order Cancelled

**recurring** The entire recurring order object is made available with this variable. You can see more about the recurring order object in these docs.

**quote** Each recurring order is associated with a Magento quote object. This is the entire quote object that was used to create the order object.

**billing** The billing address object.

**payment** The payment object associated with the order. Typically this may have additional information about why the order failed.

 * * * 

## Working With Object Variables
 
### Recurring Order Object

  	//Recurring Order Object
  	{{var recurring.getCustomerId()}}
  	{{var recurring.getCustomerEmail()}}
  	{{var recurring.getInterval()}}
  	{{var recurring.getIntervalType()}}
  	{{var recurring.getOrderDate()}}
  	{{var recurring.getFailedAttempt()}}
  	{{var recurring.getErrors()}}
  	{{var recurring.getStoreId()}}
  	{{var recurring.getEnabled()}}
  	{{var recurring.getCreditCardId()}}
  	{{var recurring.getPlanId()}}
  	{{var recurring.getShippingMethod()}}
  	{{var recurring.getCancelling()}}
  	{{var recurring.getPlan()}}
  	{{var recurring.getCreditcardObj()}}
  	
  	//Shipping Address Object
   	{{var recurring.getShippingAddressObj().getName()}} //Get the first and last name
  	{{var recurring.getShippingAddressObj().getPrefix()}}
  	{{var recurring.getShippingAddressObj().getFirstName()}}
  	{{var recurring.getShippingAddressObj().getMiddleName()}}
  	{{var recurring.getShippingAddressObj().getLastName()}}
  	{{var recurring.getShippingAddressObj().getSuffix()}}
  	{{var recurring.getShippingAddressObj().getStreet1()}}
  	{{var recurring.getShippingAddressObj().getStreet2()}}
  	{{var recurring.getShippingAddressObj().getCity()}}
  	{{var recurring.getShippingAddressObj().getRegion()}}
  	{{var recurring.getShippingAddressObj().getPostcode()}}
  	{{var recurring.getShippingAddressObj().getCountry()}} //Get the country’s ID
  	{{var recurring.getShippingAddressObj().getCountryModel().getName()}} //Get the country’s full name
  	{{var recurring.getShippingAddressObj().getRegion()}}
  	{{var recurring.getShippingAddressObj().getTelephone()}}

### Depend Condition

    {{depend order.getIsNotVirtual()}}
    
    {{/depend}}
    
    {{depend salable}}
    
    {{/depend}}

### If Condition

    {{if order.getIsNotVirtual()}}
    {{else}} //else is optional
    {{/if}}


