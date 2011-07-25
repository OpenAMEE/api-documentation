<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- xsl:import href="http://docbook.sourceforge.net/release/xsl/current/html/chunk.xsl"/ -->
  <xsl:import href="xsl/html/chunk.xsl"/>

  <xsl:include href="base-html-stylesheet.xsl"/>

  <!-- PARAMETER REFERENCE:                                         -->
  <!-- http://docbook.sourceforge.net/release/xsl/current/doc/html/ -->

  <xsl:param name="chunker.output.encoding" select="'utf-8'"/>
  <xsl:param name="html.ext">.php</xsl:param>
  <xsl:param name="chunker.output.indent" select="'yes'"/>
  <xsl:param name="chunk.section.depth">1</xsl:param>

  <xsl:param name="use.id.as.filename">1</xsl:param>
  <xsl:param name="chunk.first.sections">1</xsl:param>
  <xsl:param name="chunk.quietly" select="1"></xsl:param>

  <xsl:param name="wordpress.dir">..</xsl:param>

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
      class MyPost { var $post_title = "<xsl:apply-templates select="$doc" mode="object.title.markup.textonly"/>"; }
      $wp_query->is_home = false;
      $wp_query->is_page = true;
      $wp_query->is_404 = false;
      $wp_query->queried_object = new MyPost();
      get_header();
    <xsl:text>?</xsl:text></xsl:processing-instruction>

    <script type="text/javascript" src="syntax/shCore.js"></script>
    <script type="text/javascript" src="syntax/shBrushJScript.js"></script>
    <script type="text/javascript" src="syntax/shBrushXml.js"></script>
    <script type="text/javascript" src="syntax/shBrushRuby.js"></script>
    <script type="text/javascript" src="syntax/shBrushPlain.js"></script>
    <script type="text/javascript" src='script/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='script/tabs.js'></script>
    <link href="syntax/shCore.css" rel="stylesheet" type="text/css" />
    <link href="syntax/shThemeDefault.css" rel="stylesheet" type="text/css" />
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
          <xsl:call-template name="user.header.navigation"/>

          <xsl:call-template name="header.navigation">
            <xsl:with-param name="prev" select="$prev"/>
            <xsl:with-param name="next" select="$next"/>
            <xsl:with-param name="nav.context" select="$nav.context"/>
          </xsl:call-template>

          <xsl:call-template name="user.header.content"/>
    
          <div id="content" class="narrowcolumn" role="main">
            <xsl:copy-of select="$content"/>
          </div>

          <xsl:call-template name="user.footer.content"/>

          <xsl:call-template name="footer.navigation">
            <xsl:with-param name="prev" select="$prev"/>
            <xsl:with-param name="next" select="$next"/>
            <xsl:with-param name="nav.context" select="$nav.context"/>
          </xsl:call-template>

          <xsl:call-template name="user.footer.navigation"/>

        </div>
      </div>
    </div>
    <div class="vertwidgets">
      <xsl:processing-instruction name="php">
        include (TEMPLATEPATH . '/sidebar-right.php');
      <xsl:text>?</xsl:text></xsl:processing-instruction>
    </div>

    <xsl:processing-instruction name="php">
      include (TEMPLATEPATH . '/footer_dev.php');
    <xsl:text>?</xsl:text></xsl:processing-instruction>

    <xsl:value-of select="$chunk.append"/>
  </xsl:template>
  
</xsl:stylesheet>