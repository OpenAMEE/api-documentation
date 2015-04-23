Store Data
----------

[Using AMEEconnect to Store Data](profiles.md#store-data)

[Creating a Profile](profiles.md#create-profile)

[Storing Inputs](profiles.md#create-profile-item)

[Fetching Return Values](profiles.md#retrieve-items)

[List Stored Profile Items](profiles.md#list-items)

[Building Time Series](profiles.md#build-time-series)

[Naming Profile Items](profiles.md#naming-items)

[Time Series Queries](profiles.md#time-series-queries)

[selectby](profiles.md#d5e325)

[mode](profiles.md#d5e343)

Using AMEEconnect to Store Data
-------------------------------

If you have a lot of energy information, or want to keep your own
application as light as possible, you can use AMEEconnect to store your inputs permanently, so that you can retrieve them later.

To do this, you create *profiles*, and create a *profile item* for each set of inputs. A profile can contain any number of profile items. The API for creating profile items is similar to that for performing one-off calculations, so there is very little extra work involved.

Creating a Profile
------------------

In order to store inputs in AMEEconnect, you need to create at least one profile. If you have multiple entities in your system, you can use multiple profiles to keep their inputs separate.

A common use case is to have a separate profile for each user of a web application, but equally you could have a profile for each office in a business application, or any number of other things. In general, the smallest entity in your system will probably correspond to a profile.

You create a profile by doing a POST request to `/3.6/profiles`,
including `profile=true` in the request body.


#### Request

```shell
curl -H "Accept: application/json" \
-H "Content-Type: application/x-www-form-urlencoded" \
-u username:password \
-X POST \
-d "profile=true" \
https://api-stage.amee.com/3.6/profiles
```

* * * * *

#### Response

```json
{
  "location": "/3.6.0/profiles/FC2ODLZHCNHS",
  "status": "OK",
  "entity": {
    "uid": "FC2ODLZHCNHS"
  },
  "version": "3.6.0"
}
```


The important part of the response is the profile UID, which is included in the response body and in the `Location` header. Whenever you want to store inputs in this profile, you will need the UID. You should store it in your application alongside other data for the relevant entity; there is no way to search for profiles that match particular metadata, as all profiles are fully anonymised.

In this response, the profile UID is `FC2ODLZHCNHS`.

Storing Inputs
--------------

Storing inputs in a profile is pretty much the same as doing one-off
calculations as described in [the section called “Doing a
Calculation”](calculations.md#doing-calculations "Doing a Calculation"), except that you POST to the `/items` path inside the profile you are using, and provide the following parameters in the POST body:

-   The model name, in the `category` parameter.
-   The relevant context options
-   Some inputs, with the form `value.{input_name}={your_value}`

The following example performs the same calculation as before, but
stores it into a profile for later retrieval.

#### Request

~~~~ {.programlisting}
POST /3.6/profiles/FC2ODLZHCNHS/items HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
~~~~

~~~~ {.programlisting}
category=DEFRA_transport_fuel_methodology&fuel=petrol&values.volume=500
~~~~

* * * * *

#### Response

~~~~ {.programlisting}
HTTP/1.1 201 Created
Content-Type: application/json; charset=UTF-8
Location: https://api-stage.amee.com/3.6.0/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S
~~~~

~~~~ {.programlisting}
{
  "location": "/3.6.0/profiles/FC2ODLZHCNHS/items/1U36W0KJFW3S",
  "status": "OK",
  "entity": {
    "uid": "1U36W0KJFW3S"
  },
  "version": "3.6.0"
}
~~~~

Apart from the `category` parameter, these are exactly the same
parameters as in [the section called “Doing a
Calculation”](calculations.md#doing-calculations "Doing a Calculation").
The `category` parameter specifies the model name. For one-off
calculations, this is part of the URL, but here it is a POST parameter.

As for creating profiles, the UID of the stored profile item is returned
in the response and the Location header.

Fetching Return Values
----------------------

To retrieve return values, you simply perform a GET on the profile item
URL, which uses the above UID. A sample request that includes the
calculated return values is shown below. You can also access the
`values` subresource to get the original inputs back. See [the
section called “Read profile
item”](reference.md#get-profile-item-reference "Read profile item") for
full details.


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



These responses can be filtered by time period; see below.

AMEEconnect does not support aggregation across different categories or profiles. Often the same data could be stored in multiple places using different methodologies, so in order to avoid double counting, the aggregation is left to the client who best understands the business logic involved.

List Stored Profile Items
-------------------------

You can also get a list of all profile items that are stored in a single
profile, by doing a GET to the items collection.


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


This request returns a list of profile item UIDs, which you can use for subsequent GET requests. There are matrix parameters that let you get back return values or inputs in the same request, if you want to. See [the section called “List profile
items”](reference.md#list-profile-items-reference "List profile items").
You can also filter items on model, context options, and so on.

Building Time Series
--------------------

Storing a single profile item is useful, but most data changes over
time, particularly when dealing with energy use. AMEEconnect allows you to store time information along with your inputs, so that you can build up a sequence of data over time.

Three parameters are available to specify time information:
`startDate`, `endDate`, and `duration`. By providing these when you create profile items, you can set the time that the created profile item is valid for. By default, `startDate` is "now" and `endDate` is infinitely far in the future. If your data is not time-sensitive, then this will be fine. However, if your data represents usage for a particular time period, you can set the values explicitly. The maximum time resolution of AMEEconnect is 1 minute. If seconds are specified, they are rounded down. Note that you can't set `endDate` and `duration` at the same time.

All these parameters are specified in standard ISO-8601 format. For
instance, the following would all be valid parameters (when correctly
form-encoded):

    startDate=2009-08-01T14:30:00Z
    endDate=2009-08-02T14:30:00-08:00
    duration=PT30M


Naming Profile Items
--------------------

AMEEconnect treats multiple profile items that have the same model and context options as a single time series. If you create two profile items for the same context, and which overlap the same time, then AMEEconnect will object, as it can't form a single consistent time series from the data. However, there are cases in which you might want to do this; for instance, energy used by two cars of the same type at the same time. In this case, you can provide a `name` parameter when you create the profile items to disambiguate the two sequences.

A name is not required, but it is good practise to specify one. As the default `startDate` is "now", if you create multiple profile items for the same context during the same minute, they will conflict if you do not specify a name.

Time Series Queries
-------------------

If you build up a time series, you will probably want to retrieve
historical data. You can filter which profile items are returned in
lists by providing `startDate` and `endDate` query parameters in the GET request, using the same format as above.

There are a couple of request parameters that control what is returned:

### selectby

Option          | Meaning
----------------| -----------------------------
*unspecified*   |   Include profile items which intersects the query window.
`start`         | Only include profile items which start during the query window.
`end`           |  Only include profile items which end during the query window.

### mode

Option            | Meaning
------------------| --------------
*unspecified*     | Get the total emission values for all items.
`prorata`         | Get only the emissions which took place during the query window, for contexts that have a unit including time.

For instance, if you have a profile item that lasts a week, and request
just one day within that period, if you do not specify `mode`,
you will get the return values for the entire week. If you specify
`mode=prorata`, you will get the return values for that single
day.

[« Perform Calculations](calculations.md) | [Contents](index.md) | [Advanced Options »](advanced.md)
