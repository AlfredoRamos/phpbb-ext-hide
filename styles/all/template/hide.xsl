<xsl:choose>
	<xsl:when test="$S_USER_LOGGED_IN and not($S_IS_BOT)">
		<xsl:choose>
			<xsl:when test="@inline and @inline > 0">
				<span class="hidden-content" title="{L_HIDDEN_CONTENT}">{TEXT}</span>
			</xsl:when>
			<xsl:otherwise>
				<fieldset class="hidden-content">
					<legend>{L_HIDDEN_CONTENT}</legend>
					{TEXT}
				</fieldset>
			</xsl:otherwise>
		</xsl:choose>
	</xsl:when>
	<xsl:otherwise>
		<xsl:choose>
			<xsl:when test="@inline and @inline > 0">
				<span class="hidden-content error">{L_HIDDEN_CONTENT_EXPLAIN}</span>
			</xsl:when>
			<xsl:otherwise>
				<div class="hidden-content error">{L_HIDDEN_CONTENT_EXPLAIN}</div>
			</xsl:otherwise>
		</xsl:choose>
	</xsl:otherwise>
</xsl:choose>
