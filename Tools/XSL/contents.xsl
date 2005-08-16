<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="xml" indent="yes" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN"
        doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" omit-xml-declaration="yes"/>

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

	<xsl:template match="tools">
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

	<xsl:template match="tool">
		<tr>
			<td>
				<a><xsl:attribute name="href"><xsl:value-of select="@id"/>/<xsl:value-of select="@id"/>.php</xsl:attribute><xsl:value-of select="name"/><xsl:text> </xsl:text><xsl:value-of select="version"/></a>
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
						<img src="../Resources/Updated.gif" width="73" height="14" alt="Updated"/>
					</xsl:when>
					<xsl:when test="status = 'New'">
						<img src="../Resources/New.gif" width="53" height="14" alt="New"/>
					</xsl:when>
				</xsl:choose>
				</p>
			</td>

			<xsl:choose>
				<xsl:when test="status != ''">
					<td><p><strong><xsl:value-of select="date"/></strong></p></td>
					<td><p><strong><xsl:value-of select="games"/></strong></p></td>
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
				<script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../Resources/Include.php');

				</script>

				<title>CMPro/ROMCenter Dats</title>

				<script language="php">
					// Include standard &lt;head> metadata

					include('../Resources/Head.php');
				</script>
			</head>

			<body>
				<script language="php">
					// The main page content is a 3 column table (left column is the menu, right one is the news)

					echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

					include('../Resources/Top.php');
				</script>

					<p><img src="../Resources/Logiqx.gif" width="327" height="68" alt="Logiqx"/></p>

					<p><img src="Dats.gif" width="57" height="40" alt="Dats"/></p>

					<p>I have written loads of tools!</p>

					<xsl:apply-templates/>


				<script language="php">
					// Standard page footer (counter)

					include('../Resources/Bottom.php');
				</script>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
