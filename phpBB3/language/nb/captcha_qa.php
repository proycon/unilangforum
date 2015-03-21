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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Dette spørsmålet har til hensikt å hindre automatisert skjemainnsending fra spammere.',
	'CONFIRM_QUESTION_WRONG'	=> 'Du har svart feil på spørsmålet.',

	'QUESTION_ANSWERS'			=> 'Svar',
	'ANSWERS_EXPLAIN'			=> 'Skriv inn gyldige svar på spørsmålet, ett per linje.',
	'CONFIRM_QUESTION'			=> 'Spørsmål',

	'ANSWER'					=> 'Svar',
	'EDIT_QUESTION'				=> 'Rediger spørsmål',
	'QUESTIONS'					=> 'Spørsmål',
	'QUESTIONS_EXPLAIN'			=> 'For alle skjemainnsendinger du har aktivert Q&amp;A-plugin-modulen for, vil brukere bli stilt ett av spørsmålene som er angitt her. Hvis du vil bruke denne plugin-modulen, må minst ett spørsmål være angitt på standardspråket. Disse spørsmålene skal være enkle for målgruppen din å besvare, men vanskelig for en bot som kan søke på Google™. Det beste resultatet får man ved å bruke store og hyppig utskiftede spørsmålssett. Aktiver den strenge innstillingen hvis spørsmålene krever korrekte store/små bokstaver, tegnsetting og skilletegn.',
	'QUESTION_DELETED'			=> 'Spørsmål slettet',
	'QUESTION_LANG'				=> 'Språk',
	'QUESTION_LANG_EXPLAIN'		=> 'Språket dette spørsmålet og de tilhørende svarene er skrevet på.',
	'QUESTION_STRICT'			=> 'Streng kontroll',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktiver for at store/små bokstaver, tegnsetting og skilletegn skal måtte være korrekt.',

	'QUESTION_TEXT'				=> 'Spørsmål',
	'QUESTION_TEXT_EXPLAIN'		=> 'Spørsmålet som vises for brukeren.',

	'QA_ERROR_MSG'				=> 'Fyll ut alle felt og skriv inn minst ett svar.',
	'QA_LAST_QUESTION'			=> 'Du kan ikke slette alle spørsmål mens plugin-modulen er aktiv.',

));
