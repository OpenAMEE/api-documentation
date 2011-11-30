<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- xsl:import href="http://docbook.sourceforge.net/release/xsl/current/html/chunk.xsl"/ -->
  <xsl:import href="xsl/html/chunk.xsl"/>

  <xsl:include href="base-html-stylesheet.xsl"/>

  <!-- PARAMETER REFERENCE:                                         -->
  <!-- http://docbook.sourceforge.net/release/xsl/current/doc/html/ -->

  <xsl:param name="chunker.output.encoding" select="'utf-8'"/>
  <xsl:param name="html.ext">.php</xsl:param>
  <xsl:param name="chunker.output.indent" select="'yes'"/>
  <xsl:param name="chunk.section.depth">0</xsl:param>

  <xsl:param name="toc.max.depth">2</xsl:param>
  <xsl:param name="footer.rule">0</xsl:param>

  <xsl:param name="use.id.as.filename">1</xsl:param>
  <xsl:param name="chunk.first.sections">1</xsl:param>
  <xsl:param name="chunk.quietly" select="1"></xsl:param>

  <xsl:param name="chapter.autolabel">0</xsl:param>
  <xsl:param name="appendix.autolabel">0</xsl:param>

  <xsl:param name="wordpress.dir">/var/www/www.amee.com</xsl:param>

  <!-- customised header output to add a style to chapter titles -->
  <xsl:template name="component.title">
    <xsl:param name="node" select="."/>
    <xsl:variable name="level">
      <xsl:choose>
        <xsl:when test="ancestor::section">
          <xsl:value-of select="count(ancestor::section)+1"/>
        </xsl:when>
        <xsl:when test="ancestor::sect5">6</xsl:when>
        <xsl:when test="ancestor::sect4">5</xsl:when>
        <xsl:when test="ancestor::sect3">4</xsl:when>
        <xsl:when test="ancestor::sect2">3</xsl:when>
        <xsl:when test="ancestor::sect1">2</xsl:when>
        <xsl:otherwise>1</xsl:otherwise>
      </xsl:choose>
    </xsl:variable>
    <xsl:element name="h{$level+1}">
      <xsl:attribute name="class">
        <xsl:choose>
          <xsl:when test="ancestor::chapter">title entry-title</xsl:when>
          <xsl:when test="ancestor::appendix">title entry-title</xsl:when>
          <xsl:when test="ancestor-or-self::bibliography">title entry-title</xsl:when>
          <xsl:otherwise>title</xsl:otherwise>
        </xsl:choose>
      </xsl:attribute>
      <xsl:call-template name="anchor">
        <xsl:with-param name="node" select="$node"/>
        <xsl:with-param name="conditional" select="0"/>
      </xsl:call-template>
      <xsl:apply-templates select="$node" mode="object.title.markup">
        <xsl:with-param name="allow-anchors" select="1"/>
      </xsl:apply-templates>
    </xsl:element>
  </xsl:template>
  
  <xsl:template name="chunk-element-content">
    <xsl:param name="prev"/>
    <xsl:param name="next"/>
    <xsl:param name="nav.context"/>
    <xsl:param name="content">
      <xsl:apply-imports/>
    </xsl:param>

    <xsl:variable name="doc" select="self::*"/>

    <xsl:call-template name="user.preroot"/>

    <xsl:processing-instruction name="php">
      require('<xsl:value-of select="$wordpress.dir"/>/wp-blog-header.php');

      add_action('bcn_before_fill', 'add_crumbs');
      
      function add_crumbs($trail) {
        $breadcrumb = new bcn_breadcrumb("<xsl:apply-templates select="$doc" mode="object.title.markup.textonly"/>");
        array_push($trail->trail, $breadcrumb);
        <xsl:variable name="up" select="parent::*"/>
        <xsl:if test="count($up) != 0">
          $breadcrumb = new bcn_breadcrumb("Documentation", '', '', '&lt;a href="/developer/docs"&gt;', true);
          array_push($trail->trail, $breadcrumb);
        </xsl:if>                
        $breadcrumb = new bcn_breadcrumb("Developer", '', '', '&lt;a href="/developer"&gt;', true);
        array_push($trail->trail, $breadcrumb);
      }

      class MyPost { var $post_title = "<xsl:apply-templates select="$doc" mode="object.title.markup.textonly"/>"; }
      $wp_query->is_home = false;
      $wp_query->is_page = true;
      $wp_query->is_404 = false;
      $wp_query->queried_object = new MyPost();
      get_header();
    <xsl:text>?</xsl:text></xsl:processing-instruction>

    <script type="text/javascript" src='script/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='script/tabs.js'></script>
    <style type="text/css">
    .entry-meta {
            display: none!IMPORTANT;
            }
    #content {
            margin: 0px !important;
            }
    #container {
            width: 940px!important;
            clear: both!important;
            float: none!important;
    }
    .logo A{
            background-image: url(<xsl:processing-instruction name="php"> bloginfo('template_directory'); <xsl:text>?</xsl:text></xsl:processing-instruction>/images/AMEEdeveloper_logo.gif);
            background-repeat: no-repeat;
            background-position: left top;
            width:452px!important;
            }
    .logo A IMG{
            width:452px!important;
            height: 110px;
    }
    </style>
    <div id="containertwothirds">
      <div class="browserwide">
        <div id="content" class="contenttwothirds" role="main">
          
          <xsl:call-template name="body.attributes"/>

          <div id="content" class="narrowcolumn" role="main">
            <xsl:copy-of select="$content"/>
          </div>

          <xsl:call-template name="footer.navigation">
            <xsl:with-param name="prev" select="$prev"/>
            <xsl:with-param name="next" select="$next"/>
            <xsl:with-param name="nav.context" select="$nav.context"/>
          </xsl:call-template>

        </div>
      </div>
    </div>
    <!-- copypasted from site, sadly. to be DRYed later -->
    <div class="vertwidgets">
      <div role="complementary" id="right-widget-area">
        <div class="widget-area" id="first">
          <ul class="xoxo">
            <li class="widget-container content2_block" id="secondary-html-content-2">
              <div class="greyBoxThirdPageHeader">.</div>
              <div class="greyBoxThirdPageContent subMenuLinks">
              <div class="subMenuItem"><a href="/developer/docs/ch02.php">Quickstart</a></div>
              <div class="subMenuItem"><a href="/developer/how-to/">How to</a></div>
              <div class="subMenuItem"><a href="/developer/amee-appkit/">AMEEappkit</a></div>
              <div class="subMenuItem"><a href="/developer/docs/index.php">Documentation</a></div>
              <div class="subMenuItem"><a href="/developer/docs/apa.php">API reference</a></div>
              <div class="subMenuItem"><a href="/developer/sdks/">SDKs</a></div>
              <div class="subMenuItem"><a href="/amee-open-source-policy/">Open Source Policy</a></div>
              <div class="subMenuItem"><a href="/category/developernews/">Developer Blog</a></div>
              <!--<div class="subMenuItem"><a href="/labs/">AMEE Labs</a></div>-->
              <div class="subMenuItem"><a href="http://status.amee.com">Status</a></div>
              </div>
              <div class="greyBoxThirdPageFooter">.</div>
            </li>
          </ul>
        </div>
        <!-- #first .widget-area -->
        <div class="widget-area" id="second">
          <ul class="xoxo"></ul>
        </div>
        <!-- #second .widget-area -->
      </div>
      <!-- #right-widget-area -->
    </div>

    <xsl:processing-instruction name="php">
      include (TEMPLATEPATH . '/footer_dev.php');
    <xsl:text>?</xsl:text></xsl:processing-instruction>

    <xsl:value-of select="$chunk.append"/>
  </xsl:template>
    
  <xsl:param name="local.l10n.xml" select="document('')" />
  <l:i18n xmlns:l="http://docbook.sourceforge.net/xmlns/l10n/1.0">
   <l:l10n language="en">
    <l:gentext key="nav-home" text="Contents"/>
   </l:l10n>
  </l:i18n>
  
  <xsl:template name="footer.navigation">
    <xsl:param name="prev" select="/foo"/>
    <xsl:param name="next" select="/foo"/>
    <xsl:param name="nav.context"/>

    <xsl:variable name="home" select="/*[1]"/>
    <xsl:variable name="up" select="parent::*"/>

    <xsl:variable name="row1" select="count($prev) &gt; 0                                     or count($up) &gt; 0                                     or count($next) &gt; 0"/>

    <xsl:variable name="row2" select="($prev and $navig.showtitles != 0)                                     or (generate-id($home) != generate-id(.)                                         or $nav.context = 'toc')                                     or ($chunk.tocs.and.lots != 0                                         and $nav.context != 'toc')                                     or ($next and $navig.showtitles != 0)"/>

    <xsl:if test="$suppress.navigation = '0' and $suppress.footer.navigation = '0'">
      <div class="navfooter">
        <xsl:if test="$footer.rule != 0">
          <hr/>
        </xsl:if>

        <xsl:if test="$row1">
          <table width="100%" summary="Navigation footer">
            <xsl:if test="$row1">
              <tr>
                <td width="40%" align="{$direction.align.start}">
                  <xsl:if test="count($prev)&gt;0">
                    <a accesskey="p">
                      <xsl:attribute name="href">
                        <xsl:call-template name="href.target">
                          <xsl:with-param name="object" select="$prev"/>
                        </xsl:call-template>
                      </xsl:attribute>
                      &#x00AB; <xsl:apply-templates select="$prev" mode="object.title.markup"/>
                    </a>
                  </xsl:if>
                  <xsl:text>&#160;</xsl:text>
                </td>
                <td width="20%" align="center">
                  <xsl:choose>
                    <xsl:when test="$home != . or $nav.context = 'toc'">
                      <a accesskey="h">
                        <xsl:attribute name="href">
                          <xsl:call-template name="href.target">
                            <xsl:with-param name="object" select="$home"/>
                          </xsl:call-template>
                        </xsl:attribute>
                        <xsl:call-template name="navig.content">
                          <xsl:with-param name="direction" select="'home'"/>
                        </xsl:call-template>
                      </a>
                      <xsl:if test="$chunk.tocs.and.lots != 0 and $nav.context != 'toc'">
                        <xsl:text>&#160;|&#160;</xsl:text>
                      </xsl:if>
                    </xsl:when>
                    <xsl:otherwise>&#160;</xsl:otherwise>
                  </xsl:choose>

                  <xsl:if test="$chunk.tocs.and.lots != 0 and $nav.context != 'toc'">
                    <a accesskey="t">
                      <xsl:attribute name="href">
                        <xsl:apply-templates select="/*[1]" mode="recursive-chunk-filename">
                          <xsl:with-param name="recursive" select="true()"/>
                        </xsl:apply-templates>
                        <xsl:text>-toc</xsl:text>
                        <xsl:value-of select="$html.ext"/>
                      </xsl:attribute>
                      <xsl:call-template name="gentext">
                        <xsl:with-param name="key" select="'nav-toc'"/>
                      </xsl:call-template>
                    </a>
                  </xsl:if>
                </td>
                <td width="40%" align="{$direction.align.end}">
                  <xsl:text>&#160;</xsl:text>
                  <xsl:if test="count($next)&gt;0">
                    <a accesskey="n">
                      <xsl:attribute name="href">
                        <xsl:call-template name="href.target">
                          <xsl:with-param name="object" select="$next"/>
                        </xsl:call-template>
                      </xsl:attribute>
                      <xsl:apply-templates select="$next" mode="object.title.markup"/> &#x00BB;
                    </a>
                  </xsl:if>
                </td>
              </tr>
            </xsl:if>
          </table>
        </xsl:if>
      </div>
    </xsl:if>
  </xsl:template>
  
  <xsl:template match="authorgroup" mode="titlepage.mode">
  </xsl:template>
  
  <xsl:template match="copyright" mode="titlepage.mode">
  </xsl:template>
  
</xsl:stylesheet>