<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
  <h2>Welcome to the concert!!!</h2>
  <table>
    <tr bgcolor="#9acd32">
      <th>Band Name</th>
      <th>Genre</th>
      <th>Place</th>
    </tr>
    <xsl:for-each select="concert_ad/ad">
      <xsl:sort select="name"/>
        <xsl:if test="(ticket_price &lt; 1000) and (date/month='4-') and (place/add='Mangalore')">
          <xsl:choose>
          <xsl:when test="discount &gt; 0">
        <tr bgcolor="Lightblue">
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="genre"/></td>
      <td><xsl:value-of select="place/venue"/></td>
    </tr>
    </xsl:when>
    <xsl:otherwise>
    <tr>  
    <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="genre"/></td>
      <td><xsl:value-of select="place/venue"/></td>
    </tr>
    </xsl:otherwise>
  </xsl:choose>
  </xsl:if>
  </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>