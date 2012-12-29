<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="chapter" title="Advanced Options">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e344"></a>Advanced Options
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="ch06.php#units">Units</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="ch06.php#return-units">Return Units</a></span></dt>
                        </dl>
                     </dd>
                     <dt><span class="section"><a href="ch06.php#authenticated-sessions">Authenticated Sessions</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch06.php#paging">Paging</a></span></dt>
                     <dt><span class="section"><a href="ch06.php#interactive-drilldowns">Interactive Drilldowns</a></span></dt>
                  </dl>
               </div>
                 
                 
               <div class="section" title="Units">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="units"></a>Units
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                     AMEEconnect includes built-in support for a wide range of unit conversions. Most units 
                     are SI by default, but if you want to specify fuel in US gallons instead, you can. Time units can also 
                     be changed. Each parameter in a profile item has associated Unit and PerUnit parameters which control 
                     these. For instance, if you wanted to use the default units for fuel, you could add a fuel purchase with 
                           the following parameter, which would represent a fuel usage of 100 litres per month.
                         
                  </p>
                      <pre class="programlisting">volume=100</pre>
                      <p>
                           If, however, you are measuring in gallons on a weekly basis, you could specify the following parameters:
                         
                  </p>
                      <pre class="programlisting">volume=100&amp;volumeUnit=gal&amp;volumePerUnit=week</pre>
                      <p>
                           All unit conversion calculations are automatically handled by AMEEconnect, giving you the correct 
                           results for your application with the minimum of effort.
                         
                  </p>
                      
                  <p>
                           The following table lists the most common units supported by AMEE, along with the symbol that 
                           should be used for the POST options.
                         
                  </p>
                      
                  <table class="properties" id="d5e354">
                           
                     <tr>
                        <th>Mass</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>Grams</td>
                        <td>g</td>
                     </tr>
                           
                     <tr>
                        <td>Kilograms</td>
                        <td>kg</td>
                     </tr>
                           
                     <tr>
                        <td>Metric Tons / Tonnes</td>
                        <td>t</td>
                     </tr>
                           
                     <tr>
                        <td>Ounces</td>
                        <td>oz</td>
                     </tr>
                           
                     <tr>
                        <td>Pounds</td>
                        <td>lb</td>
                     </tr>
                           
                     <tr>
                        <td>Tons (UK imperial)</td>
                        <td>ton_uk</td>
                     </tr>
                           
                     <tr>
                        <td>Tons (US imperial)</td>
                        <td>ton_us</td>
                     </tr>
                           
                     <tr>
                        <th>Distance</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>Metres</td>
                        <td>m</td>
                     </tr>
                           
                     <tr>
                        <td>Kilometres</td>
                        <td>km</td>
                     </tr>
                           
                     <tr>
                        <td>Feet</td>
                        <td>ft</td>
                     </tr>
                           
                     <tr>
                        <td>Yards</td>
                        <td>yd</td>
                     </tr>
                           
                     <tr>
                        <td>Miles</td>
                        <td>mi</td>
                     </tr>
                           
                     <tr>
                        <td>Nautical Miles</td>
                        <td>nmi</td>
                     </tr> 
                           
                     <tr>
                        <th>Volume</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>Litres</td>
                        <td>L</td>
                     </tr>
                           
                     <tr>
                        <td>Cubic Metres</td>
                        <td>m&sup3;</td>
                     </tr>
                           
                     <tr>
                        <td>Fluid Ounces (UK imperial)</td>
                        <td>oz_fl_uk</td>
                     </tr>
                           
                     <tr>
                        <td>Fluid Ounces (US imperial)</td>
                        <td>oz_fl</td>
                     </tr>
                           
                     <tr>
                        <td>Gallons (UK imperial)</td>
                        <td>gal_uk or gallon_uk</td>
                     </tr>
                           
                     <tr>
                        <td>Gallons (US imperial)</td>
                        <td>gal</td>
                     </tr>
                           
                     <tr>
                        <th>Energy</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>Kilowatt-Hours</td>
                        <td>kWh</td>
                     </tr>
                           
                     <tr>
                        <td>Joules</td>
                        <td>J</td>
                     </tr>
                           
                     <tr>
                        <th>Energy - BTU</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>39 &deg;F</td>
                        <td>BTU_ThirtyNineF</td>
                     </tr>
                           
                     <tr>
                        <td>Mean</td>
                        <td>BTU_Mean</td>
                     </tr>
                           
                     <tr>
                        <td>IT</td>
                        <td>BTU_IT</td>
                     </tr>
                           
                     <tr>
                        <td>ISO</td>
                        <td>BTU_ISO</td>
                     </tr>
                           
                     <tr>
                        <td>59 &deg;F</td>
                        <td>BTU_FiftyNineF</td>
                     </tr>
                           
                     <tr>
                        <td>60 &deg;F</td>
                        <td>BTU_SixtyF</td>
                     </tr>
                           
                     <tr>
                        <td>63 &deg;F</td>
                        <td>BTU_SixtyThreeF</td>
                     </tr>
                           
                     <tr>
                        <td>Thermochemical</td>
                        <td>BTU_Thermochemical</td>
                     </tr> 
                           
                     <tr>
                        <th>Energy - Therm</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>39 &deg;F</td>
                        <td>thm_ThirtyNineF</td>
                     </tr>
                           
                     <tr>
                        <td>Mean</td>
                        <td>thm_Mean</td>
                     </tr>
                           
                     <tr>
                        <td>IT</td>
                        <td>thm_IT</td>
                     </tr>
                           
                     <tr>
                        <td>EC</td>
                        <td>thm_ec, alias of thm_IT</td>
                     </tr>
                           
                     <tr>
                        <td>ISO</td>
                        <td>thm_ISO</td>
                     </tr>
                           
                     <tr>
                        <td>59 &deg;F</td>
                        <td>thm_FiftyNineF</td>
                     </tr>
                           
                     <tr>
                        <td>US</td>
                        <td>thm_us, alias of thm_FiftyNineF</td>
                     </tr>
                           
                     <tr>
                        <td>60 &deg;F</td>
                        <td>thm_SixtyF</td>
                     </tr>
                           
                     <tr>
                        <td>63 &deg;F</td>
                        <td>thm_SixtyThreeF</td>
                     </tr>
                           
                     <tr>
                        <td>Thermochemical</td>
                        <td>thm_Thermochemical</td>
                     </tr>
                           
                     <tr>
                        <th>Time</th>
                        <th>symbol</th>
                     </tr>
                           
                     <tr>
                        <td>Second</td>
                        <td>s</td>
                     </tr>
                           
                     <tr>
                        <td>Minute</td>
                        <td>min</td>
                     </tr>
                           
                     <tr>
                        <td>Hour</td>
                        <td>h</td>
                     </tr>
                           
                     <tr>
                        <td>Day</td>
                        <td>day</td>
                     </tr>
                           
                     <tr>
                        <td>Week</td>
                        <td>week</td>
                     </tr>
                           
                     <tr>
                        <td>Month</td>
                        <td>month</td>
                     </tr>
                           
                     <tr>
                        <td>Year</td>
                        <td>year</td>
                     </tr>
                         
                  </table>
                      
                  <div class="section" title="Return Units">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="return-units"></a>Return Units
                              </h3>
                           </div>
                        </div>
                     </div>
                           
                           
                     <p>
                                Similar to input units, the CO2 emission results generated by AMEE have default units of kg/year. If you 
                                prefer pounds per week, you can specify some special parameters in your GET requests:
                              
                     </p>
                           <pre class="programlisting">https://stage.amee.com/profiles/7C7D68C2A7CD/home/energy/quantity?returnUnit=lb&amp;returnPerUnit=week</pre>
                           <p>
                                Note that this only affects the default returned amount contained in the single Amount or TotalAmount tag. 
                                The contents of the Amounts tag are not affected, so if you are dealing with multiple gases, this facility
                                will not be available. This will be improved in a future version of the API.
                              
                     </p>
                         
                  </div>
                    
               </div>
                 
               <div class="section" title="Authenticated Sessions">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="authenticated-sessions"></a>Authenticated Sessions
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           If you do not wish to use HTTP Basic authentication with each request, you can create an
                           authenticated session. You will need to make a POST request to 
                           https://stage.amee.com/auth, providing your username and password as form-encoded data in the request 
                           body. You also need to specify which format you want the result in (XML or JSON) using a standard 
                           "Accept" header. The response to this request includes various pieces of information, but the most 
                           important is the authentication token, which is returned both as a cookie and as a custom header, 
                           both called "authToken".
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active Example"><a href="javascript:;" onClick="changeTab('Example'); return false;">Example</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body Example">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
POST /auth HTTP/1.1
Accept: application/xml (or applicaiton/json)
Content-Type: application/x-www-form-urlencoded
          </pre>
                                     <pre class="programlisting">
