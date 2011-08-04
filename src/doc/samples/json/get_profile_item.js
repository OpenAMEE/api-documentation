{
  "profile": {
    "uid": "YLLIKH73BDYS"
  },
  "path": "/transport/defra/fuel/F0638HOIFC1H",
  "profileItem": {
    "name": null,
    "modified": "2011-03-08T13:56:01Z",
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
        "startDate": "2011-03-08T13:56:00Z",
        "uid": "42ROH1HOI2BE",
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
        "startDate": "2011-03-08T13:56:00Z",
        "uid": "U9J6XCMJT07I",
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
    "startDate": "2011-03-08T13:56:00Z",
    "uid": "F0638HOIFC1H",
    "amounts": {
      "amount": [
        {
          "default": "true",
          "type": "totalDirectCO2e",
          "value": 1155.85,
          "unit": "kg"
        },
        {
          "type": "lifeCycleCO2e",
          "value": 1361.35,
          "unit": "kg"
        },
        {
          "type": "CO2",
          "value": 1150.9,
          "unit": "kg"
        },
        {
          "type": "nitrousOxideCO2e",
          "value": 3.25,
          "unit": "kg"
        },
        {
          "type": "methaneCO2e",
          "value": 1.7,
          "unit": "kg"
        },
        {
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
    "created": "2011-03-08T13:56:01Z"
  },
  "apiVersion": "2.0"
}
