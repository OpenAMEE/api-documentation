{
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "path": "/transport/defra/fuel/9UY7CR57O59V",
  "profileItem": {
    "name": "json_example",
    "modified": "2011-03-08T13:59:03Z",
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
        "uid": "TV1542A62T96",
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
        "uid": "9F90AKHD7CMG",
        "value": "1000",
        "unit": "L",
        "path": "volume",
        "displayPath": "volume"
      }
    ],
    "amount": {
      "value": 2322,
      "unit": "kg/year"
    },
    "startDate": "2011-01-05T00:00:00Z",
    "uid": "9UY7CR57O59V",
    "amounts": {
      "amount": [
        {
          "default": "true",
          "type": "totalDirectCO2e",
          "value": 2322,
          "unit": "kg"
        },
        {
          "type": "lifeCycleCO2e",
          "value": 2732.9,
          "unit": "kg"
        },
        {
          "type": "CO2",
          "value": 2301.8,
          "unit": "kg"
        },
        {
          "type": "nitrousOxideCO2e",
          "value": 15.6,
          "unit": "kg"
        },
        {
          "type": "methaneCO2e",
          "value": 4.6,
          "unit": "kg"
        },
        {
          "type": "indirectCO2e",
          "value": 410.9,
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
    "created": "2011-03-08T13:59:03Z"
  },
  "apiVersion": "2.0"
}
