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
* @Polish locale 2014-11-29 21:45:45 Zespół Olympus.pl $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Tutaj można określić podstawowe funkcje witryny, takie jak jej nazwa i opis, a także inne ustawienia, takie jak domyślna strefa czasowa i język.',
	'BOARD_INDEX_TEXT'				=> 'Nazwa witryny',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Ten tekst będzie wyświetlany w wierszu nawigacyjnym jako nazwa witryny i będzie do niej odnośnikiem. Jeśli nie zostanie określony, będzie wyświetlana nazwa domyślna „Wykaz forów”.',
	'BOARD_STYLE'					=> 'Styl witryny',
	'CUSTOM_DATEFORMAT'				=> 'Dostosuj…',
	'DEFAULT_DATE_FORMAT'			=> 'Format daty',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Format daty jest taki sam, jak funkcja PHP <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Domyślny język',
	'DEFAULT_STYLE'					=> 'Domyślny styl',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Domyślny styl witryny dla nowych użytkowników.',
	'DISABLE_BOARD'					=> 'Wyłącz witrynę',
	'DISABLE_BOARD_EXPLAIN'			=> 'Wybranie <samp>Tak</samp> spowoduje, że witryna, z wyjątkiem administratorów i moderatorów, będzie niedostępna dla użytkowników. Do pola obok można wprowadzić krótką (255 znaków) wiadomość informującą użytkowników o powodzie zamknięcia witryny.',
	'DISPLAY_LAST_SUBJECT'			=> 'Wyświetlaj na stronie forum temat ostatnio dodanego posta',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Temat ostatnio dodanego posta będzie wyświetlany na stronie forum jako odnośnik do posta. Tematy z forów zabezpieczonych hasłem i forów, na których użytkownik nie ma prawa do odczytu nie będą wyświetlane.',
	'GUEST_STYLE'					=> 'Styl gościa',
	'GUEST_STYLE_EXPLAIN'			=> 'Styl witryny dla gości.',
	'OVERRIDE_STYLE'				=> 'Zastąp styl użytkownika',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Zamienia wybrany przez użytkownika i gościa styl na styl określony w pozycji „Domyślny styl”.',
	'SITE_DESC'						=> 'Opis witryny',
	'SITE_HOME_TEXT'				=> 'Nazwa strony głównej',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Ten tekst będzie wyświetlany w wierszu nawigacyjnym jako nazwa strony głównej i będzie do niej odnośnikiem. Jeśli nie zostanie określony, będzie wyświetlana nazwa domyślna „Strona domowa”.',
	'SITE_HOME_URL'					=> 'Adres URL strony głównej',
	'SITE_HOME_URL_EXPLAIN'			=> 'Jeśli zostanie określony, będzie adresem URL odnośnika do strony głównej wyświetlanym w wierszu nawigacyjnym witryny oraz adresem URL dołączonym do logo witryny zamiast adresu do wykazu forów. Wymagany jest adres absolutny, np. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Nazwa witryny',
	'SYSTEM_TIMEZONE'				=> 'Strefa czasowa gościa',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Strefa czasowa używana do wyświetlania czasu niezalogowanym użytkownikom (goście, boty). Zalogowani użytkownicy określają swoją strefę czasową podczas rejestracji i mogą ją zmienić z poziomu panelu zarządzania swoim kontem.',
	'WARNINGS_EXPIRE'				=> 'Czas trwania ostrzeżenia',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Liczba dni, po których nastąpi automatyczne usunięcie ostrzeżenia z rejestru użytkownika. Podaj wartość 0, by ostrzeżenia nie były usuwane.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Tutaj można włączyć/wyłączyć różne funkcje witryny.',

	'ALLOW_ATTACHMENTS'			=> 'Załączniki',
	'ALLOW_BIRTHDAYS'			=> 'Urodziny',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Wybranie <samp>Tak</samp> umożliwi podawanie przez użytkowników swojej daty urodzenia i ich wiek będzie wyświetlany w profilach. Wyświetlanie informacji o urodzinach użytkowników na stronie wykazu forów jest kontrolowane przez oddzielne ustawienia.',
	'ALLOW_BOOKMARKS'			=> 'Zakładki tematów',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Użytkownicy będą mogli dodawać i przechowywać swoje zakładki.',
	'ALLOW_BBCODE'				=> 'Znaczniki BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Obserwowanie forów',
	'ALLOW_NAME_CHANGE'			=> 'Zmiana nazwy użytkownika',
	'ALLOW_NO_CENSORS'			=> 'Wyłączanie cenzury słów',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Użytkownicy będą mogli sami wyłączyć/włączyć automatyczną cenzurę słów w postach i prywatnych wiadomościach.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Załączniki w prywatnych wiadomościach',
	'ALLOW_PM_REPORT'			=> 'Zgłaszanie prywatnych wiadomości',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Jeśli ta funkcja jest włączona, użytkownicy mogą zgłaszać otrzymane lub wysłane prywatne wiadomości moderatorom witryny. Wiadomości te będą wyświetlane w panelu kontrolnym moderacji.',
	'ALLOW_QUICK_REPLY'			=> 'Szybka odpowiedź',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Tutaj można włączyć/wyłączyć funkcję szybkiej odpowiedzi na całej witrynie. Jeśli funkcja ta jest włączona, w ustawieniach poszczególnych forów będzie można włączyć funkcję szybkich odpowiedzi dla danego forum.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Włącz szybką odpowiedź na wszystkich forach',
	'ALLOW_SIG'					=> 'Podpisy',
	'ALLOW_SIG_BBCODE'			=> 'Znaczniki BBCode w podpisach',
	'ALLOW_SIG_FLASH'			=> 'Znacznik <code>[FLASH]</code> w podpisach',
	'ALLOW_SIG_IMG'				=> 'Znacznik <code>[IMG]</code> w podpisach',
	'ALLOW_SIG_LINKS'			=> 'Odnośniki w podpisach',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Wybranie <samp>Nie</samp> spowoduje, że znacznik <code>[URL]</code> i automatyczne/magiczne adresy URL będą wyłączone.',
	'ALLOW_SIG_SMILIES'			=> 'Emotikony w podpisach',
	'ALLOW_SMILIES'				=> 'Emotikony',
	'ALLOW_TOPIC_NOTIFY'		=> 'Obserwowanie tematów',
	'BOARD_PM'					=> 'Prywatne wiadomości',
	'BOARD_PM_EXPLAIN'			=> 'Tutaj można określić, czy ten komponent będzie dostępny dla użytkowników.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Awatary to małe obrazki, które użytkownik może skojarzyć ze swoją osobą. W zależności od stylu, są one zazwyczaj wyświetlane powyżej nazwy użytkownika. Tutaj można określić, w jaki sposób użytkownicy mogą zdefiniować swoje awatary. Aby można było wysyłać awatary na serwer, trzeba na serwerze utworzyć katalog. Należy zdefiniować jego nazwę i odpowiednie atrybuty umożliwiające zapis do niego. Określony tutaj limit rozmiaru pliku odnosi się tylko do awatarów wysyłanych na serwer. Nie ma zastosowania do obrazków zdalnych.',

	'ALLOW_AVATARS'					=> 'Awatary',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Tutaj można zezwolić na globalne używanie awatarów.<br />Jeśli funkcja awatarów zostanie globalnie lub dla określonego trybu wyłączona, awatary nie będą wyświetlane na witrynie, ale użytkownicy będą mogli pobierać swoje awatary z poziomu panelu zarządzania swoim kontem.',
	'ALLOW_GRAVATAR'				=> 'Awatary typu gravatar',
	'ALLOW_LOCAL'					=> 'Galeria awatarów',
	'ALLOW_REMOTE'					=> 'Zdalne awatary',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Awatary powiązane z innymi witrynami.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Wgrywanie zdalnych awatarów',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Tutaj można zezwolić na wgrywanie awatarów z innych witryn.',
	'ALLOW_UPLOAD'					=> 'Wgrywanie awatarów',
	'AVATAR_GALLERY_PATH'			=> 'Ścieżka do galerii awatarów',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Ścieżka do katalogu znajdującego się w katalogu głównym skryptu phpBB, w którym znajdują się przykładowe obrazki. Np. <samp>images/avatars/gallery</samp>.<br />Dwie kropki, takie jak <samp>../</samp> ze względów bezpieczeństwa zostaną ze ścieżki usunięte.',
	'AVATAR_STORAGE_PATH'			=> 'Ścieżka do katalogu zapisu',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Ścieżka do katalogu znajdującego się w katalogu głównym skryptu phpBB, do którego będą wysyłane obrazki. Np. <samp>images/avatars/upload</samp>.<br />Wysyłanie obrazka awatara <strong>będzie niedostępne</strong>, jeśli ścieżka będzie niezapisywalna.<br />Dwie kropki, takie jak <samp>../</samp> ze względów bezpieczeństwa zostaną ze ścieżki usunięte.',
	'MAX_AVATAR_SIZE'				=> 'Maksymalne wymiary awatara',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Wysokość x szerokość w pikselach.',
	'MAX_FILESIZE'					=> 'Maksymalny rozmiar pliku awatara',
	'MAX_FILESIZE_EXPLAIN'			=> 'Dotyczy przesyłanych na serwer plików z awatarami. Wartość zero (0) - rozmiar przesyłanego pliku ograniczany jest tylko przez ustawienia PHP.',
	'MIN_AVATAR_SIZE'				=> 'Minimalne wymiary awatara',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Wysokość x szerokość w pikselach.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Tutaj można określić wszystkie domyślne ustawienia prywatnych wiadomości.',

	'ALLOW_BBCODE_PM'			=> 'Znaczniki BBCode',
	'ALLOW_FLASH_PM'			=> 'Znacznik <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Jeśli funkcja ta zostanie włączona, użytkownicy będą mieli możliwość użycia znacznika w prywatnych wiadomościach. Funkcja ta zależy również od uprawnień użytkownika.',
	'ALLOW_FORWARD_PM'			=> 'Przekazywanie wiadomości',
	'ALLOW_IMG_PM'				=> 'Znacznik <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Wiadomości do wielu użytkowników i grup',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Wysyłanie wiadomości do grup może być określone dla każdej grupy z poziomu strony ustawienia grup.',
	'ALLOW_PRINT_PM'			=> 'Podgląd wydruku',
	'ALLOW_QUOTE_PM'			=> 'Cytowanie',
	'ALLOW_SIG_PM'				=> 'Podpisy',
	'ALLOW_SMILIES_PM'			=> 'Emotikony',
	'BOXES_LIMIT'				=> 'Maksymalna liczba wiadomości w skrzynce',
	'BOXES_LIMIT_EXPLAIN'		=> 'Użytkownicy mogą przetrzymywać w każdej skrzynce nie więcej niż określoną tutaj liczbę wiadomości. Wartość zero (0) – liczba nielimitowana.',
	'BOXES_MAX'					=> 'Maksymalna liczba folderów',
	'BOXES_MAX_EXPLAIN'			=> 'Domyślnie użytkownicy mogą utworzyć wiele folderów osobistych dla prywatnych wiadomości.',
	'ENABLE_PM_ICONS'			=> 'Ikony tematów',
	'FULL_FOLDER_ACTION'		=> 'Domyślne działanie przy zapełnieniu folderu',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Domyślne działanie, gdy folder jest zapełniony. Wyjątkiem jest folder „Wiadomości wysłane”, gdzie domyślnym działaniem jest zawsze usunięcie najstarszych wiadomości.',
	'HOLD_NEW_MESSAGES'			=> 'Nowe wiadomości będą czekały',
	'PM_EDIT_TIME'				=> 'Limit czasu zmian prywatnej wiadomości',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Określa czas dostępny do zmian jeszcze nie dostarczonej prywatnej wiadomości. Wartość zero (0) wyłącza tę funkcję.',
	'PM_MAX_RECIPIENTS'			=> 'Dopuszczalna maksymalna liczba odbiorców',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Dopuszczalna maksymalna liczba odbiorców prywatnej wiadomości. Wartość zero (0) oznacza brak limitu. To ustawienie może być zmienione dla każdej grupy w ustawieniach danej grupy.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Tutaj można określić wszystkie domyślne ustawienia dla tworzenia tematów, postów, wiadomości.',
	'ALLOW_POST_LINKS'					=> 'Odnośniki w postach/prywatnych wiadomościach',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Jeśli umieszczanie odnośników zostanie zabronione, znacznik BBCode <code>[URL]</code> i automatyczne/magiczne adresy URL będą wyłączone.',
	'ALLOW_POST_FLASH'					=> 'Znacznik <code>[FLASH]</code> w postach',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Jeśli użycie znacznika BBCode <code>[FLASH]</code> zostanie zabronione, będzie on niedostępny w postach. W systemie uprawnień można określić, którzy użytkownicy będą mogli używać tego znacznika.',

	'BUMP_INTERVAL'					=> 'Interwał przesunięcia tematu',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Jest to czas, jaki musi upłynąć od opublikowania ostatniego posta na forum w temacie, aby temat ten mógł zostać przesunięty na początek listy tematów. Ustawienie wartości 0 spowoduje całkowite wyłączenie tej funkcji.',
	'CHAR_LIMIT'					=> 'Maksymalna liczba znaków w poście',
	'CHAR_LIMIT_EXPLAIN'			=> 'Maksymalna dozwolona liczba znaków w poście. Wartość zero (0) – liczba nielimitowana.',
	'DELETE_TIME'					=> 'Czas usuwania',
	'DELETE_TIME_EXPLAIN'			=> 'Tutaj można określić czas, w przeciągu którego można usunąć nowy post. Wstawienie wartości 0 powoduje wyłączenie tej funkcji.',
	'DISPLAY_LAST_EDITED'			=> 'Wyświetlaj informację o czasie ostatniej zmiany',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Wybranie tej funkcji spowoduje wyświetlanie w postach informacji o zmianach posta.',
	'EDIT_TIME'						=> 'Czas zmiany treści',
	'EDIT_TIME_EXPLAIN'				=> 'Limit czasu w przeciągu, którego można zmieniać zawartość nowego posta. Wartość zero (0) wyłącza tę funkcję.',
	'FLOOD_INTERVAL'				=> 'Interwał anty-przepełnieniowy',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Odstęp czasu, jaki użytkownik musi odczekać zanim będzie mógł wysłać kolejny post. Jest to zabezpieczenie przed spamowaniem.',
	'HOT_THRESHOLD'					=> 'Wartość progowa popularności tematów',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Wymagana liczba postów w wątku, aby temat otrzymał status popularnego tematu. Wartość zero (0) wyłącza tę funkcję.',
	'MAX_POLL_OPTIONS'				=> 'Maksymalna liczba opcji ankiety',
	'MAX_POST_FONT_SIZE'			=> 'Maksymalny rozmiar czcionki w poście',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maksymalny dozwolony rozmiar czcionki w poście. Wartość zero (0) – rozmiar czcionki nielimitowany.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maksymalna wysokość obrazka w poście',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maksymalna wysokość obrazka/pliku flash w postach. Wartość zero (0) – wysokość nielimitowana.',
	'MAX_POST_IMG_WIDTH'			=> 'Maksymalna szerokość obrazka w poście',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maksymalna szerokość obrazka/pliku flash w postach. Wartość zero (0) – szerokość nielimitowana.',
	'MAX_POST_URLS'					=> 'Maksymalna liczba odnośników w poście',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maksymalna liczba adresów URL w poście. Wartość zero (0) – liczba odnośników nielimitowana.',
	'MIN_CHAR_LIMIT'				=> 'Minimalna liczba znaków w poście/wiadomości',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Minimalna liczba znaków, jakie użytkownik musi wprowadzić w poście/prywatnej wiadomości. Wartość minimalna: 1.',
	'POSTING'						=> 'Tworzenie postów',
	'POSTS_PER_PAGE'				=> 'Liczba postów na stronie',
	'QUOTE_DEPTH_LIMIT'				=> 'Maksymalne zagnieżdżenie cytatów',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maksymalna liczba zagnieżdżonych cytatów w poście. Wartość zero (0) – nielimitowana głębokość zagnieżdżenia.',
	'SMILIES_LIMIT'					=> 'Maksymalna liczba emotikon w poście',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Dozwolona maksymalna liczba emotikon w jednym poście. Wartość zero (0) – liczba emotikon nielimitowana.',
	'SMILIES_PER_PAGE'				=> 'Liczba emotikon na stronie',
	'TOPICS_PER_PAGE'				=> 'Liczba tematów na stronie',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Tutaj można określić wszystkie domyślne ustawienia podpisów.',

	'MAX_SIG_FONT_SIZE'				=> 'Maksymalny rozmiar czcionki',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maksymalny rozmiar czcionki dozwolony w podpisie użytkownika. Wartość zero (0) – rozmiar czcionki nielimitowany.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maksymalna wysokość obrazka',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maksymalna wysokość obrazka/pliku <samp>flash</samp> dozwolona w podpisie użytkownika. Wartość zero (0) – wysokość nielimitowana.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maksymalna szerokość obrazka',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maksymalna szerokość obrazka/pliku <samp>flash</samp> dozwolona w podpisie użytkownika. Wartość zero (0) – szerokość nielimitowana.',
	'MAX_SIG_LENGTH'				=> 'Maksymalna długość podpisu',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maksymalna liczba znaków w podpisie.',
	'MAX_SIG_SMILIES'				=> 'Maksymalna liczba emotikon',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maksymalna liczba emotikon dozwolona w podpisie użytkownika. Wartość zero (0) – liczba emotikon nielimitowana.',
	'MAX_SIG_URLS'					=> 'Maksymalna liczba odnośników',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maksymalna liczba odnośników dozwolona w podpisie użytkownika. Wartość zero (0) – liczba odnośników nielimitowana.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Tutaj można zdefiniować opcje rejestracji i powiązane z nią ustawienia profilu.',

	'ACC_ACTIVATION'				=> 'Aktywacja konta',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Funkcja ta określa, czy użytkownicy będą mieć natychmiastowy dostęp do witryny, czy też wymagane będzie potwierdzenie rejestracji. Można także całkowicie wyłączyć rejestrację użytkowników. Funkcja „E-mail do wszystkich” musi być włączona, aby można było stosować aktywację przez użytkownika lub administratora.',
	'ACC_ACTIVATION_WARNING'		=> 'Wybrana metoda potwierdzenia rejestracji wymaga, aby funkcja wysyłania e-maili była włączona. Jeśli funkcja ta będzie wyłączona, rejestracja użytkowników będzie niemożliwa. Zalecamy wybranie innej metody potwierdzenia rejestracji lub aktywację funkcji wysyłania e-maili.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Liczba postów dla nowego użytkownika',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Nowi użytkownicy do czasu przekroczenia określonego tutaj limitu postów będą znajdowali się w obrębie grupy <em>Nowo zarejestrowani użytkownicy</em>. Grupę tę można wykluczyć z używania systemu prywatnych wiadomości lub przeglądania swoich postów. <strong>Wartość 0 wyłącza tę funkcję.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Ustaw grupę <em>Nowo zarejestrowani użytkownicy</em> jako domyślną',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Jeśli zostanie wybrane <samp>Tak</samp> i jest określony limit postów dla nowo zarejestrowanych użytkowników, użytkownicy ci będą przydzielani do grupy <em>Nowo zarejestrowani użytkownicy</em> i grupa ta będzie jednocześnie ich grupą domyślną. Może być to bardzo przydatne, jeśli chcesz przydzielić grupie domyślną rangę lub awatar, które następnie użytkownik dziedziczy.',

	'ACC_ADMIN'					=> 'Administrator',
	'ACC_DISABLE'				=> 'Wyłącz rejestrację',
	'ACC_NONE'					=> 'Brak (natychmiastowy dostęp)',
	'ACC_USER'					=> 'Użytkownik (weryfikacja przez e-mail)',
