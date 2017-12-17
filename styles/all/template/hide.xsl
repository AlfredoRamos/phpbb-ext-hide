<xsl:choose>
	<xsl:when test="$S_USER_LOGGED_IN and not($S_IS_BOT)">
		<section>
			<xsl:attribute name="class">
				<xsl:choose>
					<xsl:when test="boolean(@inline)">hidden-content inline</xsl:when>
					<xsl:otherwise>hidden-content</xsl:otherwise>
				</xsl:choose>
			</xsl:attribute>
			<xsl:if test="not(boolean(@inline))">
				<header><span>{L_HIDDEN_CONTENT}</span></header>
			</xsl:if>
			{TEXT}
		</section>
	</xsl:when>
	<xsl:otherwise>
		<div>
			<xsl:attribute name="class">
				<xsl:choose>
					<xsl:when test="boolean(@inline)">hidden-content error inline</xsl:when>
					<xsl:otherwise>hidden-content error</xsl:otherwise>
				</xsl:choose>
			</xsl:attribute>
			{L_HIDDEN_CONTENT_EXPLAIN}
		</div>
	</xsl:otherwise>
</xsl:choose>
