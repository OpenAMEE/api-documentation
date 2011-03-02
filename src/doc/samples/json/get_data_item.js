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