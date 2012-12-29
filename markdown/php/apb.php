<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="appendix" title="Data Reference">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e1089"></a>Data Reference
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="apb.php#data-category-reference">Data Categories</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apb.php#d5e1095">Properties</a></span></dt>
                           <dt><span class="section"><a href="apb.php#get-data-category-reference">Get Data Category</a></span></dt>
                           <dt><span class="section"><a href="apb.php#drilldown-reference">Look up a Data Item UID</a></span></dt>
                        </dl>
                     </dd>
                     <dt><span class="section"><a href="apb.php#data-item-reference">Data Items</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apb.php#d5e1253">Properties</a></span></dt>
                           <dt><span class="section"><a href="apb.php#get-data-item-reference">Get Data Item</a></span></dt>
                        </dl>
                     </dd>
                     <dt><span class="section"><a href="apb.php#data-item-value-reference">Data Item Values</a></span></dt>
                     <dd>
                        <dl>
                           <dt><span class="section"><a href="apb.php#d5e1311">Properties</a></span></dt>
                           <dt><span class="section"><a href="apb.php#get-data-item-value-reference">Get Single Value</a></span></dt>
                        </dl>
                     </dd>
                  </dl>
               </div>
                   
                   
               <p>
                  AMEEconnect provides reference-style access to data categories and items 
                        curated by AMEE. It also provides drilldown resources to allow interactive or automatic 
                        selection of data items by client applications.
                      
               </p>
                   
               <div class="section" title="Data Categories">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="data-category-reference"></a>Data Categories
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                       
                  </p>
                  	
                  <div class="section" title="Properties">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e1095"></a>Properties
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <table class="properties" id="d5e1097">
                        			
                        <tr>
                           				
                           <th>Property</th>
                           				
                           <th>Description</th>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>UID</td>
                           				
                           <td>A 12-letter unique identifier for the category. See <a class="xref" href="apc.php#uid-reference" title="UIDs">the section called &#8220;UIDs&#8221;</a> for more information.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>created</td>
                           				
                           <td>The time and date on which the category was created.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>modified</td>
                           				
                           <td>The time and date on which the category was last modified. Note that this
                              				   does not track changes to items inside the category, such as to data item
                              				   values, only to the category itself.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>name</td>
                           				
                           <td>The display name for the category.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>path</td>
                           				
                           <td>The path of this Data Category. A path forms part of the URL.</td>
                           			
                        </tr>
                        		
                     </table>
                     	
                  </div>
                  	
                  <div class="section" title="Get Data Category">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="get-data-category-reference"></a>Get Data Category
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Lists all subcategories and data items in a data category
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e1120">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/data[/{category_path}]</td>
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
                     		
                     <div class="section" title="Optional Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e1133"></a>Optional Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e1135">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>
                              					
                              <td>page</td>
                              					
                              <td>If there is more than one page of data items, retrieve the specified page. Default is 
                                 					  to fetch page 1. See <a class="xref" href="apc.php#paging-reference" title="Paging">the section called &#8220;Paging&#8221;</a>.
                              </td>
                              				
                           </tr>
                           				
                           <tr>
                              					
                              <td>itemsPerPage</td>
                              					
                              <td>Specify the number of data items returned in a single page. Default is 
                                 					  to fetch 10 items per page. See <a class="xref" href="apc.php#paging-reference" title="Paging">the section called &#8220;Paging&#8221;</a>.
                              </td>
                              				
                           </tr>
                             		
                        </table>
                        	  
                     </div>
                     		
                     <p>
                        		  The response contains a JSON or XML encoded description of the data category. The result 
                        		  will contain descriptions of subcategories or data items if they exist inside the data
                        		  category.
                        	  
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
GET /data/transport/car/generic HTTP/1.1
Accept: application/json
          </pre>
                                  		
                                			<hr>
                              <h4>Response</h4>
                                			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/json; charset=UTF-8
          </pre>
                                        <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-02-10 20:30:23.0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Generic"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Car"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1D95119FB149"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"car"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"deprecated"</em></strong>: false
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"87E55DA88017"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"generic"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-02-08 10:28:53.0"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Car Generic"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel,size"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"123C4A18B5D6"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/car/generic"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"children"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItems"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DataItems"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"rows"</em></strong>: [
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"average, average"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"average"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2700"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2028"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"average"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"30C5C41B45DE"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"30C5C41B45DE"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; AMEE"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-23 12:09:30.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"cng, large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2586"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2586"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"cng"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"735DC4D41F2D"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"735DC4D41F2D"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-08 21:48:20.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"cng, medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1862"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1862"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"cng"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"BCFF130729DA"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"BCFF130729DA"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-08 21:48:20.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel, large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2558"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2558"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4F6CBCEE95F7"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4F6CBCEE95F7"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 10:04:57.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel, medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1876"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1876"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"7E2B2426C927"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"7E2B2426C927"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 10:04:57.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel, small"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"small"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1510"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1510"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"57E6AC080BF4"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"57E6AC080BF4"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 10:04:57.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lpg, large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2586"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2586"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lpg"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"7E34107219F0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"7E34107219F0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-08 21:48:19.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lpg, medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1862"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.1862"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lpg"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"F783E581A9D6"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"F783E581A9D6"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-03-08 21:48:19.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol, large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.349"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2955"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CEA465039777"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CEA465039777"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 10:04:57.0"</em></strong>
        },
        {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-09-15 13:09:28.0"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol, medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"medium"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKmUS"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.270"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.2128"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"9A9E8852220B"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"9A9E8852220B"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"typicalDistance"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"14481"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 10:04:57.0"</em></strong>
        }
      ]
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"pager"</em></strong>: {
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
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategories"</em></strong>: [
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Defra"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4D8AF5D762CA"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"defra"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Electric"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"7BE086B9F73E"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"electric"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"GHGP"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"F5D27F3E905D"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"ghgp"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Ipcc"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"077101C7643F"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"ipcc"</em></strong>
      }
    ]
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
GET /data/transport/car/generic HTTP/1.1
Accept: application/xml
          </pre>
                                  		
                                			<hr>
                              <h4>Response</h4>
                                			  <pre class="programlisting">
