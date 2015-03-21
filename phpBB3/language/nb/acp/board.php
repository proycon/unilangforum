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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Her kan du konfigurere de grunnleggende innstillingene for systemet, gi det et passende navn og en god beskrivelse, og blant annet angi verdier for tidssone og språk.',
	'BOARD_INDEX_TEXT'				=> 'Tekst for forumindeks',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Denne teksten vises for forumindeksen i systemets hierarkistreng. Hvis den ikke angis, brukes «Forumindeks» som standard.',
	'BOARD_STYLE'					=> 'Systemstil',
	'CUSTOM_DATEFORMAT'				=> 'Egendefinert…',
	'DEFAULT_DATE_FORMAT'			=> 'Datoformat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Datoformatet er det samme som i <code>date</code>-funksjonen i PHP.',
	'DEFAULT_LANGUAGE'				=> 'Standardspråk',
	'DEFAULT_STYLE'					=> 'Standardstil',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Standardstilen for nye brukere.',
	'DISABLE_BOARD'					=> 'Deaktiver systemet',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dette gjør systemet utilgjengelig for brukere som ikke er verken administratorer eller moderatorer. Du kan angi en kort melding (255 tegn) som vises, hvis du ønsker det.',
	'DISPLAY_LAST_SUBJECT'			=> 'Vis emnet for siste innlegg på forumlisten',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Emnet for siste innlegg vil bli vist i forumlisten med en hyperlenke til innlegget. Emner fra passordbeskyttede fora som brukeren ikke har tilgang til, vises ikke.',
	'GUEST_STYLE'					=> 'Gjestestil',
	'GUEST_STYLE_EXPLAIN'			=> 'Systemstilen for gjester.',
	'OVERRIDE_STYLE'				=> 'Overstyr brukerstil',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Erstatter brukerens (og gjesters) stil med den som er definert under «Standardstil».',
	'SITE_DESC'						=> 'Systembeskrivelse',
	'SITE_HOME_TEXT'				=> 'Tekst for forside',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Denne teksten vises som en lenke til systemets startside i hierarkistrengen. Hvis den ikke angis, brukes «Hjem» som standard.',
	'SITE_HOME_URL'					=> 'URL til nettsiden',
	'SITE_HOME_URL_EXPLAIN'			=> 'Hvis den er angitt, vil en lenke til denne URL-en foranstilles i hierarkistrengen, og systemets logo vil lenke til denne URL-en i stedet for forumindeksen. Det kreves en absolutt URL, f.eks. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Systemnavn',
	'SYSTEM_TIMEZONE'				=> 'Gjestetidssone',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Tidssone for visning av klokkeslett til brukere som ikke er innlogget (gjester, boter). Innloggende brukere angi tidssone under registreringen og kan endre dette i brukerkontrollpanelet.',
	'WARNINGS_EXPIRE'				=> 'Advarselsvarighet',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Antall dager som vil gå før en advarsel automatisk utløper og fjernes fra en brukes historikk. Hvis dette angis til 0, blir advarsler permanente.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Her kan du aktivere/deaktivere flere funksjoner på systemet.',

	'ALLOW_ATTACHMENTS'			=> 'Tillat vedlegg',
	'ALLOW_BIRTHDAYS'			=> 'Tillat fødselsdager',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Tillat at fødselsdag angis og at alder vises i profiler. Merk at fødselsdagslisten på forumindeksen styres av en separat innlastingsinnstilling.',
	'ALLOW_BOOKMARKS'			=> 'Tillat bokmerking av emner',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Brukeren kan lagre personlige bokmerker.',
	'ALLOW_BBCODE'				=> 'Tillat BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Tillat at det abonneres på fora',
	'ALLOW_NAME_CHANGE'			=> 'Tillat endring av brukernavn',
	'ALLOW_NO_CENSORS'			=> 'Tillat deaktivering av ordsensur',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Brukere kan velge å deaktivere automatisk ordsensur for innlegg og private meldinger.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Tillat vedlegg i private meldinger',
	'ALLOW_PM_REPORT'			=> 'Tillat at brukere rapporterer private meldinger',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Hvis denne innstillingen er aktivert, har brukerne mulighet til å rapportere private meldinger de mottar eller sender, til systemets moderatorer. Disse private meldingene vil da bli synlige i moderatorkontrollpanelet.',
	'ALLOW_QUICK_REPLY'			=> 'Tillat hurtigsvar',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Dette gjør det mulig å deaktivere hurtigsvar på hele systemet. Når aktivert, vil forumspesifikke innstillinger brukes til å fastslå om hurtigsvaret vises i enkeltfora.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Send og aktiver hurtigsvar i alle fora',
	'ALLOW_SIG'					=> 'Tillat signaturer',
	'ALLOW_SIG_BBCODE'			=> 'Tillat BBCode i brukersignaturer',
	'ALLOW_SIG_FLASH'			=> 'Tillat bruk av BBCode-taggen <code>[FLASH]</code> i brukersignaturer',
	'ALLOW_SIG_IMG'				=> 'Tillat bruk av BBCode-taggen <code>[IMG]</code> i brukersignaturer',
	'ALLOW_SIG_LINKS'			=> 'Tillat bruk av lenker i brukersignaturer',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Hvis ikke tillatt, vil BBCode-taggen <code>[URL]</code> og automatiske/magiske URL-er bli deaktivert.',
	'ALLOW_SIG_SMILIES'			=> 'Tillat bruk av smilefjes i brukersignaturer',
	'ALLOW_SMILIES'				=> 'Tillat smilefjes',
	'ALLOW_TOPIC_NOTIFY'		=> 'Tillat abonnering på emner',
	'BOARD_PM'					=> 'Private meldinger',
	'BOARD_PM_EXPLAIN'			=> 'Aktiver private meldinger for alle brukere.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarer ar vanligvis små, unike bilder som en bruker kan knytte til seg selv. Avhengig av stilen, vises de vanligvis under brukernavnet når man ser på emner. Her kan du bestemme hvordan brukere kan definere avatarene sine. Merk at for å kunne laste opp avatarer, må du ha opprettet mappen du angir nedenfor, og sikre at den kan skrives til av webserveren. Merk også at begrensning av filstørrelse bare gjelder for opplastede avatarer, de gjelder ikke for lenker til bilder andre steder.',

	'ALLOW_AVATARS'					=> 'Aktiver avatarer',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Tillat bruk av avatarer generelt.<br />Hvis du deaktiverer avatarer generelt eller avatarer av en viss type, vil ikke de deaktiverte avatarene lenger vises på systemet, men brukerne vil fortsatt kunne laste ned sin egen avatar i brukerkontrollpanelet.',
	'ALLOW_GRAVATAR'				=> 'Aktiver Gravatar-avatarer',
	'ALLOW_LOCAL'					=> 'Aktiver galleriavatarer',
	'ALLOW_REMOTE'					=> 'Aktiver eksterne avatarer',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarer som det lenkes til et annet nettsted for.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Aktiver opplasting av ekstern avatar',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Tillat opplasting av avatarer fra andre nettsteder.',
	'ALLOW_UPLOAD'					=> 'Aktiver avataropplasting',
	'AVATAR_GALLERY_PATH'			=> 'Bane til avatargalleri',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Bane under phpBB-rotmappen til forhåndslastede bilder, f.eks. <samp>images/avatars/gallery</samp>.<br />To punktumer, som <samp>../</samp>, fjernes av sikkerhetsårsaker fra banen.',
	'AVATAR_STORAGE_PATH'			=> 'Bane til avatarlagring',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Banen under phpBB-rotmappen, f.eks. <samp>images/avatars/upload</samp>.<br />Avataropplasting <strong>vil ikke være tilgjengelig</strong> hvis banen ikke kan skrives til.<br />To punktumer, som <samp>../</samp>, fjernes av sikkerhetsårsaker fra banen.',
	'MAX_AVATAR_SIZE'				=> 'Maksimal avatarstørrelse',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Bredde x høyde i piksler.',
	'MAX_FILESIZE'					=> 'Maksimal avatarfilstørrelse',
	'MAX_FILESIZE_EXPLAIN'			=> 'For opplastede avatarfiler. Hvis denne verdien er 0, begrenses den opplastede filstørrelsen bare av PHP-konfigurasjonen.',
	'MIN_AVATAR_SIZE'				=> 'Minste avatarstørrelse',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Bredde x høyde i piksler.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Her kan du angi alle standardinnstillinger for private meldinger.',

	'ALLOW_BBCODE_PM'			=> 'Tillat BBCode i private meldinger',
	'ALLOW_FLASH_PM'			=> 'Tillat bruk av BBCode-taggen <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Merk at muligheten til å bruke Flash i private meldinger, også avhenger av tillatelsene, selv om det er aktivert her.',
	'ALLOW_FORWARD_PM'			=> 'Tillat videresending av private meldinger',
	'ALLOW_IMG_PM'				=> 'Tillat bruk av BBCode-taggen <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Tillat sending av private meldinger til flere brukere og grupper',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Sending til grupper kan justeres per gruppe fra innstillingssiden for grupper.',
	'ALLOW_PRINT_PM'			=> 'Tillat utskriftsvisning i private meldinger',
	'ALLOW_QUOTE_PM'			=> 'Tillat sitater i private meldinger',
	'ALLOW_SIG_PM'				=> 'Tillat signatur i private meldinger',
	'ALLOW_SMILIES_PM'			=> 'Tillat smilefjes i private meldinger',
	'BOXES_LIMIT'				=> 'Maksimalt antall private meldinger per boks',
	'BOXES_LIMIT_EXPLAIN'		=> 'Brukere kan ikke motta flere meldinger enn dette i hver av sine private meldingsbokser. Angi dette til 0 for å tillate ubegrenset antall meldinger.',
	'BOXES_MAX'					=> 'Maksimalt antall private meldingsmapper',
	'BOXES_MAX_EXPLAIN'			=> 'Som standard kan brukere opprette så mange personlige mapper som dette til private meldinger.',
	'ENABLE_PM_ICONS'			=> 'Aktiver bruk av emneikoner i private meldinger',
	'FULL_FOLDER_ACTION'		=> 'Standardhandling ved full mappe',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Standardhandling når en brukers mappe er full, forutsatt at brukerens mappehandling, hvis den er angitt, ikke er aktuell. Det eneste unntaket er for mappen «Sendte meldinger», hvor standardhandling alltid er å slette gamle meldinger.',
	'HOLD_NEW_MESSAGES'			=> 'Hold tilbake ny melding',
	'PM_EDIT_TIME'				=> 'Begrenset redigeringstid',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Begrenser tiden man har til å redigere en privat melding hvis den ikke allerede er levert. Dette deaktiveres ved å angi verdien til 0.',
	'PM_MAX_RECIPIENTS'			=> 'Maksimalt antall tillatte mottakere',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Det maksimale antallet mottakere som tillates for en privat melding. Hvis 0 angis, er det ubegrenset. Denne innstillingen kan justeres for alle grupper fra siden for gruppeinnstillinger.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Her kan du angi alle standardinnstillinger for innlegg.',
	'ALLOW_POST_LINKS'					=> 'Tillat lenker i innlegg/private meldinger',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Hvis ikke tillatt, deaktiveres BBCode-taggen <code>[URL]</code> og automatiske/magiske URL-er.',
	'ALLOW_POST_FLASH'					=> 'Tillat bruk av BBCode-taggen <code>[FLASH]</code> i innlegg',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Hvis ikke tillatt, deaktiveres BBCode-taggen <code>[FLASH]</code> i innlegg. Ellers styrer tillatelsessystemet hvilke brukere som kan bruke BBCode-taggen <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Fremhevingsintervall',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Antall minutter, timer eller dager fra et innlegg legges inn til det emnet kan fremheves. Hvis verdien angis til 0, er fremheving deaktivert.',
	'CHAR_LIMIT'					=> 'Maksimalt antall tegn per innlegg/melding',
	'CHAR_LIMIT_EXPLAIN'			=> 'Antall tegn som tillates i et innlegg / en privat melding. Angi til 0 for ikke å begrense antall tegn.',
	'DELETE_TIME'					=> 'Begrens slettetid',
	'DELETE_TIME_EXPLAIN'			=> 'Begrenser tiden som er tilgjengelig for å slette et nytt innlegg. Angi til 0 for å deaktivere denne muligheten.',
	'DISPLAY_LAST_EDITED'			=> 'Vis informasjon om forrige redigering',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Velg hvis informasjon om forrige redigering skal vises på innlegg.',
	'EDIT_TIME'						=> 'Begrens redigeringstid',
	'EDIT_TIME_EXPLAIN'				=> 'Begrenser tiden som er tilgjengelig for å redigere et nytt innlegg. Angi til 0 for å deaktivere denne muligheten.',
	'FLOOD_INTERVAL'				=> 'Flomintervall',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Antall sekunder en bruker må vente mellom innlegg. Hvis du vil at dette ikke skal gjelde for brukere, må du endre tillatelsene deres.',
	'HOT_THRESHOLD'					=> 'Terskelverdi for populære emner',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Terskelverdien for antall innlegg per emne kreves for markering av populære emner. Angi til 0 for å deaktivere dette.',
	'MAX_POLL_OPTIONS'				=> 'Maksimalt antall avstemmingsalternativer',
	'MAX_POST_FONT_SIZE'			=> 'Maksimal skriftstørrelse per innlegg',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Den største skriftstørrelsen som tillates i innlegg. Angi til 0 for ubegrenset størrelse.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maksimal bildehøyde per innlegg',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Den maksimale høyden på bilder/Flash i innlegg. Angi til 0 for ubegrenset størrelse.',
	'MAX_POST_IMG_WIDTH'			=> 'Maksimal bildebredde i innlegg',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Den maksimale bredden på bilder/Flash i innlegg. Angi til 0 for ubegrenset størrelse.',
	'MAX_POST_URLS'					=> 'Maksimalt antall lenker per innlegg',
	'MAX_POST_URLS_EXPLAIN'			=> 'Det maksimale antallet URL-er i et innlegg. Angi til 0 for ubegrenset antall.',
	'MIN_CHAR_LIMIT'				=> 'Minste antall tegn per innlegg/melding',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Det minste antallet tegn brukeren må skrive i et innlegg / privat melding. Den minste verdien for denne innstillingen, er 1.',
	'POSTING'						=> 'Innlegg',
	'POSTS_PER_PAGE'				=> 'Innlegg per side',
	'QUOTE_DEPTH_LIMIT'				=> 'Maksimal sitatdybde',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Det maksimale antallet sitater man kan ha inni hverandre i et innlegg. Angi til 0 for ubegrenset dybde.',
	'SMILIES_LIMIT'					=> 'Maksimalt antall smilefjes per innlegg',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Det maksimale antallet smiljefjes i et innlegg. Angi til 0 for ubegrenset antall.',
	'SMILIES_PER_PAGE'				=> 'Smilefjes per side',
	'TOPICS_PER_PAGE'				=> 'Emner per side',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Her kan du angi alle standardinnstillinger for signaturer.',

	'MAX_SIG_FONT_SIZE'				=> 'Maksimal skriftstørrelse for signatur',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Den maksimale skriftstørrelsen som tillates i brukersignaturer. Angi til 0 for ubegrenset størrelse.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maksimal høyde på signaturbilde',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Den maksimale høyden på bilder/Flash i brukersignaturer. Angi til 0 for ubegrenset høyde.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maksimal bredde på signaturbilde',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Den maksimale bredden på bilder/Flash i brukersignaturer. Angi til 0 for ubegrenset høyde.',
	'MAX_SIG_LENGTH'				=> 'Maksimal lengde på signaturen',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Det maksimale antallet tegn i brukersignaturer.',
	'MAX_SIG_SMILIES'				=> 'Maksimalt antall smilefjes per signatur',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Det maksimale antallet smilefjes som tillates i brukersignaturer. Angi til 0 for ubegrenset antall.',
	'MAX_SIG_URLS'					=> 'Maksimalt antall lenker i signaturen',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Det maksimale antallet lenker i brukersignaturer. Angi til 0 for ubegrenset antall.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Her kan du definere registrerings- og profilrelaterte innstillinger.',

	'ACC_ACTIVATION'				=> 'Kontoaktivering',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Dette angir hvorvidt brukere umiddelbart får tilgang til nettsiden eller om det kreves bekreftelse. Du kan også deaktivere nye registreringer helt. <em>«E-post på systemet» må være aktivert for å kunne bruke bruker- eller administratoraktivering.</em>',
    'ACC_ACTIVATION_WARNING'        => 'Merk at den valgte aktiveringsmetoden krever at e-post er aktivert, hvis ikke vil registrering bli deaktivert. Vi anbefaler at du enten velger en annen aktiveringsmetode eller reaktiverer e-post',
	'NEW_MEMBER_POST_LIMIT'			=> 'Innleggsgrense for nye medlemmer',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Nye medlemmer forblir i gruppen <em>Nylig registrerte brukere</em> til de når dette antallet innlegg. Du kan bruke denne gruppen til å hindre dem i å bruke PM-systemet eller se gjennom innleggene sine. <strong>Med verdien 0 deaktiverer du denne funksjonen.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Angi gruppen Nylig registrerte brukere som standard',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Hvis dette er angitt til Ja og det angis en ny innleggsgrense for nye medlemmer, vil ikke nylig registrerte brukere bare plasseres i gruppen <em>Nylig registrerte brukere</em>, men denne gruppen vil også bli standardgruppen. Dette kan være nyttig hvis du vil tilordne en standardgrad og/eller -avatar for guppen, som brukeren da arver.',

	'ACC_ADMIN'					=> 'Av administrator',
	'ACC_DISABLE'				=> 'Deaktiver registrering',
	'ACC_NONE'					=> 'Ingen aktivering (umiddelbar tilgang)',
	'ACC_USER'					=> 'Av bruker (e-postbekreftelse)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Tillat adressegjenbruk',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Forskjellige brukere kan registrere seg med samme e-postadresse.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-faksnummer',
	'COPPA_MAIL'				=> 'COPPA-postadresse',
	'COPPA_MAIL_EXPLAIN'		=> 'Dette er postadressen som foreldre må sende COPPA-registreringsskjema til.',
	'ENABLE_COPPA'				=> 'Aktiver COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Dette krever at brukere erklærer at de er 13 eller eldre for å tilfredsstille kravene til COPPA i USA. Hvis dette er deaktivert, vil ikke lenger COPPA-spesifikke grupper bli vist.',
	'MAX_CHARS'					=> 'Maks',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Fant ingen passende autentiserings-pluginmodul.',
	'PASSWORD_LENGTH'			=> 'Lengde på passord',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minste og største antall tegn i passord.',
	'REG_LIMIT'					=> 'Registreringsforsøk',
	'REG_LIMIT_EXPLAIN'			=> 'Antall forsøk brukere har for å løse anti-spambotoppgaven før de låses ute fra den økten.',
	'USERNAME_ALPHA_ONLY'		=> 'Bare alfanumerisk',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerisk og mellomromstegn',
	'USERNAME_ASCII'			=> 'ASCII (ingen internasjonale Unicode-tegn)',
	'USERNAME_LETTER_NUM'		=> 'Alle bokstaver og sifre',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Alle bokstaver, sifre og mellomromstegn',
	'USERNAME_CHARS'			=> 'Begrens tegn i brukernavn',
	'USERNAME_CHARS_ANY'		=> 'Alle tegn',
	'USERNAME_CHARS_EXPLAIN'	=> 'Begrens tegntypen som kan brukes i brukernavn. Mellomromstegn er: mellomrom, -, +, _, [ og ].',
	'USERNAME_LENGTH'			=> 'Lengde på brukernavn',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minste og største antall tegn i brukernavn.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Generelle innstillinger for syndikeringsfeeder',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Denne modulen gjør ulike ATOM-feeder tilgjengelig, og behandler BBCode i innlegg slik at det blir lesbart i eksterne feeder.',

	'ACP_FEED_GENERAL'					=> 'Generelle feed-innstillinger',
	'ACP_FEED_POST_BASED'				=> 'Innleggsbaserte feed-innstillinger',
	'ACP_FEED_TOPIC_BASED'				=> 'Emnebaserte feed-innstillinger',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Andre feeder og innstillinger',

	'ACP_FEED_ENABLE'					=> 'Aktiver feeder',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Slå ATOM-feeder på eller av for hele systemet.<br />Dette slår av alle feeder, uansett hvordan alternativene nedenfor angis.',
	'ACP_FEED_LIMIT'					=> 'Antall elementer',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Det maksimale antallet feedelementer som skal vises.',

	'ACP_FEED_OVERALL'					=> 'Aktiver feeder for hele systemet',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Nye innlegg på hele systemet.',
	'ACP_FEED_FORUM'					=> 'Aktiver feeder per forum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Nye innlegg i enkeltforum og underfora.',
	'ACP_FEED_TOPIC'					=> 'Altiver feeder per emne',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Nye innlegg i enkeltemner.',

	'ACP_FEED_TOPICS_NEW'				=> 'Aktiver feed med nye emner',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Aktiverer feeden «Nye emner», som viser emnene som sist ble opprettet, inkludert det første innlegget.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktiver feed med aktive emner',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Aktiverer feeden «Aktive emner», som viser de sist aktive emnene, inkludert siste innlegg.',
	'ACP_FEED_NEWS'						=> 'Nyhetsfeed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Henter de første innleggene fra disse foraene. Deaktiver ved ikke å velge noen fora.<br />Velg flere fora ved å holde nede <samp>CTRL</samp> når du klikker.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Aktiver forumfeed',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Aktiverer feeden «Alle fora», som viser en liste over fora.',

	'ACP_FEED_HTTP_AUTH'				=> 'Tillat HTTP-autentisering',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Aktiverer HTTP-autentisering, noe som gjør at brukere kan motta innhold som er skjult for gjestebrukere, ved å legge til parameteren <samp>auth=http</samp> i feed-URL-en. Merk at enkelte PHP-oppsett krever at flere endringer gjøres i .htaccess-filen. Instruksjoner finnes i den filen.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Elementstatistikk',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Viser statistikk for feedelementene under dem<br />(f.eks. forfatter, dato og klokkeslett, svar og visninger)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Ekskluder disse foraene',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Innhold fra disse vil <strong>ikke bli inkludert i feedene</strong>. Hvis du ikke velger noen fora, hentes data fra alle.<br />Velg flere fora ved å holde nede <samp>CTRL</samp> når du klikker.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Her kan du velge og konfigurere plugin-moduler som er laget for å blokkere automatisk innsending fra spambot-er. Disse plugin-modulene fungerer vanligvis slik at brukeren blir utfordret med en <em>CAPTCHA</em>, en test som er laget for å være vanskelig for datamaskiner å løse.',
	'ACP_VC_EXT_GET_MORE'					=> 'Flere (og kanskje bedre) antispam-plugin-moduler kan du finne i <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>utvidelsesdatabasen på phpBB.com</strong></a>. Hvis du vil ha mer informasjon om hvordan du kan forhindre spam på systemet, kan du gå til <a href="https://www.phpbb.com/go/anti-spam"><strong>kunnskapsbasen på phpBB.com</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Tilgjengelige plugin-moduler',
	'CAPTCHA_UNAVAILABLE'					=> 'Plugin-modulen kan ikke velges, ettersom kravene den stiller, ikke er innfridd.',
	'CAPTCHA_GD'							=> 'GD-bilde',
	'CAPTCHA_GD_3D'							=> 'GD 3D-bilde',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Forgrunnsstøy',
	'CAPTCHA_GD_EXPLAIN'					=> 'Bruker GD til å lage et mer avansert antispambot-bilde.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Bruk forgrunnsstøy til å gjøre bilde vanskeligere å tyde.',
	'CAPTCHA_GD_X_GRID'						=> 'Bakgrunnsstøy x-akse',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Bruk lave innstillinger her for å gjøre bildet vanskeligere å tyde. 0 gjør at bakgrunnsstøy på x-aksen deaktiveres.',
	'CAPTCHA_GD_Y_GRID'						=> 'Bakgrunnsstøy y-akse',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Bruk lave innstillinger her for å gjøre bildet vanskeligere å tyde. 0 gjør at bakgrunnsstøy på y-aksen deaktiveres.',
	'CAPTCHA_GD_WAVE'						=> 'Bølgeforvrengning',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Dette legger til en bølgeforvrengning i bildet.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Legg til 3D-støyobjekter',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Dette legger til flere objekter i bildet, over bokstavene.',
	'CAPTCHA_GD_FONTS'						=> 'Bruk ulike skrifter',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Denne innstillinger styrer hvor mange ulike bokstavformer som brukes. Du kan bruke bare standardformene eller ta i bruk modifiserte bokstaver. Det er også mulig å legge til minuskler (små bokstaver).',
	'CAPTCHA_FONT_DEFAULT'					=> 'Standard',
	'CAPTCHA_FONT_NEW'						=> 'Nye former',
	'CAPTCHA_FONT_LOWER'					=> 'Bruk også minuskler',
	'CAPTCHA_NO_GD'							=> 'Enkelt bilde',
	'CAPTCHA_PREVIEW_MSG'					=> 'Endringene dine er ikke lagret, dette er bare en forhåndsvisning.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Plugin-modulen slik den vil se ut med gjeldende innstillinger.',

	'CAPTCHA_SELECT'						=> 'Installerte plugin-moduler',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Nedtrekkslisten inneholder plugin-modulene som systemet gjenkjenner. Grå elementer er ikke tilgjengelig akkurat nå, og trenger kanskje konfigurering før de kan brukes.',
	'CAPTCHA_CONFIGURE'						=> 'Konfigurer plugin-moduler',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Endre innstillingene for valgte plugin-modul.',
	'CONFIGURE'								=> 'Konfigurer',
	'CAPTCHA_NO_OPTIONS'					=> 'Denne plugin-modulen har ingen konfigurasjonsalternativer.',

	'VISUAL_CONFIRM_POST'					=> 'Aktiver spambot-mottiltak for gjesteinnlegg',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Krever at gjestebrukere består antispambot-oppgaven, slik at automatisert innlegging motvirkes.',
	'VISUAL_CONFIRM_REG'					=> 'Aktiver spambot-mottiltak for registreringer',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Krever at nye brukere består antispambot-oppgaven, slik at automatisert registrering motvirkes.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Tillat at brukere oppdaterer antispambot-oppgaven',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Tillater at brukere ber om en ny antispambot-oppgave hvis de ikke klarer den gjeldende oppgaven under registreringen. Enkelte plugin-moduler støtter kanskje ikke dette alternativet.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Disse detaljene definerer hvilke data som brukes til å sende informasjonskapsler (cookies) til brukernes nettlesere. I de fleste tilfeller skal standardinnstillingene for informasjonskapsler være tilstrekkelig. Hvis du trenger å endre noe, vær varsom når du gjør dette, ettersom gale innstillinger kan føre til at brukere ikke kan logge inn.',

	'COOKIE_DOMAIN'				=> 'Domene for informasjonskapsel',
	'COOKIE_NAME'				=> 'Navn på informasjonskapsel',
	'COOKIE_PATH'				=> 'Bane for informasjonskapsel',
	'COOKIE_SECURE'				=> 'Informasjonskapsel-sikkerhet',
	'COOKIE_SECURE_EXPLAIN'		=> 'Hvis serveren kjører på SSL, aktiverer du dette. Hvis ikke, lar du den stå deaktivert. Hvis du aktiverer dette når du ikke kjører på SSL, vil du få omadresseringsfeil på serveren.',
	'ONLINE_LENGTH'				=> 'Tidsgrense for online-visning',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Antall minutter som går før inaktive brukere ikke lenger dukker opp i listen «Hvem er online». Jo høyere denne verdien er, desto mer prosessering kreves det for å generere listen.',
	'SESSION_LENGTH'			=> 'Øktslengde',
	'SESSION_LENGTH_EXPLAIN'	=> 'Økter vil utløpe etter dette antallet sekunder.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Her kan du aktiver og deaktivere kontaktsiden og også legge til en tekst som vises på den siden.',

	'CONTACT_US_ENABLE'				=> 'Aktiver kontaktside',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Denne siden lar brukere sende e-post til systemadministratorene',

	'CONTACT_US_INFO'				=> 'Kontaktinformasjon',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Meldingen vises på kontaktsiden',
	'CONTACT_US_INFO_PREVIEW'		=> 'Kontaktsideinformasjon - Forhåndsvisning',
	'CONTACT_US_INFO_UPDATED'		=> 'Kontaktsideinformasjonen er oppdatert.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Her kan du aktivere og deaktivere visse systemfunksjoner for å redusere prosesseringsbehovet. På de fleste servere er det ikke nødvendig å deaktivere noen funksjoner. På enkelte systemer eller ved delte servermiljøer kan det være gunstig å deaktivere funksjoner du egentlig ikke trenger. Du kan også angi grenser for systembelastning og aktive økter, som vil føre til at systemet går offline hvis disse overskrides.',

	'ALLOW_CDN'						=> 'Tillat bruk av tredjeparts innholdsleveransenettverk (CDN)',
	'ALLOW_CDN_EXPLAIN'				=> 'Hvis denne innstillingen er aktivert, vil enkelte filer sendes fra eksterne tredjepartsservere i stedet for fra din server. Dette reduserer nettverksbåndbredden som kreves av serveren din, men kan utgjøre et personvernsproblem for enkelte systemadministratorer. I en standard phpBB-installasjon omfatter dette innlasting av «jQuery» og skriften «Open Sans» fra Googles CDN.',
	'ALLOW_LIVE_SEARCHES'			=> 'Tillat live-søk',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Hvis denne innstillingen er aktivert, får brukerne opp forslag mens de skriver, på visse steder på systemet.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Egendefinerte profilfelt',
	'LIMIT_LOAD'					=> 'Begrens systembelastning',
	'LIMIT_LOAD_EXPLAIN'			=> 'Hvis systemets snittbelasting per minutt overskrider denne verdien, går systemet automatisk offline. Verdien 1.0 tilsvarer ~100 % utnyttelse av én prosessor. Dette fungerer bare på UNIX-baserte servere hvor denne informasjonen er tilgjengelig. Verdien her nullstilles hvis phpBB ikke kan finne belastningsgrensen.',
	'LIMIT_SESSIONS'				=> 'Begrens økter',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Hvis antallet økter overskrider denne verdien over ett minutt, vil systemet gå offline. Angi til 0 for ubegrenset antall økter.',
	'LOAD_CPF_MEMBERLIST'			=> 'Tillat at stiler viser egendefinerte profilfelt i brukerlisten',
	'LOAD_CPF_PM'					=> 'Vis egendefinerte profilfelt i private meldinger',
	'LOAD_CPF_VIEWPROFILE'			=> 'Vis egendefinerte profilfelt i brukerprofiler',
	'LOAD_CPF_VIEWTOPIC'			=> 'Vis egendefinerte profilfelt på emnesider',
	'LOAD_USER_ACTIVITY'			=> 'Vis brukerens aktivitet',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Viser aktivt emne/forum i brukerprofiler og i brukerkontrollpanelet. Det anbefales å deaktivere dette på systemer med over en million innlegg.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Utløp av lesevarsel',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Antall dager som vil gå før et lesevarsel vil bli slettet automatisk. Angi denne verdien til 0 for å gjøre varslingene permanente.',
	'RECOMPILE_STYLES'				=> 'Rekompiler ugyldige stilkomponenter',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Se etter oppdaterte stilkomponenter på filsystemet og rekompiler.',
	'YES_ANON_READ_MARKING'			=> 'Aktiver emnemerking for gjester',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Lagrer informasjon om lest/ulest-status for gjester. Hvis deaktivert, merkes innlegg alltid som lest for gjester.',
	'YES_BIRTHDAYS'					=> 'Aktiver fødselsdagsoppføring',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Hvis deaktivert, vises ikke lenger fødselsdagsoppføringen. For at denne innstillingen skal ha noen effekt, må også fødselsdagsfunksjonen være aktivert.',
	'YES_JUMPBOX'					=> 'Aktiver visning av jumpbox',
	'YES_MODERATORS'				=> 'Aktiver visning av moderatorer',
	'YES_ONLINE'					=> 'Aktiver lister over brukere som er online',
	'YES_ONLINE_EXPLAIN'			=> 'Viser informasjon om brukere som er online, på indekssiden, forumsider og emnesider.',
	'YES_ONLINE_GUESTS'				=> 'Aktiver oppføring av gjestebrukere i listen over brukere som er online',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Tillater av informasjon om gjestebrukere vises i listen over brukere som er online.',
	'YES_ONLINE_TRACK'				=> 'Aktiver visning av informasjon om brukere er online eller offline',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Vis informasjon om brukere som er online i profiler og på emnesider.',
	'YES_POST_MARKING'				=> 'Aktiver prikkede emner',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indikerer om en bruker har skrevet innlegg i et emne.',
	'YES_READ_MARKING'				=> 'Aktiver emnemerking på serversiden',
	'YES_READ_MARKING_EXPLAIN'		=> 'Lagrer informasjon om lest/ulest i databasen heller enn i en informasjonskapsel.',
	'YES_UNREAD_SEARCH'				=> 'Aktiver søk etter uleste innlegg',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB støtter autentiserings-plugins, eller moduler. Disse lar deg bestemme hvordan brukere autentiseres når de logger på systemet. Som standard leveres fire plugin-moduler: DB, LDAP, Apache og OAuth. Ikke alle metodene krever ytterligere informasjon, så du trenger bare fylle ut feltene hvis de er relevante for den valgte metoden.',

	'AUTH_METHOD'				=> 'Velg en autentiseringsmetode',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Både nøkkel og hemmelighet for hver av de aktiverte OAuth-tjenesteleverandørene må angis. Bare én ble angitt for en OAuth-tjenesteleverandør.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Alle OAuth-leverandører krever en unik hemmelighet og en nøkkel for å kunne autentisere dem gjennom den eksterne serveren. Disse får du av OAuth-tjenesten når du registrerer nettstedet ditt, og de skal angis nøyaktig slik du fikk dem.<br />Tjenester som ikke har både nøkkel og hemmelighet her, vil ikke være tilgjengelige for forumbrukerne. Merk også at brukeren fortsatt kan registrere seg og logge inn ved hjelp av plugin-modulen for DB-autentisering.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Nøkkel',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Hemmelighet',

	'APACHE_SETUP_BEFORE_USE'	=> 'Du må konfigurere Apache-autentisering før du kan endre autentiseringsmetoden i phpBB til dette. Husk at brukernavnet du bruker til Apache-autentisering, må være det samme som phpBB-brukernavnet ditt. Apache-autentisering kan bare brukes med mod_php (ikke med en CGI-versjon) og safe_mode deaktivert.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP basis-<var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Dette er «Distinguished Name», som lokaliserer brukerinformasjonen, f.eks. <samp>o=Mitt firma,c=NO</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-postattributt',
	'LDAP_EMAIL_EXPLAIN'			=> 'Angi dette til navnet på e-postattributtet (hvis det finnes en) for brukeroppføringen for å angi e-postadressen til nye brukere automatisk. Hvis dette står tomt, blir e-postadressen tom for brukere som logger inn for første gang.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding til LDAP-server mislylktes med angitt bruker/passord.',
	'LDAP_NO_EMAIL'					=> 'Det angitte e-postattributtet finnes ikke.',
	'LDAP_NO_IDENTITY'				=> 'Finner ingen innloggingsidentitet for %s.',
	'LDAP_PASSWORD'					=> 'LDAP-passord',
	'LDAP_PASSWORD_EXPLAIN'			=> 'La stå tomt for å bruke anonym binding, skriv ellers inn passordet for brukeren over. Påkrevd for Active Directory-servere.<br /><em><strong>Advarsel:</strong> Dette passordet lagres som ren tekst i databasen, og vil være synlig for alle som har tilgang til databasen eller som kan vise denne konfigurasjonssiden.</em>',
	'LDAP_PORT'						=> 'LDAP-serverport',
	'LDAP_PORT_EXPLAIN'				=> 'Du kan angi et portnummer som skal brukes til å koble til LDAP-serveren i stedet for standardport 389.',
	'LDAP_SERVER'					=> 'LDAP-servernavn',
	'LDAP_SERVER_EXPLAIN'			=> 'Hvis du bruker LDAP, er dette vertsnavnet eller IP-adressen til LDAP-serveren. Alternativt kan du angi en URL som ldap://vertsnavn:port/',
	'LDAP_UID'						=> 'LDAP-<var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Dette er nøkkelen som det skal søkes under for en gitt innloggingsidentitet, f.eks. <var>uid</var>, <var>sn</var>, osv.',
	'LDAP_USER'						=> 'LDAP bruker-<var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'La stå tom for å bruke anonym binding. Hvis det er angitt, bruker phpBB det angitte DN-navnet ved innloggingsforsøk til å finne riktig bruker, f.eks. <samp>uid=Brukernavn,ou=Minavd,o=Mittfirma,c=NO</samp>. Påkrevd for Active Directory-servere.',
	'LDAP_USER_FILTER'				=> 'LDAP-brukerfilter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Du kan begrense hvilke objekter det søkes i, med ytterligere filtre. For eksempel vil <samp>objectClass=posixGroup</samp> medføre at <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> brukes.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Her definerer du server- og domeneavhengige innstillinger. Kontroller at du angir korrekte data – feil vil medføre at e-poster inneholder feil informasjon. Når du angir domenenavn, pass på at de inkluderer http:// eller andre protokollangivelser. Endre bare portnummeret hvis du vet at serveren bruker en annen verddi – port 80 er korrekt i de aller fleste tilfeller.',

	'ENABLE_GZIP'				=> 'Aktiver GZip-komprimering',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generert innhold vil bli komprimert før det sendes til brukeren. Dette kan redusere nettverkstrafikken, men vil også øke CPU-bruken både på server og klient. Krever PHP-utvidelsen zlib for å brukes.',
	'FORCE_SERVER_VARS'			=> 'Tving gjennom server-URL-innstillinger',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Hvis angitt til Ja, vil serverinnstillingene som er definert her, brukes i stedet for verdiene som er fastslått automatisk.',
	'ICONS_PATH'				=> 'Lagringsbane for innleggsikoner',
	'ICONS_PATH_EXPLAIN'		=> 'Banen under phpBB-rotmappen, f.eks. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Aktiver URL-omskriving',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Når aktivert, vil URL-er som inneholder «app.php» bli omskrevet for å fjerne filnavnet (f.eks. vil app.php/foo bli til /foo). <strong>Modulen mod_rewrite i Apache server kreves for at denne funksjonen skal virke. Hvis dette alternativet er aktivert uten at det er støtte for mod_rewrite, kan det hende at URL-er på systemet ikke vil fungere.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Modulen <strong>mod_rewrite</strong> på Apache-webserveren er deaktivert. Aktiver modulen eller kontakt tjenesteleverandøren hvis du ønsker å aktivere denne funksjonen.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Vi kan ikke fastslå hvorvidt denne serveren støtter URL-omskriving. Denne innstillingen kan aktiveres, men hvis URL-omskriving ikke er tilgjengelig, vil baner som genereres av systemet (for eksempel i lenker), kunne være brutte. Kontakt tjenesteleverandøren hvis du er usikker på om du trygt kan aktivere denne funksjonen.',
	'PATH_SETTINGS'				=> 'Baneinnstillinger',
	'RANKS_PATH'				=> 'Lagringsbane til gradsbilder',
	'RANKS_PATH_EXPLAIN'		=> 'Bane under phpBB-rotmappen, f.eks. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Skriptbane',
	'SCRIPT_PATH_EXPLAIN'		=> 'Banen hvor phpBB finnes, relativt til domenenavnet. f.eks. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domenenavn',
	'SERVER_NAME_EXPLAIN'		=> 'Domenenavnet dette systemet kjører på (For eksempel: <samp>www.eksempel.com</samp>).',
	'SERVER_PORT'				=> 'Serverport',
	'SERVER_PORT_EXPLAIN'		=> 'Portnummeret serveren kjører på, vanligvis 80. Endre dette bare hvis nødvendig.',
	'SERVER_PROTOCOL'			=> 'Serverprotokoll',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Dette brukes som serverprotokoll hvis innstillingene tvinges gjennom. Hvis tom eller ikke gjennomtvunget, fastslås protokollen av sikkerhetsinnstillingene for informasjonskapsler (<samp>http://</samp> eller <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server-URL-innstillinger',
	'SMILIES_PATH'				=> 'Lagringsbane for smilefjes',
	'SMILIES_PATH_EXPLAIN'		=> 'Bane under phpBB-rotmappen, f.eks. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Lagringspane for ikoner for filetternavnsgrupper',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Bane under phpBB-rotmappen, f.eks. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Kjør regelmessige oppgaver fra systemets cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Når av, vil phpBB sørge for at regelmessige oppgaver kjøres automatisk. Når på, vil ikke phpBB planlegge regelmessige oppgaver selv – en systemadministrator må sørge for at <code>bin/phpbbcli.php cron:run</code> kjøres av systemets cron med passende hyppighet (f.eks. hvert 5. minutt).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Her kan du definere økts- og innloggingsrelaterte innstillinger.',

	'ALL'							=> 'Hele',
	'ALLOW_AUTOLOGIN'				=> 'Tillat «Husk meg»-innlogginger',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Hvorvidt brukere får alternativet «Husk meg» når de besøker systemet.',
	'ALLOW_PASSWORD_RESET'			=> 'Tillat tilbakestilling av passord («Jeg har glemt passordet»)',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Hvorvidt brukere kan bruke lenken «Jeg har glemt passordet» på innloggingssiden til å gjenopprette kontoen. Hvis du bruker en ekstern autentiseringsmekanisme, vil du sannsynligvis deaktivere denne funksjonen.',
	'AUTOLOGIN_LENGTH'				=> 'Utløpstid for «Husk meg»-innloggingsnøkler (i dager)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Antall dager det går før «Husk meg»-innloggingsnøkler fjernes, eller null for å deaktivere.',
	'BROWSER_VALID'					=> 'Valider nettleser',
	'BROWSER_VALID_EXPLAIN'			=> 'Aktiverer validering av nettleser for hver økt, noe som bedrer sikkerheten.',
	'CHECK_DNSBL'					=> 'Sjekk IP mot DNS-svartelister',
	'CHECK_DNSBL_EXPLAIN'			=> 'Hvis aktivert, sjekkes brukerens IP-adresse mot følgende DNSBL-tjenester ved registrering og innlegg: <a href="http://spamcop.net">spamcop.net</a> og <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Dette oppslaget kan ta en liten stund, avhengig av serverkonfigurasjonen. Hvis dette medfører treghet eller at det rapporteres mange falske positiver, anbefales det å deaktivere denne sjekken.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Sjekk e-postdomene for gyldig MX-post',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Hvis aktivert, sjekkes e-postdomenet som angis ved registrering og profilendringer, for gyldig MX-post.',
	'FORCE_PASS_CHANGE'				=> 'Tving gjennom passordendring',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Krev at brukere bytter passord etter et angitt antall dager. Angi til 0 for å deaktivere dette.',
	'FORM_TIME_MAX'					=> 'Maksimal tid for å sende inn skjema',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Tiden en bruker har på seg til å sende inn et skjema. Bruk -1 for å deaktivere. Merk at et skjema kan bli ugyldig hvis økten utløper, uavhengig av denne innstillingen.',
	'FORM_SID_GUESTS'				=> 'Knytt skjemaer til gjesteøkter',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'hvis aktivert, vil skjematokener som utstedes til gjester, være øktseksklusive. Dette kan forårsake problemer hos noen ISP-er.',
	'FORWARDED_FOR_VALID'			=> 'Valider <var>X_FORWARDED_FOR</var>-hodet',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Økter vil bare fortsette hvis det sendte <var>X_FORWARDED_FOR</var>-hodet samsvarer med det som ble sendt med forrige forespørsel. Utestengelser vil også bli sjekket mot IP-er i <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Økts-IP-validering',
	'IP_VALID_EXPLAIN'				=> 'Hvor mye av brukerens IP som brukes til å validere en økt: <samp>Hele</samp> sammenligner hele adressen, <samp>A.B.C</samp> de første x.x.x, <samp>A.B</samp> de første x.x, mens <samp>Ingen</samp> deaktiverer sjekken. For IPv6-adresser sammenligner <samp>A.B.C</samp> de første 4 blokkene, mens <samp>A.B</samp> sammenligner de første 3 blokkene.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maksimalt antall innloggingsforsøk per IP-adresse',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Terskelen for innloggingsforsøk som tillattes fra en enkelt IP-adresse før en antispambot-oppgave utløses. Bruk 0 for å hindre at antispambot-oppgaver utløses av IP-adresser.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Utløpstid for innloggingsforsøk fra IP-adresse',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Innloggingsforsøk utløper etter denne tiden.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Begrens innloggingsforsøk med <var>X_FORWARDED_FOR</var>-hodet',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'I stedet for å begrense innloggingsforsøk per IP-adresse, kan de begrenses med <var>X_FORWARDED_FOR</var>-verdier. <br /><em><strong>Advarsel:</strong> Bare aktiver dette hvis du bruker en proxyserver som angir <var>X_FORWARDED_FOR</var> til pålitelige verdier.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maksimalt antall innloggingsforsøk per brukernavn',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Antallet innloggingsforsøk som tillates for en enkelt konto før en antispambot-oppgave utløses. Bruk 0 for å hindre at antispambot-oppgaver utløses for enkelte brukerkontoer.',
	'NO_IP_VALIDATION'				=> 'Ingen',
	'NO_REF_VALIDATION'				=> 'Ingen',
	'PASSWORD_TYPE'					=> 'Passordkompleksitet',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Fastslår hvor komplekst et passord må være når det angis eller endres. Alternativene nedover listen inkluderer de over.',
	'PASS_TYPE_ALPHA'				=> 'Må inneholde bokstaver og sifre',
	'PASS_TYPE_ANY'					=> 'Ingen krav',
	'PASS_TYPE_CASE'				=> 'Må ha både store og små bokstaver',
	'PASS_TYPE_SYMBOL'				=> 'Må inneholde symboler',
	'REF_HOST'						=> 'Bare valider vert',
	'REF_PATH'						=> 'Valider også bane',
	'REFERRER_VALID'				=> 'Valider referanse',
	'REFERRER_VALID_EXPLAIN'		=> 'Hvis aktivert, vil referansen til POST-forespørsler kontrolleres mot innstillingene for verts-/skriptbane. Dette kan skape problemer på systemer med flere domener og/eller ekstern innlogging.',
	'TPL_ALLOW_PHP'					=> 'Tillat php i maler',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Hvis dette alternativet er aktivert, vil <code>PHP</code> og <code>INCLUDEPHP</code> gjenkjennes og prosesseres i maler.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Denne informasjonen brukes når systemet sender e-post til brukerne. Kontroller at e-postadressen du angir, er gyldig – alle retur- eller leveringsfeilmeldinger vil sannsynligvis bli sendt til den adressen. Hvis verten ikke tilbyr den innebygde (PHP-baserte) e-posttjenesten, kan du i stedet sende meldinger direkte ved hjelp av SMTP. Dette krever adresse til en passende server (spør om nødvendig tjenesteleverandøren). Hvis serveren krever autentisering (og bare da), angir du nødvendig brukernavn, passord og autentiseringsmetode.',

	'ADMIN_EMAIL'					=> 'Retur-e-postadresse',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Dette brukes som returadresse for all e-post, e-postadressen til den tekniske kontakten. Dette vil alltid bli brukt som <samp>Returbane</samp>- og <samp>Avsender</samp>-adresser i e-post.',
	'BOARD_EMAIL_FORM'				=> 'Brukere sender e-post via systemet',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'I stedet for å vise brukerne e-postadresser, kan de sende e-post via systemet.',
	'BOARD_HIDE_EMAILS'				=> 'Skjul e-postadresser',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Denne funksjonen sørger for at e-postadresser er fullstendig private.',
	'CONTACT_EMAIL'					=> 'Kontakt-e-postadresse',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Denne adressen brukes når det kreves et spesifikt kontaktpunkt, f.eks. spam, feilmeldinger osv. Det vil alltid bli brukt som <samp>Fra</samp>- og <samp>Svar til</samp>-adresser i e-post.',
	'CONTACT_EMAIL_NAME'			=> 'Kontaktnavn',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Dette er kontaktnavnet som e-postmottakerne vil se. Hvis du ikke ønsker noe kontaktnavn, lar du dette feltet stå tomt.',
	'EMAIL_FUNCTION_NAME'			=> 'Navn på e-postfunksjon',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'E-postfunksjonen som brukes til å sende e-post gjennom PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-postpakkestørrelse',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Dette er det maksimale antallet e-poster som sendes ut i én pakke. Denne innstillingen gjelder for den interne meldingskøen. Angi dette til 0 hvis du har problemer med e-post om leveringsfeil.',
	'EMAIL_SIG'						=> 'E-postsignatur',
	'EMAIL_SIG_EXPLAIN'				=> 'Denne teksten legges til i all e-post systemet sender.',
	'ENABLE_EMAIL'					=> 'Aktiver e-post for hele systemet',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Hvis dette er angitt til deaktivert, vil ingen e-post bli sendt av systemet i det hele tatt. <em>Merk: Bruker- og administratoraktivering av kontoer krever at denne innstillingen er aktivert. Hvis du for øyeblikket bruker «Bruker»- eller «Administrator»-aktivering i aktiveringsinnstillingene, vil deaktivering av denne innstillingen medføre at registrering deaktiveres.</em>',
	'SMTP_AUTH_METHOD'				=> 'Autentiseringsmetode for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Brukes bare hvis brukernavn/passord er angitt. Spør tjenesteleverandøren hvis du er usikker på hvilke metode du skal bruke.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-passord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Angi passord bare hvis SMTP-serveren krever det.<br /><em><strong>Advarsel:</strong> Dette passordet lagres som ren tekst i databasen, og vil være synlig for alle som har tilgang til databasen eller som kan vise denne konfigurasjonssiden.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverport',
	'SMTP_PORT_EXPLAIN'				=> 'Endre denne bare hvis du vet at SMTP-serveren er på en annen port.',
	'SMTP_SERVER'					=> 'SMTP-serveradresse',
	'SMTP_SETTINGS'					=> 'SMTP-innstillinger',
	'SMTP_USERNAME'					=> 'SMTP-brukernavn',
	'SMTP_USERNAME_EXPLAIN'			=> 'Skriv inn brukernavn bare hvis SMTP-serveren krever det.',
	'USE_SMTP'						=> 'Bruk SMTP-server til e-post',
	'USE_SMTP_EXPLAIN'				=> 'Velg «Ja» hvis du ønsker eller må sende e-post via en navngitt server i stedet for den lokale e-postfunksjonen.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Her kan du aktivere og styre bruken av Jabber til direktemeldinger og systemvarsler. Jabber er en protokoll som er basert på åpen kildekode og derfor tilgjengelig for hvem som helst. Enkelte Jabber-servere har gatewayer eller transporter som lar deg kontakte brukere på andre nettverk. Ikke alle servere tilbyr alle transporter, og endringer i protokoller kan forhindre transportene i å fungere. Sørg for at du angir kontodetaljer som allerede er registrert – phpBB vil bruke detaljene du angir her, som de står.',

	'JAB_ENABLE'				=> 'Aktiver Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Aktiverer bruk av Jabber-meldinger og varsler.',
	'JAB_GTALK_NOTE'			=> 'Merk at GTalk ikke vil fungere, ettersom <samp>dns_get_record</samp>-funksjonen ikke finnes. Denne funksjonen er ikke tilgjengelig i PHP4 og er ikke implementert på Windows-plattformer. Det fungerer for øyeblikket ikke på BSD-baserte systemer, inkludert Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber-pakkestørrelse',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dette er antall meldinger som sendes i én pakke. Hvis angitt til 0, sendes meldingen umiddelbart, og vil ikke bli satt i kø for sending senere.',
	'JAB_PASSWORD'				=> 'Jabber-passord',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Advarsel:</strong> Dette passordet lagres som ren tekst i databasen, og vil være synlig for alle som har tilgang til databasen eller som kan vise denne konfigurasjonssiden.</em>',
	'JAB_PORT'					=> 'Jabber-port',
	'JAB_PORT_EXPLAIN'			=> 'La stå tom med mindre du vet at det ikke er port 5222.',
	'JAB_SERVER'				=> 'Jabber-server',
	'JAB_SERVER_EXPLAIN'		=> 'Se %sjabber.org%s for en liste over servere.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber-innstillingene er endret.',
	'JAB_USE_SSL'				=> 'Bruk SSL til å koble til',
	'JAB_USE_SSL_EXPLAIN'		=> 'Hvis aktivert, vil sikker tilkobling prøves. Jabber-porten vil bli endret til 5223 hvis 5222 er angitt.',
	'JAB_USERNAME'				=> 'Jabber-brukernavn eller JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Angi et registrert brukernavn eller en gyldig JID. Brukernavnet vil ikke bli kontrollert for gyldighet. Hvis du bare angir et brukernavn, vil din JID være brukernavnet og serveren du angav over. Ellers angir du en gyldig JID, for eksempel bruker@jabber.org.',
));
