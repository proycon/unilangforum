<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ACP_ADMINISTRATORS'		=> 'Beheerders',
	'ACP_ADMIN_LOGS'			=> 'Beheerderslog',
	'ACP_ADMIN_ROLES'			=> 'Beheerdersrollen',
	'ACP_ATTACHMENTS'			=> 'Bijlagen',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Bijlageninstellingen',
	'ACP_AUTH_SETTINGS'			=> 'Authenticatie',
	'ACP_AUTOMATION'			=> 'Automatisering',
	'ACP_AVATAR_SETTINGS'		=> 'Avatarinstellingen',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Verbannen',
	'ACP_BAN_EMAILS'			=> 'Verban e-mails',
	'ACP_BAN_IPS'				=> 'Verban IPs',
	'ACP_BAN_USERNAMES'			=> 'Verban gebruikers',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Foruminstellingen',
	'ACP_BOARD_FEATURES'		=> 'Forumfuncties',
	'ACP_BOARD_MANAGEMENT'		=> 'Forumbeheer',
	'ACP_BOARD_SETTINGS'		=> 'Foruminstellingen',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Aanpassingen',
	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> 'Extensies',
	'ACP_CAT_FORUMS'			=> 'Forums',
	'ACP_CAT_GENERAL'			=> 'Algemeen',
	'ACP_CAT_MAINTENANCE'		=> 'Onderhoud',
	'ACP_CAT_PERMISSIONS'		=> 'Permissies',
	'ACP_CAT_POSTING'			=> 'Berichten',
	'ACP_CAT_STYLES'			=> 'Stijlen',
	'ACP_CAT_SYSTEM'			=> 'Systeem',
	'ACP_CAT_USERGROUP'			=> 'Gebruikers en groepen',
	'ACP_CAT_USERS'				=> 'Gebruikers',
	'ACP_CLIENT_COMMUNICATION'	=> 'Cliënt communicatie',
	'ACP_COOKIE_SETTINGS'		=> 'Cookieinstellingen',
	'ACP_CONTACT'				=> 'Contactpagina',
	'ACP_CONTACT_SETTINGS'		=> 'Contactpagina-instellingen',
	'ACP_CRITICAL_LOGS'			=> 'Foutenlog',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Aangepaste profielvelden',

	'ACP_DATABASE'				=> 'Databasebeheer',
	'ACP_DISALLOW'				=> 'Niet toestaan',
	'ACP_DISALLOW_USERNAMES'	=> 'Niet toegestane gebruikersnamen',

	'ACP_EMAIL_SETTINGS'		=> 'E-mailinstellingen',
	'ACP_EXTENSION_GROUPS'		=> 'Beheer bijlage extensiegroepen',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Extensiebeheer',
	'ACP_EXTENSIONS'			=> 'Beheer extensies',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forum gebaseerde permissies',
	'ACP_FORUM_LOGS'				=> 'Forumlogs',
	'ACP_FORUM_MANAGEMENT'			=> 'Forumbeheer',
	'ACP_FORUM_MODERATORS'			=> 'Forummoderators',
	'ACP_FORUM_PERMISSIONS'			=> 'Forumpermissies',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopieer forumpermissies',
	'ACP_FORUM_ROLES'				=> 'Forumrollen',

	'ACP_GENERAL_CONFIGURATION'		=> 'Algemene instellingen',
	'ACP_GENERAL_TASKS'				=> 'Algemene taken',
	'ACP_GLOBAL_MODERATORS'			=> 'Globale moderators',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globale permissies',
	'ACP_GROUPS'					=> 'Groepen',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Groep forumpermissies',
	'ACP_GROUPS_MANAGE'				=> 'Beheer groepen',
	'ACP_GROUPS_MANAGEMENT'			=> 'Groepsbeheer',
	'ACP_GROUPS_PERMISSIONS'		=> 'Groepspermissies',
	'ACP_GROUPS_POSITION'			=> 'Beheer groepposities',

	'ACP_ICONS'					=> 'Onderwerpiconen',
	'ACP_ICONS_SMILIES'			=> 'Onderwerpiconen/smilies',
	'ACP_INACTIVE_USERS'		=> 'Inactieve gebruikers',
	'ACP_INDEX'					=> 'ACP index',

	'ACP_JABBER_SETTINGS'		=> 'Jabber-instellingen',

	'ACP_LANGUAGE'				=> 'Taalbeheer',
	'ACP_LANGUAGE_PACKS'		=> 'Taalpakketten',
	'ACP_LOAD_SETTINGS'			=> 'Laadinstellingen',
	'ACP_LOGGING'				=> 'Logging',

	'ACP_MAIN'					=> 'Beheerdersoverzicht',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Beheer bijlagen',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Hier kan je bestanden toegevoegd aan, bekijken van en verwijderen uit berichten en privéberichten.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Beheer bijlage-extensies',
	'ACP_MANAGE_FORUMS'			=> 'Beheer forums',
	'ACP_MANAGE_RANKS'			=> 'Beheer rangen',
	'ACP_MANAGE_REASONS'		=> 'Beheer melding/afkeurredenen',
	'ACP_MANAGE_USERS'			=> 'Beheer gebruikers',
	'ACP_MASS_EMAIL'			=> 'Massa e-mail',
	'ACP_MESSAGES'				=> 'Berichten',
	'ACP_MESSAGE_SETTINGS'		=> 'Privéberichten instellingen',
	'ACP_MODULE_MANAGEMENT'		=> 'Modulebeheer',
	'ACP_MOD_LOGS'				=> 'Moderatorlog',
	'ACP_MOD_ROLES'				=> 'Moderatorrollen',

	'ACP_NO_ITEMS'				=> 'Er zijn nog geen items.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Berichtloze bijlagen',

	'ACP_PERMISSIONS'			=> 'Permissies',
	'ACP_PERMISSION_MASKS'		=> 'Permissiemaskers',
	'ACP_PERMISSION_ROLES'		=> 'Permissierollen',
	'ACP_PERMISSION_TRACE'		=> 'Permissietracering',
	'ACP_PHP_INFO'				=> 'PHP-informatie',
	'ACP_POST_SETTINGS'			=> 'Berichtinstellingen',
	'ACP_PRUNE_FORUMS'			=> 'Opschonen forums',
	'ACP_PRUNE_USERS'			=> 'Opschonen gebruikers',
	'ACP_PRUNING'				=> 'Opschonen',

	'ACP_QUICK_ACCESS'			=> 'Snelle toegang',

	'ACP_RANKS'					=> 'Rangen',
	'ACP_REASONS'				=> 'Melding/afkeurredenen',
	'ACP_REGISTER_SETTINGS'		=> 'Gebruikersregistratie-instellingen',

	'ACP_RESTORE'				=> 'Herstellen',

	'ACP_FEED'					=> 'Feedbeheer',
	'ACP_FEED_SETTINGS'			=> 'Feedinstellingen',

	'ACP_SEARCH'				=> 'Zoekinstellingen',
	'ACP_SEARCH_INDEX'			=> 'Zoekindex',
	'ACP_SEARCH_SETTINGS'		=> 'Zoekinstellingen',

	'ACP_SECURITY_SETTINGS'		=> 'Beveiliginsinstellingen',
	'ACP_SEND_STATISTICS'		=> 'Verstuur statistische informatie',
	'ACP_SERVER_CONFIGURATION'	=> 'Serverinstellingen',
	'ACP_SERVER_SETTINGS'		=> 'Serverinstellingen',
	'ACP_SIGNATURE_SETTINGS'	=> 'Onderschriftinstellingen',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_MANAGEMENT'		=> 'Stijlbeheer',
	'ACP_STYLES'				=> 'Stijlen',
	'ACP_STYLES_CACHE'			=> 'Leeg Cache',
	'ACP_STYLES_INSTALL'		=> 'Installeer Stijlen',

	'ACP_SUBMIT_CHANGES'		=> 'Verstuur veranderingen',

	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Thema‘s',

	'ACP_UPDATE'					=> 'Bijwerken',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Gebruikers forumpermissies',
	'ACP_USERS_LOGS'				=> 'Gebruikerslogs',
	'ACP_USERS_PERMISSIONS'			=> 'Gebruikerspermissies',
	'ACP_USER_ATTACH'				=> 'Bijlagen',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Groepen',
	'ACP_USER_MANAGEMENT'			=> 'Gebruikersbeheer',
	'ACP_USER_OVERVIEW'				=> 'Overzicht',
	'ACP_USER_PERM'					=> 'Permissies',
	'ACP_USER_PREFS'				=> 'Voorkeuren',
	'ACP_USER_PROFILE'				=> 'Profiel',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Gebruikersrollen',
	'ACP_USER_SECURITY'				=> 'Gebruikersbeveiliging',
	'ACP_USER_SIG'					=> 'Onderschrift',
	'ACP_USER_WARNINGS'				=> 'Waarschuwingen',

	'ACP_VC_SETTINGS'					=> 'Spambotpreventie',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA voorbeeld',
	'ACP_VERSION_CHECK'					=> 'Controleer op updates',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Bekijk beheerderspermissies',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Bekijk forum moderatiepermissies',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Bekijk forum gebaseerde permissies',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Bekijk globale moderatiepermissies',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Bekijk gebruikers gebaseerde permissies',

	'ACP_WORDS'					=> 'Woordcensuur',

	'ACTION'				=> 'Actie',
	'ACTIONS'				=> 'Acties',
	'ACTIVATE'				=> 'Activeer',
	'ADD'					=> 'Toevoegen',
	'ADMIN'					=> 'Administratie',
	'ADMIN_INDEX'			=> 'Beheerdersoverzicht',
	'ADMIN_PANEL'			=> 'Beheerderspaneel',

	'ADM_LOGOUT'			=> 'Beheerderspaneel&nbsp;Afmelden',
	'ADM_LOGGED_OUT'		=> 'Succesvol afgemeld van het beheerderspaneel',

	'BACK'					=> 'Terug',

	'COLOUR_SWATCH'			=> 'Web-veilige kleurenpalet',
	'CONFIG_UPDATED'		=> 'Instellingen succesvol bijgewerkt.',
	'CRON_LOCK_ERROR'		=> 'Kan geen cron lock verkrijgen.',
	'CRON_NO_SUCH_TASK'		=> 'Kan cron taak “%s” niet vinden.',
	'CRON_NO_TASK'			=> 'Er hoeven geen cron taken te worden uitgevoerd.',
	'CRON_NO_TASKS'			=> 'Er kunnen geen cron taken worden gevonden.',

	'DEACTIVATE'				=> 'Deactiveer',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Het opgegeven pad “%s” bestaat niet.',
	'DIRECTORY_NOT_DIR'			=> 'Het opgegeven pad “%s” is geen map.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Het opgegeven pad “%s” is niet schrijfbaar.',
	'DISABLE'					=> 'Uitschakelen',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download als',
	'DOWNLOAD_STORE'			=> 'Download of bestand opslaan',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Je kan het bestand direct downloaden of het bewaren in je <samp>store/</samp> map.',
	'DOWNLOADS'					=> 'Downloads',

	'EDIT'					=> 'Wijzig',
	'ENABLE'				=> 'Inschakelen',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Opslaan',

	'GENERAL_OPTIONS'		=> 'Algemene opties',
	'GENERAL_SETTINGS'		=> 'Algemene instellingen',
	'GLOBAL_MASK'			=> 'Globale permissiemasker',

	'INSTALL'				=> 'Installeer',
	'IP'					=> 'Gebruikers-IP',
	'IP_HOSTNAME'			=> 'IP-adres of hostnamen',

	'LOAD_NOTIFICATIONS'			=> 'Notificaties weergeven',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Geef de notificatielijst weer op iedere pagina (meestal in de kop).',
	'LOGGED_IN_AS'			=> 'Je bent aangemeld als:',
	'LOGIN_ADMIN'			=> 'Om het forum te beheren moet je aangemeld zijn als een geverifieerde gebruiker.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Om het forum te beheren moet je jezelf verifiëren.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Je bent succesvol geverifieerd en je wordt nu doorgeleid naar het beheerderspaneel.',
	'LOOK_UP_FORUM'			=> 'Selecteer een forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Je kan meer dan één forum selecteren.',

	'MANAGE'				=> 'Beheer',
	'MENU_TOGGLE'			=> 'Verberg of geef het zijmenu weer',
	'MORE'					=> 'Meer',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Meer informatie »',
	'MOVE_DOWN'				=> 'Omlaag verplaatsen',
	'MOVE_UP'				=> 'Omhoog verplaatsen',

	'NOTIFY'				=> 'Notificatie',
	'NO_ADMIN'				=> 'Je hebt niet de juiste permissies om dit forum te beheren.',
	'NO_EMAILS_DEFINED'		=> 'Geen geldig e-mailadres gevonden.',
	'NO_FILES_TO_DELETE'	=> 'Bijlagen die je hebt geselecteerd om te verwijderen bestaan niet.',
	'NO_PASSWORD_SUPPLIED'	=> 'Je moet je wachtwoord invoeren om toegang te krijgen tot het beheerderspaneel.',

	'OFF'					=> 'Uit',
	'ON'					=> 'Aan',

	'PARSE_BBCODE'						=> 'BBCode gebruiken',
	'PARSE_SMILIES'						=> 'Smilies gebruiken',
	'PARSE_URLS'						=> 'Links gebruiken',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissies overgebracht',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Je hebt momenteel de permissies van %1$s. Je kan nu het forum bezoeken met de permissies van deze gebruiker, maar niet het beheerderspaneel omdat beheerderspermissies niet zijn overgebracht. Je kan <a href="%2$s"><strong>je eigen permissies terugzetten</strong></a> op elk moment.',
	'PROCEED_TO_ACP'					=> '%sGa door naar het beheerderspaneel%s',

	'REMIND'							=> 'Herinner',
	'RESYNC'							=> 'Synchroniseer',
	'RUNNING_TASK'                  => 'Taak %s uitvoeren.',

	'SELECT_ANONYMOUS'		=> 'Selecteer gastgebruiker',
	'SELECT_OPTION'			=> 'Selecteer optie',

	'SETTING_TOO_LOW'		=> 'De opgegeven waarde voor de instelling “%1$s” is te laag. De minimum geaccepteerde waarde is %2$d.',
	'SETTING_TOO_BIG'		=> 'De opgegeven waarde voor de instelling “%1$s” is te hoog. De maximum geaccepteerde waarde is %2$d.',
	'SETTING_TOO_LONG'		=> 'De opgegeven waarde voor de instelling “%1$s” is te lang. De maximum geaccepteerde lengte is %2$d.',
	'SETTING_TOO_SHORT'		=> 'De opgegeven waarde voor de instelling “%1$s” is te kort. De minimum geaccepteerde lengte is %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Toon alle operaties',

	'TASKS_NOT_READY'		=> 'Geen taken die klaar zijn:',
    'TASKS_READY'			=> 'Taken die klaar zijn:',
	'TOTAL_SIZE'      		=> 'Totale grootte',

	'UCP'					=> 'Gebruikerspaneel',
	'USERNAMES_EXPLAIN'		=> 'Plaats iedere gebruikersnaam op een aparte regel.',
	'USER_CONTROL_PANEL'	=> 'Gebruikerspaneel',

	'WARNING'				=> 'Waarschuwing',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Deze pagina geeft de informatie over de versie van PHP die geïnstalleerd is op deze server. Het bevat details van geladen modules, beschikbare variabelen en standaard instellingen. Deze informatie kan bruikbaar zijn bij het oplossen van problemen. Let op dat sommige hostingsbedrijven de informatie die hier wordt getoond limiteren voor beveiligingsredenen. Je wordt geadviseerd om geen details van deze pagina openbaar te maken tenzij er naar gevraagd wordt door een <a href="https://www.phpbb.com/about/team/">officiële phpBB.com teamlid</a>, <a href="http://www.phpbbservice.nl/forum/memberlist.php?mode=leaders">officiële phpBBservice.nl teamleden</a> of <a href="http://www.phpbb.nl/medewerkers">officiële phpbb.nl teamleden</a> op de supportforums.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informatie over je PHP-configuratie kan niet vastgesteld worden. Phpinfo() is uitgeschakeld vanwege beveiligingsredenen.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Dit toont alle acties die uitgevoerd worden door de beheerders. Je kan sorteren op gebruikersnaam, datum, IP of actie. Als je de juiste permissies hebt, kan je ook individuele acties opschonen of de hele log.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Dit toont alle acties die uitgevoerd worden door het forum zelf. Deze log geeft je de informatie waarmee je specifieke problemen kan oplossen, bijvoorbeeld niet afgeleverde e-mails. Je kan sorteren op gebruikersnaam, datum, IP of actie. Als je de juiste permissies hebt, kan je ook individuele acties opschonen of de hele log.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Dit toont alle acties die uitgevoerd worden op forums, onderwerpen en berichten alsmede acties die uitgevoerd worden op gebruikers door moderators, inclusief verbanningen. Je kan sorteren op gebruikersnaam, datum, IP of actie. Als je de juiste permissies hebt, kan je ook individuele acties opschonen of de hele log.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Dit toont alle acties die uitgevoerd worden door gebruikers of op gebruikers (meldingen, waarschuwingen en gebruikersnotities).',
	'ALL_ENTRIES'				=> 'Alle vermeldingen',

	'DISPLAY_LOG'	=> 'Toon vermeldingen van vorige',

	'NO_ENTRIES'	=> 'Geen logvermeldingen voor deze periode.',

	'SORT_IP'		=> 'IP-adres',
	'SORT_DATE'		=> 'Datum',
	'SORT_ACTION'	=> 'Logactie',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Dank je wel voor het kiezen van phpBB als je forumoplossing. Dit scherm geeft je een snel overzicht van alle verschillende statistieken van je forum. De links aan de linkerkant van dit scherm staan je toe om ieder aspect van je forum te controleren. Iedere pagina zal instructies hebben over hoe je die pagina kan gebruiken.',
	'ADMIN_LOG'					=> 'Gelogde beheerdersacties',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Dit geeft een overzicht van de laatste vijf acties die uitgevoerd zijn door de beheerders. Een volledig overzicht van de log kan bekijken worden via het juiste menu-item of via de link hieronder.',
	'AVATAR_DIR_SIZE'			=> 'Avatar mapgrootte',

	'BOARD_STARTED'		=> 'Forum gestart op',
	'BOARD_VERSION'		=> 'Forumversie',

	'DATABASE_SERVER_INFO'	=> 'Databaseserver',
	'DATABASE_SIZE'			=> 'Databasegrootte',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Functie overloading is niet goed ingesteld',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> moet ingesteld zijn op 0 of 4. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparante karakter encoding is niet goed ingesteld',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> moet ingesteld zijn op 0. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input karakter conversie is niet goed ingesteld',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> moet ingesteld zijn op <samp>pass</samp>. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output karakter conversie is niet goed ingesteld',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> moet ingesteld zijn op <samp>pass</samp>. Je kan de waarde die het momenteel is controleren op de <samp>PHP informatie</samp>-pagina.',

	'FILES_PER_DAY'		=> 'Bijlagen per dag',
	'FORUM_STATS'		=> 'Forumstatistieken',

	'GZIP_COMPRESSION'	=> 'GZip-compressie',

	'NO_SEARCH_INDEX'	=> 'De geselecteerde zoekachtergrond heeft geen zoekindex.<br />Maak de index aan voor “%1$s” in de %2$szoekindex%3$s sectie.',
	'NOT_AVAILABLE'		=> 'Niet beschikbaar',
	'NUMBER_FILES'		=> 'Aantal bijlagen',
	'NUMBER_POSTS'		=> 'Aantal berichten',
	'NUMBER_TOPICS'		=> 'Aantal onderwerpen',
	'NUMBER_USERS'		=> 'Aantal gebruikers',
	'NUMBER_ORPHAN'		=> 'Berichtloze bijlagen',

	'PHP_VERSION_OLD'	=> 'De versie van PHP op deze server zal binnenkort niet meer ondersteund worden door toekomstige versies van phpBB. %sDetails%s',

	'POSTS_PER_DAY'		=> 'Berichten per dag',

	'PURGE_CACHE'			=> 'Cache legen',
	'PURGE_CACHE_CONFIRM'	=> 'Weet je zeker dat je de cache wilt legen?',
	'PURGE_CACHE_EXPLAIN'	=> 'Leeg alle cache gerelateerde items, dit omvat alle gecachede templatebestanden of queries.',
	'PURGE_CACHE_SUCCESS'	=> 'Cache succesvol geleegd.',

	'PURGE_SESSIONS'			=> 'Alle sessies opschonen',
	'PURGE_SESSIONS_CONFIRM'	=> 'Weet je zeker dat je alle sessies wilt opschonen? Dit zal alle gebruikers afmelden.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Alle sessies opschonen. Dit zal alle gebruikers afmelden door het legen van de sessietabel.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sessies succesvol opgeschoond.',

	'RESET_DATE'					=> 'Opstartdatum van het forum resetten',
	'RESET_DATE_CONFIRM'			=> 'Weet je zeker dat je de opstartdatum van het forum wilt resetten?',
	'RESET_DATE_SUCCESS'			=> 'Opstartdatum van het forum gereset',
	'RESET_ONLINE'					=> 'De meeste gebruikers tegelijkertijd online resetten',
	'RESET_ONLINE_CONFIRM'			=> 'Weet je zeker dat je de meeste gebruikers tegelijkertijd online wilt resetten?',
	'RESET_ONLINE_SUCCESS'			=> 'Meeste gebruikers tegelijkertijd online gereset',
	'RESYNC_POSTCOUNTS'				=> 'Berichtentellers synchroniseren',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Alleen bestaande berichten worden meegenomen. Opgeschoonde berichten zullen niet geteld worden.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Weet je zeker dat je de berichtentellers wilt synchroniseren?',
	'RESYNC_POSTCOUNTS_SUCCESS'		=> 'Berichtentellers gesynchroniseerd',
	'RESYNC_POST_MARKING'			=> 'Gestipte onderwerpen synchroniseren',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Weet je zeker dat je de gestipte onderwerpen wilt synchroniseren?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Eerst worden alle onderwerpen ongemarkeerd, daarna worden onderwerpen die de afgelopen zes maanden activiteit hebben gehad opnieuw gemarkeerd.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Gestipte onderwerpen gesynchroniseerd',
	'RESYNC_STATS'					=> 'Statistieken synchroniseren',
	'RESYNC_STATS_CONFIRM'			=> 'Weet je zeker dat je de statistieken wilt synchroniseren?',
	'RESYNC_STATS_EXPLAIN'			=> 'Herberekend het aantal berichten, onderwerpen, gebruikers en bestanden.',
	'RESYNC_STATS_SUCCESS'			=> 'Statistieken gesynchroniseerd',
	'RUN'							=> 'Nu uitvoeren',

	'STATISTIC'					=> 'Statistieken',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synchroniseer of reset statistieken',

	'TIMEZONE_INVALID'	=> 'De tijdzone die je hebt geselecteerd is ongeldig.',
	'TIMEZONE_SELECTED'	=> '(momenteel geselecteerd)',
	'TOPICS_PER_DAY'	=> 'Onderwerpen per dag',

	'UPLOAD_DIR_SIZE'	=> 'Grootte van geplaatste bijlagen',
	'USERS_PER_DAY'		=> 'Gebruikers per dag',

	'VALUE'						=> 'Waarde',
	'VERSIONCHECK_FAIL'			=> 'Het verkrijgen van de laatste versie-informatie is mislukt.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Hercontroleer versie',
	'VIEW_ADMIN_LOG'			=> 'Bekijk beheerderslog',
	'VIEW_INACTIVE_USERS'		=> 'Bekijk inactieve gebruikers',

	'WELCOME_PHPBB'			=> 'Welkom bij phpBB',
	'WRITABLE_CONFIG'		=> 'Je config-bestand (config.php) is momenteel wereld-schrijfbaar. We bevelen sterk aan om de permissies te veranderen naar 640 of minstens naar 644 (bijvoorbeeld: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> (helaas geen nederlandse pagina beschikbaar) 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inactieve datum',
	'INACTIVE_REASON'				=> 'Reden',
	'INACTIVE_REASON_MANUAL'		=> 'Account gedeactiveerd door beheerder',
	'INACTIVE_REASON_PROFILE'		=> 'Profieldetails veranderd',
	'INACTIVE_REASON_REGISTER'		=> 'Nieuw geregistreerd account',
	'INACTIVE_REASON_REMIND'		=> 'Geforceerde gebruikersaccount heractivatie',
	'INACTIVE_REASON_UNKNOWN'		=> 'Onbekend',
	'INACTIVE_USERS'				=> 'Inactieve gebruikers',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dit is een lijst van gebruikers die zich geregistreerd hebben maar waarvan hun accounts inactief zijn. Je kan deze gebruikers activeren, verwijderen of herinneren (door het sturen van een e-mail) als je wilt.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Dit is een lijst van de laatste 10 geregistreerde gebruikers welke een inactieve account hebben. Accounts zijn inactief of zijn vanwege accountactivatie (ingeschakeld in gebruikersregistratie-instellingen) nog niet geactiveerd, of vanwege het feit dat deze accounts zijn gedeactiveerd. Een volledige lijst is beschikbaar door op de link hieronder te klikken en daar kan je deze gebruikers activeren, verwijderen of herinneren (door een e-mail te versturen) mocht je dat willen.',

	'NO_INACTIVE_USERS'	=> 'Geen inactieve gebruikers',

	'SORT_INACTIVE'		=> 'Inactieve datum',
	'SORT_LAST_VISIT'	=> 'Laatste bezoek',
	'SORT_REASON'		=> 'Reden',
	'SORT_REG_DATE'		=> 'Registratiedatum',
	'SORT_LAST_REMINDER'=> 'Laatste herinnering',
	'SORT_REMINDER'		=> 'Herinnering verstuurd',

	'USER_IS_INACTIVE'		=> 'Gebruiker is inactief',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Verstuur informatie over je server en foruminstellingen naar phpBB voor statistische analyse. Alle informatie dat je of je website kan identificeren is verwijderd - de data is compleet <strong>anoniem</strong>. We baseren beslissingen over de toekomstige phpBB versies op deze informatie. De statistieken zullen openbaar worden gemaakt. We delen ook deze data met het PHP-project, de programmeertaal waarin phpBB is geschreven.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Door gebruik te maken van de knop hieronder kan je bekijken welke variabelen verstuurd zullen worden.',
	'DONT_SEND_STATISTICS'		=> 'Ga terug naar de beheerderspaneel als je geen statistische informatie naar phpBB wilt versturen.',
	'GO_ACP_MAIN'				=> 'Ga naar de beheerderspaneel startpagina',
	'HIDE_STATISTICS'			=> 'Details verbergen',
	'SEND_STATISTICS'			=> 'Statistische informatie versturen',
	'SHOW_STATISTICS'			=> 'Details tonen',
	'THANKS_SEND_STATISTICS'	=> 'Dank je wel voor het versturen van je informatie.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Gebruikers gebruikersrechtenpermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Groeps gebruikerspermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Gebruikers globale moderatorpermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Groeps globale moderatorpermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Gebruikers beheerderspermissies toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Groeps beheerderspermissies toegevoegd of gewijzigd</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Beheerders toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Globale moderators toegevoegd of gewijzigd</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Gebruikers forumtoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Gebruikers forum-moderatortoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Groeps forumtoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Groeps forum-moderatortoegang toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderators toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Forumpermissies toegevoegd of gewijzigd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Beheerders verwijderd</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Globale moderators verwijderd</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderators verwijderd</strong> van %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Gebruiker/Groep forumpermissies verwijderd</strong> van %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissies overgebracht van</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Eigen permissies teruggezet na gebruik permissies van</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Mislukte beheerders aanmeldpoging</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Succesvolle beheerdersaanmelding</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Gebruikersbijlagen verwijderd</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Bijlage-extensie toegevoegd of gewijzigd</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Bijlage-extensie verwijderd</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Bijlage-extensie bijgewerkt</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Extensiegroep toegevoegd</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Extensiegroep gewijzigd</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Extensiegroep verwijderd</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Weesbestand geüpload naar bericht</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Weesbestanden verwijderd</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Gebruiker uitgesloten van verbanning</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP uitgesloten van verbanning</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mail uitgesloten van verbanning</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Gebruiker verbannen</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP verbannen</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail verbannen</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Niet meer verbannen gebruiker</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Niet meer verbannen IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Niet meer verbannen e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Nieuwe BBCode toegevoegd</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode gewijzigd</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode verwijderd</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Nieuwe bot toegevoegd</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot verwijderd</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Bestaande bot bijgewerkt</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Beheerderslog opgeschoond</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Foutenlog opgeschoond</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Moderatorlog opgschoong</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Gebruikerslog opgeschoond</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Gebruikersloggen opgeschoond</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Bijlageinstellingen aangepast</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Authenticatie-instellingen aangepast</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Avatarinstellingen aangepast</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Cookie-instellingen aangepast</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>E-mailinstellingen aangepast</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Forumfuncties aangepast</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Laadinstellingen aangepast</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Privéberichtinstellingen aangepast</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Berichtinstellingen aangepast</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Gebruikersregistratie-instellingen aangepast</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Syndicatie feeds-instellingen aangepast</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zoekinstellingen aangepast</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Beveiligingsinstellingen aangepast</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Serverinstellingen aangepast</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Foruminstellingen aangepast</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Onderschriftinstellingen aangepast</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Anti-spambotinstellingen aangepast</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Onderwerp goedgekeurd</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Gebruiker bumped onderwerp</strong><br />» %s', //hebben we nog een ander woord voor bumped?
	'LOG_DELETE_POST'			=> '<strong>Bericht “%1$s” verwijderd, geschreven door “%2$s”, om de volgende reden</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Schaduwonderwerp verwijderd</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Onderwerp “%1$s” verwijderd, geschreven door “%2$s”, om de volgende reden</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Onderwerp gekopieerd</strong><br />» van %s',
	'LOG_LOCK'					=> '<strong>Onderwerp gesloten</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Bericht gesloten</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Berichten samengevoegd</strong> in onderwerp<br />» %s',
	'LOG_MOVE'					=> '<strong>Onderwerp verplaatst</strong><br />» van %1$s naar %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Onderwerp verplaatst</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>PB-melding gesloten</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>PB-melding verwijderd</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Bericht goedgekeurd</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Bericht “%1$s” afgekeurd geschreven door “%3$s” met de volgende reden</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Bericht “%1$s” gewijzigd, gechreven door “%2$s”, om de volgende reden</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Bericht teruggehaald</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Melding gesloten</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Melding verwijderd</strong><br />» %s',
	'LOG_RESTORE_TOPIC'	        => '<strong>Onderwerp “%1$s” teruggehaald, geschreven door</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Bericht “%1$s” tijdelijk verwijderd, geschreven door “%2$s” om de volgende reden</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Onderwerp “%1$s” tijdelijk verwijderd, geschreven door “%2$s” om de volgende reden</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Afgesplitste berichten verplaatst</strong><br />» naar %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Berichten gesplitst</strong><br />» van %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Onderwerp goedgekeurd</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Onderwerp teruggehaald</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Onderwerp “%1$s” afgekeurd dat geschreven is door “%3$s” voor de volgende reden</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Onderwerptellers gesynchroniseerd</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Onderwerptype veranderd</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Onderwerp geopend</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Bericht geopend</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Niet toegestane gebruikersnaam toegevoegd</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Niet toegestane gebruikersnaam verwijderd</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database backup</strong>',
	'LOG_DB_DELETE'			=> '<strong>Database backup verwijderd</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Database backup teruggezet</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/hostnaam uitgesloten van downloadlijst</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP/hostnaam toegevoegd aan downloadlijst</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/hostnaam verwijderd van downloadlijst</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber-fout</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail fout</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Nieuw forum aangemaakt</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Forumpermissies gekopieerd</strong> van %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Forum verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Forum en zijn subforums verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Forum verwijderd en subforums verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Forum verwijderd en berichten verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Forum en subforums verwijderd, berichten verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Forum verwijderd, berichten verplaatst</strong> naar %1$s <strong>en subforums</strong> naar %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Forum en zijn berichten verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Forum en zijn berichten en subforums verwijderd</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Forum en zijn berichten verwijderd, subforums verplaatst</strong> naar %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Forumdetails gewijzigd</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Forum</strong> %1$s <strong>verplaatst onder</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Forum</strong> %1$s <strong>verplaatst boven</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Forum gesynchroniseerd</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Een algemene fout is opgetreden</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Nieuwe gebruikersgroep aangemaakt</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Groep “%1$s” is standaard gemaakt voor leden</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Gebruikersgroep verwijderd</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leiders gedegradeerd in gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Leden gepromoveerd in gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Leden verwijderd van gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Gebruikersgroep-details bijgewerkt</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Nieuwe leiders toegevoegd aan gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Nieuwe leden toegevoegd aan gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Gebruikers goedgekeurd in gebruikersgroep</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Gebruikers hebben lidmaatschap aangevraagd voor groep “%1$s” en moeten nog goedgekeurd worden</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Fout tijdens het aanmaken van een afbeelding</strong><br />» Fout in %1$s op regel %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Inactieve gebruikers geactiveerd</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Inactieve gebruikers verwijderd</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Herinnerings-e-mails verstuurd naar inactieve gebruikers</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>%1$s omgezet naar phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s geïnstalleerd</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sessie IP/browser/X_FORWARDED_FOR controle mislukt</strong><br />»Gebruikers-IP “<em>%1$s</em>” gecontroleerd met sessie-IP “<em>%2$s</em>”, gebruiker browser string “<em>%3$s</em>” gecontroleerd met sessie browser string “<em>%4$s</em>” en gebruiker X_FORWARDED_FOR string “<em>%5$s</em>” gecontroleerd met sessie X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber-account veranderd</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber-wachtwoord veranderd</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber-account geregistreerd</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber-instellingen veranderd</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Taalpakket verwijderd</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Taalpakket geïnstalleerd</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Taalpakket-details bijgewerkt</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Taalbestanden vervangen</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Taalbestand verstuurd en geplaatst in store-map</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Massa e-mail verstuurd</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Auteur veranderd in onderwerp “%1$s”</strong><br />» van %2$s naar %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module uitgeschakeld</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module ingeschakeld</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module omlaag verplaatst</strong><br />» %1$s onder %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module omhoog verplaatst</strong><br />» %1$s boven %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module verwijderd</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module toegevoegd</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module gewijzigd</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Beheerdersrol toegevoegd</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Beheerdersrol gewijzigd</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Beheerdersrol verwijderd</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forumrol toegevoegd</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forumrol gewijzigd</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forumrol verwijderd</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderatorrol toegevoegd</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderatorrol gewijzigd</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderatorrol verwijderd</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Gebruikersrol toegevoegd</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Gebruikersrol gewijzigd</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Gebruikersrol verwijderd</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Kan %1$s niet openen voor opschonen, controleer permissies.</strong><br />Uitzondering: %2$s<br />Tracering: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profielveld geactiveerd</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profielveld toegevoegd</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profielveld gedeactiveerd</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profielveld gewijzigd</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profielveld verwijderd</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Forums opgeschoond</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Forums automatisch opgeschoond</strong><br />» %s',
	'LOG_PRUNE_SHADOW'			=> '<strong>Automatisch schaduwonderwerpen opgeschoond</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Gebruikers gedeactiveerd</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Gebruikers opgeschoond en berichten verwijderd</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Gebruikers opgeschoond en berichten behouden</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Cache opgeschoond</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sessies opgeschoond</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Nieuwe rang toegevoegd</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rang verwijderd</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rang bijgewerkt</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Meldings-/afkeurreden toegevoegd</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Meldings-/afkeurreden verwijderd</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Meldings-/afkeurreden bijgewerkt</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Referentievalidatie mislukt</strong><br />»Referentie was “<em>%1$s</em>”. De aanvraag is afgewezen en de sessie gestopt.',
	'LOG_RESET_DATE'			=> '<strong>Forum opstartdatum gereset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Meeste gebruikers online gereset</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Bestandstatistieken gesynchroniseerd</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Gebruiker berichtentellers gesynchroniseerd</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Gestipte onderwerpen gesynchroniseerd</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Bericht, onderwerp en gebruikersstatistieken gesynchroniseerd</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Zoekindex aangemaakt voor</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Zoekindex verwijderd voor</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx-fout</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Nieuwe stijl toegevoegd</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Stijl verwijderd</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Stijl gewijzigd</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Stijl geëxporteerd</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Nieuwe templateset toegevoegd aan database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Nieuwe templateset toegevoegd aan bestandssysteem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Gecachede versies van templatebestanden in templateset verwijderd <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Templateset verwijderd</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Templateset gewijzigd <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Template-details gewijzigd</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Templateset geëxporteerd</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Templateset vernieuwd</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Nieuwe thema toegevoegd aan database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Nieuwe thema toegevoegd aan bestandssysteem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Thema verwijderd</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Thema-details gewijzigd</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Thema gewijzigd <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Thema gewijzigd <em>%1$s</em></strong><br />» Aangepaste bestand <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Thema geëxporteerd</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Thema vernieuwd</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Database bijgewerkt van versie %1$s naar versie %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB bijgewerkt van versie %1$s naar versie %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Gebruiker geactiveerd</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Gebruiker verbannen via gebruikersbeheer</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP verbannen via gebruikersbeheer</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail verbannen via gebruikersbeheer</strong> voor reden “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Gebruiker verwijderd</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Alle bijlagen verwijderd, gemaakt door de gebruiker</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Gebruikersavatar verwijderd</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Gebruikers-postvak Uit geleegd</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Alle berichten verwijderd, gemaakt door de gebruiker</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Gebruikersonderschrift verwijderd</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Gebruiker gedeactiveerd</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Gebruikersberichten verplaatst</strong><br />» berichten van “%1$s” naar forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Gebruikerswachtwoord veranderd</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Gebruikersaccount heractivatie geforceerd</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Nieuw geregistreerd vlag verwijderd van gebruiker</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Gebruiker “%1$s” heeft zijn e-mail gewijzigd</strong><br />» van “%2$s” naar “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Gebruikersnaam gewijzigd</strong><br />» van “%1$s” naar “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Gebruikersdetails bijgewerkt</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Gebruikersaccount geactiveerd</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Gebruikersavatar verwijderd</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Gebruikersonderschrift verwijderd</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Gebruikers-feedback toegevoegd</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Vermelding toegevoegd:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Gebruikersaccount gedeactiveerd</strong>',
	'LOG_USER_LOCK'				=> '<strong>Gebruiker heeft eigen onderwerp gesloten</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Alle berichten verplaatst naar forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Gebruikersaccount heractivatie geforceerd</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Gebruiker heeft eigen onderwerp geopend</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Gebruiker waarschuwing toegevoegd</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>De volgende waarschuwing is uitgegeven aan deze gebruiker</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Gebruiker standaardgroep veranderd</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Gebruiker gedegradeerd als leider van gebruikersgroep</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Gebruiker lid geworden van groep</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Gebruiker wilt lid worden van groep en moet goedgekeurd worden</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Gebruiker heeft lidmaatschap opgezegd van groep</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Gebruiker waarschuwing verwijderd</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Gebruikerswaarschuwing verwijderd</strong><br />» %1$s',
		2 => '<strong>%2$d gebruikerswaarschuwingen verwijderd</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),	
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Alle gebruiker waarschuwingen verwijderd</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Woordcensuur toegevoegd</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Woordcensuur verwijderd</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Woordcensuur gewijzigd</strong><br />» %s',
	
	'LOG_EXT_ENABLE'	=> '<strong>Extensie ingeschakeld</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Extensie uitgeschakeld</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Extensie gegevens verwijderd</strong><br />» %s',	
));
