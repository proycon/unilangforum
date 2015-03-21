<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-09-13 - GunChleoc http://www.foramnagaidhlig.net
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Suidhich an roghainn seo ma dh’atharraicheas roghainn an rèiteachaidh ro thric ach am b’ fhiach a cur dhan tasgadan.',
	'CLI_CONFIG_CURRENT'				=> 'Luach làithreach an rèiteachaidh, cleachd 0 ’s 1 gus luachan booleach a shònrachadh',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Tha thu air an rèiteachadh “%s” a sguabadh às.',
	'CLI_CONFIG_NEW'					=> 'Luach ùr an rèiteachaidh, cleachd 0 ’s 1 gus luachan booleach a shònrachadh',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Chan eil an rèiteachadh “%s” ann',
	'CLI_CONFIG_OPTION_NAME'			=> 'Ainm air roghainn an rèiteachaidh',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Suidhich an roghainn seo mur am bu chòir loidhne ùr a bhith aig deireadh an luach.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'An t-àireamh leis a thèid a mheudachadh',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Tha an rèiteachadh “%s” air a mheudachadh le àireamh',
	'CLI_CONFIG_SET_FAILURE'			=> 'Cha b’ urrainn dhuinn an rèiteachadh “%s” a shuidheachadh',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Tha an rèiteachadh “%s” air a shuidheachadh',

	'CLI_DESCRIPTION_CRON_LIST'				=> 'Seallaidh seo liosta dhe na saothraichean cron ge b’ e a tha iad deiseil gus nach eil.',
	'CLI_DESCRIPTION_CRON_RUN'				=> 'Ruithidh seo gach saothair cron a bhios deiseil.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Ainm na saothrach ri ruith',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Cuiridh seo imrichean an sàs air an stòr-dàta.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Sguabaidh seo às roghainn an rèiteachaidh',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Cuiridh seo an tuilleadan sònraichte à comas.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Cuiridh seo an tuilleadan sònraichte an comas.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Lorgaidh seo imrichean air nach eil dad an eisimeil.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Gheibh seo an luach a tha air roghainn an rèiteachaidh',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Meudaichidh seo an àireamh a tha air roghainn an rèiteachaidh',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Seallaidh seo a h-uile tuilleadan san stòr-dàta is air an t-siostam-fhaidhlichean.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Ruith sa mhodh shàbhailte (gun tuilleadan).',
	'CLI_DESCRIPTION_OPTION_SHELL'			=> 'Tòisich an shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Sguabaidh seo às an tuilleadan sònraichte.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Nì seo àireamhachadh às ùr air a’ cholbh user_email_hash aig clàr nan cleachdaichean.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Cha suidhich seo luach air roghainn an rèiteachaidh ach ma tha an seann luach co-ionnann ris an fhear ùr',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Suidhichidh seo luach air roghainn an rèiteachaidh',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Cha deach leinn an tuilleadan “%s” a chur à comas',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Tha an tuilleadan “%s” air a chur à comas',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Cha deach leinn an tuilleadan “%s” a chur an comas',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Tha an tuilleadan “%s” air a chur an comas',
	'CLI_EXTENSION_NAME'				=> 'Ainm an tuilleadain',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Cha deach leinn an tuilleadan “%s” a sguabadh às',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Tha an tuilleadan “%s” air a sguabadh às',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Cha deach tuilleadan a lorg.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Ri fhaighinn',
	'CLI_EXTENSIONS_DISABLED'			=> 'À comas',
	'CLI_EXTENSIONS_ENABLED'			=> 'An comas',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Tha a h-uile hais puist-d air àireamhachadh às ùr.',
));
