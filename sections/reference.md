AMEEconnect API reference
-------------------------

[Models](reference.md#data-category-reference)

[Properties](reference.md#d5e720)

[List models](reference.md#list-data-categories-reference)

[Get a single model](reference.md#get-data-category-reference)

[Interactive selection of contexts](reference.md#drilldown-reference)

[Contexts](reference.md#data-item-reference)

[Properties](reference.md#d5e1017)

[List contexts](reference.md#list-data-item-reference)

[Get context](reference.md#get-data-item-reference)

[Perform a calculation](reference.md#calculate-data-item-reference)

[Emission Factors](reference.md#data-item-value-reference)

[Properties](reference.md#d5e1239)

[Get emission factor](reference.md#get-data-item-value-reference)

[Profiles](reference.md#profile-reference)

[Properties](reference.md#d5e1294)

[Create profile](reference.md#create-profile-reference)

[Get profile](reference.md#get-profile-reference)

[List profiles](reference.md#list-profiles-reference)

[Delete profile](reference.md#delete-profile-reference)

[Profile Items](reference.md#profile-item-reference)

[Properties](reference.md#d5e1472)

[Results](reference.md#profile-item-amounts-reference)

[Create profile item](reference.md#create-profile-item-reference)

[Read profile item](reference.md#get-profile-item-reference)

[List profile items](reference.md#list-profile-items-reference)

[Update profile item](reference.md#update-profile-item-reference)

[Delete profile item](reference.md#delete-profile-item-reference)

[Batch Operations](reference.md#batch-operations-reference)

[Create multiple profile items](reference.md#batch-create-reference)

[Update multiple profile items](reference.md#batch-update-reference)

[Search](reference.md#search-reference)

[Query Parameters](reference.md#d5e1935)

[Authentication](reference.md#auth-reference)

[UIDs](reference.md#uid-reference)

[Date and Time Representation](reference.md#date-reference)

[Dates/Times](reference.md#dates-times-reference)

[Durations](reference.md#duration-reference)

Models
------

You can fetch all relevant information for a single model via AMEEconnect, or list a set of models matching specified criteria. In AMEEconnect URLs and representations, models are referred to as *categories*.

### Properties

Property    | Description | [Matrix Parameter](advanced.md#matrix-parameters "Matrix Parameters") |
------------|-------------|--------------------|
wikiName    | The unique name of the model. You should use this wherever a model needs to be specified. |  |
UID         | A [unique identification code](reference.md#uid-reference "UIDs") for the model. |
authority   | The [authority rating](advanced.md#authority "Authority") of the model. | `authority` |
provenance  | A link (or set of links) to the original source on which the model is based. May include WikiCreole markup for links. | `provenance` |
history     | The history data for the model. A CSV-style list of change dates and comments. | `history` |
wikiDoc     | The full documentation for the model, as displayed in AMEEdiscover. Uses WikiCreole syntax.  | `wikiDoc` |
tags        | A collection of textual tags, as used by AMEEdiscover. | `tags`|
itemDefinition | Include details of the item definition, which provides access to information on inputs and return values. `itemDefinition` 
created | The time and date on which the model was created. | `audit`|
modified | The time and date on which the model was last modified. Note that this does not track changes to contexts inside the model, only to the model itself. | `audit` |
status |The current status of the model. Normally this will be `ACTIVE`. | `audit` |

### List models

Fetches a list of models matching specified criteria. The list is sorted
by relevance, or by wikiName if no query parameters are supplied.

  -------------------------- ---------------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories[;{matrix_parameters}]?{query_parameters}`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- ---------------------------------------------------------------------------------------------

#### Query Parameters

The model list resource provides a number of parameters for searching
and filtering. These can be specified as simple strings, in which case
an exact match is required, or as more complex lucene query expressions.
See [the section called “Search”](advanced.md#search "Search") for more
details.

  Query Parameter               Description                                                                                                                                                      Required?
  ----------------------------- ---------------------------------------------------------------------------------------------------------------------------------------------------------------- -----------
  `wikiName`             Match results by wikiName.                                                                                                                                       ✗
  `wikiDoc`              Match results by wikiDoc. Normally you'll want to use a substring search here.                                                                                   ✗
  `provenance`           Match results by provenance; standards body name, for instance.                                                                                                  ✗
  `authority`            Match results by authority; Valid values are `enterprise`, `recommended`, `verified`, or `unverified`.                               ✗
  `itemDefinitionUid`    List models that use the specified item definition (by UID).                                                                                                     ✗
  `itemDefinitionName`   List models that use the specified item definition (by name).                                                                                                    ✗
  `tags`                 A comma-separated list of tags that returned models should have. Can also be a lucene query expression.                                                          ✗
  `excTags`              A comma-separated list of tags that returned models should *not* have. Can also be a lucene query expression.                                                    ✗
  `resultStart`          Zero-based index of the first result that should be returned. See [the section called “Paging”](advanced.md#paging "Paging"). Defaults to 0 if not specified.   ✗
  `resultLimit`          Specifies the number of results to return in a single page. See [the section called “Paging”](advanced.md#paging "Paging"). Defaults to 50 if not specified.    ✗

The response contains JSON or XML encoded descriptions of all models
that match the query criteria.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories?resultLimit=10&tags=electricity HTTP/1.1
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
  "status": "OK",
  "resultsTruncated": true,
  "categories": [
    {
      "uid": "74AFDCA1BDF6",
      "wikiName": "Electricity_China"
    },
    {
      "uid": "F9480414FF6F",
      "wikiName": "Electricity_India"
    },
    {
      "uid": "RAD15YQ0AIG9",
      "wikiName": "gensets"
    },
    {
      "uid": "203657D67A75",
      "wikiName": "Heating_UK_Renewable"
    },
    {
      "uid": "30BA55A0C472",
      "wikiName": "Energy"
    },
    {
      "uid": "0D3E0524F89D",
      "wikiName": "Energy_in_Ireland"
    },
    {
      "uid": "3C03A03B5F3A",
      "wikiName": "Kitchen_generic"
    },
    {
      "uid": "94BEXQWWPD94",
      "wikiName": "Diesel_Generator_Sets"
    },
    {
      "uid": "Z1G29DRYV4FY",
      "wikiName": "EPA_eGRID_transmission_losses"
    },
    {
      "uid": "E297D48B5830",
      "wikiName": "UK_energy"
    }
  ],
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories?resultLimit=10&tags=electricity HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Categories truncated="true">
  <Category uid="74AFDCA1BDF6">
   <WikiName>Electricity_China</WikiName>
  </Category>
  <Category uid="F9480414FF6F">
   <WikiName>Electricity_India</WikiName>
  </Category>
  <Category uid="RAD15YQ0AIG9">
   <WikiName>gensets</WikiName>
  </Category>
  <Category uid="203657D67A75">
   <WikiName>Heating_UK_Renewable</WikiName>
  </Category>
  <Category uid="30BA55A0C472">
   <WikiName>Energy</WikiName>
  </Category>
  <Category uid="0D3E0524F89D">
   <WikiName>Energy_in_Ireland</WikiName>
  </Category>
  <Category uid="3C03A03B5F3A">
   <WikiName>Kitchen_generic</WikiName>
  </Category>
  <Category uid="94BEXQWWPD94">
   <WikiName>Diesel_Generator_Sets</WikiName>
  </Category>
  <Category uid="Z1G29DRYV4FY">
   <WikiName>EPA_eGRID_transmission_losses</WikiName>
  </Category>
  <Category uid="E297D48B5830">
   <WikiName>UK_energy</WikiName>
  </Category>
 </Categories>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Get a single model

Fetch information about a particular model.

  -------------------------- -------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories/{wikiName}[;{matrix_parameters}]`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- -------------------------------------------------------------------------------------

The response contains a JSON or XML encoded description of the model as
shown below.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/DEFRA_transport_fuel_methodology HTTP/1.1
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
  "category": {
    "uid": "BBAF1A02B8CB",
    "wikiName": "DEFRA_transport_fuel_methodology"
  },
  "status": "OK",
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/DEFRA_transport_fuel_methodology HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Category uid="BBAF1A02B8CB">
  <WikiName>DEFRA_transport_fuel_methodology</WikiName>
 </Category>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Interactive selection of contexts

Each model contains a number of contexts. Normally you will know which
context you want to use, but sometimes you will want to give that choice
to your users. This is particularly important for large categories, such
as [US specific car
transport](http://discover.amee.com/categories/US_specific_car_transport),
which contains many thousands of contexts.

Each model has a *drilldown* resource which allows you do this kind of
user-driven context selection. Each call to the drilldown resource will
return a list of choices. You can then select one of these and provide
it as a parameter to a subsequent drilldown request. When the sequence
of choices uniquely identifies a context, a single choice named
`uid` is returned.

This UID can be used to identify the context in place of the usual
context options when performing calculations or storing data. These UIDs
are not the same across different AMEEconnect platforms, and so should
not be hardcoded into applications. They can, however, be cached safely
for prolonged periods.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories/{wikiName}/drill[?{context options}]`
  HTTP Method                `GET`
  Response Content-Type      `application/xml` or `application/json`
  Successful Response Code   `200 OK`
  -------------------------- -----------------------------------------------------------------------------------------

#### Query Parameters

  Parameter                    Description                                                                                                                         Required?
  ---------------------------- ----------------------------------------------------------------------------------------------------------------------------------- ------------------------------
  `{context options}`   Any number of choices and the values chosen. See below for detailed explanation. Choices should be provided in the correct order.   ✓ (except for first request)

The response body contains a number of sections. `name` is the
name of the next context option, and `choices` lists the valid
values for it. The `selections` list shows context options that
have already been chosen.

#### First Choice

The first request has no parameters, so fetches the choices for the
first context option.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/Generic_car_transport/drill HTTP/1.1
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
  "status": "OK",
  "drill": {
    "choices": {
      "values": [
        "petrol",
        "diesel",
        "petrol hybrid",
        "lpg",
        "cng",
        "average"
      ],
      "name": "fuel"
    },
    "selections": [

    ]
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/Generic_car_transport/drill HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Drill>
  <Selections/>
  <Choices>
   <Name>fuel</Name>
   <Values>
    <Value>petrol</Value>
    <Value>diesel</Value>
    <Value>petrol hybrid</Value>
    <Value>lpg</Value>
    <Value>cng</Value>
    <Value>average</Value>
   </Values>
  </Choices>
 </Drill>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

#### Second Choice

In this example, the user has picked `fuel=diesel` for the first
context option. This is passed as a query parameter to a second
drilldown request.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/Generic_car_transport/drill?fuel=diesel HTTP/1.1
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
  "status": "OK",
  "drill": {
    "choices": {
      "values": [
        "small",
        "medium",
        "large"
      ],
      "name": "size"
    },
    "selections": [
      {
        "name": "fuel",
        "value": "diesel"
      }
    ]
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/Generic_car_transport/drill?fuel=diesel HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Drill>
  <Selections>
   <Selection>
    <Name>fuel</Name>
    <Value>diesel</Value>
   </Selection>
  </Selections>
  <Choices>
   <Name>size</Name>
   <Values>
    <Value>small</Value>
    <Value>medium</Value>
    <Value>large</Value>
   </Values>
  </Choices>
 </Drill>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

#### Final Result

This model has only two context options, so two drilldown selections are
enough to fully identify a context. The user has selected
`size=large` in this example. The UID of the selected context
appears as a choice named `uid`.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/Generic_car_transport/drill?fuel=diesel&size=large HTTP/1.1
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
  "status": "OK",
  "drill": {
    "choices": {
      "values": [
        "4F6CBCEE95F7"
      ],
      "name": "uid"
    },
    "selections": [
      {
        "name": "fuel",
        "value": "diesel"
      },
      {
        "name": "size",
        "value": "large"
      }
    ]
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/Generic_car_transport/drill?fuel=diesel&size=large HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Drill>
  <Selections>
   <Selection>
    <Name>fuel</Name>
    <Value>diesel</Value>
   </Selection>
   <Selection>
    <Name>size</Name>
    <Value>large</Value>
   </Selection>
  </Selections>
  <Choices>
   <Name>uid</Name>
   <Values>
    <Value>4F6CBCEE95F7</Value>
   </Values>
  </Choices>
 </Drill>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

Contexts
--------

A context represents a particular type of activity within a model. Each
has a unique set of context options, and contains a set of emission
factors which are used as constant inputs to calculations.

### Properties

  Property           Description                                                                                                                                                           [Matrix Parameter](advanced.md#matrix-parameters "Matrix Parameters")
  ------------------ --------------------------------------------------------------------------------------------------------------------------------------------------------------------- ------------------------------------------------------------------------
  UID                A [unique identification code](reference.md#uid-reference "UIDs") for the context.                                                                                   
  label              The human-readable name of the context, made up of all its context options.                                                                                           `label`
  values             A collection of emission factors used by the context.                                                                                                                 `values`
  categoryWikiName   The model that the context belongs to.                                                                                                                                `parent`
  provenance         A link (or set of links) to the original source on which the context is based. May be more detailed than model provenance. May include WikiCreole markup for links.   `provenance`
  wikiDoc            The full documentation for the context, as displayed in AMEEdiscover. Uses WikiCreole syntax.                                                                         `wikiDoc`
  itemDefinition     Include details of the item definition, which provides access to information on inputs and return values.                                                             `itemDefinition`
  created            The time and date on which the context was created.                                                                                                                   `audit`
  modified           The time and date on which the context was last modified.                                                                                                             `audit`
  status             The current status of the context. Normally this will be `ACTIVE`.                                                                                             `audit`

### List contexts

Fetches a list of contexts within a single model.

  -------------------------- --------------------------------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories/{wikiName}/items[;{matrix_parameters}]?{query_parameters}`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- --------------------------------------------------------------------------------------------------------------

#### Query Parameters

The context list resource provides a number of parameters for searching
and filtering. These can be specified as simple strings, in which case
an exact match is required, or as more complex lucene query expressions.
See [the section called “Search”](advanced.md#search "Search") for more
details.

  Query Parameter             Description                                                                                                                                                      Required?
  --------------------------- ---------------------------------------------------------------------------------------------------------------------------------------------------------------- -----------
  `label`              Match results by label.                                                                                                                                          ✗
  `{context option}`   Match results by context option.                                                                                                                                 ✗
  `provenance`         Match results by provenance; standards body name, for instance.                                                                                                  ✗
  `resultStart`        Zero-based index of the first result that should be returned. See [the section called “Paging”](advanced.md#paging "Paging"). Defaults to 0 if not specified.   ✗
  `resultLimit`        Specifies the number of results to return in a single page. See [the section called “Paging”](advanced.md#paging "Paging"). Defaults to 50 if not specified..   ✗

The response contains a JSON or XML encoded description of the matching
contexts.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/US_specific_car_transport/items;label?engineSize=2.5&resultLimit=10 HTTP/1.1
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
  "status": "OK",
  "items": [
    {
      "uid": "2D1C40136919",
      "label": "LEXUS, IS 250, 2.5, Manual(M6)"
    },
    {
      "uid": "E21DCFCC3344",
      "label": "LEXUS, IS 250, 2.5, Auto(S6)"
    },
    {
      "uid": "07EEAF1991B8",
      "label": "LEXUS, IS 250 AWD, 2.5, Auto(S6)"
    },
    {
      "uid": "7D1889865A9F",
      "label": "NISSAN, ALTIMA, 2.5, Auto(AV)"
    },
    {
      "uid": "C3FAD6539589",
      "label": "NISSAN, ALTIMA, 2.5, Manual(M6)"
    },
    {
      "uid": "E5EB52DA085F",
      "label": "NISSAN, ALTIMA COUPE, 2.5, Auto(AV)"
    },
    {
      "uid": "09A4F9740C1E",
      "label": "NISSAN, ALTIMA COUPE, 2.5, Manual(M6)"
    },
    {
      "uid": "17D72E711B41",
      "label": "NISSAN, ALTIMA HYBRID, 2.5, Auto(AV)"
    },
    {
      "uid": "B42DC8B5B25F",
      "label": "NISSAN, FRONTIER 2WD, 2.5, Auto(L5)"
    },
    {
      "uid": "1B4A4EA8A46A",
      "label": "NISSAN, FRONTIER 2WD, 2.5, Manual(M5)"
    }
  ],
  "resultsTruncated": true,
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/US_specific_car_transport/items;label?engineSize=2.5&resultLimit=10 HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Items truncated="true">
  <Item uid="2D1C40136919">
   <Label>LEXUS, IS 250, 2.5, Manual(M6)</Label>
  </Item>
  <Item uid="E21DCFCC3344">
   <Label>LEXUS, IS 250, 2.5, Auto(S6)</Label>
  </Item>
  <Item uid="07EEAF1991B8">
   <Label>LEXUS, IS 250 AWD, 2.5, Auto(S6)</Label>
  </Item>
  <Item uid="7D1889865A9F">
   <Label>NISSAN, ALTIMA, 2.5, Auto(AV)</Label>
  </Item>
  <Item uid="C3FAD6539589">
   <Label>NISSAN, ALTIMA, 2.5, Manual(M6)</Label>
  </Item>
  <Item uid="E5EB52DA085F">
   <Label>NISSAN, ALTIMA COUPE, 2.5, Auto(AV)</Label>
  </Item>
  <Item uid="09A4F9740C1E">
   <Label>NISSAN, ALTIMA COUPE, 2.5, Manual(M6)</Label>
  </Item>
  <Item uid="17D72E711B41">
   <Label>NISSAN, ALTIMA HYBRID, 2.5, Auto(AV)</Label>
  </Item>
  <Item uid="B42DC8B5B25F">
   <Label>NISSAN, FRONTIER 2WD, 2.5, Auto(L5)</Label>
  </Item>
  <Item uid="1B4A4EA8A46A">
   <Label>NISSAN, FRONTIER 2WD, 2.5, Manual(M5)</Label>
  </Item>
 </Items>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Get context

Fetches a representation of a single context.

  -------------------------- -------------------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories/{wikiName}/items/{uid}[;{matrix_parameters}]`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- -------------------------------------------------------------------------------------------------

The response contains a JSON or XML encoded description of the context.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/DEFRA_transport_fuel_methodology/items/AA6B1557CEA6;values HTTP/1.1
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
  "status": "OK",
  "item": {
    "uid": "AA6B1557CEA6",
    "values": [
      {
        "history": false,
        "unit": "kg/L",
        "value": 0.0034,
        "path": "massCH4PerVolume"
      },
      {
        "history": false,
        "unit": "kg/L",
        "value": 2.7227,
        "path": "massTotalCO2ePerVolume"
      },
      {
        "history": false,
        "value": "http://www.defra.gov.uk/environment/economy/business-efficiency/reporting",
        "path": "source"
      },
      {
        "history": false,
        "unit": "kg/L",
        "value": 2.3117,
        "path": "massDirectCO2ePerVolume"
      },
      {
        "history": false,
        "unit": "kg/L",
        "value": 0.411,
        "path": "massIndirectCO2ePerVolume"
      },
      {
        "history": false,
        "value": "petrol",
        "path": "fuel"
      },
      {
        "history": false,
        "unit": "kg/L",
        "value": 2.3018,
        "path": "massCO2PerVolume"
      },
      {
        "history": false,
        "unit": "kg/L",
        "value": 0.0065,
        "path": "massN2OPerVolume"
      }
    ]
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/DEFRA_transport_fuel_methodology/items/AA6B1557CEA6;values HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Item uid="AA6B1557CEA6">
  <Values>
   <Value history="false">
    <Path>massCH4PerVolume</Path>
    <Value>0.0034</Value>
    <Unit>kg/L</Unit>
   </Value>
   <Value history="false">
    <Path>massTotalCO2ePerVolume</Path>
    <Value>2.7227</Value>
    <Unit>kg/L</Unit>
   </Value>
   <Value history="false">
    <Path>source</Path>
    <Value>http://www.defra.gov.uk/environment/economy/business-efficiency/reporting</Value>
   </Value>
   <Value history="false">
    <Path>massDirectCO2ePerVolume</Path>
    <Value>2.3117</Value>
    <Unit>kg/L</Unit>
   </Value>
   <Value history="false">
    <Path>massIndirectCO2ePerVolume</Path>
    <Value>0.411</Value>
    <Unit>kg/L</Unit>
   </Value>
   <Value history="false">
    <Path>fuel</Path>
    <Value>petrol</Value>
   </Value>
   <Value history="false">
    <Path>massCO2PerVolume</Path>
    <Value>2.3018</Value>
    <Unit>kg/L</Unit>
   </Value>
   <Value history="false">
    <Path>massN2OPerVolume</Path>
    <Value>0.0065</Value>
    <Unit>kg/L</Unit>
   </Value>
  </Values>
 </Item>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Perform a calculation

Performs a calculation for a single context.

  -------------------------- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories/{wikiName}/calculation?{context options}&{query_parameters}` or `https://api-stage.amee.com/3.6/categories/{wikiName}/items/{uid}/calculation?{query_parameters}`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

#### Query Parameters

  Query Parameter                  Description                                                                                   Required?
  -------------------------------- --------------------------------------------------------------------------------------------- -----------
  `{context options}`       The context options for the context that should be used in the calculation.                   ✓
  `values.{value_name}`     An input to be used in the calculation. Any number can be specified in separate parameters.   ✓
  `units.{value_name}`      The unit that the relevant input is measured in.                                              ✗
  `perUnits.{value_name}`   The perUnit (normally a time unit) that the relevant input is measured in, if supported.      ✗

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/DEFRA_transport_fuel_methodology/calculation?fuel=petrol&values.volume=500 HTTP/1.1
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
  "status": "OK",
  "output": {
    "amounts": [
      {
        "unit": "kg",
        "default": true,
        "value": 1155.8500000000001,
        "type": "totalDirectCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 1361.3500000000001,
        "type": "lifeCycleCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 1150.9,
        "type": "CO2"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 3.25,
        "type": "nitrousOxideCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 1.7,
        "type": "methaneCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 205.5,
        "type": "indirectCO2e"
      }
    ],
    "notes": [
      {
        "value": "This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation",
        "type": "comment"
      }
    ]
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/DEFRA_transport_fuel_methodology/calculation?fuel=petrol&values.volume=500 HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Output>
  <Amounts>
   <Amount default="true" type="totalDirectCO2e" unit="kg">1155.8500000000001</Amount>
   <Amount type="lifeCycleCO2e" unit="kg">1361.3500000000001</Amount>
   <Amount type="CO2" unit="kg">1150.9</Amount>
   <Amount type="nitrousOxideCO2e" unit="kg">3.25</Amount>
   <Amount type="methaneCO2e" unit="kg">1.7</Amount>
   <Amount type="indirectCO2e" unit="kg">205.5</Amount>
  </Amounts>
  <Notes>
   <Note type="comment">This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation</Note>
  </Notes>
 </Output>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

Emission Factors
----------------

Each context has many emission factors, which can be retrieved
separately if desired. The normal use for this is to fetch history data
for emission factors which change over time.

### Properties

  Property    Description
  ----------- ---------------------------------------------------------------------------------------------
  UID         A [unique identification code](reference.md#uid-reference "UIDs") for the emission factor.
  value       The actual value of the emission factor.
  unit        The unit of the emission factor, if appropriate.
  startDate   The date from which the emission factor is valid.

### Get emission factor

Fetches a representation of a single emission factor, including history
data if relevant. Actual values are returned as an array. If there is no
history data, the array will only have one element.

  -------------------------- ----------------------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/categories/{wikiName}/items/{item_uid}/values/{value_name}`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- ----------------------------------------------------------------------------------------------------

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/UK_energy_by_supplier/items/E92FCC3E575A/values/kgCO2PerKWh HTTP/1.1
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
  "values": [
    {
      "history": false,
      "uid": "C32421FDA873",
      "startDate": "1970-01-01T00:00:00Z",
      "unit": "kg/(kW·h)",
      "value": 0.232
    },
    {
      "history": false,
      "uid": "82E8CDE095E6",
      "startDate": "2005-01-01T00:00:00Z",
      "unit": "kg/(kW·h)",
      "value": 0.338
    },
    {
      "history": false,
      "uid": "1A24A4BFB9FC",
      "startDate": "2006-01-01T00:00:00Z",
      "unit": "kg/(kW·h)",
      "value": 0.292
    },
    {
      "history": false,
      "uid": "AA9F3071C7C8",
      "startDate": "2007-01-01T00:00:00Z",
      "unit": "kg/(kW·h)",
      "value": 0.316
    },
    {
      "history": false,
      "uid": "3AD79475EC09",
      "startDate": "2008-01-01T00:00:00Z",
      "unit": "kg/(kW·h)",
      "value": 0.267
    },
    {
      "history": false,
      "uid": "5B69BDBD25E7",
      "startDate": "2009-01-01T00:00:00Z",
      "unit": "kg/(kW·h)",
      "value": 0.232
    }
  ],
  "status": "OK",
  "resultsTruncated": false,
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/categories/UK_energy_by_supplier/items/E92FCC3E575A/values/kgCO2PerKWh HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Values truncated="false">
  <Value history="false" uid="C32421FDA873">
   <Value>0.232</Value>
   <Unit>kg/(kWh)</Unit>
   <StartDate>1970-01-01T00:00:00Z</StartDate>
  </Value>
  <Value history="false" uid="82E8CDE095E6">
   <Value>0.338</Value>
   <Unit>kg/(kWh)</Unit>
   <StartDate>2005-01-01T00:00:00Z</StartDate>
  </Value>
  <Value history="false" uid="1A24A4BFB9FC">
   <Value>0.292</Value>
   <Unit>kg/(kWh)</Unit>
   <StartDate>2006-01-01T00:00:00Z</StartDate>
  </Value>
  <Value history="false" uid="AA9F3071C7C8">
   <Value>0.316</Value>
   <Unit>kg/(kWh)</Unit>
   <StartDate>2007-01-01T00:00:00Z</StartDate>
  </Value>
  <Value history="false" uid="3AD79475EC09">
   <Value>0.267</Value>
   <Unit>kg/(kWh)</Unit>
   <StartDate>2008-01-01T00:00:00Z</StartDate>
  </Value>
  <Value history="false" uid="5B69BDBD25E7">
   <Value>0.232</Value>
   <Unit>kg/(kWh)</Unit>
   <StartDate>2009-01-01T00:00:00Z</StartDate>
  </Value>
 </Values>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

Profiles
--------

A profile is the basic grouping element in AMEEconnect. A single profile
is used to contain all data corresponding to a single entity in a client
application. This could be a person, a building, an organisation, etc.;
you are free to choose what a profile corresponds to in your
application. You can create any number of separate profiles.

A profile is identified by its UID, which forms part of the URL for any
operations that are performed on or inside the profile.

### Properties

  Property     Description                                                                                                                                                                   [Matrix Parameter](advanced.md#matrix-parameters "Matrix Parameters")
  ------------ ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ------------------------------------------------------------------------
  UID          A 12-letter unique identifier for the profile. See [the section called “UIDs”](reference.md#uid-reference "UIDs") for more information.                                      
  categories   The models that have been used within this profile.                                                                                                                           `categories`
  created      The time and date on which the profile was created.                                                                                                                           `audit`
  modified     The time and date on which the profile was last modified. Note that this does not track changes inside the profile, such as to inputs, only to the profile resource itself.   `audit`

### Create profile

Used to create a new profile, in which inputs can be stored.

  -------------------------- --------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles`
  HTTP Method                `POST`
  Request Content-Type       `application/x-www-form-urlencoded`
  Successful Response Code   `201 CREATED`
  -------------------------- --------------------------------------------------

#### Body Parameters

  Parameter          Description                                                      Required?
  ------------------ ---------------------------------------------------------------- -----------
  `profile`   Tell AMEEconnect to create a profile. Should always be 'true'.   ✓

The response body contains the created profile UID, as does the
`Location` header.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles HTTP/1.1
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
HTTP/1.1 201 Created
Content-Type: application/json; charset=UTF-8
Location: https://api-stage.amee.com/3.6.0/profiles/FC2ODLZHCNHS
~~~~

~~~~ {.programlisting}
{
  "location": "/3.6.0/profiles/FC2ODLZHCNHS",
  "status": "OK",
  "entity": {
    "uid": "FC2ODLZHCNHS"
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles HTTP/1.1
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
HTTP/1.1 201 Created
Content-Type: application/xml
Location: https://api-stage.amee.com/3.6.0/profiles/FC2ODLZHCNHS
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Status>OK</Status>
 <Location>/3.6.0/profiles/FC2ODLZHCNHS</Location>
 <Entity uid="FC2ODLZHCNHS"/>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Get profile

The main information available in the profile resource is the list of
models used. This is useful for automating display of stored data.

  -------------------------- ----------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- ----------------------------------------------------------------

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS;categories HTTP/1.1
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
  "status": "OK",
  "version": "3.6.0",
  "profile": {
    "uid": "FC2ODLZHCNHS",
    "categories": [
      {
        "uid": "BBAF1A02B8CB",
        "name": "Fuel",
        "wikiName": "DEFRA_transport_fuel_methodology"
      }
    ]
  }
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS;categories HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Profile uid="FC2ODLZHCNHS">
  <Categories>
   <Category uid="BBAF1A02B8CB">
    <Name>Fuel</Name>
    <WikiName>DEFRA_transport_fuel_methodology</WikiName>
   </Category>
  </Categories>
 </Profile>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### List profiles

Lists all profiles available to the current user.

  -------------------------- --------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- --------------------------------------------------

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles HTTP/1.1
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
  "status": "OK",
  "resultsTruncated": false,
  "profiles": [
    {
      "uid": "WZ516B97NYDZ"
    },
    {
      "uid": "NIYUN6Z4FH6M"
    },
    {
      "uid": "K5MRP2GMNB6A"
    },
    {
      "uid": "FC2ODLZHCNHS"
    }
  ],
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Profiles truncated="false">
  <Profile uid="WZ516B97NYDZ"/>
  <Profile uid="NIYUN6Z4FH6M"/>
  <Profile uid="K5MRP2GMNB6A"/>
  <Profile uid="FC2ODLZHCNHS"/>
 </Profiles>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Delete profile

Completely remove the specified profile from the AMEE database,
including all profile items contained within it. This information cannot
be recovered after deletion.

  -------------------------- ----------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}`
  HTTP Method                `DELETE`
  Successful Response Code   `200 OK`
  -------------------------- ----------------------------------------------------------------

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
DELETE /3.6/profiles/FC2ODLZHCNHS HTTP/1.1
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
  "status": "OK",
  "entity": {
    "uid": "FC2ODLZHCNHS"
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
DELETE /3.6/profiles/FC2ODLZHCNHS HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Status>OK</Status>
 <Entity uid="FC2ODLZHCNHS"/>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

Profile Items
-------------

Profile items represent individual instances of energy use or
consumption. A client application will create a profile item for each
item of energy use; the resulting object contains the emissions
associated with that item of energy use. Profile items are contained
inside profiles.

### Properties

  Property    Description                                                                                                                                                                                                                                               [Matrix Parameter](advanced.md#matrix-parameters "Matrix Parameters")
  ----------- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- ------------------------------------------------------------------------
  UID         A 12-letter unique identifier for the profile item. See [the section called “UIDs”](reference.md#uid-reference "UIDs") for more information.                                                                                                             
  name        The name of the profile item. Two profile items cannot have the same model, context options and overlapping dates unless they also have different names. Profile items with the same name and model/context options are considered to be a time series.   `name`
  created     The time and date on which the profile item was created.                                                                                                                                                                                                  `audit`
  modified    The time and date on which the profile item was last modified.                                                                                                                                                                                            `audit`
  amounts     A set of return values for the item. This may include emissions separated by gas. See [the section called “Results”](reference.md#profile-item-amounts-reference "Results") for details.                                                                 `amounts`
  startDate   The date/time from which the profile item is valid; only used in prorata calculations. See [the section called “Building Time Series”](profiles.md#build-time-series "Building Time Series") for more detail.                                            `dates`
  endDate     The date/time until which the profile item is valid; only used in prorata calculations. See [the section called “Building Time Series”](profiles.md#build-time-series "Building Time Series") for more detail.                                           `dates`
  model       The model which this profile item uses to obtain emission factors.                                                                                                                                                                                        `category`

### Results

Profile items can yield multiple return values, not just a single value.
This is often used to split up emissions for different gases, for
instance carbon dioxide and methane.

In the responses, these results are included in an 'amounts' object. See
the examples below for the exact XML and JSON representations. Each
'amount' returned has the following properties:

  --------- ---------------------------------------------------------------------------------------------------------------------------
  type      A description of the type of output. For instance, 'CO2'.
  value     The value of the output.
  unit      The units that the value field is measured in.
  default   Optionally, this field is 'true' for the default result, often an aggregated CO2 equivalent total across different gases.
  --------- ---------------------------------------------------------------------------------------------------------------------------

The `amounts` section of the response can also contain
`note` objects. These provide other textual information relevant
to the result, for instance warning of errors, or clarifying emission
factors that were used.

### Create profile item

Used to create a new profile item.

  -------------------------- ----------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}/items`
  HTTP Method                `POST`
  Request Content-Type       `application/x-www-form-urlencoded`
  Successful Response Code   `201 CREATED`
  -------------------------- ----------------------------------------------------------------------

#### Body Parameters

  Parameter                        Description                                                                                                                                                                                                                                                                                                                   Required?
  -------------------------------- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -----------
  `category`                The wikiName of the model that should be used for calculation.                                                                                                                                                                                                                                                                ✓
  `{context options}`       The context options for the context that should be used in the calculation.                                                                                                                                                                                                                                                   ✓
  `values.{value_name}`     An input to be used in the calculation. Any number can be specified in separate parameters.                                                                                                                                                                                                                                   ✓
  `units.{value_name}`      The unit that the relevant input is measured in.                                                                                                                                                                                                                                                                              ✗
  `perUnits.{value_name}`   The perUnit (normally a time unit) that the relevant input is measured in, if supported.                                                                                                                                                                                                                                      ✗
  `name`                    Set the name of the profile item. You cannot create two profile items with the same model, context options, and overlapping dates unless you give them a unique name.                                                                                                                                                         ✗
  `startDate`               An ISO8601 date/time which specifies when the profile item should be valid from. This parameter is compulsory if either `endDate` or `duration` are specified. Defaults to the current time. See [the section called “Dates/Times”](reference.md#dates-times-reference "Dates/Times") for details of format.   ✗
  `endDate`                 An ISO8601 date/time which specifies when the profile item should be valid until. Defaults to infinitely far in the future. See [the section called “Dates/Times”](reference.md#dates-times-reference "Dates/Times") for details of format.                                                                                  ✗
  `duration`                As an alternative to specifying an end time, you can specify the duration that the profile item should be valid for in ISO8601 duration format. See [the section called “Durations”](reference.md#duration-reference "Durations") for details.                                                                               ✗

The `Location` header indicates the URL of the new profile item.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
category=DEFRA_transport_fuel_methodology&fuel=petrol&values.volume=500&name=example&startDate=2011-01-05T00%3A00%3A00Z
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 Created
Content-Type: application/json; charset=UTF-8
Location: https://api-stage.amee.com/3.6.0/profiles/FC2ODLZHCNHS/items/O9IX7PWGT5W4
~~~~

~~~~ {.programlisting}
{
  "location": "/3.6.0/profiles/FC2ODLZHCNHS/items/O9IX7PWGT5W4",
  "status": "OK",
  "entity": {
    "uid": "O9IX7PWGT5W4"
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
category=DEFRA_transport_fuel_methodology&fuel=petrol&values.volume=500&name=example&startDate=2011-01-05T00%3A00%3A00Z
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 Created
Content-Type: application/xml
Location: https://api-stage.amee.com/3.6.0/profiles/FC2ODLZHCNHS/items/O9IX7PWGT5W4
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Status>OK</Status>
 <Location>/3.6.0/profiles/FC2ODLZHCNHS/items/O9IX7PWGT5W4</Location>
 <Entity uid="O9IX7PWGT5W4"/>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Read profile item

Used to fetch a representation of an existing profile item.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}/items/{profile_item_uid}`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- -----------------------------------------------------------------------------------------

The response includes a representation of the requested profile item.
Matrix parameters can be used to customise the included data.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S;amounts HTTP/1.1
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
  "status": "OK",
  "item": {
    "uid": "1U36W0KJFW3S",
    "output": {
      "amounts": [
        {
          "unit": "kg",
          "default": true,
          "value": 1155.8500000000001,
          "type": "totalDirectCO2e"
        },
        {
          "unit": "kg",
          "default": false,
          "value": 1361.3500000000001,
          "type": "lifeCycleCO2e"
        },
        {
          "unit": "kg",
          "default": false,
          "value": 1150.9,
          "type": "CO2"
        },
        {
          "unit": "kg",
          "default": false,
          "value": 3.25,
          "type": "nitrousOxideCO2e"
        },
        {
          "unit": "kg",
          "default": false,
          "value": 1.7,
          "type": "methaneCO2e"
        },
        {
          "unit": "kg",
          "default": false,
          "value": 205.5,
          "type": "indirectCO2e"
        }
      ],
      "notes": [
        {
          "value": "This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation",
          "type": "comment"
        }
      ]
    }
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S;amounts HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Item uid="1U36W0KJFW3S">
  <Output>
   <Amounts>
    <Amount default="true" type="totalDirectCO2e" unit="kg">1155.8500000000001</Amount>
    <Amount type="lifeCycleCO2e" unit="kg">1361.3500000000001</Amount>
    <Amount type="CO2" unit="kg">1150.9</Amount>
    <Amount type="nitrousOxideCO2e" unit="kg">3.25</Amount>
    <Amount type="methaneCO2e" unit="kg">1.7</Amount>
    <Amount type="indirectCO2e" unit="kg">205.5</Amount>
   </Amounts>
   <Notes>
    <Note type="comment">This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation</Note>
   </Notes>
  </Output>
 </Item>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

If you need the original inputs back, you can use the values list
resource.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S/values;itemValueDefinition HTTP/1.1
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
  "values": [
    {
      "itemValueDefinition": {
        "uid": "B5945D64557D",
        "name": "Mass of fuel consumed",
        "path": "mass"
      },
      "uid": "UN0OI0A69DR2",
      "unit": "kg"
    },
    {
      "itemValueDefinition": {
        "uid": "D4D54910FFC6",
        "name": "Volume of fuel consumed",
        "path": "volume"
      },
      "uid": "GN7DL84SSI43",
      "unit": "L",
      "value": 500
    }
  ],
  "status": "OK",
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S/values;itemValueDefinition HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Values>
  <Value uid="1S1QP0IC5EGY">
   <Value/>
   <Unit>kg</Unit>
   <ItemValueDefinition uid="B5945D64557D">
    <Name>Mass of fuel consumed</Name>
    <Path>mass</Path>
   </ItemValueDefinition>
  </Value>
  <Value uid="ZY5XM3J77LPE">
   <Value>500</Value>
   <Unit>L</Unit>
   <ItemValueDefinition uid="D4D54910FFC6">
    <Name>Volume of fuel consumed</Name>
    <Path>volume</Path>
   </ItemValueDefinition>
  </Value>
 </Values>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### List profile items

Fetches all profile items in a profile.

  -------------------------- ----------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}/items`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- ----------------------------------------------------------------------

#### Query Parameters

  Parameter              Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               Required?
  ---------------------- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -----------
  `startDate`     Start and end dates can be used to define a "query window" for the request. This window affects which profile items will be returned in the response, and included in the total emission value. See parameters below for details. The date should be specified in ISO8601 format. Default value is the start of the current month. If endDate or duration are specified, this parameter is compulsory. See [the section called “Dates/Times”](reference.md#dates-times-reference "Dates/Times") for details of format.   ✗
  `endDate`       See startDate above. Should be specified in ISO8601 format. Defaults to infinitely far in the future. See [the section called “Dates/Times”](reference.md#dates-times-reference "Dates/Times") for details of format.                                                                                                                                                                                                                                                                                                    ✗
  `duration`      As an alternative to specifying an end time, you can specify the duration of the query window in ISO8601 duration format. See [the section called “Durations”](reference.md#duration-reference "Durations") for details of format.                                                                                                                                                                                                                                                                                       ✗
  `selectby`      Setting this to 'start' will only include items which start during the query window. Setting 'end' will include only items which end during the window. The default behaviour is to include any item that intersects the query window.                                                                                                                                                                                                                                                                                    ✗
  `mode`          Set the calculation mode used. By default, emission values for items are for the whole item, not just the part of the item that intersects the query window. To get just the emissions that took place during the query window, set this parameter to 'prorata'.                                                                                                                                                                                                                                                          ✗
  `resultStart`   Zero-based index of the first result that should be returned. See [the section called “Paging”](advanced.md#paging "Paging"). Defaults to 0 if not specified.                                                                                                                                                                                                                                                                                                                                                            ✗
  `resultLimit`   Specifies the number of results to return in a single page. See [the section called “Paging”](advanced.md#paging "Paging"). Defaults to 50 if not specified..                                                                                                                                                                                                                                                                                                                                                            ✗

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
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
  "status": "OK",
  "items": [
    {
      "uid": "O9IX7PWGT5W4"
    },
    {
      "uid": "1U36W0KJFW3S"
    }
  ],
  "resultsTruncated": false,
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Items truncated="false">
  <Item uid="O9IX7PWGT5W4"/>
  <Item uid="1U36W0KJFW3S"/>
 </Items>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Update profile item

Used to update an existing profile item. Parameters are the same as for
creation.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}/items/{profile_item_uid}`
  HTTP Method                `PUT`
  Request Content-Type       `application/x-www-form-urlencoded`
  Successful Response Code   `200 OK`
  -------------------------- -----------------------------------------------------------------------------------------

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
PUT /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
values.volume=1000
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
~~~~

~~~~ {.programlisting}
{
  "status": "OK",
  "entity": {
    "uid": "1U36W0KJFW3S"
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
PUT /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
values.volume=1000
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Status>OK</Status>
 <Entity uid="1U36W0KJFW3S"/>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

### Delete profile item

Completely remove the specified profile item from the AMEE database.
This information cannot be recovered after deletion.

  -------------------------- -----------------------------------------------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/profiles/{profile_uid}/items/{profile_item_uid}`
  HTTP Method                `DELETE`
  Successful Response Code   `200 OK`
  -------------------------- -----------------------------------------------------------------------------------------

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
DELETE /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S HTTP/1.1
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
  "status": "OK",
  "entity": {
    "uid": "1U36W0KJFW3S"
  },
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
DELETE /3.6/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 200 OK
Content-Type: application/xml
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Status>OK</Status>
 <Entity uid="1U36W0KJFW3S"/>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

Batch Operations
----------------

Multiple profile items can be set in a single HTTP request by using the
batch update mechanism. Batch updates are performed by sending an XML or
JSON document to the profile items URL. If you send a POST request, new
profile items will be created. If you send a PUT, existing profile items
will be updated. It is not possible to delete profile items using batch
operations.

### Create multiple profile items

Used to create multiple new profile items in a single HTTP request.

  -------------------------- --------------------------------------------------------------
  URL                        https://api-stage.amee.com/3.6/profiles/{profile\_uid}/items
  HTTP Method                POST
  Request Content-Type       application/json or application/xml
  Response Content-Type      application/json or application/xml
  Successful Response Code   201 OK
  -------------------------- --------------------------------------------------------------

The request should include a JSON or XML-encoded body containing the
values which should be set. See the examples below for the exact
structure. Compulsory and optional parameters are as discussed in [the
section called “Storing
Inputs”](profiles.md#create-profile-item "Storing Inputs"), but instead
of putting the parameters in a form encoded body, parameter names become
hash keys or tag names in the JSON or XML.

If you post to the /items URL of the profile, you do not need to tell
the platform which category the items should be created in; it will
infer this from the specified dataItemUid. This means that items can be
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
POST /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/json
Content-Type: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
{
  "profileItems":[
    {
      "dataItemUid":"66056991EE23",
      "values.volumePerTime":100
    },
    {
      "dataItemUid":"4F6CBCEE95F7",
      "values.distance":200
    }
  ]
}
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 Created
Content-Type: application/json; charset=UTF-8
~~~~

~~~~ {.programlisting}
{
  "status" : "OK",
  "version" : "3.6.0",
  "profileItems" : [ {
    "uid" : "4U6J56GQ1QRM",
    "location" : "/3.6.0/profiles/FC2ODLZHCNHS/items/4U6J56GQ1QRM"
  }, {
    "uid" : "SJOQCNGJV8HG",
    "location" : "/3.6.0/profiles/FC2ODLZHCNHS/items/SJOQCNGJV8HG"
  } ]
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/xml
Content-Type: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8"?>
<ProfileCategory>
  <ProfileItems>
    <ProfileItem>
      <dataItemUid>66056991EE23</dataItemUid>
      <volumePerTime>10</volumePerTime>
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
HTTP/1.1 201 Created
Content-Type: application/xml
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8"?>
<Representation>
    <Status>OK</Status>
    <ProfileItems>
        <ProfileItem>
            <Entity>VPRD1CQJFVWT</Entity>
            <Location>/3.6.0/profiles/J2EPF2AO7SG8/items/VPRD1CQJFVWT</Location>
        </ProfileItem>
        <ProfileItem>
            <Entity>B2I0D1RR90GI</Entity>
            <Location>/3.6.0/profiles/J2EPF2AO7SG8/items/B2I0D1RR90GI</Location>
        </ProfileItem>
    </ProfileItems>
    <Version>3.6.0</Version>
</Representation>
~~~~

.

### Update multiple profile items

Used to update multiple profile items in a single HTTP request.

  -------------------------- --------------------------------------------------------------
  URL                        https://api-stage.amee.com/3.6/profiles/{profile\_uid}/items
  HTTP Method                PUT
  Request Content-Type       application/json or application/xml
  Response Content-Type      application/json or application/xml
  Successful Response Code   200 OK
  -------------------------- --------------------------------------------------------------

The request should include a JSON or XML-encoded body containing the
UIDs of the items, and the values which should be updated. See the
examples below for the exact structure. Parameters are as discussed in
[the section called “Update profile
item”](reference.md#update-profile-item-reference "Update profile item"),
but instead of putting the parameters in a form encoded body, parameter
names become hash keys or tag names in the JSON or XML.

Updates are atomic: in the event of failure, an error code will be
returned and none of the items will be updated.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
PUT /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/json
Content-Type: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
{
  "profileItems":[
    {
      "profileItemUid":"4U6J56GQ1QRM",
      "values.volumePerTime":300
    },
    {
      "profileItemUid":"SJOQCNGJV8HG",
      "values.distance":400
    }
  ]
}
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 Created
Content-Type: application/json; charset=UTF-8
~~~~

~~~~ {.programlisting}
{
  "status" : "OK",
  "version" : "3.6.0",
  "profileItems" : [ {
    "uid" : "4U6J56GQ1QRM",
    "location" : "/3.6.0/profiles/FC2ODLZHCNHS/items/4U6J56GQ1QRM"
  }, {
    "uid" : "SJOQCNGJV8HG",
    "location" : "/3.6.0/profiles/FC2ODLZHCNHS/items/SJOQCNGJV8HG"
  } ]
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/xml
Content-Type: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8"?>
<ProfileCategory>
  <ProfileItems>
    <ProfileItem>
      <profileItemUid>VPRD1CQJFVWT</profileItemUid>
      <volumePerTime>100</volumePerTime>
    </ProfileItem>
    <ProfileItem>
      <profileItemUid>B2I0D1RR90GI</profileItemUid>
      <distance>200</distance>
    </ProfileItem>
  </ProfileItems>
</ProfileCategory>
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 Created
Content-Type: application/xml
~~~~

~~~~ {.programlisting}
<?xml version="1.0" encoding="UTF-8"?>
<Representation>
    <Status>OK</Status>
    <ProfileItems>
        <ProfileItem>
            <Entity>5NTC8K3VZSIG</Entity>
            <Location>/3.6.0/profiles/BLES0BAJRBM0/items/5NTC8K3VZSIG</Location>
        </ProfileItem>
        <ProfileItem>
            <Entity>8Q5M5VCH17M4</Entity>
            <Location>/3.6.0/profiles/BLES0BAJRBM0/items/8Q5M5VCH17M4</Location>
        </ProfileItem>
    </ProfileItems>
    <Version>3.6.0</Version>
</Representation>
~~~~

.

Search
------

The search resource performs full-text searching of all AMEE platform
content. Both models and contexts can be returned depending on the
request, and any matrix parameters valid for those resources can be used
to add extra information in the search results.

  -------------------------- ------------------------------------------------
  URL                        `https://api-stage.amee.com/3.6/search`
  HTTP Method                `GET`
  Successful Response Code   `200 OK`
  -------------------------- ------------------------------------------------

### Query Parameters

  Parameter        Description                                                                                                                                            Required?
  ---------------- ------------------------------------------------------------------------------------------------------------------------------------------------------ -----------
  `q`       Query string. Either a simple string or a Lucene query expression. See [the section called “Search”](advanced.md#search "Search") for more details.   ✓
  `types`   `DC` will return models, `DI` will return contexts. `DC,DI` will return both.                                                     ✓

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/search;name;label;parent?q=camels&types=DC%2CDI HTTP/1.1
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
  "results": [
    {
      "uid": "4EB103700ACD",
      "categoryUid": "8723DC9314F8",
      "categoryWikiName": "Enteric_fermentation",
      "name": "",
      "label": "camels, developed countries",
      "type": "item"
    },
    {
      "uid": "AC21F67B978E",
      "categoryUid": "8723DC9314F8",
      "categoryWikiName": "Enteric_fermentation",
      "name": "",
      "label": "camels, developing countries",
      "type": "item"
    },
    {
      "uid": "B1FCD0CFA30E",
      "parentUid": "01341F8598FF",
      "parentWikiName": "Manure_associated_nitrous_oxide_emissions",
      "name": "IPCC methodology for manure sourced nitrous oxide - other livestock",
      "type": "category",
      "wikiName": "Other_livestock_manure_nitrous_oxide_emissions"
    }
  ],
  "status": "OK",
  "resultsTruncated": false,
  "version": "3.6.0"
}
~~~~

.

.

#### Request

~~~~ {.programlisting}
GET /3.6/search;name;label;parent?q=camels&types=DC%2CDI HTTP/1.1
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
<?xml version="1.0" encoding="ISO-8859-1"?>

<Representation>
 <Results truncated="false">
  <Item uid="4EB103700ACD">
   <Name/>
   <Label>camels, developed countries</Label>
   <CategoryUid>8723DC9314F8</CategoryUid>
   <CategoryWikiName>Enteric_fermentation</CategoryWikiName>
  </Item>
  <Item uid="AC21F67B978E">
   <Name/>
   <Label>camels, developing countries</Label>
   <CategoryUid>8723DC9314F8</CategoryUid>
   <CategoryWikiName>Enteric_fermentation</CategoryWikiName>
  </Item>
  <Category uid="B1FCD0CFA30E">
   <WikiName>Other_livestock_manure_nitrous_oxide_emissions</WikiName>
   <Name>IPCC methodology for manure sourced nitrous oxide - other livestock</Name>
   <ParentUid>01341F8598FF</ParentUid>
   <ParentWikiName>Manure_associated_nitrous_oxide_emissions</ParentWikiName>
  </Category>
 </Results>
 <Status>OK</Status>
 <Version>3.6.0</Version>
</Representation>
~~~~

.

Authentication
--------------

AMEEconnect uses [HTTP Basic
authentication](bib.md#httpbasic "Basic access authentication") for all
requests. The following example shows how this is done with the CURL
command line HTTP client.

~~~~ {.programlisting}
curl https://api-stage.amee.com/3.6/profiles -H "accept:application/xml" -u username:password
~~~~

HTTP Basic authentication is sent as an Authorization header in each
HTTP request. The header should contain a base64-encoded string in the
form username:password, as shown in the example below.

Because HTTP Basic sends your login credentials with every request
encoded in base64 format, AMEEconnect requires HTTPS connections for
security.

-   [Example](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /3.6/profiles HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
        
~~~~

.

UIDs
----

Every object in AMEEconnect has a unique identifer (UID). These are
guaranteed to be unique across the entire platform, though equivalent
items on different servers (stage vs live, for instance) may have
different UIDs.

UIDs should not be hardcoded in client code, as there is normally a
method of accessing a resource that does not require a UID. However,
they are often stored as references to objects created for calculations,
such as profiles or profile items.

UIDs are twelve character strings containing the letters A-Z and
numerals 0-9. The following regular expression can be used to validate
UIDs, should it be required:

~~~~ {.programlisting}
[A-Z0-9]{12}
~~~~

Date and Time Representation
----------------------------

AMEEconnect has many parameters and fields which use dates and times.
This section summarises the representation of those parameters.

### Dates/Times

AMEEconnect allows very fine time resolutions, down to the minute.
Dates/Times are represented in the standard [IS0
8601](bib.md#ISO8601 "ISO 8601") format:

~~~~ {.programlisting}
YYYY-MM-DDThh:mm:ssTZD
~~~~

For example:

-   2009-08-01T14:30:55Z (UTC)
-   2009-08-01T14:30:55+00:00 (GMT)
-   2009-08-01T14:30:55-08:00 (GMT-8)

### Durations

Durations are also used in some paramters. These are also represented in
[IS0 8601](bib.md#ISO8601 "ISO 8601") format:

~~~~ {.programlisting}
PnYnMnDTnHnMnS
~~~~

Parts of the duration which are 0 are optional. For example:

-   P10Y (10 years)
-   PT30S (30 seconds)
-   P14DT12H10M (14 days, 12 hours, 10 minutes)

  [« Advanced Options](advanced.md)    [Contents](index.md)    [References »](bib.md)