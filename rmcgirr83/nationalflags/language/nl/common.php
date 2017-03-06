<?php

/**
*
*
* @package - National Flags language
* @copyright (c) 2015 RMcGirr83
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'FLAGS'				=> array(
		1 => '%s vlag',
		2 => '%s vlaggen',
	),
	'USER_FLAG'			=> 'Vlag',
	'USER_FLAG_EXPLAIN'	=> 'De forum standaard vlag wordt getoond.',
	'NATIONAL_FLAGS'	=> 'Vlaggen',
	'FLAG_EXPLAIN'		=> 'Kies jouw vlag',
	'USER_NEEDS_FLAG'	=> 'Heb je eventjes tijd om %sje profiel te bewerken%s en een vlag te kiezen aub..?',
	'FLAGS_VIEWONLINE'	=> 'Bekijkt vlaggen',
	'FLAG_USERS'		=>  array(
		1 => '%s Gebruiker',
		2 => '%s Gebruikers',
	),
	'MUST_CHOOSE_FLAG'	=> '<span class="error">Je moet een vlag kiezen.</span>',
	'NO_SUCH_FLAG'		=> 'Gelieve een vlag te kiezen.',
	'NO_USER_HAS_FLAG'	=> 'Geen gebruikers met deze vlag',
	'FLAG_NOT_EXIST'	=> 'Vlag bestaat niet',
));
