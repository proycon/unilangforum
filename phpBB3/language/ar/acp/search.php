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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'هنا تستطيع إدارة خلفيات فهرسة البحث. بما أنك تستخدم خلفية واحدة لعملية البحث فعليك إزالة كل فهارس البحث غير المستخدمة. بعد تعديل بعض إعدادات البحث (على سبيل المثال: أكبر/أقل عدد للحروف) قد يكون من المجدي إعادة تكوين الفهرسة لتفعيل تلك التغييرات',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'هنا تستطيع اختيار خلفية البحث التي تستعمل في فهرسة المواضيع وعمليات البحث. تستطيع ضبط العديد من الخيارات والتي قد تؤثر في مدى المعالجة المطلوبة لتنفيذ بعض المهام. بعض تلك الإعدادات مستخدمة لخلفيات البحث كلها',

	'COMMON_WORD_THRESHOLD'					=> 'الدرجة الحرجة للكلمات المشهورة',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'الكلمات التي تدخل في نسبة كبيرة من المشاركات ستعتبر مشهورة، الكلمات المشهورة نتجاهلها في عمليات البحث. ضعها صفر لتعطيلها. تتفعل إذا كان هناك أكثر من 100 مشاركة فقط',
	'CONFIRM_SEARCH_BACKEND'				=> 'هل أنت متأكد من أنك تريد التحويل إلى خلفية بحث أخرى؟ بعد تغير خلفية البحث عليك أن تنشئ فهرسة لخلفية البحث الجديدة. إذا لم تكن تنوي الرجوع إلى خلفية البحث القديمة يمكنك أيضاً إزالة فهرسة خلفية البحث القديمة لتحرير موارد النظام',
	'CONTINUE_DELETING_INDEX'				=> 'الاستمرار في عملية إزالة الفهرس السابق',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'لقد حدثت عملية إزالة فهرسة سابقاً. لكي تصل إلى صفحة فهرسة البحث عليك أن تنهي العملية أو تلغيها',
	'CONTINUE_INDEXING'						=> 'الاستمرار في علمية الفهرسة السابقة',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'لقد حدثت عملية فهرسة سابقاً. لكي تصل إلى صفحة فهرسة البحث عليك أن تنهي هذه الفهرسة أو تلغيها',
	'CREATE_INDEX'							=> 'إنشاء فهرس',

	'DELETE_INDEX'							=> 'إلغاء فهرس',
	'DELETING_INDEX_IN_PROGRESS'			=> 'جاري حذف الفهرس حالياً',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'خلفية البحث تلغي الفهرس حالياً. قد يستغرق هذا العمل بعض الدقائق',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'خاصية fulltext من MySQL لا يمكن استخدامها إلا مع نسخة MySQL4 وأعلى.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'فهرسة MySQL للنص الكامل [ fulltext ] يمكن استخدامها مع MyISAM أو جداول InnoDB. مطلوب نسخة MySQL 5.6.4 أو احدث لاستخدام فهرسة النص الكامل [ fulltext ] مع جداول InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'العدد الكلي للمشاركات المفهرسة',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'سوف يتم فهرسة الكلمات بهذا العدد من الحروف. بالإمكان تغيير هذه الإعدادات عن طريقة قاعدة البيانات MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'سوف يتم فهرسة الكلمات التي تحوي على حروف أقل من هذا العدد بالإمكان تغيير هذه الإعدادات عن طريق قاعدة البيانات MySQL.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'خاصية النص الكامل من PostgreSQL لا يمكن استخدامها إلا مع قاعدة بيانات PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'العدد الكلي للمشاركات المفهرسةTotal number of indexed posts',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'نسخة PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'إعدادات نص البحث:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'الحد الأدنى لطول الكلمة في البحث',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'الحد الأقصى لطول الكلمة في البحث',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'خلفية البحث هذه تتطلب نسخة PostgreSQL 8.3 وأعلى.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'إعدادات بحث النص تستخدم لتحديد المحلل والقاموس.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'الكلمات التي تحتوي على هذا العدد من الأحرف على الأقل سيتم إدراجها في الطلبات لقاعدة البيانات.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'الكلمات التي لا تحتوي على عدد أحرف أكثر من هذا سيتم إدراجها في الطلبات لقاعدة البيانات.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'خصص الإعدادات التالية لتكوين ملف إعدادات sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'المسار لمجلد البيانات',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'سيتم استخدامه لتخزين الفهارس وملفات السجلات. يجب عليك إنشاء هذا المجلد خارج المجلدات التي يمكن الوصول إليها عن طريق الويب. (يجب أن يحتوي على شرطة مائلة بآخره)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'عدد المشاركات في الفهرس المحدث باستمرار',
	'FULLTEXT_SPHINX_HOST'					=> 'المستضيف الخفي لبحث sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'المستضيف الذي يسمع عليه الملف الخفي لبحث sphinx. أتركه فارغاً لاستعمال localhost الافتراضي',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'حد الذاكرة للفهرسة',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'هذا الرقم يجب دوماً أن يكون أقل من الذاكرة العشوائية المتوفرة في جهازك. إذا كان هناك مشاكل دورية في الأداء فربما يكون هذا بسبب أن الفهرسة تستهلك الكثير من الموارد. قد يساعدك أن تقوم بتقليل كمية الذاكرة المتاححة للفهرسة.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'عدد المشاركات في الفهرس الرئيسي',
	'FULLTEXT_SPHINX_PORT'					=> 'منفذ الملف الخفي لبحث sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'المنفذ الذي يسمع عليه الملف الخفي لبحث sphinx. أتركه فارغاً لاستعمال المنفذ الافتراضي لـ Sphinx API رقم 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'بحث sphinx لـ phpBB يدعم قواعد بيانات MySQL وPostgreSQL فقط.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'ملف إعدادات sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'المحتوى المكون لملف إعدادات sphinx. هذه البيانات يجب أن يتم لصقها في ملف sphinx.conf والذي يستخدم في الملف الخفي لبحث sphinx. استبدل المتغيران [dbuser] و [dbpassword] بعلومات حساب قاعدة البيانات لديك.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'مسار مجلدات بيانات وإعدادات sphinx غير معرف. يرجى تعريف المسار والإرسال لتكوين ملف الإعدادات.',

	'GENERAL_SEARCH_SETTINGS'				=> 'إعدادات بحث عامة',
	'GO_TO_SEARCH_INDEX'					=> 'الذهاب إلى صفحة فهرسة البحث',

	'INDEX_STATS'							=> 'إحصائيات الفهرس',
	'INDEXING_IN_PROGRESS'					=> 'جاري الفهرسة حالياً',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'خلفية البحث حالياً تفهرس كل المشاركات في هذا المنتدى. قد يستغرق هذا بضع دقائق إلى بضع ساعات بحسب حجم المنتدى الخاص بك',

	'LIMIT_SEARCH_LOAD'						=> 'حد استهلاك صفحة البحث',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'إذا استُهلكت دقيقة واحدة لتحميل صفحة البحث، فإنها لن تستجيب 1.0 تساوي 100% لاستهلاك معالج الخادم، هذه العملية تتم فقط على خوادم يونيكس',

	'MAX_SEARCH_CHARS'						=> 'أقصى عدد للحروف المفهرسة بخاصية البحث',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'الكلمات التي لا تتجاوز هذا العدد من الحروف ستفهرس',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'الحد الأقصى لعدد كلمات البحث المسموح بها',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'الحد الأقصى لعدد كلمات البحث المسموح للأعضاء بالبحث عنها، إذا وضعت القيمة 0 فإن الحد الأعلى سيكون لا نهائيا',
	'MIN_SEARCH_CHARS'						=> 'أدنى عدد للحروف المفهرسة بخاصية البحث',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'الكلمات التي تحتوي على هذا العدد من الحروف على الأقل هي التي ستفهرس',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'أقل عدد لاسم المستخدم',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'على المستخدم أن يضع على الأقل هذا العدد من الحروف عن استعمال خاصية البحث لاستعمال علامة شاملة للبحث عن مستخدم. إذا كان اسم مستخدم للكاتب أصغر من هذا الرقم فيمكنك إجراء عملية البحث هذه بإدخال اسم المستخدم كاملاً',

	'PROGRESS_BAR'							=> 'شريط التقدم',

	'SEARCH_GUEST_INTERVAL'					=> 'فترة الانتظار لبحث الزوار',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'المدة بالثواني التي ينتظرها الزائر ليتمكن من القيام بعملية بحث أخرى. إذا بحث أحد الزوار فيتوجب على بقية الزوار جميعهم انتظار هذه المدة ليتمكنوا من البحث',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'تمت فهرسة جميع المشاركات حتى المشاركة رقم %2$d، منهم %1$d مشاركة تمت فهرستهم في هذه الخطوة.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'المعدل الحالي للفهرسة يبلغ تقريباً %1$.1f مشاركة في الثانية.<br />جار الفهرسة…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'تم حذف جميع المشاركات حتى المشاركة %2$d من فهرس البحث.<br />جار الحذف…',
	),
	'SEARCH_INDEX_CREATED'					=> 'تفهرست المشاركات كلها في قاعدة البيانات بنجاح',
	'SEARCH_INDEX_REMOVED'					=> 'حذِف الفهرس لخلفية البحث المحددة بنجاح',
	'SEARCH_INTERVAL'						=> 'فترة الانتظار لبحث المستخدم',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'المدة بالثواني التي ينتظرها الأعضاء ليتمكنوا من القيام بعملية بحث أخرى. يتم احتساب هذه المدة لكل مستخدم على حدة',
	'SEARCH_STORE_RESULTS'					=> 'طول تخزين نتائج البحث',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'ستلتغى نتائج البحث المخزنة بعد هذا الوقت، بالثواني. ضع القيمة 0 إذا أردت أن تعطل تخزين نتائج البحث',
	'SEARCH_TYPE'							=> 'خلفية البحث',
	'SEARCH_TYPE_EXPLAIN'					=> 'منتديات phpBB تسمح لك باختيار الخلفية المستعملة للبحث عن النصوص في المشاركات. افتراضياً البحث سيستعمل خلفية fulltext لـ phpBB',
	'SWITCHED_SEARCH_BACKEND'				=> 'لقد حولت خلفية البحث. لتستعمل خلفية البحث الجديدة عليك أن تتأكد من وجود فهرس للخلفية التي اخترتها',

	'TOTAL_WORDS'							=> 'العدد الكلي للكلمات المفهرسة',
	'TOTAL_MATCHES'							=> 'العدد الكلي للكلمات المفهرسة والمتصلة بالمشاركات',

	'YES_SEARCH'							=> 'تفعيل خاصية البحث',
	'YES_SEARCH_EXPLAIN'					=> 'تفعيل واجهة البحث للمستخدمين بما في ذلك البحث عن أعضاء',
	'YES_SEARCH_UPDATE'						=> 'تمكين تحديث fulltext',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'تحديث فهرس fulltext عند الكتابة، سيلغى إذا تعطلت خاصية البحث',
));
