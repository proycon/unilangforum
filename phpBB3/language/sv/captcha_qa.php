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
	'CAPTCHA_QA'			=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Den här frågan är till för att förebygga automatiska registreringar.',
	'CONFIRM_QUESTION_WRONG'	=> 'Du har tillhandahållit ett felaktigt svar på frågan.',

	'QUESTION_ANSWERS'		=> 'Svar',
	'ANSWERS_EXPLAIN'		=> 'Var god och ange korrekta svar på frågan',
	'CONFIRM_QUESTION'		=> 'Fråga',

	'ANSWER'			=> 'Svar',
	'EDIT_QUESTION'			=> 'Redigera fråga',
	'QUESTIONS'			=> 'Frågor',
	'QUESTIONS_EXPLAIN'		=> 'För varje fält där Q&amp;A tillägget är aktiverat, kommer en utav de frågor ställas till användaren här. För att använda detta tillägg, måste åtminstone en fråga vara tillgänglig på forumets standardspråk. Dessa frågor bör vara enkla för din målgrupp att besvara, men omöjliga att besvara genom en automatisk robotsökning med Google™. Det bästa resultatet uppnår du genom att använda ett stort urval frågor, som regelbundet bytes ut. Aktivera strikt kontroll, om din fråga baserar sig på skrivning med stor begynnelsebokstav, kommatering eller blanktecken.',
	'QUESTION_DELETED'		=> 'Frågan togs bort',
	'QUESTION_LANG'		=> 'Språk',
	'QUESTION_LANG_EXPLAIN'		=> 'Språket, som den här frågan, med tillhörnade svar är skrivet på.',
	'QUESTION_STRICT'	=> 'Strikt kontroll',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktivera för att påtvinga blandning av versaler och gemener, samt skilje och interpunktionstecken.',

	'QUESTION_TEXT'		=> 'Fråga',
	'QUESTION_TEXT_EXPLAIN'		=> 'Frågan som ställs till användaren.',

	'QA_ERROR_MSG'				=> 'Var god fyll i alla fält och ange minst ett svar.',
	'QA_LAST_QUESTION'			=> 'Du kan inte ta bort alla frågor medan tillägget är aktivt.',
));
