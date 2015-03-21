<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @translated 2014 phpBBArabia.com
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
	'CAPTCHA_QA'				=> 'سؤال وجواب',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'هذا السؤال هو طريقة لمنع إرسال المعلومات آليا وللتأكد من أنك إنسان.',
	'CONFIRM_QUESTION_WRONG'	=> 'لقد أدخلت جوابا خاطئا عن السؤال المطروح.',

	'QUESTION_ANSWERS'			=> 'الأجوبة',
	'ANSWERS_EXPLAIN'			=> 'الرجاء الإجابة على الأسئلة التالية، ضع كل جواب في سطر مستقل.',
	'CONFIRM_QUESTION'			=> 'السؤال',

	'ANSWER'					=> 'الجواب',
	'EDIT_QUESTION'				=> 'تعديل السؤال',
	'QUESTIONS'					=> 'الأسئلة',
	'QUESTIONS_EXPLAIN'			=> 'سوف يتم عرض الأسئلة الأمنية المُحددة هنا في جميع الأماكن المُفعّلة فيها خاصية الكابتشا Q&amp;A. لاستعمال هذه الخاصية يجب على الأقل تحديد سؤال في اللغة الافتراضية. ينبغي أن تكون لهذه الأسئلة إجابات سهلة للقارئ، لكن غير قابلة للإجابة من قبل البرمجيات التي تقوم بالبحث عن المنتديات بواسطة Google™ للتسجيل فيها آليا. استخدام أكبر عدد من الاحتمالات والخيارات، سيعطي نتائج أفضل طبعا. فعّل خيار الدقة في حال كانت الإجابات تعتمد على التهجئة والإملاء.',
	'QUESTION_DELETED'			=> 'تم حذف السؤال',
	'QUESTION_LANG'				=> 'اللغة',
	'QUESTION_LANG_EXPLAIN'		=> 'اللغة التي كتب فيها السؤال وإجابته.',
	'QUESTION_STRICT'			=> 'خيار الدقة',
	'QUESTION_STRICT_EXPLAIN'	=> 'إذا فُعِّل فإن المسافات والأحرف الكبيرة والصغيرة ستُدَقّق أيضاً.',

	'QUESTION_TEXT'				=> 'السؤال',
	'QUESTION_TEXT_EXPLAIN'		=> 'السؤال الذي سيطرح عند التسجيل.',

	'QA_ERROR_MSG'				=> 'الرجاء ملء الحقول كلها وتقديم إجابة واحدة على الأقل.',
	'QA_LAST_QUESTION'			=> 'لا يمكن حذف جميع الاسئلة اذا ما كانت الاضافة مفعله',

));
