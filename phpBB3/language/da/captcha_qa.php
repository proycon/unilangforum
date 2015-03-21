<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: captcha_qa.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'For at hindre automatiserede tilmeldinger og indlæg, bedes du besvare spørgsmålet.',
	'CONFIRM_QUESTION_WRONG'	=> 'Din besvarelse er ikke korrekt.',

	'QUESTION_ANSWERS'			=> 'Svar',
	'ANSWERS_EXPLAIN'			=> 'Den eller de korrekte besvarelser. Skriv et svar pr. linie.',
	'CONFIRM_QUESTION'			=> 'Spørgsmål',

	'ANSWER'					=> 'Svar',
	'EDIT_QUESTION'				=> 'Rediger spørgsmål',
	'QUESTIONS'					=> 'Spørgsmål',
	'QUESTIONS_EXPLAIN'			=> 'I alle de tilfælde hvor Q&amp;A benyttes, stilles brugere et af nedennævnte spørgsmål. For at kunne anvende modulet skal mindst et spørgsmål formuleres på boardets standardsprog. Spørgsmål bør målrettes boardets besøgende, og svar ikke umiddelbart kunne findes med en søgning på Google™. Regelmæssig ændring af spørgsmål vil effektivisere bekæmpelsen af spamtilmeldinger. Forudsætter det rette svar korrekt tegnsætning, stavemåde eller brug af store og små bogstaver, bør absolut kontrol anvendes.',
	'QUESTION_DELETED'			=> 'Spørgsmål slettes',
	'QUESTION_LANG'			=> 'Sprog',
	'QUESTION_LANG_EXPLAIN'		=> 'Det sprog spørgsmål og svar formuleres på.',
	'QUESTION_STRICT'			=> 'Absolut kontrol',
	'QUESTION_STRICT_EXPLAIN'	=> 'Kontrol af mellemrum, og korrekt angivelse af store og små bogstaver udføres.',

	'QUESTION_TEXT'				=> 'Spørgsmål',
	'QUESTION_TEXT_EXPLAIN'		=> 'Spørgsmålet der stilles brugere.',

	'QA_ERROR_MSG'				=> 'Udfyld venligst alle felter og besvar mindst et af spørgsmålene.',
	'QA_LAST_QUESTION'			=> 'Du kan ikke slette alle spørgsmål når modulet er aktivt.',

));
