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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'يمكنك من هنا إرسال رسالة بريدية إلى الأعضاء جميعهم أو إلى أعضاء مجموعة محددة <strong>ممن فعلوا خيار استقبال الرسائل من الإدارة</strong>. لتنفيذ ذلك سترسَل الرسالة إلى البريد الإلكتروني الإداري مع نسخة كربونية صماء إلى المستلمين كلهم. بصورة افتراضية سيتم إضافة 20 مستلم في كل دفعة، إذا كنت تقوم بإرسال الرسالة إلى مجموعة كبيرة من المستخدمين، الرجاء كن صبوراً ولا توقف تحميل الصفحة في منتصف العملية، من الطبيعي أن يستغرق الإرسال بالجملة وقتاً طويلاً، وسيتم تنبيهك عند الانتهاء من العملية.',
	'ALL_USERS'						=> 'جميع الأعضاء',

	'COMPOSE'				=> 'رسالة',

	'EMAIL_SEND_ERROR'		=> 'هناك خطأ أو أكثر عند عملية الإرسال. يرجى منك مراجعة %sسجلات الأخطاء%s لمعرفة سبب الخطأ',
	'EMAIL_SENT'			=> 'أرسِلَت الرسالة.',
	'EMAIL_SENT_QUEUE'		=> 'تخزنت الرسالة لإرسالها لاحقاً.',

	'LOG_SESSION'			=> 'وضع سجلات البريد ضمن السجلات الحرجة.',

	'SEND_IMMEDIATELY'		=> 'الإرسال فورياً',
	'SEND_TO_GROUP'			=> 'إرسال إلى مجموعة',
	'SEND_TO_USERS'			=> 'إرسال إلى أعضاء',
	'SEND_TO_USERS_EXPLAIN'	=> 'إدخال أي اسم هنا سوف يلغي أي مجموعة محددة أعلاه. أدخل كل اسم في سطر جديد.',

	'MAIL_BANNED'			=> 'الأعضاء المحظورون',
	'MAIL_BANNED_EXPLAIN'	=> 'عند إرسالك لرسالة جماعية يمكنك اختيار هل يستقبل الأعضاء المحظورون هذه الرسالة أم لا.',
	'MAIL_HIGH_PRIORITY'	=> 'عالي',
	'MAIL_LOW_PRIORITY'		=> 'منخفض',
	'MAIL_NORMAL_PRIORITY'	=> 'عادي',
	'MAIL_PRIORITY'			=> 'أهمية الرسالة',
	'MASS_MESSAGE'			=> 'رسالتك',
	'MASS_MESSAGE_EXPLAIN'	=> 'يرجى العلم بأنه يمكنك إرسال نص فقط. كل العلامات أخرى ستحذَف قبل الإرسال.',

	'NO_EMAIL_MESSAGE'		=> 'ينبغي عليك إدخال رسالة.',
	'NO_EMAIL_SUBJECT'		=> 'ينبغي عليك إدخال عنوان للرسالة.',
));
