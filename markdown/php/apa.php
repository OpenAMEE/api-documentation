<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="appendix" title="Profile Reference">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e548"></a>Profile Reference
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="apa.php#profile-reference">Profiles</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apa.php#d5e555">Properties</a></span></dt>
                           <dt><span class="section"><a href="apa.php#create-profile-reference">Create Profile</a></span></dt>
                           <dt><span class="section"><a href="apa.php#list-profiles-reference">List Profiles</a></span></dt>
                           <dt><span class="section"><a href="apa.php#delete-profile-item-reference">Delete Profile</a></span></dt>
                        </dl>
                     </dd>
                     <dt><span class="section"><a href="apa.php#profile-item-reference">Profile Items</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apa.php#d5e673">Properties</a></span></dt>
                           <dt><span class="section"><a href="apa.php#profile-item-amounts-reference">Results</a></span></dt>
                           <dt><span class="section"><a href="apa.php#create-profile-item-reference">Create Profile Item</a></span></dt>
                           <dt><span class="section"><a href="apa.php#get-profile-item-reference">Read Profile Item</a></span></dt>
                           <dt><span class="section"><a href="apa.php#list-profile-items-reference">List Profile Items</a></span></dt>
                           <dt><span class="section"><a href="apa.php#update-profile-item-reference">Update Profile Item</a></span></dt>
                           <dt><span class="section"><a href="apa.php#delete-profile-item-reference">Delete Profile Item</a></span></dt>
                        </dl>
                     </dd>
                     <dt><span class="section"><a href="apa.php#batch-operation-reference">Batch Operations</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apa.php#batch-create-reference">Create Multiple Profile Items</a></span></dt>
                           <dt><span class="section"><a href="apa.php#batch-update-reference">Update Multiple Profile Items</a></span></dt>
                        </dl>
                     </dd>
                  </dl>
               </div>
                   
                   
               <p>
                        AMEEconnect profiles are used to store user data and perform calculations.
                      
               </p>
                   
               <div class="section" title="Profiles">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="profile-reference"></a>Profiles
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         A Profile is the basic grouping element in AMEE. A single profile is used to contain all data corresponding to a single
                     entity 
                         in a client application. This could be a person, a building, an organisation, etc.; 
                         you are free to choose what a profile corresponds to in your application. You can create any number of separate 
                         Profiles.
                       
                  </p>
                    
                  <p>
                         A Profile is identified by its UID, which forms part of the URL for any operations that are performed on or inside the
                     profile.
                       
                  </p>
                  	
                  <div class="section" title="Properties">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e555"></a>Properties
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <table class="properties" id="d5e557">
                        			
                        <tr>
                           				
                           <th>Property</th>
                           				
                           <th>Description</th>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>UID</td>
                           				
                           <td>A 12-letter unique identifier for the profile. See <a class="xref" href="apc.php#uid-reference" title="UIDs">the section called &#8220;UIDs&#8221;</a> for more information.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>created</td>
                           				
                           <td>The time and date on which the profile was created.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>modified</td>
                           				
                           <td>The time and date on which the profile was last modified. Note that this
                              				   does not track changes inside the profile, such as to profile item values, 
                              				   only to the profile resource itself.
                           </td>
                           			
                        </tr>
                        		
                     </table>
                     	
                  </div>
                  	
                  <div class="section" title="Create Profile">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="create-profile-reference"></a>Create Profile
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Used to create a new profile, in which ProfileItems can be stored.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e574">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>POST</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>Request Content-Type</td>
                           				
                           <td>application/x-www-form-urlencoded</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>200 OK</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <div class="section" title="Compulsory Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e590"></a>Compulsory Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e592">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>					
                              					
                              <td>profile</td>
                              					
                              <td>Tells AMEE to create a profile. Should always be 'true'.</td>
                              				
                           </tr>
                             		
                        </table>
                            
                     </div>
                     		
                     <p>
                        		  The response body contains a JSON or XML description of the new profile.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body JSON">
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
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="List Profiles">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="list-profiles-reference"></a>List Profiles
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Lists all profiles available to the current user. Currently this is the list of all profiles
                        			created by the current user, but may in future depend on other permissions.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e620">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/profiles</td>
                        </tr>
                        			
                        <tr>
                           <td>HTTP Method</td>
                           <td>GET</td>
                        </tr>
                        			
                        <tr>
                           <td>Response Content-Type</td>
                           <td>application/xml or application/json</td>
                        </tr>
                        			
                        <tr>
                           <td>Successful Response Code</td>
                           <td>200 OK</td>
                        </tr>
                        		
                     </table>
                     		
                     <p>
                        		  The response contains a JSON or XML encoded list of profiles for the current user.
                        	  
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body JSON">
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
                                  		
                                			<hr>
                              <h4>Response</h4>
                                			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                                        <pre class="programlisting">{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"apiVersion"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"pager"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"to"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lastPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nextPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"items"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">16</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"start"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsFound"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"requestedPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"currentPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"from"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"previousPage"</em></strong>: -<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profiles"</em></strong>: [
    {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"B28A58B0E243"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-19 10:54:46.0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"B28A58B0E243"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"B28A58B0E243"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"permission"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AEECFC02BF27"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-19 10:54:46.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"group"</em></strong>: {
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AC65FFA5F9D9"</em></strong>,
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amee"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environmentUid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"auth"</em></strong>: {
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"BA6EB0039D69"</em></strong>,
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"username"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"v2user"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-19 10:54:46.0"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-19 10:54:46.0"</em></strong>
    },
    {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"E0047238E5E0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-17 14:17:12.0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"E0047238E5E0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"E0047238E5E0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"permission"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"D24F947B27EA"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-17 14:17:12.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"group"</em></strong>: {
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AC65FFA5F9D9"</em></strong>,
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amee"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environmentUid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"auth"</em></strong>: {
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"BA6EB0039D69"</em></strong>,
                <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"username"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"v2user"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-17 14:17:12.0"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-17 14:17:12.0"</em></strong>
    },
    ...
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"actions"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowCreate"</em></strong>: true,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowView"</em></strong>: true,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowList"</em></strong>: true,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowModify"</em></strong>: true,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowDelete"</em></strong>: true
    }
}</pre>
                              		    
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
                                  		
                                			<hr>
                              <h4>Response</h4>
                                			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="UTF-8" standalone="no"?&gt;</span>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfilesResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profiles&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-19 10:54:43.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-19 10:54:43.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"563DE12868DC"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Permission</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-19 10:54:43.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-19 10:54:43.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"E746CC640299"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amee<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Username&gt;</strong>v2user<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Username&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Permission&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Profile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-17 14:17:12.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-17 14:17:12.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"E0047238E5E0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Permission</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-17 14:17:12.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-17 14:17:12.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"D24F947B27EA"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amee<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Username&gt;</strong>v2user<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Username&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Permission&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Profile&gt;</strong>
      ...
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Profiles&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Pager&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Start&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Start&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;From&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/From&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;To&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/To&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Items&gt;</strong>16<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Items&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;CurrentPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/CurrentPage&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;RequestedPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/RequestedPage&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;NextPage&gt;</strong>2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/NextPage&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PreviousPage&gt;</strong>-1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PreviousPage&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;LastPage&gt;</strong>2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/LastPage&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsPerPage&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsPerPage&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsFound&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsFound&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Pager&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfilesResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong></pre>
                              		    
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="Delete Profile">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="delete-profile-item-reference"></a>Delete Profile
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Completely remove the specified profile from the AMEE database, including all Profile Items contained within it. This information
                        cannot be recovered after deletion.
                        		
                     </p>			
                     		
                     <table class="requestdetails" id="d5e652">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/profiles/{profile_uid}</td>
                        </tr>
                        			
                        <tr>
                           <td>HTTP Method</td>
                           <td>DELETE</td>
                        </tr>
                        			
                        <tr>
                           <td>Successful Response Code</td>
                           <td>200 OK</td>
                        </tr>
                        		
                     </table>
                     		
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
DELETE /profiles/358E3BCF690E HTTP/1.1
Accept: application/json, application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                			
                                			<hr>
                              <h4>Response</h4>
                                			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: text/plain
          </pre>
                                			
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  
               </div>
                   
               <div class="section" title="Profile Items">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="profile-item-reference"></a>Profile Items
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         Profile items represent individual instances of energy use or consumption. A client application
                         will create a profile item for each item of energy use; the resulting object contains the emissions
                         associated with that item of energy use.
                       
                  </p>
                    
                  <p>
                         Profile items are contained inside Profile Categories, which in are contained inside Profiles. Profile
                         items in turn contains Profile Item Values, which represent the individual inputs to the 
                         calculation.
                       
                  </p>    
                  	
                  <div class="section" title="Properties">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e673"></a>Properties
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <table class="properties" id="d5e675">
                        			
                        <tr>
                           				
                           <th>Property</th>
                           				
                           <th>Description</th>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>UID</td>
                           				
                           <td>A 12-letter unique identifier for the profile item. See <a class="xref" href="apc.php#uid-reference" title="UIDs">the section called &#8220;UIDs&#8221;</a> for more information.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>created</td>
                           				
                           <td>The time and date on which the profile item was created.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>modified</td>
                           				
                           <td>The time and date on which the profile item was last modified.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>name</td>
                           				
                           <td>The name of the item. Two items cannot have the same dataItemUid and 
                              				  overlapping dates unless they also have different names. Items with the
                              				  same name and dataItemUid are considered to be a time series.
                           </td>
                           			
                        </tr>
                        			
                        <tr>
                           			  
                           <td>amounts</td>
                           			  
                           <td>A set of emission results for the item. This may include emissions separated by gas. See <a class="xref" href="apa.php#profile-item-amounts-reference" title="Results">the section called &#8220;Results&#8221;</a> for details.
                           </td>
                           		  
                        </tr>
                        			
                        <tr>					
                           				
                           <td>startDate</td>
                           				
                           <td>The date/time from which the profile item is valid. See discussion of time series for more detail.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>endDate</td>
                           				
                           <td>The date/time until which the profile item is valid. See discussion of time series for more detail.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>Data Item (dataItemUid)</td>
                           				
                           <td>The data item which this profile item uses to obtain emission factors.</td>
                           			
                        </tr>
                        		
                     </table>
                     	
                  </div>
                  	
                  <div class="section" title="Results">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="profile-item-amounts-reference"></a>Results
                              </h3>
                           </div>
                        </div>
                     </div>
                     	  
                     	  
                     <p>
                              Profile Items can yield multiple return values, not just a single value. This is often used to 
                              split up emissions for different gases, for instance carbon dioxide and methane.
                            
                     </p>
                         
                     <p>
                              In the responses, these results are included in an 'amounts' object. See the examples below 
                              for the exact XML and JSON representations. Each 'amount' returned has the following 
                              properties:
                            
                     </p>
                         
                     <table id="d5e709">
                              
                        <tr>
                           <td>type</td>
                           <td>A description of the type of output. For instance, 'CO2'.</td>
                        </tr>
                              
                        <tr>
                           <td>value</td>
                           <td>The value of the output.</td>
                        </tr>
                              
                        <tr>
                           <td>unit</td>
                           <td>The units that the value field is measured in.</td>
                        </tr>
                              
                        <tr>
                           <td>default</td>
                           <td>Optionally, this field is 'true' for the default result, often 
                                                            an aggregated total across different gases. This default is also 
                                                            included in the single 'amount' field in the response for backwards 
                                                            compatibility.
                           </td>
                        </tr>
                            
                     </table>
                         
                     <p>
                              The 'amounts' section of the response can also contain 'note' objects. These provide other 
                              textual information relevant to the result, for instance warning of errors, or clarifying 
                              emission factors that were used.
                            
                     </p>
                       
                  </div>
                  	
                  <div class="section" title="Create Profile Item">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="create-profile-item-reference"></a>Create Profile Item
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Used to create a new profile item.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e726">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles/{profile_uid}/{category_path}</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>POST</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>Request Content-Type</td>
                           				
                           <td>application/x-www-form-urlencoded</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>201 CREATED</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <div class="section" title="Compulsory Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e742"></a>Compulsory Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e744">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>					
                              					
                              <td>dataItemUid</td>
                              					
                              <td>The UID of the Data Item which a new Profile Item should be based upon. This should be obtained from a drilldown request as
                                 described in <a class="xref" href="apb.php#drilldown-reference" title="Look up a Data Item UID">the section called &#8220;Look up a Data Item UID&#8221;</a>.
                              </td>
                              				
                           </tr>
                             		
                        </table>
                        	  
                     </div>
                     		
                     <div class="section" title="Optional Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e752"></a>Optional Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e754">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>
                              					
                              <td>{valueName}</td>
                              					
                              <td>Set a Profile Item Value by specifying the name and value. For example, the value 
                                 					  name could be 'distance' supplied with a value of '300'. Multiple name/value pairs
                                 					  can be submitted so long as the named Item Values exist for the Profile Item. Names
                                 					  and values are case sensitive.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>{valueName}Unit</td>
                              					
                              <td>If a value is set, a unit can also be set. In the distance example above, the 
                                 					  'distanceUnit' parameter could be set to 'km', 'mi', or any other supported distance 
                                 					  unit. All values have default units if none are supplied.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>{valueName}PerUnit</td>
                              					
                              <td>If a value is set, a perUnit can also be set, which indicates the timescale over which
                                 					  the value applies. In the distance example above, the 'distancePerUnit' parameter could be
                                 					  set to 'day', 'month', or any other supported time unit. Not all values support perUnits; check 
                                 					  AMEEdiscover for each case. Relevant values have default perUnits if none are supplied.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>name</td>
                              					
                              <td>Set the name of the item. You cannot create two items with the same dataItemUid and 
                                 					  overlapping dates unless you give them a unique name. Items with the same name and dataItemUid
                                 					  are considered to be a time series.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>startDate</td>
                              					
                              <td>An ISO8601 date/time which specifies when the item should be valid from. This parameter is
                                 					  compulsory if either endDate or duration are specified. Defaults to the current time.
                                 					  See <a class="xref" href="apc.php#dates-times-reference" title="Dates/Times">the section called &#8220;Dates/Times&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>endDate</td>
                              					
                              <td>An ISO8601 date/time which specifies when the item should be valid until. Defaults to
                                 					  infinitely far in the future. See <a class="xref" href="apc.php#dates-times-reference" title="Dates/Times">the section called &#8220;Dates/Times&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>duration</td>
                              					
                              <td>As an alternative to specifying an end time, you can specify the duration that the item 
                                 					  should be valid for in ISO8601 duration format. See <a class="xref" href="apc.php#duration-reference" title="Durations">the section called &#8220;Durations&#8221;</a> for details.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>representation</td>
                              					
                              <td>If set to 'full', the newly-created item will be returned in the response to the POST request.
                                 					  By default, only a Location header is returned.
                              </td>
                              				
                           </tr>
                             		
                        </table>
                        	  
                     </div>
                     		
                     <p>
                        		  If the representation parameter is set to full, the response will include the details of the created item. 
                        		  Otherwise, a Location header is returned which indicates the URL of the new item.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active Example"><a href="javascript:;" onClick="changeTab('Example'); return false;">Example</a></li>
                        <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body Example">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
