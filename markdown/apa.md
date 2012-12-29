Profile Reference
-----------------

[Profiles](apa.php#profile-reference)

[Properties](apa.php#d5e555)

[Create Profile](apa.php#create-profile-reference)

[List Profiles](apa.php#list-profiles-reference)

[Delete Profile](apa.php#delete-profile-item-reference)

[Profile Items](apa.php#profile-item-reference)

[Properties](apa.php#d5e673)

[Results](apa.php#profile-item-amounts-reference)

[Create Profile Item](apa.php#create-profile-item-reference)

[Read Profile Item](apa.php#get-profile-item-reference)

[List Profile Items](apa.php#list-profile-items-reference)

[Update Profile Item](apa.php#update-profile-item-reference)

[Delete Profile Item](apa.php#delete-profile-item-reference)

[Batch Operations](apa.php#batch-operation-reference)

[Create Multiple Profile Items](apa.php#batch-create-reference)

[Update Multiple Profile Items](apa.php#batch-update-reference)

AMEEconnect profiles are used to store user data and perform
calculations.

Profiles
--------

A Profile is the basic grouping element in AMEE. A single profile is
used to contain all data corresponding to a single entity in a client
application. This could be a person, a building, an organisation, etc.;
you are free to choose what a profile corresponds to in your
application. You can create any number of separate Profiles.

A Profile is identified by its UID, which forms part of the URL for any
operations that are performed on or inside the profile.

### Properties

  Property   Description
  ---------- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  UID        A 12-letter unique identifier for the profile. See [the section called “UIDs”](apc.php#uid-reference "UIDs") for more information.
  created    The time and date on which the profile was created.
  modified   The time and date on which the profile was last modified. Note that this does not track changes inside the profile, such as to profile item values, only to the profile resource itself.

### Create Profile

Used to create a new profile, in which ProfileItems can be stored.

  -------------------------- -------------------------------------
  URL                        https://{server}.amee.com/profiles
  HTTP Method                POST
  Request Content-Type       application/x-www-form-urlencoded
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- -------------------------------------

#### Compulsory Parameters

  Parameter   Description
  ----------- ----------------------------------------------------------
  profile     Tells AMEE to create a profile. Should always be 'true'.

The response body contains a JSON or XML description of the new profile.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
POST /profiles HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
profile=true
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "apiVersion":"2.0",
  "profile":{
    "uid":"180D73DA5229",
    "environment":{
      "uid":"5F5887BCF726"
    },
    "created":"Wed Mar 18 10:23:59 GMT 2009",
    "name":"180D73DA5229",
    "path":"180D73DA5229",
    "permission":{
      "uid":"2F093CD55011",
      "created":"Wed Mar 18 10:23:59 GMT 2009",
      "group":{
        "uid":"AC65FFA5F9D9",
        "name":"amee"
      },
      "environmentUid":"5F5887BCF726",
      "auth":{
        "uid":"BA6EB0039D69",
        "username":"v2user"
      },
      "modified":"Wed Mar 18 10:23:59 GMT 2009"
    },
    "modified":"Wed Mar 18 10:23:59 GMT 2009"
  }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /profiles HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
profile=true
          
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
  <ProfilesResource>
    <Profile created="Wed Mar 18 10:23:54 GMT 2009" modified="Wed Mar 18 10:23:54 GMT 2009" uid="YLLIKH73BDYS">
      <Path/>
      <Name/>
      <Environment uid="5F5887BCF726"/>
      <Permission created="Wed Mar 18 10:23:54 GMT 2009" modified="Wed Mar 18 10:23:54 GMT 2009" uid="0D7EAF107FEB">
        <Environment uid="5F5887BCF726"/>
        <Name>amee</Name>
        <Username>v2user</Username>
      </Permission>
    </Profile>
  </ProfilesResource>
</Resources>
~~~~

.

### List Profiles

Lists all profiles available to the current user. Currently this is the
list of all profiles created by the current user, but may in future
depend on other permissions.

  -------------------------- -------------------------------------
  URL                        https://{server}.amee.com/profiles
  HTTP Method                GET
  Response Content-Type      application/xml or application/json
  Successful Response Code   200 OK
  -------------------------- -------------------------------------

The response contains a JSON or XML encoded list of profiles for the
current user.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /profiles HTTP/1.1
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
    "apiVersion": "2.0",
    "pager": {
        "to": 10,
        "lastPage": 2,
        "nextPage": 2,
        "items": 16,
        "start": 0,
        "itemsFound": 10,
        "requestedPage": 1,
        "currentPage": 1,
        "from": 1,
        "itemsPerPage": 10,
        "previousPage": -1
    },
    "profiles": [
    {
        "uid": "B28A58B0E243",
        "environment": {
            "uid": "5F5887BCF726"
        },
        "created": "2009-03-19 10:54:46.0",
        "name": "B28A58B0E243",
        "path": "B28A58B0E243",
        "permission": {
            "uid": "AEECFC02BF27",
            "created": "2009-03-19 10:54:46.0",
            "group": {
                "uid": "AC65FFA5F9D9",
                "name": "amee"
            },
            "environmentUid": "5F5887BCF726",
            "auth": {
                "uid": "BA6EB0039D69",
                "username": "v2user"
            },
            "modified": "2009-03-19 10:54:46.0"
        },
        "modified": "2009-03-19 10:54:46.0"
    },
    {
        "uid": "E0047238E5E0",
        "environment": {
            "uid": "5F5887BCF726"
        },
        "created": "2009-03-17 14:17:12.0",
        "name": "E0047238E5E0",
        "path": "E0047238E5E0",
        "permission": {
            "uid": "D24F947B27EA",
            "created": "2009-03-17 14:17:12.0",
            "group": {
                "uid": "AC65FFA5F9D9",
                "name": "amee"
            },
            "environmentUid": "5F5887BCF726",
            "auth": {
                "uid": "BA6EB0039D69",
                "username": "v2user"
            },
            "modified": "2009-03-17 14:17:12.0"
        },
        "modified": "2009-03-17 14:17:12.0"
    },
    ...
    ],
    "actions": {
        "allowCreate": true,
        "allowView": true,
        "allowList": true,
        "allowModify": true,
        "allowDelete": true
    }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /profiles HTTP/1.1
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
<Resources xmlns="http://schemas.amee.cc/2.0">
  <ProfilesResource>
    <Profiles>
      <Profile created="2009-03-19 10:54:43.0" modified="2009-03-19 10:54:43.0" uid="563DE12868DC">
        <Path/>
        <Name/>
        <Environment uid="5F5887BCF726"/>
        <Permission created="2009-03-19 10:54:43.0" modified="2009-03-19 10:54:43.0" uid="E746CC640299">
          <Environment uid="5F5887BCF726"/>
          <Name>amee</Name>
          <Username>v2user</Username>
        </Permission>
      </Profile>
      <Profile created="2009-03-17 14:17:12.0" modified="2009-03-17 14:17:12.0" uid="E0047238E5E0">
        <Path/>
        <Name/>
        <Environment uid="5F5887BCF726"/>
        <Permission created="2009-03-17 14:17:12.0" modified="2009-03-17 14:17:12.0" uid="D24F947B27EA">
          <Environment uid="5F5887BCF726"/>
          <Name>amee</Name>
          <Username>v2user</Username>
        </Permission>
      </Profile>
      ...
    </Profiles>
    <Pager>
      <Start>0</Start>
      <From>1</From>
      <To>10</To>
      <Items>16</Items>
      <CurrentPage>1</CurrentPage>
      <RequestedPage>1</RequestedPage>
      <NextPage>2</NextPage>
      <PreviousPage>-1</PreviousPage>
      <LastPage>2</LastPage>
      <ItemsPerPage>10</ItemsPerPage>
      <ItemsFound>10</ItemsFound>
    </Pager>
  </ProfilesResource>
</Resources>
~~~~

.

### Delete Profile

Completely remove the specified profile from the AMEE database,
including all Profile Items contained within it. This information cannot
be recovered after deletion.

  -------------------------- ---------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}
  HTTP Method                DELETE
  Successful Response Code   200 OK
  -------------------------- ---------------------------------------------------

-   [Example](javascript:;)

.

#### Request

~~~~ {.programlisting}
DELETE /profiles/358E3BCF690E HTTP/1.1
Accept: application/json, application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: text/plain
          
~~~~

.

Profile Items
-------------

Profile items represent individual instances of energy use or
consumption. A client application will create a profile item for each
item of energy use; the resulting object contains the emissions
associated with that item of energy use.

Profile items are contained inside Profile Categories, which in are
contained inside Profiles. Profile items in turn contains Profile Item
Values, which represent the individual inputs to the calculation.

### Properties

  Property                  Description
  ------------------------- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  UID                       A 12-letter unique identifier for the profile item. See [the section called “UIDs”](apc.php#uid-reference "UIDs") for more information.
  created                   The time and date on which the profile item was created.
  modified                  The time and date on which the profile item was last modified.
  name                      The name of the item. Two items cannot have the same dataItemUid and overlapping dates unless they also have different names. Items with the same name and dataItemUid are considered to be a time series.
  amounts                   A set of emission results for the item. This may include emissions separated by gas. See [the section called “Results”](apa.php#profile-item-amounts-reference "Results") for details.
  startDate                 The date/time from which the profile item is valid. See discussion of time series for more detail.
  endDate                   The date/time until which the profile item is valid. See discussion of time series for more detail.
  Data Item (dataItemUid)   The data item which this profile item uses to obtain emission factors.

### Results

Profile Items can yield multiple return values, not just a single value.
This is often used to split up emissions for different gases, for
instance carbon dioxide and methane.

In the responses, these results are included in an 'amounts' object. See
the examples below for the exact XML and JSON representations. Each
'amount' returned has the following properties:

  --------- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  type      A description of the type of output. For instance, 'CO2'.
  value     The value of the output.
  unit      The units that the value field is measured in.
  default   Optionally, this field is 'true' for the default result, often an aggregated total across different gases. This default is also included in the single 'amount' field in the response for backwards compatibility.
  --------- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

The 'amounts' section of the response can also contain 'note' objects.
These provide other textual information relevant to the result, for
instance warning of errors, or clarifying emission factors that were
used.

### Create Profile Item

Used to create a new profile item.

  -------------------------- --------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}/{category\_path}
  HTTP Method                POST
  Request Content-Type       application/x-www-form-urlencoded
  Response Content-Type      application/json or application/xml
  Successful Response Code   201 CREATED
  -------------------------- --------------------------------------------------------------------

#### Compulsory Parameters

  Parameter     Description
  ------------- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  dataItemUid   The UID of the Data Item which a new Profile Item should be based upon. This should be obtained from a drilldown request as described in [the section called “Look up a Data Item UID”](apb.php#drilldown-reference "Look up a Data Item UID").

#### Optional Parameters

  Parameter            Description
  -------------------- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  {valueName}          Set a Profile Item Value by specifying the name and value. For example, the value name could be 'distance' supplied with a value of '300'. Multiple name/value pairs can be submitted so long as the named Item Values exist for the Profile Item. Names and values are case sensitive.
  {valueName}Unit      If a value is set, a unit can also be set. In the distance example above, the 'distanceUnit' parameter could be set to 'km', 'mi', or any other supported distance unit. All values have default units if none are supplied.
  {valueName}PerUnit   If a value is set, a perUnit can also be set, which indicates the timescale over which the value applies. In the distance example above, the 'distancePerUnit' parameter could be set to 'day', 'month', or any other supported time unit. Not all values support perUnits; check AMEEdiscover for each case. Relevant values have default perUnits if none are supplied.
  name                 Set the name of the item. You cannot create two items with the same dataItemUid and overlapping dates unless you give them a unique name. Items with the same name and dataItemUid are considered to be a time series.
  startDate            An ISO8601 date/time which specifies when the item should be valid from. This parameter is compulsory if either endDate or duration are specified. Defaults to the current time. See [the section called “Dates/Times”](apc.php#dates-times-reference "Dates/Times") for details of format.
  endDate              An ISO8601 date/time which specifies when the item should be valid until. Defaults to infinitely far in the future. See [the section called “Dates/Times”](apc.php#dates-times-reference "Dates/Times") for details of format.
  duration             As an alternative to specifying an end time, you can specify the duration that the item should be valid for in ISO8601 duration format. See [the section called “Durations”](apc.php#duration-reference "Durations") for details.
  representation       If set to 'full', the newly-created item will be returned in the response to the POST request. By default, only a Location header is returned.

If the representation parameter is set to full, the response will
include the details of the created item. Otherwise, a Location header is
returned which indicates the URL of the new item.

-   [Example](javascript:;)
-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
POST /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/json, application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
dataItemUid=19B311DDF0B1&volume=500&startDate=2011-01-05T00%3A00%3A00%2B00%3A00
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 CREATED
Location: https://{server}.amee.com/profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H
Content-Type: text/plain
          
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
dataItemUid=19B311DDF0B1&volume=500&startDate=2011-01-05T00%3A00%3A00%2B00%3A00
&representation=full
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 CREATED
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "profileItems": [
    {
      "modified": "2011-08-04T17:16:07Z",
      "name": "json_example",
      "itemValues": [
        {
          "name": "Mass of fuel consumed",
          "itemValueDefinition": {
            "fromData": false,
            "name": "Mass of fuel consumed",
            "drillDown": false,
            "fromProfile": true,
            "uid": "50151C2D0B90",
            "valueDefinition": {
              "modified": "2007-07-27 07:30:44.0",
              "name": "amount",
              "valueType": "DECIMAL",
              "uid": "45433E48B39F",
              "description": "",
              "environment": {
                "uid": "5F5887BCF726"
              },
              "created": "2007-07-27 07:30:44.0"
            },
            "unit": "kg",
            "path": "mass"
          },
          "displayName": "Mass of fuel consumed",
          "perUnit": "",
          "startDate": "2011-01-05T00:00:00Z",
          "uid": "QMIFK54JE3PE",
          "value": "",
          "unit": "kg",
          "path": "mass",
          "displayPath": "mass"
        },
        {
          "name": "Volume of fuel consumed",
          "itemValueDefinition": {
            "fromData": false,
            "name": "Volume of fuel consumed",
            "drillDown": false,
            "fromProfile": true,
            "uid": "93899EF4E3AF",
            "valueDefinition": {
              "modified": "2007-07-27 07:30:44.0",
              "name": "amount",
              "valueType": "DECIMAL",
              "uid": "45433E48B39F",
              "description": "",
              "environment": {
                "uid": "5F5887BCF726"
              },
              "created": "2007-07-27 07:30:44.0"
            },
            "unit": "L",
            "path": "volume"
          },
          "displayName": "Volume of fuel consumed",
          "perUnit": "",
          "startDate": "2011-01-05T00:00:00Z",
          "uid": "XO51RT4VSAB9",
          "value": "500",
          "unit": "L",
          "path": "volume",
          "displayPath": "volume"
        }
      ],
      "amount": {
        "value": 1155.85,
        "unit": "kg/year"
      },
      "startDate": "2011-01-05T00:00:00Z",
      "uid": "5C61SFIV391I",
      "dataItem": {
        "Label": "petrol",
        "uid": "19B311DDF0B1"
      },
      "amounts": {
        "amount": [
          {
            "default": "true",
            "type": "totalDirectCO2e",
            "value": 1155.85,
            "unit": "kg"
          },
          {
            "type": "lifeCycleCO2e",
            "value": 1361.35,
            "unit": "kg"
          },
          {
            "type": "CO2",
            "value": 1150.9,
            "unit": "kg"
          },
          {
            "type": "nitrousOxideCO2e",
            "value": 3.25,
            "unit": "kg"
          },
          {
            "type": "methaneCO2e",
            "value": 1.7,
            "unit": "kg"
          },
          {
            "type": "indirectCO2e",
            "value": 205.5,
            "unit": "kg"
          }
        ],
        "note": [
          {
            "type": "comment",
            "value": "This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation"
          }
        ]
      },
      "endDate": "",
      "created": "2011-08-04T17:16:07Z"
    }
  ],
  "dataCategory": {
    "modified": "2011-08-01 15:40:14.0",
    "name": "Fuel",
    "dataCategory": {
      "name": "Defra",
      "uid": "4888AD538569",
      "path": "defra",
      "deprecated": false
    },
    "uid": "138B5405E0CE",
    "path": "fuel",
    "itemDefinition": {
      "modified": "2011-08-01 15:36:37.0",
      "name": "DEFRA transport fuels",
      "drillDown": "fuel",
      "uid": "80DB1AB8141F",
      "environment": {
        "uid": "5F5887BCF726"
      },
      "created": "2010-11-09 19:29:48.0"
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
    "created": "2010-11-09 19:30:24.0"
  },
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "pager": {
    "items": 0,
    "currentPage": 1,
    "itemsPerPage": 10,
    "from": 0,
    "nextPage": -1,
    "to": 0,
    "itemsFound": 0,
    "start": 0,
    "requestedPage": 1,
    "lastPage": 1,
    "previousPage": -1
  },
  "totalAmount": {
    "value": "1155.8500000000001",
    "unit": "kg/year"
  },
  "path": "/transport/defra/fuel",
  "profileCategories": [

  ],
  "environment": {
    "modified": "Fri Jul 27 08:30:44 UTC 2007",
    "name": "AMEE",
    "itemsPerPage": 10,
    "uid": "5F5887BCF726",
    "path": "",
    "description": "",
    "itemsPerFeed": 10,
    "owner": "",
    "created": "Fri Jul 27 08:30:44 UTC 2007"
  },
  "apiVersion": "2.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
dataItemUid=19B311DDF0B1&volume=500&startDate=2011-01-05T00%3A00%3A00%2B00%3A00
&representation=full
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 CREATED
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Resources xmlns="http://schemas.amee.cc/2.0">
 <ProfileCategoryResource>
  <Path>/transport/defra/fuel</Path>
  <Profile uid="YLLIKH73BDYS"/>
  <Environment created="Fri Jul 27 08:30:44 UTC 2007" modified="Fri Jul 27 08:30:44 UTC 2007" uid="5F5887BCF726">
   <Name>AMEE</Name>
   <Path/>
   <Description/>
   <Owner/>
   <ItemsPerPage>10</ItemsPerPage>
   <ItemsPerFeed>10</ItemsPerFeed>
  </Environment>
  <DataCategory uid="138B5405E0CE">
   <Name>Fuel</Name>
   <Path>fuel</Path>
   <Deprecated>false</Deprecated>
  </DataCategory>
  <ProfileCategories/>
  <ProfileItems>
   <ProfileItem created="2011-08-04T17:16:10Z" modified="2011-08-04T17:16:10Z" uid="UC9MIF9GZO1A">
    <Name>xml_example</Name>
    <ItemValues>
     <ItemValue uid="9U46OXTYM6JR">
      <Path>mass</Path>
      <Name>Mass of fuel consumed</Name>
      <Value/>
      <Unit>kg</Unit>
      <PerUnit/>
      <StartDate>2011-01-05T00:00:00Z</StartDate>
      <ItemValueDefinition uid="50151C2D0B90">
       <Path>mass</Path>
       <Name>Mass of fuel consumed</Name>
       <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
        <Name>amount</Name>
        <ValueType>DECIMAL</ValueType>
        <Description/>
        <Environment uid="5F5887BCF726"/>
       </ValueDefinition>
       <Unit>kg</Unit>
       <FromProfile>true</FromProfile>
       <FromData>false</FromData>
       <DrillDown>false</DrillDown>
      </ItemValueDefinition>
     </ItemValue>
     <ItemValue uid="JILC5X8VVMGJ">
      <Path>volume</Path>
      <Name>Volume of fuel consumed</Name>
      <Value>500</Value>
      <Unit>L</Unit>
      <PerUnit/>
      <StartDate>2011-01-05T00:00:00Z</StartDate>
      <ItemValueDefinition uid="93899EF4E3AF">
       <Path>volume</Path>
       <Name>Volume of fuel consumed</Name>
       <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
        <Name>amount</Name>
        <ValueType>DECIMAL</ValueType>
        <Description/>
        <Environment uid="5F5887BCF726"/>
       </ValueDefinition>
       <Unit>L</Unit>
       <FromProfile>true</FromProfile>
       <FromData>false</FromData>
       <DrillDown>false</DrillDown>
      </ItemValueDefinition>
     </ItemValue>
    </ItemValues>
    <Amount unit="kg/year">1155.8500000000001</Amount>
    <Amounts>
     <Amount default="true" perUnit="" type="totalDirectCO2e" unit="kg">1155.8500000000001</Amount>
     <Amount perUnit="" type="lifeCycleCO2e" unit="kg">1361.3500000000001</Amount>
     <Amount perUnit="" type="CO2" unit="kg">1150.9</Amount>
     <Amount perUnit="" type="nitrousOxideCO2e" unit="kg">3.25</Amount>
     <Amount perUnit="" type="methaneCO2e" unit="kg">1.7</Amount>
     <Amount perUnit="" type="indirectCO2e" unit="kg">205.5</Amount>
     <Note type="comment">This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation</Note>
    </Amounts>
    <StartDate>2011-01-05T00:00:00Z</StartDate>
    <EndDate/>
    <DataItem uid="19B311DDF0B1">
     <Label>petrol</Label>
    </DataItem>
   </ProfileItem>
  </ProfileItems>
  <Pager>
   <Start>0</Start>
   <From>0</From>
   <To>0</To>
   <Items>0</Items>
   <CurrentPage>1</CurrentPage>
   <RequestedPage>1</RequestedPage>
   <NextPage>-1</NextPage>
   <PreviousPage>-1</PreviousPage>
   <LastPage>1</LastPage>
   <ItemsPerPage>10</ItemsPerPage>
   <ItemsFound>0</ItemsFound>
  </Pager>
  <TotalAmount unit="kg/year">1155.8500000000001</TotalAmount>
 </ProfileCategoryResource>
</Resources>
~~~~

.

### Read Profile Item

Used to fetch a representation of an existing profile item.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}/{category\_path}/{profile\_item\_uid}
  HTTP Method                GET
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- -----------------------------------------------------------------------------------------

The response includes a representation of the requested profile item.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
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
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "path": "/transport/defra/fuel/F0638HOIFC1H",
  "profileItem": {
    "name": null,
    "modified": "2011-03-08T13:56:01Z",
    "dataCategory": {
      "name": "Fuel",
      "uid": "138B5405E0CE",
      "path": "fuel",
      "deprecated": false
    },
    "profile": {
      "uid": "YLLIKH73BDYS"
    },
    "itemValues": [
      {
        "name": "Mass of fuel consumed",
        "itemValueDefinition": {
          "fromData": false,
          "name": "Mass of fuel consumed",
          "drillDown": false,
          "fromProfile": true,
          "uid": "50151C2D0B90",
          "valueDefinition": {
            "modified": "2007-07-27 07:30:44.0",
            "name": "amount",
            "valueType": "DECIMAL",
            "uid": "45433E48B39F",
            "description": "",
            "environment": {
              "uid": "5F5887BCF726"
            },
            "created": "2007-07-27 07:30:44.0"
          },
          "unit": "kg",
          "path": "mass"
        },
        "displayName": "Mass of fuel consumed",
        "perUnit": "",
        "startDate": "2011-03-08T13:56:00Z",
        "uid": "42ROH1HOI2BE",
        "value": "",
        "unit": "kg",
        "path": "mass",
        "displayPath": "mass"
      },
      {
        "name": "Volume of fuel consumed",
        "itemValueDefinition": {
          "fromData": false,
          "name": "Volume of fuel consumed",
          "drillDown": false,
          "fromProfile": true,
          "uid": "93899EF4E3AF",
          "valueDefinition": {
            "modified": "2007-07-27 07:30:44.0",
            "name": "amount",
            "valueType": "DECIMAL",
            "uid": "45433E48B39F",
            "description": "",
            "environment": {
              "uid": "5F5887BCF726"
            },
            "created": "2007-07-27 07:30:44.0"
          },
          "unit": "L",
          "path": "volume"
        },
        "displayName": "Volume of fuel consumed",
        "perUnit": "",
        "startDate": "2011-03-08T13:56:00Z",
        "uid": "U9J6XCMJT07I",
        "value": "500",
        "unit": "L",
        "path": "volume",
        "displayPath": "volume"
      }
    ],
    "amount": {
      "value": 1155.85,
      "unit": "kg/year"
    },
    "startDate": "2011-03-08T13:56:00Z",
    "uid": "F0638HOIFC1H",
    "amounts": {
      "amount": [
        {
          "default": "true",
          "type": "totalDirectCO2e",
          "value": 1155.85,
          "unit": "kg"
        },
        {
          "type": "lifeCycleCO2e",
          "value": 1361.35,
          "unit": "kg"
        },
        {
          "type": "CO2",
          "value": 1150.9,
          "unit": "kg"
        },
        {
          "type": "nitrousOxideCO2e",
          "value": 3.25,
          "unit": "kg"
        },
        {
          "type": "methaneCO2e",
          "value": 1.7,
          "unit": "kg"
        },
        {
          "type": "indirectCO2e",
          "value": 205.5,
          "unit": "kg"
        }
      ],
      "note": [
        {
          "type": "comment",
          "value": "This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation"
        }
      ]
    },
    "dataItem": {
      "Label": "petrol",
      "uid": "19B311DDF0B1"
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
    "itemDefinition": {
      "name": "DEFRA transport fuels",
      "drillDown": "fuel",
      "uid": "80DB1AB8141F"
    },
    "endDate": "",
    "created": "2011-03-08T13:56:01Z"
  },
  "apiVersion": "2.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Resources xmlns="http://schemas.amee.cc/2.0">
 <ProfileItemResource>
  <ProfileItem created="2011-03-08T13:56:01Z" modified="2011-03-08T13:56:01Z" uid="F0638HOIFC1H">
   <Name/>
   <ItemValues>
    <ItemValue uid="42ROH1HOI2BE">
     <Path>mass</Path>
     <Name>Mass of fuel consumed</Name>
     <Value/>
     <Unit>kg</Unit>
     <PerUnit/>
     <StartDate>2011-03-08T13:56:00Z</StartDate>
     <ItemValueDefinition uid="50151C2D0B90">
      <Path>mass</Path>
      <Name>Mass of fuel consumed</Name>
      <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
       <Name>amount</Name>
       <ValueType>DECIMAL</ValueType>
       <Description/>
       <Environment uid="5F5887BCF726"/>
      </ValueDefinition>
      <Unit>kg</Unit>
      <FromProfile>true</FromProfile>
      <FromData>false</FromData>
      <DrillDown>false</DrillDown>
     </ItemValueDefinition>
    </ItemValue>
    <ItemValue uid="U9J6XCMJT07I">
     <Path>volume</Path>
     <Name>Volume of fuel consumed</Name>
     <Value>500</Value>
     <Unit>L</Unit>
     <PerUnit/>
     <StartDate>2011-03-08T13:56:00Z</StartDate>
     <ItemValueDefinition uid="93899EF4E3AF">
      <Path>volume</Path>
      <Name>Volume of fuel consumed</Name>
      <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
       <Name>amount</Name>
       <ValueType>DECIMAL</ValueType>
       <Description/>
       <Environment uid="5F5887BCF726"/>
      </ValueDefinition>
      <Unit>L</Unit>
      <FromProfile>true</FromProfile>
      <FromData>false</FromData>
      <DrillDown>false</DrillDown>
     </ItemValueDefinition>
    </ItemValue>
   </ItemValues>
   <Environment uid="5F5887BCF726"/>
   <ItemDefinition uid="80DB1AB8141F"/>
   <DataCategory uid="138B5405E0CE">
    <Name>Fuel</Name>
    <Path>fuel</Path>
    <Deprecated>false</Deprecated>
   </DataCategory>
   <Amount unit="kg/year">1155.8500000000001</Amount>
   <Amounts>
    <Amount default="true" perUnit="" type="totalDirectCO2e" unit="kg">1155.8500000000001</Amount>
    <Amount perUnit="" type="lifeCycleCO2e" unit="kg">1361.3500000000001</Amount>
    <Amount perUnit="" type="CO2" unit="kg">1150.9</Amount>
    <Amount perUnit="" type="nitrousOxideCO2e" unit="kg">3.25</Amount>
    <Amount perUnit="" type="methaneCO2e" unit="kg">1.7</Amount>
    <Amount perUnit="" type="indirectCO2e" unit="kg">205.5</Amount>
    <Note type="comment">This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation</Note>
   </Amounts>
   <StartDate>2011-03-08T13:56:00Z</StartDate>
   <EndDate/>
   <DataItem uid="19B311DDF0B1">
    <Label>petrol</Label>
   </DataItem>
   <Profile uid="YLLIKH73BDYS"/>
  </ProfileItem>
  <Path>/transport/defra/fuel/F0638HOIFC1H</Path>
  <Profile uid="YLLIKH73BDYS"/>
 </ProfileItemResource>
</Resources>
~~~~

.

### List Profile Items

Fetches all profile items in a particular category.

  -------------------------- --------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}/{category\_path}
  HTTP Method                GET
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- --------------------------------------------------------------------

#### Optional Parameters

  Parameter       Description
  --------------- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  startDate       Start and end dates can be used to define a "query window" for the request. This window affects which profile items will be returned in the response, and included in the total emission value. See parameters below for details. The date should be specified in ISO8601 format. Default value is the start of the current month. If endDate or duration are specified, this parameter is compulsory. See [the section called “Dates/Times”](apc.php#dates-times-reference "Dates/Times") for details of format.
  endDate         See startDate above. Should be specified in ISO8601 format. Defaults to infinitely far in the future. See [the section called “Dates/Times”](apc.php#dates-times-reference "Dates/Times") for details of format.
  duration        As an alternative to specifying an end time, you can specify the duration of the query window in ISO8601 duration format. See [the section called “Durations”](apc.php#duration-reference "Durations") for details of format.
  selectby        Setting this to 'start' will only include items which start during the query window. Setting 'end' will include only items which end during the window. The default behaviour is to include any item that intersects the query window.
  mode            Set the calculation mode used. By default, emission values for items are for the whole item, not just the part of the item that intersects the query window. To get just the emissions that took place during the query window, set this parameter to 'prorata'.
  returnUnit      Mass units that should be used for the calculation results. Specifying returnUnit=lb would return lb/year instead of kg/year, for example. See the list of supported units for more details. Default unit is kg.
  returnPerUnit   Time units that should be used for the calculation results. Specifying returnPerUnit=month would return kg/month instead of kg/year, for example. See the list of supported units for more details. Default is per year.
  page            If there is more than one page of profile items, retrieve the specified page. Default is to fetch page 1. See [the section called “Paging”](apc.php#paging-reference "Paging").
  itemsPerPage    Specify the number of profile items returned in a single page. Default is to fetch 10 items per page. See [the section called “Paging”](apc.php#paging-reference "Paging").

The response describes the profile category and any items within it. A
summed total of the default amounts in each item is provided in the
response.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
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
  "profileItems": [
    {
      "modified": "2011-03-08T13:56:01Z",
      "name": null,
      "itemValues": [
        {
          "name": "Mass of fuel consumed",
          "itemValueDefinition": {
            "fromData": false,
            "name": "Mass of fuel consumed",
            "drillDown": false,
            "fromProfile": true,
            "uid": "50151C2D0B90",
            "valueDefinition": {
              "modified": "2007-07-27 07:30:44.0",
              "name": "amount",
              "valueType": "DECIMAL",
              "uid": "45433E48B39F",
              "description": "",
              "environment": {
                "uid": "5F5887BCF726"
              },
              "created": "2007-07-27 07:30:44.0"
            },
            "unit": "kg",
            "path": "mass"
          },
          "displayName": "Mass of fuel consumed",
          "perUnit": "",
          "startDate": "2011-03-08T13:56:00Z",
          "uid": "42ROH1HOI2BE",
          "value": "",
          "unit": "kg",
          "path": "mass",
          "displayPath": "mass"
        },
        {
          "name": "Volume of fuel consumed",
          "itemValueDefinition": {
            "fromData": false,
            "name": "Volume of fuel consumed",
            "drillDown": false,
            "fromProfile": true,
            "uid": "93899EF4E3AF",
            "valueDefinition": {
              "modified": "2007-07-27 07:30:44.0",
              "name": "amount",
              "valueType": "DECIMAL",
              "uid": "45433E48B39F",
              "description": "",
              "environment": {
                "uid": "5F5887BCF726"
              },
              "created": "2007-07-27 07:30:44.0"
            },
            "unit": "L",
            "path": "volume"
          },
          "displayName": "Volume of fuel consumed",
          "perUnit": "",
          "startDate": "2011-03-08T13:56:00Z",
          "uid": "U9J6XCMJT07I",
          "value": "500",
          "unit": "L",
          "path": "volume",
          "displayPath": "volume"
        }
      ],
      "amount": {
        "value": 1155.85,
        "unit": "kg/year"
      },
      "startDate": "2011-03-08T13:56:00Z",
      "uid": "F0638HOIFC1H",
      "dataItem": {
        "Label": "petrol",
        "uid": "19B311DDF0B1"
      },
      "amounts": {
        "amount": [
          {
            "default": "true",
            "type": "totalDirectCO2e",
            "value": 1155.85,
            "unit": "kg"
          },
          {
            "type": "lifeCycleCO2e",
            "value": 1361.35,
            "unit": "kg"
          },
          {
            "type": "CO2",
            "value": 1150.9,
            "unit": "kg"
          },
          {
            "type": "nitrousOxideCO2e",
            "value": 3.25,
            "unit": "kg"
          },
          {
            "type": "methaneCO2e",
            "value": 1.7,
            "unit": "kg"
          },
          {
            "type": "indirectCO2e",
            "value": 205.5,
            "unit": "kg"
          }
        ],
        "note": [
          {
            "type": "comment",
            "value": "This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation"
          }
        ]
      },
      "endDate": "",
      "created": "2011-03-08T13:56:01Z"
    }
  ],
  "dataCategory": {
    "modified": "2011-08-01 15:40:14.0",
    "name": "Fuel",
    "dataCategory": {
      "name": "Defra",
      "uid": "4888AD538569",
      "path": "defra",
      "deprecated": false
    },
    "uid": "138B5405E0CE",
    "path": "fuel",
    "itemDefinition": {
      "modified": "2011-08-01 15:36:37.0",
      "name": "DEFRA transport fuels",
      "drillDown": "fuel",
      "uid": "80DB1AB8141F",
      "environment": {
        "uid": "5F5887BCF726"
      },
      "created": "2010-11-09 19:29:48.0"
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
    "created": "2010-11-09 19:30:24.0"
  },
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "pager": {
    "items": 1,
    "currentPage": 1,
    "itemsPerPage": 10,
    "from": 1,
    "nextPage": -1,
    "to": 1,
    "itemsFound": 1,
    "start": 0,
    "requestedPage": 1,
    "lastPage": 1,
    "previousPage": -1
  },
  "totalAmount": {
    "value": "1155.8500000000001",
    "unit": "kg/year"
  },
  "path": "/transport/defra/fuel",
  "profileCategories": [

  ],
  "environment": {
    "modified": "Fri Jul 27 08:30:44 UTC 2007",
    "name": "AMEE",
    "itemsPerPage": 10,
    "uid": "5F5887BCF726",
    "path": "",
    "description": "",
    "itemsPerFeed": 10,
    "owner": "",
    "created": "Fri Jul 27 08:30:44 UTC 2007"
  },
  "apiVersion": "2.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Resources xmlns="http://schemas.amee.cc/2.0">
 <ProfileCategoryResource>
  <Path>/transport/defra/fuel</Path>
  <Profile uid="YLLIKH73BDYS"/>
  <Environment created="Fri Jul 27 08:30:44 UTC 2007" modified="Fri Jul 27 08:30:44 UTC 2007" uid="5F5887BCF726">
   <Name>AMEE</Name>
   <Path/>
   <Description/>
   <Owner/>
   <ItemsPerPage>10</ItemsPerPage>
   <ItemsPerFeed>10</ItemsPerFeed>
  </Environment>
  <DataCategory uid="138B5405E0CE">
   <Name>Fuel</Name>
   <Path>fuel</Path>
   <Deprecated>false</Deprecated>
  </DataCategory>
  <ProfileCategories/>
  <ProfileItems>
   <ProfileItem created="2011-03-08T13:56:01Z" modified="2011-03-08T13:56:01Z" uid="F0638HOIFC1H">
    <Name/>
    <ItemValues>
     <ItemValue uid="42ROH1HOI2BE">
      <Path>mass</Path>
      <Name>Mass of fuel consumed</Name>
      <Value/>
      <Unit>kg</Unit>
      <PerUnit/>
      <StartDate>2011-03-08T13:56:00Z</StartDate>
      <ItemValueDefinition uid="50151C2D0B90">
       <Path>mass</Path>
       <Name>Mass of fuel consumed</Name>
       <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
        <Name>amount</Name>
        <ValueType>DECIMAL</ValueType>
        <Description/>
        <Environment uid="5F5887BCF726"/>
       </ValueDefinition>
       <Unit>kg</Unit>
       <FromProfile>true</FromProfile>
       <FromData>false</FromData>
       <DrillDown>false</DrillDown>
      </ItemValueDefinition>
     </ItemValue>
     <ItemValue uid="U9J6XCMJT07I">
      <Path>volume</Path>
      <Name>Volume of fuel consumed</Name>
      <Value>500</Value>
      <Unit>L</Unit>
      <PerUnit/>
      <StartDate>2011-03-08T13:56:00Z</StartDate>
      <ItemValueDefinition uid="93899EF4E3AF">
       <Path>volume</Path>
       <Name>Volume of fuel consumed</Name>
       <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
        <Name>amount</Name>
        <ValueType>DECIMAL</ValueType>
        <Description/>
        <Environment uid="5F5887BCF726"/>
       </ValueDefinition>
       <Unit>L</Unit>
       <FromProfile>true</FromProfile>
       <FromData>false</FromData>
       <DrillDown>false</DrillDown>
      </ItemValueDefinition>
     </ItemValue>
    </ItemValues>
    <Amount unit="kg/year">1155.8500000000001</Amount>
    <Amounts>
     <Amount default="true" perUnit="" type="totalDirectCO2e" unit="kg">1155.8500000000001</Amount>
     <Amount perUnit="" type="lifeCycleCO2e" unit="kg">1361.3500000000001</Amount>
     <Amount perUnit="" type="CO2" unit="kg">1150.9</Amount>
     <Amount perUnit="" type="nitrousOxideCO2e" unit="kg">3.25</Amount>
     <Amount perUnit="" type="methaneCO2e" unit="kg">1.7</Amount>
     <Amount perUnit="" type="indirectCO2e" unit="kg">205.5</Amount>
     <Note type="comment">This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation</Note>
    </Amounts>
    <StartDate>2011-03-08T13:56:00Z</StartDate>
    <EndDate/>
    <DataItem uid="19B311DDF0B1">
     <Label>petrol</Label>
    </DataItem>
   </ProfileItem>
  </ProfileItems>
  <Pager>
   <Start>0</Start>
   <From>1</From>
   <To>1</To>
   <Items>1</Items>
   <CurrentPage>1</CurrentPage>
   <RequestedPage>1</RequestedPage>
   <NextPage>-1</NextPage>
   <PreviousPage>-1</PreviousPage>
   <LastPage>1</LastPage>
   <ItemsPerPage>10</ItemsPerPage>
   <ItemsFound>1</ItemsFound>
  </Pager>
  <TotalAmount unit="kg/year">1155.8500000000001</TotalAmount>
 </ProfileCategoryResource>
</Resources>
~~~~

.

### Update Profile Item

Used to update an existing profile item.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}/{category\_path}/{profile\_item\_uid}
  HTTP Method                PUT
  Request Content-Type       application/x-www-form-urlencoded
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- -----------------------------------------------------------------------------------------

#### Optional Parameters

  Parameter            Description
  -------------------- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  {valueName}          Set a Profile Item Value by specifying the name and value. For example, the value name could be 'distance' supplied with a value of '300'. Multiple name/value pairs can be submitted so long as the named Item Values exist for the Profile Item. Names and values are case sensitive.
  {valueName}Unit      If a value is set, a unit can also be set. In the distance example above, the 'distanceUnit' parameter could be set to 'km', 'mi', or any other supported distance unit. All values have default units if none are supplied.
  {valueName}PerUnit   If a value is set, a perUnit can also be set, which indicates the timescale over which the value applies. In the distance example above, the 'distancePerUnit' parameter could be set to 'day', 'month', or any other supported time unit. Not all values support perUnits; check AMEEdiscover for each case. Relevant values have default perUnits if none are supplied.
  name                 Set the name of the item. You cannot create two items with the same dataItemUid and overlapping dates unless you give them a unique name. Items with the same name and dataItemUid are considered to be a time series.
  startDate            An ISO8601 date/time which specifies when the item should be valid from. This parameter is compulsory if either endDate or duration are specified. Defaults to the current time. See [the section called “Dates/Times”](apc.php#dates-times-reference "Dates/Times") for details of format.
  endDate              An ISO8601 date/time which specifies when the item should be valid until. Defaults to infinitely far in the future. See [the section called “Dates/Times”](apc.php#dates-times-reference "Dates/Times") for details of format.
  duration             As an alternative to specifying an end time, you can specify the duration that the item should be valid for in ISO8601 duration format. See [the section called “Durations”](apc.php#duration-reference "Durations") for details.
  representation       If set to 'full', the newly-created item will be returned in the response to the POST request. By default, only a Location header is returned.

If the representation parameter is set to full, the response will
include the details of the created item. Otherwise, it will be empty.

-   [Example](javascript:;)
-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
PUT /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/json, application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
volume=1000
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: text/plain
          
~~~~

.

.

#### Request

~~~~ {.programlisting}
PUT /profiles/YLLIKH73BDYS/transport/defra/fuel/9UY7CR57O59V HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
volume=1000&representation=full
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "path": "/transport/defra/fuel/5C61SFIV391I",
  "profileItem": {
    "name": "json_example",
    "modified": "2011-08-04T17:16:07Z",
    "dataCategory": {
      "name": "Fuel",
      "uid": "138B5405E0CE",
      "path": "fuel",
      "deprecated": false
    },
    "profile": {
      "uid": "YLLIKH73BDYS"
    },
    "itemValues": [
      {
        "name": "Mass of fuel consumed",
        "itemValueDefinition": {
          "fromData": false,
          "name": "Mass of fuel consumed",
          "drillDown": false,
          "fromProfile": true,
          "uid": "50151C2D0B90",
          "valueDefinition": {
            "modified": "2007-07-27 07:30:44.0",
            "name": "amount",
            "valueType": "DECIMAL",
            "uid": "45433E48B39F",
            "description": "",
            "environment": {
              "uid": "5F5887BCF726"
            },
            "created": "2007-07-27 07:30:44.0"
          },
          "unit": "kg",
          "path": "mass"
        },
        "displayName": "Mass of fuel consumed",
        "perUnit": "",
        "startDate": "2011-01-05T00:00:00Z",
        "uid": "QMIFK54JE3PE",
        "value": "",
        "unit": "kg",
        "path": "mass",
        "displayPath": "mass"
      },
      {
        "name": "Volume of fuel consumed",
        "itemValueDefinition": {
          "fromData": false,
          "name": "Volume of fuel consumed",
          "drillDown": false,
          "fromProfile": true,
          "uid": "93899EF4E3AF",
          "valueDefinition": {
            "modified": "2007-07-27 07:30:44.0",
            "name": "amount",
            "valueType": "DECIMAL",
            "uid": "45433E48B39F",
            "description": "",
            "environment": {
              "uid": "5F5887BCF726"
            },
            "created": "2007-07-27 07:30:44.0"
          },
          "unit": "L",
          "path": "volume"
        },
        "displayName": "Volume of fuel consumed",
        "perUnit": "",
        "startDate": "2011-01-05T00:00:00Z",
        "uid": "XO51RT4VSAB9",
        "value": "1000",
        "unit": "L",
        "path": "volume",
        "displayPath": "volume"
      }
    ],
    "amount": {
      "value": 2311.7,
      "unit": "kg/year"
    },
    "startDate": "2011-01-05T00:00:00Z",
    "uid": "5C61SFIV391I",
    "amounts": {
      "amount": [
        {
          "default": "true",
          "type": "totalDirectCO2e",
          "value": 2311.7,
          "unit": "kg"
        },
        {
          "type": "lifeCycleCO2e",
          "value": 2722.7,
          "unit": "kg"
        },
        {
          "type": "CO2",
          "value": 2301.8,
          "unit": "kg"
        },
        {
          "type": "nitrousOxideCO2e",
          "value": 6.5,
          "unit": "kg"
        },
        {
          "type": "methaneCO2e",
          "value": 3.4,
          "unit": "kg"
        },
        {
          "type": "indirectCO2e",
          "value": 411,
          "unit": "kg"
        }
      ],
      "note": [
        {
          "type": "comment",
          "value": "This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation"
        }
      ]
    },
    "dataItem": {
      "Label": "petrol",
      "uid": "19B311DDF0B1"
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
    "itemDefinition": {
      "name": "DEFRA transport fuels",
      "drillDown": "fuel",
      "uid": "80DB1AB8141F"
    },
    "endDate": "",
    "created": "2011-08-04T17:16:07Z"
  },
  "apiVersion": "2.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
PUT /profiles/YLLIKH73BDYS/transport/defra/fuel/669ZF2KG9YWC HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
volume=1000&representation=full
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Resources xmlns="http://schemas.amee.cc/2.0">
 <ProfileItemResource>
  <ProfileItem created="2011-08-04T17:16:10Z" modified="2011-08-04T17:16:10Z" uid="UC9MIF9GZO1A">
   <Name>xml_example</Name>
   <ItemValues>
    <ItemValue uid="9U46OXTYM6JR">
     <Path>mass</Path>
     <Name>Mass of fuel consumed</Name>
     <Value/>
     <Unit>kg</Unit>
     <PerUnit/>
     <StartDate>2011-01-05T00:00:00Z</StartDate>
     <ItemValueDefinition uid="50151C2D0B90">
      <Path>mass</Path>
      <Name>Mass of fuel consumed</Name>
      <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
       <Name>amount</Name>
       <ValueType>DECIMAL</ValueType>
       <Description/>
       <Environment uid="5F5887BCF726"/>
      </ValueDefinition>
      <Unit>kg</Unit>
      <FromProfile>true</FromProfile>
      <FromData>false</FromData>
      <DrillDown>false</DrillDown>
     </ItemValueDefinition>
    </ItemValue>
    <ItemValue uid="JILC5X8VVMGJ">
     <Path>volume</Path>
     <Name>Volume of fuel consumed</Name>
     <Value>1000</Value>
     <Unit>L</Unit>
     <PerUnit/>
     <StartDate>2011-01-05T00:00:00Z</StartDate>
     <ItemValueDefinition uid="93899EF4E3AF">
      <Path>volume</Path>
      <Name>Volume of fuel consumed</Name>
      <ValueDefinition created="2007-07-27 07:30:44.0" modified="2007-07-27 07:30:44.0" uid="45433E48B39F">
       <Name>amount</Name>
       <ValueType>DECIMAL</ValueType>
       <Description/>
       <Environment uid="5F5887BCF726"/>
      </ValueDefinition>
      <Unit>L</Unit>
      <FromProfile>true</FromProfile>
      <FromData>false</FromData>
      <DrillDown>false</DrillDown>
     </ItemValueDefinition>
    </ItemValue>
   </ItemValues>
   <Environment uid="5F5887BCF726"/>
   <ItemDefinition uid="80DB1AB8141F"/>
   <DataCategory uid="138B5405E0CE">
    <Name>Fuel</Name>
    <Path>fuel</Path>
    <Deprecated>false</Deprecated>
   </DataCategory>
   <Amount unit="kg/year">2311.7000000000003</Amount>
   <Amounts>
    <Amount default="true" perUnit="" type="totalDirectCO2e" unit="kg">2311.7000000000003</Amount>
    <Amount perUnit="" type="lifeCycleCO2e" unit="kg">2722.7000000000003</Amount>
    <Amount perUnit="" type="CO2" unit="kg">2301.8</Amount>
    <Amount perUnit="" type="nitrousOxideCO2e" unit="kg">6.5</Amount>
    <Amount perUnit="" type="methaneCO2e" unit="kg">3.4</Amount>
    <Amount perUnit="" type="indirectCO2e" unit="kg">411.0</Amount>
    <Note type="comment">This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation</Note>
   </Amounts>
   <StartDate>2011-01-05T00:00:00Z</StartDate>
   <EndDate/>
   <DataItem uid="19B311DDF0B1">
    <Label>petrol</Label>
   </DataItem>
   <Profile uid="YLLIKH73BDYS"/>
  </ProfileItem>
  <Path>/transport/defra/fuel/UC9MIF9GZO1A</Path>
  <Profile uid="YLLIKH73BDYS"/>
 </ProfileItemResource>
</Resources>
~~~~

.

### Delete Profile Item

Completely remove the specified profile item from the AMEE database.
This information cannot be recovered after deletion.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}/{category\_path}/{profile\_item\_uid}
  HTTP Method                DELETE
  Successful Response Code   200 OK
  -------------------------- -----------------------------------------------------------------------------------------

-   [Example](javascript:;)

.

#### Request

~~~~ {.programlisting}
DELETE /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/json, application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: text/plain
          
~~~~

.

Batch Operations
----------------

Multiple Profile Items can be set in a single HTTP request by using the
Batch Update mechanism. Batch updates are performed by sending an XML or
JSON document to the profile root or profile category URL. If you send a
POST request, new Profile Items will be created. If you send a PUT,
existing Profile Items will be updated. If sending to the profile root,
any data in any category can be created or modified. When sending to a
category, only items within that category can be created or modified.

### Create Multiple Profile Items

Used to create multiple new profile items in a single HTTP request.

  -------------------------- ----------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}[/{category\_path}]
  HTTP Method                POST
  Request Content-Type       application/json or application/xml
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- ----------------------------------------------------------------------

The request should include a JSON or XML-encoded body containing the
values which should be set. See the examples below for the exact
structure. Compulsory and optional parameters are as discussed in [the
section called “Create Profile
Item”](apa.php#create-profile-item-reference "Create Profile Item"), but
instead of putting the parameters in a form encoded body, parameter
names become hash keys or tag names in the JSON or XML. As for creating
individual items, a dataItemUid is compulsory. Other parameters are
optional.

If you post to the root URL of the profile, you do not need to tell the
platform which category the items should be created in; it will infer
this from the specified dataItemUid. This means that items can be
created across multiple categories at once. However, if you post to a
particular category, an error will be raised if any dataItemUids are not
within that category. This restriction could be useful for debugging.

Creation is atomic: in the event of failure, an error code will be
returned and none of the items will be created. If successful, the
response will contain a list of the locations of the created items.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
POST /profiles/80EC1B49E2A9 HTTP/1.1
Accept: application/json
Content-Type: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
{
  "profileItems":[
    {
      "dataItemUid":"66056991EE23",
      "volumePerTime":100
    },
    {
      "dataItemUid":"4F6CBCEE95F7",
      "distance":200
    }
  ]
}
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          
~~~~

~~~~ {.programlisting}
{
  "apiVersion":"2.0",
  "profileItems": [
    {
      "uid":"7063451432AD",
      "uri":"/profiles/74300FF5E2E5/home/energy/quantity/7063451432AD"
    },
    {
      "uid":"54D4371B08AA",
      "uri":"/profiles/74300FF5E2E5/transport/car/generic/54D4371B08AA"
    }
  ]
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /profiles/59586731F930 HTTP/1.1
Accept: application/xml
Content-Type: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8"?>
<ProfileCategory>
  <ProfileItems>
    <ProfileItem>
      <volumePerTime>100</volumePerTime>
      <dataItemUid>66056991EE23</dataItemUid>
    </ProfileItem>
    <ProfileItem>
      <dataItemUid>4F6CBCEE95F7</dataItemUid>
      <distance>200</distance>
    </ProfileItem>
  </ProfileItems>
</ProfileCategory>
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
  <ProfileItems>
    <ProfileItem uri="/profiles/59586731F930/home/energy/quantity/71AFED5FEFE9"/>
    <ProfileItem uri="/profiles/59586731F930/transport/car/generic/23133CF30A35"/>
  </ProfileItems>
</Resources>
~~~~

.

### Update Multiple Profile Items

Used to update multiple profile items in a single HTTP request.

  -------------------------- ----------------------------------------------------------------------
  URL                        https://{server}.amee.com/profiles/{profile\_uid}[/{category\_path}]
  HTTP Method                PUT
  Request Content-Type       application/json or application/xml
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- ----------------------------------------------------------------------

The request should include a JSON or XML-encoded body containing the
UIDs of the items, and the values which should be updated. See the
examples below for the exact structure. Parameters are as discussed in
[the section called “Update Profile
Item”](apa.php#update-profile-item-reference "Update Profile Item"), but
instead of putting the parameters in a form encoded body, parameter
names become hash keys or tag names in the JSON or XML.

Updates are atomic: in the event of failure, an error code will be
returned and none of the items will be updated.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
PUT /profiles/80EC1B49E2A9 HTTP/1.1
Accept: application/json
Content-Type: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
{
  "profileItems":[
    {
      "profileItemUid":"63CF7BE48B3F",
      "volumePerTime":300
    },
    {
      "profileItemUid":"32E5C8BA51AA",
      "distance":400
    }
  ]
}
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: text/plain
          
~~~~

.

.

#### Request

~~~~ {.programlisting}
PUT /profiles/59586731F930 HTTP/1.1
Accept: application/xml
Content-Type: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8"?>
<ProfileCategory>
  <ProfileItems>
    <ProfileItem>
      <profileItemUid>71AFED5FEFE9</profileItemUid>
      <volumePerTime>300</volumePerTime>
    </ProfileItem>
    <ProfileItem>
      <profileItemUid>23133CF30A35</profileItemUid>
      <distance>400</distance>
    </ProfileItem>
  </ProfileItems>
</ProfileCategory>
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: text/plain
          
~~~~

.

  --------------------------------- ----------------------- ------------------------------
  [« Advanced Options](ch06.php)    [Contents](index.php)    [Data Reference »](apb.php)
  --------------------------------- ----------------------- ------------------------------


