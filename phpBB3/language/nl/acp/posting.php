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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode is een speciale implementatie van HTML, wat een grotere controle geeft over wat en hoe iets wordt weergegeven. Op deze pagina kan je eigen BBCodes toevoegen, verwijderen en wijzigen.',
	'ADD_BBCODE'				=> 'Een nieuwe BBCode toevoegen',

	'BBCODE_DANGER'				=> 'De BBCode, die je probeert toe te voegen, lijkt een {TEXT} token te gebruiken in een HTML attribuut. Dit is een mogelijk XSS-beveiligingsprobleem. Probeer de meer beperkende {SIMPLETEXT} of {INTTEXT} types te gebruiken. Ga alleen verder als je de risico‘s begrijpt en je vindt het gebruik van {TEXT} absoluut onvermijdelijk.',
	'BBCODE_DANGER_PROCEED'		=> 'Doorgaan', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode succesvol toegevoegd.',
	'BBCODE_EDITED'				=> 'BBCode succesvol gewijzigd.',
	'BBCODE_DELETED'			=> 'De BBCode is succesvol verwijderd.',
	'BBCODE_NOT_EXIST'			=> 'De BBCode die je hebt geselecteerd, bestaat niet.',
	'BBCODE_HELPLINE'			=> 'Hulpregel',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Dit veld bevat de "muis-over-tekst" van de BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Hulpregeltekst',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'De hulpregel die je hebt ingevoerd is te lang.',

	'BBCODE_INVALID_TAG_NAME'	=> 'De BBCode-tagnaam, die je hebt ingevoerd, bestaat al.',
	'BBCODE_INVALID'			=> 'Je BBCode is aangemaakt in een ongeldig wijze.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Je eigen BBCode moet zowel een openings- als een sluitingstag hebben.',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'De tagnaam, die je hebt ingevoerd, is te lang.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'De tagedefinitie, die je hebt ingevoerd, is te lang, vul een kortere tagdefinitie in.',
	'BBCODE_USAGE'				=> 'BBCode gebruik',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Hier kan je definiëren hoe de BBCode gebruikt moet worden. Vervang iedere variabele input door de bijbehorende token (%szie hieronder%s).',

	'EXAMPLE'						=> 'Voorbeeld:',
	'EXAMPLES'						=> 'Voorbeelden:',

	'HTML_REPLACEMENT'				=> 'HTML vervanging',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Hier kan je de standaard HTML vervanging definiëren. Vergeet niet de tokens te plaatsen die je hierboven hebt gebruikt!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokens',
	'TOKENS_EXPLAIN'		=> 'Tokens zijn plaatshouders voor gebruikersinvoer. De invoer zal alleen gevalideerd worden als het overeenkomt met de bijbehorende definitie. Indien nodig, kan je ze nummeren door een nummer toe te voegen als laatste karakter tussen de haakjes, bijv. {TEXT1}, {TEXT2}.<br /><br />In de HTML vervanging kan je ook gebruik maken van iedere taalstring die aanwezig is in je language/ map, zoals dit: {L_<em>&lt;STRINGNAME&gt;</em>} waar <em>&lt;STRINGNAME&gt;</em> de naam is van de vertaalde string die je wilt toevoegen. Bijvoorbeeld, {L_WROTE} zal worden weergegeven als “schreef” of zijn vertaling volgens de gebruikers taalinstelling.<br /><br /><strong>Let op dat alleen tokens die hieronder genoemd worden alleen gebruikt kunnen worden in de eigen BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'Wat kan het zijn?',
	'TOO_MANY_BBCODES'		=> 'Je kan niet meer BBCodes aanmaken. Verwijder één of meerdere BBCodes en probeer het opnieuw.',

	'tokens'	=>	array(
		'TEXT'			=> 'Iedere tekst, inclusief buitenlandse karakters, nummers, etc… Je kan dit token beter niet gebruiken in HTML tags. Probeer in plaats daarvan IDENTIFIER, INTTEXT of SIMPLETEXT te gebruiken.',
		'SIMPLETEXT'	=> 'Karakters uit het latijnse alfabet (A-Z), nummers, spaties, komma‘s, punten, minus, plus, koppelteken en underscore',
		'INTTEXT'		=> 'Unicode letter karakters, nummers, spaties, komma‘s, punten, minus, plus, koppelteken, underscore en whitespaces.',
		'IDENTIFIER'	=> 'Karakters uit het latijnse alfabet (A-Z), nummers, koppelteken en underscore',
		'NUMBER'		=> 'Iedere serie van cijfers',
		'EMAIL'			=> 'Een geldig e-mailadres',
		'URL'			=> 'Een geldig URL, die een protocol gebruikt (http, ftp, etc… kan niet gebruikt worden voor javascript exploits). Als er niks is opgegeven, zal “http://” worden toegevoegd aan de reeks.',
		'LOCAL_URL'		=> 'Een lokale URL. De URL moet relatief zijn aan de onderwerpenpagina en kan geen servernaam of protocol bevatten, omdat linken worden aangemaakt met “%s” als begin',
		'RELATIVE_URL'	=> 'Een relatieve URL. Je kan dit gebruiken om delen van een URL te herleiden, maar wees voorzichtig: een volledige URL is een geldige relatieve URL. Wanneer je relatieve URLs wilt gebruiken voor je forum, gebruik dan de LOCAL_URL token.',
		'COLOR'			=> 'Een HTML kleur, kan geschreven worden in numerieke vorm <samp>#FF1234</samp> of als een <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS kleur sleutelwoord</a> zoals <samp>fuchsia</samp> of <samp>InactiveBorder</samp>'
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Op deze pagina kan je de iconen toevoegen verwijderen en wijzigen, die gebruikers kunnen toevoegen aan hun onderwerpen of berichten. Deze iconen worden over het algemeen naast de onderwerptitels weergegeven op de forumlijst, of de berichtonderwerpen in onderwerplijsten. Je kan ook nieuwe pakketten van iconen installeren en aanmaken.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies of emoticons zijn typische kleine, soms geanimeerde afbeeldingen die gebruikt worden om een emotie of gevoel over te brengen. Op deze pagina kan je de smilies toevoegen, verwijderen en wijzigen, die gebruikers kunnen gebruiken in hun berichten. Je kan ook nieuwe pakketten van smilies installeren en aanmaken.',
	'ADD_SMILIES'			=> 'Meerdere smilies toevoegen',
	'ADD_SMILEY_CODE'		=> 'Extra smileycode toevoegen',
	'ADD_ICONS'				=> 'Meerdere iconen toevoegen',
	'AFTER_ICONS'			=> 'Na %s',
	'AFTER_SMILIES'			=> 'Na %s',

	'CODE'						=> 'Code',
	'CURRENT_ICONS'				=> 'Bestaande iconen',
	'CURRENT_ICONS_EXPLAIN'		=> 'Kies wat er moet gebeuren met de bestaande geïnstalleerde iconen.',
	'CURRENT_SMILIES'			=> 'Bestaande smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Kies wat er moet gebeuren met de bestaande geïnstalleerde smilies.',

	'DISPLAY_ON_POSTING'		=> 'Weergeven op de berichten',
	'DISPLAY_POSTING'			=> 'Op berichtenpagina',
	'DISPLAY_POSTING_NO'		=> 'Niet op berichtenpagina',

	'EDIT_ICONS'				=> 'Iconen wijzigen',
	'EDIT_SMILIES'				=> 'Smilies wijzigen',
	'EMOTION'					=> 'Emoties',
	'EXPORT_ICONS'				=> 'Exporteer en download icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sDoor te klikken op deze link, zal de configuratie van je geïnstalleerde iconen worden verpakt in <samp>icons.pak</samp>, wanneer deze is gedownload, kan dit gebruikt worden om een <samp>.zip</samp> of <samp>.tgz</samp> bestand te maken wat al je iconen bevat plus dit <samp>icons.pak</samp> configuratiebestand%s.',
	'EXPORT_SMILIES'			=> 'Exporteer en download smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sDoor te klikken op deze link, zal de configuratie van je geïnstalleerde smilies worden verpakt in <samp>smilies.pak</samp>, wanneer deze is gedownload, kan dit gebruikt worden om een <samp>.zip</samp> of <samp>.tgz</samp> bestand te maken wat al je smilies bevat plus dit <samp>smilies.pak</samp> configuratiebestand%s.',

	'FIRST'			=> 'Eerst',

	'ICONS_ADD'				=> 'Een nieuw icoon toevoegen',
	'ICONS_ADDED'			=> array(
		0	=> 'Geen iconen zijn toegevoegd.',
		1	=> 'Het icoon is succesvol toegevoegd.',
		2	=> 'De iconen zijn succesvol toegevoegd.',
	),
	'ICONS_CONFIG'			=> 'Icon configuratie',
	'ICONS_DELETED'			=> 'Het icoon is succesvol verwijderd.',
	'ICONS_EDIT'			=> 'Icoon wijzigen',
	'ICONS_EDITED'			=> array(
		0	=> 'Geen iconen zijn gewijzigd.',
		1	=> 'Het icoon is succesvol gewijzigd.',
		2	=> 'De iconen zijn succesvol gewijzigd.',
	),
	'ICONS_HEIGHT'			=> 'Icoonhoogte',
	'ICONS_IMAGE'			=> 'Icoonafbeelding',
	'ICONS_IMPORTED'		=> 'Het iconenpakket is succesvol geïnstalleerd.',
	'ICONS_IMPORT_SUCCESS'	=> 'Het iconenpakket is succesvol geïmporteerd.',
	'ICONS_LOCATION'		=> 'Icoonlocatie',
	'ICONS_NOT_DISPLAYED'	=> 'De volgende iconen worden niet weergegeven op de berichtenpagina',
	'ICONS_ORDER'			=> 'Icoonvolgorde',
	'ICONS_URL'				=> 'Icoonafbeeldingsbestand',
	'ICONS_WIDTH'			=> 'Icoonbreedte',
	'IMPORT_ICONS'			=> 'Iconenpakket installeren',
	'IMPORT_SMILIES'		=> 'Smiliespakket installeren',

	'KEEP_ALL'			=> 'Alle houden',

	'MASS_ADD_SMILIES'	=> 'Meerdere smilies toevoegen',

	'NO_ICONS_ADD'		=> 'Er zijn geen iconen beschikbaar om toe te voegen.',
	'NO_ICONS_EDIT'		=> 'Er zijn geen iconen beschikbaar om te wijzigen.',
	'NO_ICONS_EXPORT'	=> 'Je hebt geen iconen om een pakket mee aan te maken.',
	'NO_ICONS_PAK'		=> 'Geen iconenpakketten gevonden.',
	'NO_SMILIES_ADD'	=> 'Er zijn geen smilies beschikbaar om toe te voegen.',
	'NO_SMILIES_EDIT'	=> 'Er zijn geen smilies beschikbaar om te wijzigen.',
	'NO_SMILIES_EXPORT'	=> 'Je hebt geen smilies om een pakket mee aan te maken.',
	'NO_SMILIES_PAK'	=> 'Geen smileypakketten gevonden.',

	'PAK_FILE_NOT_READABLE'		=> 'Kan <samp>.pak</samp> bestand niet lezen.',

	'REPLACE_MATCHES'	=> 'Vervang overeenkomsten',

	'SELECT_PACKAGE'			=> 'Selecteer een pakketbestand',
	'SMILIES_ADD'				=> 'Een nieuwe smiley toevoegen',
	'SMILIES_ADDED'				=> array(
		0	=> 'Geen smilies zijn toegevoegd.',
		1	=> 'De smiley is succesvol toegevoegd.',
		2	=> 'De smilies zijn succesvol toegevoegd.',
	),
	'SMILIES_CODE'				=> 'Smileycode',
	'SMILIES_CONFIG'			=> 'Smileyconfiguratie',
	'SMILIES_DELETED'			=> 'De smiley is succesvol verwijderd.',
	'SMILIES_EDIT'				=> 'Smiley wijzigen',
	'SMILIE_NO_CODE'			=> 'De smiley “%s” is genegeerd, omdat er geen code was ingevoerd.',
	'SMILIE_NO_EMOTION'			=> 'De smiley “%s” is genegeerd, omdat er geen emotie was ingevoerd.',
	'SMILIE_NO_FILE'			=> 'De smiley “%s” is genegeerd, omdat het bestand mist.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Geen smilies gewijzigd.',
		1	=> 'De smiley is succesvol gewijzigd.',
		2	=> 'De smilies zijn succesvol gewijzigd.',
	),
	'SMILIES_EMOTION'			=> 'Emotie',
	'SMILIES_HEIGHT'			=> 'Smiley-hoogte',
	'SMILIES_IMAGE'				=> 'Smiley-afbeelding',
	'SMILIES_IMPORTED'			=> 'Het smiliespakket is succesvol geïnstalleerd.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Het smiliespakket is succesvol geïmporteerd.',
	'SMILIES_LOCATION'			=> 'Smiley-locatie',
	'SMILIES_NOT_DISPLAYED'		=> 'De volgende smilies worden niet weergegeven op de berichtenpagina',
	'SMILIES_ORDER'				=> 'Smiley-volgorde',
	'SMILIES_URL'				=> 'Smiley-afbeeldingsbestand',
	'SMILIES_WIDTH'				=> 'Smiley-breedte',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Limiet van %d smiley bereikt.',
		2	=> 'Limiet van %d smilies bereikt.',
	),

	'WRONG_PAK_TYPE'	=> 'Het opgegeven pakket bevat niet de benodigde data.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Via dit controlepaneel kan je woorden toevoegen, verwijderen en wijzigen die automatisch zullen worden gecensureerd op je forums. Mensen zijn nog steeds toegestaan om te registreren met gebruikersnamen die deze woorden bevatten. Jokers (*) worden geaccepteerd in het woordveld, bijv. *test* zal overeenkomen met protesten, test* zal overeenkomen met testfase, *test zal overeenkomen met blaastest.',
	'ADD_WORD'				=> 'Nieuw woord toevoegen',

	'EDIT_WORD'		=> 'Woord wijzigen',
	'ENTER_WORD'	=> 'Je moet een woord invoeren en zijn vervanging.',

	'NO_WORD'	=> 'Geen woord geselecteerd voor wijziging.',

	'REPLACEMENT'	=> 'Vervanging',

	'UPDATE_WORD'	=> 'Woord bijwerken',

	'WORD'				=> 'Woord',
	'WORD_ADDED'		=> 'Het woord is succesvol toegevoegd.',
	'WORD_REMOVED'		=> 'Het geselecteerde woord is succesvol verwijderd.',
	'WORD_UPDATED'		=> 'Het geselecteerde woord is succesvol gewijzigd.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Via dit paneel kan je rangen toevoegen, wijzigen en verwijderen. Je kan ook speciale rangen aanmaken die toegewezen kunnen worden aan een gebruiker via het gebruikersbeheer.',
	'ADD_RANK'				=> 'Nieuwe rang toevoegen',

	'MUST_SELECT_RANK'		=> 'Je moet een rang selecteren.',

	'NO_ASSIGNED_RANK'		=> 'Geen speciale rang toegewezen.',
	'NO_RANK_TITLE'			=> 'Je hebt geen titel voor de rang opgegeven.',
	'NO_UPDATE_RANKS'		=> 'De rang is succesvol verwijderd. Echter zijn er gebruikersaccounts die deze rang gebruiken nog niet bijgewerkt. Je zal handmatig de rangen van deze accounts moeten resetten.',

	'RANK_ADDED'			=> 'De rang is succesvol toegevoegd.',
	'RANK_IMAGE'			=> 'Rangafbeelding',
	'RANK_IMAGE_EXPLAIN'	=> 'Gebruik dit om een kleine afbeelding op te geven die geassocieerd wordt met de rang. Het pad is relatief aan de phpBB hoofdmap.',
	'RANK_IMAGE_IN_USE'		=> '(In gebruik)',
	'RANK_MINIMUM'			=> 'Minimum berichten',
	'RANK_REMOVED'			=> 'De rang is succesvol verwijderd.',
	'RANK_SPECIAL'			=> 'Instellen als speciale rang',
	'RANK_TITLE'			=> 'Rangtitel',
	'RANK_UPDATED'			=> 'De rang is succesvol gewijzigd.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Hier kan je gebruikersnamen beheren welke niet toegestaan zijn om te gebruiken. Verboden gebruikersnamen kunnen een joker (*) bevatten.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Je kan een gebruikersnaam verbieden door middel van een joker (*) te gebruiken zodat het overeenkomt met elk teken.',
	'ADD_DISALLOW_TITLE'	=> 'Een verboden gebruikersnaam toevoegen',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Je kan een verboden gebruikersnaam verwijderen door de gebruikersnaam te selecteren van deze lijst en op verstuur te klikken.',
	'DELETE_DISALLOW_TITLE'		=> 'Een verboden gebruikersnaam verwijderen',
	'DISALLOWED_ALREADY'		=> 'De naam die je hebt ingevoerd is al verboden.',
	'DISALLOWED_DELETED'		=> 'De verboden gebruikersnaam is succesvol verwijderd.',
	'DISALLOW_SUCCESSFUL'		=> 'De verboden gebruikersnaam is succesvol toegevoegd.',

	'NO_DISALLOWED'				=> 'Geen verboden gebruikersnamen',
	'NO_USERNAME_SPECIFIED'		=> 'Je hebt geen gebruikersnaam geselecteerd of ingevoerd om mee te werken.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Hier kan je de redenen beheren die gebruikt worden in meldingen en afwijsberichten wanneer berichten worden afgewezen. Er is één standaard reden (gemarkeerd met een *), die je niet kan verwijderen, deze reden wordt normaal gebruikt voor eigen berichten als er geen andere reden past.',
	'ADD_NEW_REASON'		=> 'Nieuwe reden toevoegen',
	'AVAILABLE_TITLES'		=> 'Beschikbare vertaalde redentitels',

	'IS_NOT_TRANSLATED'			=> 'Reden is <strong>niet</strong> vertaald.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Reden is <strong>niet</strong> vertaald. Als je een vertaalde versie wilt leveren, specificeer de correcte sleutel uit de taalbestanden meldingsredenen gedeelte.',
	'IS_TRANSLATED'				=> 'Reden is vertaald.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Reden is vertaald. Als de titel, die je hier invoert, is gespecificeerd in de taalbestanden meldingsredenen gedeelte, dan zal de vertaalde versie van de titel en beschrijving gebruikt worden.',

	'NO_REASON'					=> 'Reden kon niet gevonden worden.',
	'NO_REASON_INFO'			=> 'Je moet een titel en beschrijving specificeren voor deze reden.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Je kan niet de standaardreden “Anders” verwijderen.',

	'REASON_ADD'				=> 'Meldings-/afwijsreden toevoegen',
	'REASON_ADDED'				=> 'Meldings-/afwijsreden succesvol toegevoegd.',
	'REASON_ALREADY_EXIST'		=> 'Een reden met deze titel bestaat al, vul een andere titel in voor deze reden.',
	'REASON_DESCRIPTION'		=> 'Redenbeschrijving',
	'REASON_DESC_TRANSLATED'	=> 'Weergegeven redenbeschrijving',
	'REASON_EDIT'				=> 'Meldings-/afwijsreden wijzigen',
	'REASON_EDIT_EXPLAIN'		=> 'Hier kan je een reden toevoegen of wijzigen. Als de reden is vertaald, dan zal de vertaalde versie gebruikt worden in plaats van de beschrijving die hier ingevoerd is.',
	'REASON_REMOVED'			=> 'Meldings-/afwijsreden succesvol verwijderd.',
	'REASON_TITLE'				=> 'Redentitel',
	'REASON_TITLE_TRANSLATED'	=> 'Redentitel weergegeven',
	'REASON_UPDATED'			=> 'Meldings-/afwijsreden succesvol gewijzigd.',

	'USED_IN_REPORTS'		=> 'Gebruikt in meldingen',
));
