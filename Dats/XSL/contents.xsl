<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="xml" indent="yes" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
        doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" omit-xml-declaration="yes"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="type"/>

	<xsl:template match="section">
		<hr/>
		<p>
			<img>
				<xsl:attribute name="src"><xsl:value-of select="img/@src"/></xsl:attribute>
				<xsl:attribute name="width"><xsl:value-of select="img/@width"/></xsl:attribute>
				<xsl:attribute name="height"><xsl:value-of select="img/@height"/></xsl:attribute>
				<xsl:attribute name="alt"><xsl:value-of select="img/@src"/></xsl:attribute>
			</img>
		</p>
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="emulators">
		<table class="news">
			<colgroup span="1"/>
			<colgroup span="1" width="110"/>
			<colgroup span="1" width="110"/>
			<colgroup span="1" width="110"/>
			<tr>
				<th><xsl:value-of select="../type"/></th>
				<th></th>
				<th><p>Dat Updated</p></th>
				<th><p>Games</p></th>
			</tr>

			<xsl:apply-templates/>
		</table>
	</xsl:template>

	<xsl:template match="emulator">
		<tr>
			<td>
				<a><xsl:attribute name="href"><xsl:value-of select="@id"/>/</xsl:attribute><xsl:value-of select="name"/><xsl:text> </xsl:text><xsl:value-of select="version"/></a>
				<xsl:if test="suitability != ''">
					<xsl:text> (suitable for </xsl:text>
					<xsl:value-of select="suitability"/>
					<xsl:text>)</xsl:text>
				</xsl:if>
			</td>
			<td>
				<p>
				<xsl:choose>
					<xsl:when test="status = 'Updated'">
						<img src="../Resources/Updated.png" width="73" height="14" alt="Updated"/>
					</xsl:when>
					<xsl:when test="status = 'New'">
						<img src="../Resources/New.png" width="53" height="14" alt="New"/>
					</xsl:when>
				</xsl:choose>
				</p>
			</td>

			<xsl:choose>
				<xsl:when test="status != ''">
					<td><p><b><xsl:value-of select="date"/></b></p></td>
					<td><p><b><xsl:value-of select="games"/></b></p></td>
				</xsl:when>

				<xsl:otherwise>
					<td><p><xsl:value-of select="date"/></p></td>
					<td><p><xsl:value-of select="games"/></p></td>
				</xsl:otherwise>
			</xsl:choose>
		</tr>
	</xsl:template>

	<xsl:template match="contents_page">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				&lt;?php
					// Standard PHP includes (database connection and constants)

					include ('../Resources/Include.php');

				?&gt;

				<title>CMPro/ROMCenter Dats</title>

				&lt;?php
					// Include standard &lt;head> metadata

					include('../Resources/Head.php');
				?&gt;
			</head>

			<body>
				&lt;?php
					// The main page content is a 3 column table (left column is the menu, right one is the news)

					echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

					include('../Resources/Top.php');
				?&gt;

					<p><img src="../Resources/Logiqx.png" width="327" height="68" alt="Logiqx"/></p>

					<p><img src="Dats.png" width="57" height="40" alt="Dats"/></p>

					<p>As a result of the developing CAESAR there are now CMPro and ROMCenter dats for every arcade emulator that I could get my hands on (about 200 of them)! Furthermore, once inside CAESAR I have been able to identify the bad dumps in old sets and correct the dats accordingly. Some of the old emulators require ROMs that are different to ones in MAME but only in the way that they have been split/joined/interleaved/padded etc. These ROMs can be reconstructed using <a href="../Tools/ROMBuild/">ROMBuild</a>, after which you can use your favorite ROM manager to build a proper ROM set from them. As you should have gathered, I am keen that all available dats are of the highest quality and would like to keep them this way. If you produce any dats then please <a href="../forum/">contact me</a>
and I'll issue them to Roman (CMPro) and Eric (ROMCenter), ensuring that they work correctly for both managers and are suitable for CAESAR. I will take no credit for your dats but I would like to check them over before they are released (rather than submit changes after they are public).</p>

					<xsl:apply-templates/>


				&lt;?php
					// Standard page footer (counter)

					include('../Resources/Bottom.php');
				?&gt;
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
