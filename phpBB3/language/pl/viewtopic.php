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
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
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
	'APPROVE'								=> 'Zatwierdź',
	'ATTACHMENT'						=> 'Załącznik',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Funkcje załączników zostały wyłączone.',

	'BOOKMARK_ADDED'		=> 'Zakładka została dodana do tematu.',
	'BOOKMARK_ERR'			=> 'Nie udało się dodać zakładki. Proszę spróbować ponownie.',
	'BOOKMARK_REMOVED'		=> 'Zakładka została usunięta.',
	'BOOKMARK_TOPIC'		=> 'Dodaj zakładkę',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Usuń zakładkę',
	'BUMPED_BY'				=> 'Ostatnio przesunięty w górę %2$s przez: %1$s.',
	'BUMP_TOPIC'			=> 'Przesuń temat w górę',

	'CODE'					=> 'Kod',

	'DELETE_TOPIC'			=> 'Usuń temat',
	'DELETED_INFORMATION'	=> 'Usunięty %2$s przez %1$s',
	'DISAPPROVE'					=> 'Odrzuć',
	'DOWNLOAD_NOTICE'		=> 'Nie masz wymaganych uprawnień, aby zobaczyć pliki załączone do tego posta.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Ostatnio zmieniony %3$s przez %2$s, łącznie zmieniany %1$d raz.',
		2	=> 'Ostatnio zmieniony %3$s przez %2$s, łącznie zmieniany %1$d razy.',
		3	=> 'Ostatnio zmieniony %3$s przez %2$s, łącznie zmieniany %1$d razy.',
	),
	'EMAIL_TOPIC'			=> 'Powiadom o tym temacie',
	'ERROR_NO_ATTACHMENT'	=> 'Wybrany załącznik już nie istnieje',

	'FILE_NOT_FOUND_404'	=> 'Plik <strong>%s</strong> nie istnieje.',
	'FORK_TOPIC'			=> 'Kopiuj temat',
	'FULL_EDITOR'			=> 'Pełny edytor i podgląd',

	'LINKAGE_FORBIDDEN'		=> 'Nie masz uprawnień do przeglądania, pobierania lub wstawiania odnośników z/do tej strony.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Powiadomienie o tym temacie zostało ci dostarczone. Zaloguj się, aby go przejrzeć.',
	'LOGIN_VIEWTOPIC'		=> 'Aby przejrzeć ten temat, musisz się zalogować.',

	'MAKE_ANNOUNCE'				=> 'Zmień na ogłoszenie',
	'MAKE_GLOBAL'				=> 'Zmień na ogłosz. globalne',
	'MAKE_NORMAL'				=> 'Zmień na zwykły temat',
	'MAKE_STICKY'				=> 'Zmień na przyklejony',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Można wybrać tylko <strong>%d.</strong> opcję',
		2	=> 'Można maksymalnie wybrać <strong>%d</strong> opcje',
		3	=> 'Można maksymalnie wybrać <strong>%d</strong> opcji',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Załącznik <strong>%s</strong> nie jest już dostępny',
	'MOVE_TOPIC'				=> 'Przenieś temat',

	'NO_ATTACHMENT_SELECTED'=> 'Nie wybrano załącznika do pobrania lub przeglądania.',
	'NO_NEWER_TOPICS'		=> 'Na tym forum nie ma nowszych tematów.',
	'NO_OLDER_TOPICS'		=> 'Na tym forum nie ma starszych tematów.',
	'NO_UNREAD_POSTS'		=> 'Na tym forum nie ma nowych nieprzeczytanych postów.',
	'NO_VOTE_OPTION'		=> 'Aby zagłosować musisz wybrać opcję.',
	'NO_VOTES'				=> 'Brak głosów',

	'POLL_ENDED_AT'			=> 'Czas głosowania minął %s',
	'POLL_RUN_TILL'			=> 'Czas głosowania minie %s',
	'POLL_VOTED_OPTION'		=> 'Oddano głos na tę opcję',
	'POST_DELETED_RESTORE'	=> 'Ten post został usunięty. Nie można go przywrócić',
	'PRINT_TOPIC'			=> 'Podgląd wydruku',

	'QUICK_MOD'				=> 'Moderowanie',
	'QUICKREPLY'			=> 'Szybka odpowiedź',
	'QUOTE'					=> 'Cytuj',

	'REPLY_TO_TOPIC'		=> 'Odpowiedz w temacie',
	'RESTORE'				=> 'Przywróć',
	'RESTORE_TOPIC'			=> 'Przywróć temat',
	'RETURN_POST'			=> '%sPowrót do posta%s',

	'SUBMIT_VOTE'			=> 'Wyślij',

	'TOPIC_TOOLS'			=> 'Narzędzia tematu',
	'TOTAL_VOTES'			=> 'Liczba głosów',

	'UNLOCK_TOPIC'			=> 'Odblokuj temat',

	'VIEW_INFO'				=> 'Szczegóły posta',
	'VIEW_NEXT_TOPIC'		=> 'Następny temat',
	'VIEW_PREVIOUS_TOPIC'	=> 'Poprzedni temat',
	'VIEW_RESULTS'			=> 'Pokaż wyniki',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> 'Posty: %d',
		2	=> 'Posty: %d',
		3	=> 'Posty: %d',
	),
	'VIEW_UNREAD_POST'		=> 'Pierwszy nieprzeczytany post',
	'VOTE_SUBMITTED'		=> 'Twój głos został zarejestrowany.',
	'VOTE_CONVERTED'		=> 'W skonwertowanych ankietach nie ma możliwości zmiany oddanego głosu.',

));
