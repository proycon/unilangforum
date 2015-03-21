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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'إدارة bots',
	'BOTS_EXPLAIN'		=> 'الـ “Bots”، “spiders” أو “العناكب” هم وكلاء يستخدمون غالباً من قبل محركات البحث لتحديث قواعد بياناتهم. وهذه الـ bots غالباً ما تفشل في التعامل مع نظام الجلسات عند دخولها للمنتدى وهذا يخل بعمل عداد الزوار ويزيد من الحمل وأحياناً لا تنجح بأرشفة المنتدى بالصورة المطلوبة، هنا يمكنك ضبط نوع معين من الأعضاء للتغلب على هذه المشاكل',
	'BOT_ACTIVATE'		=> 'تفعيل',
	'BOT_ACTIVE'		=> 'مفعل',
	'BOT_ADD'			=> 'إضافة bot',
	'BOT_ADDED'			=> 'أضيف bot جديد بنجاح',
	'BOT_AGENT'			=> 'Agent مطابق',
	'BOT_AGENT_EXPLAIN'	=> 'متغير يطابق عميل مستعرض العناكب، التطابقات الجزئية مسموح بها',
	'BOT_DEACTIVATE'	=> 'تعطيل',
	'BOT_DELETED'		=> 'حُذِف bot بنجاح',
	'BOT_EDIT'			=> 'تعديل bot',
	'BOT_EDIT_EXPLAIN'	=> 'هنا يمكنك إضافة أو تعديل Bot معين. يمكنك تعريف Bot بواسطة agent أو رقم IP (أو سلسلة من أرقام IP). كن حذراً عند تعريف هذه البيانات، يمكنك أيضاً اختيار اللغة والستايل الذي سيستعملهما Bot عن زيارة المنتدى. قد يساعدك هذا الخيار في تقليل الباندوث بتخصيص ستايل خفيف Bot. لا تنس أن تقوم بضبط الصلاحيات لمجموعة محركات البحث',
	'BOT_LANG'			=> 'اللغة',
	'BOT_LANG_EXPLAIN'	=> 'اللغة المستخدمة للـ bot كما هي في المتصفح',
	'BOT_LAST_VISIT'	=> 'آخر زيارة',
	'BOT_IP'			=> 'رقم IP الخاص بـ bot',
	'BOT_IP_EXPLAIN'	=> 'المطابقة الجزئية مسموح بها، ضع فواصل بين العنوانين',
	'BOT_NAME'			=> 'الاسم',
	'BOT_NAME_EXPLAIN'	=> 'يستخدم فقط لمعلوماتك الخاصة',
	'BOT_NAME_TAKEN'	=> 'الاسم تم استعاله من قبل في منتداك ولا تستطيع استعماله لهذا Bot',
	'BOT_NEVER'			=> 'أبداً',
	'BOT_STYLE'			=> 'الاستايل',
	'BOT_STYLE_EXPLAIN'	=> 'استايل المنتدى المستخدم بواسطة bot',
	'BOT_UPDATED'		=> 'تعدّل bot بنجاح',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'agent الذي أدخلته هو نفسه المستخدم بواسطتك حالياً، الرجاء إضافة agent خاص بالـ bot',
	'ERR_BOT_NO_IP'				=> 'الـ IP الذي أدخلته غير صالح أو الملقم لديه مشكلة',
	'ERR_BOT_NO_MATCHES'		=> 'لابد أن تدخل رقم IP أو agent لهذا الـ bot',

	'NO_BOT'		=> 'لا يوجد bot بهذا الرقم',
	'NO_BOT_GROUP'	=> 'غير قادر على تحديد مجموعة محركات البحث',
));
