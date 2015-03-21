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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'المدراء',
	'ACP_ADMIN_LOGS'			=> 'سجلات المدير',
	'ACP_ADMIN_ROLES'			=> 'قوالب الإدارة',
	'ACP_ATTACHMENTS'			=> 'المرفقات',
	'ACP_ATTACHMENT_SETTINGS'	=> 'إعدادات المرفقات',
	'ACP_AUTH_SETTINGS'			=> 'المصادقة',
	'ACP_AUTOMATION'			=> 'مهام تلقائية',
	'ACP_AVATAR_SETTINGS'		=> 'إعدادات الصور الشخصية',

	'ACP_BACKUP'				=> 'النسخ الاحتياطي',
	'ACP_BAN'					=> 'الحظر',
	'ACP_BAN_EMAILS'			=> 'حظر بريد الكتروني',
	'ACP_BAN_IPS'				=> 'حظر عناوين IP',
	'ACP_BAN_USERNAMES'			=> 'حظر أسماء المستخدمين',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'إعدادات المنتدى',
	'ACP_BOARD_FEATURES'		=> 'خصائص المنتدى',
	'ACP_BOARD_MANAGEMENT'		=> 'إدارة المنتدى',
	'ACP_BOARD_SETTINGS'		=> 'إعدادات المنتدى',
	'ACP_BOTS'					=> 'spiders/robots',

	'ACP_CAPTCHA'				=> 'الرمز الأمني CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'التخصيص',
	'ACP_CAT_DATABASE'			=> 'قاعدة البيانات',
	'ACP_CAT_DOT_MODS'			=> 'الهاكات',
	'ACP_CAT_FORUMS'			=> 'المنتديات',
	'ACP_CAT_GENERAL'			=> 'عام',
	'ACP_CAT_MAINTENANCE'		=> 'الصيانة',
	'ACP_CAT_PERMISSIONS'		=> 'الصلاحيات',
	'ACP_CAT_POSTING'			=> 'الكتابة',
	'ACP_CAT_STYLES'			=> 'الاستايلات',
	'ACP_CAT_SYSTEM'			=> 'النظــام',
	'ACP_CAT_USERGROUP'			=> 'المجموعات والأعضاء',
	'ACP_CAT_USERS'				=> 'الأعضاء',
	'ACP_CLIENT_COMMUNICATION'	=> 'اتصالات الأجهزة الطرفية',
	'ACP_COOKIE_SETTINGS'		=> 'إعدادات الملفات المؤقتة',
	'ACP_CONTACT'				=> 'صفحة اتصل بنا',
	'ACP_CONTACT_SETTINGS'		=> 'إعدادات صفحة اتصل بنا',
	'ACP_CRITICAL_LOGS'			=> 'سجلات الأخطاء',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'حقول الملف الشخصي الخاصة',

	'ACP_DATABASE'				=> 'إدارة قاعدة البيانات',
	'ACP_DISALLOW'				=> 'تعطيل',
	'ACP_DISALLOW_USERNAMES'	=> 'الأسماء الممنوعة',

	'ACP_EMAIL_SETTINGS'		=> 'إعدادات البريد الإلكتروني',
	'ACP_EXTENSION_GROUPS'		=> 'إدارة مجموعات الامتداد',
	'ACP_EXTENSION_MANAGEMENT'	=> 'إدارة الاضافات',
	'ACP_EXTENSIONS'			=> 'إدارة الإضافات',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'صلاحيات خاصة لكل منتدى',
	'ACP_FORUM_LOGS'				=> 'سجلات المنتدى',
	'ACP_FORUM_MANAGEMENT'			=> 'إدارة المنتدى',
	'ACP_FORUM_MODERATORS'			=> 'مشرفو المنتديات',
	'ACP_FORUM_PERMISSIONS'			=> 'صلاحيات المنتدى',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'نسخ صلاحيات المنتدى',
	'ACP_FORUM_ROLES'				=> 'قوالب المنتدى',

	'ACP_GENERAL_CONFIGURATION'		=> 'إعدادات عامة',
	'ACP_GENERAL_TASKS'				=> 'المهام العامة',
	'ACP_GLOBAL_MODERATORS'			=> 'المراقبون العامون',
	'ACP_GLOBAL_PERMISSIONS'		=> 'صلاحيات عامة',
	'ACP_GROUPS'					=> 'المجموعات',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'صلاحيات المجموعات لكل منتدى',
	'ACP_GROUPS_MANAGE'				=> 'إدارة المجموعات',
	'ACP_GROUPS_MANAGEMENT'			=> 'إدارة المجموعات',
	'ACP_GROUPS_PERMISSIONS'		=> 'صلاحيات المجموعات',
	'ACP_GROUPS_POSITION'			=> 'إدارة موقع المجموعات',

	'ACP_ICONS'					=> 'أيقونات الموضوع',
	'ACP_ICONS_SMILIES'			=> 'أيقونات/ابتسامات الموضوع',
	'ACP_INACTIVE_USERS'		=> 'أعضاء غير مفعلين',
	'ACP_INDEX'					=> 'رئيسية الإدارة',

	'ACP_JABBER_SETTINGS'		=> 'إعدادات Jabber',

	'ACP_LANGUAGE'				=> 'إدارة اللغة',
	'ACP_LANGUAGE_PACKS'		=> 'حزم اللغات',
	'ACP_LOAD_SETTINGS'			=> 'إعدادات الحمل',
	'ACP_LOGGING'				=> 'السجلات',

	'ACP_MAIN'					=> 'واجهة لوحة التحكم الرئيسية',

	'ACP_MANAGE_ATTACHMENTS'			=> 'إدارة المرفقات',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'هنا يمكنك عرض وحذف الملفات المرفقة مع المشاركات والرسائل الخاصة.',

	'ACP_MANAGE_EXTENSIONS'		=> 'إدارة الامتدادات',
	'ACP_MANAGE_FORUMS'			=> 'إدارة المنتديات',
	'ACP_MANAGE_RANKS'			=> 'إدارة الرتب',
	'ACP_MANAGE_REASONS'		=> 'إدارة أسباب التقارير/الرفض',
	'ACP_MANAGE_USERS'			=> 'إدارة الأعضاء',
	'ACP_MASS_EMAIL'			=> 'بريد جماعي',
	'ACP_MESSAGES'				=> 'الرسائل',
	'ACP_MESSAGE_SETTINGS'		=> 'إعدادات الرسائل الخاصة',
	'ACP_MODULE_MANAGEMENT'		=> 'إدارة الموديولات',
	'ACP_MOD_LOGS'				=> 'سجلات المشرف',
	'ACP_MOD_ROLES'				=> 'قوالب المشرف',

	'ACP_NO_ITEMS'				=> 'لا يوجد بيانات لعرضها',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'المرفقات الضائعة',

	'ACP_PERMISSIONS'			=> 'الصلاحيات',
	'ACP_PERMISSION_MASKS'		=> 'ظل الصلاحيات',
	'ACP_PERMISSION_ROLES'		=> 'قوالب الصلاحيات',
	'ACP_PERMISSION_TRACE'		=> 'تتبع الصلاحيات',
	'ACP_PHP_INFO'				=> 'معلومات PHP',
	'ACP_POST_SETTINGS'			=> 'إعدادات المشاركة',
	'ACP_PRUNE_FORUMS'			=> 'تهذيب المنتديات',
	'ACP_PRUNE_USERS'			=> 'تهذيب الأعضاء',
	'ACP_PRUNING'				=> 'تهذيب',

	'ACP_QUICK_ACCESS'			=> 'وصول سريع',

	'ACP_RANKS'					=> 'الرتب',
	'ACP_REASONS'				=> 'أسباب التقارير/الرفض',
	'ACP_REGISTER_SETTINGS'		=> 'إعدادات التسجيل',

	'ACP_RESTORE'				=> 'استعادة',

	'ACP_FEED'					=> 'إدارة التغذية Feeds',
	'ACP_FEED_SETTINGS'			=> 'إعدادات التغذية Feeds',

	'ACP_SEARCH'				=> 'إعدادات البحث',
	'ACP_SEARCH_INDEX'			=> 'فهرسة البحث',
	'ACP_SEARCH_SETTINGS'		=> 'إعدادات البحث',

	'ACP_SECURITY_SETTINGS'		=> 'إعدادات الأمان',
	'ACP_SEND_STATISTICS'		=> 'إرسال البيانات الإحصائية',
	'ACP_SERVER_CONFIGURATION'	=> 'إعدادات الخادم',
	'ACP_SERVER_SETTINGS'		=> 'إعدادات الخادم',
	'ACP_SIGNATURE_SETTINGS'	=> 'إعدادات التوقيع',
	'ACP_SMILIES'				=> 'الابتسامات',
	'ACP_STYLE_MANAGEMENT'		=> 'إدارة الاستايل',
	'ACP_STYLES'				=> 'الاستايلات',
	'ACP_STYLES_CACHE'			=> 'حذف الكاش',
	'ACP_STYLES_INSTALL'		=> 'تثبيت الستايلات',

	'ACP_SUBMIT_CHANGES'		=> 'إرسال التغييرات',

	'ACP_TEMPLATES'				=> 'القوالب',
	'ACP_THEMES'				=> 'الثيمات',

	'ACP_UPDATE'					=> 'التحديث',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'صلاحيات الأعضاء لكل منتدى',
	'ACP_USERS_LOGS'				=> 'سجلات الأعضاء',
	'ACP_USERS_PERMISSIONS'			=> 'صلاحيات الأعضاء',
	'ACP_USER_ATTACH'				=> 'المرفقات',
	'ACP_USER_AVATAR'				=> 'الصورة الشخصية',
	'ACP_USER_FEEDBACK'				=> 'المذكرات',
	'ACP_USER_GROUPS'				=> 'المجموعات',
	'ACP_USER_MANAGEMENT'			=> 'إدارة العضو',
	'ACP_USER_OVERVIEW'				=> 'نظرة عامة',
	'ACP_USER_PERM'					=> 'الصلاحيات',
	'ACP_USER_PREFS'				=> 'الإعدادات',
	'ACP_USER_PROFILE'				=> 'الملف الشخصي',
	'ACP_USER_RANK'					=> 'الرتبة',
	'ACP_USER_ROLES'				=> 'قوالب العضو',
	'ACP_USER_SECURITY'				=> 'أمان الأعضاء',
	'ACP_USER_SIG'					=> 'التوقيع',
	'ACP_USER_WARNINGS'				=> 'التحذيرات',

	'ACP_VC_SETTINGS'					=> 'إعدادات مانع السبام (الكابتشا)',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'معاينة صورة الرمز الأمني',
	'ACP_VERSION_CHECK'					=> 'فحص التحديثاث',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'مشاهدة الصلاحيات الإدارية',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'مشاهدة صلاحيات مشرف المنتدى',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'مشاهدة الصلاحيات الخاصة لكل منتدى',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'مشاهدة صلاحيات المراقبة العامة',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'مشاهدة صلاحيات العضو',

	'ACP_WORDS'					=> 'مراقبة الكلمات',

	'ACTION'				=> 'الفعل',
	'ACTIONS'				=> 'الأفعال',
	'ACTIVATE'				=> 'تفعيل',
	'ADD'					=> 'إضافة',
	'ADMIN'					=> 'الإدارة',
	'ADMIN_INDEX'			=> 'رئيسية الإدارة',
	'ADMIN_PANEL'			=> 'لوحة تحكم الإدارة',

	'ADM_LOGOUT'			=> 'تسجيل خروج من لوحة التحكم',
	'ADM_LOGGED_OUT'		=> 'تسجّل الخروج من لوحة التحكم بنجاح',

	'BACK'					=> 'رجوع',

	'COLOUR_SWATCH'			=> 'لوحة الألوان',
	'CONFIG_UPDATED'		=> 'تحدّثت الإعدادات بنجاح',
	'CRON_LOCK_ERROR'		=> 'لم نتمكن من الحصول على قفل cron.',
	'CRON_NO_SUCH_TASK'		=> 'لم يتم العثور على مهمة cron “%s”.',
	'CRON_NO_TASK'			=> 'لا توجد مهام cron تحتاج للتنفيذ الآن.',
	'CRON_NO_TASKS'			=> 'لم يتم العثور على مهام cron.',

	'DEACTIVATE'				=> 'تعطيل',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'المسار الذي أدخلته “%s” غير موجود',
	'DIRECTORY_NOT_DIR'			=> 'المسار الذي أدخلته “%s” ليس بمجلد',
	'DIRECTORY_NOT_WRITABLE'	=> 'المسار الذي أدخلته “%s” لا يمكن الكتابة عليه',
	'DISABLE'					=> 'تعطيل',
	'DOWNLOAD'					=> 'تحميل',
	'DOWNLOAD_AS'				=> 'تحميل كـ',
	'DOWNLOAD_STORE'			=> 'تحميل أو حفظ الملف',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'تستطيع تحميل الملف مباشرة أو حفظه في مجلد <samp>store/</samp>',
	'DOWNLOADS'					=> 'التحميلات',

	'EDIT'					=> 'تعديل',
	'ENABLE'				=> 'تفعيل',
	'EXPORT_DOWNLOAD'		=> 'تحميل',
	'EXPORT_STORE'			=> 'تخزين',

	'GENERAL_OPTIONS'		=> 'خيارات عامة',
	'GENERAL_SETTINGS'		=> 'إعدادات عامة',
	'GLOBAL_MASK'			=> 'ظل الصلاحيات العامة',

	'INSTALL'				=> 'تركيب',
	'IP'					=> 'IP العضو',
	'IP_HOSTNAME'			=> 'عنوان IP أو المستضيف',

	'LOAD_NOTIFICATIONS'			=> 'عرض الإشعارات',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'عرض قائمة الإشعارات في كل الصفحات (عادةً في الترويسة).',
	'LOGGED_IN_AS'			=> 'أنت مسجل دخولك بإسم:',
	'LOGIN_ADMIN'			=> 'ينبغي أن تكون لديك الصلاحيات المناسبة لإدارة المنتدى',
	'LOGIN_ADMIN_CONFIRM'	=> 'لإدارة المنتدى يجب عليك إعادة تعريف نفسك',
	'LOGIN_ADMIN_SUCCESS'	=> 'لقد عرّفتَ نفسك بنجاح وستتابع إلى لوحة تحكم الإدارة حالاً',
	'LOOK_UP_FORUM'			=> 'اختر منتدى',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'يمكنك اختيار أكثر منتدى واحد',

	'MANAGE'				=> 'إدارة',
	'MENU_TOGGLE'			=> 'إخفاء أو عرض القائمة الجانبية',
	'MORE'					=> 'المزيد',
	'MORE_INFORMATION'		=> 'المزيد من المعلومات »',
	'MOVE_DOWN'				=> 'تحريك لأسفل',
	'MOVE_UP'				=> 'تحريك لأعلى',

	'NOTIFY'				=> 'تنبيه',
	'NO_ADMIN'				=> 'ليست لديك صلاحيات إدارة هذا المنتدى',
	'NO_EMAILS_DEFINED'		=> 'لم يوجد أي عنوان بريد إلكتروني صحيح',
	'NO_FILES_TO_DELETE'	=> 'المرفقات المحددة للحذف غير موجودة.',
	'NO_PASSWORD_SUPPLIED'	=> 'تحتاج الى إدخال كلمة المرور للدخول إلى لوحة تحكم الإدارة',

	'OFF'					=> 'معطل',
	'ON'					=> 'مفعل',

	'PARSE_BBCODE'						=> 'تفعيل BBCode',
	'PARSE_SMILIES'						=> 'تفعيل الابتسامات',
	'PARSE_URLS'						=> 'تفعيل الروابط',
	'PERMISSIONS_TRANSFERRED'			=> 'تحولّت الصلاحيات',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'أنت الآن لديك الصلاحيات من %1$s. تستطيع تصفح المنتدى بصلاحيات هذا العضو، ولكن لا يمكنك دخول لوحة التحكم الرئيسية لأن الصلاحيات الإدارية لم تحول. تستطيع <a href="%2$s"><strong> العودة إلى صلاحياتك الأصلية </strong></a> بأي وقت تريد',
	'PROCEED_TO_ACP'					=> '%sالمتابعة إلى لوحة التحكم%s',

	'REMIND'							=> 'تذكير',
	'RESYNC'							=> 'إعادة مزامنة',

	'RUNNING_TASK'			=> 'يتم تنفيذ المهمة: %s.',
	'SELECT_ANONYMOUS'		=> 'اختيار مستخدم مجهول',
	'SELECT_OPTION'			=> 'تحديد خيار',

	'SETTING_TOO_LOW'		=> 'القيمة المدخلة من أجل إعداد “%1$s” جدا ضئيلة، أدنى قيمه مسموحة هي %2$d',
	'SETTING_TOO_BIG'		=> 'القيمة المدخلة من أجل إعداد “%1$s” كبيرة، أقصى قيمة قصوى هي %2$d',
	'SETTING_TOO_LONG'		=> 'القيمة المدخلة من أجل إعداد “%1$s” طويل جدا. أقصى طول مسموح هو %2$d',
	'SETTING_TOO_SHORT'		=> 'القيمة المدخلة من أجل إعداد “%1$s” طويل جدا. أقصى طول مسموح هو %2$d',

	'SHOW_ALL_OPERATIONS'	=> 'عـرض العمليات جميعها',

	'TASKS_NOT_READY'			=> 'المهام الغير جاهزة:',
	'TASKS_READY'			=> 'المهام الجاهزة:',
	'TOTAL_SIZE'			=> 'الحجم الكلي',

	'UCP'					=> 'لوحة تحكم العضو',
	'USERNAMES_EXPLAIN'		=> 'ضع كل اسم مستخدم في سطر منفصل',
	'USER_CONTROL_PANEL'	=> 'لوحة تحكم العضو',

	'WARNING'				=> 'تحذير',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'هذه الصفحة تظهر لك معلومات PHP المثبتة على هذا السيرفر. وتحتوي على معلومات الإضافات التي تحمّلت، الأكواد المسموح تطبيقها والإعدادات الافتراضية. هذه المعلومات تكون مهمة إذا واجهت المشاكل. الرجاء ملاحظة أن بعض شركات الاستضافة تحدد حجم المعلومات التي ينبغي عرضها هنا لأسباب أمنية. يجب عليك ألا تعطي هذه المعلومات لأحد إلا إن طلبت منك من طرف <a href="http://www.phpbbarabia.com/">أعضاء الفريق الرسمي</a> في منتدى الدعم',

	'NO_PHPINFO_AVAILABLE'	=> 'معلومات PHP لا يمكن عرضها. الدالة Phpinfo() تعطلّت لأسباب أمنية',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'هذه لائحة بالنشاطات جميعها التي تم قام بها مديرو المنتدى. يمكنك فرز اللائحة بواسطة اسم المستخدم أو التاريخ أو رقم ال IP أو العمل، إذا كانت لديك الصلاحيات الكافية فيمكنك حذف سجل معين أو تفريغ السجلات كاملة إذا أردت ذلك',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'هذه لائحة بالنشاطات التي قام بها برنامج المنتدى بنفسه، هذه السجلات تزودك بمعلومات قد تساعدك في حل مشاكل معينة، على سبيل المثال عدم إرسال بريد من المنتدى. يمكنك فرز اللائحة بواسطة اسم المستخدم أو التاريخ أو رقم ال IP أو العمل، إذا كانت لديك الصلاحيات الكافية فيمكنك حذف سجل معين أو تفريغ السجلات كاملة إذا أردت ذلك',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'هذه لائحة بالنشاطات كلها المطبقة على المنتديات والمواضيع والمشاركات، بالإضافة إلى الأعمال المطبقة على الأعضاء من المشرفين مثل الحظر. يمكنك فرز اللائحة بواسطة اسم المستخدم أو التاريخ أو رقم ال IP أو العمل، إذا كانت لديك الصلاحيات الكافية فيمكنك حذف سجل معين أو تفريغ السجلات كاملة إذا أردت ذلك',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'هذه لائحة بالنشاطات كلها التي قام بها الأعضاء أو المطبقة على الأعضاء (تقارير، تحذيرات، ملاحظات الأعضاء)',
	'ALL_ENTRIES'				=> 'المدخلات كلها',

	'DISPLAY_LOG'	=> 'عرض مدخلات سابقة منذ',

	'NO_ENTRIES'	=> 'لا يوجد سجلات لهذه الفترة',

	'SORT_IP'		=> 'عنوان IP',
	'SORT_DATE'		=> 'التاريخ',
	'SORT_ACTION'	=> 'العمل المسجل',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'شكرا لاختيارك phpBB كبرنامج الإدارة لمنتداك. هذه الشاشة ستعطيك نظرة عامة وسريعة حول الإحصائيات المتنوعة كلها لمنتداك. الروابط على الجهة اليمنى من الشاشة تسمح لك بالتحكم في كل جانب من جوانب المنتدى. في كل صفحة ستجد تعليمات لكيفية استعمال الأدوات المتوفرة',
	'ADMIN_LOG'					=> 'السجلات الإدارية',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'هذا يعطي لمحة عامة عن آخر خمس أعمال قام بها مديرو المنتدى، النسخة الكاملة من السجلات يمكن الوصول إليها من القائمة المناسبة أو بالضغط على الرابط أدناه',
	'AVATAR_DIR_SIZE'			=> 'حجم مجلد الصور الشخصية',

	'BOARD_STARTED'		=> 'تاريخ بداية المنتدى',
	'BOARD_VERSION'		=> 'اصدار المنتدى',

	'DATABASE_SERVER_INFO'	=> 'خادم قاعدة البيانات',
	'DATABASE_SIZE'			=> 'حجم قاعدة البيانات',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'إعدادات الحمل الزائد للدوال غير صحيحة',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> يجب أن تكون 0 أو 4. يمكنك معرفة الإعداد الحالي في صفحة <samp>PHP information</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'إعدادات ترميز الحروف الشفافة غير صحيحة',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> يجب أن تكون 0. يمكنك معرفة الإعداد الحالي في صفحة <samp>PHP information</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'إعدادات HTTP لتحويل الحروف المدخلة غير صحيحة',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> يجب أن تكون <samp>pass</samp>. يمكنك معرفة الإعداد الحالي في صفحة <samp>PHP information</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'إعدادات HTTP لتحويل الحروف المخرجة غير صحيحة',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> يجب أن تكون <samp>pass</samp>. يمكنك معرفة الإعداد الحالي في صفحة <samp>PHP information</samp>.',

	'FILES_PER_DAY'		=> 'المرفقات لكل يوم',
	'FORUM_STATS'		=> 'إحصائيات المنتدى',

	'GZIP_COMPRESSION'	=> 'ضغط GZip',

	'NO_SEARCH_INDEX'	=> 'خدمة البحث المختارة لا تحتوي على فهرس للبحث.<br />يرجى إنشاء الفهرس لـ “%1$s” في قسم %2$sفهارس البحث%3$s.',
	'NOT_AVAILABLE'		=> 'غير متاح',
	'NUMBER_FILES'		=> 'عدد المرفقـات',
	'NUMBER_POSTS'		=> 'عدد المشاركات',
	'NUMBER_TOPICS'		=> 'عدد المواضيع',
	'NUMBER_USERS'		=> 'عدد الأعضاء',
	'NUMBER_ORPHAN'		=> 'المرفقات الضائعة',

	'PHP_VERSION_OLD'	=> 'نسخة PHP المنصبة على الخادم لم تعد مدعومة من طرف phpBB مزيد من %sتفاصيل%s',

	'POSTS_PER_DAY'		=> 'المشاركات لكل يوم',

	'PURGE_CACHE'			=> 'حذف الملفات المؤقتة',
	'PURGE_CACHE_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف الملفات المؤقتة؟',
	'PURGE_CACHE_EXPLAIN'	=> 'حذف الملفات المؤقتة كلها، هذا يشمل جميع ملفات الاستايل المؤقتة وكذلك الأوامر',
	'PURGE_CACHE_SUCCESS'	=> 'تم حذف الكاش بنجاح.',

	'PURGE_SESSIONS'			=> 'حذف الجلسات كلها',
	'PURGE_SESSIONS_CONFIRM'	=> 'متأكد أنك تريد حذف الجلسات جميعها؟ سيتوجب على الأعضاء كلهم تسجيل الدخول مرة أخرى.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'حذف الجلسات جميعها. بذلك سيجبر الأعضاء كلهم على تسجيل الدخول مرة أخرى بسبب حذف جدول الجلسات.',
	'PURGE_SESSIONS_SUCCESS'	=> 'تم حذف الجلسات بنجاح.',

	'RESET_DATE'					=> 'تصفير تاريخ بداية المنتدى',
	'RESET_DATE_CONFIRM'			=> 'هل أنت متأكد من أنك تريد تصفير تاريخ بداية المنتدى؟',
	'RESET_DATE_SUCCESS'				=> 'تم تصفير تاريخ بداية المنتدى',
	'RESET_ONLINE'					=> 'تصفير أكبر عدد من المستخدمين تواجدو في نفس الوقت',
	'RESET_ONLINE_CONFIRM'			=> 'هل أنت متأكد من أنك تريد تصفير العداد الخاص بوجود أكبر عدد من المستخدمين في نفس الوقت؟',
	'RESET_ONLINE_SUCCESS'				=> 'تم تصفير أكثر عدد من المستخدمين في نفس الوقت',
	'RESYNC_POSTCOUNTS'				=> 'مزامنة عدد المشاركات',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'المشاركات الحالية فقط ستأخد بعين الاعتبار. المشاركات التي تهذبت لن تحتسب',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'هل أنت متأكد من أنك تريد مزامنة عدد المشاركات',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'تمت إعادة مزامنة عدد المشاركة',
	'RESYNC_POST_MARKING'			=> 'مزامنة المواضيع المنقوطة',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'هل أنت متأكد من أنك تريد إعادة مزامنة المواضيع المنقوطة؟',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'سيُحذَف التحديد عن المواضيع كلها في البداية، وبعدها ستتحدّد المواضيع التي شهدت أي نشاط خلال الشهور الستة الماضية بصورة صحيحة',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'تمت إعادة مزامنة المواضيع المنقوطة',
	'RESYNC_STATS'					=> 'مزامنة الإحصائيات',
	'RESYNC_STATS_CONFIRM'			=> 'هل أنت متأكد من أنك تريد إعادة مزامنة الإحصائيات',
	'RESYNC_STATS_EXPLAIN'			=> 'إعادة حساب العدد الكلي للمشاركات والمواضيع والأعضاء والملفات',
	'RESYNC_STATS_SUCCESS'			=> 'تمت إعادة مزامنة الاحصائيات',
	'RUN'							=> 'تشغيل الآن',

	'STATISTIC'					=> 'الإحصائية',
	'STATISTIC_RESYNC_OPTIONS'	=> 'مزامنة أو تصفير الاحصائيات',

	'TIMEZONE_INVALID'	=> 'منطقة التوقيت المختارة غير صحيحة.',
	'TIMEZONE_SELECTED'	=> '(المختارة حالياً)',
	'TOPICS_PER_DAY'	=> 'المواضيع كل يوم',

	'UPLOAD_DIR_SIZE'	=> 'حجم المرفقات المستخدمة',
	'USERS_PER_DAY'		=> 'الأعضاء لكل يوم',

	'VALUE'						=> 'القيمة',
	'VERSIONCHECK_FAIL'			=> 'تعذر الحصول على معلومات أحدث إصدار.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'إعادة فحص الإصدار',
	'VIEW_ADMIN_LOG'			=> 'مشاهدة سجلات الإدارة',
	'VIEW_INACTIVE_USERS'		=> 'مشاهدة الأعضاء الغير مفعلين',

	'WELCOME_PHPBB'			=> 'مرحبا بك في phpBB',
	'WRITABLE_CONFIG'		=> 'ملف config.php حالياً يمكن الكتابة عليه من أي شخص، لذا نحن نوصي وبشدة تغييرَ التصريح الخاص بالملف الى 640 أو على الاقل تصريح 644',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'تاريخ الخمول',
	'INACTIVE_REASON'				=> 'السبب',
	'INACTIVE_REASON_MANUAL'		=> 'تعطل الحساب من طرف المدير',
	'INACTIVE_REASON_PROFILE'		=> 'تغيّرت تفاصيل الملف الشخصي',
	'INACTIVE_REASON_REGISTER'		=> 'عضوية جديدة مسجلة',
	'INACTIVE_REASON_REMIND'		=> 'إجبار العضو على تنشيط حسابه من جديد',
	'INACTIVE_REASON_UNKNOWN'		=> 'غير معروف',
	'INACTIVE_USERS'				=> 'أعضاء غير مفعلين',
	'INACTIVE_USERS_EXPLAIN'		=> 'هذه قائمة بالأعضاء المسجلين لكن حساباتهم غير مفعلة. يمكنك تفعيلها أو حذفها أو تذكير هؤلاء الأعضاء (عن طريق إرسال بريد) إذا أردت',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'هذه لائحة بآخر 10 أعضاء مسلجين لم يفعلوا عضوياتهم. هذه العضويات غير مفعلة إما لأن تفعيل الحساب تم تشغيلها في إعدادات التسجيل وهذه العضويات لم يتم تفعيلها بعد، أو لأن هذه العضويات قد تم تعطيلها. اللائحة الكاملة يمكن الوصول إليها من القائمة المناسبة أو بالضغط على الرابط أدناه حيث يمكنك تفعيل هذه العضويات أو حذفها أو تذكير هؤلاء الأعضاء (عن طريق ارسال بريد) إذا أردت ذلك.',

	'NO_INACTIVE_USERS'	=> 'لا يوجد أعضاء غير مفعلين',

	'SORT_INACTIVE'		=> 'تاريخ الخمول',
	'SORT_LAST_VISIT'	=> 'آخر زيارة',
	'SORT_REASON'		=> 'السبب',
	'SORT_REG_DATE'		=> 'تاريخ التسجيل',
	'SORT_LAST_REMINDER'=> 'آخر تذكير',
	'SORT_REMINDER'		=> 'أُرسل التذكير',

	'USER_IS_INACTIVE'	=> 'العضو غير مفعل',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'الرجاء أرسل المعلومات عن السيرفر الخاص بك وإعدادات ضبط المنتدى إلى phpBB لغرض التحليل الإحصائي. المعلومات كلها التي يُمكن أن تُعرف بك أو بموقعك قد حُذفَت مُسبقاً - البيانات المُرسلة إلينا هي تماماً<strong> مجهولة</strong>. ونحن نبني قراراتنا حول مستقبل إصدارات الـphpBB على هذه المعلومات. وستجد أن الإحصائيات متوفرة للجميع وعلانية. نحن أيضاً نُشارك هذه البيانات مع مشروع PHP، اللغة البرمجية التي منها تبرمجت phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'النقر على الزر بالأسفل سيمكنك من مُشاهدة المتغيرات كلها التي سترسَل.',
	'DONT_SEND_STATISTICS'		=> 'العودة إلى لوحة التحكم ACP إذا لم ترغب في إرسال البيانات الإحصائية إلى phpBB.',
	'GO_ACP_MAIN'				=> 'إذهب إلى الصفحة الأولى للوحة التحكم ACP',
	'HIDE_STATISTICS'			=> 'إخفاء التفاصيل',
	'SEND_STATISTICS'			=> 'إرسال المعلومات الإحصائية',
	'SHOW_STATISTICS'			=> 'إظهار التفاصيل',
	'THANKS_SEND_STATISTICS'	=> 'شكراً لك على إرسال بياناتك.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>أضاف أو عدل صلاحيات العضوية للعضو</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>أضاف أو عدل صلاحيات العضوية للمجموعة</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>أضاف أو عدل صلاحيات الرقابة العامة للعضو</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>أضاف أو عدل صلاحيات الرقابة العامة للمجموعة</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>أضاف أو عدل الصلاحيات الإدارية للعضو</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>أضاف أو عدل الصلاحيات الإدارية للمجموعة</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>أضاف أو عدل المديرين</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>أضاف أو عدل المراقبين العوام</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>أضاف أو عدل صلاحيات المنتدى للعضو</strong> من %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>أضاف أو عدل صلاحيات الإشراف للعضو</strong> من %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>أضاف أو عدل صلاحيات المنتدى للمجموعة</strong> من %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>أضاف أو عدل صلاحيات الإشراف للمجموعة</strong> من %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>أضاف أو عدل مشرفين</strong> من %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>أضاف أو عدل صلاحيات المنتدى</strong> من %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>حذف مدراء</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>حذف مراقبين العوام</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>حذف مشرفين</strong> من %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>حذف صلاحيات مستخدم/مجموعة المنتدى</strong> من %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>تحويل الصلاحيات من</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>استعادة الصلاحيات الأصلية بعد استعمال صلاحيات</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>محاولة فاشلة في الدخول إلى لوحة التحكم</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>النجاح في الدخول إلى لوحة التحكم</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>حذفَت مرفقات العضو بنجاح</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>أضاف أو عدل امتدادات المرفقات</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>حذف امتدادات المرفقات</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>تحديث امتدادات المرفقات</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>أضاف مجموعة امتدادات</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>عدل مجموعة امتدادات</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>حذف مجموعة امتدادات</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>دمج مرفق ضائع إلى المشاركة رقم</strong><br />» %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>حذف ملفات مرفقة ضائعة</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>استثناء عضو من الحظر</strong> لسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>استثناء عنوان IP من الحظر</strong> لسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>استثناء بريد إلكتروني من الحظر</strong> لسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>حظر العضو</strong> بسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>حظر عنوان IP</strong> بسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>حظر بريد إلكتروني</strong> بسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>إلغاء حظر العضو</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>إلغاء حظر عنوان IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>إلغاء حظر البريد الإلكتروني</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>إضافة BBCode جديد</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>تعديل BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>حذف BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>إضافة bot جديد</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>حذف bot </strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>تحديث bot موجود</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>حذف سجلات المدير</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>حذف سجلات الأخطاء</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>حذف سجلات المشرف</strong>',
	'LOG_CLEAR_USER'		=> '<strong>حذف سجلات العضو</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>حذف سجلات العضو</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>تغيير إعدادات المرفقات</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>تغيير إعدادات المصادقة</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>تغيير إعدادات الصورة الشخصية</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>تغيير إعدادات الكوكيز</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>تغيير إعدادات البريد الإلكتروني</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>تغيير خصائص المنتدى</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>تغيير إعدادات الحمل</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>تغيير إعدادات الرسائل الخاصة</strong>',
	'LOG_CONFIG_POST'			=> '<strong>تغيير إعدادات المشاركة</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>تغيير إعدادات تسجيل العضو</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>إعدادات تغذية البيانات المُتغيرة</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>تغيير إعدادات البحث</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>تغيير إعدادات الأمان</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>تغيير إعدادات السيرفرs</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>تغيير إعدادات المنتدى</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>تغيير إعدادات التوقيع</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>تغيير إعدادات مانع السبام (الكابتشا)</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>الموافقة على الموضوع</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>العضو رفع الموضوع</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>حذف المشاركة “%1$s” المكتوبة بواسطة “%2$s” للسبب التالي</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>حذف ظل المواضيع</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>حذف الموضوع “%1$s” المكتوب بواسطة “%2$s” للسبب التالي</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>نسخ الموضوع</strong><br />» من %s',
	'LOG_LOCK'					=> '<strong>غلق الموضوع</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>غلق المشاركة</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>دمج مشاركات</strong> إلى الموضوع<br />» %s',
	'LOG_MOVE'					=> '<strong>نقل الموضوع</strong><br />» من %1$s إلى %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>نقل الموضوع</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>تبليغ الرسائل الشخصية المُغلقة</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>تبليغ الرسائل الشخصية المحذوفة</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>الموافقة على المشاركة</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>عدم الموافقة على المشاركة “%1$s” المكتوبة بواسطة “%3$s” للسبب التالي</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>تعديل المشاركة “%1$s” المكتوب بواسطة “%2$s” للسبب التالي</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>تمت استعادة المشاركة</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>إغلاق تبليغ</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>حذف تبليغ</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>تمت استعادة الموضوع “%1$s” المكتوب بواسطة</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>تم الحذف البسيط للمشاركة “%1$s” المكتوبة بواسطة “%2$s” للسبب التالي</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>تم الحذف البسيط للموضوع “%1$s” المكتوب بواسطة “%2$s” للسبب التالي</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>نقل المشاركات المقسومة</strong><br />» إلى %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>تقسيم المشاركات</strong><br />» من %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>الموافقة على الموضوع</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>تمت استعادة الموضوع</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>عدم الموافقة على الموضوع “%1$s” المكتوب بواسطة “%3$s” للسبب التالي</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>مزامنة عدادات المواضيع</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>تغيير نوع الموضوع</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>فتح الموضوع</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>فتح المشاركة</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>إضافة اسم مستخدم ممنوع</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>حذف اسم مستخدم ممنوع</strong>',

	'LOG_DB_BACKUP'			=> '<strong>انسخ احتياطي لقاعدة البيانات</strong>',
	'LOG_DB_DELETE'			=> '<strong>حذف نسخة احتياطية من قاعدة البيانات</strong>',
	'LOG_DB_RESTORE'		=> '<strong>استعادة نسخة احتياطية من قاعدة البيانات</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>استثناء IP/hostnames من قائمة التحميل</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>إضافة IP/hostnames لقائمة التحميل</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>حذف IP/hostnames من قائمة التحميل</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>خطأ Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>خطأ بريد إلكتروني</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>إنشاء منتدى جديد</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>نسخ تصاريح المنتدى</strong> من %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>حذف المنتدى</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>حذف المنتدى ومنتدياته الفرعية كلها</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>حذف المنتدى ونقل منتدياته الفرعية</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>حذف المنتدى ونقل المشاركات</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>حذف المنتدى والمنتديات الفرعية التابعة له، نقل المشاركات</strong> إلى %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>حذف المنتدى، نقل المشاركات</strong> إلى %1$s <strong>والمنتديات الفرعية</strong> إلى %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>حذف المنتدى والمشاركات الخاصه به</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>حذف المنتدى والمنتديات الفرعية والمشاركات</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>حذف المنتدى والمشاركات، نقل المنتديات الفرعية</strong> إلى %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>تعديل تفاصيل المنتدى</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>نقل منتدى</strong> %1$s <strong>لأسفل</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>نقل منتدى</strong> %1$s <strong>لأعلى</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>مزامنة المنتدى</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>يوجد خطأ عام</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>إنشاء مجموعة مستخدمين جديدة</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>جعل المجموعة “%1$s” افتراضية للأعضاء</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>حذف مجموعة المستخدمين</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>تنزيل رؤساء مجموعة المستخدمين</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>ترقية أعضاء مجموعة إلى رؤساء</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>حذف أعضاء من المجموعة</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>تحديث تفاصيل مجموعة</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>إضافة رؤساء جدد إلى المجموعة</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>إضافة أعضاء جدد إلى المجموعة</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>أعضاء قـُبلوا في المجموعة</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>طلبات الأعضاء للانضمام إلى مجموعة “%1$s” والتي بحاجة للموافقة عليها</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>يوجد خطأ عند إنشاء صورة</strong><br />» خطأ عند %1$s في سطر %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>تفعيل الأعضاء غير المفعلين</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>حذف الأعضاء غير المفعلين</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>إرسال بريد إلكتروني للأعضاء غير المفعلين لتذكيرهم</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>تحويل المنتدى من %1$s إلى phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>تنصيب المنتدى phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>إخفاق في فحص جلسة IP/browser/X_FORWARDED_FOR</strong><br />»IP العضو “<em>%1$s</em>” فحص مقابل الجلسة IP “<em>%2$s</em>”، مستعرض العضو فحص مقابل “<em>%3$s</em>” وجلسة المستعرض مقابل “<em>%4$s</em>” والعضو X_FORWARDED_FOR مقابل “<em>%5$s</em>” فـُحصَت مقابل session X_FORWARDED_FOR مقابل “<em>%6$s</em>”',

	'LOG_JAB_CHANGED'			=> '<strong>تغيير حساب Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>تغيير كلمة مرور Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>تسجيل حساب Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>تغيير إعدادات Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>حذف حزمة اللغة</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>تركيب حزمة اللغة</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>تحديث تفاصيل حزمة اللغة</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>استبدال ملف اللغة</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>إضافة ملف لغة ووضعه في مجلد التخزين</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>إرسال بريد جماعي</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>تغيير الكاتب في الموضوع “%1$s”</strong><br />» من %2$s إلى %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>تعطيل الموديول</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>تفعيل الموديول</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>نقل الموديول لأسفل</strong><br />» %1$s أسفل %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>نقل الموديول لأعلى</strong><br />» %1$s أعلى %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>حذف الموديول</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>إضافة الموديول</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>تعديل الموديول</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>إضافة قالب مدير</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>تعديل قالب مدير</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>حذف قالب مدير</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>إضافة قالب منتدى</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>تعديل قالب منتدى</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>حذف قالب منتدى</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>إضافة قالب مشرف</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>تعديل قالب مشرف</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>حذف قالب مشرف</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>إضافة قالب عضو</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>تعديل قالب عضو</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>حذف قالب عضو</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>غير قادر على فتح %1$s للتنظيف، تأكد من التصاريح.</strong><br />استثناء: %2$s<br />أثر: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>تفعيل حقل الملف الشخصي</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>إضافة حقل الملف الشخصي</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>تعطيل حقل الملف الشخصي</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>تغيير حقل الملف الشخصي</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>حذف حقل الملف الشخصي</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>تهذيب المنتديات</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>تهذيب تلقائي للمنتديات</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>تهذيب تلقائي لظلال المواضيع</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>تعطيل الأعضاء</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>تهذيب الأعضاء وحذف المشاركات</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>تهذيب الأعضاء وإبقاء المشاركات</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>حذف الملفات المؤقتة</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>الجلسات المحذوفة</strong>',

	'LOG_RANK_ADDED'		=> '<strong>إضافة رتبة جديدة</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>حذف الرتبة</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>تحديث الرتبة</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>إضافة سبب للتقارير/الرفض</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>حذف سبب للتقارير/الرفض</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>تحديث سبب للتقارير/الرفض</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>فشل في التحقق من المرجع</strong><br />»المرجع كان “<em>%1$s</em>”. تم رفض الطلب وإغلاق الجلسة.',
	'LOG_RESET_DATE'			=> '<strong>تصفير تاريخ بداية المنتدى</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>تصفير أكبر عدد تواجد للأعضاء</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>مزامنة إحصائيات الملفات</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>مزامنة عدد مشاركات العضو</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>مزامنة المواضيع المنقوطة</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>مزامنة إحصائيات المشاركات والمواضيع والأعضاء</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>إنشاء فهرس بحث لـ</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>حذف فهرس البحث لـ</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>خطأ Sphinx</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>إضافة استايل جديد</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>حذف الاستايل</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>تعديل الاستايل</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>تصدير الاستايل</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>إضافة قالب جديد إلى قاعدة البيانات</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>إضافة قالب جديد إلى نظام الملفات</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>حذف الملفات المؤقتة لملفات القالب <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>حذف القالب</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>تعديل القالب<em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>تعديل تفاصيل القالب</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>تصدير القالب</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>تحديث القالب</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>إضافة ثيم جديد إلى قاعدة البيانات</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>إضافة ثيم جديد إلى نظام الملفات</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>حذف الثيم</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>تعديل تفاصيل الثيم</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>تعديل الثيم<em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>تعديل الثيم <em>%1$s</em></strong><br />» الملف المعدل <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>تصدير الثيم</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>تحديث الثيم</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>تحديث قاعدة البيانات من الإصدار %1$s إلى الإصدار %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>تحديث phpBB من الإصدار %1$s إلى الإصدار %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>تفعيل العضو</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>حظر مستخدم من إدارة الأعضاء</strong> بسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>حظر عنوان IP من إدارة الأعضاء</strong> بسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>حظر بريد إلكتروني من إدارة الاعضاء</strong> بسبب “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>حذف العضو</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>حذف المرفقات الخاصة بالعضو كلها</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>حذف الصورة الشخصية للعضو</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>أفرغ صندوق الصادر للعضو</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>حذف مشاركات العضو كلها</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>حذف توقيع العضو</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>تعطيل العضو</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>نقل مشاركات العضو</strong><br />» “%1$s” إلى “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>تغيير كلمة مرور العضو</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>إجبار العضو على إعادة تفعيل حسابه</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>حذف العلم المُسجل الجديد من العضو</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>العضو “%1$s” غير بريده</strong><br />» من “%2$s” إلى “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>تغيير اسم المستخدم</strong><br />» من “%1$s” إلى “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>تحديث تفاصيل العضو</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>تفعّل حساب العضو</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>حـُذفَت الصورة الشخصية للعضو</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>حـُذفَت توقيع العضو</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>إضافة تعليقات للعضو</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>تعطّل حساب العضو</strong>',
	'LOG_USER_LOCK'				=> '<strong>العضو أغلق موضوعه</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>نقل المشاركات كلها إلى المنتدى</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>إجبار العضو على تفعيل حسابه</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>العضو فتح موضوعه</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>إضافة تحذير للعضو</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>التحذير الآتي أُصدِر لهذا العضو</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>تغيير المجموعة الافتراضية للعضو</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>إعفاء العضو من رئاسة المجموعة</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>انضمام العضو إلى المجموعة</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>انضم العضو إلى المجموعة ويحتاج إلى الموافقة عليه</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>قدم العضو استقالته من المجموعة</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>حذف التحذير للعضو</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>تم حذف تحذير العضو</strong><br />» %1$s',			// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2 => '<strong>تم حذف تحذيرا العضو</strong><br />» %1$s', 		// Plural Rule 2 - by TheIlluminative for phpBBArabia - Example: '<strong>Deleted 2 user warnings</strong><br />» username'
		3 => '<strong>تم حذف %2$d تحذيرات للعضو</strong><br />» %1$s',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4 => '<strong>تم حذف %2$d تحذيراً للعضو</strong><br />» %1$s',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5 => '<strong>تم حذف %2$d تحذير للعضو</strong><br />» %1$s',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>حذف التحذيرات للعضو كلها</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>إضافة كلمة ممنوعة</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>حذف كلمة ممنوعة</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>تعديل كلمة ممنوعة</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>تفعيل الإضافة</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>تعطيل الإضافة</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>حذف بيانات الإضافة</strong><br />» %s',
));