POST /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/json, application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting">
dataItemUid=19B311DDF0B1&amp;volume=500&amp;startDate=2011-01-05T00%3A00%3A00%2B00%3A00
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 201 CREATED
Location: https://{server}.amee.com/profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H
Content-Type: text/plain
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
dataItemUid=19B311DDF0B1&amp;volume=500&amp;startDate=2011-01-05T00%3A00%3A00%2B00%3A00
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
dataItemUid=19B311DDF0B1&amp;volume=500&amp;startDate=2011-01-05T00%3A00%3A00%2B00%3A00
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
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="Read Profile Item">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="get-profile-item-reference"></a>Read Profile Item
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Used to fetch a representation of an existing profile item.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e813">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles/{profile_uid}/{category_path}/{profile_item_uid}</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>GET</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>200 OK</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <p>
                        		  The response includes a representation of the requested profile item.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body JSON">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
GET /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                                			  <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profile"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"YLLIKH73BDYS"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/defra/fuel/F0638HOIFC1H"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItem"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: null,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:01Z"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"138B5405E0CE"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"deprecated"</em></strong>: false
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profile"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"YLLIKH73BDYS"</em></strong>
    },
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
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"42ROH1HOI2BE"</em></strong>,
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
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"U9J6XCMJT07I"</em></strong>,
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:00Z"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"F0638HOIFC1H"</em></strong>,
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItem"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DEFRA transport fuels"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"80DB1AB8141F"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:01Z"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"apiVersion"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.0"</em></strong>
}
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
GET /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</span>

