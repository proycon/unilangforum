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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode هو تطبيق خاص لـ HTML لعرض المزيد من التحكم حول كيفية عرض شيء ما. من هذه الصفحة تستطيع إضافة وحذف وتعديل BBCodes خاصة',
	'ADD_BBCODE'				=> 'إضافة BBCode جديد',

	'BBCODE_DANGER'				=> 'يبدو أنك تحاول استخدام {TEXT} داخل وسوم HTML وهذا قد يسبب ثغرة من نوع XSS، استخدم المتغيرات التالية {SIMPLETEXT} أو {INTTEXT}، فقط قم بالمتابعة اذا كنت متأكد من استخدام {TEXT} بهذه الطريقة',
	'BBCODE_DANGER_PROCEED'		=> 'متابعة',

	'BBCODE_ADDED'				=> 'أضيف BBCode بنجاح',
	'BBCODE_EDITED'				=> 'تعدل BBCode بنجاح',
	'BBCODE_DELETED'			=> 'تم حذف الـ BBCode بنجاح.',
	'BBCODE_NOT_EXIST'			=> 'BBCode الذي حددته غير موجود',
	'BBCODE_HELPLINE'			=> 'سطر المساعدة',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'هذا الحقل يحتوي على النص الذي سيظهر عند وضع مؤشر الفأرة فوق BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'نص سطر المساعدة',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'التلميح المدخل للشرح طويل جدا',

	'BBCODE_INVALID_TAG_NAME'	=> 'أكواد BBCode التي أدخلتها موجودة مسبقاً',
	'BBCODE_INVALID'			=> 'BBCode الخاص بك يحتوي على صيغة غير صحيحة',
	'BBCODE_OPEN_ENDED_TAG'		=> 'BBCode الخاص بك يجب أن يحتوي كودين للفتح والإغلاق',
	'BBCODE_TAG'				=> 'كود',
	'BBCODE_TAG_TOO_LONG'		=> 'الكود الذي أدخلته كبير جداً',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'كود التعريف الذي قمت أدخلته طويل جداً، يرجى تقصيره قليلاً',
	'BBCODE_USAGE'				=> 'استعمال BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '<div style="direction:ltr;">[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]</div>',
	'BBCODE_USAGE_EXPLAIN'		=> 'هنا ستعرف كيف يستخدم BBCode، استبدل أي متغير للإدخال بالمتغير المقابل له المعرف مسبقاً (%sانظر في الأسفل%s)',

	'EXAMPLE'						=> 'مثال:',
	'EXAMPLES'						=> 'أمثلة:',

	'HTML_REPLACEMENT'				=> 'استبدال HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '<div style="direction:ltr;">&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {TEXT1};"&gt;{TEXT2}&lt;/span&gt;</div>',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'هنا ستعرف استبدال HTML الافتراضي للاكواد. لا تنس وضع الرموز أعلاه!',

	'TOKEN'					=> 'متغير معرف مسبقاً',
	'TOKENS'				=> 'متغيرات معرفة مسبقاً',
	'TOKENS_EXPLAIN'		=> 'المتغيرات المعرفة مسبقأً هي متغيرات تحمل قيماً معينة للمطابقة في إدخال المستخدم. لو كان كود جديد يحمل أحد هذه المتغيرات فسيعرف ويطابق في إدخال المستخدم في كل ٍ من الكود المعرّف وكود الهتمل المستبدل. لو احتجت أكثر من متغير من نفس النوع تستطيع ترقيمها كالآتي: {TEXT1}, {TEXT2}.<br /><br /> داخل كود الاستبدال الهتمل تستطيع استخدام متغيرات لغوية الموجود داخل مجلد language/ مثل: {L_<em>&lt;STRINGNAME&gt;</em>} حيث إن <em>&lt;STRINGNAME&gt;</em> هو اسم المتغير اللغوي. مثلاً {L_WROTE} سوف تظهر بعد عرضها كالآتي: &quot;كتب&quot;.<br /><br /><strong> رجاءً لاحظ أن هذه المتغيرات المعرفة مسبقاً هي فقط التي يمكن استخدامها داخل أكواد التسنيق </strong>',
	'TOKEN_DEFINITION'		=> 'ماذا يمكن أن يكون؟',
	'TOO_MANY_BBCODES'		=> 'لا تستطيع إنشاء BBCodes جديدة. الرجاء حذف واحد أو أكثر من BBCodes ثم حاول مجدداً',

	'tokens'	=>	array(
		'TEXT'			=> 'أي نص، بما فيها الحروف الأجنبية، أرقام، الخ… ينبغي ألا تستعمل هذه الرموز في وسوم HTML. بدلاً عن ذلك حاول استعمال IDENTIFIER أو SIMPLETEXT',
		'SIMPLETEXT'	=> 'الحروف اللاتينية (A-Z)، الأعداد، المسافات، الفواصل، النقط، علامة ناقص، علامة زائد',
		'INTTEXT'		=> 'احرف، رقم، مسافة، فاصلة، نقطة، ناقص، زائد، شرطة، سطر سفلي وفراغ.',
		'IDENTIFIER'	=> 'الحروف اللاتينية (A-Z)، الأعداد، المسافات، الفواصل، النقط، علامة ناقص، علامة زائد',
		'NUMBER'		=> 'أية مجموعة من الارقام',
		'EMAIL'			=> 'بريد الكتروني صحيح',
		'URL'			=> 'رابط صحيح باستعمال بروتوكول (http، ftp، الخ… لا يمكن استعمال لحقن الجافاسكربت). إذا لم يدخَل بروتوكول فسيضاف http:// تلقائياً',
		'LOCAL_URL'		=> 'الرابط المحلي. الرابط يجب أن يكون ذو صلة برابط صفحة الموضوع ولا يمكن أن يحتوي على اسم الخادم أو البروتكول، روابط بسوابق مثل “%s”',
		'RELATIVE_URL'	=> 'رابط ذو صلة. يمكنك استخدام هذا الخيار لمطابقة جزء من الرابط، كن حذراً عند استخدام الرابط الكامل للرابط ذو الصلة باستخدامك رابط منتداك. استخدم LOCAL_URL لترمز الى منتداك.',
		'COLOR'			=> 'لون HTML، يمكن استعمال شكل الأرقام <samp>#FF1234</samp> أو <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">مفاتيح ألوان CSS</a> مثل <samp>fuchsia</samp> أو <samp>InactiveBorder</samp>',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'من هذه الصفحة تستطيع إضافة الأيقونات التي قد يستعملها الأعضاء عند إرسال مواضيعهم ومشاركاتهم أو حذفها أوتعديلها. هذه الأيقونات عادة ما تعرَض بجوار عنوان الموضوع في المنتدى، أو عناوين المشاركات في صفحة الموضوع. تستطيع أيضاً إنشاء وتركيب حزم جديد من الايقونات',
	'ACP_SMILIES_EXPLAIN'	=> 'الابتسامات عادةً ما تكون عبارة عن صور صغيرة ومتحركة تستخدم للتعبير عن الأحاسيس والمشاعر. من هذه الصفحة تستطيع إضافة، حذف وتعديل الابتسامات التي سيستعملها الأعضاء في مشاركاتهم ورسائلهم الخاصة. تستطيع أيضاً إنشاء حزم جديدة من الابتسامات وتركيبها',
	'ADD_SMILIES'			=> 'اضافة ابتسامات عديدة',
	'ADD_SMILEY_CODE'		=> 'أضف كود ابتسامات إضافي',
	'ADD_ICONS'				=> 'إضافة أيقونات عديدة',
	'AFTER_ICONS'			=> 'بعد %s',
	'AFTER_SMILIES'			=> 'بعد %s',

	'CODE'						=> 'كود',
	'CURRENT_ICONS'				=> 'الأيقونات الحالية',
	'CURRENT_ICONS_EXPLAIN'		=> 'اختر ما تريد فعله بالأيقونات المركبة الحالية',
	'CURRENT_SMILIES'			=> 'الابتسامات الحالية',
	'CURRENT_SMILIES_EXPLAIN'	=> 'اختر ما تريد عمله بالابتسامات المركبة الحالية',

	'DISPLAY_ON_POSTING'		=> 'عرض في صفحة الكتابة',
	'DISPLAY_POSTING'			=> 'في صفحة المشاركة',
	'DISPLAY_POSTING_NO'		=> 'ليس في صفحة المشاركة',

	'EDIT_ICONS'				=> 'تعديل الأيقونات',
	'EDIT_SMILIES'				=> 'تعديل الابتسامات',
	'EMOTION'					=> 'الابتسامات',
	'EXPORT_ICONS'				=> 'تصدير وتحميل icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sبالضغط هنا، إعدادات الأيقونات سسُضغط إلى <samp>icons.pak</samp> وبمجرد تحميلها يمكن أن تستعمل ملف <samp>.zip</samp> أو <samp>.tgz</samp> يحتوي على الأيقونات جميعها بالإضافة إلى ملف الإعداد <samp>icons.pak</samp>%s',
	'EXPORT_SMILIES'			=> 'تصدير وتحميل smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sبالضغط هنا، إعدادات الابتسامات ستنضغط إلى <samp>smilies.pak</samp> الذي بمجرد تحميله يمكن أن يستعمل ملف<samp>.zip</samp> أو <samp>.tgz</samp> يحتوي على الابتسامات جميعها بالإضافة إلى ملف الإعداد <samp>smilies.pak</samp>%s',

	'FIRST'			=> 'البداية',

	'ICONS_ADD'				=> 'إضافة أيقونة جديدة',
	'ICONS_ADDED'			=> array(
		0	=> 'لم تتم إضافة أيقونات.',
		1	=> 'تمت إضافة الأيقونة بنجاح.',		// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'تمت إضافة الأيقونتان بنجاح.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'تمت إضافة الأيقونات بنجاح.',		// Plural Rule 3 - by TheIlluminative for phpBBArabia
	),
	'ICONS_CONFIG'			=> 'إعدادات الايقونة',
	'ICONS_DELETED'			=> 'تم حذف الأيقونة بنجاح',
	'ICONS_EDIT'			=> 'تعديل الأيقونة',
	'ICONS_EDITED'			=> array(
		0	=> 'لم يتم تحديث الأيقونات.',
		1	=> 'تم تحديث الأيقونة بنجاح.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'تم تحديث الأيقونتان بنجاح.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'تم تحديث الأيقونات بنجاح.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
	),
	'ICONS_HEIGHT'			=> 'ارتفاع الأيقونة',
	'ICONS_IMAGE'			=> 'صورة الأيقونة',
	'ICONS_IMPORTED'		=> 'تركبت حزمة الأيقونات بنجاح',
	'ICONS_IMPORT_SUCCESS'	=> 'استوردت حزمة الأيقونات بنجاح',
	'ICONS_LOCATION'		=> 'مكان الأيقونة',
	'ICONS_NOT_DISPLAYED'	=> 'الأيقونات الآتية لن تظهر في صفحة المشاركة',
	'ICONS_ORDER'			=> 'طلب الأيقونة',
	'ICONS_URL'				=> 'ملف صورة الأيقونة',
	'ICONS_WIDTH'			=> 'عرض الأيقونة',
	'IMPORT_ICONS'			=> 'تركيب حزمة الأيقونات',
	'IMPORT_SMILIES'		=> 'تركيب حزمة الابتسامات',

	'KEEP_ALL'			=> 'الاحتفاظ بالكل',

	'MASS_ADD_SMILIES'	=> 'إضافة ابتسامات عديدة',

	'NO_ICONS_ADD'		=> 'لا توجد أية أيقونات متوفرة للتركيب',
	'NO_ICONS_EDIT'		=> 'لا توجد أية أيقونات متوفرة للتعديل',
	'NO_ICONS_EXPORT'	=> 'ليس لديك أية أيقونات لإنشاء حزمة',
	'NO_ICONS_PAK'		=> 'لم توجد أية حزمة أيقونات',
	'NO_SMILIES_ADD'	=> 'لا توجد أية ابتسامات متوفرة للتركيب',
	'NO_SMILIES_EDIT'	=> 'لا توجد أي ابتسامات متوفرة للتعديل',
	'NO_SMILIES_EXPORT'	=> 'ليست لديك أي ابتسامات لإنشاء حزمة',
	'NO_SMILIES_PAK'	=> 'لم توجد أية حزمة ابتسامات',

	'PAK_FILE_NOT_READABLE'		=> 'لا يمكن قراءة ملف <samp>.pak</samp>',

	'REPLACE_MATCHES'	=> 'استبدال المتشابهة',

	'SELECT_PACKAGE'			=> 'اختيار ملف الحزمة',
	'SMILIES_ADD'				=> 'إضافة ابتسامة جديدة',
	'SMILIES_ADDED'				=> array(
		0	=> 'لم تتم إضافة ابتسامات.',
		1	=> 'تمت إضافة الابتسامة بنجاح.',		// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'تمت إضافة الابتسامتان بنجاح.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'تمت إضافة الابتسامات بنجاح.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
	),
	'SMILIES_CODE'				=> 'كود الابتسامة',
	'SMILIES_CONFIG'			=> 'إعدادات الابتسامة',
	'SMILIES_DELETED'			=> 'حذفت الابتسامة بنجاح',
	'SMILIES_EDIT'				=> 'تعديل الابتسامة',
	'SMILIE_NO_CODE'			=> 'الابتسامة “%s” تم تجاهلها، لعدم إضافة اختصار لها',
	'SMILIE_NO_EMOTION'			=> 'الابتسامة “%s” تم تجاهلها، لعدم إضافة صورة الابتسامة الخاصة بها',
	'SMILIE_NO_FILE'			=> 'الابتسامة “%s” تم تجاهلها، لأن ملف الصورة غير موجود.',
	'SMILIES_EDITED'			=> array(
		0	=> 'لم يتم تحديث ابتسامات.',
		1	=> 'تم تحديث الابتسامة بنجاح.',		// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'تم تحديث الابتسامتان بنجاح.',	// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'تم تحديث الابتسامات بنجاح.',		// Plural Rule 3 - by TheIlluminative for phpBBArabia
	),
	'SMILIES_EMOTION'			=> 'الابتسامة',
	'SMILIES_HEIGHT'			=> 'ارتفاع الابتسامة',
	'SMILIES_IMAGE'				=> 'صورة الابتسامة',
	'SMILIES_IMPORTED'			=> 'تركبت حزم الابتسامات بنجاح',
	'SMILIES_IMPORT_SUCCESS'	=> 'استوردت حزمة الابتسامات بنجاح',
	'SMILIES_LOCATION'			=> 'مكان الابتسامة',
	'SMILIES_NOT_DISPLAYED'		=> 'الابتسامات التالية لا تعرض في صفحة المشاركة',
	'SMILIES_ORDER'				=> 'ترتيب الابتسامات',
	'SMILIES_URL'				=> 'ملف صورة الابتسامة',
	'SMILIES_WIDTH'				=> 'عرض الابتسامة',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'تم الوصل للحد الأقصى من الابتسامات وهو ابتسامة واحدة.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'تم الوصل للحد الأقصى من الابتسامات وهو ابتسامتان.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'تم الوصل للحد الأقصى من الابتسامات وهو %d ابتسامات.',		// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'تم الوصل للحد الأقصى من الابتسامات وهو %d ابتسامة.',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
	),

	'WRONG_PAK_TYPE'	=> 'الحزمة المحدد لا تحتوي على البيانات الضرورية',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'من هذه اللوحة تستطيع إضافة الكلمات التي سوف تحجب تلقائيا في المنتديات أو تعديلها أو حذفها. أيضاً لن يستطيع الأشخاص التسجيل بأسماء تحتوي على هذه الكلمات. العلامة الشاملة (*) يمكن استخدامها أيضاً، على سبيل المثال: *سلام* تطابق كلمة الإسلامي، سلام* تطابق كلمة سلامي، *سلام تطابق كلمة الإسلام',
	'ADD_WORD'				=> 'اضافة كلمة جديدة',

	'EDIT_WORD'		=> 'تعديل رقابة الكلمة',
	'ENTER_WORD'	=> 'يجب عليك كتابة الكلمة والاستبدال الخاص بها',

	'NO_WORD'	=> 'لم تتحدد أية كلمة لتعديلها',

	'REPLACEMENT'	=> 'الاستبدال',

	'UPDATE_WORD'	=> 'تحديث رقابة الكلمة',

	'WORD'				=> 'الكلمة',
	'WORD_ADDED'		=> 'أضيفت رقابة الكلمة بنجاح',
	'WORD_REMOVED'		=> 'حذفت رقابة الكلمة بنجاح',
	'WORD_UPDATED'		=> 'تحدثت رقابة الكلمة بنجاح',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'باستعمال هذا النموذج تستطيع إضافة الرتب أو تعديلها أو مشاهدتها أو حذفها. تستطيع أيضاً إنشاء رتب خاصة والتي يمكن إعطاؤهها لعضو بسهولة عبر إدارة الأعضاء',
	'ADD_RANK'				=> 'إضافة رتبة جديدة',

	'MUST_SELECT_RANK'		=> 'يجب عليك اختيار رتبة',

	'NO_ASSIGNED_RANK'		=> 'لم تسند رتبة مخصصة',
	'NO_RANK_TITLE'			=> 'لم تحدد اسما للرتبة',
	'NO_UPDATE_RANKS'		=> 'حذفت الرتبة بنجاح. مع ذلك فإن العضويات التي تستخدم هذه الرتبة لم تحدث، تحتاج إلى إعادة ضبط الرتبة لهؤلاء الأعضاء يدوياً',

	'RANK_ADDED'			=> 'أضيفت الرتبة بنجاح',
	'RANK_IMAGE'			=> 'صورة الرتبة',
	'RANK_IMAGE_EXPLAIN'	=> 'استعمل هذه الخاصية لإضافة صورة صغيرة مرتبطة بالرتبة. المسار مرتبط بالدليل الجذري لـ phpBB',
	'RANK_IMAGE_IN_USE'		=> '(قيد الاستخدام)',
	'RANK_MINIMUM'			=> 'الحد الأدنى من المشاركات',
	'RANK_REMOVED'			=> 'حذفت الرتبة بنجاح',
	'RANK_SPECIAL'			=> 'تعيين كـرتبة خاصة',
	'RANK_TITLE'			=> 'اسم الرتبة',
	'RANK_UPDATED'			=> 'تحدثت الرتبة بنجاح',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'هنا تستطيع التحكم بالأسماء الممنوعة من الاستعمال. يمكنك أيضاً استخدام العلامة الشاملة (*) في الأسماء.',
	'ADD_DISALLOW_EXPLAIN'	=> 'تستطيع منع الأسماء باستعمال علامة النجمة * للمطابقة الجزئية',
	'ADD_DISALLOW_TITLE'	=> 'إضافة اسم ممنوع',

	'DELETE_DISALLOW_EXPLAIN'	=> 'تستطيع حذف الاسم الممنوع عبر اختياره من اللائحة والضغط على إرسال',
	'DELETE_DISALLOW_TITLE'		=> 'حذف الاسم الممنوع',
	'DISALLOWED_ALREADY'		=> 'الاسم الذي أدخلته ممنوع بالفعل.',
	'DISALLOWED_DELETED'		=> 'حذِف الاسم الممنوع بنجاح',
	'DISALLOW_SUCCESSFUL'		=> 'أضيف الاسم الممنوع بنجاح',

	'NO_DISALLOWED'				=> 'لا يوجد أسماء ممنوعة',
	'NO_USERNAME_SPECIFIED'		=> 'لم تحدد أو تختر اسم عضو للتعامل معه',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'هنا يمكنك إدارة الأسباب المستخدمة عند التبليغ عن المشاركات وعند رفض المشاركات من المشرف. هناك سبب واحد افتراضي (معلم ب*) لا يمكنك حذفه، هذا السبب يستخدم عموما إذا لم يكن هناك أي سبب آخر مناسبا',
	'ADD_NEW_REASON'		=> 'إضافة سبب جديد',
	'AVAILABLE_TITLES'		=> 'عناوين الأسباب المحلية المتوفرة',

	'IS_NOT_TRANSLATED'			=> 'السبب <strong>ليس</strong> محلياً',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'السبب <strong>ليس</strong> محلياً. إذا أردت إضافة النموذج المحلي، عليك بتحديد المفتاح الصحيح من ملفات اللغة في قسم أسباب التقارير',
	'IS_TRANSLATED'				=> 'السبب محلي',
	'IS_TRANSLATED_EXPLAIN'		=> 'السبب محلي. إذا كان العنوان الذي أدخلته هنا معرفا في ملفات اللغة، فسيختار النموذج المحلي المناسب لهذا السبب',

	'NO_REASON'					=> 'لم يوجد السبب',
	'NO_REASON_INFO'			=> 'ينبغي عليك تحديد العنوان والوصف لهذا السبب',
	'NO_REMOVE_DEFAULT_REASON'	=> 'لا تستطيع حذف السبب الافتراضي "أخرى"',

	'REASON_ADD'				=> 'إضافة سبب للتقارير/الرفض',
	'REASON_ADDED'				=> 'أضيف السبب بنجاح',
	'REASON_ALREADY_EXIST'		=> 'هناك سبب بهذا العنوان مسبقاً، يرجى اختيار عنوان آخر لهذا السبب',
	'REASON_DESCRIPTION'		=> 'وصف السبب',
	'REASON_DESC_TRANSLATED'	=> 'وصف السبب الذي سيعرض',
	'REASON_EDIT'				=> 'تعديل السبب',
	'REASON_EDIT_EXPLAIN'		=> 'هنا تستطيع إضافة وتعديل السبب',
	'REASON_REMOVED'			=> 'حذِف السبب بنجاح',
	'REASON_TITLE'				=> 'عنوان السبب',
	'REASON_TITLE_TRANSLATED'	=> 'عنوان السبب المعروض',
	'REASON_UPDATED'			=> 'تحدث السبب بنجاح',

	'USED_IN_REPORTS'		=> 'عدد التبليغات المستعمل بها',
));
