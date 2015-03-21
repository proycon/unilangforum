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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Tutaj można usuwać lub dezaktywować użytkowników tej witryny. Konta można filtrować, stosując różne kryteria, np. liczbę postów, aktywność, itp. Kryteria te można łączyć w celu zawężenia filtrowania do konkretnych kont. Na przykład można usunąć użytkowników aktywnych przed 2002-01-01 z liczbą postów mniejszą niż 10. W polach tekstowych można używać wieloznacznika (*). Alternatywnie można bezpośrednio w polu tekstowym utworzyć listę użytkowników do usunięcia – każdy użytkownik musi być w osobnym wierszu. Wówczas jakiekolwiek wprowadzone inne kryteria będą ignorowane. Proszę ostrożnie posługiwać się tą funkcją, ponieważ skutków jej działania nie można odwrócić.',

	'CRITERIA'				=> 'Kryteria',

	'DEACTIVATE_DELETE'			=> 'Dezaktywuj lub usuń',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Wybierz opcję – dezaktywować użytkownika, czy go usunąć. Pamiętaj, że kont usuniętych użytkowników nie można odtworzyć!',
	'DELETE_USERS'				=> 'Usuń',
	'DELETE_USER_POSTS'			=> 'Usuń posty usuwanych użytkowników',
	'DELETE_USER_POSTS_EXPLAIN' => 'Usuwa posty napisane przez usuwanych użytkowników. Nie oddziałuje na posty użytkowników dezaktywowanych.',

	'JOINED_EXPLAIN'			=> 'Wprowadź datę w formacie <kbd>RRRR-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Wprowadź datę w formacie <kbd>RRRR-MM-DD</kbd>. Wprowadź <kbd>0000-00-00</kbd>, aby usunąć użytkowników, którzy nigdy się nie zalogowali. Warunki <em>Przed</em> i <em>Po</em> będą ignorowane.',

	'POSTS_ON_QUEUE'			=> 'Posty oczekujące na zaakceptowanie',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Ma zastosowanie tylko do użytkowników w ramach wybranej grupy.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Wszystkie grupy',
	'PRUNE_USERS_LIST'				=> 'Użytkownicy do usunięcia',
	'PRUNE_USERS_LIST_DELETE'		=> 'Stosując wybrane kryteria następujące konta użytkowników zostaną usunięte. Z listy użytkowników do usunięcia, można usuwać użytkowników, odznaczając pole wyboru znajdujące się obok ich nazwy.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Stosując wybrane kryteria następujące konta użytkowników zostaną dezaktywowane. Z listy użytkowników do dezaktywacji, można usuwać użytkowników, odznaczając pole wyboru znajdujące się obok ich nazwy',

	'SELECT_USERS_EXPLAIN'		=> 'Wprowadź tutaj nazwy użytkowników, których konta zostaną usunięte przy zastosowaniu kryteriów określonych powyżej. Założycieli nie można usuwać.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Dezaktywowano wybranych użytkowników.',
	'USER_DELETE_SUCCESS'		=> 'Usunięto wybranych użytkowników.',
	'USER_PRUNE_FAILURE'		=> 'Nie ma użytkowników spełniających wybrane kryteria.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Wprowadzona data jest nieprawidłowa. Data powinna być wprowadzona w formacie <kbd>RRRR-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Tutaj można usunąć dowolny temat bez odpowiedzi bądź nieoglądany w ciągu określonej liczby dni. Jeśli nie zostanie określona liczba dni, wszystkie tematy zostaną usunięte. Domyślnie nie zostaną usunięte tematy, w których są zamieszczone ogłoszenia, przyklejone posty i aktywne ankiety.',

	'FORUM_PRUNE'		=> 'Czyszczenie forum',

	'NO_PRUNE'			=> 'Nie ma forów do wyczyszczenia.',

	'SELECTED_FORUM'	=> 'Wybrane forum',
	'SELECTED_FORUMS'	=> 'Wybrane fora',

	'POSTS_PRUNED'					=> 'Usunięte posty',
	'PRUNE_ANNOUNCEMENTS'			=> 'Usuń ogłoszenia',
	'PRUNE_FINISHED_POLLS'			=> 'Usuń zamknięte ankiety',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Usuwa tematy z wygasłymi ankietami.',
	'PRUNE_FORUM_CONFIRM'			=> 'Czy na pewno chcesz wyczyścić zaznaczone fora, stosując wybrane kryteria? Operacji tej nie można odwrócić.',
	'PRUNE_NOT_POSTED'				=> 'Liczba dni od ostatniej publikacji',
	'PRUNE_NOT_VIEWED'				=> 'Liczba dni od ostatnich odwiedzin',
	'PRUNE_OLD_POLLS'				=> 'Usuń stare ankiety',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Usuwa tematy zawierające ankiety, w których nie oddano głosów w czasie aktywności ankiety.',
	'PRUNE_STICKY'					=> 'Usuń przyklejone posty',
	'PRUNE_SUCCESS'					=> 'Czyszczenie forum zostało zakończone.',

	'TOPICS_PRUNED'		=> 'Usunięte tematy',
));
