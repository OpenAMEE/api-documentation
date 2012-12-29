<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="chapter" title="Perform Calculations">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e227"></a>Perform Calculations
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="ch04.php#create-profile">Creating a Profile</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch04.php#doing-calculations">Doing Calculations with Profile Items</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch04.php#getting-results">Getting Results</a></span></dt>
                  </dl>
               </div>
                 
                 
               <div class="section" title="Creating a Profile">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="create-profile"></a>Creating a Profile
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                     In order to do calculations with AMEE, you need to create one or more profiles. We will discuss profiles in
                           greater detail in the next section, so for now we will just create one and move on.
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body XML">
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
                                     <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="UTF-8" standalone="no"?&gt;</span>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfilesResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"Wed Mar 18 10:23:54 GMT 2009"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"Wed Mar 18 10:23:54 GMT 2009"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"YLLIKH73BDYS"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Permission</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"Wed Mar 18 10:23:54 GMT 2009"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"Wed Mar 18 10:23:54 GMT 2009"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"0D7EAF107FEB"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amee<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Username&gt;</strong>v2user<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Username&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Permission&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Profile&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfilesResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong></pre>
                                   
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
                             			  <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"apiVersion"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.0"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profile"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"180D73DA5229"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Wed Mar 18 10:23:59 GMT 2009"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"180D73DA5229"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"180D73DA5229"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"permission"</em></strong>:{
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2F093CD55011"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Wed Mar 18 10:23:59 GMT 2009"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"group"</em></strong>:{
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AC65FFA5F9D9"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amee"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environmentUid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"auth"</em></strong>:{
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"BA6EB0039D69"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"username"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"v2user"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Wed Mar 18 10:23:59 GMT 2009"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Wed Mar 18 10:23:59 GMT 2009"</em></strong>
  }
}</pre>
                           			  
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                  		
                  <p>
                     		  We need the UID of the profile in order to create profile items - it becomes part of the path in the next step. As described
                     
                     		  in in the Quick Start chapter, for now we'll just grab this out of the response with an XPath expression, <span class="emphasis"><em>//Profile/@uid</em></span>.
                     		  For this response, that gives us a UID of YLLIKH73BDYS.
                     	  
                  </p>
                    
               </div>
                 
               <div class="section" title="Doing Calculations with Profile Items">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="doing-calculations"></a>Doing Calculations with Profile Items
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           Calculations are performed using Profile Items, which are part of a Profile. You need to have already identified
                           the category and data item that you want to use for the calculation, as described in the previous chapter.
                           Once you've done this, simply POST to the category URL within the profile with the appropriate set of parameters,
                           and your calculation will be carried out. For example, to calculate some usage data for the 
                           /transport/defra/fuel category, you would send the following request:
                         
                  </p>
                  		
                  <ul class="tabs">
                     <li class="active XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                  </ul>
                  <div class="tab-bodies">
                     <div class="tab-body XML">
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
dataItemUid=19B311DDF0B1&amp;volume=500
&amp;representation=full
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 201 CREATED
Content-Type: application/xml; charset=UTF-8
          </pre>
                                     <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</span>

<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileCategoryResource&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/defra/fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"YLLIKH73BDYS"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"Fri Jul 27 08:30:44 UTC 2007"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"Fri Jul 27 08:30:44 UTC 2007"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>AMEE<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Owner/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsPerPage&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsPerPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsPerFeed&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsPerFeed&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Environment&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"138B5405E0CE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Deprecated&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Deprecated&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileCategories/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItems&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-08-04T17:16:10Z"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-08-04T17:16:10Z"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"UC9MIF9GZO1A"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>xml_example<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValues&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"9U46OXTYM6JR"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>mass<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Mass of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-01-05T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"50151C2D0B90"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>mass<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Mass of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"JILC5X8VVMGJ"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>volume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Volume of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>500<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-01-05T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"93899EF4E3AF"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>volume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Volume of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValues&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg/year"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>1155.8500000000001<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amounts&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">default</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"true"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"totalDirectCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>1155.8500000000001<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"lifeCycleCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>1361.3500000000001<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CO2"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>1150.9<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"nitrousOxideCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>3.25<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"methaneCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>1.7<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"indirectCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>205.5<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Note</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"comment"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Note&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amounts&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-01-05T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;EndDate/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"19B311DDF0B1"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Label&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Label&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItems&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Pager&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Start&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Start&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;From&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/From&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;To&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/To&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Items&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Items&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;CurrentPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/CurrentPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;RequestedPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/RequestedPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;NextPage&gt;</strong>-1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/NextPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PreviousPage&gt;</strong>-1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PreviousPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;LastPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/LastPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsPerPage&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsPerPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsFound&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsFound&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Pager&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;TotalAmount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg/year"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>1155.8500000000001<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/TotalAmount&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileCategoryResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
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
dataItemUid=19B311DDF0B1&amp;volume=500
&amp;representation=full
          </pre>
                                   
                                   <hr>
                           <h4>Response</h4>
                                     <pre class="programlisting">
