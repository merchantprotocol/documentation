The given article is devoted to the Multi-Warehouse Magento extension's Single Mode Options.

![System - Configuration - Catalog Warehouses - Single Mode Options](System_Configuration_Catalog_Warehouses_SingleModeOptions.png)


In the previous article, we used the illustration to show the block diagram in Figure 1. Options Overview:

![Figure 1. Options Overview](multiple-warehouse-figure-1-1.png)

The purpose of this paper is to explain the Single Mode Options. Let’s take a look at the following schematic diagram.

![Figure 2. General Options](Fig_2_1.png)
 

In the Configuration article, we mentioned that a customer may be assigned to a particular warehouse. You can configure this option per delivery method: Assigned Areas, Nearest, Assigned Stores, Manual Selection.

Let’s represent the initial data in tabular form:

 
Customer |	City |	State |	Zip / Postal Code |	Country
----- | ----- | ----- | ----- | ----- | 
John Doe |	Colby |	Kansas |	67701 |	United States

**Table 1 Customer Data**

 
Warehouse |	City |	State |	Zip / Postal Code |	Country
----- | ----- | ----- | ----- | ----- | 
Colorado |	Denver |	Colorado |	80202 |	United States
Kansas |	Kansas City |	Kansas |	66117 |	United States
New York |	New York |	New York |	10118 |	United States
California |	Sacramento |	California |	95866 |	United States

**Table 2 Warehouse Data**

 
#### Assigned Areas

If this option is enabled, the Areas tab becomes visible to the warehouse editor. You assign a customer to a warehouse by area (region, state, etc). In this case, that will be Kansas, since this warehouse is located in the customer’s state. The system tracks the customer’s location using Customer Locator feature.

#### Nearest

Use this option to assign a customer to the closest warehouse. In this case, the system automatically chooses Colorado because it's nearest to John Doe’s location.

#### Assigned Stores

As you know, each website is a collection of store views that share the same customer, order information and shopping cart details. This option may be useful if you have multiple store views in your website and want to map these views to the warehouses. The stores tab is available for a warehouse editor if this method is active. This way a customer will be assigned to a warehouse according to the current store view.

#### Manual Selection

This method allows a customer to choose the appropriate warehouse manually. If this option is enabled, then Your Warehouse box becomes visible to a customer.


