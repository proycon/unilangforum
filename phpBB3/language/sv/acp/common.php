<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_ADMINISTRATORS'		=> 'Administratörer',
	'ACP_ADMIN_LOGS'			=> 'Administrationslogg',
	'ACP_ADMIN_ROLES'			=> 'Administrationsroller',
	'ACP_ATTACHMENTS'			=> 'Bilagor',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Bilageinställningar',
	'ACP_AUTH_SETTINGS'			=> 'Autentisering',
	'ACP_AUTOMATION'			=> 'Automatisering',
	'ACP_AVATAR_SETTINGS'		=> 'Inställningar för visningsbilder',

	'ACP_BACKUP'				=> 'Säkerhetskopiera',
	'ACP_BAN'					=> 'Bannlys',
	'ACP_BAN_EMAILS'			=> 'Bannlys e-postadress',
	'ACP_BAN_IPS'				=> 'Bannlys IP-adresser',
	'ACP_BAN_USERNAMES'			=> 'Bannlys användare',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Forumkonfiguration',
	'ACP_BOARD_FEATURES'		=> 'Forumfunktioner',
	'ACP_BOARD_MANAGEMENT'		=> 'Forumhantering',
	'ACP_BOARD_SETTINGS'		=> 'Foruminställningar',
	'ACP_BOTS'					=> 'Spindlar/Robotar',

	'ACP_CAPTCHA'				=> 'CAPTCHA',
	'ACP_CAT_CUSTOMISE'			=> 'Skräddarsy',

	'ACP_CAT_DATABASE'			=> 'Databas',
	'ACP_CAT_DOT_MODS'			=> 'Tillägg',
	'ACP_CAT_FORUMS'			=> 'Kategorier',
	'ACP_CAT_GENERAL'			=> 'Allmänt',
	'ACP_CAT_MAINTENANCE'		=> 'Underhåll',
	'ACP_CAT_PERMISSIONS'		=> 'Behörigheter',
	'ACP_CAT_POSTING'			=> 'Inlägg',
	'ACP_CAT_STYLES'			=> 'Stilar',
	'ACP_CAT_SYSTEM'			=> 'System',
	'ACP_CAT_USERGROUP'			=> 'Användare och grupper',
	'ACP_CAT_USERS'				=> 'Användare',
	'ACP_CLIENT_COMMUNICATION'	=> 'Klientkommunikation',
	'ACP_COOKIE_SETTINGS'		=> 'Cookieinställningar',
	'ACP_CONTACT'				=> 'Contact page',
	'ACP_CONTACT_SETTINGS'		=> 'Contact page settings',
	'ACP_CRITICAL_LOGS'			=> 'Fellogg',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Egna profilfält',

	'ACP_DATABASE'				=> 'Databashantering',
	'ACP_DISALLOW'				=> 'Förbjud',
	'ACP_DISALLOW_USERNAMES'	=> 'Förbjud användarnamn',

	'ACP_EMAIL_SETTINGS'		=> 'E-postinställningar',
	'ACP_EXTENSION_GROUPS'		=> 'Hantera bilagornas filtypsgrupper',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Tilläggshantering',
	'ACP_EXTENSIONS'			=> 'Hantera tillägg',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Kategoribaserade behörigheter',
	'ACP_FORUM_LOGS'				=> 'Kategoriloggar',
	'ACP_FORUM_MANAGEMENT'			=> 'Kategorihantering',
	'ACP_FORUM_MODERATORS'			=> 'Kategorimoderatorer',
	'ACP_FORUM_PERMISSIONS'			=> 'Kategoribehörigheter',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopiera kategoribehörigheter',
	'ACP_FORUM_ROLES'				=> 'Kategoriroller',

	'ACP_GENERAL_CONFIGURATION'		=> 'Allmän konfiguration',
	'ACP_GENERAL_TASKS'				=> 'Allmänna uppgifter',
	'ACP_GLOBAL_MODERATORS'			=> 'Globala moderatorer',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globala behörigheter',
	'ACP_GROUPS'					=> 'Grupper',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Gruppers kategoribehörigheter',
	'ACP_GROUPS_MANAGE'				=> 'Hantera grupper',
	'ACP_GROUPS_MANAGEMENT'			=> 'Grupphantering',
	'ACP_GROUPS_PERMISSIONS'		=> 'Gruppbehörigheter',
	'ACP_GROUPS_POSITION'			=> 'Hantera gruppositioner',

	'ACP_ICONS'					=> 'Trådikoner',
	'ACP_ICONS_SMILIES'			=> 'Trådikoner/smilies',

	'ACP_INACTIVE_USERS'		=> 'Inaktiva användare',
	'ACP_INDEX'					=> 'Administrationsindex',

	'ACP_JABBER_SETTINGS'		=> 'Jabberinställningar',

	'ACP_LANGUAGE'				=> 'Språkhantering',
	'ACP_LANGUAGE_PACKS'		=> 'Språkpaket',
	'ACP_LOAD_SETTINGS'			=> 'Belastningsinställningar',
	'ACP_LOGGING'				=> 'Loggning',

	'ACP_MAIN'					=> 'Administrationsindex',
	
	'ACP_MANAGE_ATTACHMENTS'			=> 'Hantera bilagor',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Han kan du se och ta bort bilagor som finns i inlägg eller privata meddelanden.',
	
	'ACP_MANAGE_EXTENSIONS'		=> 'Hantera filtyper',
	'ACP_MANAGE_FORUMS'			=> 'Hantera kategorier',
	'ACP_MANAGE_RANKS'			=> 'Hantera titlar',
	'ACP_MANAGE_REASONS'		=> 'Hantera rapport/avslagsanledningar',
	'ACP_MANAGE_USERS'			=> 'Hantera användare',
	'ACP_MASS_EMAIL'			=> 'Massutskick',
	'ACP_MESSAGES'				=> 'Meddelanden',
	'ACP_MESSAGE_SETTINGS'		=> 'Inställningar för personliga meddelanden',
	'ACP_MODULE_MANAGEMENT'		=> 'Modulhantering',
	'ACP_MOD_LOGS'				=> 'Moderatorlogg',
	'ACP_MOD_ROLES'				=> 'Moderatorroller',

	'ACP_NO_ITEMS'				=> 'Det finns inga poster än.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Föräldralösa bilagor',

	'ACP_PERMISSIONS'			=> 'Behörigheter',
	'ACP_PERMISSION_MASKS'		=> 'Behörighetsgranskning',
	'ACP_PERMISSION_ROLES'		=> 'Behörighetsroller',
	'ACP_PERMISSION_TRACE'		=> 'Spåra behörigheter',
	'ACP_PHP_INFO'				=> 'PHP-information',
	'ACP_POST_SETTINGS'			=> 'Inläggsinställningar',
	'ACP_PRUNE_FORUMS'			=> 'Rensa kategorier',
	'ACP_PRUNE_USERS'			=> 'Rensa användare',
	'ACP_PRUNING'				=> 'Rensning',

	'ACP_QUICK_ACCESS'			=> 'Snabbåtkomst',

	'ACP_RANKS'					=> 'Titlar',
	'ACP_REASONS'				=> 'Rapport/avslagsanledningar',
	'ACP_REGISTER_SETTINGS'		=> 'Inställningar för användarregistrering',

	'ACP_RESTORE'				=> 'Återställ',
	'ACP_FEED'					=> 'Hantering av flödespublicering',
	'ACP_FEED_SETTINGS'			=> 'Inställningar för flödespublicering',

	'ACP_SEARCH'				=> 'Sökkonfiguration',
	'ACP_SEARCH_INDEX'			=> 'Sökindex',
	'ACP_SEARCH_SETTINGS'		=> 'Sökinställningar',

	'ACP_SECURITY_SETTINGS'		=> 'Säkerhetsinställningar',
	'ACP_SEND_STATISTICS'		=> 'Sänd statistisk information',
	'ACP_SERVER_CONFIGURATION'	=> 'Serverkonfiguration',
	'ACP_SERVER_SETTINGS'		=> 'Serverinställningar',
	'ACP_SIGNATURE_SETTINGS'	=> 'Signaturinställningar',
	'ACP_SMILIES'				=> 'Smilies',

	'ACP_STYLE_MANAGEMENT'		=> 'Stilhantering',
	'ACP_STYLES'				=> 'Stilar',
	'ACP_STYLES_CACHE'			=> 'Töm cachen',
	'ACP_STYLES_INSTALL'		=> 'Installera stilar',
	'ACP_SUBMIT_CHANGES'		=> 'Sänd ändringar',

	'ACP_TEMPLATES'				=> 'Mallar',
	'ACP_THEMES'				=> 'Teman',

	'ACP_UPDATE'					=> 'Uppdatering',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Användares kategoribehörigheter',
	'ACP_USERS_LOGS'				=> 'Användarloggar',
	'ACP_USERS_PERMISSIONS'			=> 'Användarbehörigheter',
	'ACP_USER_ATTACH'				=> 'Bilagor',
	'ACP_USER_AVATAR'				=> 'Visningsbild',
	'ACP_USER_FEEDBACK'				=> 'Användaranteckningar',
	'ACP_USER_GROUPS'				=> 'Grupper',
	'ACP_USER_MANAGEMENT'			=> 'Användarhantering',
	'ACP_USER_OVERVIEW'				=> 'Översikt',
	'ACP_USER_PERM'					=> 'Behörigheter',
	'ACP_USER_PREFS'				=> 'Inställningar',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Titel',
	'ACP_USER_ROLES'				=> 'Användarroller',
	'ACP_USER_SECURITY'				=> 'Användarsäkerhet',
	'ACP_USER_SIG'					=> 'Signatur',
	'ACP_USER_WARNINGS'				=> 'Varningar',
	'ACP_VC_SETTINGS'					=> 'Åtgärder mot spambotar',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Förhandsvisning av antispam-bild',
	'ACP_VERSION_CHECK'					=> 'Kolla efter uppdateringar',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Visa administrativa behörigheter',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Visa kategorimoderationsbehörigheter',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Visa kategoribaserade behörigheter',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Visa globala moderationsbehörigheter',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Visa användarbaserade behörigheter',

	'ACP_WORDS'					=> 'Ordcensur',

	'ACTION'				=> 'Handling',
	'ACTIONS'				=> 'Handlingar',
	'ACTIVATE'				=> 'Aktivera',
	'ADD'					=> 'Lägg till',
	'ADMIN'					=> 'Administration',
	'ADMIN_INDEX'			=> 'Administrationsindex',
	'ADMIN_PANEL'			=> 'Administrationspanel',
 	'ADM_LOGOUT'         	=> 'Logga ut från administrationspanelen',
	'ADM_LOGGED_OUT'     	=> 'Loggade ut från administrationspanelen',

	'BACK'					=> 'Tillbaka',

	'COLOUR_SWATCH'			=> 'Karta över webbsäkra färger',
	'CONFIG_UPDATED'		=> 'Konfigurationen uppdaterades.',
	'CRON_LOCK_ERROR'		=> 'Could not obtain cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Could not find cron task â€œ%sâ€.',
	'CRON_NO_TASK'			=> 'No cron tasks need to be run right now.',
	'CRON_NO_TASKS'			=> 'No cron tasks could be found.',

	'DEACTIVATE'				=> 'Inaktivera',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Den angivna sökvägen “%s” finns inte.',
	'DIRECTORY_NOT_DIR'			=> 'Den angivna sökvägen “%s” är inte en katalog.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Den angivna sökvägen “%s” går inte att skriva till.',
	'DISABLE'					=> 'Inaktivera',
	'DOWNLOAD'					=> 'Ladda ner',
	'DOWNLOAD_AS'				=> 'Ladda ner som',
	'DOWNLOAD_STORE'			=> 'Ladda ner eller lagra fil',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Du kan ladda ner filen direkt eller spara den i din <samp>store/</samp>-mapp.',
	'DOWNLOADS'          		=> 'Nedladdningar',
	
	'EDIT'					=> 'Redigera',
	'ENABLE'				=> 'Aktivera',
	'EXPORT_DOWNLOAD'		=> 'Ladda ner',
	'EXPORT_STORE'			=> 'Lagra',

	'GENERAL_OPTIONS'		=> 'Allmänna alternativ',
	'GENERAL_SETTINGS'		=> 'Allmänna inställningar',
	'GLOBAL_MASK'			=> 'Granska globala behörigheter',

	'INSTALL'				=> 'Installera',
	'IP'					=> 'Användar-IP',
	'IP_HOSTNAME'			=> 'IP-adresser eller värdnamn',
	'LOAD_NOTIFICATIONS'			=> 'Visa Notifikationer',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Visa notifikationslistan på varje sida (vanligtvis i sidhuvudet).',


	'LOGGED_IN_AS'			=> 'Du är inloggad som:',
	'LOGIN_ADMIN'			=> 'För att administrera forumet så måste du vara en behörig användare.',
	'LOGIN_ADMIN_CONFIRM'	=> 'För att administrera forumet så måste du verifiera dig själv igen.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Du verifierades och kommer nu att vidarebefordras till administrationspanelen.',
	'LOOK_UP_FORUM'			=> 'Välj en kategori',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Använd t.ex kombinationen <samp>CTRL</samp> + musklick för att markera och välja fler än en kategori.',

	'MANAGE'				=> 'Hantera',
	'MENU_TOGGLE'			=> 'Dölj eller visa sidomenyn',
	'MORE'					=> 'Mera',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Mera information »',
	'MOVE_DOWN'				=> 'Flytta ner',
	'MOVE_UP'				=> 'Flytta upp',

	'NOTIFY'				=> 'Meddelande',
	'NO_ADMIN'				=> 'Du har inte behörighet att administrera detta forum.',
	'NO_EMAILS_DEFINED'		=> 'Inga giltiga e-postadresser hittades.',
	'NO_FILES_TO_DELETE'	=> 'Bilagor du valt finns inte.',
	'NO_PASSWORD_SUPPLIED'	=> 'Du måste ange ditt lösenord för att komma åt administrationspanelen.',

	'OFF'					=> 'Av',
	'ON'					=> 'På',

	'PARSE_BBCODE'						=> 'Tolka BBCode',
	'PARSE_SMILIES'						=> 'Tolka smilies',
	'PARSE_URLS'						=> 'Tolka länkar',
	'PERMISSIONS_TRANSFERRED'			=> 'Behörigheterna överfördes',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Du använder nu behörigheterna från %1$s. Du kan använda forumet med användarens behörigheter med du kan inte komma åt administrationspanelen eftersom administratörsbehörigheter inte överfördes. Du kan <a href="%2$s"><strong>återgå till dina egna behörigheter</strong></a> när som helst.',
	'PROCEED_TO_ACP'					=> '%sFortsätt till administrationspanelen%s',

	'REMIND'							=> 'Påminn',
	'RESYNC'							=> 'Synkronisera',

	'RUNNING_TASK'			=> 'Running task: %s.',
	'SELECT_ANONYMOUS'		=> 'Välj den anonyma användaren (gäst)',
	'SELECT_OPTION'			=> 'Välj alternativ',

	'SETTING_TOO_LOW'		=> 'Det angivna värdet för inställningen “%1$s” är för lågt. Det minsta tillåtna värdet är %2$d.',
	'SETTING_TOO_BIG'		=> 'Det angivna värdet för inställningen “%1$s” är för högt. Det största tillåtna värdet är %2$d.',
	'SETTING_TOO_LONG'		=> 'Det angivna värdet för inställningen “%1$s” är för långt. Den längsta tillåtna längden är %2$d.',
	'SETTING_TOO_SHORT'		=> 'Det angivna värdet för inställningen “%1$s” är för kort. Den kortast tillåtna längden är %2$d.',
	'SHOW_ALL_OPERATIONS'	=> 'Visa alla händelser',
	'TASKS_NOT_READY'			=> 'Not ready tasks:',
	'TASKS_READY'			=> 'Ready tasks:',
	'TOTAL_SIZE'      		=> 'Total storlek',

	'UCP'					=> 'Kontrollpanel',
	'USERNAMES_EXPLAIN'		=> 'Placera varje användarnamn på en ny rad.',
	'USER_CONTROL_PANEL'	=> 'Kontrollpanel',

	'WARNING'				=> 'Varning',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Denna sida listar information om den version av PHP som är installerad på denna server. Den innehåller detaljer om inladdade moduler, tillgängliga variabler och standardinställningar. Denna information kan vara användbar för att lösa problem. Kom ihåg att vissa webbhotell begränsar informationen som visas här av säkerhetsskäl. Du bör inte lämna ut någon information på denna sida om du inte tillfrågas av en <a href="http://www.phpbb.com/about/team/">officiell teammedlem</a> på supportforumen.',

	'NO_PHPINFO_AVAILABLE'	=> 'Information om din PHP-konfiguration kunde inte hittas. Phpinfo() har inaktiverats av säkerhetsskäl.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Detta listar alla handlingar som utförts av forumadministratörer. Du kan sortera efter användarnamn, datum, IP eller handling. Om du har behörighet så kan du också rensa ut individuella handlingar eller hela loggen.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Detta listar handlingar som forumet själv har utfört. Denna logg ger dig information som du kan använda för att lösa specifika problem, till exempel att e-post inte levereras. Du kan sortera efter användarnamn, datum, IP eller handling. Om du har behörighet så kan du också rensa ut individuella handlingar eller hela loggen.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Detta listar alla handlingar som utförts i kategorier, trådar och inlägg samt handlingar som utförts mot användare av moderatorer, inklusive bannlysningar. Du kan sortera efter användarnamn, datum, IP eller handling. Om du har behörighet så kan du också rensa ut individuella handlingar eller hela loggen.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Detta listar alla handlingar som utförts av användare eller mot användare (rapporter, varningar och användaranteckningar).',
	'ALL_ENTRIES'				=> 'Alla poster',

	'DISPLAY_LOG'	=> 'Visa poster nyare än',

	'NO_ENTRIES'	=> 'Inga loggposter under denna period.',

	'SORT_IP'		=> 'IP-adress',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Logghandling',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Tack för att du valt phpBB som din forumlösning. Denna ruta ger dig en snabb överblick över all möjlig statistik för ditt forum. Länkarna till vänster av denna ruta låter dig kontrollera alla aspekter av din forumupplevelse. Varje sida har egna instruktioner om hur man använder verktygen.',
	'ADMIN_LOG'					=> 'Loggade administratörshandlingar',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Detta ger en översikt över de fem senaste handlingarna utförda av forumadministratörer. En full kopia av loggen kan nås från menyn eller genom att följa länken nedan.',
	'AVATAR_DIR_SIZE'			=> 'Storlek på visningsbildkatalogen',

	'BOARD_STARTED'		=> 'Forumet startades',
	'BOARD_VERSION'		=> 'Forumversion',

	'DATABASE_SERVER_INFO'	=> 'Databasserver',
	'DATABASE_SIZE'			=> 'Databasstorlek',
	
	 // Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Överbelastningsfunktionen är inkorrekt konfigurerad.',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> måste vara endera 0 eller 4. Du kan kontrollera det nuvarande värdet på sidan med <samp>PHP-information</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent teckenkodning är inkorrekt konfigurerad',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> måste vara 0. Du kan kontrollera det nuvarande värdet på sidan med <samp>PHP-information</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input teckenkonvertering är inkorrekt konfigurerad',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> måste vara <samp>pass</samp>. Du kan kontrollera det nuvarande värdet på sidan med <samp>PHP-information</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output teckenkonvertering är inkorrekt konfigurerad',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> måste vara <samp>pass</samp>. Du kan kontrollera det nuvarande värdet på sidan med <samp>PHP-information</samp>.',

	'FILES_PER_DAY'		=> 'Bilagor per dag',
	'FORUM_STATS'		=> 'Forumstatistik',

	'GZIP_COMPRESSION'	=> 'GZip-komprimering',

	'NO_SEARCH_INDEX'	=> 'Den valda sökmetoden har inget sökindex.<br />Vänligen skapa index för “%1$s” i %2$ssearch index%3$s-sektionen.',
	'NOT_AVAILABLE'		=> 'Ej tillgängligt',
	'NUMBER_FILES'		=> 'Antal bilagor',
	'NUMBER_POSTS'		=> 'Antal inlägg',
	'NUMBER_TOPICS'		=> 'Antal trådar',
	'NUMBER_USERS'		=> 'Antal användare',
	'NUMBER_ORPHAN'		=> 'Föräldralösa bilagor',
	'PHP_VERSION_OLD'	=> 'php-versionen som är installerad på servern kommer inte att stödas i kommande versioner av phpBB. %sDetaljer%s',


	'POSTS_PER_DAY'		=> 'Inlägg per dag',

	'PURGE_CACHE'			=> 'Rensa cachen',
	'PURGE_CACHE_CONFIRM'	=> 'Är du säker på att du vill rensa cachen?',
	'PURGE_CACHE_EXPLAIN'	=> 'Rensar allt cacherelaterat, detta inkluderar alla cachade mallfiler och frågor.',
	'PURGE_CACHE_SUCCESS'	=> 'Cachen är nu tömd.',
	'PURGE_SESSIONS'			=> 'Rensa sessioner',
	'PURGE_SESSIONS_CONFIRM'	=> 'Är du säker på att du vill rensa alla sessioner?',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Rensar alla sessioner. Detta loggar ut alla användare genom att tömma sessionstabellen.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sessionerna är nu tömda.',

	'RESET_DATE'					=> 'Ändra forumets startdatum till dagens datum.',
	'RESET_DATE_CONFIRM'			=> 'Är du säker på att du vill återställa forumets startdatum till idag?',
	'RESET_DATE_SUCCESS'			=> 'Forumets startdatum återställt',
	'RESET_ONLINE'					=> 'Återställ flest användare online samtidigt',
	'RESET_ONLINE_CONFIRM'			=> 'Är du säker på att du vill återställa räknaren för flest användare online samtidigt?',
	'RESET_ONLINE_SUCCESS'				=> 'Flest online återställt',
	'RESYNC_POSTCOUNTS'				=> 'Synkronisera inläggsräknare',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Endast existerande inlägg kommer att tas med i beräkningen. Rensade inlägg kommer inte räknas.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Är du säker på att du vill synkronisera inläggsräknare?',
	'RESYNC_POSTCOUNTS_SUCCESS'		=> 'Omsynkronisera inläggsräknaren',
	'RESYNC_POST_MARKING'			=> 'Synkronisera prickade trådar',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Är du säker på att du vill synkronisera prickade trådar?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Avmarkerar först alla trådar och markerar sedan om alla trådar som varit aktiva under de senaste sex månaderna.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Omsynkronisera alla markerade trådar',
	'RESYNC_STATS'					=> 'Synkronisera statistiken',
	'RESYNC_STATS_CONFIRM'			=> 'Är du säker på att du vill synkronisera statistiken?',
	'RESYNC_STATS_EXPLAIN'			=> 'Räknar om det totala antalet inlägg, trådar, användare och filer.',
	'RESYNC_STATS_SUCCESS'			=> 'Omsynkroniserad statistik',
	'RUN'							=> 'Kör nu',

	'STATISTIC'					=> 'Statistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synkronisera eller återställ statistik',
	'TIMEZONE_INVALID'	=> 'Felaktig tidzon.',
	'TIMEZONE_SELECTED'	=> '(vald)',

	'TOPICS_PER_DAY'	=> 'Trådar per dag',

	'UPLOAD_DIR_SIZE'	=> 'Storlek på bifogade filer',
	'USERS_PER_DAY'		=> 'Användare per dag',

	'VALUE'					=> 'Värde',
	'VERSIONCHECK_FAIL'			=> 'Kunde inte hämta information omn senaste version.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Kontrollera version igen',
	'VIEW_ADMIN_LOG'		=> 'Visa administrationsloggen',
	'VIEW_INACTIVE_USERS'	=> 'Visa inaktiverade användare',

	'WELCOME_PHPBB'			=> 'Välkommen till phpBB',
	'WRITABLE_CONFIG'		=> 'Din konfigurationsfil (config.php) är för tillfället skrivbar för alla. Vi uppmanar dig starkt att ändra rättigheterna till 640 eller åtminstone 644.',

));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inaktiveringsdatum',
	'INACTIVE_REASON'				=> 'Anledning',
	'INACTIVE_REASON_MANUAL'		=> 'Kontot inaktiverat av administratör',
	'INACTIVE_REASON_PROFILE'		=> 'Ändrade profilinställningar',
	'INACTIVE_REASON_REGISTER'		=> 'Nyligen registrerat konto',
	'INACTIVE_REASON_REMIND'		=> 'Påtvingad återaktivering',
	'INACTIVE_REASON_UNKNOWN'		=> 'Okänt',
	'INACTIVE_USERS'				=> 'Inaktiverade användare',
	'INACTIVE_USERS_EXPLAIN'		=> 'Detta är en lista över användare som har registrerat sig men vars konton är inaktiverade. Du kan om du vill aktivera, ta bort eller påminna (genom e-post) dessa användare.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Detta är en lista över de 10 senast registrerade användarna med inaktiverade konton. Konton är inaktiva endera pga att kontoaktivering är aktiverat i inställningarna för användarregistrering och dessa konton ej ännu har aktiverats eller för att dessa konton har inaktiverats. En fullständig lista finns tillgänglig via menyn eller via länken nedan där du om du vill kan aktivera, ta bort eller påminna (genom att sända e-post) dessa användare.',

	'NO_INACTIVE_USERS'	=> 'Inga inaktiverade användare',

	'SORT_INACTIVE'		=> 'Inaktiveringsdatum',
	'SORT_LAST_VISIT'	=> 'Senaste besöket',
	'SORT_REASON'		=> 'Anledning',
	'SORT_REG_DATE'		=> 'Registreringsdatum',
	'SORT_LAST_REMINDER'=> 'Senast påmind',
	'SORT_REMINDER'		=> 'Påminnelse sänd',

	'USER_IS_INACTIVE'		=> 'Användaren är inaktiverad',
));
// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Hjälp till att göra phpBB bättre genom att sända serverinformation och foruminställingar till phpBB för statistisk analys. All information som kan användas för att känna igen dig eller din webbsida har tagits bort. Datan är helt <strong>anonym</strong>. Vi baserar beslut om kommande versioner på denna statistik. Statistiken samlas och offentliggörs. Denna data delas också med projektet PHP, dvs. språket, som phpBB är skrivet i.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Använd knappen under för att förhandsgranska det du sänt in.',
	'DONT_SEND_STATISTICS'		=> 'Jag vill inte sända information till phpBB. Ta mig tillbaka till första sidan i administrationspanelen.',
	'GO_ACP_MAIN'				=> 'Ta mig tillbaka till första sidan i administrationspanelen.',
	'HIDE_STATISTICS'			=> 'Göm detaljer',
	'SEND_STATISTICS'			=> 'Sänd in statistik för analys',
	'SHOW_STATISTICS'			=> 'Visa detaljer',
	'THANKS_SEND_STATISTICS'	=> 'Tack för att du skickade in dina uppgifter.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Lade till eller ändrade användarens användarbehörigheter</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Lade till eller ändrade gruppers användarbehörigheter</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Lade till eller ändrade användares globala moderationsbehörigheter</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Lade till eller ändrade gruppers globala moderationsbehörigheter</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Lade till eller ändrade användares administratörsbehörigheter</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Lade till eller ändrade gruppers administratörsbehörigheter</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Lade till eller ändrade administratörer</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Lade till eller ändrade globala moderatorer</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Lade till eller ändrade användares kategoriåtkomst</strong> för %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Lade till eller ändrade användares kategorimoderatorstatus</strong> för %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Lade till eller ändrade gruppers kategoriåtkomst</strong> för %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Lade till eller ändrade gruppers kategorimoderatorstatus</strong> för %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Lade till eller ändrade moderatorer</strong> för %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Lade till eller ändrade kategoribehörigheter</strong> för %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Tog bort administratörer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Tog bort globala moderatorer</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Tog bort moderatorer</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Tog bort användar/gruppkategoribehörigheter</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Behörigheter överförda från</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Egna behörigheter återställda efter att ha använt behörigheterna från</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Misslyckad administrationsinloggning</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Lyckad administrationsinloggning</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Tog bort användarbilagor</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Lade till eller ändrade bilagefiltyp</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Tog bort bilagefiltyp</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Uppdaterade bilagefiltyp</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Lade till filtypsgrupp</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Ändrade filtypsgrupp</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Tog bort filtypsgrupp</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Föräldralös fil uppladdad till inlägg</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Föräldralösa filer togs bort</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Undantog användare från bannlysning</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Undantog IP från bannlysning</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Undantog e-postadressen från bannlysning</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Bannlyste användare</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Bannlyste IP</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Bannlyste e-postadress</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Upphävde bannlysning av användare</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Upphävde bannlysning av IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Upphävde bannlysning av e-postadress</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Lade till ny BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Redigerade BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Tog bort BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Ny robot lades till</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Tog bort robot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existerande robot uppdaterades</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Rensade administrationsloggen</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Rensade felloggen</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Rensade moderatorloggen</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Rensade användarlogg</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Rensade användarloggar</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Ändrade bilageinställningar</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Ändrade autentiseringsinställningar</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Ändrade inställningar för visningsbilder</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Ändrade cookieinställningar</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Ändrade e-postinställningar</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Ändrade forumfunktioner</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Ändrade belastningsinställningar</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Ändrade inställningar för personliga meddelanden</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Ändrade inläggsinställningar</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Ändrade inställningar för användarregistrering</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Ändrade sökinställningar</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Ändrade flödesinställningar</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Ändrade säkerhetsinställningar</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Ändrade serverinställningar</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Ändrade foruminställningar</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Ändrade signaturinställningar</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Ändrade inställningar för antispam-uppgift</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Godkände tråd</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Användare knuffade upp tråd</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Tog bort inlägget “%1$s” skrivet utav â€œ%2$sâ€ med följande orsak</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Tog bort skuggtråd</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Tog bort tråd “%1$s” skriven av “%2$s” på grund utav följande orsak</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Kopierade tråd</strong><br />» från %s',
	'LOG_LOCK'					=> '<strong>Låste tråd</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Låste inlägg</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Sammanfogade inlägg</strong> till tråd<br />» %s',
	'LOG_MOVE'					=> '<strong>Flyttade tråd</strong><br />» från %1$s till %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Stängde rapport av pm</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Raderade rapport av pm</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Godkände inlägg</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Avslog inlägg “%1$s” skriven utav “%3$s” med följande anledning</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Redigerade inlägg “%1$s” skrivet av â€œ%2$sâ€ med följande orsak</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Återställda inlägg</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Stängde rapport</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Tog bort rapport</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Återställda inlägg “%1$s” skrivna utav</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Mjkukborttagna inlägget “%1$s” skrivet utav “%2$s” på grund utav följande orsak</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Mjukborttagen tråd “%1$s” skriven utav “%2$s” på grund utav följande orsak</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Flyttade delade inlägg</strong><br />» till %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Delade inlägg</strong><br />» från %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Godkände tråd</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Återställda trådar</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Avslog tråd “%1$s” skriven utav “%3$s” med följande anledning</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Synkroniserade trådräknare</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Ändrade trådtyp</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Låste upp tråd</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Låste upp inlägg</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Lade till förbjudet användarnamn</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Tog bort förbjudet användarnamn</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Säkerhetskopierade databas</strong>',
 	'LOG_DB_DELETE'			=> '<strong>Tog bort databassäkerhetskopia</strong>',
 	'LOG_DB_RESTORE'		=> '<strong>Återställde databassäkerhetskopia</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Undantog IP/värdnamn från nerladdningslista</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Lade till IP/värdnamn till nerladdningslistan</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Tog bort IP/värdnamn från nerladdningslistan</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabberfel</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-postfel</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Skapade ny kategori</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Kopierade kategoribehörigheter</strong> från %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Tog bort kategori</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Tog bort kategori och underkategorier</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Tog bort kategori och flyttade underkategorier</strong> till %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Tog bort kategori och flyttade inlägg</strong> till %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Tog bort kategori och underkategorier, flyttade inlägg</strong> till %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Tog bort kategori, flyttade inlägg</strong> till %1$s <strong>och underkategorier</strong> till %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Tog bort kategori och inlägg</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Tog bort kategori, inlägg och underkategorier</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Tog bort kategori och inlägg, flyttade underkategorier</strong> till %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Ändrade kategoridetaljer</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Flyttade kategori</strong> %1$s <strong>under</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Flyttade kategori</strong> %1$s <strong>ovanför</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Synkroniserade kategori</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Ett allmänt fel uppstod</strong>: %1$s <br />» %2$s',
	'LOG_GROUP_CREATED'		=> '<strong>Ny användargrupp skapades</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Gruppen “%1$s” gjordes till standardgrupp för medlemmar</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Användargrupp togs bort</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Ledare avsades ledarskap i användargrupp</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Medlemmar befordrades till ledare i användargrupp</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Medlemmar togs bort från användargrupp</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Användargruppdetaljer uppdaterades</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Lade till nya ledare för användargrupp</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Lade till nya medlemmar till användargrupp</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Användare godkändes till användargrupp</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Användare ansökte om medlemskap i användargrupp “%1$s” och väntar på att bli godkänd</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Ett fel uppstod då en bild skulle skapas</strong><br />» Fel i %1$s på rad %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktiverade inaktiverade användare</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Tog bort inaktiverade användare</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Skickade påminnelse via e-post till alla inaktiverade användare</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konverterade från %1$s till phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installerade phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Kontroll av sessions IP/webbläsare/X_FORWARDED_FOR misslyckades</strong><br />»Användar-IP “<em>%1$s</em>” kontrollerat mot sessions-IP “<em>%2$s</em>”, användarens webbläsarsträng “<em>%3$s</em>” kontrollerad mot sessionens webbläsarsträng “<em>%4$s</em>” och användarens X_FORWARDED_FOR sträng “<em>%5$s</em>” kontrollerad mot sessionens X_FORWARDED_FOR sträng “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabberkonto ändrat</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabberlösenord ändrat</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabberkonto registrerat</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabberinställningar ändrade</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Tog bort språkpaket</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installerade språkpaket</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Uppdaterade språkpaketsdetaljer</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Ersatte språkfil</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Skickade språkfil och placerade den i store-mappen</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Skickade massutskick</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Ändrade författare i tråd “%1$s”</strong><br />» från %2$s till %3$s',

 	'LOG_MODULE_DISABLE'	=> '<strong>Modul inaktiverad</strong><br />» %s',
 	'LOG_MODULE_ENABLE'		=> '<strong>Modul aktiverad</strong><br />» %s',
 	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul nerflyttad</strong><br />» %1$s nedanför %2$s',
 	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul uppflyttad</strong><br />» %1$s ovanför %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul borttagen</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul tillagd</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul ändrad</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Administrationsroll tillagd</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Administrationsroll ändrad</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Administrationsroll borttagen</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Kategoriroll tillagd</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Kategoriroll ändrad</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Kategoriroll borttagen</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderatorroll tillagd</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderatorroll ändrad</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderatorroll borttagen</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Användarroll tillagd</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Användarroll ändrad</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Användarroll borttagen</strong><br />» %s',
	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Kunde inte öppna %1$s för förfining, kontrollera rättigheter.</strong><br />Undantag: %2$s<br />Spår: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profilfält aktiverat</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profilfält tillagt</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profilfält inaktiverat</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profilfält ändrat</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profilfält borttaget</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Rensade kategorier</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-rensade kategorier</strong><br />» %s',
	'LOG_PRUNE_SHADOW'			=> '<strong>Auto-pruned shadow topics</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Användare inaktiverade</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Användare rensade och inlägg borttagna</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Användare rensade och inlägg behållna</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Rensade cachen</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Rensade sessioner</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Lade till ny titel</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Tog bort titel</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Uppdaterade titel</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Lade till rapport/avslagsanledning</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Tog bort rapport/avslagsanledning</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Uppdaterade rapport/avslagsanledning</strong><br />» %s',
	'LOG_REFERER_INVALID'      => '<strong>Hänvisningarkontroll misslyckades</strong><br />Â»Hänvisare var â€œ<em>%1$s</em>â€. Förfrågningen nekades och sessionen dödades.',

	'LOG_RESET_DATE'			=> '<strong>Forumets startdatum återställt</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Räknaren för flest användare online samtidigt återställd</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Statistiken för filerna är omsynkroniserad</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Användares inläggsräknare synkroniserade</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Prickade trådar synkroniserades</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Inläggs-, tråd- och användarstatistik synkroniserades</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Skapade sökindex för</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Tog bort sökindex för</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Lade till ny stil</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Tog bort stil</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Ändrade stil</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exporterade stil</strong><br />» %s',
	// @deprecated 3.1

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Lade till ny malluppsättning till databasen</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Lade till ny malluppsättning till filsystemet</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Tog bort cachade versioner av mallfiler i malluppsättningen <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Tog bort malluppsättning</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Ändrade malluppsättning <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Ändrade malluppsättningsdetaljer</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exporterade malluppsättning</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Uppdaterade malluppsättning</strong><br />» %s',
	// @deprecated 3.1

	'LOG_THEME_ADD_DB'			=> '<strong>Lade till nytt tema till databasen</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Lade till nytt tema till filsystemet</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema togs bort</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Ändrade temadetaljer</strong><br />» %s',
 	'LOG_THEME_EDIT'			=> '<strong>Ändrade tema <em>%1$s</em></strong>',
 	'LOG_THEME_EDIT_FILE'		=> '<strong>Ändrade tema <em>%1$s</em></strong><br />» Redigerade fil <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exporterade tema</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Uppdaterade tema</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Uppdaterade databasen från version %1$s till version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Uppdaterade phpBB från version %1$s till version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Användaren aktiverades</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Bannlyste användare via användarhanteringen</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Bannlyste IP-adress via användarhanteringen</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Bannlyste e-postadress via användarhanteringen</strong> med anledningen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Tog bort användare</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Tog bort alla användarens bifogade filer</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Tog bort användarens visningsbild</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Tömde utkorgen</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Tog bort alla inlägg gjorda av användaren</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Tog bort användarens signatur</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Användaren inaktiverades</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Flyttade användarens inlägg</strong><br />» inlägg av “%1$s” till kategori “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Bytte användarens lösenord</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Påtvingade återaktivering av användarkonto</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Tog bort markeringen “Ny medlem” för användare</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Användaren “%1$s” bytte e-postadress</strong><br />» från “%2$s” till “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Bytte användarnamn</strong><br />» från “%1$s” till “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Uppdaterade användardetaljer</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Användaren aktiverade sitt konto</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Användaren tog bort sin visningsbild</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Användaren tog bort sin signatur</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Lade till användaranteckning</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Post tillagd:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Användaren inaktiverade sitt konto</strong>',
	'LOG_USER_LOCK'				=> '<strong>Användare låste egen tråd</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Flyttade alla inlägg till kategori</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Påtvingade återaktivering av användarkonto</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Användare låste upp egen tråd</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Lade till användarvarning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Följande varning utfärdades mot denna användare</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Användare bytte standardgrupp</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Användare avsades ledarskap i grupp</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Användare gick med i grupp</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Användare gick med i gruppen och måste godkännas</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Användare lämnade gruppen</strong><br />» %s',
	
	'LOG_WARNING_DELETED'		=> '<strong>Tog bort användarvarning</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Tog användarvarning</strong><br />» %1$s',
		2 => '<strong>Tog bort %2$d användarvarningar</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Tog bort alla användarvarningar</strong><br />» %1$s',

	'LOG_WORD_ADD'			=> '<strong>Lade till ordcensurering</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Tog bort ordcensurering</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Ändrade ordcensurering</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Tillägg är aktiverade</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Tillägg är inaktiverade</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Tilläggets data är raderat</strong><br />» %s',
));
