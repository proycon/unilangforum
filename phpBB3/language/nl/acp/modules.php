<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Hier kan je alle soorten modules beheren. Let op dat het beheerderspaneel een drielaags menustructuur (Categorie -> Categorie -> Module) heeft, waarbij de andere een tweelaags menustructuur (Categorie -> Module) hebben die behouden moet worden. Wees er ook verdacht op dat je jezelf kan uitsluiten als je de modules uitschakelt of verwijdert die verantwoordelijk zijn voor het modulebeheer zelf.',
	'ADD_MODULE'					=> 'Module toevoegen',
	'ADD_MODULE_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde module wilt toevoegen aan de geselecteerde mode?',
	'ADD_MODULE_TITLE'				=> 'Module toevoegen',

	'CANNOT_REMOVE_MODULE'	=> 'Kan module niet verwijderen, het heeft al toegewezen kinderen. Verwijder of verplaats eerst alle kinderen voordat je deze actie uitvoert.',
	'CATEGORY'				=> 'Categorie',
	'CHOOSE_MODE'			=> 'Kies modulemode',
	'CHOOSE_MODE_EXPLAIN'	=> 'Kies de modulemode die gebruikt wordt.',
	'CHOOSE_MODULE'			=> 'Kies module',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Kies het bestand wat wordt opgeroepen door deze module.',
	'CREATE_MODULE'			=> 'Nieuwe module aanmaken',

	'DEACTIVATED_MODULE'	=> 'Gedeactiveerde module',
	'DELETE_MODULE'			=> 'Module verwijderen',
	'DELETE_MODULE_CONFIRM'	=> 'Weet je zeker dat je deze module wilt verwijderen?',

	'EDIT_MODULE'			=> 'Module wijzigen',
	'EDIT_MODULE_EXPLAIN'	=> 'Hier kan je module specifieke instellingen invoeren.',

	'HIDDEN_MODULE'			=> 'Verborgen module',

	'MODULE'					=> 'Module',
	'MODULE_ADDED'				=> 'Module succesvol toegevoegd.',
	'MODULE_DELETED'			=> 'Module succesvol verwijderd.',
	'MODULE_DISPLAYED'			=> 'Module weergeven',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Als je deze module niet wilt weergeven, maar wel wilt gebruiken, stel dit dan in op nee.',
	'MODULE_EDITED'				=> 'Module succesvol gewijzigd.',
	'MODULE_ENABLED'			=> 'Module ingeschakeld',
	'MODULE_LANGNAME'			=> 'Module taalnaam',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Voer de weergegeven modulenaam in. Gebruik een taalconstante als de naam wordt opgehaald uit een taalbestand.',
	'MODULE_TYPE'				=> 'Moduletype',

	'NO_CATEGORY_TO_MODULE'	=> 'Kan een categorie niet in een module veranderen. Verwijder/verplaats alle kinderen voordat je deze actie uitvoert.',
	'NO_MODULE'				=> 'Geen module gevonden.',
	'NO_MODULE_ID'			=> 'Geen module-ID opgegeven.',
	'NO_MODULE_LANGNAME'	=> 'Geen module-taalnaam opgegeven.',
	'NO_PARENT'				=> 'Geen hoofdmodule',

	'PARENT'				=> 'Hoofdmodule',
	'PARENT_NO_EXIST'		=> 'Hoofdmodule bestaat niet.',

	'SELECT_MODULE'			=> 'Selecteer een module',
));