HTTP/1.1 201 CREATED
Content-Type: application/json; charset=UTF-8
          </pre>
                                     <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItems"</em></strong>: [
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-04T17:16:07Z"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"json_example"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValues"</em></strong>: [
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Mass of fuel consumed"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: false,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Mass of fuel consumed"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: true,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"50151C2D0B90"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>: {
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DECIMAL"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"45433E48B39F"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
              },
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"mass"</em></strong>
          },
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Mass of fuel consumed"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-01-05T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"QMIFK54JE3PE"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"mass"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"mass"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Volume of fuel consumed"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: false,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Volume of fuel consumed"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: true,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"93899EF4E3AF"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>: {
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DECIMAL"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"45433E48B39F"</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
              },
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volume"</em></strong>
          },
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Volume of fuel consumed"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-01-05T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"XO51RT4VSAB9"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"500"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volume"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volume"</em></strong>
        }
      ],
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1155.85</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg/year"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-01-05T00:00:00Z"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5C61SFIV391I"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItem"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amounts"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>: [
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"default"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"true"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"totalDirectCO2e"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1155.85</span>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
          },
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lifeCycleCO2e"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1361.35</span>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
          },
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CO2"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1150.9</span>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
          },
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nitrousOxideCO2e"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">3.25</span>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
          },
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"methaneCO2e"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1.7</span>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
          },
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"indirectCO2e"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">205.5</span>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
          }
        ],
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"note"</em></strong>: [
          {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"comment"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation"</em></strong>
          }
        ]
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-04T17:16:07Z"</em></strong>
    }
  ],
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-01 15:40:14.0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Fuel"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Defra"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4888AD538569"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"defra"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"deprecated"</em></strong>: false
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"138B5405E0CE"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-01 15:36:37.0"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DEFRA transport fuels"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"80DB1AB8141F"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2010-11-09 19:29:48.0"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AMEE"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerFeed"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"owner"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"deprecated"</em></strong>: false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2010-11-09 19:30:24.0"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profile"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"YLLIKH73BDYS"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"pager"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"items"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"currentPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"from"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nextPage"</em></strong>: -<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"to"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsFound"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"start"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"requestedPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lastPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"previousPage"</em></strong>: -<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"totalAmount"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1155.8500000000001"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg/year"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/defra/fuel"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileCategories"</em></strong>: [

  ],
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Fri Jul 27 08:30:44 UTC 2007"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AMEE"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerFeed"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"owner"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Fri Jul 27 08:30:44 UTC 2007"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"apiVersion"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.0"</em></strong>
}
</pre>
                                   
                             		</div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                  		
                  <p>
                           There are a few things to note here, particularly the parameters in the 
                           POST request. The first is <span class="emphasis"><em>dataItemUid</em></span>, which specifies exactly which data item you wish to 
                           use for the calculation (in this case, the type of fuel). We looked at obtaining these UIDs in the previous chapter,
                           so that should make sense already.
                         
                  </p>
                      
                  <p>
                           Secondly we have the <span class="emphasis"><em>volume</em></span> parameter, which is a parameter specific 
                           to this category. As each category can store a different type of data, the profile item values 
                           are different for each one. AMEEdiscover lists which ones are valid for which categories, as well
                           as showing different usage options; which parameters are required, optional, and so on. In this case, 
                           the call will send a value of 500 for this item (which is in litres by default - again, see AMEEdiscover).
                         
                  </p>
                      
                  <p>
                           Finally we pass the <span class="emphasis"><em>representation=full</em></span> parameter. This asks AMEEconnect to
                           send back a representation of the calculation. We will see why this is necessary in the next chapter, 
                           so don't worry about it for now.
                         
                  </p>
                      
                  <p>
                           You can select the units you wish to use for the values in your calculation - see <a class="xref" href="ch06.php#units" title="Units">the section called &#8220;Units&#8221;</a> for details.
                         
                  </p>
                    	
                  <p>
                           If you look at the response, you can see the ProfileItem tag. It contains all the details of the calculation.
                           The item values are the parameters from your POST request. In this case, the item value is volume, 
                           and the value is 500. Unit and PerUnit show the units for this item value, in this case litres.
                         
                  </p>
                      
                  <p>
                           You can perform thousands of different types of calculation by finding the appropriate category and
                           data items. By setting various parameters, you can also store these values, or track how they change over time. 
                           We will go into these options in the following chapter, but first, let'ssee how to find out what the actual 
                           results from our calculation are.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Getting Results">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="getting-results"></a>Getting Results
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                  	    
                  <p>
                     	      The Amounts tag shows separately the amounts of other greenhouse gases emitted, by name, often together with 
                     	      an equivalent amount of CO2 that would have the same climate impact, and other outputs of interest. The exact set 
                     	      of outputs varies from category to category, as documented in AMEEdiscover. In this case we see that 1151kg of 
                     	      CO2, plus some other gases, produce the 1156kg of climate-equivalent CO2, or CO2e.
                     	    
                  </p>
                  	    
                  <p>
                     	      You may also notice the Amount tag. This shows the default result from the Amounts section, and is for backwards
                     	      compatibility. New users of AMEEconnect should not need to use this; it's better to use the multiple Amount results
                     	      contained inside the Amounts tag.
                     	    
                  </p>
                    
               </div>
               
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="ch03.php">
                                              &laquo; Get Emission Factors</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="ch05.php">Store Data &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>