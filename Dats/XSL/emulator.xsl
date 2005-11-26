<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="xml" indent="yes" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
        doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" omit-xml-declaration="yes"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="author"/>

	<xsl:template match="img">
		<p>
			<img>
				<xsl:attribute name="src"><xsl:value-of select="@src"/></xsl:attribute>
				<xsl:attribute name="width"><xsl:value-of select="@width"/></xsl:attribute>
				<xsl:attribute name="height"><xsl:value-of select="@height"/></xsl:attribute>
				<xsl:attribute name="alt"><xsl:value-of select="@src"/></xsl:attribute>
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
		<table>
			<colgroup span="1" width="50%"/>
			<colgroup span="1" width="50%"/>
			<tr>
				<xsl:apply-templates/>
			</tr>
		</table>
	</xsl:template>

	<xsl:template match="dat">
		<td>
			<p>
				<xsl:text>Download </xsl:text>
				<a><xsl:attribute name="href"><xsl:value-of select="file/@name"/></xsl:attribute><xsl:value-of select="../../name"/><xsl:text> dat for </xsl:text><xsl:value-of select="dat_type/."/></a>
				<xsl:text> (</xsl:text>
				<xsl:value-of select="file/@size"/>
				<xsl:text>KB)</xsl:text>
			</p>

			<p>
				<a><xsl:attribute name="href"><xsl:value-of select="file/@name"/></xsl:attribute><img src="../../Resources/Disk.png" width="38" height="38" alt="Download"/></a>
			</p>
		</td>
	</xsl:template>

	<xsl:template match="revisions">
		<hr/>

		<p><img src="../../Resources/History.png" width="85" height="40" alt="History"/></p>

		<xsl:for-each select="revision">
			<p>
				<b><xsl:value-of select="date"/></b>
				<xsl:text> - </xsl:text>
				<xsl:apply-templates/>
			</p>
		</xsl:for-each>
	</xsl:template>

	<xsl:template match="emulator">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<script language="php">
					// Standard PHP includes (database connection and constants)

					include ('../../Resources/Include.php');

				</script>

				<title><xsl:value-of select="name"/><xsl:text> </xsl:text><xsl:value-of select="version"/></title>

				<script language="php">
					// Include standard &lt;head> metadata

					include('../../Resources/Head.php');
				</script>
			</head>

			<body>
				<script language="php">
					// The main page content is a 3 column table (left column is the menu, right one is the news)

					echo '<!-- Logiqx pages are basically a table with one row and three columns -->' . LF . LF;

					include('../../Resources/Top.php');
				</script>

				<p>
					<img src="../../Resources/Logiqx.png" width="327" height="68" alt="../../Resources/Logiqx.png"/>
				</p>

				<xsl:apply-templates/>

				<script language="php">
					// Standard page footer (counter)

					include('../../Resources/Bottom.php');
				</script>
			</body>
		</html>
	</xsl:template>

</xsl:stylesheet>
