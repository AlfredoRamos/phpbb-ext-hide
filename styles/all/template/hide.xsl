<xsl:choose>
	<xsl:when test="$S_USER_LOGGED_IN and not($S_IS_BOT)">
		<fieldset class="hidden-content">
			<legend>{L_HIDDEN_CONTENT}</legend>
			{TEXT}
		</fieldset>
	</xsl:when>
	<xsl:otherwise>
		<div class="hidden-content error">{L_HIDDEN_CONTENT_EXPLAIN}</div>
	</xsl:otherwise>
</xsl:choose>
