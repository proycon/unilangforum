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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'إضافة',
	'EXTENSIONS'				=> 'الإضافات',
	'EXTENSIONS_ADMIN'			=> 'مدير الإضافات',
	'EXTENSIONS_EXPLAIN'		=> 'مدير الإضافات هو آداة في منتدى phpBB لديك يسمح لك بإدارة جميع الإضافات ومشاهدة معلومات خاصة بهم.',
	'EXTENSION_INVALID_LIST'	=> 'الإضافة “%s” غير صالحة.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'الإضافة المختارة غير متوفرة لهذا المنتدى، يرجى التأكد من أن نسخة phpBB و PHP لديك مسموح بهما (أنظر صفحة التفاصيل).',
	'EXTENSION_DIR_INVALID'		=> 'الإضافة المختارة لا تحتوي على بناء مجلد سليم ولا يمكن تفعيلها.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'الإضافة المختارة لا يمكن تفعيلها، يرجى مراجعة متطلبات الإضافة.',

	'DETAILS'				=> 'التفاصيل',

	'EXTENSIONS_DISABLED'	=> 'الإضافات المعطلة',
	'EXTENSIONS_ENABLED'	=> 'الإضافات المفعلة',

	'EXTENSION_DELETE_DATA'	=> 'حذف البيانات',
	'EXTENSION_DISABLE'		=> 'تعطيل',
	'EXTENSION_ENABLE'		=> 'تفعيل',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'حذف بيانات إضافة يقوم بحذف جميع بياناتها وإعداداتها. ملفات الإضافة تكون محفوظة حتى يمكن تفعيلها مجدداً.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'تعطيل إضافة يقوم بحفظ ملفاتها، بياناتها وإعداداتها لكن يقوم بإزالة أي ميزة تمت إضافتها عن طريقها.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'تفعيل الإضافة يتيح لك استخدامها في منتداك.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'يتم الآن حذف بيانات الإضافة. برجاء عدم إغلاق أو تحديث هذه الصفحة إلا بعد الاكتمال.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'يتم الآن تعطيل الإضافة. برجاء عدم إغلاق أو تحديث هذه الصفحة إلا بعد الاكتمال.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'يتم الآن تفعيل الإضافة. برجاء عدم إغلاق أو تحديث هذه الصفحة إلا بعد الاكتمال.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'تم حذف بيانات الإضافة بنجاح',
	'EXTENSION_DISABLE_SUCCESS'		=> 'تم تعطيل الإضافة بنجاح',
	'EXTENSION_ENABLE_SUCCESS'		=> 'تم تفعيل الإضافة بنجاح',

	'EXTENSION_NAME'			=> 'اسم الإضافة',
	'EXTENSION_ACTIONS'			=> 'الأفعال',
	'EXTENSION_OPTIONS'			=> 'الخيارات',
	'EXTENSION_UPDATE_HEADLINE'	=> 'لتحديث إضافة',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>قم بتعطيل الإضافة</li>
			<li>قم بحذف ملفات الإضافة من مجلد المنتدى</li>
			<li>قم برفع الملفات الأحدث</li>
			<li>قم بتفعيل الإضافة</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'لإزالة إضافة نهائياً من المنتدى',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>قم بتعطيل الإضافة</li>
			<li>قم بحذف بيانات الإضافة</li>
			<li>قم بحذف ملفات الإضافة من مجلد المنتدى</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'هل أنت متأكد أنك تريد حذف جميع البيانات الخاصة بـ “%s”؟<br /><br />هذا سيمحو جميع بياناتها وإعداداتها ولا يمكن استرجاعها!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'هل أنت متأكد أنك تريد تعطيل الإضافة “%s”؟',
	'EXTENSION_ENABLE_CONFIRM'		=> 'هل أنت متأكد أنك تريد تفعيل الإضافة “%s”؟',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'هل أنت متأكد أنك تريد إجبار المنتدى على استخدام نسخة غير مستقرة؟',

	'RETURN_TO_EXTENSION_LIST'	=> 'العودة لقائمة الإضافات',

	'EXT_DETAILS'			=> 'تفاصيل الإضافة',
	'DISPLAY_NAME'			=> 'اسم العرض',
	'CLEAN_NAME'			=> 'الاسم النظيف',
	'TYPE'					=> 'الفئة',
	'DESCRIPTION'			=> 'الوصف',
	'VERSION'				=> 'النسخة',
	'HOMEPAGE'				=> 'الموقع',
	'PATH'					=> 'مسار الملف',
	'TIME'					=> 'وقت الإصدار',
	'LICENSE'				=> 'الترخيص',

	'REQUIREMENTS'			=> 'المتطلبات',
	'PHPBB_VERSION'			=> 'نسخة phpBB',
	'PHP_VERSION'			=> 'نسخة PHP',
	'AUTHOR_INFORMATION'	=> 'بيانات المبرمج',
	'AUTHOR_NAME'			=> 'الاسم',
	'AUTHOR_EMAIL'			=> 'البريد',
	'AUTHOR_HOMEPAGE'		=> 'الموقع',
	'AUTHOR_ROLE'			=> 'الدور',

	'NOT_UP_TO_DATE'		=> '%s غير محدث الى اخر اصدار',
	'UP_TO_DATE'			=> '%s محدث الى اخر اصدار',
	'ANNOUNCEMENT_TOPIC'	=> 'إعلان الإصدار',
	'DOWNLOAD_LATEST'		=> 'تحميل النسخة',
	'NO_VERSIONCHECK'		=> 'لم يتم إدخال بيانات فحص النسخة.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'إعادة فحص جميع النسخ',
	'FORCE_UNSTABLE'					=> 'الفحص الدائم للنسخ الغير مستقرة',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'إعدادات فحص النسخ',

	'META_FIELD_NOT_SET'	=> 'لم يتم تعيين الحقل الفوقي المطلوب %s.',
	'META_FIELD_INVALID'	=> 'الحقل الفوقي %s غير صالح.',
));
