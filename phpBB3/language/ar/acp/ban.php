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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> 'ساعة واحدة',
	'30_MINS'		=> 'نصف ساعة',
	'6_HOURS'		=> '6 ساعات',

	'ACP_BAN_EXPLAIN'	=> 'هنا يمكنك التحكم في حظر الأعضاء عن طريق الاسم، IP أو عنوان البريد الإلكتروني. هذه الطرق تمنع العضو من الدخول إلى أي جانب من المنتدى. تستطيع إعطاء سبب المنع (أقصى الحروف المسموح بها 3000 حرف) إن أردت ذلك. سوف يُعرَض هذا النشاط في السجل. تستطيع تحديد مدة الحظر أيضاً. إذا أردت أن يلغى الحظر في تاريخ محدد اختر <span style="text-decoration: underline;">إلى -&gt;</span> وأدخِل تاريخ نهاية الحظر على شكل <kbd>YYYY-MM-DD</kbd>',

	'BAN_EXCLUDE'			=> 'استثناء من الحظر',
	'BAN_LENGTH'			=> 'مدة الحظر',
	'BAN_REASON'			=> 'سبب الحظر',
	'BAN_GIVE_REASON'		=> 'السبب الظاهر للعضو المحظور',
	'BAN_UPDATE_SUCCESSFUL'	=> 'تحدّثت قائمة الحظر بنجاح',
	'BANNED_UNTIL_DATE'		=> 'حتى %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (حتى %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'حظر بريد إلكتروني أو أكثر',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'فعّل هذا الخيار لاستثناء عناوين البريد الإلكتروني المدخلة من جميع قوائم الحظر الحالية',
	'EMAIL_BAN_EXPLAIN'			=> 'لإدخال أكثر من بريد إلكتروني اكتب كل عنوان في سطر جديد. للمطابقة الجزئية استخدم النجمة (*) كعلامة شاملة، على سبيل المثال <samp>*@hotmail.com</samp>، <samp>*@*.domain.tld</samp>',
	'EMAIL_NO_BANNED'			=> 'لا يوجد عناوين بريد إلكتروني محظورة',
	'EMAIL_UNBAN'				=> 'إلغاء حظر أو إلغاء استثناء بريد إلكتروني',
	'EMAIL_UNBAN_EXPLAIN'		=> 'يمكنك إلغاء حظر (أو إلغاء استثناء) أكثر من بريد إلكتروني مرة واحدة باستخدام اختصارات الفأرة ولوحة المفاتيح لمتصفحك، عناوين البريد الإلكتروني المستثناة لديها خلفية محددة',

	'IP_BAN'					=> 'حظر IP واحد أو أكثر',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'فعّل هذا الخيار لاستثناء عناوين IP المدخلة من جميع قوائم الحظر الحالية',
	'IP_BAN_EXPLAIN'			=> 'لإدخال أكثر من عنوان IP اكتب كل عنوان في سطر جديد. لإدخال نطاق من العناوين افصل بين البداية والنهاية بشرطة (-)، استخدم النجمة (*) كعلامة شاملة',
	'IP_HOSTNAME'				=> 'عناوين IP',
	'IP_NO_BANNED'				=> 'لا يوجد عناوين IP محظورة',
	'IP_UNBAN'					=> 'إلغاء حظر أو إلغاء استثناء عنوان IP',
	'IP_UNBAN_EXPLAIN'			=> 'يمكنك إلغاء حظر (أو إلغاء استثناء) أكثر من عنوان IP مرة واحدة باستخدام اختصارات الفأرة ولوحة المفاتيح لمتصفحك، عناوين IP المستثناة لديها خلفية محددة',

	'LENGTH_BAN_INVALID'		=> 'ينبغي أن يكون التاريخ على شكل <kbd>YYYY-MM-DD</kbd>',

	'OPTIONS_BANNED'			=> 'محظور',
	'OPTIONS_EXCLUDED'			=> 'مستثنى من الحظر',

	'PERMANENT'		=> 'دائم',

	'UNTIL'						=> 'لغاية',
	'USER_BAN'					=> 'حظر اسم عضو أو أكثر',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'فعّل هذا الخيار لاستثناء أسماء الأعضاء المدخلة من جميع قوائم الحظر الحالية',
	'USER_BAN_EXPLAIN'			=> 'يمكنك حظر أكثر من عضو مرة واحدة بكتابة كل اسم في سطر جديد. استخدم الخاصية <span style="text-decoration: underline;"> بحث عن عضو</span>للبحث وإضافة اسم أو أكثر تلقائياً',
	'USER_NO_BANNED'			=> 'لا يوجد أسماء أعضاء محظورة',
	'USER_UNBAN'				=> 'إلغاء حظر أو إلغاء استثناء أسماء أعضاء',
	'USER_UNBAN_EXPLAIN'		=> 'يمكنك إلغاء حظر (أو إلغاء استثناء) أكثر من اسم عضو مرة واحدة باستخدام اختصارات الفأرة ولوحة المفاتيح لمتصفحك، أسماء الأعضاء المستثناة لديها خلفية محددة',
));
