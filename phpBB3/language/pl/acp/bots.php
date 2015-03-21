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
* @Polish locale 2014-07-05 21:45:45 Zespół Olympus.pl $
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Zarządzanie botami',
	'BOTS_EXPLAIN'		=> '„Boty”, „pająki” czy „pełzacze” są programami zbierającymi informacje o strukturze i stronach internetowych używanymi najczęściej przez wyszukiwarki do aktualizacji swoich baz danych. Ponieważ rzadko używają poprawnej sesji, mogą zniekształcać licznik odwiedzin, zwiększając jego wskazania, a czasami uszkadzają indeks stron. Aby zapanować nad tymi problemami, tutaj można zdefiniować typy i dostęp botów.',
	'BOT_ACTIVATE'		=> 'Aktywuj',
	'BOT_ACTIVE'		=> 'Aktywność bota',
	'BOT_ADD'			=> 'Dodaj bota',
	'BOT_ADDED'			=> 'Nowy bot został dodany.',
	'BOT_AGENT'			=> 'Identyfikator bota',
	'BOT_AGENT_EXPLAIN'	=> 'Ciąg znaków określających identyfikator bota. Niepełne dopasowanie jest dozwolone.',
	'BOT_DEACTIVATE'	=> 'Dezaktywuj',
	'BOT_DELETED'		=> 'Bot został usunięty.',
	'BOT_EDIT'			=> 'Edytowanie botów',
	'BOT_EDIT_EXPLAIN'	=> 'Tutaj można dodać lub edytować istniejące wpisy botów. Można zdefiniować identyfikator bota lub adresy, zakres adresów IP do porównania. W trakcie definiowania identyfikatora czy adresu, należy zachować ostrożność. Można także zdefiniować styl i język jaki bot będzie widział, odwiedzając witrynę. Ustawienie prostego stylu dla botów pozwoli zredukować szerokość zajmowanego pasma. Należy pamiętać, aby ustawić odpowiednie uprawnienia dla grupy „Boty”.',
	'BOT_LANG'			=> 'Język dla bota',
	'BOT_LANG_EXPLAIN'	=> 'Język forum prezentowany botowi w trakcie przeglądania.',
	'BOT_LAST_VISIT'	=> 'Ostatnie odwiedziny',
	'BOT_IP'			=> 'Adres IP bota',
	'BOT_IP_EXPLAIN'	=> 'Adresy należy oddzielać przecinkiem (,). Niepełne dopasowanie jest dozwolone.',
	'BOT_NAME'			=> 'Nazwa bota',
	'BOT_NAME_EXPLAIN'	=> 'Stosowana tylko dla wewnętrznej informacji.',
	'BOT_NAME_TAKEN'	=> 'Nazwa ta jest już używana na witrynie i nie może być użyta jako nazwa bota.',
	'BOT_NEVER'			=> 'Nigdy',
	'BOT_STYLE'			=> 'Styl dla bota',
	'BOT_STYLE_EXPLAIN'	=> 'Styl witryny prezentowany botowi.',
	'BOT_UPDATED'		=> 'Bot został zaktualizowany.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Podany identyfikator bota już istnieje. Proszę określić inny.',
	'ERR_BOT_NO_IP'				=> 'Podany adres IP jest nieprawidłowy lub nie został rozpoznany przez serwer.',
	'ERR_BOT_NO_MATCHES'		=> 'Należy dostarczyć przynajmniej jeden identyfikator lub adres IP dla tego bota.',

	'NO_BOT'		=> 'Nie znaleziono bota z podanym ID.',
	'NO_BOT_GROUP'	=> 'Nie można znaleźć grupy bota.',
));