//	'ACC_USER_ADMIN'			=> 'Użytkownik + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Powtórne użycie adresu e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Użytkownicy będą mogli się rejestrować, używając tego samego adresu e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numer faksu COPPA',
	'COPPA_MAIL'				=> 'Adres e-mail COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'To jest adres e-mail, na który rodzice/opiekunowie prawni mogą wysyłać formularz rejestracyjny COPPA.',
	'ENABLE_COPPA'				=> 'COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Włączenie tej funkcji wymusi na użytkownikach zadeklarowanie czy mają ukończone 13 lat, czy też nie. Takie działanie jest wymagane przez amerykańskie prawo COPPA. Jeśli funkcja ta będzie wyłączona, sekcje COPPA nie będą wyświetlane.',
	'MAX_CHARS'					=> 'maks.',
	'MIN_CHARS'					=> 'min',
	'NO_AUTH_PLUGIN'			=> 'Nie znaleziono odpowiedniej wtyczki uwierzytelniającej.',
	'PASSWORD_LENGTH'			=> 'Długość hasła',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimalna i maksymalna liczba znaków w hasłach.',
	'REG_LIMIT'					=> 'Liczba prób rejestracji',
	'REG_LIMIT_EXPLAIN'			=> 'Liczba prób wprowadzenia kodu potwierdzającego, jakie użytkownik może wykonać zanim zostanie zablokowany w tej sesji.',
	'USERNAME_ALPHA_ONLY'		=> 'Tylko litery i cyfry',
	'USERNAME_ALPHA_SPACERS'	=> 'Litery, cyfry i odstępy',
	'USERNAME_ASCII'			=> 'ASCII (bez znaków międzynarod. Unicode)',
	'USERNAME_LETTER_NUM'		=> 'Dowolna litera i cyfra',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Dowolna litera, cyfra i odstęp',
	'USERNAME_CHARS'			=> 'Limit znaków w nazwie użytkownika',
	'USERNAME_CHARS_ANY'		=> 'Wszystkie znaki',
	'USERNAME_CHARS_EXPLAIN'	=> 'Zabronione znaki w nazwie użytkownika i odstępach: spacja, -, +, _, [ i ].',
	'USERNAME_LENGTH'			=> 'Długość nazwy użytkownika',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimalna i maksymalna liczba znaków w nazwie użytkownika.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Ustawienia kanałów informacyjnych',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'W tym module można określić ustawienia różnych kanałów Atom, a także przetwarzania dowolnych znaczników BBCode w postach, tak by był czytelny w zewnętrznych kanałach.',

	'ACP_FEED_GENERAL'					=> 'Ogólne ustawienia kanałów',
	'ACP_FEED_POST_BASED'				=> 'Ustawienia kanałów związanych z postami',
	'ACP_FEED_TOPIC_BASED'				=> 'Ustawienia kanałów związanych z tematami',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Inne ustawienia kanałów',

	'ACP_FEED_ENABLE'					=> 'Kanały',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Tutaj można włączyć/wyłączyć kanały Atom dla zewnętrznych witryn.<br />Wyłączenie tej funkcji spowoduje wyłączenie wszystkich kanałów bez względu na ustawienia opcji znajdujących się poniżej.',
	'ACP_FEED_LIMIT'					=> 'Liczba elementów',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Maksymalna wyświetlana liczba elementów kanału.',

	'ACP_FEED_OVERALL'					=> 'Kanał ogólny',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Nowe posty z całej witryny.',
	'ACP_FEED_FORUM'					=> 'Kanały dla forum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Tutaj można włączyć/wyłączyć kanały dla nowych postów pojedynczego forum i jego subforów.',
	'ACP_FEED_TOPIC'					=> 'Kanały dla tematu',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Włącza/wyłącza kanały dla nowych postów pojedynczego tematu.',

	'ACP_FEED_TOPICS_NEW'				=> 'Kanał nowych tematów',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Tutaj można włączyć/wyłączyć kanał „Wszystkie tematy”, w którym są wyświetlane ostatnio utworzone tematy łącznie z pierwszym postem tematu.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Kanał aktywnych tematów',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Tutaj można włączyć/wyłączyć kanał „Aktywne tematy”, w którym są wyświetlane ostatnio aktywne tematy łącznie z ostatnim postem.',
	'ACP_FEED_NEWS'						=> 'Kanał nowości',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Wyświetla pierwszy post z wybranych tutaj forów. Aby wyłączyć kanał, nie zaznaczaj żadnego forum.<br />Kliknięcie ze wciśniętym klawiszem <samp>Ctrl</samp> umożliwia wybór wielu forów.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Kanał forów',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Tutaj można włączyć/wyłączyć kanał „Wszystkie fora”, w którym jest wyświetlany wykaz wszystkich forów.',

	'ACP_FEED_HTTP_AUTH'				=> 'Uwierzytelnianie HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Tutaj można włączyć/wyłączyć uwierzytelnianie HTTP. Umożliwia to użytkownikom po dodaniu do adresu URL kanału parametru <samp>auth=http</samp> odbieranie zawartości ukrytej dla gości. Niektóre ustawienia PHP wymagają dodatkowych zmian w pliku .htaccess. Instrukcja znajduje się w tym pliku.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Elementy statystyk',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Wyświetla indywidualne statystyki następujących elementów kanału:<br />(autor, data i czas, odpowiedzi, odsłony)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Wykluczone fora',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Dane z tych forów <strong>nie będą</strong> zawarte w kanałach. Aby dane były pobierane ze wszystkich forów nie zaznaczaj żadnego.<br />Kliknięcie ze wciśniętym klawiszem <samp>Ctrl</samp> umożliwia zaznaczenie/odznaczenie wielu forów.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Tutaj można wybrać i skonfigurować wtyczki, które implementują różne sposoby zapobiegania rejestracji tak zwanych spambotów.',
	'ACP_VC_EXT_GET_MORE'					=> 'Inne i prawdopodobnie lepsze wtyczki anty-spamowe znajdziesz w <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>Bazie rozszerzeń</strong></a>, a więcej informacji dotyczących sposobów zabezpieczenia swojej witryny przed spamem znajdziesz w <a href="https://www.phpbb.com/go/anti-spam"><strong>Bazie wiedzy</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Dostępne wtyczki',
	'CAPTCHA_UNAVAILABLE'					=> 'Nie można wybrać wtyczki, ponieważ jej wymagania nie są spełnione.',
	'CAPTCHA_GD'							=> 'Kod GD',
	'CAPTCHA_GD_3D'							=> 'Kod GD 3D',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Szumy pierwszoplanowe',
	'CAPTCHA_GD_EXPLAIN'					=> 'Do wytworzenia bardziej skomplikowanych kodów opartych na technice CAPTCHA zostanie użyta biblioteka GD.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Do wytworzenia kodów trudniejszych do rozpoznania przez boty zostaną użyte szumy pierwszoplanowe.',
	'CAPTCHA_GD_X_GRID'						=> 'Oś X szumów tła',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Aby wytworzyć kody trudniejsze do rozpoznania przez boty, użyj najniższych ustawień. Wartość zero (0) wyłącza oś X szumów tła.',
	'CAPTCHA_GD_Y_GRID'						=> 'Oś Y szumów tła',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Aby wytworzyć kody trudniejsze do rozpoznania przez boty, użyj najniższych ustawień. Wartość zero (0) wyłącza oś Y szumów tła.',
	'CAPTCHA_GD_WAVE'						=> 'Zniekształcenia falowe',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Do wytworzenia trudniejszych do rozpoznania kodów zostaną użyte zniekształcenia falowe.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Szum 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Funkcja ta powoduje dodanie do kodu dodatkowych trójwymiarowych obiektów umieszczonych ponad znakami.',
	'CAPTCHA_GD_FONTS'						=> 'Używane czcionki',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Funkcja ta steruje liczbą używanych do wytworzenia kodu kształtów liter. Można użyć domyślnych kształtów liter, wprowadzić różne kształty lub użyć małych liter.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Domyślne',
	'CAPTCHA_FONT_NEW'						=> 'Nowe kształty',
	'CAPTCHA_FONT_LOWER'					=> 'Małe litery',
	'CAPTCHA_NO_GD'							=> 'CAPTCHA bez GD',
	'CAPTCHA_PREVIEW_MSG'					=> 'Zmiany ustawień potwierdzeń wizualnych nie zostały zapisane. To jest tylko podgląd.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Tutaj można zobaczyć efekt aktualnych ustawień.',

	'CAPTCHA_SELECT'						=> 'Zainstalowane wtyczki',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'W rozwijanym menu znajduje się wykaz wtyczek rozpoznanych przez witrynę. Nazwy wtyczek wyświetlane szarym kolorem są w tej chwili niedostępne i mogą potrzebować skonfigurowania przed ich użyciem.',
	'CAPTCHA_CONFIGURE'						=> 'Konfiguruj wtyczki',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Zmiana ustawień wybranej wtyczki.',
	'CONFIGURE'								=> 'Konfiguruj',
	'CAPTCHA_NO_OPTIONS'					=> 'Ta wtyczka nie ma opcji konfiguracyjnych.',

	'VISUAL_CONFIRM_POST'					=> 'Potwierdzenia publikowania postów przez gości',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Jeśli funkcja ta zostanie włączona, goście, aby opublikować post, będą musieli użyć specjalnych potwierdzeń. Jest to forma zabezpieczenia forum przed masowym publikowaniem postów.',
	'VISUAL_CONFIRM_REG'					=> 'Potwierdzenia rejestracji',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Jeśli funkcja ta zostanie włączona, nowi użytkownicy, aby się zarejestrować, będą musieli w odpowiednie pole wprowadzić kod potwierdzający wyświetlany na obrazku. Jest to forma zabezpieczenia forum przed masową rejestracją wykonywaną przez boty.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Zmiana potwierdzeń',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Włączenie tej funkcji umożliwi użytkownikom zmianę potwierdzeń podczas rejestracji, jeśli będą one nieczytelne lub niezrozumiałe. Niektóre wtyczki mogą nie obsługiwać tej funkcji',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Tutaj można zdefiniować dane ciasteczek wysyłanych do przeglądarek użytkowników. W większości przypadków domyślne wartości ustawień ciasteczek powinny być wystarczające. Jeśli zachodzi potrzeba zmiany tych ustawień, należy zrobić to bardzo ostrożnie. Nieprawidłowe ustawienia mogą powodować problemy z logowaniem użytkowników.',

	'COOKIE_DOMAIN'				=> 'Domena ciasteczka',
	'COOKIE_NAME'				=> 'Nazwa ciasteczka',
	'COOKIE_PATH'				=> 'Ścieżka do ciasteczka',
	'COOKIE_SECURE'				=> 'Bezpieczne ciasteczko',
	'COOKIE_SECURE_EXPLAIN'		=> 'Jeśli serwer jest uruchomiony przez SSL, należy włączyć tę funkcję. W pozostałych przypadkach funkcja powinna być wyłączona. Włączenie tej funkcji, gdy serwer nie jest uruchomiony przez SSL, będzie powodowało błędy podczas przekierowań.',
	'ONLINE_LENGTH'				=> 'Czas wyświetlania obecności na forum',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Liczba minut po upływie, których nieaktywni użytkownicy nie będą wyświetlani w sekcji „Kto jest online”. Większa wartość jest wskazana dla czasu przetwarzania koniecznego do wygenerowania listy.',
	'SESSION_LENGTH'			=> 'Czas trwania sesji',
	'SESSION_LENGTH_EXPLAIN'	=> 'Czas po jakim sesja wygaśnie.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Tutaj można włączyć/wyłączyć stronę kontaktową, a także dodać tekst, jaki będzie na niej wyświetlany.',

	'CONTACT_US_ENABLE'				=> 'Włącz stronę kontaktową',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Włączenie strony kontaktowej umożliwi użytkownikom wysyłanie wiadomości do administratorów witryny.',

	'CONTACT_US_INFO'				=> 'Informacje strony kontaktowej',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Poniższe informacje będą wyświetlane na stronie kontaktowej.',
	'CONTACT_US_INFO_PREVIEW'		=> 'Podgląd informacji zawartych na stronie kontaktowej',
	'CONTACT_US_INFO_UPDATED'		=> 'Informacje na stronie kontaktowej zostały zaktualizowane.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Tutaj, w celu zmniejszenia obciążenia serwera, można włączyć i wyłączyć wiele funkcji witryny. Zmniejszając liczbę funkcji wymagających przetworzenia przez serwer zmniejszy się jego obciążenie. Na większości serwerów nie ma potrzeby wyłączania żadnych funkcji. Niemniej na niektórych systemach lub w środowisku hostingu współdzielonego może być korzystne wyłączenie niepotrzebnych funkcji. Można także określić limity wykorzystania zasobów serwera i liczbę aktywnych sesji po osiągnięciu, których witryna przejdzie w tryb offline.' ,

	'ALLOW_CDN'						=> 'Zezwalaj na używanie zewnętrznych serwerów dostarczania treści',
	'ALLOW_CDN_EXPLAIN'				=> 'Jeśli ta opcja zostanie włączona, niektóre pliki będą serwowane z zewnętrznych serwerów dystrybucji treści (CDN), a nie z własnego serwera. Zmniejsza to szerokość pasma wymaganą przez własny serwer, ale może stanowić problem prywatności dla niektórych administratorów witryny. W domyślnej instalacji phpBB z serwera CDN Google jest wczytywana biblioteka jQuery i czcionka Open Sans.',
	'ALLOW_LIVE_SEARCHES'			=> 'Zezwalaj na dynamiczne wyszukiwanie',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Jeśli funkcja jest włączona, użytkownicy będą na całej witrynie otrzymywali propozycje słów kluczowych do wpisania w różnych polach.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Dodatkowe pola profilu',
	'LIMIT_LOAD'					=> 'Limit obciążenia serwera' ,
	'LIMIT_LOAD_EXPLAIN'			=> 'Jeśli średnie obciążenie systemu serwera osiągnie wartość 1-minute, witryna automatycznie przejdzie do trybu offline. Wartość 1.0 odpowiada ~100% wykorzystaniu jednego procesora. Funkcja ta jest dostępna i działa tylko na serwerach opartych na systemach uniksowych. Wprowadzona tutaj wartość zostanie automatycznie zresetowana do zera (0), jeśli phpBB nie będzie w stanie osiągnąć tego limitu.',
	'LIMIT_SESSIONS'				=> 'Limit sesji',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Jeśli liczba sesji w okresie pomiarowym jednej minuty przekroczy określoną tutaj wartość, witryna przejdzie do trybu offline. Wartość zero (0) – sesje nielimitowane.',
	'LOAD_CPF_MEMBERLIST'			=> 'Wyświetlaj dodatkowe pola na liście użytkowników',
	'LOAD_CPF_PM'					=> 'Wyświetlaj dodatkowe pola w prywatnych wiadomościach',
	'LOAD_CPF_VIEWPROFILE'			=> 'Wyświetlaj dodatkowe pola w profilach użytkowników',
	'LOAD_CPF_VIEWTOPIC'			=> 'Wyświetlaj dodatkowe pola na stronach tematu',
	'LOAD_USER_ACTIVITY'			=> 'Wyświetlaj aktywność użytkownika',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Wyświetla w profilu użytkownika i w panelu zarządzania kontem temat/forum, na którym użytkownik jest najbardziej aktywny. Zaleca się wyłączenie tej funkcji w witrynach zawierających więcej niż milion postów.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Wygaszanie powiadomień',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Liczba dni, po których powiadomienia będą automatycznie usuwane. Ustaw wartość 0, jeśli chcesz, aby powiadomienia nie były usuwane.',
	'RECOMPILE_STYLES'				=> 'Wykonuj ponowną kompilację przestarzałych komponentów stylu',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Sprawdza czy są dostępne zaktualizowane komponenty stylu w katalogu witryny i wykonuje ich kompilację.',
	'YES_ANON_READ_MARKING'			=> 'Oznaczaj tematy/posty dla gości',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Włączenie tej funkcji będzie powodowało zapisywanie i wyświetlanie gościom informacji o przeczytanych/nieprzeczytanych tematach i postach. Jeśli funkcja ta będzie wyłączona, tematy i posty będą dla gości zawsze oznaczone jako przeczytane.',
	'YES_BIRTHDAYS'					=> 'Wyświetlaj urodziny',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Jeśli funkcja jest wyłączona, informacje o urodzinach nie będą wyświetlane. Aby ta funkcja działała, musi być również włączona funkcja urodzin.',
	'YES_JUMPBOX'					=> 'Wyświetlaj menu „Przejdź do”',
	'YES_MODERATORS'				=> 'Wyświetlaj moderatorów',
	'YES_ONLINE'					=> 'Wyświetlaj użytkowników online',
	'YES_ONLINE_EXPLAIN'			=> 'Jeśli funkcja ta jest włączona, na dole strony wykazu forów będą wyświetlane informacje o użytkownikach online, a na stronach forum i tematów – odnośnik do listy użytkowników online.',
	'YES_ONLINE_GUESTS'				=> 'Wyświetlaj gości na liście użytkowników online',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Jeśli funkcja ta jest włączona, na liście użytkowników online będą wyświetlane informacje o gościach.',
	'YES_ONLINE_TRACK'				=> 'Wyświetlaj informację online/offline',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Jeśli funkcja ta jest wyłączona, w profilach i na stronach tematów będzie wyświetlana informacja o statusie użytkownika (online/offline).',
	'YES_POST_MARKING'				=> 'Wyróżniaj tematy',
	'YES_POST_MARKING_EXPLAIN'		=> 'Wyróżnia temat – informuje, że użytkownik pisał w danym temacie poprzez wyświetlanie nieco innej ikony tematu.',
	'YES_READ_MARKING'				=> 'Oznaczaj tematy po stronie serwera',
	'YES_READ_MARKING_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje, że informacja przeczytany/nieprzeczytany będzie przechowywana w bazie danych, a nie w ciasteczku.',
	'YES_UNREAD_SEARCH'				=> 'Włącz wyszukiwanie nieprzeczytanych postów',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'Skrypt phpBB obsługuje moduły i wtyczki uwierzytelniające. Tutaj można określić, w jaki sposób użytkownik będzie przeprowadzał uwierzytelnianie podczas logowania się do witryny. Domyślnie skrypt zawiera cztery wtyczki: DB, LDAP, Apache i OAuth. Nie wszystkie metody wymagają dodatkowych informacji, tak więc można wypełnić tylko te pola, które są właściwe dla wybranej metody.',

	'AUTH_METHOD'				=> 'Wybierz metodę uwierzytelniania',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Musi być dostarczony zarówno klucz, jak i fraza szyfrująca każdego włączonego dostawcy usługi OAuth. Został dostarczony tylko jeden z elementów.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Aby móc uwierzytelniać za pomocą zewnętrznego serwera, każdy dostawca usługi OAuth wymaga unikalnej frazy szyfrującej i klucza. Elementy te powinny być dostarczone przez usługę OAuth w trakcie rejestracji witryny i powinny być wprowadzane dokładnie w takiej postaci, jak zostały dostarczone.<br />Serwisy, dla których nie zostanie tutaj podany klucz i fraza szyfrująca nie będą mogły być używane przez użytkowników forum. Użytkownicy mogą nadal rejestrować się i logować, używając wtyczki DB.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Klucz',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Fraza szyfrująca',

	'APACHE_SETUP_BEFORE_USE'	=> 'Przed przełączeniem phpBB na uwierzytelnianie za pomocą Apache, należy najpierw skonfigurować uwierzytelnianie Apache. Należy pamiętać, że nazwa użytkownika użyta dla uwierzytelniania Apache musi być taka sama, jak nazwa użytkownika phpBB. Uwierzytelnianie Apache może być użyte tylko z mod_php (nie z wersją CGI) i wyłączonym trybem bezpiecznym.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'Adres bazowy <var>dn</var> LDAP',
	'LDAP_DN_EXPLAIN'				=> 'Jest to część „nazwy wyróżniającej” (Distinguished Name), która lokalizuje informacje o użytkowniku za pomocą nazwy odpowiedniego typu. W zależności od sposobu konstruowania może przybrać na przykład następującą postać: <samp>o=Super Firma,c=pl</samp> gdzie o – nazwa firmy, c – kraj (pl).',
	'LDAP_EMAIL'					=> 'Atrybut e-mail LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Wprowadzony tutaj atrybut e-mail będzie automatycznie określać adres e-mail dla nowych użytkowników. Pozostawienie tego pola pustego będzie skutkowało wyświetlaniem pustego pola adresu dla użytkowników logujących się po raz pierwszy.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Podłączenie do serwera LDAP się nie powiodło. Niewłaściwa nazwa użytkownika/hasło.',
	'LDAP_NO_EMAIL'					=> 'Podany atrybut e-mail nie istnieje.',
	'LDAP_NO_IDENTITY'				=> 'Nie można znaleźć danych logowania dla %s.',
	'LDAP_PASSWORD'					=> 'Hasło LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Aby używać podłączenia anonimowego, należy pozostawić to pole puste. W innym przypadku proszę wprowadzić hasło dla użytkownika wymienionego powyżej. Wymagane dla serwerów Active Directory.<br /><em><strong>Ostrzeżenie:</strong> Hasło zostanie zapisane w bazie danych jako zwykły tekst, więc każdy, kto ma dostęp do bazy danych lub do tej strony konfiguracyjnej będzie mógł je zobaczyć.</em>',
	'LDAP_PORT'						=> 'Port serwera LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Zamiast domyślnego portu 389 można określić inny port, który będzie używany do połączenia z serwerem LDAP.',
	'LDAP_SERVER'					=> 'Nazwa serwera LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Jeśli jest używane LDAP, jest to nazwa lub adres IP serwera LDAP. Alternatywnie można podać adres URL, np. ldap://hostname:port/',
	'LDAP_UID'						=> '<var>UID</var> LDAP',
	'LDAP_UID_EXPLAIN'				=> 'Tutaj proszę podać klucz według, którego będzie wyszukiwany identyfikator logowania. Można użyć atrybuty, np. <var>uid</var>, <var>sn</var>, itp. gdzie uid – identyfikator użytkownika, sn – nazwisko.',
	'LDAP_USER'						=> '<var>DN</var> użytkownika LDAP',
	'LDAP_USER_EXPLAIN'				=> 'Aby używać logowania anonimowego, należy pozostawić to pole puste. Jeśli pole zostanie wypełnione, phpBB podczas logowania użyje nazwy wyróżniającej (DN) do próby znalezienia właściwego użytkownika. Należy użyć odpowiedniego atrybutu nazwy wyróżniającej, np. <samp>uid – nazwa użytkownika, ou – jednostka organizacyjna, o – organizacja, c – kraj (pl)</samp>. Wymagane dla serwerów Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtr użytkownika LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Stosując dodatkowe filtry można zawęzić zakres szukanych obiektów. Na przykład użycie filtru <samp>objectClass=posixGroup</samp> spowoduje w efekcie przeszukanie zbioru <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Tutaj można zdefiniować ustawienia serwera i powiązanych domen. Proszę sprawdzić czy wprowadzane dane są poprawne. Błędy będą skutkowały nieprawidłową informacją zawartą w wiadomościach e-mail. Należy pamiętać, aby nazwa domeny nie zawierała http:// lub innego protokołu. Numer portu można zmieniać tylko wtedy, gdy zna się numer portu używanego przez serwer. W większości przypadków port 80 jest poprawną wartością.',

	'ENABLE_GZIP'				=> 'Kompresja GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Przed wysłaniem do użytkownika wygenerowana zawartość będzie kompresowana. Pozwoli to na zmniejszenie ruchu w sieci, ale zwiększy obciążenie procesora zarówno na serwerze, jak i komputerze lokalnym. Wymaga wczytania rozszerzenia zlib PHP.',
	'FORCE_SERVER_VARS'			=> 'Narzucaj protokół serwera',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Jeśli zostanie wybrane <samp>Tak</samp>, zamiast automatycznie określanych wartości, będą używane zdefiniowane poniżej ustawienia protokołu serwera.',
	'ICONS_PATH'				=> 'Ścieżka do ikon postów',
	'ICONS_PATH_EXPLAIN'		=> 'Ścieżka do katalogu znajdującym się w katalogu głównym phpBB, w którym będą przechowywane ikony postów, np. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Zezwalaj na przepisywanie adresów URL',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Jeśli funkcja ta zostanie włączona, adresy URL zawierające „app.php” będą skracane poprzez usunięcie nazwy pliku, np. app.php/foo przyjmie postać /foo). <strong>Aby ta funkcjonalność działała, wymagany jest moduł serwera Apache „mod_rewrite”. Jeśli ta funkcja jest włączona bez obsługi modułu „mod_rewrite”, adresy URL na tej witrynie mogą być uszkodzone.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Moduł <strong>mod_rewrite</strong> na twoim serwerze sieciowym Apache jest wyłączony. Włącz ten moduł lub skontaktuj się ze swoim dostarczycielem usługi hostingowej i poproś o jego włączenie.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Nie jesteśmy w stanie określić czy serwer obsługuje przepisywanie adresów URL. To ustawienie może być włączone, ale jeśli przepisywanie URL nie jest dostępne, ścieżki wygenerowane przez to forum, np. do zastosowania w odnośnikach mogą być uszkodzone. Jeśli nie masz pewności czy można bezpiecznie włączyć tę funkcję, skontaktuj się ze swoim dostarczycielem usługi hostingowej.',
	'PATH_SETTINGS'				=> 'Ustawienia ścieżek',
	'RANKS_PATH'				=> 'Ścieżka do obrazków rang',
	'RANKS_PATH_EXPLAIN'		=> 'Ścieżka do katalogu znajdującym się w katalogu głównym phpBB, w którym będą przechowywane obrazki rang, np. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Ścieżka do skryptu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Ścieżka do katalogu, gdzie jest umiejscowiona instalacja phpBB, relatywna do nazwy domeny, np. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Nazwa domeny',
	'SERVER_NAME_EXPLAIN'		=> 'Nazwa domeny, z której uruchamiana jest ta witryna, np. <samp>www.foo.bar</samp>.',
	'SERVER_PORT'				=> 'Port serwera',
	'SERVER_PORT_EXPLAIN'		=> 'Uruchomiony port serwera. Zazwyczaj jest to port 80. Zmieniać tylko, jeśli serwer używa innego portu.',
	'SERVER_PROTOCOL'			=> 'Protokół serwera',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Jeśli ustawienia protokołu są narzucone, wprowadzone tutaj dane będą używane jako protokół serwera. Jeśli to pole nie zostanie wypełnione lub ustawienia nie będą narzucone, protokół jest określany przez ustawienia bezpiecznego ciasteczka (<samp>http://</samp> lub <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Ustawienia adresu URL serwera',
	'SMILIES_PATH'				=> 'Ścieżka do emotikon',
	'SMILIES_PATH_EXPLAIN'		=> 'Ścieżka do katalogu znajdującym się w katalogu głównym phpBB, w którym będą przechowywane emotikony, np. <samp>images/emoticons</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Ścieżka do ikon rozszerzeń grup',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Ścieżka do katalogu znajdującym się w katalogu głównym phpBB, w którym będą przechowywane ikony grup rozszerzeń, np. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Uruchamiaj zadania cykliczne przez systemowy Cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Jeśli funkcja jest wyłączona, phpBB zaplanuje i uruchomi zadania cykliczne automatycznie, jeśli jest włączona, skrypt phpBB nie będzie planował zadań cyklicznych samodzielnie. Administrator systemu musi zaplanować, by <code>bin/phpbbcli.php cron:run</code> był uruchamiany przez systemową funkcję cron w regularnych odstępach czasowych, np. co 5 minut.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Tutaj można zdefiniować ustawienia sesji i powiązanych z nimi opcji logowania.',

	'ALL'							=> 'Wszystko',
	'ALLOW_AUTOLOGIN'				=> 'Automatyczne logowanie',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje wyświetlanie opcji „Zapamiętaj mnie” na stronie logowania do witryny. Zaznaczenie tej opcji umożliwi użytkownikom automatyczne logowanie podczas odwiedzin witryny.',
	'ALLOW_PASSWORD_RESET'			=> 'Zezwalaj na resetowanie hasła',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Włączenie tej funkcji spowoduje wyświetlanie na stronie logowania do witryny odnośnika „Nie pamiętam hasła”, umożliwiającego użytkownikowi odzyskanie dostępu do swojego konta. Jeśli witryna używa zewnętrznego mechanizmu autoryzacji, należy tę funkcję wyłączyć.',
	'AUTOLOGIN_LENGTH'				=> 'Klucze automatycznego logowania wygasają po',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Liczba dni nieobecności użytkownika na forum, po których klucze automatycznego logowania tracą ważność. Wartość (0) wyłącza tę funkcję.',
	'BROWSER_VALID'					=> 'Weryfikuj przeglądarkę',
	'BROWSER_VALID_EXPLAIN'			=> 'W celu zwiększenia bezpieczeństwa każda sesja będzie weryfikowała przeglądarkę.',
	'CHECK_DNSBL'					=> 'Sprawdzaj, czy IP jest obecne na liście DNSBL',
	'CHECK_DNSBL_EXPLAIN'			=> 'Jeśli funkcja ta jest włączona, następuje sprawdzanie czy IP użytkownika jest obecny na następujących listach adresów IP nadawców spamu (DNS Blacklist): <a href="http://spamcop.net">spamcop.net</a> i <a href="http://www.spamhaus.org">www.spamhaus.org</a>. W zależności od konfiguracji serwera sprawdzanie może potrwać jakiś czas. Jeśli występuje znaczne spowolnienie lub jest zgłaszana duża liczba fałszywych informacji, zaleca się wyłączenie tej funkcji.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Sprawdzaj poprawność mapowania domeny',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Jeśli funkcja ta jest włączona, rekord wymiany poczty (MX record) adresu e-mail podanego podczas rejestracji lub zmienionego w profilu użytkownika jest sprawdzany pod względem poprawności.',
	'FORCE_PASS_CHANGE'				=> 'Wymuszaj zmianę hasła co',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje wymuszanie na użytkownikach zmiany ich haseł po upływie określonej tutaj liczby dni. Wartość zero (0) wyłącza tę funkcję.',
	'FORM_TIME_MAX'					=> 'Maksymalny czas wysłania formularzy',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Czas, w jakim użytkownik powinien wysłać formularz. Wartość -1 wyłącza funkcję. Bez względu na te ustawienia formularz może stracić ważność, jeśli sesja wygaśnie.',
	'FORM_SID_GUESTS'				=> 'Powiąż formularze z sesjami gości',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Jeśli funkcja zostanie włączona, token formularza wystawiany gościom będzie ważny tylko w danej sesji. Może to spowodować problemy z niektórymi dostawcami internetu.',
	'FORWARDED_FOR_VALID'			=> 'Sprawdzaj nagłówek <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sesja będzie kontynuowana tylko wtedy, gdy wysłany nagłówek <var>X_FORWARDED_FOR</var> pasuje do nagłówka wysłanego z poprzednim żądaniem. Zablokowane adresy IP będą również sprawdzane w <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Sprawdzaj IP sesji',
	'IP_VALID_EXPLAIN'				=> 'Określa, w jakim zakresie IP użytkownika jest używane do sprawdzenia sesji. <samp>Wszystko</samp> porównuje cały adres, <samp>A.B.C</samp> pierwsze x.x.x, <samp>A.B</samp> pierwsze x.x, <samp>Brak</samp> wyłącza sprawdzanie. W adresach IPv6 <samp>A.B.C</samp> porównuje pierwsze 4 bloki, a <samp>A.B</samp> pierwsze 3 bloki.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maksymalna liczba prób logowania z danego adresu IP',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Maksymalna liczba prób logowania z danego adresu IP po przekroczeniu, której zostanie włączone specjalne zabezpieczenie przeciw botom spamowym wymuszające użycie potwierdzeń. Wartość 0 zabezpiecza przed włączeniem tych zabezpieczeń .',
	'IP_LOGIN_LIMIT_TIME'			=> 'Czas ważności próby logowania z adresu IP',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Po upływie tego czasu nie będzie możliwości zalogowania.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Liczba dozwolonych prób logowania przez <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Zamiast limitowania prób logowania z danego adresu IP, są one limitowane przez wartości <var>X_FORWARDED_FOR</var>. <br /><em><strong>Uwaga!</strong> Tę funkcję należy włączać tylko wtedy, gdy jest się za serwerem proxy, który określa wartości <var>X_FORWARDED_FOR</var> jako godne zaufania.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksymalna liczba prób logowania przez użytkownika',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Maksymalna dozwolona liczba prób logowania do konta, po której przekroczeniu zostanie włączone specjalne zabezpieczenie przeciw botom spamowym wymuszające użycie potwierdzeń. Wartość 0 zabezpiecza przed włączeniem tych zabezpieczeń dla różnych kont użytkownika.',
	'NO_IP_VALIDATION'				=> 'Brak',
	'NO_REF_VALIDATION'				=> 'Brak',
	'PASSWORD_TYPE'					=> 'Poziom skomplikowania hasła',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Określa poziom skomplikowania hasła.',
	'PASS_TYPE_ALPHA'				=> 'Musi zawierać litery i cyfry',
	'PASS_TYPE_ANY'					=> 'Nieokreślony',
	'PASS_TYPE_CASE'				=> 'Musi mieć różną wielkość znaków',
	'PASS_TYPE_SYMBOL'				=> 'Musi zawierać symbole',
	'REF_HOST'						=> 'Sprawdź tylko host',
	'REF_PATH'						=> 'Sprawdź również ścieżkę',
	'REFERRER_VALID'					=> 'Sprawdzaj odsyłacz HTTP',
	'REFERRER_VALID_EXPLAIN'			=> 'Jeśli funkcja jest włączona, odsyłacz żądań typu POST będzie porównywany z ustawieniami hosta i ścieżki. Może to powodować problemy z witrynami używającymi różnych domen lub zewnętrznych danych logowania.',
	'TPL_ALLOW_PHP'					=> 'Używaj PHP w szablonach',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Jeśli ta funkcja jest włączona, składnia <code>PHP</code> i <code>INCLUDEPHP</code> będzie rozpoznawana i przetwarzana w szablonach.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Te informacje są używane przez witrynę podczas wysyłania e-maili do użytkowników. Sprawdź czy podany adres e-mail jest ważnym adresem, ponieważ wszystkie zwrócone lub niedostarczone wiadomości będą prawdopodobnie odsyłane na ten adres. Jeśli serwer nie udostępnia natywnych (opartych na PHP) usług e-mail, można wysyłać wiadomości bezpośrednio, używając protokołu SMTP. Wymaga to adresu odpowiedniego serwera. Jeśli go nie znasz, zapytaj o niego swojego usługodawcę. Jeśli serwer wymaga uwierzytelnienia (i tylko, jeśli wymaga), wprowadź nazwę użytkownika, hasło i metodę uwierzytelniania.',

	'ADMIN_EMAIL'					=> 'Adres zwrotny',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Ten adres e-mail będzie używany jako adres zwrotny wszystkich e-maili oraz do kontaktów technicznych. Będzie on zawsze użyty w e-mailach w polach <samp>Adres zwrotny</samp> i <samp>Nadawca</samp>.',
	'BOARD_EMAIL_FORM'				=> 'E-mail przez witrynę',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje, że e-maile będą wysyłane za pośrednictwem wewnętrznego modułu witryny wykorzystującego do tego celu PHP. Adresy e-mail użytkowników nie będą widoczne dla innych.',
	'BOARD_HIDE_EMAILS'				=> 'Ukryj adresy',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje ukrycie adresów e-mail – pozostaną one całkowicie poufne.',
	'CONTACT_EMAIL'					=> 'Adres e-mail',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Ten adres zostanie użyty, jeśli kiedykolwiek zajdzie potrzeba kontaktu w szczególnych przypadkach, np. w sprawie spamu, błędów wydajności, itp. Będzie on zawsze użyty w e-mailach w polach <samp>Od</samp> i <samp>Odpowiedź do</samp>.',
	'CONTACT_EMAIL_NAME'			=> 'Nazwa kontaktu',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Jest to nazwa kontaktu, jaką będzie widział odbiorca wiadomości e-mail. Jeśli nie chcesz mieć nazwy kontaktu, pozostaw to pole puste.',
	'EMAIL_FUNCTION_NAME'			=> 'Nazwa funkcji',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Nazwa funkcji e-maila używana do wysyłania maili przez PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Wielkość pakietu',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Jest to maksymalna dozwolona liczba wiadomości e-mail wysyłanych w jednym pakiecie. Ta funkcja ma zastosowanie do kolejki wysyłanych wiadomości. Jeśli występują jakieś problemy z niedostarczonymi powiadomieniami, należy określić tę wartość jako zero (0).',
	'EMAIL_SIG'						=> 'Podpis',
	'EMAIL_SIG_EXPLAIN'				=> 'Ten tekst będzie dołączany jako podpis do wszystkich wiadomości e-mail wysyłanych przez witrynę.',
	'ENABLE_EMAIL'					=> 'E-mail do wszystkich',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Jeśli ta funkcja zostanie wyłączona, nie będzie możliwości wysłania wiadomości e-mail. <em>Informacja. Ustawienia aktywacji konta przez użytkownika lub administratora wymagają, aby ta funkcja była włączona. Jeśli obecnie w ustawieniach aktywacji jest stosowana aktywacja konta przez „użytkownika” lub „administratora”, wyłączenie tej funkcji uniemożliwi rejestrację użytkowników.</em>',
	'SMTP_AUTH_METHOD'				=> 'Metoda uwierzytelniania dla SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Uwierzytelnianie jest używane tylko wtedy, gdy jest określona nazwa użytkownika i hasło. Jeśli nie wiesz, jakiej metody użyć, zapytaj swojego dostawcę usługi.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Hasło',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Należy wprowadzić tylko, jeśli serwer SMTP tego wymaga.<br /><em><strong>Ostrzeżenie:</strong> Hasło zostanie zapisane w bazie danych jako zwykły tekst i będzie widoczne dla każdego, kto ma dostęp do bazy danych lub kto może przeglądać tę stronę konfiguracji.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Port serwera',
	'SMTP_PORT_EXPLAIN'				=> 'Można zmieniać tylko wtedy, gdy wiadomo, że serwer pracuje na innym porcie.',
	'SMTP_SERVER'					=> 'Adres serwera',
	'SMTP_SETTINGS'					=> 'Ustawienia SMTP',
	'SMTP_USERNAME'					=> 'Nazwa użytkownika',
	'SMTP_USERNAME_EXPLAIN'			=> 'Należy wprowadzić tylko, jeśli serwer SMTP tego wymaga.',
	'USE_SMTP'						=> 'Używaj serwera SMTP dla e-maili',
	'USE_SMTP_EXPLAIN'				=> 'Wybierz <samp>Tak</samp>, jeśli takie jest twoje życzenie lub trzeba wysyłać wiadomości e-mail przez dany serwer zamiast przez lokalną funkcję pocztową.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Tutaj można włączyć i kontrolować używanie protokołu Jabber do wysyłania błyskawicznych wiadomości i powiadomień witryny. Jabber jest protokołem otwartym, zatem dostępnym do użytku dla wszystkich. Niektóre serwery Jabbera zawierają bramki lub transporty, które pozwalają na kontaktowanie się użytkowników różnych sieci. Nie wszystkie serwery oferują wszystkie transporty i zmiany w protokołach mogą uniemożliwiać działanie komunikacji. Proszę wprowadzić dane działającego konta – phpBB użyje do komunikacji dane takie, jakie zostały tutaj wprowadzone.',

	'JAB_ENABLE'				=> 'Protokół Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje używanie protokołu Jabber do wysyłania wiadomości i powiadomień.',
	'JAB_GTALK_NOTE'			=> 'GTalk nie będzie działał, ponieważ nie znaleziono funkcji <samp>dns_get_record</samp>. Funkcja ta nie jest dostępna w PHP4 i nie została zaimplementowana na platformie Windows. Aktualnie nie działa na systemach bazujących na BSD, włącznie z Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Wielkość pakietu Jabbera',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Jest to liczba wiadomości wysyłanych w jednym pakiecie. Jeśli zostanie wybrane zero (0) wiadomość będzie wysyłana niezwłocznie – nie będzie czekała na inne wiadomości.',
	'JAB_PASSWORD'				=> 'Hasło',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Ostrzeżenie:</strong> Hasło zostanie zapisane w bazie danych jako zwykły tekst i będzie widoczne dla każdego, kto ma dostęp do bazy danych lub kto może przeglądać tę stronę konfiguracji.</em>',
	'JAB_PORT'					=> 'Port',
	'JAB_PORT_EXPLAIN'			=> 'Jeśli nie znasz numeru portu i nie jest to port 5222, pozostaw pole niewypełnione.',
	'JAB_SERVER'				=> 'Serwer',
	'JAB_SERVER_EXPLAIN'		=> 'Zobacz listę serwerów na %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'		=> 'Zmieniono ustawienia protokołu Jabber.',
	'JAB_USE_SSL'				=> 'Użyj połączenia SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'Jeśli funkcja ta jest włączona, będzie wykonywana próba ustanowienia bezpiecznego połączenia. Jeśli jest określony port 5222, zostanie zmieniony na 5223.',
	'JAB_USERNAME'				=> 'Nazwa użytkownika lub JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Wprowadź zarejestrowaną nazwę użytkownika lub ważny JID (Jabber Identity - adres użytkownika Jabbera). Poprawność nazwy użytkownika nie będzie sprawdzana. Jeśli zostanie określona tylko nazwa użytkownika, JID-em będzie ta nazwa i podany wyżej serwer. Zaleca się podanie nazwy ważnego JID-a, np. user@jabber.org.',
));
