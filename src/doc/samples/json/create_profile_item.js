{
  "apiVersion":"2.0",
  "profileCategories":[],
  "dataCategory":{
    "uid":"A92693A99BAD",
    "dataCategory":{
      "uid":"30BA55A0C472",
      "name":"Energy",
      "path":"energy"
    },
    "environment":{
      "uid":"5F5887BCF726",
      "itemsPerFeed":10,
      "description":"",
      "name":"AMEE",
      "owner":"",
      "path":"",
      "itemsPerPage":10
    },
    "created":"2007-07-27 09:30:44.0",
    "name":"Quantity",
    "path":"quantity",
    "itemDefinition":{
      "uid":"212C818D8F16",
      "environment":{
        "uid":"5F5887BCF726"
      },
      "created":"2007-07-27 09:30:44.0",
      "name":"Energy Quantity",
      "drillDown":"type",
      "modified":"2007-07-27 09:30:44.0"
    },
    "modified":"2007-07-27 09:30:44.0"
  },
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
  "totalAmount":{
    "unit":"kg/year",
    "value":"24.660000"
  },
  "path":"/home/energy/quantity",
  "profileItemActions":{
    "allowCreate":true,
    "allowView":true,
    "allowList":true,
    "allowModify":true,
    "allowDelete":true
  },
  "actions":{
    "allowCreate":true,
    "allowView":true,
    "allowList":true,
    "allowModify":true,
    "allowDelete":true
  },
  "profileItems":[
    {
      "amount":{
        "unit":"kg/year",
        "value":24.66
      },
      "uid":"68582CECB4E3",
      "startDate":"2009-03-19T17:22:00Z",
      "itemValues":[
        {
          "itemValueDefinition":{
            "uid":"E0EFED6FD7E6",
            "name":"Payment frequency",
            "path":"paymentFrequency",
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
          "uid":"BBA06ECA7254",
          "unit":"",
          "name":"Payment frequency",
          "value":"",
          "path":"paymentFrequency",
          "displayPath":"paymentFrequency",
          "displayName":"Payment frequency"
        },
        {
          "itemValueDefinition":{
            "uid":"63005554AE8A",
            "name":"Green tariff",
            "path":"greenTariff",
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
          "uid":"5CF0E5A0CDB7",
          "unit":"",
          "name":"Green tariff",
          "value":"",
          "path":"greenTariff",
          "displayPath":"greenTariff",
          "displayName":"Green tariff"
        },
        {
          "itemValueDefinition":{
            "uid":"527AADFB3B65",
            "name":"Season",
            "path":"season",
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
          "uid":"2C8532649037",
          "unit":"",
          "name":"Season",
          "value":"",
          "path":"season",
          "displayPath":"season",
          "displayName":"Season"
        },
        {
          "itemValueDefinition":{
            "uid":"1740E500BDAB",
            "choices":"true=true,
            false=false",
            "name":"Includes Heating",
            "path":"includesHeating",
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
          "uid":"E048B8558FB5",
          "unit":"",
          "name":"Includes Heating",
          "value":"false",
          "path":"includesHeating",
          "displayPath":"includesHeating",
          "displayName":"Includes Heating"
        },
        {
          "itemValueDefinition":{
            "perUnit":"year",
            "uid":"666C77B224B3",
            "unit":"kg",
            "name":"Mass Per Time",
            "path":"massPerTime",
            "valueDefinition":{
              "uid":"45433E48B39F",
              "environment":{
                "uid":"5F5887BCF726"
              },
              "created":"2007-07-27 09:30:44.0",
              "description":"",
              "name":"amount",
              "valueType":"DECIMAL",
              "modified":"2007-07-27 09:30:44.0"
            }
          },
          "perUnit":"year",
          "uid":"1FFABB35FFC8",
          "unit":"kg",
          "name":"Mass Per Time",
          "value":"0",
          "path":"massPerTime",
          "displayPath":"massPerTime",
          "displayName":"Mass Per Time"
        },
        {
          "itemValueDefinition":{
            "perUnit":"year",
            "uid":"BFD215C4CAB1",
            "unit":"kWh",
            "name":"Energy Consumption",
            "path":"energyConsumption",
            "valueDefinition":{
              "uid":"45433E48B39F",
              "environment":{
                "uid":"5F5887BCF726"
              },
              "created":"2007-07-27 09:30:44.0",
              "description":"",
              "name":"amount",
              "valueType":"DECIMAL",
              "modified":"2007-07-27 09:30:44.0"
            }
          },
          "perUnit":"month",
          "uid":"E821A09B7FE4",
          "unit":"kWh",
          "name":"Energy Consumption",
          "value":"10",
          "path":"energyConsumption",
          "displayPath":"energyConsumption",
          "displayName":"Energy Consumption"
        },
        {
          "itemValueDefinition":{
            "perUnit":"year",
            "uid":"A9B493A4A1A6",
            "unit":"kWh",
            "name":"Current Reading",
            "path":"currentReading",
            "valueDefinition":{
              "uid":"45433E48B39F",
              "environment":{
                "uid":"5F5887BCF726"
              },
              "created":"2007-07-27 09:30:44.0",
              "description":"",
              "name":"amount",
              "valueType":"DECIMAL",
              "modified":"2007-07-27 09:30:44.0"
            }
          },
          "perUnit":"year",
          "uid":"8A9F0C4199BC",
          "unit":"kWh",
          "name":"Current Reading",
          "value":"0",
          "path":"currentReading",
          "displayPath":"currentReading",
          "displayName":"Current Reading"
        },
        {
          "itemValueDefinition":{
            "perUnit":"year",
            "uid":"4C689DEF0A41",
            "unit":"kWh",
            "name":"Last Reading",
            "path":"lastReading",
            "valueDefinition":{
              "uid":"45433E48B39F",
              "environment":{
                "uid":"5F5887BCF726"
              },
              "created":"2007-07-27 09:30:44.0",
              "description":"",
              "name":"amount",
              "valueType":"DECIMAL",
              "modified":"2007-07-27 09:30:44.0"
            }
          },
          "perUnit":"year",
          "uid":"72C4C271906B",
          "unit":"kWh",
          "name":"Last Reading",
          "value":"0",
          "path":"lastReading",
          "displayPath":"lastReading",
          "displayName":"Last Reading"
        },
        {
          "itemValueDefinition":{
            "perUnit":"year",
            "uid":"7BBABF4C2E9E",
            "unit":"L",
            "name":"Volume Per Time",
            "path":"volumePerTime",
            "valueDefinition":{
              "uid":"45433E48B39F",
              "environment":{
                "uid":"5F5887BCF726"
              },
              "created":"2007-07-27 09:30:44.0",
              "description":"",
              "name":"amount",
              "valueType":"DECIMAL",
              "modified":"2007-07-27 09:30:44.0"
            }
          },
          "perUnit":"year",
          "uid":"0B32AB913D31",
          "unit":"L",
          "name":"Volume Per Time",
          "value":"0",
          "path":"volumePerTime",
          "displayPath":"volumePerTime",
          "displayName":"Volume Per Time"
        },
        {
          "itemValueDefinition":{
            "perUnit":"year",
            "uid":"F0ED40C7EF8F",
            "name":"Number of deliveries",
            "path":"deliveries",
            "valueDefinition":{
              "uid":"45433E48B39F",
              "environment":{
                "uid":"5F5887BCF726"
              },
              "created":"2007-07-27 09:30:44.0",
              "description":"",
              "name":"amount",
              "valueType":"DECIMAL",
              "modified":"2007-07-27 09:30:44.0"
            }
          },
          "perUnit":"year",
          "uid":"67F41DBE5315",
          "unit":"",
          "name":"Number of deliveries",
          "value":"",
          "path":"deliveries",
          "displayPath":"deliveries",
          "displayName":"Number of deliveries"
        }
      ],
      "created":"2009-03-19T17:22:09Z",
      "name":"representation",
      "endDate":"",
      "dataItem":{
        "uid":"66056991EE23",
        "Label":"gas"
      },
      "modified":"2009-03-19T17:22:09Z"
    }
  ],
  "profile":{
    "uid":"48B97680BCCF"
  }
}
