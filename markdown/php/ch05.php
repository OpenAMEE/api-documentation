<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="chapter" title="Store Data">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e285"></a>Store Data
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="ch05.php#store-data">Using AMEE to store data</a></span></dt>
                     <dt><span class="section"><a href="ch05.php#about-profiles">More about Profiles</a></span></dt>
                     <dt><span class="section"><a href="ch05.php#naming-items">Naming Profile Items</a></span></dt>
                     <dt><span class="section"><a href="ch05.php#build-time-series">Building Time Series</a></span></dt>
                     <dt><span class="section"><a href="ch05.php#retrieve-items">Retrieving stored data</a></span></dt>
                     <dt><span class="section"><a href="ch05.php#time-series-queries">Time Series Queries</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="ch05.php#d5e314">selectby</a></span></dt>
                           <dt><span class="section"><a href="ch05.php#d5e330">mode</a></span></dt>
                        </dl>
                     </dd>
                  </dl>
               </div>
                 
                 
               <div class="section" title="Using AMEE to store data">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="store-data"></a>Using AMEE to store data
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                     If you have a lot of energy information, or want to keep your own application as light
                     as possible, you can use AMEE to store your calculations permanently so that you can
                           retrieve them later. By handing the database handling requirements to AMEE, you save money 
                           on hosting and processing your own data.
                         
                  </p>
                      
                  <p>
                           The process for doing this is actually exactly the same as for doing calculations as described
                           in the previous chapter; when you do a calculation, you create a Profile Item, which is stored 
                           in the AMEE platform.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="More about Profiles">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="about-profiles"></a>More about Profiles
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           So far, we've mostly ignored Profiles. Here, however, they become more relevant. If you are storing 
                           data for many different entities, you can use multiple profiles to separate that data into silos.
                         
                  </p>
                      
                  <p>
                           A common use case is to have a separate profile for each user of a web application, but equally you could 
                           have a profile for each office in a business application, or any number of other things. In general, the 
                           smallest entity in your system will probably correspond to a profile. You should store the Profile UID generated
                           by AMEE in your application alongside other data for the entity; there is no way to search AMEE for profiles that 
                           match particular metadata, as all profiles are fully anonymised.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Naming Profile Items">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="naming-items"></a>Naming Profile Items
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           If you create two profile items with the same data item UID, and which overlap the same 
                           time, then AMEEconnect will complain, as it can't form a single consistent time series from the 
                           data (see below). However, there are cases in which you might want to do this; energy used by two 
                           cars of the same type. In this case, you can provide a name parameter to identify each set. 
                           You can build up multiple datasets in the same profile category 
                           by using different names for each one. A name is not required, but if you suspect that 
                           you will want to store multiple datasets alongside each other, it is good practise 
                           to specify one.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Building Time Series">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="build-time-series"></a>Building Time Series
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           Storing a single profile item is useful, but most data changes over time, particularly 
                           when we are talking about energy use. AMEEconnect allows you to store time information along 
                           with your data, so that you can build up a series of data points over time.
                         
                  </p>
                      
                  <p>
                           Three parameters are available to control time information, startDate, endDate, and 
                           duration. By providing these when you create profile items, you can set the time 
                           that the created profile item is valid for. By default, startDate is "now" and 
                           endDate is infinitely far in the future. If your data is not time-sensitive, then 
                           this will be fine. However, if your data represents usage at a particular time, you 
                           can set the values explicitly. The maximum time resolution of AMEEconnect is 1 
                           minute. If seconds are specified, they are rounded down. Note that you can't set 
                           endDate and duration at the same time.
                         
                  </p>
                      
                  <p>
                           All these parameters are specified in standard ISO-8601 format. For instance, the 
                           following would all be valid parameters (when correctly form-encoded):
                         
                  </p>
                      <pre class="programlisting">startDate=2009-08-01T14:30:55Z
endDate=2009-08-02T14:30:55-08:00
duration=PT30S</pre>
                    </div>
                 
               <div class="section" title="Retrieving stored data">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="retrieve-items"></a>Retrieving stored data
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           To retrieve stored data, you can do a GET on the category in which you have created profiles items.
                           This will return a paged response listing all the profile items in that category, as well as a total amount
                           of emissions for all of them. The request is shown below; see <a class="xref" href="apa.php#list-profile-items-reference" title="List Profile Items">the section called &#8220;List Profile Items&#8221;</a>
                           for the full response details.
                         
                  </p>
                      
                  <p>
                           These responses can be filtered by time period; see below.
                         
                  </p>
                      
                  <p>
                           AMEEconnect does not support aggregation across different categories or profiles. Often the same data
                           could be stored in multiple places using different methodologies, so in order to avoid double counting, 
                           the aggregation is left to the client who best understands the business logic involved.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Time Series Queries">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="time-series-queries"></a>Time Series Queries
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           Once you have built up a time series, you will probably want to retrieve historical 
                           data. Above, we saw that profile categories include a list of current profile items. 
                           This "present time" behaviour can be modified by providing startDate and endDate query 
                           parameters in the GET request, using the same format as above. 
                         
                  </p>
                      
                  <p>
                           There are a couple of request parameters that control what is returned:
                         
                  </p>
                      
                  <div class="section" title="selectby">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e314"></a>selectby
                              </h3>
                           </div>
                        </div>
                     </div>
                           
                           
                     <table class="properties" id="d5e316">
                                
                        <tr>
                           <th>Option</th>
                           <th>Meaning</th>
                        </tr>
                                
                        <tr>
                                     
                           <td><span class="emphasis"><em>unspecified</em></span></td>
                                     
                           <td>Include items which intersects the query window.</td>
                                   
                        </tr>
                                
                        <tr>
                                     
                           <td>start</td>
                                     
                           <td>Only include items which start during the query window.</td>
                                   
                        </tr>
                                
                        <tr>
                                     
                           <td>end</td>
                                     
                           <td>Only include items which end during the query window.</td>
                                   
                        </tr>
                              
                     </table>
                         
                  </div>
                      
                  <div class="section" title="mode">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e330"></a>mode
                              </h3>
                           </div>
                        </div>
                     </div>
                           
                           
                     <table class="properties" id="d5e332">
                                
                        <tr>
                           <th>Option</th>
                           <th>Meaning</th>
                        </tr>
                                
                        <tr>
                                     
                           <td><span class="emphasis"><em>unspecified</em></span></td>
                                     
                           <td>
                                          Get the total emission values for all items.
                                        
                           </td>
                                   
                        </tr>
                                
                        <tr>
                                     
                           <td>prorata</td>
                                     
                           <td>Get only the emissions which took place during the query window.</td>
                                   
                        </tr>
                              
                     </table>
                           
                     <p>
                                For instance, if you have a profile item that lasts a week, and request just one day within that period, if you 
                                do not specify mode, you will still get the emissions for the week. If you specify mode=prorata, you will get the
                        
                                emissions just during that single day.
                              
                     </p>
                         
                  </div>
                    
               </div>
               
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="ch04.php">
                                              &laquo; Perform Calculations</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="ch06.php">Advanced Options &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>