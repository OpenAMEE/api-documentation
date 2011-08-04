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
