<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="text" indent="no"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="type"/>
	<xsl:template match="p"/>

	<xsl:template match="section">
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="emulators">
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="contents_page">
[info]
HomePage=www.romcenter.com
RomType=arcade
email=support@romcenter.com

// Status ; title(*) ; version(*) ; nb of games ; author ; author link; comment ; release date ; url(*)
//(*) are mandatory
[datafiles]

		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="emulator">
		<xsl:choose><xsl:when test="status = 'Updated'">updated</xsl:when><xsl:when test="status = 'New'">new</xsl:when></xsl:choose>;<xsl:value-of select="name"/>;<xsl:value-of select="version"/>;<xsl:value-of select="games"/>;<xsl:value-of select="author"/>;<xsl:if test="author/@href != ''"><xsl:value-of select="author/@href"/></xsl:if>;;<xsl:value-of select="date"/>;http://www.logiqx.com/Dats/<xsl:value-of select="@id"/>/<xsl:value-of select="dats/dat[2]/file/@name"/>
	</xsl:template>
</xsl:stylesheet>
