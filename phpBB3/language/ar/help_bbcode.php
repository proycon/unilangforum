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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'مقدمة',
	),
	array(
		0 => 'ماذا تعني BBcode؟',
		1 => 'BBCode هو جزء من تطبيق HTML. باستطاعتك استخدام BBCode,التي أعدّها مدير المنتدى، في تنسيق المشاركات. بالإضافة لذلك تستطيع تعطيل BBCode لكل إرسال على حدة. BBCode مشابه لـ HTML، التأشير يحدد بأقواس مربعة [ و ] وليس &lt; و &gt; مما يعطي تحكم أفضل لما يعرض. بناءً على نوع القالب المستخدم يكون استعمال BBCode لرسائلك أسهل باستعمال الأزرار أعلى مربع الرسائل في صفحة إرسال الرسالة. حتى مع هذه السهولة سوف تجد الدليل الآتي مفيداً!',
	),
	array(
		0 => '--',
		1 => 'تنسيق النص',
	),
	array(
		0 => 'كيفية كتابة نص عريض أو مائل أو تحته خط',
		1 => 'تشمل BBCode دوال لتنسيق النص. تستطيع عمل ذلك بالطرق التالية: <ul><li>لجعل جزء من النص سميكاً ضعه بين العلامة <b>[b][/b]</b>، مثلاً <br /><br /><b>[b]</b>أهلاً<b>[/b]</b><br /><br />سوف تصبح <b>أهلاً</b></li><li>للنص المسطر <b>[u][/u]</b>، مثلاً:<br /><br /><b>[u]</b>صباح الخير<b>[/u]</b><br /><br />تصبح <u>صباح الخير</u></li><li>لجعل الخط مائل <b>[i][/i]</b>، مثلاً<br /><br />هذا <b>[i]</b>عظيم!<b>[/i]</b><br /><br />سوف يعطيك هذا <i>عظيم!</i></li></ul>',
	),
	array(
		0 => 'كيفية القيام بتغيير لون النص أو حجمه',
		1 => 'لتغيير لون وحجم الخط يمكنك استخدام التالي. لا تنسى أن شكل ولون النص يعتمد على برنامج المتصفح وجهازه: <ul><li>لتغيير اللون ضع النص بين الدوال <b>[color=][/color]</b>. تستطيع استخدام أي من الألوان المتعارف عليها (eg. red, blue, yellow, etc.) أو طريقة الأرقام الثلاثة الست عشرية، eg. #FFFFFF, #000000. مثلاً، لجعل لون النص أحمر تستطيع استخدام:<br /><br /><b>[color=red]</b>أهلاً!<b>[/color]</b><br /><br />أو<br /><br /><b>[color=#FF0000]</b>أهلاً!<b>[/color]</b><br /><br />جميعهم سوف يظهرون <span style="color:red">أهلاً!</span></li><li>لتغيير حجم الخط نستطيع بطريقة مماثلة استخدام <b>[size=][/size]</b>. هذه الدالة سوف تعتمد على القالب المستخدم لكن الطريقة المفضلة هي استخدام نظام النقط في حجم النص، ابتداء من 1 (صغير إلى أقصى درجة) إلى الرقم 29 (كبير جداً). مثلاً:<br /><br /><b>[size=9]</b>صغير<b>[/size]</b><br /><br />سوف تكون  <span style="font-size:30%;">صغير</span><br /><br />حيث:<br /><br /><b>[size=24]</b>ضخم!<b>[/size]</b><br /><br />ستكون <span style="font-size:200%;">ضخم!</span></li></ul>',
	),
	array(
		0 => 'هل يمكنني دمج أكثر من دالة لتنسيق النص؟',
		1 => 'نعم، بالطبع تستطيع ذلك، مثلاً لتلفت انتباه شخص ما تستطيع استخدام:<br /><br /><strong>[size=200][color=red][b]</strong>أنظر إلىّ!<strong>[/b][/color][/size]</strong><br /><br />هذا سوف يظهر <span style="color:red;font-size:200%;"><strong>أنظر إلىّ!</strong></span><br /><br />لكننا لا ننصح بكتابة الكثير من تلك الدوال! على الكاتب التأكد من إغلاق الإشارات بطريقة صحيحة، تذكر الأمر يعود إليك. مثلاً الآتي غير صحيح:<br /><br /><strong>[b][u]</strong>هذا خطأ<strong>[/b][/u]</strong>',
	),
	array(
		0 => '--',
		1 => 'اقتباس النص وكتابة نص ثابت',
	),
	array(
		0 => 'اقتباس المشاركات',
		1 => 'توجد طريقتان للاقتباس، واحدة مع ذكر الكاتب والثانية بدون ذكره.<ul><li>عند استخدام الاقتباس للرد على موضوع، عليك التذكر أن النص المقتبس سوف يوضع في نص رسالتك بين الدالتين <b>[quote=&quot;"][/quote]</b>. هذه الطريقة تمكنك من الإشارة	إلى الشخص المقتبس منه! مثل اقتباس جزء من نص 	كتبه Mr. Blobby نستخدم:<br /><br /><b>[quote="Mr. Blobby"]</b>النص 	الذي كتبه هذا الشخص<b>[/quote]</b><br /><br />	النتيجة سوف تضع، Mr. Blobby كتب: قبل النص مباشرة. تذكر 	أنه <b>ينبغي</b> تضمين الأقواس	" " حول النص المقتبس، وينبغي استعمالها.</li><li>	الطريقة الثانية هي للاقتباس بدون ذكر الكاتب. لتفعل ذلك ضع النص بين الدالتين <b>[quote][/quote]</b>. عند استعراض الرسالة سوف ترى النص المقتبس، اقتباس: قبل النص مباشرة.</li></ul>',
	),
	array(
		0 => 'إظهار حروف برنامج أو كتابة حروف ثابتة',
		1 => 'إذا كنت تريد إضافة نص ثابت لبرنامج أو كود معين، مثلاً نوع الخط Courier ينبغي عليك وضع النص بين الدالتين <strong>[code][/code]</strong>، كمثال<br /><br /><strong>[code]</strong>echo "This is some code";<strong>[/code]</strong><br /><br />العبارات كلها المستخدمة بين الدالتين <strong>[code][/code]</strong> ستظهر كما هي دون أي تغيير',
	),
	array(
		0 => '--',
		1 => 'إنشاء القوائم',
	),
	array(
		0 => 'إنشاء قائمة غير مرقمة',
		1 => 'BBCode يدعم نوعين من القوائم، غير مرقمة ومرقمة. هما مشابهتان لطريقة   HTML. القوائم غير المرقمة تظهر كنقاط كل نقطة بداية السطر يتبعها النص.  لتكوين قائمة غير مرقمة نستخدم <b>[list][/list]</b> مع وضع العلامة <b>[*]</b>قبل كل سطر. مثلاً النص الآتي، الألوان المفضل استعمالها:<br /><br /><b>[list]</b><br /><b>[*]</b>أحمر<br /><b>[*]</b>أزرق<br /><b>[*]</b>أصفر<br /><b>[/list]</b><br /><br />سوف تظهر هكذا:<ul><li>أحمر</li><li>أزرق</li><li>أصفر</li></ul>',
	),
	array(
		0 => 'إنشاء قائمة مرقمة',
		1 => 'النوع الثاني من القوائم، القوائم المرقمة تعطيك تحكم حول ما سيظهر قبل كل سطر سواء كان عدداً أم حرفاً. لتكوين قائمة عددية نستخدم <strong>[list=1][/list]</strong>لتكوين قائمة حرفية نستخدم <strong>[list=a][/list]</strong>. كما هو الحال في القائمة غير المرقمة نستعمل <strong>[*]</strong>. مثلاً:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>اذهب إلى السوق<br /><strong>[*]</strong>اشتر كمبيوتر<br /><strong>[*]</strong>اصرخ على الكمبيوتر حين يتعطل<br /><strong>[/list]</strong><br /><br />سوف يظهر الآتي:<ol style="list-style-type: arabic-numbers"><li>اذهب إلى السوق</li><li>اشتر كمبيوتر</li><li>اصرخ على الكمبيوتر حين يتعطل</li></ol>وفي حالة القائمة الحرفية نستخدم:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>الجواب الأول<br /><strong>[*]</strong>الجواب الثاني<br /><strong>[*]</strong>الجواب الثالث<br /><strong>[/list]</strong><br /><br />يعطينا<ol style="list-style-type: lower-alpha"><li>الجواب الأول</li><li>الجواب الثاني</li><li>الجواب الثالث</li></ol>',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'إنشاء الروابط',
	),
	array(
		0 => 'إنشاء رابط لموقع آخر',
		1 => 'طريقة BBCode المستخدمة في phpBB يدعم عدة طرائق لإظهار الروابط URIs، Uniform Resource Indicators المعروفة بـ URLs.<ul><li>أول هذه الطرائق هي استخدام الدوال <b>[url=][/url]</b>، أي نص يكتب بعد = سوف يكون رابط الموقع. مثلاً لتصل بالموقع phpbbarabia.com تستطيع استخدام:<br /><br /><b>[url=http://www.phpbbarabia.com/]</b>زوروا موقعنا<b>[/url]</b><br /><br />هذا سوف يكون الوصلة الآتية، <a href="http://www.phpbbarabia.com/">زوروا موقعنا</a> سوف تلاحظ أن الصفحة سوف تظهر في نافذة جديدة لتمكن الزائر من مواصلة التصفح في المنتدى.</li><li>إذا كنت تريد إظهار الرابط فقط يمكنك استخدام:<br /><br /><b>[url]</b>http://www.phpbbarabia.com/<b>[/url]</b><br /><br />هذا سوف يعطي الرابط الآتي، <a href="http://www.phpbbarabia.com/">http://www.phpbbarabia.com/</a></li><li>بالإضافة لذلك فإن phpBB تستخدم ما يسمى <i>وصلات سحرية</i>، وهي تحوبل اسم أي لموقع على الانترنت كتب بطريقة صحيحة إلى وصلة دون استخدام أي من الدوال السابقة الذكر أو استعمال الكلمة http://. مثلاً عندما تكتب www.phpbbarabia.com في رسالتك فإن هذا سوف يتحول إلى  <a href="http://www.phpbbarabia.com/">www.phpbbarabia.com</a> عند استعراض رسالتك. </li><li>الشيء نفسه ينطبق على عناوين البريد الالكتروني،  تستطيع إما استخدام البريد الالكتروني مباشرة مثل:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />وهو سيظهر <a href="emailto:no.one@domain.adr">no.one@domain.adr</a> أو تستطيع فقط كتابة no.one@domain.adr في رسالتك وهي ستتحول إلى رابط بريدي صحيح عند استعراضها.</li></ul>كما هو الحال مع دوال BBCode كلها تستطيع وضع عنوانين الصفحات في أي من الدوال السابق ذكرها مثل سميك أو مائل وغيرها مثل <b>[img][/img]</b> (انظر النقطة الآتية)، <b>[b][/b]</b>. كما هو الحال مع الدوال السابقة عليك التأكد من استعمال دوال الفتح والإغلاق بطريقة صحيحة، مثلاً:<br /><br /><b>[url=http://www.phpbbarabia.com/][img]</b>http://www.phpbbarabia.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>ليس</u> صحيحاً مما قد يدعو إلى إلغاء رسالتك، لذا عليك الانتباه',
	),
	array(
		0 => '--',
		1 => 'عرض الصور والمرفقات في المشاركات',
	),
	array(
		0 => 'إضافة الصور في المشاركة',
		1 => 'طريقة phpBB BBCode تستخدم دالة لإضافة الصور في رسائلك. هناك أمران مهمان عند إضافة الصور: كثير من المستخدمين لا يفضلون ظهور الكثير من الصور في الرسائل، الصورة المدرجة ينبغي أن تكون موجودة على الانترنت  (يعني يجب ألا تكون موجودة على جهاز الحاسب لديك فقط، إلا اذا كان لديك خادم صفحات الانترنت!).  لا توجد طريقة في الوقت الحالي لتخزين الصور في phpBB (هذه العقبات كلها سوف تدرس للإصدار القادم من phpBB). لإظهار صورة من موقع ما عليك تضمينه في الدالة <strong>[img][/img]</strong>. مثلاً:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />كما هو مذكور في تكوين الروابط أعلاه تستطيع وضع الصورة في الدالة <b>[url][/url]</b> إن أردت ذلك، مثلاً<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />سوف يعطي:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	),
	array(
		0 => 'إضافة المرفقات في المشاركة',
		1 => 'لإضافة مرفقات لمشاركتك فما عليك إلا تضمينها في الدالة <br /><br /><strong>[attachment=][/attachment]</strong><br /><br /> إذا كانت خاصية المرفقات مفعلة من إدارة المنتدى،  وكذلك يوجد قائمة منسدلة لإضافة المرفقات وقت كتابة المشاركة',
	),
	array(
		0 => '--',
		1 => 'أمور أخرى',
	),
	array(
		0 => 'هل يمكنني إضافة دالة خاصة بي؟',
		1 => 'إذا كنت تمتلك صلاحيات الدخول للوحة التحكم الرئيسية فتستطيع من خلالها إضافة دوال خاصة بك',
	),
);
