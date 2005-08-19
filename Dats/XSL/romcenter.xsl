<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="xml" indent="no" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN"
        doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" omit-xml-declaration="yes"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="type"/>

	<xsl:template match="section">
		<xsl:apply-templates/>
	</xsl:template>

	<xsl:template match="emulators">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Status</th>

				<th><xsl:value-of select="../type"/></th>

				<th>Version</th>
				<th>Author</th>
				<th>Games</th>
				<th>Update date</th>
			</tr>

			<xsl:apply-templates/>
		</table>
	</xsl:template>

	<xsl:template match="emulator">
		<tr>
			<td class="status"><b>
				<xsl:choose>
					<xsl:when test="status = 'Updated'">
						updated
					</xsl:when>
					<xsl:when test="status = 'New'">
						new
					</xsl:when>
					<xsl:otherwise>
						-
					</xsl:otherwise>
				</xsl:choose>
			</b></td>

      			<td><a>
				<xsl:attribute name="href"><xsl:value-of select="@id"/>/<xsl:value-of select="dats/dat[2]/file/@name"/></xsl:attribute>
				<b><xsl:value-of select="name"/></b>
			</a></td>

			<td><xsl:value-of select="version"/></td>

      			<td>
				<xsl:if test="author/@href != ''">
					<a>
						<xsl:attribute name="href"><xsl:value-of select="author/@href"/></xsl:attribute>
						<b><xsl:value-of select="author"/></b>
					</a>
				</xsl:if>

				<xsl:if test="author/@href = ''">
					<a>
						<b><xsl:value-of select="author"/></b>
					</a>
				</xsl:if>
			</td>

      			<td><xsl:value-of select="games"/></td>
      			<td><xsl:value-of select="date"/></td>
		</tr>
	</xsl:template>

	<xsl:template match="contents_page">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<title>ROMCenter Dats</title>

				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<meta name="author" content="Logiqx" />
				<meta name="keywords" content="caesar,logiqx,emulation,emulators,arcade,dats" />
				<link rel="stylesheet" href="RomCenter.css" type="text/css" />
			</head>

			<body>
    				<p>This datafiles list is maintained by <b>Logiqx</b>. Visit the <a href="http://www.logiqx.com/"><b>Logiqx Home Page</b></a> for more detailed information.</p>

				<p>
					<a href="http://validator.w3.org/check?uri=http://www.logiqx.com/Dats/RomCenter.php"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0!" height="31" width="88" /></a>
					<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.logiqx.com/Dats/RomCenter.php"><img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" height="31" width="88" /></a>
				</p>
				<xsl:apply-templates/>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
