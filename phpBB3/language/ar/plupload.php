<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @translated 2014 phpBBArabia.com
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'إضافة ملفات',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'أضف ملفات لقائمة التحميل ثم اضغط زر البدء.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s موجود بالفعل في القائمة.',
	'PLUPLOAD_CLOSE'			=> 'إغلاق',
	'PLUPLOAD_DRAG'				=> 'قم بسحب الملفات لهنا.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'خطأ ملف مكرر.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'يمكنك أيضاً إرفاق الملفات عن طريق سحبهم والقائهم في مربع الرسالة.',
	'PLUPLOAD_ERR_INPUT'		=> 'تعذر فتح مجرى الإدخال.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'تعذر نقل الملف المرفوع.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'تعذر فتح مجرى الإخراج.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'الملف كبير جداً:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'خطأ في عدد الملفات.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'امتداد ملف غير صالح:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'الذاكرة المتوفرة نفذت أثناء التشغيل.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'رابط التحميل قد يكون خاطئ أو غير موجود.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'خطأ في امتداد الملف.',
	'PLUPLOAD_FILE'				=> 'الملف: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'الملف: %s، الحجم: %d، أقصى حجم للملفات: %d',
	'PLUPLOAD_FILENAME'			=> 'اسم الملف',
	'PLUPLOAD_FILES_QUEUED'		=> '%d ملفات في القائمة',
	'PLUPLOAD_GENERIC_ERROR'	=> 'خطأ عام.',
	'PLUPLOAD_HTTP_ERROR'		=> 'خطأ HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'صيغة الصورة غير صحيحة أو غير مدعومة.',
	'PLUPLOAD_INIT_ERROR'		=> 'خطأ أولي.',
	'PLUPLOAD_IO_ERROR'			=> 'خطأ إدخال/إخراج.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'غير متوافر',
	'PLUPLOAD_SECURITY_ERROR'	=> 'خطأ أمان.',
	'PLUPLOAD_SELECT_FILES'		=> 'اختر الملفات',
	'PLUPLOAD_SIZE'				=> 'الحجم',
	'PLUPLOAD_SIZE_ERROR'		=> 'خطأ في حجم الملف.',
	'PLUPLOAD_STATUS'			=> 'الحالة',
	'PLUPLOAD_START_UPLOAD'		=> 'بدء التحميل',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'بدء قائمة التحميل',
	'PLUPLOAD_STOP_UPLOAD'		=> 'إيقاف التحميل',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'إيقاف التحميل الحالي',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'تم تحميل %d/%d ملفات',
));
