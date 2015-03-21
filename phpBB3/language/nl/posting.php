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

$lang = array_merge($lang, array(
	'ADD_ATTACHMENT'			=> 'Bijlage uploaden',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Als je meer dan één bestand wilt bijvoegen, voer dan de details hieronder in.',
	'ADD_FILE'					=> 'Bestand toevoegen',
	'ADD_POLL'					=> 'Peiling aanmaken',
	'ADD_POLL_EXPLAIN'			=> 'Als je geen peiling wilt toevoegen aan je onderwerp, laat dan de velden leeg.',
	'ALREADY_DELETED'			=> 'Sorry maar dit bericht is al verwijderd.',
	'ATTACH_DISK_FULL'			=> 'Er is niet genoeg vrije schijfruimte om deze bijlage te plaatsen.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, het forum bijlage limiet is bereikt.',
	'ATTACH_SIG'				=> 'Onderschrift toevoegen (onderschriften kunnen gewijzigd worden via het gebruikerspaneel)',

	'BBCODE_A_HELP'				=> 'Inline geüploade bijlagen: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Vette tekst: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Code weergave: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Lettertype grootte: [size=85]kleine tekst[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s staat <em>UIT</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s staat <em>AAN</em>',
	'BBCODE_I_HELP'				=> 'Cursieve tekst: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Lijst: [list][*]tekst[/list]', 
	'BBCODE_LISTITEM_HELP'		=> 'Lijst item: [*]tekst',
	'BBCODE_O_HELP'				=> 'Geordende lijst: bijv. [list=1][*]Eerste punt[/list] of [list=a][*]Punt A[/list]',
	'BBCODE_P_HELP'				=> 'Afbeelding invoegen: [img]http://www.url_naar_de_afbeelding.eu/afbeeldingnaam.extenstie[/img]',
	'BBCODE_Q_HELP'				=> 'Geciteerde tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Letterkleur: [color=red]tekst[/color] of [color=#FF0000]tekst[/color]',
	'BBCODE_U_HELP'				=> 'Onderlijnde tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'URL invoegen: [url]http://url[/url] of [url=http://url]URL tekst[/url]',
	'BBCODE_Y_HELP'				=> 'Lijst: een lijst element toevoegen',
	'BUMP_ERROR'				=> 'Je kan dit onderwerp niet omhoog halen zo snel na het laatste bericht.',

	'CANNOT_DELETE_REPLIED'		=> 'Sorry maar je mag alleen berichten verwijderen waar nog niet op gereageerd is.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dit bericht is gesloten. Je kan dit bericht niet meer wijzigen.',
	'CANNOT_EDIT_TIME'			=> 'Je kan dit bericht niet meer wijzigen of verwijderen.',
	'CANNOT_POST_ANNOUNCE'		=> 'Sorry maar je kan geen aankondigingen plaatsen.',
	'CANNOT_POST_STICKY'		=> 'Sorry maar je kan geen sticky onderwerpen plaatsen.',
	'CHANGE_TOPIC_TO'			=> 'Verander onderwerpstype naar',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Je bericht bevat %1$d teken.',
		2	=> 'Je bericht bevat %1$d tekens.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Je onderschrift bevat %1$d teken.',
		2	=> 'Je onderschrift bevat %1$d tekens.',
	),	
	'CLOSE_TAGS'				=> 'Sluit tags',
	'CURRENT_TOPIC'				=> 'Actuele onderwerp',

	'DELETE_FILE'				=> 'Verwijder bestand',
	'DELETE_MESSAGE'			=> 'Verwijder bericht',
	'DELETE_MESSAGE_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_OWN_POSTS'			=> 'Sorry maar je kan alleen je eigen berichten verwijderen.',
	'DELETE_PERMANENTLY'		=> 'Permanent verwijderen',
	'DELETE_POST_CONFIRM'		=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Weet je zeker dat je dit bericht <strong>permanent</strong> wilt verwijderen?',
	'DELETE_POST_PERMANENTLY'	=> 'Verwijder dit bericht permanent zodat het niet meer teruggehaald kan worden',
	'DELETE_POSTS_CONFIRM'		=> 'Weet je zeker dat je deze berichten wilt verwijderen?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Weet je zeker dat je deze berichten <strong>permanent</strong> wilt verwijderen?',
	'DELETE_REASON'				=> 'Reden voor verwijdering',
	'DELETE_REASON_EXPLAIN'		=> 'De specifieke reden voor het verwijderen zal zichtbaar zijn voor moderators.',
	'DELETE_POST_WARN'			=> 'Verwijder dit bericht',
	'DELETE_TOPIC_CONFIRM'		=> 'Weet je zeker dat je dit onderwerp wilt verwijderen?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Verwijder dit onderwerp permanent zodat het niet meer teruggehaald kan worden',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Weet je zeker dat je dit onderwerp <strong>permanent</strong> wilt verwijderen?',
	'DELETE_TOPICS_CONFIRM'		=> 'Weet je zeker dat je deze onderwerpen wilt verwijderen?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Weet je zeker dat je deze onderwerpen <strong>permanent</strong> wilt verwijderen?',
	'DISABLE_BBCODE'			=> 'BBCode uitschakelen',
	'DISABLE_MAGIC_URL'			=> 'Verwerk URLs niet automatisch',
	'DISABLE_SMILIES'			=> 'Smilies uitschakelen',
	'DISALLOWED_CONTENT'		=> 'De upload is geweigerd omdat de geüploade bestand geïdentificeerd is al een mogelijke aanvalsvector.',
	'DISALLOWED_EXTENSION'		=> 'De extensie %s is niet toegestaan.',
	'DRAFT_LOADED'				=> 'Concept in berichtengebied geladen, je kan nu je bericht afmaken.<br />Je concept zal verwijderd worden na het versturen van dit bericht.',
	'DRAFT_LOADED_PM'			=> 'Concept in berichtengebied geladen, je kan nu je privé bericht afmaken.<br />Je concept zal verwijderd worden na het versturen van dit privé bericht.',
	'DRAFT_SAVED'				=> 'Concept succesvol opgeslagen.',
	'DRAFT_TITLE'				=> 'Concept titel',

	'EDIT_REASON'				=> 'Reden voor het wijzigen van dit bericht',
	'EMPTY_FILEUPLOAD'			=> 'Het geüploade bestand is leeg.',
	'EMPTY_MESSAGE'				=> 'Je moet een bericht invullen tijdens het plaatsen.',
	'EMPTY_REMOTE_DATA'			=> 'Bestand kan niet worden geüpload, probeer het bestand handmatig te uploaden.',

	'FLASH_IS_OFF'				=> '[flash] staat <em>UIT</em>',
	'FLASH_IS_ON'				=> '[flash] staat <em>AAN</em>',
	'FLOOD_ERROR'				=> 'Je kan niet zo snel nog een bericht schrijven na je laatste bericht.',
	'FONT_COLOR'				=> 'Letterkleur',
	'FONT_COLOR_HIDE'			=> 'Verberg letterkleur',
	'FONT_HUGE'					=> 'Enorm',
	'FONT_LARGE'				=> 'Groot',
	'FONT_NORMAL'				=> 'Normaal',
	'FONT_SIZE'					=> 'Letter grootte',
	'FONT_SMALL'				=> 'Klein',
	'FONT_TINY'					=> 'Miniem',

	'GENERAL_UPLOAD_ERROR'		=> 'Kan bijlage niet uploaden naar %s.',

	'IMAGES_ARE_OFF'			=> '[img] staat <em>UIT</em>',
	'IMAGES_ARE_ON'				=> '[img] staat <em>AAN</em>',
	'INVALID_FILENAME'			=> '%s is een ongeldige bestandsnaam.',

	'LOAD'						=> 'Laad',
	'LOAD_DRAFT'				=> 'Laad concept',
	'LOAD_DRAFT_EXPLAIN'		=> 'Hier kan je het concept selecteren waarmee je verder wilt schrijven. Je bestaande bericht zal worden geannuleerd, alle bestaande berichten inhoud zal worden verwijderd. Bekijk, wijzig en verwijder concepten in je gebruikers controle paneel.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Je moet aangemeld zijn om onderwerpen in dit forum omhoog te kunnen halen.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Je moet aangemeld zijn om berichten in dit forum te kunnen verwijderen.',
	'LOGIN_EXPLAIN_POST'		=> 'Je moet aangemeld zijn om berichten in dit forum te kunnen plaatsen.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Je moet aangemeld zijn om berichten in dit forum te kunnen citeren.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Je moet aangemeld zijn om reacties op onderwerpen in dit forum te kunnen schrijven.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Je mag alleen lettertype gebruiken tot grootte %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Je flash-bestanden mogen alleen tot %d pixel hoog zijn.',
		2	=> 'Je flash-bestanden mogen alleen tot %d pixels hoog zijn.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Je flash-bestanden mogen alleen tot %d pixel breed zijn.',
		2	=> 'Je flash-bestanden mogen alleen tot %d pixels breed zijn.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Je afbeeldingen mogen alleen tot %1$d pixel hoog zijn.',
		2	=> 'Je afbeeldingen mogen alleen tot %1$d pixels hoog zijn.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Je afbeeldingen mogen alleen tot %d pixel breed zijn.',
		2	=> 'Je afbeeldingen mogen alleen tot %d pixels breed zijn.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Vul hier je bericht in, het mag niet meer dan <strong>%d</strong> karakter bevatten.',
		2	=> 'Vul hier je bericht in, het mag niet meer dan <strong>%d</strong> karakters bevatten.',
	),
	'MESSAGE_DELETED'			=> 'Dit bericht is succesvol verwijderd.',
	'MORE_SMILIES'				=> 'Bekijk meer smilies',

	'NOTIFY_REPLY'				=> 'Informeer me wanneer een reactie is geplaatst',
	'NOT_UPLOADED'				=> 'Bestand kan niet worden geüpload.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Je kan geen bestaande peilingopties verwijderen.',
	'NO_PM_ICON'				=> 'Geen PB icoon',
	'NO_POLL_TITLE'				=> 'Je moet een peilingstitel invullen.',
	'NO_POST'					=> 'Het opgevraagde bericht bestaat niet.',
	'NO_POST_MODE'				=> 'Geen plaatsingsmode gespecificeerd.',

	'PARTIAL_UPLOAD'			=> 'Het geüploade bestand is slechts gedeeltelijk geüpload.',
	'PHP_SIZE_NA'				=> 'De bijlage bestandsgrootte is te groot.<br />Kan de maximum grootte opgegeven in PHP in php.ini niet bepalen.',
	'PHP_SIZE_OVERRUN'			=> 'De bijlage bestandsgrootte is te groot, de maximum uploadgrootte is %1$d %2$s.<br />Dit is ingesteld in php.ini en kan niet overschreven worden.',
	'PLACE_INLINE'				=> 'Plaats inline',
	'POLL_DELETE'				=> 'Verwijder peiling',
	'POLL_FOR'					=> 'Peiling loopt voor',
	'POLL_FOR_EXPLAIN'			=> 'Vul 0 in voor een nooit eindigende peiling.',
	'POLL_MAX_OPTIONS'			=> 'Opties per gebruiker',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Dit is het aantal opties die iedere gebruiker mag selecteren tijdens het stemmen.',
	'POLL_OPTIONS'				=> 'Peiling opties',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Plaats iedere optie op een nieuwe regel. Je mag <strong>%d</strong> optie invoeren.',
		2	=> 'Plaats iedere optie op een nieuwe regel. Je mag tot <strong>%d</strong> opties invoeren.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Plaats iedere optie op een nieuwe regel. Je mag <strong>%d</strong> optie invoeren. Als je opties toevoegd of verwijderd, dan worden alle eerdere stemmen gereset.',
		2	=> 'Plaats iedere optie op een nieuwe regel. Je mag tot <strong>%d</strong> opties invoeren. Als je opties toevoegd of verwijderd, dan worden alle eerdere stemmen gereset.',
	),
	'POLL_QUESTION'				=> 'Peiling vragen',
	'POLL_TITLE_TOO_LONG'		=> 'De peiling titel moet minder dan 100 karakters bevatten.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'De verwerkte grootte van je peiling titel is te groot, overweeg het verwijderen van BBCodes of smilies.',
	'POLL_VOTE_CHANGE'			=> 'Herstemmen toestaan',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Indien ingeschakeld kunnen gebruikers hun stem veranderen.',
	'POSTED_ATTACHMENTS'		=> 'Geplaatste bijlagen',
	'POST_APPROVAL_NOTIFY'		=> 'Je zal genotificeerd worden wanneer je bericht goedgekeurd is.',
	'POST_CONFIRMATION'			=> 'Bevestiging van plaatsten',
	'POST_CONFIRM_EXPLAIN'		=> 'Om automatische berichten te voorkomen, vereist dit forum dat je een bevestigingscode invult. De code is weergegeven in de afbeelding die je hieronder kan zien. Als je visueel gehandicapt bent en de code niet kan lezen, neem dan contact op met de %sForumbeheerder%s.',
	'POST_DELETED'				=> 'Dit bericht is succesvol verwijderd.',
	'POST_EDITED'				=> 'Dit bericht is succesvol gewijzigd.',
	'POST_EDITED_MOD'			=> 'Dit bericht is succesvol gewijzigd, maar het zal goedgekeurd moeten worden door een moderator voordat het publiekelijk zichtbaar zal zijn.',
	'POST_GLOBAL'				=> 'Algemeen',
	'POST_ICON'					=> 'Berichticoon',
	'POST_NORMAL'				=> 'Normaal',
	'POST_REVIEW'				=> 'Bericht voorbeeld',
	'POST_REVIEW_EDIT'			=> 'Bericht voorbeeld',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Dit bericht is gewijzigd door een andere gebruiker terwijl je het aan het wijzigen was. Je kan er voor kiezen om de bestaande versie van dit bericht te bekijken en je wijzigingen aan te passen.',
	'POST_REVIEW_EXPLAIN'		=> 'Tenminste één nieuw bericht is gemaakt bij dit onderwerp. Je kan er voor kiezen om je bericht te herzien na het lezen van dit bericht.',
	'POST_STORED'				=> 'Dit bericht is succesvol geplaatst.',
	'POST_STORED_MOD'			=> 'Dit bericht is succesvol verstuurd, maar het zal goedgekeurd moeten worden door een moderator voordat het publiekelijk zichtbaar zal zijn.',
	'POST_TOPIC_AS'				=> 'Plaats onderwerp als',
	'PROGRESS_BAR'				=> 'Progressie balk',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Je mag alleen tot %d citaat in elkaar voegen.',
		2	=> 'Je mag alleen tot %d citaten in elkaar voegen.',
	),
	'QUOTE_NO_NESTING'			=> 'Je mag geen citaten in elkaar plaatsen.',

	'REMOTE_UPLOAD_TIMEOUT'         => 'Het gespecificeerde bestand kon niet worden geüpload omdat de aanvraag is verlopen.',
	'SAVE'						=> 'Opslaan',
	'SAVE_DATE'					=> 'Opgeslagen op',
	'SAVE_DRAFT'				=> 'Bewaar concept',
	'SAVE_DRAFT_CONFIRM'		=> 'Let op dat opgeslaagde concepten alleen de onderwerp en de tekst bevatten, elk ander element zal worden verwijderd. Wil je je concept nu opslaan?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies staan <em>UIT</em>',
	'SMILIES_ARE_ON'			=> 'Smilies staan <em>AAN</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/Aankondigingen tijdslimiet',
	'STICK_TOPIC_FOR'			=> 'Stick onderwerp voor',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Vul 0 in voor een nooit eindigende Sticky/Aankondiging. Let op dat dit nummer relatief is aan de datum van het bericht.',
	'STYLES_TIP'				=> 'Tip: Stijlen kunnen snel toegepast worden aan geselecteerde tekst.',

	'TOO_FEW_CHARS'				=> 'Je bericht bevat te weinig karakters.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Je moet minimaal %1$d teken invoeren.',
		2	=> 'Je moet minimaal %1$d tekens invoeren.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Je moet tenminste twee peilingopties invullen.',
	'TOO_MANY_ATTACHMENTS'		=> 'Kan geen andere bijlage toevoegen, %d is het maximum.',
	'TOO_MANY_CHARS'			=> 'Je bericht bevat te veel karakters.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Het maximaal aantal tekens dat is toegestaan is %1$d.',
 	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Je hebt geprobeerd te veel peilingopties in te voeren.',
	'TOO_MANY_SMILIES'			=> 'Je bericht bevat te veel smilies. Het maximum aantal toegestane smilies is %d.',
	'TOO_MANY_URLS'				=> 'Je bericht bevat te veel URLs. Het maximum aantal toegestane URLs is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Je kan niet meer opties specificeren per gebruiker dan de bestaande peiling opties.',
	'TOPIC_BUMPED'				=> 'Onderwerp is succesvol omhoog gehaald.',

	'UNAUTHORISED_BBCODE'		=> 'Je kan niet bepaalde BBCodes gebruiken: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Om dit onderwerp terug te schakelen van algemeen naar een normaal onderwerp, moet je het forum selecteren waarin dit onderwerp weergegeven moet worden.',
        'UNSUPPORTED_CHARACTERS_MESSAGE' => 'Je bericht bevat de volgende tekens die niet worden ondersteund:<br />%s',
        'UNSUPPORTED_CHARACTERS_SUBJECT' => 'Je onderwerp bevat de volgende tekens die niet worden ondersteund:<br />%s',
	'UPDATE_COMMENT'			=> 'Update reactie',
	'URL_INVALID'				=> 'De URL die je hebt gespecificeerd is ongeldig.',
	'URL_NOT_FOUND'				=> 'Het gespecificeerde bestand kan niet gevonden worden.',
	'URL_IS_OFF'				=> '[url] staat <em>UIT</em>',
	'URL_IS_ON'					=> '[url] staat <em>AAN</em>',
	'USER_CANNOT_BUMP'			=> 'Je kan geen onderwerpen in dit forum omhoog halen.',
	'USER_CANNOT_DELETE'		=> 'Je kan geen berichten in dit forum verwijderen.',
	'USER_CANNOT_EDIT'			=> 'Je kan geen berichten in dit forum wijzigen.',
	'USER_CANNOT_REPLY'			=> 'Je kan niet reageren in dit forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Je kan geen plaatsingsoperaties doen in dit forum omdat het forumtype dit niet ondersteunt.',

	'VIEW_MESSAGE'				=> '%sBekijk je verstuurde bericht%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sBekijk je verstuurde privébericht%s',

	'WRONG_FILESIZE'			=> 'Het bestand is te groot, de maximaal toegestane grootte is %1$d %2$s.',
	'WRONG_SIZE'				=> 'De afbeelding moet tenminste %1$s breed, %2$s hoog zijn en maximaal %3$s breed en %4$s hoog zijn. De verstuurde afbeelding is %5$s breed en %6$s hoog.',
));
