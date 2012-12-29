<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="chapter" title="Quick Start">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e30"></a>Quick Start
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="ch02.php#ameeconnect">What is AMEEconnect?</a></span></dt>
                     <dt><span class="section"><a href="ch02.php#getting-started">Getting Started</a></span></dt>
                     <dt><span class="section"><a href="ch02.php#authentication">Authentication</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch02.php#content-types">Content Types</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch02.php#quick-create-profile">Create a Profile</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch02.php#quick-choose-data-item">Choose a Data Item</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch02.php#quick-do-calculation">Do a Calculation</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                  </dl>
               </div>
                 
                 
               <p>
                  So you want to use AMEEconnect? This part of the manual will get you going, no problems. As it's a quick overview, we've 
                      left out the detailed responses, just giving XPath<span class="biblioref">[</span><a href="bi01.php#xpath" class="biblioref" title="[xpath]">4</a><span class="biblioref">]</span> details for the important bits. Subsequent chapters will go into 
                      much more detail.
                    
               </p>
                 
               <div class="section" title="What is AMEEconnect?">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="ameeconnect"></a>What is AMEEconnect?
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                  	  
                  <p>AMEEconnect is a web-based API that gives you access to the data and capabilities of the AMEE platform. It allows you to store
                     and retrieve many forms of consumption data over long periods, while simultaneously applying recognised carbon calculation
                     models to determine the environmental consequences of that consumption.
                  </p>
                    
               </div>
                 
               <div class="section" title="Getting Started">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="getting-started"></a>Getting Started
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           The first step in using AMEEconnect is to sign up for an API key. You can get a free trial account
                           at <a class="ulink" href="http://my.amee.com/signup" target="_top">http://my.amee.com/signup</a>. Enter your details, and you will be emailed your new API key details.
                         
                  </p>
                      
                  <p>
                           This API key will give you access to the AMEE staging platform (stage.amee.com). This platform is designed for
                           you to use while you are developing and testing your application. However, the data on it is regularly 
                           wiped, so once you decide your application is ready to go into production, you will need to
                           change over to using the AMEE live platform (live.amee.com; service fees may apply).
                         
                  </p>
                      
                  <p>
                           Throughout the following documentation, the examples will use the AMEE stage platform URL.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Authentication">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="authentication"></a>Authentication
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           Once you've got your key, you're ready to start talking to the API itself, and the first step is 
                           authentication.
                         
                  </p>
                      
                  <p>
                           AMEE uses <span class="emphasis"><em>HTTP Basic</em></span> authentication. You simply provide your username and password with every 
                           request, using the standard HTTP basic auth format. Most HTTP libraries will support this functionality; some examples
                           are below:
                         
                  </p>
                      
                  <ul class="tabs">
                     <li class="active curl"><a href="javascript:;" onClick="changeTab('curl'); return false;">curl</a></li>
                     <li class="Ruby"><a href="javascript:;" onClick="changeTab('Ruby'); return false;">Ruby</a></li>
                     <li class="HTTP"><a href="javascript:;" onClick="changeTab('HTTP'); return false;">HTTP</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body curl">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             		  
                             		  <pre class="programlisting">
curl https://stage.amee.com \
-u username:password
    	  </pre>
                             	  </div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body Ruby" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             		  
                                   <pre class="programlisting">
http = Net::HTTP.new @host, <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">443</span>
http.use_ssl = <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-keyword">true</strong>
req = Net::HTTP::Get.new @location
req.basic_auth @username, @password
http.request(req)
        </pre>
                                 </div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body HTTP" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
GET / HTTP/1.1
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                               		
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                      
                  <p>
                           You should only use HTTP Basic authentication if you are connecting to AMEEconnect over a secure HTTPS connection. Using
                           HTTPS is highly recommended, and all examples in this manual use it, but if you need to use HTTP, see <a class="xref" href="ch06.php#authenticated-sessions" title="Authenticated Sessions">the section called &#8220;Authenticated Sessions&#8221;</a>
                           for how to do secure authentication over insecure connections.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Content Types">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="content-types"></a>Content Types
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           AMEEconnect supports two content types. Depending on which format you prefer to parse, you can choose either one. 
                           The information is the same in both.
                         
                  </p>
                      
                  <table class="properties" id="d5e64">
                           
                     <tr>
                                
                        <th>Encoding</th>
                                
                        <th>MIME type</th>
                              
                     </tr>
                           
                     <tr>
                                
                        <td>XML</td>
                                
                        <td>application/xml</td>
                              
                     </tr>
                           
                     <tr>
                                
                        <td>JSON</td>
                                
                        <td>application/json</td>
                              
                     </tr>
                         
                  </table>
                      
                  <p>
                           You should specify your desired content type in the <span class="emphasis"><em>Accept</em></span> header in your HTTP request. For example:
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active curl"><a href="javascript:;" onClick="changeTab('curl'); return false;">curl</a></li>
                     <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body curl">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                           			  <pre class="programlisting">
curl https://stage.amee.com/profiles \
-H 'Accept: application/xml' \
-u username:password
        </pre>
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body XML" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
GET /profiles HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body JSON" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
GET /profiles HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                    
               </div>
                 
               <div class="section" title="Create a Profile">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="quick-create-profile"></a>Create a Profile
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           To do calculations with AMEEconnect, you will need to create a <span class="emphasis"><em>Profile</em></span>. We'll get into more detail about profiles in <a class="xref" href="ch05.php#store-data" title="Using AMEE to store data">the section called &#8220;Using AMEE to store data&#8221;</a>, but for now we'll just go ahead and create one.
                         
                  </p>
                      
                  <p>
                           To do this, you need to POST to the /profiles path, with 'profile=true' in the body, like this:
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active curl"><a href="javascript:;" onClick="changeTab('curl'); return false;">curl</a></li>
                     <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body curl">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                           			  <pre class="programlisting">
