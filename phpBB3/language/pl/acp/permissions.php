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
* @Polish locale 2015-02-02 15:34:14 Zespół Olympus.pl $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Uprawnienia są bardzo rozbudowane i dlatego zostały zgrupowane w czterech głównych sekcjach:</p>

		<h2>Uprawnienia globalne</h2>
		<p>Uprawnienia globalne, to uprawnienia dotyczące całej witryny. Służą do kontroli dostępu na poziomie globalnym. Są podzielone na uprawnienia przydzielane: użytkownikowi, grupie, administratorom i moderatorom globalnym.</p>

		<h2>Uprawnienia na forach</h2>
		<p>Te uprawnienia są używane do kontroli dostępu do forów i są podzielone na uprawnienia przypisane do forum, moderatorów forum, użytkownika forum i grup istniejących na forach.</p>

		<h2>Zestawy uprawnień</h2>
		<p>W tej sekcji można tworzyć różne zestawy uprawnień dla różnych typów uprawnień, które później mogą być przydzielane opartym na tych zestawach bazom. Domyślne zestawy powinny pokrywać swoimi uprawnieniami duży i mały zakres administracji witryny, niemniej w każdej z czterech sekcji można dodawać, edytować i usuwać zestawy.</p>

		<h2>Przegląd uprawnień</h2>
		<p>W tej sekcji można dokonać przeglądu faktycznie przydzielonych uprawnień użytkownikom, moderatorom (lokalnym i globalnym), administratorom, czy forom.</p>

		<br />

		<p>Aby dowiedzieć się więcej o przydzielaniu i zarządzaniu uprawnieniami na witrynie phpBB3, przeczytaj sekcję <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">Setting permissions naszego przewodnika Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'Nigdy',
	'ACL_SET'				=> 'Przydzielanie uprawnień',
	'ACL_SET_EXPLAIN'		=> 'Przydzielanie uprawnień polega na wybraniu jednej z opcji: <strong>Tak</strong>/<strong>Nie</strong>/<strong>Nigdy</strong>. Wybranie opcji <strong>Nigdy</strong> dla użytkownika lub grupy użytkowników zastępuje wszystkie inne przydzielone im wartości. Jeśli nie chcesz przydzielać danego uprawnienia, wybierz <strong>Nie</strong>. Jeśli gdzieś przydzielono temu uprawnieniu już jakąś wartość, zostanie ona użyta w ustawieniach, chyba że zostało przydzielone <strong>Nigdy</strong>. Wszystkie zaznaczone elementy skopiują uprawnienia wybranego zestawu.',
	'ACL_SETTING'			=> 'Uprawnienie',

	'ACL_TYPE_A_'			=> 'Uprawnienia administratora',
	'ACL_TYPE_F_'			=> 'Uprawnienia na forum',
	'ACL_TYPE_M_'			=> 'Uprawnienia moderatora',
	'ACL_TYPE_U_'			=> 'Uprawnienia użytkownika',

	'ACL_TYPE_GLOBAL_A_'	=> 'Uprawnienia administracyjne',
	'ACL_TYPE_GLOBAL_U_'	=> 'Uprawnienia użytkownika',
	'ACL_TYPE_GLOBAL_M_'	=> 'Uprawnienia moderatora globalnego',
	'ACL_TYPE_LOCAL_M_'		=> 'Uprawnienia moderatora',
	'ACL_TYPE_LOCAL_F_'		=> 'Uprawnienia na forum',

	'ACL_NO'				=> 'Nie',
	'ACL_VIEW'				=> 'Przeglądanie uprawnień',
	'ACL_VIEW_EXPLAIN'		=> 'Tutaj można szybko i wygodne sprawdzić, jakie uprawnienia ma wybrana grupa lub użytkownik. Czerwony kwadrat oznacza, że użytkownik/grupa nie ma danego uprawnienia, a zielony, że go ma.',
	'ACL_YES'				=> 'Tak',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Tutaj można przydzielić uprawnienia administratora użytkownikom lub grupom. Wszyscy użytkownicy z uprawnieniami administratora mają dostęp do panelu administracji.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Tutaj można użytkownikom i grupom przydzielać uprawnienia moderacyjne na forach - ustanawiać ich moderatorami. Aby przydzielić użytkownikom prawo dostępu do forów, zdefiniować globalne uprawnienia moderacyjne czy administracyjne, należy użyć właściwej do tego strony.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Tutaj można użytkownikom i grupom przydzielać i modyfikować prawa dostępu do forów. Aby przydzielić moderatorów czy zdefiniować administratorów, należy użyć właściwej do tego strony.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Tutaj można skopiować uprawnienia forum do jednego lub kilku innych forów.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Tutaj można przydzielić użytkownikom i grupom uprawnienia moderatora globalnego. Moderatorzy globalni mają uprawnienia, takie jak zwykli moderatorzy, z tym że mają ponadto dostęp do wszystkich forów na tej witrynie.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj można przydzielać grupom uprawnienia na forach.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Tutaj można przydzielać globalne uprawnienia grupom – uprawnienia użytkownika, moderatora globalnego i administratora. Uprawnienia użytkownika zawierają uprawnienia do używania awatarów, wysyłania prywatnych wiadomości itp. Uprawnienia moderatora globalnego, to akceptowanie/odrzucanie postów, zarządzanie tematami, zarządzanie blokowaniem itp. Uprawnienia administratora, to zmiana uprawnień, definiowanie dodatkowych znaczników BBCode, zarządzanie forami itp. Indywidualne uprawnienia użytkowników powinny być zmieniane tylko w wyjątkowych przypadkach. Zalecaną metodą zmiany uprawnień jest przydzielanie użytkowników do grup i przydzielenie im uprawnień grupy.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Tutaj można zarządzać zestawami uprawnień administracyjnych. Zestawy są efektywnym sposobem przydzielania uprawnień. Jeśli zostanie zmieniony zestaw, wszyscy użytkownicy i grupy, które mają przydzielony ten zestaw, przyjmą uprawnienia nowego zestawu.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Tutaj można zarządzać zestawami uprawnień na forum. Zestawy są efektywnym sposobem przydzielania uprawnień. Jeśli zostanie zmieniony zestaw, wszystkie elementy, które mają przydzielony ten zestaw, przyjmą uprawnienia nowego zestawu.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Tutaj można zarządzać zestawami uprawnień moderacyjnych. Zestawy są efektywnym sposobem przydzielania uprawnień. Jeśli zostanie zmieniony zestaw, wszyscy użytkownicy i grupy, które mają przydzielony ten zestaw, przyjmą uprawnienia nowego zestawu.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Tutaj można zarządzać zestawami uprawnień użytkownika. Zestawy są efektywnym sposobem przydzielania uprawnień. Jeśli zostanie zmieniony zestaw, wszyscy użytkownicy, które mają przydzielony ten zestaw, przyjmą uprawnienia nowego zestawu.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj można przydzielać użytkownikom uprawnienia na forach.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Tutaj można przydzielać globalne uprawnienia użytkownikom – uprawnienia użytkownika, moderatora globalnego i administratora. Uprawnienia użytkownika zawierają takie funkcje, jak używanie awatarów, wysyłanie prywatnych wiadomości itp. Uprawnienia moderatora globalnego, to akceptowanie/odrzucanie postów, zarządzanie postami, zarządzanie blokowaniem itp. Uprawnienia administratora globalnego, to zmiana uprawnień, tworzenie dodatkowych znaczników BBCode, zarządzanie forami itp. Zalecaną metodą zmiany tych uprawnień jednocześnie wielu użytkownikom jest system uprawnień grupowych. Uprawnienia użytkownika powinny być zmieniane tylko w wyjątkowych przypadkach. Zaleca się przydzielenie użytkowników do grup i przydzielenie im uprawnień grupy.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Tutaj można zobaczyć uprawnienia administracyjne przydzielone wybranym użytkownikom/grupom.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Tutaj można zobaczyć globalne uprawnienia moderacyjne przydzielone wybranym użytkownikom/grupom.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Tutaj można zobaczyć uprawnienia na forum przydzielone wybranym użytkownikom/grupom i forom.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Tutaj można zobaczyć uprawnienia moderacyjne na forum przydzielone wybranym użytkownikom/grupom i forom.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Tutaj można zobaczyć uprawnienia użytkownika przydzielone wybranym użytkownikom/grupom.',

	'ADD_GROUPS'				=> 'Dodaj grupy',
	'ADD_PERMISSIONS'			=> 'Przydziel uprawnienia',
	'ADD_USERS'					=> 'Dodaj użytkowników',
	'ADVANCED_PERMISSIONS'		=> 'Ustawienia zaawansowane',
	'ALL_GROUPS'				=> 'Zaznacz wszystkie grupy',
	'ALL_NEVER'					=> 'Wszystkie <strong>Nigdy</strong>',
	'ALL_NO'					=> 'Wszystkie <strong>Nie</strong>',
	'ALL_USERS'					=> 'Zaznacz wszystkich użytkowników',
	'ALL_YES'					=> 'Wszystkie <strong>Tak</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Zastosuj wszystkie uprawnienia',
	'APPLY_PERMISSIONS'			=> 'Zastosuj uprawnienia',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Uprawnienia i zestaw zdefiniowane dla tego elementu zostaną zastosowane tylko dla niego i wszystkich wybranych elementów.',
	'AUTH_UPDATED'				=> 'Uprawnienia zostały zaktualizowane.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Czy na pewno chcesz wykonać tę operację? Spowoduje ona w wybranych obiektach zastąpienie istniejących uprawnień skopiowanymi uprawnieniami.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forum źródłowe, z którego chcesz skopiować uprawnienia.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Fora docelowe, w których chcesz zastosować skopiowane uprawnienia.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopiuj uprawnienia z',
	'COPY_PERMISSIONS_TO'					=> 'Zastosuj uprawnienia w',

	'CREATE_ROLE'				=> 'Utwórz zestaw',
	'CREATE_ROLE_FROM'			=> 'Użyj ustawień z…',
	'CUSTOM'					=> 'Dostosuj…',

	'DEFAULT'					=> 'Domyślny',
	'DELETE_ROLE'				=> 'Usuń zestaw',
	'DELETE_ROLE_CONFIRM'		=> 'Czy na pewno chcesz usunąć ten zestaw? Elementy, które mają przydzielony ten zestaw <strong>nie</strong> stracą swoich uprawnień.',
	'DISPLAY_ROLE_ITEMS'		=> 'Wyświetl elementy używające ten zestaw',

	'EDIT_PERMISSIONS'			=> 'Edytuj uprawnienia',
	'EDIT_ROLE'					=> 'Edytuj zestaw',

	'GROUPS_NOT_ASSIGNED'		=> 'Żadna grupa nie jest przydzielona do tego zestawu',

	'LOOK_UP_GROUP'				=> 'Wybierz grupę',
	'LOOK_UP_USER'				=> 'Wybierz użytkownika',

	'MANAGE_GROUPS'		=> 'Zarządzaj grupami',
	'MANAGE_USERS'		=> 'Zarządzaj użytkownikami',

	'NO_AUTH_SETTING_FOUND'		=> 'Ustawienia uprawnienia nie zostały zdefiniowane.',
	'NO_ROLE_ASSIGNED'			=> 'Nie przydzielono zestawu…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Wybranie tej opcji nie spowoduje zmiany uprawnień. Jeśli chcesz cofnąć ustawienia/usunąć wszystkie uprawnienia, użyj odnośnika „Wszystkie <strong>Nie</strong>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nie zdefiniowano żadnego zestawu',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Proszę podać nazwę zestawu.',
	'NO_ROLE_SELECTED'			=> 'Nie znaleziono zestawu.',
	'NO_USER_GROUP_SELECTED'	=> 'Nie wybrano żadnego użytkownika lub grupy.',

	'ONLY_FORUM_DEFINED'	=> 'Wybrano tylko fora. Proszę także wybrać co najmniej jednego użytkownika lub jedną grupę.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Uprawnienia i zestawy zostaną zastosowane także do wszystkich zaznaczonych elementów',
	'PLUS_SUBFORUMS'				=> 'i subfora',

	'REMOVE_PERMISSIONS'			=> 'Usuń uprawnienia',
	'REMOVE_ROLE'					=> 'Usuń zestaw',
	'RESULTING_PERMISSION'			=> 'Wynikowe uprawnienie',
	'ROLE'							=> 'Zestaw',
	'ROLE_ADD_SUCCESS'				=> 'Zestaw został dodany.',
	'ROLE_ASSIGNED_TO'				=> 'Użytkownicy/grupy przydzieleni do zestawu %s',
	'ROLE_DELETED'					=> 'Zestaw został usunięty.',
	'ROLE_DESCRIPTION'				=> 'Opis zestawu',

	'ROLE_ADMIN_FORUM'			=> 'Administrator forum',
	'ROLE_ADMIN_FULL'			=> 'Pełny administrator',
	'ROLE_ADMIN_STANDARD'		=> 'Standardowy administrator',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrator użytkowników i grup',
	'ROLE_FORUM_BOT'			=> 'Dostęp dla botów',
	'ROLE_FORUM_FULL'			=> 'Pełny dostęp',
	'ROLE_FORUM_LIMITED'		=> 'Ograniczony dostęp',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ograniczony dostęp + ankiety',
	'ROLE_FORUM_NOACCESS'		=> 'Brak dostępu',
	'ROLE_FORUM_ONQUEUE'		=> 'W kolejce moderacji',
	'ROLE_FORUM_POLLS'			=> 'Standardowy dostęp + ankiety',
	'ROLE_FORUM_READONLY'		=> 'Tylko czytanie',
	'ROLE_FORUM_STANDARD'		=> 'Standardowy dostęp',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Dostęp dla nowo zarejestrowanego użytkownika',
	'ROLE_MOD_FULL'				=> 'Pełny moderator',
	'ROLE_MOD_QUEUE'			=> 'Moderator kolejki',
	'ROLE_MOD_SIMPLE'			=> 'Zwykły moderator',
	'ROLE_MOD_STANDARD'			=> 'Standardowy moderator',
	'ROLE_USER_FULL'			=> 'Wszystkie funkcje',
	'ROLE_USER_LIMITED'			=> 'Ograniczone funkcje',
	'ROLE_USER_NOAVATAR'		=> 'Bez awatara',
	'ROLE_USER_NOPM'			=> 'Bez prywatnych wiadomości',
	'ROLE_USER_STANDARD'		=> 'Standardowe funkcje',
	'ROLE_USER_NEW_MEMBER'		=> 'Funkcje dla nowo zarejestrowanego użytkownika',


	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Dostęp do zarządzania forum i ustawień uprawnień forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Dostęp do wszystkich funkcji administracyjnych na tej witrynie.<br />Nie zalecane.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Dostęp do większości funkcji administracyjnych z wyjątkiem narzędzi umożliwiających zarządzanie serwerem i systemem.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Zarządzanie grupami i użytkownikami. Możliwość zmiany uprawnień, ustawień, zarządzania blokowaniem i rangami.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ten zestaw jest zalecany dla botów i pająków wyszukiwawczych.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Dostęp do wszystkich funkcji forum włącznie z publikowaniem ogłoszeń i przyklejaniem postów. Możliwość ignorowania limitu wysłania wiadomości w określonym przedziale czasowym.<br />Nie zalecane dla normalnych użytkowników.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Dostęp do większości funkcji forum, ale bez możliwości załączania plików i używania ikon postów.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Uprawnienia, takie jak przy ograniczonym dostępie, ale z możliwością tworzenia ankiet.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Brak dostępu do forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Dostęp do większości funkcji forum włącznie z zamieszczaniem załączników, ale posty i tematy muszą być akceptowane przez moderatora.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Uprawnienia, takie jak przy standardowym dostępie, ale z możliwością tworzenia ankiet.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Uprawnienia do czytania forum, ale bez możliwości tworzenia nowych tematów i odpowiadania na posty.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Dostęp do większości funkcji forum włącznie z zamieszczaniem załączników i usuwaniem własnych tematów, ale bez możliwości zamykania własnych tematów i tworzenia ankiet.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Zestaw dla członków specjalnej grupy nowo zarejestrowanych użytkowników. Zawiera on uprawnienia typu <strong>Nigdy</strong> do blokowania funkcji dla nowych użytkowników.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Dostęp do wszystkich funkcji moderacyjnych, włącznie z blokowaniem.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Dostęp tylko do kolejki moderacji, aby sprawdzać i edytować posty.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Dostęp tylko do podstawowych czynności związanych z tematami. Bez możliwości udzielania ostrzeżeń i używania kolejki moderacji.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Dostęp do większości narzędzi moderacyjnych, ale bez możliwości blokowania użytkowników i zmiany autora posta.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Dostęp do wszystkich dostępnych dla użytkowników funkcji forum włącznie ze zmianą nazwy użytkownika i ignorowaniem limitu wysłania wiadomości w określonym przedziale czasowym.<br />Nie zalecane.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Dostęp do części funkcji przeznaczonych dla użytkowników. Bez możliwości zamieszczania załączników, e-maili i błyskawicznych wiadomości.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ograniczony zestaw funkcji bez możliwości korzystania z funkcji przypisanych awatarom.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ograniczony zestaw funkcji bez możliwości używania funkcji prywatnych wiadomości.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Dostęp do większości funkcji przeznaczonych dla użytkowników. Brak możliwości zmiany nazwy użytkownika i ignorowania limitu wysłania wiadomości w określonym przedziale czasowym.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Zestaw dla członków specjalnej grupy nowo zarejestrowanych użytkowników. Zawiera on uprawnienia typu <strong>Nigdy</strong> do blokowania funkcji dla nowych użytkowników.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Można podać krótki opis tego zestawu i cel jego utworzenia. Tekst tutaj wprowadzony będzie też wyświetlany na stronach ustawiania uprawnień.',
	'ROLE_DESCRIPTION_LONG'			=> 'Opis zestawu jest za długi. Maksymalna dopuszczalna liczba znaków – 4000.',
	'ROLE_DETAILS'					=> 'Szczegóły zestawu',
	'ROLE_EDIT_SUCCESS'				=> 'Zestaw został zmieniony.',
	'ROLE_NAME'						=> 'Nazwa zestawu',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Zestaw tego typu o nazwie <strong>%s</strong> już istnieje.',
	'ROLE_NOT_ASSIGNED'				=> 'Zestaw nie został jeszcze przydzielony nikomu.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Wybrane forum/fora nie istnieją.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Wybrane grupy nie istnieją.',
	'SELECTED_USER_NOT_EXIST'		=> 'Wybrani użytkownicy nie istnieją.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Tutaj można wybrać tylko jedno forum. Wybrane forum będzie zawierało wszystkie jego subfora.',
	'SELECT_ROLE'					=> 'Wybierz zestaw…',
	'SELECT_TYPE'					=> 'Wybierz typ',
	'SET_PERMISSIONS'				=> 'Określ uprawnienia',
	'SET_ROLE_PERMISSIONS'			=> 'Określ uprawnienia zestawu',
	'SET_USERS_PERMISSIONS'			=> 'Określ uprawnienia użytkownika',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Określ uprawnienia użytkownika na forum',

	'TRACE_DEFAULT'					=> 'Domyślnie żadne uprawnienie nie jest przydzielone – są określone jako <strong>Nie</strong>. Uprawnienia te mogą być zmieniane przez inne ustawienia.',
	'TRACE_FOR'						=> 'Badanie uprawnienia dla',
	'TRACE_GLOBAL_SETTING'			=> '%s (globalne)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'To uprawnienie grupowe jest określone jako <strong>Nigdy</strong> – jak uprawnienie globalne, zatem nie zostało zmienione.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'To uprawnienie grupowe dla tego forum jest określone jako <strong>Nigdy</strong> – jak uprawnienie globalne, zatem nie zostało zmienione.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'To uprawnienie grupowe jest określone jako <strong>Nigdy</strong> i staje się nową wartością globalną, ponieważ nie została ona jeszcze określona.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'To uprawnienie grupowe na tym forum jest określone jako <strong>Nigdy</strong> i staje się nową wartością globalną, ponieważ nie została ona jeszcze określona.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Dla tego użytkownika to uprawnienie grupowe jest określone jako <strong>Nigdy</strong>, co zamienia globalną wartość <strong>Tak</strong> na <strong>Nigdy</strong>.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Dla tego użytkownika, to uprawnienie grupowe dla tego forum jest określone jako <strong>Nigdy</strong>, co zamienia globalną wartość <strong>Tak</strong> na <strong>Nigdy</strong>.',
	'TRACE_GROUP_NO'				=> 'Uprawnienie dla tej grupy jest określone jako <strong>Nie</strong> – tak samo, jak uprawnienie globalne, zatem nie zostało zmienione.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Uprawnienie dla tej grupy na tym forum jest określone jako <strong>Nie</strong> – tak samo, jak uprawnienie globalne, zatem nie zostało zmienione.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'To uprawnienie grupowe jest określone jako <strong>Tak</strong>, ale uprawnienie globalne jest określone jako <strong>Nigdy</strong>, zatem nie może zostać zmienione.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'To uprawnienie grupowe na tym forum jest określone jako <strong>Tak</strong>, ale uprawnienie globalne jest określone jako <strong>Nigdy</strong>, zatem nie może zostać zmienione.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'To uprawnienie grupowe jest określone jako <strong>Tak</strong> i staje się nową wartością globalną, ponieważ nie została ona jeszcze określona.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'To uprawnienie grupowe na tym forum jest określone jako <strong>Tak</strong> i staje się nową wartością globalną, ponieważ nie została ona jeszcze określona.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'To uprawnienie grupowe jest określone jako <strong>Tak</strong> – tak samo, jak uprawnienie globalne, zatem nie zostało zmienione.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'To uprawnienie grupowe na tym forum jest określone jako <strong>Tak</strong> – tak samo, jak uprawnienie globalne, zatem nie zostało zmienione.',
	'TRACE_PERMISSION'				=> 'Badanie uprawnień – %s',
	'TRACE_RESULT'					=> 'Wynik badania',
	'TRACE_SETTING'					=> 'Ustawienia badania',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Globalne uprawnienie użytkownika określono jako <strong>Tak</strong>. Ponieważ uprawnienie globalne ma taką samą wartość, pozostanie ono niezmienione. %sZbadaj uprawnienie globalne%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Globalne uprawnienie użytkownika określono jako <strong>Tak</strong>, zatem obecna wartość <strong>Nigdy</strong> zostanie zmieniona. %sZbadaj uprawnienie globalne%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Globalne uprawnienie użytkownika określono jako <strong>Nigdy</strong>, zatem nie zmieni to dotychczasowej wartości. %sZbadaj uprawnienie globalne%s',

	'TRACE_USER_FOUNDER'					=> 'Użytkownik jest założycielem forum, zatem wszystkie uprawnienia administracyjne ma zawsze określone jako <strong>Tak</strong>.',
	'TRACE_USER_KEPT'						=> 'Uprawnienie użytkownika jest określone jako <strong>Nie</strong>, zatem nie zostało zmienione.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Uprawnienie użytkownika dla tego forum jest określone jako <strong>Nie</strong>, zatem nie zostało zmienione.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Uprawnienie użytkownika jest określone jako <strong>Nigdy</strong>. Ponieważ wartość globalna jest taka sama, nic nie zostało zmienione.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Nigdy</strong>. Ponieważ wartość globalna jest taka sama, nic nie zostało zmienione.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Uprawnienie użytkownika jest określone jako <strong>Nigdy</strong> i staje się nową wartością globalną, ponieważ poprzednia wartość była określona jako <strong>Nie</strong>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Nigdy</strong> i staje się nową wartością globalną, ponieważ poprzednia wartość była określona jako <strong>Nie</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Uprawnienie użytkownika jest określone jako <strong>Nigdy</strong> i zastępuje poprzednią wartość <strong>Tak</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Nigdy</strong> i zastępuje poprzednią wartość <strong>Tak</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Uprawnienie użytkownika jest określone jako <strong>Nie</strong> i globalne uprawnienie miało wartość <strong>Nie</strong>, zatem zostało zmienione domyślnie na <strong>Nigdy</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Nie</strong> i globalne uprawnienie miało wartość <strong>Nie</strong>, zatem zostało zmienione domyślnie na <strong>Nigdy</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Uprawnienie użytkownika jest określone jako <strong>Tak</strong>, a globalne ma wartość <strong>Nigdy</strong>, zatem nie może zostać zmienione.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Tak</strong>, ale globalne ma wartość <strong>Nigdy</strong>, zatem nie może zostać zmienione.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Uprawnienie użytkownika jest określone jako <strong>Tak</strong> i staje się nową wartością globalną, ponieważ poprzednia wartość była określona jako <strong>Nie</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Tak</strong> i staje się nową wartością globalną, ponieważ poprzednia wartość była określona jako <strong>Nie</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Uprawnienie użytkownika jest określone jako <strong>Tak</strong> i wartość globalna jest również określona jako <strong>Tak</strong>, zatem nic nie zostało zmienione.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Uprawnienie użytkownika na tym forum jest określone jako <strong>Tak</strong> i wartość globalna jest również określona jako <strong>Tak</strong>, zatem nic nie zostało zmienione.',
	'TRACE_WHO'								=> 'Kto',
	'TRACE_TOTAL'							=> 'Łącznie',

	'USERS_NOT_ASSIGNED'			=> 'Żaden użytkownik nie ma przydzielonego tego zestawu',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'jest członkiem następujących predefiniowanych grup',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'jest członkiem następujących, utworzonych przez administratora grup',

	'VIEW_ASSIGNED_ITEMS'	=> 'Wyświetl użytkowników/grupy, które mają przydzielony ten zestaw',
	'VIEW_LOCAL_PERMS'		=> 'Uprawnienia lokalne',
	'VIEW_GLOBAL_PERMS'		=> 'Uprawnienia globalne',
	'VIEW_PERMISSIONS'		=> 'Wyświetl uprawnienia',

	'WRONG_PERMISSION_TYPE'				=> 'Wybrano nieprawidłowy typ uprawnień.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Ustawienia uprawnienia mają nieprawidłowy format. Skrypt phpBB nie jest w stanie przetworzyć ich poprawnie.',
));
