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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Czas od opublikowania ostatniego posta',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Liczba dni od opublikowania ostatniego posta, po których temat zostanie automatycznie usunięty.',
	'AUTO_PRUNE_FREQ'			=> 'Częstotliwość czyszczenia tematów',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Liczba dni pomiędzy kolejnymi czyszczeniami.',
	'AUTO_PRUNE_VIEWED'			=> 'Czas od ostatnich odwiedzin',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Liczba dni od ostatnich odwiedzin tematu, po których zostanie on automatycznie usunięty.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Częstotliwość czyszczenia pozostałości po przeniesionych tematach',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Czas od usunięcia tematu',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Liczba dni po upływie, których pozostałość po przeniesionym temacie zostanie usunięta.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Liczba dni pomiędzy kolejnymi czyszczeniami.',

	'CONTINUE'						=> 'Kontynuuj',
	'COPY_PERMISSIONS'				=> 'Kopiuj uprawnienia z',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Aby ułatwić sobie określanie uprawnień dla nowego forum, możesz skopiować uprawnienia istniejącego forum.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Tworzone forum będzie miało takie same uprawnienia, jak wybrane forum. Jeśli nie wybrano forum, utworzone forum do czasu określenia uprawnień nie będzie widoczne.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Jeśli zostanie wybrana opcja skopiowania uprawnień, forum będzie miało takie same uprawnienia, jak wybrane forum. Operacja ta spowoduje zastąpienie uprawnień wcześniej określonych dla tego forum uprawnieniami wybranego forum. Jeśli nie wybrano forum, obecne uprawnienia zostaną zachowane.',
	'COPY_TO_ACL'					=> 'Alternatywnie możesz %sokreślić nowe uprawnienia%s dla tego forum.',
	'CREATE_FORUM'					=> 'Utwórz forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Usuń zawartość lub przenieś do forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Usuń subfora lub przenieś do forum',
	'DEFAULT_STYLE'						=> 'Domyślny styl',
	'DELETE_ALL_POSTS'					=> 'Usuń posty',
	'DELETE_SUBFORUMS'					=> 'Usuń subfora i posty',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Wyświetlaj aktywne tematy',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Jeśli wybrano <samp>Tak</samp>, w wybranych subforach będą wyświetlane aktywne tematy.',

	'EDIT_FORUM'					=> 'Edytuj forum',
	'ENABLE_INDEXING'				=> 'Indeksowanie szukania',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Jeśli wybrano <samp>Tak</samp>, posty zamieszczone na tym forum będą indeksowane dla celów wyszukiwania.',
	'ENABLE_POST_REVIEW'			=> 'Modyfikowanie postów',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Jeśli wybrano <samp>Tak</samp>, użytkownicy będą mogli modyfikować swoje posty, jeśli w wątku, w trakcie pisania przez nich posta, zostały opublikowane inne posty. Funkcja ta powinna być wyłączona dla forów typu „czat”.',
	'ENABLE_QUICK_REPLY'			=> 'Szybka odpowiedź',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Jeśli funkcja jest włączona, użytkownicy tego forum będą mieli dostęp do panelu szybkiej odpowiedzi. Aby ta funkcja działała, panel musi być włączony globalnie. Dostęp do panelu będą mieli tylko użytkownicy, którzy mają uprawnienia do zamieszczania postów na tym forum.',
	'ENABLE_RECENT'					=> 'Wyświetlaj aktywne tematy',
	'ENABLE_RECENT_EXPLAIN'			=> 'Jeśli wybrano <samp>Tak</samp>, tematy zamieszczone na tym forum – jeśli spełniają warunki aktywnych tematów – będą wyświetlane na liście aktywnych tematów.',
	'ENABLE_TOPIC_ICONS'			=> 'Ikony tematów',

	'FORUM_ADMIN'						=> 'Zarządzanie forami',
	'FORUM_ADMIN_EXPLAIN'				=> 'W phpBB3 wszystko jest oparte na forach. Występują trzy typy forów: <em>Kategoria</em>, to forum specjalne – zawiera tylko subfora, nie można na nim umieszczać tematów ani pisać postów, działa podobnie, jak kategoria w skrypcie phpBB2, <em>Forum</em> – to fora, na których można tworzyć tematy, pisać posty, zamieszczać grafikę itp., <em>Odnośnik</em> – to fora odnośniki, po kliknięciu zawartego w nich odnośnika tylko przekierowują do podanego adresu URL. Każde forum może mieć nielimitowaną liczbę subforów. Można określić czy na danym forum można tworzyć tematy i zamieszczać posty. Tutaj można dodawać, edytować, usuwać, zamykać, otwierać oddzielne fora, jak również określać dodatkową kontrolę. Jeśli temat i posty zgubiły synchronizację, można wykonać ponowną synchronizację forum. <strong>Aby nowo utworzone fora były wyświetlane, należy skopiować lub określić dla nich odpowiednie uprawnienia</strong>.',
	'FORUM_AUTO_PRUNE'					=> 'Czyść automatycznie tematy',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Włączenie tej funkcji spowoduje automatyczne czyszczenie tematów forum. Poniżej należy określić parametry (częstotliwość/okres czasu) czyszczenia.',
	'FORUM_CREATED'						=> 'Forum zostało utworzone.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametry czyszczenia nie mogą być wartościami ujemnymi.',
	'FORUM_DESC_TOO_LONG'				=> 'Opis forum jest za długi – może zawierać nie więcej niż 4000 znaków.',
	'FORUM_DELETE'						=> 'Usuń forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Za pomocą tego formularza można usunąć forum. Jeśli na forum można zamieszczać tematy, posty i inne elementy, tutaj można określić gdzie umieścić wszystkie tematy lub fora, jakie ono zawiera.',
	'FORUM_DELETED'						=> 'Forum zostało usunięte.',
	'FORUM_DESC'						=> 'Opis',
	'FORUM_DESC_EXPLAIN'				=> 'Wprowadzone tutaj znaczniki HTML będą wyświetlane tak, jak je widać w polu obok.',
	'FORUM_EDIT_EXPLAIN'				=> 'Na poniższym formularzu można określić parametry tworzonego forum. Uprawnienia moderacyjne i uprawnienia na forum dla każdego użytkownika, czy grupy użytkowników są ustawiane z poziomu uprawnień forum.',
	'FORUM_IMAGE'						=> 'Obrazek forum',
	'FORUM_IMAGE_EXPLAIN'				=> 'Lokalizacja dodatkowego obrazka do skojarzenia z tym forum – relatywna do katalogu głównego phpB.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Nie ma takiego obrazka forum',
	'FORUM_LINK_EXPLAIN'				=> 'Pełny adres URL zawierający protokół, np.: <samp>http://</samp> do lokalizacji, gdzie zostanie przekierowany użytkownik po kliknięciu nazwy forum typu „Odnośnik”, np.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Śledź przekierowania odnośnika',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Włączenie tej funkcji spowoduje zapisywanie kliknięć odnośnika i wyświetlanie na forum typu „Odnośnik” informacji o liczbie kliknięć.',
	'FORUM_NAME'						=> 'Nazwa forum',
	'FORUM_NAME_EMPTY'					=> 'Należy wprowadzić nazwę tego forum.',
	'FORUM_PARENT'						=> 'Forum macierzyste',
	'FORUM_PASSWORD'					=> 'Hasło forum',
	'FORUM_PASSWORD_CONFIRM'			=> 'Potwierdź hasło',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Potwierdzenie jest wymagane tylko w przypadku, gdy zostało wprowadzone hasło forum.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Zdefiniuj hasło dla tego forum. Użyj systemu uprawnień w ustawieniach.',
	'FORUM_PASSWORD_UNSET'				=> 'Usuń hasło forum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Sprawdź tutaj, jeśli chcesz usunąć hasło forum.',
	'FORUM_PASSWORD_OLD'				=> 'Hasło forum używa starego sposobu szyfrowania i powinno zostać zmienione.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Wprowadzone hasło jest nieprawidłowe.',
	'FORUM_PRUNE_SETTINGS'				=> 'Ustawienia czyszczenia forum',
	'FORUM_PRUNE_SHADOW'				=> 'Czyść pozostałości po przeniesionych tematach',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Włączenie tej funkcji spowoduje automatyczne usuwanie pozostałości po przeniesionych tematach. Poniżej określ parametry czyszczenia.',
	'FORUM_RESYNCED'					=> 'Forum „%s” zostało ponownie zsynchronizowane',
	'FORUM_RULES_EXPLAIN'				=> 'Regulamin forum jest wyświetlany na każdej stronie danego forum.',
	'FORUM_RULES_LINK'					=> 'Odnośnik do regulaminu forum',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Tutaj można wprowadzić adres URL strony/posta zawierającego regulamin forum. To ustawienie zastępuje standardowy regulamin forum.',
	'FORUM_RULES_PREVIEW'				=> 'Przegląd regulaminu forum',
	'FORUM_RULES_TOO_LONG'				=> 'Regulamin forum nie może mieć więcej niż 4000 znaków.',
	'FORUM_SETTINGS'					=> 'Ustawienia forum',
	'FORUM_STATUS'						=> 'Status forum',
	'FORUM_STYLE'						=> 'Styl forum',
	'FORUM_TOPICS_PAGE'					=> 'Liczba tematów na stronie',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Wartość zero (0) - domyślna liczba tematów na stronie.',
	'FORUM_TYPE'						=> 'Typ forum',
	'FORUM_UPDATED'						=> 'Dane forum zostały zaktualizowane.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Zamierzasz zmienić forum mające subfora w forum typu „Odnośnik”. Przed wykonaniem tej operacji, należy przenieść wszystkie subfora w inne miejsce, ponieważ po wykonaniu zmiany w odnośnik nie będzie możliwości oglądania subforów powiązanych z tym forum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Ogólne ustawienia forum',

	'LINK'						=> 'Odnośnik',
	'LIST_INDEX'				=> 'Wyświetlaj subforum w opisie macierzystego forum',
	'LIST_INDEX_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje wyświetlanie nazwy tego subforum jako odnośnika w opisie macierzystego forum na stronach wykazu forów, forów i w innych miejscach. Aby nazwa tego subforum była wyświetlana, musi być także włączona funkcja „Wyświetlaj subfora w opisie”.',
	'LIST_SUBFORUMS'			=> 'Wyświetlaj subfora w opisie',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Włączenie tej funkcji spowoduje wyświetlanie nazw subforów tego forum jako odnośników w opisach forów na stronach wykazu forów, forów i w innych miejscach. Aby nazwa danego forum była wyświetlana, musi być włączona funkcja „Wyświetlaj subforum w opisie macierzystego forum”.',
	'LOCKED'					=> 'Zamknięte',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Na forum wybranym do przeniesienia postów nie można nic publikować. Wybierz inne forum.',
	'MOVE_POSTS_TO'					=> 'Przenieś posty do',
	'MOVE_SUBFORUMS_TO'				=> 'Przenieś subfora do',

	'NO_DESTINATION_FORUM'			=> 'Nie określono forum do przeniesienia zawartości.',
	'NO_FORUM_ACTION'				=> 'Nie określono, co się stanie z zawartością forum.',
	'NO_PARENT'						=> 'Nie ma macierzystego forum',
	'NO_PERMISSIONS'				=> 'Nie kopiuj uprawnień',
	'NO_PERMISSION_FORUM_ADD'		=> 'Nie masz uprawnień do tworzenia forów.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Nie masz uprawnień do usuwania forów.',

	'PARENT_IS_LINK_FORUM'		=> 'Forum wybrane jako forum macierzyste jest typu „Odnośnik”. Fora tego typu nie mogą zawierać innych forów. Jako forum macierzyste wybierz forum typu „Kategoria” lub „Forum”.',
	'PARENT_NOT_EXIST'			=> 'Forum macierzyste nie istnieje.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Usuwaj ogłoszenia',
	'PRUNE_STICKY'				=> 'Usuwaj przyklejone tematy',
	'PRUNE_OLD_POLLS'			=> 'Usuwaj stare ankiety',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Włączenie tej funkcji spowoduje usuwanie tematów zawierających ankiety, w których nikt nie oddał głosu w czasie trwania ankiety.',

	'REDIRECT_ACL'	=> 'Teraz można %sokreślić uprawnienia%s dla tego forum.',

	'SYNC_IN_PROGRESS'			=> 'Synchronizacja forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Trwa ponowna synchronizacja tematów z zakresu %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategoria',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Odnośnik',

	'UNLOCKED'			=> 'Otwarte',
));
