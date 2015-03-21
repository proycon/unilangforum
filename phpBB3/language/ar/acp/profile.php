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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'أضيف حقل الملف الشخصي الإضافي بنجاح',
	'ALPHA_DOTS'			=> 'حروف وأرقام ونقاط',
	'ALPHA_ONLY'			=> 'حروف وأرقام فقط',
	'ALPHA_SPACERS'			=> 'حروف وأرقام ومسافات',
	'ALPHA_UNDERSCORE'		=> 'حروف وأرقام وشرطة سفلية',
	'ALPHA_PUNCTUATION'		=> 'حروف وأرقام مع فواصل، نقاط، شرطة سفلية وشرط تبدأ بحرف',
	'ALWAYS_TODAY'			=> 'دائماً الوقت الحالي',

	'BOOL_ENTRIES_EXPLAIN'	=> 'أدخل خياراتك الآن',
	'BOOL_TYPE_EXPLAIN'		=> 'حدد النوع، صندوق تحديد أو حقل أحادي. صندوق التحديد سوف يعرض لك فقط إذا اختاره العضو، في هذه الحالة فخيار اللغة <strong>الثانية</strong> سيستخدم الحقل الأحادي سيعرض حسب ما اختير',

	'CHANGED_PROFILE_FIELD'		=> 'تعدلت على حقول الملف الشخصي بنجاح',
	'CHARS_ANY'					=> 'أي حرف',
	'CHECKBOX'					=> 'صندوق تحديد',
	'COLUMNS'					=> 'أعمدة',
	'CP_LANG_DEFAULT_VALUE'		=> 'قيمة افتراضية',
	'CP_LANG_EXPLAIN'			=> 'وصف الحقل',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'الوصف أو الشرح المقدم هنا سيقدم للعضو',
	'CP_LANG_NAME'				=> 'اسم الحقل المقدم للعضو',
	'CP_LANG_OPTIONS'			=> 'خيارات',
	'CREATE_NEW_FIELD'			=> 'إنشاء حقل جديد',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'يوجد على الأقل حقل الملف الشخصي إضافي لم يترجم. الرجاء إدخال المعلومات اللازمة بالضغط على رابط “ترجم”',

	'DEFAULT_ISO_LANGUAGE'			=> 'اللغة الافتراضية [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'إدخالات اللغة الافتراضية لم تملأ من أجل حقل الملف الشخصي هذا',
	'DEFAULT_VALUE'					=> 'قيمة افتراضية',
	'DELETE_PROFILE_FIELD'			=> 'إزالة حقل الملف الشخصي',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'هل أنت متأكد من أنك تريد حذف هذا الحقل؟',
	'DISPLAY_AT_PROFILE'			=> 'عرض في لوحة تحكم العضو',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'يمكن للعضو تغير حقل الملف الشخصي هذا من خلال الملف الشخصي',
	'DISPLAY_AT_REGISTER'			=> 'عرض في صفحة التسجيل',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'إذا تم تفعيل هذا الخيار، فإن الحقل سوف يعرض أثناء التسجيل ويكون قابلاً للتغيير من لوحة تحكم العضو',
	'DISPLAY_ON_MEMBERLIST'			=> 'عرض في صفحة قائمة الأعضاء',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'إذا تم تفعيل هذا الخيار، فإن الحقل سيتم عرضه في صفوف المستخدمين في صفحة قائمة الأعضاء.',
	'DISPLAY_ON_PM'					=> 'عرض في صفحة مشاهدة الرسائل الخاصة',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'إذا تم تفعيل هذا الخيار، فإن الحقل سيتم عرضه في الملف المصغر في صفحة مشاهدة الرسائل الخاصة.',
	'DISPLAY_ON_VT'					=> 'عرض في صفحة الموضوع',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'إذا تم تفعيل هذا الخيار، سيظهر هذا الحقل عند معلومات العضو في صفحة الموضوع.',
	'DISPLAY_PROFILE_FIELD'			=> 'عرض الحقل الشخصي للجميع',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'حقل الملف الشخصي سوف يظهر في كل الأماكن الممسوحة داخل الإعدادات المحملة. باختيار “لا” سوف يختفي الحقل من صفحة المواضيع والملفات الشخصية وقائمة الأعضاء',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'أدخل خياراتك الآن، كل خيار في سطر مستقل',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'الرجاء الانتباه بأنك قادر على تغيير نص الخيارات وأيضا يمكنك إضافة خيارات جديدة إلى ما لا نهاية. وليس من الجيد إضافة خيارات جديدة بين الخيارات الموجودة فهذا قد ينتج في اختيارات خاطئة للأعضاء، ويمكن أيضا إن حذفت خيارات بعد حذف الخيارات الموجودة مسبقاً. حذف الخيارات الأخيرة ينتج عنه تحول الأعضاء إلى الخيارات الافتراضية',
	'EMPTY_FIELD_IDENT'				=> 'حقل التعريف فارغ',
	'EMPTY_USER_FIELD_NAME'			=> 'الرجاء إدخال عنوان/اسم الحقل',
	'ENTRIES'						=> 'الإدخالات',
	'EVERYTHING_OK'					=> 'كل شيء',

	'FIELD_BOOL'				=> 'منطقي (نعم/لا)',
	'FIELD_CONTACT_DESC'		=> 'وصف وسيلة التواصل',
	'FIELD_CONTACT_URL'			=> 'رابط وسيلة التواصل',
	'FIELD_DATE'				=> 'تاريخ',
	'FIELD_DESCRIPTION'			=> 'وصف الحقل',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'شرح الحقل الذي سيظهر للعضو',
	'FIELD_DROPDOWN'			=> 'قائمة منسدلة',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'				=> 'تعريف الحقل',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'التعريف المختار للحقل موجود مسبقاً، رجاء اختر اسم أخر',
	'FIELD_IDENT_EXPLAIN'		=> 'تعريف الحقل هو اسم "بالإنجليزية" لتعريف الحقل داخل قاعدة البيانات وقوالب الإدارة',
	'FIELD_INT'					=> 'أرقام',
	'FIELD_IS_CONTACT'			=> 'عرض الحقل كحقل تواصل',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'حقول التواصل يتم عرضها في قسم الاتصال في ملف المستخدم الشخصي ويتم عرضها بشكل مختلف في الملف المصغر بجانب المشاركات والرسائل الخاصة. يمكنك استخدام علامة <samp>%s</samp> كمتغير والذي سيتم استبداله بقيمة يحددها المستخدم.',
	'FIELD_LENGTH'				=> 'طول صندوق الإدخال',
	'FIELD_NOT_FOUND'			=> 'حقل الملف الشخصي غير موجود',
	'FIELD_STRING'				=> 'حقل نصي',
	'FIELD_TEXT'				=> 'مربع نصي',
	'FIELD_TYPE'				=> 'نوع الحقل',
	'FIELD_TYPE_EXPLAIN'		=> 'لا تستطيع تغير نوع الحقل فيما بعد',
	'FIELD_URL'					=> 'رابط',
	'FIELD_VALIDATION'			=> 'حقل التصديق',
	'FIRST_OPTION'				=> 'الخيار الأول',

	'HIDE_PROFILE_FIELD'			=> 'إخفاء حقل الملف الشخصي',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'المديرون والمشرفون فقط هم القادرون علي رؤية/تعديل حقل هذا الملف الشخصي. إذا كانت مفعلة، حقل الملف الشخصي سيكون معروضاً فقط في الملف الشخصي للأعضاء',

	'INVALID_CHARS_FIELD_IDENT'	=> 'تعريف حقل الملف الشخصي ينبغي أن يحتوي فقط على حروف a-z صغيرة و_',
	'INVALID_FIELD_IDENT_LEN'	=> 'تعريف حقل الملف الشخصي ينبغي أن يحتوي فقط على طول 17 حروف',
	'ISO_LANGUAGE'				=> 'اللغة [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'خيارات اللغة المحددة [<strong>%s</strong>]',
	
	'LETTER_NUM_DOTS'			=> 'أي حروف، أرقام أو نقاط',
	'LETTER_NUM_ONLY'			=> 'أي حروف أو أرقام',
	'LETTER_NUM_PUNCTUATION'	=> 'أي حروف، أرقام، فواصل، نقاط، شرطة سفلية وشرطة بادئاً بأي حرف',
	'LETTER_NUM_SPACERS'		=> 'أي حروف، أرقام أو مسافات',
	'LETTER_NUM_UNDERSCORE'		=> 'أي حروف، أرقام أو شرطة سفلية',

	'MAX_FIELD_CHARS'		=> 'أقصى عدد للحروف',
	'MAX_FIELD_NUMBER'		=> 'أعلي قيمة مسموحه للرقم',
	'MIN_FIELD_CHARS'		=> 'أدنى عدد للحروف',
	'MIN_FIELD_NUMBER'		=> 'أقل قيمة مسموحه للرقم',

	'NO_FIELD_ENTRIES'			=> 'لا إدخالات محددة',
	'NO_FIELD_ID'				=> 'لا رقم حقل محدد',
	'NO_FIELD_TYPE'				=> 'لا نوع حقل محدد',
	'NO_VALUE_OPTION'			=> 'الخيار مساوي لقيمة غير مدخلة',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'قيمة غير مدخلة. إذا كان هذا الخيار مطلوب، العضو سيتلقى خطأ عند اختياره للخيار المحدد هنا',
	'NUMBERS_ONLY'				=> 'فقط الأرقام من (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'خيارات أساسية',
	'PROFILE_FIELD_ACTIVATED'	=> 'تفعل حقل الملف الشخصي بنجاح',
	'PROFILE_FIELD_DEACTIVATED'	=> 'تفعل حقل الملف الشخصي بنجاح',
	'PROFILE_LANG_OPTIONS'		=> 'خيارات اللغة المحددة',
	'PROFILE_TYPE_OPTIONS'		=> 'خيارات نوع الملف الشخصي المحدد',

	'RADIO_BUTTONS'				=> 'أزرار الحقل الأحادي',
	'REMOVED_PROFILE_FIELD'		=> 'حذِف حقل الملف الشخصي بنجاح',
	'REQUIRED_FIELD'			=> 'حقل مطلوب',
	'REQUIRED_FIELD_EXPLAIN'	=> 'فرض على الأعضاء ملء الحقل أو تحديده. هذا سيعرض الحقل في صفحة التسجيل وداخل لوحة تحكم العضو',
	'ROWS'						=> 'الصفوف',

	'SAVE'							=> 'حفظ',
	'SECOND_OPTION'					=> 'خيار ثانوي',
	'SHOW_NOVALUE_FIELD'			=> 'أظهر الحقل إن لم يتم اختيار قيمة',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'تحديد إذا ما كان حقل الملف الشخصي يجب عرضه إن لم يتم اختيار قيمة للحقولة الثانوية أو إن لم يتم اختيار قيمة بعد للحقول الأساسية.',
	'STEP_1_EXPLAIN_CREATE'			=> 'هنا يمكنك إدخال أول الخيارات الأساسية لحقل ملفك الشخصي الجديد. هذه المعلومة مطلوبة من أجل الخطوة التالية بحيث يمكنك وضع خيارات التذكير وتحسين ملفك الشخصي أكثر',
	'STEP_1_EXPLAIN_EDIT'			=> 'هنا يمكنك تغيير الخيارات الأساسية لحقل ملفك الشخصي الجديد. الخيارات المتصلة سيعاد حسابها ضمن الخطوة التالية',
	'STEP_1_TITLE_CREATE'			=> 'إضافة حقل ملف شخصي',
	'STEP_1_TITLE_EDIT'				=> 'تعديل حقل ملف شخصي',
	'STEP_2_EXPLAIN_CREATE'			=> 'هنا أنت قادر على تحديد بعض الخيارات الواسعة التي تود تعديلها',
	'STEP_2_EXPLAIN_EDIT'			=> 'هنا أنت قادر على تحديد بعض الخيارات الواسعة.<br /><strong>الرجاء تسجيل أن التعديلات على حقل الملف الشخصي لن تأثر على حقول ملف العضو الشخصي الموجود سابقاً</strong>',
	'STEP_2_TITLE_CREATE'			=> 'اختيارات محددة لحقل الملف الشخصي',
	'STEP_2_TITLE_EDIT'				=> 'خيارات محددة لحقل الملف الشخصي',
	'STEP_3_EXPLAIN_CREATE'			=> 'بما أنك تملك أكثر من لغة منصبة في المنتدى، عليك ملء لغات عناصر التذكير كذلك. حقل الملف الشخصي سيعمل مع اللغة الافتراضية المفعلة، يمكن ملء عناصر لغة التذكير لاحقاً أيضاً',
	'STEP_3_EXPLAIN_EDIT'			=> 'بما أنك تملك أكثر من لغة منصبة في المنتدى، تستطيع الآن تعديل لغات عناصر التذكير كذلك أو إضافتها. حقل الملف الشخصي سيعمل مع اللغة الافتراضية المفعلة',
	'STEP_3_TITLE_CREATE'			=> 'تعريفات لغات التذكير',
	'STEP_3_TITLE_EDIT'				=> 'تعريفات اللغة',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'ادخِل جملة افتراضية لتعرض، قيمة افتراضية. اتركها فارغة إن أردت عرضها فارغة في أول مكان',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'أدخل نص افتراضي ليعرَض، قيمة افتراضية. أتركه فارغا إن أردت عرضه فارغ في أول مكان',
	'TRANSLATE'						=> 'ترجمة',

	'USER_FIELD_NAME'	=> 'اسم الحقل/العنوان المقدم للعضو',

	'VISIBILITY_OPTION'				=> 'خيارات مرئية',
));
