<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:output method="html" indent="yes"/>

	<xsl:include href="comments.xsl"/>

	<xsl:template match="type"/>

	<xsl:template match="section">
		<b>
			<xsl:apply-templates/>
		</b>
	</xsl:template>

	<xsl:template match="emulators">
		<table border="1" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFF1D5" bordercolorlight="#FFFFFF" bordercolordark="#FFCC66">
			<tr>
				<td bgcolor="#FFCC66"><b><font color="#FF0000" face="Arial" size="2">Status</font></b></td>

				<td bgcolor="#FFCC66"><b><font color="#FF0000" face="Arial" size="2">
					<xsl:value-of select="../type"/>
				</font></b></td>

				<td bgcolor="#FFCC66"><b><font color="#FF0000" size="2" face="Arial">Version</font></b></td>
				<td bgcolor="#FFCC66"><b><font color="#FF0000" size="2" face="Arial">Author</font></b></td>
				<td bgcolor="#FFCC66"><b><font color="#FF0000" face="Arial" size="2">Games</font></b></td>
				<td bgcolor="#FFCC66"><b><font color="#FF0000" face="Arial" size="2">Update date</font></b></td>
			</tr>

			<xsl:apply-templates/>
		</table>
	</xsl:template>

	<xsl:template match="emulator">
		<tr>
			<td align="center"><b><font face="Arial" size="2" color="#008000">
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
			</font></b></td>

      			<td><font face="Arial" size="2"><a>
				<xsl:attribute name="href"><xsl:value-of select="@id"/>/<xsl:value-of select="dats/dat[2]/file/@name"/></xsl:attribute>
				<b><xsl:value-of select="name"/></b>
			</a></font></td>

			<td><font face="Arial" size="2"><xsl:value-of select="version"/></font></td>

      			<td><font face="Arial" size="2">

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
			</font></td>

      			<td><font face="Arial" size="2"><xsl:value-of select="games"/></font></td>
      			<td><font face="Arial" size="2"><xsl:value-of select="date"/></font></td>
		</tr>
	</xsl:template>

	<xsl:template match="contents_page">
		<html>
			<style name="fprolloverstyle">A:hover {color: #FF0000}</style>

			<head>
				<title>ROMCenter Dats</title>
			</head>

			<body link="#FF8000" vlink="#FF8000" alink="#FFCC66">
    			<p><font face="Times New Roman" size="3">This datafiles list is maintained by <b>Logiqx</b>.</font> Visit the <a href="http://www.logiqx.com"><b>Logiqx Home Page</b></a> for more detailed information.</p>
				<xsl:apply-templates/>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
