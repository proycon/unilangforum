<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
		1 => '簡介'
	),
	array(
		0 => 'BBCode 是什麼？',
		1 => 'BBCode 是一種特殊的 HTML 簡易使用方式。您能否在文章中使用 BBCode 由管理員決定。此外，您可以在發表文章的時候，設定是否使用 BBCode。BBCode 本身和 HTML 相似，標籤由方括弧 [ 和 ] 包圍，而不是角括號 &lt; 和 &gt;。它能否提供更多的功能，取決於系統所提供以及顯示的模組多寡。您會發現在發表文章的過程中，使用可點選的界面加入 BBCode 非常容易。因此，您可以發現以下的內容是很有用的。'
	),
	array(
		0 => '--',
		1 => '內文格式'
	),
	array(
		0 => '如何建立粗體字、斜體字和底線字',
		1 => 'BBCode 包含了允許您快速更改文字基礎風格的標籤。這由以下方法完成：<ul><li>用<strong>[b][/b]</strong>包圍一段文字使其變粗，例如：<br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br />將變成 <strong>Hello</strong></li><li>增加底線則使用 <strong>[u][/u]</strong>，例如：<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br />將變成 <u>Good Morning</u></li><li>變成斜體使用<strong>[i][/i]</strong>，例如：<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br />將變成 This is <i>Great!</i></li></ul>'
	),
	array(
		0 => '如何改變文字的顏色和大小',
		1 => '下列標籤可以用來改變文字的顏色和大小。需要注意的是，顯示效果取決於瀏覽者使用的瀏覽器和作業系統：<ul><li>改變文字的顏色使用標籤 <strong>[color=][/color]</strong>。您可以指定其他的可被識別的顏色（例如 red、blue、yellow、...等。）或者是 3 組十六進位數，例如 #FFFFFF、#000000。例如，要建立一段紅色的文字，您可以使用：<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />或者<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />都會輸出 <span style="color:red">Hello!</span></li><li>同樣的，改變文字的大小使用標籤 <strong>[size=][/size]</strong>。這個標籤取決於會員所選擇的界面模板，不過建議的格式是顯示文字百分比大小的數字值，從 20 開始（這會小到您看不見）直到 200（這就非常大了）。例如：<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />將輸出 <span style="font-size:30%;">SMALL</span><br /><br />但是，<br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br />將顯示 <span style="font-size:200%;">HUGE!</span></li></ul>'
	),
	array(
		0 => '我可以組合使用不同標籤嗎？',
		1 => '是的，當然可以，例如為了引起他人注意您可以這樣寫：<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />這將輸出 <span style="color:red;font-size:200%;"><strong>LOOK AT ME!</strong></span><br /><br />我們不建議您在文章中大量使用這樣形式的文字。在使用的過程中，請注意每個標籤都必須確保在最後正確地關閉。下面的例子就是錯誤的：<br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => '引用和輸出固定寬度文字'
	),
	array(
		0 => '在回覆中引用文字',
		1 => '引用文字有兩種方式，包含會員名稱或者不含。<ul><li>當您利用引用功能回覆一篇文章時，您會注意到加入到內容中的文字被<strong>[quote=""][/quote]</strong> 包圍起來。這種方式會包含被引用的會員名稱。例如要引用 Mr. Blobby 寫的一段文字，您可以輸入：<br /><br /><strong>[quote="Mr. Blobby"]</strong>Mr. Blobby 寫的文字<strong>[/quote]</strong><br /><br />則會自動在引用的文字前添上「Mr. Blobby 寫:」。記住您 <strong>必須</strong> 在您引用的人名外加上雙引號 ""。</li><li>第二種方式，可以進行任意的引用。在文章中使用 <strong>[quote][/quote]</strong> 標籤即可。當您檢視文章時，這將在文字前顯示「引用:」。</li></ul>'
	),
	array(
		0 => '輸出代碼或固定寬度資料',
		1 => '如果您需要輸出一段固定寬度的代碼或其他任何東西，例如 Courier 字體，您必須將文字包含在 <strong>[code][/code]</strong> 標籤中，例如<br /><br /><strong>[code]</strong>echo "This is some code";<strong>[/code]</strong><br /><br />所有使用 <strong>[code][/code]</strong> 標籤包圍的文字格式將會以原來的形式顯示。PHP 高亮度語法可以使用 <strong>[code=php][/code]</strong>，當您發表 PHP 代碼文章時建議使用，以利於閱讀。'
	),
	array(
		0 => '--',
		1 => '建立列表'
	),
	array(
		0 => '建立一個無序的列表',
		1 => 'BBCode 支援兩種列表形式，有序的和無序的。他們本質上在 HTML 中是一樣的。一個無序的列表，依次輸出每個元素。建立一個無序的列表您可以使用 <strong>[list][/list]</strong> 並在列表中使用 <strong>[*]</strong> 定義每個元素。例如列出您最喜愛的顏色：<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br />這將變成如下的列表：<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>'
	),
	array(
		0 => '建立一個有序的列表',
		1 => '第二種列表是有序的列表，它讓您可以控制每個元素前顯示的符號。建立一個有序的列表您可以使用 <strong>[list=1][/list]</strong> 建立一個數字化的列表，或者使用 <strong>[list=a][/list]</strong> 可以建立一個字母化的列表。同樣在列表中使用 <strong>[*]</strong> 定義每個元素。例如：<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Go to the shops<br /><strong>[*]</strong>Buy a new computer<br /><strong>[*]</strong>Swear at computer when it crashes<br /><strong>[/list]</strong><br /><br /> 將變成如下的：<ol style="list-style-type: decimal;"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>但是建立字母化的列表，您得使用：<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>The first possible answer<br /><strong>[*]</strong>The second possible answer<br /><strong>[*]</strong>The third possible answer<br /><strong>[/list]</strong><br /><br />得到<ol style="list-style-type: lower-alpha"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => '建立連結'
	),
	array(
		0 => '連結到另一個網址',
		1 => 'phpBB BBCode 可以透過好幾種方式建立超連結。<ul><li>首先可以使用 <strong>[url=][/url]</strong> 標籤，無論什麼類型，在等號後加入的內容都將成為一個連結。例如指向 phpBB.com 的連結，您可以使用：<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br /> 這將生成連結：<a href="http://www.phpbb.com/" target="_blank">Visit phpBB!</a> 您會注意到連結開啟新的視窗，這樣以便於會員繼續瀏覽原來的討論區。</li><li>如果您希望連結的文字本身顯示這個連結，您可以使用：<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />這將生成連結：<a href="http://www.phpbb.com/" target="_blank">http://www.phpbb.com/</a></li><li>另外，phpBB 允許一些自動連結檢測，這將任何語法正確的連結轉變為可以點選的連結。例如輸入 www.phpbb.com 到內容中，將在瀏覽文章時自動轉換為 <a href="http://www.phpbb.com/" target="_blank">www.phpbb.com</a> 輸出。</li><li>對於 Email 位址也是一樣的，您可以使用標籤指定，例如：<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />輸出 <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> 或者您也可以只輸入 no.one@domain.adr，這將在瀏覽文章時自動被轉換為 Email 連結.</li></ul>對於所有的 BBCode，您可以在最外面使用連結標籤包圍，例如：<strong>[img][/img]</strong> (see next entry)、<strong>[b][/b]</strong>、...等。對於格式化標籤，這取決於是否按順序正確的關閉每個標籤，例如:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />是 <u>不正確</u> 的，這將導致您的文章顯示不正常，所以要格外注意。'
	),
	array(
		0 => '--',
		1 => '在文章中顯示圖檔'
	),
	array(
		0 => '在文章中加入圖檔',
		1 => 'phpBB BBCode 簡化在文章中顯示圖檔的標籤。請在使用這個標籤時注意兩點: 許多會員可能對文章中大量的圖檔產生厭煩，而且您輸入的圖檔位址必須是存在於網站上的（這不能只存在於您自己的電腦上，除非您的電腦是一台網站伺服器！）。要顯示一個圖檔，您必須在圖檔的連結位址前後使用 <strong>[img][/img]</strong> 標籤包圍。例如：<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />就像上面連結部分提到的注意事項，您可以用 <strong>[url][/url]</strong> 標籤包圍圖檔，例如：<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />將生成：<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => '在文章中加入附加檔案',
		1 => '新的<strong>[attachment=][/attachment]</strong> BBCode 允許您在文章中任何地方加入附加檔案，如果討論區允許使用附加檔案功能，並且您有發表附加檔案的權限。在發表文章的視窗可以透過已上傳附加檔案下面的按鈕，將附加檔案加入到文章中。'
	),
	array(
		0 => '--',
 		1 => '其他內容'
	),
	array(
 		0 => '我能加入自己的標籤嗎？',
		1 => '如果您是這個討論區的管理員並且擁有相當的權限，那麼您可以自行定義 BBCode 加入更多的功能。'
	),
);
