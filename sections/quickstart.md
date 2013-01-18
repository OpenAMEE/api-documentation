Quick Start
-----------

[Getting Started](quickstart.md#getting-started)
[Choose Your Model](quickstart.md#quick-choose-data-item)
[Do the Calculation](quickstart.md#quick-do-calculation)


If you want to calculate carbon emissions (or other sustainability
metrics) in your applications, AMEEconnect is for you. This guide will
give you the bare minimum you need to get going.

Getting Started
---------------

Before you start, you'll need a free API key, which you can get by
signing up at [https://my.amee.com/signup](https://my.amee.com/signup).

AMEEconnect is a RESTful API, with HTTP requests for all actions, and
uses standard methods of authentication and response selection. Use
*HTTP Basic* authentication, and specify whether you want XML or JSON
responses using the *Accept* header.

Choose Your Model
-----------------

The first step is to choose which model you want to use for calculation.

[AMEEdiscover](http://discover.amee.com) has information on all the
models available in AMEE (over 8 million!), with rich searching and
tagging functionality to make it easy to find what you want.

For instance, to work out emissions for a flight, you would start by
[searching for flights](http://discover.amee.com/search/flights). By
looking through the results, you can see that the [Great Circle flight
methodology](http://discover.amee.com/categories/Great_Circle_flight_methodology)
model deals with flights between two locations. Let's try that one.

To do a calculation you need two things. First is the *model name*. This
can be found on the [code
tab](http://discover.amee.com/categories/Great_Circle_flight_methodology/data/code)
for the model, and it's also part of the URL in AMEEdiscover. In this
case, it's `Great_Circle_flight_methodology`{.code}.

The second are the *context options*. Each model can contain a number of
different contexts, each of which is a variant on a single calculation;
different input values if you like. Each of these is identified by a set
of context options. Again, these are shown on the [code
tab](http://discover.amee.com/categories/Great_Circle_flight_methodology/data/code)
for the model. For this model, there is only one context, so the context
options are just `type=great+circle+route`{.code}.

Do the Calculation
------------------

Now we can actually perform the calculation.

You simply do a GET request to the URL that represents the model you've
chosen, which includes the model name, and you include the context
options as parameters in order to identify the context. You also include
some input parameters; these are different for every category, but again
the [code
tab](http://discover.amee.com/categories/Great_Circle_flight_methodology/data/code)
will tell you what they are.

In this case there are two required inputs, `values.IATACode1`{.code}
and `values.IATACode2`, which let us put in airport codes for the
two endpoints of our flight.

#### Request

```shell
curl -H "Accept: application/json" -u username:password \ 
https://stage.amee.com/3.6/categories/Great_Circle_flight_methodology/calculation?type=great+circle+route&values.IATAcode1=LHR&values.IATAcode2=LAX
```

#### Response

```json
{
  "status": "OK",
  "output": {
    "amounts": [
      {
        "unit": "kg",
        "default": true,
        "value": 1064.491020315156,
        "type": "totalDirectCO2e"
      },
      {
        "unit": "km",
        "default": false,
        "value": 9550.430830030109,
        "type": "distance"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 1260.561365255674,
        "type": "lifeCycleCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 1054.0810507104231,
        "type": "CO2"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 10.409969604732819,
        "type": "nitrousOxideCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 0.0955043083003011,
        "type": "methaneCO2e"
      },
      {
        "unit": "kg",
        "default": false,
        "value": 196.07034494051814,
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

And that's it! You've just done your first calculation using
AMEEconnect. London to LA: 1065kg of emissions (as shown in the default
return value, in the Amount tags).

This is, of course, only a quick overview. The rest of this
documentation goes into much more detail on what it all means and what
more you can do with it, whether you want to just grab the emission
factors, or build up complex histories over time.


  [« Introduction](introduction.php) |   [Contents](index.php) | [Get Emission Factors »](data.php)