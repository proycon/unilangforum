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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Tutaj możesz wysłać wiadomość e-mail do wszystkich użytkowników lub do wszystkich członków konkretnej grupy, która ma włączoną <strong>funkcję odbierania masowych wiadomości e-mail</strong>. Aby to osiągnąć e-mail zostanie wysłany na adres e-maila wykonawczego z ukrytą kopią (odbiorca nie będzie widział adresów innych odbiorców) wysłaną do wszystkich odbiorców. Domyślnie ustawionych jest 50 odbiorców. Wysłanie wiadomości do dużej liczby osób może potrwać dłuższą chwilę. Zachowaj cierpliwość i nie przerywaj tej operacji. Po jej zakończeniu zostanie wyświetlone powiadomienie.',
	'ALL_USERS'						=> 'Wszyscy użytkownicy',

	'COMPOSE'				=> 'Utwórz wiadomość',

	'EMAIL_SEND_ERROR'		=> 'Podczas wysyłania wiadomości wystąpiły błędy. Aby zapoznać się ze szczegółami, proszę przejrzeć %sDziennik błędów%s.',
	'EMAIL_SENT'			=> 'Wiadomość została wysłana.',
	'EMAIL_SENT_QUEUE'		=> 'Wiadomość ta oczekuje na wysłanie.',

	'LOG_SESSION'			=> 'Zapisuj sesję mailową do raportu krytycznego',

	'SEND_IMMEDIATELY'		=> 'Wyślij niezwłocznie',
	'SEND_TO_GROUP'			=> 'Wyślij do grupy',
	'SEND_TO_USERS'			=> 'Wyślij do użytkowników',
	'SEND_TO_USERS_EXPLAIN'	=> 'Wprowadzenie tutaj nazw spowoduje zastąpienie wszystkich grup wybranych powyżej. Każdą nazwę użytkownika należy wprowadzić w osobnym wierszu.',

	'MAIL_BANNED'			=> 'Wysyłaj e-maile do zablokowanych użytkowników',
	'MAIL_BANNED_EXPLAIN'	=> 'Tutaj można określić, czy wiadomość wysyłana do wszystkich członków grupy będzie także wysłana do zablokowanych użytkowników.',
	'MAIL_HIGH_PRIORITY'	=> 'Wysoki',
	'MAIL_LOW_PRIORITY'		=> 'Niski',
	'MAIL_NORMAL_PRIORITY'	=> 'Normalny',
	'MAIL_PRIORITY'			=> 'Priorytet',
	'MASS_MESSAGE'			=> 'Treść wiadomości',
	'MASS_MESSAGE_EXPLAIN'	=> 'Treść wiadomości musi być wpisana zwykłym tekstem. Przed wysłaniem wiadomości wszystkie znaczniki zostaną usunięte.',

	'NO_EMAIL_MESSAGE'		=> 'Należy wprowadzić treść wiadomości.',
	'NO_EMAIL_SUBJECT'		=> 'Należy określić temat wiadomości.',
));
