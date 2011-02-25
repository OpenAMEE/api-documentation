<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- xsl:import href="http://docbook.sourceforge.net/release/xsl/current/html/docbook.xsl"/ -->
  <xsl:import href="xsl/html/docbook.xsl"/>

  <xsl:include href="base-html-stylesheet.xsl"/>

  <xsl:output method="html" encoding="utf-8" indent="yes"/>

  <!-- PARAMETER REFERENCE:                                         -->
  <!-- http://docbook.sourceforge.net/release/xsl/current/doc/html/ -->

  <!-- Uncomment this to enable auto-numbering of sections -->
  <!-- xsl:param name="section.autolabel" select="1" / -->

  <xsl:template name='user.header.content'>
    <xsl:call-template name='amee.header'/>
  </xsl:template>

  <xsl:template name='user.footer.content'>
    <xsl:call-template name='amee.footer'/>
  </xsl:template>

  <xsl:param name="generate.toc">
  appendix  toc,title
  article/appendix  nop
  article   toc,title
  book      toc,title,figure,example,equation
  chapter   toc,title
  part      toc,title
  preface   toc,title
  qandadiv  toc
  qandaset  toc
  reference toc,title
  sect1     toc
  sect2     toc
  sect3     toc
  sect4     toc
  sect5     toc
  section   toc
  set       toc,title
  </xsl:param>
  
</xsl:stylesheet>
