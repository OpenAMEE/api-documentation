Perform Calculations
--------------------

[Doing a Calculation](calculations.md#doing-calculations)

[Getting Results](calculations.md#getting-results)

Doing a Calculation
-------------------

Once you've selected a model and context, you can get AMEEconnect to
perform calculations for you. [*Get Emission Factors*](data.md "Get Emission Factors") explains how to make your choice, so have a quick read of that first, if you haven't already.

Once you know the model name and context you want, you simply send a GET request to the model's calculation URL. You should provide the following query parameters:

-   The relevant context options
-   Some inputs, with the form `value.{input_name}={your_value}`

You can find out all this information, including which *inputs* are
required or optional, using the code tab in AMEEdiscover.

#### Request

```shell
GET /3.6/categories/DEFRA_transport_fuel_methodology/calculation?fuel=petrol&values.volume=500 HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
```

* * * * *

#### Response

```json
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
```


In this example, we are calculating the emissions for some petrol use. The only required input is the `values.volume` parameter, which represents a volume of fuel used. We're sending a value of 500, so a calculation will be performed for 500 litres of fuel. Input units are normally SI (or derived), but you can provide inputs in other units; see [the section called “Units”](advanced.md#units "Units") for details.

You can perform thousands of different calculations by using different models and contexts. As each model represents a different methodology, the inputs are different for each one. AMEEdiscover lists which are valid for which models, as well as showing different usage options; which ones are required, which are optional, and so on.

By using profiles, you can also store these inputs, or track how they
change over time. We will go into this option in the following chapter.

Getting Results
---------------

The `amounts` collection in the response shows separately the
amounts of greenhouse gases emitted, by name, often together with an
equivalent amount of CO2 that would have the same climate impact, along with other outputs of interest. The exact set of outputs varies from model to model, as documented in AMEEdiscover. In this case we see that 1151kg of CO2, plus some other gases, produce the 1156kg of climate-equivalent CO2, or CO2e.

Any notes or errors returned by the calculation will also be included in the response. These provide context or explanation of what the calculation is doing, or what was wrong in the event of an input error.

[« Get Emission Factors](data.md) | [Contents](index.md) | [Store Data »](profiles.md)