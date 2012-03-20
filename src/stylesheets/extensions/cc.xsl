<?xml version="1.0" encoding="utf-8"?>

<!--  Creative Commons license XSL from http://article.tree.se/tools/docbook/cc.en.html -->

<xsl:stylesheet exclude-result-prefixes="d"
		xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
		xmlns:d="http://docbook.org/ns/docbook"
		xmlns:xlink="http://www.w3.org/1999/xlink"
		version='1.0'>

<xsl:template match="d:copyright" mode="titlepage.mode">
  <xsl:apply-templates select="."/>
</xsl:template>

<xsl:template match="d:copyright">
  <xsl:if test="generate-id() = generate-id(//d:refentryinfo/d:copyright[1])       and ($stylesheet.result.type = 'html' or $stylesheet.result.type = 'xhtml')">
    <h2>Copyright</h2>
  </xsl:if>
  <p>
    <xsl:apply-templates select="." mode="common.html.attributes"/>
    <xsl:call-template name="gentext">
      <xsl:with-param name="key" select="'Copyright'"/>
    </xsl:call-template>
    <xsl:call-template name="gentext.space"/>
    <xsl:call-template name="dingbat">
      <xsl:with-param name="dingbat">copyright</xsl:with-param>
    </xsl:call-template>
    <xsl:call-template name="gentext.space"/>
    <xsl:call-template name="copyright.years">
      <xsl:with-param name="years" select="d:year"/>
      <xsl:with-param name="print.ranges" select="$make.year.ranges"/>
      <xsl:with-param name="single.year.ranges" select="$make.single.year.ranges"/>
    </xsl:call-template>
    <xsl:call-template name="gentext.space"/>
    <xsl:apply-templates select="d:license" mode="image.mode"/>
    <xsl:variable name="type">
      <xsl:choose>
	<xsl:when test="ancestor::d:imageobject">StillImage</xsl:when>
	<xsl:when test="ancestor::d:videoobject">MovingImage</xsl:when>
	<xsl:when test="ancestor::d:audioobject">Sound</xsl:when>
	<xsl:otherwise>Text</xsl:otherwise>
      </xsl:choose>
    </xsl:variable>
    <span xmlns:dct="http://purl.org/dc/terms/"
      href="http://purl.org/dc/dcmitype/{$type}"
      property="dct:title" rel="dct:type">
      <xsl:choose>
	<xsl:when test="../d:title">
	  "<xsl:value-of select="../d:title"/>"
	</xsl:when>
	<xsl:otherwise>
	  This work
	</xsl:otherwise>
      </xsl:choose>
    </span>
    <xsl:apply-templates select="d:holder"/>
    <xsl:apply-templates select="d:license" mode="text.mode"/>
  </p>
</xsl:template>

<xsl:template match="d:holder">
  <xsl:if test="position() = 1">
    <xsl:text> by </xsl:text>
  </xsl:if>
  <xsl:choose>
    <xsl:when test="@xlink:href">
      <a xmlns:cc="http://creativecommons.org/ns#"
	 href="{@xlink:href}"
	 property="cc:attributionName"
	 rel="cc:attributionURL"><xsl:apply-templates /></a>
    </xsl:when>
    <xsl:otherwise>
      <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName"><xsl:apply-templates /></span>
    </xsl:otherwise>
  </xsl:choose>
  <xsl:if test="position() &lt; last()">
    <xsl:text>, </xsl:text>
  </xsl:if>
</xsl:template>

<xsl:template match="d:license" mode="image.mode">
  <xsl:choose>
    <xsl:when test="@type = 'cc0'">
      CC0 Licence
    </xsl:when>
    <xsl:when test="@type = 'pd'">
      Public Domain Licence
    </xsl:when>
    <xsl:when test="substring(@type,1,2) = 'cc'">
    <xsl:variable name="cctype">
      <xsl:value-of select="substring-after(@type,' ')" />
    </xsl:variable>
    <xsl:variable name="ccver">
      <xsl:value-of select="@v" />
    </xsl:variable>
      <a rel="license" href="http://creativecommons.org/licenses/{$cctype}/{$ccver}/">
      <xsl:variable name="size">
      <xsl:choose>
	<xsl:when test="ancestor::d:imageobject | ancestor::d:videoobject | ancestor::d:audioobject">80x15</xsl:when>
	<xsl:otherwise>88x31</xsl:otherwise>
      </xsl:choose>
      </xsl:variable>
	<img alt="Creative Commons License"
	     style="border-width:0"
	     src="http://i.creativecommons.org/l/{$cctype}/{$ccver}/{$size}.png" />
	</a>
    </xsl:when>
    <xsl:otherwise>
      <a rel="license" href="{@xlink:href}">
      <img alt="Commercial License"
	   style="border-width:0"
	   src="http://wiki.creativecommons.org/images/9/91/Commercial-license-button.png" />
      </a>
    </xsl:otherwise>
  </xsl:choose>
  <xsl:if test="position() &lt; last()">
    <xsl:text> + </xsl:text>
  </xsl:if>
  <xsl:if test="position() = last()">
    <br />
  </xsl:if>
</xsl:template>

<xsl:template match="d:license" mode="text.mode">
  <xsl:text> is licensed under </xsl:text>
  <xsl:choose>
    <xsl:when test="@type = 'cc0'">
      CC0 Licence
    </xsl:when>
    <xsl:when test="@type = 'pd'">
      Public Domain Licence
    </xsl:when>
    <xsl:when test="substring(@type,1,2) = 'cc'">
    <xsl:variable name="cctype">
      <xsl:value-of select="substring-after(@type,' ')" />
    </xsl:variable>
    <xsl:variable name="ccver">
      <xsl:value-of select="@v" />
    </xsl:variable>
    <xsl:variable name="ccjur">
      <xsl:value-of select="@jurisdiction" />
    </xsl:variable>
    a <a rel="license" href="http://creativecommons.org/licenses/{$cctype}/{$ccver}/{$ccjur}/">
    <!-- The text for the language used could be looked up in this table -->
    <!-- http://code.creativecommons.org/viewgit/license.rdf.git/plain/xml/questions.xml -->
    <!-- or even better, the rdf name -->
    <!-- http://code.creativecommons.org/viewgit/license.rdf.git/tree/cc/licenserdf/licenses -->
    Creative Commons
    <xsl:copy-of select="$cctype"/>
    <xsl:text> </xsl:text>
    <xsl:copy-of select="$ccver"/>
    <xsl:text> </xsl:text>
    <xsl:copy-of select="$ccjur"/>
    License</a>.<br />
    </xsl:when>
    <xsl:otherwise>
      <a rel="license" href="@xlink:href"><xsl:apply-templates /></a>
      <br />
    </xsl:otherwise>
  </xsl:choose>
  <xsl:if test="position() &lt; last()">
    <xsl:text> and </xsl:text>
  </xsl:if>
</xsl:template>

<xsl:template match="d:imageobject">
  <xsl:apply-templates select="d:imagedata"/>
  <xsl:apply-templates select="d:info/d:copyright"/>
</xsl:template>

</xsl:stylesheet>

<!--
Based on a work at
<a xmlns:dct="http://purl.org/dc/terms/" href="[URL]" rel="dct:source">[URL]</a>.<br />

Permissions beyond the scope of this license may be available at
<a xmlns:cc="http://creativecommons.org/ns#" href="[ExtraLicence]" rel="cc:morePermissions">[ExtraLicence]</a>.
-->
