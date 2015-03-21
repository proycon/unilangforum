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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>權限具有很高的位階，區分為四個主要的部份，分別是：</p>

		<h2>全域權限</h2>
		<p>這些用來控制使用整個討論區的全域等級，進一步區分為會員的權限、群組的權限、管理員和全域版主。</p>

		<h2>版面基本權限</h2>
		<p>這些用來控制使用每個版面的權限，進一步分為版面權限、版面版主、會員的版面權限、群組的版面權限。</p>

		<h2>權限角色</h2>
		<p>這些用來控制針對不同的權限類型中分配的角色，建立不同的權限設定。預設的角色可以或大或小的覆蓋討論區的管理員，在這四個權限組別中，您也可以增加/編輯/刪除您覺得合適的角色。</p>

		<h2>權限遮罩</h2>
		<p>這些用來檢視設定給會員、版主 (版面或全域)、管理員或版面的權限效果。</p>

		<br />

		<p>需要瞭解您的 phpBB3 論壇更多的權限設定和管理資訊，請參訪在 <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">Setting permissions of our Quick Start Guide</a> 的章節。</p>
	',

	'ACL_NEVER'				=> '從不',
	'ACL_SET'				=> '權限設定',
	'ACL_SET_EXPLAIN'		=> '權限基於簡單的 <strong>是</strong>/<strong>否</strong> 系統。設定會員或群組會員選項為 <strong>從不</strong> 將覆蓋其他設定的值。如果您不想要給這個會員或群組會員設定值，請選擇 <strong>否</strong>。如果值在其他地方設定，他們將在設定中使用，否則請選擇 <strong>從不</strong>。所有選擇的對象 (他們前面的勾選框) 將複製您設定的權限。',
	'ACL_SETTING'			=> '設定',

	'ACL_TYPE_A_'			=> '管理員權限',
	'ACL_TYPE_F_'			=> '版面權限',
	'ACL_TYPE_M_'			=> '版主權限',
	'ACL_TYPE_U_'			=> '會員權限',

	'ACL_TYPE_GLOBAL_A_'	=> '管理員權限',
	'ACL_TYPE_GLOBAL_U_'	=> '會員權限',
	'ACL_TYPE_GLOBAL_M_'	=> '全域版主權限',
	'ACL_TYPE_LOCAL_M_'		=> '版面版主權限',
	'ACL_TYPE_LOCAL_F_'		=> '版面權限',

	'ACL_NO'				=> '否',
	'ACL_VIEW'				=> '檢視權限',
	'ACL_VIEW_EXPLAIN'		=> '在這裡，您可以看到會員/群組擁有的有效權限。紅色方形表示會員/群組沒有該權限，綠色方形表示會員/群組擁有該權限。',
	'ACL_YES'				=> '是',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> '在這裡，您可以指派管理員權限給會員或群組。所有擁有管理員權限的會員都能看到管理員控制台。',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> '在這裡，您可以指派會員和群組為版主。請使用其他適當的頁面設定會員使用版面的權限、全域版主或管理員。',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> '在這裡，您可以更改哪些會員和群組可以使用哪些版面。指派版主或管理員請使用其他適當的頁面。',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> '在這裡，您可以複製權限，自一個版面到一個或更多其他的版面。',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> '在這裡，您可以指派全域版主權限給會員或群組。這些版主擁有一般的版主權限，此外他們可以使用討論區的每個版面。',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> '在這裡，您可以設定群組的版面權限。',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> '在這裡，您可以將全域權限指派給群組 - 會員權限、全域版主權限和管理員權限。會員權限包含使用頭像、發送私人訊息等；全域版主權限包含核准文章、管理主題、管理封鎖等；而最後管理員權限包含更改權限、定義慣用 BBCode、管理版面等等。只有在少數的情況下才需要單獨地改變會員權限設定，推薦的方式是先將會員歸類到不同的群組，再賦予群組不同的權限。',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> '在這裡，您可以管理具管理員權限的角色。角色是有效的權限組合，如果您更改了角色內容，那麼使用這個角色者將會被更改權限。',
	'ACP_FORUM_ROLES_EXPLAIN'					=> '在這裡，您可以管理具版面權限的角色。角色是有效的權限組合，如果您更改了角色內容，那麼使用這個角色者將會被更改權限。',
	'ACP_MOD_ROLES_EXPLAIN'						=> '在這裡，您可以管理具版主權限的角色。角色是有效的權限組合，如果您更改了角色內容，那麼使用這個角色者將會被更改權限。',
	'ACP_USER_ROLES_EXPLAIN'					=> '在這裡，您可以管理具會員權限的角色。角色是有效的權限組合，如果您更改了角色內容，那麼使用這個角色者將會被更改權限。',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> '在這裡，您可以指派版面權限給會員。',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> '在這裡，您可以將全域權限指派給會員 - 會員權限、全域版主權限和管理員權限。會員權限包含使用頭像、發送私人訊息等；全域版主權限包含核准文章、管理主題、管理封鎖等；而最後管理員權限包含更改權限、定義慣用 BBCode、管理版面等等。只有在少數的情況下才需要單獨地改變會員權限設定，推薦的方式是先將會員歸類到不同的群組，再賦予群組不同的權限。',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> '在這裡，您可以檢視所選擇的會員/群組其有效的管理員權限。',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> '在這裡，您可以檢視所選擇的會員/群組其全域版主權限。',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> '在這裡，您可以檢視所選擇的會員/群組和版面其版面權限。',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> '在這裡，您可以檢視所選擇的會員/群組和版面其版主權限。',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> '在這裡，您可以檢視所選擇的會員/群組其其有效的會員權限。',

	'ADD_GROUPS'				=> '增加群組',
	'ADD_PERMISSIONS'			=> '增加權限',
	'ADD_USERS'					=> '增加會員',
	'ADVANCED_PERMISSIONS'		=> '進階的權限',
	'ALL_GROUPS'				=> '選擇所有的群組',
	'ALL_NEVER'					=> '所有 <strong>從不</strong>',
	'ALL_NO'					=> '所有 <strong>否</strong>',
	'ALL_USERS'					=> '選擇所有的會員',
	'ALL_YES'					=> '所有 <strong>是</strong>',
	'APPLY_ALL_PERMISSIONS'		=> '更新所有的權限',
	'APPLY_PERMISSIONS'			=> '更新權限',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '為某個項目所設定的權限和角色，將只被更新到某個項目和所有已選擇的項目。',
	'AUTH_UPDATED'				=> '權限已經更新。',

	'COPY_PERMISSIONS_CONFIRM'				=> '您確定要進行這項行動？請知道：這將覆蓋所選擇目標，其任何已經存在的權限。',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> '您想要複製權限的來源版面。.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> '您想要複製權限的目標版面。',
	'COPY_PERMISSIONS_FROM'					=> '複製權限自',
	'COPY_PERMISSIONS_TO'					=> '複製權限到',

	'CREATE_ROLE'				=> '建立角色',
	'CREATE_ROLE_FROM'			=> '使用設定從...',
	'CUSTOM'					=> '自訂...',

	'DEFAULT'					=> '預設',
	'DELETE_ROLE'				=> '刪除角色',
	'DELETE_ROLE_CONFIRM'		=> '您確定您要刪除這個角色嗎？使用這個角色的項目 <strong>不會</strong> 因此遺失它們的權限設定。',
	'DISPLAY_ROLE_ITEMS'		=> '檢視使用這個角色的項目',

	'EDIT_PERMISSIONS'			=> '編輯權限',
	'EDIT_ROLE'					=> '編輯角色',

	'GROUPS_NOT_ASSIGNED'		=> '沒有群組使用這個角色',

	'LOOK_UP_GROUP'				=> '尋找會員群組',
	'LOOK_UP_USER'				=> '尋找會員',

	'MANAGE_GROUPS'		=> '管理群組',
	'MANAGE_USERS'		=> '管理會員',

	'NO_AUTH_SETTING_FOUND'		=> '權限設定沒有定義。',
	'NO_ROLE_ASSIGNED'			=> '沒有分配角色...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> '設定為這個角色並不改變右邊的權限。如果您需要重設/移除所有的權限，您應該要使用「所有 <strong>否</strong>」連結。',
	'NO_ROLE_AVAILABLE'			=> '沒有可用的角色',
	'NO_ROLE_NAME_SPECIFIED'	=> '請給角色的名稱。',
	'NO_ROLE_SELECTED'			=> '沒有角色被發現。',
	'NO_USER_GROUP_SELECTED'	=> '您沒有選擇會員或群組。',

	'ONLY_FORUM_DEFINED'	=> '您只能在您選擇的版面中設定，請至少選擇一個會員或群組。',

	'PERMISSION_APPLIED_TO_ALL'		=> '權限和角色也將被使用到所有檢查的對象',
	'PLUS_SUBFORUMS'				=> '+ 子版面',

	'REMOVE_PERMISSIONS'			=> '移除權限',
	'REMOVE_ROLE'					=> '移除角色',
	'RESULTING_PERMISSION'			=> '作為結果的權限',
	'ROLE'							=> '角色',
	'ROLE_ADD_SUCCESS'				=> '角色增加成功。',
	'ROLE_ASSIGNED_TO'				=> '設定角色為 %s 的會員/群組',
	'ROLE_DELETED'					=> '角色移除成功。',
	'ROLE_DESCRIPTION'				=> '角色描述',

	'ROLE_ADMIN_FORUM'			=> '版面管理',
	'ROLE_ADMIN_FULL'			=> '完全管理',
	'ROLE_ADMIN_STANDARD'		=> '標準管理',
	'ROLE_ADMIN_USERGROUP'		=> '會員和群組管理',
	'ROLE_FORUM_BOT'			=> '機器人使用',
	'ROLE_FORUM_FULL'			=> '完全使用',
	'ROLE_FORUM_LIMITED'		=> '有限制的使用',
	'ROLE_FORUM_LIMITED_POLLS'	=> '有限制的使用 + 投票',
	'ROLE_FORUM_NOACCESS'		=> '禁止使用',
	'ROLE_FORUM_ONQUEUE'		=> '由版主審核',
	'ROLE_FORUM_POLLS'			=> '標準使用 + 投票',
	'ROLE_FORUM_READONLY'		=> '只能閱讀',
	'ROLE_FORUM_STANDARD'		=> '標準使用',
	'ROLE_FORUM_NEW_MEMBER'		=> '新註冊會員訪問',
	'ROLE_MOD_FULL'				=> '完全版主',
	'ROLE_MOD_QUEUE'			=> '審核版主',
	'ROLE_MOD_SIMPLE'			=> '簡單版主',
	'ROLE_MOD_STANDARD'			=> '標準版主',
	'ROLE_USER_FULL'			=> '所有的功能',
	'ROLE_USER_LIMITED'			=> '有限制的功能',
	'ROLE_USER_NOAVATAR'		=> '沒有頭像',
	'ROLE_USER_NOPM'			=> '沒有私人訊息',
	'ROLE_USER_STANDARD'		=> '標準功能',
	'ROLE_USER_NEW_MEMBER'		=> '新註冊會員功能',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> '可以行使版面管理和版面權限設定。',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> '擁有行使這個討論區的所有管理員功能。<br />不建議使用。',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> '擁有行使大部分管理員功能，但是不允許使用伺服器或系統相關工具。',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> '可以管理群組和會員：可以更改權限設定、管理封鎖、和管理等級。',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> '這個角色推薦給機器人使用。',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '可以使用所有版面功能，包括發表公告和置頂文章、不受灌水間隔限制。<br />不建議給一般的會員使用。',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> '可以使用某些版面功能，但是不能發表附加檔案或使用主題圖示。',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '和有限制地使用一樣，但是可以建立投票。',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> '不能看見也不能使用版面。',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> '可以使用大部份的版面功能，包括發表附加檔案，但是文章和主題需要經由版主審核。',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '和標準使用一樣，但是可以建立投票。',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> '可以閱讀版面，但是不能建立主題或回覆文章。',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> '可以使用大部份的版面功能，包括發表附加檔案和刪除自己的主題，但是不能鎖定、也不能建立投票。',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> '新註冊會員群組的組員之角色；包含針對新會員鎖定功能之 <strong>從未</strong> 權限。',
	'ROLE_DESCRIPTION_MOD_FULL'				=> '可以使用所用版主功能，包括封鎖。',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '可以審核和編輯文章，但是沒有其他權限。',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '只可以使用基本的主題操作。不能發送警告或審核文章。',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> '可以使用大部分的版主工具，但是不能封鎖會員和更改文章作者。',
	'ROLE_DESCRIPTION_USER_FULL'			=> '可以對會員使用所有的版面功能，包括更改會員名稱、或不受灌水間隔限制。<br />不建議使用。',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> '可以使用某些會員的功能。發表附加檔案、發送 e-mail 或私人訊息是不允許的。',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> '有限的功能設定，以及不允許使用頭像功能。',
	'ROLE_DESCRIPTION_USER_NOPM'			=> '有限的功能設定，以及不允許使用私人訊息。',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> '可以行使大部份但不是全部的會員功能，例如不能更改會員名稱、或受灌水間隔限制。',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> '特別的新註冊會員群組組員之角色；包含針對新會員鎖定功能之 <strong>從未</strong> 權限。',

	'ROLE_DESCRIPTION_EXPLAIN'		=> '您可以輸入一個關於這個角色的用途或意義的簡短解釋。您這裡輸入的文字也會顯示在權限頁面上。',
	'ROLE_DESCRIPTION_LONG'			=> '角色描述太長，請限制在 4000 個字元內。',
	'ROLE_DETAILS'					=> '角色細節',
	'ROLE_EDIT_SUCCESS'				=> '角色編輯成功。',
	'ROLE_NAME'						=> '角色名稱',
	'ROLE_NAME_ALREADY_EXIST'		=> '指定權限類型，名為 <strong>%s</strong> 的角色已經存在。',
	'ROLE_NOT_ASSIGNED'				=> '角色尚未指派。',

	'SELECTED_FORUM_NOT_EXIST'		=> '選擇的版面不存在。',
	'SELECTED_GROUP_NOT_EXIST'		=> '選擇的群組不存在。',
	'SELECTED_USER_NOT_EXIST'		=> '選擇的會員不存在。',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> '您選擇的版面將包含所有的子版面',
	'SELECT_ROLE'					=> '選擇角色...',
	'SELECT_TYPE'					=> '選擇類型',
	'SET_PERMISSIONS'				=> '設定權限',
	'SET_ROLE_PERMISSIONS'			=> '設定角色權限',
	'SET_USERS_PERMISSIONS'			=> '設定會員權限',
	'SET_USERS_FORUM_PERMISSIONS'	=> '設定會員版面權限',

	'TRACE_DEFAULT'					=> '在預設中每一個權限為 <strong>否</strong> (未設)。所以權限可以被其他的設定覆蓋。',
	'TRACE_FOR'						=> '追蹤',
	'TRACE_GLOBAL_SETTING'			=> '%s (全域)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> '這個群組的權限設定為 <strong>從不</strong> 像是全部的結果，所以保留舊的結果。',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> '這個群組關於這個版面的權限設定為 <strong>從不</strong> 像是全部的結果，所以保留舊的結果。',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> '這個群組的權限設定為 <strong>從不</strong> 這成了新的值，因為之前並沒有設定 (設定為 <strong>否</strong>)。',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> '這個群組關於這個版面的權限設定為 <strong>從不</strong> 這成了新的值，因為之前並沒有設定 (設定為 <strong>否</strong>)。',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> '這個群組的權限設定為 <strong>從不</strong> 這將覆蓋此會員全部的 <strong>是</strong> 變成為 <strong>從不</strong>。',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> '這個群組關於這個版面的權限設定為 <strong>從不</strong> 這將覆蓋此會員全部的 <strong>是</strong> 變成為 <strong>從不</strong>。',
	'TRACE_GROUP_NO'				=> '這個群組的權限是 <strong>否</strong> 所以保留全部的舊值。',
	'TRACE_GROUP_NO_LOCAL'			=> '這個群組關於這個版面的權限是 <strong>否</strong> 所以保留全部的舊值。',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> '這個群組的權限設定為 <strong>是</strong> 但是全部的 <strong>從不</strong> 不能被覆蓋。',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> '這個群組關於這個版面的權限設定為 <strong>是</strong> 但是全部的 <strong>從不</strong> 不能被覆蓋。',
	'TRACE_GROUP_YES_TOTAL_NO'		=> '這個群組的權限設定為 <strong>是</strong> 這成了新的值，因為之前並沒有設定 (設定為 <strong>否</strong>)。',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> '這個群組關於這個版面的權限設定為 <strong>是</strong> 這成了新的值，因為之前並沒有設定 (設定為 <strong>否</strong>)。',
	'TRACE_GROUP_YES_TOTAL_YES'		=> '這個群組的權限設定為 <strong>是</strong> 以及全部的權限已經設定為 <strong>是</strong>，所以保留全部的結果。',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> '這個群組關於這個版面的權限設定為 <strong>是</strong> 以及全部的權限已經設定為 <strong>是</strong>，所以保留全部的結果。',
	'TRACE_PERMISSION'				=> '追蹤權限 - %s',
	'TRACE_RESULT'					=> '追蹤結果',
	'TRACE_SETTING'					=> '追蹤設定',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '這個版面獨立的會員權限設定值為 <strong>是</strong> 但全部的權限也已經設定為 <strong>是</strong>，所以保留全部的結果。%s追蹤全域權限%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '這個版面獨立的會員權限設定值為 <strong>是</strong> 這將覆蓋目前的本地結果 <strong>從不</strong>。%s追蹤全域權限%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '這個版面獨立的會員權限設定值為 <strong>從不</strong> 這對於本地權限沒有影響。%s追蹤全域權限%s',

	'TRACE_USER_FOUNDER'					=> '此會員是創始人，因此其管理員權限總是設定為 <strong>是</strong>。',
	'TRACE_USER_KEPT'						=> '這個會員權限是 <strong>否</strong> 所以保留全部的舊值。',
	'TRACE_USER_KEPT_LOCAL'					=> '這個會員關於這個版面的權限是 <strong>否</strong> 所以保留全部的舊值。',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '這個會員權限設定為 <strong>從不</strong> 以及全部的值設定為 <strong>從不</strong>，所以沒有變化。',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> '這個會員關於這個版面的權限設定為 <strong>從不</strong> 以及全部的值設定為 <strong>從不</strong>，所以沒有變化。',
	'TRACE_USER_NEVER_TOTAL_NO'				=> '這個會員權限設定為 <strong>從不</strong> 這成為全部的值因為它設定為否。',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> '這個會員關於這個版面的權限設定為 <strong>從不</strong> 這成為全部的值因為它設定為否。',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '這個會員權限設定為 <strong>從不</strong> 以及覆蓋了先前的 <strong>是</strong>。',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> '這個會員關於這個版面的權限設定為 <strong>從不</strong> 以及覆蓋了先前的 <strong>是</strong>。',
	'TRACE_USER_NO_TOTAL_NO'				=> '這個會員權限是 <strong>否</strong> 以及全部的值設定為否，所以它預設值為 <strong>從不</strong>。',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> '這個會員關於這個版面的權限是 <strong>否</strong> 以及全部的值設定為否，所以它預設值為 <strong>從不</strong>。',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '這個會員權限設定為 <strong>是</strong> 但是全部的 <strong>從不</strong> 不能被覆蓋。',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> '這個會員關於這個版面的權限設定為 <strong>是</strong> 但是全部的 <strong>從不</strong> 不能被覆蓋。',
	'TRACE_USER_YES_TOTAL_NO'				=> '這個會員權限設定為 <strong>是</strong> 這成為全部的值因為它設定為否。',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> '這個會員關於這個版面的權限設定為 <strong>是</strong> 這成為全部的值因為它設定為否。',
	'TRACE_USER_YES_TOTAL_YES'				=> '這個會員權限設定為 <strong>是</strong> 以及全部的值設定為 <strong>是</strong>，所以沒有變化。',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> '這個會員關於這個版面的權限設定為 <strong>是</strong> 以及全部的值設定為 <strong>是</strong>，所以沒有變化。',
	'TRACE_WHO'								=> '誰',
	'TRACE_TOTAL'							=> '全部的',

	'USERS_NOT_ASSIGNED'			=> '沒有會員被指派這個角色',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '是下列預設群組的組員',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '是下列自訂群組的組員',

	'VIEW_ASSIGNED_ITEMS'	=> '檢視設定的項目',
	'VIEW_LOCAL_PERMS'		=> '局部權限',
	'VIEW_GLOBAL_PERMS'		=> '全域權限',
	'VIEW_PERMISSIONS'		=> '檢視權限',

	'WRONG_PERMISSION_TYPE'				=> '選擇錯誤的權限類型。',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '權限設定使用錯誤的格式，討論區無法正確地執行它們。',
));
