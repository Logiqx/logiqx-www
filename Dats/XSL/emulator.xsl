<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="html" indent="yes"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="author"/>

	<xsl:template match="img">
		<p>
			<img>
				<xsl:attribute name="src">
					<xsl:value-of select="@src"/>
				</xsl:attribute>
				<xsl:attribute name="width">
					<xsl:value-of select="@width"/>
				</xsl:attribute>
				<xsl:attribute name="height">
					<xsl:value-of select="@height"/>
				</xsl:attribute>
			</img>
		</p>
	</xsl:template>

	<xsl:template match="name">
		<p>
			<xsl:value-of select="../games"/><xsl:text> games for </xsl:text>
			<xsl:value-of select="."/><xsl:text> </xsl:text>
			<xsl:value-of select="../version"/>
			<xsl:if test="../suitability != ''">
				<br/>
				<xsl:text>(suitable for </xsl:text>
				<xsl:value-of select="../suitability"/>
				<xsl:text>)</xsl:text>
			</xsl:if>
		</p>
	</xsl:template>

	<xsl:template match="version"/>
	<xsl:template match="suitability"/>
	<xsl:template match="status"/>
	<xsl:template match="date"/>
	<xsl:template match="games"/>

	<xsl:template match="dats">
		<table border="0" width="100%">
			<tr>
				<xsl:apply-templates/>
			</tr>
		</table>
	</xsl:template>

	<xsl:template match="dat">
		<td width="50%" align="center">
			<p>
				<xsl:text>Download </xsl:text>
				<a><xsl:attribute name="href"><xsl:value-of select="file/@name"/></xsl:attribute><xsl:value-of select="../../name"/><xsl:text> dat for </xsl:text><xsl:value-of select="dat_type/."/></a>
				<xsl:text> (</xsl:text>
				<xsl:value-of select="file/@size"/>
				<xsl:text>KB)</xsl:text>
			</p>

			<p>
				<a><xsl:attribute name="href"><xsl:value-of select="file/@name"/></xsl:attribute><img src="../../Resources/Disk.gif" border="0" width="38" height="38"/></a>
			</p>
		</td>
	</xsl:template>

	<xsl:template match="revisions">
		<hr/>

		<p><img src="../../Resources/History.gif" width="85" height="40"/></p>

		<xsl:for-each select="revision">
			<p>
				<strong><u><xsl:value-of select="date"/></u></strong>
				<xsl:text> - </xsl:text>
				<xsl:apply-templates/>
			</p>
		</xsl:for-each>
	</xsl:template>

	<xsl:template match="emulator">
		<html>
			<head>
				<title>
					<xsl:value-of select="name"/><xsl:text> </xsl:text><xsl:value-of select="version"/>
				</title>
			</head>
			<body>
				<center>

					<xsl:comment>#include virtual="/ads/top.shtml"</xsl:comment>

					<hr/>

					<xsl:apply-templates/>

				</center>
			</body>
		</html>
	</xsl:template>

</xsl:stylesheet>
