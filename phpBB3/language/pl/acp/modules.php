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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Tutaj można zarządzać wszystkimi rodzajami modułów. Należy zwrócić uwagę na to, że panel administracji ma trój–poziomową strukturę menu – Kategoria » Kategoria » Moduł. Inne panele mają dwupoziomową strukturę – Kategoria » Moduł. Nie można tego zmienić. Należy pamiętać, że można się zablokować, jeśli wyłączy się lub usunie moduły odpowiedzialne za zarządzanie modułami.',
	'ADD_MODULE'					=> 'Dodaj moduł',
	'ADD_MODULE_CONFIRM'			=> 'Czy na pewno chcesz dodać zaznaczony moduł z wybranym trybem?',
	'ADD_MODULE_TITLE'				=> 'Dodaj moduł',

	'CANNOT_REMOVE_MODULE'	=> 'Nie można usunąć modułu, ponieważ ma on elementy potomne. Najpierw należy elementy te przenieść lub usunąć.',
	'CATEGORY'				=> 'Kategoria',
	'CHOOSE_MODE'			=> 'Wybierz tryb modułu',
	'CHOOSE_MODE_EXPLAIN'	=> 'Wybierz używany tryb modułu.',
	'CHOOSE_MODULE'			=> 'Wybierz moduł',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Wybierz plik wywoływany przez ten moduł.',
	'CREATE_MODULE'			=> 'Utwórz nowy moduł',

	'DEACTIVATED_MODULE'	=> 'Dezaktywowany moduł',
	'DELETE_MODULE'			=> 'Usuń moduł',
	'DELETE_MODULE_CONFIRM'	=> 'Czy na pewno chcesz usunąć ten moduł?',

	'EDIT_MODULE'			=> 'Edytuj moduł',
	'EDIT_MODULE_EXPLAIN'	=> 'Tutaj można określić ustawienia charakterystyczne dla danego modułu.',

	'HIDDEN_MODULE'			=> 'ukryty',

	'MODULE'					=> 'Moduł',
	'MODULE_ADDED'				=> 'Moduł został dodany.',
	'MODULE_DELETED'			=> 'Moduł został usunięty.',
	'MODULE_DISPLAYED'			=> 'Wyświetlanie modułu',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Jeśli moduł ma być używany, ale niewyświetlany, należy wybrać <samp>Nie</samp>.',
	'MODULE_EDITED'				=> 'Edycja modułu została zakończona.',
	'MODULE_ENABLED'			=> 'Włącz moduł',
	'MODULE_LANGNAME'			=> 'Nazwa modułu',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Tutaj należy podać wyświetlaną nazwę modułu. Użyj stałej językowej, jeśli nazwa jest podawana z pliku językowego.',
	'MODULE_TYPE'				=> 'Typ modułu',

	'NO_CATEGORY_TO_MODULE'	=> 'Nie można zmienić kategorii w moduł. Najpierw należy usunąć lub przenieść wszystkie elementy potomne.',
	'NO_MODULE'				=> 'Nie znaleziono modułu.',
	'NO_MODULE_ID'			=> 'Nie określono ID modułu.',
	'NO_MODULE_LANGNAME'	=> 'Nie określono nazwy języka modułu.',
	'NO_PARENT'				=> 'Nie wybrano rodzica modułu',

	'PARENT'				=> 'Rodzic',
	'PARENT_NO_EXIST'		=> 'Rodzic nie istnieje.',

	'SELECT_MODULE'			=> 'Wybierz moduł',
));
