<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'CAPTCHA_QA'            => 'S&amp;C',
	'CONFIRM_QUESTION_EXPLAIN'   => 'Bu soru spambotlar tarafından otomatik form gönderimlerini önlemek için sunulur.',
	'CONFIRM_QUESTION_WRONG'   => 'Soruya geçersiz bir cevap belirttiniz.',

	'QUESTION_ANSWERS'			=> 'Cevaplar',
	'ANSWERS_EXPLAIN'			=> 'Lütfen soru için her bir satıra geçerli cevaplar girin.',
	'CONFIRM_QUESTION'			=> 'Soru',

	'ANSWER'					=> 'Cevap',
	'EDIT_QUESTION'				=> 'Soruyu Düzenle',
	'QUESTIONS'					=> 'Sorular',
	'QUESTIONS_EXPLAIN'         => 'S&amp;C eklentisini açtığınız zaman her form gönderimi için, kullanıcılara burada belirlenen sorulardan birisi sorulacaktır. Bu eklentiyi kullanmak için varsayılan dilde en az bir soru ayarlanmalıdır. Bu sorular hedef kitlenizin cevaplayabilmesi için kolay olmalıdır, fakat bir Google™ aramasında bulunamayacak şekilde olmalıdır. Geniş ve düzenli değişiklik kullanarak en iyi sonuçları veren soruları ayarlayın. Eğer sorunuz karışık durum, noktalama işareti ya da boşluğa duyarlı ise sıkı ayarı açın.',
	'QUESTION_DELETED'         => 'Soru silindi',
	'QUESTION_LANG'            => 'Dil',
	'QUESTION_LANG_EXPLAIN'      => 'Bu soru ve cevabın yazılacağı dil.',
	'QUESTION_STRICT'         => 'Sıkı kontrol',
	'QUESTION_STRICT_EXPLAIN'   => 'Karışık durum, noktalama işareti ve boşluk uygulamak için açın.',

	'QUESTION_TEXT'            => 'Soru',
	'QUESTION_TEXT_EXPLAIN'      => 'Kullanıcıya sunulan soru.',

	'QA_ERROR_MSG'				=> 'Lütfen tüm boşlukları doldurun ve en az bir cevap girin.',
	'QA_LAST_QUESTION'			=> 'Eklenti aktifken tüm soruları silemezsiniz.',
));
