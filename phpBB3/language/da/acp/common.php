<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: common.php 477 2015-01-02 08:16:40Z jan_skovsgaard $
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
	'ACP_ADMIN_LOGS'			=> 'Administratorlog',
	'ACP_ADMIN_ROLES'			=> 'Administratorroller',
	'ACP_ATTACHMENTS'			=> 'Vedhæftede filer',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Vedhæftede filer',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikation',
	'ACP_AUTOMATION'			=> 'Udføres automatisk',
	'ACP_AVATAR_SETTINGS'		=> 'Avatars',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Udelukkelse',
	'ACP_BAN_EMAILS'			=> 'Udeluk emailadresser',
	'ACP_BAN_IPS'				=> 'Udeluk IP-adresser',
	'ACP_BAN_USERNAMES'			=> 'Udeluk brugere',
	'ACP_BBCODES'				=> 'BBkoder',
	'ACP_BOARD_CONFIGURATION'	=> 'Boardkonfiguration',
	'ACP_BOARD_FEATURES'		=> 'Boardfinesser',
	'ACP_BOARD_MANAGEMENT'		=> 'Boardadministration',
	'ACP_BOARD_SETTINGS'		=> 'Board grundlæggende',
	'ACP_BOTS'					=> 'Bot-administration',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Tilpas',
	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> 'Udvidelser',
	'ACP_CAT_FORUMS'			=> 'Fora',
	'ACP_CAT_GENERAL'			=> 'Generel',
	'ACP_CAT_MAINTENANCE'		=> 'Vedligehold',
	'ACP_CAT_PERMISSIONS'		=> 'Tilladelser',
	'ACP_CAT_POSTING'			=> 'Meddelelser',
	'ACP_CAT_STYLES'			=> 'Typografi',
	'ACP_CAT_SYSTEM'			=> 'System', 
	'ACP_CAT_USERGROUP'			=> 'Brugere & Grupper',
	'ACP_CAT_USERS'				=> 'Brugere',
	'ACP_CLIENT_COMMUNICATION'	=> 'Trafikkonfiguration',
	'ACP_COOKIE_SETTINGS'		=> 'Cookies',
	'ACP_CONTACT'				=> 'Kontaktside',
	'ACP_CONTACT_SETTINGS'		=> 'Kontaktformular',
	'ACP_CRITICAL_LOGS'			=> 'Kritiske fejl i log',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Tilpas profilfelter',

	'ACP_DATABASE'				=> 'Databaseadministration',
	'ACP_DISALLOW'				=> 'Afvis',
	'ACP_DISALLOW_USERNAMES'	=> 'Afvis brugernavne',

	'ACP_EMAIL_SETTINGS'		=> 'Emails',
	'ACP_EXTENSION_GROUPS'		=> 'Vedhæftede filtypegrupper',
	'ACP_EXTENSION_MANAGEMENT'  => 'Udvidelsemanager',
	'ACP_EXTENSIONS'      => 'Boardudvidelser',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forumbaserede tilladelser',
	'ACP_FORUM_LOGS'				=> 'Forumlog',
	'ACP_FORUM_MANAGEMENT'			=> 'Forumadministration',
	'ACP_FORUM_MODERATORS'			=> 'Redaktører',
	'ACP_FORUM_PERMISSIONS'				=> 'Forumtilladelser',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopier forumtilladelser',
	'ACP_FORUM_ROLES'				=> 'Forumroller',

	'ACP_GENERAL_CONFIGURATION'		=> 'Generel konfiguration',
	'ACP_GENERAL_TASKS'				=> 'Generelle opgaver',
	'ACP_GLOBAL_MODERATORS'			=> 'Globale redaktører',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globale tilladelser',
	'ACP_GROUPS'					=> 'Grupper',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Gruppers forumtilladelser',
	'ACP_GROUPS_MANAGE'				=> 'Gruppeadministration',
	'ACP_GROUPS_MANAGEMENT'			=> 'Gruppeadministration',
	'ACP_GROUPS_PERMISSIONS'		=> 'Gruppetilladelser',
	'ACP_GROUPS_POSITION'      => 'Gruppevisninger',	//Manage group positions

	'ACP_ICONS'					=> 'Emneikoner',
	'ACP_ICONS_SMILIES'			=> 'Emneikoner/smilies',
	'ACP_INACTIVE_USERS'		=> 'Inaktive brugere',
	'ACP_INDEX'					=> 'ACP-indeks',

	'ACP_JABBER_SETTINGS'		=> 'Jabber',

	'ACP_LANGUAGE'				=> 'Sprogadministration',
	'ACP_LANGUAGE_PACKS'		=> 'Sprogpakker',
	'ACP_LOAD_SETTINGS'			=> 'Belastning',
	'ACP_LOGGING'				=> 'Logning',

	'ACP_MAIN'					=> 'ACP-indeks',

	'ACP_MANAGE_ATTACHMENTS'      => 'Vedhæftede filer',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'  => 'Filer vedhæftet til indlæg og private beskeder, kan listes og slettes her.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Filtyper',
	'ACP_MANAGE_FORUMS'			=> 'Forumadministration',
	'ACP_MANAGE_RANKS'			=> 'Rangadministration',
	'ACP_MANAGE_REASONS'		=> 'Rapport- og afvisningsårsager',
	'ACP_MANAGE_USERS'			=> 'Brugeradministration',
	'ACP_MASS_EMAIL'			=> 'Masse-email',
	'ACP_MESSAGES'				=> 'Beskeder',
	'ACP_MESSAGE_SETTINGS'		=> 'Private beskeder',
	'ACP_MODULE_MANAGEMENT'		=> 'Moduladministration',
	'ACP_MOD_LOGS'				=> 'Redaktørlog',
	'ACP_MOD_ROLES'				=> 'Redaktørroller',

	'ACP_NO_ITEMS'					=> 'Der er endnu ingen elementer.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Vildfarne vedhæftede filer',

	'ACP_PERMISSIONS'			=> 'Tilladelser',
	'ACP_PERMISSION_MASKS'		=> 'Tilladelsemasker',
	'ACP_PERMISSION_ROLES'		=> 'Rollebaserede tilladelser',
	'ACP_PERMISSION_TRACE'		=> 'Sporing af tilladelser',
	'ACP_PHP_INFO'				=> 'PHP-indstillinger',
	'ACP_POST_SETTINGS'			=> 'Indlæg',
	'ACP_PRUNE_FORUMS'			=> 'Beskær fora',
	'ACP_PRUNE_USERS'			=> 'Beskær brugere',
	'ACP_PRUNING'				=> 'Beskæring',

	'ACP_QUICK_ACCESS'			=> 'Hurtig tilgang',

	'ACP_RANKS'					=> 'Rangorden',
	'ACP_REASONS'				=> 'Rapport- og afvisningsårsager',
	'ACP_REGISTER_SETTINGS'		=> 'Tilmelding',

	'ACP_RESTORE'				=> 'Gendan',

	'ACP_FEED' => 'Feed-administration',
	'ACP_FEED_SETTINGS' => 'Feeds',

	'ACP_SEARCH'				=> 'Opsætning af søgefunktion',
	'ACP_SEARCH_INDEX'			=> 'Søgeindeks',
	'ACP_SEARCH_SETTINGS'		=> 'Søgning',

	'ACP_SECURITY_SETTINGS'		=> 'Sikkerhed',
	'ACP_SEND_STATISTICS'		=> 'Statistisk information',
	'ACP_SERVER_CONFIGURATION'	=> 'Serverkonfiguration',
	'ACP_SERVER_SETTINGS'		=> 'Gzip, stier & URL',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signaturer',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_MANAGEMENT'		=> 'Administration af typografi',
	'ACP_STYLES'				=> 'Typografier',

	'ACP_STYLES_CACHE'			=> 'Tøm cache',
	'ACP_STYLES_INSTALL'		=> 'Installer typografier',

	'ACP_SUBMIT_CHANGES' => 'Udfør ændringer',

	'ACP_TEMPLATES'				=> 'Skabeloner',
	'ACP_THEMES'				=> 'Temaer',

	'ACP_UPDATE'					=> 'Opdatering',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Brugeres forumtilladelser',
	'ACP_USERS_LOGS'				=> 'Brugerlog',
	'ACP_USERS_PERMISSIONS'			=> 'Brugertilladelser',
	'ACP_USER_ATTACH'				=> 'Vedhæftede filer',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Notater',
	'ACP_USER_GROUPS'				=> 'Grupper',
	'ACP_USER_MANAGEMENT'			=> 'Brugeradministration',
	'ACP_USER_OVERVIEW'				=> 'Oversigt',
	'ACP_USER_PERM'					=> 'Tilladelser',
	'ACP_USER_PREFS'				=> 'Indstillinger',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Brugerroller',
	'ACP_USER_SECURITY'				=> 'Brugersikkerhed',
	'ACP_USER_SIG'					=> 'Signatur',
	'ACP_USER_WARNINGS'			=> 'Advarsler',

	'ACP_VC_SETTINGS'					=> 'Spambot-beskyttelse',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Afprøv CAPTCHA-billede',
	'ACP_VERSION_CHECK'					=> 'Versionskontrol',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Se administratortilladelser',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Se forumredaktørtilladelser',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Se forumtilladelser',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Se globale redaktørtilladelser',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Se brugertilladelser',

	'ACP_WORDS'					=> 'Ordcensur', 

	'ACTION'				=> 'Handling',
	'ACTIONS'				=> 'Handlinger',
	'ACTIVATE'				=> 'Aktiver',
	'ADD'					=> 'Tilføj',
	'ADMIN'					=> 'Administration',
	'ADMIN_INDEX'			=> 'Administratorindeks',
	'ADMIN_PANEL'			=> 'Administratorkontrolpanel',
	
	'ADM_LOGOUT'			=> 'ACP&nbsp;log ud',
	'ADM_LOGGED_OUT'		=> 'Du er logget af administratorkontrolpanelet',

	'BACK'					=> 'Tilbage',

	'COLOUR_SWATCH'			=> 'Websikre farver',
	'CONFIG_UPDATED'		=> 'Konfigurationen opdateret',
	'CRON_LOCK_ERROR'		=> 'Kunne ikke få fat i cron-lås.',
	'CRON_NO_SUCH_TASK'		=> 'Kunne ikke finde cron-opgaven "%s".',
	'CRON_NO_TASK'			=> 'Ingen cron-opgaver behøver afvikling i øjeblikket.',
	'CRON_NO_TASKS'			=> 'Ingen cron-opgaver blev fundet.',

	'DEACTIVATE'				=> 'Deaktiver',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Den indtastede sti "%s" eksisterer ikke.',
	'DIRECTORY_NOT_DIR'			=> 'Den indtastede sti "%s" er ikke en mappe.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Den indtastede sti "%s" er ikke skrivbar.',
	'DISABLE'					=> 'Deaktiver',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download som',
	'DOWNLOAD_STORE'			=> 'Download eller gem fil',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Du kan downloade filen direkte eller gemme den i phpBB\'s <samp>store/</samp>-mappe.',
	'DOWNLOADS'              => 'Downloads',

	'EDIT'					=> 'Rediger',
	'ENABLE'				=> 'Aktiver',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Gem på disk',

	'GENERAL_OPTIONS'		=> 'Generelle valg',
	'GENERAL_SETTINGS'		=> 'Generelle indstillinger',
	'GLOBAL_MASK'			=> 'Global tilladelsemaske',

	'INSTALL'				=> 'Installer',
	'IP'					=> 'IP-adresse',
	'IP_HOSTNAME'			=> 'IP-adresser eller værter',

	'LOAD_NOTIFICATIONS'			=> 'Vis beskeder',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Beskeder listes på hver side, typisk i header.',
	'LOGGED_IN_AS'			=> 'Du er logget ind som:',
	'LOGIN_ADMIN'			=> 'For at kunne administrere boardet skal du være autentificeret som bruger med rette tilladelser.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Du skal indtaste dit kodeord igen for at få adgang til administratorkontrolpanelet.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Du har genautentificeret dig og viderestilles nu til administratorkontrolpanelet.',
	'LOOK_UP_FORUM'			=> 'Vælg et forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Du kan vælge mere end et forum.', 

	'MANAGE'				=> 'Administrer',
	'MENU_TOGGLE'			=> 'Skjul eller vis sidemenuen',
	'MORE'					=> 'Mere',	// Not used at the moment
	'MORE_INFORMATION'		=> 'Flere informationer »',
	'MOVE_DOWN'				=> 'Flyt ned',
	'MOVE_UP'				=> 'Flyt op',

	'NOTIFY'				=> 'Bekræftelse',
	'NO_ADMIN'				=> 'Du er ikke bemyndiget til at administrere dette forum.',
	'NO_EMAILS_DEFINED'		=> 'Kunne ikke finde gyldige emailadresser.',
	'NO_FILES_TO_DELETE'  => 'De valgte filer findes ikke.',
	'NO_PASSWORD_SUPPLIED'	=> 'Du skal indtaste dit kodeord for at få adgang til administratorkontrolpanelet.',

	'OFF'					=> 'Deaktiveret',
	'ON'					=> 'Aktiveret',

	'PARSE_BBCODE'			=> 'Analyser BBkode',
	'PARSE_SMILIES'			=> 'Analyser smilies',
	'PARSE_URLS'			=> 'Analyser links',
	'PERMISSIONS_TRANSFERRED'=> 'Tilladelser overført',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Du er nu tildelt tilladelserne fra %1$s, og kan browse boardet med dennes tilladelser, og du kan derfor ikke få adgang til administratorkontrolpanelet. Du kan når som helst <a href="%2$s"><strong>gå tilbage til dit eget sæt af tilladelser</strong></a>.',
	'PROCEED_TO_ACP'		=> '%sFortsæt til ACP%s',

	'REMIND'				=> 'Påmind',
	'RESYNC'				=> 'Synkroniser',

	'RUNNING_TASK'			=> 'Opgave under afvikling: %s.',
	'SELECT_ANONYMOUS'		=> 'Vælg gæstebruger',
	'SELECT_OPTION'			=> 'Valg',

	'SETTING_TOO_LOW'	=> 'Den angivne værdi for indstillingen "%1$s" er for lav. Lavest tilladte værdi er %2$d.',
	'SETTING_TOO_BIG'		=> 'Den angivne værdi for indstillingen "%1$s" er for høj. Højest tilladte værdi er %2$d.',	
	'SETTING_TOO_LONG'	=> 'Den angivne værdi for indstillingen "%1$s" er for lang. Højest tilladte værdi er %2$d.',
	'SETTING_TOO_SHORT'	=> 'Den angivne værdi for indstillingen "%1$s" er for kort. Lavest tilladte værdi er %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Vis alle handlinger',

	'TASKS_NOT_READY'		=> 'Ikke parate opgaver:',
	'TASKS_READY'			=> 'Parate opgaver:',
	'TOTAL_SIZE'			=> 'Samlet pladsforbrug',

	'UCP'					=> 'Brugerkontrolpanel',
	'USERNAMES_EXPLAIN'		=> 'Anfør alle brugernavne på en selvstændig linie.',
	'USER_CONTROL_PANEL'	=> 'Brugerkontrolpanel',

	'WARNING'				=> 'Advarsel',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Denne side informerer om version og indstillinger for PHP (funktionen phpinfo()) installeret på denne server. PHP-indstillinger omfatter versionsinformation, information om indlæste moduler, tilgængelige variabler og standardindstillinger, som er egnet til at diagnosticere problemer.<br />Bemærk venligst, at nogle værter af sikkerhedshensyn har sat grænser for hvilken information, der bliver vist med PHP-indstillinger.<br />
	Du rådes til aldrig at videregive information om serverens PHP-indstillinger til andre, med mindre du bliver spurgt af <a href="https://www.phpbb.com/about/team/">officielle teammedlemmer på www.phpbb.com</a> eller af teammedlemmer på andre supportboards. Overvej i denne forbindelse eventuelt også muligheden for videregivelse af sådanne oplysninger pr. email eller privat besked.',
	'NO_PHPINFO_AVAILABLE'	=> 'Informationerne om din PHP-konfiguration kan ikke hentes. Funktionen phpinfo() er deaktiveret af sikkerhedsgrunde.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Her listes alle handlinger udført af administratorer. Listen kan arrangeres efter brugernavn, dato, IP-adresse eller handlingen. Hvis du har passende tilladelser kan du også tømme listen for de enkelte operationer eller rydde hele log\'en.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Her listes alle handlinger udført af boardet selv. Listen giver information til at løse særlige problemer, f.eks. ikke-leverede emails.	Listen kan arrangeres efter brugernavn, dato, IP-adresse eller handling. Hvis du har passende tilladelser kan du også tømme listen for de enkelte operationer eller rydde hele log\'en.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Her listes alle handlinger udført af redaktører i henholdsvis fora, emner og indlæg, samt handlinger overfor brugere, herunder udelukkelse af disse. Du kan sortere listen efter brugernavn, dato, IP-adresse eller handling. Hvis du har passende tilladelser kan du også tømme listen for de enkelte operationer eller rydde hele log\'en.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Her listes alle handlinger udført af brugere eller på brugere (rapporter, advarsler og notater).',
	'ALL_ENTRIES'				=> 'Alle handlinger',

	'DISPLAY_LOG'	=> 'Vis handlinger fra forrige',

	'NO_ENTRIES'	=> 'Ingen handlinger er logget i denne periode.',

	'SORT_IP'		=> 'IP-adresser',
	'SORT_DATE'		=> 'Dato',
	'SORT_ACTION'	=> 'Handling',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Tak fordi du valgte phpBB3 som din boardløsning.<br />Denne side giver dig et hurtigt overblik over alle tilgængelige statistikker på dit board. Via fanebladene foroven kan du vælge det område af boardet som skal administreres. I menuen til venstre gives adgang til disse områders underpunkter. Du finder tips og instruktion under hvert punkt.',
	'ADMIN_LOG'					=> 'Administratorlog',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'De seneste 5 handlinger udført af administratorer. Den komplette log kan vises ved at klikke på linket "se administratorlog" herunder. Denne og alle øvrige logs kan også ses via fanebladet "Vedligehold".',
	'AVATAR_DIR_SIZE'			=> 'Avatarmappens størrelse',

	'BOARD_STARTED'		=> 'Board oprettet',
	'BOARD_VERSION'		=> 'Boardversion',

	'DATABASE_SERVER_INFO'	=> 'Databaseserver',
	'DATABASE_SIZE'			=> 'Databasestørrelse',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funktionen overloading er fejlkonfigureret',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> skal konfigureres til enten 0 eller 4. Den nuværende konfiguration kan kontrolleres under <samp>PHP-indstillinger</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding er fejlkonfigureret',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> skal konfigureres til 0. Den nuværende konfiguration kan kontrolleres under <samp>PHP-indstillinger</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input character conversion er fejlkonfigureret',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> skal konfigureres til <samp>pass</samp>. Den nuværende konfiguration kan kontrolleres under <samp>PHP-indstillinger</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion er fejlkonfigureret',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> skal konfigureres til <samp>pass</samp>. Den nuværende konfiguration kan kontrolleres under <samp>PHP-indstillinger</samp>.',

	'FILES_PER_DAY'		=> 'Antal vedhæftede filer pr. dag',
	'FORUM_STATS'		=> 'Boardstatistikker',

	'GZIP_COMPRESSION'	=> 'Gzip-komprimering',

	'NO_SEARCH_INDEX'  => 'Valgte søgemotor har intet søgeindeks.<br />Opret venligst et indeks til "%1$s" under %2$sSøgeindeks%3$s.',
	'NOT_AVAILABLE'		=> 'Ikke tilgængeligt',
	'NUMBER_FILES'		=> 'Antal vedhæftede filer',
	'NUMBER_POSTS'		=> 'Antal indlæg',
	'NUMBER_TOPICS'		=> 'Antal emner',
	'NUMBER_USERS'		=> 'Antal brugere',
	'NUMBER_ORPHAN'		=> 'Vildfarne vedhæftede filer',

	'PHP_VERSION_OLD'	=> 'Den PHP-version der er installeret på denne server understøttes ikke i fremtidige versioner af phpBB. %sDetails%s',

	'POSTS_PER_DAY'		=> 'Indlæg pr. dag',

	'PURGE_CACHE'		=> 'Tøm cachen',
	'PURGE_CACHE_CONFIRM'	=> 'Er du sikker på du vil tømme cachen?', 
	'PURGE_CACHE_EXPLAIN'	=> 'Sletter alt i cachen, dette inkluderer mellemlagrede skabelonfiler og søgninger.',
	'PURGE_CACHE_SUCCESS'  => 'Cache blev tømt.',

	'PURGE_SESSIONS'						=> 'Luk alle åbne sessioner',
	'PURGE_SESSIONS_CONFIRM'	=> 'Er du sikker på at du vil lukke alle sessioner, og dermed logge alle brugere af?',
	'PURGE_SESSIONS_EXPLAIN'		=> 'Forbindelsen til sessionstabellen lukkes, alle brugere logges af med denne handling.',
	'PURGE_SESSIONS_SUCCESS'  => 'Alle åbne sessioner blev lukket.',

	'RESET_DATE'			=> 'Nulstil boardets startdato',
	'RESET_DATE_CONFIRM'	=> 'Er du sikker på at du vil nulstille boardets startdato?',
	'RESET_DATE_SUCCESS'	=> 'Boardets startdato nulstillet',
	'RESET_ONLINE'			=> 'Nulstil flest brugere online',
	'RESET_ONLINE_CONFIRM'	=> 'Er du sikker på at du vil nulstille flest brugere online?',
	'RESET_ONLINE_SUCCESS'	=> 'Flest brugere online nulstillet',
	'RESYNC_POSTCOUNTS'		=> 'Synkronisering af indlægstællere',
	'RESYNC_POSTCOUNTS_EXPLAIN'	=> 'Genberegner brugeres eksisterende indlæg, herved udelades eventuelle beskårede og slettede indlæg.',
	'RESYNC_POSTCOUNTS_CONFIRM'	=> 'Er du sikker på at du vil synkronisere indlægstællere?',
	'RESYNC_POSTCOUNTS_SUCCESS'	=> 'Indlægstællere blev synkroniseret',
	'RESYNC_POST_MARKING'	=> 'Synkronisering af prikkede emner',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Er du sikker på at du vil synkronisere prikkede emner?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Alle prikkede emner nulstilles og efterfølgende opdateres emner med brugeres aktivitet de seneste seks måneder igen med en prik.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Prikkede emner blev synkroniseret',
	'RESYNC_STATS'			=> 'Synkronisering af statistikker',
	'RESYNC_STATS_CONFIRM'	=> 'Er du sikker på at du ønsker at synkronisere statistikkerne?',
	'RESYNC_STATS_EXPLAIN'	=> 'Genberegner det samlede antal indlæg, emner, brugere og filer.',
	'RESYNC_STATS_SUCCESS'	=> 'Statistikker blev synkroniseret',
	'RUN'					=> 'Udfør nu',

	'STATISTIC'					=> 'Statistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synkroniser eller nulstil statistikker',

	'TIMEZONE_INVALID'  => 'Den valgte tidszone er ikke gyldig.',
	'TIMEZONE_SELECTED'  => '(nuværende valgte)',
	'TOPICS_PER_DAY'	=> 'Emner pr. dag',

	'UPLOAD_DIR_SIZE'	=> 'Samlet størrelse af vedhæftede filer',
	'USERS_PER_DAY'		=> 'Brugere pr. dag',

	'VALUE'				=> '',	//kollonneoverskrift i board- og søgeindeksstatistik
	'VERSIONCHECK_FAIL'					=> 'Versionskontrol fejlede',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Gentag versionskontrol',
	'VIEW_ADMIN_LOG'			=> 'Se administratorlog',
	'VIEW_INACTIVE_USERS'	=> 'Se inaktive brugere',

	'WELCOME_PHPBB'			=> 'Velkommen til phpBB',
	'WRITABLE_CONFIG'			=> 'Din konfigurationsfil (config.php) kan ændres af alle, det er en sikkerhedsbrist. Vi anbefaler derfor at du ændrer tilladelserne for denne fil til 640, eller i det mindste til 644 (for eksempel: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inaktiv dato',
	'INACTIVE_REASON'				=> 'Begrundelse',
	'INACTIVE_REASON_MANUAL'		=> 'Konto deaktiveret af administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Profilinformation ændret',
	'INACTIVE_REASON_REGISTER'		=> 'Nyligt oprettet konto',
	'INACTIVE_REASON_REMIND'		=> 'Tvungen genaktivering af brugerkonto',
	'INACTIVE_REASON_UNKNOWN'		=> 'Ukendt',
	'INACTIVE_USERS'				=> 'Inaktive brugere',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dette er en liste over brugere som er tilmeldt, men hvis konti er inaktive. Du kan aktivere, slette eller påminde disse brugere pr. email.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'De seneste 10 tilmeldte brugere med inaktive konti. Konti kan være inaktive fordi aktivering ikke er gennemført af brugere, eller fordi konti er blevet deaktiveret. En fuldstændig liste er tilgængelig ved at følge linket nedenfor. Herfra får du også mulighed for at aktivere, slette eller sende påmindelser til disse brugere. Samme liste kan også ses via fanebladet "Brugere & Grupper".',

	'NO_INACTIVE_USERS'	=> 'Ingen inaktive brugere',

	'SORT_INACTIVE'		=> 'Inaktiv dato',
	'SORT_LAST_VISIT'	=> 'Seneste besøg',
	'SORT_REASON'		=> 'Begrundelse',
	'SORT_REG_DATE'		=> 'Tilmeldingsdato',
	'SORT_LAST_REMINDER'	=> 'Seneste påmindelse',
	'SORT_REMINDER'		=> 'Påmindelse afsendt',

	'USER_IS_INACTIVE'		=> 'Bruger er inaktiv',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Af hensyn til phpBBs statistiske analyser bedes du fremsende informationerne om din server- og boardkonfiguration. Vi baserer beslutninger om fremtidige phpBB-versioner på den indsamlede information. Al information som kan identificere dig og dit board er fjernet - data er fuldstændig anonymiserede. Statistikkerne er offentlige, og deles med PHP-projektet, det programmeringsprog phpBB er skrevet i.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Klik på knappen herunder, for at se de data der indsamles og fremsendes.',
	'DONT_SEND_STATISTICS'		=> 'Returner til administratorindekset hvis du ikke ønsker at udlevere data til phpBB.',
	'GO_ACP_MAIN'				=> 'Gå til administratorindeks',
	'HIDE_STATISTICS'		=> 'Skjul detaljer',
	'SEND_STATISTICS'		=> 'Send konfigurationsdata',
	'SHOW_STATISTICS'	=> 'Vis detaljer',
	'THANKS_SEND_STATISTICS'	=> 'Tak for din fremsendte information.',
	
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Tilføjet eller ændret brugeres brugertilladelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Tilføjet eller ændret gruppers brugertilladelser</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Tilføjet eller ændret brugeres globale redaktørtilladelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Tilføjet eller ændret gruppers globale redaktørtilladelser</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Tilføjet eller ændret brugeres administratortilladelser</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Tilføjet eller ændret gruppers administratortilladelser</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Tilføjet eller ændret administratorer</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Tilføjet eller ændret globale redaktører</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Tilføjet eller ændret brugeres forumadgang</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Tilføjet eller ændret brugeres forumredaktøradgang</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Tilføjet eller ændret gruppers forumadgang</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Tilføjet eller ændret gruppers forumredaktøradgang</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Tilføjet eller ændret redaktører</strong> fra %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Forumtilladelser tilføjet eller ændret</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Fjernet administratorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Fjernet globale redaktører</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Fjernet redaktører</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Fjernet brugeres eller gruppers forumtilladelser</strong> fra %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Overført tilladelser fra</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Gendannet egne tilladelser efter brug af tilladelser fra</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Mislykket login som administrator</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Logget ind som administrator</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Slettet brugeres vedhæftede filer</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Tilføjet eller ændret filtype for vedhæftede filer</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Fjernet filtype for vedhæftede filer</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Opdateret filtype for vedhæftede filer</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Tilføjet filtypegruppe for vedhæftede filer</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Ændret filtypegruppe for vedhæftede filer</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Fjernet filtypegruppe for vedhæftede filer</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Vedhæftet vildfaren fil til indlæg</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Slettet vildfarne filer</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Undtaget bruger fra udelukkelse</strong> på grund af "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Undtaget IP-adresse fra udelukkelse</strong> på grund af "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Undtaget emailadresse fra udelukkelse</strong> på grund af "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Udelukket bruger</strong> på grund af "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Udelukket IP-adresse</strong> på grund af "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Udelukket emailadresse</strong> på grund af "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Ophævet udelukkelse af bruger</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Ophævet udelukkelse af IP-adresse</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Ophævet udelukkelse af emailadresse</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Tilføjet BBkode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Ændret BBkode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Slettet BBkode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Tilføjet bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Slettet bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Opdateret eksisterende bot</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Tømt administratorlog</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Tømt fejllog</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Tømt redaktørlog</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Tømt brugerlog</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Tømt brugerlogs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Ændret indstillinger for vedhæftede filer</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Ændret indstillinger for autentifikation</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Ændret indstillinger for avatars</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Ændret indstillinger for cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Ændret indstillinger for emails</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Ændret boardfinesser</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Ændret indstillinger for serverbelastning</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Ændret indstillinger for private beskeder</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Ændret indstillinger for indlæg</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Ændret indstillinger for tilmelding</strong>',
	'LOG_CONFIG_FEED'				=> '<strong>Indstillinger for feeds ændret</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Ændret indstillinger for søgning</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Ændret indstillinger for sikkerhed</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Ændret indstillinger for gzip, stier & URL</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Ændret board grundlæggende</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Ændret indstillinger for signaturer</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Indstillinger for spambot-beskyttelse ændret</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Godkendt emnet</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Placeret emne øverst af bruger</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Indlægget "%1$s", skrevet af "%2$s", blev slettet med følgende begrundelse</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Slettet skyggeemnet</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Emnet "%1$s", skrevet af"%2$s", blev slettet med følgende begrundelse</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Kopieret emnet</strong><br />» fra %s',
	'LOG_LOCK'					=> '<strong>Låst emnet</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Låst indlægget</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Sammenlagt emner</strong> i emnet<br />» %s',
	'LOG_MOVE'					=> '<strong>Emne flyttet</strong><br />» fra %1$s til %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Emne flyttet</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Lukket PB-rapport</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Slettet PB-rapport</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Godkendt indlægget</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Indlægget "%1$s", skrevet af "%3$s", blev afvist med begrundelsen</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Indlægget "%1$s", skrevet af "%2$s", blev redigeret med følgende begrundelse</strong><br />» %3$s',
	'LOG_POST_RESTORED'      => '<strong>Gendannet indlæg</strong><br />» %s', 
	'LOG_REPORT_CLOSED'			=> '<strong>Lukket rapporten</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Slettet rapporten</strong><br />» %s',
	'LOG_RESTORE_TOPIC'      => '<strong>Gendannet indlæg "%1$s" skrevet af</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'    => '<strong>Indlægget "%1$s", skrevet af "%2$s", blev skjult med følgende begrundelse</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'    => '<strong>Emnet "%1$s", skrevet af "%2$s", blev skjult med følgende begrundelse</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Flyttet delte indlæg</strong><br />» til %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Delt indlægget</strong><br />» fra %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Godkendt emnet</strong><br />» %s',
	'LOG_TOPIC_RESTORED'    => '<strong>Gendannet emne</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Emnet "%1$s", skrevet af "%3$s", blev afvist med begrundelsen</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Synkroniseret emnetæller</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Ændret emnetype</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Genåbnet emnet</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Genåbnet indlægget</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Tilføjet ikke tilladt brugernavn</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Slettet ikke tilladt brugernavn</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Databasebackup udført</strong>',
	'LOG_DB_DELETE'			=> '<strong>Databasebackup slettet</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Database gendannet</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Udelukket IP-adresse eller vært i downloadlisten</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Tilføjet IP-adresse eller vært til downloadlisten</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Fjernet IP-adresse eller vært fra downloadlisten</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabberfejl</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Emailfejl</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Oprettet nyt forum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'		=> '<strong>Forumtilladelser kopieret</strong> fra %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Slettet forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Slettet forum og dets underfora</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Slettet forum og flyttet underfora</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Slettet forum og flyttet indlæg </strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Slettet forum og dets underfora, flyttet indlæg</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Slettet forum, flyttet indlæg</strong> til %1$s <strong>og underfora</strong> til %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Slettet forum og dets indlæg</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Slettet forum, dets indlæg og underfora</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Slettet forum og dets indlæg, flyttet underfora</strong> til %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Ændret foruminformation</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Flyttet forum</strong> %1$s <strong>ned under</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Flyttet forum</strong> %1$s <strong>op over</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Synkroniseret forum</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Der opstod en generel fejl</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Oprettet gruppen</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Gruppen "%1$s" valgt som standardgruppe for</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Slettet gruppen</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Degraderet gruppeleder i gruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Medlem forfremmet til leder af gruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Fjernet medlemmer fra gruppen</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Opdateret gruppeinformation</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Tilføjet ledere af gruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Tilføjet nye medlemmer i brugergruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Godkendt medlemmer i gruppen</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'	=> '<strong>Brugere anmoder om medlemskab af gruppen "%1$s" og behøver godkendelse</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Fejl opstod under dannelse af billede</strong><br />» Fejl i %1$s i linie %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktiveret inaktive brugere</strong><br />» %s',
	'LOG_INACTIVE_DELETE'		=> '<strong>Inaktive brugere slettet</strong><br />» %s',
	'LOG_INACTIVE_REMIND'		=> '<strong>Sendt påmindelser pr. email til inaktive brugere</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konverteret fra %1$s til phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installeret phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Fejlet kontrol af IP-adresse/browser/X-FORWARDED_FOR for session</strong><br />» Kontrolleret brugers IP-adresse "<em>%1$s</em>" mod IP-adresse for session "<em>%2$s</em>", kontrolleret brugers agentstreng "<em>%3$s</em>" mod sessions agentstreng "<em>%4$s</em>" og kontrolleret brugers X_FORWARDED_FOR streng "<em>%5$s</em>" mod X_FORWARDED_FOR streng for session "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Ændret Jabberkonto</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Ændret kodeord for Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Tilmeldt Jabberkonto</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Ændret indstillinger for Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Slettet sprogpakken</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installeret sprogpakken</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Opdateret information om sprogpakken</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Sprogfiler udskiftet</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Sprogfil indsendt og placeret i lagringsmappen</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sendt masse-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Ændret forfatter i emnet "%1$s"</strong><br />» fra %2$s til %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Deaktiveret modulet</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Aktiveret modulet</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Flyttet modulet</strong><br />» %1$s under %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Flyttet modulet</strong><br />» %1$s over %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Fjernet modulet</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Tilføjet modulet</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Ændret modulet</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Tilføjet administratorrollen</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Ændret administratorrollen</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Fjernet administratorrollen</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Tilføjet forumrollen</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Ændret forumrollen</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Fjernet forumrollen</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Tilføjet redaktørrollen</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Ændret redaktørrollen</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Fjernet redaktørrollen</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Tilføjet brugerrollen</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Ændret brugerrollen</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Fjernet brugerrollen</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'    => '<strong>Kunne ikke åbne %1$s for oprydning, kontroller tilladelser.</strong><br />Undtagelse: %2$s<br />Spore: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktiveret profilfeltet</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Tilføjet profilfeltet</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktiveret profilfeltet</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Ændret profilfeltet</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Fjernet profilfeltet</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Beskåret forummet</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Autobeskåret forummet</strong><br />» %s',
	'LOG_PRUNE_SHADOW'			=> '<strong>Autobeskåret skyggeemner</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Deaktiveret brugere</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Beskåret brugere og slettet indlæg</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Beskåret brugere og bevaret indlæg</strong><br />» %s',
	
	'LOG_PURGE_CACHE'			=> '<strong>Cache tømt</strong>',
	'LOG_PURGE_SESSIONS'	=> '<strong>Åbne sessioner afsluttet</strong>',

	'LOG_RANK_ADDED'			=> '<strong>Tilføjet rangen</strong><br />» %s',
	'LOG_RANK_REMOVED'			=> '<strong>Slettet rangen</strong><br />» %s',
	'LOG_RANK_UPDATED'			=> '<strong>Opdateret rangen</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Tilføjet afvisningsbegrundelsen</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Fjernet afvisningsbegrundelsen</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Opdateret afvisningsbegrundelsen</strong><br />» %s',

	'LOG_REFERER_INVALID'	=> '<strong>Validering af reference fejlede</strong><br />»Referencen var “<em>%1$s</em>”. Request blev afvist og sessionen afsluttet.',
	'LOG_RESET_DATE'			=> '<strong>Boardets startdato nulstillet</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>"Flest brugere online" nulstillet</strong>',
	'LOG_RESYNC_FILES_STATS'  => '<strong>Filstatistikker synkroniseret</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Brugeres indlægstællere synkroniseret</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Prikkede emner synkroniseret</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Indlæg-, emne- og brugerstatistikkerne synkroniseret</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Dannet søgeindeks for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Fjernet søgeindeks for</strong><br />» %s',
	'LOG_SPHINX_ERROR'      => '<strong>Sphinx-fejl</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Tilføjet typografien</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Slettet typografien</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Ændret typografien</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Eksporteret typografien</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Føjet skabelon til database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Føjet skabelon til filsystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Tømt cachen for <em>%1$s</em> skabelonfiler</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Slettet skabelonen</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Ændret skabelon <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Ændret skabeloninformation</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Eksporteret skabelonen</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Genindlæst skabelonen</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Føjet tema til database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Føjet tema til filsystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Slettet temaet</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Ændret temainformation</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Ændret tema <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Ændret tema <em>%1$s</em></strong><br />» modificeret fil <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Eksporteret temaet</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Genindlæst temaet</strong><br />» %s',

	'LOG_UPDATE_DATABASE'		=> '<strong>Database opdateret fra version %1$s til version %2$s</strong>',
	'LOG_UPDATE_PHPBB'			=> '<strong>phpBB opdateret fra version %1$s til version %2$s</strong>',
	
	'LOG_USER_ACTIVE'		=> '<strong>Aktiveret bruger</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Udelukket bruger via Administrer brugere </strong> på grund af "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Udelukket IP-adresse via Administrer brugere</strong> på grund af "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Udelukket emailadresse via Administrer brugere</strong> på grund af "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Slettet bruger</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Slettet brugers vedhæftede filer</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Slettet brugers avatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Tømt brugers udbakke</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Slettet brugers indlæg</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Slettet brugers signatur</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Deaktiveret bruger</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Flyttet brugers indlæg</strong><br />» skrevet af "%1$s" til forum "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Ændret kodeord for</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Gennemtvunget genaktivering af konto for</strong><br />» %s',
	'LOG_USER_REMOVED_NR' => '<strong>Slettet ny brugertilmelding for</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Ændret emailadresse for "%1$s"</strong><br />» fra "%2$s" til "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Ændret brugernavn</strong><br />» fra "%1$s" til "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Opdateret information om</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Aktiveret brugerkonto</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Slettet brugers avatar</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Slettet brugers signatur</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Tilføjet brugernotat om</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Foretaget tilføjelse til log for bruger:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktiveret brugerkonto</strong>',
	'LOG_USER_LOCK'				=> '<strong>Låst eget emne</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Flyttet alle indlæg til forummet</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Tvunget brugerkonto til genaktivering</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Låst op for eget emne</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Udstedt advarsel til</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Udstedt følgende advarsel til bruger</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Bruger skiftet standardgruppe</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Bruger degraderet som leder af gruppen</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Bruger sluttet til gruppen</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Bruger sluttet til gruppen og behøver godkendelse</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Bruger udmeldt af gruppen</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Slettet advarsel til</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Slettet advarsel til</strong><br />» %1$s',
		2 => '<strong>Slettet %2$d advarsler til</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Slettet samtlige advarsler til</strong><br />» %s',
	
	'LOG_WORD_ADD'			=> '<strong>Tilføjet ordcensur</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Slettet ordcensur</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Ændret ordcensur</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Udvidelse aktiveret</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Udvidelse deaktiveret</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Udvidelses data slettet</strong><br />» %s',
));
