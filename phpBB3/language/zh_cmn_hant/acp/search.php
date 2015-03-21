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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '在這裡，您可以管理後端搜尋的索引。因為您通常只使用一個後端，您應該刪除所有不用的索引。改變搜尋設定 (例如最小/最大字數) 之後，應重新建立索引以反映那些更改。',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '在這裡，您可以定義如何使用後端搜尋的文章索引和執行搜尋。您可以設定不同的選項以影響所需搜尋動作的執行。部分設定和和搜尋引擎的後端是一樣的。',

	'COMMON_WORD_THRESHOLD'					=> '共有字詞門檻',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '在所有的文章中大比例出現的字詞將被當作是共有的。共有字詞在搜尋中將被忽略。若設定 0 則取消這項功能。只有當文章數大於 100 時這個設定才有效。如果您想要新的設定生效，那麼您必須重新建立搜尋索引。',
	'CONFIRM_SEARCH_BACKEND'				=> '您確定切換不同的搜尋後端嗎？更換後您需要重新建立索引。如果您不打算再切換回舊的搜尋後端，您也可以刪除原先的搜尋索引以釋放空間。',
	'CONTINUE_DELETING_INDEX'				=> '繼續先前的索引刪除過程',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '索引刪除過程已經開始。要檢視搜尋頁面您必須先完成或刪除它。',
	'CONTINUE_INDEXING'						=> '繼續先前的索引過程',
	'CONTINUE_INDEXING_EXPLAIN'				=> '索引過程已經開始。要檢視搜尋頁面您必須先完成或刪除它。',
	'CREATE_INDEX'							=> '建立索引',

	'DELETE_INDEX'							=> '刪除索引',
	'DELETING_INDEX_IN_PROGRESS'			=> '正在刪除索引中',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '後端搜尋正在清除索引，這需要花幾分鐘的時間。',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> '後端 MySQL 全文索引只能在 MySQL4 或更高的版本中使用。',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL 全文索引只能在 MyISAM 或 InnoDB 型態的資料表使用。在 InnoDB 型態的資料表使用全文索引，需要 MySQL 5.6.4 或之後的版本。',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '索引文章總數',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => '至少要有這麼多字元的字詞被索引，以便搜尋。您或您的主機只能由改變 MySQL 的設定來改變它。',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => '沒有比這更多的字元之字詞被索引，以便搜尋。您或您的主機只能由改變 MySQL 的設定來改變它。',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> '後端 PostgreSQL 全文索引只能在 PostgreSQL 使用。',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> '索引文章總數',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL 版本',
	'FULLTEXT_POSTGRES_TS_NAME'				=> '文字搜尋設定簡介：',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> '關鍵字的最小字元數',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> '關鍵字的最大字元數',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> '後端搜尋必須 PostgreSQL 8.3 版以上。.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> '文字搜尋設定簡介用來確定分析器和字典。',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> '至少要有這麼多的字元被包含在資料庫查詢中。',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> '不能超過這麼多的字元被包含在資料庫查詢中。',

	'FULLTEXT_SPHINX_CONFIGURE'				=> '配置以下的設定來生成 Sphinx 設定檔',
	'FULLTEXT_SPHINX_DATA_PATH'				=> '資料庫目錄路徑',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> '它將用來儲存索引和記錄檔。您可以建立網路可以通過之外部的目錄。（應該有一個斜線）',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> '頻繁更新的增量索引之文章數',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx 搜尋程式類型主機',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Sphinx 搜尋程式類型使用的主機。留白，使用預設的 localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> '索引記憶限制',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> '這個數字應該在任何時候都比您的主機上可用的記憶體低。如果您遇到週期性的性能問題，這可能是由於索引佔用太多的資源。這可能有助於降低可用的索引記憶量。',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> '主要索引的文章數',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx 搜尋程式類型埠',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Sphinx 搜尋程式類型使用的埠。留白，使用預設的 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'phpBB 的 sphinx 搜尋只有支持 MySQL 和 PostgreSQL。',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx 設定檔',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Sphinx 設定檔生成的內容。這資料需要被貼進 sphinx 搜尋程式的 sphinx.conf 之中。以您資料庫的帳密取代  [dbuser] 和 [dbpassword] 。',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Sphinx 資料的目錄之路經沒有指定。請定義路徑與送出，以生成設定檔。',

	'GENERAL_SEARCH_SETTINGS'				=> '一般搜尋設定',
	'GO_TO_SEARCH_INDEX'					=> '前往搜尋頁面',

	'INDEX_STATS'							=> '索引統計',
	'INDEXING_IN_PROGRESS'					=> '索引進行中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '後端搜尋正在檢索討論區的所有文章。這需要花幾分鐘到幾小時的時間，取決於您討論區資料量的大小。',

	'LIMIT_SEARCH_LOAD'						=> '搜尋頁面系統負荷限制',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '如果一分鐘內系統負荷超過這個值，搜尋頁面將離線，1.0 等於一個處理器 100% 的使用。這個功能只在 UNIX/Linux 系統的伺服器上有效。',

	'MAX_SEARCH_CHARS'						=> '搜尋索引的最大字元數',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '搜尋時多於這個字元數的字詞將不會被檢索。',
	'MAX_NUM_SEARCH_KEYWORDS'				=> '允許最大的關鍵字數',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> '使用者能夠搜尋之最大的關鍵字數。設定 0 表示無限制。',
	'MIN_SEARCH_CHARS'						=> '搜尋索引的最小字元數',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '搜尋時少於這個字元數的字詞將不會被檢索。',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '作者姓名最小的字元數',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '會員在搜尋作者姓名時至少必須輸入的字元數。如果作者的會員名稱長度小於這個數字，您仍然可以輸入完整會員名稱搜尋作者的文章。',

	'PROGRESS_BAR'							=> '進度棒',

	'SEARCH_GUEST_INTERVAL'					=> '訪客搜尋間隔',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '在重複搜尋中訪客必須等待的間隔時間 (秒)。如果一個訪客在搜尋，那麼所有其他人必須等待直到搜尋間隔時間通過。',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> '所有 id 直到 %2$d 的文章都已經建立索引，這一階段處理了 %1$d 篇文章。<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> '目前索引的比率接近每秒 %1$.1f 篇文章。<br />索引正在進行中...',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> '所有 id 直到 %2$d 的文章都已經從搜尋索引中移除。<br />刪除正在進行中...',
	),
	'SEARCH_INDEX_CREATED'					=> '在資料庫中所有文章已經建立索引成功。',
	'SEARCH_INDEX_REMOVED'					=> '這個後端的搜尋索引資料已經清除成功。',
	'SEARCH_INTERVAL'						=> '會員搜尋間隔',
	'SEARCH_INTERVAL_EXPLAIN'				=> '在重複搜尋中會員必須等待的間隔時間 (秒)。這個時間間隔檢查是單獨地針對每個會員。',
	'SEARCH_STORE_RESULTS'					=> '搜尋結果快取時間',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '快取的搜尋結果將在這個時間 (秒) 後將終止。設定為 0 則停用搜尋快取。',
	'SEARCH_TYPE'							=> '後端搜尋',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB 允許您選擇用於全文檢索的後端。預設搜尋是使用 phpBB 自己的全文檢索。',
	'SWITCHED_SEARCH_BACKEND'				=> '您已經切換了後端搜尋。要使用新的後端搜尋，您應該確定您所選擇的後端已經建立索引。',

	'TOTAL_WORDS'							=> '已經建立索引字詞的總數',
	'TOTAL_MATCHES'							=> '已經建立與文章相關索引字詞的總數',

	'YES_SEARCH'							=> '啟用搜尋功能',
	'YES_SEARCH_EXPLAIN'					=> '允許會員使用搜尋功能，包括搜尋會員。',
	'YES_SEARCH_UPDATE'						=> '啟用全文更新',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '當文章發表時更新全文索引，如果停用搜尋功能那麼此設定無效。',
));
