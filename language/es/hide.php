<?php

/**
 * Hide Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0
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
	'HIDE_HELPLINE' => 'Oculta contenido a usuarios invitados.',
	'HIDDEN_CONTENT' => 'Contenido oculto',
	'HIDDEN_CONTENT_EXPLAIN' => 'Contenido exclusivo para usuarios registrados.'
]);
