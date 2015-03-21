<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Konfigurationsinställningar "%s" verkar inte finnas.',

	'GROUP_NOT_EXIST'					=> 'Gruppen "%s" verkar inte finnas.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Tillämnpa beroende av %s.',
	'MIGRATION_DATA_DONE'				=> 'Installerad Data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installerar Data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_RUNNING'			=> 'Installerar Data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Förflyttningen är redan installerad (skipped): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Något gick fel under förfrågan och ett undantag kastades. De ändringar som gjorts innan felet inträffade var omvänd till bästa förmåga, men du bör kontrollera forumet efter fel.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Förflyttningen "%1$s" är inte genomförbar, saknar förflyttning "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s är inte en giltig förflyttning.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installerat Schema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Installerar Schema: %s.',

	'MODULE_ERROR'						=> 'Ett fel uppstod under installationen utav modulen: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'En obligatorisk modulsinformationsfil saknas: %2$s',
	'MODULE_NOT_EXIST'					=> 'En obligatorisk modul saknas: %s',

	'PERMISSION_NOT_EXIST'				=> 'Behörighetsinställningarna "%s" verkar inte finnas.',

	'ROLE_NOT_EXIST'					=> 'Behörighetsrollen "%s" verkar inte finnas.',
));