<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItemResource&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-03-08T13:56:01Z"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-03-08T13:56:01Z"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"F0638HOIFC1H"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValues&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"42ROH1HOI2BE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>mass<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Mass of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-03-08T13:56:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"U9J6XCMJT07I"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>volume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Volume of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>500<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-03-08T13:56:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
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
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"80DB1AB8141F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"138B5405E0CE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Deprecated&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Deprecated&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
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
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-03-08T13:56:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;EndDate/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"19B311DDF0B1"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Label&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Label&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"YLLIKH73BDYS"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/defra/fuel/F0638HOIFC1H<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"YLLIKH73BDYS"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItemResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
</pre>
                                      
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="List Profile Items">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="list-profile-items-reference"></a>List Profile Items
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Fetches all profile items in a particular category.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e845">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles/{profile_uid}/{category_path}</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>GET</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>200 OK</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <div class="section" title="Optional Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e858"></a>Optional Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e860">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>
                              					
                              <td>startDate</td>
                              					
                              <td>Start and end dates can be used to define a "query window" for the request. This 
                                 					  window affects which profile items will be returned in the response, and included 
                                 					  in the total emission value. See parameters below for details. The date should be
                                 					  specified in ISO8601 format. Default value is the start of the current month. If
                                 					  endDate or duration are specified, this parameter is compulsory.
                                 					  See <a class="xref" href="apc.php#dates-times-reference" title="Dates/Times">the section called &#8220;Dates/Times&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>endDate</td>
                              					
                              <td>See startDate above. Should be specified in ISO8601 format. Defaults to
                                 					  infinitely far in the future. See <a class="xref" href="apc.php#dates-times-reference" title="Dates/Times">the section called &#8220;Dates/Times&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>duration</td>
                              					
                              <td>As an alternative to specifying an end time, you can specify the duration of the query
                                 					  window in ISO8601 duration format. See <a class="xref" href="apc.php#duration-reference" title="Durations">the section called &#8220;Durations&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>
                              				  
                              <td>selectby</td>
                              				  
                              <td>Setting this to 'start' will only include items which start during the query window. 
                                 				    Setting 'end' will include only items which end during the window. The default behaviour 
                                 				    is to include any item that intersects the query window.
                                 				  
                              </td>
                              			  
                           </tr>
                           				
                           <tr>					
                              					
                              <td>mode</td>
                              					
                              <td>Set the calculation mode used. By default, emission values for items are for the
                                 					  whole item, not just the part of the item that intersects the query window. To
                                 					  get just the emissions that took place during the query window, set this parameter
                                 					  to 'prorata'.
                              </td>
                              				
                           </tr>
                           				
                           <tr>
                              					
                              <td>returnUnit</td>
                              					
                              <td>Mass units that should be used for the calculation results. Specifying returnUnit=lb would
                                 					  return lb/year instead of kg/year, for example. See the list of supported units for
                                 					  more details. Default unit is kg.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>returnPerUnit</td>
                              					
                              <td>Time units that should be used for the calculation results. Specifying returnPerUnit=month would
                                 					  return kg/month instead of kg/year, for example. See the list of supported units for
                                 					  more details. Default is per year.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>page</td>
                              					
                              <td>If there is more than one page of profile items, retrieve the specified page. Default is 
                                 					  to fetch page 1. See <a class="xref" href="apc.php#paging-reference" title="Paging">the section called &#8220;Paging&#8221;</a>.
                              </td>
                              				
                           </tr>
                           				
                           <tr>
                              					
                              <td>itemsPerPage</td>
                              					
                              <td>Specify the number of profile items returned in a single page. Default is 
                                 					  to fetch 10 items per page. See <a class="xref" href="apc.php#paging-reference" title="Paging">the section called &#8220;Paging&#8221;</a>.
                              </td>
                              				
                           </tr>
                             		
                        </table>
                        	  
                     </div>
                     		
                     <p>
                        		  The response describes the profile category and any items within it. A summed total of the default 
                        		  amounts in each item is provided in the response.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body JSON">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
