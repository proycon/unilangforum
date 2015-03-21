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
	'ACP_STYLES_EXPLAIN'	=> 'هنا تستطيع إدارة جميع الستايلات المتاحة في منتداك. تستطيع تعديل الستايلات الموجودة، حذفها، تعطيلها، إعادة تفعيلها، أو تثبيت ستايلات جديدة. تستطيع أيضا مشاهدة كيف سيظهر الستايل باستعمال خاصية المشاهدة. أيضا كُتِب عدد الأعضاء الذين يستعملون كل ستايل، يرجى ملاحظة أن تجاهل ستايلات العضو لن يحسبوا.',

	'CANNOT_BE_INSTALLED'			=> 'لا يمكن التثبيت',
	'CONFIRM_UNINSTALL_STYLES'		=> 'هل أنت متأكد أنك تريد إلغاء تثبيت الستايلات المحددة؟',
	'COPYRIGHT'						=> 'الحقوق',

	'DEACTIVATE_DEFAULT'		=> 'لا يمكنك تعطيل الستايل الافتراضي',
	'DELETE_FROM_FS'			=> 'حذف من ملف النظام',
	'DELETE_STYLE_FILES_FAILED'	=> 'خطأ في حذف الملفات لستايل "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'تم حذف ملفات ستايل "%s".',
	'DETAILS'					=> 'تفاصيـل',

	'INHERITING_FROM'			=> 'مصمم على',
	'INSTALL_STYLE'				=> 'تركيب الستايل',
	'INSTALL_STYLES'			=> 'تثبيت الستايلات',
	'INSTALL_STYLES_EXPLAIN'	=> 'من هنا يمكنك تثبيت ستايلات جديدة.<br />إذا لم تستطع إيجاد ستايل معين في القائة بأسفل، يرجى التأكد من أن الستايل غير مثبت بالفعل. إذا لم يكن مثبتاً، يرجى التأكد من أنه تم رفعه بصورة سليمة.',
	'INVALID_STYLE_ID'			=> 'معرف ستايل خاطئ.',

	'NO_MATCHING_STYLES_FOUND'	=> 'لا توجد ستايلات تماثل بحثك.',
	'NO_UNINSTALLED_STYLE'		=> 'لم يوجد أي ستايل غير مركب',

	'PURGED_CACHE'				=> 'تم حذف الكاش.',

	'REQUIRES_STYLE'			=> 'هذا الستايل يتطلب أن يكون ستايل "%s" مثبتاً.',

	'STYLE_ACTIVATE'			=> 'تفعيل',
	'STYLE_ACTIVE'				=> 'فعال',
	'STYLE_DEACTIVATE'			=> 'تعطيل',
	'STYLE_DEFAULT'				=> 'جعله الستايل الافتراضي',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'يجب أن تقوم بتفعيل الستايل قبل جعله الستايل الافتراضي.',
	'STYLE_ERR_INVALID_PARENT'	=> 'ستايل رئيسي خاطئ.',
	'STYLE_ERR_NAME_EXIST'		=> 'هناك ستايل موجود بهذا الاسم',
	'STYLE_ERR_STYLE_NAME'		=> 'ينبغي عليك عرض اسم هذا الستايل',
	'STYLE_INSTALLED'			=> 'تم تثبيت ستايل "%s".',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'العودة إلى قائمة الستايلات المثبتة',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'تثبيت المزيد من الستايلات',
	'STYLE_NAME'				=> 'اسم الستايل',
	'STYLE_NAME_RESERVED'		=> 'الستايل "%s" لا يمكن تثبيته، لأن الاسم محجوز.',
	'STYLE_NOT_INSTALLED'		=> 'لم يتم تثبيت ستايل "%s".',
	'STYLE_PATH'				=> 'مسار الستايل',
	'STYLE_UNINSTALL'			=> 'إلغاء التثبيت',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'ستايل "%s" لا يمكن إلغاء تثبيته لأنه يحتوي على ستايل فرعي أو أكثر.',
	'STYLE_UNINSTALLED'			=> 'تم إلغاء تثبيت ستايل "%s" بنجاح.',
	'STYLE_USED_BY'				=> 'مستعمل من طرف ( بمن فيهم محركات البحث )',

	'UNINSTALL_DEFAULT'		=> 'لا يمكنك إلغاء تثبيت الستايل الافتراضي.',
));
