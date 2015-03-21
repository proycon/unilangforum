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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Tutaj można dokonać konfiguracji głównych ustawień załączników i powiązanych z nimi kategorii specjalnych.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Tutaj można dodawać, usuwać, modyfikować lub wyłączać grupy rozszerzeń. Można przypisywać kategorie specjalne do tych grup, zmieniać mechanizm pobierania, a także definiować ikony, jakie będą wyświetlane przy załącznikach.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Tutaj można zarządzać rozszerzeniami plików. Aby aktywować dane rozszerzenie, należy przejść do panelu zarządzania grupami rozszerzeń. Zaleca się nie zezwalać na załączanie plików z rozszerzeniami świadczącymi, że są to skrypty. Do takich rozszerzeń zalicza się: <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, itp.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Tutaj można zobaczyć osierocone pliki. Takie pliki zazwyczaj powstają, gdy użytkownik załączy pliki do posta, ale go nie wyśle – załączony plik nie ma macierzystego posta. Można usunąć te pliki lub dołączyć do istniejących postów. Dołączenie do posta wymaga znajomości prawidłowego ID posta. Operacja ta spowoduje przeniesienie osieroconego załącznika do posta o wskazanym ID.',
	'ADD_EXTENSION'						=> 'Dodaj rozszerzenie',
	'ADD_EXTENSION_GROUP'				=> 'Dodaj grupę rozszerzeń',
	'ADMIN_UPLOAD_ERROR'				=> 'Wystąpiły błędy podczas próby załączenia pliku: „%s”.',
	'ALLOWED_FORUMS'					=> 'Dozwolone fora',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Na wybranych forach lub wszystkich, jeśli tak zaznaczono, można załączać pliki mające skojarzone rozszerzenia.',
	'ALLOWED_IN_PM_POST'				=> 'Zezwolono',
	'ALLOW_ATTACHMENTS'					=> 'Zamieszczanie załączników',
	'ALLOW_ALL_FORUMS'					=> 'Na wszystkich',
	'ALLOW_IN_PM'						=> 'Dozwolone w prywatnych wiadomościach',
	'ALLOW_PM_ATTACHMENTS'				=> 'Załączniki w prywatnych wiadomościach',
	'ALLOW_SELECTED_FORUMS'				=> 'Tylko na wybranych poniżej',
	'ASSIGNED_EXTENSIONS'				=> 'Skojarzone rozszerzenia',
	'ASSIGNED_GROUP'					=> 'Skojarzone grupy rozszerzeń',
	'ATTACH_EXTENSIONS_URL'				=> 'Rozszerzenia',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupy rozszerzeń',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksymalny rozmiar pliku',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksymalny rozmiar zamieszczanego pliku. Wartość zero (0) - rozmiar zamieszczanego pliku ograniczany jest tylko przez ustawienia PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Rozmiar przestrzeni dyskowej dla PW',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksymalna przestrzeń dyskowa, jaką mogą zajmować załączniki w prywatnych wiadomościach użytkownika. Wartość zero (0) - brak ograniczenia przestrzeni.',
	'ATTACH_ORPHAN_URL'					=> 'Osierocone załączniki',
	'ATTACH_POST_ID'					=> 'ID posta',
	'ATTACH_POST_TYPE'					=> 'Typ posta',
	'ATTACH_QUOTA'						=> 'Rozmiar przestrzeni dyskowej',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksymalna przestrzeń dyskowa dostępna dla wszystkich załączników w tej instalacji phpBB. Wartość zero (0) - brak ograniczenia przestrzeni.',
	'ATTACH_TO_POST'					=> 'Załącz plik do posta',

	'CAT_FLASH_FILES'			=> 'Pliki Flash',
	'CAT_IMAGES'				=> 'Obrazki',
	'CAT_QUICKTIME_FILES'		=> 'Pliki Quicktime',
	'CAT_RM_FILES'				=> 'Pliki RealMedia',
	'CAT_WM_FILES'				=> 'Pliki Windows Media',
	'CHECK_CONTENT'				=> 'Sprawdzaj pliki załącznika',
	'CHECK_CONTENT_EXPLAIN'		=> 'Niektóre przeglądarki mogą być zmuszane do przybierania nieprawidłowego typu mediów (mimetype) dla wysyłanych plików. Funkcja ta zabezpiecza takie pliki przed odrzuceniem.',
	'CREATE_GROUP'				=> 'Utwórz nową grupę',
	'CREATE_THUMBNAIL'			=> 'Zawsze twórz miniaturę',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Tworzy miniaturę we wszystkich możliwych sytuacjach. Dzięki tej funkcji miniatura będzie wyświetlana bezpośrednio w poście i użytkownik może ją kliknąć, aby zobaczyć pełny obrazek.',

	'DEFINE_ALLOWED_IPS'			=> 'Zdefiniuj dozwolone adresy IP/nazwy serwerów',
	'DEFINE_DISALLOWED_IPS'			=> 'Zdefiniuj zabronione adresy IP/nazwy serwerów',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Aby określić kilka różnych adresów IP lub nazw serwerów, należy każdy z nich wprowadzić w nowym, oddzielnym wierszu. Aby określić grupę adresów IP, należy za pomocą myślnika (–) zaznaczyć początek i koniec grupy. Można używać gwiazdki (*) jako wieloznacznika.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Można usunąć lub anulować wykluczenie wielu adresów IP w jednym kroku, używając kombinacji myszy i klawiatury odpowiednich dla danego systemu operacyjnego i przeglądarki. Wykluczone adresy IP są wyświetlone pogrubioną czcionką.',
	'DISPLAY_INLINED'				=> 'Wyświetlaj obrazki bezpośrednio',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Jeśli funkcja ta zostanie ustawiona na <samp>Nie</samp>, zamiast obrazka zostanie wyświetlony odnośnik tekstowy.',
	'DISPLAY_ORDER'					=> 'Kolejność wyświetlania',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Załączniki będą wyświetlane wg czasu załączenia. Malejąco – załączniki będą wyświetlane w kolejności odwrotnej niż kolejność zamieszczania, Rosnąco – załączniki będą wyświetlane w kolejności zamieszczania.',

	'EDIT_EXTENSION_GROUP'			=> 'Edytowanie grup rozszerzeń',
	'EXCLUDE_ENTERED_IP'			=> 'Wybierz <samp>Tak</samp>, aby wykluczyć wprowadzony adres IP/nazwę serwera.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Wyklucz adres IP z dozwolonych adresów IP/nazw serwerów',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Wyklucz adres IP z niedozwolonych adresów IP/nazw serwerów',
	'EXTENSIONS_UPDATED'			=> 'Rozszerzenia zostały zaktualizowane.',
	'EXTENSION_EXIST'				=> 'Rozszerzenie „%s” już istnieje.',
	'EXTENSION_GROUP'				=> 'Grupa rozszerzeń',
	'EXTENSION_GROUPS'				=> 'Grupy rozszerzeń',
	'EXTENSION_GROUP_DELETED'		=> 'Grupa rozszerzeń została usunięta.',
	'EXTENSION_GROUP_EXIST'			=> 'Grupa rozszerzeń „%s” już istnieje.',

	'EXT_GROUP_ARCHIVES'			=> 'Archiwa',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenty',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Pliki możliwe do pobrania',
	'EXT_GROUP_FLASH_FILES'			=> 'Pliki flash',
	'EXT_GROUP_IMAGES'				=> 'Obrazki',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Zwykły tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Media Quicktime',
	'EXT_GROUP_REAL_MEDIA'			=> 'Media Real',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Media Windows',

	'FILES_GONE'			=> 'Niektóre wybrane do usunięcia załączniki nie istnieją. Prawdopodobnie zostały już wcześniej usunięte. Istniejące załączniki zostały usunięte.',
	'FILES_STATS_WRONG'		=> 'Plik statystyk jest prawdopodobnie niepoprawny i wymaga ponownej synchronizacji. Aktualne wartości: liczba załączników – %1$d, całkowity rozmiar załączników – %2$s.<br />Kliknij %3$stutaj%4$s, by wykonać synchronizację.',

	'GO_TO_EXTENSIONS'		=> 'Przejdź do zarządzania rozszerzeniami',
	'GROUP_NAME'			=> 'Nazwa grupy',

	'IMAGE_LINK_SIZE'			=> 'Rozmiar obrazka, a odnośnik',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Jeśli załączany obrazek ma rozmiar większy niż określone tutaj wartości, zamiast niego zostanie wyświetlony odnośnik tekstowy. Aby takie zachowanie wyłączyć, należy ustawić te wartości na 0 x 0 px.',
	'IMAGICK_PATH'				=> 'Ścieżka do Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Ścieżka do aplikacji konwertującej Imagemagick, np. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maksymalna liczba załączników w poście',
	'MAX_ATTACHMENTS_PM'			=> 'Maksymalna liczba załączników w prywatnej wiadomości',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksymalny rozmiar pliku',
	'MAX_IMAGE_SIZE'				=> 'Maksymalny rozmiar obrazka',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maksymalny rozmiar załączanego obrazka. Ustawienie wartości na 0px 0px spowoduje wyłączenie sprawdzania rozmiaru obrazka.',
	'MAX_THUMB_WIDTH'				=> 'Maksymalna szerokość miniatury w pikselach',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Generowana miniatura nie będzie mogła przekroczyć określonej tutaj szerokości.',
	'MIN_THUMB_FILESIZE'			=> 'Minimalny rozmiar pliku miniatury',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Jeśli rozmiar pliku miniatury jest mniejszy niż zdefiniowana tutaj wartość, miniatura nie zostanie utworzona.',
	'MODE_INLINE'					=> 'Wewnętrzny',
	'MODE_PHYSICAL'					=> 'Rzeczywisty',

	'NOT_ALLOWED_IN_PM'			=> 'Dozwolone tylko w postach',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Niedozwolone',
	'NOT_ASSIGNED'				=> 'Nieokreślone',
	'NO_ATTACHMENTS'			=> 'W tym przedziale czasowym nie znaleziono załączników.',
	'NO_EXT_GROUP'				=> 'Brak',
	'NO_EXT_GROUP_NAME'			=> 'Nie wprowadzono nazwy grupy',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nie określono grupy.',
	'NO_FILE_CAT'				=> 'Brak',
	'NO_IMAGE'					=> 'Brak obrazka',
	'NO_THUMBNAIL_SUPPORT'		=> 'Funkcje miniatur zostały wyłączone, ponieważ dla ich prawidłowego działania niezbędna jest obecność rozszerzenia GD lub programu Imagemagick – żadnego z nich nie znaleziono.',
	'NO_UPLOAD_DIR'				=> 'Wybrany katalog nie istnieje.',
	'NO_WRITE_UPLOAD'			=> 'W wybranym katalogu nie ma możliwości zapisu. Zmień atrybuty katalogu, tak aby można było wykonywać w nim zapis.',

	'ONLY_ALLOWED_IN_PM'	=> 'Zezwolono tylko w prywatnych wiadomościach',
	'ORDER_ALLOW_DENY'		=> 'Zezwól',
	'ORDER_DENY_ALLOW'		=> 'Zabroń',

	'REMOVE_ALLOWED_IPS'			=> 'Usuń lub anuluj wykluczenie <em>dozwolonych</em> adresów IP/nazw serwerów',
	'REMOVE_DISALLOWED_IPS'			=> 'Usuń lub anuluj wykluczenie <em>niedozwolonych</em> adresów IP/nazw serwerów',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Czy na pewno chcesz ponownie zsynchronizować plik statystyk?',

	'SEARCH_IMAGICK'				=> 'Szukaj Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Lista Dozwolone/Zabronione',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Gdy bezpieczne pobieranie jest włączone, na liście Dozwolone/Zabronione (<strong>lista dozwolonych</strong> (Dozwolone), <strong>lista zabronionych</strong> (Zabronione) można zmienić domyślne zachowanie.',
	'SECURE_DOWNLOADS'				=> 'Bezpieczne pobieranie',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Jeśli ta funkcja jest włączona, pobieranie jest ograniczone do zdefiniowanych adresów IP/nazw serwerów.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Bezpieczne pobieranie jest wyłączone. Ustawienia określone poniżej będą zastosowane po włączeniu funkcji bezpiecznego pobierania.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista adresów IP została zaktualizowana.',
	'SECURE_EMPTY_REFERRER'			=> 'Pusty odsyłacz',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Bezpieczne pobieranie jest oparte na odsyłaczach (referers). Czy chcesz zezwolić na pomijanie odsyłacza?',
	'SETTINGS_CAT_IMAGES'			=> 'Ustawienia kategorii obrazków',
	'SPECIAL_CATEGORY'				=> 'Kategorie specjalne',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Kategorie specjalne różnią się sposobem prezentowania załącznika w obrębie postów.',
	'SUCCESSFULLY_UPLOADED'			=> 'Wysłano na serwer.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupa została dodana.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupa została zaktualizowana.',

	'UPLOADING_FILES'				=> 'Wysyłanie plików',
	'UPLOADING_FILE_TO'				=> 'Wysyłanie pliku „%1$s” do posta numer %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nie masz uprawnień do wysyłania plików na forum „%s”.',
	'UPLOAD_DIR'					=> 'Katalog zapisu',
	'UPLOAD_DIR_EXPLAIN'			=> 'Ścieżka do katalogu zapisu załączników. Po zmianie katalogu należy wszystkie pliki z poprzedniego katalogu zapisu załączników przenieść do nowego.',
	'UPLOAD_ICON'					=> 'Ikona pliku',
	'UPLOAD_NOT_DIR'				=> 'Wybrana lokalizacja prawdopodobnie nie jest katalogiem.',
));
