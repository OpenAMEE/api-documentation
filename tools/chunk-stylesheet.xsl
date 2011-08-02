<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- xsl:import href="http://docbook.sourceforge.net/release/xsl/current/html/chunk.xsl"/ -->
  <xsl:import href="xsl/html/chunk.xsl"/>

  <xsl:include href="base-html-stylesheet.xsl"/>

  <!-- PARAMETER REFERENCE:                                         -->
  <!-- http://docbook.sourceforge.net/release/xsl/current/doc/html/ -->

  <xsl:param name="section.autolabel">1</xsl:param>
  <xsl:param name="section.label.includes.component.label">1</xsl:param>
  <xsl:param name="toc.section.depth">2</xsl:param>

  <xsl:param name="chunker.output.encoding" select="'utf-8'"/>
  <xsl:param name="chunker.output.indent" select="'yes'"/>
  <xsl:param name="chunk.section.depth">1</xsl:param>

  <xsl:param name="use.id.as.filename">1</xsl:param>
  <xsl:param name="chunk.first.sections">1</xsl:param>
  <xsl:param name="chunk.quietly" select="1"></xsl:param>

  <xsl:template name='header.navigation'>
  </xsl:template>

  <xsl:template name='user.head.content'>
    <xsl:call-template name='amee.head.content'/>
  </xsl:template>

  <xsl:template name='user.header.navigation'>
    <xsl:call-template name='amee.header'/>
  </xsl:template>

  <xsl:template name='user.footer.navigation'>
    <xsl:call-template name='amee.footer'/>
  </xsl:template>

</xsl:stylesheet>
