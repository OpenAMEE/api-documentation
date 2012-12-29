<script type="text/javascript" src="script/jquery-1.5.min.js"></script><script type="text/javascript" src="script/tabs.js"></script><div id="containertwothirds">
   <div class="browserwide">
      <div id="content" class="contenttwothirds" role="main" bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
         <div id="content" class="narrowcolumn" role="main">
            <div class="chapter" title="Get Emission Factors">
               <div class="titlepage">
                  <div>
                     <div>
                        <h2 class="title entry-title"><a name="d5e161"></a>Get Emission Factors
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="toc">
                  <dl>
                     <dt><span class="section"><a href="ch03.php#categories-and-items">Categories and Items</a></span></dt>
                     <dt><span class="section"><a href="ch03.php#ameediscover">Introduction to AMEEdiscover</a></span></dt>
                     <dt><span class="section"><a href="ch03.php#using-ameediscover">Using AMEEdiscover with AMEEconnect</a></span></dt>
                     <dt><span class="section"><a href="ch03.php#drilldowns">Performing Drilldowns</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                     <dt><span class="section"><a href="ch03.php#get-data-items">Fetching Data Items</a></span></dt>
                     <dd>
                        <dl></dl>
                     </dd>
                  </dl>
               </div>
                 
                 
               <p>
                  If you just want access to authoritative emission factors, AMEE has you covered. Using AMEEdiscover and 
                  AMEEconnect, you can wire the latest data straight into the heart of your application. AMEEconnect can also
                      perform the actual calculations for you - we'll cover that in the next chapter.
                    
               </p>
                 
               <div class="section" title="Categories and Items">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="categories-and-items"></a>Categories and Items
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           A category in AMEE is a collection of items representing energy consuming or other activities 
                           which share a common way to calculate their associated greenhouse gas emissions. AMEE categories 
                           represent, to give just a few examples, car or train transport, types of fuel or country-specific 
                           grid electricity, electrical appliances, and agricultural or industrial processes.
                         
                  </p>
                  		
                  <p>
                     		  Where similar methodologies exist, perhaps from different sources or representative of different 
                     		  geographic contexts, alternative categories are available for the same type of emissions activity.
                     		
                  </p>
                      
                  <p>
                           Data items are the fundamental unit of data organisation and emissions calculations in AMEE. 
                           Data items are contained within categories and represent distinct types of activity, such as 
                           the use of a particular model of car, a short-haul flight, or the use of a particular electrical
                           appliance.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Introduction to AMEEdiscover">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="ameediscover"></a>Introduction to AMEEdiscover
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           As a neutral aggregation platform, AMEE contains many different methodologies related to environmental
                           intelligence. They use different calculation techniques, different inputs, and have different levels 
                           of accuracy. The choice of which of these to use will be up to you, and should be one of the first things 
                           you will decide when you come to use the platform. It will depend on your reporting requirements, legal 
                           requirements, and so on.
                         
                  </p>
                      
                  <p>
                           Each of these methodologies is a category, and every category within AMEE is individually documented in 
                           AMEEdiscover. It describes the functionality of each category, the source of any data or calculating methodologies,
                     relationships 
                           with other AMEE categories, and provides instructions for how to use the category to store relevant data 
                           and make emissions calculations. AMEEdiscover provides powerful search and tagging capabilities, making 
                           it easy to discover the categories and data items you wish to use. It also provides the ability to perform 
                           instant calculations directly in your browser, so you can easily check your results, and the ability to 
                           generate example code that helps you use AMEEconnect to access those categories.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Using AMEEdiscover with AMEEconnect">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="using-ameediscover"></a>Using AMEEdiscover with AMEEconnect
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           If you want to fetch data with AMEEconnect, you first need to work out which data you want. AMEEdiscover helps
                           you to do this and gives you the parameters you need to build the required URLs.
                         
                  </p>
                      
                  <p>
                           Firstly, each category in AMEE has a <span class="emphasis"><em>path</em></span>. This corresponds to its URL in AMEEconnect, and
                           is shown in the 'API Details' box on each AMEEdiscover category page. For instance, the <a class="ulink" href="" target="_top">DEFRA transport fuel methodology</a> category
                           has a path of <span class="emphasis"><em>/transport/defra/fuel</em></span>. You could get a list of available data items in that category through AMEEconnect
                           by doing a GET to /data/transport/defra/fuel; see <a class="xref" href="apb.php#get-data-category-reference" title="Get Data Category">the section called &#8220;Get Data Category&#8221;</a> in the reference guide for details.
                         
                  </p>
                      
                  <p>
                           Alternatively, if you want to access a single data item with the category, you will need to identify which one. The
                     <a class="ulink" href="" target="_top">Data Items</a> list is useful here. It shows
                           all the data items within a category, including drilldown options.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Performing Drilldowns">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="drilldowns"></a>Performing Drilldowns
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           Data items are identified by their UIDs, not by textual names. In order to get one of these UIDs, you need to perform
                     a drilldown
                           request. To find the UID for the petrol item in the DEFRA transport fuel methodology, you need to make the following
                     call:
                         
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
                                     <pre class="programlisting"><span xmlns="http://www.w3.org/1999/xhtml" class="hl-directive" style="color: maroon">&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</span>

