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
	'RECAPTCHA_LANG'				=> 'ar',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'إذا كنت تريد استخدام reCaptcha, ينبغي عليك تسجيل حساب في <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'الكود المئي الذي قُدِّم غير صحيح',

	'RECAPTCHA_PUBLIC'				=> 'العام reCaptcha مفتاح',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> ' مفتاح reCaptcha العام لديك. يمكنك الحصول على المفاتيح من <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'مفتاح reCaptcha الخاص',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'مفتاح reCaptcha الخاص لديك . يمكنك الحصول على مفاتيح من <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'سعياً لمنع التسجيل بطرق آلية, نرجو منك كتابة كل ٍمن الكلمات المعروضة في المكان المخصص لذلك.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'هناك مشكلة في الاتصال بخدمة RECAPTCHA: لم يتم فتح منفذ. يرجى المحاولة لاحقاً.',
));
