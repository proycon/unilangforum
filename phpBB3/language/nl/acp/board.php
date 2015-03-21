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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hier kan je de basis-instellingen van je forum bepalen, geef het een passende naam en beschrijving en pas samen met andere instellingen de standaard waardes in voor bijvoorbeeld tijdzone en taal.',
	'BOARD_INDEX_TEXT'				=> 'Forumindex-tekst',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Deze tekst wordt weergegeven als forumindex in de broodkruimels. Indien niet gespecificeerd, dan zal dit standaard “Forumindex” zijn.',
	'BOARD_STYLE'					=> 'Forumstijl',
	'CUSTOM_DATEFORMAT'				=> 'Eigen…',
	'DEFAULT_DATE_FORMAT'			=> 'Datumformaat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Het datumformaat is hetzelfde als de PHP <code>date</code>-functie.',
	'DEFAULT_LANGUAGE'				=> 'Standaard taal',
	'DEFAULT_STYLE'					=> 'Standaard stijl',
	'DEFAULT_STYLE_EXPLAIN'			=> 'De standaard stijl voor nieuwe gebruikers.',
	'DISABLE_BOARD'					=> 'Forum uitschakelen',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dit zal het forum niet beschikbaar maken voor gebruikers die geen beheerders of moderators zijn. Je kan ook een kort (255 tekens) bericht invoeren dat wordt weergegeven indien gewenst.',
	'DISPLAY_LAST_SUBJECT'			=> 'Geef onderwerp van laatst toegevoegde bericht weer op forumlijst',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Het onderwerp van het laatst toegevoegde bericht zal weergegeven worden op de forumlijst met een link naar het bericht. Onderwerpen van forums die met een wachtwoord zijn beveiligd en forums waarvan de gebruiker geen leesrechten heeft, zullen niet worden weergegeven.',
	'GUEST_STYLE'					=> 'Gaststijl',
	'GUEST_STYLE_EXPLAIN'			=> 'De forumstijl voor gasten.',
	'OVERRIDE_STYLE'				=> 'Overschrijf gebruikersstijl',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Vervangt de gebruikersstijl (en stijl voor gasten) met de stijl die opgegeven is onder “Standaardstijl”.',
	'SITE_DESC'						=> 'Site beschrijving',
	'SITE_HOME_TEXT'				=> 'Hoofdwebsite-tekst',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Deze tekst zal weergegeven worden als een link naar je homepage van je website in de broodkruimels. Indien niet gespecificeerd dan zal dit standaard “Thuis” zijn.',
	'SITE_HOME_URL'					=> 'Hoofdwebsite-URL',
	'SITE_HOME_URL_EXPLAIN'			=> 'Indien opgegeven, zal een link naar deze URL voor je broodkruimels komen en het logo zal naar deze URL linken in plaats van het forum. Een absolute URL is vereist, bijv. <samp>http://www.phpbbservice.nl</samp>.',
	'SITE_NAME'						=> 'Sitenaam',
	'SYSTEM_TIMEZONE'				=> 'Gast tijdzone',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'Tijdzone die gebruikt wordt voor het weergeven van tijden aan gebruikers die niet aangemeld zijn (gasten, bots). Aangemelde gebruikers stellen hun tijdzone in tijdens het registratieproces en kunnen dit veranderen in hun gebruikerspaneel.',
	'WARNINGS_EXPIRE'				=> 'Waarschuwingsduur',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Aantal dagen dat zal verstrijken voordat een waarschuwing automatisch zal verlopen van een gebruikersrecord. Door deze waarde in te stellen op 0, zullen de waarschuwingen permanent zijn.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hier kan je verschillende forumfuncties in- of uitschakelen.',

	'ALLOW_ATTACHMENTS'			=> 'Bijlagen inschakelen',
	'ALLOW_BIRTHDAYS'			=> 'Verjaardagen inschakelen',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Sta toe om verjaardagen in te voeren en de leeftijd weer te geven in profielen. Let op dat de verjaardagslijst op de indexpagina gecontroleerd wordt door een aparte laadinstelling.',
	'ALLOW_BOOKMARKS'			=> 'Onderwerpen bladwijzeren inschakelen',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Gebruiker is in staat om persoonlijke bladwijzers op te slaan.',
	'ALLOW_BBCODE'				=> 'BBCode inschakelen',
	'ALLOW_FORUM_NOTIFY'		=> 'Abonneren op forums inschakelen',
	'ALLOW_NAME_CHANGE'			=> 'Veranderen gebruikersnaam inschakelen',
	'ALLOW_NO_CENSORS'			=> 'Uitschakelen woordcensuur inschakelen',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Gebruikers kunnen ervoor kiezen dat het automatisch censureren van berichten en privéberichten wordt uitgeschakeld.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Bijlagen in privéberichten inschakelen',
	'ALLOW_PM_REPORT'			=> 'Melden van privéberichten inschakelen',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Als deze instelling is ingeschakeld, dan hebben gebruikers de optie om een privébericht die zij hebben ontvangen te melden of om door te sturen naar de moderator. Deze privéberichten zullen dan zichtbaar zijn in het moderatorpaneel.',
	'ALLOW_QUICK_REPLY'			=> 'Snelle reactie inschakelen',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Deze optie zorgt er voor dat de snelle reactie wordt uitgeschakeld in het hele forum. Wanneer ingeschakeld, zullen forum specifieke instellingen gebruikt worden om te bepalen of de snelle reactie wordt weergegeven bij individuele forums.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Verstuur en schakel snelle reacties in voor alle fora',
	'ALLOW_SIG'					=> 'Onderschriften inschakelen',
	'ALLOW_SIG_BBCODE'			=> 'BBCode in onderschriften inschakelen',
	'ALLOW_SIG_FLASH'			=> 'Gebruik van <code>[FLASH]</code> BBCode-tag in onderschriften inschakelen',
	'ALLOW_SIG_IMG'				=> 'Gebruik van <code>[IMG]</code> BBCode-tag in onderschriften inschakelen',
	'ALLOW_SIG_LINKS'			=> 'Gebruik van links in onderschriften inschakelen',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Indien uitgeschakeld, dan zijn de <code>[URL]</code> BBCode tag en automatische / magische URLS uitgeschakeld.',
	'ALLOW_SIG_SMILIES'			=> 'Gebruik van smilies in onderschriften inschakelen',
	'ALLOW_SMILIES'				=> 'Smilies inschakelen',
	'ALLOW_TOPIC_NOTIFY'		=> 'Abonneren op onderwerpen inschakelen',
	'BOARD_PM'					=> 'Privéberichten',
	'BOARD_PM_EXPLAIN'			=> 'Privéberichten voor alle gebruikers inschakelen.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars zijn over het algemeen kleine unieke afbeeldingen waarmee een gebruiker zichzelf mee kan associëren. Afhankelijk van de stijl staan ze direct onder de gebruikersnaam wanneer je onderwerpen bekijkt. Hier kan je bepalen hoe gebruikers hun avatar kunnen kiezen. Let op dat om avatars te kunnen uploaden, dat je dan een map hebt aangemaakt die je hieronder benoemt en er voor zorgt dat deze beschreven kan worden door de webserver. Let er ook op de dat bestandsgrootte-limieten alleen ingesteld zullen zijn voor geüploade avatars, ze worden dus niet toegepast op externe afbeeldingen van andere servers.',

	'ALLOW_AVATARS'					=> 'Avatars inschakelen',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Algemeen gebruik van avatars inschakelen;<br />Als je avatars in het algemeen uitschakelt of avatars van een bepaalde type, dat de uitgeschakelde avatars dan niet meer weergegeven worden op het forum, maar gebruikers kunnen nog steeds hun eigen avatar downloaden in het gebruikerspaneel.',
	'ALLOW_GRAVATAR'				=> 'Gravatar avatars inschakelen',
	'ALLOW_LOCAL'					=> 'Galerij avatars inschakelen',
	'ALLOW_REMOTE'					=> 'Externe avatars inschakelen',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars gekoppeld van een andere website.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Extern geüploade avatars inschakelen',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Uploaden van avatars van andere websites inschakelen.',
	'ALLOW_UPLOAD'					=> 'Uploaden avatar inschakelen',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galerij pad',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Pad in je phpBB-hoofdmap voor geüploade afbeeldingen, bijvoorbeeld <samp>images/avatars/gallery</samp>.<br />Dubbele punten zoals <samp>../</samp> worden gestript van het pad voor veiligheidsredenen.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar opslag pad',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Pad in je phpBB-hoofdmap, bijvoorbeeld <samp>images/avatars/upload</samp>.<br />Avatar uploaden <strong>zal niet beschikbaar zijn</strong> als dit pad niet schrijfbaar is.<br />Dubbele punten zoals <samp>../</samp> zullen worden gestript van het pad voor veiligheidsredenen.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatar dimensies',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Breedte x Hoogte in pixels.',
	'MAX_FILESIZE'					=> 'Maximum avatar bestandsgrootte',
	'MAX_FILESIZE_EXPLAIN'			=> 'Voor geüploade avatar bestanden. Als deze waarde 0 is, dan wordt de geüploade bestandsgrootte alleen gelimiteerd door je PHP configuratie.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatar dimensies',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Breedte x Hoogte in pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Hier kan je alle standaard instellingen voor privéberichten instellen.',

	'ALLOW_BBCODE_PM'			=> 'BBCode in privéberichten inschakelen',
	'ALLOW_FLASH_PM'			=> 'Gebruik van <code>[FLASH]</code> BBCode-tag inschakelen',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Let op dat het gebruik van flash in privéberichten, indien hier toegestaan, ook afhankelijk is van de permissies.',
	'ALLOW_FORWARD_PM'			=> 'Doorsturen van privéberichten inschakelen',
	'ALLOW_IMG_PM'				=> 'Gebruik van <code>[IMG]</code> BBCode tag inschakelen',
	'ALLOW_MASS_PM'				=> 'Het sturen van privéberichten naar meerdere gebruikers en groepen inschakelen',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Het versturen naar groepen kan aangepast worden per groep in de groepsinstellingen-pagina.',
	'ALLOW_PRINT_PM'			=> 'Print weergave van privéberichten inschakelen',
	'ALLOW_QUOTE_PM'			=> 'Citaten in privéberichten inschakelen',
	'ALLOW_SIG_PM'				=> 'Onderschriften in privéberichten inschakelen',
	'ALLOW_SMILIES_PM'			=> 'Smilies in privéberichten inschakelen',
	'BOXES_LIMIT'				=> 'Maximum privéberichten per box',
	'BOXES_LIMIT_EXPLAIN'		=> 'Gebruikers kunnen niet meer dan deze hoeveelheid ontvangen in iedere privéberichten-box. Stel deze waarde in op 0 om ongelimiteerd aantal berichten toe te staan.',
	'BOXES_MAX'					=> 'Maximum privébericht-mappen',
	'BOXES_MAX_EXPLAIN'			=> 'Standaard kunnen gebruikers deze hoeveelheid persoonlijke mappen maken voor privéberichten.',
	'ENABLE_PM_ICONS'			=> 'Gebruik van onderwerpiconen in privéberichten inschakelen',
	'FULL_FOLDER_ACTION'		=> 'Volle map standaardactie',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Standaardactie die toegepast wordt als een gebruikersmap vol is, er van uitgaande dat de gebruikers map actie, indien ingesteld, niet uitgevoerd kan worden. De enigste uitzondering is voor de “Verstuurde berichten” map waar de standaardactie altijd het verwijderen van oude berichten is.',
	'HOLD_NEW_MESSAGES'			=> 'Tegenhouden nieuwe berichten',
	'PM_EDIT_TIME'				=> 'Limiteer wijzigingstijd',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limiteert de tijd dat beschikbaar is om een privébericht te wijzigen welke nog niet afgeleverd is. Het instellen van de waarde op 0, zal dit gedrag uitschakelen.',
	'PM_MAX_RECIPIENTS'			=> 'Maximum aantal toegestane ontvangers',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Het maximum aantal toegestane ontvangers in een privébericht. Indien 0 is ingevoerd, is een ongelimiteerd aantal toegestaan. Deze instelling kan voor iedere groep apart aangepast worden in de groepsinstellingen-pagina.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Hier kan je alle standaard instellingen voor het plaatsen van berichten instellen.',
	'ALLOW_POST_LINKS'					=> 'Links in berichten/privéberichten toestaan',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Indien niet toegestaan, dan zijn de <code>[URL]</code> BBCode-tag en automatisch/magische URLs uitgeschakeld.',
	'ALLOW_POST_FLASH'					=> 'Gebruik van <code>[FLASH]</code> BBCode-tag in berichten toestaan',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Indien niet toegestaan, dan is de <code>[FLASH]</code> BBCode-tag uitgeschakeld in berichten. Anders kan het permissiesysteem controleren welke gebruikers gebruik kunnen maken van de <code>[FLASH]</code> BBCode-tag.',

	'BUMP_INTERVAL'					=> 'Bump interval',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Aantal minuten, uren of dagen tussen het laatste bericht in een onderwerp en de mogelijkheid om het onderwerp te bumpen. Het instellen van de waarde op 0, zal het bumpen compleet uitschakelen.',
	'CHAR_LIMIT'					=> 'Maximum aantal tekens per bericht',
	'CHAR_LIMIT_EXPLAIN'			=> 'Het aantal tekens dat is toegestaan in een bericht/privébericht. Stel in op 0 voor onbeperkt aantal tekens.',
	'DELETE_TIME'					=> 'Limiteer verwijderingstijd',
	'DELETE_TIME_EXPLAIN'			=> 'Limiteert de tijd beschikbaar om een nieuw bericht te verwijderen. Het instellen van de waarde op 0, zal dit gedrag compleet uitschakelen.',
	'DISPLAY_LAST_EDITED'			=> 'Geef laatst gewijzigde tijdsinformatie weer',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Kies of de “laatst gewijzigd door”-informatie weergegeven moet worden bij berichten.',
	'EDIT_TIME'						=> 'Limiteer wijzigingstijd',
	'EDIT_TIME_EXPLAIN'				=> 'Limiteert de tijd beschikbaar om een nieuw bericht te wijzigen. Het instellen van de waarde op 0, zal dit gedrag compleet uitschakelen.',
	'FLOOD_INTERVAL'				=> 'Vloed interval',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Aantal secondes dat een gebruiker moet wachten tussen het plaatsen van nieuwe berichten. Om gebruikers toe te staan dit te negeren, dan moet je hun eigen permissies aanpassen.',
	'HOT_THRESHOLD'					=> 'Populair onderwerp drempel',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Berichten per onderwerp vereist voor de populair onderwerp aantekening. Stel in op 0 om populaire onderwerpen uit te schakelen.',
	'MAX_POLL_OPTIONS'				=> 'Maximum aantal peilingsopties',
	'MAX_POST_FONT_SIZE'			=> 'Maximum tekengrootte per bericht',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximum tekengrootte toegestaan in een bericht. Stel in op 0 voor onbeperkte tekengrootte.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximum afbeeldingshoogte per bericht',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximum hoogte van een afbeelding/flash bestand in berichten. Stel in op 0 voor onbeperkte hoogte.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximum afbeeldingsbreedte per bericht',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximum breedte van een afbeelding/flash-bestand in berichten. Stel in op 0 voor onbeperkte breedte.',
	'MAX_POST_URLS'					=> 'Maximum aantal links per bericht',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximum aantal URLs in een bericht. Stel in op 0 voor onbeperkt aantal links.',
	'MIN_CHAR_LIMIT'				=> 'Minimum tekens per bericht',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Minimum aantal tekens dat een gebruiker in een bericht/privébericht moet invoeren. Het minimum voor deze instelling is 1.',
	'POSTING'						=> 'Berichten',
	'POSTS_PER_PAGE'				=> 'Berichten per pagina',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum nestelingsdiepte voor citaten',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximum aantal citaat-nestelingsdiepte in een bericht. Stel in op 0 voor onbeperkte diepte.',
	'SMILIES_LIMIT'					=> 'Maximum smilies per bericht',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximum aantal smilies in een bericht. Stel in op 0 voor onbeperkt aantal smilies.',
	'SMILIES_PER_PAGE'				=> 'Smilies per pagina',
	'TOPICS_PER_PAGE'				=> 'Onderwerpen per pagina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hier kan je alle standaard instellingen voor onderschriften instellen.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximum onderschrift tekengrootte',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximum tekengrootte toegestaan in onderschriften. Stel in op 0 voor onbeperkte grootte.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximum onderschrift afbeeldingshoogte',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximum hoogte van een afbeelding/flash bestand in onderschriften. Stel in op 0 voor onbeperkte hoogte.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximum onderschrift afbeeldingsbreedte',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximum breedte van een afbeelding/flash bestand in onderschriften. Stel in op 0 voor onbeperkte breedte.',
	'MAX_SIG_LENGTH'				=> 'Maximum onderschrift lengte',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximum aantal tekens in onderschriften.',
	'MAX_SIG_SMILIES'				=> 'Maximum smilies per onderschrift',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximum smilies toegestaan in onderschriften. Stel in op 0 voor onbeperkt aantal smilies.',
	'MAX_SIG_URLS'					=> 'Maximum aantal onderschrift links',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximum aantal links in onderschriften. Stel in op 0 voor onbeperkt aantal links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Hier kan je registratie en profiel gerelateerde instellingen instellen.',

	'ACC_ACTIVATION'				=> 'Account-activatie',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Dit bepaalt of gebruikers meteen toegang hebben tot het forum of dat er bevestiging vereist is. Je kan ook nieuwe registraties compleet uitschakelen. <em>“Forum-wijde e-mails” moet ingeschakeld zijn om gebruiker- of beheerdersactivatie te gebruiken.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Houd er rekening mee dat de huidige account-activatie instelling vereist dat e-mails ingeschakeld zijn, anders wordt de registratie in zijn geheel uitgeschakeld. Wij raden aan om een andere account-activatie instelling te kiezen of e-mails weer in te schakelen.', 
	'NEW_MEMBER_POST_LIMIT'			=> 'Nieuwe gebruikers berichtenlimiet',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Nieuwe gebruikers blijven in de <em>Nieuw geregistreerde gebruikers</em>-groep totdat ze dit aantal berichten hebben bereikt. Je kan deze groep gebruiken om te voorkomen dat ze het PB-systeem meteen kunnen gebruiken of om hun berichten na te kijken. <strong>Een waarde van 0 zal deze functie uitschakelen.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Stel <em>Nieuw Geregistreerde Gebruikers</em>-groep standaard in',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Indien ingesteld op ja, en een “nieuw lid berichten limiet” is ingesteld, dan zullen nieuw geregistreerde gebruikers niet alleen in de <em>Nieuw Geregistreerde Gebruikers</em>-groep geplaatst worden, maar deze groep zal ook hun standaard groep zijn. Dit kan handig zijn als je een standaard groepsrang en/of avatar wilt toewijzen, welke de gebruiker dan krijgt.',

	'ACC_ADMIN'					=> 'Door beheerder',
	'ACC_DISABLE'				=> 'Registratie uitschakelen',
	'ACC_NONE'					=> 'Geen activatie (direct toegang)',
	'ACC_USER'					=> 'Door gebruiker (e-mailverificatie)',
