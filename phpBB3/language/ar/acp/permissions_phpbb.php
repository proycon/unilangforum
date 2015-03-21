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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'الأفعال',
	'ACL_CAT_CONTENT'		=> 'المحتوى',
	'ACL_CAT_FORUMS'		=> 'المنتديات',
	'ACL_CAT_MISC'			=> 'عام',
	'ACL_CAT_PERMISSIONS'	=> 'الصلاحيات',
	'ACL_CAT_PM'			=> 'الرسائل الخاصة',
	'ACL_CAT_POLLS'			=> 'الاستفتاءات',
	'ACL_CAT_POST'			=> 'المشاركة',
	'ACL_CAT_POST_ACTIONS'	=> 'أفعال المشاركة',
	'ACL_CAT_POSTING'		=> 'الكتابة',
	'ACL_CAT_PROFILE'		=> 'الملف',
	'ACL_CAT_SETTINGS'		=> 'الإعدادات',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'أفعال الموضوع',
	'ACL_CAT_USER_GROUP'	=> 'المستخدمين والمجموعات',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'يمكنه مشاهدة الملفات الشخصية، قائمة الأعضاء، والأعضاء الموجودين',
	'ACL_U_CHGNAME'		=> 'يمكنه تغيير اسم المستخدم',
	'ACL_U_CHGPASSWD'	=> 'يمكنه تغيير كلمة المرور',
	'ACL_U_CHGEMAIL'	=> 'يمكنه تغيير البريد الالكتروني',
	'ACL_U_CHGAVATAR'	=> 'يمكنه تغيير الصورة الشخصية',
	'ACL_U_CHGGRP'		=> 'يمكنه تغيير المجموعة الافتراضية',
	'ACL_U_CHGPROFILEINFO'	=> 'يمكنه تغيير معلومات حقل الملف الشخصي',

	'ACL_U_ATTACH'		=> 'يمكنه ارفاق ملفات',
	'ACL_U_DOWNLOAD'	=> 'يمكنه تحميل ملفات',
	'ACL_U_SAVEDRAFTS'	=> 'يمكنه حفظ مسودات',
	'ACL_U_CHGCENSORS'	=> 'يمكنه تعطيل حساس الكلمات',
	'ACL_U_SIG'			=> 'يمكنه استخدام التوقيع',

	'ACL_U_SENDPM'		=> 'يمكنه إرسال رسائل خاصة',
	'ACL_U_MASSPM'		=> 'يمكنه إرسال رسائل إلى عدة مستخدمين',
	'ACL_U_MASSPM_GROUP'=> 'يمكنه إرسال رسائل إلى مجموعات',
	'ACL_U_READPM'		=> 'يمكنه قراءة الرسائل الخاصة',
	'ACL_U_PM_EDIT'		=> 'يمكنه تعديل رسائله الخاصة',
	'ACL_U_PM_DELETE'	=> 'يمكنه حذف الرسائل الخاصة من مجلداته',
	'ACL_U_PM_FORWARD'	=> 'يمكنه إعادة إرسال الرسائل الخاصة',
	'ACL_U_PM_EMAILPM'	=> 'يمكنه إرسال الرسائل الخاصة بالبريد',
	'ACL_U_PM_PRINTPM'	=> 'يمكنه طباعة الرسائل الخاصة',
	'ACL_U_PM_ATTACH'	=> 'يمكنه إرفاق ملفات في الرسائل الخاصة',
	'ACL_U_PM_DOWNLOAD'	=> 'يمكنه تحميل ملفات من الرسائل الخاصة',
	'ACL_U_PM_BBCODE'	=> 'يمكنه استخدام BBCode في الرسائل الخاصة',
	'ACL_U_PM_SMILIES'	=> 'يمكنه استعمال الابتسامات في الرسائل الخاصة',
	'ACL_U_PM_IMG'		=> 'يمكنه استخدام[img] BBCode في الرسائل الخاصة',
	'ACL_U_PM_FLASH'	=> 'يمكنه استخدام[flash] BBCode في الرسائل الخاصة',

	'ACL_U_SENDEMAIL'	=> 'يمكنه إرسال بريد الكتروني',
	'ACL_U_SENDIM'		=> 'يمكنه إرسال رسائل فورية',
	'ACL_U_IGNOREFLOOD'	=> 'يمكنه تجاهل حد الإغراق',
	'ACL_U_HIDEONLINE'	=> 'يستطيع إخفاء حالة اتصاله',
	'ACL_U_VIEWONLINE'	=> 'يمكنه رؤية المستخدمين المخفيين',
	'ACL_U_SEARCH'		=> 'يمكنه البحث في المنتدى',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'يمكنه رؤية المنتدى',
	'ACL_F_READ'		=> 'يمكنه قراءة المنتدى',
	'ACL_F_SEARCH'		=> 'يمكنه البحث في المنتدى',
	'ACL_F_SUBSCRIBE'	=> 'يمكنه الاشتراك في المنتدى',
	'ACL_F_PRINT'		=> 'يمكنه طباعة المواضيع',
	'ACL_F_EMAIL'		=> 'يمكنه إرسال المواضيع بالبريد الالكتروني',
	'ACL_F_BUMP'		=> 'يمكنه رفع المواضيع',
	'ACL_F_USER_LOCK'	=> 'يمكنه إغلاق مواضيعه الخاصة',
	'ACL_F_DOWNLOAD'	=> 'يمكنه تحميل ملفات',
	'ACL_F_REPORT'		=> 'يمكنه التبليغ عن المشاركات',

	'ACL_F_POST'		=> 'يمكنه كتابة مواضيع جديدة',
	'ACL_F_STICKY'		=> 'يمكنه كتابة مواضيع مثبتة',
	'ACL_F_ANNOUNCE'	=> 'يمكنه كتابة إعلانات',
	'ACL_F_REPLY'		=> 'يمكنه الرد على المواضيع',
	'ACL_F_EDIT'		=> 'يمكنه تعديل مشاركاته الخاصة',
	'ACL_F_DELETE'		=> 'يمكنه حذف مشاركاته نهائياً',
	'ACL_F_SOFTDELETE'	=> 'يمكنه الحذف البسيط لمشاركاته<br /><em>المشرفين، الذين يملكون صلاحية الموافقة على المشاركات، يمكنهم استعادة المشاركات المحذوفة حذف بسيط.</em>',
	'ACL_F_IGNOREFLOOD' => 'يمكنه تجاهل حد الإغراق',
	'ACL_F_POSTCOUNT'	=> 'زيادة عداد المشاركات<br /><em>يرجى العلم أن هذا الإعداد يؤثر فقط عل المشاركات الجديدة.</em>',
	'ACL_F_NOAPPROVE'	=> 'يمكنه المشاركة دون الحاجة لموافقة',

	'ACL_F_ATTACH'		=> 'يمكنه إرفاق ملفات',
	'ACL_F_ICONS'		=> 'يمكنه استخدام أيقونات المواضيع/المشاركات',
	'ACL_F_BBCODE'		=> 'يمكنه استخدام BBCode',
	'ACL_F_FLASH'		=> 'يمكنه استخدام [flash] BBCode',
	'ACL_F_IMG'			=> 'يمكنه استخدام [img] BBCode',
	'ACL_F_SIGS'		=> 'يمكنه استخدام التواقيع',
	'ACL_F_SMILIES'		=> 'يمكنه استخدام الابتسامات',

	'ACL_F_POLL'		=> 'يمكنه إنشاء استفتاءات',
	'ACL_F_VOTE'		=> 'يمكنه التصويت في الاستفتاءات',
	'ACL_F_VOTECHG'		=> 'يمكنه تغيير صوته الحالي',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'يمكنه تعديل المشاركات',
	'ACL_M_DELETE'		=> 'يمكنه حذف المشاركات نهائياً',
	'ACL_M_SOFTDELETE'	=> 'يمكنه الحذف البسيط للمشاركات<br /><em>المشرفين، الذين يملكون صلاحية الموافقة على المشاركات، يمكنهم استعادة المشاركات المحذوفة حذف بسيط.</em>',
	'ACL_M_APPROVE'		=> 'يمكنه الموافقة على واستعادة المشاركات',
	'ACL_M_REPORT'		=> 'يمكنه إغلاق وحذف التقارير',
	'ACL_M_CHGPOSTER'	=> 'يمكنه تغيير كاتب المشاركة',

	'ACL_M_MOVE'	=> 'يمكنه نقل المواضيع',
	'ACL_M_LOCK'	=> 'يمكنه قفل المواضيع',
	'ACL_M_SPLIT'	=> 'يمكنه تقسيم المواضيع',
	'ACL_M_MERGE'	=> 'يمكنه دمج المواضيع',

	'ACL_M_INFO'	=> 'يمكنه رؤية تفاصيل المشاركة',
	'ACL_M_WARN'	=> 'يمكنه إعطاء تحذيرات<br /><em>هذا الإعداد يكون عاماً وغير مرتبط بمنتدى معين.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'يمكنه إدارة الحظر<br /><em>هذا الإعداد يكون عاماً وغير مرتبط بمنتدى معين.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'يمكنه تعديل إعدادات المنتدى/فحص التحديثات',
	'ACL_A_SERVER'		=> 'يمكنه تعديل إعدادات الخادم/الاتصال',
	'ACL_A_JABBER'		=> 'يمكنه تعديل إعدادات Jabber',
	'ACL_A_PHPINFO'		=> 'يمكنه استعراض إعدادات php',

	'ACL_A_FORUM'		=> 'يمكنه إدارة المنتديات',
	'ACL_A_FORUMADD'	=> 'يمكنه إضافة منتديات جديدة',
	'ACL_A_FORUMDEL'	=> 'يمكنه حذف منتديات',
	'ACL_A_PRUNE'		=> 'يمكنه تهذيب المنتديات',

	'ACL_A_ICONS'		=> 'يمكنه تعديل أيقونات المواضيع/المشاركات والابتسامات',
	'ACL_A_WORDS'		=> 'يمكنه تعديل حساس الكلمات',
	'ACL_A_BBCODE'		=> 'يمكنه تحديد أكواد BBCode',
	'ACL_A_ATTACH'		=> 'يمكنه تعديل إعدادات المرفقات',

	'ACL_A_USER'		=> 'يمكنه إدارة المستخدمين<br /><em>هذا يتضمن أيضاً مشاهدة متصفح المستخدم في قائمة الموجودون الآن.</em>',
	'ACL_A_USERDEL'		=> 'يمكنه حذف/تهذيب الأعضاء',
	'ACL_A_GROUP'		=> 'يمكنه إدارة المجموعات',
	'ACL_A_GROUPADD'	=> 'يمكنه إضافة مجموعات جديدة',
	'ACL_A_GROUPDEL'	=> 'يمكنه حذف مجموعات',
	'ACL_A_RANKS'		=> 'يمكنه إدارة الرتب',
	'ACL_A_PROFILE'		=> 'يمكنه إدارة حقول الملف الشخصي الخاصة',
	'ACL_A_NAMES'		=> 'يمكنه إدارة الأسماء الممنوعة',
	'ACL_A_BAN'			=> 'يمكنه إدارة الحظر',

	'ACL_A_VIEWAUTH'	=> 'يمكنه مشاهدة قوالب الصلاحيات',
	'ACL_A_AUTHGROUPS'	=> 'يمكنه تعديل الصلاحيات لمجموعات منفردة',
	'ACL_A_AUTHUSERS'	=> 'يمكنه تعديل الصلاحيات لأعضاء منفردين',
	'ACL_A_FAUTH'		=> 'يمكنه تعديل درجة صلاحيات المنتديات',
	'ACL_A_MAUTH'		=> 'يمكنه تعديل درجة صلاحيات المشرفين',
	'ACL_A_AAUTH'		=> 'يمكنه تعديل درجة صلاحيات المدراء',
	'ACL_A_UAUTH'		=> 'يمكنه تعديل درجة صلاحيات الأعضاء',
	'ACL_A_ROLES'		=> 'يمكنه إدارة الأدوار',
	'ACL_A_SWITCHPERM'	=> 'يمكنه استخدام صلاحيات الغير',

	'ACL_A_STYLES'		=> 'يمكنه إدارة الستايلات',
	'ACL_A_EXTENSIONS'	=> 'يمكنه إدارة الإضافات',
	'ACL_A_VIEWLOGS'	=> 'يمكنه مشاهدة السجلات',
	'ACL_A_CLEARLOGS'	=> 'يمكنه تنظيف السجلات',
	'ACL_A_MODULES'		=> 'يمكنه إدارة الموديولات',
	'ACL_A_LANGUAGE'	=> 'يمكنه إدارة حزم اللغات',
	'ACL_A_EMAIL'		=> 'يمكنه إرسال بريد جماعي',
	'ACL_A_BOTS'		=> 'يمكنه إدارة العناكب',
	'ACL_A_REASONS'		=> 'يمكنه إدارة أسباب التبليغ/الرفض',
	'ACL_A_BACKUP'		=> 'يمكنه نسخ/استعادة قاعدة البيانات احتياطياً',
	'ACL_A_SEARCH'		=> 'يمكنه إدارة خدمات وإعدادات البحث',
));
