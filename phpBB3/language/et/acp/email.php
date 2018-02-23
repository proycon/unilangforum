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

// Email settings => E-kirja seaded
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Sellel leheküljel saad saata e-kirja kõigile liikmetele või valitud grupile, <strong>millel on valikus lubatud mass e-kiri vastu võtta</strong>. Pimekoopia saadetakse ka administraatori e-posti aadressile. Kui üritad saata kirja väga paljudele liikmetele, siis ära lahku enne lehelt, kui skript on lõpetanud saatmise, sest saatmisega lähebki kaua aega.',
	'ALL_USERS'						=> 'Kõik liikmed',

	'COMPOSE'				=> 'Kirjuta uus kiri',

	'EMAIL_SEND_ERROR'		=> 'E-kirja saatmisel tekkis üks või mitu viga. Palun kontrolli %sVeateadete logi%s täpsema vea kirjelduse saamiseks.',
	'EMAIL_SENT' 			=> 'Kiri on saadetud.',
	'EMAIL_SENT_QUEUE' 		=> 'Kiri on järjekorras.',

	'LOG_SESSION' 			=> 'Logi kirja sessioon kriitikalisse logisse',

	'SEND_IMMEDIATELY' 		=> 'Saada koheselt',
	'SEND_TO_GROUP' 		=> 'Saada grupile',
	'SEND_TO_USERS' 		=> 'Saada kasutajatele',
	'SEND_TO_USERS_EXPLAIN' => 'Siia nimesid kirjutades võid üle kirjutada eelnevalt valituid gruppe.',

	'MAIL_BANNED'         	=> 'E-kiri foorumilt keelatud liikmetele',
	'MAIL_BANNED_EXPLAIN'   => 'Saad määrata, kas foorumilt keelatud liikmetele saadetakse samuti antud masskiri.',
	'MAIL_HIGH_PRIORITY' 	=> 'Kõrge',
	'MAIL_LOW_PRIORITY' 	=> 'Madal',
	'MAIL_NORMAL_PRIORITY' 	=> 'Tavaline',
	'MAIL_PRIORITY' 		=> 'Kirja tähtsus',
	'MASS_MESSAGE' 			=> 'Sinu sõnum',
	'MASS_MESSAGE_EXPLAIN' 	=> 'Sa võid sisestada ainult puhast teksti, kõik koodi märgistused eemaldatakse enne saatmist.',

	'NO_EMAIL_MESSAGE' 		=> 'Sa pead sisestama ka sõnumi.',
	'NO_EMAIL_SUBJECT' 		=> 'Sa pead sisestama ka pealkirja.',
));