GET /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                                			  <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItems"</em></strong>: [
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:01Z"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: null,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"42ROH1HOI2BE"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"U9J6XCMJT07I"</em></strong>,
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
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:00Z"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"F0638HOIFC1H"</em></strong>,
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
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-03-08T13:56:01Z"</em></strong>
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"items"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"currentPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"from"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nextPage"</em></strong>: -<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"to"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsFound"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
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
                        <div class="tab-body XML" style="display:none">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
GET /profiles/YLLIKH73BDYS/transport/defra/fuel HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
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
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-03-08T13:56:01Z"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-03-08T13:56:01Z"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"F0638HOIFC1H"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValues&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"42ROH1HOI2BE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>mass<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Mass of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-03-08T13:56:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
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
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"U9J6XCMJT07I"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>volume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Volume of fuel consumed<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>500<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-03-08T13:56:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-03-08T13:56:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;EndDate/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"19B311DDF0B1"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Label&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Label&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItems&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Pager&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Start&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Start&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;From&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/From&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;To&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/To&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Items&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Items&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;CurrentPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/CurrentPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;RequestedPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/RequestedPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;NextPage&gt;</strong>-1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/NextPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PreviousPage&gt;</strong>-1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PreviousPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;LastPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/LastPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsPerPage&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsPerPage&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsFound&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsFound&gt;</strong>
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
                     </div>
                     	
                  </div>
                    
                  <div class="section" title="Update Profile Item">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="update-profile-item-reference"></a>Update Profile Item
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Used to update an existing profile item.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e915">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles/{profile_uid}/{category_path}/{profile_item_uid}</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>PUT</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>Request Content-Type</td>
                           				
                           <td>application/x-www-form-urlencoded</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>200 OK</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <div class="section" title="Optional Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e931"></a>Optional Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e933">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>
                              					
                              <td>{valueName}</td>
                              					
                              <td>Set a Profile Item Value by specifying the name and value. For example, the value 
                                 					  name could be 'distance' supplied with a value of '300'. Multiple name/value pairs
                                 					  can be submitted so long as the named Item Values exist for the Profile Item. Names
                                 					  and values are case sensitive.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>{valueName}Unit</td>
                              					
                              <td>If a value is set, a unit can also be set. In the distance example above, the 
                                 					  'distanceUnit' parameter could be set to 'km', 'mi', or any other supported distance 
                                 					  unit. All values have default units if none are supplied.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>{valueName}PerUnit</td>
                              					
                              <td>If a value is set, a perUnit can also be set, which indicates the timescale over which
                                 					  the value applies. In the distance example above, the 'distancePerUnit' parameter could be
                                 					  set to 'day', 'month', or any other supported time unit. Not all values support perUnits; check 
                                 					  AMEEdiscover for each case. Relevant values have default perUnits if none are supplied.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>name</td>
                              					
                              <td>Set the name of the item. You cannot create two items with the same dataItemUid and 
                                 					  overlapping dates unless you give them a unique name. Items with the same name and dataItemUid
                                 					  are considered to be a time series.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>startDate</td>
                              					
                              <td>An ISO8601 date/time which specifies when the item should be valid from. This parameter is
                                 					  compulsory if either endDate or duration are specified. Defaults to the current time.
                                 					  See <a class="xref" href="apc.php#dates-times-reference" title="Dates/Times">the section called &#8220;Dates/Times&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>endDate</td>
                              					
                              <td>An ISO8601 date/time which specifies when the item should be valid until. Defaults to
                                 					  infinitely far in the future.
                                 					  See <a class="xref" href="apc.php#dates-times-reference" title="Dates/Times">the section called &#8220;Dates/Times&#8221;</a> for details of format.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>duration</td>
                              					
                              <td>As an alternative to specifying an end time, you can specify the duration that the item 
                                 					  should be valid for in ISO8601 duration format. See <a class="xref" href="apc.php#duration-reference" title="Durations">the section called &#8220;Durations&#8221;</a> for details.
                              </td>
                              				
                           </tr>
                           				
                           <tr>					
                              					
                              <td>representation</td>
                              					
                              <td>If set to 'full', the newly-created item will be returned in the response to the POST request.
                                 					  By default, only a Location header is returned.
                              </td>
                              				
                           </tr>
                             		
                        </table>
                        	  
                     </div>
                     		
                     <p>
                        		  If the representation parameter is set to full, the response will include the details of the created item. 
                        		  Otherwise, it will be empty.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active Example"><a href="javascript:;" onClick="changeTab('Example'); return false;">Example</a></li>
                        <li class="JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body Example">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
