<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: migrator.php 463 2014-10-26 06:56:15Z jan_skovsgaard $
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
	'CONFIG_NOT_EXIST'					=> 'Indstillingen "%s" eksisterer uventet ikke.',

	'GROUP_NOT_EXIST'					=> 'Gruppen "%s" eksisterer uventet ikke.',

	'MIGRATION_APPLY_DEPENDENCIES'	=> 'Tilføj afhængigheder af %s.',
	'MIGRATION_DATA_DONE'        => 'Installeret data: %1$s; tid: %2$.2f sekunder',
	'MIGRATION_DATA_IN_PROGRESS'    => 'Installerer data: %1$s; tid: %2$.2f sekunder',
	'MIGRATION_DATA_RUNNING'	=> 'Installerer data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'  => 'Migrering er allerede installeret: %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Noget gik galt under forespørgslen og der blev foretaget en undtagelse. Ændringer udført før fejlen blev tilbageført efter vore bedste evner, men du bør kontrollere om der er fejl på boardet.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migrering "%1$s" kan ikke fuldføres, migrationen "%2$s" mangler.',
	'MIGRATION_NOT_VALID'	=> '%s er ikke en gyldig migration.',
	'MIGRATION_SCHEMA_DONE'			=> 'Installeret skema: %1$s; tid: %2$.2f sekunder',
	'MIGRATION_SCHEMA_RUNNING'		=> 'Installerer skema: %s.',

	'MODULE_ERROR'						=> 'Der opstod en fejl under oprettelse af et modul: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Der mangler en krævet modulinfo-fil: %2$s',
	'MODULE_NOT_EXIST'					=> 'Det krævede modul %s findes ikke',

	'PERMISSION_NOT_EXIST'				=> 'Tilladelseindstillingen "%s" eksisterer uventet ikke.',

	'ROLE_NOT_EXIST'					=> 'Tilladelserollen "%s" findes uventet ikke.',
));
