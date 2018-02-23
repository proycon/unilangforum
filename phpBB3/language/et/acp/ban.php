<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
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

// Banning => Keelustamine
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 tund',
	'30_MINS'		=> '30 minutit',
	'6_HOURS'		=> '6 tundi',

	'ACP_BAN_EXPLAIN'	=> 'Siin sa saad hallata kasutaja keelamist kasutades: nime, IP-aadresse või e-posti aadresse. Need meetodid hoiavad ära kasutajate ligipääsu ükskõik millisele foorumi osale. Sa saad panna lühikese (maksimum 3000 tähtmärki) keelu põhjuse kui sa tahad. Seda näidatakse administraatori logis. Sa saad ka märgistada keelu kestvuse. Kui sa tahad, et keeld lõpeks mingil kindlal kuupäeval, siis vali <span style="text-decoration: underline;">Kuni -&gt;</span> keelu pikkuseks ja sisesta kuupäev formaadis <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Välistada keelust',
	'BAN_LENGTH'			=> 'Keelu pikkus',
	'BAN_REASON'			=> 'Keelu põhjus',
	'BAN_GIVE_REASON'		=> 'Põhjus, mida näidatakse keelu saanud kasutajale',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Keeldude nimekiri on edukalt uuendatud.',
	'BANNED_UNTIL_DATE'		=> 'kuni %s', // Näiteks: "kuni E 13 Jul 2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (kuni %2$s)', // Näiteks: "7 päeva (kuni T 14 Juul 2009, 14:44)"

	'EMAIL_BAN'					=> 'Keela üks või mitu e-posti aadressi korraga',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Luba see, et välistaks kõik sisestatud e-posti aadressid kõikidest keeldudest.',
	'EMAIL_BAN_EXPLAIN'			=> 'Et täpsustada mitut erinevat e-posti aadressi, sisesta igaüks uuele reale. Et sisestada osalisi aadresse kasuta * sümbolit, nt. <samp>*@hotmail.com</samp>, <samp>*@*.domeenb.tld</samp>, jne.',
	'EMAIL_NO_BANNED'			=> 'Pole e-posti aadresse, millele oleks lisatud keeld',
	'EMAIL_UNBAN'				=> 'Võta keeld või välistus maha e-postiaadressidelt',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Sa saad keelu maha võtta (või välistamist maha võtta) mitmelt e-posti aadressilt korraga, valides sobiva kombinatsiooni hiire ja klaviatuuriga sinu arvuti või veebilehitseja jaoks. Välistatud e-posti aadressid on kirjas paksult.',

	'IP_BAN'					=> 'Keela üks või mitu IP-aadressi',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Luba see, et välistaks kõik sisestatud IP-aadressid kõikidest keeldudest.',
	'IP_BAN_EXPLAIN'			=> 'Et näidata erinevaid IP aadresse või serverinimesid, sisesta igaüks uuele reale. Et täpsustada IP-aadresside vahemikku eralda algus ja lõpp sidekriipsuga (-), et täpsustada kasuta “*” märki.',
	'IP_HOSTNAME'				=> 'IP-aadressid või serverinimed',
	'IP_NO_BANNED'				=> 'Pole IP-aadresse, millele oleks lisatud keeld',
	'IP_UNBAN'					=> 'Võta keeld või välistamine maha IP-aadressidelt',
	'IP_UNBAN_EXPLAIN'			=> 'Sa saad keelu maha võtta (või välistamist maha võtta) mitmelt IP-aadressilt korraga, valides sobiva kombinatsiooni hiire ja klaviatuuriga sinu arvuti või veebilehitseja jaoks. Välistatud IP-aadressid on paksult.',

	'LENGTH_BAN_INVALID'		=> 'Kuupäev peab olema <kbd>YYYY-MM-DD</kbd>formaadis.',

	'OPTIONS_BANNED'			=> 'Keelatud',
	'OPTIONS_EXCLUDED'			=> 'Välja arvatud',

	'PERMANENT'		=> 'JÄÄV',

	'UNTIL'						=> 'KUNI',
	'USER_BAN'					=> 'Keela üks või mitu kasutajanime korraga',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Luba see, et välistada sisestatud kasutajanimed kõikidest keeldudest.',
	'USER_BAN_EXPLAIN'			=> 'Sa saad keelata mitut kasutajat korraga, sisestades iga kasutajanime uuele reale. Kasuta <span style="text-decoration: underline;">Otsi kasutajat</span> võimalust, et üles leida ja lisada mitut kasutajat korraga automaatselt.',
	'USER_NO_BANNED'			=> 'Pole kasutajanimesi, kellele oleks lisatud keeld',
	'USER_UNBAN'				=> 'Võta keeld või välistamine maha kasutajanimedelt',
	'USER_UNBAN_EXPLAIN'		=> 'Sa saad keelu (või välistuse) maha võtta mitmelt kasutajanimelt korraga, valides sobiva kombinatsiooni hiire ja klaviatuuriga sinu arvuti või veebilehitseja jaoks. Välistatud kasutajanimed on paksult.',
));
