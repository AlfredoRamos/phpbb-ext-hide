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
	'HIDE_HELPLINE' => 'Hide content to guest users.',
	'HIDDEN_CONTENT' => 'Hidden content',
	'HIDDEN_CONTENT_EXPLAIN' => 'Exclusive content for logged in users.'
]);
