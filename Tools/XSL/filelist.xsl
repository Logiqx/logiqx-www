<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	<xsl:output method="text" indent="no"/>

<xsl:template match="/">
	<xsl:for-each select="contents_page/section/tools/tool/downloads/download">
./<xsl:value-of select="../../@id"/>/<xsl:value-of select="file/@name"/>,<xsl:value-of select="file/@size"/>
</xsl:for-each>
</xsl:template>

</xsl:stylesheet>
