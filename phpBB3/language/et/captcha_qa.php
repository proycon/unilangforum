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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'K&amp;V CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'See küsimus võimaldab ennetada automaatseid sisestusi.',
	'CONFIRM_QUESTION_WRONG'	=> 'Sisestasid ebakorrektse kinnitusküsimuse.',
	'CONFIRM_QUESTION_MISSING'	=> 'Kontrollküsimust CAPTCHA jaoks ei õnnestunud kuvada. Palun võtke ühendust foorumi administraatoriga.',

	'QUESTION_ANSWERS'			=> 'Vastused',
	'ANSWERS_EXPLAIN'			=> 'Palun sisesta lubatavad vastused küsimusele, üks iga rea kohta.',
	'CONFIRM_QUESTION'			=> 'Küsimus',

	'ANSWER'					=> 'Vastus',
	'EDIT_QUESTION'				=> 'Muuda küsimust',
	'QUESTIONS'					=> 'Küsimused',
	'QUESTIONS_EXPLAIN'			=> 'Registreerimise ajal küsitakse kasutajalt ühte neist küsimustest. Et kasutada seda lisa, pead sisestama vähemalt ühe küsimuse vaikimisi keeles. Need küsimused peaksid olema lihtsad inimestele vastamiseks, kuid võimatud robotidel neile veebiotsingute teel vastata. Parima tulemuse toob paljude ja regulaarselt muudetevate küsimuste kasutamine. Luba range seade, kui õige vastus sõltub tõusutundlikkusest ja kirjavahemärkidest.',
	'QUESTION_DELETED'			=> 'Küsimus kustutatud',
	'QUESTION_LANG'				=> 'Keel',
	'QUESTION_LANG_EXPLAIN'		=> 'Keel, milles see küsimused ja tema vastused on kirjutatud.',
	'QUESTION_STRICT'			=> 'Range kontroll',
	'QUESTION_STRICT_EXPLAIN'	=> 'Kui lubatud, eristatakse suurtähti ja tühikuid.',

	'QUESTION_TEXT'				=> 'Küsimus',
	'QUESTION_TEXT_EXPLAIN'		=> 'Küsimus, mis esitatakse registreerumisel.',

	'QA_ERROR_MSG'				=> 'Palun täida kõik väljad ja sisesta vähemalt üks vastus.',
	'QA_LAST_QUESTION'			=> 'Sa ei saa kustutada kõiki küsimus, kuni moodul on aktiivne.',

));
