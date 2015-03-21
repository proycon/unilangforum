<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'CONFIG_NOT_EXIST'					=> 'El paràmetre de configuració "%s" no existeix (error no esperat).',

	'GROUP_NOT_EXIST'					=> 'El grup "%s" no existeix (error no esperat).',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Aplica les dependències de %s.',
	'MIGRATION_DATA_DONE'				=> 'Dades instal·lades: %1$s; Temps: %2$.2f segons',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'S’estan instal·lant les dades: %1$s; Temps: %2$.2f segons',
	'MIGRATION_DATA_RUNNING'			=> 'S’estan instal·lant les dades: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migració ja instal·lada de forma efectiva (s’ha omès): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'S’ha produït un error durant la sol·licitud i s’ha llançat una excepció. Els canvis fets abans de l’error s’han invertit dintre del que és possible però és recomanable que verifique el fòrum per si hi ha errors.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'La migració "%1$s" no es pot completar, falta la migració "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s no és una migració vàlida.',
	'MIGRATION_SCHEMA_DONE'				=> 'Esquema instal·lat: %1$s; Temps: %2$.2f seconds',
	'MIGRATION_SCHEMA_RUNNING'			=> 'S’està instal·lant l’esquema: %s.',

	'MODULE_ERROR'						=> 'S’ha produït un error mentre es creava un mòdul: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Falta un fitxer necessari d’informació del mòdul: %2$s',
	'MODULE_NOT_EXIST'					=> 'No existeix un mòdul necessari: %s',

	'PERMISSION_NOT_EXIST'				=> 'The permission setting "%s" no existeix (error no esperat).',

	'ROLE_NOT_EXIST'					=> 'El rol de permisos "%s" no existeix (error no esperat).',
));
