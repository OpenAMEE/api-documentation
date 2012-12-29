Data Reference
--------------

[Data Categories](apb.php#data-category-reference)

[Properties](apb.php#d5e1095)

[Get Data Category](apb.php#get-data-category-reference)

[Look up a Data Item UID](apb.php#drilldown-reference)

[Data Items](apb.php#data-item-reference)

[Properties](apb.php#d5e1253)

[Get Data Item](apb.php#get-data-item-reference)

[Data Item Values](apb.php#data-item-value-reference)

[Properties](apb.php#d5e1311)

[Get Single Value](apb.php#get-data-item-value-reference)

AMEEconnect provides reference-style access to data categories and items
curated by AMEE. It also provides drilldown resources to allow
interactive or automatic selection of data items by client applications.

Data Categories
---------------

### Properties

  Property   Description
  ---------- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  UID        A 12-letter unique identifier for the category. See [the section called “UIDs”](apc.php#uid-reference "UIDs") for more information.
  created    The time and date on which the category was created.
  modified   The time and date on which the category was last modified. Note that this does not track changes to items inside the category, such as to data item values, only to the category itself.
  name       The display name for the category.
  path       The path of this Data Category. A path forms part of the URL.

### Get Data Category

Lists all subcategories and data items in a data category

  -------------------------- ---------------------------------------------------
  URL                        https://{server}.amee.com/data[/{category\_path}]
  HTTP Method                GET
  Response Content-Type      application/xml or application/json
  Successful Response Code   200 OK
  -------------------------- ---------------------------------------------------

#### Optional Parameters

  Parameter      Description
  -------------- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  page           If there is more than one page of data items, retrieve the specified page. Default is to fetch page 1. See [the section called “Paging”](apc.php#paging-reference "Paging").
  itemsPerPage   Specify the number of data items returned in a single page. Default is to fetch 10 items per page. See [the section called “Paging”](apc.php#paging-reference "Paging").

The response contains a JSON or XML encoded description of the data
category. The result will contain descriptions of subcategories or data
items if they exist inside the data category.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic HTTP/1.1
Accept: application/json
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "dataCategory": {
    "modified": "2011-02-10 20:30:23.0",
    "name": "Generic",
    "dataCategory": {
      "name": "Car",
      "uid": "1D95119FB149",
      "path": "car",
      "deprecated": false
    },
    "uid": "87E55DA88017",
    "path": "generic",
    "itemDefinition": {
      "modified": "2011-02-08 10:28:53.0",
      "name": "Car Generic",
      "drillDown": "fuel,size",
      "uid": "123C4A18B5D6",
      "environment": {
        "uid": "5F5887BCF726"
      },
      "created": "2007-07-27 07:30:44.0"
    },
    "environment": {
      "name": "AMEE",
      "itemsPerPage": 10,
      "uid": "5F5887BCF726",
      "path": "",
      "description": "",
      "itemsPerFeed": 10,
      "owner": ""
    },
    "deprecated": false,
    "created": "2007-07-27 07:30:44.0"
  },
  "path": "/transport/car/generic",
  "children": {
    "dataItems": {
      "label": "DataItems",
      "rows": [
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "average, average",
          "size": "average",
          "kgCO2PerKmUS": "0.2700",
          "kgCO2PerKm": "0.2028",
          "fuel": "average",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "30C5C41B45DE",
          "path": "30C5C41B45DE",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; AMEE",
          "endDate": "",
          "created": "2009-03-23 12:09:30.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "cng, large",
          "size": "large",
          "kgCO2PerKmUS": "0.2586",
          "kgCO2PerKm": "0.2586",
          "fuel": "cng",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "735DC4D41F2D",
          "path": "735DC4D41F2D",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2009-03-08 21:48:20.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "cng, medium",
          "size": "medium",
          "kgCO2PerKmUS": "0.1862",
          "kgCO2PerKm": "0.1862",
          "fuel": "cng",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "BCFF130729DA",
          "path": "BCFF130729DA",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2009-03-08 21:48:20.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "diesel, large",
          "size": "large",
          "kgCO2PerKmUS": "0.2558",
          "kgCO2PerKm": "0.2558",
          "fuel": "diesel",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "4F6CBCEE95F7",
          "path": "4F6CBCEE95F7",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2007-07-27 10:04:57.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "diesel, medium",
          "size": "medium",
          "kgCO2PerKmUS": "0.1876",
          "kgCO2PerKm": "0.1876",
          "fuel": "diesel",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "7E2B2426C927",
          "path": "7E2B2426C927",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2007-07-27 10:04:57.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "diesel, small",
          "size": "small",
          "kgCO2PerKmUS": "0.1510",
          "kgCO2PerKm": "0.1510",
          "fuel": "diesel",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "57E6AC080BF4",
          "path": "57E6AC080BF4",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2007-07-27 10:04:57.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "lpg, large",
          "size": "large",
          "kgCO2PerKmUS": "0.2586",
          "kgCO2PerKm": "0.2586",
          "fuel": "lpg",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "7E34107219F0",
          "path": "7E34107219F0",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2009-03-08 21:48:19.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "lpg, medium",
          "size": "medium",
          "kgCO2PerKmUS": "0.1862",
          "kgCO2PerKm": "0.1862",
          "fuel": "lpg",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "F783E581A9D6",
          "path": "F783E581A9D6",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls",
          "endDate": "",
          "created": "2009-03-08 21:48:19.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "petrol, large",
          "size": "large",
          "kgCO2PerKmUS": "0.349",
          "kgCO2PerKm": "0.2955",
          "fuel": "petrol",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "CEA465039777",
          "path": "CEA465039777",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen",
          "endDate": "",
          "created": "2007-07-27 10:04:57.0"
        },
        {
          "modified": "2009-09-15 13:09:28.0",
          "label": "petrol, medium",
          "size": "medium",
          "kgCO2PerKmUS": "0.270",
          "kgCO2PerKm": "0.2128",
          "fuel": "petrol",
          "startDate": "1970-01-01T00:00:00Z",
          "uid": "9A9E8852220B",
          "path": "9A9E8852220B",
          "typicalDistance": "14481",
          "source": "http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen",
          "endDate": "",
          "created": "2007-07-27 10:04:57.0"
        }
      ]
    },
    "pager": {
      "items": 13,
      "currentPage": 1,
      "itemsPerPage": 10,
      "from": 1,
      "nextPage": 2,
      "to": 10,
      "itemsFound": 10,
      "start": 0,
      "requestedPage": 1,
      "lastPage": 2,
      "previousPage": -1
    },
    "dataCategories": [
      {
        "name": "Defra",
        "uid": "4D8AF5D762CA",
        "path": "defra"
      },
      {
        "name": "Electric",
        "uid": "7BE086B9F73E",
        "path": "electric"
      },
      {
        "name": "GHGP",
        "uid": "F5D27F3E905D",
        "path": "ghgp"
      },
      {
        "name": "Ipcc",
        "uid": "077101C7643F",
        "path": "ipcc"
      }
    ]
  },
  "apiVersion": "2.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic HTTP/1.1
Accept: application/xml
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<Resources xmlns="http://schemas.amee.cc/2.0">
  <DataCategoryResource>
    <Path>/transport/car/generic</Path>
    <DataCategory created="2007-07-27 07:30:44.0" modified="2011-02-10 20:30:23.0" uid="87E55DA88017">
      <Name>Generic</Name>
      <Path>generic</Path>
      <Deprecated>false</Deprecated>
      <Environment uid="5F5887BCF726"/>
      <DataCategory uid="1D95119FB149">
        <Name>Car</Name>
        <Path>car</Path>
        <Deprecated>false</Deprecated>
      </DataCategory>
      <ItemDefinition uid="123C4A18B5D6"/>
    </DataCategory>
    <Children>
      <DataCategories>
        <DataCategory uid="4D8AF5D762CA">
          <Name>Defra</Name>
          <Path>defra</Path>
        </DataCategory>
        <DataCategory uid="7BE086B9F73E">
          <Name>Electric</Name>
          <Path>electric</Path>
        </DataCategory>
        <DataCategory uid="F5D27F3E905D">
          <Name>GHGP</Name>
          <Path>ghgp</Path>
        </DataCategory>
        <DataCategory uid="077101C7643F">
          <Name>Ipcc</Name>
          <Path>ipcc</Path>
        </DataCategory>
      </DataCategories>
      <DataItems>
        <DataItem created="2009-03-23 12:09:30.0" modified="2009-09-15 13:09:28.0" uid="30C5C41B45DE">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.2700</kgCO2PerKmUS>
          <label>average, average</label>
          <kgCO2PerKm>0.2028</kgCO2PerKm>
          <size>average</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; AMEE</source>
          <path>30C5C41B45DE</path>
          <fuel>average</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2009-03-08 21:48:20.0" modified="2009-09-15 13:09:28.0" uid="735DC4D41F2D">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.2586</kgCO2PerKmUS>
          <label>cng, large</label>
          <kgCO2PerKm>0.2586</kgCO2PerKm>
          <size>large</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>735DC4D41F2D</path>
          <fuel>cng</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2009-03-08 21:48:20.0" modified="2009-09-15 13:09:28.0" uid="BCFF130729DA">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.1862</kgCO2PerKmUS>
          <label>cng, medium</label>
          <kgCO2PerKm>0.1862</kgCO2PerKm>
          <size>medium</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>BCFF130729DA</path>
          <fuel>cng</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2007-07-27 10:04:57.0" modified="2009-09-15 13:09:28.0" uid="4F6CBCEE95F7">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.2558</kgCO2PerKmUS>
          <label>diesel, large</label>
          <kgCO2PerKm>0.2558</kgCO2PerKm>
          <size>large</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>4F6CBCEE95F7</path>
          <fuel>diesel</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2007-07-27 10:04:57.0" modified="2009-09-15 13:09:28.0" uid="7E2B2426C927">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.1876</kgCO2PerKmUS>
          <label>diesel, medium</label>
          <kgCO2PerKm>0.1876</kgCO2PerKm>
          <size>medium</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>7E2B2426C927</path>
          <fuel>diesel</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2007-07-27 10:04:57.0" modified="2009-09-15 13:09:28.0" uid="57E6AC080BF4">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.1510</kgCO2PerKmUS>
          <label>diesel, small</label>
          <kgCO2PerKm>0.1510</kgCO2PerKm>
          <size>small</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>57E6AC080BF4</path>
          <fuel>diesel</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2009-03-08 21:48:19.0" modified="2009-09-15 13:09:28.0" uid="7E34107219F0">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.2586</kgCO2PerKmUS>
          <label>lpg, large</label>
          <kgCO2PerKm>0.2586</kgCO2PerKm>
          <size>large</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>7E34107219F0</path>
          <fuel>lpg</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2009-03-08 21:48:19.0" modified="2009-09-15 13:09:28.0" uid="F783E581A9D6">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.1862</kgCO2PerKmUS>
          <label>lpg, medium</label>
          <kgCO2PerKm>0.1862</kgCO2PerKm>
          <size>medium</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls</source>
          <path>F783E581A9D6</path>
          <fuel>lpg</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2007-07-27 10:04:57.0" modified="2009-09-15 13:09:28.0" uid="CEA465039777">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.349</kgCO2PerKmUS>
          <label>petrol, large</label>
          <kgCO2PerKm>0.2955</kgCO2PerKm>
          <size>large</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen</source>
          <path>CEA465039777</path>
          <fuel>petrol</fuel>
          <endDate/>
        </DataItem>
        <DataItem created="2007-07-27 10:04:57.0" modified="2009-09-15 13:09:28.0" uid="9A9E8852220B">
          <typicalDistance>14481</typicalDistance>
          <kgCO2PerKmUS>0.270</kgCO2PerKmUS>
          <label>petrol, medium</label>
          <kgCO2PerKm>0.2128</kgCO2PerKm>
          <size>medium</size>
          <startDate>1970-01-01T00:00:00Z</startDate>
          <source>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen</source>
          <path>9A9E8852220B</path>
          <fuel>petrol</fuel>
          <endDate/>
        </DataItem>
      </DataItems>
      <Pager>
        <Start>0</Start>
        <From>1</From>
        <To>10</To>
        <Items>13</Items>
        <CurrentPage>1</CurrentPage>
        <RequestedPage>1</RequestedPage>
        <NextPage>2</NextPage>
        <PreviousPage>-1</PreviousPage>
        <LastPage>2</LastPage>
        <ItemsPerPage>10</ItemsPerPage>
        <ItemsFound>10</ItemsFound>
      </Pager>
    </Children>
  </DataCategoryResource>
</Resources>
~~~~

.

### Look up a Data Item UID

Drilldowns are a special resource available within every Data Category
that contains Data Items.

As data items are identified by UIDs in AMEEconnect calls such as
creating Profile Items, a way is required of translating human-readable
choices into these UIDs. This is particularly important for large
categories, such as UK car models, which can contain many thousands of
data items.

Data item UIDs may be different on different AMEE platforms for the same
item. Because of this, data item UIDs should never be hardcoded into
client apps. Instead, you should use the drilldown URL (which doesn't
change) to obtain the UIDs, which can then be cached. Drilldown URLs may
be safely hardcoded, so that you don't necessarily have to iterate
through the choices each time if you already know which item you want to
get to.

Each call to the resource will give a list of choices. The client can
then select one of these and provide it as a parameter to the next
drilldown call. When the sequence of choices uniquely identifies one
data item, a single choice named 'uid' is returned. This is the UID that
should be used to refer to the chosen Data Item when creating Profile
Items (see [the section called “Create Profile
Item”](apa.php#create-profile-item-reference "Create Profile Item")).

  -------------------------- -------------------------------------------------------
  URL                        https://{server}.amee.com/data/{category\_path}/drill
  HTTP Method                GET
  Response Content-Type      application/xml or application/json
  Successful Response Code   200 OK
  -------------------------- -------------------------------------------------------

#### Optional Parameters

  Parameter        Description
  ---------------- ---------------------------------------------------------------------------------------------------------------------------------
  {choice\_name}   Any number of choices and the values chosen. See below for detailed explanation. Choices must be provided in the correct order.

The response body contains a number of sections. The 'choices' section
lists available drill choices. The 'selections' sections shows choices
that have already been made.

#### First Choice

The first request has no parameters, so fetches the options for the
first drill choice.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic/drill HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
            
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
            
~~~~

~~~~ {.programlisting}
{
  "dataCategory":{
    ...
  },
  "choices":{
    "choices":[
      {
        "name":"average",
        "value":"average"
      },
      {
        "name":"cng",
        "value":"cng"
      },
      {
        "name":"diesel",
        "value":"diesel"
      },
      {
        "name":"lpg",
        "value":"lpg"
      },
      {
        "name":"petrol",
        "value":"petrol"
      },
      {
        "name":"petrol hybrid",
        "value":"petrol hybrid"
      }
    ],
    "name":"fuel"
  },
  "selections":[],
  "itemDefinition":{
    ...
  }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic/drill HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
            
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
            
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<Resources>
  <DrillDownResource>
    <DataCategory uid="87E55DA88017">
      ...
    </DataCategory>
    <ItemDefinition uid="123C4A18B5D6"/>
    <Selections/>
    <Choices>
      <Name>fuel</Name>
      <Choices>
        <Choice>
          <Name>average</Name>
          <Value>average</Value>
        </Choice>
        <Choice>
          <Name>cng</Name>
          <Value>cng</Value>
        </Choice>
        <Choice>
          <Name>diesel</Name>
          <Value>diesel</Value>
        </Choice>
        <Choice>
          <Name>lpg</Name>
          <Value>lpg</Value>
        </Choice>
        <Choice>
          <Name>petrol</Name>
          <Value>petrol</Value>
        </Choice>
        <Choice>
          <Name>petrol hybrid</Name>
          <Value>petrol hybrid</Value>
        </Choice>
      </Choices>
    </Choices>
  </DrillDownResource>
</Resources>
~~~~

.

#### Second Choice

In this example, the user has picked 'diesel' as the selection for the
first choice. This is passed as a URL parameter to the second request.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic/drill?fuel=diesel HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
            
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
            
~~~~

~~~~ {.programlisting}
{
  "dataCategory":{
    ...
  },
  "choices":{
    "choices":[
      {
        "name":"large",
        "value":"large"
      },
      {
        "name":"medium",
        "value":"medium"
      },
      {
        "name":"small",
        "value":"small"
      }
    ],
    "name":"size"
  },
  "selections":[
    {
    "name":"fuel",
    "value":"diesel"
    }
  ],
  "itemDefinition":{
    ...
  }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic/drill?fuel=diesel HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
            
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
            
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<Resources>
  <DrillDownResource>
    <DataCategory uid="87E55DA88017">
      ...
    </DataCategory>
    <ItemDefinition uid="123C4A18B5D6"/>
    <Selections>
      <Choice>
        <Name>fuel</Name>
        <Value>diesel</Value>
      </Choice>
    </Selections>
    <Choices>
      <Name>size</Name>
      <Choices>
        <Choice>
          <Name>large</Name>
          <Value>large</Value>
        </Choice>
        <Choice>
          <Name>medium</Name>
          <Value>medium</Value>
        </Choice>
        <Choice>
          <Name>small</Name>
          <Value>small</Value>
        </Choice>
      </Choices>
    </Choices>
  </DrillDownResource>
</Resources>
~~~~

.

#### Final Result

This category has only two drill choices, so two selections are enough
to fully identify a data item. The user has selected 'large' for the
size choice in this example. The UID of the selected data item appears
as a choice named 'uid'.

If you know beforehand the sequence of drill choices you will wish to
make, it is not necessary to go through the process of requesting each
step of the drill process. That is, while we recommend strongly against
hard-coding Data Item UIDs in your application, it is perfectly sensible
to code a fully specified Drill request to look up the data UID in your
application’s initialisation.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic/drill?fuel=diesel&size=large HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
            
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
            
~~~~

~~~~ {.programlisting}
{
  "dataCategory":{
    ...
  },
  "choices":{
    "choices":[
      {
        "name":"4F6CBCEE95F7",
        "value":"4F6CBCEE95F7"
      }
    ],
    "name":"uid"
  },
  "selections":[
    {
      "name":"fuel",
      "value":"diesel"
    },
    {
      "name":"size",
      "value":"large"
    }
  ],
  "itemDefinition":{
    ...
  }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /data/transport/car/generic/drill?fuel=diesel&size=large HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
            
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
            
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<Resources>
  <DrillDownResource>
    <DataCategory uid="87E55DA88017">
      ...
    </DataCategory>
    <ItemDefinition uid="123C4A18B5D6"/>
    <Selections>
      <Choice>
        <Name>fuel</Name>
        <Value>diesel</Value>
      </Choice>
      <Choice>
        <Name>size</Name>
        <Value>large</Value>
      </Choice>
    </Selections>
    <Choices>
      <Name>uid</Name>
      <Choices>
        <Choice>
        <Name>4F6CBCEE95F7</Name>
        <Value>4F6CBCEE95F7</Value>
        </Choice>
      </Choices>
    </Choices>
  </DrillDownResource>
</Resources>
~~~~

.

Data Items
----------

A Data Item represents a single type of energy usage which contributes
to CO2 emissions. Data Items provide the data required to perform
emissions calculations for Profile Items.

For example, a particular Data Item could represent an average sized
petrol car. You could create a Profile Item associated with this Data
Item, which would specify that a user has an average sized petrol car.
You could set extra parameters in this Profile Item to specify
information such as that the car is driven 5000 kilometres per year.

Each Data Item can have several Data Item Values (distance, for
instance).

### Properties

  Property   Description
  ---------- --------------------------------------------------------------------------------------------------------------------------------------
  UID        A 12-letter unique identifier for the data item. See [the section called “UIDs”](apc.php#uid-reference "UIDs") for more information.
  created    The time and date on which the item was created.
  modified   The time and date on which the item was last modified.
  name       A display name for this Data Item. This is not always used and will default to the UID.
  path       The path segment for this Data Item within the URL path. This is not always used and will default to the UID.

### Get Data Item

Fetches a representation of a data item.

  -------------------------- -------------------------------------------------------------------
  URL                        https://{server}.amee.com/data/{category\_path}/{data\_item\_uid}
  HTTP Method                GET
  Response Content-Type      application/xml or application/json
  Successful Response Code   200 OK
  -------------------------- -------------------------------------------------------------------

The response contains a JSON or XML encoded description of the data
item.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /data/transport/plane/generic/FFC7A05D54AD HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "path":"/transport/plane/generic/FFC7A05D54AD",
  "userValueChoices":{
    "choices":[
      {
        "name":"distance",
        "value":""
      },
      {
        "name":"IATACode1",
        "value":""
      },
      {
        "name":"IATACode2",
        "value":""
      },
      {
        "name":"journeys",
        "value":""
      },
      {
        "name":"lat1",
        "value":"-999"
      },
      {
        "name":"lat2",
        "value":"-999"
      },
      {
        "name":"long1",
        "value":"-999"
      },
      {
        "name":"long2",
        "value":"-999"
      },
      {
        "name":"numberOfPassengers",
        "value":""
      },
      {
        "name":"passengerClass",
        "value":""
      }
    ],
    "name":"userValueChoices"
  },
  "dataItem":{
    "uid":"FFC7A05D54AD",
    "startDate":"2007-08-01T09:00:41+01:00",
    "dataCategory":{
      "uid":"FBA97B70DBDF",
      "name":"Generic",
      "path":"generic"
    },
    "itemValues":[
      {
        "itemValueDefinition":{
          "uid":"C376560CB19F",
          "name":"Type",
          "path":"type",
          "valueDefinition":{
            "uid":"CCEB59CACE1B",
            "environment":{
              "uid":"5F5887BCF726"
            },
            "created":"2007-07-27 09:30:44.0",
            "description":"",
            "name":"text",
            "valueType":"TEXT",
            "modified":"2007-07-27 09:30:44.0"
          }
        },
        "perUnit":"",
        "uid":"E459F81B0876",
        "unit":"",
        "name":"Type",
        "value":"domestic",
        "path":"type",
        "displayPath":"type",
        "displayName":"Type"
      },
      {
        "itemValueDefinition":{
          "uid":"5D7FB5F552A5",
          "name":"Size",
          "path":"size",
          "valueDefinition":{
            "uid":"CCEB59CACE1B",
            "environment":{
              "uid":"5F5887BCF726"
            },
            "created":"2007-07-27 09:30:44.0",
            "description":"",
            "name":"text",
            "valueType":"TEXT",
            "modified":"2007-07-27 09:30:44.0"
          }
        },
        "perUnit":"",
        "uid":"33A729613596",
        "unit":"",
        "name":"Size",
        "value":"one way",
        "path":"size",
        "displayPath":"size",
        "displayName":"Size"
      },
      {
        "itemValueDefinition":{
          "uid":"D7B4340D9404",
          "name":"kgCO2 Per Passenger Km",
          "path":"kgCO2PerPassengerKm",
          "valueDefinition":{
            "uid":"996AE5477B3F",
            "environment":{
              "uid":"5F5887BCF726"
            },
            "created":"2007-07-27 09:30:44.0",
            "description":"",
            "name":"kgCO2PerKm",
            "valueType":"DECIMAL",
            "modified":"2007-07-27 09:30:44.0"
          }
        },
        "perUnit":"",
        "uid":"19602052C053",
        "unit":"",
        "name":"kgCO2 Per Passenger Km",
        "value":"0.0000",
        "path":"kgCO2PerPassengerKm",
        "displayPath":"kgCO2PerPassengerKm",
        "displayName":"kgCO2 Per Passenger Km"
      },
      {
        "itemValueDefinition":{
          "uid":"653828811D42",
          "name":"kgCO2 Per Passenger Journey",
          "path":"kgCO2PerPassengerJourney",
          "valueDefinition":{
            "uid":"8CB8A1789CD6",
            "environment":{
              "uid":"5F5887BCF726"
            },
            "created":"2007-07-27 09:30:44.0",
            "description":"",
            "name":"kgCO2PerJourney",
            "valueType":"DECIMAL",
            "modified":"2007-08-01 08:57:31.0"
          }
        },
        "perUnit":"",
        "uid":"C32B6E2EDCB0",
        "unit":"",
        "name":"kgCO2 Per Passenger Journey",
        "value":"81.2000",
        "path":"kgCO2PerPassengerJourney",
        "displayPath":"kgCO2PerPassengerJourney",
        "displayName":"kgCO2 Per Passenger Journey"
      },
      {
        "itemValueDefinition":{
          "uid":"0F0592F05AAC",
          "name":"Source",
          "path":"source",
          "valueDefinition":{
            "uid":"CCEB59CACE1B",
            "environment":{
              "uid":"5F5887BCF726"
            },
            "created":"2007-07-27 09:30:44.0",
            "description":"",
            "name":"text",
            "valueType":"TEXT",
            "modified":"2007-07-27 09:30:44.0"
          }
        },
        "perUnit":"",
        "uid":"F3C2C8046B54",
        "unit":"",
        "name":"Source",
        "value":"defra/amee 2008",
        "path":"source",
        "displayPath":"source",
        "displayName":"Source"
      }
    ],
    "environment":{
      "uid":"5F5887BCF726",
      "itemsPerFeed":10,
      "created":"2007-07-27 09:30:44.0",
      "description":"",
      "name":"AMEE",
      "owner":"",
      "path":"",
      "itemsPerPage":10,
      "modified":"2007-07-27 09:30:44.0"
    },
    "created":"2007-08-01 09:00:41.0",
    "name":"FFC7A05D54AD",
    "path":"",
    "itemDefinition":{
      "uid":"441BF4BEA15B",
      "environment":{
        "uid":"5F5887BCF726"
      },
      "created":"2007-07-27 09:30:44.0",
      "name":"Plane Generic",
      "drillDown":"type,size",
      "modified":"2007-07-27 09:30:44.0"
    },
    "endDate":"",
    "label":"domestic,one way",
    "modified":"2007-08-01 09:00:41.0"
  },
  "actions":{
    "allowCreate":false,
    "allowView":true,
    "allowList":false,
    "allowModify":false,
    "allowDelete":false
  },
  "amountPerMonth":0
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /data/transport/plane/generic/FFC7A05D54AD HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<Resources>
  <DataItemResource>
    <DataItem created="2007-08-01 09:00:41.0" modified="2007-08-01 09:00:41.0" uid="FFC7A05D54AD">
      <Name>FFC7A05D54AD</Name>
      <ItemValues>
        <ItemValue uid="E459F81B0876">
          <Path>type</Path>
          <Name>Type</Name>
          <Value>domestic</Value>
          <Unit/>
          <PerUnit/>
          <ItemValueDefinition uid="C376560CB19F">
            <Path>type</Path>
            <Name>Type</Name>
            <ValueDefinition created="2007-07-27 09:30:44.0" modified="2007-07-27 09:30:44.0" uid="CCEB59CACE1B">
              <Name>text</Name>
              <ValueType>TEXT</ValueType>
              <Description/>
              <Environment uid="5F5887BCF726"/>
            </ValueDefinition>
            <FromProfile>false</FromProfile>
            <FromData>true</FromData>
          </ItemValueDefinition>
        </ItemValue>
        <ItemValue uid="33A729613596">
          <Path>size</Path>
          <Name>Size</Name>
          <Value>one way</Value>
          <Unit/>
          <PerUnit/>
          <ItemValueDefinition uid="5D7FB5F552A5">
            <Path>size</Path>
            <Name>Size</Name>
            <ValueDefinition created="2007-07-27 09:30:44.0" modified="2007-07-27 09:30:44.0" uid="CCEB59CACE1B">
              <Name>text</Name>
              <ValueType>TEXT</ValueType>
              <Description/>
              <Environment uid="5F5887BCF726"/>
            </ValueDefinition>
            <FromProfile>false</FromProfile>
            <FromData>true</FromData>
          </ItemValueDefinition>
        </ItemValue>
        <ItemValue uid="19602052C053">
          <Path>kgCO2PerPassengerKm</Path>
          <Name>kgCO2 Per Passenger Km</Name>
          <Value>0.0000</Value>
          <Unit/>
          <PerUnit/>
          <ItemValueDefinition uid="D7B4340D9404">
            <Path>kgCO2PerPassengerKm</Path>
            <Name>kgCO2 Per Passenger Km</Name>
            <ValueDefinition created="2007-07-27 09:30:44.0" modified="2007-07-27 09:30:44.0" uid="996AE5477B3F">
              <Name>kgCO2PerKm</Name>
              <ValueType>DECIMAL</ValueType>
              <Description/>
              <Environment uid="5F5887BCF726"/>
            </ValueDefinition>
            <FromProfile>false</FromProfile>
            <FromData>true</FromData>
          </ItemValueDefinition>
        </ItemValue>
        <ItemValue uid="C32B6E2EDCB0">
          <Path>kgCO2PerPassengerJourney</Path>
          <Name>kgCO2 Per Passenger Journey</Name>
          <Value>81.2000</Value>
          <Unit/>
          <PerUnit/>
          <ItemValueDefinition uid="653828811D42">
            <Path>kgCO2PerPassengerJourney</Path>
            <Name>kgCO2 Per Passenger Journey</Name>
            <ValueDefinition created="2007-07-27 09:30:44.0" modified="2007-08-01 08:57:31.0" uid="8CB8A1789CD6">
              <Name>kgCO2PerJourney</Name>
              <ValueType>DECIMAL</ValueType>
              <Description/>
              <Environment uid="5F5887BCF726"/>
            </ValueDefinition>
            <FromProfile>false</FromProfile>
            <FromData>true</FromData>
          </ItemValueDefinition>
        </ItemValue>
        <ItemValue uid="F3C2C8046B54">
          <Path>source</Path>
          <Name>Source</Name>
          <Value>defra/amee 2008</Value>
          <Unit/>
          <PerUnit/>
          <ItemValueDefinition uid="0F0592F05AAC">
            <Path>source</Path>
            <Name>Source</Name>
            <ValueDefinition created="2007-07-27 09:30:44.0" modified="2007-07-27 09:30:44.0" uid="CCEB59CACE1B">
              <Name>text</Name>
              <ValueType>TEXT</ValueType>
              <Description/>
              <Environment uid="5F5887BCF726"/>
            </ValueDefinition>
            <FromProfile>false</FromProfile>
            <FromData>true</FromData>
          </ItemValueDefinition>
        </ItemValue>
      </ItemValues>
      <Environment uid="5F5887BCF726"/>
      <ItemDefinition uid="441BF4BEA15B"/>
      <DataCategory uid="FBA97B70DBDF">
        <Name>Generic</Name>
        <Path>generic</Path>
      </DataCategory>
      <Path>FFC7A05D54AD</Path>
      <Label>domestic,one way
      </Label>
      <StartDate>2007-08-01T09:00:41+01:00</StartDate>
      <EndDate/>
    </DataItem>
    <Path>/transport/plane/generic/FFC7A05D54AD</Path>
    <Choices>
      <Name>userValueChoices</Name>
      <Choices>
        <Choice>
          <Name>distance</Name>
          <Value/>
        </Choice>
        <Choice>
          <Name>IATACode1</Name>
          <Value/>
        </Choice>
        <Choice>
          <Name>IATACode2</Name>
          <Value/>
        </Choice>
        <Choice>
          <Name>journeys</Name>
          <Value/>
        </Choice>
        <Choice>
          <Name>lat1</Name>
          <Value>-999</Value>
        </Choice>
        <Choice>
          <Name>lat2</Name>
          <Value>-999</Value>
        </Choice>
        <Choice>
          <Name>long1</Name>
          <Value>-999</Value>
        </Choice>
        <Choice>
          <Name>long2</Name>
          <Value>-999</Value>
        </Choice>
        <Choice>
          <Name>numberOfPassengers</Name>
          <Value/>
        </Choice>
        <Choice>
          <Name>passengerClass</Name>
          <Value/>
        </Choice>
      </Choices>
    </Choices>
    <AmountPerMonth>0.000000</AmountPerMonth>
  </DataItemResource>
</Resources>
~~~~

.

Data Item Values
----------------

Data Item Values belong to Data Items. Each Data Item Value represents a
distinct value such as 'energyConsumption', or 'kgCO2PerkWh'.

Data Item Values themselves are rarely used, as all information in them
normally appears in their parent Data Item.

### Properties

  Property   Description
  ---------- --------------------------------------------------------------------------------------------------------------------------------------
  UID        A 12-letter unique identifier for the data item. See [the section called “UIDs”](apc.php#uid-reference "UIDs") for more information.
  created    The time and date on which the item was created.
  modified   The time and date on which the item was last modified.
  value      The current value for the Data Item.

### Get Single Value

Fetches a representation of a single data item value.

  -------------------------- ---------------------------------------------------------------------------------
  URL                        https://{server}.amee.com/data/{category\_path}/{data\_item\_uid}/{value\_name}
  HTTP Method                GET
  Response Content-Type      application/xml or application/json
  Successful Response Code   200 OK
  -------------------------- ---------------------------------------------------------------------------------

The response contains a JSON or XML encoded description of the data
item.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /data/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "itemValue":{
    "itemValueDefinition":{
      "uid":"653828811D42",
      "name":"kgCO2 Per Passenger Journey",
      "path":"kgCO2PerPassengerJourney",
      "valueDefinition":{
        "uid":"8CB8A1789CD6",
        "environment":{
          "uid":"5F5887BCF726"
        },
        "created":"2007-07-27 09:30:44.0",
        "description":"",
        "name":"kgCO2PerJourney",
        "valueType":"DECIMAL",
        "modified":"2007-08-01 08:57:31.0"
      }
    },
    "perUnit":"",
    "uid":"C32B6E2EDCB0",
    "unit":"",
    "created":"2007-08-01 09:00:41.0",
    "item":{...},
    "name":"kgCO2 Per Passenger Journey",
    "value":"81.2000",
    "path":"kgCO2PerPassengerJourney",
    "displayPath":"kgCO2PerPassengerJourney",
    "displayName":"kgCO2 Per Passenger Journey",
    "modified":"2009-01-18 19:14:54.0"
  },
  "path":"/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney",
  "dataItem":{
    "uid":"FFC7A05D54AD"
  },
  "actions":{
    "allowCreate":false,
    "allowView":true,
    "allowList":false,
    "allowModify":false,
    "allowDelete":false
  }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /data/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<Resources>
  <DataItemValueResource>
    <ItemValue Created="2007-08-01 09:00:41.0" Modified="2009-01-18 19:14:54.0" uid="C32B6E2EDCB0">
      <Path>kgCO2PerPassengerJourney</Path>
      <Name>kgCO2 Per Passenger Journey</Name>
      <Value>81.2000</Value>
      <Unit/>
      <PerUnit/>
      <ItemValueDefinition uid="653828811D42">
        <Path>kgCO2PerPassengerJourney</Path>
        <Name>kgCO2 Per Passenger Journey</Name>
        <ValueDefinition created="2007-07-27 09:30:44.0" modified="2007-08-01 08:57:31.0" uid="8CB8A1789CD6">
          <Name>kgCO2PerJourney</Name>
          <ValueType>DECIMAL</ValueType>
          <Description/>
          <Environment uid="5F5887BCF726"/>
        </ValueDefinition>
        <FromProfile>false</FromProfile>
        <FromData>true</FromData>
      </ItemValueDefinition>
      <DataItem uid="FFC7A05D54AD"/>
    </ItemValue>
    <DataItem uid="FFC7A05D54AD"/>
    <Path>/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney</Path>
  </DataItemValueResource>
</Resources>
~~~~

.

  --------------------------------- ----------------------- -----------------------------------------
  [« Profile Reference](apa.php)    [Contents](index.php)    [Common Concepts Reference »](apc.php)
  --------------------------------- ----------------------- -----------------------------------------


