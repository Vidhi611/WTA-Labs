<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>Concerts</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Band Name</th>
      <th style="text-align:left">Artist</th>
    </tr>
    <xsl:for-each select="concer_ad/ad">
    <tr>
      <td><xsl:value-of select="Band Name"/></td>
      <td><xsl:value-of select="Artist"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>