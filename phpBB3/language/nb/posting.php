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
	'ADD_ATTACHMENT'			=> 'Last opp vedlegg',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Hvis du vil legge ved en eller flere filer, angir du detaljene nedenfor.',
	'ADD_FILE'					=> 'Legg til filen',
	'ADD_POLL'					=> 'Opprettelse av avstemming',
	'ADD_POLL_EXPLAIN'			=> 'Hvis du ikke vil legge til en avstemming i emnet, lar du feltene stå tomme.',
	'ALREADY_DELETED'			=> 'Beklager, men denne meldingen er allerede slettet.',
	'ATTACH_DISK_FULL'			=> 'Det er ikke nok ledig diskplass til å legge inn dette vedlegget.',
	'ATTACH_QUOTA_REACHED'		=> 'Beklager, men kvoten for vedlegg på systemet er nådd.',
	'ATTACH_SIG'				=> 'Legg ved en signatur (signaturer kan endres i UCP)',

	'BBCODE_A_HELP'				=> 'Direkte opplastet vedlegg: [attachment=]filnavn.typ[/attachment]',
	'BBCODE_B_HELP'				=> 'Fet tekst: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Kodevisning: [code]kode[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Skriftstørrelse: [size=85]liten tekst[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s er <em>AV</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s er <em>PÅ</em>',
	'BBCODE_I_HELP'				=> 'Kursiv tekst: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list][*]tekst[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listeelement: [*]tekst',
	'BBCODE_O_HELP'				=> 'Nummerert liste: F.eks. [list=1][*]Første punkt[/list] eller [list=a][*]Punkt A[/list]',
	'BBCODE_P_HELP'				=> 'Sett inn bilde: [img]http://bilde-url[/img]',
	'BBCODE_Q_HELP'				=> 'Siter tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Skriftfarge: [color=red]tekst[/color] eller [color=#FF0000]tekst[/color]',
	'BBCODE_U_HELP'				=> 'Understreket tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'Sett inn URL: [url]http://url[/url] eller [url=http://url]URL-tekst[/url]',
	'BBCODE_Y_HELP'				=> 'Liste: Legg til listeelement',
	'BUMP_ERROR'				=> 'Du kan ikke fremheve dette emnet så snart etter forrige innlegg.',

	'CANNOT_DELETE_REPLIED'		=> 'Beklager, men du kan bare slette innlegg som ikke har blitt besvart.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dette innlegget er låst. Du kan ikke lenger redigere det innlegget.',
	'CANNOT_EDIT_TIME'			=> 'Du kan ikke lenger redigere eller slette det innlegget.',
	'CANNOT_POST_ANNOUNCE'		=> 'Beklager, men du kan ikke legge inn kunngjøringer.',
	'CANNOT_POST_STICKY'		=> 'Beklager, men du kan ikke legge inn festede emner.',
	'CHANGE_TOPIC_TO'			=> 'Endre emnetype til',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Meldingen inneholder %1$d tegn.',
		2	=> 'Meldingen inneholder %1$d tegn.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Signaturen inneholder %1$d tegn.',
		2	=> 'Signaturen inneholder %1$d tegn.',
	),
	'CLOSE_TAGS'				=> 'Lukk tagger',
	'CURRENT_TOPIC'				=> 'Gjeldende emne',

	'DELETE_FILE'				=> 'Slett fil',
	'DELETE_MESSAGE'			=> 'Slett melding',
	'DELETE_MESSAGE_CONFIRM'	=> 'Er du sikker på at du vil slette denne meldingen?',
	'DELETE_OWN_POSTS'			=> 'Beklager, men du kan bare slette dine egne innlegg.',
	'DELETE_PERMANENTLY'		=> 'Slett permanent',
	'DELETE_POST_CONFIRM'		=> 'Er du sikker på at du vil slette dette innlegget?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Er du sikker på at du vil slette dette innlegget <strong>permanent</strong>?',
	'DELETE_POST_PERMANENTLY'	=> 'Slett dette innlegget permanent, slik at det ikke kan gjenopprettes',
	'DELETE_POSTS_CONFIRM'		=> 'Er du sikker på at du vil slette disse innleggene?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Er du sikker på at du vil slette disse innleggene <strong>permanent</strong>?',
	'DELETE_REASON'				=> 'Sletteårsak',
	'DELETE_REASON_EXPLAIN'		=> 'Den angitte begrunnelsen for slettingen vil være synlig for moderatorer.',
	'DELETE_POST_WARN'			=> 'Slett dette innlegget',
	'DELETE_TOPIC_CONFIRM'		=> 'Er du sikker på at du vil slette dette emnet?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Slett dette emnet permanent, slik at det ikke kan gjenopprettes',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Er du sikker på at du vil slette dette emnet <strong>permanent</strong>?',
	'DELETE_TOPICS_CONFIRM'		=> 'Er du sikker på at du vil slette disse emnene?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Er du sikker på at du vil slette disse emnene <strong>permanent</strong>?',
	'DISABLE_BBCODE'			=> 'Deaktiver BBCode',
	'DISABLE_MAGIC_URL'			=> 'Ikke analyser URL-er automatisk',
	'DISABLE_SMILIES'			=> 'Deaktiver smilefjes',
	'DISALLOWED_CONTENT'		=> 'Opplastingen ble avvist fordi den opplastede filen ble identifisert som en mulig angrepsvektor.',
	'DISALLOWED_EXTENSION'		=> 'Filetternavnet %s tillates ikke.',
	'DRAFT_LOADED'				=> 'Kladd lastet inn i innleggsområdet – du ønsker kanskje å fullføre innlegget nå.<br />Kladden vil bli slettet når dette innlegget sendes inn.',
	'DRAFT_LOADED_PM'			=> 'Kladd lastet inn i meldingsområdet – du ønsker kanskje å fullføre den private meldingen nå.<br />Kladden vil bli slettet når denne private meldingen er sendt.',
	'DRAFT_SAVED'				=> 'Kladden er lagret.',
	'DRAFT_TITLE'				=> 'Navn på kladd',

	'EDIT_REASON'				=> 'Begrunnelse for reedigering av dette innlegget',
	'EMPTY_FILEUPLOAD'			=> 'Den opplastede filen er tom.',
	'EMPTY_MESSAGE'				=> 'Du må angi en melding når du skriver innlegg.',
	'EMPTY_REMOTE_DATA'			=> 'Kan ikke laste opp filen, prøv å laste opp filen manuelt.',

	'FLASH_IS_OFF'				=> '[flash] er <em>AV</em>',
	'FLASH_IS_ON'				=> '[flash] er <em>PÅ</em>',
	'FLOOD_ERROR'				=> 'Du kan ikke skrive nye innlegg så snart etter det forrige.',
	'FONT_COLOR'				=> 'Skriftfarge',
	'FONT_COLOR_HIDE'			=> 'Skjul skriftfarge',
	'FONT_HUGE'					=> 'Enorm',
	'FONT_LARGE'				=> 'Stor',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Skriftstørrelse',
	'FONT_SMALL'				=> 'Liten',
	'FONT_TINY'					=> 'Mikroskopisk',

	'GENERAL_UPLOAD_ERROR'		=> 'Kan ikke laste opp vedlegg til %s.',

	'IMAGES_ARE_OFF'			=> '[img] er <em>AV</em>',
	'IMAGES_ARE_ON'				=> '[img] er <em>PÅ</em>',
	'INVALID_FILENAME'			=> '%s er et ugyldig filnavn.',

	'LOAD'						=> 'Last inn',
	'LOAD_DRAFT'				=> 'Last inn kladd',
	'LOAD_DRAFT_EXPLAIN'		=> 'Her kan du velge hvilken kladd du vil fortsette å skrive på. Gjeldende innlegg annulleres, alt gjeldende innhold i innlegget vil bli slettet. Vis, rediger og slett kladder fra brukerkontrollpanelet.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Du må logge inn for å kunne fremme emner i dette forumet.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Du må logge inn for å kunne slette innlegg i dette forumet.',
	'LOGIN_EXPLAIN_POST'		=> 'Du må logge inn for å kunne skrive innlegg i dette forumet.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Du må logge inn for å kunne sitere innlegg i dette forumet.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Du må logge inn for å kunne svare på innlegg i dette forumet.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Du kan bare bruke skrifter opp til størrelsen %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Flash-filene kan være opp til %d piksel høye.',
		2	=> 'Flash-filene kan være opp til %d piksler høye.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Flash-filene kan være opp til %d piksel brede.',
		2	=> 'Flash-filene kan være opp til %d piksler brede.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Bildene kan være opp til %1$d piksel høye.',
		2	=> 'Bildene kan være opp til %1$d piksler høye.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Bildene kan være opp til %1$d piksel brede.',
		2	=> 'Bildene kan være opp til %1$d piksler brede.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Skriv inn meldingen her, den kan ikke inneholde flere enn <strong>%d</strong> tegn.',
		2	=> 'Skriv inn meldingen her, den kan ikke inneholde flere enn <strong>%d</strong> tegn.',
	),
	'MESSAGE_DELETED'			=> 'Denne meldingen er slettet.',
	'MORE_SMILIES'				=> 'Vis flere smilefjes',

	'NOTIFY_REPLY'				=> 'Varsle meg når et svar legges inn',
	'NOT_UPLOADED'				=> 'Kan ikke laste opp filen.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Du kan ikke slette alternativer i en eksisterende avstemming.',
	'NO_PM_ICON'				=> 'Intet PM-ikon',
	'NO_POLL_TITLE'				=> 'Du må angi et navn på avstemmingen.',
	'NO_POST'					=> 'Det forespurte innlegget finnes ikke.',
	'NO_POST_MODE'				=> 'Ingen innleggsmodus er angitt.',

	'PARTIAL_UPLOAD'			=> 'Den opplastede filen ble bare delvis opplastet.',
	'PHP_SIZE_NA'				=> 'Vedleggets filstørrelse er for stor.<br />Kan ikke fastslå den maksimale størrelsen som er definert av PHP i php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Vedleggets filstørrelse er for stor, den maksimale opplastingsstørrelsen er %1$d %2$s.<br />Merk at dette er angitt i php.ini og ikke kan overstyres.',
	'PLACE_INLINE'				=> 'Plasser i teksten',
	'POLL_DELETE'				=> 'Slett avstemming',
	'POLL_FOR'					=> 'Kjør avstemmingen i',
	'POLL_FOR_EXPLAIN'			=> 'Angi 0 for en evig avstemming.',
	'POLL_MAX_OPTIONS'			=> 'Alternativer per bruker',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Dette er antall alternativer hver enkelt bruker kan velge når de stemmer.',
	'POLL_OPTIONS'				=> 'Alternativer for avstemming',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Angi hvert alternativ på en egen linje. Du kan angi <strong>%d</strong> alternativ.',
		2	=> 'Angi hvert alternativ på en egen linje. Du kan angi <strong>%d</strong> alternativer.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Plasser hvert alternativ på en egen linje. Du kan angi <strong>%d</strong> alternativ. Hvis du fjerner eller legger til alternativer, vil alle stemmer som allerede er avgitt, bli forkastet.',
		2	=> 'Plasser hvert alternativ på en egen linje. Du kan angi <strong>%d</strong> alternativer. Hvis du fjerner eller legger til alternativer, vil alle stemmer som allerede er avgitt, bli forkastet.',
	),
	'POLL_QUESTION'				=> 'Avstemmingsspørsmål',
	'POLL_TITLE_TOO_LONG'		=> 'Navnet på avstemmingen må inneholde færre enn 100 tegn.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Den analyserte størrelsen på navnet på avstemmingen er for stort. Prøv å fjerne BBCode eller smilefjes.',
	'POLL_VOTE_CHANGE'			=> 'Tillat stemmeendring',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Hvis aktivert, kan brukere endre stemmen sin.',
	'POSTED_ATTACHMENTS'		=> 'Innlagte vedlegg',
	'POST_APPROVAL_NOTIFY'		=> 'Du vil bli varslet når innlegget er godkjent.',
	'POST_CONFIRMATION'			=> 'Innleggsbekreftelse',
	'POST_CONFIRM_EXPLAIN'		=> 'For å hindre automatiserte innlegg, krever systemet at du angir en bekreftelseskode. Koden vises i et bilde du skal se nedenfor. Hvis du har dårlig syn eller av andre årsaker ikke kan lese denne koden, kontakter du %ssystemadministratoren%s.',
	'POST_DELETED'				=> 'Dette innlegget er slettet.',
	'POST_EDITED'				=> 'Dette innlegget er redigert.',
	'POST_EDITED_MOD'			=> 'Dette innlegget er redigert, men må godkjennes av en moderator før det blir synlig for alle.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Innleggsikon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Innleggsgjennomgang',
	'POST_REVIEW_EDIT'			=> 'Innleggsgjennomgang',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Dette innlegget er endret av en annen bruker mens du redigerte det. Du vil kanskje se gjennom den gjeldende versjonen av dette innlegget og justere dine egne endringer.',
	'POST_REVIEW_EXPLAIN'		=> 'Minst ett nytt innlegg er kommet i dette emnet. Du vil kanskje se over innlegget ditt i lys av dette.',
	'POST_STORED'				=> 'Denne meldingen er lagt inn.',
	'POST_STORED_MOD'			=> 'Denne meldingen er sendt inn, men den må godkjennes av en moderator før den blir synlig for alle.',
	'POST_TOPIC_AS'				=> 'Legg inn emne som',
	'PROGRESS_BAR'				=> 'Fremdriftslinje',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Du kan bare bruke %d sitat inni hverandre.',
		2	=> 'Du kan bare bruke %d sitater inni hverandre.',
	),
	'QUOTE_NO_NESTING'			=> 'Du kan ikke bruke sitater inni hverandre.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Den angitte filen kan ikke lastes opp fordi forespørselen ble tidsavbrutt.',
	'SAVE'						=> 'Lagre',
	'SAVE_DATE'					=> 'Lagret den',
	'SAVE_DRAFT'				=> 'Lagre kladd',
	'SAVE_DRAFT_CONFIRM'		=> 'Merk at lagrede kladder bare inneholder emne og meldingstekst – alle andre elementer fjernes. Vil du lagre kladden nå?',
	'SMILIES'					=> 'Smilefjes',
	'SMILIES_ARE_OFF'			=> 'Smilefjes er <em>AV</em>',
	'SMILIES_ARE_ON'			=> 'Smilefjes er <em>PÅ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tidsbegrensning for festede/kunngjøringer',
	'STICK_TOPIC_FOR'			=> 'Fest emne i',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Angi 0 for en evig festing/kunngjøring. Merk at dette tallet er relativt til innleggsdatoen.',
	'STYLES_TIP'				=> 'Tips: Stiler kan raskt og enkelt aktiveres på merket tekst.',

	'TOO_FEW_CHARS'				=> 'Meldingen inneholder for få tegn.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Du må angi minst %1$d tegn.',
		2	=> 'Du må angi minst %1$d tegn.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Du må angi minst to avstemmingsalternativer.',
	'TOO_MANY_ATTACHMENTS'		=> 'Kan ikke legge til flere vedlegg, %d er det maksimale.',
	'TOO_MANY_CHARS'			=> 'Meldingen din inneholder for mange tegn.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Det maksimale antallet tillatte tegn er %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Du har prøvd å angi for mange avstemmingsalternativer.',
	'TOO_MANY_SMILIES'			=> 'Meldingen inneholder for mange smilefjes. Det maksimale antallet smilefjes som tillates, er %d.',
	'TOO_MANY_URLS'				=> 'Meldingen inneholder for mange URL-er. Det maksimale antallet URL-er som tillates, er %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Du kan ikke angi flere alternativer per bruker enn det eksisterer avstemmingsalternativer.',
	'TOPIC_BUMPED'				=> 'Emnet er fremmet.',

	'UNAUTHORISED_BBCODE'		=> 'Du kan ikke bruke visse BBCode-er: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Hvis du vil endre dette emnet fra et globalt til et normalt emne, må du velge hvilket forum du vil at emnet skal vises i.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Meldingen inneholder følgende tegn som ikke støttes:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Emnet inneholder følgende tegn som ikke støttes:<br />%s',
	'UPDATE_COMMENT'			=> 'Oppdater kommentar',
	'URL_INVALID'				=> 'URL-en du angav, er ugyldig.',
	'URL_NOT_FOUND'				=> 'Finner ikke den angitte filen.',
	'URL_IS_OFF'				=> '[url] er <em>AV</em>',
	'URL_IS_ON'					=> '[url] er <em>PÅ</em>',
	'USER_CANNOT_BUMP'			=> 'Du kan ikke fremme emner i dette forumet.',
	'USER_CANNOT_DELETE'		=> 'Du kan ikke slette innlegg i dette forumet.',
	'USER_CANNOT_EDIT'			=> 'Du kan ikke redigere innlegg i dette forumet.',
	'USER_CANNOT_REPLY'			=> 'Du kan ikke svare i dette forumet.',
	'USER_CANNOT_FORUM_POST'	=> 'Du kan ikke gjøre innleggshandlinger i dette forumet, ettersom forumtypen ikke støtter dem.',

	'VIEW_MESSAGE'				=> '%sVis den innsendte meldingen%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVis den innsendte private meldingen%s',

	'WRONG_FILESIZE'			=> 'Filen er for stor, den maksimalt tillatte størrelsen er %1$d %2$s.',
	'WRONG_SIZE'				=> 'Bildet må være minst %1$s bredt, %2$s høyt og maksimalt %3$s bredt og %4$s høyt. Det innsendte bildet er %5$s bredt og %6$s høyt.',
));
