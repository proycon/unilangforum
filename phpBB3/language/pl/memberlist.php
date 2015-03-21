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
* @Polish locale 2014-11-29 18:24:32 Zespół Olympus.pl $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najaktywniejszy na forum',
	'ACTIVE_IN_TOPIC'		=> 'Najaktywniejszy w temacie',
	'ADD_FOE'				=> 'Dodaj do wrogów',
	'ADD_FRIEND'			=> 'Dodaj do przyjaciół',
	'AFTER'					=> 'Po',

	'ALL'					=> 'Wszyscy',

	'BEFORE'				=> 'Przed',

	'CC_SENDER'				=> 'Wyślij kopię tej wiadomości do nadawcy',
	'CONTACT_ADMIN'			=> 'Kontakt z administratorem witryny',

	'DEST_LANG'				=> 'Język',
	'DEST_LANG_EXPLAIN'		=> 'Wybierz właściwy – jeśli jest dostępny – język dla odbiorcy tej wiadomości.',

	'EDIT_PROFILE'			=> 'Edytuj profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Wiadomość zostanie wysłana jako zwykły tekst bez znaczników HTML i BBCode. Twój adres e-mail zostanie ustawiony jako adres zwrotny tej wiadomości.',
	'EMAIL_DISABLED'		=> 'Przepraszamy, ale wszystkie funkcje e-maili zostały wyłączone.',
	'EMAIL_SENT'			=> 'Wiadomość e-mail została wysłana.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Wiadomość zostanie wysłana jako zwykły tekst bez znaczników HTML i BBCode. Informacje o temacie zostały załączone w wiadomości. Twój adres e-mail zostanie ustawiony jako adres zwrotny tej wiadomości.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Należy podać aktywny adres e-mail odbiorcy.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Należy wpisać treść wiadomości.',
	'EMPTY_MESSAGE_IM'		=> 'Należy wpisać treść wiadomości.',
	'EMPTY_NAME_EMAIL'		=> 'Należy podać rzeczywistą nazwę odbiorcy.',
	'EMPTY_SENDER_EMAIL'	=> 'Należy podać ważny adres e-mail.',
	'EMPTY_SENDER_NAME'		=> 'Należy podać nazwę.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Należy podać temat wiadomości.',
	'EQUAL_TO'				=> 'Liczba równa',

	'FIND_USERNAME_EXPLAIN'	=> 'Tego formularza można użyć do szukania użytkowników. Nie trzeba wypełniać wszystkich pól. Można użyć gwiazdki (*) jako zamiennika dowolnego ciągu znaków. Datę należy wprowadzić w formacie <kbd>RRRR-MM-DD</kbd>, np. <samp>2007-08-31</samp>. Można też na poniżej wyświetlonej liście odszukać użytkownika, kliknąć jego nazwę, by zobaczyć profil tego użytkownika lub kliknąć odnośnik [Wybierz], aby przeprowadzać dalsze operacje.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nie możesz teraz wysłać kolejnej wiadomości. Spróbuj ponownie za chwilę.',

	'GROUP_LEADER'			=> 'Lider grupy',

	'HIDE_MEMBER_SEARCH'	=> 'Ukryj wyszukiwanie użytkowników',

	'IM_ADD_CONTACT'		=> 'Dodaj kontakt',
	'IM_DOWNLOAD_APP'		=> 'Pobierz program',
	'IM_JABBER'				=> 'Użytkownicy mogą mieć włączoną funkcję nieodbierania niechcianych wiadomości.',
	'IM_JABBER_SUBJECT'		=> 'To jest wiadomość wygenerowana automatycznie. Nie odpowiadaj na nią! Wiadomość od użytkownika %1$s wysłana %2$s.',
	'IM_MESSAGE'			=> 'Twoja wiadomość',
	'IM_NAME'				=> 'Twoja nazwa',
	'IM_NO_DATA'			=> 'Nie ma stosownych informacji kontaktowych dla tego użytkownika.',
	'IM_NO_JABBER'			=> 'Kontakty bezpośrednie z użytkownikami protokółu Jabber nie są obsługiwane przez tę witrynę. Aby kontaktować się z powyższym odbiorcą, musisz mieć zainstalowanego klienta protokółu Jabber.',
	'IM_RECIPIENT'			=> 'Odbiorca',
	'IM_SEND'				=> 'Wyślij',
	'IM_SEND_MESSAGE'		=> 'Wyślij wiadomość',
	'IM_SENT_JABBER'		=> 'Wiadomość do użytkownika %1$s została wysłana.',
	'IM_USER'				=> 'Wyślij wiadomość',

	'LAST_ACTIVE'				=> 'Ostatnio aktywny',
	'LESS_THAN'					=> 'Liczba < niż',
	'LIST_USERS'				=> array(
		1	=> 'Użytkownicy: %d',
		2	=> 'Użytkownicy: %d',
		3	=> 'Użytkownicy: %d',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Aby obejrzeć listę członków zespołu administracyjnego, musisz się zalogować.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Aby obejrzeć listę użytkowników, musisz się zalogować.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Aby szukać użytkowników, musisz się zalogować.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Aby oglądać profile, musisz się zalogować.',

	'MORE_THAN'				=> 'Liczba > niż',

	'NO_CONTACT_FORM'		=> 'Formularz kontaktowy z administratorem witryny został wyłączony.',
	'NO_CONTACT_PAGE'		=> 'Strona kontaktowa z administratorem witryny została wyłączona.',
	'NO_EMAIL'				=> 'Nie masz uprawnień, aby wysłać e-maila do tego użytkownika.',
	'NO_VIEW_USERS'			=> 'Nie masz uprawnień, aby przeglądać listę użytkowników lub profile.',

	'ORDER'					=> 'Kierunek',
	'OTHER'					=> 'Inny',

	'POST_IP'				=> 'Napisano z IP/domeny',

	'REAL_NAME'				=> 'Nazwa odbiorcy',
	'RECIPIENT'				=> 'Odbiorca',
	'REMOVE_FOE'			=> 'Usuń wroga',
	'REMOVE_FRIEND'			=> 'Usuń przyjaciela',

	'SELECT_MARKED'			=> 'Dodaj zaznaczonych',
	'SELECT_SORT_METHOD'	=> 'Wybierz metodę sortowania',
	'SENDER_EMAIL_ADDRESS'	=> 'Twój adres e-mail',
	'SENDER_NAME'			=> 'Twoja nazwa',
	'SEND_ICQ_MESSAGE'		=> 'Wyślij wiadomość za pomocą ICQ',
	'SEND_IM'				=> 'Wiadomości błyskawiczne',
	'SEND_JABBER_MESSAGE'	=> 'Wyślij wiadomość za pomocą Jabbera',
	'SEND_MESSAGE'			=> 'Wiadomość',
	'SEND_YIM_MESSAGE'		=> 'Wyślij wiadomość za pomocą YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Ostatnia aktywność',
	'SORT_POST_COUNT'		=> 'Liczba postów',

	'USERNAME_BEGINS_WITH'	=> 'Nazwa użytkownika zaczyna się na',
	'USER_ADMIN'			=> 'Zarządzaj',
	'USER_BAN'				=> 'Blokowanie',
	'USER_FORUM'			=> 'Statystyki użytkownika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Jeszcze nie wysłano żadnego przypomnienia',
		1		=> 'Wysłano %1$d przypomnienie<br />» %2$s',
		2		=> 'Wysłano %1$d przypomnienia<br />» %2$s',
		3		=> 'Wysłano %1$d przypomnień<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Obecność na forum',
	'USERS_PER_PAGE'		=> 'Użytkownicy na stronie',

	'VIEWING_PROFILE'		=> 'Oglądasz profil – %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Zobacz profil na Facebooku',
	'VIEW_SKYPE_PROFILE'	=> 'Zobacz profil na Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Zobacz profil na Twitterze',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Zobacz kanał YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Zobacz profil na Google+',
));
