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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 uur',
	'30_MINS'		=> '30 minuten',
	'6_HOURS'		=> '6 uur',

	'ACP_BAN_EXPLAIN'	=> 'Hier kan je het verbannen van gebruikers via naam, IP of e-mailadres beheren. Deze methodes voorkomen dat een gebruiker geen enkel deel van het forum meer kan bereiken. Je kan een korte (maximum 3000 karakters) reden geven voor de verbanning als je wilt. Dit zal weergegeven worden in de admin log. De duur van een verbanning kan ook gespecificeerd worden. Als je een verbanning wilt laten eindigen op een specifieke datum in plaats van na een bepaalde tijdsperiode selecteer <span style="text-decoration: underline;">Tot -&gt;</span> voor de verbanningsduur en voer een datum in in het formaat <kbd>JJJJ-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Uitsluiten van verbannen',
	'BAN_LENGTH'			=> 'Lengte van verbanning',
	'BAN_REASON'			=> 'Reden voor verbanning',
	'BAN_GIVE_REASON'		=> 'Reden weergegeven aan de verbande',
	'BAN_UPDATE_SUCCESSFUL'	=> 'De verbanningslijst is succesvol bijgewerkt.',
	'BANNED_UNTIL_DATE'		=> 'tot %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (tot %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Verban één of meerdere e-mailadressen',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om de ingevoerde e-mailadres uit te sluiten van alle bestaande verbanningen.',
	'EMAIL_BAN_EXPLAIN'			=> 'Om meer dan één e-mailadres te specificeren, voer ieder e-mailadres in op een aparte regel. Om gedeeltelijke e-mailadressen overeen te laten komen, gebruik dan * als de joker, bijv. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Geen verbannen e-mailadressen',
	'EMAIL_UNBAN'				=> 'Opheffen verbanning of insluiten e-mails',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Je kan van meerdere e-mailadressen de verbanning in één keer opheffen (of insluiten) door gebruik te maken van de juiste combinatie van muis en toetsenbord van je computer en browser. Uitgesloten e-mailadressen zijn benadrukt.',

	'IP_BAN'					=> 'Verban één of meerdere IPs',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om de ingevoerde IP uit te sluiten van alle bestaande verbanningen.',
	'IP_BAN_EXPLAIN'			=> 'Om meer dan één IP-adres of hostnaam in te geven, voer je ieder IP-adres in op een aparte regel. Om een bereik van IP-adressen te maken, scheid je de start en het einde met een streepje (-), om een joker in te geven gebruik je “*”.',
	'IP_HOSTNAME'				=> 'IP-adres of hostnamen',
	'IP_NO_BANNED'				=> 'Geen verbannen IP-adressen',
	'IP_UNBAN'					=> 'Opheffen verbanning of insluiten IPs',
	'IP_UNBAN_EXPLAIN'			=> 'Je kan van meerdere IP-adressen de verbanning in één keer opheffen (of insluiten) door gebruik te maken van de juiste combinatie van muis en toetsenbord van je computer en browser. Uitgesloten IPs zijn benadrukt.',

	'LENGTH_BAN_INVALID'		=> 'De datum moet ingevoerd worden als <kbd>JJJJ-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Verbannen',
	'OPTIONS_EXCLUDED'			=> 'Uitgesloten',

	'PERMANENT'		=> 'Permanent',

	'UNTIL'						=> 'Tot',
	'USER_BAN'					=> 'Verban één of meerdere gebruikers door middel van de gebruikersnaam',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Schakel dit in om de ingevoerde gebruikersnamen uit te sluiten van alle bestaande verbanningen.',
	'USER_BAN_EXPLAIN'			=> 'Je kan meerdere gebruikers in één keer verbannen door iedere naam op een aparte regel te zetten. Gebruik de <span style="text-decoration: underline;">Zoek een gebruiker</span> optie om gebruikers te zoeken en één of meerdere automatisch toe te voegen.',
	'USER_NO_BANNED'			=> 'Geen verbannen gebruikersnamen',
	'USER_UNBAN'				=> 'Opheffen verbanning of insluiten gebruikersnamen',
	'USER_UNBAN_EXPLAIN'		=> 'Je kan van meerdere gebruikers de verbanning in één keer opheffen (of insluiten) door gebruik te maken van de juiste combinatie van muis en toetsenbord van je computer en browser. Uitgesloten gebruikers zijn benadrukt.',
));
