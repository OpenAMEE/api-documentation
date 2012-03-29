<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version='1.0'>

  <!-- xsl:import href="http://docbook.sourceforge.net/release/xsl/current/fo/docbook.xsl"/ -->
  <xsl:import href="xsl/fo/docbook.xsl"/>
  <xsl:import href="xsl/highlighting/common.xsl"/>
  <xsl:import href="xsl/fo/highlight.xsl"/>

  <!-- PARAMETER REFERENCE:                                       -->
  <!-- http://docbook.sourceforge.net/release/xsl/current/doc/fo/ -->

  <!-- Move to FO_XSLTPROC_OPTS for support fop1 and xep, etc.
  <xsl:param name="fop1.extensions" select="1" />
  -->

  <!-- xsltproc can't support these extensions
  <xsl:param name="use.extensions">1</xsl:param>
  <xsl:param name="callouts.extension">1</xsl:param>
  <xsl:param name="linenumbering.extension">1</xsl:param>
  <xsl:param name="tablecolumns.extension">1</xsl:param>
  <xsl:param name="textinsert.extension">1</xsl:param>
  -->

  <!-- Page related Settings -->
  <xsl:param name="page.margin.inner">1.5cm</xsl:param>
  <xsl:param name="page.margin.outer">1.5cm</xsl:param>
  <xsl:param name="title.margin.left">0pt</xsl:param>
  <xsl:param name="body.start.indent">0pt</xsl:param>
  <xsl:param name="body.end.indent">0pt</xsl:param>

  <!-- Custom font settings -->
  <xsl:param name="title.font.family">sans-serif,SimHei</xsl:param>
  <xsl:param name="body.font.family">serif,SimSun</xsl:param>
  <xsl:param name="sans.font.family">sans-serif,SimHei</xsl:param>
  <xsl:param name="dingbat.font.family">serif,SimSun</xsl:param>
  <xsl:param name="monospace.font.family">monospace,FangSong,SimSun</xsl:param>

  <!-- Admonitions and callouts settings -->
  <xsl:param name="admon.textlabel" select="0" />
  <xsl:param name="admon.graphics" select="1" />
  <xsl:param name="admon.graphics.path">images/</xsl:param>
  <xsl:param name="admon.graphics.extension">.png</xsl:param>
  <xsl:param name="callout.graphics" select="1" />
  <xsl:param name="callout.graphics.extension">.png</xsl:param>

  <xsl:param name="variablelist.as.blocks" select="1" />

  <!-- Uncomment this to enable auto-numbering of sections -->
  <!-- xsl:param name="section.autolabel" select="1" / -->

  <!-- Breaking long lines -->
  <xsl:param name="hyphenate.verbatim">0</xsl:param>
  <xsl:attribute-set name="monospace.verbatim.properties"
                     use-attribute-sets="verbatim.properties monospace.properties">
    <xsl:attribute name="wrap-option">wrap</xsl:attribute>
    <xsl:attribute name="hyphenation-character">&#x25BA;</xsl:attribute>
  </xsl:attribute-set>

  <!-- Colourize links in output -->
  <xsl:attribute-set name="xref.properties">
    <xsl:attribute name="color">
      <xsl:choose>
        <xsl:when test="self::ulink">blue</xsl:when>
        <xsl:when test="self::xref">blue</xsl:when>
        <xsl:when test="self::uri">blue</xsl:when>
        <xsl:otherwise>red</xsl:otherwise>
      </xsl:choose>
    </xsl:attribute>
  </xsl:attribute-set>

  <xsl:attribute-set name="sidebar.properties" use-attribute-sets="formal.object.properties">
    <xsl:attribute name="border-style">solid</xsl:attribute>
    <xsl:attribute name="border-width">.1mm</xsl:attribute>
    <xsl:attribute name="background-color">#EEEEEE</xsl:attribute>
  </xsl:attribute-set>

</xsl:stylesheet>
