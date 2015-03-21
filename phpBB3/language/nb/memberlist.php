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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Mest aktive forum',
	'ACTIVE_IN_TOPIC'		=> 'Mest aktive emne',
	'ADD_FOE'				=> 'Legg til som uvenn',
	'ADD_FRIEND'			=> 'Legg til som venn',
	'AFTER'					=> 'Etter',

	'ALL'					=> 'Alle',

	'BEFORE'				=> 'Før',

	'CC_SENDER'				=> 'Send en kopi av denne e-posten til deg selv.',
	'CONTACT_ADMIN'			=> 'Kontakt en systemadministrator',

	'DEST_LANG'				=> 'Språk',
	'DEST_LANG_EXPLAIN'		=> 'Velg aktuelt språk (hvis tilgjengelig) for mottakeren av dennem meldingen.',

	'EDIT_PROFILE'			=> 'Rediger profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Denne meldingen vil bli sendt som ren tekst, ikke bruk HTML eller BBCode. Svaradressen for denne meldingen vil bli angitt til e-postadressen din.',
	'EMAIL_DISABLED'		=> 'Beklager, men alle e-postrelaterte funksjoner er deaktivert.',
	'EMAIL_SENT'			=> 'E-posten er sendt.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Denne meldingen vil bli sendt som ren tekst, ikke bruk HTML eller BBCode. Merk at emneinformasjonen allerede er inkludert i meldingen. Svaradressen for denne meldingen vil bli angitt til e-postadressen din.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Du må angi en gyldig e-postadresse for mottakeren.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Du må angi en melding som skal sendes som e-post.',
	'EMPTY_MESSAGE_IM'		=> 'Du må angi en melding som skal sendes.',
	'EMPTY_NAME_EMAIL'		=> 'Du må angi det virkelige navnet til mottakeren.',
	'EMPTY_SENDER_EMAIL'	=> 'Du må angi en gyldig e-postadresse.',
	'EMPTY_SENDER_NAME'		=> 'Du må angi et navn.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Du må angi en emnelinje for e-posten.',
	'EQUAL_TO'				=> 'Lik',

	'FIND_USERNAME_EXPLAIN'	=> 'Bruk dette skjemaet til å søke etter bestemte medlemmer. Du trenger ikke å fylle ut alle feltene. Du får treff på deler av ord ved hjelp av jokertegnet *. Når du angir datoer, bruker du formatet <kbd>YYYY-MM-DD</kbd>, f.eks. <samp>2004-02-29</samp>. Bruk avmerkingsboksene til å velge ett eller flere brukernavn (avhengig av selve skjemaet kan det hende at flere brukernavn godtas) og klikk Velg merkede for å gå tilbake til forrige skjema.',
	'FLOOD_EMAIL_LIMIT'		=> 'Du kan ikke sende flere e-poster nå. Prøv igjen senere.',

	'GROUP_LEADER'			=> 'Grouppeleder',

	'HIDE_MEMBER_SEARCH'	=> 'Skjul medlemssøk',

	'IM_ADD_CONTACT'		=> 'Legg til kontakt',
	'IM_DOWNLOAD_APP'		=> 'Last ned program',
	'IM_JABBER'				=> 'Merk at brukere kan ha valgt ikke å motta direktemeldinger de ikke har bedt om.',
	'IM_JABBER_SUBJECT'		=> 'Dette er en automatisert melding – ikke svar! Melding fra bruker %1$s den %2$s.',
	'IM_MESSAGE'			=> 'Melding',
	'IM_NAME'				=> 'Navn',
	'IM_NO_DATA'			=> 'Det finnes ingen passende kontaktinformasjon for denne brukeren.',
	'IM_NO_JABBER'			=> 'Beklager, men direktemeldinger til Jabber-brukere støttes ikke på dette systemet. Du må ha en Jabber-klient installert på systemet for å kontakte mottakeren over.',
	'IM_RECIPIENT'			=> 'Mottaker',
	'IM_SEND'				=> 'Send melding',
	'IM_SEND_MESSAGE'		=> 'Send melding',
	'IM_SENT_JABBER'		=> 'Meldingen til %1$s er sendt.',
	'IM_USER'				=> 'Send en direktemelding',

	'LAST_ACTIVE'				=> 'Sist aktiv',
	'LESS_THAN'					=> 'Færre enn',
	'LIST_USERS'				=> array(
		1	=> '%d bruker',
		2	=> '%d brukere',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Systemet krever at du er registrert og innlogget for å vise teamlisten.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Systemet krever at du er registrert og innlogget for å vise medlemslisten.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Systemet krever at du er registrert og innlogget for å søke i brukere.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Systemet krever at du er registrert og innlogget for å vise profiler.',

	'MORE_THAN'				=> 'Flere enn',

	'NO_CONTACT_FORM'		=> 'Skjemaet for å kontakte systemadministrator er deaktivert.',
	'NO_CONTACT_PAGE'		=> 'Siden for å kontakte systemadministrator er deaktivert.',
	'NO_EMAIL'				=> 'Du har ikke tillatelse til å sende e-post til denne brukeren.',
	'NO_VIEW_USERS'			=> 'Du har ikke tillatelse til å vise medlemslisten eller profiler.',

	'ORDER'					=> 'Rekkefølge',
	'OTHER'					=> 'Annet',

	'POST_IP'				=> 'Lagt inn fra IP/domene',

	'REAL_NAME'				=> 'Mottakernavn',
	'RECIPIENT'				=> 'Mottaker',
	'REMOVE_FOE'			=> 'Fjern som uvenn',
	'REMOVE_FRIEND'			=> 'Fjern som venn',

	'SELECT_MARKED'			=> 'Velg merkede',
	'SELECT_SORT_METHOD'	=> 'Velg sorteringsmetode',
	'SENDER_EMAIL_ADDRESS'	=> 'E-postadresse',
	'SENDER_NAME'			=> 'Navn',
	'SEND_ICQ_MESSAGE'		=> 'Send ICQ-melding',
	'SEND_IM'				=> 'Direktemeldinger',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber-melding',
	'SEND_MESSAGE'			=> 'Melding',
	'SEND_YIM_MESSAGE'		=> 'Send YIM-melding',
	'SORT_EMAIL'			=> 'E-post',
	'SORT_LAST_ACTIVE'		=> 'Sist aktiv',
	'SORT_POST_COUNT'		=> 'Antall innlegg',

	'USERNAME_BEGINS_WITH'	=> 'Brukernavnet begynner på',
	'USER_ADMIN'			=> 'Administrer bruker',
	'USER_BAN'				=> 'Utestengelse',
	'USER_FORUM'			=> 'Brukerstatistikk',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Ingen påminnelser er sendt ennå',
		1		=> '%1$d påminnelse er sendt<br />» %2$s',
		2		=> '%1$d påminnelser er sendt<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Tilstedeværelse på systemet',
	'USERS_PER_PAGE'		=> 'Brukere per side',

	'VIEWING_PROFILE'		=> 'Viser profil – %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Vis Facebook-profil',
	'VIEW_SKYPE_PROFILE'	=> 'Vis Skype-profil',
	'VIEW_TWITTER_PROFILE'	=> 'Vis Twitter-profil',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Vis YouTube-kanal',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Vis Google+-profil',
));