//	'ACC_USER_ADMIN'			=> 'Gebruiker + Beheerder',
	'ALLOW_EMAIL_REUSE'			=> 'E-mailadres hergebruik toestaan',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Verschillende gebruikers kunnen registreren met hetzelfde e-mailadres.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA-faxnummer',
	'COPPA_MAIL'				=> 'COPPA-mailadres',
	'COPPA_MAIL_EXPLAIN'		=> 'Dit is het mailadres waar ouders de COPPA registratieformulieren heen kunnen sturen.',
	'ENABLE_COPPA'				=> 'COPPA inschakelen',
	'ENABLE_COPPA_EXPLAIN'		=> 'Dit vereist van gebruikers een verklaring dat ze ouder zijn dan 13 in navolging van de U.S. COPPA wetgeving. Als dit is uitgeschakeld, dan zal de COPPA specifieke groepen niet meer weergegeven worden.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Geen geschikte auth plug-in gevonden.',
	'PASSWORD_LENGTH'			=> 'Wachtwoordlengte',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimum en maximum aantal tekens in wachtwoorden.',
	'REG_LIMIT'					=> 'Registratiepogingen',
	'REG_LIMIT_EXPLAIN'			=> 'Aantal pogingen die gebruikers hebben om de anti-spambot-taak te kunnen maken voordat ze uitgesloten worden van die sessie.',
	'USERNAME_ALPHA_ONLY'		=> 'Alleen alfanumeriek',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumeriek en spacers',
	'USERNAME_ASCII'			=> 'ASCII (geen internationale unicode)',
	'USERNAME_LETTER_NUM'		=> 'Elke letter en cijfer',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Elke letter, cijfer en spaties',
	'USERNAME_CHARS'			=> 'Beperk tekens gebruikersnaam',
	'USERNAME_CHARS_ANY'		=> 'Elke karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Beperk type karakter dat gebruikt kan worden in gebruikersnamen, spacers zijn: spatie, -, +, _, [ and ].',
	'USERNAME_LENGTH'			=> 'Gebruikersnaamlengte',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimum en maximum aantal tekens in gebruikersnamen.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Algemene syndicatie feedsinstellingen',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Deze module maakt verschillende ATOM feeds beschikbaar, verwerkt iedere BBCode in berichten om hen leesbaar te maken in externe feeds.',

	'ACP_FEED_GENERAL'					=> 'Algemene feedinstellingen',
	'ACP_FEED_POST_BASED'				=> 'Bericht gebaseerde feedinstellingen',
	'ACP_FEED_TOPIC_BASED'				=> 'Onderwerp gebaseerde feedinstellingen',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Andere feeds en instellingen',

	'ACP_FEED_ENABLE'					=> 'Feeds inschakelen',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Zet de ATOM-feeds voor het gehele forum aan of uit.<br />Door dit uit te schakelen, worden alle feeds ondanks de instellingen hieronder ook uitgeschakeld.',
	'ACP_FEED_LIMIT'					=> 'Aantal items',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Het maximum aantal feed-items om weer te geven.',

	'ACP_FEED_OVERALL'					=> 'Forum-wijde feed inschakelen',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Forum-wijde nieuwe berichten.',
	'ACP_FEED_FORUM'					=> 'Per forum feeds inschakelen',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Enkel forum en subforums nieuwe berichten.',
	'ACP_FEED_TOPIC'					=> 'Per onderwerp feeds inschakelen',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Enkel onderwerp nieuwe berichten.',

	'ACP_FEED_TOPICS_NEW'				=> 'Nieuwe onderwerpen feeds inschakelen',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Schakelt de “Nieuwe onderwerpen”-feed in, welke de laatst aangemaakte onderwerpen inclusief het eerste bericht weergeeft.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Actieve onderwerpen feed inschakelen',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Schakelt de “Actieve Onderwerpen”-feed in, welke de laatste actieve onderwerpen inclusief het laatste bericht weergeeft.',
	'ACP_FEED_NEWS'						=> 'Nieuws feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Toont het eerste bericht van deze forums. Selecteer geen forums om de nieuws feed uit te schakelen.<br />Selecteer meerdere forums door <samp>CTRL</samp> ingedrukt te houden en met de muis op de forums te klikken.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Forums feed inschakelen',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Schakelt de “Alle forums”-feed in, welke een lijst van forums weergeeft.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP-Authenticatie toestaan',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Schakelt HTTP-authenticatie in, welke toestaat gebruikers inhoud te ontvangen dat verborgen is voor gasten door het toevoegen van de <samp>auth=http</samp> parameter aan de feed URL. Let op dat sommige PHP setups extra veranderingen vereisen aan het .htaccess bestand. Instructies kunnen gevonden worden in dat bestand.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Item statistieken',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Geeft individuele statistieken weer onder de feed-items<br />(bijv. geplaatst door, datum en tijd, reacties, weergaves)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Deze forums uitsluiten',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Inhoud van deze forums zal <strong>niet bijgevoegd worden in de feeds</strong>. Selecteer geen forums om data van alle forums te gebruiken.<br />Selecteer/Deselecteer meerdere forums door <samp>CTRL</samp> ingedrukt te houden en met de muis op de forums te klikken.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Hier kan je plug-ins selecteren en instellen, welke ontworpen zijn om geautomatiseerde formulier verzendingen te blokkeren. Deze plug-ins werken meestal door de gebruiker uit te dagen met een <em>CAPTCHA</em>, een test welke ontworpen is om te moeilijk te zijn voor een computer, maar die een mens wel kan maken.',
	'ACP_VC_EXT_GET_MORE'					=> 'Voor extra (en mogelijk betere) anti-spam plug-ins, bezoek dan de <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensie Database</strong></a>. Voor meer informatie over het voorkomen van spam op je forum, bezoek dan <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Kennisbank</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Beschikbare plug-ins',
	'CAPTCHA_UNAVAILABLE'					=> 'De plug-in kan niet geselecteerd worden omdat de vereisten niet vervuld worden.',
	'CAPTCHA_GD'							=> 'GD-afbeelding',
	'CAPTCHA_GD_3D'							=> 'GD 3D-afbeelding',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Voorgrond ruis',
	'CAPTCHA_GD_EXPLAIN'					=> 'Gebruikt GD om een meer geavanceerde anti-spambot afbeelding te maken.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Gebruik voorgrond ruis om de afbeelding moeilijker leesbaar te maken.',
	'CAPTCHA_GD_X_GRID'						=> 'Achtergrond ruis x-as',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Gebruik lagere waardes om de afbeelding moeilijker leesbaar te maken. 0 zal x-as achtergrond ruis uitschakelen.',
	'CAPTCHA_GD_Y_GRID'						=> 'Achtergrond ruis y-as',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Gebruik lagere waardes om de afbeelding moeilijker leesbaar te maken. 0 zal y-as achtergrond ruis uitschakelen.',
	'CAPTCHA_GD_WAVE'						=> 'Golf ruis',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Dit geeft een golf ruis aan de afbeelding.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-ruis objecten toevoegen',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Dit voegt extra objecten toe aan de afbeelding, over de letters.',
	'CAPTCHA_GD_FONTS'						=> 'Gebruik verschillende lettertypes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Deze instelling controleert hoeveel verschillende lettertypes gebruikt worden. Je kan de alleen de standaard vormen gebruiken of aangepaste letters introduceren. Toevoegen van kleine letters is ook mogelijk.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Standaard',
	'CAPTCHA_FONT_NEW'						=> 'Nieuwe vormen',
	'CAPTCHA_FONT_LOWER'					=> 'Gebruik ook kleine letters',
	'CAPTCHA_NO_GD'							=> 'Makkelijke afbeelding',
	'CAPTCHA_PREVIEW_MSG'					=> 'Je veranderingen zijn niet opgeslagen, dit is alleen een voorbeeld.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'De plug-in zoals het er uit zou zien met de huidige instellingen.',

	'CAPTCHA_SELECT'						=> 'Geïnstalleerde plug-ins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'De drop-down bevat de plug-ins die herkend worden door het forum. Grijze items zijn momenteel niet beschikbaar en kunnen extra instellingen nodig hebben voordat je ze kan gebruiken.',
	'CAPTCHA_CONFIGURE'						=> 'Plug-ins instellen',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Verander de instellingen voor de geselecteerde plug-in.',
	'CONFIGURE'								=> 'Instellen',
	'CAPTCHA_NO_OPTIONS'					=> 'Deze plug-in heeft geen instellingsopties.',

	'VISUAL_CONFIRM_POST'					=> 'Spambotpreventie voor berichten van gasten inschakelen',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vereist gastgebruikers om de anti-spambot taak uit te voeren om geautomatiseerde berichten te voorkomen.',
	'VISUAL_CONFIRM_REG'					=> 'Spambotpreventie voor registraties inschakelen',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vereist nieuwe gebruikers om de anti-spambot taak uit te voeren om geautomatiseerde registraties te voorkomen.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Gebruikers toestaan om de anti-spambot taak te verversen',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Staat gebruikers toe om een nieuwe anti-spambot taak aan te vragen als ze de taak niet kunnen oplossen tijdens de registratie. Sommige plug-ins kunnen deze optie niet ondersteunen.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Deze details definiëren de data die gebruikt wordt om cookies te versturen naar de browsers van je gebruikers. In de meeste gevallen moet de standaard waardes voor de cookie instellingen genoeg zijn. Als je wel veranderingen moet aanbrengen, doe dit dan voorzichtig, incorrecte instellingen kunnen er voor zorgen dat gebruikers zich niet meer kunnen aanmelden.',

	'COOKIE_DOMAIN'				=> 'Cookie-domein',
	'COOKIE_NAME'				=> 'Cookie-naam',
	'COOKIE_PATH'				=> 'Cookie-pad',
	'COOKIE_SECURE'				=> 'Cookie-beveiliging',
	'COOKIE_SECURE_EXPLAIN'		=> 'Als je server draait via SSL, schakel dit dan in, laat het anders uitgeschakeld. Als je dit ingeschakeld hebt en niet draait via SSL, dan zal dit resulteren in serverfouten tijdens doorsturingen.',
	'ONLINE_LENGTH'				=> 'Bekijk online tijdsduur',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Aantal minuten waarna inactieve gebruikers niet meer in de “Wie is online”-lijst zullen voorkomen. Hoe hoger deze waarde is, des te groter de verwerking is vereist om de lijst aan te maken.',
	'SESSION_LENGTH'			=> 'Sessieduur',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessies zullen verlopen na deze tijd, in secondes.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Hier kan je de contactpagina in- en uitschakelen en je kan er ook tekst aan toevoegen die op de pagina wordt weergegeven.',

	'CONTACT_US_ENABLE'				=> 'Contactpagina inschakelen',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Deze pagina laat gebruikers e-mails versturen naar forumbeheerders',

	'CONTACT_US_INFO'				=> 'Contactinformatie',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Het bericht dat wordt weergegeven op de contactpagina',
	'CONTACT_US_INFO_PREVIEW'		=> 'Contactpagina informatie - Voorbeeld',
	'CONTACT_US_INFO_UPDATED'		=> 'Contactpagina informatie is gewijzigd.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hier kan je bepaalde forumfuncties in- of uitschakelen om de hoeveelheid processen die vereist zijn te verlagen. Bij de meeste servers is er geen noodzaak om functies uit te schakelen. Bij bepaalde systemen of gedeelde hostings omgevingen kan het voordelig zijn om bepaalde functies uit te schakelen die je niet echt nodig hebt. Je kan ook bepaalde limieten instellen voor de systeem laad-zwaarte en actieve sessies waardoor als deze overschreden worden het forum offline gaat.',

	'ALLOW_CDN'						=> 'Gebruik van derde partij inhoud leveringsnetwerken toestaan',
	'ALLOW_CDN_EXPLAIN'				=> 'Als deze instelling is ingeschakeld, dan worden sommige bestanden van externe servers gebruikt in plaats van de bestanden op je server. Dit verlaagt de netwerk brandbreedte voor je server, maar kan een privacy probleem voor sommige forumbeheerders veroorzaken. In een standaard phpBB-installatie, worden de “jQuery” en het font “Open Sans” geladen via het Google netwerk.',
	'ALLOW_LIVE_SEARCHES'			=> 'Live zoekopdrachten toestaan',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Als deze instelling is ingeschakeld, dan worden de gebruikers voorzien van trefwoord-suggesties als ze in bepaalde velden van het forum schrijven.',	
	'CUSTOM_PROFILE_FIELDS'			=> 'Eigen profielvelden',
	'LIMIT_LOAD'					=> 'Limiteer systeem lading',
	'LIMIT_LOAD_EXPLAIN'			=> 'Als het systeem de waarde van de “laad gemiddelde” één minuut overschrijd, dan zal het forum automatisch offline gaan. Een waarde van 1.0 staat gelijk aan ~100% gebruik van één processor. Dit werkt alleen op UNIX gebaseerde servers en waar deze informatie beschikbaar is. De waarde stelt zichzelf opnieuw in op 0 als phpBB het laadlimiet niet kan verkrijgen.',
	'LIMIT_SESSIONS'				=> 'Limiteer sessies',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Als het aantal sessies deze waarde overschrijd binnen één minuut, dan zal het forum offline gaan. Stel in op 0 voor onbeperkt aantal sessies.',
	'LOAD_CPF_MEMBERLIST'			=> 'Stijlen toestaan om eigen profielvelden weer te geven in ledenlijst',
	'LOAD_CPF_PM'					=> 'Eigen profielvelden weergeven in privéberichten',
	'LOAD_CPF_VIEWPROFILE'			=> 'Eigen profielvelden weergeven in gebruikersprofielen',
	'LOAD_CPF_VIEWTOPIC'			=> 'Eigen profielvelden weergeven op onderwerppagina’s',
	'LOAD_USER_ACTIVITY'			=> 'Gebruikers activiteit tonen',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Actieve onderwerp/forum weergeven in gebruikersprofiel en gebruikerspaneel. Het is aanbevolen om dit uit te schakelen op forums met meer dan één miljoen berichten.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Leesnotificatie Vervaltijd',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Aantal dagen nadat een leesnotificatie automatisch zal worden verwijderd. Stel deze waarde op 0 in om notificaties permanent te maken.',
	'RECOMPILE_STYLES'				=> 'Hercompileer oude stijl componenten',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Controleert op gewijzigde stijl componenten op het bestandssysteem en hercompileert deze.',
	'YES_ANON_READ_MARKING'			=> 'Onderwerp markering voor gasten inschakelen',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Bewaart gelezen/ongelezen status informatie voor gasten. Indien uitgeschakeld zullen berichten altijd gelezen zijn voor gasten.',
	'YES_BIRTHDAYS'					=> 'Verjaardagslijst inschakelen',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Indien uitgeschakeld, zal de verjaardagslijst niet meer weergegeven worden. Om deze instelling effect te laten maken, dan moet de verjaardagfunctie ook ingeschakeld zijn.',
	'YES_JUMPBOX'					=> 'Weergave van de jumpbox inschakelen',
	'YES_MODERATORS'				=> 'Weergave van de moderators inschakelen',
	'YES_ONLINE'					=> 'Online gebruikerslijst inschakelen',
	'YES_ONLINE_EXPLAIN'			=> 'Toont online gebruikers informatie op de index, forum en onderwerppagina’s.',
	'YES_ONLINE_GUESTS'				=> 'Online gastenlijst in viewonline inschakelen',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Staat het weergeven van gastgebruikersinformatie in viewonline toe.',
	'YES_ONLINE_TRACK'				=> 'Weergave gebruiker online/offline informatie inschakelen',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Weergave van online informatie voor gebruiker in profielen en onderwerppagina’s.',
	'YES_POST_MARKING'				=> 'Aangestipte onderwerpen inschakelen',
	'YES_POST_MARKING_EXPLAIN'		=> 'Geeft weer of gebruiker een bericht heeft geplaatst in een onderwerp.',
	'YES_READ_MARKING'				=> 'Server onderwerp markering inschakelen',
	'YES_READ_MARKING_EXPLAIN'		=> 'Slaat gelezen/ongelezen statusinformatie op in de database in plaats van een cookie.',
	'YES_UNREAD_SEARCH'				=> 'Zoeken naar ongelezen berichten inschakelen',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB ondersteunt authenticatie plug-ins, of modules. Deze staan je toe om te bepalen hoe gebruikers geauthenticeerd worden wanneer ze zich aanmelden op het forum. Standaard worden er vier plug-ins aangeleverd: DB, LDAP, Apache en OAuth. Niet alle methodes vereisen extra informatie, dus vul alleen de velden in die relevant zijn voor de geselecteerde methode.',

	'AUTH_METHOD'				=> 'Selecteer een authenticatiemethode',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Zowel de sleutel als het geheim van ieder ingeschakelde OAuth service provider moet worden opgegeven. Er is alleen één opgegeven voor een OAuth service provider.',
    'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Ieder OAuth provider vereist een uniek geheim en sleutel om te kunnen authenticeren met de externe server. Deze worden geleverd bij de OAuth service wanneer je je website registreert bij hun en moet precies zoals geleverd ingevoerd worden.<br />Elke service dat niet een sleutel en geheim heeft ingevoerd, zal niet beschikbaar zijn voor gebruik door forumgebruikers. Let op: dat de gebruiker zich nog steeds kan registeren en aanmelden via de DB authenticatie plug-in',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Sleutel',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Geheim',

	'APACHE_SETUP_BEFORE_USE'	=> 'Je moet apache authenticatie instellen voordat je phpBB naar deze authenticatie methode schakelt. Onthoud dat de gebruikersnaam die je gebruikt voor apache authenticatie gelijk moet zijn als je phpBB gebruikersnaam. Apache authenticatie kan alleen gebruikt worden met mod_php (niet met een CGI versie) en safe_mode uitgeschakeld.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP-base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Dit is de Distinguished Naam, lokaliserend de gebruikersinformatie, bijv. <samp>o=Mijn Bedrijf,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP-e-mailattribuut',
	'LDAP_EMAIL_EXPLAIN'			=> 'Stel dit in op de naam van je gebruikers aanmeldingse-mail attribuut (als er één bestaat) om automatisch het e-mailadres in te stellen voor nieuwe gebruikers. Als je dit leeg laat, zal dit resulteren in lege e-mailadressen voor gebruikers die zich aanmelden voor de eerste keer.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Verbinding naar de LDAP server gefaald met gespecificeerde gebruiker/wachtwoord.',
	'LDAP_NO_EMAIL'					=> 'Het gespecificeerde e-mail attribuut bestaat niet.',
	'LDAP_NO_IDENTITY'				=> 'Kan geen aanmeld identiteit vinden voor %s.',
	'LDAP_PASSWORD'					=> 'LDAP-wachtwoord',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Laat dit leeg om anonieme verbinding te gebruiken, vul anders het wachtwoord in voor de bovenstaande gebruiker. Vereist voor Active Directory Servers.<br /><em><strong>Waarschuwing:</strong> Dit wachtwoord zal worden opgeslagen als platte tekst in de database, zichtbaar voor iedereen die toegang heeft tot je database of diegene die deze pagina kan bekijken.</em>',
	'LDAP_PORT'						=> 'LDAP-serverpoort',
	'LDAP_PORT_EXPLAIN'				=> 'Optioneel kan je een poort specificeren welke gebruikt moet worden om verbinding te maken met de LDAP server in plaats van de standaard poort 389.',
	'LDAP_SERVER'					=> 'LDAP-servernaam',
	'LDAP_SERVER_EXPLAIN'			=> 'Als je gebruikt maakt van LDAP dan is dit de hostnaam of IP adres van de LDAP server. Als alternatief kan je ook een URL specificeren zoals ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP-<var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Dit is de sleutel waaronder het system zoekt naar een opgegeven aanmeld identiteit, bijv. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP-gebruiker <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Laat dit leeg om anonieme verbinding te gebruiken. Indien ingevuld, phpBB zal dan de gespecificeerde distinguished naam gebruiken bij aanmeldpogingen om de correcte gebruiker te vinden, bijv. <samp>uid=Gebruikersnaam,ou=MijnUnit,o=MijnBedrijf,c=US</samp>. Vereist voor Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP-gebruikersfilter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optioneel kan je de doorzochte objecten limiteren met extra filters. Bijvoorbeeld <samp>objectClass=posixGroup</samp> zal resulteren in het gebruik van <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Hier kan je server en domein afhankelijke instellingen definiëren. Zorg er voor dat de data die je invult correct is, fouten zullen resulteren in e-mails die incorrecte informatie bevatten. Wanneer je het domeinnaam invult, onthoud dan dat dit inclusief het http:// of een ander protocol moet zijn. Verander alleen het poortnummer als je weet dat je server een andere waarde gebruikt, poort 80 is correct in de meeste gevallen.',

	'ENABLE_GZIP'				=> 'GZip-compressie inschakelen',
	'ENABLE_GZIP_EXPLAIN'		=> 'Gegenereerde inhoud zal worden gecomprimeerd voordat het naar de gebruiker verstuurd wordt. Dit kan netwerk verkeer verminderen, maar zal ook het CPU gebruik verhogen op zowel de server als bij de gebruiker. Vereist zlib PHP extensie om ingeladen te zijn.',
	'FORCE_SERVER_VARS'			=> 'Forceer server URL instellingen',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Indien ingesteld op ja, dan zullen de server instellingen die hier opgegeven zijn, gebruikt worden in plaats van de geautomatiseerde vastgestelde waardes.',
	'ICONS_PATH'				=> 'Berichten iconen opslagpad',
	'ICONS_PATH_EXPLAIN'		=> 'Pad in je phpBB hoofdmap, bijv. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'URL herschrijven inschakelen',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Wanneer ingeschakeld, URLs die ’app.php’ bevatten zullen herschreven worden om de bestandsnaam te verwijderen (bijv. app.php/foo zal /foo worden). <strong>Apache server’s mod_rewrite module is vereist om deze functie te kunnen laten werken; als deze optie is ingeschakeld zonder mod_rewrite ondersteuning, kunnen de URLs op je forum gebroken zijn.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'De <strong>mod_rewrite</strong> module op je Apache webserver is uitgeschakeld. Schakel de module in of neem contact op met je web hostingsprovider als je deze functie wilt inschakelen.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'We kunnen niet vaststellen of deze server URL herschrijving ondersteunt. Deze instelling kan ingeschakeld zijn, maar als URL herschrijven niet beschikbaar is, kunnen de paden aangemaakt door dit forum (zoals voor gebruik in links) gebroken zijn. Neem contact op met je web-hostingsprovider als je niet zeker weet of je veilig deze functie kan inschakelen.',
	'PATH_SETTINGS'				=> 'Padinstellingen',
	'RANKS_PATH'				=> 'Rangafbeelding opslagpad',
	'RANKS_PATH_EXPLAIN'		=> 'Pad in je phpBB hoofdmap, bijv. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Script pad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Het pad waar phpBB is gelokaliseerd relatief aan de domeinnaam, bijv. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domeinnaam',
	'SERVER_NAME_EXPLAIN'		=> 'De domeinnaam waar dit forum op draait (bijvoorbeeld: <samp>www.voorbeeld.nl</samp>).',
	'SERVER_PORT'				=> 'Server poort',
	'SERVER_PORT_EXPLAIN'		=> 'De poort waar je server op draait, gebruikelijk 80, verander dit alleen als het verschilt.',
	'SERVER_PROTOCOL'			=> 'Serverprotocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Dit wordt gebruikt als de serverprotocol als deze instellingen geforceerd worden. Indien leeg of niet geforceerd, dan zal het protocol vastgesteld worden door de cookie beveiligingsinstelling (<samp>http://</samp> of <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL-instellingen',
	'SMILIES_PATH'				=> 'Smilies opslagpad',
	'SMILIES_PATH_EXPLAIN'		=> 'Pad in je phpBB hoofdmap, bijv. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extensiegroep-iconen opslagpad',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pad in je phpBB hoofdmap, bijv. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'			=> 'Draai periodieke taken van systeem cron',
	'USE_SYSTEM_CRON_EXPLAIN'	=> 'Wanneer uitgeschakeld, zal phpBB periodieke taken instellen om deze automatisch te laten draaien. Wanneer ingeschakeld, zal phpBB geen periodieke taken instellen; een systeembeheerder zal dan moeten regelen dat <code>bin/phpbbcli.php cron:run</code> opgeroepen wordt door de systeemcron-faciliteit op reguliere basis (bijv. iedere 5 minuten).',	
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Hier kan je sessie en aanmeld gerelateerde instellingen definiëren.',

	'ALL'							=> 'Alle',
	'ALLOW_AUTOLOGIN'				=> '"Onthoud mij" aanmeldingen toestaan',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Bepaalt of gebruikers de optie "Onthoud mij" wordt gegeven wanneer ze het forum bezoeken.',
	'ALLOW_PASSWORD_RESET'			=> 'Wachtwoord reset toestaan ("Ik ben mijn wachtwoord vergeten")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Bepaalt of gebruikers gebruik kunnen maken van de "Ik ben mijn wachtwoord vergeten"-link op de aanmeldpagina om hun account terug te krijgen. Als je gebruik maakt van een externe authenticatie mechanisme, kan je ervoor kiezen deze functie uit te schakelen.',
	'AUTOLOGIN_LENGTH'				=> '"Onthoud mij"-aanmeldsleutel vervaltijd (in dagen)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Aantal dagen nadat de "Onthoud mij"-aanmeldsleutels verwijderd worden. Stel in op 0 om deze functie uit te schakelen.',
	'BROWSER_VALID'					=> 'Valideer browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Schakelt browser validatie toe voor iedere sessie wat de beveiliging verbeterd.',
	'CHECK_DNSBL'					=> 'Controleer IP in de DNS Blackhole Lijst',
	'CHECK_DNSBL_EXPLAIN'			=> 'Wanneer ingeschakeld, dan zal de gebruikers IP-adres gecontroleerd worden met de volgende DNSBL services bij registratie en het plaatsen van berichten: <a href="http://spamcop.net">spamcop.net</a> en <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Deze controle kan enige tijd duren, afhankelijk van de serverconfiguratie. Als er teveel vertragingen voorkomen of te veel vals positieve worden gemeld, dan is het aan te raden om deze functie uit te schakelen.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'E-maildomein controleren voor een geldig MX-record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Indien ingeschakeld, dan wordt het e-maildomein dat is opgegeven bij registraties en bij profielwijzigingen gecontroleerd op een geldig MX-record.',
	'FORCE_PASS_CHANGE'				=> 'Forceer wachtwoord verandering',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Vereist van de gebruiker om hun wachtwoord te veranderen na een ingesteld aantal dagen. Stel in op 0 om deze functie uit te schakelen.',
	'FORM_TIME_MAX'					=> 'Maximale tijd om formulieren te versturen',
	'FORM_TIME_MAX_EXPLAIN'			=> 'De tijd die een gebruiker heeft om een formulier te versturen. Gebruik -1 om dit uit te schakelen. Let op dat een formulier mogelijk ongeldig wordt als de sessies verloopt, ongeacht deze instelling.',
	'FORM_SID_GUESTS'				=> 'Verbind formulieren aan gastsessies',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Indien ingeschakeld, de formulierteken uitgegeven aan de gasten zal dan sessie exclusief worden. Dit kan problemen geven met sommige ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Valideer <var>X_FORWARDED_FOR</var> KOP',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessies zullen alleen doorgaan als de verzonden <var>X_FORWARDED_FOR</var>-kop gelijk is aan degene die verstuurd is met het vorige verzoek. Verbanningen zullen ook gecontroleerd worden op IPs in <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Sessie IP-validatie',
	'IP_VALID_EXPLAIN'				=> 'Bepaalt hoeveel van de gebruikers-IP gebruikt wordt om een sessie te valideren; <samp>Alle</samp> vergelijkt het complete adres, <samp>A.B.C</samp> de eerste x.x.x, <samp>A.B</samp> de eerste x.x, <samp>Geen</samp> schakelt het controleren uit. Bij IPv6-adressen <samp>A.B.C</samp> vergelijkt de eerste 4 blokken en <samp>A.B</samp> de eerste 3 blokken.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maximum aantal aanmeldpogingen per IP-adres',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'De drempel van toegestane aanmeldpogingen van één IP-adres voordat een anti-spambottaak wordt geactiveerd. Voer 0 in om te voorkomen dat de anti-spambottaak wordt geactiveerd door het IP-adres.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP-adres aanmeldpoging vervaltijd',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Aanmeldpogingen vervallen na deze periode.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Limiteer aanmeldpogingen via <var>X_FORWARDED_FOR</var> kop',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'In plaats van het limiteren van aanmeldpogingen via IP-adressen, worden ze nu gelimiteerd via <var>X_FORWARDED_FOR</var>-waardes. <br /><em><strong>Waarschuwing:</strong> Schakel dit alleen in als je een proxy-server draait dat <var>X_FORWARDED_FOR</var> instelt naar betrouwbare waardes.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximum aantal aanmeldpogingen per gebruikersnaam',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Het aantal aanmeldpogingen toegestaan voor één account voordat de anti-spambottaak geactiveerd wordt. Voer 0 in om te voorkomen dat de anti-spambottaak wordt geactiveerd door verschillende gebruikersnamen.',
	'NO_IP_VALIDATION'				=> 'Geen',
	'NO_REF_VALIDATION'				=> 'Geen',
	'PASSWORD_TYPE'					=> 'Wachtwoord complexiteit',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Bepaalt hoe complex een wachtwoord moet zijn om goedgekeurd te worden, volgende opties bevatten de vorige.',
	'PASS_TYPE_ALPHA'				=> 'Moet letters en cijfers bevatten',
	'PASS_TYPE_ANY'					=> 'Geen vereisten',
	'PASS_TYPE_CASE'				=> 'Moet gemengde letters, cijfers en symbolen bevatten',
	'PASS_TYPE_SYMBOL'				=> 'Moet symbolen bevatten',
	'REF_HOST'						=> 'Alleen host valideren',
	'REF_PATH'						=> 'Ook pad valideren',
	'REFERRER_VALID'				=> 'Valideer referentie',
	'REFERRER_VALID_EXPLAIN'		=> 'Indien ingeschakeld, de referentie van POST aanvragen zal worden gecontroleerd worden met de host/script-padinstellingen. Dit kan problemen veroorzaken met forums die gebruik maken van verschillende domeinen en of externe aanmeldingen.',
	'TPL_ALLOW_PHP'					=> 'PHP in sjablonen toestaan',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Als deze optie is ingeschakeld, zullen <code>PHP</code> en <code>INCLUDEPHP</code> statements herkend worden en verwerkt worden in sjablonen.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Deze informatie wordt gebruikt wanneer het forum e-mails verstuurt naar je gebruikers. Zorg er voor dat het e-mailadres dat je specificeert geldig is, elk bericht dat niet verstuurd kan worden zal waarschijnlijk hier naar toe verstuurd worden. Als je host geen (PHP gebaseerde) e-mailservice aanbied, dan kan je berichten versturen door gebruik te maken van SMTP. Dit vereist het adres van een server (vraag je provider indien nodig). Als de server authenticatie vereist is (en alleen als het vereist wordt), voer dan de benodigde gebruikersnaam, wachtwoord en authenticatiemethode in.',

	'ADMIN_EMAIL'					=> 'Antwoord-mailadres',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Dit zal gebruikt worden als het antwoordadres voor alle e-mails, het technische contact-e-mailadres. Het zal altijd gebruikt worden als de <samp>Antwoordpad</samp> en <samp>Afzender</samp>-adres in e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Gebruikers versturen e-mails via forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'In plaats van het weergeven van de gebruikers-e-mailadres, gebruikers kunnen e-mails versturen via het forum.',
	'BOARD_HIDE_EMAILS'				=> 'Verberg e-mailadressen',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Deze functie houdt e-mailadressen volledig privé.',
	'CONTACT_EMAIL'					=> 'Contact e-mailadres',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Dit adres zal gebruikt worden wanneer een specifiek contactpunt vereist is, bijv. spam, foutenweergave. Het zal altijd gebruikt worden als de <samp>Van</samp> en <samp>Reageer op</samp> adres in e-mails.',
	'CONTACT_EMAIL_NAME'			=> 'Contactnaam',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Dit is de contactnaam dat de e-mail ontvangers zullen zien. Als je geen contactnaam wilt hebben, laat dit veld dan leeg.',	
	'EMAIL_FUNCTION_NAME'			=> 'E-mailfunctie-naam',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'De e-mailfunctie gebruikt om e-mails te versturen via PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-mailpakket-grootte',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Dit is het maximale aantal e-mails verstuurd in één pakket. Deze instelling wordt toegepast op de interne berichtenwachtrij; stel deze waarde in op 0 als je problemen hebt met niet afgeleverde notificatie-mails.',
	'EMAIL_SIG'						=> 'E-mailonderschrift',
	'EMAIL_SIG_EXPLAIN'				=> 'Deze tekst zal bijgevoegd worden aan alle e-mails die het forum verstuurt.',
	'ENABLE_EMAIL'					=> 'Forumwijde e-mails inschakelen',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Als dit is uitgeschakeld, zullen geen e-mails door het forum verstuurd worden. <em>Let op dat gebruiker- of beheerdersactivatie vereisen dat deze optie is ingeschakeld. Als momenteel gebruik wordt gemaakt van “gebruiker” of “beheerder” activatie in de activatieinstellingen, dan zal het uitschakelen van deze functie ook de registratie uitschakelen.</em>',
	'SMTP_AUTH_METHOD'				=> 'Authenticatiemethode voor SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Alleen gebruiken als een gebruikersnaam/wachtwoord ingesteld is, vraag je provider als je niet zeker bent welke methode je moet gebruiken.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-wachtwoord',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Alleen een wachtwoord invoeren als je SMTP-server dit vereist.<br /><em><strong>Waarschuwing:</strong> Dit wachtwoord zal opgeslagen worden als platte tekst in de database, zichtbaar voor iedereen die toegang heeft tot je database of die dit configuratiepagina kan bekijken.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP-serverpoort',
	'SMTP_PORT_EXPLAIN'				=> 'Verander dit alleen als je weet dat je SMTP-server op een andere poort draait.',
	'SMTP_SERVER'					=> 'SMTP-serveradres',
	'SMTP_SETTINGS'					=> 'SMTP-instellingen',
	'SMTP_USERNAME'					=> 'SMTP-gebruikersnaam',
	'SMTP_USERNAME_EXPLAIN'			=> 'Voer alleen een gebruikersnaam in als je SMTP-server dit vereist.',
	'USE_SMTP'						=> 'Gebruik SMTP-server voor e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Selecteer “Ja” als je e-mail wilt versturen via een genoemde server in plaats van de lokale e-mailfunctie.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Hier kan je het gebruik van Jabber voor directe berichten en forumnotificaties inschakelen en controleren. Jabber is een open-source protocol en kan daarom gebruikt worden door iedereen. Sommige Jabber-servers bevatten gateways of transporten welke je toestaan om met gebruikers op andere netwerken in contact te komen. Niet alle servers bieden alle transporten en veranderingen in protocollen kunnen transporten voorkomen. Zorg er voor dat je al geregistreerde accountdetails invoert - phpBB zal de details gebruiken die je hier invoert gebruiken zoals ze zijn.',

	'JAB_ENABLE'				=> 'Jabber inschakelen',
	'JAB_ENABLE_EXPLAIN'		=> 'Schakelt het gebruik van Jabber-berichten en notificaties in.',
	'JAB_GTALK_NOTE'			=> 'Let op dat GTalk niet zal werken omdat de <samp>dns_get_record</samp> functie niet gevonden kan worden. Deze functie is niet beschikbaar in PHP4, en is niet ingebouwd op Windows platforms. Momenteel werkt het niet op BSD-gebaseerde systemen, inclusief Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber-pakketgrootte',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Dit is het aantal berichten dat in één pakket verstuurd wordt. Indien ingesteld op 0, het bericht zal dan meteen verstuurd worden en zal niet in de wachtrij geplaatst worden om later verstuurd te worden.',
	'JAB_PASSWORD'				=> 'Jabber-wachtwoord',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Waarschuwing:</strong> Dit wachtwoord zal opgeslagen worden als platte tekst in de database, zichtbaar voor iedereen die toegang heeft tot je database of die deze configuratiepagina kunnen bekijken.</em>',
	'JAB_PORT'					=> 'Jabber-poort',
	'JAB_PORT_EXPLAIN'			=> 'Laat leeg tenzij je weet dat het niet poort 5222 is.',
	'JAB_SERVER'				=> 'Jabber-server',
	'JAB_SERVER_EXPLAIN'		=> 'Bekijk %sjabber.org%s voor een lijst met servers.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber-instellingen zijn succesvol veranderd.',
	'JAB_USE_SSL'				=> 'Gebruik SSL om te verbinden',
	'JAB_USE_SSL_EXPLAIN'		=> 'Indien ingeschakeld wordt er geprobeerd om een beveiligde connectie te maken. De Jabber-poort zal aangepast worden naar 5223 als poort 5222 is gespecificeerd.',
	'JAB_USERNAME'				=> 'Jabber-gebruikersnaam of JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Specificeer een geregistreerde gebruikersnaam of een geldige JID. De gebruikersnaam zal niet worden gecontroleerd op geldigheid. Als je alleen een gebruikersnaam specificeert, dan zal je JID de gebruikersnaam zijn en de server die je hebt gespecificeerd hierboven. Specificeer anders een geldige JID, bijvoorbeeld gebruiker@jabber.org.',
));
