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
	'ABOUT_USER'			=> 'Profiel',
	'ACTIVE_IN_FORUM'		=> 'Meest actieve forum',
	'ACTIVE_IN_TOPIC'		=> 'Meest actieve onderwerp',
	'ADD_FOE'				=> 'Vijand toevoegen',
	'ADD_FRIEND'			=> 'Vriend toevoegen',
	'AFTER'					=> 'Na',

	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Voor',

	'CC_SENDER'				=> 'Stuur een kopie van deze e-mail naar jezelf.',
	'CONTACT_ADMIN'         => 'Neem contact op met een forumbeheerder',

	'DEST_LANG'				=> 'Taal',
	'DEST_LANG_EXPLAIN'		=> 'Selecteer een taal (indien beschikbaar) voor de ontvanger van dit bericht.',

	'EDIT_PROFILE'			=> 'Wijzig profiel',

	'EMAIL_BODY_EXPLAIN'	=> 'Dit bericht zal verstuurd worden als platte tekst, vul hier geen HTML of BBCode in. Het reactie adres voor dit bericht zal worden ingesteld op je e-mailadres.',
	'EMAIL_DISABLED'		=> 'Sorry maar alle e-mail gerelateerde functies zijn uitgeschakeld.',
	'EMAIL_SENT'			=> 'De e-mail is verstuurd.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Dit bericht zal verstuurd worden als platte tekst, vul hier geen HTML of BBCode in. Let op dat het onderwerpsinformatie al bijgevoegd word in het bericht. Het reactieadres voor dit bericht zal worden ingesteld op je e-mailadres.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Je moet een geldig e-mailadres opgeven voor de ontvanger.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Je moet een bericht ingevuld hebben om te e-mailen.',
	'EMPTY_MESSAGE_IM'		=> 'Je moet een bericht ingevuld hebben om te versturen.',
	'EMPTY_NAME_EMAIL'		=> 'Je moet de echte naam van de ontvanger invullen.',
	'EMPTY_SENDER_EMAIL'    => 'Je moet een geldig e-mailadres opgeven.',
	'EMPTY_SENDER_NAME'     => 'Je moet een naam opgeven.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Je moet een onderwerp specificeren voor de e-mail.',
	'EQUAL_TO'				=> 'Gelijk aan',

	'FIND_USERNAME_EXPLAIN'	=> 'Gebruik dit formulier om naar specifieke leden te zoeken. Je hoeft niet alle velden in te vullen. Om gedeeltelijke data te zoeken gebruik dan * als een joker. Wanneer je datums invult gebruik dan het formaat <kbd>JJJJ-MM-DD</kbd>, bijv. <samp>2004-02-29</samp>. Gebruik de markeer vinkboxen om één of meerdere gebruikersnamen te selecteren (verschillende gebruikersnamen kunnen geaccepteerd worden afhankelijk van het formulier) en klik op de Selecteer gemarkeerden knop om terug te gaan naar het vorige formulier.',
	'FLOOD_EMAIL_LIMIT'		=> 'Je kan niet nog een e-mail versturen momenteel. Probeer het later nog eens.',

	'GROUP_LEADER'			=> 'Groepsleider',

	'HIDE_MEMBER_SEARCH'	=> 'Verberg leden zoeken',

	'IM_ADD_CONTACT'		=> 'Contact toevoegen',
	'IM_DOWNLOAD_APP'		=> 'Download applicatie',
	'IM_JABBER'				=> 'Let op dat gebruikers kunnen hebben ingesteld dat ze geen ongevraagde instant messages willen ontvangen.',
	'IM_JABBER_SUBJECT'		=> 'Dit is een geautomatiseerd bericht. Reageer hier niet op! Bericht van gebruiker %1$s op %2$s.',
	'IM_MESSAGE'			=> 'Je bericht',
	'IM_NAME'				=> 'Je naam',
	'IM_NO_DATA'			=> 'Er is geen geschikte contactinformatie voor deze gebruiker.',
	'IM_NO_JABBER'			=> 'Sorry, direct messaging van Jabber gebruikers wordt niet ondersteunt op dit forum. Je zal een Jabber-cliënt geïnstalleerd moeten hebben op je systeem om contact te kunnen opnemen met de ontvanger hierboven.',
	'IM_RECIPIENT'			=> 'Ontvanger',
	'IM_SEND'				=> 'Verstuur bericht',
	'IM_SEND_MESSAGE'		=> 'Verstuur bericht',
	'IM_SENT_JABBER'		=> 'Je bericht naar %1$s is succesvol verstuurd.',
	'IM_USER'				=> 'Verstuur een instant message',

	'LAST_ACTIVE'				=> 'Laatst actief',
	'LESS_THAN'					=> 'Minder dan',
	'LIST_USERS'				=> array(
		1	=> '%d gebruiker',
		2	=> '%d gebruikers',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Je moet geregistreerd en aangemeld zijn om de teamlijst te kunnen bekijken.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Je moet geregistreerd en aangemeld zijn om toegang te hebben tot de ledenlijst.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Je moet geregistreerd en aangemeld zijn om gebruikers te kunnen zoeken.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Je moet geregistreerd en aangemeld zijn om profielen te kunnen bekijken.',

	'MORE_THAN'				=> 'Meer dan',

    'NO_CONTACT_FORM'               => 'Het contactformulier is uitgeschakeld.',
    'NO_CONTACT_PAGE'               => 'De contactpagina is uitgeschakeld.',
	'NO_EMAIL'				=> 'Je hebt niet de permissies om deze gebruiker te e-mailen.',
	'NO_VIEW_USERS'			=> 'Je bent niet toegestaan om de ledenlijst of profielen te bekijken.',

	'ORDER'					=> 'Volgorde',
	'OTHER'					=> 'Ander',

	'POST_IP'				=> 'Geplaatst van IP/domein',

	'REAL_NAME'				=> 'Ontvangersnaam',
	'RECIPIENT'				=> 'Ontvanger',
	'REMOVE_FOE'			=> 'Vijand verwijderen',
	'REMOVE_FRIEND'			=> 'Vriend verwijderen',

	'SELECT_MARKED'			=> 'Selecteer gemarkeerden',
	'SELECT_SORT_METHOD'	=> 'Selecteer sorteer methode',
    'SENDER_EMAIL_ADDRESS'  => 'Je e-mailadres',
    'SENDER_NAME'           => 'Je naam',	
	'SEND_ICQ_MESSAGE'		=> 'Verstuur ICQ-bericht',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Verstuur Jabber-bericht',
	'SEND_MESSAGE'			=> 'Bericht',
	'SEND_YIM_MESSAGE'		=> 'Verstuur YIM-bericht',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Laatst actief',
	'SORT_POST_COUNT'		=> 'Berichten aantal',

	'USERNAME_BEGINS_WITH'	=> 'Gebruikersnaam begint met',
	'USER_ADMIN'			=> 'Beheer gebruiker',
	'USER_BAN'				=> 'Verbannen',
	'USER_FORUM'			=> 'Gebruikersstatistieken',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Geen herinnering verstuurd momenteel',
		1		=> '%1$d herinnering verstuurd<br />» %2$s',
		2		=> '%1$d herinneringen verstuurd<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Forumvoorkeuren',
	'USERS_PER_PAGE'		=> 'Gebruikers per pagina',

	'VIEWING_PROFILE'		=> 'Bekijkt profiel - %s',
    'VIEW_FACEBOOK_PROFILE'         => 'Bekijk Facebook Profiel',
	'VIEW_SKYPE_PROFILE'            => 'Bekijk Skype Profiel',
	'VIEW_TWITTER_PROFILE'          => 'Bekijk Twitter Profiel',
	'VIEW_YOUTUBE_CHANNEL'			=> 'Bekijk YouTube Kanaal',
	'VIEW_GOOGLEPLUS_PROFILE'       => 'Bekijk Google+ Profiel'	
));
