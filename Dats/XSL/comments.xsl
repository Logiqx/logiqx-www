<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	<xsl:template match="comment">
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="p">
		<p>
			<xsl:apply-templates/>
		</p>
	</xsl:template>

	<xsl:template match="u">
		<u>
			<xsl:apply-templates/>
		</u>
	</xsl:template>

	<xsl:template match="ul">
		<ul>
			<xsl:apply-templates/>
		</ul>
	</xsl:template>

	<xsl:template match="li">
		<li>
			<xsl:apply-templates/>
		</li>
	</xsl:template>

	<xsl:template match="a">
		<a><xsl:attribute name="href"><xsl:value-of select="@href"/></xsl:attribute><xsl:value-of select="."/></a>
	</xsl:template>

	<xsl:template match="br">
		<br/>
	</xsl:template>

</xsl:stylesheet>
