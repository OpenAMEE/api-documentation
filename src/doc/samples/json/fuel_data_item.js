{
  "amount": {
    "value": 0,
    "unit": "kg/year"
  },
  "amountPerMonth": 0,
  "userValueChoices": {
    "name": "userValueChoices",
    "choices": [
      {
        "name": "mass",
        "value": ""
      },
      {
        "name": "volume",
        "value": ""
      }
    ]
  },
  "dataItem": {
    "modified": "2011-08-01 15:36:15.0",
    "label": "petrol",
    "name": "19B311DDF0B1",
    "dataCategory": {
      "name": "Fuel",
      "uid": "138B5405E0CE",
      "path": "fuel",
      "deprecated": false
    },
    "itemValues": [
      {
        "name": "Total life cycle CO2e emissions factor",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Total life cycle CO2e emissions factor",
          "drillDown": false,
          "fromProfile": false,
          "perUnit": "L",
          "uid": "E2365F2C7478",
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
          "path": "massTotalCO2ePerVolume"
        },
        "displayName": "Total life cycle CO2e emissions factor",
        "perUnit": "L",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "85BB303C3F1D",
        "value": "2.7227",
        "unit": "kg",
        "path": "massTotalCO2ePerVolume",
        "displayPath": "massTotalCO2ePerVolume"
      },
      {
        "name": "Direct CH4 emissions factor (CO2e)",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Direct CH4 emissions factor (CO2e)",
          "drillDown": false,
          "fromProfile": false,
          "perUnit": "L",
          "uid": "0513BE88E262",
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
          "path": "massCH4PerVolume"
        },
        "displayName": "Direct CH4 emissions factor (CO2e)",
        "perUnit": "L",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "1E7030C99D32",
        "value": "0.0034",
        "unit": "kg",
        "path": "massCH4PerVolume",
        "displayPath": "massCH4PerVolume"
      },
      {
        "name": "Source",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Source",
          "drillDown": false,
          "fromProfile": false,
          "uid": "733725A940F4",
          "valueDefinition": {
            "modified": "2007-07-27 07:30:44.0",
            "name": "text",
            "valueType": "TEXT",
            "uid": "CCEB59CACE1B",
            "description": "",
            "environment": {
              "uid": "5F5887BCF726"
            },
            "created": "2007-07-27 07:30:44.0"
          },
          "path": "source"
        },
        "displayName": "Source",
        "perUnit": "",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "3B5B49052223",
        "value": "http://www.defra.gov.uk/environment/economy/business-efficiency/reporting",
        "unit": "",
        "path": "source",
        "displayPath": "source"
      },
      {
        "name": "Total direct CO2e emissions factor",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Total direct CO2e emissions factor",
          "drillDown": false,
          "fromProfile": false,
          "perUnit": "L",
          "uid": "88C39D1827D2",
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
          "path": "massDirectCO2ePerVolume"
        },
        "displayName": "Total direct CO2e emissions factor",
        "perUnit": "L",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "349179755D06",
        "value": "2.3117",
        "unit": "kg",
        "path": "massDirectCO2ePerVolume",
        "displayPath": "massDirectCO2ePerVolume"
      },
      {
        "name": "Indirect CO2e emissions factor",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Indirect CO2e emissions factor",
          "drillDown": false,
          "fromProfile": false,
          "perUnit": "L",
          "uid": "C9651873AF44",
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
          "path": "massIndirectCO2ePerVolume"
        },
        "displayName": "Indirect CO2e emissions factor",
        "perUnit": "L",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "D0818E220EA2",
        "value": "0.411",
        "unit": "kg",
        "path": "massIndirectCO2ePerVolume",
        "displayPath": "massIndirectCO2ePerVolume"
      },
      {
        "name": "Type of fuel",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Type of fuel",
          "drillDown": true,
          "fromProfile": false,
          "uid": "2A295F2622CE",
          "valueDefinition": {
            "modified": "2007-07-27 07:30:44.0",
            "name": "text",
            "valueType": "TEXT",
            "uid": "CCEB59CACE1B",
            "description": "",
            "environment": {
              "uid": "5F5887BCF726"
            },
            "created": "2007-07-27 07:30:44.0"
          },
          "path": "fuel"
        },
        "displayName": "Type of fuel",
        "perUnit": "",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "A10E681D1E20",
        "value": "petrol",
        "unit": "",
        "path": "fuel",
        "displayPath": "fuel"
      },
      {
        "name": "Direct N2O emissions factor (CO2e)",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Direct N2O emissions factor (CO2e)",
          "drillDown": false,
          "fromProfile": false,
          "perUnit": "L",
          "uid": "D851A3D1C961",
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
          "path": "massN2OPerVolume"
        },
        "displayName": "Direct N2O emissions factor (CO2e)",
        "perUnit": "L",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "90CB9E89A5EF",
        "value": "0.0065",
        "unit": "kg",
        "path": "massN2OPerVolume",
        "displayPath": "massN2OPerVolume"
      },
      {
        "name": "Direct CO2 emissions factor",
        "itemValueDefinition": {
          "fromData": true,
          "name": "Direct CO2 emissions factor",
          "drillDown": false,
          "fromProfile": false,
          "perUnit": "L",
          "uid": "01E753B0328A",
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
          "path": "massCO2PerVolume"
        },
        "displayName": "Direct CO2 emissions factor",
        "perUnit": "L",
        "startDate": "1970-01-01T00:00:00Z",
        "uid": "75CB7AB265E7",
        "value": "2.3018",
        "unit": "kg",
        "path": "massCO2PerVolume",
        "displayPath": "massCO2PerVolume"
      }
    ],
    "startDate": "1970-01-01T00:00:00Z",
    "uid": "19B311DDF0B1",
    "path": "",
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
    "endDate": "",
    "created": "2010-11-09 19:30:56.0"
  },
  "path": "/transport/defra/fuel/19B311DDF0B1",
  "amounts": {
    "amount": [
      {
        "default": "true",
        "perUnit": "",
        "type": "totalDirectCO2e",
        "value": 0,
        "unit": "kg"
      },
      {
        "perUnit": "",
        "type": "lifeCycleCO2e",
        "value": 0,
        "unit": "kg"
      },
      {
        "perUnit": "",
        "type": "CO2",
        "value": 0,
        "unit": "kg"
      },
      {
        "perUnit": "",
        "type": "nitrousOxideCO2e",
        "value": 0,
        "unit": "kg"
      },
      {
        "perUnit": "",
        "type": "methaneCO2e",
        "value": 0,
        "unit": "kg"
      },
      {
        "perUnit": "",
        "type": "indirectCO2e",
        "value": 0,
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
  "apiVersion": "2.0"
}
