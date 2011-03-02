<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <xsl:param name="use.extensions">1</xsl:param>
  <xsl:param name="callouts.extension">1</xsl:param>
  <xsl:param name="linenumbering.extension">1</xsl:param>
  <xsl:param name="tablecolumns.extension">1</xsl:param>
  <xsl:param name="textinsert.extension">1</xsl:param>

  <xsl:param name="html.stylesheet">styles.css</xsl:param>  
  <xsl:param name="toc.section.depth">2</xsl:param>
  <xsl:param name="annotate.toc">0</xsl:param>

  <xsl:param name="admon.graphics" select="1" />
  <xsl:param name="admon.graphics.extension">.png</xsl:param>
  <xsl:param name="callout.graphics" select="1" />
  <xsl:param name="callout.graphics.extension">.png</xsl:param>

  <xsl:param name="section.autolabel">1</xsl:param>
  <xsl:param name="section.label.includes.component.label">1</xsl:param>

  <xsl:param name="bibliography.numbered">1</xsl:param>

  <xsl:param name="para.propagates.style">1</xsl:param>

  <xsl:template name='user.head.content'>
    <script type="text/javascript" src="syntax/shCore.js"></script>
    <script type="text/javascript" src="syntax/shBrushJScript.js"></script>
    <script type="text/javascript" src="syntax/shBrushXml.js"></script>
    <script type="text/javascript" src="syntax/shBrushPlain.js"></script>
    <script type="text/javascript" src='script/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='script/tabs.js'></script>
    <link href="http://explorer.amee.com/stylesheets/main.css" rel="stylesheet" type="text/css" />
    <link href="syntax/shCore.css" rel="stylesheet" type="text/css" />
    <link href="syntax/shThemeDefault.css" rel="stylesheet" type="text/css" />
  </xsl:template>
  
  <xsl:template name='amee.header'>
    <div id="header">
      <div id="multisitenav">
        <div id="menu">
          <ul>
            <li><img height="12" width="1" src="http://www2.amee.com/wp-content/themes/amee2/images/sitedivider.gif" alt="|"/></li>
            <li class="menuitem"><a href="http://www.amee.com">About AMEE</a></li>
            <li><img height="12" width="1" src="http://www2.amee.com/wp-content/themes/amee2/images/sitedivider.gif" alt="|"/></li>
            <li class="menuitem"><a href="http://explorer.amee.com">AMEE <span class="explorer">explorer</span></a></li>
            <li><img height="12" width="1" src="http://www2.amee.com/wp-content/themes/amee2/images/sitedivider.gif" alt="|"/></li>
            <li class="menuitem"><a class='currentsite' href="http://my.amee.com/developers">Developer Center</a></li>
            <li><img height="12" width="1" src="http://www2.amee.com/wp-content/themes/amee2/images/sitedivider.gif" alt="|"/></li>
            <li class="menuitem">
              <a href="/login">My Account</a>
            </li>
          </ul>
        </div>
        <div class="clear"></div>
      </div>
      <div id="sitenav">
        <div class="header_right">
          <div class="searchform">
            <form method="post" action="http://explorer.amee.com/search">
              <input type="text" value="" size="30" name="search[query]" id="header_search_input"/>
              <input type="submit" value="Search" name="commit" id="header_search_submit_button"/>
            </form>
          </div>
          <div class="clear"></div>
        </div>
        <a href="/"><div id="mainlogo"></div></a>
        <div class="clear"></div>
      </div>
    </div>
  </xsl:template>

  <xsl:template name='amee.footer'>
    <div id="footer-wrap">
      <div id="footer">
        <div id="footer-logo"></div>
        <a href="/help">Help</a>
        |
        <a href="http://www.amee.com/about">About</a>
        |
        <a href="http://www.amee.com/tcs">Terms &amp; Conditions</a>
        |
        <a href="http://www.amee.com/contact">Contact</a>
        <br/>
        <xsl:apply-templates select="//copyright[1]" mode="titlepage.mode"/>
        <div class="clear"></div>
      </div>
    </div>
    <script type="text/javascript">
      SyntaxHighlighter.defaults['auto-links'] = false;
      SyntaxHighlighter.all()
    </script>
  </xsl:template>

  <xsl:template match="sect1" mode="toc">
    <xsl:param name="toc-context" select="."/>
    <xsl:call-template name="subtoc">
      <xsl:with-param name="toc-context" select="$toc-context"/>
      <xsl:with-param name="nodes"
        select="sect2|refentry|bridgehead[$bridgehead.in.toc != 0]"/>
    </xsl:call-template>
  </xsl:template>

  <xsl:template match="sect2" mode="toc">
    <xsl:param name="toc-context" select="."/>

    <xsl:call-template name="subtoc">
      <xsl:with-param name="toc-context" select="$toc-context"/>
      <xsl:with-param name="nodes"
        select="sect3|refentry|bridgehead[$bridgehead.in.toc != 0]"/>
    </xsl:call-template>
  </xsl:template>

  <xsl:template match="section[@role='tabbed']">
    <ul class='tabs'>
      <xsl:for-each select="section[@role='tab']">
        <li>
          <xsl:choose>
            <xsl:when test='position() = 1'>
              <xsl:attribute name='class'>active <xsl:value-of select='title'/></xsl:attribute>
            </xsl:when>
            <xsl:otherwise>
              <xsl:attribute name='class'><xsl:value-of select='title'/></xsl:attribute>
            </xsl:otherwise>
          </xsl:choose>
          <a href='javascript:;'>
            <xsl:attribute name='onClick'>changeTab('<xsl:value-of select='title'/>'); return false;</xsl:attribute>
            <xsl:value-of select='title'/>
          </a>
        </li>
      </xsl:for-each>
    </ul>
    <div class='tab-bodies'>
      <xsl:for-each select="section[@role='tab']">
        <div>
          <xsl:attribute name='class'>tab-body <xsl:value-of select='title'/></xsl:attribute>
          <xsl:if test='position() != 1'>
            <xsl:attribute name='style'>display:none</xsl:attribute>
          </xsl:if>
          <xsl:apply-templates/>
        </div>
      </xsl:for-each>
    </div>
  </xsl:template>

  <xsl:template match="section[@role='httprequest']">
    <h4>Request</h4>
    <xsl:apply-templates/>    
    <hr/>
  </xsl:template>

  <xsl:template match="section[@role='httprequest']/programlisting[@role='header']">
    <script type="syntaxhighlighter" class="brush: plain" title="Header">
      <xsl:text disable-output-escaping="yes"><![CDATA[<![CDATA[]]></xsl:text>
      <xsl:apply-templates/>
      <xsl:text disable-output-escaping="yes"><![CDATA[]]]]><![CDATA[>]]></xsl:text></script>
    <noscript><pre class='programlisting'><xsl:apply-templates/></pre></noscript>
  </xsl:template>

  <xsl:template match="section[@role='httprequest']/programlisting[@role='body']">
    <script type="syntaxhighlighter" class="brush: plain" title="Body">
      <xsl:text disable-output-escaping="yes"><![CDATA[<![CDATA[]]></xsl:text>
      <xsl:apply-templates/>
      <xsl:text disable-output-escaping="yes"><![CDATA[]]]]><![CDATA[>]]></xsl:text></script>
    <noscript><pre class='programlisting'><xsl:apply-templates/></pre></noscript>
  </xsl:template>

  <xsl:template match="section[@role='httpresponse']">
    <h4>Response</h4>
    <xsl:apply-templates/>    
  </xsl:template>

  <xsl:template match="section[@role='httpresponse']/programlisting[@role='header']">
    <script type="syntaxhighlighter" class="brush: plain" title="Header">
      <xsl:text disable-output-escaping="yes"><![CDATA[<![CDATA[]]></xsl:text>
      <xsl:apply-templates/>
      <xsl:text disable-output-escaping="yes"><![CDATA[]]]]><![CDATA[>]]></xsl:text></script>
    <noscript><pre class='programlisting'><xsl:apply-templates/></pre></noscript>
  </xsl:template>

  <xsl:template match="programlisting[@role='json-body']">
    <script type="syntaxhighlighter" class="brush: js" title="Body">
      <xsl:text disable-output-escaping="yes"><![CDATA[<![CDATA[]]></xsl:text>
      <xsl:apply-templates/>
      <xsl:text disable-output-escaping="yes"><![CDATA[]]]]><![CDATA[>]]></xsl:text></script>
    <noscript><pre class='programlisting'><xsl:apply-templates/></pre></noscript>
  </xsl:template>

  <xsl:template match="programlisting[@role='xml-body']">
    <script type="syntaxhighlighter" class="brush: xml" title="Body">
      <xsl:text disable-output-escaping="yes"><![CDATA[<![CDATA[]]></xsl:text>
      <xsl:apply-templates/>
      <xsl:text disable-output-escaping="yes"><![CDATA[]]]]><![CDATA[>]]></xsl:text></script>
    <noscript><pre class='programlisting'><xsl:apply-templates/></pre></noscript>
  </xsl:template>

  <xsl:template match="biblioentry|bibliomixed" mode="xref-to-prefix">
    <span class='biblioref'>[</span>
  </xsl:template>

  <xsl:template match="biblioentry|bibliomixed" mode="xref-to-suffix">
    <span class='biblioref'>]</span>
  </xsl:template>

</xsl:stylesheet>