PUT /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/json, application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting">
volume=1000
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: text/plain
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
PUT /profiles/YLLIKH73BDYS/transport/defra/fuel/9UY7CR57O59V HTTP/1.1
Accept: application/json
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting">
volume=1000&amp;representation=full
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                                			  <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profile"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"YLLIKH73BDYS"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/defra/fuel/5C61SFIV391I"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItem"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"json_example"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-04T17:16:07Z"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"138B5405E0CE"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"deprecated"</em></strong>: false
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profile"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"YLLIKH73BDYS"</em></strong>
    },
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
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1000"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volume"</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2311.7</span>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg/year"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-01-05T00:00:00Z"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5C61SFIV391I"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amounts"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>: [
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"default"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"true"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"totalDirectCO2e"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2311.7</span>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lifeCycleCO2e"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2722.7</span>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CO2"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2301.8</span>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nitrousOxideCO2e"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">6.5</span>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"methaneCO2e"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">3.4</span>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"indirectCO2e"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">411</span>,
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItem"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DEFRA transport fuels"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"80DB1AB8141F"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-04T17:16:07Z"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"apiVersion"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.0"</em></strong>
}
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
PUT /profiles/YLLIKH73BDYS/transport/defra/fuel/669ZF2KG9YWC HTTP/1.1
Accept: application/xml
Content-Type: application/x-www-form-urlencoded
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting">
volume=1000&amp;representation=full
          </pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</span>

