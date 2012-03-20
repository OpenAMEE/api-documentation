<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <xsl:import href="xsl/xhtml/highlight.xsl"/>
  <xsl:import href="extensions/cc.xsl"/>

  <xsl:param name="generate.toc">
      appendix  toc
      article/appendix  nop
      article   toc,title
      book      toc,title
      chapter   toc
      part      toc,title
      preface   toc,title
      qandadiv  toc
      qandaset  toc
      reference toc
      sect1     toc
      sect2     toc
      sect3     toc
      sect4     toc
      sect5     toc
      section   toc
      set       toc,title
  </xsl:param>  
  
  <xsl:param name="use.extensions">1</xsl:param>
  <xsl:param name="callouts.extension">1</xsl:param>
  <xsl:param name="linenumbering.extension">1</xsl:param>
  <xsl:param name="tablecolumns.extension">1</xsl:param>
  <xsl:param name="textinsert.extension">1</xsl:param>

  <xsl:param name="html.stylesheet">styles.css</xsl:param>  
  <xsl:param name="annotate.toc">0</xsl:param>

  <xsl:param name="highlight.source" select="1"/>

  <xsl:param name="admon.graphics" select="1" />
  <xsl:param name="admon.graphics.extension">.png</xsl:param>
  <xsl:param name="callout.graphics" select="1" />
  <xsl:param name="callout.graphics.extension">.png</xsl:param>

  <xsl:param name="bibliography.numbered">1</xsl:param>

  <xsl:param name="para.propagates.style">1</xsl:param>

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

  <xsl:template match="section[@role='tabbed']" mode='toc'/>

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
          <div class="greyBoxTwoThirdsPageHeader">
            .
          </div>
          <div>
            <xsl:attribute name='class'>greyBoxTwoThirdsPageContent</xsl:attribute>
            <xsl:apply-templates/>
          </div>
          <div class="greyBoxTwoThirdsPageFooter">
            .
          </div>
        </div>
      </xsl:for-each>
    </div>
  </xsl:template>

  <xsl:template match="section[@role='httprequest']">
    <h4>Request</h4>
    <xsl:apply-templates/>    
  </xsl:template>

  <xsl:template match="section[@role='httpresponse']">
    <hr/>
    <h4>Response</h4>
    <xsl:apply-templates/>    
  </xsl:template>
  
  <xsl:template name="user.footer.navigation">
    &#169; Copyright 2007-2012 AMEE UK Ltd.
    <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>.
  </xsl:template>
  
  <xsl:template match="biblioentry|bibliomixed" mode="xref-to-prefix">
    <span class='biblioref'>[</span>
  </xsl:template>

  <xsl:template match="biblioentry|bibliomixed" mode="xref-to-suffix">
    <span class='biblioref'>]</span>
  </xsl:template>

</xsl:stylesheet>