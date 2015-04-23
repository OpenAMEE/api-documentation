Advanced Options
----------------

[Specifying API Version](advanced.md#specifying-api-versions)

[Units](advanced.md#units)

[Matrix Parameters](advanced.md#matrix-parameters)

[Search](advanced.md#search)

[Authority](advanced.md#authority)

[Paging](advanced.md#paging)

[Interactive Context Selection](advanced.md#interactive-drilldowns)

Specifying API Version
----------------------

Above version 3, AMEEconnect includes the API version in the URL. This
allows you to code against a particular version and be sure that future
updates will not affect your code. This manual, for instance, covers
version 3.6.

Version numbers are made up of:

    major_version.minor_version

-   *Major* versions make large changes, such as URL structure.
-   *Minor* versions may change resource representations.

You can specify as much or as little of a version in your URLs as you
like. The version used will be the highest matching version number. For
instance, if the current version is `x.y`:

-   `/x/` will match the highest version less than version
    `x+1`, so will use version `x.y`.
-   `/x.y-1/` will match only that specific version, but not
    `x.y`.

We recommend that you use a major and minor version in your URLs, such
as `3.6`. That way, you are guaranteed not to get any API
changes.

Units
-----

AMEEconnect includes built-in support for a wide range of unit
conversions. Most units are metric by default, but if you want to
specify fuel in, say, US gallons instead, you can. Time units can also be changed if relevant for that input.

If you wanted to use the default units, you would use a parameter with no extra options.

```shell
values.volume=100
```

If you wanted to specify the volume in US gallons, you would specify a
unit. This is done by prefixing the input name with `units`
instead of `values`.

```shell
values.volume=100&units.volume=gal
```

If the input has default units that included a 'per-time' dimension (for instance kg/year), you can change the time dimension with
`perUnit` parameters. Not all inputs support this option.

```shell
values.volume=100&units.volume=gal&perUnits.volume=week
```

The following table lists the most common units supported by
AMEEconnect, along with the symbol that should be used for the POST
options.

 Mass  | symbol
 ----- | -----
 Grams | g
Kilograms | kg
Metric Tons / Tonnes | t
Ounces | oz
Pounds | lb
Tons (UK imperial) | ton_uk
Tons (US imperial) | ton_us

Distance |symbol  
-----    | -----  
Metres   | m
Kilometres | km
Feet | ft
Yards | yd
Miles | mi
Nautical Miles | nmi

Volume | symbol
-----    | -----  
Litres | L
Cubic Metres |m³
Fluid Ounces (UK imperial)| oz_fl_uk
Fluid Ounces (US imperial)| oz_fl
Gallons (UK imperial) |gal\_uk or gallon\_uk
Gallons (US imperial) | gal

Energy | symbol
-----    | -----  
Kilowatt-Hours| kWh
Joules | J

Energy - BTU | symbol
-----    | -----  
39 °F |BTU_ThirtyNineFv
Mean | BTU_Mean
IT | BTU_IT
ISO | BTU_ISO
59 °F| BTU_FiftyNineF
60 °F | BTU_SixtyF
63 °F| BTU_SixtyThreeF
Thermochemical| BTU_Thermochemical

Energy - Therm |symbol
-----    | -----  
39 °F| thm_ThirtyNineF
Mean| thm_Mean
IT| thm_IT
EC| thm_ec , alias of `thm_IT`
ISO| thm_ISO
59 °F| thm_FiftyNineF
US| thm_us, alias of `thm_FiftyNineF`
60 °F| thm_SixtyF
63 °F| thm_SixtyThreeF
Thermochemical| thm_Thermochemical


Time | symbol
-----    | -----  
Second| s
Minute| min
Hour| h
Day| day
Week| week
Month| month
Year| year


Matrix Parameters
-----------------

AMEEconnect uses *matrix parameters* to control the content of resource
representations. This means that you will only get a bare minimum of
information by default when you do a request. Often, to get more, you
will need to provide a matrix parameter. This keeps responses small and
fast, and means that you only have to parse what you need.

Matrix parameters are added to the end of a URL, separated by
semicolons, but before any query parameters that are present. They are
not used for parameters that can vary, such as inputs to a calculation
or pages in a search result. In the example URI below, `name` and
`address` are matrix parameters, and `order` is a standard
query parameter:

```shell
http://example.com/people;name;address?order=asc
```

Each resource has a full list of available matrix parameters listed in
the appropriate reference section.

Search
------

AMEEconnect provides full-text search capabilities for both models and
contexts. To do a search, use the `/3.6/search` resource, and
provide the text you want to search for in the `q` parameter. You
must also supply a `types` parameter, which controls which
resources you would like to search:

-   `DC`: search models
-   `DI`: search contexts
-   `DC,DI`: search both

The query can be either a simple string, or a lucene query expression.
By default, separate words in the query are joined with the `OR`
operator. Here are some examples:

-   `camels`
-   `camels OR cattle` (equivalent to `camels cattle`)
-   `camels AND cattle`
-   `camels -cattle`
-   `(camels AND cattle) OR rabbits`

For many more options, read the [Lucene Query Parser
Syntax](http://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)
documentation.

You can include any valid matrix parameters for either models or
contexts in order to fetch extra data as part of the search. See the
reference section for details.

#### Request

```shell
curl -H "Accept: application/json" -u username:password \
http://stage.amee.com/3.6/search;name;label;parent?q=camels&types=DC%2CDI
```

#### Response


```json
{
  "results": [
    {
      "uid": "4EB103700ACD",
      "categoryUid": "8723DC9314F8",
      "categoryWikiName": "Enteric_fermentation",
      "name": "",
      "label": "camels, developed countries",
      "type": "item"
    },
    {
      "uid": "AC21F67B978E",
      "categoryUid": "8723DC9314F8",
      "categoryWikiName": "Enteric_fermentation",
      "name": "",
      "label": "camels, developing countries",
      "type": "item"
    },
    {
      "uid": "B1FCD0CFA30E",
      "parentUid": "01341F8598FF",
      "parentWikiName": "Manure_associated_nitrous_oxide_emissions",
      "name": "IPCC methodology for manure sourced nitrous oxide - other livestock",
      "type": "category",
      "wikiName": "Other_livestock_manure_nitrous_oxide_emissions"
    }
  ],
  "status": "OK",
  "resultsTruncated": false,
  "version": "3.6.0"
}
```


In the JSON representation, the `type` field is used to show what
sort of object has been returned, whereas in XML this is done with the tag name. It is `item` for contexts or `category` for models.

Authority
---------

All models in AMEEconnect have an *authority* rating, which is also
shown in AMEEdiscover. This indicates how reliable AMEE consider the
model to be. There are four levels, listed in decreasing order of
confidence.

-   enterprise
-   recommended
-   verified
-   unverified

For a detailed discussion of what each rating means, and when it is
appropriate to use which level of model, see
[AMEEdiscover](http://discover.amee.com/categories/Authority).

When searching or listing models, you can filter by authority so that
you only see models that are sufficiently high-quality for your
application.

Paging
------

Many resources in AMEEconnect are capable of containing a large number of sub-resources; for instance profiles can contain many profile items.

Retrieving them all in one request may be prohibitively expensive, so
for this reason such resources are paged.

The representations of these resources will contain an indication as to whether the list is truncated, as shown below. If the value is
`true`, more results are available. Two GET parameters are
available to adjust which results are returned.

-   `resultStart`: The first result that should be returned
    (zero-indexed). Defaults to 0.
-   `resultLimit`: The maximum number of results to return in one
    request. Defaults to 50.

By incrementing the `resultStart` parameter by
`resultLimit`, you can page through the complete list until
`resultsTruncated` is false.

#### Request

    curl -H "Accept: application/json" -u username:password \
    http://stage.amee.com/3.6/car_transport/items;label?engineSize=2.5&resultLimit=10

#### Response

```json
{
  "status": "OK",
  "items": [
    {
      "uid": "2D1C40136919",
      "label": "LEXUS, IS 250, 2.5, Manual(M6)"
    },
    {
      "uid": "E21DCFCC3344",
      "label": "LEXUS, IS 250, 2.5, Auto(S6)"
    },
    {
      "uid": "07EEAF1991B8",
      "label": "LEXUS, IS 250 AWD, 2.5, Auto(S6)"
    },
    {
      "uid": "7D1889865A9F",
      "label": "NISSAN, ALTIMA, 2.5, Auto(AV)"
    },
    {
      "uid": "C3FAD6539589",
      "label": "NISSAN, ALTIMA, 2.5, Manual(M6)"
    },
    {
      "uid": "E5EB52DA085F",
      "label": "NISSAN, ALTIMA COUPE, 2.5, Auto(AV)"
    },
    {
      "uid": "09A4F9740C1E",
      "label": "NISSAN, ALTIMA COUPE, 2.5, Manual(M6)"
    },
    {
      "uid": "17D72E711B41",
      "label": "NISSAN, ALTIMA HYBRID, 2.5, Auto(AV)"
    },
    {
      "uid": "B42DC8B5B25F",
      "label": "NISSAN, FRONTIER 2WD, 2.5, Auto(L5)"
    },
    {
      "uid": "1B4A4EA8A46A",
      "label": "NISSAN, FRONTIER 2WD, 2.5, Manual(M5)"
    }
  ],
  "resultsTruncated": true,
  "version": "3.6.0"
}
```

Interactive Context Selection
-----------------------------

Sometimes you want to give your users a choice of which context to use within a model. For instance, they might need to choose the make of their car, or how their home is heated.

For those situations when there are too many options to present in a single list, AMEEconnect provides the facility to perform step-by-step interactive drilldowns.

You make a request to the `drill` resource for a model, present the user with the choices, then make another request based on their choice. This gives you the next set of choices, and so on until the context options are fully specified.

This process is fully documented in [the section called “Interactive
selection of contexts”](reference.md#drilldown-reference "Interactive selection of contexts").

  [« Store Data](profiles.md)  |  [Contents](index.md) |  [AMEEconnect API reference »](reference.md)
