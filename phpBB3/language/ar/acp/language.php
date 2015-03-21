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
	'ACP_FILES'						=> 'ملفات اللغة للوحة التحكم',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'هنا تستطيع تركيب/حذف حزم اللغة، اللغة المستخدمة كلغة إفتراضية محددة بنجمة (*)',

	'DELETE_LANGUAGE_CONFIRM'		=> 'هل أنت متأكد أنك تريد حذف “%s”؟',

	'INSTALLED_LANGUAGE_PACKS'	=> 'حزم اللغات المنصبة',

	'LANGUAGE_DETAILS_UPDATED'			=> 'تحدّث تفاصيل اللغة بنجاح',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'هذه الحزمة مركبة مسبقا',
	'LANGUAGE_PACK_DELETED'				=> 'حزمة اللغة <strong>%s</strong> حُذفَت بنجاح. الأعضاء كلهم الذين يستخدمون هذه اللغة حُوّلوا إلى اللغة الافتراضية',
	'LANGUAGE_PACK_DETAILS'				=> 'تفاصيل حزمة اللغة',
	'LANGUAGE_PACK_INSTALLED'			=> 'حزمة اللغة <strong>%s</strong> تركبت بنجاح',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'العبارات اللغوية الخاصة بحقول الملف الشخصي الإضافية تم نسخها من ملفات اللغة الافتراضية. يرجى تغييرها إذا لزم.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'الاسم المحلي',
	'LANGUAGE_PACK_NAME'				=> 'الاسم',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'حزمة اللغة التي حددتها غير موجودة',
	'LANGUAGE_PACK_USED_BY'				=> 'مستعملة بواسطة ( بمن فيهم محركات البحث )',
	'LANGUAGE_VARIABLE'					=> 'متغير اللغة',
	'LANG_AUTHOR'						=> 'كاتب اللغة',
	'LANG_ENGLISH_NAME'					=> 'اسم اللغة بالإنجليزية',
	'LANG_ISO_CODE'						=> 'الرمز',
	'LANG_LOCAL_NAME'					=> 'الاسم المحلي',

	'MISSING_LANG_FILES'		=> 'ملفات لغة مفقودة',
	'MISSING_LANG_VARIABLES'	=> 'متغيرات لغة مفقودة',

	'NO_FILE_SELECTED'				=> 'لم تحدد ملف لغة',
	'NO_LANG_ID'					=> 'لم تحدد حزمة اللغة',
	'NO_REMOVE_DEFAULT_LANG'		=> 'ليس مسموحاً لك حذف حزمة اللغة الافتراضية.<br />إذا أردت حذف هذه اللغة، غيّر اللغة الافتراضية للمنتدى أولاً',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'لا يوجد حزم لغة غير منصبة',

	'THOSE_MISSING_LANG_FILES'			=> 'الملفات التالية مفقودة من حزمة اللغة %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'متغييرات اللغة التالية مفقودة من حزمة اللغة <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'حزم لغات غير منصبة',
));
