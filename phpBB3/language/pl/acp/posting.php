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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode jest specjalną implementacją języka HTML oferującą ogromne możliwości kontroli tego, co i jak jest wyświetlane. Tutaj można dodawać, usuwać i zmieniać własne znaczniki BBCode.',
	'ADD_BBCODE'				=> 'Dodaj nowy znacznik',

	'BBCODE_DANGER'				=> 'Wygląda na to, że znacznik BBCode, który próbujesz dodać, używa tokena {TEXT} wewnątrz atrybutu HTML. Może to stwarzać zagrożenie bezpieczeństwa, umożliwiając atak typu XSS. Spróbuj użyć bardziej restrykcyjnego tokena {SIMPLETEXT} lub {INTTEXT}. Token {TEXT} użyj tylko wtedy, gdy zdajesz sobie sprawę z zagrożenia, jakie jest z tym związane i jest to absolutnie konieczne.',
	'BBCODE_DANGER_PROCEED'		=> 'Kontynuuj',

	'BBCODE_ADDED'				=> 'Znacznik został dodany.',
	'BBCODE_EDITED'				=> 'Znacznik został zmieniony.',
	'BBCODE_DELETED'			=> 'Znacznik został usunięty.',
	'BBCODE_NOT_EXIST'			=> 'Wybrany znacznik nie istnieje.',
	'BBCODE_HELPLINE'			=> 'Podpowiedzi',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'To pole zawiera tekst, jaki wyświetli się w podpowiedzi po wskazaniu kursorem myszy znacznika BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Treść podpowiedzi',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Wprowadzony tekst jest za długi.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Wybrana nazwa znacznika już istnieje.',
	'BBCODE_INVALID'			=> 'Ten znacznik ma nieprawidłową formę.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Znacznik musi zawierać znak otwarcia i zamknięcia.',
	'BBCODE_TAG'				=> 'Znacznik',
	'BBCODE_TAG_TOO_LONG'		=> 'Nazwa znacznika jest za długa.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Wprowadzona definicja znacznika jest za długa. Proszę skrócić definicję.',
	'BBCODE_USAGE'				=> 'Dodaj/zmień znacznik BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tutaj można dodać, zmienić znacznik, a także zdefiniować jego działanie. Każdą zmienną wejściową można zamienić odpowiednim tokenem (%szobacz poniżej%s).',

	'EXAMPLE'						=> 'Przykład:',
	'EXAMPLES'						=> 'Przykłady:',

	'HTML_REPLACEMENT'				=> 'Zamiennik HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Tutaj można zdefiniować domyślne zamienniki HTML. Proszę nie zapomnieć o tokenach użytych powyżej!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokeny',
	'TOKENS_EXPLAIN'		=> 'Tokeny są zamiennikami danych wejściowych użytkownika. Dane te będą uwierzytelnione tylko, jeśli są zgodne z odpowiednią definicją. Jeśli zachodzi potrzeba, można numerować je, dodając cyfrę jako ostatni znak w nawiasie, np. {TEXT1}, {TEXT2}.<br /><br />W zamiennikach HTML można także używać dowolnego ciągu znaków występującego w danym języku/katalogu, takiego jak {L_<em>&lt;STRINGNAME&gt;</em>}, gdzie <em>&lt;STRINGNAME&gt;</em> jest nazwą przetłumaczonego ciągu znaków, jaki chce się dodać. Na przykład: {L_WROTE} będzie wyświetlane jako „wrote” lub w wersji językowej odpowiedniej dla języka określonego przez użytkownika.<br /><br /><strong>Tylko tokeny znajdujące się poniżej mogą być użyte w znacznikach BBCode tworzonych przez użytkownika.</strong>',
	'TOKEN_DEFINITION'		=> 'Co to może być?',
	'TOO_MANY_BBCODES'		=> 'Nie można utworzyć więcej znaczników. Usuń jakiś znacznik i spróbuj ponownie.',

	'tokens'	=>	array(
		'TEXT'			=> 'Dowolny tekst, włącznie z obcymi literami, cyframi itp. Nie powinno się używać tego tokena w znacznikach HTML. Zamiast tego można użyć IDENTIFIER, INTTEXT lub SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Litery alfabetu łacińskiego (A–Z), cyfry, spacje, przecinki, kropki, minus, plus, myślnik i znak podkreślenia',
		'INTTEXT'		=> 'Litery Unicode, cyfry, spacje, przecinki, kropki, minus, plus, myślnik i znak podkreślenia oraz białe spacje.',
		'IDENTIFIER'	=> 'Litery alfabetu łacińskiego (A–Z), cyfry, myślnik i znak podkreślenia',
		'NUMBER'		=> 'Dowolne serie cyfr',
		'EMAIL'			=> 'Aktywny adres e-mail',
		'URL'			=> 'Aktywny adres URL używający dowolnego protokołu – http, ftp, itp. nie może być użyty do eksploitów. Jeśli nie wybrano protokołu, do ciągu znaków będzie dodawany prefiks „http://”.',
		'LOCAL_URL'		=> 'Lokalny adres URL. Adres musi być powiązany ze stroną tematów i nie może zawierać nazwy serwera czy protokołu, jak odnośniki z prefiksem „%s”.',
		'RELATIVE_URL'	=> 'Względny adres URL. Można to wykorzystać w celu dopasowania części adresu URL, ale należy zachować ostrożność i sprawdzić czy pełny adres URL odpowiada względnemu URL. Jeśli chcesz używać względnych adresów URL swojej witryny, użyj tokena LOCAL_URL.',
		'COLOR'			=> 'Kolor HTML może być wyrażony w formie numerycznej <samp>#FF1234</samp> lub jako słowa kluczowe kolorów określone w specyfikacji <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS</a>, takie jak <samp>fuchsia</samp> lub <samp>InactiveBorder</samp>,'
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Tutaj można dodawać, edytować i usuwać ikony, jakie użytkownicy mogą dodawać do swoich tematów i postów. Ikony te zazwyczaj są wyświetlane za tytułami tematów na stronie forum lub tematów postów na stronie tematów. Można instalować i tworzyć nowe zestawy ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Emotikony są zazwyczaj małymi, czasami animowanymi obrazkami używanymi do wyrażania emocji bądź uczuć. Tutaj można dodawać, edytować i usuwać emotikony, jakie użytkownicy mogą dodawać do swoich postów i prywatnych wiadomości. Można także instalować i tworzyć nowe zestawy emotikon.',
	'ADD_SMILIES'			=> 'Dodaj emotikony',
	'ADD_SMILEY_CODE'		=> 'Dodaj kod dodatkowej emotikony',
	'ADD_ICONS'				=> 'Dodaj ikony',
	'AFTER_ICONS'			=> 'Po %s',
	'AFTER_SMILIES'			=> 'Po %s',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Obecne ikony',
	'CURRENT_ICONS_EXPLAIN'		=> 'Określ co zrobić z aktualnie zainstalowanymi ikonami.',
	'CURRENT_SMILIES'			=> 'Obecne emotikony',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Określ co zrobić z aktualnie zainstalowanymi emotikonami.',

	'DISPLAY_ON_POSTING'		=> 'Wyświetlaj w oknie odpowiedzi',
	'DISPLAY_POSTING'			=> 'W oknie odpowiedzi',
	'DISPLAY_POSTING_NO'		=> 'Nie w oknie odpowiedzi',

	'EDIT_ICONS'				=> 'Edytuj ikony',
	'EDIT_SMILIES'				=> 'Edytuj emotikony',
	'EMOTION'					=> 'Emocja',
	'EXPORT_ICONS'				=> 'Eksportuj/pobierz zestaw',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKliknięcie tego odnośnika spowoduje spakowanie konfiguracji zainstalowanych ikon do pliku <samp>icons.pak</samp>, który po pobraniu może być użyty do utworzenia archiwum <samp>.zip</samp> lub <samp>.tgz</samp> zawierającego wszystkie ikony i plik konfiguracyjny <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Eksportuj/pobierz zestaw',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKliknięcie tego odnośnika spowoduje spakowanie konfiguracji zainstalowanych emotikon do pliku <samp>smilies.pak</samp>, który po pobraniu może być użyty do utworzenia archiwum <samp>.zip</samp> lub <samp>.tgz</samp> zawierającego wszystkie emotikony i plik konfiguracyjny <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Pierwsza',

	'ICONS_ADD'				=> 'Dodaj ikonę',
	'ICONS_ADDED'			=> array(
		0	=> 'Nie dodano żadnych ikon.',
		1	=> 'Ikona została dodana.',
		2	=> 'Ikony zostały dodane.',
		3	=> 'Ikony zostały dodane.',
	),
	'ICONS_CONFIG'			=> 'Konfiguracja ikon',
	'ICONS_DELETED'			=> 'Ikona została usunięta.',
	'ICONS_EDIT'			=> 'Edytuj ikonę',
	'ICONS_EDITED'			=> array(
		0	=> 'Ikony nie zostały zaktualizowane.',
		1	=> 'Ikona została zaktualizowana.',
		2	=> 'Ikony zostały zaktualizowane.',
		3	=> 'Ikony zostały zaktualizowane.',
	),
	'ICONS_HEIGHT'			=> 'Wysokość',
	'ICONS_IMAGE'			=> 'Obrazek',
	'ICONS_IMPORTED'		=> 'Zestaw ikon został zainstalowany.',
	'ICONS_IMPORT_SUCCESS'	=> 'Zestaw ikon został zaimportowany.',
	'ICONS_LOCATION'		=> 'Lokalizacja',
	'ICONS_NOT_DISPLAYED'	=> 'Następujące ikony nie są wyświetlane na stronie postów',
	'ICONS_ORDER'			=> 'Kolejność',
	'ICONS_URL'				=> 'Plik obrazka',
	'ICONS_WIDTH'			=> 'Szerokość',
	'IMPORT_ICONS'			=> 'Zainstaluj zestaw',
	'IMPORT_SMILIES'		=> 'Zainstaluj zestaw',

	'KEEP_ALL'			=> 'Utrzymaj wszystkie',

	'MASS_ADD_SMILIES'	=> 'Dodaj wiele emotikon',

	'NO_ICONS_ADD'		=> 'Nie ma ikon do dodania.',
	'NO_ICONS_EDIT'		=> 'Nie ma ikon do modyfikowania.',
	'NO_ICONS_EXPORT'	=> 'Nie ma ikon do utworzenia zestawu.',
	'NO_ICONS_PAK'		=> 'Nie znaleziono zestawu ikon.',
	'NO_SMILIES_ADD'	=> 'Nie ma emotikon do dodania.',
	'NO_SMILIES_EDIT'	=> 'Nie ma emotikon do modyfikowania.',
	'NO_SMILIES_EXPORT'	=> 'Nie ma emotikon do utworzenia zestawu.',
	'NO_SMILIES_PAK'	=> 'Nie znaleziono zestawu emotikon.',

	'PAK_FILE_NOT_READABLE'		=> 'Nie można odczytać pliku <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Zamień takie same',

	'SELECT_PACKAGE'			=> 'Wybierz plik zestawu',
	'SMILIES_ADD'				=> 'Dodaj emotikonę',
	'SMILIES_ADDED'				=> array(
		0	=> 'Nie dodano emotikon.',
		1	=> 'Emotikona została dodana.',
		2	=> 'Emotikony zostały dodane.',
		3	=> 'Emotikony zostały dodane.',
	),
	'SMILIES_CODE'				=> 'Kod',
	'SMILIES_CONFIG'			=> 'Konfiguracja emotikon',
	'SMILIES_DELETED'			=> 'Emotikona została usunięta.',
	'SMILIES_EDIT'				=> 'Edytuj emotikonę',
	'SMILIE_NO_CODE'			=> 'Emotikona „%s” została pominięta, ponieważ nie wprowadzono kodu.',
	'SMILIE_NO_EMOTION'			=> 'Emotikona „%s” została pominięta, ponieważ nie wprowadzono opisu emocji.',
	'SMILIE_NO_FILE'			=> 'Emotikona „%s” została pominięta, ponieważ nie ma pliku.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Emotikony nie zostały zaktualizowane.',
		1	=> 'Emotikona została zaktualizowana.',
		2	=> 'Emotikony zostały zaktualizowane.',
		3	=> 'Emotikony zostały zaktualizowane.',
	),
	'SMILIES_EMOTION'			=> 'Emocja',
	'SMILIES_HEIGHT'			=> 'Wys.',
	'SMILIES_IMAGE'				=> 'Obrazek',
	'SMILIES_IMPORTED'			=> 'Zainstalowano zestaw emotikon.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Zaimportowano zestaw emotikon.',
	'SMILIES_LOCATION'			=> 'Lokalizacja',
	'SMILIES_NOT_DISPLAYED'		=> 'Następujące emotikony nie są wyświetlane na stronie postów',
	'SMILIES_ORDER'				=> 'Kolejność',
	'SMILIES_URL'				=> 'Plik obrazka',
	'SMILIES_WIDTH'				=> 'Szer.',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Osiągnięto limit %d emotikony.',
		2	=> 'Osiągnięto limit %d emotikon.',
		3	=> 'Osiągnięto limit %d emotikon.',
	),

	'WRONG_PAK_TYPE'	=> 'Wybrany zestaw nie zawiera stosownych danych.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Tutaj można dodawać, edytować i usuwać słowa, które będą automatycznie cenzurowane na forach. Osoby rejestrujące się na forum mogą użyć tych słów w swoich nazwach użytkownika. Przy wprowadzaniu słów można używać wieloznacznika (*), np. tak zapisane słowo <samp>*test*</samp> będzie pasowało do <samp>przetestować</samp>, <samp>test*</samp> będzie pasowało do <samp>testowanie</samp>, a <samp>*test</samp> będzie pasowało do <samp>atest</samp>.',
	'ADD_WORD'				=> 'Dodaj słowo',

	'EDIT_WORD'		=> 'Edytuj cenzurę',
	'ENTER_WORD'	=> 'Należy wprowadzić słowo i jego zamiennik.',

	'NO_WORD'	=> 'Nie wybrano słów do edytowania.',

	'REPLACEMENT'	=> 'Zamiennik',

	'UPDATE_WORD'	=> 'Aktualizuj cenzurę',

	'WORD'				=> 'Słowo',
	'WORD_ADDED'		=> 'Cenzura słowa została dodana.',
	'WORD_REMOVED'		=> 'Wybrana cenzura została usunięta.',
	'WORD_UPDATED'		=> 'Wybrana cenzura została zaktualizowana.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Tutaj można dodawać, edytować, przeglądać i usuwać rangi. Można także utworzyć rangi specjalne, które mogą być zastosowane do użytkownika z poziomu zarządzania użytkownikami.',
	'ADD_RANK'				=> 'Dodaj rangę',

	'MUST_SELECT_RANK'		=> 'Należy wybrać rangę.',

	'NO_ASSIGNED_RANK'		=> 'Nie przydzielono rang specjalnych.',
	'NO_RANK_TITLE'			=> 'Nie określono nazwy rangi.',
	'NO_UPDATE_RANKS'		=> 'Ranga została usunięta, ale konta użytkowników używające tej rangi nie zostały zaktualizowane. Na tych kontach należy zresetować rangę ręcznie.',

	'RANK_ADDED'			=> 'Ranga została dodana.',
	'RANK_IMAGE'			=> 'Obrazek rangi',
	'RANK_IMAGE_EXPLAIN'	=> 'Tutaj można zdefiniować mały obrazek skojarzony z tą rangą. Ścieżka do obrazka musi być relatywna do katalogu głównego phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(Używany)',
	'RANK_MINIMUM'			=> 'Minimalna liczba postów',
	'RANK_REMOVED'			=> 'Ranga została usunięta.',
	'RANK_SPECIAL'			=> 'Określ jako rangę specjalną',
	'RANK_TITLE'			=> 'Nazwa rangi',
	'RANK_UPDATED'			=> 'Ranga została zaktualizowana.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Tutaj można zarządzać niedozwolonymi nazwami użytkownika. Zabronione nazwy użytkownika mogą zawierać wieloznacznik (*).',
	'ADD_DISALLOW_EXPLAIN'	=> 'Można zabronić nazwy użytkownika, stosując wieloznacznik (*), który zastępuje każdy znak.',
	'ADD_DISALLOW_TITLE'	=> 'Dodaj zabronioną nazwę',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Można usunąć nazwę, wybierając ją z listy i naciskając przycisk „Wyślij”.',
	'DELETE_DISALLOW_TITLE'		=> 'Usuń nazwę',
	'DISALLOWED_ALREADY'		=> 'Wprowadzona nazwa jest już zabroniona.',
	'DISALLOWED_DELETED'		=> 'Nazwa została usunięta.',
	'DISALLOW_SUCCESSFUL'		=> 'Nazwa została dodana.',

	'NO_DISALLOWED'				=> 'Nie ma zabronionych nazw użytkownika',
	'NO_USERNAME_SPECIFIED'		=> 'Nie wprowadzono lub nie wybrano nazwy użytkownika.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Tutaj można zarządzać powodami używanymi w zgłoszeniach i wiadomościach informujących o niewyrażeniu zgody na publikację posta. Znajduje się tutaj jeden domyślny powód oznaczony gwiazdką (*), którego nie można usunąć. Jeśli nie podano żadnego innego powodu, ten powód jest podawany w wysyłanych wiadomościach.',
	'ADD_NEW_REASON'		=> 'Dodaj powód',
	'AVAILABLE_TITLES'		=> 'Nazwy zlokalizowanych wersji powodu',

	'IS_NOT_TRANSLATED'			=> '<strong>Nie ma</strong> zlokalizowanej wersji powodu.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Powód zgłoszenia <strong>nie</strong> został zlokalizowany. Jeśli chcesz go zlokalizować, wybierz w sekcji pakietów językowych właściwe oznaczenie lokalizacji i plik.',
	'IS_TRANSLATED'				=> 'Jest zlokalizowany.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Opis powodu zgłoszenia został zlokalizowany. Jeśli wprowadzona nazwa jest obecna w sekcji plików językowych, zostanie użyta zlokalizowana nazwa i opis.',

	'NO_REASON'					=> 'Nie można znaleźć powodu.',
	'NO_REASON_INFO'			=> 'Należy określić nazwę i opis tego powodu.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nie można usunąć domyślnego powodu o nazwie „Inny”.',

	'REASON_ADD'				=> 'Dodaj powód zgłoszenia/odmowy',
	'REASON_ADDED'				=> 'Powód został dodany.',
	'REASON_ALREADY_EXIST'		=> 'Powód o takiej nazwie już istnieje. Podaj inną nazwę.',
	'REASON_DESCRIPTION'		=> 'Opis powodu',
	'REASON_DESC_TRANSLATED'	=> 'Wyświetlany opis',
	'REASON_EDIT'				=> 'Edytowanie powodu',
	'REASON_EDIT_EXPLAIN'		=> 'Tutaj można dodać lub edytować powody. Jeśli powód jest przetłumaczony, zostanie użyta wersja zlokalizowana.',
	'REASON_REMOVED'			=> 'Powód został usunięty.',
	'REASON_TITLE'				=> 'Nazwa',
	'REASON_TITLE_TRANSLATED'	=> 'Nazwa wyświetlana',
	'REASON_UPDATED'			=> 'Powód został zaktualizowany.',

	'USED_IN_REPORTS'		=> 'Używany w zgłoszeniach',
));
