Common Concepts Reference
-------------------------

[Authentication](apc.php#auth-reference)

[UIDs](apc.php#uid-reference)

[Paging](apc.php#paging-reference)

[Request Parameters](apc.php#d5e1394)

[Date and Time Representation](apc.php#date-reference)

[Dates/Times](apc.php#dates-times-reference)

[Durations](apc.php#duration-reference)

There are a number of concepts that are used by different resources
across AMEEconnect. This appendix provides a reference for them.

Authentication
--------------

AMEEconnect uses HTTP Basic authentication
[[1](bi01.php#httpbasic "[httpbasic]")] for all requests. The following
example shows how this is done with the CURL command line HTTP client.

~~~~ {.programlisting}
curl https://live.amee.com/data -H "accept:application/xml" -u username:password
~~~~

HTTP Basic authentication is sent as an Authorization header in each
HTTP request. The header should contain a base64-encoded string in the
form username:password, as shown in the example below.

Because HTTP Basic sends your login credentials with every request
encoded in base64 format, you should ensure you always use HTTPS
connections to AMEE.

-   [Example](javascript:;)

.

#### Request

~~~~ {.programlisting}
GET /profile HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
        
~~~~

.

UIDs
----

Every object in AMEE has a unique identifer (UID). These are guaranteed
to be unique across the entire platform, though equivalent items on
different servers (stage vs live, for instance) may have different UIDs.

UIDs should not be hardcoded in client code, as there is normally a
method of accessing a resource that does not require a UID. However,
they are often stored as references to objects created for calculations,
such as profiles or profile items.

UIDs are twelve character strings containing the letters A-Z and
numerals 0-9. The following regular expression can be used to validate
UIDs, should it be required:

~~~~ {.programlisting}
[A-Z0-9]{12}
~~~~

Paging
------

Many resources in AMEE are capable of containing a large number of
sub-resources, for instance profile categories can contain many profile
items. Retrieving them all in one request may be prohibitively
expensive, so for this reason such resources are paged.

The representation of these categories will contain a pager object, as
shown below. The fields in the pager are fairly self-explanatory.
'items' shows the total number of items, while 'itemsFound' is the
number of items in the response.

-   [JSON](javascript:;)
-   [XML](javascript:;)

.

~~~~ {.programlisting}
"pager": {
  "items": 13,
  "currentPage": 1,
  "itemsPerPage": 10,
  "from": 1,
  "nextPage": 2,
  "to": 10,
  "itemsFound": 10,
  "start": 0,
  "requestedPage": 1,
  "lastPage": 2,
  "previousPage": -1
},
~~~~

.

.

~~~~ {.programlisting}
<Pager>
  <Start>0</Start>
  <From>1</From>
  <To>10</To>
  <Items>13</Items>
  <CurrentPage>1</CurrentPage>
  <RequestedPage>1</RequestedPage>
  <NextPage>2</NextPage>
  <PreviousPage>-1</PreviousPage>
  <LastPage>2</LastPage>
  <ItemsPerPage>10</ItemsPerPage>
  <ItemsFound>10</ItemsFound>
</Pager>
~~~~

.

### Request Parameters

All paged resources have optional GET parameters as follows.

  Parameter      Description
  -------------- --------------------------------------------------------------------------------------------------------
  page           If there is more than one page of data items, retrieve the specified page. Default is to fetch page 1.
  itemsPerPage   Specify the number of data items returned in a single page. Default is to fetch 10 items per page.

Date and Time Representation
----------------------------

AMEEconnect has many parameters and fields which use dates and times.
This section summarises the representation of those parameters.

### Dates/Times

AMEEconnect allows very fine time resolutions, down to the minute.
Dates/Times are represented in the standard IS0
8601[[2](bi01.php#ISO8601 "[ISO8601]")] format:

~~~~ {.programlisting}
YYYY-MM-DDThh:mm:ssTZD
~~~~

For example:

-   2009-08-01T14:30:55Z (UTC)
-   2009-08-01T14:30:55+00:00 (GMT)
-   2009-08-01T14:30:55-08:00 (GMT-8)

### Durations

Durations are also used in some paramters. These are also represented in
IS0 8601[[2](bi01.php#ISO8601 "[ISO8601]")] format:

~~~~ {.programlisting}
PnYnMnDTnHnMnS
~~~~

Parts of the duration which are 0 are optional. For example:

-   P10Y (10 years)
-   PT30S (30 seconds)
-   P14DT12H10M (14 days, 12 hours, 10 minutes)

  ------------------------------ ----------------------- ---------------------------
  [« Data Reference](apb.php)    [Contents](index.php)    [References »](bi01.php)
  ------------------------------ ----------------------- ---------------------------


