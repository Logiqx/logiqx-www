<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="html" indent="yes"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="type"/>

	<xsl:template match="section">
		<hr/>
		<p>
			<img>
				<xsl:attribute name="src"><xsl:value-of select="img/@src"/></xsl:attribute>
				<xsl:attribute name="width"><xsl:value-of select="img/@width"/></xsl:attribute>
				<xsl:attribute name="height"><xsl:value-of select="img/@height"/></xsl:attribute>
			</img>
		</p>
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="emulators">
		<table border="0" width="100%" bgcolor="#ECF5FF">
			<tr>
				<td><strong><xsl:value-of select="../type"/></strong></td>
				<td align="center" width="110"></td>
				<td align="center" width="110"><strong>Dat Updated</strong></td>
				<td align="center" width="110"><strong>Games</strong></td>
			</tr>

			<xsl:apply-templates/>
		</table>
	</xsl:template>

	<xsl:template match="emulator">
		<tr>
			<td>
				<a><xsl:attribute name="href"><xsl:value-of select="@id"/>/<xsl:value-of select="@id"/>.shtml</xsl:attribute><xsl:value-of select="name"/><xsl:text> </xsl:text><xsl:value-of select="version"/></a>
				<xsl:if test="suitability != ''">
					<xsl:text> (suitable for </xsl:text>
					<xsl:value-of select="suitability"/>
					<xsl:text>)</xsl:text>
				</xsl:if>
			</td>
			<td align="center">
				<xsl:choose>
					<xsl:when test="status = 'Updated'">
						<img src="../Resources/Updated.gif" width="73" height="14"/>
					</xsl:when>
					<xsl:when test="status = 'New'">
						<img src="../Resources/New.gif" width="53" height="14"/>
					</xsl:when>
				</xsl:choose>
			</td>

			<xsl:choose>
				<xsl:when test="status != ''">
					<td align="center"><strong><xsl:value-of select="date"/></strong></td>
					<td align="center"><strong><xsl:value-of select="games"/></strong></td>
				</xsl:when>

				<xsl:otherwise>
					<td align="center"><xsl:value-of select="date"/></td>
					<td align="center"><xsl:value-of select="games"/></td>
				</xsl:otherwise>
			</xsl:choose>
		</tr>
	</xsl:template>

	<xsl:template match="contents_page">
		<html>
			<head>
				<title>CMPro/ROMCenter Dats</title>
			</head>

			<body>
				<center>
					<xsl:comment>#include virtual="/ads/top.shtml"</xsl:comment>

					<hr/>

					<p align="center"><img src="../Resources/Logiqx.gif" width="327" height="68"/></p>

					<p align="center"><img src="Dats.gif" width="57" height="40"/></p>

					<p align="left">As a result of the developing CAESAR there are now CMPro and ROMCenter dats for every arcade emulator that I could get my hands on (about 150 of them)! Furthermore, once inside CAESAR I have been able to identify the bad dumps in old sets and correct the dats accordingly. Some of the old emulators require ROMs that are different to ones in MAME but only in the way that they have been split/joined/interleaved/padded etc. These ROMs can be reconstructed using <a href="../ROMBuild/ROMBuild.shtml">ROMBuild</a>, after which you can use your favorite ROM manager to build a proper ROM set from them. As you should have gathered, I am keen that all available dats are of the highest quality and would like to keep them this way. If you produce any dats then please send them on to <a href="mailto:logiqx@logiqx.com">me</a> and I'll issue them to Roman (CMPro) and Eric (ROMCenter), ensuring that they work correctly for both managers and are suitable for CAESAR. I will take no credit for your dats but I would like to check them over before they are released (rather than submit changes after they are public).</p>

					<xsl:apply-templates/>

				</center>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
