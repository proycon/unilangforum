<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Дії',
	'ACL_CAT_CONTENT'		=> 'Вміст',
	'ACL_CAT_FORUMS'		=> 'Форуми',
	'ACL_CAT_MISC'			=> 'Різне',
	'ACL_CAT_PERMISSIONS'	=> 'Права доступу',
	'ACL_CAT_PM'			=> 'Приватні повідомлення',
	'ACL_CAT_POLLS'			=> 'Опитування',
	'ACL_CAT_POST'			=> 'Розміщення повідомлень',
	'ACL_CAT_POST_ACTIONS'	=> 'Дії з повідомленнями',
	'ACL_CAT_POSTING'		=> 'Повідомлення',
	'ACL_CAT_PROFILE'		=> 'Профіль',
	'ACL_CAT_SETTINGS'		=> 'Налаштування',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Дії з темами',
	'ACL_CAT_USER_GROUP'	=> 'Користувачі',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Може переглядати профілі',
	'ACL_U_CHGNAME'		=> 'Може змінювати ім\'я',
	'ACL_U_CHGPASSWD'	=> 'Може змінювати пароль',
	'ACL_U_CHGEMAIL'	=> 'Може змінювати адресу e-mail',
	'ACL_U_CHGAVATAR'	=> 'Може змінювати аватар',
	'ACL_U_CHGGRP'		=> 'Може змінювати групу за замовчуванням',
	'ACL_U_CHGPROFILEINFO'	=> 'Може змінювати інформацію в полях профілю',

	'ACL_U_ATTACH'		=> 'Може приєднувати файли', 
	'ACL_U_DOWNLOAD'	=> 'Може завантажувати файли', 
	'ACL_U_SAVEDRAFTS'	=> 'Може зберігати чернетки', 
	'ACL_U_CHGCENSORS'	=> 'Може вимикати цензор слів', 
	'ACL_U_SIG'			=> 'Може змінювати підпис',

	'ACL_U_SENDPM'		=> 'Може надсилати приватні повідомлення',
	'ACL_U_MASSPM'		=> 'Може надсилати пп декільком користувачам',
	'ACL_U_MASSPM_GROUP'	=> 'Може надсилати пп групам',
	'ACL_U_READPM'		=> 'Може читати приватні повідомлення',
	'ACL_U_PM_EDIT'		=> 'Може редагувати власні приватні повідомлення',
	'ACL_U_PM_DELETE'	=> 'Може видаляти приватні повідомлення з власної папки',
	'ACL_U_PM_FORWARD'	=> 'Може перенаправляти приватні повідомлення',
	'ACL_U_PM_EMAILPM'	=> 'Може надсилати приватні повідомлення електронною поштою',
	'ACL_U_PM_PRINTPM'	=> 'Може друкувати приватні повідомлення',
	'ACL_U_PM_ATTACH'	=> 'Може приєднувати файли в приватні повідомлення',
	'ACL_U_PM_DOWNLOAD'	=> 'Може завантажувати файли в приватних повідомленнях',
	'ACL_U_PM_BBCODE'	=> 'Може вставляти BBCode в приватних повідомленнях',
	'ACL_U_PM_SMILIES'	=> 'Може вставляти смайлики в приватних повідомленнях',
	'ACL_U_PM_IMG'		=> 'Може вставляти зображення в приватних повідомленнях',
	'ACL_U_PM_FLASH'	=> 'Може вставляти Flash в приватних повідомленнях',

	'ACL_U_SENDEMAIL'	=> 'Може надсилати листи e-mail', 
	'ACL_U_SENDIM'		=> 'Може надсилати миттєві повідомлення', 
	'ACL_U_IGNOREFLOOD'	=> 'Може ігнорувати затримку фладу', 
	'ACL_U_HIDEONLINE'	=> 'Може приховати онлайн статус', 
	'ACL_U_VIEWONLINE'	=> 'Може переглядати прихованих користувачів',
	'ACL_U_SEARCH'		=> 'Може здійснювати пошук на форумі',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Може бачити форум', 
	'ACL_F_READ'		=> 'Може читати форум', 
	'ACL_F_SEARCH'		=> 'Може здійснювати пошук на форумі',
	'ACL_F_SUBSCRIBE'	=> 'Може підписуватись на форум',
	'ACL_F_PRINT'		=> 'Може роздруковувати теми', 
	'ACL_F_EMAIL'		=> 'Може надсилати теми електронною поштою',  
	'ACL_F_BUMP'		=> 'Може піднімати теми',
	'ACL_F_USER_LOCK'	=> 'Може блокувати власні теми',
	'ACL_F_DOWNLOAD'	=> 'Може завантажувати файли', 
	'ACL_F_REPORT'		=> 'Може писати скарги', 

	'ACL_F_POST'		=> 'Може створювати нові теми', 
	'ACL_F_STICKY'		=> 'Може створювати прикріплені теми', 
	'ACL_F_ANNOUNCE'	=> 'Може розміщувати оголошення', 
	'ACL_F_REPLY'		=> 'Може відповідати в теми', 
	'ACL_F_EDIT'		=> 'Може редагувати власні повідомлення', 
	'ACL_F_DELETE'		=> 'Може видаляти власні повідомлення',
	'ACL_F_SOFTDELETE'	=> 'Может видаляти власні повідомлення<br /><em>Модератори, які мають право схвалювати повідомлення, можуть відновлювати видалені повідомлення.</em>',
	'ACL_F_IGNOREFLOOD' => 'Може ігнорувати затримку фладу', 
	'ACL_F_POSTCOUNT'	=> 'Лічильник повідомлень увімкнено<br /><em>Зауважте, що дане налаштування застосовується лише для нових повідомлень.</em>',
	'ACL_F_NOAPPROVE'	=> 'Може створювати повідомлення без схвалення', 

	'ACL_F_ATTACH'		=> 'Може приєднувати файли', 
	'ACL_F_ICONS'		=> 'Може використовувати значки тем/повідомлень', 
	'ACL_F_BBCODE'		=> 'Може вставляти BBCode', 
	'ACL_F_FLASH'		=> 'Може вставляти Flash',
	'ACL_F_IMG'			=> 'Може вставляти зображення', 
	'ACL_F_SIGS'		=> 'Може використовувати підписи',
	'ACL_F_SMILIES'		=> 'Може вставляти смайлики', 

	'ACL_F_POLL'		=> 'Може створювати опитування', 
	'ACL_F_VOTE'		=> 'Може голосувати в опитуваннях', 
	'ACL_F_VOTECHG'		=> 'Може змінювати відданий голос', 
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Може редагувати повідомлення', 
	'ACL_M_DELETE'		=> 'Може видаляти повідомлення', 
	'ACL_M_SOFTDELETE'	=> 'Может видаляти повідомлення<br /><em>Модератори, які мають право схвалювати повідомлення, можуть відновлювати видалені повідомлення.</em>',
	'ACL_M_APPROVE'		=> 'Може схвалювати і відновлювати повідомлення', 
	'ACL_M_REPORT'		=> 'Може закривати та видаляти скарги',
	'ACL_M_CHGPOSTER'	=> 'Може змінювати автора повідомлення',

	'ACL_M_MOVE'	=> 'Може переносити теми', 
	'ACL_M_LOCK'	=> 'Може блокувати теми', 
	'ACL_M_SPLIT'	=> 'Може розділяти теми',
	'ACL_M_MERGE'	=> 'Може об\'єднувати теми', 

	'ACL_M_INFO'	=> 'Може переглядати інформацію про повідомлення', 
	'ACL_M_WARN'	=> 'Може робити попередження<br /><em>Це налаштування встановлюється тільки глобально і не є форумним.</em>',  // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Може керувати баном<br /><em>Це налаштування встановлюється тільки глобально і не є форумним.</em>',  // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Може змінювати налаштування форуму/перевіряти наявність оновлень',
	'ACL_A_SERVER'		=> 'Може змінювати налаштування серверу', 
	'ACL_A_JABBER'		=> 'Може змінювати налаштування Jabber', 
	'ACL_A_PHPINFO'		=> 'Може переглядати налаштування php',

	'ACL_A_FORUM'		=> 'Може керувати форумами', 
	'ACL_A_FORUMADD'	=> 'Може створювати нові підфоруми',
	'ACL_A_FORUMDEL'	=> 'Може видаляти форумs',
	'ACL_A_PRUNE'		=> 'Може здійснювати очищення форумів',

	'ACL_A_ICONS'		=> 'Може змінювати значки тем/повідомлень та смайлики',
	'ACL_A_WORDS'		=> 'Може змінювати цензор слів',
	'ACL_A_BBCODE'		=> 'Може визначати теги BBCode',
	'ACL_A_ATTACH'		=> 'Може змінювати налаштування вкладень',

	'ACL_A_USER'		=> 'Може керувати користувачами',
	'ACL_A_USERDEL'		=> 'Може видаляти/очищати користувачів',
	'ACL_A_GROUP'		=> 'Може керувати групами',
	'ACL_A_GROUPADD'	=> 'Може створювати нові групи',
	'ACL_A_GROUPDEL'	=> 'Може видаляти групи',
	'ACL_A_RANKS'		=> 'Може керувати званнями',
	'ACL_A_PROFILE'		=> 'Може керувати додатковими полями профілю',
	'ACL_A_NAMES'		=> 'Може керувати забороненими іменами',
	'ACL_A_BAN'		=> 'Може керувати баном',

	'ACL_A_VIEWAUTH'	=> 'Може переглядати права доступу',
	'ACL_A_AUTHGROUPS'	=> 'Може змінювати права доступу для конкретних груп',
	'ACL_A_AUTHUSERS'	=> 'Може змінювати права доступу для конкретних користувачів',
	'ACL_A_FAUTH'		=> 'Може змінювати права доступу форуму',
	'ACL_A_MAUTH'		=> 'Може змінювати права доступу модератора',
	'ACL_A_AAUTH'		=> 'Може змінювати права доступу адміністратора',
	'ACL_A_UAUTH'		=> 'Може змінювати права доступу користувача',
	'ACL_A_ROLES'		=> 'Може керувати ролями',
	'ACL_A_SWITCHPERM'	=> 'Може використовувати інші права доступу',

	'ACL_A_STYLES'		=> 'Може керувати стилями',
	'ACL_A_EXTENSIONS'	=> 'Може керувати розширеннями',
	'ACL_A_VIEWLOGS'	=> 'Може переглядати логи',
	'ACL_A_CLEARLOGS'	=> 'Може очищувати логи',
	'ACL_A_MODULES'		=> 'Може керувати модулями',
	'ACL_A_LANGUAGE'	=> 'Може керувати мовними пакетами',
	'ACL_A_EMAIL'		=> 'Може здійснювати масове розсилання e-mail',
	'ACL_A_BOTS'		=> 'Може керувати ботами',
	'ACL_A_REASONS'		=> 'Може керувати списком скарг/причин',
	'ACL_A_BACKUP'		=> 'Може створювати резервні копії / відновлювати базу даних',
	'ACL_A_SEARCH'		=> 'Може керувати пошуковими індексами і їх налаштуваннями',
));