<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItemResource&gt;</strong>
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
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>1000<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
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
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"80DB1AB8141F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"138B5405E0CE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Deprecated&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Deprecated&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg/year"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>2311.7000000000003<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amounts&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">default</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"true"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"totalDirectCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>2311.7000000000003<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"lifeCycleCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>2722.7000000000003<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CO2"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>2301.8<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"nitrousOxideCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>6.5<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"methaneCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>3.4<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"indirectCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>411.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Note</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"comment"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Note&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amounts&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2011-01-05T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;EndDate/&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"19B311DDF0B1"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Label&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Label&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"YLLIKH73BDYS"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/defra/fuel/UC9MIF9GZO1A<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Profile</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"YLLIKH73BDYS"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItemResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
</pre>
                                      
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="Delete Profile Item">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="delete-profile-item-reference"></a>Delete Profile Item
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Completely remove the specified profile item from the AMEE database. This information cannot be recovered after deletion.
                        		
                     </p>			
                     		
                     <table class="requestdetails" id="d5e992">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/profiles/{profile_uid}/{category_path}/{profile_item_uid}</td>
                        </tr>
                        			
                        <tr>
                           <td>HTTP Method</td>
                           <td>DELETE</td>
                        </tr>
                        			
                        <tr>
                           <td>Successful Response Code</td>
                           <td>200 OK</td>
                        </tr>
                        		
                     </table>
                     		
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
DELETE /profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H HTTP/1.1
Accept: application/json, application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                			
                                			<hr>
                              <h4>Response</h4>
                                			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: text/plain
          </pre>
                                			
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  
               </div>
                   
               <div class="section" title="Batch Operations">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="batch-operation-reference"></a>Batch Operations
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         Multiple Profile Items can be set in a single HTTP request by using the Batch Update mechanism. 
                         Batch updates are performed by sending an XML or JSON document to the profile root or profile
                         category URL. If you send a POST request, new Profile Items will be created. If you send a 
                         PUT, existing Profile Items will be updated. If sending to the profile root, any data in
                         any category can be created or modified. When sending to a category, only items within that
                         category can be created or modified. 
                       
                  </p>
                  	
                  <div class="section" title="Create Multiple Profile Items">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="batch-create-reference"></a>Create Multiple Profile Items
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Used to create multiple new profile items in a single HTTP request.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e1015">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles/{profile_uid}[/{category_path}]</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>POST</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>Request Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>200 OK</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <p>
                        		  The request should include a JSON or XML-encoded body containing the values which should be set.
                        		  See the examples below for the exact structure. Compulsory and optional parameters are as discussed
                        		  in <a class="xref" href="apa.php#create-profile-item-reference" title="Create Profile Item">the section called &#8220;Create Profile Item&#8221;</a>, but instead of putting the parameters in a form
                        		  encoded body, parameter names become hash keys or tag names in the JSON or XML. As for creating 
                        		  individual items, a dataItemUid is compulsory. Other parameters are optional.
                        	  
                     </p>
                     		
                     <p>
                        		  If you post to the root URL of the profile, you do not need to tell the platform which category the 
                        		  items should be created in; it will infer this from the specified dataItemUid. This means that items 
                        		  can be created across multiple categories at once. However, if you post to a particular category, 
                        		  an error will be raised if any dataItemUids are not within that category. This restriction could be useful
                        		  for debugging.
                        	  
                     </p>
                     	  
                     <p>
                              Creation is atomic: in the event of failure, an error code will be returned and none of the items will
                              be created. If successful, the response will contain a list of the locations of the created items.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body JSON">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
