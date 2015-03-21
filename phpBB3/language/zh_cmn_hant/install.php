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
	'ADMIN_CONFIG'				=> '管理員設定',
	'ADMIN_PASSWORD'			=> '管理員密碼',
	'ADMIN_PASSWORD_CONFIRM'	=> '確認管理員密碼',
	'ADMIN_PASSWORD_EXPLAIN'	=> '請輸入一個 6 到 30 字元的密碼。',
	'ADMIN_TEST'				=> '測試管理員設定',
	'ADMIN_USERNAME'			=> '管理員會員名稱',
	'ADMIN_USERNAME_EXPLAIN'	=> '請輸入一個 3 到 20 字元的會員名稱。',
	'APP_MAGICK'				=> 'Imagemagick 支援 [附加檔案]',
	'AUTHOR_NOTES'				=> '作者提示<br />» %s',
	'AVAILABLE'					=> '可用',
	'AVAILABLE_CONVERTORS'		=> '可用的轉換程式',

	'BEGIN_CONVERT'					=> '開始轉換',
	'BLANK_PREFIX_FOUND'			=> '對資料庫的掃瞄顯示存在可用的無首碼表單。',
	'BOARD_NOT_INSTALLED'			=> '沒有發現已安裝的 phpBB',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> '為了進行轉換功能，您必須預先安裝一個全新的 phpBB3。請進行[<a href="%s">全新安裝</a>]。',
	'BACKUP_NOTICE'					=> '進行更新前請備份您的論壇，以防止更新過程中發生任何的問題。',

	'CATEGORY'					=> '分區',
	'CACHE_STORE'				=> '快取類型',
	'CACHE_STORE_EXPLAIN'		=> '資料快取的路徑，請優先使用檔案系統。',
	'CAT_CONVERT'				=> '轉換操作',
	'CAT_INSTALL'				=> '全新安裝',
	'CAT_OVERVIEW'				=> '綜合訊息',
	'CAT_UPDATE'				=> '升級',
	'CHANGE'					=> '改變',
	'CHECK_TABLE_PREFIX'		=> '請檢查您的資料表字首後重試。',
	'CLEAN_VERIFY'				=> '正在清理並校驗最終結構',
	'CLEANING_USERNAMES'		=> '清理會員名稱',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> 清理自會員名稱：',
	'COLLIDING_USERNAMES_FOUND'	=> '在舊的討論區中發現會員名稱衝突。為了完成討論區轉換，請刪除或重新命名這些會員使得只有一個使用該會員名稱的會員存在。',
	'COLLIDING_USER'			=> '» 會員 id：<strong>%d</strong> 會員名稱：<strong>%s</strong>（%d posts）',
	'CONFIG_CONVERT'			=> '正在轉換設定內容',
	'CONFIG_FILE_UNABLE_WRITE'	=> '寫入設定檔案失敗，創建這個檔案的其他方式如下：',
	'CONFIG_FILE_WRITTEN'		=> '寫入設定檔案成功，您現在可以繼續進行下一步。',
	'CONFIG_PHPBB_EMPTY'		=> '缺少 phpBB3 的設定訊息「%s」。',
	'CONFIG_RETRY'				=> '重試',
	'CONTINUE_CONVERT'			=> '繼續轉換',
	'CONTINUE_CONVERT_BODY'		=> '檢測到先前的轉換，您可以選擇開始新的轉換，還是繼續上一次的轉換。',
	'CONTINUE_LAST'				=> '繼續進行操作',
	'CONTINUE_OLD_CONVERSION'	=> '繼續進行以前的轉換',
	'CONVERT'					=> '轉換',
	'CONVERT_COMPLETE'			=> '轉換完成',
	'CONVERT_COMPLETE_EXPLAIN'	=> '您已經將您的討論區成功轉換為 phpBB 3.1，您現在可以登入以及 <a href="../">使用您的討論區</a>。請在刪除 /install/ 資料夾以啟用您的討論區前，確認所有的設定都已經被正確地轉換。請記得 phpBB 的線上使用說明位於 <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentation (使用說明文件)</a> 和 <a href="https://www.phpbb.com/phpBB/viewforum.php?f=466">3.0.x Support Forum（技術支援版面）</a>。',
	'CONVERT_INTRO'				=> '歡迎使用 phpBB 轉換架構',
	'CONVERT_INTRO_BODY'		=> '這裡您可以從其它（已安裝）的討論區導入資料，下表列出的是所有可用的轉換模組。如果其中沒有您想要的轉換模組，請訪問我們的網站，那裡可能會提供更多的轉換模組下載。',
	'CONVERT_NEW_CONVERSION'	=> '新的轉換',
	'CONVERT_NOT_EXIST'			=> '指定的轉換程式不存在。',
	'CONVERT_OPTIONS'			=> '選項',
	'CONVERT_SETTINGS_VERIFIED'	=> '您輸入的訊息已經被校驗，要開始轉換，請點選下面的按鈕。',
	'CONV_ERR_FATAL'					=> '嚴重錯誤',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '原討論區允許附加檔案使用 FTP 上傳，請停用 FTP 上傳，並確認設定了有效的上傳資料夾，所有附加檔案將被拷貝到這個新的資料夾。完成後，請重新開始轉換程式。',
	'CONV_ERROR_CONFIG_EMPTY'			=> '轉換程式沒有可用的設定資訊。',
	'CONV_ERROR_FORUM_ACCESS'			=> '無法得到版面的使用資訊。',
	'CONV_ERROR_GET_CATEGORIES'			=> '無法得到分區。',
	'CONV_ERROR_GET_CONFIG'				=> '無法恢復您的討論區設定。',
	'CONV_ERROR_COULD_NOT_READ'			=> '無法使用/閱讀「%s」。',
	'CONV_ERROR_GROUP_ACCESS'			=> '無法得到群組認證資訊。',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '在 add_bots() 中檢測到群組資料表的不一致 - 如果您要手動設定它，那麼您需要增加所有特殊的會員群組。',
	'CONV_ERROR_INSERT_BOT'				=> '無法在會員資料表中插入 bot。',
	'CONV_ERROR_INSERT_BOTGROUP'		=> '無法在 bots 資料表中插入 bot。',
	'CONV_ERROR_INSERT_USER_GROUP'		=> '無法在會員群組資料表中插入會員。',
	'CONV_ERROR_MESSAGE_PARSER'			=> '訊息解析錯誤',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '使用者注意：您必須指定 $convertor[\'avatar_path\'] 以使用 %s。',
	'CONV_ERROR_NO_FORUM_PATH'			=> '到原討論區的相對路徑尚未指定。',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '使用者注意：您必須指定 $convertor[\'avatar_gallery_path\'] 以使用 %s。',
	'CONV_ERROR_NO_GROUP'				=> '群組「%1$s」在 %2$s 中無法被找到。',
	'CONV_ERROR_NO_RANKS_PATH'			=> '使用者注意：您必須指定 $convertor[\'ranks_path\'] 以使用 %s。',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '使用者注意：您必須指定 $convertor[\'smilies_path\'] 以使用 %s。',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '使用者注意：您必須指定 $convertor[\'upload_path\'] 以使用 %s。',
	'CONV_ERROR_PERM_SETTING'			=> '無法插入/更新權限設定。',
	'CONV_ERROR_PM_COUNT'				=> '無法選擇私人訊息資料夾數量。',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '無法插入新的版面取代舊的分區。',
	'CONV_ERROR_REPLACE_FORUM'			=> '無法插入新的版面取代舊的版面。',
	'CONV_ERROR_USER_ACCESS'			=> '無法得到會員認證資訊。',
	'CONV_ERROR_WRONG_GROUP'			=> '錯誤的會員群組「%1$s」被定義在 %2$s。',
	'CONV_OPTIONS_BODY'					=> '這個頁面用於收集原討論區所需要的使用資料。輸入原討論區資料庫細節；轉換程式不會對下面的資料庫內容做任何改變。原討論區必須暫時停用以確保轉換能正確完成。',
	'CONV_SAVED_MESSAGES'				=> '已經保存的訊息',

	'COULD_NOT_COPY'			=> '無法複製檔案 <strong>%1$s</strong> 到 <strong>%2$s</strong><br /><br />請檢查目標檔案夾是否存在，並且是否可以被 web 伺服器寫入。',
	'COULD_NOT_FIND_PATH'		=> '無法找到您以前討論區的路徑。請檢查您的設定並再試一次。<br />» 指定的路徑是 %s。',

	'DBMS'						=> '資料庫類型',
	'DB_CONFIG'					=> '資料庫設定',
	'DB_CONNECTION'				=> '資料庫連接',
	'DB_ERR_INSERT'				=> '執行 <code>INSERT</code> 語句時發生錯誤。',
	'DB_ERR_LAST'				=> '執行 <var>query_last</var> 時發生錯誤。',
	'DB_ERR_QUERY_FIRST'		=> '執行 <var>query_first</var> 時發生錯誤。',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '執行 <var>query_first</var> 時發生錯誤：%s (「%s」)。',
	'DB_ERR_SELECT'				=> '執行 <code>SELECT</code> 語句時發生錯誤。',
	'DB_HOST'					=> '資料庫伺服器主機名稱或 DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN 意思是 Data Source Name，它只與安裝 ODBC 有關。在 PostgreSQL，經由 UNIX 網域插口，使用 localhost 以連接本地伺服器，以及經由 TCP，使用 127.0.0.1 以連接之。對於 SQLite，請輸入到您資料庫檔案的完整路徑。',
	'DB_NAME'					=> '資料庫名稱',
	'DB_PASSWORD'				=> '資料庫管理員密碼',
	'DB_PORT'					=> '資料庫伺服器連接埠',
	'DB_PORT_EXPLAIN'			=> '不用填寫，除非您確定伺服器使用一個非標準連接埠。',
	'DB_UPDATE_NOT_SUPPORTED'	=> '很抱歉！這 script 不支援從以前的 phpBB 版本更新到「%1$s」。您目前已安裝的版本是「%2$s」。運行這 script 之前，請更新到以前的版本。在 phpBB.com 的支援論壇可提供援助。',
	'DB_USERNAME'				=> '資料庫管理員名稱',
	'DB_TEST'					=> '連線測試',
	'DEFAULT_LANG'				=> '預設討論區語言',
	'DEFAULT_PREFIX_IS'			=> '根據提供的字首，轉換器無法找到可用的資料表。請確認您已經輸入要轉換的討論區正確的資料表。%1$s 預設的資料表字首是 <strong>%2$s</strong>。',
	'DEV_NO_TEST_FILE'			=> '在轉換器中沒有指定 test_file 變數的值。如果您是轉換器的使用者，您不應該看到這個錯誤，請聯絡轉換器的作者並報告這個錯誤。如果您是轉換器的作者，您必須指定一個原討論區中存在的檔案名稱，使得路徑校驗能正常進行。',
	'DIRECTORIES_AND_FILES'		=> '設定資料夾與檔案',
	'DISABLE_KEYS'				=> '停用關鍵字',
	'DLL_FTP'					=> 'FTP 支援 [ 安裝 phpBB ]',
	'DLL_GD'					=> 'GD 支援 [ 圖形確認碼 ]',
	'DLL_MBSTRING'				=> '多位元組字元支援',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'XML 支援 [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib 支援 [ 壓縮檔案：.gz .tar .gz .zip ]',
	'DL_CONFIG'					=> '下載設定',
	'DL_CONFIG_EXPLAIN'			=> '您應該將完整的 config.php 下載到您的個人電腦中，然後手動上傳它，覆蓋 phpBB 3.1 根目錄中已經存在的檔案。請注意以 ASCII 格式上傳（如果您不確定如何辦到，請閱讀您的 FTP 軟體說明檔）。上傳完成之後，請點選「完成」以進行下一步。',
	'DL_DOWNLOAD'				=> '下載',
	'DONE'						=> '完成',

	'ENABLE_KEYS'				=> '重新啟用關鍵字。這需要一段時間。',

	'FILES_OPTIONAL'			=> '可選的檔案與資料夾',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>可選的</strong> - 這些檔案、資料夾及權限不是必須的。如果它們不存在或不可寫入，安裝程式將會嘗試使用一些技術手段來建立它們。但如果存在，將會使安裝加速。',
	'FILES_REQUIRED'			=> '檔案與資料夾',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>必須的</strong> - 為了正常運行，phpBB 需要針對特定檔案或資料夾的寫入權限。如果下面出現「不存在」，您就需要建立相關的檔案或資料夾；如果出現「不可寫入」，您就需要改變相關的檔案或資料夾的權限來允許 phpBB 對其進行寫入操作。',
	'FILLING_TABLE'				=> '正在填充表格：<strong>%s</strong>',
	'FILLING_TABLES'			=> '正在填充表格',

	'FINAL_STEP'				=> '正在執行最後一步',
	'FORUM_ADDRESS'				=> '討論區位址',
	'FORUM_ADDRESS_EXPLAIN'		=> '這是指向您的舊討論區根目錄的連結位址，例如：<samp>http://www.example.com/phpBB2/</samp>。如果您不留白而填入了一個位址，那麼該位址所有的文章、私人訊息及簽名檔都將被替換為新的討論區位址。',
	'FORUM_PATH'				=> '討論區路徑',
	'FORUM_PATH_EXPLAIN'		=> '這是在磁碟上對應於您<strong>現在的 phpBB3 根目錄</strong>的原討論區 <strong>相對</strong> 路徑。',
	'FOUND'						=> '存在',
	'FTP_CONFIG'				=> '通過 FTP 傳輸設定',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB 已經在伺服器上檢測到 FTP 模組，如果您希望，那麼您可以嘗試透過它安裝您的 config.php。您將需要提供以下訊息，請注意會員名稱和密碼是用來登入伺服器！（如果您不確定是什麼，聯絡您的主機供應商。）',
	'FTP_PATH'					=> 'FTP 路徑',
	'FTP_PATH_EXPLAIN'			=> '這是從 FTP 根目錄至 phpBB 根目錄的相對路徑，例如：htdocs/phpBB3/。',
	'FTP_UPLOAD'				=> '上傳',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> '基本設定',
	'INITIAL_CONFIG_EXPLAIN'	=> '安裝程式認為您的伺服器可以運行 phpBB，您需要補充一些明確的資訊。如果您不知道如何連接您的資料庫，請首先考慮聯絡您的主機供應商（如前例），或是訪問 phpBB 支援討論區。在繼續下一步之前，請仔細檢查您輸入的訊息。',
	'INSTALL_CONGRATS'			=> '恭喜！',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		您已經成功安裝 phpBB %1$s。請繼續選擇以下其中一個選項：</p>
		<h2>轉換一個已經存在的討論區到 phpBB3</h2>
		<p>phpBB 轉換架構支援從 phpBB 2.0.x 和其他討論區軟體到 phpBB3 的轉換。如果您有一個舊的討論區需要轉換，請 <a href="%2$s">運行轉換程式</a>。</p>
		<h2>使用您的 phpBB3！</h2>
		<p>點選下面的連結，將帶您到管理員控制台（ACP）中，提交統計資料到 phpBB 的表格。如果您幫助我們寄送那資訊，那麼我們將不勝感激。之後，您應該花些時間去測試一些對您有用的選項。請記得 phpBB 的線上使用說明位於 <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentation（使用說明文件）</a>、<a href="%3$s">README（讀我）</a>和 <a href="https://www.phpbb.com/community/viewforum.php?f=466">Support Forum（技術支援版面）</a>。</p><p><strong>請在使用您的討論區前刪除、移動或重新命名 /install/ 資料夾。如果這個資料夾存在，那麼只有管理員控制台（ACP）才允許使用。</strong>',
	'INSTALL_INTRO'				=> '歡迎安裝！',

	'INSTALL_INTRO_BODY'		=> '使用這個選項，應該可以在您的伺服器上安裝 phpBB。</p><p>為了繼續安裝，您需要知道您的資料庫設定。如果您不清楚這些，請聯絡您的網站空間提供者。沒有這些訊息安裝將不能繼續。您需要：</p>

	<ul>
		<li>資料庫類型 - 您將使用的資料庫。</li>
		<li>資料庫伺服器主機名稱或 DSN - 資料庫伺服器位址。(例如：您的 MySQL 就安裝在本機上，那麼填入 <strong>localhost</strong> 即可)</li>
		<li>資料庫伺服器連接埠 - 資料庫伺服器連接埠 (一般情況下不需要輸入)。</li>
		<li>資料庫名稱 - 資料庫伺服器上的資料庫名稱。</li>
		<li>管理員名稱和密碼 - 用來登入上述資料庫的管理員資料。</li>
	</ul>

	<p><strong>注意：</strong> 如果您使用 SQLite，您應該在 DSN 框中輸入資料庫的完整路徑，並保持管理員名稱和密碼空白。為了安全的原因，您應該確保資料庫檔案不會存放在一個可以被公開訪問的資料夾底下。</p>

	<p>phpBB3 支援如下的資料庫：</p>
	<ul>
		<li>MySQL 3.23 或更高 (支援 MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 或更高（直接訪問或通過 ODBC）</li>
		<li>MS SQL Server 2005 或更高 (native)</li>
		<li>Oracle</li>
	</ul>

	<p>只有您的伺服器支援的資料庫才會被顯示。',
	'INSTALL_INTRO_NEXT'		=> '要開始安裝，點選下面的按鈕。',
	'INSTALL_LOGIN'				=> '登入討論區',
	'INSTALL_NEXT'				=> '下一步',
	'INSTALL_NEXT_FAIL'			=> '某些檢測未能通過，您應該在進行下一步之前修正這些問題，不然可能會導致安裝無法完成。',
	'INSTALL_NEXT_PASS'			=> '全部的基礎檢測都已經通過，您可以進行下一步了。如果您改變了一些設定比如權限、模組等等，您可以選擇重新檢測。',
	'INSTALL_PANEL'				=> '安裝面板',
	'INSTALL_SEND_CONFIG'		=> '很抱歉！phpBB 沒能將設定資料直接寫入您的 config.php 檔案。這可能是由於此檔案不存在或不可寫入。下面將顯示出一些選項幫助您完成 config.php 設定。',
	'INSTALL_START'				=> '開始安裝',
	'INSTALL_TEST'				=> '重新檢測',
	'INST_ERR'					=> '安裝過程出錯',
	'INST_ERR_DB_CONNECT'		=> '連接資料庫失敗，錯誤訊息如下',
	'INST_ERR_DB_FORUM_PATH'	=> '指定的資料庫檔案位於討論區資料夾內，您應該把它放在一個無法通過網路訪問的位置。',
	'INST_ERR_DB_INVALID_PREFIX'=> '您輸入的字首是無效的。它必須以英文字母開始，而且只能包含英文字母、數字和底線。',
	'INST_ERR_DB_NO_ERROR'		=> '沒有得到相關的錯誤訊息',
	'INST_ERR_DB_NO_MYSQLI'		=> '伺服器內安裝的 MySQL 版本與您選擇的「MySQL with MySQLi Extension」選項不相容，請嘗試「MySQL」選項。',
	'INST_ERR_DB_NO_SQLITE'		=> '您安裝的 SQLite 版本太舊，請升級到至少 2.8.2 版。',
	'INST_ERR_DB_NO_SQLITE3'	=> '您安裝的 SQLite 延伸版本太舊，它至少必須升級到 3.6.15 版。',
	'INST_ERR_DB_NO_ORACLE'		=> '伺服器內安裝的 Oracle 版本需要您將參數 <var>NLS_CHARACTERSET</var> 設定為 <var>UTF8</var>。請設定此參數，或將 Oracle 升級到至少 9.2 版。',
	'INST_ERR_DB_NO_POSTGRES'	=> '您選擇的資料庫不是 <var>UNICODE</var> 或 <var>UTF8</var> 編碼，請使用 <var>UNICODE</var> 或 <var>UTF8</var> 編碼的資料庫。',
	'INST_ERR_DB_NO_NAME'		=> '沒有指定資料庫名稱。',
	'INST_ERR_EMAIL_INVALID'	=> '您輸入的 e-mail 位址無效。',
	'INST_ERR_EMAIL_MISMATCH'	=> '您輸入的 e-mail 不符合。',
	'INST_ERR_FATAL'			=> '安裝過程出現嚴重錯誤',
	'INST_ERR_FATAL_DB'			=> '資料庫出現了一個嚴重而且不可回復的錯誤。這可能是由於您所指定的會員沒有 <code>CREATE TABLES</code> 或 <code>INSERT</code> 資料的適當權限，下面可能會提供您更進一步的資訊。請首先考慮聯絡您的服務供應商，或是訪問 phpBB 支援討論區，以得到進一步幫助。',
	'INST_ERR_FTP_PATH'			=> '無法轉換到指定資料夾，請檢查路徑訊息。',
	'INST_ERR_FTP_LOGIN'		=> '無法登入 FTP 伺服器，請檢查會員名稱和密碼。',
	'INST_ERR_MISSING_DATA'		=> '您必須填完此表格的全部欄位。',
	'INST_ERR_NO_DB'			=> '無法找到指定資料庫類型的 PHP 模組。',
	'INST_ERR_PASSWORD_MISMATCH'	=> '您輸入的密碼不符合。',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '您輸入的密碼過長，請輸入最多 30 個字元。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '您輸入的密碼太短，請輸入最少 6 個字元。',
	'INST_ERR_PREFIX'			=> '資料表的字首已經存在，請選擇另一個。',
	'INST_ERR_PREFIX_INVALID'	=> '您指定資料表字首無效，請嘗試另一個，移除像是連字號之類的字元。',
	'INST_ERR_PREFIX_TOO_LONG'	=> '您指定的資料表字首過長，上限為 %d 個字元。',
	'INST_ERR_USER_TOO_LONG'	=> '您輸入的會員名稱過長，請輸入最多 20 個字元。',
	'INST_ERR_USER_TOO_SHORT'	=> '您輸入的會員名稱太短，請輸入最少 3 個字元。',
	'INVALID_PRIMARY_KEY'		=> '無效的主鍵：%s',

	'LONG_SCRIPT_EXECUTION'		=> '請注意！這需要一段時間的...請不要停止這個動作的進行。',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> 延伸功能檢測',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> 是一個 PHP 延伸功能，它提供多位元組字串處理功能。某些 mbstring 的功能與 phpBB 不相容，必須被停用。',
	'MBSTRING_FUNC_OVERLOAD'				=> '函式超載',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> 必須被設定為不是 0 就是 4。',
	'MBSTRING_ENCODING_TRANSLATION'			=> '字元編碼',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> 必須被設定為 0。',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP 輸入字元轉換',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> 必須被設定為 <samp>通過</samp>。',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP 輸出字元轉換',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> 必須被設定為 <samp>通過</samp>。',

	'MAKE_FOLDER_WRITABLE'		=> '請確認此資料夾存在並且是可以被寫入的，然後再試試：<br />»<strong>%s</strong>。',
	'MAKE_FOLDERS_WRITABLE'		=> '請確認此資料夾存在並且是可以被寫入的，然後再試試：<br />»<strong>%s</strong>。',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> '您 phpBB 的 MySQL 資料庫結構是過期的。phpBB 已偵測到的版本是 MySQL 3.x/4.x，但是伺服器運行的版本是 MySQL %2$s.<br /><strong>在您執行更新之前，您需要升級結構。</strong><br /><br />請參考 <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">知識庫關於升級 MySQL 結構的文章</a>。如果您遭遇問題，那麼請到 <a href="https://www.phpbb.com/community/viewforum.php?f=466">我們的支援論壇</a>。',

	'NAMING_CONFLICT'			=> '命名衝突：%s 與 %s 都是別名<br /><br />%s',
	'NEXT_STEP'					=> '繼續進行下一步',
	'NOT_FOUND'					=> '不存在',
	'NOT_UNDERSTAND'			=> '無法理解 %s #%d，資料表 %s（「%s」）',
	'NO_CONVERTORS'				=> '沒有可用的轉換程式。',
	'NO_CONVERT_SPECIFIED'		=> '沒有指定轉換程式。',
	'NO_LOCATION'				=> '無法確定位置。如果您確定 Imagemagick 已經安裝，請於討論區安裝完成之後，在管理員控制台中指定它的位置。',
	'NO_TABLES_FOUND'			=> '沒有找到任何表格。',

	'OVERVIEW_BODY'				=> '歡迎使用 phpBB3！<br /><br />phpBB® 是目前世界上最廣泛被使用的自由軟體討論區程式。phpBB3 是自西元 2000 年以來所開發的最新產品。與之前的版本相比，phpBB3 具有更豐富的未來性，更友善的操作界面，並擁有 phpBB Team 的完整技術支援。phpBB3 大幅提升了 phpBB2 受人歡迎的效能，而且更增加了在之前的版本沒有但普遍需要的功能。我們深切盼望 phpBB3 能夠超過您的期望。<br /><br />這個安裝系統將會帶領您正確安裝 phpBB3，或是升級到 phpBB3 最新的版本，包含完整的轉換來自不同的討論區系統資料（例如 phpBB2）。關於更多的資訊，我們建議您瀏覽 <a href="../docs/INSTALL.html">安裝手冊</a>。<br /><br />了解關於 phpBB3 的授權或是獲悉有關目前的支援程度與我們對這項產品的立場，請選擇左方功能列內各別選項。請選擇上方的選單繼續進行安裝。',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 支援',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> '如果 PHP 的 PCRE 延伸功能不支援 UTF-8，phpBB 將 <strong>無法</strong> 運行。',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP 的 getimagesize() 功能是可用的',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>必須的</strong> - 為了讓 phpBB 正常工作，需要啟用 getimagesize 功能。',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON 支援t',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>必須的</strong> - 為了讓 phpBB 正常工作，需要啟用 PHP JSON 延伸功能。',
	'PHP_OPTIONAL_MODULE'			=> '可選模組',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>可選的</strong> - 這些模組或程式不是必須的。但如果它們是可用的，您將可以使用額外的功能。',
	'PHP_SUPPORTED_DB'				=> '支援的資料庫',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>必須的</strong> - 您必須至少擁有一個相容 PHP 的資料庫。如果下面沒有可用的資料庫模組，您應該聯絡主機供應商，或者查閱相關的 PHP 安裝文件以尋求建議。',
	'PHP_REGISTER_GLOBALS'			=> 'PHP 設定 <var>register_globals</var> 已停用',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> '如果此功能被允許，phpBB 仍然會運行。但基於安全理由，如果可以，建議您將 register_globals 功能停用。',
	'PHP_SAFE_MODE'					=> '安全模式',
	'PHP_SETTINGS'					=> 'PHP 版本和設定',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>必須的</strong> - 要安裝 phpBB，您必須使用至少 5.3.3 版本的 PHP。如果下面出現 <var>安全模式</var>，那麼表示您的 PHP 正在運行於安全模式，這將給遠程管理及類似功能帶來限制。',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP 設定 <var>allow_url_fopen</var> 為啟用狀態',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>可選的</strong> - 這個設定是可選的，不過某些 phpBB 的功能，例如外部頭像，可能會因為沒有這個功能而無法正常運作。',
	'PHP_VERSION_REQD'				=> 'PHP 版本 >= 5.3.3',
	'POST_ID'						=> '文章 ID',
	'PREFIX_FOUND'					=> '掃瞄資料表顯示使用 <strong>%s</strong> 作為字首是有效的安裝。',
	'PREPROCESS_STEP'				=> '正在執行轉換準備操作',
	'PRE_CONVERT_COMPLETE'			=> '全部的轉換準備步驟都已被成功完成，您現在可以開始進行實際的轉換操作。',
	'PROCESS_LAST'					=> '正在執行最後的指令',

	'REFRESH_PAGE'				=> '重新整理頁面以繼續轉換',
	'REFRESH_PAGE_EXPLAIN'		=> '如果設定為「是」，轉換程式將會在完成每一步之後重新整理頁面，然後繼續。如果這是您為了測試目的的第一次轉換而且決定提前獲得失誤，那麼我們建議您將此設定為「否」。',
	'REQUIREMENTS_TITLE'		=> '安裝一致性',
	'REQUIREMENTS_EXPLAIN'		=> '在完整安裝之前，phpBB 需要對您的伺服器設定及所需檔案進行檢測，以確定您是否可以安裝和運行 phpBB。請仔細閱讀以下結果，並在繼續進行之前確保所有必須的檢測都已通過。如果您希望使用任何基於非必須檢測的功能，請也確保相關檢測已通過。',
	'RETRY_WRITE'				=> '重新嘗試寫入設定',
	'RETRY_WRITE_EXPLAIN'		=> '如果您想允許 phpBB 寫入 config.php，您可以改變它的權限，然後點選下面的「重試」按鈕。請記得在安裝完成之後，恢復 config.php 的權限設定。',

	'SCRIPT_PATH'				=> 'Script 路徑',
	'SCRIPT_PATH_EXPLAIN'		=> '網域名稱指向 phpBB 的相對路徑，例如：<samp>/phpBB3</samp>。',
	'SELECT_LANG'				=> '選擇語言',
	'SERVER_CONFIG'				=> '伺服器設定',
	'SEARCH_INDEX_UNCONVERTED'	=> '搜尋索引沒有被轉換',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> '您的舊搜尋索引沒有轉換。搜尋將總是得到空的結果。如果要建立一個新索引，請到管理員控制台，選擇維護，然後從子功能表中選擇搜尋索引。',
	'SELECT_FORUM_GA'			=> '在 phpBB 3.1 的全域公告可連結到版面上。選擇您目前的全域公告之版面（以後可以移動）：',
	'SOFTWARE'					=> '討論區軟體',
	'SPECIFY_OPTIONS'			=> '設定轉換選項',
	'STAGE_ADMINISTRATOR'		=> '管理員詳細資料',
	'STAGE_ADVANCED'			=> '進階設定',
	'STAGE_ADVANCED_EXPLAIN'	=> '只有您知道需要一些非預設設定時，您才有必要更改此頁的內容。如果您不確定，請繼續至下一頁，因為這些設定可以隨時在管理員控制台中更改。',
	'STAGE_CONFIG_FILE'			=> '設定檔案',
	'STAGE_CREATE_TABLE'		=> '建立資料表',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'phpBB 3.1 所使用的資料庫表格已經建立並且填入了一些原始資料，請繼續至下一頁以完成 phpBB 安裝。',
	'STAGE_DATABASE'			=> '資料庫設定',
	'STAGE_FINAL'				=> '完成',
	'STAGE_INTRO'				=> '簡介',
	'STAGE_IN_PROGRESS'			=> '進行轉換',
	'STAGE_REQUIREMENTS'		=> '檢測需求',
	'STAGE_SETTINGS'			=> '設定',
	'STARTING_CONVERT'			=> '開始轉換操作',
	'STEP_PERCENT_COMPLETED'	=> '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
	'SUB_INTRO'					=> '簡介',
	'SUB_LICENSE'				=> '授權',
	'SUB_SUPPORT'				=> '支援',
	'SUCCESSFUL_CONNECT'		=> '連接成功',
	'SUPPORT_BODY'				=> '目前所釋出的穩定版本將提供完全且免費的支援。其中包括：</p><ul><li>安裝</li><li>設定</li><li>技術的問題</li><li>在軟體中可能的 bugs 之相關問題</li><li>從候選正式版本 (RC) 到最新的穩定版本的更新</li><li>從 phpBB 2.0.x 到 phpBB3 的轉換</li><li>從其他的討論區軟體到 phpBB3 的轉換 (請參訪 <a href="https://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a>)。</li></ul><p>我們鼓勵仍在運行 phpBB3 測試版的使用者以最新的版本來取代他們的安裝。</p><h2>擴展 / 風格</h2><p>擴展的相關問題，請您發表在 <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a> 合適的版面。<br />風格、樣版、主題的相關問題，請您發表在 <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a> 合適的版面。<br /><br />如果您的問題關係到某個特別的檔案，那麼請直接將它附加在發表的主題內。</p><h2>獲得支援</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package (phpBB 歡迎包)</a><br /><a href="https://www.phpbb.com/support/">Support Section（支援部門）</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide（快速啟動指導）</a><br /><br />要確保您隨時可以獲取最新的發佈與新聞，為何不 <a href="https://www.phpbb.com/support/">訂閱我們的電子報</a> 呢？<br /><br />',
	'SYNC_FORUMS'				=> '開始同步版面',
	'SYNC_POST_COUNT'			=> '正在同步文章',
	'SYNC_POST_COUNT_ID'		=> '正在同步<var>序號</var>為 %1$s 到 %2$s 的文章。',
	'SYNC_TOPICS'				=> '開始同步主題',
	'SYNC_TOPIC_ID'				=> '正在同步主題：<var>topic_id</var> %1$s 至 %2$s。',

	'TABLES_MISSING'			=> '無法找到這些資料表<br />» <strong>%s</strong>。',
	'TABLE_PREFIX'				=> '為資料庫中的資料表名稱加入字首',
	'TABLE_PREFIX_EXPLAIN'		=> '字首必須以英文字母開始，而且只能包含英文字母、數字和底線。',
	'TABLE_PREFIX_SAME'			=> '資料表字首需要與轉換之前所使用的相同。<br />» 之前所使用的資料表字首是 %s。',
	'TESTS_PASSED'				=> '檢測通過',
	'TESTS_FAILED'				=> '檢測未通過',

	'UNABLE_WRITE_LOCK'			=> '無法寫入鎖定檔案。',
	'UNAVAILABLE'				=> '不可用',
	'UNWRITABLE'				=> '不可寫',
	'UPDATE_TOPICS_POSTED'		=> '正在產生已發表主題資料',
	'UPDATE_TOPICS_POSTED_ERR'	=> '在產生已發表主題資料時發生錯誤。您可以在轉換結束後在管理員控制台中重試這個操作。',
	'VERIFY_OPTIONS'			=> '正在驗證轉換選項',
	'VERSION'					=> '版本',

	'WELCOME_INSTALL'			=> '歡迎安裝 phpBB 3',
	'WRITABLE'					=> '可寫入的',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> '所有的檔案都已經升級到最新版本。',
	'ARCHIVE_FILE'				=> '原始檔案',

	'BACK'				=> '後退',
	'BINARY_FILE'		=> '二進位檔案',
	'BOT'				=> '搜尋機器人',

	'CHANGE_CLEAN_NAMES'			=> '這方法將確認會員名稱沒有被重複使用。當使用這新的方法做比對時，會發現許多重複使用的會員名稱。再繼續下一步之前，您必須刪除或更名，以確認每個會員名稱都是獨一無二的。',
	'CHECK_FILES'					=> '檢查檔案',
	'CHECK_FILES_AGAIN'				=> '再次檢查檔案',
	'CHECK_FILES_EXPLAIN'			=> '在下面的步驟中相關聯的檔案都將被檢查 - 如果這是第一次檔案檢查，將花費一定的時間。',
	'CHECK_FILES_UP_TO_DATE'		=> '依照您資料庫的版本已是最新。您可以繼續檢查檔案，以確信所有的檔案都已經更新到了 phpBB 最新版本。',
	'CHECK_UPDATE_DATABASE'			=> '繼續升級過程',
	'COLLECTED_INFORMATION'			=> '已經收集到的檔案資訊',
	'COLLECTED_INFORMATION_EXPLAIN'	=> '下面的列表顯示需要更新的檔案資訊。請閱讀每個區塊前的訊息並理解其意義，以及瞭解您需要做的事情以確保升級成功。',
	'COLLECTING_FILE_DIFFS'			=> '正在收集需要轉換的檔案',
	'COMPLETE_LOGIN_TO_BOARD'		=> '現在您應該 <a href="../ucp.php?mode=login">登入到討論區</a> 並檢查系統是否正常工作。不要忘記刪除、重新命名或移動 install 資料夾！',
	'CONTINUE_UPDATE_NOW'			=> '現在繼續升級過程',		// 資料庫升級 script 結束時顯示
	'CONTINUE_UPDATE'				=> '現在繼續升級',					// 檔案上傳後顯示，表示升級尚未完成
	'CURRENT_FILE'					=> '目前原始檔案的開端',
	'CURRENT_VERSION'				=> '目前的版本',

	'DATABASE_TYPE'						=> '資料庫類型',
	'DATABASE_UPDATE_COMPLETE'			=> '資料庫更新完成！',
	'DATABASE_UPDATE_CONTINUE'			=> '繼續資料庫更新',
	'DATABASE_UPDATE_INFO_OLD'			=> '在安裝資料夾中的資料庫升級檔案是過時的。請確認您上傳的是正確版本的檔案。',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> '資料庫更新尚未完成。',
	'DELETE_USER_REMOVE'				=> '刪除會員以及他所發表文章',
	'DELETE_USER_RETAIN'				=> '刪除會員但保留其發表文章',
	'DESTINATION'						=> '目標檔案',
	'DIFF_INLINE'						=> '行內',
	'DIFF_RAW'							=> '簡略的比對差異',
	'DIFF_SEP_EXPLAIN'					=> '使用在已更新/新檔案之內的代碼區塊',
	'DIFF_SIDE_BY_SIDE'					=> '對齊',
	'DIFF_UNIFIED'						=> '比對差異',
	'DO_NOT_UPDATE'						=> '不要上傳這個檔案',
	'DONE'								=> '完成',
	'DOWNLOAD'							=> '下載',
	'DOWNLOAD_AS'						=> '下載為',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> '下載已修改的檔案 (建議)',
	'DOWNLOAD_CONFLICTS'				=> '下載有衝突的檔案',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '搜尋 &lt;&lt;&lt; 去發現衝突',
	'DOWNLOAD_UPDATE_METHOD'			=> '下載已修改的檔案',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '當您下載並解壓縮檔案後，您需要上傳檔案到 phpBB 根目錄。請上傳檔案到分別的位置。當你完成所有檔案的上傳後，請再用下面的按鈕檢查檔案。',

	'EDIT_USERNAME'	=> '編輯會員名稱',
	'ERROR'		=> '錯誤',
	'EVERYTHING_UP_TO_DATE'		=> '所有的一切都已經更新到最新的 phpBB 版本。您現在應該<a href="%1$s">登入您的論壇</a>以及檢查是否一切工作正常。不要忘了刪除、重新命名或移動您的 install 資料夾！請經由在您 ACP 的<a href="%2$s">發送統計資訊</a>模組，傳送給我們關於您的伺服器與論壇設定的更新資訊。.',

	'FILE_ALREADY_UP_TO_DATE'		=> '檔案已經是最新。',
	'FILE_DIFF_NOT_ALLOWED'			=> '檔案不允許不一樣。',
	'FILE_USED'						=> '使用資訊從',			// Single file
	'FILES_CONFLICT'				=> '有衝突的檔案',
	'FILES_CONFLICT_EXPLAIN'		=> '下面的檔案已經修改過，不是舊版本的原始檔案。phpBB 認為合併這些檔案會產生衝突。請檢查衝突並嘗試手工的解決，或者選擇一種合併的方式繼續更新。如果您手工修改消除了衝突，請再次運行檔案檢查。您也可以選擇為每個檔案優先選擇合併。這將捨棄舊版本檔案的衝突代碼而遺失您於這個檔案上的修改。',
	'FILES_DELETED'					=> '已刪除的檔案',
	'FILES_DELETED_EXPLAIN'			=> '下列檔案沒有存在新版本中。這些檔案必須從安裝過程中刪除。',
	'FILES_MODIFIED'				=> '已修改的檔案',
	'FILES_MODIFIED_EXPLAIN'		=> '下面的檔案已經修改過，不是舊版本的原始檔案。更新的檔案將合併您修改過和新的檔案。',
	'FILES_NEW'						=> '新檔案',
	'FILES_NEW_EXPLAIN'				=> '以下的檔案在安裝中不存在。',
	'FILES_NEW_CONFLICT'			=> '新的衝突檔案',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '下面的檔案在新版本中已更新，但是再對應資料夾已經存在同名檔案，這個檔案將被新檔案覆蓋。',
	'FILES_NOT_MODIFIED'			=> '未修改的檔案',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '下面的檔案沒有被修改。',
	'FILES_UP_TO_DATE'				=> '已經升級的檔案',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下的檔案已經是最新的，不需要升級。',
	'FTP_SETTINGS'					=> 'FTP 設定',
	'FTP_UPDATE_METHOD'				=> 'FTP 上傳',

	'INCOMPATIBLE_UPDATE_FILES'		=> '找到的升級檔案不適用於您目前的版本。您的安裝版本是 %1$s 而升級檔案是用於升級 phpBB %2$s 到 %3$s。',
	'INCOMPLETE_UPDATE_FILES'		=> '上傳的檔案不完全。',
	'INLINE_UPDATE_SUCCESSFUL'		=> '資料庫升級成功。現在您需要繼續升級過程。',

	'KEEP_OLD_NAME'		=> '保留會員名稱',

	'LATEST_VERSION'		=> '最新的版本',
	'LINE'					=> '行',
	'LINE_ADDED'			=> '已加入',
	'LINE_MODIFIED'			=> '已修改',
	'LINE_REMOVED'			=> '已刪除',
	'LINE_UNMODIFIED'		=> '未修改',
	'LOGIN_UPDATE_EXPLAIN'	=> '您必須登入後才能升級您的討論區。',

	'MAPPING_FILE_STRUCTURE'	=> '為了易於上傳，這裡有安裝 phpBB 檔案位置的地圖。',

	'MERGE_MODIFICATIONS_OPTION'	=> '合併修改',

	'MERGE_NO_MERGE_NEW_OPTION'	=> '不要合併 - 使用新檔案',
	'MERGE_NO_MERGE_MOD_OPTION'	=> '不要合併 - 使用目前安裝的檔案',
	'MERGE_MOD_FILE_OPTION'		=> '合併修改 (移除在衝突區塊內新的 phpBB 代碼)',
	'MERGE_NEW_FILE_OPTION'		=> '合併修改 (移除在衝突區塊內已修改過的代碼)',
	'MERGE_SELECT_ERROR'		=> '沒有正確地選擇衝突檔案的合併方式。',
	'MERGING_FILES'				=> '正在合併不同之處',
	'MERGING_FILES_EXPLAIN'		=> '現在正收集最後所需要改變的檔案<br /><br />請稍候，直到 phpBB 將所有已改變的檔案處理完成。',

	'NEW_FILE'						=> '衝突的末端',
	'NEW_USERNAME'					=> '新的會員名稱',
	'NO_AUTH_UPDATE'				=> '無權進行升級',
	'NO_ERRORS'						=> '沒有錯誤',
	'NO_UPDATE_FILES'				=> '不要升級以下檔案',
	'NO_UPDATE_FILES_EXPLAIN'		=> '以下的檔案是新的或者修改過的，但是在您的安裝的資料夾中找不到。如果列表中包含了 language/ 或者 styles/ 資料夾的檔案，那麼可能您曾經修改過資料夾結構，這個升級可能無法執行完全。',
	'NO_UPDATE_FILES_OUTDATED'		=> '沒有發現有效的更新資料夾，請確認上傳了最新的升級檔案。<br /><br />您的安裝似乎 <strong>不是</strong> 最新版本。更新的 phpBB 版本 %1$s 已經提供下載，請訪問 <a href="https://www.phpbb.com/downloads.php" rel="external">https://www.phpbb.com/downloads.php</a> 以獲得正確的版本 %2$s 到版本 %3$s 的升級包。',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> '您的版本已經是最新版本。沒有必要進行升級。如果您想要徹底地檢查您的檔案，請確認您上傳了正確的更新檔案。',
	'NO_UPDATE_INFO'				=> '無法找到升級的檔案資訊。',
	'NO_UPDATES_REQUIRED'			=> '不需要升級',
	'NO_VISIBLE_CHANGES'			=> '沒有明顯的改變',
	'NOTICE'						=> '注意',
	'NUM_CONFLICTS'					=> '衝突的數量',
	'NUMBER_OF_FILES_COLLECTED'		=> '目前大約有 %1$d 個不同，從 %2$d 個已經檢查的檔案中。<br />請稍候，直到檔案檢查完成。',

	'OLD_UPDATE_FILES'		=> '升級檔案已經過期。找到的升級檔案是用於 phpBB %1$s 到 phpBB %2$s 的升級，但是最新的 phpBB 版本是 %3$s。',

	'PACKAGE_UPDATES_TO'				=> '目前的升級包更新版本到',
	'PERFORM_DATABASE_UPDATE'			=> '進行資料庫升級',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> '在下面您將發現資料庫升級的按紐。資料庫升級需要花費一段時間，所以假如看起來似乎沒有反應，也請不要停止執行。當您處理完資料庫的升級後，請跟隨說明並繼續更新過程。',
	'PREVIOUS_VERSION'					=> '先前的版本',
	'PROGRESS'							=> '進度',

	'RELEASE_ANNOUNCEMENT'		=> '公告',
	'RESULT'					=> '結果',
	'RUN_DATABASE_SCRIPT'		=> '現在升級我的資料庫',

	'SELECT_DIFF_MODE'			=> '選擇比對模式',
	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載檔案格式',
	'SELECT_FTP_SETTINGS'		=> '選擇 FTP 設定',
	'SHOW_DIFF_CONFLICT'		=> '顯示差異/衝突',
	'SHOW_DIFF_DELETED'			=> '顯示檔案內容',
	'SHOW_DIFF_FINAL'			=> '顯示檔案比對結果',
	'SHOW_DIFF_MODIFIED'		=> '顯示合併的差異',
	'SHOW_DIFF_NEW'				=> '顯示檔案內容',
	'SHOW_DIFF_NEW_CONFLICT'	=> '顯示有衝突的差異',
	'SHOW_DIFF_NOT_MODIFIED'	=> '顯示差異',
	'SOME_QUERIES_FAILED'		=> '部分查詢失敗，失敗的語句列出如下。',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> '這不需要太過憂慮，更新會繼續。這個更新應該無法完全，如果想解決這個問題，您需要到我們的支援論壇去尋求協助。請看 <a href="../docs/README.html">README</a> 以獲得更多忠告的詳情。',
	'STAGE_FILE_CHECK'			=> '檢查檔案',
	'STAGE_UPDATE_DB'			=> '升級資料庫',
	'STAGE_UPDATE_FILES'		=> '升級檔案',
	'STAGE_VERSION_CHECK'		=> '版本檢查',
	'STATUS_CONFLICT'			=> '已修改的檔案產生衝突',
	'STATUS_DELETED'			=> '已刪除的檔案',
	'STATUS_MODIFIED'			=> '已修改的檔案',
	'STATUS_NEW'				=> '新檔案',
	'STATUS_NEW_CONFLICT'		=> '有衝突的新檔案',
	'STATUS_NOT_MODIFIED'		=> '未修改的檔案',
	'STATUS_UP_TO_DATE'			=> '已升級的檔案',

	'TOGGLE_DISPLAY'			=> '檢視/隱藏 檔案清單',
	'TRY_DOWNLOAD_METHOD'		=> '您也許想要嘗試下載已修改檔案的方式。<br />這個方式總是能正常運作，也是比較建議的升級方式。',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> '現在請嘗試這個方式',

	'UPDATE_COMPLETED'				=> '升級完成',
	'UPDATE_DATABASE'				=> '更新資料庫',
	'UPDATE_DATABASE_EXPLAIN'		=> '下一步，資料庫將被更新。',
	'UPDATE_DATABASE_SCHEMA'		=> '升級資料庫結構',
	'UPDATE_FILES'					=> '升級檔案',
	'UPDATE_FILES_NOTICE'			=> '請確認您也已經更新了討論區的檔案，這個檔案只是更新您的資料庫。',
	'UPDATE_INSTALLATION'			=> '升級安裝',
	'UPDATE_INSTALLATION_EXPLAIN'	=> '本選項，將升級您的 phpBB 到最新版本。<br />過程中所有的檔案都將被徹底地檢查。您可以檢視檔案和更新前的差異。<br /><br />檔案自動更新有兩種不同的方式。</p><h2>手動更新</h2><p>這個選項，您只需要下載有更新的檔案以確保不會遺失您其他已修改的檔案。下載後將檔案上傳到 phpBB 根目錄底下的正確位置。之後，您可以再次進行檔案檢查，檢查是否將檔案放到了正確的位置。</p><h2>利用 FTP 自動更新</h2><p>這個方法和第一個類似，但是不需要下載有更新的檔案和手動上傳它們。系統將為您自動做這個工作。用這個方法進行升級您需要知道您的 FTP 登入的詳細資料。一旦完成，系統將重新導向到檔案檢查以確認更新完全。<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>發佈公告</h1>

		<p>在您繼續更新過程之前，請閱讀最新版本的發佈公告，它包含很多有用的資訊。也包含完整的下載連結和改變記錄。</p>

		<br />

		<h1>如何使用 Automatic Update Package (自動更新包) 來更新您的安裝</h1>

		<p>建議的方法是使用自動更新包來更新您的安裝。您也可以使用寫在 INSTALL.html 文件的方法更新。自動更新的步驟是：</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>前往 <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> 下載「Automatic Update Package (自動更新包)」壓縮檔。<br /><br /></li>
			<li>解壓縮。<br /><br /></li>
			<li>上傳完成解壓縮的「install」以及「vendor」資料夾到您安裝 phpBB 的根目錄（即 config.php 檔案所在資料夾）。<br /><br /></li>
		</ul>

		<p>一旦完成上傳，您的討論區將因上傳 install 資料夾後，使得一般會員暫時離開討論區。<br /><br />
		<strong><a href="%1$s" title="%1$s">現在，開始在瀏覽器輸入您的 install 資料夾位址進行更新</a>。</strong><br />
		<br />
		整個更新過程您將被指導。更新完成後您將被通知。
		</p>
	',
	'UPDATE_METHOD'					=> '升級方式',
	'UPDATE_METHOD_EXPLAIN'			=> '你可以選擇合適的上傳方式。使用 FTP 上傳你需要於表單內填入 FTP 帳號的詳細資料。使用這種方法檔案將自動移動到新的位置並且透過在原檔案後加入 .bak 副檔名的方式備份原來的檔案。如果你選擇下載修改的檔案則你要解壓縮後手動上傳檔案到相關的資料夾。',
	'UPDATE_REQUIRES_FILE'			=> '現在底下列出升級所需要的檔案：%s',
	'UPDATE_SUCCESS'				=> '更新完成',
	'UPDATE_SUCCESS_EXPLAIN'		=> '成功更新所有的檔案。下一步將重新檢查所有的檔案以確認檔案獲得正確地更新。',
	'UPDATE_VERSION_OPTIMIZE'		=> '更新版本以及最佳化資料表',
	'UPDATING_DATA'					=> '更新資料',
	'UPDATING_TO_LATEST_STABLE'		=> '更新資料庫至最新的穩定版本',
	'UPDATED_VERSION'				=> '已更新的版本',
	'UPLOAD_METHOD'					=> '上傳方式',

	'UPDATE_DB_SUCCESS'				=> '資料庫更新完成。',
	'UPDATE_FILE_SUCCESS'			=> '檔案更新成功。',
	'USER_ACTIVE'					=> '帳號已經啟用的會員',
	'USER_INACTIVE'					=> '帳號尚未啟用的會員',

	'VERSION_CHECK'				=> '版本檢查',
	'VERSION_CHECK_EXPLAIN'		=> '檢查您安裝的討論區是否是最新版本。',
	'VERSION_NOT_UP_TO_DATE'	=> '您安裝的討論區不是最新的，請繼續更新過程。',
	'VERSION_NOT_UP_TO_DATE_ACP'=> '您安裝的討論區不是最新的。<br />下面連結是最新版本的釋出公告，它包含更多的更新說明之資訊。',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> '您安裝的討論區不是最新的。',
	'VERSION_UP_TO_DATE'		=> '您安裝的討論區是最新的，雖然此時沒有可用的更新，但是您可繼續執行檔案的有效性檢查。',
	'VERSION_UP_TO_DATE_ACP'	=> '您安裝的討論區是最新的，此時沒有可用的更新。',
	'VIEWING_FILE_CONTENTS'		=> '檢視檔案內容',
	'VIEWING_FILE_DIFF'			=> '檢視檔案差異',

	'WRONG_INFO_FILE_FORMAT'	=> '檔案格式錯誤',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '感謝您，討論區管理團隊 敬上',
	'CONFIG_SITE_DESC'				=> '（用於描述您的討論區的短文）',
	'CONFIG_SITENAME'				=> '（您的討論區名稱）',

	'DEFAULT_INSTALL_POST'			=> '這是在您安裝 phpBB3 後的一篇範例文章。似乎一切事情都可正常運作。如果您喜歡，那麼您可以刪除這篇文章以及繼續設定您的論壇。在安裝的過程中，您的第一個分區和第一個版面，被指派了一個適當的版面權限設定，其包含的預設會員群組有管理員、機器人、全域版主、訪客、註冊會員、以及註冊 COPPA 會員等。如果您也選擇要刪除您的第一個分區和第一個版面，那麼不要忘記指派版面權限到所有您新建的分區以及版面。當您要新建分區以及版面時，建議重新命名您的第一個分區和第一個版面，以及複製其版面權限。祝您使用愉快！',

	'FORUMS_FIRST_CATEGORY'			=> '您的第一個分區',
	'FORUMS_TEST_FORUM_DESC'		=> '您的第一個版面描述。',
	'FORUMS_TEST_FORUM_TITLE'		=> '您的第一個版面',

	'RANKS_SITE_ADMIN_TITLE'		=> '系統管理員',
	'REPORT_WAREZ'					=> '文章包含違法或盜版軟體的連結。',
	'REPORT_SPAM'					=> '被檢舉的文章僅有的目的就是為網站或產品做廣告。',
	'REPORT_OFF_TOPIC'				=> '被檢舉的是離題文章。',
	'REPORT_OTHER'					=> '被檢舉的文章不符合任何其他的類別，請使用備註描述。',

	'SMILIES_ARROW'					=> '箭頭',
	'SMILIES_CONFUSED'				=> '疑惑',
	'SMILIES_COOL'					=> '酷！',
	'SMILIES_CRYING'				=> '哭泣或非常傷心',
	'SMILIES_EMARRASSED'			=> '困窘',
	'SMILIES_EVIL'					=> '邪惡或非常生氣',
	'SMILIES_EXCLAMATION'			=> '感歎',
	'SMILIES_GEEK'					=> '滑稽',
	'SMILIES_IDEA'					=> '想法',
	'SMILIES_LAUGHING'				=> '大笑',
	'SMILIES_MAD'					=> '生氣',
	'SMILIES_MR_GREEN'				=> '苦笑',
	'SMILIES_NEUTRAL'				=> '中立',
	'SMILIES_QUESTION'				=> '疑問',
	'SMILIES_RAZZ'					=> '冷笑',
	'SMILIES_ROLLING_EYES'			=> '滾動的眼睛',
	'SMILIES_SAD'					=> '悲傷',
	'SMILIES_SHOCKED'				=> '激動',
	'SMILIES_SMILE'					=> '微笑',
	'SMILIES_SURPRISED'				=> '驚訝',
	'SMILIES_TWISTED_EVIL'			=> '奸詐的惡魔',
	'SMILIES_UBER_GEEK'				=> '搞笑',
	'SMILIES_VERY_HAPPY'			=> '非常高興',
	'SMILIES_WINK'					=> '眨眼',

	'TOPICS_TOPIC_TITLE'			=> '歡迎使用 phpBB3',
));
