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
	'ALL_AVAILABLE'			=> 'جميع المتاح',
	'ALL_RESULTS'			=> 'النتائج كلها',

	'DISPLAY_RESULTS'		=> 'عرض النتائج كـ',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'البحث وجد تطابق وحيد',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'البحث وجد تطابقان',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'البحث وجد %d تطابقات',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'البحث وجد %d تطابقاً',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'البحث وجد %d تطابق',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'البحث وجد أكثر من تطابق واحد',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'البحث وجد أكثر من تطابقان',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'البحث وجد أكثر من %d تطابقات',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'البحث وجد أكثر من %d تطابقاً',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'البحث وجد أكثر من %d تطابق',	// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),

	'GLOBAL'				=> 'إعلان عام',

	'IGNORED_TERMS'			=> 'محظور',
	'IGNORED_TERMS_EXPLAIN'	=> 'الكلمات الآتية تم تجاهلها لاعتبارها كلمات شائعة جداً <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'الانتقال إلى المشاركة',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'المنتدى يتطلب منك أن تكون مسجلاً و تسجل الدخول لمشاهدة المشاركات',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'يتطلب المنتدى أن تكون مشتركا و مسجلا الدخول لتتمكن من استعراض المشاركات غير المقروءة.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'يتطلب المنتدى أن تكون مشتركا ومسجلا دخولك لتتمكن من رؤية المشاركات الجديدة منذ آخر زيارة.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'لقد أدخلت كلمات كثيرة جداً للبحث. يرجى عدم إدخال أكثر من كلمة واحدة.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'لقد أدخلت كلمات كثيرة جداً للبحث. يرجى عدم إدخال أكثر من كلمتان.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'لقد أدخلت كلمات كثيرة جداً للبحث. يرجى عدم إدخال أكثر من %1$d كلمات.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'لقد أدخلت كلمات كثيرة جداً للبحث. يرجى عدم إدخال أكثر من %1$d كلمة.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
	),

	'NO_KEYWORDS'			=> 'ينبغي عليك أن تحدد كلمة واحدة على الأقل للبحث عنها، كل كلمة ينبغي أن تتكون من %s حرف على الأقل ولا ينبغي أن تحتوي على أكثر من %s حرف باستثناء العلامات الشاملة.',
	'NO_RECENT_SEARCHES'	=> 'لم تُجرى أي عملية بحث مؤخراً',
	'NO_SEARCH'				=> 'عفواً ولكن غير مسموح لك استعمال محرك البحث',
	'NO_SEARCH_RESULTS'		=> 'لم يعثَر على نتائج مناسبة',
	'NO_SEARCH_LOAD'		=> 'عذراً، لكن لا يمكنك استخدام البحث الآن. حمل الخادم مرتفع. يرجى المحاولة لاحقاً.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'عذراً لكن لا يمكنك استخدام البحث الآن. يرجى المحاولة ثانيةً بعد ثانية واحدة.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'ذراً لكن لا يمكنك استخدام البحث الآن. يرجى المحاولة ثانيةً بعد ثانيتان.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'ذراً لكن لا يمكنك استخدام البحث الآن. يرجى المحاولة ثانيةً بعد %d ثوان.',		// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'ذراً لكن لا يمكنك استخدام البحث الآن. يرجى المحاولة ثانيةً بعد %d ثانية.',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
	),
	'NO_SEARCH_UNREADS'		=> 'عُذراً ولكن يبدو أن البحث عن المشاركات الغير مقروءة غير مُفعّل.',
	'WORD_IN_NO_POST'		=> 'لم يعثَر على أية مشاركة وذلك لأن الكلمة <strong>%s</strong> غير موجودة في أي مشاركة',
	'WORDS_IN_NO_POST'		=> 'لم يعثَر على أية مشاركة وذلك لأن الكلمات <strong>%s</strong> غير موجودة في أي مشاركة',

	'POST_CHARACTERS'		=> 'خانة من المشاركة',
	'PHRASE_SEARCH_DISABLED'	=> 'البحث عن الجملة كما هي غير مدعوم في هذا المنتدى.',

	'RECENT_SEARCHES'		=> 'عمليات بحث حديثة',
	'RESULT_DAYS'			=> 'حدد النتائج بوقت سابق',
	'RESULT_SORT'			=> 'ترتيب النتائج بواسطة',
	'RETURN_FIRST'			=> 'ابحث في أول',
	'GO_TO_SEARCH_ADV'		=> 'الذهاب إلى البحث المتقدم',

	'SEARCHED_FOR'				=> 'كلمة البحث المستخدمة',
	'SEARCHED_TOPIC'			=> 'المواضيع التي بُحِثَ فيها',
	'SEARCHED_QUERY'			=> 'قيمة البحث',
	'SEARCH_ALL_TERMS'			=> 'ابحث عن الكلمات كلها أو استخدم سؤال البحث كما هو',
	'SEARCH_ANY_TERMS'			=> 'ابحث عن أي كلمة',
	'SEARCH_AUTHOR'				=> 'ابحث عن كاتب',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'استخدم النجمة (*) كعلامة شاملة للمطابقة الجزئية',
	'SEARCH_FIRST_POST'			=> 'أول مشاركة من الموضوع فقط',
	'SEARCH_FORUMS'				=> 'ابحث في المنتديات',
	'SEARCH_FORUMS_EXPLAIN'		=> 'اختر المنتدى أو المنتديات التي ترغب بالبحث فيها، للسرعة يمكنك البحث بداخل المنتديات الفرعية باختيار المنتدى الأب تنشيط البحث في المنتديات الفرعية أدناه',
	'SEARCH_IN_RESULTS'			=> 'ابحث في هذه النتائج',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'ضع علامة <strong>+</strong> في بداية الكلمة التي ينبغي أن تكون ضمن النتائج وعلامة <strong>-</strong> أمام الكلمة التي لا تريدها أن تظهر، ضع قائمة بالكلمات مفصولة بـ <strong>|</strong> بين قوسين إذا كنت تريد لكلمة واحد منها فقط أن تظهر. استخدم النجمة (*) كعلامة عامة للمطابقة الجزئية',
	'SEARCH_MSG_ONLY'			=> 'نص الرسالة فقط',
	'SEARCH_OPTIONS'			=> 'خيارات البحث',
	'SEARCH_QUERY'				=> 'سؤال البحث',
	'SEARCH_SUBFORUMS'			=> 'ابحث في المنتديات الفرعية',
	'SEARCH_TITLE_MSG'			=> 'عناوين المشاركات ونص الرسالة',
	'SEARCH_TITLE_ONLY'			=> 'عناوين المواضيع فقط',
	'SEARCH_WITHIN'				=> 'ابحث في',
	'SORT_ASCENDING'			=> 'تصاعدياً',
	'SORT_AUTHOR'				=> 'الكاتب',
	'SORT_DESCENDING'			=> 'تنازلياً',
	'SORT_FORUM'				=> 'المنتدى',
	'SORT_POST_SUBJECT'			=> 'عنوان المشاركة',
	'SORT_TIME'					=> 'وقت المشاركة',
	'SPHINX_SEARCH_FAILED'		=> 'فشل البحث: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'عذرا، لم يمكن اتمام البحث. تم تسجيل معلومات أكثر عن هذا الخطأ في سجل الأخطاء.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'يجب عليك تحديد حرف واحد على الأقل من اسم الكاتب.',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'يجب عليك تحديد حرفان على الأقل من اسم الكاتب.',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> 'يجب عليك تحديد %d حروف على الأقل من اسم الكاتب.',	// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> 'يجب عليك تحديد %d حرفاً على الأقل من اسم الكاتب.',	// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> 'يجب عليك تحديد %d حرف على الأقل من اسم الكاتب.',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
));
