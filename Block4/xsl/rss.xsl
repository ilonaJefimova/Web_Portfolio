<?xml version="1.0" encoding="utf-8"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>

  <xsl:template match="/">
    <div class="row g-4">
      <xsl:apply-templates select="//news[position() &lt;= 6]" />
    </div>
  </xsl:template>

  <xsl:template match="news">
	<div class="col-sm-4">
	  <div class="card h-100 shadow-lg border-0" style="background:#343a40; color:#f8f9fa; border-radius: 16px;">

		<div class="card-header border-0" style="background: transparent; font-weight: 600;">
		  <h4 class="card-title mb-0 text-light"><xsl:value-of select="title"/></h4>
		</div>
		<div class="card-body">
		  <img src="../image/{image}" alt="{title}" class="img-fluid rounded-3 shadow mb-3"/>
		  <p class="card-text text-light opacity-75"><xsl:value-of select="description"/></p>
		</div>
		<div class="card-footer border-0 bg-transparent text-center">
		  <a href="{link}" target="_blank" class="btn btn-outline-light rounded-pill px-4">Read More</a>
		</div>

	  </div>
	</div>
  </xsl:template>
</xsl:stylesheet>
