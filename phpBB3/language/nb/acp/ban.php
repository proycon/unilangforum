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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 time',
	'30_MINS'		=> '30 minutter',
	'6_HOURS'		=> '6 timer',

	'ACP_BAN_EXPLAIN'	=> 'Her kan du styre utestengelsen av brukere etter navn, IP eller e-postadresse. Disse metodene hindrer en bruker i å nå en hvilken som helst del av systemet. Du kan gi en kort (maksimalt 3000 tegn) begrunnelse for utestengelsen om du ønsker. Dette vil bli vist i administrasjonsloggen. Du kan også angi utestengelsens varighet. Hvis du vil stenge ute frem til en bestemt dato i stedet for et gitt tidsrom, velger du <span style="text-decoration: underline;">Til -&gt;</span> som utestengelseslengde og angir en dato på formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Ekskluder fra utestengelse',
	'BAN_LENGTH'			=> 'Utestengelseslengde',
	'BAN_REASON'			=> 'Begrunnelse for utestengelse',
	'BAN_GIVE_REASON'		=> 'Begrunnelsen som vises til den utestengte',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Utestengelseslistenlisten er oppdatert.',
	'BANNED_UNTIL_DATE'		=> 'til %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (til %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Steng ute én eller flere e-postadresser',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Aktiver dette for å ekskludere de angitte e-postadressene fra alle gjeldende utestengelser.',
	'EMAIL_BAN_EXPLAIN'			=> 'Hvis du vil angi flere enn én e-postadresse, skriver du dem på hver sin linje. Bruk * som jokertegn for å dekke flere e-postadresser, f.eks. <samp>*@hotmail.com</samp>, <samp>*@*.domene.tld</samp>, osv.',
	'EMAIL_NO_BANNED'			=> 'Ingen utestengte e-postadresser',
	'EMAIL_UNBAN'				=> 'Opphev utestengelse eller av-ekskluder e-postadresser',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Du kan oppheve utestengelse av (eller av-ekskludere) flere e-postadresse på én gang ved å bruke en relevant kombinasjon av mus og tastatur på datamaskinen og i nettleseren. Ekskluderte e-postadresser er uthevet.',

	'IP_BAN'					=> 'Steng ute én eller flere IP-er',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Aktiver dette for å ekskludere angitte IP fra alle gjeldende utestengelser.',
	'IP_BAN_EXPLAIN'			=> 'Hvis du vil angi flere ulike IP-er eller vertsnavn, skriver du inn én på hver sin linje. Hvis du vil angi et intervall med IP-adresser, skiller du start og slutt med en bindestrek (-). Som jokertegn bruker du «*».',
	'IP_HOSTNAME'				=> 'IP-adresser eller vertsnavn',
	'IP_NO_BANNED'				=> 'Ingen utestengte IP-adresser',
	'IP_UNBAN'					=> 'Opphev utestengelse eller av-ekskluder IP-er',
	'IP_UNBAN_EXPLAIN'			=> 'Du kan oppheve utestengelse av (eller av-ekskludere) flere IP-adresser på én gang ved å bruke en relevant kombinasjon av mus og tastatur på datamaskinen og i nettleseren. Ekskluderte IP-er er uthevet.',

	'LENGTH_BAN_INVALID'		=> 'Datoen må være på formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Utestengt',
	'OPTIONS_EXCLUDED'			=> 'Ekskludert',

	'PERMANENT'		=> 'Permanent',

	'UNTIL'						=> 'Til',
	'USER_BAN'					=> 'Steng ute én eller flere brukere etter brukernavn',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Aktiver dette for å ekskludere de angitte brukerne fra alle gjeldende utestengelser.',
	'USER_BAN_EXPLAIN'			=> 'Du kan stenge ute flere brukere på én gang ved å skrive inn hvert navn på sin egen linje. Bruk funksjonen <span style="text-decoration: underline;">Søk etter medlem</span> for å slå opp og legge til én eller flere brukere automatisk.',
	'USER_NO_BANNED'			=> 'Ingen utestengte brukernavn',
	'USER_UNBAN'				=> 'Opphev utestengelse eller av-ekskluder brukere etter brukernavn',
	'USER_UNBAN_EXPLAIN'		=> 'Du kan oppheve utestengelser av (eller av-ekskludere) flere brukere på én gang ved å bruke en relevant kombinasjon av mus og tastatur på datamaskinen og i nettleseren. Ekskluderte brukere er uthevet.',
));
