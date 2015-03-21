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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administratorer',
	'ACP_ADMIN_LOGS'			=> 'Admininstratorlogg',
	'ACP_ADMIN_ROLES'			=> 'Admininstratorroller',
	'ACP_ATTACHMENTS'			=> 'Vedlegg',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Vedleggsinnstillinger',
	'ACP_AUTH_SETTINGS'			=> 'Autentisering',
	'ACP_AUTOMATION'			=> 'Automatisering',
	'ACP_AVATAR_SETTINGS'		=> 'Avatarinnstillinger',

	'ACP_BACKUP'				=> 'Sikkerhetskopier',
	'ACP_BAN'					=> 'Utestengelse',
	'ACP_BAN_EMAILS'			=> 'Steng ute e-postadresser',
	'ACP_BAN_IPS'				=> 'Steng ute IP-er',
	'ACP_BAN_USERNAMES'			=> 'Steng ute brukere',
	'ACP_BBCODES'				=> 'BBCode-koder',
	'ACP_BOARD_CONFIGURATION'	=> 'Systemkonfigurasjon',
	'ACP_BOARD_FEATURES'		=> 'Systemfunksjoner',
	'ACP_BOARD_MANAGEMENT'		=> 'Systemadministrasjon',
	'ACP_BOARD_SETTINGS'		=> 'Systeminnstillinger',
	'ACP_BOTS'					=> 'Spidere/roboter',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Tilpass',
	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> 'Utvidelser',
	'ACP_CAT_FORUMS'			=> 'Fora',
	'ACP_CAT_GENERAL'			=> 'Generelt',
	'ACP_CAT_MAINTENANCE'		=> 'Vedlikehold',
	'ACP_CAT_PERMISSIONS'		=> 'Tillatelser',
	'ACP_CAT_POSTING'			=> 'Innlegg',
	'ACP_CAT_STYLES'			=> 'Stiler',
	'ACP_CAT_SYSTEM'			=> 'System',
	'ACP_CAT_USERGROUP'			=> 'Brukere og grupper',
	'ACP_CAT_USERS'				=> 'Brukere',
	'ACP_CLIENT_COMMUNICATION'	=> 'Klientkommunikasjon',
	'ACP_COOKIE_SETTINGS'		=> 'Informasjonskapselinnstillinger',
	'ACP_CONTACT'				=> 'Kontaktside',
	'ACP_CONTACT_SETTINGS'		=> 'Kontaktsideinnstillinger',
	'ACP_CRITICAL_LOGS'			=> 'Feillogg',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Egendefinerte profilfelt',

	'ACP_DATABASE'				=> 'Databaseadministrasjon',
	'ACP_DISALLOW'				=> 'Forby',
	'ACP_DISALLOW_USERNAMES'	=> 'Fobry brukernavn',

	'ACP_EMAIL_SETTINGS'		=> 'E-postinnstillinger',
	'ACP_EXTENSION_GROUPS'		=> 'Administrer filetternavnsgrupper for vedlegg',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Administrasjon av utvidelser',
	'ACP_EXTENSIONS'			=> 'Administrer utvidelser',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forumbaserte tillatelser',
	'ACP_FORUM_LOGS'				=> 'Forumlogger',
	'ACP_FORUM_MANAGEMENT'			=> 'Administrasjon av forum',
	'ACP_FORUM_MODERATORS'			=> 'Forummoderatorer',
	'ACP_FORUM_PERMISSIONS'			=> 'Tillatelser for forum',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopier forumtillatelser',
	'ACP_FORUM_ROLES'				=> 'Forumroller',

	'ACP_GENERAL_CONFIGURATION'		=> 'Generell konfigurasjon',
	'ACP_GENERAL_TASKS'				=> 'Generelle oppgaver',
	'ACP_GLOBAL_MODERATORS'			=> 'Globale moderatorer',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globale tillatelser',
	'ACP_GROUPS'					=> 'Grupper',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Forumtillatelser for grupper',
	'ACP_GROUPS_MANAGE'				=> 'Administrer grupper',
	'ACP_GROUPS_MANAGEMENT'			=> 'Administrasjon av grupper',
	'ACP_GROUPS_PERMISSIONS'		=> 'Tillatelser for grupper',
	'ACP_GROUPS_POSITION'			=> 'Administrer gruppeposisjoner',

	'ACP_ICONS'					=> 'Emneikoner',
	'ACP_ICONS_SMILIES'			=> 'Emneikoner/smilefjes',
	'ACP_INACTIVE_USERS'		=> 'Inaktive brukere',
	'ACP_INDEX'					=> 'ACP-indeks',

	'ACP_JABBER_SETTINGS'		=> 'Jabber-innstillinger',

	'ACP_LANGUAGE'				=> 'Administrasjon av språk',
	'ACP_LANGUAGE_PACKS'		=> 'Språkpakker',
	'ACP_LOAD_SETTINGS'			=> 'Belastningsinnstillinger',
	'ACP_LOGGING'				=> 'Logging',

	'ACP_MAIN'					=> 'ACP-indeks',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Administrer vedlegg',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Her kan du vise en liste over og slette filer som er tilknyttet innlegg og private meldinger.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Administrer vedleggsetternavn',
	'ACP_MANAGE_FORUMS'			=> 'Administrer fora',
	'ACP_MANAGE_RANKS'			=> 'Administrer grader',
	'ACP_MANAGE_REASONS'		=> 'Administrer begrunnelser for rapport/avslag',
	'ACP_MANAGE_USERS'			=> 'Administrer brukere',
	'ACP_MASS_EMAIL'			=> 'Masse-e-post',
	'ACP_MESSAGES'				=> 'Meldinger',
	'ACP_MESSAGE_SETTINGS'		=> 'PM-innstillinger',
	'ACP_MODULE_MANAGEMENT'		=> 'Moduladministrasjon',
	'ACP_MOD_LOGS'				=> 'Moderatorlogg',
	'ACP_MOD_ROLES'				=> 'Moderatorroller',

	'ACP_NO_ITEMS'				=> 'Ingen elementer ennå.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Ubrukte vedlegg',

	'ACP_PERMISSIONS'			=> 'Tillatelser',
	'ACP_PERMISSION_MASKS'		=> 'Tillatelsesmasker',
	'ACP_PERMISSION_ROLES'		=> 'Tillatelsesroller',
	'ACP_PERMISSION_TRACE'		=> 'Tillatelsessporing',
	'ACP_PHP_INFO'				=> 'PHP-informasjon',
	'ACP_POST_SETTINGS'			=> 'Innleggsinnstillinger',
	'ACP_PRUNE_FORUMS'			=> 'Rydd opp i fora',
	'ACP_PRUNE_USERS'			=> 'Rydd opp i brukere',
	'ACP_PRUNING'				=> 'Opprydning',

	'ACP_QUICK_ACCESS'			=> 'Hurtigtilgang',

	'ACP_RANKS'					=> 'Grader',
	'ACP_REASONS'				=> 'Begrunnelser for rapport/avslag',
	'ACP_REGISTER_SETTINGS'		=> 'Brukerregistreringsinnstillinger',

	'ACP_RESTORE'				=> 'Gjenopprett',

	'ACP_FEED'					=> 'Feedadministrasjon',
	'ACP_FEED_SETTINGS'			=> 'Feed-innstillinger',

	'ACP_SEARCH'				=> 'Søkekonfigurasjon',
	'ACP_SEARCH_INDEX'			=> 'Søkeindeks',
	'ACP_SEARCH_SETTINGS'		=> 'Søkeinnstillinger',

	'ACP_SECURITY_SETTINGS'		=> 'Sikkerhetsinnstillinger',
	'ACP_SEND_STATISTICS'		=> 'Send statistikkinformasjon',
	'ACP_SERVER_CONFIGURATION'	=> 'Serverkonfigurasjon',
	'ACP_SERVER_SETTINGS'		=> 'Serverinnstillinger',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signaturinnstillinger',
	'ACP_SMILIES'				=> 'Smilefjes',
	'ACP_STYLE_MANAGEMENT'		=> 'Stiladministrasjon',
	'ACP_STYLES'				=> 'Stiler',
	'ACP_STYLES_CACHE'			=> 'Tøm buffer',
	'ACP_STYLES_INSTALL'		=> 'Installer stiler',

	'ACP_SUBMIT_CHANGES'		=> 'Send endringer',

	'ACP_TEMPLATES'				=> 'Maler',
	'ACP_THEMES'				=> 'Tema',

	'ACP_UPDATE'					=> 'Oppdaterer',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Forumtillatelser for brukere',
	'ACP_USERS_LOGS'				=> 'Brukerlogger',
	'ACP_USERS_PERMISSIONS'			=> 'Tillatelser for brukere',
	'ACP_USER_ATTACH'				=> 'Vedlegg',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Tilbakemelding',
	'ACP_USER_GROUPS'				=> 'Grupper',
	'ACP_USER_MANAGEMENT'			=> 'Brukeradministrasjon',
	'ACP_USER_OVERVIEW'				=> 'Oversikt',
	'ACP_USER_PERM'					=> 'Tillatelser',
	'ACP_USER_PREFS'				=> 'Preferanser',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Grad',
	'ACP_USER_ROLES'				=> 'Brukerroller',
	'ACP_USER_SECURITY'				=> 'Brukersikkerhet',
	'ACP_USER_SIG'					=> 'Signatur',
	'ACP_USER_WARNINGS'				=> 'Advarsler',

	'ACP_VC_SETTINGS'					=> 'Spambot-mottiltak',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Forhåndsvisning av CAPTCHA-bilde',
	'ACP_VERSION_CHECK'					=> 'Se etter oppdateringer',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Vis administrasjonstillatelser',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Vis forummodereringstillatelser',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Vis forumtillatelser',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Vis globale modereringstillatelser',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Vis brukertillatelser',

	'ACP_WORDS'					=> 'Ordsensur',

	'ACTION'				=> 'Handling',
	'ACTIONS'				=> 'Handlinger',
	'ACTIVATE'				=> 'Aktiver',
	'ADD'					=> 'Legg til',
	'ADMIN'					=> 'Administrasjon',
	'ADMIN_INDEX'			=> 'Administrasjonsindeks',
	'ADMIN_PANEL'			=> 'Administrasjonskontrollpanel',

	'ADM_LOGOUT'			=> 'Logg&nbsp;ut&nbsp;fra&nbsp;ACP',
	'ADM_LOGGED_OUT'		=> 'Logget ut fra administrasjonskontrollpanelet',

	'BACK'					=> 'Tilbake',

	'COLOUR_SWATCH'			=> 'Web-sikker fargevelger',
	'CONFIG_UPDATED'		=> 'Konfigurasjonen er oppdatert.',
	'CRON_LOCK_ERROR'		=> 'Får ikke cron-lås.',
	'CRON_NO_SUCH_TASK'		=> 'Finner ikke cron-oppgaven «%s».',
	'CRON_NO_TASK'			=> 'Ingen cron-oppgaver må kjøres akkurat nå.',
	'CRON_NO_TASKS'			=> 'Finner ingen cron-oppgaver.',

	'DEACTIVATE'				=> 'Deaktiver',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Den angitte banen «%s» finnes ikke.',
	'DIRECTORY_NOT_DIR'			=> 'Den angitte banen «%s» er ikke en mappe.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Den angitte banen «%s» kan ikke skrives til.',
	'DISABLE'					=> 'Deaktiver',
	'DOWNLOAD'					=> 'Last ned',
	'DOWNLOAD_AS'				=> 'Last ned som',
	'DOWNLOAD_STORE'			=> 'Last ned eller lagre fil',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Du kan laste ned direkte eller lagrei mappen <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Nedlastinger',

	'EDIT'					=> 'Rediger',
	'ENABLE'				=> 'Aktiver',
	'EXPORT_DOWNLOAD'		=> 'Last ned',
	'EXPORT_STORE'			=> 'Lager',

	'GENERAL_OPTIONS'		=> 'Generelle alternativer',
	'GENERAL_SETTINGS'		=> 'Generelle innstillinger',
	'GLOBAL_MASK'			=> 'Global tillatelsesmaske',

	'INSTALL'				=> 'Installer',
	'IP'					=> 'Bruker-IP',
	'IP_HOSTNAME'			=> 'IP-adresser eller vertsnavn',

	'LOAD_NOTIFICATIONS'			=> 'Vis varslinger',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Vis varslingslisten på alle sider (vanligvis i toppteksten).',
	'LOGGED_IN_AS'			=> 'Du er innlogget som:',
	'LOGIN_ADMIN'			=> 'Du må være en autentisert bruker for å administrere nettstedet.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Du må autentisere deg selv på nytt for å administrere systemet.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Du er nå autentisert og vil bli videresendt til administrasjonskontrollpanelet.',
	'LOOK_UP_FORUM'			=> 'Velg et forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Du kan velge flere enn ett forum.',

	'MANAGE'				=> 'Administrer',
	'MENU_TOGGLE'			=> 'Skjul eller vis sidemenyen',
	'MORE'					=> 'Mer',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Mer informasjon »',
	'MOVE_DOWN'				=> 'Flytt nedover',
	'MOVE_UP'				=> 'Flytt oppover',

	'NOTIFY'				=> 'Varsling',
	'NO_ADMIN'				=> 'Du er ikke autorisert til å administrere dette nettstedet.',
	'NO_EMAILS_DEFINED'		=> 'Finner ingen gyldige e-postadresser.',
	'NO_FILES_TO_DELETE'	=> 'Vedleggende du merket for sletting, finnes ikke.',
	'NO_PASSWORD_SUPPLIED'	=> 'Du må angi passordet for å få tilgang til administrasjonskontrollpanelet.',

	'OFF'					=> 'Av',
	'ON'					=> 'På',

	'PARSE_BBCODE'						=> 'Behandle BBCode',
	'PARSE_SMILIES'						=> 'Behandle smilefjes',
	'PARSE_URLS'						=> 'Behandle lenker',
	'PERMISSIONS_TRANSFERRED'			=> 'Tillatelser overført',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Du har for øyeblikket tillatelsene til %1$s. Du kan bla gjennom systemet med brukerens tillatelser, men ikke bruke administrasjonskontrollpanelet, ettersom administrasjonstillatelser ikke ble overført. Du kan <a href="%2$s"><strong>gjenopprette tillatelsene dine</strong></a> når som helst.',
	'PROCEED_TO_ACP'					=> '%sFortsett til ACP%s',

	'REMIND'							=> 'Påminn',
	'RESYNC'							=> 'Resynkroniser',

	'RUNNING_TASK'			=> 'Oppgave som kjører: %s.',
	'SELECT_ANONYMOUS'		=> 'Velg anonym bruker',
	'SELECT_OPTION'			=> 'Velg alternativ',

	'SETTING_TOO_LOW'		=> 'Den angitte verdien for innstillingen «%1$s» er for lav. Den minste verdien som godtas, er %2$d.',
	'SETTING_TOO_BIG'		=> 'Den angitte verdien for innstillingen «%1$s» er for høy. Den største verdien som godtas, er %2$d.',
	'SETTING_TOO_LONG'		=> 'Den angitte verdien for innstillingen «%1$s» er for lang. Den største lengden som godtas, er %2$d.',
	'SETTING_TOO_SHORT'		=> 'Den angitte verdien for innstillingen «%1$s» er for kort. Den minste lengden som godtas, er %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Vis alle operasjoner',

	'TASKS_NOT_READY'			=> 'Oppgaver som ikke er klare:',
	'TASKS_READY'			=> 'Oppgaver som er klare:',
	'TOTAL_SIZE'			=> 'Størrelse totalt',

	'UCP'					=> 'Brukerkontrollpanel',
	'USERNAMES_EXPLAIN'		=> 'Skriv hvert brukernavn på sin egen linje.',
	'USER_CONTROL_PANEL'	=> 'Brukerkontrollpanel',

	'WARNING'				=> 'Advarsel',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Denne siden viser informasjon om PHP-versjonen som er installert på denne serveren. Det omfatter detaljer om innlastede moduler, tilgjengelige variabler og standardinnstillinger. Denne informasjonen kan være nyttig ved diagnostisering av problemer. Merk at enkelte tjenesteleverandører av sikkerhetsårsaker vil begrense hvilken informasjon som vises her. Du frarådes å gjengi detaljer fra denne siden, unntatt når <a href="https://www.phpbb.com/about/team/">offisielle teammedlemmer</a> ber om det på supportforaene.',

	'NO_PHPINFO_AVAILABLE'	=> 'Finner ingen informasjon om PHP-konfigurasjonen. Funksjonen phpinfo() er deaktivert av sikkerhetsårsaker.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Dette lister opp alle handlingene som utføres av systemadministratorer. Du kan sortere etter brukernavn, dato, IP eller handling. Hvis du har de nøvendige tillatelsene, kan du også fjerne enkeltoperasjoner eller hele loggen.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Dette lister opp handlingene som utføres av systemet selv. Denne loggen gir deg informasjon du kan bruke til å løse visse problemer, for eksempel leveringsfeil for e-post. Du kan sortere etter brukernavn, dato, IP eller handling. Hvis du har de nøvendige tillatelsene, kan du også fjerne enkeltoperasjoner eller hele loggen.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Dette lister opp alle handlinger som utføres i fora, emner og innlegg, i tillegg til handlinger som utføres på brukere av moderatorer, inkludert utestengelse. Du kan sortere etter brukernavn, dato, IP eller handling. Hvis du har de nøvendige tillatelsene, kan du også fjerne enkeltoperasjoner eller hele loggen.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Dette lister opp alle handlinger som utføres av brukere eller mot brukere (rapporter, advarsler og brukernotater).',
	'ALL_ENTRIES'				=> 'Alle oppføringer',

	'DISPLAY_LOG'	=> 'Vis oppgøringer fra tidligere',

	'NO_ENTRIES'	=> 'Ingen loggoppføringer for denne perioden.',

	'SORT_IP'		=> 'IP-adresse',
	'SORT_DATE'		=> 'Dato',
	'SORT_ACTION'	=> 'Logghandling',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Takk for at du valgte phpBB som forumløsning. Denne skjermen gir deg en rask oversikt over all statistikken for systemet. Lenkene til venstre på skjermen lar deg styre alle sider av systemopplevelsen. Alle sidene inneholder instruksjoner for hvordan man bruker verktøyene.',
	'ADMIN_LOG'					=> 'Loggede administratorhandlinger',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Dette gir en oversikt over de fem siste handlingen som er utført av systemadministratorer. Hele loggen kan vises fra det relevante menyelementet eller ved å følge lenken nedenfor.',
	'AVATAR_DIR_SIZE'			=> 'Avatarmappestørrelse',

	'BOARD_STARTED'		=> 'Systemet startet',
	'BOARD_VERSION'		=> 'Systemversjon',

	'DATABASE_SERVER_INFO'	=> 'Databaseserver',
	'DATABASE_SIZE'			=> 'Databasestørrelse',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funksjonsoverlasting er feil konfigurert',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> må angis til enten 0 eller 4. Du finner gjeldende verdi på siden <samp>PHP-informasjon</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent tegnkoding er feil konfigurert',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> må angis til 0. Du finner gjeldende verdi på siden <samp>PHP-informasjon</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Tegnkonvertering av HTTP-inndata er feil konfigurert',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> må angis til <samp>pass</samp>. Du finner gjeldende verdi på siden <samp>PHP-informasjon</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Tegnkonvertering av HTTP-utdata er feil konfigurert',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> må angis til <samp>pass</samp>. Du finner gjeldende verdi på siden <samp>PHP-informasjon</samp>.',

	'FILES_PER_DAY'		=> 'Vedlegg per dag',
	'FORUM_STATS'		=> 'Systemstatistikk',

	'GZIP_COMPRESSION'	=> 'GZip-komprimering',

	'NO_SEARCH_INDEX'	=> 'Den valgte søkemotoren har ingen søkeindeks.<br />Opprett indeksen for «%1$s» i delen %2$ssøkeindeks%3$s.',
	'NOT_AVAILABLE'		=> 'Ikke tilgjengelig',
	'NUMBER_FILES'		=> 'Antall vedlegg',
	'NUMBER_POSTS'		=> 'Antall innlegg',
	'NUMBER_TOPICS'		=> 'Antall emner',
	'NUMBER_USERS'		=> 'Antall brukere',
	'NUMBER_ORPHAN'		=> 'Ubrukte vedlegg',

	'PHP_VERSION_OLD'	=> 'PHP-versjonen på denne serveren vil ikke lenger være støttet av fremtidige phpBB-versjoner. %sDetaljer%s',

	'POSTS_PER_DAY'		=> 'Innlegg per dag',

	'PURGE_CACHE'			=> 'Tøm bufferen',
	'PURGE_CACHE_CONFIRM'	=> 'Er du sikker på at du vil tømme bufferen?',
	'PURGE_CACHE_EXPLAIN'	=> 'Tøm alle bufferrelaterte elementer, dette inkluderer bufrede malfiler og spørringer.',
	'PURGE_CACHE_SUCCESS'	=> 'Bufferen er tømt.',

	'PURGE_SESSIONS'			=> 'Avslutt alle økter',
	'PURGE_SESSIONS_CONFIRM'	=> 'Er du sikker på at du vil avslutte alle økter? Dette vil logge ut alle brukere.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Avslutt alle økter. Dette vil logge ut alle brukere ved å tømme øktstabellen.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Øktene er avsluttet.',

	'RESET_DATE'					=> 'Tilbakestill systemets startdato',
	'RESET_DATE_CONFIRM'			=> 'Er du sikker på at du vil tilbakestille systemets startdato?',
	'RESET_DATE_SUCCESS'				=> 'Systemets startdato er tilbakestilt',
	'RESET_ONLINE'					=> 'Nullstill rekord for antall brukere online',
	'RESET_ONLINE_CONFIRM'			=> 'Er du sikker på at du vil nullstille rekorden for antall brukere online?',
	'RESET_ONLINE_SUCCESS'				=> 'Rekord for antall brukere online er nullstilt',
	'RESYNC_POSTCOUNTS'				=> 'Resynkroniser innleggsantall',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Bare eksisterende innlegg vil bli tatt med i betraktningen. Bortryddede innlegg vil ikke bli talt.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Er du sikker på at du vil resynkronisere innleggsantallene?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Resynkroniserte innleggsantallene',
	'RESYNC_POST_MARKING'			=> 'Resynkroniser prikkede emner',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere prikkede emner?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Fjerner først merking av alle emner, og merker deretter korrekt alle emner som har hatt aktivitet i de siste seks månedene.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Resynkroniser prikkede emner',
	'RESYNC_STATS'					=> 'Resynkroniser statistikk',
	'RESYNC_STATS_CONFIRM'			=> 'Er du sikker på at du vil resynkronisere statistikken?',
	'RESYNC_STATS_EXPLAIN'			=> 'Rekalkulerer totalt antall innlegg, emner, brukere og filer.',
	'RESYNC_STATS_SUCCESS'			=> 'Statistikken er resynkronisert',
	'RUN'							=> 'Kjør nå',

	'STATISTIC'					=> 'Statistikkdetalj',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynkroniser eller tilbakestill statistikk',

	'TIMEZONE_INVALID'	=> 'Tidssonen du valgte, er ugyldig.',
	'TIMEZONE_SELECTED'	=> '(valgt nå)',
	'TOPICS_PER_DAY'	=> 'Emner per dag',

	'UPLOAD_DIR_SIZE'	=> 'Størrelse på vedlegg i innlegg',
	'USERS_PER_DAY'		=> 'Brukere per dag',

	'VALUE'						=> 'Verdi',
	'VERSIONCHECK_FAIL'			=> 'Feil ved henting av informasjon om nyeste versjon.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Kontroller versjon på nytt',
	'VIEW_ADMIN_LOG'			=> 'Vis administratorlogg',
	'VIEW_INACTIVE_USERS'		=> 'Vis inaktive brukere',

	'WELCOME_PHPBB'			=> 'Velkommen til phpBB',
	'WRITABLE_CONFIG'		=> 'Konfigurasjonsfilen (config.php) er for øyeblikket skrivbar for hvem som helst. Vi anbefaler på det sterkeste at du endre tillatelsene til 640 eller i det minste 644 (for eksempel: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inaktiv dato',
	'INACTIVE_REASON'				=> 'Årsak',
	'INACTIVE_REASON_MANUAL'		=> 'Konto deaktivert av administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Profildetaljer endret',
	'INACTIVE_REASON_REGISTER'		=> 'Nylig registrert konto',
	'INACTIVE_REASON_REMIND'		=> 'Fremtvunget reaktivering av brukerkonto',
	'INACTIVE_REASON_UNKNOWN'		=> 'Ukjent',
	'INACTIVE_USERS'				=> 'Inaktive brukere',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dette er en liste over brukere som har registrert seg, men hvor kontoene er inaktive. Du kan aktivere, slette eller påminne (ved å sende en e-post) disse brukerne, dersom du ønsker det.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Dette er en liste over de ti siste registrerte brukerne som har inaktive kontoer. Kontoene er inaktive enten fordi kontoaktivering er aktivert i innstillingene for brukerregistering og brukerkontoene ennå ikke er aktivert, eller fordi disse kontoene har blitt deaktivert. Du finner en fullstendig liste ved å følge lenken nedenfor. Derfra kan du aktivere, slette eller påminne (ved å sende en e-post) disse brukerne, dersom du ønsker det.',

	'NO_INACTIVE_USERS'	=> 'Ingen inaktive brukere',

	'SORT_INACTIVE'		=> 'Inaktiv dato',
	'SORT_LAST_VISIT'	=> 'Forrige besøk',
	'SORT_REASON'		=> 'Årsak',
	'SORT_REG_DATE'		=> 'Registreringsdato',
	'SORT_LAST_REMINDER'=> 'Forrige påminnelse',
	'SORT_REMINDER'		=> 'Påminnelse sendt',

	'USER_IS_INACTIVE'		=> 'Bruker er inaktiv',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Send informasjon om serveren og systemkonfigurasjonen til phpBB for statistisk analyse. All informasjon som kan identifisere deg eller systemet, er fjernet – dataene er fullstendig <strong>anonyme</strong>. Beslutninger omkring fremtidige phpBB-versjoner er blant annet basert på denne informasjonen. Statistikken gjøres tilgjengelig offentlig. Vi deler også disse dataene med PHP-prosjektet, programmeringsspråket som phpBB er laget med.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Ved hjelp av knappen nedenfor kan du forhåndsvise alle variabler som vil bli sendt.',
	'DONT_SEND_STATISTICS'		=> 'Gå tilbake til ACP hvis du ikke ønsker å sende statistisk informasjon til phpBB.',
	'GO_ACP_MAIN'				=> 'Gå til ACP-startsiden',
	'HIDE_STATISTICS'			=> 'Skjul detaljer',
	'SEND_STATISTICS'			=> 'Send statistikkinformasjon',
	'SHOW_STATISTICS'			=> 'Vis detaljer',
	'THANKS_SEND_STATISTICS'	=> 'Takk for at du sendte informasjonen.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>La til eller redigerte brukeres brukertillatelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>La til eller redigerte gruppers brukertillatelser</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>La til eller redigerte brukeres globale moderatortillatelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>La til eller redigerte gruppers globale moderatortillatelser</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>La til eller redigerte brukeres administratortillatelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>La til eller redigerte gruppers administratortillatelser</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>La til eller redigerte administratorer</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>La til eller redigerte globale moderatorer</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>La til eller redigerte brukeres forumtilgang</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>La til eller redigerte brukeres forummoderatortilgang</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>La til eller redigerte gruppers forumtilgang</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>La til eller redigerte gruppers forummoderatortilgang</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>La til eller redigerte moderatorer</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>La til eller redigerte forumtillatelser</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Fjernet administratorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Fjernet globale moderatorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Fjernet moderatorer</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Fjernet forumtillatelser for bruker/gruppe</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Tillatelser overført fra</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Egne tillatelser gjenopprettes etter å ha brukt tillatelser fra</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Mislykket forsøk på administratorinnlogging</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Vellykket administratorinnlogging</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Fjernet brukervedlegg</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>La til eller redigerte vedleggsetternavn</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Fjernet vedleggsetternavn</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Oppdaterte vedleggsetternavn</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>La til filetternavnsgruppe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Redigerte filetternavnsgruppe</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Fjernet filetternavnsgruppe</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Ubrukt fil lastet opp til innlegg </strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Ubrukt fil slettet</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Ekskluderte bruker fra utestengelse</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Ekskluderte IP fra utestengelse</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Ekskluderte IP fra utestengelse</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Stengte ute bruker</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Stengte ute IP</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Stengte ute e-post</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Opphevet utestengelse av bruker</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Opphevet utestengelse av IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Opphevet utestengelse av e-post</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>La til ny BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Redigerte BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Slettet BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>La til ny bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Slettet bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Oppdaterte eksisterende bot</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Tømte admininistratorloggen</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Tømte feilloggen</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Tømte moderatorloggen</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Tømte brukerloggen</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Tømte brukerlogger</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Endret vedleggsinnstillinger</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Endret autentiseringsinnstillinger</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Endret avatarinnstillinger</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Endret informasjonskapselinnstillinger</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Endret e-postinnstillinger</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Endret systemfunksjoner</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Endret belastningsinnstillinger</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Endret PM-innstillinger</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Endret innleggsinnstillinger</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Endret brukerregistreringsinnstillinger</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Endret syndikeringsfeedinnstillinger</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Endret søkeinnstillinger</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Endret sikkerhetsinnstillinger</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Endret serverinnstillinger</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Endret systeminnstillinger</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Endret signaturinnstillinger</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Endret antispambotinnstillinger</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Godkjente emne</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Bruker fremhevet emne</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Slettet innlegget «%1$s» skrevet av «%2$s» med følgende begrunnelse</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Slettet skyggeemne</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Slettet emnet «%1$s» skrevet av «%2$s» med følgende begrunnelse</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Kopierte emnet</strong><br />» fra %s',
	'LOG_LOCK'					=> '<strong>Låste emne</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Låste innlegg</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Slo sammen innlegg</strong> til emnet<br />» %s',
	'LOG_MOVE'					=> '<strong>Flyttet emne</strong><br />» fra %1$s til %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Flyttet emne</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Lukket PM-rapport</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Slettet PM-rapport</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Godkjente innlegg</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Avslo innlegget «%1$s» skrevet av «%3$s» med følgende begrunnelse</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Redigerte innlegget «%1$s» skrevet av «%2$s» med følgende begrunnelse</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Gjenopprettet innlegg</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Lukket rapport</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Slettet rapport</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Gjenopprettet emnet «%1$s» skrevet av</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Delvis slettet innlegget «%1$s» skrevet av «%2$s» med følgende begrunnelse</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Delvis slettet emnet «%1$s» skrevet av «%2$s» med følgende begrunnelse</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Flyttet splittet innlegg</strong><br />» til %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Splittet innlegg</strong><br />» fra %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Godkjente emnet</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Gjenopprettet emne</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Avslo emnet «%1$s» skrevet av «%3$s» med følgende begrunnelse</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynkroniserte emnetellere</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Endret emnetype</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Låste opp emne</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Låste opp innlegg</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>La til forbudt brukernavn</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Slettet forbudt brukernavn</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Sikkerhetskopierte database</strong>',
	'LOG_DB_DELETE'			=> '<strong>Slettet sikkerhetskopi av database</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Gjenopprettet sikkerhetskopi av database</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Ekskludert IP/vertsnavn fra nedlastingsliste</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>La til IP/vertsnavn i nedlastingsliste</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Fjernet IP/vertsnavn fra nedlastingsliste</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber-feil</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-postfeil</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Opprettet nytt forum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Kopierte forumtillatelser</strong> fra %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Slettet forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Slettet forum og underfora</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Slettet forum og flyttet underfora</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Slettet forum og flyttet innlegg </strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Slettet forum og underfora, flyttet innlegg</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Slettet forum, flyttet innlegg</strong> til %1$s <strong>og underfora</strong> til %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Slettet forum med innlegg</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Slettet forum med innlegg og underfora</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Slettet forum med innlegg, flyttet underfora</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Redigerte forumdetaljer</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Flyttet forum</strong> %1$s <strong>til under</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Flyttet forum</strong> %1$s <strong>til over</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynkroniserte forumet</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Det oppstod en generell feil</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Ny brukergruppe opprettet</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Gruppen «%1$s» ble gjort standard for brukere</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Brukergruppe slettet</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Ledere degradert i brukergruppe</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Brukere forfremmet til leder i brukergruppe</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Brukere fjernet fra brukergruppe</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Brukergruppedetaljer oppdatert</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>La til nye ledere i brukergruppe</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>La til nye brukere i brukergruppe</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Brukere godkjent i brukergruppe</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Brukere har bedt om å bli med i gruppen «%1$s», og må godkjennes</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Feil ved oppretting av bilde</strong><br />» Feil i %1$s på linje %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktiverte inaktive brukere</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Slettet inaktive brukere</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sendte påminnelses-e-post til inaktive brukere</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konverterte fra %1$s til phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installerte phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Kontroll av økts-IP/nettleser/X_FORWARDED_FOR mislyktes</strong><br />»Bruker-IP «<em>%1$s</em>» kontrollert mot økts-IP «<em>%2$s</em>», brukernettleserstreng «<em>%3$s</em>» kontrollert mot øktens nettleserstreng «<em>%4$s</em>» og brukerens X_FORWARDED_FOR-streng «<em>%5$s</em>» kontrollert mot øktens X_FORWARDED_FOR-streng «<em>%6$s</em>».',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber-konto endret</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber-passord endret</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber-konto registrert</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber-innstillinger endret</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Slettet språkpakke</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installerte språkpakke</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Oppdaterte språkpakkedetaljer</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Erstattet språkfil</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Sendte inn språkfil og plasserte i lagringsmappe</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sendte masse-e-post</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Endret forfatter av emnet «%1$s»</strong><br />» fra %2$s til %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul deaktivert</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul aktivert</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul flyttet nedover</strong><br />» %1$s til under %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul flyttet oppover</strong><br />» %1$s til over %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul fjernet</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul lagt til</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul redigert</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Administratorrolle lagt til</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Administratorrolle redigert</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Administratorrolle fjernet</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forumrolle lagt til</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forumrolle redigert</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forumrolle fjernet</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderatorrolle lagt til</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderatorrolle redigert</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderatorrolle fjernet</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Brukerrolle lagt til</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Brukerrolle redigert</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Brukerrolle fjernet</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Kan ikke åpne %1$s for rydding, kontroller tillatelsene.</strong><br />Unntak: %2$s<br />Sporing: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profilfelt aktivert</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profilfelt lagt til</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profilfelt deaktivert</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profilfelt endret</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profilfelt fjernet</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Ryddet i fora</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Autoryddet i fora</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Autoryddet skyggeemner</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Brukere deaktivert</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Brukere ryddet og innlegg slettet</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Brukere ryddet og innlegg beholdt</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Tømte buffer</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Fjernet økter</strong>',

	'LOG_RANK_ADDED'		=> '<strong>La til ny grad</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Fjernet grad</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Oppdaterte grad</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>La til begrunnelse for rapport/avslag</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Fjernet begrunnelse for for rapport/avslag</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Oppdaterte begrunnelse for for rapport/avslag</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Referansevalidering mislyktes</strong><br />»Referansen var «<em>%1$s</em>». Forespørselen ble avvist og økten slettet.',
	'LOG_RESET_DATE'			=> '<strong>Systemets startdato tilbakestilt</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Rekord for antall brukere online nullstilt</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Filstatistikk resynkronisert</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Brukerinnleggsantall resynkronisert</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Prikkede emner resynkronisert</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Innleggs-, emne- og brukerstatistikk resynkronisert</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Opprettet søkeindeks for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Fjernet søkeindeks for</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx-feil</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>La til ny stil</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Slettet stil</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Redigerte stil</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Eksporterte stil</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>La til nytt malsett i databasen</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>La til nytt malsett på filsystemet</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Slettet bufrede versjoner av malfiler i malsett <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Slettet malsett</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Redigerte malsett <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Redigerte maldetaljer</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Eksporterte malsett</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Oppdaterte malsett</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>La til nytt tema i databasen</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>La til nytt tema på filsystemet</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema slettet</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Redigerte temadetaljer</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Redigerte tema <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Redigerte tema <em>%1$s</em></strong><br />» Endret fil <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Eksporterte tema</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Oppdaterte tema</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Oppdaterte databasen fra versjon %1$s til versjon %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Oppdaterte phpBB fra versjon %1$s til versjon %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Bruker aktivert</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Stengte ute bruker via administrasjon av bruker</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Stengte ute IP via administrasjon av bruker</strong> fmed begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Stengte ute e-post via administrasjon av bruker</strong> med begrunnelsen «<em>%1$s</em>»<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Slettet bruker</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Fjernet alle vedlegg for brukeren</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Fjernet brukeravatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Tømte brukers utboks</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Fjernet alle innlegg av brukeren</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Fjernet brukersignatur</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Bruker deaktivert</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Flyttet brukerinnlegg</strong><br />» innlegg av «%1$s» til forumet «%2$s»',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Endret brukerpassord</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Tvang gjennom reaktivering av brukerkonto</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Fjernet flagg som nylig registrert fra brukeren</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Brukeren «%1$s» endret e-post</strong><br />» fra «%2$s» til «%3$s»',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Endret brukernavn</strong><br />» fra «%1$s» til «%2$s»',
	'LOG_USER_USER_UPDATE'	=> '<strong>Oppdaterte brukerdetaljer</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Brukerkonto aktivert</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Brukeravatar fjernet</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Brukersignatur fjernet</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>La til brukertilbakemelding</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Oppføring lagt til:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Brukerkonto deaktivert</strong>',
	'LOG_USER_LOCK'				=> '<strong>Bruker låste eget emne</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Flyttet alle innlegg til forumet </strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Tvang gjennom reaktivering av brukerkonto</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Bruker låste opp eget emne</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>La til brukeradvarsel</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Følgende advarsel ble utstedt til denne brukeren</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Bruker endret standardgruppe</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Bruker degradert som leder for brukergruppe</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Bruker ble med i gruppen</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Bruker ble med i gruppen og må godkjennes</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Bruker meldte seg ut av gruppen</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Slettet brukeradvarsel</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Slettet brukeradvarsel</strong><br />» %1$s',
		2 => '<strong>Slettet %2$d brukeradvarsler</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Slettet alle brukeradvarsler</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>La til ord for sensur</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Slettet ord for sensur</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Redigerte ord for sensur</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Utvidelse aktivert</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Utvidelse deaktivert</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Utvidelsens data slettet</strong><br />» %s',
));
