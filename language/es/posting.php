<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@proton.me>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HIDE' => 'Ocultar',
	'HIDE_HELPLINE' => 'Uso: [hide]texto[/hide] o [hide inline=1]texto[/hide]',
	'HIDDEN_CONTENT' => 'Contenido oculto',
	'HIDDEN_CONTENT_EXPLAIN' => 'Contenido exclusivo para usuarios registrados.'
]);
