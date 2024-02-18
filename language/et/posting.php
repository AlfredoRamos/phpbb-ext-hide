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
	'HIDE' => 'Peida',
	'HIDE_HELPLINE' => '[hide]Tekst[/hide] või [hide inline=1]Tekst[/hide]',
	'HIDDEN_CONTENT' => 'Peidetud sisu',
	'HIDDEN_CONTENT_EXPLAIN' => 'Sisu sisselogitud kasutajatele.'
]);