username=my_username&amp;password=my_password
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 200 OK
Set-Cookie: authToken=1KVARbypAjxLGViZ0Cg+UskZEHmqVkhx/PmEvzkPGpnUlH17KQbJ58xfapXiewVVPvG2CtrQNTuawY+KWU4Dxx08570dM2Z0sZAoeijdlucuCOvAyHhi9A==; 
authToken: 1KVARbypAjxLGViZ0Cg+UskZEHmqVkhx/PmEvzkPGpnUlH17KQbJ58xfapXiewVVPvG2CtrQNTuawY+KWU4Dxx08570dM2Z0sZAoeijdlucuCOvAyHhi9A==
Content-Type: application/xml; charset=UTF-8
          </pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                      
                  <p>
                           You should store the authToken value and include it as a cookie in any 
                           subsequent requests. The authToken will expire after two hours, or if unused for half an 
                           hour. Therefore, if you are using authenticated sessions, your application should always be prepared 
                           to re-authorise on any request if you receive a 401 UNAUTHORIZED response.
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active Example"><a href="javascript:;" onClick="changeTab('Example'); return false;">Example</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body Example">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
GET /data HTTP/1.1
Cookie: authToken=1KVARbypAjxLGViZ0Cg+UskZEHmqVkhx/PmEvzkPGpnUlH17KQbJ58xfapXiewVVPvG2CtrQNTuawY+KWU4Dxx08570dM2Z0sZAoeijdlucuCOvAyHhi9A==
accept:application/xml
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 200 OK
          </pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                      
                  <p>
                           Note that this facility is deprecated, and will not be present in version 3 of AMEEconnect. We highly recommend
                           connecting over HTTPS and using Basic Authentication instead.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Paging">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="paging"></a>Paging
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                  	  
                  <p>
                     	    Many resources in AMEE are capable of containing a large number of sub-resources, for instance 
                     	    profile categories can contain many profile items. Retrieving them all in one request may be prohibitively
                     	    expensive, so for this reason such resources are paged. Details of how to page through items in AMEE are provided in
                     <a class="xref" href="apc.php#paging-reference" title="Paging">the section called &#8220;Paging&#8221;</a>.
                     	  
                  </p>
                    
               </div>
                 
               <div class="section" title="Interactive Drilldowns">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="interactive-drilldowns"></a>Interactive Drilldowns
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           Sometimes you want to give your users a choice of which calculation to perform within a category. For instance, they
                     might
                           need to choose the model of their car, or how their home is heated. For those situations when there are too many
                           options to present in a single list, AMEEconnect provides the facility to perform step-by-step interactive drilldowns.
                           You make a request to the drill resource, present the user with the choices, then make another request based on their
                     choice.
                           This gives you the next set of choices, and so on until the drill is fully specified.
                         
                  </p>
                      
                  <p>
                           This process is fully documented in <a class="xref" href="apb.php#drilldown-reference" title="Look up a Data Item UID">the section called &#8220;Look up a Data Item UID&#8221;</a>.
                         
                  </p>
                    
               </div>
               
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="ch05.php">
                                              &laquo; Store Data</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="apa.php">Profile Reference &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>