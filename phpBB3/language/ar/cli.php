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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'قم يضبط هذا الخيار إن كانت خيارات الإعدادات تتغير بصورة مستمرة فلا يمكن تخزينها بكفاءة.',
	'CLI_CONFIG_CURRENT'				=> 'قيمة الإعدادات الحالية، استخدم 0 و 1 لتحديد قيمة منطقية',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'تم حذف الإعداد %s بنجاح.',
	'CLI_CONFIG_NEW'					=> 'قيمة الإعدادات الجديدة، استخدم 0 و 1 لتحديد قيمة منطقية',
	'CLI_CONFIG_NOT_EXISTS'				=> 'الإعداد %s غير موجود',
	'CLI_CONFIG_OPTION_NAME'			=> 'اسم خيار الإعدادات',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'قم بضبط هذا الخيار إن كانت القيمة يجب كتابتها بدون سطر جديد في نهايتها.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'الكمية تزداد بقيمة',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'تمت زيادة الإعداد %s بنجاح',
	'CLI_CONFIG_SET_FAILURE'			=> 'لم نستطع ضبط الإعداد %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'تم ضبط الإعداد %s بنجاح',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'يقوم بتكوين قائمة بعمليات cron الجاهزة والغير جاهزة.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'يقوم بتنفيذ جميع عمليات cron الجاهزة.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'اسم العملية التي سيتم تنفيذها',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'يقوم بتحديث قاعدة البيانات عن طريق تطبيق الدمج.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'يقوم بحذف خيار إعدادات',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'يقوم بتعطيل الإضافة المحددة.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'يقوم بتفعيل الإضافة المحددة.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'يقوم بإيجاد الدموج الغير معتمد عليها.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'يقوم بجلب قيمة خيار إعدادات',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'يقوم بزيادة قيمة خيار إعدادات',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'يقوم بعرض قائمة بجميع الإضافات في قاعدة البيانات وملفات المنتدى.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'التشغيل في الوضع الآمن (بدون إضافات).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'إطلاق القوقعة.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'تطهير الإضافة المحددة.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'يقوم بإعادة حساب عمود user_email_hash من جدول المستخدمين.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'يقوم بضبط قيمة خيار إعدادات إذا كانت القيمة القديمة تطابق الحالية فقط',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'يقوم بضبط قيمة خيار إعدادات',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'لم نستطع تعطيل الإضافة %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'تم تعطيل الإضافة %s بنجاح',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'لم نستطع تفعيل الإضافة %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'تم تفعيل الإضافة %s بنجاح',
	'CLI_EXTENSION_NAME'				=> 'اسم الإضافة',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'لم نستطع تطهير الإضافة %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'تم تطهير الإضافة %s بنجاح',
	'CLI_EXTENSION_NOT_FOUND'			=> 'لم يتم العثور على أي إضافات.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'متاح',
	'CLI_EXTENSIONS_DISABLED'			=> 'معطل',
	'CLI_EXTENSIONS_ENABLED'			=> 'مفعل',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'تمت إعادة حساب جميع البُرُد الالكترونية بنجاح.',
));
