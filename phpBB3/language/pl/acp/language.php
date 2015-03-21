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
* @Polish locale 2014-07-07 15:34:14 Zespół Olympus.pl $
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
	'ACP_FILES'						=> 'Pliki językowe PA',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Tutaj można instalować/usuwać pakiety językowe. Domyślny pakiet językowy jest oznaczony gwiazdką (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Czy na pewno chcesz usunąć pakiet językowy „%s”?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Zainstalowane pakiety językowe',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Pakiet językowy został zaktualizowany.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ten pakiet językowy jest już zainstalowany.',
	'LANGUAGE_PACK_DELETED'				=> 'Pakiet językowy „%s” został usunięty. U wszystkich użytkowników korzystających z tego języka została dokonana zamiana na domyślny język witryny.',
	'LANGUAGE_PACK_DETAILS'				=> 'Szczegóły pakietu językowego',
	'LANGUAGE_PACK_INSTALLED'			=> 'Pakiet językowy „%s” został zainstalowany.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Zawartość pól niestandardowych została skopiowana z domyślnego języka. Można ją zmieniać, jeśli zachodzi taka potrzeba.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalna nazwa',
	'LANGUAGE_PACK_NAME'				=> 'Angielska nazwa',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Wybrany pakiet językowy nie istnieje.',
	'LANGUAGE_PACK_USED_BY'				=> 'Używany (łącznie z botami)',
	'LANGUAGE_VARIABLE'					=> 'Zmienna językowa',
	'LANG_AUTHOR'						=> 'Autor pakietu',
	'LANG_ENGLISH_NAME'					=> 'Angielska nazwa',
	'LANG_ISO_CODE'						=> 'Kod ISO',
	'LANG_LOCAL_NAME'					=> 'Lokalna nazwa',

	'MISSING_LANG_FILES'		=> 'Brakujące pliki językowe',
	'MISSING_LANG_VARIABLES'	=> 'Brakujące zmienne językowe',

	'NO_FILE_SELECTED'				=> 'Nie wybrano pliku językowego.',
	'NO_LANG_ID'					=> 'Nie wybrano pakietu językowego.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Nie można usunąć domyślnego pakietu językowego.<br />Jeśli chcesz usunąć ten pakiet językowy, zmień najpierw domyślny język witryny.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nie znaleziono niezainstalowanych pakietów językowych',

	'THOSE_MISSING_LANG_FILES'			=> 'W pakiecie językowym „%s” brakuje następujących plików',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'W pakiecie językowym „%s” brakuje następujących elementów',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Odinstalowane pakiety językowe',
));
