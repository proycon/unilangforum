<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: memberlist.php 473 2014-11-25 20:11:05Z jan_skovsgaard $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Mest aktive forum',
	'ACTIVE_IN_TOPIC'		=> 'Mest aktive emne',
	'ADD_FOE'				=> 'Ignorer bruger',
	'ADD_FRIEND'			=> 'Tilføj som ven',
	'AFTER'					=> 'Efter',
	
	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Før',

	'CC_SENDER'				=> 'Send en kopi af denne email til dig selv',
	'CONTACT_ADMIN'			=> 'Kontakt en boardadministrator',

	'DEST_LANG'				=> 'Sprog',
	'DEST_LANG_EXPLAIN'		=> 'Vælg et passende sprog (hvis tilgængeligt) til modtageren af denne besked.',
	
	'EDIT_PROFILE'			=> 'Rediger profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Denne besked bliver sendt som ren tekst, undlad derfor HTML- og/eller BBkode. Returadressen i denne besked bliver sat som din emailadresse.',
	'EMAIL_DISABLED'		=> 'Desværre, alle emailrelaterede funktioner er slået fra.',
	'EMAIL_SENT'			=> 'Emailen er blevet sendt.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Denne besked bliver sendt som ren tekst, undlad derfor HTML- og/eller BBkoder. Bemærk at emneinformation er inkluderet i denne besked. Returadressen i denne besked bliver sat som din emailadresse.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du skal angive en gyldig emailadresse på modtageren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du skal skrive den besked der skal sendes med email.',
	'EMPTY_MESSAGE_IM'		=> 'Du skal skrive den besked der skal sendes.',
	'EMPTY_NAME_EMAIL'		=> 'Du skal indtaste modtagerens rigtige navn.',
	'EMPTY_SENDER_EMAIL'	=> 'Du skal angive en gyldig emailadresse.',
	'EMPTY_SENDER_NAME'		=> 'Du skal angive et navn.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du skal angive et emne i emnefeltet til denne email.',
	'EQUAL_TO'				=> 'Svarer til',

	'FIND_USERNAME_EXPLAIN'	=> 'Brug denne formular for at søge efter specifikke tilmeldte brugere. Du behøver ikke at udfylde alle felterne. Brug * som ubekendt for ukendte tegn. Hvis du bruger dato som søgeparameter, så brug formatet <kbd>yyyy-mm-dd</kbd>, f.eks. <samp>2007-01-31</samp>. Brug markeringsboksene for at vælge et eller flere brugernavne (flere brugernavne kan accepteres afhængig af selve formatet) og klik på vælg markerede for at returnere til forrige side.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kan ikke sende endnu en email lige nu, prøv venligst igen senere.',

	'GROUP_LEADER'			=> 'Gruppeleder',

	'HIDE_MEMBER_SEARCH'	=> 'Skjul brugersøgning',

	'IM_ADD_CONTACT'		=> 'Tilføj kontakt',
	'IM_DOWNLOAD_APP'		=> 'Hent applikation',
	'IM_JABBER'				=> 'Vær venligst opmærksom på at brugere kan have valgt ikke at modtage beskeder vedkommende ikke selv har anmodet om.',
	'IM_JABBER_SUBJECT'		=> 'Jabberbesked fra %1$s på %2$s. Besvar den venligst ikke!',
	'IM_MESSAGE'			=> 'Din besked',
	'IM_NAME'				=> 'Dit navn',
	'IM_NO_DATA'			=> 'Der er ingen tilgængelig kontaktinformation for denne bruger.',
	'IM_NO_JABBER'			=> 'Desværre, Jabbers direct messaging understøttes ikke på dette board. Du skal have installeret en Jabberklient på din PC for at kunne kontakte ovennævnte modtager.',
	'IM_RECIPIENT'			=> 'Modtager',
	'IM_SEND'				=> 'Send besked',
	'IM_SEND_MESSAGE'		=> 'Send besked',
	'IM_SENT_JABBER'		=> 'Din besked til %1$s er afsendt.',
	'IM_USER'				=> 'Send en besked',
	
	'LAST_ACTIVE'				=> 'Senest aktiv',
	'LESS_THAN'					=> 'Mindre end',
	'LIST_USERS' => array(
		1	=> '%d bruger',
		2	=> '%d brugere',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Du skal være tilmeldt som bruger og logget ind for at se holdlisten.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Du skal være tilmeldt som bruger og logget ind for at se listen over tilmeldte brugere.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Du skal være tilmeldt som bruger og logget ind for at søge brugere.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Du skal være tilmeldt som bruger og logget ind for at se profiler.',

	'MORE_THAN'				=> 'Mere end',

	'NO_CONTACT_FORM'		=> 'Formularen til at kontakte boardadministrator, er blevet deaktiveret.',
	'NO_CONTACT_PAGE'		=> 'Kontaktsiden til boardadministrator er blevet deaktiveret.',
	'NO_EMAIL'				=> 'Du har ikke tilladelse til at sende email til denne bruger.',
	'NO_VIEW_USERS'			=> 'Du har ikke tilladelse til at se liste over tilmeldte brugere og deres profiler.',

	'ORDER'					=> 'Rækkefølge',
	'OTHER'					=> 'Andet',

	'POST_IP'				=> 'Sendt fra IP-adresse/domæne',

	'REAL_NAME'				=> 'Modtagers navn',
	'RECIPIENT'				=> 'Modtager',
	'REMOVE_FOE'			=> 'Fjern ignoreret bruger',
	'REMOVE_FRIEND'			=> 'Slet ven',

	'SELECT_MARKED'			=> 'Vælg markerede',
	'SELECT_SORT_METHOD'	=> 'Vælg sorteringsmåde',
	'SENDER_EMAIL_ADDRESS'	=> 'Din emailadresse',
	'SENDER_NAME'			=> 'Dit navn',
	'SEND_ICQ_MESSAGE'		=> 'Send besked med ICQ',
	'SEND_IM'				=> 'Send besked',
	'SEND_JABBER_MESSAGE'	=> 'Send besked med Jabber',
	'SEND_MESSAGE'			=> 'Besked',
	'SEND_YIM_MESSAGE'		=> 'Send besked med YIM',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Senest aktiv',
	'SORT_POST_COUNT'		=> 'Antal indlæg',

	'USERNAME_BEGINS_WITH'	=> 'Brugernavn begynder med',
	'USER_ADMIN'			=> 'Administrer',
	'USER_BAN'				=> 'Udeluk',
	'USER_FORUM'			=> 'Brugerstatistikker',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ingen udestående påmindelser',
		1		=> '%1$d påmindelse afsendt<br />» %2$s',
		2		=> '%1$d påmindelser afsendt<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Tilstedeværelse på board',
	'USERS_PER_PAGE'		=> 'Brugere pr. side',

	'VIEWING_PROFILE'		=> '%s\'s profil',
	'VIEW_FACEBOOK_PROFILE'	=> 'Se Facebookprofil',
	'VIEW_SKYPE_PROFILE'	=> 'Se Skypeprofil',
	'VIEW_TWITTER_PROFILE'	=> 'Se Twitterprofil',
	'VIEW_YOUTUBE_CHANNEL'  => 'Se YouTubekanal',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Se Google+-profil',
));
