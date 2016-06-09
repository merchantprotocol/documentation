Managing currencies is a Magento native function. It is not something that our extensions add or modify. This document will teach you how to add additional currencies to Magento to use within our extension.

To add or remove the currencies that a customer can select, and that you can manage from the admin area, log into the admin panel of your Magento store and go to the following location:

	System > Configuration > General > Currency Setup > Currency Options

The currency options panel has a field labeled **Allowed Currencies**. This is a multi-select box that will allow you to select all of the currencies that you would like to offer on your store. Holding the control *Ctrl* key you will allow you to choose every currency that you want to offer. Holding the select key will allow you to select a range of currencies to offer.

The Allowed Currencies multi-select box will provide you with additional currency options when working within the administrative area.

### Setting a Store Wide Default Currency

In this same section you will see **Base Currency** and **Default Display Currency**. The display currency will be used in your product details and product lists. This is what customers will see when surfing your store and browsing your lists of products.

The **Base Currency** is used to communicate pricing to your payment gateway. This will allow you to show prices in one currency with the default display currency, yet transact in a different currency.