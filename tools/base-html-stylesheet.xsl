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

  <xsl:template match="section[@role='tabbed']">
    <script type="text/javascript" src='script/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='script/tabs.js'></script>
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

</xsl:stylesheet>