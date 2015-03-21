<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'ADMIN_CONFIG'				=> 'Administratorkonfigurasjon',
	'ADMIN_PASSWORD'			=> 'Administrators passord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekreft administratorpassord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Angi et passord på mellom 6 og 30 tegn.',
	'ADMIN_TEST'				=> 'Kontroll av administratorinnstillinger',
	'ADMIN_USERNAME'			=> 'Administrators brukernavn',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Angi et brukernavn på mellom 3 og 20 tegn.',
	'APP_MAGICK'				=> 'Støtte for Imagemagick [ Vedlegg ]',
	'AUTHOR_NOTES'				=> 'Forfatterens merknader<br />» %s',
	'AVAILABLE'					=> 'Tilgjengelig',
	'AVAILABLE_CONVERTORS'		=> 'Tilgjengelige konvertere',

	'BEGIN_CONVERT'					=> 'Start konvertering',
	'BLANK_PREFIX_FOUND'			=> 'En skanning av tabellene viser en gyldig installasjon uten tabellprefiks.',
	'BOARD_NOT_INSTALLED'			=> 'Ingen installasjon funnet',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB Unified Convertor Framework krever en standardinstallasjon av phpBB3 for å fungere, <a href="%s">installer phpBB3 først for å forsette</a>.',
	'BACKUP_NOTICE'					=> 'Sikkerhetskopier systemet før du oppdaterer, i tilfelle det oppstår problemer i løpet av oppdateringsprosessen.',

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Buffertype',
	'CACHE_STORE_EXPLAIN'		=> 'Den fysiske plasseringen hvor data bufres, filsystemet foretrekkes.',
	'CAT_CONVERT'				=> 'Konverter',
	'CAT_INSTALL'				=> 'Installer',
	'CAT_OVERVIEW'				=> 'Oversikt',
	'CAT_UPDATE'				=> 'Oppdater',
	'CHANGE'					=> 'Endre',
	'CHECK_TABLE_PREFIX'		=> 'Kontroller tabellprefikset og prøv igjen.',
	'CLEAN_VERIFY'				=> 'Rydder opp og kontrollerer den endelige strukturen',
	'CLEANING_USERNAMES'		=> 'Uniformerer brukernavn',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> er det uniforme brukernavnet til:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Det ble funnet brukernavnkonflikter på det gamle systemet. For at konverteringen skal kunne fullføres, må du slette eller bytte navn på disse brukerne, slik at det bare er én bruker på det gamle systemet for hvert uniformerte brukernavn.',
	'COLLIDING_USER'			=> '» bruker-ID: <strong>%d</strong> brukernavn: <strong>%s</strong> (%d innlegg)',
	'CONFIG_CONVERT'			=> 'Konverterer konfigurasjonen',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Det var ikke mulig å skrive til konfigurasjonsfilen. Du kan se alternative metoder for oppretting av denne filen nedenfor.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurasjonen er skrevet. Du kan nå fortsette til neste trinn i installasjonen.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3-konfigurasjonsvariabelen for «%s» er tom.',
	'CONFIG_RETRY'				=> 'Prøv igjen',
	'CONTINUE_CONVERT'			=> 'Fortsett konvertering',
	'CONTINUE_CONVERT_BODY'		=> 'Et tidligere konverteringsforsøk er funnet. Du kan nå velge om du vil starte en ny konvertering eller fortsette det tidligere forsøket.',
	'CONTINUE_LAST'				=> 'Fortsett med siste setning',
	'CONTINUE_OLD_CONVERSION'	=> 'Fortsett tidligere startet konvertering',
	'CONVERT'					=> 'Konverter',
	'CONVERT_COMPLETE'			=> 'Konvertering fullført',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nå konvertert systemet til phpBB 3.1. Du kan nå logge inn og <a href="../">bruke systemet</a>. Kontroller at innstillingene ble overført korrekt før du aktiverer systemet ved å slette installasjonsmappen. Husk at du finner hjelp til bruken av phpBB online under <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Dokumentasjon</a> og <a href="https://www.phpbb.com/community/viewforum.php?f=466">supportforaene</a>.',
	'CONVERT_INTRO'				=> 'Velkommen til phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Herfra kan du importere data fra andre (installerte) forumsystemer. Listen nedenfor viser alle konverteringsmoduler som er tilgjengelig for øyblikket. Hvis det ikke vises noen konverterer for forumprogramvaren du vil konvertere fra, kan du se på systemet vårt, om flere konverteringsmoduler er blitt tilgjengelig for nedlasting.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONVERT_NOT_EXIST'			=> 'Den angitte konvertereren finnes ikke.',
	'CONVERT_OPTIONS'			=> 'Alternativer',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informasjonen du angav, er bekreftet. Trykk på knappen nedenfor for å starte konverteringsprosessen.',
	'CONV_ERR_FATAL'			=> 'Kritisk konverteringsfeil',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-opplasting for vedlegg er aktivert på det gamle systemet. Deaktiver alternativet for FTP-opplasting og kontroller at det er angitt en gyldig opplastingsmappe. Kopier deretter alle vedleggsfiler til denne nye, webtilgjengelige mappen. Når du er ferdig med dette, starter du konvertereren på nytt.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Ingen konfigurasjonsinformasjon er tilgjengelig for konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kan ikke hente informasjon om forumtilgang.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kan ikke hente kategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kan ikke hente systemets konfigurasjon.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Kan ikke nå/lese «%s».',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kan ikke hente informasjon om gruppeautentisering.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsekvenser i gruppetabellen ble oppdaget i add_bots() - du må legge til alle spesialgrupper hvis du gjør det manuelt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan ikke sette inn bot i brukertabellen.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan ikke sette inn bot i bottabellen.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan ikke sette inn bruker i bruker/gruppe-tabellen.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Feil i meldingsparser',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Merknad til utvikler: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relative banen til kildesystemet er ikke angitt.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Merknad til utvikler: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Finner ikke gruppen «%1$s» i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Merknad til utvikler: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Merknad til utvikler: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Merknad til utvikler: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kan ikke sette inn/oppdatere tillatelsesinnstilling.',
	'CONV_ERROR_PM_COUNT'				=> 'Kan ikke velge PM-antall i mappe.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kan ikke sette inn nytt forum som erstatter gammel kategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kan ikke sette inn nytt forum som erstatter gammelt forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kan ikke hente informasjon om brukerautentisering.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Feil gruppe «%1$s» definert i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denne siden samler inn data som kreves for å få tilgang til kildesystemet. Skriv inn databasedetaljene for det tidligere systemet – konverteren vil ikke endre noe i databasen som angis nedenfor. Kildesystemet bør være deaktivert for å sikre at konverteringen blir konsekvent.',
	'CONV_SAVED_MESSAGES'				=> 'Lagrede meldinger',

	'COULD_NOT_COPY'			=> 'Kan ikke kopiere filen <strong>%1$s</strong> til <strong>%2$s</strong><br /><br />Kontroller at målmappen finnes og at webserveren kan skrive til den.',
	'COULD_NOT_FIND_PATH'		=> 'Finner ikke banen til det tidligere systemet. Kontroller innstillingene og prøv igjen.<br />» %s ble angitt som kildebane.',

	'DBMS'						=> 'Databasetype',
	'DB_CONFIG'					=> 'Databasekonfigurasjon',
	'DB_CONNECTION'				=> 'Databasetilkobling',
	'DB_ERR_INSERT'				=> 'Feil ved behandling av <code>INSERT</code>-spørring.',
	'DB_ERR_LAST'				=> 'Feil ved behandling av <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Feil ved behandling av <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Feil ved kjøring av <var>query_first</var>, %s («%s»).',
	'DB_ERR_SELECT'				=> 'Feil ved kjøring av <code>SELECT</code>-spørring.',
	'DB_HOST'					=> 'Vertsnavn eller DSN for databaseserver',
	'DB_HOST_EXPLAIN'			=> 'DSN står for «Data Source Name» (Datakildenavn) og er bare relevant for ODBC-installasjoner. På PostgreSQL bruker du localhost til å koble til den lokale serveren via UNIX-domenesocket og 127.0.0.1 til å koble til via TCP. For SQLite skriver du inn hele banen til databasefilen.',
	'DB_NAME'					=> 'Databasenavn',
	'DB_PASSWORD'				=> 'Databasepassord',
	'DB_PORT'					=> 'Databaseserverport',
	'DB_PORT_EXPLAIN'			=> 'La dette stå tomt hvis du ikke vet at serveren bruker en ikke-standardport.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Vi beklager, men dette skriptet støtter ikke oppdatering fra phpBB-versjoner før «%1$s». Versjonen du har installert, er «%2$s». Oppdater til en annen versjon før du kjører dette skriptet. Du finner hjelp rundt dette på supportforumet på phpBB.com.',
	'DB_USERNAME'				=> 'Databasebrukernavn',
	'DB_TEST'					=> 'Testtilkobling',
	'DEFAULT_LANG'				=> 'Standardspråk for systemet',
	'DEFAULT_PREFIX_IS'			=> 'Konvertereren finnes ikke tabeller med det angitte prefikset. Kontroller at du har angitt korrekte detaljer for systemet du konverterer fra. Standard tabellprefiks for %1$s er <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Det er ikke angitt noen verdi for variabelen test_file i konvertereren. Hvis du er en bruker av denne konvertereren, skal du ikke se denne feilen, og vi ber om at du informerer konvertererens opphavsmann om denne meldingen. Hvis du er konvertererens opphavsmann, må du angi navnet på en fil som finnes på kildesystemet, slik at det er mulig å bekrefte banen til den.',
	'DIRECTORIES_AND_FILES'		=> 'Oppsett av mapper og filer',
	'DISABLE_KEYS'				=> 'Deaktiverer nøkler',
	'DLL_FTP'					=> 'Ekstern FTP-støtte [ Installasjon ]',
	'DLL_GD'					=> 'GD-grafikkstøtte [ Visuell bekreftelse ]',
	'DLL_MBSTRING'				=> 'Støtte for multibyte-tegn',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Innebygd ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL med MySQLi-utvidelse',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'XML-støtte [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib-komprimeringsstøtte [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Last ned konfigurasjon',
	'DL_CONFIG_EXPLAIN'			=> 'Du kan laste ned hele config.php til din egen PC. Deretter må du laste opp filen manuelt, og la den erstatte eksisterende config.php i rotmappen til phpBB 3.1.  Husk å laste opp filen i ASCII-format (se dokumentasjonen til FTP-programmet ditt hvis du er usikker på hvordan du gjør dette). Når du har lastet opp config.php, klikker du «Ferdig» for å gå til neste trinn.',
	'DL_DOWNLOAD'				=> 'Last ned',
	'DONE'						=> 'Ferdig',

	'ENABLE_KEYS'				=> 'Reaktiverer nøkler. Dette kan ta en stund.',

	'FILES_OPTIONAL'			=> 'Valgfrie filer og mapper',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Valgfri</strong> – Disse filene, mappene og tillatelsesinnstillingene er ikke obligatoriske. Installasjonssystemet vil prøve ulike teknikker for å opprette dem hvis de ikke finnes eller kan skrives til. Installasjonen vil imidlertid gå raskere hvis de finnes.',
	'FILES_REQUIRED'			=> 'Filer og mapper',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obligatorisk</strong> – For at phpBB skal fungere på riktig måte, må systemet ha tilgang til å lese eller skrive til visse filer eller mapper. Hvis du ser «Ikke funnet» må du opprette den aktuelle filen eller mappen. Hvis du ser «Ikke skrivbar» må du endre tillatelsene for filen eller mappen, slik at phpBB kan skrive til den.',
	'FILLING_TABLE'				=> 'Fyller tabellen <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Fyller tabeller',

	'FINAL_STEP'				=> 'Behandle siste trinn',
	'FORUM_ADDRESS'				=> 'Systemadresse',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dette er URL-en til det tidligere systemet, for eksempel <samp>http://www.example.com/phpBB2/</samp>. Hvis det skrives inn en adresse her i stedet for å la det stå tomt, vil alle forekomster av denne adressen i meldinger, private meldinger og signaturer bli erstattet på det nye systemet.',
	'FORUM_PATH'				=> 'Systembane',
	'FORUM_PATH_EXPLAIN'		=> 'Dette er den <strong>relative</strong> banen på filsystemet til det tidligere systemet, fra <strong>roten av denne phpBB3-installasjonen</strong>.',
	'FOUND'						=> 'Funnet',
	'FTP_CONFIG'				=> 'Overfør konfigurasjon med FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB har oppdaget en FTP-modul på denne serveren. Du kan prøve å installere config.php via denne hvis du vil. Du må angi informasjonen nedenfor. Husk at brukernavn og passord gjelder for serveren din! Spør tjenesteleverandøren om detaljer hvis du er usikker på dette.',
	'FTP_PATH'					=> 'FTP-bane',
	'FTP_PATH_EXPLAIN'			=> 'Dette er banen fra rotmappen til phpBB, f.eks. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Last opp',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Grunnkonfigurasjon',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nå som installasjonsprogrammet har fastslått at serveren kan kjøre phpBB, må du angi noen spesifikke opplysninger. Hvis du ikke vet hvordan du kobler til databasen, kontekter du tjenesteleverandøren (i første omgang) eller bruker phpBB-supportforaene. Når du skriver inn data, bør du kontrollere det nøye før du fortsetter.',
	'INSTALL_CONGRATS'			=> 'Gratulerer!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Du har installert phpBB %1$s. Fortsett ved å velge ett av følgende alternativer:</p>
		<h2>Konvertere et eksisterende system til phpBB3</h2>
		<p>phpBB Unified Convertor Framework støtter konvertering av phpBB 2.0.x og andre forumsystemer til phpBB3. Hvis du har et eksisterende system du vil konvertere, kan du <a href="%2$s">fortsette til konvertereren</a>.</p>
		<h2>Gjøre phpBB3 tilgjengelig!</h2>
		<p>Hvis du klikker på knappen nedenfor, tas du til et skjema for innsending av statistikkdata til phPBB i administrasjonskontrollpanelet (ACP). Vi vil sette pris på om du kan hjelpe oss ved å sende den informasjonen. Etterpå bør du bruke litt tid på å undersøke hvilke alternativer du har tilgjengelig. Husk at du finner hjelp online under <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Dokumentasjon</a>, <a href="%3$s">LESMEG</a> og <a href="https://www.phpbb.com/community/viewforum.php?f=466">support-foraene</a>.</p><p><strong>Slett, flytte eller gi nytt navn til installasjonsmappen før du tar i bruk systemet. Så lenge denne mappen finnes, vil bare administrasjonskontrollpanelet (ACP) være tilgjengelig.</strong>',
	'INSTALL_INTRO'				=> 'Velkommen til installasjonsprogrammet',

	'INSTALL_INTRO_BODY'		=> 'Med dette alternativet er det mulig å installere phpBB3 på en server.</p><p>For å kunne fortsette, trenger du databaseinnstillinger. Hvis du ikke kjenner databaseinnstillingene, kontakter du tjenesteleverandøren og ber om dem. Du vil ikke kunne fortsette uten dette. Du trenger:</p>

	<ul>
		<li>Databasetype – databasen du kommer til å bruke.</li>
		<li>Vertsnavn eller DSN til databaseserveren – adressen til databaseserveren.</li>
		<li>Databaseserverport – porten til databaseserveren (som regel trengs ikke dette).</li>
		<li>Databasenavn – navnet på databasen på serveren.</li>
		<li>Brukernavn og passord til databasen – innloggingsdata for å få tilgang til databasen.</li>
	</ul>

	<p><strong>Merk:</strong> Hvis du bruker SQLite, må du angi hele banen til databasen i DSN-feltet og la brukernavn og passord stå tomme. Av sikkerhetsårsaker bør du kontrollere at databasefilen ikke lagres på et sted som gjør den tilgjengelig fra weben.</p>

	<p>phpBB3 støtter følgende databaser:</p>
	<ul>
		<li>MySQL 3.23 eller høyere (MySQLi støttes)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eller høyere (direkte eller via ODBC)</li>
		<li>MS SQL Server 2005 eller høyere (innebygd)</li>
		<li>Oracle</li>
	</ul>

	<p>Bare de databasene som støttes på serveren, vil vises.',
	'INSTALL_INTRO_NEXT'		=> 'Klikk på knappen nedenfor for å starte installasjonen.',
	'INSTALL_LOGIN'				=> 'Logg inn',
	'INSTALL_NEXT'				=> 'Neste trinn',
	'INSTALL_NEXT_FAIL'			=> 'Enkelte tester mislyktes, og du bør løse disse problemene før du fortsetter til neste trinn. Hvis du ikek gjør dette, kan du ende opp med en ufullstendig installasjon.',
	'INSTALL_NEXT_PASS'			=> 'Alle de grunnleggende testene lyktes, og du kan fortsette til neste trinn i installasjonen. Hvis du har endret tillatelser, moduler osv. og ønsker å teste på nytt, kan du gjøre det.',
	'INSTALL_PANEL'				=> 'Installasjonspanel',
	'INSTALL_SEND_CONFIG'		=> 'Dessverre kan ikke phpBB skrive konfigurasjonsinformasjonen direkte til config.php. Dette kan være fordi filen ikke finnes eller ikke kan skrives til. Du vil få noen alternativer nedenfor, som vil sette deg i stand til å fullføre installasjonen av config.php.',
	'INSTALL_START'				=> 'Start installasjonen',
	'INSTALL_TEST'				=> 'Test på nytt',
	'INST_ERR'					=> 'Installasjonsfeil',
	'INST_ERR_DB_CONNECT'		=> 'Kan ikke koble til databasen, se feilmelding nedenfor.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Databasefilen du angav, er inni systemets mappetre. Du bør legge denne filen på et sted som ikke er tilgjengelig fra web.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Det angitte prefikset er ugyldig. Det må starte med en bokstav og kan bare inneholde bokstaver, tall og understrek.',
	'INST_ERR_DB_NO_ERROR'		=> 'Ingen feilmelding ble angitt.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'MySQL-versjonen som er installert på denne maskinen, er inkompatibel med alternativet «MySQL med MySQLi-utvidelse», som du har valgt. Prøv alternativet «MySQL» i stedet.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Versjonen du har installert av SQLite-utvidelsen, er for gammel – den må oppgraderes til minst 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Versjonen du har installert av SQLite-utvidelsen, er for gammel – den må oppgraderes til minst 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Oracle-versjonen som er installert på denne maskinen, krever at du angir parameteren <var>NLS_CHARACTERSET</var> til <var>UTF8</var>. Oppgrader installasjonen til 9.2+ eller endre parameteren.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Databasen du har valgt, ble ikke opprettet med <var>UNICODE</var>- eller <var>UTF8</var>-koding. Prøv å installere med en database med <var>UNICODE</var>- eller <var>UTF8</var>-koding.',
	'INST_ERR_DB_NO_NAME'		=> 'Intet databasenavn ble angitt.',
	'INST_ERR_EMAIL_INVALID'	=> 'E-postadressen du angav, er ugyldig.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'E-postadressene du angav, samsvarte ikke.',
	'INST_ERR_FATAL'			=> 'Kritisk installasjonsfeil',
	'INST_ERR_FATAL_DB'			=> 'Det oppstod en kritisk og ugjenopprettelig databasefeil. Dette kan være fordi den angitte brukeren ikke har de nødvendige tillatelser til <code>CREATE TABLES</code> eller <code>INSERT</code> osv. Du finner kanskje mer informasjon nedenfor. Kontakt tjenesteleverandøren i første omgang, og eventuelt supportforaene til phpBB hvis du trenger mer hjelp.',
	'INST_ERR_FTP_PATH'			=> 'Kan ikke bytte til angitt mappe, kontroller banen.',
	'INST_ERR_FTP_LOGIN'		=> 'Kan ikke logge inn på FTP-server, kontroller brukernavnet og passordet.',
	'INST_ERR_MISSING_DATA'		=> 'Du må fylle ut alle feltene i denne blokken.',
	'INST_ERR_NO_DB'			=> 'Kan ikke laste inn PHP-modulen for den valgte databasetypen.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Passordene du angav, samsvarte ikke.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Passordet du angav, er for langt. Den maksimale lengden er på 30 tegn.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Passordet du angav, er for kort. Den minste lengde er på 6 tegn.',
	'INST_ERR_PREFIX'			=> 'Det finnes allerede tabeller med det angitte prefikset – velg et annet alternativ.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabellprefikset du har angitt, er ugyldig for databasen. Prøv et annet, gjerne uten tegn som bindestrek.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Det angitte tabellprefikset er for langt. Den maksimale lengden er på %d tegn.',
	'INST_ERR_USER_TOO_LONG'	=> 'Brukernavnet du angav, er for langt. Den maksimale lengden er på 20 tegn.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Brukernavnet du angav, er for kort. Den minste lengden er på 3 tegn.',
	'INVALID_PRIMARY_KEY'		=> 'Ugyldig primærnøkkel: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Dette kan ta en god stund ... ikke stopp skriptet.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Kontroll av <samp>mbstring</samp>-utvidelse',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Obligatorisk</strong> - <samp>mbstring</samp> er en PHP-utvidelse som gir multibyte-strengfunksjoner. Visse funksjoner i mbstring er ikke kompatible med phpBB og må deaktiveres.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funksjonsoverlasting',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> må være enten 0 eller 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent tegnkoding',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> må være 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Tegnkonvertering for HTTP-inndata',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> må være <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Tegnkonvertering for HTTP-utdata',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> må være <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Kontroller at denne mappen finnes og kan skrives til av webserveren, og prøv igjen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Kontroller at disse mappene finnes og kan skrives til av webserveren, og prøv igjen: <br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'MySQL-databaseskjemaet for phpBB er foreldet. phpBB har funnet et skjema for MySQL 3.x/4.x, men serveren kjører MySQL %2$s.<br /><strong>Før du fortsetter med oppdateringen, må du oppgradere skjemaet.</strong><br /><br />Se <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">kunnskapsbaseartikkelen om oppgradering av MySQL-skjema</a>. Hvis du får problemer, kan du bruke <a href="https://www.phpbb.com/community/viewforum.php?f=466">supportforaene våre</a>.',

	'NAMING_CONFLICT'			=> 'Navnekonflikt: %s og %s er begge aliaser<br /><br />%s',
	'NEXT_STEP'					=> 'Fortsett til neste trinn',
	'NOT_FOUND'					=> 'Finner ikke',
	'NOT_UNDERSTAND'			=> 'Forstår ikke %s #%d, tabell %s («%s»)',
	'NO_CONVERTORS'				=> 'Ingen konverterere er tilgjengelig for bruk.',
	'NO_CONVERT_SPECIFIED'		=> 'Ingen konverterer er angitt.',
	'NO_LOCATION'				=> 'Kan ikke fastslå plassering. Hvis du vet at Imagemagick er installert, kan du angi plasseringen senere, fra administrasjonskontrollpanelet',
	'NO_TABLES_FOUND'			=> 'Finner ingen tabeller.',

	'OVERVIEW_BODY'				=> 'Velkommen til phpBB3!<br /><br />phpBB® er verdens mest brukte forumløsning som er basert på åpen kildekode. phpBB3 er den nyeste versjonen av et produkt som så dagens lys allerede i 2000. I likhet med sine forgjengere, er phpBB3 funksjonsrik, brukervennlig og fullt støttet av phpBB-teamet. phpBB3 utgjør en stor forbedring av alt som gjorde phpBB2 populært, og omfatter også ofte forespurte funksjoner som ikke fantes i tidligere versjoner. Vi håper det overgår forventningene dine.<br /><br />Dette installasjonssystemet vil veilede deg gjennom installasjonen av phpBB3, oppdatere til den nyeste versjonen av phpBB3 fra tidligere versjoner, såvel som å konvertere til phpBB3 fra ulike forumløsninger (inkludert phpBB2). Hvis du vil ha mer informasjon, anbefaler vi at du leser <a href="../docs/INSTALL.html">installasjonsveiledningen</a>.<br /><br />Hvis du vil lese phpBB3-lisensen eller finne ut hvordan du får support og hvordan vi ser på dette, velger du de aktuelle alternativene på sidemenyen. Velg aktuell fane over for å fortsette.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8-støtte',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB vil <strong>ikke</strong> kjøre hvis PHP-installasjonen ikke er kompilert med UTF-8-støtte i PCRE-utvidelsen.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-funksjonen getimagesize() er tilgjengelig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obligatorisk</strong> – For at phpBB skal kunne fungere på riktig måte, må getimagesize-funksjonen være tilgjengelig.',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON-støtte',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Obligatorisk</strong> – For at phpBB skal kunne fungere på riktig måte, må PHP JSON-utvidelsen være tilgjengelig.',
	'PHP_OPTIONAL_MODULE'			=> 'Valgfrie moduler',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Valgfri</strong> – Disse modulene eller programmene er valgfrie. De vil imidlertid gi flere funksjoner hvis de er tilgjengelig.',
	'PHP_SUPPORTED_DB'				=> 'Databaser som støttes',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obligatorisk</strong> – Du må ha støtte for minst én av de kompatible databasene i PHP. Hvis ingen databasemoduler vises som tilgjengelige, må du kontakte tjenesteleverandøren eller gå gjennom det aktuelle PHP-installasjonsdokumentet for å få hjelp.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP-innstillingen <var>register_globals</var> er deaktivert',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB vil fortsatt kjøre hvis denne innstillingen er aktivert, men hvis det er mulig, anbefales det av sikkerhetsmessige årsaker at register_globals er deaktivert i PHP-installasjonen.',
	'PHP_SAFE_MODE'					=> 'Sikker modus',
	'PHP_SETTINGS'					=> 'PHP-versjon og innstillinger',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obligatorisk</strong> – Du må kjøre minst versjon 5.3.3 av PHP for å kunne installere phpBB. Hvis <var>safe mode</var> vises under, kjører PHP-installasjonen din i den modusen. Dette vil medføre begrensninger med ekstern administrasjon og tilsvarende funksjoner.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP-innstillingen <var>allow_url_fopen</var> er aktivert',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Valgfri</strong> – Denne innstillingen er valgfri, men visse phpBB-funksjoner som avatarer fra andre systemer vil ikke fungere skikkelig uten dette.',
	'PHP_VERSION_REQD'				=> 'PHP-versjon >= 5.3.3',
	'POST_ID'						=> 'Innleggs-ID',
	'PREFIX_FOUND'					=> 'Ved skanning av tabellene er det funnet en gyldig installasjon som bruker <strong>%s</strong> som tabellprefiks.',
	'PREPROCESS_STEP'				=> 'Kjører forberedende funksjoner/spørringer',
	'PRE_CONVERT_COMPLETE'			=> 'Alle forberedelsestrinnene til konverteringen er fullført uten feil. Du kan nå starte den faktiske konverteringsprosessen. Merk at du kan måtte gjøre og justere flere ting manuelt. Etter konverteringen bør du spesielt kontrollere de tilordnede tillatlesene, gjenoppbygge søkeindeksen, som ikke konverteres, og også sjekke at filene er kopiert riktig, for eksempel avatarer og smilefjes.',
	'PROCESS_LAST'					=> 'Behandler siste setning',

	'REFRESH_PAGE'				=> 'Oppdater siden for å fortsette konverteringen',
	'REFRESH_PAGE_EXPLAIN'		=> 'Hvis dette er angitt til ja, vil konvertereren oppdatere siden for å fortsette konverteringen når et trinn er ferdig. Hvis dette er første konvertering, og formålet er testing, anbefaler vi at du angir dette til Nei.',
	'REQUIREMENTS_TITLE'		=> 'Installasjonskompatibilitet',
	'REQUIREMENTS_EXPLAIN'		=> 'Før du fortsetter med den fullstendige installasjonen, vil phpBB gjennomføre noen tester av serverkonfigurasjonen og filene for å sikre at du vil kunne installere og kjøre phpBB. Sørg for å lese nøye gjennom resultatene, og ikke gå videre før alle de obligatoriske testene er bestått. Hvis du ønsker å bruke noen av funksjonene som avhenger av de valgfrie testene, bør du kontrollere at også de testene er bestått.',
	'RETRY_WRITE'				=> 'Prøv å skrive konfigurasjonen på nytt',
	'RETRY_WRITE_EXPLAIN'		=> 'Hvis du vil, kan du endre tillatelsene til config.php slik at phpBB kan skrive til den. Hvis du vil gjøre dette, kan du klikke Prøv igjen nedenfor for å prøve igjen. Husk å gjenopprette tillatelsene til config.php etter at phpBB-installasjonen er ferdig.',

	'SCRIPT_PATH'				=> 'Skriptbane',
	'SCRIPT_PATH_EXPLAIN'		=> 'Banen hvor phpBB finnes, relativt til domenenavnet, f.eks. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Velg språk',
	'SERVER_CONFIG'				=> 'Serverkonfigurasjon',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Søkeindeksen ble ikke konvertert',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Den gamle søkeindeksen ble ikke konvertert. Søk vi bare gi tomme resultater. Du oppretter en ny søkeindeks ved å gå til administrasjonskontrollpanelet, velge Vedlikehold og deretter velge Søkedindeks på undermenyen.',
	'SELECT_FORUM_GA'			=> 'I phpBB 3.1 er de globale kunngjøringene koblet til fora. Velg et forum for dine eksisterende globale kunngjøringer (de kan flyttes senere):',
	'SOFTWARE'					=> 'Systemprogramvare',
	'SPECIFY_OPTIONS'			=> 'Angi konverteringsalternativer',
	'STAGE_ADMINISTRATOR'		=> 'Administratordetaljer',
	'STAGE_ADVANCED'			=> 'Avanserte innstillinger',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Innstillingene på denne siden er det bare nødvendig å angi hvis du vet at du trenger noe annet enn det som er standard. Hvis du er usikker, går du bare videre til neste side, ettersom disse innstillingene kan endres fra administrasjonskontrollpanelet senere.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurasjonsfil',
	'STAGE_CREATE_TABLE'		=> 'Opprett databasetabeller',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Databasetabellene som brukes av phpBB 3.1, er opprettet og fylt med enkelte startdata. Gå videre til neste skjerm for å fullføre installasjonen av phpBB.',
	'STAGE_DATABASE'			=> 'Databaseinnstillinger',
	'STAGE_FINAL'				=> 'Siste trinn',
	'STAGE_INTRO'				=> 'Introduksjon',
	'STAGE_IN_PROGRESS'			=> 'Konvertering pågår',
	'STAGE_REQUIREMENTS'		=> 'Krav',
	'STAGE_SETTINGS'			=> 'Innstillinger',
	'STARTING_CONVERT'			=> 'Starter konverteringsprosessen',
	'STEP_PERCENT_COMPLETED'	=> 'Trinn <strong>%d</strong> av <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introduksjon',
	'SUB_LICENSE'				=> 'Lisens',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'		=> 'Tilkobling vellykket',
	'SUPPORT_BODY'				=> 'Full support gis for gjeldende stabile versjon av phpBB3, helt kostnadsfritt. Dette omfatter:</p><ul><li>installasjon</li><li>konfigurasjon</li><li>tekniske spørsmål</li><li>problemer som har å gjøre med mulige feil i programvaren</li><li>oppdatering fra RC-versjoner (Release Candidate) til nyeste stabile versjon</li><li>konvertering fra phpBB 2.0.x til phpBB3</li><li>konvertering fra andre forumløsninger til phpBB3 (se <a href="https://www.phpbb.com/community/viewforum.php?f=486">Konvertererforum</a>)</li></ul><p>Vi anbefaler at brukere som fortsatt kjører betaversjoner av phpBB3 erstatter installasjonen med den nyeste versjonen.</p><h2>Utvidelser / Stiler</h2><p>Problemer som har å gjøre med utvidelser, kan legges i det aktuelle <a href="https://www.phpbb.com/community/viewforum.php?f=451">utvidelsesforumet</a>.<br />Problemer som har å gjøre med stiler, maler og tema, kan legges inn i det aktuelle <a href="https://www.phpbb.com/community/viewforum.php?f=471">stilforumet</a>.<br /><br />Hvis spørsmålet er relatert til en bestemt pakke, legger du dette inn direkte i emnet som omhandler den pakken.</p><h2>Få support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB-velkomstpakke</a><br /><a href="https://www.phpbb.com/support/">Supportdel</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Hurtigstartveiledning</a><br /><br />Hvis du vil være sikker på at du får med deg siste nytt og de nyeste versjonene, hvorfor ikke <a href="https://www.phpbb.com/support/">abonnere på e-postlisten vår</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Starter synkronisering av fora',
	'SYNC_POST_COUNT'			=> 'Synkroniserer post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Synkroniserer post_counts fra <var>entry</var> %1$s til %2$s.',
	'SYNC_TOPICS'				=> 'Starter synkronisering av emner',
	'SYNC_TOPIC_ID'				=> 'Synkroniserer emner fra <var>topic_id</var> %1$s til %2$s.',

	'TABLES_MISSING'			=> 'Finner ikke disse tabellene<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefiks for tabeller i database',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefikset må begynne med en bokstav og kan bare inneholde bokstaver, tall og understreker.',
	'TABLE_PREFIX_SAME'			=> 'Tabellprefikset må være det som brukes av programvaren du konverterer fra.<br />» Det angitte tabellprefikset var %s.',
	'TESTS_PASSED'				=> 'Tester bestått',
	'TESTS_FAILED'				=> 'Tester mislyktes',

	'UNABLE_WRITE_LOCK'			=> 'Kan ikke skrive låsefil.',
	'UNAVAILABLE'				=> 'Utilgjengelig',
	'UNWRITABLE'				=> 'Ikke skrivbar',
	'UPDATE_TOPICS_POSTED'		=> 'Genererer informasjon om emner som er lagt inn',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Det oppstoe en feil ved generering av informasjon om emner som er lagt inn. Du kan prøve dette trinnet på nytt i ACP etter at konverteringsprosessen er fullført.',
	'VERIFY_OPTIONS'			=> 'Bekrefter konverteringsalternativer',
	'VERSION'					=> 'Versjon',

	'WELCOME_INSTALL'			=> 'Velkommen til installasjonen av phpBB3',
	'WRITABLE'					=> 'Skrivbar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alle filer er oppdatert til nyeste phpBB-versjon.',
	'ARCHIVE_FILE'				=> 'Kildefiler inni arkivet',

	'BACK'				=> 'Tilbake',
	'BINARY_FILE'		=> 'Binærfil',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Metoden som brukes til å sikre at et brukernavn ikke brukes av flere brukere, er endret. Det finnes noen brukere som har samme navn ved sammenligning med den nye metoden. Du må slette eller endre disse brukernavnene for å sikre at hvert navn bare brukes av én bruker før du fortsetter.',
	'CHECK_FILES'					=> 'Kontroller filer',
	'CHECK_FILES_AGAIN'				=> 'Kontroller filer på nytt',
	'CHECK_FILES_EXPLAIN'			=> 'I løpet av det neste trinnet vil alle filer bli sjekket mot oppdateringsfilene – dette kan ta lang tid hvis dette er den første filkontrollen.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Ifølge databasen din har du nyeste versjon. Du vil kanskje fortsette med en filkontroll for å kontrollere at alle filene virkelig er oppdatert til nyeste phpBB-versjon.',
	'CHECK_UPDATE_DATABASE'			=> 'Fortsett oppdateringsprosessen',
	'COLLECTED_INFORMATION'			=> 'Filinformasjon',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Listen nedenfor viser informasjon om filer som må oppdateres. Les informasjonen foran hver enkel statusblokk for å se hva def betyr og hva du kan måtte gjøre for at oppdateringen skal bli vellykket.',
	'COLLECTING_FILE_DIFFS'			=> 'Samler inn fildifferanser',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Nå bør du <a href="../ucp.php?mode=login">logge inn på systemet</a> og sjekke at alt fungerer som det skal. Ikke glem å slette, flytte eller endre navn på installasjonsmappen!',
	'CONTINUE_UPDATE_NOW'			=> 'Fortsett oppdateringsprosessen nå',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Fortsett oppdateringen nå',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Start på Konflikt – Originalfilkode før oppdatering',
	'CURRENT_VERSION'				=> 'Gjeldende versjon',

	'DATABASE_TYPE'						=> 'Databasetype',
	'DATABASE_UPDATE_COMPLETE'			=> 'Databaseoppdateringen er fullført!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Fortsett databaseoppdateringen',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Databaseoppdateringsfilen i installasjonsmappen er foreldet. Kontroller at du lastet opp riktig versjon av filen.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Databaseoppdateringen er ikke fullført ennå.',
	'DELETE_USER_REMOVE'				=> 'Slett bruker og fjern innlegg',
	'DELETE_USER_RETAIN'				=> 'Slett bruker, men behold innlegg',
	'DESTINATION'						=> 'Målfil',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Rå, enhetlig diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kodeblokk brukt innenfor oppdatert/ny fil',
	'DIFF_SIDE_BY_SIDE'					=> 'Side ved side',
	'DIFF_UNIFIED'						=> 'Enhetlig diff',
	'DO_NOT_UPDATE'						=> 'Ikke oppdater denne filen',
	'DONE'								=> 'Ferdig',
	'DOWNLOAD'							=> 'Last ned',
	'DOWNLOAD_AS'						=> 'Last ned som',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Last ned arkiv med endrede filer (anbefales)',
	'DOWNLOAD_CONFLICTS'				=> 'Last ned konflikter for denne filen',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Søk etter &lt;&lt;&lt; for å finne konflikter',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Last ned arkiv med endrede filer',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Når du har lastet ned, bør du dekomprimere arkivet. Der finner du de endrede filene du må laste opp til phpBB-rotmappen inni den. Last da opp filene til sine respektive plasseringer. Når du har lastet opp alle filene, kontrollerer du filene på nytt med knappen nedenfor.',

	'EDIT_USERNAME'	=> 'Rediger brukernavn',
	'ERROR'			=> 'Error',
	'EVERYTHING_UP_TO_DATE'		=> 'Alt er oppdatert til nyeste phpBB-versjon. Nå bør du <a href="%1$s">logge inn på systemet</a> og kontrollere at alt fungerer som det skal. Ikke glem å slette, flytte eller endre navnet på installasjonsmappen! Send oss gjerne oppdatert informasjon om serveren og systemkonfigurasjonen fra <a href="%2$s">Send statistikk</a>-modulen i ACP.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Filen er allerede oppdatert.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Filen kan ikke diffes.',
	'FILE_USED'						=> 'Informasjon brukt fra',			// Single file
	'FILES_CONFLICT'				=> 'Konfliktfiler',
	'FILES_CONFLICT_EXPLAIN'		=> 'Følgende filer er endret og representerer ikke de opprinnelige filene fra den gamle versjonen. phpBB har faststlått at disse filene skaper konflikter hvis de forsøkes slått sammen. Undersøk konfliktene og prøv å løse dem manuelt eller fortsett oppdateringen med valgte sammenslåingsmetode. Hvis du løser konfliktene manuelt, bør du kontrollere filene på nytt etter at du har endret dem. Du kan også velge foretrukket sammenslåingsmetode for hver enkelt fil. Den første vil gi deg en fil hvor linjene med konflikt fra den gamle filen vil gå tapt, den andre vil gi deg en der linjene fra den nye filen vil gå tapt.',
	'FILES_DELETED'					=> 'Slettede filer',
	'FILES_DELETED_EXPLAIN'			=> 'Følgende filer finnes ikke i den nye versjonen. Disse filene må slettes fra installasjonen.',
	'FILES_MODIFIED'				=> 'Endrede filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Følgende filer er endret og representerer ikke de opprinnelige filene fra den gamle versjonen. Den oppdaterte filen vil bli en kombinasjon av endringene og den nye filen.',
	'FILES_NEW'						=> 'Nye filer',
	'FILES_NEW_EXPLAIN'				=> 'Følgende filer finnes ikke for øyeblikket i installasjonen. Disse filene vil bli lagt til i installasjonen.',
	'FILES_NEW_CONFLICT'			=> 'Nye filer med konflikt',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Følgende filer er nye for den nyeste versjonen, men det er fastslått at det allerede finnes en fil med samme navn på samme sted. Denne filen vil bli overskrevet av den nye filen.',
	'FILES_NOT_MODIFIED'			=> 'Uendrede filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Følgende filer er uendret og representerer de opprinnelige phpBB-filene fra den versjonen du vil oppdatere fra.',
	'FILES_UP_TO_DATE'				=> 'Allerede oppdaterte filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Følgende filer er allerede oppdatert og trenger ikke å oppdateres.',
	'FTP_SETTINGS'					=> 'FTP-innstillinger',
	'FTP_UPDATE_METHOD'				=> 'FTP-opplasting',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Oppdateringsfilene som ble funnet, er inkompatible med den installerte versjonen. Den installerte versjonen er %1$s, og oppdateringsfilen er for å oppdatere phpBB %2$s til %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Oppdateringsfilene er ufullstendige.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Databaseoppdateringen var vellykket. Nå må du fortsette med oppdateringsprosessen.',

	'KEEP_OLD_NAME'		=> 'Behold brukernavn',

	'LATEST_VERSION'		=> 'Nyeste versjon',
	'LINE'					=> 'Linje',
	'LINE_ADDED'			=> 'Lagt til',
	'LINE_MODIFIED'			=> 'Endret',
	'LINE_REMOVED'			=> 'Fjernet',
	'LINE_UNMODIFIED'		=> 'Uendret',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Du må logge inn for å kunne oppdatere installasjonen.',

	'MAPPING_FILE_STRUCTURE'	=> 'For å gjøre opplastingen enklere, har du her filplasseringene for phpBB-installasjonen.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Slå sammen endringer',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ikke slå sammen – bruk ny fil',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ikke slå sammen – bruk filen som allerede er installert',
	'MERGE_MOD_FILE_OPTION'		=> 'Slå sammen endringer (fjerner ny phpBB-kode innenfor blokken med konflikt)',
	'MERGE_NEW_FILE_OPTION'		=> 'Slå sammen endringer (fjerner endret kode innenfor blokken med konflikt)',
	'MERGE_SELECT_ERROR'		=> 'Sammenslåingsmodus for filer med konflikt er ikke valgt på riktig måte.',
	'MERGING_FILES'				=> 'Slår sammen ulike filer',
	'MERGING_FILES_EXPLAIN'		=> 'Henter for øyeblikket inn de avsluttende filendringene.<br /><br />Vent til phpBB har fullført alle operasjoner på endrede filer.',

	'NEW_FILE'						=> 'Slutt på konflikt',
	'NEW_USERNAME'					=> 'Nytt brukernavn',
	'NO_AUTH_UPDATE'				=> 'Ikke autorisert til å oppdatere',
	'NO_ERRORS'						=> 'Ingen feil',
	'NO_UPDATE_FILES'				=> 'Oppdaterer ikke følgende filer',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Følgende filer er nye eller endret, men mappen de vanligvis er i, finnes ikke i installasjonen. Hvis denne listen inneholder filer i andre mapper enn language/ eller styles/, kan du kanskje har endret mappestrukturen, og oppdateringen kan derfor være ufullstendig.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Fant ingen gyldig oppdateringsmappe. Kontroller at du lastet opp de riktige filene.<br /><br />Installasjonen ser <strong>ikke</strong> ut til å være oppdatert. Det finnes oppdateringer for din versjon av phpBB %1$s, gå til <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> for å få tak i riktig pakke for å oppdatere fra versjon %2$s til versjon %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versjonen din er oppdatert. Det er ikke nødvendig å kjøre oppdateringsverktøyet. Hvis du vil kjøre en integritetskontroll av filene, sørger du for at du har lastet opp de riktige oppdateringsfilene.',
	'NO_UPDATE_INFO'				=> 'Finner ikke informasjon om oppdateringsfil.',
	'NO_UPDATES_REQUIRED'			=> 'Ingen oppdateringer kreves',
	'NO_VISIBLE_CHANGES'			=> 'Ingen synlige endringer',
	'NOTICE'						=> 'Merknad',
	'NUM_CONFLICTS'					=> 'Antall konflikter',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Foreløpig er ulikheter i %1$d av %2$d filer kontrollert.<br />Vent til alle filene er kontrollert.',

	'OLD_UPDATE_FILES'		=> 'Oppdateringsfilene er foreldet. Oppdateringsfilene som ble funnet, er for å oppdatere fra phpBB %1$s til phpBB %2$s, men den nyeste versjonen av phpBB er %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Gjeldende pakke oppdaterer til versjon',
	'PERFORM_DATABASE_UPDATE'			=> 'Utfør databaseoppdatering',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Nedenfor finner du en knapp til databaseoppdateringsskriptet. Databaseoppdateringen kan ta en stund, så ikke stopp kjøringen selv om den ser ut til å henge. Når databaseoppdateringen er utført, følger du instruksjonene for å fortsette oppdateringsprosessen.',
	'PREVIOUS_VERSION'					=> 'Forrige versjon',
	'PROGRESS'							=> 'Fremdrift',

	'RELEASE_ANNOUNCEMENT'		=> 'Kunngjøring',
	'RESULT'					=> 'Resultat',
	'RUN_DATABASE_SCRIPT'		=> 'Oppdater databasen min nå',

	'SELECT_DIFF_MODE'			=> 'Velg diffmodus',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Velg arkivformat for nedlasting',
	'SELECT_FTP_SETTINGS'		=> 'Velg FTP-innstillinger',
	'SHOW_DIFF_CONFLICT'		=> 'Vis ulikheter/konflikter',
	'SHOW_DIFF_DELETED'			=> 'Vis filinnhold',
	'SHOW_DIFF_FINAL'			=> 'Vis resultatfil',
	'SHOW_DIFF_MODIFIED'		=> 'Vis sammenslåtte ulikheter',
	'SHOW_DIFF_NEW'				=> 'Vis filinnhold',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Vis ulikheter',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Vis ulikheter',
	'SOME_QUERIES_FAILED'		=> 'Enkelte spørringer mislyktes, setningene og feilene er listet opp nedenfor.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Dette er sannsynligvis ikke noe å bry seg om, oppdateringen vil fortsette. Hvis det ikke fullfører, kan du måtte søke hjelp på supportforaene våre. See <a href="../docs/README.html">LESMEG</a> for detaljer om hvordan du får hjelp.',
	'STAGE_FILE_CHECK'			=> 'Kontroller filer',
	'STAGE_UPDATE_DB'			=> 'Oppdater database',
	'STAGE_UPDATE_FILES'		=> 'Oppdater filer',
	'STAGE_VERSION_CHECK'		=> 'Versjonskontroll',
	'STATUS_CONFLICT'			=> 'Endret fil som skaper konflikter',
	'STATUS_DELETED'			=> 'Slettet fil',
	'STATUS_MODIFIED'			=> 'Endret fil',
	'STATUS_NEW'				=> 'Ny fil',
	'STATUS_NEW_CONFLICT'		=> 'Ny fil som skaper konflikt',
	'STATUS_NOT_MODIFIED'		=> 'Uendret fil',
	'STATUS_UP_TO_DATE'			=> 'Allerede oppdatert fil',

	'TOGGLE_DISPLAY'			=> 'Vis/skjul filliste',
	'TRY_DOWNLOAD_METHOD'		=> 'Du vil kanskje prøve metoden med å laste ned de endrede filene.<br />Denne metoden fungerer alltid, og er også den anbefalte oppdateringsmetoden.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Prøv denne metoden nå',

	'UPDATE_COMPLETED'				=> 'Oppdatering fullført',
	'UPDATE_DATABASE'				=> 'Oppdater database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Databasen vil bli oppdatert i løpet av det neste trinnet.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Oppdaterer databaseskjema',
	'UPDATE_FILES'					=> 'Oppdater filer',
	'UPDATE_FILES_NOTICE'			=> 'Kontroller at du har oppdatert systemfilene også, denne filen oppdaterer bare databasen din.',
	'UPDATE_INSTALLATION'			=> 'Oppdater phpBB-installasjonen',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Med dette alternativet er det mulig å oppdatere phpBB-installasjonen til den nyeste versjonen.<br />I løpet av prosessen vil alle filenes integritet kontrolleres. Du vil kunne se gjennom alle ulikheter og filer før oppdateringen.<br /><br />Selve filoppdateringen kan gjøres på to måter.</p><h2>Manuell oppdatering</h2><p>Med denne oppdateringen laster du bare ned ditt personlige sett med endrede filer, for å fære sikker på at du ikke mister filendringer du har gjort. Når du har lastet ned denne pakken, må du manuelt laste opp filene til riktig sted under phpBB-rotmappen. Straks dette er gjort, kan du gjøre filkontrollen på nytt for å se om du har flyttet filene til riktig sted.</p><h2>Automatisk oppdatering med FTP</h2><p>Denne metoden ligner på den første, men uten at du må laste ned de endrede filene og laste dem opp selv. Dette blir gjort for deg. For å kunne bruke denne metoden, må du kjenne FTP-innloggingsdetaljene, siden du vil bli bedt om dem. Når du er ferdig, vil du bli videresendt til filkontrollen igjen, for å kontrollere at ale ble korrekt oppdatert.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Lanseringskunngjøring</h1>

		<p>Les gjennom lanseringskunngjøringen for den nyeste versjonen før du fortsetter med oppdateringsprosessen, den kan inneholde nyttig informasjon. Den inneholder også fullstendige nedlastingslenker og endringsloggen.</p>

		<br />

		<h1>Slik oppdaterer du installasjonen med den automatiske oppdateringspakken</h1>

		<p>Den anbefalte måten å oppdatere installasjonen på som er gjengitt her, gjelder bare for den automatiske oppdateringspakken. Du kan også oppdatere installasjonen med metodene som er gjengitt i dokumentet INSTALL.html. Trinnene for automatisk oppdatering av phpBB3 er:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå til <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">nedlastingssiden på phpBB.com</a> og last ned arkivet «Automatic Update Package».<br /><br /></li>
			<li>Dekomprimer arkivet.<br /><br /></li>
			<li>Last opp hele de dekomprimerte mappene «install» og «vendor» til phpBB-rotmappen (der config.php-filen er).<br /><br /></li>
		</ul>

		<p>Når disse er lastet opp, vil systemet være offline for vanlige brukere fordi installasjonsmappen du lastet opp, nå finnes der.<br /><br />
		<strong><a href="%1$s" title="%1$s">Start så oppdateringsprosessen ved å peke nettleseren til installasjonsmappen</a>.</strong><br />
		<br />
		Du vil deretter bli veiledet gjennom oppdateringsprosessen. Du vil bli varslet når oppdateringen er fullført.
		</p>
	',
	'UPDATE_METHOD'					=> 'Oppdateringsmetode',
	'UPDATE_METHOD_EXPLAIN'			=> 'Du kan nå velge den oppdateringsmetoden du ønsker. Hvis du velger FTP-opplasting, vil du komme til et skjema hvor du må angi FTP-kontodetaljer. Med denne metoden flyttes filene automatisk til den nye plasseringen, samtidig som de gamle filene sikkerhetskopieres ved å legge til .bak etter filnavnet. Hvis du velger å laste ned de endrede filene, vil du manuelt kunne dekomprimere dem og laste dem opp til de riktige stedene senere.',
	'UPDATE_REQUIRES_FILE'			=> 'Oppdatereren krever at følgende fil finnes: %s',
	'UPDATE_SUCCESS'				=> 'Oppdateringen var vellykket',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Alle filene ble oppdatert. Det neste trinnet omfatter å kontrollere alle filene på nytt for å kontrollere at de ble oppdatert på riktig måte.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Oppdaterer versjon og optimaliserer tabeller',
	'UPDATING_DATA'					=> 'Oppdaterer data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Oppdaterer database til nyeste stabile versjon',
	'UPDATED_VERSION'				=> 'Oppdatert versjon',
	'UPLOAD_METHOD'					=> 'Opplastingsmetode',

	'UPDATE_DB_SUCCESS'				=> 'Databaseoppdateringen var vellykket.',
	'UPDATE_FILE_SUCCESS'			=> 'Filoppdateringen var vellykket.',
	'USER_ACTIVE'					=> 'Aktiv bruker',
	'USER_INACTIVE'					=> 'Inaktiv bruker',

	'VERSION_CHECK'					=> 'Versjonskontroll',
	'VERSION_CHECK_EXPLAIN'			=> 'Sjekker om phpBB-installasjonen er oppdatert.',
	'VERSION_NOT_UP_TO_DATE'		=> 'phpBB-installasjonen er ikke oppdatert. Fortsett oppdateringsprosessen.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'phpBB-installasjonen er ikke oppdatert.<br />Nedenfor er en lenke til lanseringskunngjøringen, som inneholder mer informasjon i tillegg til oppdateringsinstruksjoner.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'phpBB-installasjonen er ikke oppdatert.',
	'VERSION_UP_TO_DATE'			=> 'phpBB-installasjonen er oppdatert. Selv om det ikke finnes noen oppdateringer nå, kan du fortsette for å kontrollere om filene er gyldige.',
	'VERSION_UP_TO_DATE_ACP'		=> 'phpBB-installasjonen er oppdatert. Ingen oppdateringer er tilgjengelig nå.',
	'VIEWING_FILE_CONTENTS'			=> 'Viser filinnhold',
	'VIEWING_FILE_DIFF'				=> 'Viser fildifferanser',

	'WRONG_INFO_FILE_FORMAT'	=> 'Informasjonsfilen har feil format',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Med hilsen fra ledelsen',
	'CONFIG_SITE_DESC'				=> 'En kort tekst som beskriver forumet',
	'CONFIG_SITENAME'				=> 'dittdomene.com',

	'DEFAULT_INSTALL_POST'			=> 'Dette er et eksempelinnlegg i phpBB3-installasjonen. Alt ser ut til å fungere. Du kan slette dette innlegget om du vil, og fortsette med å konfigurere systemet. Under installasjonsprosessen ble den første kategorien og det første forumet tilordnet et passende sett med tillatelser for de forhåndsdefinerte brukergruppene Adminsitratorer, Boter, Globale moderatorer, Gjester, Registrerte brukere og Registrerte COPPA-brukere. Hvis du også velger å slette den første kategorien og det første forumet, må du ikke glemme å tilordne tillatelser for alle disse brukergruppene til alle nye kategorier og fora du oppretter. Det anbefales at du endrer navnet på den første kategorien og det første forumet og kopierer tillatelsene fra disse når du oppretter nye kategorier og fora. Ha det gøy!',

	'FORUMS_FIRST_CATEGORY'			=> 'Din første kategori',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beskrivelse av ditt første forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Ditt første forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Systemadministrator',
	'REPORT_WAREZ'					=> 'Innlegget inneholder lenker til ulovlig eller piratkopiert programvare.',
	'REPORT_SPAM'					=> 'Det rapporterte innlegg har kun til hensikt å annonsere for et system eller et produkt.',
	'REPORT_OFF_TOPIC'				=> 'Det rapporterte innlegget holder seg ikke til emnet.',
	'REPORT_OTHER'					=> 'Det rapporterte innlegget passer ikke inn i noen andre kategorier, bruk feltet for ytterligere informasjon.',

	'SMILIES_ARROW'					=> 'Pil',
	'SMILIES_CONFUSED'				=> 'Forvirret',
	'SMILIES_COOL'					=> 'Kul',
	'SMILIES_CRYING'				=> 'Gråtende eller svært trist',
	'SMILIES_EMARRASSED'			=> 'Flau',
	'SMILIES_EVIL'					=> 'Ond eller sint',
	'SMILIES_EXCLAMATION'			=> 'Utrop',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idé',
	'SMILIES_LAUGHING'				=> 'Ler',
	'SMILIES_MAD'					=> 'Sint',
	'SMILIES_MR_GREEN'				=> 'Herr grønn',
	'SMILIES_NEUTRAL'				=> 'Nøytral',
	'SMILIES_QUESTION'				=> 'Spørsmål',
	'SMILIES_RAZZ'					=> 'Geip',
	'SMILIES_ROLLING_EYES'			=> 'Himler med øynene',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Sjokkert',
	'SMILIES_SMILE'					=> 'Smil',
	'SMILIES_SURPRISED'				=> 'Overrasket',
	'SMILIES_TWISTED_EVIL'			=> 'Rablende ond',
	'SMILIES_UBER_GEEK'				=> 'Übergeek',
	'SMILIES_VERY_HAPPY'			=> 'Svært glad',
	'SMILIES_WINK'					=> 'Blunk',

	'TOPICS_TOPIC_TITLE'			=> 'Velkommen til phpBB3',
));
