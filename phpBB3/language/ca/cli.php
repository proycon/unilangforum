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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Marqueu aquesta opció si l’opció de configuració canvia massa sovint com per emmagatzemar-la de forma eficient a la memòria cau.',
	'CLI_CONFIG_CURRENT'				=> 'Valor actual de la configuració, utilitzeu 0 i 1 per especificar valors booleans',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'S’ha eliminat la configuració %s correctament',
	'CLI_CONFIG_NEW'					=> 'Nou valor de la configuració, utilitzeu 0 i 1 per especificar valors booleans',
	'CLI_CONFIG_NOT_EXISTS'				=> 'La configuració %s no existeix',
	'CLI_CONFIG_OPTION_NAME'			=> 'El nom de l’opció de configuració',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Marqueu aquesta opció si el valor s’ha d’imprimir sense una linia nova al final.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Quantitat a incrementar',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'S’ha incrementat la configuració %s correctament',
	'CLI_CONFIG_SET_FAILURE'			=> 'No s’ha pogut establir la configuració %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'S’ha establert la configuració %s correctament',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprimeix una llista dels treballs cron llestos i no llestos.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Executa totes les tasques cron que estan llestes.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Indiqueu la tasca a executar',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualitza la base de dades aplicant migracions.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina una opció de configuració',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Inhabilita l’extensió especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Habilita l’extensió especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Troba migracions en les quals no es depèn.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obté el valor d’una opció de configuració',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Incrementa el valor d’una opció de configuració',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista totes les extensions a la base de dades i al sistema de fitxers.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Executa’l en mode segur (sense extensions).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Executa l’intèrpret d’ordres.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Purga l’extensió especificada.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalcula la columna user_email_hash de la taula d’usuaris.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Estableix el valor d’una opció de configuració només si el valor vell coincideix amb el valor nou',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Estableix el valor d’una opció de configuració',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'No s’ha pogut inhabilitar l’extensió %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'S’ha inhabilitat l’extensió %s correctament',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'No s’ha pogut habilitar l’extensió %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'S’ha habilitat l’extensió %s correctament',
	'CLI_EXTENSION_NAME'				=> 'Nom de l’extensió',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'No s’ha pogut purgar l’extensió %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'S’ha purgat l’extensió %s correctament',
	'CLI_EXTENSION_NOT_FOUND'			=> 'No s’ha trobat cap extensió.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponible',
	'CLI_EXTENSIONS_DISABLED'			=> 'Inhabilitada',
	'CLI_EXTENSIONS_ENABLED'			=> 'Habilitada',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'S’han recalculat tots les funcions de resum de les adreces electròniques.',
));
