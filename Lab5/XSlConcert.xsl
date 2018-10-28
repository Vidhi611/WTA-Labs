<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
  <h2>Welcome to the concert!!!</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Band Name</th>
      <th>Genre</th>
      <th>Place</th>
    </tr>
    <xsl:for-each select="concert_ad/ad">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <xsl:choose>
        <xsl:when test="genre='pop'">
          <td style="color: Green">
            <xsl:value-of select="genre"/></td>
        </xsl:when>
        <xsl:when test="genre='classical'">
          <td style="color: Blue">
            <xsl:value-of select="genre"/></td>
        </xsl:when>
        <xsl:when test="genre='instrumental'">
          <td style="color: Orange">
            <xsl:value-of select="genre"/></td>
        </xsl:when>
        <xsl:otherwise>
          <td style="color: Pink">
            <xsl:value-of select="genre"/></td>
        </xsl:otherwise>
      </xsl:choose>
      <td><xsl:value-of select="place/venue"/></td>
    </tr>
  </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>