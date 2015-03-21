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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'من هنا تستطيع إدارة أنواع الموديولات جميعها. يرجى ملاحظة أن لوحة التحكم لها ثلاث مستويات من القوائم (قسم -> قسم -> موديول) بينما الآخريات لها مستويان للقوائم (قسم -> موديول) والتي ينبغي الحفاظ عليها. ويرجى إدراك أنك قد تغلق على نفسك إذا عطلت أو حذفت الموديولات المسؤولة عن إدارة الموديول نفسه',
	'ADD_MODULE'					=> 'إضافة موديول',
	'ADD_MODULE_CONFIRM'			=> 'هل أنت متأكد من أنك تريد إضافة الموديول المحدد بالنمط المحدد ?',
	'ADD_MODULE_TITLE'				=> 'إضافة موديول',

	'CANNOT_REMOVE_MODULE'	=> 'لا يمكن حذف الموديول، لأنه يحتوي على فرعيات. الرجاء انقل أو احذف الفرعيات جميعها قبل القيام بهذه العملية',
	'CATEGORY'				=> 'قسم',
	'CHOOSE_MODE'			=> 'اختيار نمط الموديول',
	'CHOOSE_MODE_EXPLAIN'	=> 'اختر أنماط الموديولات المستعملة',
	'CHOOSE_MODULE'			=> 'اختر موديول',
	'CHOOSE_MODULE_EXPLAIN'	=> 'اختر الملف الذي يُستدعَى بواسطة الموديول',
	'CREATE_MODULE'			=> 'إنشاء موديول جديد',

	'DEACTIVATED_MODULE'	=> 'تعطيل الموديول',
	'DELETE_MODULE'			=> 'حذف الموديول',
	'DELETE_MODULE_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف هذا الموديول ?',

	'EDIT_MODULE'			=> 'تعديل موديول',
	'EDIT_MODULE_EXPLAIN'	=> 'هنا يمكنك ضبط إعدادات محددة للموديول',

	'HIDDEN_MODULE'			=> 'موديول مخفي',

	'MODULE'					=> 'موديول',
	'MODULE_ADDED'				=> 'أضيفَ الموديول بنجاح',
	'MODULE_DELETED'			=> 'حـُذفَ الموديول بنجاح',
	'MODULE_DISPLAYED'			=> 'عرض الموديول',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'إذا كنت لا تريد عرض هذا الموديول، لكنك تريد استعماله، اختر لا',
	'MODULE_EDITED'				=> 'تعدّل الموديول بنجاح',
	'MODULE_ENABLED'			=> 'تفعيل الموديول',
	'MODULE_LANGNAME'			=> 'اسم لغة الموديول',
	'MODULE_LANGNAME_EXPLAIN'	=> 'ادخِل اسم الموديول لعرضه. استعمل دوال اللغة إذا كان الاسم مضافاً في ملف اللغة',
	'MODULE_TYPE'				=> 'نوع الموديول',

	'NO_CATEGORY_TO_MODULE'	=> 'لا يمكن تغيير القسم إلى موديول. رجاءً احذف/حوّل الأقسام والموديولات الفرعية جميعها قبل القيام بهذه العملية',
	'NO_MODULE'				=> 'لم يوجد أي موديول',
	'NO_MODULE_ID'			=> 'لم يتحدد أي رقم موديول',
	'NO_MODULE_LANGNAME'	=> 'لم يتحدد اسم لغة الموديول',
	'NO_PARENT'				=> 'لا يوجد أصل',

	'PARENT'				=> 'الأصل',
	'PARENT_NO_EXIST'		=> 'الأصل غير موجود',

	'SELECT_MODULE'			=> 'اختر موديول',
));
