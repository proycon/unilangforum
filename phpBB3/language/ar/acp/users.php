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
	'ADMIN_SIG_PREVIEW'		=> 'معاينة التوقيع',
	'AT_LEAST_ONE_FOUNDER'	=> 'لا يمكنك تحويل هذا المؤسس إلى عضو، ينبغي أن يكون هناك مؤسس واحد على الأقل لهذا المنتدى، إذا أردت تغيير هذا المؤسس إلى عضو عادي ينبغي عليك أولاً أن ترقّي عضوا آخر إلى مؤسس',

	'BAN_ALREADY_ENTERED'	=> 'لقد حظرتَ مسبقاً بنجاح. لم يحدث أي تغيير في قائمة الحظر',
	'BAN_SUCCESSFUL'		=> 'تم الحظر بنجاح',

	'CANNOT_BAN_ANONYMOUS'			=> 'لا يمكنك حظر حساب الزائر. بإمكانك تحديد صلاحيات الزوّار من قسم "الصلاحيات"',
	'CANNOT_BAN_FOUNDER'			=> 'لا يمكنك حظر حسابات المؤسسين',
	'CANNOT_BAN_YOURSELF'			=> 'لا يمكنك حظر نفسك',
	'CANNOT_DEACTIVATE_BOT'			=> 'لا يمكنك تعطيل حسابات bot. رجاءً عطل bot نفسه بدلاً من ذلك',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'لا يمكنك تعطيل حساب المؤسس',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'لا يمكنك تعطيل عضويتك',
	'CANNOT_FORCE_REACT_BOT'		=> 'لا يمكنك إجبار botعلى إعادة تفعيل حسابه، رجاءً عطل bot نفسه بدلاً من ذلك',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'لا يمكنك إجبار المؤسس على إعادة تفعيل حسابه',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'لا يمكنك إجبار نفسك على إعادة تفعيل حسابك',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'لا يمكنك حذف عضوية الزائر',
	'CANNOT_REMOVE_FOUNDER'			=> 'غير مسموح لك بحذف حسابات المؤسسين.',
	'CANNOT_REMOVE_YOURSELF'		=> 'لا يمكنك حذف عضويتك',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'لا يمكنك ترقية الأعضاء المتجاهلين إلى حالة المؤسس',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'لا يمكنك ترقية عضو غير مفعل إلى مؤسس، ينبغي تفعيل عضويته أولاً',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'تحتاج لضبط هذه إذا كنت تغير البريد الالكتروني للعضو فقط',

	'DELETE_POSTS'			=> 'حذف المشاركات',
	'DELETE_USER'			=> 'حذف العضو',
	'DELETE_USER_EXPLAIN'	=> 'يرجى العلم بأن حذف العضوية سيكون نهائيا، لن تستطيع استرجاعها مرة أخرى. الرسائل الخاصة الغير مقروءة التي تم إرسالها من هذا العضو سيتم حذفها ولن يتم إيصالها لمستقبليها',

	'FORCE_REACTIVATION_SUCCESS'	=> 'أعيد التفعيل بنجاح',
	'FOUNDER'						=> 'مؤسس',
	'FOUNDER_EXPLAIN'				=> 'المؤسس يملك كافة الخيارات الإدارية ولا يمكن حظره أو حذفه أو تحذيره من المديرين الآخرين',

	'GROUP_APPROVE'					=> 'قبول العضوية',
	'GROUP_DEFAULT'					=> 'جعل المجموعة افتراضية للعضو',
	'GROUP_DELETE'					=> 'حذف العضو من المجموعة',
	'GROUP_DEMOTE'					=> 'إزالة مدير المجموعة',
	'GROUP_PROMOTE'					=> 'جعله مدير للمجموعة',

	'IP_WHOIS_FOR'			=> 'معرفة IP الخاص بـ %s',

	'LAST_ACTIVE'			=> 'آخر نشاط',

	'MOVE_POSTS_EXPLAIN'	=> 'رجاءً اختر المنتدى الذي تريد نقل كافة مشاركات هذا العضو إليه',

	'NO_SPECIAL_RANK'		=> 'لم تتعين رتبة خاصة',
	'NO_WARNINGS'			=> 'لا يوجد تحذيرات.',
	'NOT_MANAGE_FOUNDER'	=> 'لقد حاولت إدارة عضوية مؤسس، فقط المؤسسون هم من يستطيعون إدارة عضويات المؤسسين أمثالهم',

	'QUICK_TOOLS'			=> 'أدوات سريعة',

	'REGISTERED'			=> 'مسجل',
	'REGISTERED_IP'			=> 'مسجل بواسطة IP',
	'RETAIN_POSTS'			=> 'إبقاء المشاركات',

	'SELECT_FORM'			=> 'اختر الشكل',
	'SELECT_USER'			=> 'اختر العضو',

	'USER_ADMIN'					=> 'إدارة العضو',
	'USER_ADMIN_ACTIVATE'			=> 'تفعيل العضوية',
	'USER_ADMIN_ACTIVATED'			=> 'تفعل العضو بنجاح',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'حذفت الصورة الشخصية للعضو بنجاح',
	'USER_ADMIN_BAN_EMAIL'			=> 'حظر البريد الإلكتروني',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'حُظِر البريد الإلكتروني عن طريق إدارة الأعضاء',
	'USER_ADMIN_BAN_IP'				=> 'حظر الـ IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'حُظِر الـ IP عن طريق إدارة الأعضاء',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'حُظِر اسم المستخدم عن طريق إدارة الأعضاء',
	'USER_ADMIN_BAN_USER'			=> 'حظر اسم المستخدم',
	'USER_ADMIN_DEACTIVATE'			=> 'تعطيل العضوية',
	'USER_ADMIN_DEACTIVED'			=> 'تعطلت العضوية بنجاح',
	'USER_ADMIN_DEL_ATTACH'			=> 'حذف جميع المرفقات',
	'USER_ADMIN_DEL_AVATAR'			=> 'حذف الصورة الشخصية',
	'USER_ADMIN_DEL_OUTBOX'			=> 'تفريغ الصندوق الصادر للرسائل الخاصة',
	'USER_ADMIN_DEL_POSTS'			=> 'حذف جميع المشاركات',
	'USER_ADMIN_DEL_SIG'			=> 'حذف التوقيع',
	'USER_ADMIN_EXPLAIN'			=> 'هنا يمكنك تغيير معلومات وإعدادات الأعضاء',
	'USER_ADMIN_FORCE'				=> 'إجباره على إعادة التفعيل',
	'USER_ADMIN_LEAVE_NR'			=> 'حذف من المُسجلين الجُدد',
	'USER_ADMIN_MOVE_POSTS'			=> 'نقل جميع المشاركات',
	'USER_ADMIN_SIG_REMOVED'		=> 'حذِف التوقيع بنجاح',
	'USER_ATTACHMENTS_REMOVED'		=> 'حذِفـَت جميع المرفقات الخاصة بهذا العضو بنجاح',
	'USER_AVATAR_NOT_ALLOWED'		=> 'لا يمكن عرض الصورة الشخصية لأن خاصية الصور الشخصية مُعطلة.',
	'USER_AVATAR_UPDATED'			=> 'تحدثت معلومات الصورة الشخصية بنجاح',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'لا يُمكن عرض الصورة الشخصية لأن امتدادها غير مسموح.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'حقول الملف الشخصي الخاصة',
	'USER_DELETED'					=> 'حُذِف العضو بنجاح',
	'USER_GROUP_ADD'				=> 'إضافة العضو للمجموعة',
	'USER_GROUP_NORMAL'				=> 'مستخدم المجموعات العادية هو عضو في',
	'USER_GROUP_PENDING'			=> 'عضو المجموعات هو في فترة الانتظار',
	'USER_GROUP_SPECIAL'			=> 'مستخدم المجموعات الخاصة هو عضو في',
	'USER_LIFTED_NR'				=> 'لقد حذفَت حالة عضو جديد للعضو بنجاح.',
	'USER_NO_ATTACHMENTS'			=> 'لا يوجد مرفقات لعرضها',
	'USER_NO_POSTS_TO_DELETE'			=> 'لا توجد مشاركات لحفظها أو حذفها.',
	'USER_OUTBOX_EMPTIED'			=> 'تفرّغ الصندوق الصادر للرسائل الخاصة للعضو بنجاح.',
	'USER_OUTBOX_EMPTY'				=> 'تفرّغ الصندوق الصادر للرسائل الخاصة للعضو مُسبقاً.',
	'USER_OVERVIEW_UPDATED'			=> 'تحدثت بيانات العضو بنجاح',
	'USER_POSTS_DELETED'			=> 'حذفَت جميع المشاركات المكتوبة بواسطة العضو بنجاح',
	'USER_POSTS_MOVED'				=> 'نقلَت مشاركات العضو جميعها إلى المنتدى المختار بنجاح',
	'USER_PREFS_UPDATED'			=> 'تحدثت إعدادات العضو بنجاح',
	'USER_PROFILE'					=> 'الملف الشخصي',
	'USER_PROFILE_UPDATED'			=> 'تحدث الملف الشخصي بنجاح',
	'USER_RANK'						=> 'الرتبة',
	'USER_RANK_UPDATED'				=> 'تحدثت الرتبة بنجاح',
	'USER_SIG_UPDATED'				=> 'تحدّث توقيع العضو بنجاح',
	'USER_WARNING_LOG_DELETED'		=> 'لا توجد معلومات متوفرة. يُمكن أن يكون بسبب حذف سجل الدخول.',
	'USER_TOOLS'					=> 'أدوات أساسية',
));
