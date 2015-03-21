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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Czynności',
	'ACL_CAT_CONTENT'		=> 'Treść',
	'ACL_CAT_FORUMS'		=> 'Fora',
	'ACL_CAT_MISC'			=> 'Różne',
	'ACL_CAT_PERMISSIONS'	=> 'Uprawnienia',
	'ACL_CAT_PM'			=> 'Prywatne wiadomości',
	'ACL_CAT_POLLS'			=> 'Ankiety',
	'ACL_CAT_POST'			=> 'Posty',
	'ACL_CAT_POST_ACTIONS'	=> 'Zarządzanie postami',
	'ACL_CAT_POSTING'		=> 'Tworzenie postów',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Ustawienia',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Zarządzanie tematami',
	'ACL_CAT_USER_GROUP'	=> 'Użytkownicy i grupy',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Przeglądanie profili, listy użytkowników i listy użytkowników online',
	'ACL_U_CHGNAME'		=> 'Zmiana nazwy użytkownika',
	'ACL_U_CHGPASSWD'	=> 'Zmiana hasła',
	'ACL_U_CHGEMAIL'	=> 'Zmiana adresu e-mail',
	'ACL_U_CHGAVATAR'	=> 'Zmiana awatara',
	'ACL_U_CHGGRP'		=> 'Zmiana domyślnej grupy użytkownika',
	'ACL_U_CHGPROFILEINFO'	=> 'Zmiana informacji pola profilu',

	'ACL_U_ATTACH'		=> 'Załączanie plików',
	'ACL_U_DOWNLOAD'	=> 'Pobieranie plików',
	'ACL_U_SAVEDRAFTS'	=> 'Zapisywanie kopii roboczych',
	'ACL_U_CHGCENSORS'	=> 'Wyłączanie cenzury słów',
	'ACL_U_SIG'			=> 'Używanie podpisu',

	'ACL_U_SENDPM'		=> 'Wysyłanie prywatnych wiadomości',
	'ACL_U_MASSPM'		=> 'Wysyłanie wiadomości do wielu użytkowników jednocześnie',
	'ACL_U_MASSPM_GROUP'=> 'Wysyłanie wiadomości do grup',
	'ACL_U_READPM'		=> 'Czytanie prywatnych wiadomości',
	'ACL_U_PM_EDIT'		=> 'Edytowanie swoich prywatnych wiadomości',
	'ACL_U_PM_DELETE'	=> 'Usuwanie prywatnych wiadomości ze swoich folderów',
	'ACL_U_PM_FORWARD'	=> 'Przekazywanie prywatnych wiadomości dalej',
	'ACL_U_PM_EMAILPM'	=> 'Wysyłanie prywatnych wiadomości e-mailem',
	'ACL_U_PM_PRINTPM'	=> 'Drukowanie prywatnych wiadomości',
	'ACL_U_PM_ATTACH'	=> 'Załączanie plików w prywatnych wiadomościach',
	'ACL_U_PM_DOWNLOAD'	=> 'Pobieranie plików załączonych w prywatnych wiadomościach',
	'ACL_U_PM_BBCODE'	=> 'Używanie BBCode w prywatnych wiadomościach',
	'ACL_U_PM_SMILIES'	=> 'Zamieszczanie emotikon w prywatnych wiadomościach',
	'ACL_U_PM_IMG'		=> 'Używanie znacznika BBCode [img] w prywatnych wiadomościach',
	'ACL_U_PM_FLASH'	=> 'Używanie znacznika BBCode [flash] w prywatnych wiadomościach',

	'ACL_U_SENDEMAIL'	=> 'Wysyłanie e-maili',
	'ACL_U_SENDIM'		=> 'Wysyłanie błyskawicznych wiadomości',
	'ACL_U_IGNOREFLOOD'	=> 'Ignorowanie limitu anty-przepełnieniowego',
	'ACL_U_HIDEONLINE'	=> 'Ukrywanie obecności na forum',
	'ACL_U_VIEWONLINE'	=> 'Możliwość widzenia ukrytych użytkowników online',
	'ACL_U_SEARCH'		=> 'Przeszukiwanie witryny',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Możliwość widzenia forum',
	'ACL_F_READ'		=> 'Czytanie zawartości forum',
	'ACL_F_SEARCH'		=> 'Przeszukiwanie forum',
	'ACL_F_SUBSCRIBE'	=> 'Obserwowanie forum',
	'ACL_F_PRINT'		=> 'Drukowanie tematów',
	'ACL_F_EMAIL'		=> 'Wysyłanie tematów przez e-mail',
	'ACL_F_BUMP'		=> 'Przesuwanie tematów w górę',
	'ACL_F_USER_LOCK'	=> 'Zamykanie swoich tematów',
	'ACL_F_DOWNLOAD'	=> 'Pobieranie plików',
	'ACL_F_REPORT'		=> 'Zgłaszanie postów',

	'ACL_F_POST'		=> 'Tworzenie nowych tematów',
	'ACL_F_STICKY'		=> 'Przyklejanie tematów',
	'ACL_F_ANNOUNCE'	=> 'Zamieszczanie ogłoszeń',
	'ACL_F_REPLY'		=> 'Odpowiadanie w istniejących tematach',
	'ACL_F_EDIT'		=> 'Edytowanie swoich postów',
	'ACL_F_DELETE'		=> 'Usuwanie swoich postów',
	'ACL_F_SOFTDELETE'	=> 'Ukrywanie swoich postów<br /><em>Moderatorzy posiadający uprawnienia do akceptowania postów mogą przywrócić wyświetlanie ukrytych postów.</em>',
	'ACL_F_IGNOREFLOOD' => 'Ignorowanie limitu anty-przepełnieniowego',
	'ACL_F_POSTCOUNT'	=> 'Zwiększanie licznika postów<br /><em>Funkcja ta dotyczy tylko nowych postów.</em>',
	'ACL_F_NOAPPROVE'	=> 'Pisanie bez konieczności akceptacji',

	'ACL_F_ATTACH'		=> 'Załączanie plików',
	'ACL_F_ICONS'		=> 'Używanie ikon tematów/postów',
	'ACL_F_BBCODE'		=> 'Używanie BBCode',
	'ACL_F_FLASH'		=> 'Używanie znacznika BBCode [flash]',
	'ACL_F_IMG'			=> 'Używanie znacznika BBCode [img]',
	'ACL_F_SIGS'		=> 'Używanie podpisów',
	'ACL_F_SMILIES'		=> 'Zamieszczanie emotikon',

	'ACL_F_POLL'		=> 'Tworzenie ankiet',
	'ACL_F_VOTE'		=> 'Głosowanie w ankietach',
	'ACL_F_VOTECHG'		=> 'Zmiana oddanego głosu',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Edytowanie postów',
	'ACL_M_DELETE'		=> 'Trwałe usuwanie postów',
	'ACL_M_SOFTDELETE'	=> 'Ukrywanie postów<br /><em>Moderatorzy posiadający uprawnienia do akceptowania postów mogą przywrócić wyświetlanie ukrytych postów.</em>',
	'ACL_M_APPROVE'		=> 'Akceptowanie i przywracanie postów',
	'ACL_M_REPORT'		=> 'Zamykanie i usuwanie zgłoszeń',
	'ACL_M_CHGPOSTER'	=> 'Zmiana autora posta',

	'ACL_M_MOVE'	=> 'Przenoszenie tematów',
	'ACL_M_LOCK'	=> 'Zamykanie tematów',
	'ACL_M_SPLIT'	=> 'Dzielenie tematów',
	'ACL_M_MERGE'	=> 'Łączenie tematów',

	'ACL_M_INFO'	=> 'Przeglądanie szczegółów postów',
	'ACL_M_WARN'	=> 'Udzielanie ostrzeżeń<br /><em>To uprawnienie może zostać nadane tylko globalnie. Nie jest zależne od forum.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Zarządzanie blokowaniem<br /><em>To uprawnienie może zostać nadane tylko globalnie. Nie jest zależne od forum..</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Zmiana ustawień forum i sprawdzanie dostępności aktualizacji',
	'ACL_A_SERVER'		=> 'Zmiana ustawień serwera i komunikacji',
	'ACL_A_JABBER'		=> 'Zmiana ustawień Jabbera',
	'ACL_A_PHPINFO'		=> 'Przeglądanie ustawień PHP',

	'ACL_A_FORUM'		=> 'Zarządzanie forami',
	'ACL_A_FORUMADD'	=> 'Dodawanie nowych forów',
	'ACL_A_FORUMDEL'	=> 'Usuwanie forów',
	'ACL_A_PRUNE'		=> 'Czyszczenie forów',

	'ACL_A_ICONS'		=> 'Zmiana ikon tematów, postów i emotikon',
	'ACL_A_WORDS'		=> 'Zmiana cenzury słów',
	'ACL_A_BBCODE'		=> 'Definiowanie nowych znaczników BBCode',
	'ACL_A_ATTACH'		=> 'Zmiana ustawień załączników',

	'ACL_A_USER'		=> 'Zarządzanie użytkownikami<br /><em>To uprawnienie zawiera również prawo do oglądania identyfikatora przeglądarki na liście przeglądających forum.</em>',
	'ACL_A_USERDEL'		=> 'Usuwanie użytkowników, czyszczenie listy',
	'ACL_A_GROUP'		=> 'Zarządzanie grupami',
	'ACL_A_GROUPADD'	=> 'Dodawanie nowych grup',
	'ACL_A_GROUPDEL'	=> 'Usuwanie grup',
	'ACL_A_RANKS'		=> 'Zarządzanie rangami',
	'ACL_A_PROFILE'		=> 'Zarządzanie dodatkowymi polami profilu',
	'ACL_A_NAMES'		=> 'Zarządzanie zabronionymi nazwami',
	'ACL_A_BAN'			=> 'Zarządzanie blokowaniem',

	'ACL_A_VIEWAUTH'	=> 'Przeglądanie zestawów uprawnień',
	'ACL_A_AUTHGROUPS'	=> 'Zmiana uprawnień poszczególnych grup',
	'ACL_A_AUTHUSERS'	=> 'Zmiana uprawnień poszczególnych użytkowników',
	'ACL_A_FAUTH'		=> 'Zmiana uprawnień forum',
	'ACL_A_MAUTH'		=> 'Zmiana uprawnień moderatora',
	'ACL_A_AAUTH'		=> 'Zmiana uprawnień administratora',
	'ACL_A_UAUTH'		=> 'Zmiana uprawnień użytkownika',
	'ACL_A_ROLES'		=> 'Zarządzanie zestawami uprawnień',
	'ACL_A_SWITCHPERM'	=> 'Używanie uprawnień innych użytkowników',

	'ACL_A_STYLES'		=> 'Zarządzanie stylami',
	'ACL_A_EXTENSIONS'	=> 'Zarządzanie rozszerzeniami',
	'ACL_A_VIEWLOGS'	=> 'Przeglądanie dzienników zdarzeń',
	'ACL_A_CLEARLOGS'	=> 'Czyszczenie dzienników zdarzeń',
	'ACL_A_MODULES'		=> 'Zarządzanie modułami',
	'ACL_A_LANGUAGE'	=> 'Zarządzanie pakietami językowymi',
	'ACL_A_EMAIL'		=> 'Masowe wysyłanie e-maili',
	'ACL_A_BOTS'		=> 'Zarządzanie botami',
	'ACL_A_REASONS'		=> 'Zarządzanie powodami zgłoszeń i odrzuceń',
	'ACL_A_BACKUP'		=> 'Tworzenie kopii zapasowych i przywracanie bazy danych',
	'ACL_A_SEARCH'		=> 'Zarządzanie mechanizmami i ustawieniami wyszukiwania',
));
