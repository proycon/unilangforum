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
	'ADD_ATTACHMENT'			=> 'أضف ملف مرفق',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'إذا كنت ترغب بإضافة ملف مرفق واحد أو أكثر فعليك إكمال الحقول الآتية',
	'ADD_FILE'					=> 'أضف الملف',
	'ADD_POLL'					=> 'إضافة تصويت',
	'ADD_POLL_EXPLAIN'			=> 'إذا كنت لا تريد إضافة تصويت اترك هذا الحقل فارغاً',
	'ALREADY_DELETED'			=> 'عفواً ولكن هذه الرسالة قد حذفت للتو',
	'ATTACH_DISK_FULL'			=> 'لا توجد مساحة تخزينية كافية لإرفاق هذا الملف.',
	'ATTACH_QUOTA_REACHED'		=> 'عفواً، ولكنك بلغت الحد الأقصى لحجم المرفق',
	'ATTACH_SIG'				=> 'أرفق التوقيع (يمكنك ضبط إعدادات التوقيع من لوحة التحكم)',

	'BBCODE_A_HELP'				=> 'الملفات المرفقة: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'سميك: [b]النص[/b]',
	'BBCODE_C_HELP'				=> 'كود: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'فلاش: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'حجم الخط: [size=x-small]نص صغير[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>غير متاح</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>متاح</em>',
	'BBCODE_I_HELP'				=> 'مائل: [i]النص[/i]',
	'BBCODE_L_HELP'				=> 'قائمة: [list][*]النص[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'عنصر في قائمة: [*]النص',
	'BBCODE_O_HELP'				=> 'قائمة مرقمة: [list=1][*]النقطة الاولى[/list] أو [list=a][*]النقطة أ[/list]',
	'BBCODE_P_HELP'				=> 'صورة: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'اقتباس: [quote]النص[/quote]',
	'BBCODE_S_HELP'				=> 'لون الخط: [color=red]النص[/color] أو [color=#FF0000]النص[/color]',
	'BBCODE_U_HELP'				=> 'تسطير: [u]النص[/u]',
	'BBCODE_W_HELP'				=> 'عنوان الانترنت: [url]http://url[/url] أو [url=http://url]نص الرابط[/url]',
	'BBCODE_Y_HELP'				=> 'قائمة: أضف قائمة',
	'BUMP_ERROR'				=> 'لا يمكنك إرسال مشاركة بهذه السرعة فانتظر قليلاً',

	'CANNOT_DELETE_REPLIED'		=> 'يمكنك حذف المواضيع التي لم يرد عليها فقط',
	'CANNOT_EDIT_POST_LOCKED'	=> 'هذا الموضوع مغلق. لا يمكنك الرد',
	'CANNOT_EDIT_TIME'			=> 'لا يمكنك تعديل أو حذف هذا الإرسال',
	'CANNOT_POST_ANNOUNCE'		=> 'عفواً. لا يمكنك إرسال إعلانات',
	'CANNOT_POST_STICKY'		=> 'عفواً. لا يمكنك وضع مواضيع مثبتة',
	'CHANGE_TOPIC_TO'			=> 'غير نوع الموضوع إلى',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'رسالتك تحتوي على حرف واحد.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'رسالتك تحتوي على حرفان.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'رسالتك تحتوي على %1$d حروف.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'رسالتك تحتوي على %1$d حرفاً.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'رسالتك تحتوي على %1$d حرف.',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'توقيعك يحتوي على حرف واحد.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'توقيعك يحتوي على حرفان.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'توقيعك يحتوي على %1$d حروف.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'توقيعك يحتوي على %1$d حرفاً.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'توقيعك يحتوي على %1$d حرف.',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'CLOSE_TAGS'				=> 'غلق العلامات',
	'CURRENT_TOPIC'				=> 'الموضوع الحالي',

	'DELETE_FILE'				=> 'حذف الملف',
	'DELETE_MESSAGE'			=> 'حذف الرسالة',
	'DELETE_MESSAGE_CONFIRM'	=> 'هل تريد فعلا حذف الرسالة؟',
	'DELETE_OWN_POSTS'			=> 'عفواً. يمكنك حذف مواضيعك فقط',
	'DELETE_PERMANENTLY'		=> 'حذف نهائي',
	'DELETE_POST_CONFIRM'		=> 'هل تريد فعلاً حذف هذا الموضوع؟',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'هل أنت متأكد أنك تريد حذف هذه المشاركة <strong>نهائياً</strong>؟',
	'DELETE_POST_PERMANENTLY'	=> 'حذف المشاركة نهائياً بحيث لا يمكن استعادتها',
	'DELETE_POSTS_CONFIRM'		=> 'هل أنت متأكد أنك تريد حذف هذه المشاركات؟',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'هل أنت متأكد أنك تريد حذف هذه المشاركات <strong>نهائياً</strong>؟',
	'DELETE_REASON'				=> 'سبب الحذف',
	'DELETE_REASON_EXPLAIN'		=> 'سبب الحذف سيكون ظاهراً للمشرفين.',
	'DELETE_POST_WARN'			=> 'بمجرد الحذف لا يمكنك استعادة الموضوع مرة أخرى',
	'DELETE_TOPIC_CONFIRM'		=> 'هل أنت متأكد أنك تريد حذف هذا الموضوع؟',
	'DELETE_TOPIC_PERMANENTLY'	=> 'حذف هذا الموضوع نهائياً بحيث لا يمكن استعادته',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'هل أنت متأكد أنك تريد حذف هذا الموضوع <strong>نهائياً</strong>؟',
	'DELETE_TOPICS_CONFIRM'		=> 'هل أنت متأكد أنك تريد حذف هذه المواضيع؟',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'هل أنت متأكد أنك تريد حذف هذه المواضيع <strong>نهائياً</strong>؟',
	'DISABLE_BBCODE'			=> 'تعطيل BBCode',
	'DISABLE_MAGIC_URL'			=> 'لا تفعّل الروابط تلقائياً',
	'DISABLE_SMILIES'			=> 'تعطيل الابتسامات',
	'DISALLOWED_CONTENT'		=> 'ألغيَت عملية التحميل للشك بأن الملف المرفوع سيضر بالموقع!',
	'DISALLOWED_EXTENSION'		=> 'امتداد الملف %s غير مسموح به',
	'DRAFT_LOADED'				=> 'تم تحميل المسودة في مكان كتابة الرسالة ، ربما تريد إنهاء عملك الآن<br />سيتم حذف المسودة بعد إرسال مشاركتك',
	'DRAFT_LOADED_PM'			=> 'تم تحميل المسودة في مكان كتابة الرسالة ، ربما تريد إنهاء الرسالة الخاصة الآن<br />ستحذَف المسودة بعد إرسال الرسالة الخاصة',
	'DRAFT_SAVED'				=> 'حُفِظَت المسودة',
	'DRAFT_TITLE'				=> 'عنوان المسودة',

	'EDIT_REASON'				=> 'سبب تعديل المشاركة',
	'EMPTY_FILEUPLOAD'			=> 'الملف الذي تم أرفِق فارغ',
	'EMPTY_MESSAGE'				=> 'ينبغي إدخال نص المشاركة',
	'EMPTY_REMOTE_DATA'			=> 'لا يمكن رفع الملف ، حاول مرة أخرى',

	'FLASH_IS_OFF'				=> '[flash] <em>غير متاح</em>',
	'FLASH_IS_ON'				=> '[flash] <em>متاح</em>',
	'FLOOD_ERROR'				=> 'لا يمكنك المشاركة بهذه السرعة ، انتظر قليلاً',
	'FONT_COLOR'				=> 'لون الخط',
	'FONT_COLOR_HIDE'			=> 'إخفاء لون الخط',
	'FONT_HUGE'					=> 'ضخم',
	'FONT_LARGE'				=> 'كبير',
	'FONT_NORMAL'				=> 'عادي',
	'FONT_SIZE'					=> 'حجم الخط',
	'FONT_SMALL'				=> 'صغير',
	'FONT_TINY'					=> 'صغير جداً',

	'GENERAL_UPLOAD_ERROR'		=> 'لا يمكن إرفاق الملف إلى %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>غير متاح</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>متاح</em>',
	'INVALID_FILENAME'			=> '%s هو اسم غير صحيح',

	'LOAD'						=> 'تحميل',
	'LOAD_DRAFT'				=> 'تحميل مسودة',
	'LOAD_DRAFT_EXPLAIN'		=> 'هنا يمكنك اختيار المسودة التي تريد إكمال كتابتها، المشاركة التي تكتبها الآن ستحذف مع محتوياتها كلها أيضاً، يمكنك مشاهدة تعديل أو حذف المسودات من لوحة التحكم الخاصة بك',
	'LOGIN_EXPLAIN_BUMP'		=> 'ينبغي تسجيل الدخول قبل تعديل مشاركة في هذا المنتدى',
	'LOGIN_EXPLAIN_DELETE'		=> 'ينبغي تسجيل الدخول قبل حذف مشاركة من هذا المنتدى',
	'LOGIN_EXPLAIN_POST'		=> 'ينبغي تسجيل الدخول قبل المشاركة في هذا المنتدى',
	'LOGIN_EXPLAIN_QUOTE'		=> 'ينبغي تسجيل الدخول قبل اقتباس مشاركة في هذا المنتدى',
	'LOGIN_EXPLAIN_REPLY'		=> 'ينبغي تسجيل الدخول قبل إرسال رد في هذا المنتدى',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'أكبر حجم خط يمكنك استعماله هو %1$d',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'ملفات الفلاش يجب أن لا يزيد ارتفاعها عن %d بكسل.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'ملفات الفلاش يجب أن لا يزيد ارتفاعها عن %d بكسل.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'ملفات الفلاش يجب أن لا يزيد عرضها عن %d بكسل.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'ملفات الفلاش يجب أن لا يزيد عرضها عن %d بكسل.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'الصور يجب أن لا يزيد ارتفاعها عن %1$d بكسل.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'الصور يجب أن لا يزيد ارتفاعها عن %1$d بكسل.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'الصور يجب أن لا يزيد عرضها عن %d بكسل.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'الصور يجب أن لا يزيد عرضها عن %d بكسل.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'أدخل رسالتك هنا، يجب أن لا تحتوي على أكثر من حرف واحد.',					// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'أدخل رسالتك هنا، يجب أن لا تحتوي على أكثر من حرفان.',					// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'أدخل رسالتك هنا، يجب أن لا تحتوي على أكثر من <strong>%d</strong> حروف.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'أدخل رسالتك هنا، يجب أن لا تحتوي على أكثر من <strong>%d</strong> حرفاً.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'أدخل رسالتك هنا، يجب أن لا تحتوي على أكثر من <strong>%d</strong> حرف.',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'MESSAGE_DELETED'			=> 'حُذِفَت المشاركة بنجاح',
	'MORE_SMILIES'				=> 'عرض كل الابتسامات',

	'NOTIFY_REPLY'				=> 'أبلغني عند وجود ردود',
	'NOT_UPLOADED'				=> 'لا يمكن إرفاق الملف',
	'NO_DELETE_POLL_OPTIONS'	=> 'لا يمكنك حذف خيارات التصويت',
	'NO_PM_ICON'				=> 'بدون أيقونة',
	'NO_POLL_TITLE'				=> 'ينبغي إدخال سؤال التصويت',
	'NO_POST'					=> 'الموضوع غير موجود',
	'NO_POST_MODE'				=> 'لم يتم تحديد موضوع',

	'PARTIAL_UPLOAD'			=> 'تم رفع جزء من الملف فقط',
	'PHP_SIZE_NA'				=> 'حجم الملف المرفق كبير جدا',
	'PHP_SIZE_OVERRUN'			=> 'حجم الملف المرفق اكبر من الحد المسموح ، الحد الاقصى لتحميل المرفقات هو %1$d %2$s.<br />رجاءً الانتباه بانه لا يمكن تخطي اعدادت ملف php.ini',
	'PLACE_INLINE'				=> 'ضمن الملف',
	'POLL_DELETE'				=> 'حذف تصويت',
	'POLL_FOR'					=> 'زمن التصويت',
	'POLL_FOR_EXPLAIN'			=> 'أدخل 0 أو اتركه فارغاً لجعل التصويت للأبد',
	'POLL_MAX_OPTIONS'			=> 'خيارات لكل عضو',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'عدد الخيارات التي يستطيع العضو الاختيار بينها',
	'POLL_OPTIONS'				=> 'خيارات التصويت',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال خيار واحد.',						// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى خياران.',						// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى <strong>%d</strong> خيارات.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى <strong>%d</strong> خياراً.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى <strong>%d</strong> خيار.',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال خيار واحد. إذا قمت بحذف أو إضافة خيارات، سيتم تصفير جميع الأصوات الماضية.',						// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى خياران. إذا قمت بحذف أو إضافة خيارات، سيتم تصفير جميع الأصوات الماضية.',						// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى <strong>%d</strong> خيارات. إذا قمت بحذف أو إضافة خيارات، سيتم تصفير جميع الأصوات الماضية.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى <strong>%d</strong> خياراً. إذا قمت بحذف أو إضافة خيارات، سيتم تصفير جميع الأصوات الماضية.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'أدخل كل خيار في سطر جديد. يمكنك ادخال حتى <strong>%d</strong> خيار. إذا قمت بحذف أو إضافة خيارات، سيتم تصفير جميع الأصوات الماضية.',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'POLL_QUESTION'				=> 'سؤال التصويت',
	'POLL_TITLE_TOO_LONG'		=> 'عنوان التصويت ينبغي أن يحتوي على الأقل 100 حرف',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'عنوان التصويت كبير جداً ، نقترح إزالة الابتسامات',
	'POLL_VOTE_CHANGE'			=> 'السماح بالتصويت أكثر من مرة',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'إذا سمحت به سيتيح للأعضاء تغيير تصويتهم',
	'POSTED_ATTACHMENTS'		=> 'الملفات المرفقة',
	'POST_APPROVAL_NOTIFY'		=> 'سنعلمك عند الموافقة على المشاركة',
	'POST_CONFIRMATION'			=> 'تأكيد الإرسال',
	'POST_CONFIRM_EXPLAIN'		=> 'لمنع الإرسال الآلي يطلب المنتدى إدخال الرمز الأمني الموجود في الصورة، إذا كانت غير واضحة نرجو مراسلة %sالإدارة%s',
	'POST_DELETED'				=> 'حُذِفَت الرسالة بنجاح',
	'POST_EDITED'				=> 'عدّلت الرسالة بنجاح',
	'POST_EDITED_MOD'			=> 'عدّلت الرسالة بنجاح ، ستنشَر بعد مراجعة المشرف. سنعلمك عند الموافقة على المشاركة',
	'POST_GLOBAL'				=> 'عام',
	'POST_ICON'					=> 'أيقونة الموضوع',
	'POST_NORMAL'				=> 'عادي',
	'POST_REVIEW'				=> 'استعرض الموضوع',
	'POST_REVIEW_EDIT'			=> 'استعراض المشاركة',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'عدّلت هذه المشاركة من مستخدم آخر أثناء تعديلك لها. يمكنك استعراض حالة المشاركة بعد تعديلها ثم يمكن تعديل ما تريد.',
	'POST_REVIEW_EXPLAIN'		=> 'على الأقل وُضِع رد على الموضوع. ربما تريد مشاهدة موضوعك على ضوء ذلك',
	'POST_STORED'				=> 'أرسِلت المشاركة بنجاح',
	'POST_STORED_MOD'			=> 'تقدّمت المشاركة بنجاح وستنشَر بعد موافقة المشرف. سنعلمك عند الموافقة على المشاركة',
	'POST_TOPIC_AS'				=> 'أرسل موضوع كـ',
	'PROGRESS_BAR'				=> 'شريط الحالة',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'لا يمكنك وضع اقتباس متداخل.',				// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'يمكنك وضع اقتباسان فقط بداخل بعضهما.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'يمكنك وضع %d اقتباسات فقط بداخل بعضهم.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'يمكنك وضع %d اقتباساً فقط بداخل بعضهم.',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'يمكنك وضع %d اقتباس فقط بداخل بعضهم.',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'QUOTE_NO_NESTING'			=> 'لا يمكنك وضع اقتباسات بداخل بعضها.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'لم يتم رفع الملف المحدد لأن وقت الطلب انتهى.',
	'SAVE'						=> 'حفظ',
	'SAVE_DATE'					=> 'حفظ في',
	'SAVE_DRAFT'				=> 'حفظ مسودة',
	'SAVE_DRAFT_CONFIRM'		=> 'المسودات يحفَظ فيها عنوان المشاركة ومحتواها فقط ، أي إضافة أخرى سيتم حذفها. هل تريد حفظ المسودة الآن؟',
	'SMILIES'					=> 'ابتسامات',
	'SMILIES_ARE_OFF'			=> 'الابتسامات <em>غير متاحة</em>',
	'SMILIES_ARE_ON'			=> 'الابتسامات <em>متاحة</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'مدة الإعلان/الموضوع المثبت',
	'STICK_TOPIC_FOR'			=> 'تثبيت الموضوع',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'أدخل 0 أو اتركه فارغاً لجعل الإعلان أو الموضوع المثبت للأبد. يرجى الملاحظة أن هذا الرقم هو مرتبط بتاريخ المشاركة.',
	'STYLES_TIP'				=> 'معلومات: يمكن تطبيق الأنماط على الخط بسرعة',

	'TOO_FEW_CHARS'				=> 'الرسالة قصيرة جداً',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'يجب أن تدخل على الأقل حرفاً واحداً.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'يجب أن تدخل على الأقل حرفان.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'يجب أن تدخل على الأقل %1$d حروف.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'يجب أن تدخل على الأقل %1$d حرفاً.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'يجب أن تدخل على الأقل %1$d حرف.',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'ينبغي إدخال خيارين في التصويت على الأقل',
	'TOO_MANY_ATTACHMENTS'		=> 'لا يمكنك إرفاق ملف آخر ، أقصى عدد هو %d',
	'TOO_MANY_CHARS'			=> 'الرسالة طويلة جداً',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'العدد الأقصى للحروف المسموح بها هو %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'لقد أدخلت خيارات تصويت كثيرة جداً',
	'TOO_MANY_SMILIES'			=> 'تحتوي الرسالة على ابتسامات كثيرة جداً. أكبر عدد للابتسامات هو %d',
	'TOO_MANY_URLS'				=> 'تحتوي رسالتك على عدد كبير من عناوين الانترنت. أكبر عدد مسموح به هو %d',
	'TOO_MANY_USER_OPTIONS'		=> 'لا يمكنك إضافة خيارات أخرى للتصويت',
	'TOPIC_BUMPED'				=> 'تعدل الموضوع بنجاح',

	'UNAUTHORISED_BBCODE'		=> 'لا يمكنك استخدام أكواد BBCode المحددة: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'لإعادة الموضوع من الوضع العام ، ينبغي اختيار المنتدى الذي تريد وضع الموضوع فيه',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'الرسالة تحتوي على الحروف الغير مدعومة التالية:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'العنوان تحتوي على الحروف الغير مدعومة التالية:<br />%s',
	'UPDATE_COMMENT'			=> 'تحديث تعليق',
	'URL_INVALID'				=> 'رابط موقع الويب المدخل غير صحيح',
	'URL_NOT_FOUND'				=> 'الملف غير موجود',
	'URL_IS_OFF'				=> '[url] <em>غير متاح</em>',
	'URL_IS_ON'					=> '[url] <em>متاح</em>',
	'USER_CANNOT_BUMP'			=> 'لا يمكنك إضافة ردود لهذا القسم',
	'USER_CANNOT_DELETE'		=> 'لا يمكنك حذف مواضيع في هذا المنتدى',
	'USER_CANNOT_EDIT'			=> 'لا يمكنك تعديل مواضيع في هذا المنتدى',
	'USER_CANNOT_REPLY'			=> 'لا يمكنك الرد في هذا المنتدى',
	'USER_CANNOT_FORUM_POST'	=> 'لا تستطيع القيام بعملية الإرسال في هذا المنتدى لعدم دعم المنتدى للعملية',

	'VIEW_MESSAGE'				=> '%sاضغط هنا لاستعراض الرسالة%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sشاهد رسالتك الخاصة المرسلة%s',

	'WRONG_FILESIZE'			=> 'الملف كبير جداً ، أكبر حجم مسموح به هو %1$d %2$s.',
	'WRONG_SIZE'				=> 'أبعاد الصورة ينبغي أن تكون على الأقل %1$s بكسل عرضاً و %2$s بكسل ارتفاعاً وعلى الأكثر %3$s بكسل عرضاً و %4$s بكسل ارتفاعاً. أبعاد الصورة المقدمة هي %5$s بكسل عرضاً و %6$s بكسل ارتفاعاً.',
));
