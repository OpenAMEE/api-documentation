<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- xsl:import href="http://docbook.sourceforge.net/release/xsl/current/html/docbook.xsl"/ -->
  <xsl:import href="xsl/html/docbook.xsl"/>

  <xsl:include href="base-html-stylesheet.xsl"/>

  <xsl:output method="html" encoding="utf-8" indent="yes"/>

  <!-- PARAMETER REFERENCE:                                         -->
  <!-- http://docbook.sourceforge.net/release/xsl/current/doc/html/ -->

  <!-- Uncomment this to enable auto-numbering of sections -->
  <!-- xsl:param name="section.autolabel" select="1" / -->

  <xsl:param name="section.autolabel">1</xsl:param>
  <xsl:param name="section.label.includes.component.label">1</xsl:param>
  <xsl:param name="toc.section.depth">2</xsl:param>

  <xsl:template name='user.head.content'>
    <script type="text/javascript" src='script/jquery-1.5.min.js'></script>
    <script type="text/javascript" src='script/tabs.js'></script>
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
