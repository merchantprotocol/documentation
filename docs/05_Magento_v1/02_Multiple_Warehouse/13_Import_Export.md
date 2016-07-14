The Multi-Warehouse extends the Magento Dataflow module in order to handle product stock importing / exporting for each warehouse individually.

You will need to create separated advanced profiles to import / export product stocks for each warehouse. Let's suppose we need profiles for the Kansas warehouse. Kansas' identifier equals 2.

In the administrator panel: System -> Import/Export -> Dataflow – Advanced Profiles.

Enter the next data for the profile:

The Profile Name is Export Kansas Product Stocks

Actions XML

    <action type="catalog/convert_adapter_product" method="load">
        <var name="store"><![CDATA[0]]></var>
        <var name="warehouse"><![CDATA[2]]></var>
    </action>
    <action type="catalog/convert_parser_product" method="unparse">
        <var name="store"><![CDATA[0]]></var>
        <var name="warehouse"><![CDATA[2]]></var>
    </action>
    <action type="dataflow/convert_mapper_column" method="map">
        <var name="map">
            <map name="store"><![CDATA[store]]></map>
            <map name="sku"><![CDATA[sku]]></map>
            <map name="qty"><![CDATA[qty]]></map>
            <map name="is_in_stock"><![CDATA[is_in_stock]]></map>
        </var>
        <var name="_only_specified">true</var>
    </action>
    <action type="dataflow/convert_parser_csv" method="unparse">
        <var name="delimiter"><![CDATA[,]]></var>
        <var name="enclose"><![CDATA["]]></var>
        <var name="fieldnames">true</var>
    </action>
    <action type="dataflow/convert_adapter_io" method="save">
        <var name="type">file</var>
        <var name="path">var/export</var>
        <var name="filename"><![CDATA[export_kansas_product_stocks.csv]]></var>
    </action>

Importing the profile may look like this:

The Profile Name is Import Kansas Product Stocks

Actions XML


    <action type="dataflow/convert_adapter_io" method="load">
       <var name="type">file</var>
       <var name="path">var/import</var>
       <var name="filename"><![CDATA[import_kansas_product_stocks.csv]]></var>
       <var name="format"><![CDATA[csv]]></var>
    </action>
    <action type="dataflow/convert_parser_csv" method="parse">
       <var name="delimiter"><![CDATA[,]]></var>
       <var name="enclose"><![CDATA["]]></var>
       <var name="fieldnames">true</var>
       <var name="store"><![CDATA[0]]></var>
       <var name="decimal_separator"><![CDATA[.]]></var>
       <var name="adapter">catalog/convert_adapter_product</var>
       <var name="warehouse"><![CDATA[2]]></var>
    </action>

