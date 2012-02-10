{
  "profileItems": [
    {
      "modified": "2012-02-10T14:52:37Z",
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
          "uid": "VT871B2LW9AG",
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
          "uid": "SY0ZLEYW4C7T",
          "value": "500",
          "unit": "L",
          "path": "volume",
          "displayPath": "volume"
        }
      ],
      "amount": {
        "value": 1155.85,
        "unit": "kg/year"
      },
      "startDate": "2011-01-05T00:00:00Z",
      "uid": "C7BJD9OFW9XM",
      "dataItem": {
        "Label": "petrol",
        "uid": "19B311DDF0B1"
      },
      "amounts": {
        "amount": [
          {
            "default": "true",
            "perUnit": "",
            "type": "totalDirectCO2e",
            "value": 1155.85,
            "unit": "kg"
          },
          {
            "perUnit": "",
            "type": "lifeCycleCO2e",
            "value": 1361.35,
            "unit": "kg"
          },
          {
            "perUnit": "",
            "type": "CO2",
            "value": 1150.9,
            "unit": "kg"
          },
          {
            "perUnit": "",
            "type": "nitrousOxideCO2e",
            "value": 3.25,
            "unit": "kg"
          },
          {
            "perUnit": "",
            "type": "methaneCO2e",
            "value": 1.7,
            "unit": "kg"
          },
          {
            "perUnit": "",
            "type": "indirectCO2e",
            "value": 205.5,
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
      "created": "2012-02-10T14:52:37Z"
    }
  ],
  "dataCategory": {
    "modified": "2011-08-01 15:40:14.0",
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
    "value": "1155.8500000000001",
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
