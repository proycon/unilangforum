<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-14 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
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
	'CONFIG_NOT_EXIST'					=> 'Konfiguratsiooni seadet "%s" ei eksisteeri ootamatult enam.',

	'GROUP_NOT_EXIST'					=> 'Grupi "%s" ootamatult ei eksisteeri enam.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Kohaldatakse sõltuvalt %s.',
	'MIGRATION_DATA_DONE'				=> 'Installeeritud andmed: %1$s; Aeg: %2$.2f sekundit',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installeerin andmeid: %1$s; Aeg: %2$.2f sekundit',
	'MIGRATION_DATA_RUNNING'			=> 'Installeerin andmeid: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migratsioon on juba tõhusalt installeeritud (vahele jäetud): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Midagi läks valesti päringu ajal. Muudatused on tühistatud, kuid sa peaks ilmtingimata vaatama oma foorumi üle.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migratsioon "%1$s" pole täidetud täielikult, puuduv migratsioon "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s ei ole kehtiv migratsioon.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installeeritud skeem: %1$s; Aeg: %2$.2f sekundit',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Paigaldan skeemi: %1$s; Aeg: %2$.2f sekundit',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Installeerin skeemi: %s.',
	
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Migratsioon on vigane. If deklaratsiooni abistaja on kadunud parameetrist.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Migratsioon on vigane. If deklaratsiooni abistajal ei ole kehtivat kutsungit migratsiooni sammuks.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Migratsioon on vigane. Kohandatud kutsuvat funktsiooni ei õnnestunud kutsuda.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Migratsioon on vigane. Ebamäärane migratsiooni tööriista tüüp tekkinud.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Migratsioon on vigane. Ebamäärane migratsiooni tööriist on tekkinud.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Migratsioon on vigane. Ebamäärane migratsiooni tööriista meetod on tekkinud.',

	'MODULE_ERROR'						=> 'Mooduli loomise ajal tekkis viga: %s',
	'MODULE_EXISTS'						=> 'Moodul juba eksisteerib: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Mitmed moodulid koos antud pea mooduli nimetusega juba eksisteerivad: %s. Proovi kasutada enne või pärast võtmeid täpsustamaks mooduli paigutust.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Nõutud mooduli fail puudub: %2$s',
	'MODULE_NOT_EXIST'					=> 'Nõutud moodulit ei eksisteeri: %s',
	
	'PARENT_MODULE_FIND_ERROR'			=> 'Ei suuda tuvastada pea mooduli identifitseerijat: %s',

	'PERMISSION_NOT_EXIST'				=> 'Õiguste seadet "%s" ei eksisteeri enam ootamatult.',

	'ROLE_NOT_EXIST'					=> 'Õiguste rolli "%s" ootamatult ei eksisteeri enam.',
));