curl https://stage.amee.com/profiles \
-X POST -d 'profile=true' \
-H 'Accept: application/xml' \
-u username:password
        </pre>
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body XML" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
POST /profiles HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                     <pre class="programlisting">
profile=true
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body JSON" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
POST /profiles HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                     <pre class="programlisting">
profile=true
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                           			  
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                    	
                  <p>
                       	  The returned XML or JSON contains a Profile object, which in turn has what's known in AMEEconnect as a UID. This is a
                     unique string that identifies the profile (all entities in AMEEconnect actually have a UID, as you'll see later). If you're
                     using XML, the XPath you want to get the UID from the response is <span class="emphasis"><em>//Profile/@uid</em></span> which in this case gives us YLLIKH73BDYS.
                     	  
                  </p>
                    
               </div>
                 
               <div class="section" title="Choose a Data Item">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="quick-choose-data-item"></a>Choose a Data Item
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           The next step is to choose which calculation you actually want to do. <a class="ulink" href="http://discover.amee.com" target="_top">AMEEdiscover</a> lists all the possible calculations available in AMEE (over 8 million!), with rich searching and tagging functionality to
                     make it easy to find what you want. By browsing the categories in AMEEdiscover, you can find the type of calculation you want
                     to do, and then by looking at the Data Items tab, you can see the range of particular calculations that are possible in that
                     category. Each category has a path, and each data item is identified by a set of drilldown choices. We need the UID of the
                     data item we want to use, and we get this by doing a drilldown request. This request uses the path of the category and the
                     drilldown choices you choose, which in this case specify that we are interested in petrol.
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active curl"><a href="javascript:;" onClick="changeTab('curl'); return false;">curl</a></li>
                     <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body curl">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                           			  <pre class="programlisting">
curl https://stage.amee.com/data/transport/defra/fuel/drill?fuel=petrol \
-H 'Accept: application/xml' \
-u username:password
        </pre>
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body XML" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
GET /data/transport/defra/fuel/drill?fuel=petrol HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                               		
                             			<hr>
                           <h4>Response</h4>
                             			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                           		    
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body JSON" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
GET /data/transport/defra/fuel/drill?fuel=petrol HTTP/1.1
Accept: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                               		
                             			<hr>
                           <h4>Response</h4>
                             			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                           		    
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                  		
                  <p>
                     		  The response contains a Choice node which contains the UID of the data item, in this case AA6B1557CEA6. We will need this
                     
                     		  to identify the exact calculation in the next step. As long as the drilldown is fully qualified (we'll explain this later),
                     
                     		  you can extract it using the XPath <span class="emphasis"><em>//Choices/Choice/Name/text()</em></span>.
                     	  
                  </p>
                    
               </div>
                 
               <div class="section" title="Do a Calculation">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="quick-do-calculation"></a>Do a Calculation
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           The last step is to actually perform the calculation. For this, you need to use the information obtained
                           from the above calls and put it all together. We do a POST to the data category path <span class="emphasis"><em>within</em></span> the 
                           profile you created, and we specify the data item UID you got from the drilldown. This tells the platform exactly which
                           calculation you want to perform. You also need to pass in some parameters for your calculation - these are also
                           listed in AMEEdiscover, in the Value Definitions tab. Here, we will calculate the emissions of burning 500 litres of
                     petrol:
                         
                  </p>
                  	  
                  <ul class="tabs">
                     <li class="active curl"><a href="javascript:;" onClick="changeTab('curl'); return false;">curl</a></li>
                     <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body curl">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                           			  <pre class="programlisting">
curl https://stage.amee.com/profiles/YLLIKH73BDYS/transport/defra/fuel \
-X POST \
-d 'dataItemUid=AA6B1557CEA6&amp;volume=500&amp;representation=full' \
-H 'Accept: application/xml' \
-u username:password
        </pre>
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body XML" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
POST /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                     <pre class="programlisting">
dataItemUid=AA6B1557CEA6&amp;volume=500
&amp;representation=full
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 201 CREATED
Content-Type: application/xml; charset=UTF-8
          </pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                     <div class="tab-body JSON" style="display:none">
                        <div class="greyBoxTwoThirdsPageHeader">
                                       .
                                     
                        </div>
                        <div class="greyBoxTwoThirdsPageContent">
                             			
                             			
                           <h4>Request</h4>
                             			  <pre class="programlisting">
POST /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                     <pre class="programlisting">
dataItemUid=AA6B1557CEA6&amp;volume=500
&amp;representation=full
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 201 CREATED
Content-Type: application/json; charset=UTF-8
          </pre>
                           			  
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                      
                  <p>
                           The response contains a set of Amount nodes, which correspond to the various results of the calculation (there can be
                     more 
                           than one sometimes). The results are in Amount nodes, so if we use the XPath <span class="emphasis"><em>//Amounts/Amount/text()</em></span>, 
                           we can see that under this methodology, burning 500 litres of petrol produces around 1156kg of CO2-equivalent emissions.
                     Job done!
                         
                  </p>
                      
                  <p>
                           This is, of course, only a quick overview. The following chapters will go into much more details on what it all means
                     and what you can do 
                           with it, and the reference sections contain full descriptions of the XML and JSON responses which we've left out here.
                         
                  </p>
                    
               </div>
               
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="ch01.php">
                                              &laquo; Introduction</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="ch03.php">Get Emission Factors &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>