POST /profiles/80EC1B49E2A9 HTTP/1.1
Accept: application/json
Content-Type: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItems"</em></strong>:[
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItemUid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"66056991EE23"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volumePerTime"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">100</span>
    },
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItemUid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4F6CBCEE95F7"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"distance"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">200</span>
    }
  ]
}</pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                                			  <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"apiVersion"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.0"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItems"</em></strong>: [
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"7063451432AD"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uri"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/profiles/74300FF5E2E5/home/energy/quantity/7063451432AD"</em></strong>
    },
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"54D4371B08AA"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uri"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/profiles/74300FF5E2E5/transport/car/generic/54D4371B08AA"</em></strong>
    }
  ]
}
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
POST /profiles/59586731F930 HTTP/1.1
Accept: application/xml
Content-Type: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileCategory&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItems&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;volumePerTime&gt;</strong>100<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/volumePerTime&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;dataItemUid&gt;</strong>66056991EE23<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/dataItemUid&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;dataItemUid&gt;</strong>4F6CBCEE95F7<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/dataItemUid&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;distance&gt;</strong>200<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/distance&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItems&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileCategory&gt;</strong></pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="UTF-8" standalone="no"?&gt;</span>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItems&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uri</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"/profiles/59586731F930/home/energy/quantity/71AFED5FEFE9"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uri</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"/profiles/59586731F930/transport/car/generic/23133CF30A35"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItems&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong></pre>
                                      
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="Update Multiple Profile Items">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="batch-update-reference"></a>Update Multiple Profile Items
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Used to update multiple profile items in a single HTTP request.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e1055">
                        			
                        <tr>					
                           				
                           <td>URL</td>
                           				
                           <td>https://{server}.amee.com/profiles/{profile_uid}[/{category_path}]</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>HTTP Method</td>
                           				
                           <td>PUT</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>Request Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Response Content-Type</td>
                           				
                           <td>application/json or application/xml</td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>Successful Response Code</td>
                           				
                           <td>200 OK</td>
                           			
                        </tr>
                        		
                     </table>
                     		
                     <p>
                        		  The request should include a JSON or XML-encoded body containing the UIDs of the items, and the values
                        		  which should be updated. See the examples below for the exact structure. Parameters are as discussed in 
                        		  <a class="xref" href="apa.php#update-profile-item-reference" title="Update Profile Item">the section called &#8220;Update Profile Item&#8221;</a>, but instead of putting the parameters in a form
                        		  encoded body, parameter names become hash keys or tag names in the JSON or XML.
                        	  
                     </p>
                     	  
                     <p>
                              Updates are atomic: in the event of failure, an error code will be returned and none of the items will
                              be updated.
                        		
                     </p>
                     		
                     <ul class="tabs">
                        <li class="active JSON"><a href="javascript:;" onClick="changeTab('JSON'); return false;">JSON</a></li>
                        <li class="XML"><a href="javascript:;" onClick="changeTab('XML'); return false;">XML</a></li>
                     </ul>
                     <div class="tab-bodies">
                        <div class="tab-body JSON">
                           <div class="greyBoxTwoThirdsPageHeader">
                                          .
                                        
                           </div>
                           <div class="greyBoxTwoThirdsPageContent">
                                			
                                			
                              <h4>Request</h4>
                                			  <pre class="programlisting">
PUT /profiles/80EC1B49E2A9 HTTP/1.1
Accept: application/json
Content-Type: application/json
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItems"</em></strong>:[
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItemUid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"63CF7BE48B3F"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volumePerTime"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">300</span>
    },
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"profileItemUid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"32E5C8BA51AA"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"distance"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">400</span>
    }
  ]
}</pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: text/plain
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
PUT /profiles/59586731F930 HTTP/1.1
Accept: application/xml
Content-Type: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="UTF-8"?&gt;</span>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileCategory&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItems&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;profileItemUid&gt;</strong>71AFED5FEFE9<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/profileItemUid&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;volumePerTime&gt;</strong>300<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/volumePerTime&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ProfileItem&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;profileItemUid&gt;</strong>23133CF30A35<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/profileItemUid&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;distance&gt;</strong>400<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/distance&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileItems&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ProfileCategory&gt;</strong></pre>
                                      
                                      <hr>
                              <h4>Response</h4>
                                        <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: text/plain
          </pre>
                                      
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  
               </div>
                 
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="ch06.php">
                                              &laquo; Advanced Options</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="apb.php">Data Reference &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>