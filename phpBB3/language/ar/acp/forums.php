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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'عمر التهذيب التلقائي للمشاركات',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'عدد الأيام التي ستمر بعد آخر مشاركة لتـُحذَف الموضوع عندها',
	'AUTO_PRUNE_FREQ'			=> 'تكرار التهذيب التلقائي',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'الوقت بالأيام بين عمليات التهذيب',
	'AUTO_PRUNE_VIEWED'			=> 'التهذيب التلقائي للمشاركات بعد آخر مشاهدة',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'عدد الأيام التي ستمر على آخر مشاهدة للموضوع قبل حذفه',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'تكرار التهذيب التلقائي لظلال المواضيع',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'عمر التهذيب التلقائي لظلال المواضيع',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'عدد الأيام التي ستمر على ظلال المواضيع قبل حذفها.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'الوقت بالأيام بين عمليات التهذيب.',

	'CONTINUE'						=> 'استمرار',
	'COPY_PERMISSIONS'				=> 'نسخ الصلاحيات من',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'لسهولة ضبط التصاريح لمنتدى جديد، تستطيع نسخ التصاريح من منتدى موجود.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'بمجرد إنشائه، هذا المنتدى سيحمل صلاحيات المنتدى نفسه الذي اخترته هنا. إذا لم تختر أي اختيار هنا فالمنتدى الجديد الذي ستنشؤه لن يكون ظاهراً حتى تحدّد صلاحياته',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'إذا اخترت نسخ الصلاحيات، هذا المنتدى سيحمل نفس صلاحيات المنتدى الذي اخترته هنا. وستستَبدَل الصلاحيات القديمة التي أعطيتها لهذا المنتدى بصلاحيات المنتدى الذي اخترته هنا. إذا لم تختر أي منتدى فسيتم الاحتفاظ بالصلاحيات الحالية',
	'COPY_TO_ACL'					=> 'اختياري، تستطيع أيضاً %sضبط تصاريح جديدة%s لهذا المنتدى.',
	'CREATE_FORUM'					=> 'إنشاء منتدى جديد',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'حذف المحتويات أو نقلها إلى المنتدى',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'حذف المنتديات الفرعية أو نقلها إلى المنتدى',
	'DEFAULT_STYLE'						=> 'الاستايل الافتراضي',
	'DELETE_ALL_POSTS'					=> 'حذف المشاركات',
	'DELETE_SUBFORUMS'					=> 'حذف المنتديات الفرعية والمشاركات',
	'DISPLAY_ACTIVE_TOPICS'				=> 'تفعيل المواضيع النشطة',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'إذا اخترت نعم فالمواضيع النشطة بالمنتديات الفرعية ستظهر أسفل هذا القسم',

	'EDIT_FORUM'					=> 'تعديل منتدى',
	'ENABLE_INDEXING'				=> 'تفعيل فهرسة البحث',
	'ENABLE_INDEXING_EXPLAIN'		=> 'إذا اخترت نعم فالمشاركات الموجودة في هذا المنتدى ستفهرس للبحث',
	'ENABLE_POST_REVIEW'			=> 'تفعيل مراجعة المشاركة',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'إذا اخترت نعم فسيتمكن الأعضاء من مراجعة مشاركاتهم إذا أُرسِلَت ردود جديدة إلى الموضوع بينما هم يكتبون ردهم. ينبغي تعطيل هذه الخاصية في منتديات الدردشة',
	'ENABLE_QUICK_REPLY'			=> 'تفعيل الرد السريع',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'إذا اخترت "نعم" سيتمكن الأعضاء من رؤية صندوق الرد السريع لهذا المنتدى. ولكن إذا كان الخيار العام للرد السريع مُعطل أو المنتدى لايمكن المشاركة فيه، فإن صندوق الرد السريع لن يظهر للأعضاء، حتى لو اخترت "نعم" هنا.',
	'ENABLE_RECENT'					=> 'عرض المواضيع النشطة',
	'ENABLE_RECENT_EXPLAIN'			=> 'إذا اخترت نعم فالمواضيع الموجودة في هذا المنتدى ستظهر في لائحة المواضيع النشطة',
	'ENABLE_TOPIC_ICONS'			=> 'إتاحة أيقونات المواضيع',

	'FORUM_ADMIN'						=> 'إدارة المنتدى',
	'FORUM_ADMIN_EXPLAIN'				=> 'في phpBB3 كل شئ عبارة عن منتدى. القسم هو عبارة عن نوع خاص من المنتدى. كل منتدى يمكن أن يحتوي على عدد غير نهائي من المنتديات الفرعية وتحديد ما إذا كان كل واحد يمكن المشاركة فيه أو لا ( بمعنى أن يظهر كـ قسم في النظام القديم ). هنا تستطيع إضافة أو تعديل أو حذف أو غلق أو فتح منتديات محددة كما يمكنك تغيير إعدادات إضافية أخرى. إذا كانت المواضيع والمشاركات قد خرجت عن المطابقة تستطيع إعادة مزامنة المنتدى. <strong>سوف تحتاج الى نسخ أو أعطاء صلاحيات اولوية للمنتديات الجديدة التي أنشأت لكي تعرَض.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'تفعيل التهذيب التلقائي',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'تهذيب المنتديات من المواضيع، اكتب خيارات التكرار/العمر بالأسفل',
	'FORUM_CREATED'						=> 'أنشِأ المنتدى بنجاح',
	'FORUM_DATA_NEGATIVE'				=> 'خيارات التهذيب لا يمكن أن تكون سالبة',
	'FORUM_DESC_TOO_LONG'				=> 'وصف المنتدى كبير جداً، يجب أن يكون أقل من 4000 حرفاً',
	'FORUM_DELETE'						=> 'حذف المنتدى',
	'FORUM_DELETE_EXPLAIN'				=> 'النموذج بالأسفل يسمح لك بحذف المنتدى. إذا كان المنتدى قابلاً للكتابة فيمكنك تحديد أين تريد وضع المواضيع كلها(أو المنتديات) التي يحتوي عليها',
	'FORUM_DELETED'						=> 'حذفَت المنتدى بنجاح',
	'FORUM_DESC'						=> 'الوصف',
	'FORUM_DESC_EXPLAIN'				=> 'إن أدخلت أي أكواد HTML هنا فسوف يتم عرضها كما هي',
	'FORUM_EDIT_EXPLAIN'				=> 'النموذج بالأسفل سيسمح لك بضبط المنتدى. يرجى ملاحظة أن التحكم في الإشراف والمشاركة تضبَط من صلاحيات المنتدى لكل عضو أو مجموعة على حدة',
	'FORUM_IMAGE'						=> 'صورة المنتدى',
	'FORUM_IMAGE_EXPLAIN'				=> 'المكان، تبعاً للمجلد الرئيسي للمنتدى، لعرض صورة إضافية لهذا المنتدى',
	'FORUM_IMAGE_NO_EXIST'				=> 'صورة المنتدى المحددة لم توجد',
	'FORUM_LINK_EXPLAIN'				=> 'الرابط كاملاً (محتوياً البروتوكول، مثل: <samp>http://</samp>) للمكان الذي تريد أن يذهب إليه الأعضاء عند الضغط على هذا المنتدى، مثال: <samp>http://www.phpbbarabia.com/</samp>',
	'FORUM_LINK_TRACK'					=> 'تسجيل تحويلات الرابط',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'تسجيل عدد مرات الضغط على رابط المنتدى',
	'FORUM_NAME'						=> 'اسم المنتدى',
	'FORUM_NAME_EMPTY'					=> 'يجب عليك إدخال اسم لهذا المنتدى',
	'FORUM_PARENT'						=> 'المنتدى الأب',
	'FORUM_PASSWORD'					=> 'كلمة مرور المنتدى',
	'FORUM_PASSWORD_CONFIRM'			=> 'تأكيد كلمة المرور',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'ستحتاجها فقط إن كنت قد وضعت كلمة مرور للمنتدى',
	'FORUM_PASSWORD_EXPLAIN'			=> 'تعريف كلمة المرور لهذا المنتدى، استعمال نظام الصلاحيات اختياري',
	'FORUM_PASSWORD_UNSET'				=> 'حذف كلمة مرور المنتدى',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'اضغط هنا إا أردت حذف كلمة مرور المنتدى',
	'FORUM_PASSWORD_OLD'				=> 'كلمة مرور المنتدى تستخدم تشفير قديم وينبغي عليك تغييرها',
	'FORUM_PASSWORD_MISMATCH'			=> 'كلمات المرور التي أدخلتها غير متطايقة',
	'FORUM_PRUNE_SETTINGS'				=> 'إعدادات تهذيب المنتدى',
	'FORUM_PRUNE_SHADOW'				=> 'تفعيل التهذيب التلقائي لظلال المواضيع',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'تهذيب المنتديات من ظلال المواضيع المنقولة، قم بضبط زمن التكرار/التاريخ بأسفل.',
	'FORUM_RESYNCED'					=> 'أعيدَت مزامنة المنتدى "%s" بنجاح',
	'FORUM_RULES_EXPLAIN'				=> 'قوانين المنتدى ستعرض في صفحات هذا المنتدى كلها',
	'FORUM_RULES_LINK'					=> 'الرابط إلى قوانين المنتدى',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'تستطيع إدخال رابط إلى صفحة/مشاركة تحتوي على قوانين المنتدى. هذا الخيار سيلغي نص القوانين الذي أدخلته',
	'FORUM_RULES_PREVIEW'				=> 'معاينة قوانين المنتدى',
	'FORUM_RULES_TOO_LONG'				=> 'قوانين المنتدى يجب أن تكون أقل من 4000 حرف',
	'FORUM_SETTINGS'					=> 'إعدادات المنتدى',
	'FORUM_STATUS'						=> 'حالة المنتدى',
	'FORUM_STYLE'						=> 'ستايل المنتدى',
	'FORUM_TOPICS_PAGE'					=> 'المواضيع في كل صفحة',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'إذا اخترت قيمة غير 0 ستستـَبدل الإعدادات الافتراضية للمواضيع في كل صفحة',
	'FORUM_TYPE'						=> 'نوع المنتدى',
	'FORUM_UPDATED'						=> 'تحدّث المنتدى بنجاح',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'تريد تغيير منتدى مشاركات يحتوي على منتديات فرعية الى رابط. يرجى تحويل المنتديات الفرعية إلى خارج هذا المنتدى قبل المتابعة، لأنه عند تحويل المنتدى الى رابط لن تقوم بمشاهدة المنتديات الفرعية المتصلة بهذا المنتدى',

	'GENERAL_FORUM_SETTINGS'	=> 'الإعدادات العامة للمنتدى',

	'LINK'						=> 'رابط',
	'LIST_INDEX'				=> 'عرض المنتديات الفرعية أسفل المنتدى الأصل',
	'LIST_INDEX_EXPLAIN'		=> 'عرض هذا المنتدى في الصفحة الرئيسية أسفل المنتدى الأصل',
	'LIST_SUBFORUMS'			=> 'عرض المنتديات الفرعية تحت هذا المنتدى',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'عرض المنتديات الفرعية تحت هذا القسم في الصفحة الرئيسية أو أي مكان يوجد فيه هذا القسم إذا كان خيار " عرض المنتديات الفرعية أسفل المنتدى الأصل " مفعل ',
	'LOCKED'					=> 'مغلق',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'المنتدى الذي حددته لنقل المشاركات غير قابل للكتابة. الرجاء اختيار منتدى قابل للكتابة',
	'MOVE_POSTS_TO'					=> 'نقل المشاركات إلى',
	'MOVE_SUBFORUMS_TO'				=> 'نقل المنتديات الفرعية إلى',

	'NO_DESTINATION_FORUM'			=> 'لم تحدد منتدى لنقل المحتويات إليه',
	'NO_FORUM_ACTION'				=> 'لم يتعرّف نشاط ما حدث لمحتويات المنتدى',
	'NO_PARENT'						=> 'بدون أصل',
	'NO_PERMISSIONS'				=> 'لا تنسخ الصلاحيات',
	'NO_PERMISSION_FORUM_ADD'		=> 'ليست لديك الصلاحيات الكافية لإضافة منتدى جديد',
	'NO_PERMISSION_FORUM_DELETE'	=> 'ليست لديك الصلاحيات الكافية لحذف المنتديات',

	'PARENT_IS_LINK_FORUM'		=> 'المنتدى الأصل الذي حددته عبارة عن رابط. المنتديات الروابط لا يمكن أن تحميل منتديات فرعية تحتها، رجاءً اختر قسما أو منتدى كمنتدى أصلي',
	'PARENT_NOT_EXIST'			=> 'المنتدى الأصل غير موجود',
	'PRUNE_ANNOUNCEMENTS'		=> 'تهذيب الإعلانات',
	'PRUNE_STICKY'				=> 'تهذيب المواضيع المثبتة',
	'PRUNE_OLD_POLLS'			=> 'تهذيب الاستفتاءات القديمة',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'حذف مواضيع الاستفتاء التي لم يشارك في تصويتها أحد بعد مدة من المشاركة - بالأيام-',

	'REDIRECT_ACL'	=> 'الآن تستطيع %sتحديد الصلاحيات%s لهذا المنتدى',

	'SYNC_IN_PROGRESS'			=> 'جاري مزامنة المنتدى',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'تتزامن الآن المواضيع %1$d/%2$d',

	'TYPE_CAT'			=> 'قسم',
	'TYPE_FORUM'		=> 'منتدى',
	'TYPE_LINK'			=> 'رابط',

	'UNLOCKED'			=> 'مفتوح',
));
