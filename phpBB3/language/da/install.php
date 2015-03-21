<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: install.php 476 2015-01-02 08:13:25Z jan_skovsgaard $
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
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
	'ADMIN_CONFIG'				=> 'Konfiguration af administrator',
	'ADMIN_PASSWORD'			=> 'Kodeord for administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekræft kodeord for administrator',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Indtast venligst et kodeord på mellem 6 og 30 tegn.',
	'ADMIN_TEST'				=> 'Kontrollerer indstillinger for administrator',
	'ADMIN_USERNAME'			=> 'Brugernavn for administrator',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Indtast venligst et brugernavn på mellem 3 og 20 tegn.',
	'APP_MAGICK'				=> 'Understøttelse for Imagemagick [ Vedhæftede filer ]',
	'AUTHOR_NOTES'				=> 'Forfatternoter<br />» %s',
	'AVAILABLE'					=> 'Tilgængelig',
	'AVAILABLE_CONVERTORS'		=> 'Tilgængelige konvertere',

	'BEGIN_CONVERT'				=> 'Begynd konvertering',
	'BLANK_PREFIX_FOUND'		=> 'En skanning af dine tabeller udviser en gyldig installation uden anvendelse af tabelpræfiks.',
	'BOARD_NOT_INSTALLED'		=> 'Ingen installation fundet',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'For at fungere kræver phpBB\'s Unified Converter Framework en standardinstallation af phpBB3, fortsæt derfor med at <a href="%s">udføre en installation</a>.',
	'BACKUP_NOTICE'          => 'Skulle der opstå problemer i forbindelse med opdateringen, anbefales det at der tages en backup af boardet inden denne igangsættes.',

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Cachetype',
	'CACHE_STORE_EXPLAIN'		=> 'Den fysiske placering, hvor data mellemlagres, filsystem er at foretrække.',
	'CAT_CONVERT'				=> 'Konvertering',
	'CAT_INSTALL'				=> 'Installation',
	'CAT_OVERVIEW'				=> 'Oversigt',
	'CAT_UPDATE'				=> 'Opdatering',
	'CHANGE'					=> 'Vælg',
	'CHECK_TABLE_PREFIX'		=> 'Kontroller venligst dit tabelpræfiks og prøv igen.',
	'CLEAN_VERIFY'				=> 'Rydder op og verificerer den endelige struktur',
	'CLEANING_USERNAMES'		=> 'Oprydning i brugernavne',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> er det unikke brugernavn for:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Overlappende brugernavne blev fundet på dit oprindelige board. For at færdiggøre konverteringen skal disse brugere enten slettes eller omdøbes, der må kun eksistere en bruger for hvert unikt brugernavn på dit oprindelige board.',
	'COLLIDING_USER'			=> '» Bruger-ID: <strong>%d</strong> brugernavn: <strong>%s</strong> (%d indlæg)',
	'CONFIG_CONVERT'			=> 'Konverterer konfigurationen',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Det var ikke muligt at skrive til konfigurationsfilen. Alternative metoder for dannelsen af denne fil vises nedenfor.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurationsfilen er blevet skrevet. Du kan nu fortsætte til næste trin af installationen.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3\'s konfigurationsvariabel for "%s" er tom.',
	'CONFIG_RETRY'				=> 'Prøv igen',
	'CONTINUE_CONVERT'			=> 'Fortsæt konvertering',
	'CONTINUE_CONVERT_BODY'		=> 'Et tidligere konverteringsforsøg er blevet afbrudt. Du kan nu vælge at genstarte dette eller starte en ny konvertering.',
	'CONTINUE_LAST'				=> 'Fortsæt',
	'CONTINUE_OLD_CONVERSION'	=> 'Genstart tidligere påbegyndt konvertering',
	'CONVERT'					=> 'Konverter',
	'CONVERT_COMPLETE'			=> 'Konvertering fuldført',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nu konverteret dit board til phpBB 3.1. Du kan nu logge ind og <a href="../">tilgå dit board</a>. Kontroller venligst at alle indstillinger blev konverteret korrekt, inden du gør dit board tilgængeligt ved at slette install mappen. Husk at hjælp til brugen af phpBB 3.1 er tilgængelig online via <a href="https://www.phpbb.com/supportdocs/en/3.1/ug/">dokumentationen</a> og <a href="https://www.phpbb.com/community/viewforum.php?f=466">support foraene</a>.',
	'CONVERT_INTRO'				=> 'Velkommen til phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Herfra er du i stand til at importere data fra andre (installerede) boardsystemer. Listen nedenfor viser alle for nuværende tilgængelige konverteringsmoduler. Hvis der ikke er vist en konverter i denne liste for den boardsoftware du ønsker at konvertere fra, kontroller da venligst phpBB.com\'s hjemmeside, hvor yderligere konverteringsmoduler kan være tilgængelige for download.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONVERT_NOT_EXIST'			=> 'Den angivne konverter eksisterer ikke.',
	'CONVERT_OPTIONS'			=> 'Vælg konverter',
	'CONVERT_SETTINGS_VERIFIED'	=> 'De indtastede oplysninger er blevet verificeret. Tryk venligst på knappen nedenfor for at starte konverteringen.',
	'CONV_ERR_FATAL'			=> 'Alvorlig konverteringsfejl',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upload for vedhæftede filer er slået til på det oprindelige board. Slå muligheden for FTP-upload fra og sørg for at en gyldig uploadmappe er angivet, kopier herefter venligst alle vedhæftede filer til denne nye mappe, der skal kunne tilgås fra serveren. Når du har du gjort dette, genstartes konverteren.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Der er ingen konfigurationsinformation tilgængelig for konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ude af stand til at skaffe adgangsinformation.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ude af stand til at skaffe kategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kunne ikke finde din boardkonfiguration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Ude af stand til at tilgå/læse "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ude af stand til at skaffe information om tilladelser for grupper.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsistens i gruppetabel opdaget i add_bots() - du er nødt til at tilføje alle specielle grupper hvis du gør det manuelt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Ude af stand til at indsætte bot i tabellen user.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Ude af stand til at indsætte bot i tabellen bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Ude af stand til at indsætte bruger i tabellen user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Messageparserfejl',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Note til udvikler: du skal angive $convertor[\'avatar_path\'] for at bruge %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relative sti til kildeboardet er ikke blevet angivet.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Note til udvikler: du skal angive $convertor[\'avatar_gallery_path\'] for at bruge %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppe "%1$s" fandtes ikke i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Note til udvikler: du skal angive $convertor[\'ranks_path\'] for at bruge %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Note til udvikler: du skal angive $convertor[\'smilies_path\'] for at bruge %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Note til udvikler: du skal angive $convertor[\'upload_path\'] for at bruge %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ude af stand til at indsætte/opdatere tilladelsesindstilling.',
	'CONV_ERROR_PM_COUNT'				=> 'Ude af stand til at vælge antal PB mapper.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ude af stand til at indsætte nyt forum til erstatning for tidligere kategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ude af stand til at indsætte nyt forum til erstatning for tidligere forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ude af stand til at skaffe information om tilladelser for brugere.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Forkert gruppe "%1$s" defineret i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denne side indsamler de nødvendige data for at kunne tilgå boardet der skal konverteres (kildeboardet). Angiv databaseindstillingerne for dette board; konverteren ændrer intet i kildeboardets database. Kildeboardet bør slås fra eller tages offline under konverteringen for at sikre en konsistent konvertering.',
	'CONV_SAVED_MESSAGES'				=> 'Gemte beskeder',

	'COULD_NOT_COPY'			=> 'Kunne ikke kopiere fil <strong>%1$s</strong> til <strong>%2$s</strong><br /><br />Kontroller venligst at modtagemappen eksisterer og at der kan skrives til den fra serveren.',
	'COULD_NOT_FIND_PATH'		=> 'Kunne ikke finde stien til kildeboardet. Kontroller venligst dine indstillinger og prøv igen.<br />» %s var angivet som kildesti.',

	'DBMS'						=> 'Databasetype',
	'DB_CONFIG'					=> 'Databasekonfiguration',
	'DB_CONNECTION'				=> 'Databaseforbindelse',
	'DB_ERR_INSERT'				=> 'Fejl under behandling af <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Fejl under behandling af <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fejl under behandling af <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fejl under behandling af <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Fejl under kørsel af <code>SELECT</code>-forespørgsel.',
	'DB_HOST'					=> 'Værtsnavn for databaseserver eller DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN står for Data Source Name og er kun relevant for ODBC-installationer. Ved PostgreSQL anvendes localhost til at forbinde til lokal server via UNIX domain socket og 127.0.0.1 til at forbinde via TCP. Ved SQLite angives den komplette sti til databasefilen.',
	'DB_NAME'					=> 'Databasenavn',
	'DB_PASSWORD'				=> 'Kodeord for databasebruger',
	'DB_PORT'					=> 'Port for databaseserver',
	'DB_PORT_EXPLAIN'			=> 'Udfyldes kun hvis serveren ikke kommunikerer på standardporten.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Scriptet kan beklageligvis ikke opdatere phpBB-databaser ældre end version "%1$s". Din databaseversion er "%2$s". Prøv venligst at bruge et script som er i stand til at opdatere til en tidligere version af phpBB først. Der er mere hjælp at hente i supportforrummet på phpBB.com.',
	'DB_USERNAME'				=> 'Navn på databasebruger',
	'DB_TEST'					=> 'Tester forbindelse',
	'DEFAULT_LANG'				=> 'Standardsprog for board',
	'DEFAULT_PREFIX_IS'			=> 'Konverteren kunne ikke finde tabeller med det angivne præfiks. Kontroller venligst at du angivet de korrekte data for boardet du ønsker at konvertere. Standardtabelpræfiks for %1$s er <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Ingen værdi er blevet angivet for test_file-variablen i konverteren. Hvis du er bruger af denne konverter, burde du ikke se denne fejl, rapporter venligst denne fejl til konverterforfatteren. Hvis du er en konverterforfatter, skal du angive navnet på en fil som eksisterer i kildeboardet for at muliggøre verifikation af stien til det.',
	'DIRECTORIES_AND_FILES'		=> 'Opsætning for filer og mapper',
	'DISABLE_KEYS'				=> 'Slår nøgler fra',
	'DLL_FTP'					=> 'Understøttelse for Remote FTP [ Installation ]',
	'DLL_GD'					=> 'Understøttelse for GD-grafik [ Visuel bekræftelse ]',
	'DLL_MBSTRING'				=> 'Understøttelse for Multi-byte character',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]', 
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL med MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'Understøttelse for XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Understøttelse for zlib-kompression [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download config',
	'DL_CONFIG_EXPLAIN'			=> 'Du kan downloade den komplette config.php til din egen PC. Du vil så være nødt til at uploade filen manuelt, hvorved den eksisterende config.php i din phpBB 3.1-rodmappe overskrives. Husk venligst at uploade filen i ASCII-format (se dokumentationen til din FTP-applikation hvis du er i tvivl om hvordan du opnår dette). Når du har uploadet config.php, tryk da venligst på "Udført" for at gå videre til den næste side.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Udført',

	'ENABLE_KEYS'				=> 'Aktiverer nøgler igen. Dette kan tage et stykke tid.',

	'FILES_OPTIONAL'			=> 'Valgfrie filer og mapper',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Valgfri</strong> - Disse filer, mapper og tilladelseindstillinger er ikke krævede. Installationssystemet vil forsøge at bruge forskellige teknikker for at oprette disse, hvis de ikke eksisterer eller ikke kan skrives til. Imidlertid vil tilstedeværelsen af disse medføre en hurtigere installation.',
	'FILES_REQUIRED'			=> 'Filer og mapper',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Krævede</strong> - For at fungere korrekt skal phpBB have adgang til og kunne skrive til visse filer eller mapper. Hvis du ser "Ikke fundet", må du oprette den relevante fil eller mappe. Og ser du "Ikke skrivbar", skal tilladelser for filen eller mappen ændres for at give phpBB skriveadgang.',
	'FILLING_TABLE'				=> 'Udfylder tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Udfylder tabeller',

	'FINAL_STEP'				=> 'Udfør afsluttende trin',
	'FORUM_ADDRESS'				=> 'Boardadresse',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dette er URL\'en til dit tidligere board, f.eks. <samp>http://www.example.com/phpBB2/</samp>. Hvis der indtastes en adresse her og den ikke efterlades tom, bliver alle referencer til denne oprindelige URL erstattet med den nye board-URL i alle indlæg, private beskeder og signaturer.',
	'FORUM_PATH'				=> 'Sti til board',
	'FORUM_PATH_EXPLAIN'		=> 'Den <strong>relative</strong> sti på disken til dit tidligere board fra <strong>roden af din phpBB 3.0-installation</strong>.',
	'FOUND'						=> 'Fundet',
	'FTP_CONFIG'				=> 'Overfør konfiguration med FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB har opdaget tilstedeværelsen af FTP-modulet på denne server. Du kan forsøge at installere din config.php via dette, hvis du ønsker det. Du skal angive informationen anført nedenfor, i denne sammenhæng drejer det sig om brugernavn og kodeord til din FTP-server! Spørg din vært hvis du er i tvivl.',
	'FTP_PATH'					=> 'FTP sti',
	'FTP_PATH_EXPLAIN'			=> 'Dette er stien fra din rodmappe til phpBB, f.eks. htdocs/phpBB3/.',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Basiskonfiguration',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nu hvor installationen har fastslået at din server kan køre phpBB, skal du indtaste nogle specifikke oplysninger. Hvis du ikke ved hvordan du forbinder til din database bedes du kontakte din vært (i første omgang) eller bruge supportforaene for phpBB. Kontroller venligst indtastede data grundigt før du fortsætter.',
	'INSTALL_CONGRATS'			=> 'Tillykke!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
	Du har nu installeret phpBB %1$s. Forsæt venligst ved at vælge et af følgende punkter:</p>
	<h2>Konverter et eksisterende board til phpBB3</h2>
	<p>phpBB\'s Unified Convertor Framework understøtter konvertering fra phpBB2.0.x og andre boardsystemer til phpBB3. Ønsker du at konvertere et eksisterende board, <a href="%2$s">fortsæt til konverteren</a>.</p>
	<h2>Kom online med dit board baseret på phpBB3!</h2>
	<p>Klik på knappen nedenfor som leder dig til administratorkontrolpanelets (ACP) statistiske data. Vi vil sætte stor pris på hvis du vil dele disse data med os. Efterfølgende bør du give dig tid til at gennemgå de indstillinger du har til rådighed i ACP. Husk at der er hjælp at hente online via den engelske <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">dokumentation</a>, i <a href="%3$s">README</a> og i <a href="https://www.phpbb.com/community/viewforum.php?f=466">supportforaene</a>.</p><p><strong>Slet, flyt eller omdøb venligst nu install-mappen før du bruger dit board. Hvis denne mappe stadig er til stede, vil kun administratorkontrolpanelet (ACP) være tilgængeligt.</strong>',
	'INSTALL_INTRO'				=> 'Velkommen til installationen',

	'INSTALL_INTRO_BODY'		=> 'Med denne funktion er det muligt at installere phpBB3 på din server.</p><p>For at fortsætte skal du have dine databaseindstillinger klarlagt. Hvis du ikke kender dine databaseindstillinger, kontakt da venligst din vært. Uden disse kan du ikke fortsætte installationen. Du skal bruge følgende informationer:</p>
	
	<ul>
	<li>Databasetype - databasen du vil bruge.</li>
	<li>Databaseserverens værtsnavn eller DSN - adressen på serveren.</li>
	<li>Databaseserverens port - den port hvorpå phpBB3 skal kommunikere med serveren (denne er som regel helt unødvendig).</li>
	<li>Databasenavnet - databasens navn på ovennævnte server.</li>
	<li>Brugernavnet og kodeordet til databasen - loginoplysninger for at få adgang til databasen.</li>
	</ul>

	<p><strong>Bemærk:</strong> Hvis du anvender SQLite til din installation skal du angive den fulde sti til din databasefil i DSN-feltet og efterlade felterne for brugernavn og kodeord tomme. Af hensyn til sikkerheden bør du sikre dig, at man ikke kan få direkte adgang til databasefilen fra Internettet.</p>
	
	<p>phpBB3 understøtter følgende databasetyper:</p>
	<ul>
		<li>MySQL 3.23 eller nyere (MySQLi er understøttet)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eller nyere (direkte eller via ODBC)</li>
		<li>MS SQL Server 2005 eller nyere (native)</li>
		<li>Oracle</li>
	</ul>
	
	<p>I næste skærmbillede vises kun de databasetyper der understøttes af din server.',
	'INSTALL_INTRO_NEXT'		=> 'For at gå videre med installationen, tryk venligst på knappen herunder.',
	'INSTALL_LOGIN'				=> 'Log ind',
	'INSTALL_NEXT'				=> 'Næste trin',
	'INSTALL_NEXT_FAIL'			=> 'Nogle tests slog fejl og du bør rette disse problemer før du fortsætter til næste trin. Hvis dette slår fejl, kan det forårsage en delvis, ufærdig installation.',
	'INSTALL_NEXT_PASS'			=> 'Alle de grundlæggende tests er gennemført og du kan fortsætte til næste trin af installationen. Hvis du har ændret nogle tilladelser, moduler etc. og ønsker at teste igen, kan du også gøre det.',
	'INSTALL_PANEL'				=> 'Installationspanel',
	'INSTALL_SEND_CONFIG'		=> 'Uheldigvis kunne phpBB ikke skrive konfigurationsinformationerne direkte til din config.php. Det kan enten være fordi filen ikke eksisterer eller at den ikke er skrivbar. Et antal muligheder vil blive anført nedenfor som giver dig mulighed for at fuldføre installation af config.php.',
	'INSTALL_START'				=> 'Begynd installation',
	'INSTALL_TEST'				=> 'Test igen',
	'INST_ERR'					=> 'Installationsfejl',
	'INST_ERR_DB_CONNECT'		=> 'Kunne ikke forbinde til databasen, se fejlmeddelelsen herunder.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Den angivne databasefil findes i dine boardmapper. Du bør anbringe denne fil et sted hvor den ikke kan tilgås fra nettet.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Det angivne præfiks er ugyldigt. Præfikset skal begynde med et bogstav, og må ellers kun indeholde bogstaver, tal og underscores.',
	'INST_ERR_DB_NO_ERROR'		=> 'Ingen fejlmeddelelse.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versionen af MySQL installeret på denne server er ikke kompatibel med den valgte indstilling "MySQL med MySQLi-udvidelse". Prøv venligst indstillingen "MySQL" i stedet for.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Den installerede version af SQLite udvidelsen er for gammel, den skal opdateres til mindst 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Den installerede version af SQLite udvidelsen er for gammel, den skal opdateres til mindst 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Den installerede version af Oracle på denne server kræver at du sætter parameteren <var>NLS_CHARACTERSET</var> til <var>UTF8</var>. Opdater venligst enten din installation til 9.2+ eller korriger indstillingen af parameteren.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Den valgte database blev ikke oprettet i <var>UNICODE</var>- eller <var>UTF8</var>-encoding. Prøv at installere med en database i <var>UNICODE</var>- eller <var>UTF8</var>-encoding.',
	'INST_ERR_DB_NO_NAME'		=> 'Intet databasenavn angivet.',
	'INST_ERR_EMAIL_INVALID'	=> 'Den indtastede emailadresse er ugyldig.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'De angivne emailadresser matcher ikke.',
	'INST_ERR_FATAL'			=> 'Fatal installationsfejl',
	'INST_ERR_FATAL_DB'			=> 'En fatal og uoprettelig databasefejl er opstået. Dette kan være fordi den angivne bruger ikke har de nødvendige tilladelser til at <code>CREATE TABLES</code> eller <code>INSERT</code> data, etc. Der kan være yderligere oplysninger herunder. Kontakt i første omgang din vært eller spørg på phpBBs supportfora for yderligere assistance.',
	'INST_ERR_FTP_PATH'			=> 'Kunne ikke skifte til den angivne mappe, kontroller venligst at stien er korrekt.',
	'INST_ERR_FTP_LOGIN'		=> 'Kunne ikke logge ind på FTP-server, kontroller at du har angivet korrekt brugernavn og kodeord.',
	'INST_ERR_MISSING_DATA'		=> 'Du skal udfylde alle felter i denne blok.',
	'INST_ERR_NO_DB'			=> 'Kan ikke indlæse PHP-modulet til den valgte databasetype.',
	'INST_ERR_PASSWORD_MISMATCH' => 'De indtastede kodeord matchede ikke.',
	'INST_ERR_PASSWORD_TOO_LONG' => 'Det indtastede kodeord er for langt. Den maksimale længde er 30 tegn.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Det indtastede kodeord er for kort. Den minimale længde er 6 tegn.',
	'INST_ERR_PREFIX'			=> 'Tabeller med det angivne præfiks findes allerede, indtast venligst et alternativ.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabelpræfikset du har angivet er ugyldigt for din database. Prøv venligst et andet, hvor du fjerner tegn som bindestregen.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Tabelpræfikset du har angivet er for langt. Den maksimale længde er %d tegn.',
	'INST_ERR_USER_TOO_LONG'	=> 'Brugernavnet du indtastede er for langt. Den maksimale længde er 20 tegn.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Brugernavnet du indtastede er for kort. Den minimale længde er 3 tegn.',
	'INVALID_PRIMARY_KEY'		=> 'Ugyldig primær nøgle : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Bemærk at udførelsen af scriptet kan tage noget tid...Afbryd det venligst ikke.',

	// mbstring
	'MBSTRING_CHECK'			=> 'Kontrol af <samp>mbstring</samp>-udvidelse',
	'MBSTRING_CHECK_EXPLAIN'	=> '<strong>Krævet</strong> - <samp>mbstring</samp> er en PHP-udvidelse som giver multibytestringfunktioner. Nogle af funktionerne i mbstring er ikke kompatible med phpBB og skal slås fra.',
	'MBSTRING_FUNC_OVERLOAD' => 'Funktionoverbelastning',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN' => '<var>mbstring.func_overload</var> skal sættes til enten 0 eller 4.',
	'MBSTRING_ENCODING_TRANSLATION' => 'Transparent indkodning af tegn',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => '<var>mbstring.encoding_translation</var> skal sættes til 0.',
	'MBSTRING_HTTP_INPUT' => 'Tegnkonvertering af HTTP-input',
	'MBSTRING_HTTP_INPUT_EXPLAIN' => '<var>mbstring.http_input</var> skal sættes til <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT' => 'Tegnkonvertering af HTTP-output',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN' => '<var>mbstring.http_output</var> skal sættes til <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Vær venlig at sikre dig at denne mappe findes og at serveren kan skrive til den, og prøv så igen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Vær venlig at sikre dig at disse mapper findes og at serveren kan skrive til dem, og prøv derefter igen:<br />»<strong>%s</strong>.',
	
	'MYSQL_SCHEMA_UPDATE_REQUIRED' => 'Dit MySQL databaseskema til phpBB er ikke opdateret. phpBB har konstateret et skema til MySQL 3.x/4.x, og serveren har installeret MySQL %2$s.<br /><strong>Før opdateringen fortsættes, skal skemaet opgraderes.</strong><br /><br />Se venligst <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base</a>-artiklen om hvordan opdateringen udføres. Støder du på problemer, kan du finde og få hjælp i vore <a href="https://www.phpbb.com/community/viewforum.php?f=466">supportfora</a>.',

	'NAMING_CONFLICT'			=> 'Navnekonflikt: %s og %s er begge aliaser<br /><br />%s',
	'NEXT_STEP'					=> 'Fortsæt til næste trin',
	'NOT_FOUND'					=> 'Kan ikke finde',
	'NOT_UNDERSTAND'			=> 'Kunne ikke forstå %s #%d, tabel %s ("%s")',
	'NO_CONVERTORS'				=> 'Der er ingen konvertere til rådighed.',
	'NO_CONVERT_SPECIFIED'		=> 'Ingen konverter angivet.',
	'NO_LOCATION'				=> 'Kan ikke fastslå placering. Hvis du ved at Imagemagick er installeret kan du angive placeringen senere i administratorkontrolpanelet',
	'NO_TABLES_FOUND'			=> 'Ingen tabeller fundet.',

	'OVERVIEW_BODY'					=> 'Velkommen til phpBB3!<br /><br />phpBB® er den mest anvendte bulletin board-løsning baseret på Open Source i verden. phpBB3 er den seneste version i rækken af frigivelser startet i 2000. Som forgængerne er phpBB3 fyldt med features, brugervenlig og med fuld support fra phpBB Team. Det der gjorde phpBB2 så populær er yderligere forbedret i phpBB3, og tilfører desuden ofte ønskede muligheder, som ikke er tilstede i tidligere versioner. Vi håber phpBB3 overgår dine forventninger.<br /><br />Installationsystemet leder dig gennem den grundlæggende installation af phpBB3, opdatering til seneste version af phpBB3 fra tidligere frigivelser, og tillige konvertering fra andre boardsystemer til phpBB3 (phpBB2 inkluderet). Ønsker du mere information, anbefaler vi dig at læse <a href="../docs/INSTALL.html">installationsvejledningen</a>.<br /><br />I sidemenuen kan du vælge at læse phpBB3-licensen og finde ud af hvordan du kan få support og vor holdning til at yde support. Vælg venligst det rette faneblad foroven for at forsætte.',
	
	'PCRE_UTF_SUPPORT'				=> 'Understøttelse af PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB vil <strong>ikke</strong> køre hvis din PHP-installation ikke er kompileret med understøttelse af UTF-8 i PCRE-udvidelsen.',
	'PHP_GETIMAGESIZE_SUPPORT'		=> 'PHP\'s facilitet getimagesize() er tilgængelig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Krævet</strong> - For at få phpBB til at virke optimalt er faciliteten getimagesize nødvendig.',
	'PHP_JSON_SUPPORT'        		=> 'Understøttelse af PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'    	=> '<strong>Krævet</strong> - For at få phpBB til at virke optimalt er faciliteten PHP JSON nødvendig.',
	'PHP_OPTIONAL_MODULE'			=> 'Valgfrie moduler',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Valgfrit</strong> - Disse moduler eller applikationer er valgfrie. Men hvis du har dem tilgængelige, giver de ekstra funktionaliteter.',
	'PHP_SUPPORTED_DB'				=> 'Understøttede databaser',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Krævet</strong> - Du skal have understøttelse for mindst en kompatibel database i PHP. Hvis der ikke er vist nogen moduler som værende tilgængelige, bør du kontakte din vært eller gennemgå dokumentationen for din PHP-installation for yderligere hjælp.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP-indstillingen <var>register_globals</var> er slået fra',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB vil stadig kunne køre med denne indstilling slået til, men det anbefales at register_globals slås fra på din PHP-installation af sikkerhedsmæssige årsager.',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'PHP-version og indstillinger',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Krævet</strong> - Du skal køre med minimum version 5.3.3 af PHP for at kunne installere phpBB. Hvis <var>safe mode</var> vises herunder, kører din PHP-installation i denne tilstand. Dette vil give begrænsninger i mulighederne for fjernadministration og lignende funktioner.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP-indstillingen <var>allow_url_fopen</var> er slået til',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN' => '<strong>Ekstra</strong> - Denne indstilling er en ekstra mulighed, vær opmærksom på at bestemte phpBB-funktioner ikke virker uden denne. Off-site (remote) avatars er en af disse.',
	'PHP_VERSION_REQD'				=> 'PHP-version >= 5.3.3',
	'POST_ID'						=> 'Indlægs-ID',
	'PREFIX_FOUND'					=> 'Et skan af dine tabeller viser en gyldig installation der bruger <strong>%s</strong> som tabelpræfiks.',
	'PREPROCESS_STEP'				=> 'Udfører forbehandlingsfunktioner og -forespørgsler',
	'PRE_CONVERT_COMPLETE'			=> 'Alle indledende tests og undersøgelsesrutiner er korrekt gennemført. Du kan nu begynde den egentlige konverteringsproces. Bemærk venligst at du kan være nødsaget til efterfølgende at justere flere parametre. Kontroller især tildelte tilladelser, og om filer, avatars og smilies blev kopieret korrekt. Dit nykonverterede board indeholder intet søgeindeks, det kan du danne i administratorkontrolpanelet.',
	'PROCESS_LAST'					=> 'Behandler sidste forespørgsler',
	
	'REFRESH_PAGE'				=> 'Opdater siden for at forsætte konvertering',
	'REFRESH_PAGE_EXPLAIN'		=> 'Hvis sat til ja, vil konverteren opdatere siden for at forsætte konverteringen efter afslutning af hver fase. Hvis dette er din første konvertering med det formål at teste for eventuelle fejl på forhånd, anbefales det at sætte denne til "Nej".',
	'REQUIREMENTS_TITLE'		=> 'Installationskompatibilitet',
	'REQUIREMENTS_EXPLAIN'		=> 'Før der fortsættes med den fulde installation vil phpBB udføre nogle tests af din serverkonfiguration og filer for at sikre at du er i stand til at installere og køre phpBB. Sørg venligst for at gennemlæse resultaterne grundigt og fortsæt ikke før alle krævede tests er gennemført. Hvis du ønsker at anvende nogle af funktionaliteterne, der angives i de valgfri tests, bør du sikre dig, at disse tests er gennemført med succes.',
	'RETRY_WRITE'				=> 'Forsøger igen at skrive til config',
	'RETRY_WRITE_EXPLAIN'		=> 'Hvis du har mulighed for det kan du prøve at ændre tilladelserne for config.php for at tillade phpBB at skrive til filen. Har du denne mulighed, kan du klikke "Prøv igen" nedenfor, for at prøve igen. Husk at ændre tilladelserne tilbage igen for config.php efter at phpBB har afsluttet installationen.',

	'SCRIPT_PATH'				=> 'Sti til script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Stien hvor phpBB er placeret relativt til domænenavnet, f.eks. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Vælg sprog',
	'SERVER_CONFIG'				=> 'Serverkonfiguration',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Søgeindekset blev ikke konverteret',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Dit oprindelige søgeindeks blev ikke konverteret. Udføres der i øjeblikket en søgning, vil den ikke give nogle træffere. For at oprette et nyt søgeindeks skal du i administratorkontrolpanelet vælge "Vedligehold" og "Søgeindeks" i undermenuen.',
	'SELECT_FORUM_GA'      => 'I phpBB 3.1 er globale bekendtgørelser knyttet til et forum. Vælg et forum til dine nuværende globale bekendtgørelser (kan ændres senere):',
	'SOFTWARE'					=> 'Boardsoftware',
	'SPECIFY_OPTIONS'			=> 'Verificerer konverteringsindstillinger',
	'STAGE_ADMINISTRATOR'		=> 'Administratoroplysninger',
	'STAGE_ADVANCED'			=> 'Avancerede indstillinger',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Indstillingerne på denne side er foruddefineret efter phpBB3\'s standardindstilling, som bl.a. er baseret på den aktuelle anvendelse af protokol- og domæneindstillinger. Er du i tvivl om nødvendigheden af at ændre disse, kan alle indstillingerne justeres i administratorkontrolpanelet efter installationen er gennemført.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurationsfil',
	'STAGE_CREATE_TABLE'		=> 'Opret databasetabeller',
	'STAGE_CREATE_TABLE_EXPLAIN' => 'Databasen er nu oprettet og udfyldt med indledende data. Fortsæt til næste trin for at afslutte installationen af phpBB.',
	'STAGE_DATABASE'			=> 'Databaseindstillinger',
	'STAGE_FINAL'				=> 'Afsluttende trin',
	'STAGE_INTRO'				=> 'Introduktion',
	'STAGE_IN_PROGRESS'			=> 'Konvertering i gang',
	'STAGE_REQUIREMENTS'		=> 'Krav',
	'STAGE_SETTINGS'			=> 'Indstillinger',
	'STARTING_CONVERT'			=> 'Starter konverteringsproces',
	'STEP_PERCENT_COMPLETED'	=> 'Trin <strong>%d</strong> af <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introduktion',
	'SUB_LICENSE'				=> 'Licens',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'		=> 'Korrekt forbundet',
	'SUPPORT_BODY'				=> 'Der ydes fuld gratis support til denne stabile frigivelse af phpBB3. Supporten inkluderer:</p><ul><li>installation</li><li>konfiguration</li><li>tekniske spørgsmål</li><li>problemer relateret til potentielle fejl i softwaren</li><li>opdatering fra release candidate-versioner (RC) til den senest stabile version</li><li>konvertering fra phpBB 2.0.x til phpBB3</li><li>konvertering fra andre boardsystemer til phpBB3 (se venligst <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Vi opfordrer brugere, der stadig anvender Beta-versioner af phpBB3, til at erstatte installationen med en frisk kopi af den seneste version.</p><h2>Udvidelser og typografier</h2><p>Spørgsmål angående udvidelser bedes stillet i <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Spørgsmål angående typografier, skabeloner og temaer bedes stillet i <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Angår dit spørgsmål en bestemt pakke, bedes du indsende det direkte i emnet omhandlende denne pakke.</p><h2>Få support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB velkomstpakken</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Engelsk Quick Start Guide</a><br /><br />Hvis du <a href="https://www.phpbb.com/support/">tilmelder dig vores mailingliste</a> sikrer du, at du bliver holdt opdateret med de seneste nyheder og frigivelser.<br /><br />',
	'SYNC_FORUMS'				=> 'Synkroniserer fora',
	'SYNC_POST_COUNT'			=> 'Synkroniserer antal indlæg',
	'SYNC_POST_COUNT_ID'		=> 'Synkroniserer indlæg fra <var>entry</var> %1$s til %2$s.',
	'SYNC_TOPICS'				=> 'Synkronisering af emner',
	'SYNC_TOPIC_ID'				=> 'Synkroniserer emner fra <var>emne_id</var> %1$s til %2$s.',

	'TABLES_MISSING'			=> 'Kunne ikke finde disse tabeller<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Præfiks for tabeller i database',
	'TABLE_PREFIX_EXPLAIN'    => 'Præfikset skal starte med et bogstav, og må ellers kun indeholde bogstaver, tal og underscores.',
	'TABLE_PREFIX_SAME'			=> 'Tabelpræfikset skal være det som bruges af softwaren du konverterer fra.<br />»  Angivet tabelpræfiks var %s.',
	'TESTS_PASSED'				=> 'Tests gennemført',
	'TESTS_FAILED'				=> 'Tests fejlede',

	'UNABLE_WRITE_LOCK'			=> 'Ude af stand til at skrive til låst fil.',
	'UNAVAILABLE'				=> 'Ikke tilgængelig',
	'UNWRITABLE'				=> 'Ikke skrivbar',
	'UPDATE_TOPICS_POSTED'		=> 'Opdaterer informationer om indsendte emner',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Der opstod en fejl under forsøget på at opdatere informationer om indsendte emner. Du kan forsøge denne opdatering igen i ACP, når konverteringsprocessen er afsluttet.',
	'VERIFY_OPTIONS'			=> 'Kontrollerer konverteringsmuligheder',
	'VERSION'					=> 'Version',

	'WELCOME_INSTALL'			=> 'Velkommen til phpBB3 installation',
	'WRITABLE'					=> 'Skrivbar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alle filer er opdaterede til den seneste version af phpBB.',
	'ARCHIVE_FILE'				=> 'Kildefil i arkiv',

	'BACK'		=> 'Tilbage',
	'BINARY_FILE'		=> 'Binær fil',
	'BOT'		=> 'Spider/bot',

	'CHANGE_CLEAN_NAMES'	=> 'Metoden til at sikre at et brugernavn ikke anvendes af flere brugere er ændret. Denne nye kontrol viser at nogle brugere anvender samme brugernavn. For at sikre at der kun findes en bruger pr. brugernavn, skal du slette eller omdøbe disse konfliktende brugernavne før du kan forsætte.',
	'CHECK_FILES'					=> 'Kontroller filer',
	'CHECK_FILES_AGAIN'				=> 'Kontroller filer igen',
	'CHECK_FILES_EXPLAIN'			=> 'I det næste trin vil alle filer blive kontrolleret op imod opdateringsfilerne - dette kan tage noget tid hvis dette er den første filkontrol.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Ifølge din database er din version opdateret. Du kan fortsætte med filkontrollen for at sikre at alle filer allerede er opdaterede til den seneste phpBB-version.',
	'CHECK_UPDATE_DATABASE'			=> 'Fortsæt opdateringsprocessen',
	'COLLECTED_INFORMATION'			=> 'Filinformation',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Listen nedenfor viser information om de filer, der behøver en opdatering. Læs venligst informationen foran hver statusblok for at se hvad den betyder og hvad du bør gøre for udføre en succesfuld opdatering.',
	'COLLECTING_FILE_DIFFS'			=> 'Indsamler filforskelle',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Du bør nu <a href="../ucp.php?mode=login">logge ind til dit board</a> og kontrollere om alt virker som det skal. Husk at slette, omdøbe eller flytte din install-mappe!',
	'CONTINUE_UPDATE_NOW'			=> 'Fortsæt opdateringsprocessen nu',	// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Fortsæt opdateringen',	// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Starten af konflikt - original kode før opdatering',
	'CURRENT_VERSION'				=> 'Nuværende version',

	'DATABASE_TYPE'						=> 'Databasetype',
	'DATABASE_UPDATE_COMPLETE'      => 'Databaseopdatering er gennemført!',
	'DATABASE_UPDATE_CONTINUE'      => 'Fortsæt databaseopdatering',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Databaseopdateringsfilen i install-mappen er ikke opdateret. Kontroller venligst at du uploadede den korrekte version af filen.',
	'DATABASE_UPDATE_NOT_COMPLETED'    => 'Databaseopdatering er endnu ikke fuldført.',
	'DELETE_USER_REMOVE'		=> 'Slet bruger og fjern indlæg',
	'DELETE_USER_RETAIN'		=> 'Slet bruger, men bevar indlæg',
	'DESTINATION'				=> 'Destinationsfil',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kodeblok anvendt i opdateret/ny fil',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Opdater ikke denne fil',
	'DONE'								=> 'Udført',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download som',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Download arkiv med ændrede filer (anbefales)',
	'DOWNLOAD_CONFLICTS'				=> 'Download konflikter for denne fil',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Søg efter &lt;&lt;&lt; for at finde konflikter',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download arkiv med ændrede filer',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Når du har downloadet og udpakket filen indeholdende alle de ændrede filer, uploades disse til deres rette placering i din phpBB-installation. Filerne bør herefter kontrolleres endnu gang med venstre knap nedenfor.',

	'EDIT_USERNAME'	=> 'Ændre brugernavn',
	'ERROR'		=> 'Fejl',
	'EVERYTHING_UP_TO_DATE'    => 'Alt er opdateret til den seneste version af phpBB. Du bør nu <a href="%1$s">logge ind på dit board</a> og kontrollere at alt fungerer efter hensigten. Husk at slette, omdøbe eller flytte install-mappen! Send os venligst de opdaterede statistiske data om din server- og boardkonfiguration via <a href="%2$s">statistikmodulet</a> i ACP.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fil er allerede opdateret.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Fil tillades ikke diffet.',
	'FILE_USED'						=> 'Information brugt fra',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktende filer',
	'FILES_CONFLICT_EXPLAIN'		=> 'Følgende filer er modificeret i forhold til det originale indhold af den version du opdaterer fra. phpBB mener at disse filer vil skabe konflikter hvis de forsøges sammenlagt. Undersøg venligst konflikterne og prøv manuelt at løse dem eller fortsæt opdateringen ved at vælge den foretrukne sammenlægningsmetode. Hvis du løser konflikterne manuelt, kontroller filerne igen efter du har ændret dem. Du kan også vælge den foretrukne sammenlægningsmetode for hver fil. Den første vil resultere i en fil, hvor linier med konflikter mistes, den anden vil resultere i at ændringerne fra den nye fil mistes.',
	'FILES_DELETED'					=> 'Slettede filer',
	'FILES_DELETED_EXPLAIN'			=> 'Følgende filer findes ikke i den nye version. Disse filer skal derfor slettes i din installation.',
	'FILES_MODIFIED'				=> 'Modificerede filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Følgende filer er modificeret i forhold til det originale indhold af den version du opdaterer fra. Den opdaterede fil vil bestå af en sammenlægning af disse modifikationer og indholdet af den nye fil.',
	'FILES_NEW'						=> 'Nye filer',
	'FILES_NEW_EXPLAIN'				=> 'Følgende filer eksisterer for nuværende ikke i din installation. Disse tilføjes automatisk din installation under opdateringen.',
	'FILES_NEW_CONFLICT'			=> 'Nye konfliktende filer',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Følgende filer er nye i den nyeste version, men det er blevet fastslået, at der er allerede en fil med det samme navn med den samme placering. Denne fil vil blive overskrevet af den nye fil.',
	'FILES_NOT_MODIFIED'			=> 'Ikke modificerede filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Følgende filer er uændrede i forhold til de originale filer indeholdt i den version af phpBB du ønsker at opdatere fra. Disse filer opdateres automatisk til nyeste version under opdateringen. Hvis du vil se de ændringer, der foretages i filerne under opdateringen, kan disse ses i "Vis forskelle".',
	'FILES_UP_TO_DATE'				=> 'Allerede opdaterede filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Følgende filer er allerede opdaterede og behøver ikke at blive opdateret.',
	'FTP_SETTINGS'					=> 'FTP-indstillinger',
	'FTP_UPDATE_METHOD'				=> 'FTP-upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'De fundne opdateringsfiler er ikke kompatible med din installerede version. Din installerede version er %1$s og opdateringsfilerne er for opdatering af phpBB %2$s til %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Opdateringsfilerne er ufuldstændige',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Databaseopdateringen lykkedes. Nu skal du fortsætte opdateringsprocessen.',

	'KEEP_OLD_NAME'         => 'Behold brugernavn',

	'LATEST_VERSION'		=> 'Seneste version',
	'LINE'					=> 'Linie',
	'LINE_ADDED'			=> 'Tilføjet',
	'LINE_MODIFIED'			=> 'Ændret',
	'LINE_REMOVED'			=> 'Fjernet',
	'LINE_UNMODIFIED'		=> 'Uændret',
	'LOGIN_UPDATE_EXPLAIN'	=> 'For at opdatere din installation er du nødt til at logge ind først.',

	'MAPPING_FILE_STRUCTURE'	=> 'For at lette uploadet er her filplaceringerne som passer til din phpBB-installation.',
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'Sammenlæg modifikationer',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Sammenlæg ikke - brug ny fil',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Sammenlæg ikke - brug filen uændret fra den version du opdaterer fra',
	'MERGE_MOD_FILE_OPTION'		=> 'Sammenlæg forskelle - ny phpBB kode udelades i konfliktende kodeblokke',
	'MERGE_NEW_FILE_OPTION'		=> 'Sammenlæg forskelle - modificeret kode udelades i konfliktende blokke',
	'MERGE_SELECT_ERROR'		=> 'Konfliktende fils sammenlægningsmetode er ikke korrekt valgt.',
	'MERGING_FILES'				=> 'Sammenlægger forskelle',
	'MERGING_FILES_EXPLAIN'		=> 'Indsamler i øjeblikket de endelige filændringer.<br /><br />Vent venligst til phpBB har fuldført alle operationerne på ændrede filer.',

	'NEW_FILE'						=> 'Konflikt slut',
	'NEW_USERNAME'					=> 'Nyt brugernavn',
	'NO_AUTH_UPDATE'				=> 'Ikke autoriseret til at opdatere',
	'NO_ERRORS'						=> 'Ingen fejl',
	'NO_UPDATE_FILES'				=> 'Opdaterer ikke følgende filer',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'De følgende filer er nye eller modificerede, men mappen de normalt hører hjemme i, kunne ikke findes på din installation. Hvis denne liste indeholder filer til andre mapper end language/ eller styles/, har du sandsynligvis ændret mappestruktur og opdateringen kan være ufuldstændig.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Der blev ikke fundet en gyldig opdateringsmappe, undersøg venligst om du har uploadet de relevante filer.<br /><br />Din installation synes <strong>ikke</strong> at være opdateret. Opdateringer er tilgængelige for din version af phpBB %1$s, besøg venligst <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> for at finde den korrekte pakke for opdatering fra version %2$s til version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Din version er opdateret. Der er ikke behov for at køre opdateringsværktøjet. Hvis du ønsker at foretage en integritetskontrol af dine filer, skal du sørge for at uploade de korrekte opdateringsfiler.',
	'NO_UPDATE_INFO'				=> 'Information om opdateringsfil kunne ikke findes.',
	'NO_UPDATES_REQUIRED'			=> 'Ingen opdateringer krævet',
	'NO_VISIBLE_CHANGES'			=> 'Ingen synlige ændringer',
	'NOTICE'						=> 'Bemærkning',
	'NUM_CONFLICTS'					=> 'Antal konflikter',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Der er nu kontrolleret efter forskelle i %1$d ud af %2$d filer.<br />Vent venligst til alle filer er kontrolleret.',

	'OLD_UPDATE_FILES'		=> 'Opdateringsfilerne er ikke opdaterede, de kan anvendes til at opdatere fra phpBB %1$s til phpBB %2$s. Den seneste version af phpBB er %3$s.',

	'PACKAGE_UPDATES_TO'	=> 'Denne pakke opdaterer til version',
	'PERFORM_DATABASE_UPDATE'			=> 'Udfør databaseopdatering',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Nedenfor finder du knappen til databaseopdateringsscriptet. Databaseopdateringen kan tage nogen tid, afbryd venligst ikke udførelsen, selv om den kun ser ud til at hænge. Når opdateringen er udført, skal du blot følge instruktionerne for at forsætte opdateringsprocessen.',
	'PREVIOUS_VERSION'					=> 'Foregående version',
	'PROGRESS'							=> 'Fremskridt',

	'RELEASE_ANNOUNCEMENT'		=> 'Bekendtgørelse',
	'RESULT'					=> 'Resultat',
	'RUN_DATABASE_SCRIPT'		=> 'Opdater min database nu',

	'SELECT_DIFF_MODE'			=> 'Vælg forskelsvisning',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vælg pakkeformat for fil',
	'SELECT_FTP_SETTINGS'		=> 'Vælg FTP-indstillinger',
	'SHOW_DIFF_CONFLICT'		=> 'Vis forskelle/konflikter',
	'SHOW_DIFF_DELETED'			=> 'Vis filindhold',
	'SHOW_DIFF_FINAL'			=> 'Vis den endelige fil',
	'SHOW_DIFF_MODIFIED'		=> 'Vis sammenlagte forskelle',
	'SHOW_DIFF_NEW'				=> 'Vis filindhold',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Vis forskelle',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Vis forskelle',
	'SOME_QUERIES_FAILED'		=> 'Nogle forespørgsler fejlede. Fejl og forespørgsler er anført herunder.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Fortsætter opdateringen er der sandsynligvis ingen grund til bekymring. Fuldføres opdateringen ikke, kan du søge hjælp på vores supportfora. Læs flere informationer herom i <a href="../docs/README.html">README</a>.',
	'STAGE_FILE_CHECK'			=> 'Filkontrol',
	'STAGE_UPDATE_DB'			=> 'Databaseopdatering',
	'STAGE_UPDATE_FILES'		=> 'Filopdatering',
	'STAGE_VERSION_CHECK'		=> 'Versionskontrol',
	'STATUS_CONFLICT'			=> 'Modificerede filer, der skaber konflikter',
	'STATUS_DELETED'			=> 'Fil slettet',
	'STATUS_MODIFIED'			=> 'Modificeret fil',
	'STATUS_NEW'				=> 'Ny fil',
	'STATUS_NEW_CONFLICT'		=> 'Konfliktende ny fil',
	'STATUS_NOT_MODIFIED'		=> 'Ikke modificeret fil',
	'STATUS_UP_TO_DATE'			=> 'Allerede opdateret fil',
	
	'TOGGLE_DISPLAY'			=> 'Vis eller skjul fillisten',
	'TRY_DOWNLOAD_METHOD'		=> 'Du bør afprøve metoden hvor ændrede filer downloades.<br />Metoden virker altid og er samtidig den anbefalede opdateringsvej.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=>	'Afprøv metoden nu',

	'UPDATE_COMPLETED'				=> 'Opdatering fuldført',
	'UPDATE_DATABASE'				=> 'Opdater database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Databasen vil blive opdateret i det efterfølgende trin.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Opdaterer databaseskema',
	'UPDATE_FILES'					=> 'Opdater filer',
	'UPDATE_FILES_NOTICE'			=> 'Det netop udførte script, database_update, opdaterer alene din database. Sørg derfor for at dine boardfiler også er opdateret til denne version.',
	'UPDATE_INSTALLATION'			=> 'Opdater phpBB-installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Du har nu mulighed for at opdatere din phpBB-installation til den seneste version.<br />Alle dine filer bliver i processen kontrolleret for deres integritet. Du får forud for opdateringen af filerne mulighed for selv at kontrollere filforskelle i de filer opdateringsprocessen måtte foretage ændringer i.<br /><br />Selve filopdateringen kan foretages på to forskellige måder.</p><h2>Manuel opdatering</h2><p>Med denne metode downloader du dit personlige sæt af de ændrede filer for at sikre du ikke mister de filmodifikationer, du måtte have foretaget. Efter at du har downloadet denne pakke er det nødvendigt at du manuelt uploader filerne til deres korrekte placering under din phpBB-rodmappe. Når dette er gjort, er du i stand til at at gennemføre trinet for filkontrol igen for at se om du flyttede filerne til deres korrekte placering.</p><h2>Automatisk opdatering med FTP</h2><p>Denne metode ligner den første, men er uden behov for at du selv downloader de ændrede filer og uploader dem. Dette vil blive gjort for dig. For at anvende denne metode bliver du undervejs bedt om kontoinformation for FTP. Efter afslutning vil du blive viderestillet til filkontrollen igen for at sikre at alt blev opdateret korrekt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Frigivelsesbekendtgørelse</h1>

		<p>Læs venligst frigivelsesbekendtgørelsen for den seneste version før du fortsætter din opdateringsprocedure, den kan indeholde værdifuld information. Den indeholder såvel fulde downloadlinks som ændringsloggen.</p>

		<br />

		<h1>Sådan opdaterer du din installation med den automatiske opdateringspakke (Automatic Update Package)</h1>

		<p>Den her beskrevne metode for opdatering af din installation, gælder kun for opdatering med den automatiske opdateringspakke. Der findes to andre opdateringsmetoder, de er beskrevet i INSTALL.html. For at udføre en automatisk opdatering, skal disse trin udføres:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå til <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com siden</a> og download "Automatic Update Package" pakken, i det pakkeformat du foretrækker.<br /><br /></li>
			<li>Udpak pakken<br /><br /></li>
			<li>Upload de fuldstændige, og ikke komprimerede mapper "install" og "vendor" til din phpBB-rodmappe (hvor din config.php-fil er).<br /><br /></li>
		</ul>

		<p>Når upload har fundet sted, vil dit board være offline for normale brugere, fordi install-mappen nu er tilstede.<br /><br />
		<strong><a href="%1$s" title="%1$s">Begynd nu opdateringsproceduren ved at pege din browser på install-mappen</a>.</strong><br />
		<br />
		Du bliver ledt gennem hele opdateringsproceduren, og bliver informeret når denne er fuldført.
		</p>
	',
	'UPDATE_METHOD'					=> 'Opdateringsmetode',
	'UPDATE_METHOD_EXPLAIN'			=> 'Du er nu i stand til at vælge din foretrukne opdateringsmetode. Brug af FTP-upload vil præsentere dig for en formular, hvor du skal indtaste din kontoinformation for FTP. Med denne metode vil filerne automatisk blive kopieret til den rette placering på serveren. Dine oprindelige filer kan stadig genfindes på serveren, med samme filnavn og under filtypen .bak. Hvis du vælger at downloade de ændrede filer, er du i stand til at udpakke og uploade dem til deres korrekte placering manuelt senere.',
	'UPDATE_REQUIRES_FILE'			=> 'Opdateringsproceduren kræver at filen %s er tilstede.',
	'UPDATE_SUCCESS'				=> 'Opdatering lykkedes',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Opdaterede alle filer. Det næste trin involverer kontrol af alle filer igen for at sikre, at filerne blev opdateret korrekt.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Opdaterer version og optimerer tabeller',
	'UPDATING_DATA'					=> 'Opdaterer data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Opdaterer database til seneste stabile frigivelse',
	'UPDATED_VERSION'				=> 'Opdateret version',
	'UPLOAD_METHOD'					=> 'Uploadmetode',

	'UPDATE_DB_SUCCESS'				=> 'Databaseopdateringen blev gennemført med succes.',
	'UPDATE_FILE_SUCCESS'      		=> 'Filopdateringen blev gennemført med succes.',
	'USER_ACTIVE'					=> 'Aktiv bruger',
	'USER_INACTIVE'					=> 'Inaktiv bruger',
	
	'VERSION_CHECK'				=> 'Versionskontrol',
	'VERSION_CHECK_EXPLAIN'		=> 'Kontrollerer om din phpBB-installation er opdateret.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Din version af phpBB er ikke opdateret. Fortsæt venligst opdateringsproceduren.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Din version af phpBB er ikke opdateret.<br />Nedenfor finder du et link til frigivelsesbekendtgørelsen for den seneste version, såvel som instruktioner om udførsel af opdateringen.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Din phpBB-installation er ikke opdateret.',
	'VERSION_UP_TO_DATE'		=> 'Din phpBB-installation er fuldt opdateret. Selvom der ingen opdatering er tilgængelig, har du mulighed for at fortsætte og udføre en filgyldighedskontrol.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Din phpBB-installation er fuldt opdateret. Der er ingen tilgængelige opdateringer.',
	'VIEWING_FILE_CONTENTS'		=> 'Filindhold',
	'VIEWING_FILE_DIFF'			=> 'Filsammenligning',

	'WRONG_INFO_FILE_FORMAT'	=> 'Forkert format for info fil',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Tak, ledelsen',
	'CONFIG_SITE_DESC'				=> 'En kort tekst til at beskrive dit board',
	'CONFIG_SITENAME'				=> 'ditdomæne.dk',

	'DEFAULT_INSTALL_POST'			=> 'Dette er et eksempel på et indlæg på dit nye phpBB3-board. Alt ser ud til at fungere! Du kan slette dette indlæg, hvis du har lyst, og fortsætte opsætningen af dit board. Under installationen er din første kategori og dit første forum tildelt et passende sæt tilladelser for de prædefinerede brugergrupper, administratorer, botter, globale redaktører, gæster, tilmeldte brugere og tilmeldte COPPA-brugere. Hvis du vælger også at slette din første kategori og dit første forum, skal du huske at tildele tilladelser for samtlige disse brugergrupper for alle nye kategorier og fora du opretter. Det anbefales derfor at omdøbe din første kategori og dit første forum og kopiere tilladelser fra disse ved oprettelsen af nye kategorier og fora. God fornøjelse!',

	'FORUMS_FIRST_CATEGORY'			=> 'Din første kategori',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beskrivelse af dit første forum',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Dit første forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrator',
	'REPORT_WAREZ'					=> 'Det rapporterede indlæg indeholder link til illegal software.',
	'REPORT_SPAM'					=> 'Det rapporterede indlæg har kun til formål at annoncere for et website eller et produkt.',
	'REPORT_OFF_TOPIC'				=> 'Det rapporterede indlæg er off topic.',
	'REPORT_OTHER'					=> 'Det rapporterede indlæg kan ikke placeres i nogen af de foruddefinerede kategorier. Anvend feltet "Yderligere information".',

	'SMILIES_ARROW'					=> 'Pil',
	'SMILIES_CONFUSED'				=> 'Forvirret',
	'SMILIES_COOL'					=> 'Sejt',
	'SMILIES_CRYING'				=> 'Græder',
	'SMILIES_EMARRASSED'			=> 'Flov',
	'SMILIES_EVIL'					=> 'Vred',
	'SMILIES_EXCLAMATION'			=> 'Udråbstegn',
	'SMILIES_GEEK'					=> 'Nørd',
	'SMILIES_IDEA'					=> 'Ide',
	'SMILIES_LAUGHING'				=> 'Ler',
	'SMILIES_MAD'					=> 'Ond',
	'SMILIES_MR_GREEN'				=> 'Hr. Grøn',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Spørgsmålstegn',
	'SMILIES_RAZZ'					=> 'Ivrig',
	'SMILIES_ROLLING_EYES'			=> 'Rullende øjne',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Chokeret',
	'SMILIES_SMILE'					=> 'Smil',
	'SMILIES_SURPRISED'				=> 'Overrasket',
	'SMILIES_TWISTED_EVIL'			=> 'Meget ond',
	'SMILIES_UBER_GEEK'				=> 'Totalnørd',
	'SMILIES_VERY_HAPPY'			=> 'Meget glad',
	'SMILIES_WINK'					=> 'Blink',

	'TOPICS_TOPIC_TITLE'			=> 'Velkommen til phpBB3',
));
