<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'CONFIG_NOT_EXIST'					=> 'Konfigurasjonsinnstillingen «%s» finnes ikke, og dette er uventet.',

	'GROUP_NOT_EXIST'					=> 'Gruppen «%s» finnes ikke, og dette er uventet.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Aktiver avhengigheter for %s.',
	'MIGRATION_DATA_DONE'				=> 'Installerte data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Installerer data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_RUNNING'			=> 'Installerer data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migreringen er allerede i praksis installert (hopper over): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Noe gikk galt under forespørselen, og det ble utløst et unntak. Endringene som ble gjort før feilen inntraff, ble tilbakeført så godt vi klarer, men du bør kontrollere om systemet har feil.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Overføringen «%1$s» kan ikke fullføres, migreringen «%2$s» mangler.',
	'MIGRATION_NOT_VALID'				=> '%s er ikke en gyldig migrering.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installert skjema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Installerer skjema: %s.',

	'MODULE_ERROR'						=> 'Det oppstod en feil ved oppretting av modulen: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'En påkrevd modulinformasjonsfil mangler: %2$s',
	'MODULE_NOT_EXIST'					=> 'En påkrevd modul finnes ikke: %s',

	'PERMISSION_NOT_EXIST'				=> 'Tillatelsesinnstillingen «%s» finnes ikke, og dette er uventet.',

	'ROLE_NOT_EXIST'					=> 'Tillatelsesrollen «%s» finnes ikke, og dette er uventet.',
));