<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Resources</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">xmlns</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"http://schemas.amee.cc/2.0"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDownResource&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataCategory</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"138B5405E0CE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Deprecated&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Deprecated&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataCategory&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"80DB1AB8141F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Selections&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Selections&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>uid<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>19B311DDF0B1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>19B311DDF0B1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
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
                                     <pre class="programlisting">{
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"selections"</em></strong>: [
    {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemDefinition"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"80DB1AB8141F"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>: [
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>
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
                  </div>
                      
                  <p>
                           A drilldown response consists of two sections. The first is the 'Selections' part. This shows choices that have already
                     been
                           made and specified in the drilldown URL. The second is the 'Choices' part, which shows what choices are available for
                     the next 
                           level of drill. Drilldowns support interactive choice of the various levels; see <a class="xref" href="ch06.php#interactive-drilldowns" title="Interactive Drilldowns">the section called &#8220;Interactive Drilldowns&#8221;</a> for details.
                         
                  </p>
                      
                  <p>
                           Here, however, we know all the drill choices we want in advance; we know we want petrol in this case. So, we can specify
                     all the required
                           options and get the resulting UID directly. You can see in the response above that the next choice is called 'uid',
                     and there is only one option.
                           This is the UID for the item we are interested in, in this case 19B311DDF0B1.
                         
                  </p>
                      
                  <p>
                           Data item UIDs are not necessarily the same across different platforms. You should not hardcode them into your 
                           application, as it will certainly break when you move from staging to live. Instead, you should always do a drilldown
                     request. 
                           It's safe to cache the UIDs once they've been fetched, however, as they change extremely rarely within a single platform.
                         
                  </p>
                    
               </div>
                 
               <div class="section" title="Fetching Data Items">
                  <div class="titlepage">
                     <div>
                        <div>
                           <h2 class="title" style="clear: both"><a name="get-data-items"></a>Fetching Data Items
                           </h2>
                        </div>
                     </div>
                  </div>
                      
                      
                  <p>
                           If you want to get the raw emission factors for an item, you can, once you have the UID. You will also need the UID
                     for
                           calculations (see next chapter).
                         
                  </p>
                      
                  <p>
                           Fetching a data item is as simple as doing a GET on the category path with the UID as the last element:
                         
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
GET /data/transport/defra/fuel/19B311DDF0B1 HTTP/1.1
Accept: application/xml
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
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItemResource&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DataItem</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2010-11-09 19:30:56.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2011-08-01 15:36:15.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"19B311DDF0B1"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>19B311DDF0B1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValues&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"85BB303C3F1D"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massTotalCO2ePerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Total life cycle CO2e emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>2.7227<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"E2365F2C7478"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massTotalCO2ePerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Total life cycle CO2e emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"1E7030C99D32"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massCH4PerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Direct CH4 emissions factor (CO2e)<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>0.0034<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"0513BE88E262"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massCH4PerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Direct CH4 emissions factor (CO2e)<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"3B5B49052223"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>http://www.defra.gov.uk/environment/economy/business-efficiency/reporting<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"733725A940F4"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Source<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CCEB59CACE1B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>text<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>TEXT<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"349179755D06"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massDirectCO2ePerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Total direct CO2e emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>2.3117<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"88C39D1827D2"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massDirectCO2ePerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Total direct CO2e emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"A10E681D1E20"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Type of fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit/&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2A295F2622CE"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Type of fuel<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CCEB59CACE1B"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>text<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>TEXT<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"D0818E220EA2"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massIndirectCO2ePerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Indirect CO2e emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>0.411<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"C9651873AF44"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massIndirectCO2ePerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Indirect CO2e emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"90CB9E89A5EF"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massN2OPerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Direct N2O emissions factor (CO2e)<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>0.0065<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"D851A3D1C961"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massN2OPerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Direct N2O emissions factor (CO2e)<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;DrillDown&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DrillDown&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValueDefinition&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ItemValue&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValue</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"75CB7AB265E7"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massCO2PerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Direct CO2 emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value&gt;</strong>2.3018<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Value&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ItemValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"01E753B0328A"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>massCO2PerVolume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>Direct CO2 emissions factor<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueDefinition</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">created</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">modified</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"2007-07-27 07:30:44.0"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"45433E48B39F"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>amount<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;ValueType&gt;</strong>DECIMAL<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueType&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Description/&gt;</strong>
       <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Environment</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">uid</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"5F5887BCF726"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">/&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/ValueDefinition&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Unit&gt;</strong>kg<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Unit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;PerUnit&gt;</strong>L<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/PerUnit&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromProfile&gt;</strong>false<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromProfile&gt;</strong>
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;FromData&gt;</strong>true<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/FromData&gt;</strong>
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
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>19B311DDF0B1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Label&gt;</strong>petrol<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Label&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;StartDate&gt;</strong>1970-01-01T00:00:00Z<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/StartDate&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;EndDate/&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItem&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Path&gt;</strong>/transport/defra/fuel/19B311DDF0B1<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Path&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>userValueChoices<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choices&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>mass<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Choice&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Name&gt;</strong>volume<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Name&gt;</strong>
     <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Value/&gt;</strong>
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choice&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Choices&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;AmountPerMonth&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/AmountPerMonth&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg/year"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amounts&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">default</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"true"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"totalDirectCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"lifeCycleCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"CO2"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"nitrousOxideCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"methaneCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Amount</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">perUnit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">""</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"indirectCO2e"</span> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">unit</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"kg"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>0.0<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amount&gt;</strong>
   <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;Note</strong> <span xmlns="http://www.w3.org/1999/xhtml" class="hl-attribute" style="color: #F5844C">type</span>=<span xmlns="http://www.w3.org/1999/xhtml" class="hl-value" style="color: #993300">"comment"</span><strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&gt;</strong>This methodology provides emissions directly in terms of CO2e. No global warming potentials are applied in this calculation<strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Note&gt;</strong>
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/Amounts&gt;</strong>
 <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-tag" style="color: #000096">&lt;/DataItemResource&gt;</strong>
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
GET /data/transport/defra/fuel/19B311DDF0B1 HTTP/1.1
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
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg/year"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amountPerMonth"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"userValueChoices"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"userValueChoices"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"choices"</em></strong>: [
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"mass"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"volume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>
      }
    ]
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataItem"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2011-08-01 15:36:15.0"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"label"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"dataCategory"</em></strong>: {
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"138B5405E0CE"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
      <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"deprecated"</em></strong>: false
    },
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValues"</em></strong>: [
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Total life cycle CO2e emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Total life cycle CO2e emissions factor"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"E2365F2C7478"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massTotalCO2ePerVolume"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Total life cycle CO2e emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"85BB303C3F1D"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.7227"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massTotalCO2ePerVolume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massTotalCO2ePerVolume"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct CH4 emissions factor (CO2e)"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct CH4 emissions factor (CO2e)"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0513BE88E262"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massCH4PerVolume"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct CH4 emissions factor (CO2e)"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1E7030C99D32"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.0034"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massCH4PerVolume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massCH4PerVolume"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Source"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Source"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"733725A940F4"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"text"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"TEXT"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CCEB59CACE1B"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>
          },
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Source"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"3B5B49052223"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"http://www.defra.gov.uk/environment/economy/business-efficiency/reporting"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"source"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Total direct CO2e emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Total direct CO2e emissions factor"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"88C39D1827D2"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massDirectCO2ePerVolume"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Total direct CO2e emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"349179755D06"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.3117"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massDirectCO2ePerVolume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massDirectCO2ePerVolume"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Type of fuel"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Type of fuel"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2A295F2622CE"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueDefinition"</em></strong>: {
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"modified"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"text"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"valueType"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"TEXT"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CCEB59CACE1B"</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"description"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"environment"</em></strong>: {
              <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"5F5887BCF726"</em></strong>
            },
            <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2007-07-27 07:30:44.0"</em></strong>
          },
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Type of fuel"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"A10E681D1E20"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"petrol"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fuel"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Indirect CO2e emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Indirect CO2e emissions factor"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"C9651873AF44"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massIndirectCO2ePerVolume"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Indirect CO2e emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"D0818E220EA2"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.411"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massIndirectCO2ePerVolume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massIndirectCO2ePerVolume"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct N2O emissions factor (CO2e)"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct N2O emissions factor (CO2e)"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"D851A3D1C961"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massN2OPerVolume"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct N2O emissions factor (CO2e)"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"90CB9E89A5EF"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"0.0065"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massN2OPerVolume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massN2OPerVolume"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct CO2 emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"itemValueDefinition"</em></strong>: {
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromData"</em></strong>: true,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"name"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct CO2 emissions factor"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"drillDown"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"fromProfile"</em></strong>: false,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"01E753B0328A"</em></strong>,
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
          <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massCO2PerVolume"</em></strong>
        },
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayName"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"Direct CO2 emissions factor"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"perUnit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"L"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"75CB7AB265E7"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2.3018"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massCO2PerVolume"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"displayPath"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"massCO2PerVolume"</em></strong>
      }
    ],
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"startDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"1970-01-01T00:00:00Z"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"uid"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"19B311DDF0B1"</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
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
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"endDate"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">""</em></strong>,
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"created"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"2010-11-09 19:30:56.0"</em></strong>
  },
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"path"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"/transport/defra/fuel/19B311DDF0B1"</em></strong>,
  <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amounts"</em></strong>: {
    <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"amount"</em></strong>: [
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"default"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"true"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"totalDirectCO2e"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"lifeCycleCO2e"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"CO2"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"nitrousOxideCO2e"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"methaneCO2e"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"unit"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"kg"</em></strong>
      },
      {
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"type"</em></strong>: <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"indirectCO2e"</em></strong>,
        <strong xmlns="http://www.w3.org/1999/xhtml" class="hl-string"><em style="color:red">"value"</em></strong>: <span xmlns="http://www.w3.org/1999/xhtml" class="hl-number">0</span>,
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
                     		  The response contains a representation of the data item, including all its values. There are various types of values,
                     but at this
                     		  point we are interested in the ones where FromData is true - these are the emission factors that act as inputs to calculations.
                     	  
                  </p>
                  	  
                  <p>
                     	    If you look at the response above, you can see that there are a series of ItemValue nodes. Each of these represents a
                     single factor
                     	    or input. If you want to know how much co2 is emitted per litre of petrol, the massTotalCO2ePerVolume value would be
                     the most useful.
                     	    This shows that the factor is 2.7227 kg/L. Alternatively, massCH4PerVolume shows that 0.0034 kg of methane is produced
                     for every litre
                     	    of fuel.
                         
                  </p>
                  	
               </div>
               	
               <p>
                  	  These factors can be useful, but it's more often useful to get AMEE to do the entire calculation for you. Many algorithms
                  are much
                  	  more complex than a*b, and you don't want to implement them all yourself. We'll look at calculations in the next section.
                    
               </p>
               
            </div>
         </div>
         <div class="navfooter">
            <table width="100%" summary="Navigation footer">
               <tr>
                  <td width="40%" align="left"><a accesskey="p" href="ch02.php">
                                              &laquo; Quick Start</a>&nbsp;
                  </td>
                  <td width="20%" align="center"><a accesskey="h" href="index.php">Contents</a></td>
                  <td width="40%" align="right">&nbsp;<a accesskey="n" href="ch04.php">Perform Calculations &raquo;
                                            </a></td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="vertwidgets"></div>