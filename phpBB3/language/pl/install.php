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
	'ADMIN_CONFIG'				=> 'Ustawienia administratora',
	'ADMIN_PASSWORD'			=> 'Hasło administratora',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potwierdź hasło administratora',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Wprowadź hasło o długości 6 – 30 znaków.',
	'ADMIN_TEST'				=> 'Sprawdzanie ustawień administratora',
	'ADMIN_USERNAME'			=> 'Login administratora',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Wprowadź nazwę użytkownika o długości 3 – 20 znaków.',
	'APP_MAGICK'				=> 'Obsługa Imagemagick [ Załączniki ]',
	'AUTHOR_NOTES'				=> 'Informacje o autorze<br />» %s',
	'AVAILABLE'					=> 'Dostępne',
	'AVAILABLE_CONVERTORS'		=> 'Dostępne konwertery',

	'BEGIN_CONVERT'					=> 'Rozpocznij konwersję',
	'BLANK_PREFIX_FOUND'			=> 'Test tabel wykazał prawidłową instalację nieużywającą prefiksów w nazwach tabel.',
	'BOARD_NOT_INSTALLED'			=> 'Nie znaleziono instalacji',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Aby wykonać konwersję, należy najpierw wykonać <a href="%s">instalację phpBB3</a>.',
	'BACKUP_NOTICE'					=> 'Przed aktualizacją wykonaj kopię zapasową witryny, by zabezpieczyć się na wypadek, gdy w trakcie procesu aktualizacji wystąpią nieoczekiwane problemy.',

	'CATEGORY'					=> 'Kategoria',
	'CACHE_STORE'				=> 'Typ bufora',
	'CACHE_STORE_EXPLAIN'		=> 'Fizyczne położenie katalogu bufora – preferowany katalog witryny.',
	'CAT_CONVERT'				=> 'Konwersja',
	'CAT_INSTALL'				=> 'Instalacja',
	'CAT_OVERVIEW'				=> 'Przegląd',
	'CAT_UPDATE'				=> 'Aktualizacja',
	'CHANGE'					=> 'Zmień',
	'CHECK_TABLE_PREFIX'		=> 'Sprawdź prefiks tabel i spróbuj ponownie.',
	'CLEAN_VERIFY'				=> 'Czyszczenie i weryfikacja struktury końcowej',
	'CLEANING_USERNAMES'		=> 'Czyszczenie nazw użytkowników',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> to czysta nazwa użytkownika:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Na starej witrynie znaleziono kolidujące ze sobą nazwy użytkowników. Aby kontynuować konwersję, usuń tych użytkowników lub zmień ich nazwy, tak aby każdy użytkownik miał inną nazwę.',
	'COLLIDING_USER'			=> '» ID użytkownika: <strong>%d</strong>	nazwa użytkownika: <strong>%s</strong> (%d postów)',
	'CONFIG_CONVERT'			=> 'Konwertowanie konfiguracji',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Zapisanie pliku konfiguracji nie było możliwe. Inne metody utworzenia tego pliku są przedstawione poniżej.',
	'CONFIG_FILE_WRITTEN'		=> 'Plik konfiguracji został zapisany. Teraz można przejść do następnego etapu instalacji.',
	'CONFIG_PHPBB_EMPTY'		=> 'Zmienna konfiguracji dla „%s” nie zawiera danych.',
	'CONFIG_RETRY'				=> 'Spróbuj ponownie',
	'CONTINUE_CONVERT'			=> 'Kontynuuj konwersję',
	'CONTINUE_CONVERT_BODY'		=> 'Wykryto poprzednią próbę konwersji. Można teraz rozpocząć nową konwersję lub kontynuować poprzednią.',
	'CONTINUE_LAST'				=> 'Kontynuuj wykonanie instrukcji końcowych',
	'CONTINUE_OLD_CONVERSION'	=> 'Kontynuuj poprzednio rozpoczętą konwersję',
	'CONVERT'					=> 'Konwertuj',
	'CONVERT_COMPLETE'			=> 'Konwersja zakończona',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Witryna została skonwertowana na phpBB 3.1. Możesz teraz zalogować się i <a href="../">wejść na swoją witrynę</a>. Zanim odblokujesz swoją witrynę, usuwając katalog „install/”, sprawdź czy ustawienia zostały skonwertowane prawidłowo. Pomoc możesz uzyskać na stronie internetowej phpBB3, zapoznając się z <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">dokumentacją</a> oraz na forum <a href="https://www.phpbb.com/community/viewforum.php?f=466">pomocy</a>.',
	'CONVERT_INTRO'				=> 'Witamy w konwerterze phpBB', // Unified Convertor Framework
	'CONVERT_INTRO_BODY'		=> 'Z tego miejsca można dokonać importu danych z innych, zainstalowanych systemów forów dyskusyjnych. Lista poniżej zawiera wszystkie dostępne moduły konwertujące. Jeśli na liście nie ma potrzebnego konwertera, sprawdź na naszej stronie internetowej czy nie jest on już dostępny. Aby rozpocząć konwersję, kliknij odnośnik <em>Konwersja</em> znajdujący się w polu Opcje wybranego konwertera.',
	'CONVERT_NEW_CONVERSION'	=> 'Nowa konwersja',
	'CONVERT_NOT_EXIST'			=> 'Wybrany konwerter nie istnieje.',
	'CONVERT_OPTIONS'			=> 'Opcje',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Podane informacje zostały sprawdzone. Aby rozpocząć proces konwersji naciśnij znajdujący się poniżej przycisk.',
	'CONV_ERR_FATAL'			=> 'Błąd krytyczny konwersji',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Na starej witrynie jest włączona funkcja wysyłania załączników przez FTP. Wyłącz ją i sprawdź czy jest podany właściwy katalog docelowy, a następnie skopiuj wszystkie załączniki do nowego, dostępnego przez Internet katalogu. Po wykonaniu tych operacji ponownie uruchom proces konwersji.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nie ma dostępnych informacji konfiguracyjnych dla konwersji.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nie można uzyskać informacji o dostępie do forów.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nie można uzyskać informacji o kategoriach.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nie można uzyskać informacji o konfiguracji witryny.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nie można otworzyć/przeczytać „%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nie można uzyskać informacji o uwierzytelnieniu grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'W „add_bots()” wykryto niespójność w tabeli grup – dodaj wszystkie grupy specjalne samodzielnie.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nie można wstawić bota do tabeli z użytkownikami.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nie można wstawić bota do tabeli z botami.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nie można wstawić użytkownika do tabeli „user_group”.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Błąd przetwarzania wiadomości',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Informacja dla dewelopera: Trzeba określić $convertor[\'avatar_path\'], aby używać %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Nie podano relatywnej ścieżki do źródłowej witryny.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'avatar_gallery_path\'], aby używać %s.',
	'CONV_ERROR_NO_GROUP'				=> 'W %2$s nie znaleziono grupy „%1$s”.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'ranks_path\'], aby używać %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'smilies_path\'], aby używać %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Informacja dla dewelopera: Trzeba podać $convertor[\'upload_path\'], aby używać %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nie można wstawić/zmienić zezwolenia.',
	'CONV_ERROR_PM_COUNT'				=> 'Nie można wybrać folderu do policzenia PW.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nie można wstawić nowego forum, zamieniając starą kategorię.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nie można wstawić nowego forum, zamieniając stare forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nie można uzyskać informacji o uwierzytelnianiu użytkowników.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Niewłaściwa grupa „%1$s” zdefiniowana w %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ta strona zbiera dane wymagane do dostępu do źródłowej witryny. Podaj informacje o bazie danych twojej poprzedniej witryny. Konwerter nie zmieni niczego w podanej poniżej bazie danych. Aby umożliwić spójną konwersję, źródłowa witryna powinna być wyłączona.',
	'CONV_SAVED_MESSAGES'				=> 'Zapisane wiadomości',

	'COULD_NOT_COPY'			=> 'Nie można skopiować pliku <strong>%1$s</strong> do <strong>%2$s</strong><br /><br />Sprawdź czy katalog docelowy istnieje i nie jest zabezpieczony przed zapisem przez serwer.',
	'COULD_NOT_FIND_PATH'		=> 'Nie można znaleźć ścieżki do poprzedniej witryny. Sprawdź ustawienia i spróbuj ponownie.<br />» Podana ścieżka do źródłowej witryny to %s.',

	'DBMS'						=> 'Typ bazy danych',
	'DB_CONFIG'					=> 'Konfiguracja bazy danych',
	'DB_CONNECTION'				=> 'Połączenie z bazą danych',
	'DB_ERR_INSERT'				=> 'Błąd w czasie przetwarzania zapytania <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Błąd w czasie przetwarzania <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Błąd w czasie wykonywania <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Błąd w czasie wykonywania <var>query_first</var>, %s („%s”).',
	'DB_ERR_SELECT'				=> 'Błąd w czasie uruchamiania zapytania <code>SELECT</code>.',
	'DB_HOST'					=> 'Nazwa serwera bazy danych lub DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN (Data Source Name) jest właściwa tylko dla instalacji ODBC, a z bazą PostgreSQL, należy użyć localhost, by połączyć się z lokalnym serwerem uniksowym lub 127.0.0.1, by połączyć się przez TCP. Dla bazy SQLite wprowadź pełną ścieżkę do pliku bazy danych.',
	'DB_NAME'					=> 'Nazwa bazy danych',
	'DB_PASSWORD'				=> 'Hasło bazy danych',
	'DB_PORT'					=> 'Port serwera bazy danych',
	'DB_PORT_EXPLAIN'			=> 'Pozostaw to pole puste, chyba, że baza używa do połączenia niestandardowego portu.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Przepraszamy. Ten skrypt nie obsługuje wersji starszych niż „%1$s”. Aktualnie masz zainstalowaną wersję „%2$s”. Przed uruchomieniem tego skryptu musisz najpierw zaktualizować swoją instalację do poprzedniej wersji phpBB. Instrukcje, jak to zrobić znajdziesz na forum pomocy znajdującym się na witrynie phpBB.com.',
	'DB_USERNAME'				=> 'Nazwa użytkownika bazy danych',
	'DB_TEST'					=> 'Test połączenia',
	'DEFAULT_LANG'				=> 'Domyślny język witryny',
	'DEFAULT_PREFIX_IS'			=> 'Konwerter nie mógł znaleźć tabel o wybranym prefiksie. Sprawdź czy zostały podane poprawnie informacje o starej witrynie. Domyślny prefiks tabel dla %1$s to <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Zmienna test_file w konwerterze nie ma wartości. Użytkownik tego konwertera nie powinien widzieć tego błędu. Poinformuj o tym autora konwertera. Jeśli jesteś autorem konwertera, musisz podać nazwę pliku, który istnieje w źródłowej witrynie, co umożliwi sprawdzanie ścieżki.',
	'DIRECTORIES_AND_FILES'		=> 'Ustawienia katalogów i plików',
	'DISABLE_KEYS'				=> 'Wyłączanie kluczy',
	'DLL_FTP'					=> 'Obsługa zdalnego FTP [ Instalacja ]',
	'DLL_GD'					=> 'Obsługa GD [ Potwierdzenia wizualne ]',
	'DLL_MBSTRING'				=> 'Obsługa wielobajtowych znaków',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ przez ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Natywny ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL z rozszerzeniem MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'Obsługa XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Obsługa kompresji zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Pobierz plik konfiguracyjny',
	'DL_CONFIG_EXPLAIN'			=> 'Można pobrać kompletny plik config.php. Trzeba będzie ręcznie wysłać ten plik na serwer, zastępując istniejący plik w głównym katalogu phpBB 3.1. Pamiętaj, aby wysłać go w trybie tekstowym (ASCII) – więcej informacji na ten temat znajdziesz w dokumentacji swojego klienta FTP. Gdy plik config.php znajdzie się już na serwerze, naciśnij przycisk „Wykonano”, aby przejść do następnego etapu.',
	'DL_DOWNLOAD'				=> 'Pobierz',
	'DONE'						=> 'Wykonano',

	'ENABLE_KEYS'				=> 'Włączanie kluczy… Może to zająć dłuższą chwilę.',

	'FILES_OPTIONAL'			=> 'Opcjonalne pliki i katalogi',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcjonalne</strong> – Te pliki, katalogi, czy ustawienia zezwoleń nie są wymagane, jednak ich obecność przyśpieszy instalację. Jeśli nie istnieją lub są zabezpieczone przed zapisem, instalator spróbuje różnych metod, aby je utworzyć.',
	'FILES_REQUIRED'			=> 'Pliki i katalogi',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Wymagane</strong> – Aby prawidłowo funkcjonować, phpBB musi mieć możliwość odczytu lub zapisu do pewnych plików, czy katalogów. Informacja „Nie znaleziono”, oznacza, że trzeba utworzyć odpowiedni plik lub katalog, a informacja „Tylko do odczytu”, oznacza, że trzeba zmienić atrybuty odpowiedniego pliku lub katalogu, tak aby umożliwić phpBB w nich zapis.',
	'FILLING_TABLE'				=> 'Wypełnianie tabeli <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Wypełnianie tabel',

	'FINAL_STEP'				=> 'Przetwarzanie ostatniego etapu',
	'FORUM_ADDRESS'				=> 'Adres witryny',
	'FORUM_ADDRESS_EXPLAIN'		=> 'To jest adres URL poprzedniej witryny. Np. <samp>http://www.example.com/phpBB2/</samp>. Jeśli adres jest wprowadzony tutaj i nie pozostawiono pustego każdego wystąpienia tego adresu, będzie on zastąpiony w postach, prywatnych wiadomościach oraz podpisach przez adres nowej witryny.',
	'FORUM_PATH'				=> 'Ścieżka do starej witryny',
	'FORUM_PATH_EXPLAIN'		=> 'To jest <strong>relatywna</strong> ścieżka na dysku z <strong>głównego katalogu tej instalacji phpBB3</strong> do starej witryny.',
	'FOUND'						=> 'Znaleziono',
	'FTP_CONFIG'				=> 'Prześlij plik konfiguracyjny przez FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'Na tym serwerze wykryto moduł FTP. Można tą drogą spróbować zainstalować plik config.php. W tym celu należy uzupełnić poniższe pola. Zapamiętaj nazwę użytkownika i hasło do tego serwera! Więcej informacji możesz uzyskać od swojego dostawcy usługi hostingowej.',
	'FTP_PATH'					=> 'Ścieżka FTP',
	'FTP_PATH_EXPLAIN'			=> 'To jest ścieżka z katalogu głównego do katalogu phpBB, np. <samp>htdocs/phpBB3/</samp>',
	'FTP_UPLOAD'				=> 'Wyślij',

	'GPL'						=> 'Licencja GPL',

	'INITIAL_CONFIG'			=> 'Konfiguracja podstawowa',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Instalator sprawdził, że na tym serwerze można zainstalować phpBB3. Aby zainstalować phpBB, należy podać kilka informacji. Jeżeli nie wiesz, jak połączyć się z bazą danych, skontaktuj się z dostawcą usługi hostingowej lub poszukaj pomocy na forach oferujących pomoc dla phpBB. Zanim przejdziesz do następnego kroku, upewnij się, że wprowadzone dane są poprawne.',
	'INSTALL_CONGRATS'			=> 'Gratulacje!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Skrypt phpBB %1$s został zainstalowany. Teraz możesz:</p>
		<h2>Dokonać konwersji istniejącej witryny na phpBB3</h2>
		<p>Konwerter phpBB może dokonać konwersji witryny działającej na skrypcie phpBB2 i innych skryptach na phpBB3. Jeżeli masz witrynę, którą chcesz skonwertować, <a href="%2$s">uruchom konwerter</a>.</p>
		<h2>Rozpocząć używanie phpBB3!</h2>
		<p>Naciśnięcie przycisku znajdującego się poniżej spowoduje przeniesienie do panelu administracji (PA). Poświęć chwilę na sprawdzenie dostępnych funkcji. Pomoc możesz uzyskać na stronie internetowej phpBB3, zapoznając się z <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">dokumentacją</a>, w artykule: <a href="%3$s">Informacje podstawowe</a> oraz na forum <a href="https://www.phpbb.com/community/viewforum.php?f=466">pomocy</a>.</p><p><strong>Przed użyciem witryny zmień nazwę, przenieś lub usuń katalog instalacyjny „install/”. W innym przypadku dostępny będzie tylko panel administracji (PA).</strong>',
	'INSTALL_INTRO'				=> 'Witamy w instalatorze phpBB3',

	'INSTALL_INTRO_BODY'		=> 'Ten kreator pomoże ci zainstalować phpBB3 na twoim serwerze.</p><p>Podczas instalacji trzeba będzie podać informacje o ustawieniach twojej bazy danych. Jeżeli ich nie znasz, skontaktuj się z osobami zarządzającymi twoim serwerem i spytaj o nie. Bez nich nie będzie można zainstalować phpBB3. Musisz znać następujące dane:</p>

	<ul>
		<li>Typ bazy danych – rodzaj bazy danych, której chcesz użyć</li>
		<li>Nazwę serwera bazy danych lub DSN (Data Source Name) – adres serwera bazy danych</li>
		<li>Port serwera bazy danych – port serwera bazy danych, na którym działa baza (zazwyczaj nie jest konieczny)</li>
		<li>Nazwę bazy danych – nazwa bazy danych na serwerze</li>
		<li>Login i hasło do bazy danych – informacje potrzebne do zalogowania do bazy danych</li>
	</ul>

	<p><strong>Informacja:</strong> Jeśli do instalacji używasz bazy SQLite, w polu DSN (Data Source Name) podaj pełną ścieżkę do pliku z bazą danych i pozostaw pola loginu i hasła puste. Z powodów bezpieczeństwa, sprawdź czy plik bazy danych nie jest przechowywany w miejscu dostępnym przez sieć.</p>

	<p>phpBB3 współdziała z następującymi typami baz danych:</p>
	<ul>
		<li>MySQL w wersji 3.23 lub nowszej (MySQLi wspierane)</li>
		<li>PostgreSQL w wersji 8.3 lub nowszej</li>
		<li>SQLite w wersji 2.8.2+ lub nowszej</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server w wersji wyższej lub równej 2000 (bezpośrednio lub przez ODBC)</li>
		<li>MS SQL Server 2005 lub nowszy (natywny)</li>
		<li>Oracle</li>
	</ul>

	<p>W trakcie instalacji zostaną wyświetlone tylko bazy obsługiwane przez twój serwer.',
	'INSTALL_INTRO_NEXT'		=> 'Aby rozpocząć instalację naciśnij znajdujący się poniżej przycisk.',
	'INSTALL_LOGIN'				=> 'Zaloguj się',
	'INSTALL_NEXT'				=> 'Dalej',
	'INSTALL_NEXT_FAIL'			=> 'Niektóre testy zakończyły się niepowodzeniem i bezwzględnie przed przejściem do następnego etapu, należy skorygować występujące problemy. Niewykonanie tego może spowodować niekompletną instalacją.',
	'INSTALL_NEXT_PASS'			=> 'Wszystkie podstawowe testy zakończyły się pomyślnie i można przejść do następnego etapu instalacji. Jeśli zostały zmienione jakieś uprawnienia, moduły itp. zaleca się wykonać testy ponownie.',
	'INSTALL_PANEL'				=> 'Panel instalacji',
	'INSTALL_SEND_CONFIG'		=> 'Niestety instalator nie może zapisać informacji konfiguracyjnych w pliku config.php. Prawdopodobnie plik ten nie istnieje lub ma atrybut „tylko do odczytu”. Możliwe rozwiązania problemu zostaną wyświetlone poniżej.',
	'INSTALL_START'				=> 'Rozpocznij instalację',
	'INSTALL_TEST'				=> 'Testuj',
	'INST_ERR'					=> 'Błąd instalacji',
	'INST_ERR_DB_CONNECT'		=> 'Nie można połączyć się z bazą danych. Poniżej znajduje się opis błędu.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Podany plik bazy danych znajduje się wewnątrz katalogu głównego witryny. Należy umieścić go w miejscu niedostępnym przez Internet.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Podany prefiks jest nieprawidłowy. Musi rozpoczynać się literą i może zawierać tylko litery, cyfry i znaki podkreślenia.',
	'INST_ERR_DB_NO_ERROR'		=> 'Nie ma informacji o błędach.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Wersja MySQL zainstalowana na tym serwerze nie jest kompatybilna z wybraną opcją „MySQL z rozszerzeniem MySQLi”. Spróbuj użyć opcji „MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Zainstalowana wersja rozszerzenia SQLite jest przestarzała i należy ją zaktualizować do wersji 2.8.2 .',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Zainstalowana wersja rozszerzenia SQLite jest przestarzała i należy ją zaktualizować do wersji 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Wersja Oracle zainstalowana na tym serwerze wymaga ustawienia parametru <var>NLS_CHARACTERSET</var> na <var>UTF8</var>. Zmień ten parametr lub zaktualizuj bazę do wersji 9.2 lub nowszej.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Wybrana baza danych nie została utworzona w kodowaniu <var>UNICODE</var> lub <var>UTF8</var>. Spróbuj zainstalować witrynę z bazą danych o kodowaniu <var>UNICODE</var> lub <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'Nie podano nazwy bazy danych.',
	'INST_ERR_EMAIL_INVALID'	=> 'Podany adres e-mail jest nieprawidłowy.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Podane adresy e-mail nie są takie same.',
	'INST_ERR_FATAL'			=> 'Krytyczny błąd instalacji!',
	'INST_ERR_FATAL_DB'			=> 'Wystąpił krytyczny, niemożliwy do cofnięcia błąd bazy danych. Problem może być spowodowany brakiem właściwych uprawnień przez użytkownika bazy danych do wykonania poleceń <code>CREATE TABLE</code> lub <code>INSERT</code> itp. Więcej informacji możesz zobaczyć poniżej. Skontaktuj się z dostawcą usługi hostingowej lub poszukaj pomocy na forach oferujących pomoc dla phpBB.',
	'INST_ERR_FTP_PATH'			=> 'Nie można zmienić podanego katalogu. Sprawdź ścieżkę.',
	'INST_ERR_FTP_LOGIN'		=> 'Nie można zalogować się do serwera FTP. Sprawdź nazwę użytkownika i hasło.',
	'INST_ERR_MISSING_DATA'		=> 'Należy wypełnić wszystkie pola w tym formularzu.',
	'INST_ERR_NO_DB'			=> 'Nie można załadować modułu PHP obsługującego wybrany typ bazy danych.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Podane hasła nie są jednakowe.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Wprowadzone hasło jest za długie. Maksymalna długość to 30 znaków.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Wprowadzone hasło jest za krótkie. Minimalna długość to 6 znaków.',
	'INST_ERR_PREFIX'			=> 'Już istnieją tabele z takim prefiksem. Wybierz inny prefiks.',
	'INST_ERR_PREFIX_INVALID'	=> 'Wybrany prefiks tabel nie jest właściwy dla twojej bazy danych. Użyj innego nie zawierającego znaków specjalnych.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Podany prefiks tabel jest za długi. Maksymalna długość to %d znaków.',
	'INST_ERR_USER_TOO_LONG'	=> 'Wprowadzony login jest za długi. Maksymalna długość to 20 znaków.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Wprowadzony login jest za krótki. Minimalna długość to 3 znaki.',
	'INVALID_PRIMARY_KEY'		=> 'Nieprawidłowy klucz główny : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Operacja ta może chwilę potrwać… Proszę nie zatrzymywać skryptu.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Sprawdzanie rozszerzenia <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Wymagane</strong> – <samp>mbstring</samp> to rozszerzenie PHP dostarczające funkcje służące do operowania na tekstach o wielobajtowych ciągach znaków. Niektóre funkcje mbstring nie są kompatybilne z phpBB i muszą być wyłączone.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Przeciążenie funkcji',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> musi być ustawione na 0 lub 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Kodowanie przezroczystych znaków',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> musi być ustawione na 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Konwersja znaków wejściowych HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> musi być ustawione na <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Konwersja znaków wyjściowych HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var>	musi być ustawione na <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Sprawdź czy ten katalog istnieje i nie jest zabezpieczony przed zapisem i spróbuj ponownie:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Sprawdź czy te katalogi istnieją i nie są zabezpieczone przed zapisem i spróbuj ponownie:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Schemat bazy danych MySQL dla phpBB jest nieaktualny. Został wykryty schemat dla MySQL 3.x/4.x, a na serwerze jest uruchomiona baza MySQL %2$s.<br /><strong>Przed wykonaniem aktualizacji, należy zaktualizować schemat.</strong><br /><br />Zapoznaj się z artykułem traktującym o aktualizacji schematu MySQL znajdującym się w <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">bazie wiedzy</a>. Jeśli problemy będą nadal występowały, poszukaj pomocy na naszym <a href="https://www.phpbb.com/community/viewforum.php?f=466">forum</a>.',

	'NAMING_CONFLICT'			=> 'Konflikt w nazewnictwie: %s i %s to aliasy<br /><br />%s',
	'NEXT_STEP'					=> 'Przejdź do następnego etapu',
	'NOT_FOUND'					=> 'Nie znaleziono.',
	'NOT_UNDERSTAND'			=> 'Nie można zrozumieć %s #%d, tabela %s („%s”).',
	'NO_CONVERTORS'				=> 'Nie ma dostępnych żadnych konwerterów.',
	'NO_CONVERT_SPECIFIED'		=> 'Nie wybrano konwertera.',
	'NO_LOCATION'				=> 'Nie można określić położenia. Jeśli wiesz, gdzie jest zainstalowany ImageMagick, w panelu administracji podaj ścieżkę do niego.',
	'NO_TABLES_FOUND'			=> 'Nie znaleziono żadnych tabel.',

	'OVERVIEW_BODY'				=> 'Witamy w phpBB3!<br /><br />phpBB® jest najczęściej używanym systemem forów internetowych na świecie. phpBB3 jest najnowszą wersją pakietu, który miał swoją premierę w 2000 roku. Tak, jak i jego poprzednie wersje, phpBB3 jest bogate w funkcje przyjazne dla użytkowników i w pełni wspierane przez zespół phpBB. phpBB3 wspaniale rozwija to, co uczyniło phpBB2 popularnym i zawiera najczęściej zgłaszane przez użytkowników funkcje, które nie były obecne w poprzedniej wersji. Mamy nadzieję, że ta wersja spełni twoje oczekiwania.<br /><br />Instalator poprowadzi cię przez proces instalacji phpBB3, konwersji innego typu witryny lub aktualizacji poprzedniej wersji. Aby uzyskać więcej informacji, polecamy zapoznać się z <a href="../docs/INSTALL.html">instrukcją instalacji</a>.<br /><br /> Aby zapoznać się z licencją phpBB3 lub dowiedzieć się o zakresie naszej pomocy i jak ją uzyskać, wybierz daną opcję z bocznego menu. Aby kontynuować, wybierz na górze odpowiednią kartę.',

	'PCRE_UTF_SUPPORT'				=> 'Obsługa UTF-8 przez PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nie</strong> uruchomi się, jeśli instalacja PHP nie jest skompilowana ze wsparciem UTF-8 w rozszerzeniu PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Funkcja PHP getimagesize() jest dostępna',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Wymagane</strong> – Aby phpBB działało prawidłowo, funkcja „getimagesize” musi być dostępna.',
	'PHP_JSON_SUPPORT'				=> 'Obsługa PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Wymagane</strong> - Aby phpBB działało prawidłowo, rozszerzenie PHP JSON musi być dostępne.',
	'PHP_OPTIONAL_MODULE'			=> 'Opcjonalne moduły',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcjonalne</strong> – Te moduły lub aplikacje nie są wymagane. Jednakże, jeśli są dostępne, mogą dostarczyć dodatkowe funkcje.',
	'PHP_SUPPORTED_DB'				=> 'Obsługiwane bazy danych',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Wymagane</strong> – Należy mieć przynajmniej jedną z obsługiwanych przez PHP baz danych. Jeśli żaden z modułów baz danych nie jest wyświetlony jako dostępny, należy skontaktować się z dostawcą usługi hostingowej lub przejrzeć odpowiednią dokumentację instalacji PHP w poszukiwaniu porady.',
	'PHP_REGISTER_GLOBALS'			=> 'Funkcja PHP <var>register_globals</var> jest wyłączona',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB będzie działać, jeśli ta funkcja jest włączona, ale jeśli to możliwe, z powodów bezpieczeństwa, zaleca się wyłączyć funkcję „register_globals”.',
	'PHP_SAFE_MODE'					=> 'Tryb bezpieczny',
	'PHP_SETTINGS'					=> 'Wersja PHP i ustawienia',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Wymagane</strong> – Aby zainstalować phpBB3, musi być zainstalowane PHP w wersji nie niższej niż 5.3.3. Jeśli poniżej wyświetla się napis <var>Tryb bezpieczny</var> oznacza to, że PHP działa w tym trybie. Będzie to powodowało ograniczenie zdalnej administracji i podobnych funkcji.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Funkcja PHP <var>allow_url_fopen</var> jest włączona',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcjonalne</strong> – Ta funkcja nie jest konieczna do działania witryny, ale niektóre funkcje phpBB, takie jak awatary przechowywane na innych serwerach nie będą działać prawidłowo, jeśli ta funkcja będzie wyłączona.',
	'PHP_VERSION_REQD'				=> 'Wersja PHP >= 5.3.3',
	'POST_ID'						=> 'ID posta',
	'PREFIX_FOUND'					=> 'Test tabel wykazał prawidłową instalację używającą w nazwach tabel prefiksu <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Wykonywanie czynności przygotowujących',
	'PRE_CONVERT_COMPLETE'			=> 'Wszystkie kroki poprzedzające konwersję zostały wykonane poprawnie. Teraz można rozpocząć proces konwersji. Najprawdopodobniej trzeba będzie ręcznie przystosować kilka różnych elementów. Po konwersji, należy sprawdzić przydział uprawnień, przebudować indeks wyszukiwania, który nie jest konwertowany, a także sprawdzić czy pliki zostały prawidłowo skopiowane, np. awatary i emotikony.',
	'PROCESS_LAST'					=> 'Wykonywanie czynności końcowych',

	'REFRESH_PAGE'				=> 'Odśwież stronę, aby kontynuować konwersję',
	'REFRESH_PAGE_EXPLAIN'		=> 'Włączenie tej funkcji spowoduje, że po zakończeniu każdego kroku, aby kontynuować konwersję, konwerter automatycznie odświeży stronę. Jeśli jest to twoja pierwsza, testowa konwersja wykonywana w celu wyeliminowania w przyszłości błędów, sugerujemy, aby wyłączyć tę funkcję.',
	'REQUIREMENTS_TITLE'		=> 'Zgodność instalacji',
	'REQUIREMENTS_EXPLAIN'		=> 'Przed rozpoczęciem pełnej instalacji, phpBB przeprowadzi testy konfiguracji serwera i plików, aby sprawdzić czy istnieje możliwość zainstalowania i uruchomienia phpBB. Nie uruchamiaj instalacji, zanim nie zostaną zakończone wszystkie testy oraz uważnie zapoznaj się z ich wynikami. Jeśli chcesz używać funkcji zależnych od opcjonalnych testów, sprawdź czy one również zostały wykonane i zaliczone.',
	'RETRY_WRITE'				=> 'Spróbuj ponownie',
	'RETRY_WRITE_EXPLAIN'		=> 'Można zmienić atrybuty pliku config.php, aby umożliwić phpBB zapis w tym pliku. Aby jeszcze raz spróbować zapisać konfigurację, naciśnij przycisk „Spróbuj ponownie”. Pamiętaj, aby po zakończeniu instalacji przywrócić standardowe atrybuty pliku config.php.',

	'SCRIPT_PATH'				=> 'Ścieżka do skryptu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Jest to ścieżka do skryptu phpBB relatywna do nazwy domeny. Na przykład: <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Wybierz język',
	'SERVER_CONFIG'				=> 'Konfiguracja serwera',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Indeks wyszukiwania nie został skonwertowany.',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Stary indeks wyszukiwania nie został skonwertowany. Wyszukiwanie będzie zawsze zwracać pusty rezultat. Aby stworzyć nowy indeks wyszukiwania, przejdź do panelu administracji, wybierz „Konserwacja” i następnie „Indeksowanie wyszukiwania”.',
	'SELECT_FORUM_GA'			=> 'W phpBB 3.1 globalne ogłoszenia są powiązane z forami. Wybierz forum dla swojego ogłoszenia (może być zmienione w późniejszym czasie):',
	'SOFTWARE'					=> 'Oprogramowanie witryny',
	'SPECIFY_OPTIONS'			=> 'Określ opcje konwersji',
	'STAGE_ADMINISTRATOR'		=> 'Administrator',
	'STAGE_ADVANCED'			=> 'Ustawienia zaawansowane',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Ustawienia na tej stronie należy zmienić tylko, jeśli wymagasz nieco innych ustawień niż domyślne. Jeśli nie masz pewności, jakich zmian chcesz dokonać, przejdź do następnej strony. Żądane zmiany można w każdej chwili wykonać z poziomu panelu administracji.',
	'STAGE_CONFIG_FILE'			=> 'Plik konfiguracyjny',
	'STAGE_CREATE_TABLE'		=> 'Tworzenie tabel bazy danych',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabele bazy danych używane przez phpBB 3.1 zostały utworzone i wypełnione podstawowymi danymi. Przejdź dalej, by zakończyć instalowanie phpBB.',
	'STAGE_DATABASE'			=> 'Ustawienia bazy danych',
	'STAGE_FINAL'				=> 'Ostatni etap',
	'STAGE_INTRO'				=> 'Wprowadzenie',
	'STAGE_IN_PROGRESS'			=> 'Konwersja w toku…',
	'STAGE_REQUIREMENTS'		=> 'Wymagania',
	'STAGE_SETTINGS'			=> 'Ustawienia',
	'STARTING_CONVERT'			=> 'Rozpoczynanie konwersji',
	'STEP_PERCENT_COMPLETED'	=> 'Krok <strong>%d</strong> z <strong>%d</strong>',
	'SUB_INTRO'					=> 'Wprowadzenie',
	'SUB_LICENSE'				=> 'Licencja',
	'SUB_SUPPORT'				=> 'Pomoc',
	'SUCCESSFUL_CONNECT'		=> 'Połączono',
	'SUPPORT_BODY'				=> 'Pełna pomoc dla tego wydania phpBB3 jest darmowa. Zakres pomocy obejmuje:</p><ul><li>instalację</li><li>konfigurację</li><li>zapytania techniczne</li><li>problemy związane z potencjalnymi błędami oprogramowania</li><li>aktualizację wersji testowej RC do najnowszej, stabilnej wersji</li><li>konwersję z phpBB 2.0.x na phpBB3</li><li>konwersję z innych systemów forów dyskusyjnych na phpBB3 (przejdź na <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Zachęcamy użytkowników korzystających z wersji testowych phpBB3, aby dokonali aktualizacji do najnowszej stabilnej wersji.</p><h2>Rozszerzenia / Style</h2><p>W sprawach dotyczących rozszerzeń, należy kierować się na <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />W sprawach związanych ze stylami, szablonami, zestawami obrazków, proszę kierować się na <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Jeśli pytania dotyczą konkretnego pakietu, proszę zadać je bezpośrednio w temacie dedykowanym temu pakietowi.</p><h2>Pomoc</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a><br /><br />Aby otrzymywać najnowsze informacje o aktualizacjach, <a href="https://www.phpbb.com/support/">subskrybuj naszą listę mailingową</a>.<br /><br />',
	'SYNC_FORUMS'				=> 'Rozpoczynanie synchronizacji forów',
	'SYNC_POST_COUNT'			=> 'Synchronizacja liczników postów',
	'SYNC_POST_COUNT_ID'		=> 'Synchronizacja liczników postów od <var>wpisu</var> %1$s do %2$s.',
	'SYNC_TOPICS'				=> 'Rozpoczynanie synchronizacji tematów',
	'SYNC_TOPIC_ID'				=> 'Synchronizacja tematów od <var>ID tematu</var> %1$s do %2$s.',

	'TABLES_MISSING'			=> 'Nie znaleziono następujących tabel<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefiks nazw tabel w bazie danych',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefiks musi rozpoczynać się literą i może zawierać tylko litery, cyfry i znaki podkreślenia.',
	'TABLE_PREFIX_SAME'			=> 'Prefiks tabel musi być prefiksem używanym przez bazę danych, z której nastąpi konwersja.<br />» Podany prefiks tabel to %s.',
	'TESTS_PASSED'				=> 'Testy zaliczone',
	'TESTS_FAILED'				=> 'Testy niezaliczone',

	'UNABLE_WRITE_LOCK'			=> 'Nie można zapisać do zablokowanego pliku.',
	'UNAVAILABLE'				=> 'Niedostępne',
	'UNWRITABLE'				=> 'Zabezpieczony przed zapisem',
	'UPDATE_TOPICS_POSTED'		=> 'Generowanie informacji o tematach',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'W czasie generowania informacji o tematach wystąpił błąd. Po zakończeniu konwersji będzie można powtórzyć ten krok z poziomu panelu administracji.',
	'VERIFY_OPTIONS'			=> 'Weryfikowanie opcji konwersji',
	'VERSION'					=> 'Wersja',

	'WELCOME_INSTALL'			=> 'Witamy w instalatorze phpBB3!',
	'WRITABLE'					=> 'Zapisywalny',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Wszystkie pliki są zgodne z najnowszą wersją phpBB.',
	'ARCHIVE_FILE'				=> 'Plik źródłowy w archiwum',

	'BACK'				=> 'Wstecz',
	'BINARY_FILE'		=> 'Plik binarny',
	'BOT'				=> 'Pająk/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Metoda używana do sprawdzenia czy nazwa użytkownika nie jest używana przez kilku użytkowników została zmieniona. Wykonując porównanie wg nowej metody znaleziono kilku użytkowników mających tę samą nazwę. Przed dalszą kontynuacją, należy usunąć tych użytkowników lub zmienić ich nazwy, tak aby się nie powtarzały.',
	'CHECK_FILES'					=> 'Sprawdź pliki',
	'CHECK_FILES_AGAIN'				=> 'Sprawdź pliki ponownie',
	'CHECK_FILES_EXPLAIN'			=> 'W następnym kroku wszystkie pliki zostaną porównane z plikami aktualizacyjnymi. Jeśli jest to pierwsze sprawdzanie plików, może zająć dłuższą chwilę.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Dane zapisane w bazie danych wskazują, że jest zainstalowana aktualna wersja. Aby upewnić się, że wszystkie pliki są identyczne z plikami najnowszej wersji phpBB, możesz uruchomić porównywanie plików.',
	'CHECK_UPDATE_DATABASE'			=> 'Kontynuuj proces aktualizacji',
	'COLLECTED_INFORMATION'			=> 'Informacje o plikach',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Na poniższej liście znajdują się informacje o plikach, które należy zaktualizować. Zapoznaj się ze wszystkimi informacjami, aby dowiedzieć się, co one oznaczają i co należy zrobić, by aktualizacja się powiodła.',
	'COLLECTING_FILE_DIFFS'			=> 'Zbieranie różnic pomiędzy plikami',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Teraz należy <a href="../ucp.php?mode=login">zalogować się</a> i sprawdzić czy wszystko działa właściwie. Przed zalogowaniem usuń, zmień nazwę lub przenieś w inne miejsce katalog „install/”!',
	'CONTINUE_UPDATE_NOW'			=> 'Kontynuuj aktualizację',	// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Kontynuuj aktualizację',	// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Konflikt – Kod oryginalnego pliku przed aktualizacją',
	'CURRENT_VERSION'				=> 'Zainstalowana wersja',

	'DATABASE_TYPE'						=> 'Typ bazy danych',
	'DATABASE_UPDATE_COMPLETE'			=> 'Aktualizacja bazy danych została zakończona!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Kontynuuj aktualizację bazy danych',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Plik aktualizacyjny bazy danych w katalogu „install/” jest nieaktualny. Sprawdź czy na serwer została wysłana właściwa wersja pliku.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Aktualizacja bazy danych nie została jeszcze ukończona.',
	'DELETE_USER_REMOVE'				=> 'Usuń użytkownika i jego posty',
	'DELETE_USER_RETAIN'				=> 'Usuń użytkownika, ale pozostaw jego posty',
	'DESTINATION'						=> 'Plik docelowy',
	'DIFF_INLINE'						=> 'W wierszu',
	'DIFF_RAW'							=> 'Porównanie jednolite, nieprzetworzone',
	'DIFF_SEP_EXPLAIN'					=> 'Kod użyty w zaktualizowanym/nowym pliku',
	'DIFF_SIDE_BY_SIDE'					=> 'Wersja obok wersji',
	'DIFF_UNIFIED'						=> 'Porównanie jednolite',
	'DO_NOT_UPDATE'						=> 'Nie aktualizuj tego pliku',
	'DONE'								=> 'Wykonane',
	'DOWNLOAD'							=> 'Pobierz',
	'DOWNLOAD_AS'						=> 'Pobierz jako',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Pobierz archiwum zmodyfikowanych plików (zalecane)',
	'DOWNLOAD_CONFLICTS'				=> 'Błędy pobierania tego pliku',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Szukaj &lt;&lt;&lt;, aby zobaczyć błędy',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Pobierz archiwum zmodyfikowanych plików',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'W pobranym archiwum znajdują się zmodyfikowane pliki, które po rozpakowaniu archiwum należy wysłać na serwer we właściwe im miejsca w katalogu głównym phpBB. Po wykonaniu tej operacji, należy sprawdzić ponownie pliki, używając przycisku znajdującego się poniżej.',

	'EDIT_USERNAME'	=> 'Zmień nazwę użytkownika',
	'ERROR'			=> 'Błąd',
	'EVERYTHING_UP_TO_DATE'		=> 'Wszystko jest zgodne z najnowszą wersją phpBB. <a href="%1$s">Zaloguj się</a> teraz do swojej witryny i sprawdź czy wszystko działa prawidłowo. Nie zapomnij usunąć, zmienić nazwę lub przenieść w inne miejsce katalog instalacyjny! Prześlij nam aktualne informacje o swoim serwerze i konfiguracji witryny, korzystając z modułu <a href="%2$s">Wyślij statystyki</a> znajdującego się w panelu administracyjnym.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Ten plik jest aktualny.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Wykonanie porównania pliku nie jest możliwe.',
	'FILE_USED'						=> 'Informacja pobrana z',			// Single file
	'FILES_CONFLICT'				=> 'Konflikty w plikach',
	'FILES_CONFLICT_EXPLAIN'		=> 'Poniższe pliki zostały zmodyfikowane i nie obrazują oryginalnych plików starej wersji. Próba ich połączenia może powodować konflikty. Sprawdź, jakie to są konflikty i spróbuj je rozwiązać ręcznie lub kontynuuj aktualizację, wybierając preferowaną metodę połączenia. Po ręcznym rozwiązaniu konfliktów poprzez modyfikację plików sprawdź je ponownie. Dla każdego pliku można wybrać inną, z preferowanych metod połączenia. Pierwsza metoda spowoduje usunięcie ze starego pliku wierszy powodujących konflikt, druga – usunięcie zmian wprowadzonych w nowej wersji pliku.',
	'FILES_DELETED'					=> 'Usunięte pliki',
	'FILES_DELETED_EXPLAIN'			=> 'Następujące pliki nie istnieją w nowej wersji. Pliki te należy usunąć.',
	'FILES_MODIFIED'				=> 'Zmodyfikowane pliki',
	'FILES_MODIFIED_EXPLAIN'		=> 'Poniższe pliki zostały zmodyfikowane i nie obrazują oryginalnych plików starej wersji. Pliki zostaną połączone i nowa wersja pliku będzie zawierać modyfikacje z nowej wersji i modyfikacje wykonane wcześniej.',
	'FILES_NEW'						=> 'Nowe pliki',
	'FILES_NEW_EXPLAIN'				=> 'Poniższe pliki nie istnieją w zainstalowanej wersji phpBB. Pliki te zostaną dodane do instalacji.',
	'FILES_NEW_CONFLICT'			=> 'Nowe pliki powodujące konflikty',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Poniższe pliki zostały dodane w najnowszej wersji, ale pliki o takich nazwach i w tym samym położeniu znajdują się już w zainstalowanej wersji. Pliki te zostaną zastąpione nowymi.',
	'FILES_NOT_MODIFIED'			=> 'Pliki niezmodyfikowane',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Poniższe pliki nie zostały zmodyfikowane i są oryginalnymi plikami wersji phpBB, którą zamierzasz zaktualizować.',
	'FILES_UP_TO_DATE'				=> 'Pliki już zaktualizowane',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Poniższe pliki są aktualne i nie muszą być aktualizowane.',
	'FTP_SETTINGS'					=> 'Ustawienia FTP',
	'FTP_UPDATE_METHOD'				=> 'Wysyłanie na serwer za pomocą FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Pliki aktualizacyjne są niekompatybilne z zainstalowaną wersją. Zainstalowana wersja to %1$s, a pliki aktualizacyjne aktualizują phpBB %2$s do wersji %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Pliki aktualizacyjne są niekompletne.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Aktualizacja bazy danych została zakończona. Kontynuuj aktualizację.',

	'KEEP_OLD_NAME'		=> 'Zachowaj nazwę użytkownika',

	'LATEST_VERSION'		=> 'Najnowsza wersja',
	'LINE'					=> 'Wiersz',
	'LINE_ADDED'			=> 'Dodany',
	'LINE_MODIFIED'			=> 'Zmodyfikowany',
	'LINE_REMOVED'			=> 'Usunięty',
	'LINE_UNMODIFIED'		=> 'Niezmodyfikowany',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Aby wykonać aktualizację zainstalowanej wersji, należy się najpierw zalogować.',

	'MAPPING_FILE_STRUCTURE'	=> 'Aby ułatwić wysyłanie plików na serwer, tutaj znajdują się lokalizacje plików odpowiadające zainstalowanej wersji phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Dołącz modyfikacje',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Nie dołączaj – użyj nowego pliku',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Nie dołączaj – użyj zainstalowanego pliku',
	'MERGE_MOD_FILE_OPTION'		=> 'Dołącz modyfikacje (wstaw nowy kod phpBB w bloku, w którym zachodzi konflikt)',
	'MERGE_NEW_FILE_OPTION'		=> 'Dołącz modyfikacje (wstaw zmodyfikowany kod w bloku, w którym zachodzi konflikt)',
	'MERGE_SELECT_ERROR'		=> 'Wybrano nieprawidłowe metody łączenia plików, w których występują konflikty.',
	'MERGING_FILES'				=> 'Łączenie różnic',
	'MERGING_FILES_EXPLAIN'		=> 'Zbieranie zmian w plikach…<br /><br />Proszę czekać, aż phpBB zakończy wszystkie operacje na zmienionych plikach.',

	'NEW_FILE'						=> 'Koniec konfliktu',
	'NEW_USERNAME'					=> 'Nowa nazwa użytkownika',
	'NO_AUTH_UPDATE'				=> 'Nie masz uprawnień do wykonania aktualizacji',
	'NO_ERRORS'						=> 'Brak błędów',
	'NO_UPDATE_FILES'				=> 'Pliki, które nie zostaną zaktualizowane',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Następujące pliki są nowe lub zmodyfikowane, ale w tej instalacji phpBB nie można znaleźć katalogu, w którym normalnie się one znajdują. Jeśli lista zawiera pliki znajdujące się w innych katalogach niż „language/” lub „styles/”, oznacza to, że została zmieniona struktura katalogów i aktualizacja może być niekompletna.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nie znaleziono prawidłowego katalogu aktualizacyjnego. Sprawdź, czy na serwer zostały wysłane właściwe pliki.<br /><br />Ten skrypt <strong>nie</strong> wygląda na aktualny. Dostępne są aktualizacje dla wersji phpBB %1$s. Przejdź na stronę <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a>, aby pobrać właściwy pakiet aktualizujący wersję %2$s do wersji %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Zainstalowana wersja jest aktualna. Nie ma potrzeby uruchamiania narzędzia aktualizującego. Jeśli chcesz sprawdzić integralność swoich plików, sprawdź najpierw, czy na serwer zostały wysłane właściwe pliki aktualizacyjne.',
	'NO_UPDATE_INFO'				=> 'Nie znaleziono informacji o plikach aktualizacyjnych.',
	'NO_UPDATES_REQUIRED'			=> 'Nie ma potrzeby wykonania aktualizacji',
	'NO_VISIBLE_CHANGES'			=> 'Nie ma widocznych zmian',
	'NOTICE'						=> 'Uwaga',
	'NUM_CONFLICTS'					=> 'Liczba konfliktów',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Sprawdzono %1$d z %2$d plików.<br />Proszę czekać do zakończenia operacji.',

	'OLD_UPDATE_FILES'		=> 'Pliki aktualizacyjne są nieaktualne. Pliki te służą do aktualizacji phpBB %1$s do wersji %2$s, a najnowsza wersja phpBB to %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'To jest pakiet aktualizacji do wersji',
	'PERFORM_DATABASE_UPDATE'			=> 'Wykonaj aktualizację bazy danych',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Poniżej znajduje się przycisk do uruchomienia skryptu aktualizującego bazę danych. Aktualizacja bazy danych może potrwać dłuższą chwilę. Proszę nie zatrzymywać działania skryptu, gdy wydaje się, że nic się nie dzieje. Aby kontynuować proces aktualizacji po zakończeniu aktualizacji bazy danych, należy postępować zgodnie z dalszymi instrukcjami.',
	'PREVIOUS_VERSION'					=> 'Poprzednia wersja',
	'PROGRESS'							=> 'Postęp',

	'RELEASE_ANNOUNCEMENT'		=> 'Informacje o wydaniu',
	'RESULT'					=> 'Rezultat',
	'RUN_DATABASE_SCRIPT'		=> 'Zaktualizuj bazę danych',

	'SELECT_DIFF_MODE'			=> 'Wybierz tryb porównania',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Wybierz format archiwum do pobrania',
	'SELECT_FTP_SETTINGS'		=> 'Wybierz ustawienia FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Wyświetl różnice/konflikty',
	'SHOW_DIFF_DELETED'			=> 'Wyświetl zawartość pliku',
	'SHOW_DIFF_FINAL'			=> 'Wyświetl plik wynikowy',
	'SHOW_DIFF_MODIFIED'		=> 'Wyświetl połączone różnice',
	'SHOW_DIFF_NEW'				=> 'Wyświetl zawartość pliku',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Wyświetl różnice',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Wyświetl różnice',
	'SOME_QUERIES_FAILED'		=> 'Część zapytań SQL nie została wykonana. Informacje i błędy znajdują się poniżej.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'To prawdopodobnie jest nic, czym należy się martwić. Aktualizacja będzie kontynuowana. Jeśli nie uda się dokończyć aktualizacji, można poszukać pomocy na naszych forach internetowych. W artykule <a href="../docs/README.html">Informacje podstawowe</a> znajdują się informacje o tym, jak znaleźć pomoc.',
	'STAGE_FILE_CHECK'			=> 'Sprawdzanie plików',
	'STAGE_UPDATE_DB'			=> 'Aktualizacja bazy danych',
	'STAGE_UPDATE_FILES'		=> 'Aktualizacja plików',
	'STAGE_VERSION_CHECK'		=> 'Sprawdzanie wersji',
	'STATUS_CONFLICT'			=> 'Zmodyfikowany plik powodujący konflikty',
	'STATUS_DELETED'			=> 'Usunięty plik',
	'STATUS_MODIFIED'			=> 'Zmodyfikowany plik',
	'STATUS_NEW'				=> 'Nowy plik',
	'STATUS_NEW_CONFLICT'		=> 'Nowy plik powodujący konflikty',
	'STATUS_NOT_MODIFIED'		=> 'Niezmodyfikowany plik',
	'STATUS_UP_TO_DATE'			=> 'Już zaktualizowany plik',

	'TOGGLE_DISPLAY'			=> 'Wyświetl/Ukryj listę plików',
	'TRY_DOWNLOAD_METHOD'		=> 'Być może zechcesz spróbować metody pobierania zmodyfikowanych plików.<br />Ta metoda zawsze działa i jest także polecanym sposobem aktualizacji.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Wypróbuj tę metodę',

	'UPDATE_COMPLETED'				=> 'Aktualizacja zakończona',
	'UPDATE_DATABASE'				=> 'Aktualizuj bazę danych',
	'UPDATE_DATABASE_EXPLAIN'		=> 'W następnym kroku zostanie zaktualizowana baza danych.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Aktualizowanie schematu bazy danych',
	'UPDATE_FILES'					=> 'Aktualizuj pliki',
	'UPDATE_FILES_NOTICE'			=> 'Sprawdź czy zostały zaktualizowane również pliki witryny. Ten plik aktualizuje tylko bazę danych.',
	'UPDATE_INSTALLATION'			=> 'Aktualizuj skrypt phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Za pomocą tej funkcji można wykonać aktualizację skryptu phpBB do najnowszej wersji.<br />W czasie procesu aktualizacji wszystkie stare pliki zostaną porównane z plikami nowej wersji. Przed aktualizacją będzie można przejrzeć wszystkie pliki i różnice.<br /><br />Aktualizacja plików może być wykonana na dwa różne sposoby:</p><h2>Aktualizacja ręczna</h2><p>Stosując tę metodę aktualizacji, należy pobrać zestaw zmienionych plików, sprawdzić je, aby nie stracić wcześniej ręcznie wprowadzonych modyfikacji – w razie potrzeby uzupełnić o te modyfikacje nowe pliki i wgrać je na serwer we właściwe dla nich miejsca w skrypcie witryny. Po wykonaniu tej operacji należy sprawdzić, czy pliki te znajdują się we właściwych miejscach w skrypcie.</p><h2>Automatyczna aktualizacja za pomocą FTP</h2><p>Ta metoda jest podobna do pierwszej, ale zamiast pobierać pliki z serwera aktualizacji i wgrywać je do katalogu głównego skryptu witryny, wystarczy podać kilka danych dotyczących używanego serwera FTP. Po zakończeniu wgrywania plików przez serwer FTP nastąpi przekierowanie do sprawdzenia plików, by upewnić się, czy wszystko zostało prawidłowo wykonane.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Informacje o wydaniu</h1>

		<p>Przed wykonaniem aktualizacji, przeczytaj komunikat o najnowszej wersji. Może on zawierać istotne informacje. Komunikat ten zawiera odnośniki do pobrania aktualizacji oraz opis zmian.</p>

		<br />

		<h1>Jak zaktualizować zainstalowaną wersję za pomocą pakietu automatycznej aktualizacji</h1>

		<p>Zalecanym sposobem aktualizacji skryptu jest użycie pakietu automatycznej aktualizacji. Można także dokonać aktualizacji skryptu za pomocą metod opisanych w dokumencie INSTALL.html. Aby wykonać automatyczną aktualizację phpBB3, należy wykonać następujące kroki:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Przejdź do <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">strony pobierania</a> i pobierz archiwum zawierające pakiet automatycznej aktualizacji.<br /><br /></li>
			<li>Rozpakuj archiwum<br /><br /></li>
			<li>Wgraj rozpakowane katalogi „install” i „vendor” do głównego katalogu phpBB na serwerze – to katalog, w którym znajduje się plik „config.php”.<br /><br /></li>
		</ul>

		<p>Po wgraniu powyższych katalogów na serwer witryna będzie niedostępna dla zwykłych użytkowników z powodu obecności w katalogu głównym phpBB katalogu „install”.<br /><br />
		<strong><a href="%1$s" title="%1$s">Uruchom proces aktualizacji, klikając ten odnośnik</a>.</strong><br /><br />
		Proces aktualizacji możesz również uruchomić, wprowadzając w pasku adresu swojej przeglądarki ścieżkę do katalogu „install”, np. http://www.nazwa_witryny.com/phpBB3/install/.<br /><br />
		Postępuj według wskazówek kreatora aktualizacji. Po zakończeniu procesu aktualizacji zostanie wyświetlone stosowne powiadomienie.
		</p>
	',
	'UPDATE_METHOD'					=> 'Metoda aktualizacji',
	'UPDATE_METHOD_EXPLAIN'			=> 'Teraz można wybrać preferowaną metodę aktualizacji. Wybranie metody wysłania plików za pomocą FTP spowoduje wyświetlenie formularza, do którego należy wprowadzić informacje o koncie FTP. Ta metoda spowoduje automatyczne przeniesienie plików do nowej lokalizacji i utworzenie kopii zapasowych starych plików poprzez dodanie do ich nazwy rozszerzenia .bak. Jeśli zostanie wybrana metoda pobrania plików aktualizacyjnych, trzeba będzie je rozpakować i samodzielnie wgrać na serwer.',
	'UPDATE_REQUIRES_FILE'			=> 'Aktualizator wymaga obecności następującego pliku: %s',
	'UPDATE_SUCCESS'				=> 'Aktualizacja została zakończona',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Zaktualizowano wszystkie pliki. W następnym kroku zostanie wykonane ponowne porównanie wszystkich plików w celu sprawdzenia czy pliki zostały zaktualizowane prawidłowo.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Aktualizowanie wersji i optymalizacja tabel',
	'UPDATING_DATA'					=> 'Aktualizowanie danych',
	'UPDATING_TO_LATEST_STABLE'		=> 'Aktualizowanie bazy danych do najnowszej stabilnej wersji',
	'UPDATED_VERSION'				=> 'Wersja została zaktualizowana do',
	'UPLOAD_METHOD'					=> 'Metoda wgrywania',

	'UPDATE_DB_SUCCESS'				=> 'Baza danych została zaktualizowana.',
	'UPDATE_FILE_SUCCESS'			=> 'Plik został zaktualizowany.',
	'USER_ACTIVE'					=> 'Aktywny użytkownik',
	'USER_INACTIVE'					=> 'Nieaktywny użytkownik',

	'VERSION_CHECK'					=> 'Sprawdzanie wersji skryptu',
	'VERSION_CHECK_EXPLAIN'			=> 'Sprawdzanie aktualności obecnie zainstalowanej wersji skryptu phpBB.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Ta wersja skryptu phpBB jest nieaktualna. Kontynuuj proces aktualizacji.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Ta wersja skryptu phpBB jest nieaktualna.<br />Poniżej znajduje się odnośnik do komunikatu o wydaniu najnowszej wersji oraz instrukcje, jak dokonać aktualizacji.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Ta instalacja jest nieaktualna.',
	'VERSION_UP_TO_DATE'			=> 'To jest najnowsza wersja skryptu phpBB. Nie ma aktualizacji dla tej wersji, mimo to można kontynuować proces, aby sprawdzić poprawność plików.',
	'VERSION_UP_TO_DATE_ACP'		=> 'To jest najnowsza wersja skryptu phpBB. Nie trzeba jej aktualizować.',
	'VIEWING_FILE_CONTENTS'			=> 'Wyświetlanie zawartości pliku',
	'VIEWING_FILE_DIFF'				=> 'Wyświetlanie zmian w pliku',

	'WRONG_INFO_FILE_FORMAT'	=> 'Niewłaściwy format pliku z informacjami',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Zespół administracyjny',
	'CONFIG_SITE_DESC'				=> 'Krótki opis witryny',
	'CONFIG_SITENAME'				=> 'twoja_domena.pl',

	'DEFAULT_INSTALL_POST'			=> 'To jest przykładowy post na tej witrynie phpBB3. Wygląda na to, że wszystko działa prawidłowo. Możesz, jeśli chcesz, usunąć ten post i przystąpić do konfiguracji witryny. Podczas procesu instalacji pierwsze forum otrzymało odpowiedni zestaw uprawnień dla predefiniowanych grup użytkowników – administratorów, botów, globalnych moderatorów, gości, zarejestrowanych użytkowników i zarejestrowanych użytkowników COPPA. Jeśli zamierzasz usunąć pierwsze forum i subforum, nie zapomnij przydzielić uprawnień wszystkim wcześniej wymienionym grupom użytkowników w tworzonych przez ciebie nowych forach i subforach. Zaleca się zmienić nazwę pierwszego forum i subforum i skopiować ich uprawnienia dla nowo tworzonych forów i subforów. Życzymy przyjemnej zabawy z twoją nową witryną phpBB3!',

	'FORUMS_FIRST_CATEGORY'			=> 'Pierwsze forum typu „Kategoria”',
	'FORUMS_TEST_FORUM_DESC'		=> 'To jest twoje pierwsze forum typu „Forum”',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Pierwsze forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Post zawiera odnośniki do nielegalnego oprogramowania.',
	'REPORT_SPAM'					=> 'Post zawiera reklamy strony internetowej lub innych produktów.',
	'REPORT_OFF_TOPIC'				=> 'Treść posta nie dotyczy tematu dyskusji.',
	'REPORT_OTHER'					=> 'Powód zgłoszenia nie pasuje do żadnej kategorii. Podaj w polu opisu więcej informacji.',

	'SMILIES_ARROW'					=> 'Strzałka',
	'SMILIES_CONFUSED'				=> 'Zakłopotanie',
	'SMILIES_COOL'					=> 'Wyluzowanie',
	'SMILIES_CRYING'				=> 'Płacz',
	'SMILIES_EMARRASSED'			=> 'Zakłopotanie',
	'SMILIES_EVIL'					=> 'Złość',
	'SMILIES_EXCLAMATION'			=> 'Okrzyk',
	'SMILIES_GEEK'					=> 'Maniak',
	'SMILIES_IDEA'					=> 'Pomysł',
	'SMILIES_LAUGHING'				=> 'Śmiech',
	'SMILIES_MAD'					=> 'Wściekłość',
	'SMILIES_MR_GREEN'				=> 'Mr.Green',
	'SMILIES_NEUTRAL'				=> 'Neutralny',
	'SMILIES_QUESTION'				=> 'Wątpliwość',
	'SMILIES_RAZZ'					=> 'Żartowanie z kogoś',
	'SMILIES_ROLLING_EYES'			=> 'Sfrustrowanie',
	'SMILIES_SAD'					=> 'Smutek',
	'SMILIES_SHOCKED'				=> 'Szok',
	'SMILIES_SMILE'					=> 'Szczęście, dobry humor',
	'SMILIES_SURPRISED'				=> 'Zaskoczenie',
	'SMILIES_TWISTED_EVIL'			=> 'Szalony',
	'SMILIES_UBER_GEEK'				=> 'Super maniak',
	'SMILIES_VERY_HAPPY'			=> 'Duże szczęście, bardzo dobry humor',
	'SMILIES_WINK'					=> 'Sarkazm',

	'TOPICS_TOPIC_TITLE'			=> 'Witamy w phpBB3!',
));
