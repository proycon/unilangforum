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
	'ACTION'				=> 'العمل',
	'ACTION_NOTE'			=> 'مفكرة أعمال',
	'ADD_FEEDBACK'			=> 'إضافة إعلام',
	'ADD_FEEDBACK_EXPLAIN'	=> 'إذا أردت إضافة تبليغ عن هذا المستخدم فضلاً عبّئ النموذج الآتي، استخدم فقط الكتابة النصية اكوادHTML  و BBCode  غير مسموح بها',
	'ADD_WARNING'			=> 'إضافة تحذير',
	'ADD_WARNING_EXPLAIN'	=> 'لإرسال تحذير لهذا المستخدم رجاءً عبّئ النموذج الآتي. استخدم فقط الكتابة النصية اكواد HTML و BBCode غير مسموح بها',
	'ALL_ENTRIES'			=> 'الإدخالات كلها',
	'ALL_NOTES_DELETED'		=> 'تم حذف مذكرات المستخدمين كلها بنجاح',
	'ALL_REPORTS'			=> 'التبليغات كلها',
	'ALREADY_REPORTED'		=> 'لقد بُلِّغ عن هذه المشاركة من قبل',
	'ALREADY_REPORTED_PM'	=> 'لقد تم التليغ عن هذه الرسالة الخاصة من قبل.',
	'ALREADY_WARNED'		=> 'لقد حُذّر العضو نتيجة لهذه المشاركة من قبل',
	'APPROVE'				=> 'الموافقة',
	'APPROVE_POST'			=> 'الموافقة على المشاركة',
	'APPROVE_POST_CONFIRM'	=> 'هل أنت متأكد من الموافقة على هذه المشاركة؟',
	'APPROVE_POSTS'			=> 'الموافقة على المشاركات',
	'APPROVE_POSTS_CONFIRM'	=> 'هل أنت متأكد من الموافقة على المشاركات المحددة؟',
	'APPROVE_TOPIC'			=> 'الموافقة على الموضوع',
	'APPROVE_TOPIC_CONFIRM'	=> 'هل أنت متأكد أنك تريد الموافقة على هذا الموضوع؟',
	'APPROVE_TOPICS'		=> 'الموافقة على المواضيع',
	'APPROVE_TOPICS_CONFIRM'=> 'هل أنت متأكد أنك تريد الموافقة على المواضيع المحددة؟',

	'CANNOT_MOVE_SAME_FORUM'=> 'لا يمكنك نقل الموضوع لهذا المنتدى لأنه موجود مسبقاً',
	'CANNOT_WARN_ANONYMOUS'	=> 'لا يمكنك تحذير زائر',
	'CANNOT_WARN_SELF'		=> 'لا تستطيع تحذير نفسك',
	'CAN_LEAVE_BLANK'		=> 'هذا الحقل يمكن تركه فارغاً',
	'CHANGE_POSTER'			=> 'تغيير الكاتب',
	'CLOSE_PM_REPORT'		=> 'أغلِق تليغ الرسالة الخاصة',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'هل أنت متأكد من إغلاق التبليغ عن الرسالة الخاصة؟',
	'CLOSE_PM_REPORTS'		=> 'أغلِق تبليغ الرسالة الخاصة',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'هل أنت متأكد من إغلاق التبليغات المحددة؟',
	'CLOSE_REPORT'			=> 'إغلاق التبليغ',
	'CLOSE_REPORT_CONFIRM'	=> 'هل أنت متأكد من إغلاق التبليغ المحدد؟',
	'CLOSE_REPORTS'			=> 'إغلاق التبليغات',
	'CLOSE_REPORTS_CONFIRM'	=> 'هل أنت متأكد من إغلاق التبليغات المحددة',

	'DELETE_PM_REPORT'			=> 'حذف التليغ عن الرسالة الخاصة',
	'DELETE_PM_REPORT_CONFIRM'	=> 'هل أنت متأكد من إغلاق التبليغ عن الرسالة الخاصة المحددة؟',
	'DELETE_PM_REPORTS'			=> 'حذف التبليغات عن الرسالة الخاصة',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'هل أنت متأكد من إغلاق التبليغات عن الرسائل الخاصة المحددة؟',
	'DELETE_POSTS'				=> 'حذف المشاركات',
	'DELETE_REPORT'				=> 'حذف التبليغ',
	'DELETE_REPORT_CONFIRM'		=> 'هل أنت متأكد من حذف التبليغ المحدد؟',
	'DELETE_REPORTS'			=> 'حذف التبليغات',
	'DELETE_REPORTS_CONFIRM'	=> 'هل أنت متأكد من حذف التبليغات المحددة؟',
	'DELETE_SHADOW_TOPIC'		=> 'حذف ظل الموضوع',
	'DELETE_TOPICS'				=> 'حذف المواضيع المحددة',
	'DISAPPROVE'				=> 'رفض',
	'DISAPPROVE_REASON'			=> 'أسباب الرفض',
	'DISAPPROVE_POST'			=> 'رفض المشاركة',
	'DISAPPROVE_POST_CONFIRM'	=> 'هل أنت متأكد من أنك تريد رفض هذه المشاركة؟',
	'DISAPPROVE_POSTS'			=> 'رفض المشاركات',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'هل أنت متأكد من أنك تريد رفض المشاركات المحددة؟',
	'DISPLAY_LOG'				=> 'استعرض الإدخالات منذ',
	'DISPLAY_OPTIONS'			=> 'خيارات العرض',

	'EMPTY_REPORT'					=> 'ينبغي عليك إضافة وصف عند اختيارك لهذا السبب',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'يرجى العلم بأن موضوعاً أو أكثر قد أُزيل من قاعدة البيانات لأنها كانت أو أصبحت فارغة',

	'FEEDBACK'				=> 'إعلام',
	'FORK'					=> 'نسخ',
	'FORK_TOPIC'			=> 'نسخ الموضوع',
	'FORK_TOPIC_CONFIRM'	=> 'هل أنت متأكد من أنك تريد نسخ هذا الموضوع؟',
	'FORK_TOPICS'			=> 'نسخ المواضيع المحددة',
	'FORK_TOPICS_CONFIRM'	=> 'هل أنت متأكد من أنك تريد نسخ المواضيع المحددة؟',
	'FORUM_DESC'			=> 'وصف',
	'FORUM_NAME'			=> 'اسم المنتدى',
	'FORUM_NOT_EXIST'		=> 'المنتدى الذي اخترته غير موجود',
	'FORUM_NOT_POSTABLE'	=> 'المنتدى المحدد لا يمكن المشاركة فيه',
	'FORUM_STATUS'			=> 'حالة المنتدى',
	'FORUM_STYLE'			=> 'ستايل المنتدى',

	'GLOBAL_ANNOUNCEMENT'	=> 'إعلان عام',

	'IP_INFO'				=> 'معلومات IP',
	'IPS_POSTED_FROM'		=> 'عناوين IP التي استخدمها العضو للكتابة',

	'LATEST_LOGS'				=> 'آخر خمس عمليات مسجلة',
	'LATEST_REPORTED'			=> 'آخر خمس تقارير',
	'LATEST_REPORTED_PMS'		=> 'آخر خمسة تقارير عن رسائل خاصة',
	'LATEST_UNAPPROVED'			=> 'آخر خمس مشاركات تنتظر الموافقة',
	'LATEST_WARNING_TIME'		=> 'آخر التحذيرات المرسلة',
	'LATEST_WARNINGS'			=> 'آخر خمس تحذيرات',
	'LEAVE_SHADOW'				=> 'اترك ظل الموضوع في المنتدى',
	'LIST_REPORTS'				=> array(
		1	=> 'تقرير واحد',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'تقريران',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> '%d تقارير',		// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> '%d تقريراً',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> '%d تقرير',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'LOCK'						=> 'إغلاق',
	'LOCK_POST_POST'			=> 'إغلاق المشاركة',
	'LOCK_POST_POST_CONFIRM'	=> 'هل أنت متأكد من أنك تريد منع تعديل هذه المشاركة؟',
	'LOCK_POST_POSTS'			=> 'إغلاق المشاركات المحددة',
	'LOCK_POST_POSTS_CONFIRM'	=> 'هل أنت متأكد من أنك ستمنع التعديل على المشاركات المحددة؟',
	'LOCK_TOPIC_CONFIRM'		=> 'هل أنت متأكد من إغلاق هذا الموضوع؟',
	'LOCK_TOPICS'				=> 'إغلاق المواضيع المحددة',
	'LOCK_TOPICS_CONFIRM'		=> 'هل أنت متأكد من أنك تريد إغلاق المواضيع المحددة كلها؟',
	'LOGS_CURRENT_TOPIC'		=> 'حالياً يشاهد السجلات الخاصة بـ:',
	'LOGIN_EXPLAIN_MCP'			=> 'لإدارة هذا المنتدى ينبغي عليك تسجيل الدخول',
	'LOGVIEW_VIEWTOPIC'			=> 'مشاهدة الموضوع',
	'LOGVIEW_VIEWLOGS'			=> 'مشاهدة سجل الموضوع',
	'LOGVIEW_VIEWFORUM'			=> 'مشاهدة المنتدى',
	'LOOKUP_ALL'				=> 'عرض IP كله',
	'LOOKUP_IP'					=> 'عرض IP',

	'MARKED_NOTES_DELETED'		=> 'حذِفَت مذكرات العضو المحددة كلها بنجاح',

	'MCP_ADD'						=> 'أضف تحذير',

	'MCP_BAN'					=> 'الحظر',
	'MCP_BAN_EMAILS'			=> 'حظر بريد إلكتروني',
	'MCP_BAN_IPS'				=> 'حظر IP',
	'MCP_BAN_USERNAMES'			=> 'حظر أسماء',

	'MCP_LOGS'						=> 'سجل المشرف',
	'MCP_LOGS_FRONT'				=> 'الواجهة',
	'MCP_LOGS_FORUM_VIEW'			=> 'تسجلات المنتدى',
	'MCP_LOGS_TOPIC_VIEW'			=> 'تسجيلات الموضوع',

	'MCP_MAIN'						=> 'الرئيسية',
	'MCP_MAIN_FORUM_VIEW'			=> 'مشاهدة المنتدى',
	'MCP_MAIN_FRONT'				=> 'الرئيسية',
	'MCP_MAIN_POST_DETAILS'			=> 'تفاصيل المشاركة',
	'MCP_MAIN_TOPIC_VIEW'			=> 'مشاهدة الموضوع',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'تعيين كإعلان',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'هل أنت متأكد من تغيير هذا الموضوع إلى إعلان؟',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'تعيين كإعلانات',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'هل أنت متأكد من تغيير المواضيع المحددة كلها إلى إعلانات؟',
	'MCP_MAKE_GLOBAL'				=> 'تعيين كإعلان عام',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'هل أنت متأكد من تغيير هذا الموضوع إلى إعلان عام؟',
	'MCP_MAKE_GLOBALS'				=> 'تعيين كإعلانات عامة',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'هل أنت متأكد من تغيير المواضيع المحددة إلى إعلانات عامة؟',
	'MCP_MAKE_STICKY'				=> 'تعيين كمثبت',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'هل أنت متأكد من تغيير هذا الموضوع إلى مثبت؟',
	'MCP_MAKE_STICKIES'				=> 'تعيين كمواضيع مثبتة',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'هل أنت متأكد من تغيير المواضيع المحددة إلى مواضيع مثبتة؟',
	'MCP_MAKE_NORMAL'				=> 'تعيين كموضوع عادي',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'هل أنت متأكد من تغيير هذا الموضوع إلى موضوع عادي؟',
	'MCP_MAKE_NORMALS'				=> 'تعيين كمواضيع عادية',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'هل أنت متأكد من تغيير المواضيع المحددة إلى مواضيع عادية؟',

	'MCP_NOTES'						=> 'مذكرة المستخدم',
	'MCP_NOTES_FRONT'				=> 'الواجهة',
	'MCP_NOTES_USER'				=> 'تفاصيل المستخدم',

	'MCP_POST_REPORTS'				=> 'تبليغات عن هذه المشاركة',

	'MCP_PM_REPORTS'				=> 'رسائل خاصة تم التبليغ عنها',
	'MCP_PM_REPORT_DETAILS'			=> 'تفاصيل التبليغ عن الرسالة الخاصة',
	'MCP_PM_REPORTS_CLOSED'			=> 'تبليغات مغلقة عن رسائل خاصة',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'هنا قائمة عن التبليغات التي حلّت مؤخراً.',
	'MCP_PM_REPORTS_OPEN'			=> 'استعراض التبليغات حول رسائل خاصة',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'هنا قائمة حول التبليغات عن رسائل خاصة ما زالت تحتاج المراجعة.',

	'MCP_REPORTS'					=> 'التبليغات',
	'MCP_REPORT_DETAILS'			=> 'تفاصيل التبليغ',
	'MCP_REPORTS_CLOSED'			=> 'التبليغات المغلقة',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'هذه قائمة بالتبليغات كلها عن المشاركات والتي اطـُلِع عليها وأغلقَت مسبقاً',
	'MCP_REPORTS_OPEN'				=> 'التبليغات المفتوحة',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'هذه قائمة بالتبليغات كلها عن المشاركات والتي تحتاج إلى التعامل معها فوراً',

	'MCP_QUEUE'								=> 'إدارة قائمة الانتظار',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'تفاصيل الموافقة',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'مشاركات تنتظر الموافقة',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'هذه قائمة بالمشاركات كلها التي تحتاج إلى موافقة قبل ظهورها للمستخدمين',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'مواضيع تنتظر الموافقة',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'هذه قائمة بالمواضيع كلها التي تحتاج إلى موافقة قبل ظهورها للمستخدمين',
	'MCP_QUEUE_DELETED_POSTS'				=> 'المشاركات المحذوفة',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'هذه قائمة بالمشاركات التم تم حذفها حذف بسيط. يمكنك استعادة أو حذف هذه المشاركات نهائياً من هذه النافذة.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'المواضيع المحذوفة',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'هذه قائمة بالمواضيع التم تم حذفها حذف بسيط. يمكنك استعادة أو حذف هذه المواضيع نهائياً من هذه النافذة.',

	'MCP_VIEW_USER'			=> 'مشاهدة التحذيرات لمستخدم معين',

	'MCP_WARN'				=> 'التحذيرات',
	'MCP_WARN_FRONT'		=> 'الواجهة',
	'MCP_WARN_LIST'			=> 'قائمة التحذيرات',
	'MCP_WARN_POST'			=> 'تحذير لمشاركة',
	'MCP_WARN_USER'			=> 'تحذير العضو',

	'MERGE_POSTS_CONFIRM'	=> 'هل أنت متأكد من أنك تريد نقل المشاركات المحددة؟',
	'MERGE_TOPIC_EXPLAIN'	=> 'باستخدام النموذج أدناه يمكنك دمج المشاركات المحددة إلى موضوع آخر. هذه المشاركات سيتم تقسيمها عن هذا الموضوع ودمجها في الموضوع الآخر. هذه المشاركات لن يعاد تسجيلها وستظهر وكأن الأعضاء قد كتبوها في الموضوع الجديد.<br />يرجى منك إدخال رقم الموضوع المطلوب أو اضغط على ”اختر موضوع“ للبحث عن أحدها',
	'MERGE_TOPIC_ID'		=> 'رقم الموضوع المطلوب',
	'MERGE_TOPICS'			=> 'دمج المواضيع',
	'MERGE_TOPICS_CONFIRM'	=> 'هل أنت متأكد من أنك تريد دمج هذه المواضيع؟',
	'MODERATE_FORUM'		=> 'إدارة المنتدى',
	'MODERATE_TOPIC'		=> 'إدارة الموضوع',
	'MODERATE_POST'			=> 'إدارة المشاركة',
	'MOD_OPTIONS'			=> 'خيارات الإشراف',
	'MORE_INFO'				=> 'معلومات إضافية',
	'MOST_WARNINGS'			=> 'الأعضاء حسب أكثر التحذيرات',
	'MOVE_TOPIC_CONFIRM'	=> 'هل أنت متأكد من أنك تريد نقل الموضوع إلى منتدى جديد؟',
	'MOVE_TOPICS'			=> 'نقل المواضيع المحددة',
	'MOVE_TOPICS_CONFIRM'	=> 'هل أنت متأكد من أنك تريد نقل المواضيع المحددة إلى منتدى جديد؟',

	'NOTIFY_POSTER_APPROVAL'		=> 'تنبيه الكاتب على الموافقة؟',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'تنبيه الكاتب على عدم الموافقة؟',
	'NOTIFY_USER_WARN'				=> 'تنبيه المستخدم عن التحذير؟',
	'NOT_MODERATOR'					=> 'أنت لست مشرفاً على هذا المنتدى.',
	'NO_DESTINATION_FORUM'			=> 'اختر المنتدى المناسب للنقل.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'لا توجد منتدى متوفر للنقل.',
	'NO_ENTRIES'					=> 'لا توجد سجلات.',
	'NO_FEEDBACK'					=> 'لا توجد إعلامات عن هذا العضو.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'عليك أن تختار موضوعا لتدمج المشاركات',
	'NO_MATCHES_FOUND'				=> 'لم يُعثَر على نتيجة',
	'NO_POST'						=> 'عليك أن تختار إحدى المشاركات لتتمكن من تحذير العضو بسبب هذه المشاركة',
	'NO_POST_REPORT'				=> 'هذه المشاركة لم يتم التبليغ عنها',
	'NO_POST_SELECTED'				=> 'ينبغي عليك اختيار مشاركة واحدة على الأقل حتى تؤدي هذه العملية',
	'NO_POSTS_DELETED'				=> 'لا توجد مشاركات محذوفة.',
	'NO_POSTS_QUEUE'				=> 'لا توجد مشاركات تنتظر الموافقة عليها.',
	'NO_REASON_DISAPPROVAL'			=> 'رجاءً ضع الأسباب المناسبة لعدم الموافقة',
	'NO_REPORT'						=> 'لم يوجد أي تبليغ',
	'NO_REPORTS'					=> 'لم يعثَر على تقارير',
	'NO_REPORT_SELECTED'			=> 'ينبغي عليك على الأقل تحديد تبليغ واحد لمواصلة هذه العملية',
	'NO_TOPIC_ICON'					=> 'لا يوجد',
	'NO_TOPIC_SELECTED'				=> 'ينبغي عليك اختيار موضوع واحد على الأقل حتى تؤدي هذه العملية',
	'NO_TOPICS_DELETED'				=> 'لا توجد مواضيع محذوفة.',
	'NO_TOPICS_QUEUE'				=> 'لا يوجد مواضيع تنتظر الموافقة عليها.',

	'ONLY_TOPIC'			=> 'فقط الموضوع "%s"',
	'OTHER_USERS'			=> 'المستخدمون المرسلون من رقم IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "غير مسموح بـ %s كأداة اشراف سريعة",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'أُغلِق التبليغ عن الرسالة الخاصة بنجاح.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'حذِف التبليغ عن الرسالة الخاصة بنجاح.',
	'PM_REPORTED_SUCCESS'		=> 'بُـلـّغ عن هذه الرسالة الخاصة بنجاح.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'تم اغلاق تقارير الرسائل الخاصه بنجاح',
	'PM_REPORTS_DELETED_SUCCESS'=> 'تم حذف تقارير الرسائل الخاصه بنجاح',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'لا توجد تقارير رسائل خاصة لعرضها.',
		1	=> 'يوجد تقرير رسائل خاصة واحد.',							// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'يوجد تقريران رسائل خاصة في المجمل.',					// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'يوجد <strong>%d</strong> تقارير رسائل خاصة في المجمل.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'يوجد <strong>%d</strong> تقرير رسائل خاصة في المجمل.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
	),
	'PM_REPORT_DETAILS'			=> 'تفاصيل التبليغ عن الرسالة الخاصة',
	'POSTER'					=> 'كاتب',
	'POSTS_APPROVED_SUCCESS'	=> 'تمت الموافقة على المشاركات المحددة',
	'POSTS_DELETED_SUCCESS'		=> 'أُزيلَت المشاركات المحددة من قاعدة البيانات بنجاح',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'لم يوافَق على المشاركات المحددة',
	'POSTS_LOCKED_SUCCESS'		=> 'أغلِقَت المشاركات المحددة بنجاح',
	'POSTS_MERGED_SUCCESS'		=> 'دُمجَت المشاركات المحددة',
	'POSTS_PER_PAGE'			=> 'مشاركات لكل صفحة',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(صفر لعرض الكل)',
	'POSTS_RESTORED_SUCCESS'	=> 'تمت استعادة المشاركات المحددة بنجاح.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'تم فتح المشاركات المحددة بنجاح.',
	'POST_APPROVED_SUCCESS'		=> 'تمت الموافقة على المشاركة المحددة',
	'POST_DELETED_SUCCESS'		=> 'الردود المختارة أزيلت بنجاح من قاعدة البيانات',
	'POST_DISAPPROVED_SUCCESS'	=> 'الردود المختارة رُفضَت',
	'POST_LOCKED_SUCCESS'		=> 'أُغلِق الموضوع بنجاح',
	'POST_NOT_EXIST'			=> 'الموضوع المختار غير موجود',
	'POST_REPORTED_SUCCESS'		=> 'أرسِل تبليغ عن هذا الرد بنجاح',
	'POST_RESTORED_SUCCESS'		=> 'تمت استعادة هذه المشاركة بنجاح.',
	'POST_UNLOCKED_SUCCESS'		=> 'أُلغِي إغلاق الموضوع بنجاح',

	'READ_USERNOTES'			=> 'ملاحظات العضو',
	'READ_WARNINGS'				=> 'تحذيرات العضو',
	'REPORTER'					=> 'مقدم التبليغ',
	'REPORTED'					=> 'وقت التبليغ',
	'REPORTED_BY'				=> 'مقدم التبليغ',
	'REPORTED_ON_DATE'			=> 'في',
	'REPORTS_CLOSED_SUCCESS'	=> 'التبليغات المختارة أغلِقت بنجاح',
	'REPORTS_DELETED_SUCCESS'	=> 'التبليغات المختارة أزيلَت بنجاح',
	'REPORTS_TOTAL'				=> array(
		0	=> 'لا توجد تقارير لعرضها.',
		1	=> 'يوجد تقرير واحد.',								// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'يوجد تقريران في المجمل.',						// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'يوجد <strong>%d</strong> تقارير في المجمل.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'يوجد <strong>%d</strong> تقرير في المجمل.',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
	),
	'REPORT_CLOSED'				=> 'هذا التبليغ قد أقفل سابقاً',
	'REPORT_CLOSED_SUCCESS'		=> 'أُغلِق التبليغ المختار بنجاح',
	'REPORT_DELETED_SUCCESS'	=> 'إلغِي التبليغ المختار بنجاح',
	'REPORT_DETAILS'			=> 'تفاصيل التبليغ',
	'REPORT_MESSAGE'			=> 'التبليغ عن هذه الرسالة',
	'REPORT_MESSAGE_EXPLAIN'	=> 'استخدم النموذج الآتي للإبلاغ عن الرسائل، ينبغي الإبلاغ فقط عن الرسائل المخالفة لشروط المنتدى',
	'REPORT_NOTIFY'				=> 'أبلغني',
	'REPORT_NOTIFY_EXPLAIN'		=> 'يتم إبلاغك عند التعامل مع تبليغك',
	'REPORT_POST_EXPLAIN'		=> 'استخدم النموذج الآتي لإبلاغ عن الرسالة الخاصة، ينبغي الإبلاغ فقط عن االرسائل المخالفة لشروط المنتدى. <strong>ملاحظة: التبليغ عن الرسالة الخاصة يسمح للمشرف العام أو المدير بقراءتها </strong>',
	'REPORT_REASON'				=> 'سبب التبليغ',
	'REPORT_TIME'				=> 'وقت التبليغ',
	'RESTORE'					=> 'استعادة',
	'RESTORE_POST'				=> 'استعادة المشاركة',
	'RESTORE_POST_CONFIRM'		=> 'هل أنت متأكد أنك تريد استعادة هذه المشاركة؟',
	'RESTORE_POSTS'				=> 'استعادة المشاركات',
	'RESTORE_POSTS_CONFIRM'		=> 'هل أنت متأكد أنك تريد استعادة المشاركات المحددة؟',
	'RESTORE_TOPIC'				=> 'استعادة الموضوع',
	'RESTORE_TOPIC_CONFIRM'		=> 'هل أنت متأكد أنك تريد استعادة هذا الموضوع؟',
	'RESTORE_TOPICS'			=> 'استعادة المواضيع',
	'RESTORE_TOPICS_CONFIRM'	=> 'هل أنت متأكد أنك تريد استعادة المواضيع المحددة؟',
	'RESYNC'					=> 'ترتيب',
	'RETURN_MESSAGE'			=> '%sالعودة للرسالة%s',
	'RETURN_NEW_FORUM'			=> '%sالعودة للمنتدى الجديد%s',
	'RETURN_NEW_TOPIC'			=> '%sالعودة للموضوع الجديد%s',
	'RETURN_PM'					=> '%sعودة للرسالة الخاصة%s',
	'RETURN_POST'				=> '%sالعودة للرد%s',
	'RETURN_QUEUE'				=> '%sالرجوع إلى صف الانتظار%s',
	'RETURN_REPORTS'			=> '%sالعودة للتقارير%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sالعودة للموضوع%s',

	'SEARCH_POSTS_BY_USER'				=> 'ابحث عن المشاركات بواسطة',
	'SELECT_ACTION'						=> 'اختر الفعل المناسب',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'الرجاء اختيار المنتدى الذي تريد نشر هذا الإعلان العام فيه',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'الرجاء اختيار المنتدى الذي تريد نشر هذه الإعلانات العامة فيه',
	'SELECT_MERGE'						=> 'اختر للدمج',
	'SELECT_TOPICS_FROM'				=> 'اختر مواضيع من',
	'SELECT_TOPIC'						=> 'اختر الموضوع',
	'SELECT_USER'						=> 'اختر العضو',
	'SORT_ACTION'						=> 'سجل الأحداث',
	'SORT_DATE'							=> 'التاريخ',
	'SORT_IP'							=> 'عنوان IP',
	'SORT_WARNINGS'						=> 'التحذيرات',
	'SPLIT_AFTER'						=> 'قسّم ابتداءً من المشاركة المحددة',
	'SPLIT_FORUM'						=> 'المنتدى للموضوع الجديد',
	'SPLIT_POSTS'						=> 'قسّم المشاركات المحددة',
	'SPLIT_SUBJECT'						=> 'عنوان الموضوع الجديد',
	'SPLIT_TOPIC_ALL'					=> 'فصل الموضوع عن المشاركات المحددة',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'هل أنت متأكد من تقسيم هذا الموضوع؟',
	'SPLIT_TOPIC_BEYOND'				=> 'تقسيم الموضوع ابتداءً من المشاركة المحددة',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'هل أنت متأكد من فصل الموضوع عن الردود المختارة؟',
	'SPLIT_TOPIC_EXPLAIN'				=> 'باستخدام النموذج أدناه يمكنك تقسيم موضوع إلى اثنين، إما بتحديد المشاركات منفردة أو بالتقسيم ابتداءً من مشاركة محددة',

	'THIS_PM_IP'				=> 'رقم IP الخاص بهذه الرساله الخاصه',
	'THIS_POST_IP'				=> 'IP هذه المشاركة',
	'TOPICS_APPROVED_SUCCESS'	=> 'تم السماح للمواضيع المختارة',
	'TOPICS_DELETED_SUCCESS'	=> 'أزيلت المواضيع المختارة بنجاح',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'مُنعَت المواضيع المختارة',
	'TOPICS_FORKED_SUCCESS'		=> 'تم نسخ المواضيع المختارة بنجاح',
	'TOPICS_LOCKED_SUCCESS'		=> 'أغلِقَت المواضيع المختارة',
	'TOPICS_MOVED_SUCCESS'		=> 'نُقلَت المواضيع المختارة بنجاح',
	'TOPICS_RESTORED_SUCCESS'	=> 'تمت استعادة المواضيع المحددة بنجاح.',
	'TOPICS_RESYNC_SUCCESS'		=> 'أعيدَ ترتيب المواضيع بنجاح',
	'TOPICS_TYPE_CHANGED'		=> 'تغيّر نوع المواضيع بنجاح',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'أُلغِي الغلق عن المواضيع المختارة بنجاح',
	'TOPIC_APPROVED_SUCCESS'	=> 'تم السماح للمواضيع المختارة',
	'TOPIC_DELETED_SUCCESS'		=> 'أزيل الموضوع من قاعدة البيانات بنجاح',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'مُنعَت المواضيع المختارة',
	'TOPIC_FORKED_SUCCESS'		=> 'نُسِخ الموضوع بنجاح',
	'TOPIC_LOCKED_SUCCESS'		=> 'أغلِق الموضوع بنجاح',
	'TOPIC_MOVED_SUCCESS'		=> 'نـُـقِل الموضوع بنجاح',
	'TOPIC_NOT_EXIST'			=> 'الموضوع المختار غير موجود',
	'TOPIC_RESTORED_SUCCESS'	=> 'تمت استعادة الموضوع المحدد بنجاح.',
	'TOPIC_RESYNC_SUCCESS'		=> 'أُعيد ترتيب الموضوع بنجاح',
	'TOPIC_SPLIT_SUCCESS'		=> 'قُسّم الموضوع بنجاح',
	'TOPIC_TIME'				=> 'وقت الموضوع',
	'TOPIC_TYPE_CHANGED'		=> 'تغيّر نوع الموضوع بنجاح',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'ألغِيَ الغلق عن الموضوع بنجاح',
	'TOTAL_WARNINGS'			=> 'مجموع التحذيرات',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'لا توجد مشاركات تنتظر الموافقة عليها.',
		1	=> 'توجد مشاركة واحدة تنتظر الموافقة عليها.',					// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'توجد مشاركتان تنتظران الموافقة عليهما.',					// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'توجد <strong>%d</strong> مشاركات تنتظر الموافقة عليها.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'توجد <strong>%d</strong> مشاركة تنتظر الموافقة عليها.',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
	),
	'UNLOCK'						=> 'فتح',
	'UNLOCK_POST'					=> 'فتح المشاركة',
	'UNLOCK_POST_EXPLAIN'			=> 'إتاحة التعديل',
	'UNLOCK_POST_POST'				=> 'فتح المشاركة',
	'UNLOCK_POST_POST_CONFIRM'		=> 'هل أنت متأكد من أنك تريد السماح بتعديل هذه المشاركة؟',
	'UNLOCK_POST_POSTS'				=> 'فتح المشاركات المحددة',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'هل أنت متأكد من أنك تريد السماح بتعديل المشاركات المحددة؟',
	'UNLOCK_TOPIC'					=> 'فتح الموضوع',
	'UNLOCK_TOPIC_CONFIRM'			=> 'هل أنت متأكد من أنك تريد فتح هذا الموضوع؟',
	'UNLOCK_TOPICS'					=> 'فتح المواضيع المحددة',
	'UNLOCK_TOPICS_CONFIRM'			=> 'هل أنت متأكد من أنك تريد فتح المواضيع المحددة كلها؟',
	'USER_CANNOT_POST'				=> 'لا يمكنك إضافة موضوع في هذا القسم',
	'USER_CANNOT_REPORT'			=> 'لا يمكنك إرسال تبليغ في هذا القسم',
	'USER_FEEDBACK_ADDED'			=> 'أُضيفَ تعليق العضو بنجاح',
	'USER_WARNING_ADDED'			=> 'أُنذِر العضو بنجاح',

	'VIEW_DETAILS'			=> 'عرض التفاصيل',
	'VIEW_PM'				=> 'عرض الرسالة الخاصة',
	'VIEW_POST'				=> 'عرض المشاركة',

	'WARNED_USERS'			=> 'الأعضاء الموجه إليهم تحذيرات',
	'WARNED_USERS_EXPLAIN'	=> 'هذه قائمة بالأعضاء المرسل إليهم تحذيرات غير منتهية',
	'WARNING_PM_BODY'		=> 'الآتي عبارة عن تحذير صدر بحقك بواسطة مدير الموقع أو أحد المشرفين في هذا الموقع.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'صدور تحذير بحقك',
	'WARNING_POST_DEFAULT'	=> 'هذا تحذير بناءً على المشاركة الآتية الخاصة بك: %s',
	'NO_WARNINGS'	=> 'لا توجد تحذيرات.',

	'YOU_SELECTED_TOPIC'	=> 'قمت باختيار الموضوع رقم %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'برامج مسروقة',
			'SPAM'		=> 'رسائل دعائية',
			'OFF_TOPIC'	=> 'خارج عن الموضوع',
			'OTHER'		=> 'أخرى',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'الرسالة يحوي روابط لبرامج مسروقة أو برامج غير مجانية',
			'SPAM'		=> 'الرسالة يحوي دعاية لمواقع أو مواد أخرى',
			'OFF_TOPIC'	=> 'الرسالة يحوي ردود خارجة عن الموضوع',
			'OTHER'		=> 'الرسالة لا تندرج تحت أي من هذه التصنيفات، يرجى تعبئة حقل المعلومات الإضافية أدناه',
		),
	),
));
