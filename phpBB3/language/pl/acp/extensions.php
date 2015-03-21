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
* @Polish locale 2014-10-05 21:45:45 Zespół Olympus.pl $
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
	'EXTENSION'					=> 'Rozszerzenie',
	'EXTENSIONS'				=> 'Rozszerzenia',
	'EXTENSIONS_ADMIN'			=> 'Menedżer rozszerzeń',
	'EXTENSIONS_EXPLAIN'		=> 'Menedżer rozszerzeń to narzędzie umożliwiające zarządzanie rozszerzeniami i przeglądanie informacji o nich.',
	'EXTENSION_INVALID_LIST'	=> 'Rozszerzenie „%s” jest nieprawidłowe.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Wybrane rozszerzenie jest niedostępne dla tej witryny. Sprawdź czy zainstalowane wersje phpBB i PHP są zgodne z wersjami wymaganymi przez rozszerzenie – zobacz szczegółowe informacje na ten temat.',
	'EXTENSION_DIR_INVALID'		=> 'Wybrane rozszerzenie ma nieprawidłową strukturę i nie można go włączyć.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Wybranego rozszerzenia nie można włączyć. Sprawdź jego wymagania.',

	'DETAILS'				=> 'Szczegóły',

	'EXTENSIONS_DISABLED'	=> 'Rozszerzenia wyłączone',
	'EXTENSIONS_ENABLED'	=> 'Rozszerzenia włączone',

	'EXTENSION_DELETE_DATA'	=> 'Usuń dane',
	'EXTENSION_DISABLE'		=> 'Wyłącz',
	'EXTENSION_ENABLE'		=> 'Włącz',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Usunięcie danych rozszerzenia powoduje usunięcie wszystkich jego danych i ustawień. Pliki rozszerzenia pozostaną i będzie można je ponownie włączyć.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Wyłączenie rozszerzenia powoduje wyłączenie jego działania, ale wszystkie pliki dane i ustawienia pozostają bez zmian, są usuwane wszystkie funkcjonalności dodane przez rozszerzenie',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Włączenie rozszerzenia umożliwia używanie go na witrynie.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Trwa usuwanie danych rozszerzenia. Nie opuszczaj tej strony, ani jej nie odświeżaj do czasu zakończenia operacji.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Trwa wyłączanie rozszerzenia. Nie opuszczaj tej strony, ani jej nie odświeżaj do czasu zakończenia operacji.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Trwa instalowanie rozszerzenia. Nie opuszczaj tej strony, ani jej nie odświeżaj do czasu zakończenia operacji.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Dane rozszerzenia zostały usunięte',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Rozszerzenie zostało wyłączone',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Rozszerzenie zostało włączone',

	'EXTENSION_NAME'			=> 'Nazwa rozszerzenia',
	'EXTENSION_ACTIONS'			=> 'Działanie',
	'EXTENSION_OPTIONS'			=> 'Opcje',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Aktualizacja rozszerzenia',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Wyłącz rozszerzenie</li>
			<li>Usuń pliki rozszerzenia</li>
			<li>Prześlij nowe pliki</li>
			<li>Włącz rozszerzenie</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Całkowite usuwanie rozszerzenia',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Wyłącz rozszerzenie</li>
			<li>Usuń dane rozszerzenia</li>
			<li>Usuń pliki rozszerzenia</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Czy na pewno chcesz usunąć dane skojarzone z „%s”?<br /><br />Spowoduje to usunięcie wszystkich danych i ustawień rozszerzenia. Tej operacji nie można cofnąć!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Czy na pewno chcesz wyłączyć rozszerzenie „%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Czy na pewno chcesz włączyć rozszerzenie „%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Czy na pewno chcesz używać niestabilnej wersji?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Wróć do listy rozszerzeń',

	'EXT_DETAILS'			=> 'Szczegóły rozszerzenia',
	'DISPLAY_NAME'			=> 'Wyświetlana nazwa',
	'CLEAN_NAME'			=> 'Nazwa',
	'TYPE'					=> 'Typ',
	'DESCRIPTION'			=> 'Opis',
	'VERSION'				=> 'Wersja',
	'HOMEPAGE'				=> 'Strona domowa',
	'PATH'					=> 'Ścieżka do pliku',
	'TIME'					=> 'Data wydania',
	'LICENSE'				=> 'Licencja',

	'REQUIREMENTS'			=> 'Wymagania',
	'PHPBB_VERSION'			=> 'Wersja phpBB',
	'PHP_VERSION'			=> 'Wersja PHP',
	'AUTHOR_INFORMATION'	=> 'Informacje o autorze',
	'AUTHOR_NAME'			=> 'Nazwa',
	'AUTHOR_EMAIL'			=> 'E-mail',
	'AUTHOR_HOMEPAGE'		=> 'Strona domowa',
	'AUTHOR_ROLE'			=> 'Uprawnienia',

	'NOT_UP_TO_DATE'		=> '%s jest nieaktualne',
	'UP_TO_DATE'			=> '%s jest aktualne',
	'ANNOUNCEMENT_TOPIC'	=> 'Informacje o wydaniu',
	'DOWNLOAD_LATEST'		=> 'Pobierz',
	'NO_VERSIONCHECK'		=> 'Nie ma nowej wersji.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Sprawdź dostępność aktualizacji',
	'FORCE_UNSTABLE'					=> 'Zawsze sprawdzaj dostępność wersji rozwojowych',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Ustawienia',

	'META_FIELD_NOT_SET'	=> 'Wymagane dane %s nie zostały określone.',
	'META_FIELD_INVALID'	=> 'Dane %s są nieprawidłowe.',
));
