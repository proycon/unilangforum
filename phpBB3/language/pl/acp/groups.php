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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Z tego miejsca można zarządzać wszystkimi grupami użytkowników. Można usuwać, tworzyć i edytować istniejące grupy. Ponadto można ustanawiać liderów grup, zmieniać status grup (otwarta/zamknięta/ukryta), określać i zmieniać ich nazwę oraz opis.',
	'ADD_GROUP_CATEGORY'			=> 'Dodaj kategorię',
	'ADD_USERS'						=> 'Dodawanie członków',
	'ADD_USERS_EXPLAIN'				=> 'Tutaj można dodawać nowych członków do grupy. Można określić czy grupa stanie się nową domyślną grupą dla wybranych użytkowników. Ponadto można tutaj zdefiniować liderów grupy. Każdą nazwę użytkownika należy wprowadzić w oddzielnym wierszu.',

	'COPY_PERMISSIONS'				=> 'Kopiuj uprawnienia od',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Utworzona grupa będzie miała te same uprawnienia, jak wybrana grupa.',
	'CREATE_GROUP'					=> 'Utwórz nową grupę',

	'GROUPS_NO_MEMBERS'				=> 'Ta grupa nie ma członków',
	'GROUPS_NO_MODS'				=> 'Nie zdefiniowano lidera grupy',

	'GROUP_APPROVE'					=> 'Zaakceptuj członka',
	'GROUP_APPROVED'				=> 'Zaakceptowani członkowie',
	'GROUP_AVATAR'					=> 'Awatar grupy',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ten obrazek będzie wyświetlany w panelu sterowania grupy.',
	'GROUP_CATEGORY_NAME'			=> 'Nazwa kategorii',
	'GROUP_CLOSED'					=> 'Zamknięta',
	'GROUP_COLOR'					=> 'Kolor grupy',
	'GROUP_COLOR_EXPLAIN'			=> 'Definiuje kolor jakim będzie wyświetlana nazwa użytkownika członków grupy. Pozostawienie pustego pola spowoduje wyświetlanie nazwy w domyślnym kolorze.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Czy na pewno chcesz dodać użytkownika %2$s do tej grupy?',
		2	=> 'Czy na pewno chcesz dodać użytkowników %2$s do tej grupy?',
		3	=> 'Czy na pewno chcesz dodać użytkowników %2$s do tej grupy?',
	),
	'GROUP_CREATED'					=> 'Grupa została utworzona.',
	'GROUP_DEFAULT'					=> 'Domyślna grupa dla członka',
	'GROUP_DEFS_UPDATED'			=> 'Domyślna grupa została określona dla wszystkich zaznaczonych członków.',
	'GROUP_DELETE'					=> 'Usuń z grupy',
	'GROUP_DELETED'					=> 'Usunięto grupę i określono domyślne grupy użytkownika.',
	'GROUP_DEMOTE'					=> 'Zdegraduj lidera grupy',
	'GROUP_DESC'					=> 'Opis grupy',
	'GROUP_DETAILS'					=> 'Szczegóły grupy',
	'GROUP_EDIT_EXPLAIN'			=> 'Tutaj można edytować istniejące grupy. Można zmienić ich nazwę, opis, typ (otwarta, zamknięta, itp.), a także ustalić dla określonej grupy takie opcje, jak kolorowanie, rangę, itp. Zmiany tutaj wykonane zastąpią ustawienia użytkownika. Członkowie grupy mogą zmienić ustawienia awatara grupy, o ile nie zostały określone stosowne uprawnienia użytkowników.',
	'GROUP_ERR_USERS_EXIST'			=> 'Wybrani użytkownicy są już członkami tej grupy.',
	'GROUP_FOUNDER_MANAGE'			=> 'Grupą zarządza tylko założyciel',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Uaktywnienie tej funkcji ograniczy zarządzanie tą grupą tylko do jej założycieli. Użytkownicy posiadający uprawnienia grupy nadal mogą widzieć tę grupę, tak jak jej członkowie.',
	'GROUP_HIDDEN'					=> 'Ukryta',
	'GROUP_LANG'					=> 'Język grupy',
	'GROUP_LEAD'					=> 'Liderzy grupy',
	'GROUP_LEADERS_ADDED'			=> 'Do grupy dodano nowych liderów.',
	'GROUP_LEGEND'					=> 'Wyświetlaj grupę w opisie kolorów grup',
	'GROUP_LIST'					=> 'Członkowie',
	'GROUP_LIST_EXPLAIN'			=> 'To jest pełna lista członków tej grupy. Można usuwać członków z wyjątkiem określonych grup specjalnych i dodawać nowych.',
	'GROUP_MEMBERS'					=> 'Członkowie grupy',
	'GROUP_MEMBERS_EXPLAIN'			=> 'To jest pełna lista członków tej grupy. Zawiera ona oddzielne sekcje dla liderów, oczekujących i istniejących członków. Z tego miejsca można zarządzać grupą w pełnym zakresie – członkostwem w grupie, rolą poszczególnych członków. Aby zmienić lidera grupy nie trzeba usuwać go z grupy, wystarczy użyć funkcji „Zdegraduj lidera grupy”. Podobnie można użyć funkcji „Promuj lidera grupy”, aby spośród członków grupy ustanowić nowego lidera.',
	'GROUP_MESSAGE_LIMIT'			=> 'Limit prywatnych wiadomości w grupie dla każdego folderu',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'To ustawienie zastępuje ustawienia użytkownika określające limit wiadomości w folderze. Wartość zerowa (0) oznacza, że zostanie użyty limit określony przez użytkownika.',
	'GROUP_MODS_ADDED'				=> 'Dodano nowych liderów grupy.',
	'GROUP_MODS_DEMOTED'			=> 'Zdegradowano liderów grupy.',
	'GROUP_MODS_PROMOTED'			=> 'Promowano członków grupy.',
	'GROUP_NAME'					=> 'Nazwa grupy',
	'GROUP_NAME_TAKEN'				=> 'Grupa o takiej nazwie już istnieje. Proszę wybrać inną nazwę.',
	'GROUP_OPEN'					=> 'Otwarta',
	'GROUP_PENDING'					=> 'Członkowie oczekujący',
	'GROUP_MAX_RECIPIENTS'			=> 'Dozwolona maksymalna liczba odbiorców jednej prywatnej wiadomości',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maksymalna liczba odbiorców prywatnej wiadomości. Wartość zerowa (0) oznacza użycie ustawień globalnych witryny.',
	'GROUP_OPTIONS_SAVE'			=> 'Opcje dotyczące całej grupy',
	'GROUP_PROMOTE'					=> 'Promuj na lidera grupy',
	'GROUP_RANK'					=> 'Ranga grupy',
	'GROUP_RECEIVE_PM'				=> 'Członkowie grupy mogą odbierać prywatne wiadomości',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Informacja: Ta funkcja nie ma wpływu na grupy ukryte.',
	'GROUP_REQUEST'					=> 'Na żądanie',
	'GROUP_SETTINGS_SAVE'			=> 'Ustawienia dotyczące całej grupy',
	'GROUP_SKIP_AUTH'				=> 'Usuń dziedziczenie uprawnień grupy przez lidera',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Jeśli funkcja ta zostanie włączona, lider grupy nie będzie dziedziczył uprawnień grupy.',
	'GROUP_SPECIAL'					=> 'Predefiniowana',
	'GROUP_TEAMPAGE'				=> 'Wyświetlaj grupę na stronie zespołu',
	'GROUP_TYPE'					=> 'Typ grupy',
	'GROUP_TYPE_EXPLAIN'			=> 'Ta opcja warunkuje, którzy użytkownicy mogą przyłączyć się do grupy oraz ją widzieć.',
	'GROUP_UPDATED'					=> 'Ustawienia grupy zostały zaktualizowane.',

	'GROUP_USERS_ADDED'				=> 'Dodano nowych użytkowników.',
	'GROUP_USERS_EXIST'				=> 'Wybrani użytkownicy są już członkami grupy.',
	'GROUP_USERS_REMOVE'			=> 'Użytkownicy zostali usunięci z grupy i ustawiono nowe wartości domyślne.',

	'LEGEND_EXPLAIN'				=> 'Grupy wyświetlane w legendzie grup',
	'LEGEND_SETTINGS'				=> 'Ustawienia legendy',
	'LEGEND_SORT_GROUPNAME'			=> 'Sortuj kolory grup wg nazwy grupy',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Niżej określone kolejności będą ignorowane, gdy ta funkcja jest włączona.',

	'MANAGE_LEGEND'			=> 'Legenda grup',
	'MANAGE_TEAMPAGE'		=> 'Strona zespołu administracyjnego',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Ustaw jako domyślną grupę dla wszystkich członków',
	'MEMBERS'				=> 'Członkowie',

	'NO_GROUP'					=> 'Nie wybrano grupy.',
	'NO_GROUPS_ADDED'			=> 'Jeszcze nie dodano żadnej grupy.',
	'NO_GROUPS_CREATED'			=> 'Jeszcze nie utworzono żadnej grupy.',
	'NO_PERMISSIONS'			=> 'Nie kopiuj uprawnień',
	'NO_USERS'					=> 'Nie wprowadzono żadnych użytkowników.',
	'NO_USERS_ADDED'			=> 'Nie dodano żadnego użytkownika do grupy.',
	'NO_VALID_USERS'			=> 'Nie wprowadzono żadnych użytkowników odpowiednich do tego działania.',

	'SELECT_GROUP'				=> 'Wybierz grupę',
	'SPECIAL_GROUPS'			=> 'Grupy predefiniowane',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupy predefiniowane są grupami specjalnymi. Nie mogą być usuwane ani bezpośrednio modyfikowane, ale można dodawać do nich użytkowników i zmieniać podstawowe ustawienia.',

	'TEAMPAGE'					=> 'Strona zespołu',
	'TEAMPAGE_DISP_ALL'			=> 'Wszystkie grupy, których członkiem jest użytkownik',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Tylko domyślna grupa użytkownika',
	'TEAMPAGE_DISP_FIRST'		=> 'Tylko pierwsza grupa, której członkiem jest użytkownik',
	'TEAMPAGE_EXPLAIN'			=> 'Grupy wyświetlane na stronie zespołu',
	'TEAMPAGE_FORUMS'			=> 'Wyświetlaj moderowane fora',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Jeśli zostanie zaznaczone <samp>Tak</samp>, moderatorzy będą widzieli listę wszystkich forów, na których mają uprawnienia moderacyjne. Na dużych witrynach może to bardzo obciążać bazę danych.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Wyświetlaj grupy, których członkiem jest użytkownik',
	'TEAMPAGE_SETTINGS'			=> 'Ustawienia strony zespołu',
	'TOTAL_MEMBERS'				=> 'Członkowie',

	'USERS_APPROVED'				=> 'Użytkownicy zostali zaaprobowani.',
	'USER_DEFAULT'					=> 'Domyślna grupa użytkownika',
	'USER_DEF_GROUPS'				=> 'Grupy zdefiniowane przez administratora',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'To są grupy utworzone przez administratorów witryny. Można zarządzać członkostwem, edytować ustawienia grupy, a nawet usunąć grupę.',
	'USER_GROUP_DEFAULT'			=> 'Domyślna grupa',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Zaznaczenie <samp>Tak</samp>, określi tę grupę jako domyślną grupę dla dodawanych użytkowników.',
	'USER_GROUP_LEADER'				=> 'Lider grupy',
));
