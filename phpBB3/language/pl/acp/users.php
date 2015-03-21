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
	'ADMIN_SIG_PREVIEW'		=> 'Podgląd podpisu',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nie możesz zmienić statusu tego założyciela na zwykłego użytkownika. Witryna musi mieć przynajmniej jednego aktywnego założyciela. Jeśli chcesz zmienić temu użytkownikowi status założyciela na inny, musisz najpierw promować innego użytkownika na założyciela.',

	'BAN_ALREADY_ENTERED'	=> 'Użytkownik jest już zablokowany. Nie ma potrzeby aktualizowania listy zablokowanych.',
	'BAN_SUCCESSFUL'		=> 'Użytkownik został zablokowany.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Nie masz uprawnień do blokowania anonimowego konta. Uprawnienia dla anonimowych użytkowników można ustawić z poziomu karty Uprawnienia.',
	'CANNOT_BAN_FOUNDER'			=> 'Nie masz uprawnień do blokowania kont założycieli.',
	'CANNOT_BAN_YOURSELF'			=> 'Nie możesz zablokować samego siebie.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nie masz uprawnień do dezaktywowania kont botów. Zamiast tego możesz dezaktywować bota z poziomu strony botów.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nie masz uprawnień do dezaktywowania kont założycieli.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nie możesz dezaktywować swojego własnego konta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nie masz uprawnień do wymuszania ponownego aktywowania kont botów. Zamiast tego możesz dezaktywować bota z poziomu strony botów.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nie masz uprawnień do wymuszania ponownego aktywowania kont założycieli.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nie możesz wymusić ponownego aktywowania swojego własnego konta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Nie możesz usunąć konta gościa.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Nie możesz usunąć kont założyciela.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nie możesz usunąć swojego własnego konta.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Nie możesz promować ignorowanych użytkowników na założycieli.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Przed promocją użytkowników na założycieli, należy ich najpierw uaktywnić. Tylko aktywni użytkownicy mogą być promowani.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Adres e-mail trzeba potwierdzić tylko wtedy, gdy został zmieniony adres e-mail użytkownika.',

	'DELETE_POSTS'			=> 'Usuń także posty',
	'DELETE_USER'			=> 'Usuń użytkownika',
	'DELETE_USER_EXPLAIN'	=> 'Nastąpi całkowite usunięcie użytkownika. Operacji tej nie można odwrócić. Nieprzeczytane prywatne wiadomości wysłane przez tego użytkownika zostaną usunięte i nie będą dostępne dla ich adresatów.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Ponowna aktywacja została wymuszona.',
	'FOUNDER'						=> 'Założyciel',
	'FOUNDER_EXPLAIN'				=> 'Założyciele mają wszystkie uprawnienia administracyjne i tylko inni założyciele mogą ich blokować, usuwać czy zmieniać ich dane.',

	'GROUP_APPROVE'					=> 'Zaakceptuj członka',
	'GROUP_DEFAULT'					=> 'Określ jako domyślną grupę dla członka',
	'GROUP_DELETE'					=> 'Usuń członka z grupy',
	'GROUP_DEMOTE'					=> 'Zdegraduj lidera grupy',
	'GROUP_PROMOTE'					=> 'Promuj na lidera grupy',

	'IP_WHOIS_FOR'			=> 'Poznaj właściciela IP %s',

	'LAST_ACTIVE'			=> 'Ostatnia aktywność',

	'MOVE_POSTS_EXPLAIN'	=> 'Wybierz forum, na które zostaną przeniesione wszystkie posty napisane przez tego użytkownika.',

	'NO_SPECIAL_RANK'		=> 'Nie przydzielono rang specjalnych',
	'NO_WARNINGS'			=> 'Nie ma ostrzeżeń.',
	'NOT_MANAGE_FOUNDER'	=> 'Próbujesz zarządzać użytkownikiem o statusie założyciela. Tylko założyciele mogą zarządzać innymi założycielami.',

	'QUICK_TOOLS'			=> 'Wybierz czynność',

	'REGISTERED'			=> 'Data rejestracji',
	'REGISTERED_IP'			=> 'Zarejestrowany z IP',
	'RETAIN_POSTS'			=> 'Zachowaj posty',

	'SELECT_FORM'			=> 'Wybierz formularz',
	'SELECT_USER'			=> 'Wybierz użytkownika',

	'USER_ADMIN'					=> 'Zarządzanie użytkownikami',
	'USER_ADMIN_ACTIVATE'			=> 'Aktywuj konto',
	'USER_ADMIN_ACTIVATED'			=> 'Użytkownik został aktywowany.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Awatar został usunięty z konta użytkownika.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Zablokuj adres e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Adres e-mail zablokowany z poziomu zarządzania użytkownikami',
	'USER_ADMIN_BAN_IP'				=> 'Zablokuj IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Adres IP zablokowany z poziomu zarządzania użytkownikami',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nazwa użytkownika została zablokowana z poziomu zarządzania użytkownikami',
	'USER_ADMIN_BAN_USER'			=> 'Zablokuj nazwę użytkownika',
	'USER_ADMIN_DEACTIVATE'			=> 'Dezaktywuj konto',
	'USER_ADMIN_DEACTIVED'			=> 'Użytkownik został dezaktywowany.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Usuń wszystkie załączniki',
	'USER_ADMIN_DEL_AVATAR'			=> 'Usuń awatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Wyczyść folder „Wysłane”',
	'USER_ADMIN_DEL_POSTS'			=> 'Usuń wszystkie posty',
	'USER_ADMIN_DEL_SIG'			=> 'Usuń podpis',
	'USER_ADMIN_EXPLAIN'			=> 'Tutaj można zmieniać informacje o użytkownikach i niektóre opcje.',
	'USER_ADMIN_FORCE'				=> 'Wymuś ponowną aktywację kont',
	'USER_ADMIN_LEAVE_NR'			=> 'Usuń z Nowo zarejestrowani',
	'USER_ADMIN_MOVE_POSTS'			=> 'Przenieś wszystkie posty',
	'USER_ADMIN_SIG_REMOVED'		=> 'Podpis został usunięty z konta użytkownika.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Wszystkie załączniki zamieszczone przez tego użytkownika zostały usunięte.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Nie można wyświetlić awatara, ponieważ awatary nie są dozwolone.',
	'USER_AVATAR_UPDATED'			=> 'Dane awatara użytkownika zostały zaktualizowane.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Nie można wyświetlić aktualnego awatara, ponieważ jego typ został zabroniony.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Dodatkowe pola profilu',
	'USER_DELETED'					=> 'Użytkownik został usunięty.',
	'USER_GROUP_ADD'				=> 'Dodaj użytkownika do grupy',
	'USER_GROUP_NORMAL'				=> 'Użytkownik jest członkiem zdefiniowanych przez siebie grup:',
	'USER_GROUP_PENDING'			=> 'Użytkownik oczekuje na przyjęcie do grup',
	'USER_GROUP_SPECIAL'			=> 'Użytkownik jest członkiem grup specjalnych:',
	'USER_LIFTED_NR'				=> 'Usunięto status nowo zarejestrowanego użytkownika.',
	'USER_NO_ATTACHMENTS'			=> 'Nie ma załączonych plików do wyświetlenia.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Nie ma żadnych postów tego użytkownika, które można zachować lub usunąć.',
	'USER_OUTBOX_EMPTIED'			=> 'Folder „Wysłane” został wyczyszczony.',
	'USER_OUTBOX_EMPTY'				=> 'Folder „Wysłane” został już wcześniej wyczyszczony.',
	'USER_OVERVIEW_UPDATED'			=> 'Dane użytkownika zostały zaktualizowane.',
	'USER_POSTS_DELETED'			=> 'Wszystkie posty napisane przez tego użytkownika zostały usunięte.',
	'USER_POSTS_MOVED'				=> 'Posty użytkownika zostały przeniesione do docelowego forum.',
	'USER_PREFS_UPDATED'			=> 'Ustawienia użytkownika zostały zaktualizowane.',
	'USER_PROFILE'					=> 'Profil użytkownika',
	'USER_PROFILE_UPDATED'			=> 'Profil użytkownika został zaktualizowany.',
	'USER_RANK'						=> 'Ranga użytkownika',
	'USER_RANK_UPDATED'				=> 'Ranga użytkownika została zaktualizowana.',
	'USER_SIG_UPDATED'				=> 'Podpis użytkownika został zaktualizowany.',
	'USER_WARNING_LOG_DELETED'		=> 'Nie ma żadnych informacji. Prawdopodobnie wpisy dziennika zostały usunięte.',
	'USER_TOOLS'					=> 'Działania bezpośrednie',
));
