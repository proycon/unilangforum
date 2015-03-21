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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 godzina',
	'30_MINS'		=> '30 minut',
	'6_HOURS'		=> '6 godzin',

	'ACP_BAN_EXPLAIN'	=> 'Tutaj można blokować użytkowników wg nazwy użytkownika, adresu e-mail lub IP. W ten sposób można uniemożliwić dostęp do dowolnej części witryny. Można także podać krótki (maksymalnie 3000 znaków) powód zablokowania. Informacja ta będzie wyświetlona w dzienniku administratora. Można również określić czas trwania blokady. Aby zamiast czasu trwania blokady określić datę zakończenia blokady, należy w menu wyboru czasu trwania blokady wybrać <span style="text-decoration: underline;">Do –&gt;</span> i wprowadzić datę zakończenia blokady w formacie <kbd>RRRR-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Wyklucz z blokowania',
	'BAN_LENGTH'			=> 'Czas trwania blokady',
	'BAN_REASON'			=> 'Powód zablokowania',
	'BAN_GIVE_REASON'		=> 'Powód wyświetlany osobie zablokowanej',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista blokad została zaktualizowana.',
	'BANNED_UNTIL_DATE'		=> 'do %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (do %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Blokowanie adresów e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Włączenie tej funkcji spowoduje wykluczenie wprowadzonego adresu e-mail ze wszystkich blokad.',
	'EMAIL_BAN_EXPLAIN'			=> 'Aby zablokować jednocześnie kilka adresów e-mail, należy wprowadzić każdy adres w nowym, osobnym wierszu. Można użyć gwiazdki (*) jako elementu zastępującego część adresu, np. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, itp.',
	'EMAIL_NO_BANNED'			=> 'Nie ma zablokowanych adresów e-mail',
	'EMAIL_UNBAN'				=> 'Odblokowywanie lub usuwanie wykluczeń adresów e-mail',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Można usunąć blokadę lub wykluczenie wielu adresów e-mail w jednym kroku, używając odpowiednich kombinacji klawiszy myszy i klawiatury właściwych dla danego systemu operacyjnego i przeglądarki. Wykluczone adresy e-mail są wyróżnione.',

	'IP_BAN'					=> 'Blokowanie adresów IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Włączenie tej funkcji spowoduje wykluczenie wprowadzonego adresu IP ze wszystkich blokad.',
	'IP_BAN_EXPLAIN'			=> 'Aby zablokować jednocześnie kilka różnych adresów IP lub nazw serwerów, należy wprowadzić każdy z nich w nowym, osobnym wierszu. Aby określić zakres adresów IP, należy oddzielić początek i koniec zakresu myślnikiem (–). Można używać gwiazdki (*) jako wieloznacznika.',
	'IP_HOSTNAME'				=> 'Adresy IP lub nazwy serwerów',
	'IP_NO_BANNED'				=> 'Nie ma zablokowanych adresów IP',
	'IP_UNBAN'					=> 'Odblokowywanie lub usuwanie wykluczeń adresów IP',
	'IP_UNBAN_EXPLAIN'			=> 'Można usunąć blokadę lub wykluczenie wielu adresów IP w jednym kroku, używając odpowiednich kombinacji klawiszy myszy i klawiatury właściwych dla danego systemu operacyjnego i przeglądarki. Wykluczone adresy IP są wyróżnione.',

	'LENGTH_BAN_INVALID'		=> 'Data powinna mieć format <kbd>RRRR-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Zablokowany',
	'OPTIONS_EXCLUDED'			=> 'Wykluczony',

	'PERMANENT'		=> 'Na stałe',

	'UNTIL'						=> 'Do',
	'USER_BAN'					=> 'Blokowanie wg nazwy użytkownika',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Włączenie tej funkcji spowoduje wykluczenie wprowadzonej nazwy użytkownika ze wszystkich blokad.',
	'USER_BAN_EXPLAIN'			=> 'Można zablokować wielu użytkowników w jednym kroku poprzez wprowadzenie każdej nazwy użytkownika w nowym, oddzielnym wierszu. Można użyć narzędzia <strong>Znajdź użytkownika</strong>, aby wyszukać i automatycznie dodać użytkowników.',
	'USER_NO_BANNED'			=> 'Nie ma zablokowanych użytkowników',
	'USER_UNBAN'				=> 'Odblokowywanie lub usuwanie wykluczeń wg nazwy użytkownika',
	'USER_UNBAN_EXPLAIN'		=> 'Można usunąć blokadę lub wykluczenie wielu użytkowników w jednym kroku, używając odpowiednich kombinacji klawiszy myszy i klawiatury właściwych dla danego systemu operacyjnego i przeglądarki. Wykluczone nazwy użytkowników są wyróżnione.',
));
