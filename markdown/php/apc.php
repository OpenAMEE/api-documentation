<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="appendix" title="Common Concepts Reference">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e1362"></a>Common Concepts Reference
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="apc.php#auth-reference">Authentication</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="apc.php#uid-reference">UIDs</a></span></dt>
                     <dt><span class="section"><a href="apc.php#paging-reference">Paging</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apc.php#d5e1394">Request Parameters</a></span></dt>
                        </dl>
                     </dd>
                     <dt><span class="section"><a href="apc.php#date-reference">Date and Time Representation</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apc.php#dates-times-reference">Dates/Times</a></span></dt>
                           <dt><span class="section"><a href="apc.php#duration-reference">Durations</a></span></dt>
                        </dl>
                     </dd>
                  </dl>
               </div>
                   
                   
               <p>
                  There are a number of concepts that are used by different resources across AMEEconnect. This
                        appendix provides a reference for them.
                      
               </p>
                   
               <div class="section" title="Authentication">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="auth-reference"></a>Authentication
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         AMEEconnect uses HTTP Basic authentication <span class="biblioref">[</span><a href="bi01.php#httpbasic" class="biblioref" title="[httpbasic]">1</a><span class="biblioref">]</span> for all 
                         requests. The following example shows how this is done with the CURL command line 
                         HTTP client.
                       
                  </p>
                    <pre class="programlisting">curl https://live.amee.com/data -H "accept:application/xml" -u username:password</pre>
                    <p>
                         HTTP Basic authentication is sent as an Authorization header in each HTTP request. The header should contain
                         a base64-encoded string in the form username:password, as shown in the example below.
                       
                  </p>
                    
                  <p>
                         Because HTTP Basic sends your login credentials with every request encoded in base64 format,
                         you should ensure you always use HTTPS connections to AMEE.
                       
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
GET /profile HTTP/1.1
Accept: application/xml
Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=
        </pre>
                                 
                               </div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                  
               </div>
                   
               <div class="section" title="UIDs">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="uid-reference"></a>UIDs
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         Every object in AMEE has a unique identifer (UID). These are guaranteed to be unique across 
                         the entire platform, though equivalent items on different servers (stage vs live, for instance) may 
                         have different UIDs.
                       
                  </p>
                    
                  <p>
                         UIDs should not be hardcoded in client code, as there is normally a method of
                         accessing a resource that does not require a UID. However, they are often stored as references to
                         objects created for calculations, such as profiles or profile items.
                       
                  </p>
                    
                  <p>
                         UIDs are twelve character strings containing the letters A-Z and numerals 0-9. The following
                         regular expression can be used to validate UIDs, should it be required:
                       
                  </p>
                    <pre class="programlisting">[A-Z0-9]{12}</pre>
                  </div>
                   
               <div class="section" title="Paging">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="paging-reference"></a>Paging
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         Many resources in AMEE are capable of containing a large number of sub-resources, for instance 
                         profile categories can contain many profile items. Retrieving them all in one request may be prohibitively
                         expensive, so for this reason such resources are paged.
                       
                  </p>
                    
                  <p>
                         The representation of these categories will contain a pager object, as shown below. The fields in the pager
                         are fairly self-explanatory. 'items' shows the total number of items, while 'itemsFound' is the number of items
                         in the response.
                       
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
                                 
                                 <pre class="programlisting"><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"pager"</em></strong>: {
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"items"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">13</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"currentPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"from"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nextPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"to"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsFound"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"start"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"requestedPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lastPage"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">2</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"previousPage"</em></strong>: -<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">1</span>
},</pre>
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
                                 
                                 <pre class="programlisting"><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Pager&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Start&gt;</strong>0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Start&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;From&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/From&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;To&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/To&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Items&gt;</strong>13<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Items&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;CurrentPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/CurrentPage&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;RequestedPage&gt;</strong>1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/RequestedPage&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;NextPage&gt;</strong>2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/NextPage&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PreviousPage&gt;</strong>-1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PreviousPage&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;LastPage&gt;</strong>2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/LastPage&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsPerPage&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsPerPage&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemsFound&gt;</strong>10<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemsFound&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Pager&gt;</strong></pre>
                               </div>
                        <div class="greyBoxTwoThirdsPageFooter">
                                       .
                                     
                        </div>
                     </div>
                  </div>
                  	
                  <div class="section" title="Request Parameters">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e1394"></a>Request Parameters
                              </h3>
                           </div>
                        </div>
                     </div>
                     	  
                     	  
                     <p>
                        	    All paged resources have optional GET parameters as follows.
                            
                     </p>
                     		
                     <table class="parameters" id="d5e1397">
                        			
                        <tr>
                           				
                           <th>Parameter</th>
                           				
                           <th>Description</th>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>page</td>
                           				
                           <td>If there is more than one page of data items, retrieve the specified page. Default is 
                              				  to fetch page 1.
                           </td>
                           			
                        </tr>
                        			
                        <tr>
                           				
                           <td>itemsPerPage</td>
                           				
                           <td>Specify the number of data items returned in a single page. Default is 
                              				  to fetch 10 items per page.
                           </td>
                           			
                        </tr>
                        		
                     </table>
                       
                  </div>
                    
                  <p>
                       
                  </p>
                  
               </div>
                   
               <div class="section" title="Date and Time Representation">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="date-reference"></a>Date and Time Representation
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                  	
                  <p>
                     	  AMEEconnect has many parameters and fields which use dates and times. This section summarises the representation of those
                     parameters.
                       
                  </p>
                    
                  <div class="section" title="Dates/Times">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="dates-times-reference"></a>Dates/Times
                              </h3>
                           </div>
                        </div>
                     </div>
                         
                         
                     <p>
                              AMEEconnect allows very fine time resolutions, down to the minute. Dates/Times are represented in the standard IS0 8601<span class="biblioref">[</span><a href="bi01.php#ISO8601" class="biblioref" title="[ISO8601]">2</a><span class="biblioref">]</span> format:
                            
                     </p>
                         <pre class="programlisting">YYYY-MM-DDThh:mm:ssTZD</pre>
                         <p>
                              For example:
                            
                     </p>
                         
                     <div class="itemizedlist">
                        <ul class="itemizedlist" type="disc">
                           <li class="listitem">2009-08-01T14:30:55Z (UTC)</li>
                           <li class="listitem">2009-08-01T14:30:55+00:00 (GMT)</li>
                           <li class="listitem">2009-08-01T14:30:55-08:00 (GMT-8) </li>
                        </ul>
                     </div>
                       
                  </div>
                    
                  <div class="section" title="Durations">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="duration-reference"></a>Durations
                              </h3>
                           </div>
                        </div>
                     </div>
                         
                         
                     <p>
                              Durations are also used in some paramters. These are also represented in IS0 8601<span class="biblioref">[</span><a href="bi01.php#ISO8601" class="biblioref" title="[ISO8601]">2</a><span class="biblioref">]</span> format:
                            
                     </p>
                         <pre class="programlisting">PnYnMnDTnHnMnS</pre>
                         <p>
                              Parts of the duration which are 0 are optional. For example:
                            
                     </p>
                         
                     <div class="itemizedlist">
                        <ul class="itemizedlist" type="disc">
                           <li class="listitem">P10Y (10 years)</li>
                           <li class="listitem">PT30S (30 seconds)</li>
                           <li class="listitem">P14DT12H10M (14 days, 12 hours, 10 minutes)</li>
                        </ul>
                     </div>
                       
                  </div>
                  
               </div>
                 
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="apb.php">
                                              &laquo; Data Reference</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="bi01.php">References &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>