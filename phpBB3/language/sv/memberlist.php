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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Aktivast i kategori',
	'ACTIVE_IN_TOPIC'		=> 'Aktivast i tråd',
	'ADD_FOE'				=> 'Markera som en ignorerad användare',
	'ADD_FRIEND'			=> 'Lägg till som vän',
	'AFTER'					=> 'Efter',	
	'ALL'					=> 'Alla',

	'BEFORE'				=> 'Före',

	'CC_SENDER'				=> 'Skicka en kopia av detta e-postmeddelande till mig själv.',
	'CONTACT_ADMIN'			=> 'Kontakta en forumadministratör',

	'DEST_LANG'				=> 'Språk',
	'DEST_LANG_EXPLAIN'		=> 'Välj ett språk om passar för mottagaren (om det finns tillgängligt) av detta meddelande.',

	'EDIT_PROFILE'			=> 'Redigera profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Detta meddelande kommer att skickas som oformaterad text, använd inte HTML eller BBCode. Svarsadressen för detta e-postmeddelande kommer att vara din e-postadress.',
	'EMAIL_DISABLED'		=> 'Alla e-postrelaterade funktioner har inaktiverats.',
	'EMAIL_SENT'			=> 'E-postmeddelandet skickades.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Detta meddelande kommer att skickas som oformaterad text, använd inte HTML eller BBCode. Information om tråden inkluderas automatiskt. Svarsadressen för detta e-postmeddelande kommer att vara din e-postadress.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du måste ange en riktig e-postadress för mottagaren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du måste skriva ett meddelande.',
	'EMPTY_MESSAGE_IM'		=> 'Du måste skriva ett meddelande att skicka.',
	'EMPTY_NAME_EMAIL'		=> 'Du måste ange mottagarens riktiga namn.',
	'EMPTY_SENDER_EMAIL'	=> 'Du måste ange en giltlig e-postadress.',
	'EMPTY_SENDER_NAME'		=> 'Du måste ange ett namn.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du måste ange ett ämne för e-postmeddelandet.',
	'EQUAL_TO'				=> 'Lika med',

	'FIND_USERNAME_EXPLAIN'	=> 'Använd detta formulär för att söka efter specifika medlemmar. Du måste inte fylla i alla fält. För att hitta partiella data använd * som jokertecken. För datum, använd formatet <kbd>ÅÅÅÅ-MM-DD</kbd>, t.ex. <samp>2004-02-29</samp>. Använd kryssboxarna för att välja en eller flera användarnamn (fler användarnamn än ett kan väljas i vissa fall) och klicka på “Välj markerade” för att återgå till föregående formulär.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kan inte skicka ett till e-postmeddelande just nu. Försök igen senare.',

	'GROUP_LEADER'			=> 'Gruppledare',

	'HIDE_MEMBER_SEARCH'	=> 'Dölj medlemssök',

	'IM_ADD_CONTACT'		=> 'Lägg till kontakt',
	'IM_DOWNLOAD_APP'		=> 'Ladda ner program',
	'IM_JABBER'				=> 'Kom ihåg att användaren kan ha valt att inte ta emot oombedda snabbmeddelanden.',
	'IM_JABBER_SUBJECT'		=> 'Detta är ett automatiskt meddelande - svara inte! Meddelande from användare %1$s på %2$s.',
	'IM_MESSAGE'			=> 'Ditt meddelande',
	'IM_NAME'				=> 'Ditt namn',
	'IM_NO_DATA'			=> 'Det finns ingen passande kontaktinformation för denna användare.',
	'IM_NO_JABBER'			=> 'Det går inte att skicka meddelande till Jabberanvändare på detta forum. Du måste ha en Jabberklient installerad på din dator för att kontakta mottagaren ovan.',
	'IM_RECIPIENT'			=> 'Mottagare',
	'IM_SEND'				=> 'Skicka meddelande',
	'IM_SEND_MESSAGE'		=> 'Skicka meddelande',
	'IM_SENT_JABBER'		=> 'Ditt meddelande till %1$s skickades.',
	'IM_USER'				=> 'Skicka ett snabbmeddelande',

	'LAST_ACTIVE'				=> 'Senast aktiv',
	'LESS_THAN'					=> 'Mindre än',
	'LIST_USERS'				=> array(
		1	=> '%d användare',
		2	=> '%d användare',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Forumet kräver att du registrerar dig och loggar in för att visa teamlistan.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Forumet kräver att du registrerar dig och loggar in för att visa medlemslistan.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Forumet kräver att du registrerar dig och loggar in för att söka efter medlemmar.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Forumet kräver att du registrerar dig och loggar in för att visa profiler.',

	'MORE_THAN'				=> 'Mer än',

	'NO_CONTACT_FORM'		=> 'Forumets administratörs kontaktformulär har inaktiverats.',
	'NO_CONTACT_PAGE'		=> 'Forumets administratörs kontaktsida har inaktiverats.',
	'NO_EMAIL'				=> 'Du har inte tillåtelse att skicka e-post till denna användare.',
	'NO_VIEW_USERS'			=> 'Du har inte tillåtelse att visa medlemslistan eller profiler.',

	'ORDER'					=> 'Ordning',
	'OTHER'					=> 'Annat',

	'POST_IP'				=> 'Postat från IP/domän',

	'REAL_NAME'				=> 'Mottagarens namn',
	'RECIPIENT'				=> 'Mottagare',
	'REMOVE_FOE'			=> 'Ta bort från ignorerade  användare',
	'REMOVE_FRIEND'			=> 'Ta bort från vänner',

	'SELECT_MARKED'			=> 'Välj markerade',
	'SELECT_SORT_METHOD'	=> 'Välj sorteringsmetod',
	'SENDER_EMAIL_ADDRESS'	=> 'Din e-postadress',
	'SENDER_NAME'			=> 'Ditt namn',
	'SEND_ICQ_MESSAGE'		=> 'Skicka ICQ-meddelande',
	'SEND_IM'				=> 'Snabbmeddelanden',
	'SEND_JABBER_MESSAGE'	=> 'Skicka Jabber-meddelande',
	'SEND_MESSAGE'			=> 'Meddelande',
	'SEND_YIM_MESSAGE'		=> 'Skicka YIM-meddelande',
	'SORT_EMAIL'			=> 'E-post',
	'SORT_LAST_ACTIVE'		=> 'Senast aktiv',
	'SORT_POST_COUNT'		=> 'Antal inlägg',

	'USERNAME_BEGINS_WITH'	=> 'Användarnamn som börjar med',
	'USER_ADMIN'			=> 'Administrera användare',
	'USER_BAN'				=> 'Bannlys',
	'USER_FORUM'			=> 'Användarstatistik',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ingen påminnelse har sänts',
		1		=> '%1$d påminnelse sänd<br />» %2$s',
		2		=> '%1$d påminnelser sända<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Allmänt',
	'USERS_PER_PAGE'		=> 'Användare per sida',

	'VIEWING_PROFILE'		=> 'Visar profil - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Visa Facebook profil',
	'VIEW_SKYPE_PROFILE'	=> 'Visa Skype profil',
	'VIEW_TWITTER_PROFILE'	=> 'Visa Twitter profil',
	'VIEW_YOUTUBE_CHANNEL'  => 'Visa YouTube-kanal',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Visa Google+ profil',

));
