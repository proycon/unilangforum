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
	'ABOUT_USER'			=> 'الملف الشخصي',
	'ACTIVE_IN_FORUM'		=> 'أكثر نشاطاً في منتدى',
	'ACTIVE_IN_TOPIC'		=> 'أكثر نشاطاً في موضوع',
	'ADD_FOE'				=> 'أضف لقائمة التجاهل',
	'ADD_FRIEND'			=> 'أضف لقائمة الأصدقاء',
	'AFTER'					=> 'بعد',

	'ALL'					=> 'الكل',

	'BEFORE'				=> 'قبل',

	'CC_SENDER'				=> 'إرسال نسخة من الرسالة إلى بريدك',
	'CONTACT_ADMIN'			=> 'اتصل بمدير المنتدى',

	'DEST_LANG'				=> 'اللغة',
	'DEST_LANG_EXPLAIN'		=> 'اختر اللغة المناسبة (إذا كانت متاحة) لمستلم هذه الرسالة',
	
	'EDIT_PROFILE'			=> 'تعديل الملف الشخصي',

	'EMAIL_BODY_EXPLAIN'	=> 'هذه الرسالة سترسل نصا فقط، لا تكتب أية أكواد HTML أو BBCode. سيكون بريدك هو المستقبل في حالة الرد على الرسالة',
	'EMAIL_DISABLED'		=> 'نأسف لكن كل خصائص إرسال البريد معطلة',
	'EMAIL_SENT'			=> 'تم إرسال البريد',
	'EMAIL_TOPIC_EXPLAIN'	=> 'هذه الرسالة سترسل نصا فقط، لا تكتب أية أكواد HTML أو BBCode. رجاءً اكتب معلومات الموضوع في رسالتك، سيكون بريدك هو المستقبل في حالة الرد على الرسالة',
	'EMPTY_ADDRESS_EMAIL'	=> 'ينبغي وضع عنوان بريد صحيح للمستقبل',
	'EMPTY_MESSAGE_EMAIL'	=> 'ينبغي عليك إدخال رسالة ليتم الإرسال',
	'EMPTY_MESSAGE_IM'		=> 'يتوجب عليك كتابة نص لإرساله',
	'EMPTY_NAME_EMAIL'		=> 'ينبغي عليك إدخال اسم المستقبل',
	'EMPTY_SENDER_EMAIL'	=> 'يجب عليك أن توفر بريد الكتروني صحيح.',
	'EMPTY_SENDER_NAME'		=> 'يجب عليك كتابة اسم.',
	'EMPTY_SUBJECT_EMAIL'	=> 'ينبغي عليك تحديد عنوان للبريد',
	'EQUAL_TO'				=> 'يساوي',

	'FIND_USERNAME_EXPLAIN'	=> 'استعمل هذا النموذج للبحث عن الأعضاء. ليس عليك أن تملأ الحقول كلها، لمطابقة بيانات جزئية استعمل النجمة (*) كعلامة شاملة عند إدخال التواريخ استعمل الهيئة الآتية <kbd>YYYY-MM-DD</kbd>, على سبيل المثال <samp>2004-02-29</samp>. استعمل مربعات التحديد لاختيار عضو أو أكثر (اختيار أكثر من عضو يعتمد على النموذج نفسه) ومن ثم اضغط على زر اختر المحدد للعودة إلى النموذج السابق',
	'FLOOD_EMAIL_LIMIT'		=> 'لا تستطيع إرسال بريد آخر في هذا الوقت. رجاءً حاول مرة أخرى لاحقاً',

	'GROUP_LEADER'			=> 'رئيس مجموعة',

	'HIDE_MEMBER_SEARCH'	=> 'إخفاء بحث الأعضاء',

	'IM_ADD_CONTACT'		=> 'أضف جهة اتصال',
	'IM_DOWNLOAD_APP'		=> 'تحميل البرنامج',
	'IM_JABBER'				=> 'قد يكون العضو اختار أنه لا يريد رسائل فورية',
	'IM_JABBER_SUBJECT'		=> 'هذه رسالة تلقائية الرجاء عدم الرد عليها!، هذه الرسالة من العضو %1$s في %2$s',
	'IM_MESSAGE'			=> 'رسالتك',
	'IM_NAME'				=> 'اسمك',
	'IM_NO_DATA'			=> 'لا توجد أية معلومات حول كيفية الاتصال بهذا العضو',
	'IM_NO_JABBER'			=> 'نأسف لكن لا تستطيع استخدام هذه الخاصية للمحادثة على الخادم وتحتاج لتنصيبها',
	'IM_RECIPIENT'			=> 'المستقبل',
	'IM_SEND'				=> 'أرسل رسالة',
	'IM_SEND_MESSAGE'		=> 'أرسِل رسالة',
	'IM_SENT_JABBER'		=> 'أرسِلَت رسالتك إلى %1$s بنجاح',
	'IM_USER'				=> 'إرسال رسالة فورية',

	'LAST_ACTIVE'				=> 'آخر نشاط',
	'LESS_THAN'					=> 'أقل من',
	'LIST_USERS'				=> array(
		1	=> 'مستخدم واحد',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'مستخدمان',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> '%d مستخدمين',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> '%d مستخدماً',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> '%d مستخدم',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'يجب أن تكون عضواً مشتركاً ومسجلاً دخولك لرؤية فريق الموقع.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'ينبغي أن تكون عضواً مسجلاً لتتمكن من مشاهدة قائمة الأعضاء',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'ينبغي أن تكون عضواً مسجلاً لتتمكن من البحث عن الأعضاء',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'ينبغي أن تكون عضواً مسجلاً لتتمكن من مشاهدة الملفات الشخصية للأعضاء',

	'MORE_THAN'				=> 'أكثر من',

	'NO_CONTACT_FORM'		=> 'تم تعطيل نموذج مراسلة مدير المنتدى.',
	'NO_CONTACT_PAGE'		=> 'تم تعطيل صفحة مراسلة مدير المنتدى.',
	'NO_EMAIL'				=> 'غير مسموح لك بالإرسال لهذا العضو',
	'NO_VIEW_USERS'			=> 'لا تملك الصلاحية لمشاهدة الملفات الشخصية للأعضاء',

	'ORDER'					=> 'طلب',
	'OTHER'					=> 'أخرى',

	'POST_IP'				=> 'إرسال من نطاق أو IP',

	'REAL_NAME'				=> 'اسم المستقبل',
	'RECIPIENT'				=> 'المستقبل',
	'REMOVE_FOE'			=> 'حذف من قائمة التجاهل',
	'REMOVE_FRIEND'			=> 'حذف من قائمة الأصدقاء',

	'SELECT_MARKED'			=> 'اختيار المحدد',
	'SELECT_SORT_METHOD'	=> 'اختر طريقة الفرز',
	'SENDER_EMAIL_ADDRESS'	=> 'بريدك الاكتروني',
	'SENDER_NAME'			=> 'اسمك',
	'SEND_ICQ_MESSAGE'		=> 'إرسال رسالة ICQ',
	'SEND_IM'				=> 'رسالة فورية',
	'SEND_JABBER_MESSAGE'	=> 'إرسال رسالة Jabber',
	'SEND_MESSAGE'			=> 'الرسالة',
	'SEND_YIM_MESSAGE'		=> 'إرسال رسالة YIM',
	'SORT_EMAIL'			=> 'البريد الإلكتروني',
	'SORT_LAST_ACTIVE'		=> 'آخر نشاط',
	'SORT_POST_COUNT'		=> 'عدد المشاركات',

	'USERNAME_BEGINS_WITH'	=> 'الاسم يبدأ بـ',
	'USER_ADMIN'			=> 'إدارة العضو',
	'USER_BAN'				=> 'الحظر',
	'USER_FORUM'			=> 'إحصائيات العضو',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'لا توجد تذكيرات مرسلة في الوقت الحالي',
		1		=> 'تذكير واحد مرسل<br />» %2$s',		// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2		=> 'تذكيران مرسلان<br />» %2$s',			// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3		=> '%1$d تذكيرات مرسلة<br />» %2$s',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4		=> '%1$d تذكيراً مرسلاً<br />» %2$s',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5		=> '%1$d تذكير مرسل<br />» %2$s',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'USER_ONLINE'			=> 'متصل',
	'USER_PRESENCE'			=> 'معلومات رئيسية',
	'USERS_PER_PAGE'		=> 'مستخدمين في الصفحة',

	'VIEWING_PROFILE'		=> 'عرض الملف %s الشخصي',
	'VIEW_FACEBOOK_PROFILE'	=> 'عرض ملف Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'عرض ملف Skype',
	'VIEW_TWITTER_PROFILE'	=> 'عرض ملف Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'عرض قناة YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'عرض ملف Google+',
));
