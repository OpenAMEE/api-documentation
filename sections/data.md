Get Emission Factors
--------------------

* [Models and Contexts](data.md#models)
* [Using AMEEdiscover](data.md#ameediscover)
* [Fetching Emission Factors](data.md#get-data-items)

If you just want access to authoritative emission factors, we have you covered. Using AMEEdiscover and AMEEconnect, you can wire the latest data straight into the heart of your application.

Models and Contexts
-------------------

First, a couple of definitions; in AMEEconnect, a *model* represents a way of calculating something. For example, a method of working out car transport emissions, or electricity emissions for different countries.
Each has a set of inputs, outputs, constants, and an algorithm.

If there are two ways to calculate something, perhaps from different
sources or applicable to different standards, each one will be a
separate model. For instance, searching AMEEdiscover for "flights"
brings up a number of options which calculate emissions in different
ways.

Each model contains a number of different *contexts*, which offer
specific variations of the model. For instance, a model could represent the calculation for electricity in different countries; it will have contexts for each country, each of which will have different emission factors.

Using AMEEdiscover
------------------

Choosing which models you want to use will be one of the first things
you will do when you come to use AMEEconnect. Your choice will depend on what data you are collecting from your users, reporting requirements, and so on.

Each model is individually documented in [AMEEdiscover](http://discover.amee.com), with a page that describes how it works, where it came from, relationships with other models, and so on. AMEEdiscover includes powerful search and tagging capabilities, making it easy to find the models that are relevant to your application.

Fetching Emission Factors
-------------------------

To get emission factors from AMEEconnect, you need to identify the model and context you are interested in. You then do a GET request in the following format to the appropriate API base URL (initially
`https://api-stage.amee.com`). Note that the model name is
included in the URL, and the context options are provided as parameters.
Note also the inclusion of the `values` matrix parameter in the URL. See the [the section called “Matrix Parameters”](advanced.md#matrix-parameters "Matrix Parameters") for more details on what matrix parameters are and how they work.


#### Request

```shell
GET /3.6/categories/DEFRA_transport_fuel_methodology/items;values?fuel=petrol HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
```

#### Response

```json
{
  "status": "OK",
  "items": [
    {
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
    }
  ],
  "resultsTruncated": false,
  "version": "3.6.0"
}
```

Each value in the response represents a single emission factor or other
data. If you want to know how much CO2 is emitted per litre of petrol,
the `massTotalCO2ePerVolume` value would be the most useful. This
shows that the factor is 2.7227 kg/L. Alternatively,
`massCH4PerVolume` shows that 0.0034 kg of methane is produced
for every litre of fuel. The names will vary between models, so you
can't assume that the names are always the same; check the AMEEdiscover
documentation.

Note that if you provide an incomplete set of context options or even
none at all, you will get back a list of all contexts that match the
options you provided. See [the section called “List
contexts”](reference.md#list-data-item-reference "List contexts") for
more details.

Emission factors are good, but it's more often useful to get AMEE to do
the entire calculation for you. Many algorithms are much more complex
than `a*b`, and you really don't want to implement them all
yourself. We'll look at calculations in the next section.


  [« Quick Start](quickstart.md)  |  [Contents](index.md) | [Perform Calculations »](calculations.md)