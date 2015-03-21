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
* @Polish locale 2014-11-29 15:34:14 Zespół Olympus.pl $
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
	'ACP_STYLES_EXPLAIN'	=> 'Tutaj można zarządzać dostępnymi stylami. Istniejące style można usuwać, dezaktywować czy reaktywować a także instalować nowe style. Dzięki funkcji podglądu można zobaczyć, jak styl będzie wyglądał. Uwidoczniona jest tu również liczba użytkowników korzystających z danego stylu – nie uwzględniona jest w niej jednak funkcja ignorowania stylów.',

	'CANNOT_BE_INSTALLED'			=> 'Nie można zainstalować',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Czy na pewno chcesz wykonać dezinstalację wybranych stylów?',
	'COPYRIGHT'						=> 'Autor',

	'DEACTIVATE_DEFAULT'		=> 'Nie można dezaktywować domyślnego stylu.',
	'DELETE_FROM_FS'			=> 'Usuń z katalogu witryny',
	'DELETE_STYLE_FILES_FAILED'	=> 'Podczas usuwania plików stylu „%s” wystąpił błąd.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Pliki stylu „%s” zostały usunięte.',
	'DETAILS'					=> 'Szczegóły',

	'INHERITING_FROM'			=> 'Dziedziczy z',
	'INSTALL_STYLE'				=> 'Zainstaluj',
	'INSTALL_STYLES'			=> 'Zainstaluj styl',
	'INSTALL_STYLES_EXPLAIN'	=> 'Tutaj można zainstalować nowe style.<br /> Jeśli nie możesz znaleźć żądanego stylu na poniższej liście, sprawdź czy został on zainstalowany. Jeśli nie jest zainstalowany, sprawdź czy został prawidłowo przesłany.',
	'INVALID_STYLE_ID'			=> 'Nieprawidłowy ID stylu.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Nie znaleziono stylów odpowiadających twojemu zapytaniu.',
	'NO_UNINSTALLED_STYLE'		=> 'Nie ma żadnego stylu do zainstalowania.',

	'PURGED_CACHE'				=> 'Bufor został wyczyszczony.',

	'REQUIRES_STYLE'			=> 'Ten styl wymaga obecności stylu „%s”.',

	'STYLE_ACTIVATE'			=> 'Aktywuj',
	'STYLE_ACTIVE'				=> 'Aktywny',
	'STYLE_DEACTIVATE'			=> 'Dezaktywuj',
	'STYLE_DEFAULT'				=> 'Ustaw jako domyślny',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Przed ustawieniem danego stylu jako domyślny styl, musi on być aktywowany.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Nieprawidłowy styl macierzysty.',
	'STYLE_ERR_NAME_EXIST'		=> 'Styl o takiej nazwie już istnieje.',
	'STYLE_ERR_STYLE_NAME'		=> 'Należy podać nazwę dla tego stylu.',
	'STYLE_INSTALLED'			=> 'Styl „%s” został zainstalowany.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Wróć do listy zainstalowanych stylów',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Zainstaluj więcej stylów',
	'STYLE_NAME'				=> 'Nazwa stylu',
	'STYLE_NAME_RESERVED'		=> 'Nie można zainstalować stylu „%s”, ponieważ zawiera zarezerwowaną nazwę.',
	'STYLE_NOT_INSTALLED'		=> 'Styl „%s” nie został zainstalowany.',
	'STYLE_PATH'				=> 'Ścieżka do stylu',
	'STYLE_UNINSTALL'			=> 'Odinstaluj',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Nie można wykonać dezinstalacji stylu „%s”, ponieważ stanowi on styl macierzysty dla innych stylów.',
	'STYLE_UNINSTALLED'			=> 'Wykonano dezinstalację stylu „%s”.',
	'STYLE_USED_BY'				=> 'Liczba używających (z robotami)',

	'UNINSTALL_DEFAULT'		=> 'Nie można wykonać dezinstalacji domyślnego stylu.',
));