HTTP/1.1 200 OK
Content-Type: application/xml; charset=UTF-8
          </pre>
                                        <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="UTF-8" standalone="no"?&gt;</span>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategoryResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/car/generic<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-02-10 20:30:23.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"87E55DA88017"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Generic<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>generic<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Deprecated&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Deprecated&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"1D95119FB149"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Car<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>car<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Deprecated&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Deprecated&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"123C4A18B5D6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Children&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategories&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"4D8AF5D762CA"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Defra<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>defra<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"7BE086B9F73E"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Electric<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>electric<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"F5D27F3E905D"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>GHGP<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>ghgp<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"077101C7643F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Ipcc<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>ipcc<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategories&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItems&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-23 12:09:30.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"30C5C41B45DE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.2700<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>average, average<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.2028<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>average<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; AMEE<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>30C5C41B45DE<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>average<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-08 21:48:20.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"735DC4D41F2D"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.2586<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>cng, large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.2586<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>735DC4D41F2D<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>cng<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-08 21:48:20.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"BCFF130729DA"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.1862<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>cng, medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.1862<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>BCFF130729DA<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>cng<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 10:04:57.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"4F6CBCEE95F7"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.2558<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>diesel, large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.2558<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>4F6CBCEE95F7<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 10:04:57.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"7E2B2426C927"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.1876<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>diesel, medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.1876<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>7E2B2426C927<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 10:04:57.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"57E6AC080BF4"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.1510<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>diesel, small<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.1510<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>small<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>57E6AC080BF4<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-08 21:48:19.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"7E34107219F0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.2586<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>lpg, large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.2586<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>7E34107219F0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>lpg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-03-08 21:48:19.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"F783E581A9D6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.1862<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>lpg, medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.1862<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>F783E581A9D6<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>lpg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 10:04:57.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CEA465039777"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.349<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>petrol, large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.2955<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>CEA465039777<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 10:04:57.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-09-15 13:09:28.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"9A9E8852220B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;typicalDistance&gt;</strong>14481<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/typicalDistance&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKmUS&gt;</strong>0.270<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKmUS&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;label&gt;</strong>petrol, medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/label&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;kgCO2PerKm&gt;</strong>0.2128<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/kgCO2PerKm&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;size&gt;</strong>medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/size&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;startDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/startDate&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;source&gt;</strong>http://www.defra.gov.uk/environment/business/reporting/pdf/20090717-guidelines-ghg-conversion-factors.xls; US EPA/dgen<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/source&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;path&gt;</strong>9A9E8852220B<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;fuel&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/fuel&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;endDate/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItems&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Pager&gt;</strong>
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
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Pager&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Children&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategoryResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
</pre>
                              		    
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  	
                  <div class="section" title="Look up a Data Item UID">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="drilldown-reference"></a>Look up a Data Item UID
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                         
                     <p>
                              Drilldowns are a special resource available within every Data Category that contains Data Items.
                            
                     </p>
                         
                     <p>
                              As data items are identified by UIDs in AMEEconnect calls such as creating Profile Items, a way is 
                              required of translating human-readable choices into these UIDs. This is particularly important 
                              for large categories, such as UK car models, which can contain many thousands of data items.
                            
                     </p>
                         
                     <p>
                              Data item UIDs may be different on different AMEE platforms for the same item. Because of
                              this, data item UIDs should never be hardcoded into client apps. Instead, you should use the 
                              drilldown URL (which doesn't change) to obtain the UIDs, which can then be cached. 
                              Drilldown URLs may be safely hardcoded, so that you don't necessarily have to iterate through
                              the choices each time if you already know which item you want to get to.
                            
                     </p>
                     		
                     <p>
                              Each call to the resource will give a list of choices. The client can then select one of
                              these and provide it as a parameter to the next drilldown call. When the sequence of choices
                              uniquely identifies one data item, a single choice named 'uid' is returned. This is the UID 
                              that should be used to refer to the chosen Data Item when creating Profile Items (see 
                              <a class="xref" href="apa.php#create-profile-item-reference" title="Create Profile Item">the section called &#8220;Create Profile Item&#8221;</a>).
                        	  
                     </p>
                     		
                     <table class="requestdetails" id="d5e1170">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/data/{category_path}/drill</td>
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
                     		
                     <div class="section" title="Optional Parameters">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e1183"></a>Optional Parameters
                                 </h4>
                              </div>
                           </div>
                        </div>
                        		  
                          		
                        <table class="parameters" id="d5e1185">
                             			
                           <tr>
                              					
                              <th>Parameter</th>
                              					
                              <th>Description</th>
                                			
                           </tr>
                           				
                           <tr>
                              					
                              <td>{choice_name}</td>
                              					
                              <td>Any number of choices and the values chosen. See below for detailed explanation.
                                 					  Choices must be provided in the correct order.
                              </td>
                              				
                           </tr>
                             		
                        </table>
                        	  
                     </div>
                     		
                     <p>
                        		  The response body contains a number of sections. The 'choices' section lists available drill
                        		  choices. The 'selections' sections shows choices that have already been made.
                        	  
                     </p>
                     	  
                     <div class="section" title="First Choice">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e1193"></a>First Choice
                                 </h4>
                              </div>
                           </div>
                        </div>
                        	    
                        	    
                        <p>
                           	      The first request has no parameters, so fetches the options for the first drill choice.
                                 
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
GET /data/transport/car/generic/drill HTTP/1.1
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>:{
	...
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:[
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"average"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"average"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"cng"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"cng"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lpg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lpg"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol hybrid"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol hybrid"</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"selections"</em></strong>:[],
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>:{
	...
  }
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
GET /data/transport/car/generic/drill HTTP/1.1
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
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDownResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"87E55DA88017"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      ...
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"123C4A18B5D6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Selections/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>average<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>average<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>cng<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>cng<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>lpg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>lpg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>petrol hybrid<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>petrol hybrid<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDownResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
</pre>
                                   		    
                                     		</div>
                              <div class="greyBoxTwoThirdsPageFooter">
                                             .
                                           
                              </div>
                           </div>
                        </div>
                            
                     </div>
                     	  
                     <div class="section" title="Second Choice">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e1211"></a>Second Choice
                                 </h4>
                              </div>
                           </div>
                        </div>
                        	    
                        	    
                        <p>
                           	      In this example, the user has picked 'diesel' as the selection for the first choice.
                           	      This is passed as a URL parameter to the second request.
                                 
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
GET /data/transport/car/generic/drill?fuel=diesel HTTP/1.1
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>:{
	...
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:[
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"medium"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"medium"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"small"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"small"</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"selections"</em></strong>:[
    {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>
    }
  ],
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>:{
	...
  }
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
GET /data/transport/car/generic/drill?fuel=diesel HTTP/1.1
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
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDownResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"87E55DA88017"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      ...
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"123C4A18B5D6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Selections&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Selections&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>size<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>medium<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>small<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>small<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDownResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
</pre>
                                   		    
                                     		</div>
                              <div class="greyBoxTwoThirdsPageFooter">
                                             .
                                           
                              </div>
                           </div>
                        </div>
                            
                     </div>
                     	  
                     <div class="section" title="Final Result">
                        <div class="titlepage">
                           <div>
                              <div>
                                 <h4 class="title"><a name="d5e1229"></a>Final Result
                                 </h4>
                              </div>
                           </div>
                        </div>
                        	    
                        	    
                        <p>
                           	      This category has only two drill choices, so two selections are enough to fully identify a data item. The user 
                           	      has selected 'large' for the size choice in this example. The UID of the selected data item appears as a choice
                           	      named 'uid'.
                                 
                        </p>
                              
                        <p>
                                   If you know beforehand the sequence of drill choices you will wish to make, it is not necessary to go through
                                   the process of requesting each step of the drill process. That is, while we recommend strongly against
                                   hard-coding Data Item UIDs in your application, it is perfectly sensible to code a fully specified Drill
                                   request to look up the data UID in your application&#8217;s initialisation.
                                 
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
GET /data/transport/car/generic/drill?fuel=diesel&amp;size=large HTTP/1.1
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>:{
	...
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:[
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4F6CBCEE95F7"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"4F6CBCEE95F7"</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"selections"</em></strong>:[
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"diesel"</em></strong>
    },
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"large"</em></strong>
    }
  ],
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>:{
	...
  }
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
GET /data/transport/car/generic/drill?fuel=diesel&amp;size=large HTTP/1.1
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
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDownResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"87E55DA88017"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      ...
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"123C4A18B5D6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Selections&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>diesel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>size<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>large<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Selections&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>uid<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>4F6CBCEE95F7<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>4F6CBCEE95F7<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDownResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong>
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
                   
               <div class="section" title="Data Items">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="data-item-reference"></a>Data Items
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         A Data Item represents a single type of energy usage which contributes to CO2 emissions.
                         Data Items provide the data required to perform emissions calculations for Profile Items.
                       
                  </p>
                    
                  <p>
                         For example, a particular Data Item could represent an average sized petrol car. 
                         You could create a Profile Item associated with this Data Item, which would specify
                         that a user has an average sized petrol car. You could set extra parameters in this
                         Profile Item to specify information such as that the car is driven 5000 kilometres per year.
                       
                  </p>
                    
                  <p>
                         Each Data Item can have several Data Item Values (distance, for instance).
                       
                  </p>
                  	
                  <div class="section" title="Properties">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e1253"></a>Properties
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <table class="properties" id="d5e1255">
                        			
                        <tr>
                           				
                           <th>Property</th>
                           				
                           <th>Description</th>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>UID</td>
                           				
                           <td>A 12-letter unique identifier for the data item. See <a class="xref" href="apc.php#uid-reference" title="UIDs">the section called &#8220;UIDs&#8221;</a> for more information.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>created</td>
                           				
                           <td>The time and date on which the item was created.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>modified</td>
                           				
                           <td>The time and date on which the item was last modified.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>name</td>
                           				
                           <td>A display name for this Data Item. This is not always used and 
                              				  will default to the UID.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>path</td>
                           				
                           <td>The path segment for this Data Item within the URL path. 
                              				  This is not always used and will default to the UID.
                           </td>
                           			
                        </tr>
                        		
                     </table>
                     	
                  </div>
                  	
                  <div class="section" title="Get Data Item">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="get-data-item-reference"></a>Get Data Item
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Fetches a representation of a data item.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e1278">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/data/{category_path}/{data_item_uid}</td>
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
                        		  The response contains a JSON or XML encoded description of the data item.
                        	  
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
GET /data/transport/plane/generic/FFC7A05D54AD HTTP/1.1
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/plane/generic/FFC7A05D54AD"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"userValueChoices"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>:[
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"distance"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"IATACode1"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"IATACode2"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"journeys"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lat1"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"-999"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lat2"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"-999"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"long1"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"-999"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"long2"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"-999"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"numberOfPassengers"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"passengerClass"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"userValueChoices"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItem"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"FFC7A05D54AD"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-08-01T09:00:41+01:00"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>:{
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"FBA97B70DBDF"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Generic"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"generic"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValues"</em></strong>:[
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>:{
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"C376560CB19F"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Type"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>:{
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CCEB59CACE1B"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"text"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"TEXT"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>
          }
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"E459F81B0876"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Type"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"domestic"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Type"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>:{
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5D7FB5F552A5"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Size"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>:{
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CCEB59CACE1B"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"text"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"TEXT"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>
          }
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"33A729613596"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Size"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"one way"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"size"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Size"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>:{
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"D7B4340D9404"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Km"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerKm"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>:{
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"996AE5477B3F"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerKm"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DECIMAL"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>
          }
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19602052C053"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Km"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.0000"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerKm"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerKm"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Km"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>:{
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"653828811D42"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Journey"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerJourney"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>:{
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"8CB8A1789CD6"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerJourney"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DECIMAL"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-08-01 08:57:31.0"</em></strong>
          }
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"C32B6E2EDCB0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Journey"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"81.2000"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerJourney"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerJourney"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Journey"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>:{
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0F0592F05AAC"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Source"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>:{
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CCEB59CACE1B"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"text"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"TEXT"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>
          }
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"F3C2C8046B54"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Source"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"defra/amee 2008"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Source"</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerFeed"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"AMEE"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"owner"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemsPerPage"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">10</span>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-08-01 09:00:41.0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"FFC7A05D54AD"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>:{
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"441BF4BEA15B"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
      },
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Plane Generic"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type,size"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"domestic,one way"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-08-01 09:00:41.0"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"actions"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowCreate"</em></strong>:false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowView"</em></strong>:true,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowList"</em></strong>:false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowModify"</em></strong>:false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowDelete"</em></strong>:false
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amountPerMonth"</em></strong>:<span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>
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
GET /data/transport/plane/generic/FFC7A05D54AD HTTP/1.1
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
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItemResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-08-01 09:00:41.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-08-01 09:00:41.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"FFC7A05D54AD"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>FFC7A05D54AD<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValues&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"E459F81B0876"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>type<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Type<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>domestic<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"C376560CB19F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>type<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Type<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CCEB59CACE1B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>text<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>TEXT<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"33A729613596"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>size<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Size<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>one way<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5D7FB5F552A5"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>size<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Size<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CCEB59CACE1B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>text<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>TEXT<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"19602052C053"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>kgCO2PerPassengerKm<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2 Per Passenger Km<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>0.0000<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"D7B4340D9404"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>kgCO2PerPassengerKm<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2 Per Passenger Km<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"996AE5477B3F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2PerKm<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"C32B6E2EDCB0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>kgCO2PerPassengerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2 Per Passenger Journey<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>81.2000<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"653828811D42"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>kgCO2PerPassengerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2 Per Passenger Journey<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-08-01 08:57:31.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"8CB8A1789CD6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2PerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"F3C2C8046B54"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>defra/amee 2008<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"0F0592F05AAC"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CCEB59CACE1B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>text<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>TEXT<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValues&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"441BF4BEA15B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"FBA97B70DBDF"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Generic<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>generic<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>FFC7A05D54AD<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Label&gt;</strong>domestic,one way
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Label&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>2007-08-01T09:00:41+01:00<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;EndDate/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/plane/generic/FFC7A05D54AD<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>userValueChoices<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>distance<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>IATACode1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>IATACode2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>journeys<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>lat1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>-999<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>lat2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>-999<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>long1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>-999<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>long2<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>-999<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>numberOfPassengers<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>passengerClass<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;AmountPerMonth&gt;</strong>0.000000<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/AmountPerMonth&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItemResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong></pre>
                              		    
                                		</div>
                           <div class="greyBoxTwoThirdsPageFooter">
                                          .
                                        
                           </div>
                        </div>
                     </div>
                     	
                  </div>
                  
               </div>
                   
               <div class="section" title="Data Item Values">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="data-item-value-reference"></a>Data Item Values
                           </h2>
                        </div>
                     </div>
                  </div>
                  	
                    
                  <p>
                         Data Item Values belong to Data Items. Each Data Item Value represents a distinct value 
                         such as 'energyConsumption', or 'kgCO2PerkWh'.
                       
                  </p>
                    
                  <p>
                         Data Item Values themselves are rarely used, as all information in them normally appears
                         in their parent Data Item.
                       
                  </p>
                    
                  <div class="section" title="Properties">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="d5e1311"></a>Properties
                              </h3>
                           </div>
                        </div>
                     </div>
                       	
                     		
                     <table class="properties" id="d5e1313">
                        			
                        <tr>
                           				
                           <th>Property</th>
                           				
                           <th>Description</th>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>UID</td>
                           				
                           <td>A 12-letter unique identifier for the data item. See <a class="xref" href="apc.php#uid-reference" title="UIDs">the section called &#8220;UIDs&#8221;</a> for more information.
                           </td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>created</td>
                           				
                           <td>The time and date on which the item was created.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>modified</td>
                           				
                           <td>The time and date on which the item was last modified.</td>
                           			
                        </tr>
                        			
                        <tr>					
                           				
                           <td>value</td>
                           				
                           <td>The current value for the Data Item.</td>
                           			
                        </tr>
                        		
                     </table>
                     	
                  </div>
                  	
                  <div class="section" title="Get Single Value">
                     <div class="titlepage">
                        <div>
                           <div>
                              <h3 class="title"><a name="get-data-item-value-reference"></a>Get Single Value
                              </h3>
                           </div>
                        </div>
                     </div>
                     		
                     		
                     <p>
                        			Fetches a representation of a single data item value.
                        		
                     </p>
                     		
                     <table class="requestdetails" id="d5e1333">
                        			
                        <tr>
                           <td>URL</td>
                           <td>https://{server}.amee.com/data/{category_path}/{data_item_uid}/{value_name}</td>
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
                        		  The response contains a JSON or XML encoded description of the data item.
                        	  
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
GET /data/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney HTTP/1.1
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValue"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>:{
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"653828811D42"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Journey"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerJourney"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>:{
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"8CB8A1789CD6"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>:{
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 09:30:44.0"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerJourney"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"DECIMAL"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-08-01 08:57:31.0"</em></strong>
      }
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"C32B6E2EDCB0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-08-01 09:00:41.0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"item"</em></strong>:{...},
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Journey"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"81.2000"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerJourney"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2PerPassengerJourney"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kgCO2 Per Passenger Journey"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2009-01-18 19:14:54.0"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItem"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>:<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"FFC7A05D54AD"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"actions"</em></strong>:{
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowCreate"</em></strong>:false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowView"</em></strong>:true,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowList"</em></strong>:false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowModify"</em></strong>:false,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"allowDelete"</em></strong>:false
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
GET /data/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney HTTP/1.1
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
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItemValueResource&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">Created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-08-01 09:00:41.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">Modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2009-01-18 19:14:54.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"C32B6E2EDCB0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>kgCO2PerPassengerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2 Per Passenger Journey<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>81.2000<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"653828811D42"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>kgCO2PerPassengerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2 Per Passenger Journey<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 09:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-08-01 08:57:31.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"8CB8A1789CD6"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>kgCO2PerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"FFC7A05D54AD"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"FFC7A05D54AD"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/plane/generic/FFC7A05D54AD/kgCO2PerPassengerJourney<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItemValueResource&gt;</strong>
<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Resources&gt;</strong></pre>
                              		    
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
                  <td width="40%" align="left"><a accesskey="p" href="apa.php">
                                              &laquo; Profile Reference</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="apc.php">Common Concepts Reference &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>