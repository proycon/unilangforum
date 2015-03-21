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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'هنا يمكنك التحكم في الخواص الأساسية للمرفقات والفئات الخاصة.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'هنا يمكنك إضافة أو حذف أو تعديل أو تعطيل مجموعات الامتدادات. خيارات أخرى تشمل تخصيص فئة خاصة لهم، وتغيير آلية التنزيل وتعريف للأيقونات التي ستعرَض أمام المرفق الذي ينتمي إلى المجموعة.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'هنا يمكنك التحكم بالامتدادات المسموحة. لتفعيل امتداد خاص بك، يرجى الرجوع إلى لوحة إدارة مجموعات الامتداد. نحن ننصحك وبشدة بعدم السماح بامتدادت السكربتات (مثل <code>php</code>، <code>php3</code>، <code>php4</code>، <code>phtml</code>، <code>pl</code>، <code>cgi</code>، <code>py</code>، <code>rb</code>، <code>asp</code>، <code>aspx</code>، إلخ…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'هنا يمكنك رؤية الملفات المرفقة الضائعة، هذا يحدث غالباً إذا أرفق العضو ملفاً ولم يرسل الموضوع بعد ذلك، يمكنك إما حذف هذه المرفقات أو إضافتها لمشاركات موجودة فعلياً. إذا أردت إضافتها لمشاركة فيتوجب عليك معرفة الرقم الخاص بهذه المشاركة، وعليك بتحديد هذا الرقم شخصياً وبصورة يدوية. هذا سيضيف المرفق للمشاركة التي اخترتها.',
	'ADD_EXTENSION'						=> 'إضافة امتداد',
	'ADD_EXTENSION_GROUP'				=> 'إضافة مجموعة امتدادات',
	'ADMIN_UPLOAD_ERROR'				=> 'حدثت مشكلة في محاولة إرفاق الملف: "%s"',
	'ALLOWED_FORUMS'					=> 'المنتديات المسموحة',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'السماح لهذا الامتداد في المنتديات المختارة أو جميع المنتديات.',
	'ALLOWED_IN_PM_POST'				=> 'مسموح',
	'ALLOW_ATTACHMENTS'					=> 'السماح للمرفقات',
	'ALLOW_ALL_FORUMS'					=> 'السماح لكل المنتديات',
	'ALLOW_IN_PM'						=> 'السماح في الرسائل الخاصة',
	'ALLOW_PM_ATTACHMENTS'				=> 'اسمح بالمرفقات في الرسائل الخاصة',
	'ALLOW_SELECTED_FORUMS'				=> 'فقط المنتديات المحددة في الأسفل',
	'ASSIGNED_EXTENSIONS'				=> 'الامتدادات المضافة',
	'ASSIGNED_GROUP'					=> 'مجموعة الامتداد المضافة',
	'ATTACH_EXTENSIONS_URL'				=> 'الامتدادات',
	'ATTACH_EXT_GROUPS_URL'				=> 'مجموعات الامتدادات',
	'ATTACH_ID'							=> 'رقم',
	'ATTACH_MAX_FILESIZE'				=> 'الحجم الأقصى للملف',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'الحجم الأقصى لكل ملف. إذا كانت القيمة 0، فإن حجم الملف المرفق سيكون محدودا فقط بإعدادات PHP لديك.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'الحجم الأقصى للملفات في الرسائل الخاصة',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'المساحة القصوى المتاحة لكل عضو في الرسائل الخاصة، القيمة صفر تعني قيمة غير محدودة.',
	'ATTACH_ORPHAN_URL'					=> 'المرفقات الضائعة',
	'ATTACH_POST_ID'					=> 'رقم المشاركة',
	'ATTACH_POST_TYPE'					=> 'نوع المشاركة',
	'ATTACH_QUOTA'						=> 'المساحة الكلية للمرفقات',
	'ATTACH_QUOTA_EXPLAIN'				=> 'أقصى مساحة يمكن إستخدامها لخاصية المرفقات لكل المنتدى، القيمة صفر تعني قيمة غير محدودة.',
	'ATTACH_TO_POST'					=> 'أرفق الملف للمشاركة',

	'CAT_FLASH_FILES'			=> 'ملفات الفلاش',
	'CAT_IMAGES'				=> 'الصور',
	'CAT_QUICKTIME_FILES'		=> 'ملفات Quicktime',
	'CAT_RM_FILES'				=> 'ملفات RealMedia',
	'CAT_WM_FILES'				=> 'ملفات Windows Media',
	'CHECK_CONTENT'				=> 'فحص ملفات المرفقات',
	'CHECK_CONTENT_EXPLAIN'		=> 'بعض المتصفحات يمكن خداعها لتفترض نوعاً مختلفاً للملف المرفق، هذا الخيار للتأكد من أن ملفات كهذه ستُرفض.',
	'CREATE_GROUP'				=> 'إضافة مجموعة جديدة',
	'CREATE_THUMBNAIL'			=> 'عمل مصغرة',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'عمل مصغرة في كل الحالات الممكنة.',

	'DEFINE_ALLOWED_IPS'			=> 'تحديد IPs/hostnames المسموحة',
	'DEFINE_DISALLOWED_IPS'			=> 'تحديد IPs/hostnames الممنوعة',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'لإضافة عدة IPs أو hostnames أضف كل واحد في سطر جديد. لتعريف مجموعة من عناوين IP أفصل بين البداية والنهاية بـ (-)، لتعريف ذو نطاق واسع استخدم "*".',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'يمكنك حذف أو استبعاد عدة عناوين IP مرة واحدة باستخدام الفأرة والكيبورد معاً ،عناوين IP المختارة ستكون بالخلفية الزرقاء.',
	'DISPLAY_INLINED'				=> 'عرض الصورة ضمن الموضوع',
	'DISPLAY_INLINED_EXPLAIN'		=> 'إذا اخترت لا ستُعرَض الصور في المواضيع كوصلة فقط.',
	'DISPLAY_ORDER'					=> 'ترتيب عرض المرفقات',
	'DISPLAY_ORDER_EXPLAIN'			=> 'ترتيب المرفقات بواسطة الوقت.',

	'EDIT_EXTENSION_GROUP'			=> 'تعديل مجموعة امتدادات',
	'EXCLUDE_ENTERED_IP'			=> 'فعل هذه لاستبعاد IP/hostname المدخل.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'استبعاد IP من IPs/hostnames المسموحة.',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'استبعاد IP من IPs/hostnames الغير مسموحة.',
	'EXTENSIONS_UPDATED'			=> 'تحدّثت الامتدادات بنجاح.',
	'EXTENSION_EXIST'				=> 'الامتداد %s موجود مسبقاً.',
	'EXTENSION_GROUP'				=> 'مجموعة الامتدادات',
	'EXTENSION_GROUPS'				=> 'مجموعات الامتدادات',
	'EXTENSION_GROUP_DELETED'		=> 'حذِفَت مجموعة الامتدادات بنجاح.',
	'EXTENSION_GROUP_EXIST'			=> 'مجموعة الامتدادات %s موجودة مسبقاً.',

	'EXT_GROUP_ARCHIVES'			=> 'الأرشيفات',
	'EXT_GROUP_DOCUMENTS'			=> 'المستندات',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'الملفات القابلة للتحميل',
	'EXT_GROUP_FLASH_FILES'			=> 'ملفات الفلاش',
	'EXT_GROUP_IMAGES'				=> 'الصور',
	'EXT_GROUP_PLAIN_TEXT'			=> 'مستند نصي',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'ملفات Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'ملفات Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'ملفات Windows Media',

	'FILES_GONE'			=> 'بعض المرفقات التي اخترتها للحذف غير موجودة. ربما تم حذفهم من قبل بالفعل. المرفقات التي تم إيجادها تم حذفها.',
	'FILES_STATS_WRONG'		=> 'إحصائيات ملفاتك محتمل أن تكون غير دقيقة وتحتاج إلى إعادة مزامنه. القيم الحقيقية: عدد المرفقات = %1$d، المساحة الكلية للمرفقات = %2$s.<br />اضغط %3$sهنا%4$s لإعادة مزامنتها.',

	'GO_TO_EXTENSIONS'		=> 'الذهاب للوحة التحكم بالامتدادات',
	'GROUP_NAME'			=> 'اسم المجموعة',

	'IMAGE_LINK_SIZE'			=> 'أبعاد رابط الصورة',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'لعرض الصور المرفقة كرابط نصي إذا كانت أبعادها أكبر من هذا الحد، لتعطيل هذه الخاصية استخدم 0 بكسل في 0 بكسل.',
	'IMAGICK_PATH'				=> 'مكان Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'الرابط الكامل لبرنامج التحويل imagemagick، مثال. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'أكبر عدد من المرفقات لكل مشاركة',
	'MAX_ATTACHMENTS_PM'			=> 'أكبر عدد من المرفقات لكل رسالة خاصة',
	'MAX_EXTGROUP_FILESIZE'			=> 'أكبر حجم للملف',
	'MAX_IMAGE_SIZE'				=> 'أقصى أبعاد للصورة',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'هنا تحدد الأبعاد الأقصى للصور المرفقة. لتعطيل هذه الخاصية استخدم 0 بكسل في 0 بكسل.',
	'MAX_THUMB_WIDTH'				=> 'أكبر حجم للمصغرات بالبكسل',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'المصغرات لن تتجاوز العرض المدرج هنا.',
	'MIN_THUMB_FILESIZE'			=> 'أصغر حجم للمصغرات',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'لا تقم بعمل مصغرات للصور التي تملك حجماً أقل من هذا.',
	'MODE_INLINE'					=> 'ضمني',
	'MODE_PHYSICAL'					=> 'خارجي',

	'NOT_ALLOWED_IN_PM'			=> 'مسموح فقط في المشاركات',
	'NOT_ALLOWED_IN_PM_POST'	=> 'غير مسموح',
	'NOT_ASSIGNED'				=> 'غير محدد',
	'NO_ATTACHMENTS'			=> 'لم يتم إيجاد مرفقات في هذه الفترة.',
	'NO_EXT_GROUP'				=> 'لا شيء',
	'NO_EXT_GROUP_NAME'			=> 'لم تدخل اسم المجموعة',
	'NO_EXT_GROUP_SPECIFIED'	=> 'لم يحدّد أية مجموعة امتداد.',
	'NO_FILE_CAT'				=> 'لا شيء',
	'NO_IMAGE'					=> 'لا يوجد صورة',
	'NO_THUMBNAIL_SUPPORT'		=> 'خاصية إنشاء المصغرات غير متوفرة، لم يُعثَر على امتداد GD أو أنه لم يعثَر على imagemagick مثبت.',
	'NO_UPLOAD_DIR'				=> 'المجلد الذي خصصته للتحميل غير موجود.',
	'NO_WRITE_UPLOAD'			=> 'المجلد المخصص للتحميل لا يمكن الكتابة عليه، الرجاء إعطاء الملف الصلاحيات للكتابة عليه.',

	'ONLY_ALLOWED_IN_PM'	=> 'مسموح فقط في الرسائل الخاصة',
	'ORDER_ALLOW_DENY'		=> 'مسموح',
	'ORDER_DENY_ALLOW'		=> 'مرفوض',

	'REMOVE_ALLOWED_IPS'		=> 'حذف أو إلغاء استبعاد الـ IPs/hostnames <em>المسموحة</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'حذف أو إلغاء استبعاد الـ IPs/hostnames <em>الغير مسموحة</em>',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'هل أنت متأكد أنك تريد إعادة مزامنة إحصائيات الملفات؟',

	'SEARCH_IMAGICK'				=> 'البحث عن Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'قائمة السماح/الرفض',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'تغيير الخواص الافتراضية عند التحميل الآمن في قائمة الرفض والسماح، <strong>القائمة البيضاء</strong> (السماح) أو <strong>القائمة السوداء</strong> (الرفض).',
	'SECURE_DOWNLOADS'				=> 'تفعيل التحميل الآمن',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'بتفعيل هذا الخيار سيكون التحميل مقصوراً على الـ IP’s/hostnames التي تحددها أنت.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'التحميل الآمن غير مفعل. الخواص التالية ستكون متاحة عند تفعيله.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'تحدّثت قائمة IP بنجاح',
	'SECURE_EMPTY_REFERRER'			=> 'السماح بمرجع فارغ',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'التحميلات الآمنة تعتمد على المرجع، هل تسمح بهذه التحميلات التي تحذف المرجع؟',
	'SETTINGS_CAT_IMAGES'			=> 'خواص قسم الصور',
	'SPECIAL_CATEGORY'				=> 'قسم خاص',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'الأقسام الخاصة تختلف بطريقة عرضها في المشاركات.',
	'SUCCESSFULLY_UPLOADED'			=> 'تم الرفع بنجاح.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'أُضيفَت مجموعة الامتدادات بنجاح.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'حُـدّثت مجموعة الامتدادات بنجاح.',

	'UPLOADING_FILES'				=> 'رفع الملفات',
	'UPLOADING_FILE_TO'				=> 'رفع الملف  “%1$s” للمشاركة رقم %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'ليس لديك الصلاحيات للرفع في المنتدى “%s”.',
	'UPLOAD_DIR'					=> 'مجلد التحميل',
	'UPLOAD_DIR_EXPLAIN'			=> 'مجلد تخزين المرفقات. يجب مراعاة أنك إن غيرت هذا المجلد ينبغي عليك نقل الملفات المرفقة مسبقاً يدوياً للمجلد الجديد.',
	'UPLOAD_ICON'					=> 'أيقونة التحميل',
	'UPLOAD_NOT_DIR'				=> 'المكان الذي خصصته للتحميل لا يبدو أنه مجلد فعلياً.',
));
