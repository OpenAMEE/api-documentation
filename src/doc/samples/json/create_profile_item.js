{
  "profileItems": [
    {
      "modified": "2011-03-08T13:59:03Z",
      "name": "json_example",
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
          "value": "500",
          "unit": "L",
          "path": "volume",
          "displayPath": "volume"
        }
      ],
      "amount": {
        "value": 1161,
        "unit": "kg/year"
      },
      "startDate": "2011-01-05T00:00:00Z",
      "uid": "9UY7CR57O59V",
      "dataItem": {
        "Label": "petrol",
        "uid": "19B311DDF0B1"
      },
      "amounts": {
        "amount": [
          {
            "default": "true",
            "type": "totalDirectCO2e",
            "value": 1161,
            "unit": "kg"
          },
          {
            "type": "lifeCycleCO2e",
            "value": 1366.45,
            "unit": "kg"
          },
          {
            "type": "CO2",
            "value": 1150.9,
            "unit": "kg"
          },
          {
            "type": "nitrousOxideCO2e",
            "value": 7.8,
            "unit": "kg"
          },
          {
            "type": "methaneCO2e",
            "value": 2.3,
            "unit": "kg"
          },
          {
            "type": "indirectCO2e",
            "value": 205.45,
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
      "endDate": "",
      "created": "2011-03-08T13:59:03Z"
    }
  ],
  "dataCategory": {
    "modified": "2011-02-10 20:35:47.0",
    "name": "Fuel",
    "dataCategory": {
      "name": "Defra",
      "uid": "4888AD538569",
      "path": "defra",
      "deprecated": false
    },
    "uid": "138B5405E0CE",
    "path": "fuel",
    "itemDefinition": {
      "modified": "2010-11-09 19:32:16.0",
      "name": "DEFRA transport fuels",
      "drillDown": "fuel",
      "uid": "80DB1AB8141F",
      "environment": {
        "uid": "5F5887BCF726"
      },
      "created": "2010-11-09 19:29:48.0"
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
    "deprecated": false,
    "created": "2010-11-09 19:30:24.0"
  },
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "pager": {
    "items": 0,
    "currentPage": 1,
    "itemsPerPage": 10,
    "from": 0,
    "nextPage": -1,
    "to": 0,
    "itemsFound": 0,
    "start": 0,
    "requestedPage": 1,
    "lastPage": 1,
    "previousPage": -1
  },
  "totalAmount": {
    "value": "1161.0",
    "unit": "kg/year"
  },
  "path": "/transport/defra/fuel",
  "profileCategories": [

  ],
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
  "apiVersion": "2.0"
}
