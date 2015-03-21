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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode er en spesiell HTML-implementering som gir bedre kontroll over hva og hvordan noe vises. Fra denne siden kan du legge til, fjerne og redigere egendefinerte BBCode-tagger.',
	'ADD_BBCODE'				=> 'Legg til en ny BBCode-tagg',

	'BBCODE_DANGER'				=> 'BBCode-taggen du prøver å legge til, ser ut til å bruke et {TEXT}-element inni et HTML-attributt. Dette er et mulig XSS-sikkerhetsproblem. Prøv å bruke de mer restriktive typene {SIMPLETEXT} eller {INTTEXT} i stedet. Gå bare videre hvis du forstår denne risikoen og anser bruken av {TEXT} som helt uunngåelig.',
	'BBCODE_DANGER_PROCEED'		=> 'Fortsett', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode-tagg er lagt til.',
	'BBCODE_EDITED'				=> 'BBCode-tagg er redigert.',
	'BBCODE_DELETED'			=> 'BBCode-taggen er fjernet.',
	'BBCODE_NOT_EXIST'			=> 'BBCode-taggen du valgte, finnes ikke.',
	'BBCODE_HELPLINE'			=> 'Hjelpelinje',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Dette feltet inneholder mouseover-teksten for BBCode-taggen.',
	'BBCODE_HELPLINE_TEXT'		=> 'Hjelpelinjetekst',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Hjelpelinjen du angav, er for lang.',

	'BBCODE_INVALID_TAG_NAME'	=> 'BBCode-taggnavnet du valgte, finnes allerede.',
	'BBCODE_INVALID'			=> 'BBCode-taggen er bygd opp på en måte som er ugyldig.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Den egendefinerte BBCode-taggen må inneholde både en åpnings- og en lukketagg.',
	'BBCODE_TAG'				=> 'Tagg',
	'BBCODE_TAG_TOO_LONG'		=> 'Taggnavnet du valgte, er for langt.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Taggdefinisjonen du har angitt, er for lang. Gjør taggdefinisjonen kortere.',
	'BBCODE_USAGE'				=> 'BBCode-bruk',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Her definerer du hvordan BBCode-taggen brukes. Bytt ut variable inndata med tilsvarende koder (%sse nedenfor%s).',

	'EXAMPLE'						=> 'Eksempel:',
	'EXAMPLES'						=> 'Eksempler:',

	'HTML_REPLACEMENT'				=> 'HTML-erstatning',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Her definerer du standard HTML-erstatning. Ikke glem å sette inn kodene du brukte over!',

	'TOKEN'					=> 'Kode',
	'TOKENS'				=> 'Koder',
	'TOKENS_EXPLAIN'		=> 'Koder er plassholdere for brukerinndata. Inndataene valideres bare hvis det samsvarer med den aktuelle definisjonen. Om nødvendig kan du nummerere dem ved å legge til et tall som siste tegn mellom klammene, f.eks. {TEXT1}, {TEXT2}.<br /><br />Inni HTML-erstatningen kan du også bruke alle språkstrenger som finnes i mappen language/ på denne måten: {L_<em>&lt;STRINGNAME&gt;</em>} hvor <em>&lt;STRINGNAME&gt;</em> er navnet på den oversatte strengen du vil legge til. For eksempel vil {L_WROTE} vises som «wrote» eller oversettelsen av dette, i henhold til brukerens språkinnstilling.<br /><br /><strong>Merk at det bare er kodene som står i listen nedenfor, som kan brukes i egendefinerte BBCode-tagger.</strong>',
	'TOKEN_DEFINITION'		=> 'Hva kan den være?',
	'TOO_MANY_BBCODES'		=> 'Du kan ikke opprette flere BBCode-tagger. Fjern én eller flere BBCode-tagger og prøv igjen.',

	'tokens'	=>	array(
		'TEXT'			=> 'En hvilken som helst tekst, inkludert utenlandske tegn, tall osv. Du bør ikke bruke denne koden i HTML-tagger. Prøv heller å bruke IDENTIFIER, INTTEXT eller SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Tegn fra det latinske alfabetet (A-Z), sifre, mellomrom, komma, punktum, minustegn, plusstegn, bindestrek og understrek',
		'INTTEXT'		=> 'Unicode-bokstavtegn, sifre, mellomrom, komma, punktum, minustegn, plusstegn, bindestrek, understrek og mellomromstegn.',
		'IDENTIFIER'	=> 'Tegn fra det latinske alfabetet (A-Z), sifre, bindestrek og understrek',
		'NUMBER'		=> 'Enhver serie med sifre',
		'EMAIL'			=> 'En gyldig e-postadresse',
		'URL'			=> 'En gyldig URL med en hvilken som helst protokoll (http, ftp, osv. – kan ikke brukes til javascript-utnyttelser). Hvis intet angis, legges «http://» til foran strengen.',
		'LOCAL_URL'		=> 'En lokal URL. URL-en må være relativ til emnesiden og kan ikke inneholde servernavn eller protokoll, ettersom lenkene får prefikset «%s»',
		'RELATIVE_URL'	=> 'En relativ URL. Du kan bruke dette for å gi treff på deler av en URL, men vær varsom: En fullstendig URL er en gyldig relativ URL. Når du vil bruke relative URL-er for systemet, bruker du koden LOCAL_URL.',
		'COLOR'			=> 'En HTML-farge, kan enten være på tallformen <samp>#FF1234</samp> eller et <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS-fargenavn</a> som for eksempel <samp>fuchsia</samp> eller <samp>InactiveBorder</samp>',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Fra denne siden kan du legge til, fjerne og redigere ikonene brukere kan legge til i emner eller innlegg. Disse ikonene vises vanligvis ved siden av emnetitlene i forumoppføringer, eller innleggstittel i emneoppføringer. Du kan også installere og opprette nye ikonpakker.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilefjes eller emotikoner er vanligvis små og av og til animerte bilder som brukes til å formidle følelser eller stemninger. Fra denne siden kan du legge til, fjerne og redigere emotikonene brukerne kan bruke i innlegg og private meldinger. Du kan også installere og opprette nye smilefjespakker.',
	'ADD_SMILIES'			=> 'Legg til flere smilefjes',
	'ADD_SMILEY_CODE'		=> 'Legg til ny smilefjeskode',
	'ADD_ICONS'				=> 'Legg til flere ikoner',
	'AFTER_ICONS'			=> 'Etter %s',
	'AFTER_SMILIES'			=> 'Etter %s',

	'CODE'						=> 'Kode',
	'CURRENT_ICONS'				=> 'Gjeldende ikoner',
	'CURRENT_ICONS_EXPLAIN'		=> 'Velg hva som skal gjøres med ikonene som allerede er installert.',
	'CURRENT_SMILIES'			=> 'Gjeldende smilefjes',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Velg hva som skal gjøres med smilefjesene som allerede er installert.',

	'DISPLAY_ON_POSTING'		=> 'Vis på innleggsside',
	'DISPLAY_POSTING'			=> 'På innleggsside',
	'DISPLAY_POSTING_NO'		=> 'Ikke på innleggsside',

	'EDIT_ICONS'				=> 'Rediger ikoner',
	'EDIT_SMILIES'				=> 'Rediger smilefjes',
	'EMOTION'					=> 'Følgelse',
	'EXPORT_ICONS'				=> 'Eksporter og last ned icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sNår du klikker denne lenken, pakkes konfigurasjonen for de installerte ikonene sammen i <samp>icons.pak</samp>, som straks den er lastet ned, kan brukes til å opprette en <samp>.zip</samp>- eller <samp>.tgz</samp>-fil som inneholder alle ikonene dine, pluss denne <samp>icons.pak</samp>-konfigurasjonsfilen%s.',
	'EXPORT_SMILIES'			=> 'Eksporter og last ned smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sNår du klikker denne lenken, pakkes konfigurasjonen for de installerte smilefjesene sammen i <samp>smilies.pak</samp>, som straks den er lastet ned, kan brukes til å opprette en <samp>.zip</samp>- eller <samp>.tgz</samp>-fil som inneholder alle smilefjesene dine, pluss denne <samp>smilies.pak</samp>-konfigurasjonsfilen%s.',

	'FIRST'			=> 'Først',

	'ICONS_ADD'				=> 'Legg til et nytt ikon',
	'ICONS_ADDED'			=> array(
		0	=> 'Ingen ikoner ble lagt til.',
		1	=> 'Ikonet er lagt til.',
		2	=> 'Ikonene er lagt til.',
	),
	'ICONS_CONFIG'			=> 'Ikonkonfigurasjon',
	'ICONS_DELETED'			=> 'Ikonet er fjernet.',
	'ICONS_EDIT'			=> 'Rediger ikon',
	'ICONS_EDITED'			=> array(
		0	=> 'Ingen ikoner ble oppdatert.',
		1	=> 'Ikonet er oppdatert.',
		2	=> 'Ikonene er oppdatert.',
	),
	'ICONS_HEIGHT'			=> 'Ikonhøyde',
	'ICONS_IMAGE'			=> 'Ikonbilde',
	'ICONS_IMPORTED'		=> 'Ikonpakken er installert.',
	'ICONS_IMPORT_SUCCESS'	=> 'Ikonpakken er importert.',
	'ICONS_LOCATION'		=> 'Ikonplassering',
	'ICONS_NOT_DISPLAYED'	=> 'Følgende ikoner vises ikke på innleggssiden',
	'ICONS_ORDER'			=> 'Ikonrekkefølge',
	'ICONS_URL'				=> 'Ikonbildefil',
	'ICONS_WIDTH'			=> 'Ikonbredde',
	'IMPORT_ICONS'			=> 'Installer ikonpakke',
	'IMPORT_SMILIES'		=> 'Installer smilefjespakke',

	'KEEP_ALL'			=> 'Behold alt',

	'MASS_ADD_SMILIES'	=> 'Legg til flere smilefjes',

	'NO_ICONS_ADD'		=> 'Ingen ikoner er tilgjengelige for å legges til.',
	'NO_ICONS_EDIT'		=> 'Ingen ikoner er tilgjengelige for endring.',
	'NO_ICONS_EXPORT'	=> 'Du har ingen ikoner å opprette en pakke med.',
	'NO_ICONS_PAK'		=> 'Fant ingen ikonpakker.',
	'NO_SMILIES_ADD'	=> 'Ingen smilefjes er tilgjengelige for å legges til.',
	'NO_SMILIES_EDIT'	=> 'Ingen smilefjes er tilgjengelige for endring.',
	'NO_SMILIES_EXPORT'	=> 'Du har ingen smilefjes å opprette en pakke med.',
	'NO_SMILIES_PAK'	=> 'Fant ingen smilefjespakker.',

	'PAK_FILE_NOT_READABLE'		=> 'Kan ikke lese <samp>.pak</samp>-filen.',

	'REPLACE_MATCHES'	=> 'Erstatt treff',

	'SELECT_PACKAGE'			=> 'Velg en pakkefil',
	'SMILIES_ADD'				=> 'Legg til et nytt smilefjes',
	'SMILIES_ADDED'				=> array(
		0	=> 'Ingen smilefjes ble lagt til.',
		1	=> 'Smilefjeset er lagt til.',
		2	=> 'Smilefjesene er lagt til.',
	),
	'SMILIES_CODE'				=> 'Smilefjeskode',
	'SMILIES_CONFIG'			=> 'Smilefjeskonfigurasjon',
	'SMILIES_DELETED'			=> 'Smilefjeset er fjernet.',
	'SMILIES_EDIT'				=> 'Rediger smilefjes',
	'SMILIE_NO_CODE'			=> 'Smilefjeset «%s» ble ignorert ettersom ingen kode ble angitt.',
	'SMILIE_NO_EMOTION'			=> 'Smilefjeset «%s» ble ignorert ettersom ingen følelse ble angitt.',
	'SMILIE_NO_FILE'			=> 'Smilefjeset «%s» ble ignorert ettersom filen mangler.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Ingen smilefjes ble oppdatert.',
		1	=> 'Smilefjeset er oppdatert.',
		2	=> 'Smilefjesene er oppdatert.',
	),
	'SMILIES_EMOTION'			=> 'Følelse',
	'SMILIES_HEIGHT'			=> 'Smilefjeshøyde',
	'SMILIES_IMAGE'				=> 'Smilefjesbilde',
	'SMILIES_IMPORTED'			=> 'Smilefjespakken er installert.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Smilefjespakken ble importert.',
	'SMILIES_LOCATION'			=> 'Smilefjesplassering',
	'SMILIES_NOT_DISPLAYED'		=> 'Følgende smilefjes vises ikke på innleggssiden',
	'SMILIES_ORDER'				=> 'Smilefjesrekkefølge',
	'SMILIES_URL'				=> 'Smilefjesbildefil',
	'SMILIES_WIDTH'				=> 'Smilefjesbredde',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Grensen på %d smilefjes er nådd.',
		2	=> 'Grensen på %d smilefjes er nådd.',
	),

	'WRONG_PAK_TYPE'	=> 'Den angitte pakken inneholder ikke de nødvendige data.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Fra dette kontrollpanelet kan du legge til, redigere og fjerne ord som blir sensurert automatisk på foraene. Det er fortsatt mulig å registrere brukernavn som inneholder disse ordene. Jokertegn (*) godtas i ordfeltet, f.eks. vil *inn* gi treff på vinner, inn* vil gi treff på innenfor og *inn vil gi treff på spinn.',
	'ADD_WORD'				=> 'Legg til nytt ord',

	'EDIT_WORD'		=> 'Rediger ordsensur',
	'ENTER_WORD'	=> 'Du må angi et ord og erstatningen for det.',

	'NO_WORD'	=> 'Intet ord er valgt for redigering.',

	'REPLACEMENT'	=> 'Erstatning',

	'UPDATE_WORD'	=> 'Oppdater ordsensur',

	'WORD'				=> 'Ord',
	'WORD_ADDED'		=> 'Ordsensuren er lagt til.',
	'WORD_REMOVED'		=> 'Den valgte ordsensuren er fjernet.',
	'WORD_UPDATED'		=> 'Den valgte ordsensuren er oppdatert.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Ved hjelp av dette skjemaet kan du legge til, redigere, vise og slette grader. Du kan også opprette spesialgrader som kan tilordnes brukere via mulighetene for brukeradministrasjon.',
	'ADD_RANK'				=> 'Legg til ny grad',

	'MUST_SELECT_RANK'		=> 'Du må velge en grad.',

	'NO_ASSIGNED_RANK'		=> 'Ingen spesialgrad er tilordnet.',
	'NO_RANK_TITLE'			=> 'Du har ikke angitt noen tittel for graden.',
	'NO_UPDATE_RANKS'		=> 'Graden ble slettet. Kontoer som bruker denne graden, ble imidlertid ikke oppdatert. Du må manuelt tilbakestille graden for disse kontoene.',

	'RANK_ADDED'			=> 'Graden ble lagt til.',
	'RANK_IMAGE'			=> 'Gradbilde',
	'RANK_IMAGE_EXPLAIN'	=> 'Bruk dette til å definere et lite bilde som er tilknyttet graden.Banen er relativ til rot-phpBB-mappen.',
	'RANK_IMAGE_IN_USE'		=> '(I bruk)',
	'RANK_MINIMUM'			=> 'Minste antall innlegg',
	'RANK_REMOVED'			=> 'Graden ble slettet.',
	'RANK_SPECIAL'			=> 'Angi som spesialgrad',
	'RANK_TITLE'			=> 'Gradtittel',
	'RANK_UPDATED'			=> 'Graden ble oppdatert.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Her kan du kontrollere hvilke brukernavn som ikke tillates brukt. Forbudte brukernavn kan inneholde jokertegnet *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Du kan forby et brukernavn ved hjelp av jokertegnet * for å gi treff på alle tegn.',
	'ADD_DISALLOW_TITLE'	=> 'Legg til et forbudt brukernavn',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Du kan fjerne et forbudt brukernavn ved å velge brukernavnet i denne listen og klikke Send.',
	'DELETE_DISALLOW_TITLE'		=> 'Fjern et forbudt brukernavn',
	'DISALLOWED_ALREADY'		=> 'Navnet du angav, er allerede forbudt.',
	'DISALLOWED_DELETED'		=> 'Det forbudte brukernavnet er fjernet.',
	'DISALLOW_SUCCESSFUL'		=> 'Det forbudte brukernavnet er lagt til.',

	'NO_DISALLOWED'				=> 'Ingen forbudte brukernavn',
	'NO_USERNAME_SPECIFIED'		=> 'Du har ikke skrevet eller valgt noe brukernavn.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Her kan du administrere begrunnelsene som brukes i rapporter og avslagsmeldinger når innlegg avslås. Det er én standardbegrunnelse (merket med *) som du ikke kan fjerne – denne begrunnelsen brukes vanligvis til egendefinerte meldinger når ingen andre begrunnelser passer.',
	'ADD_NEW_REASON'		=> 'Legg til ny begrunnelse',
	'AVAILABLE_TITLES'		=> 'Tilgjengelige lokaliserte begrunnelsestitler',

	'IS_NOT_TRANSLATED'			=> 'Begrunnelsen er <strong>ikke</strong> lokalisert.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Begrunnelsen er <strong>ikke</strong> lokalisert. Hvis du vil angi den lokaliserte formen, angir du riktig nøkkel fra delen med rapportbegrunnelser i språkfilene.',
	'IS_TRANSLATED'				=> 'Begrunnelsen er lokalisert.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Begrunnelsen er lokalisert. Hvis tittelen du angir her, er angitt i delen med rapportbegrunnelser i språkfilene, vil den lokaliserte formen av tittel og beskrivelse brukes.',

	'NO_REASON'					=> 'Finner ikke begrunnelse.',
	'NO_REASON_INFO'			=> 'Du må angi en tittel og en beskrivelse for denne begrunnelsen.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Du kan ikke fjerne standardbegrunnelsen «Annet».',

	'REASON_ADD'				=> 'Legg til begrunnelse for rapport/avslag',
	'REASON_ADDED'				=> 'Begrunnelse for rapport/avslag er lagt til.',
	'REASON_ALREADY_EXIST'		=> 'Det finnes allerede en begrunnelsen med denne tittelen. Angi en annen tittel for denne begrunnelsen.',
	'REASON_DESCRIPTION'		=> 'Beskrivelse av begrunnelse',
	'REASON_DESC_TRANSLATED'	=> 'Vis beskrivelse av begrunnelse',
	'REASON_EDIT'				=> 'Rediger begrunnelse for rapport/avslag',
	'REASON_EDIT_EXPLAIN'		=> 'Her kan du legge til eller redigere en begrunnelse. Hvis begrunnelsen er oversatt, brukes den lokaliserte versjonen i stedet for beskrivelsen som angis her.',
	'REASON_REMOVED'			=> 'Begrunnelse for rapport/avslag er fjernet.',
	'REASON_TITLE'				=> 'Tittel for begrunnelse',
	'REASON_TITLE_TRANSLATED'	=> 'Vist tittel for begrunnelse',
	'REASON_UPDATED'			=> 'Begrunnelse for rapport/avslag er oppdatert.',

	'USED_IN_REPORTS'		=> 'Brukes i rapporter',
));
