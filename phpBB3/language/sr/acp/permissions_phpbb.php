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
	'ACL_CAT_ACTIONS'		=> 'Поступци',
	'ACL_CAT_CONTENT'		=> 'Садржај',
	'ACL_CAT_FORUMS'		=> 'Форуми',
	'ACL_CAT_MISC'			=> 'Разно',
	'ACL_CAT_PERMISSIONS'	=> 'Дозволе',
	'ACL_CAT_PM'			=> 'Приватне поруке',
	'ACL_CAT_POLLS'			=> 'Гласања',
	'ACL_CAT_POST'			=> 'Поруке',
	'ACL_CAT_POST_ACTIONS'	=> 'Поступци порука',
	'ACL_CAT_POSTING'		=> 'Писање порука',
	'ACL_CAT_PROFILE'		=> 'Профил',
	'ACL_CAT_SETTINGS'		=> 'Поставке',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Поступци тема',
	'ACL_CAT_USER_GROUP'	=> 'Корисници &amp; Групе',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Може прегледати профиле, списак чланова и на вези списак',
	'ACL_U_CHGNAME'		=> 'Може променити корисничко име',
	'ACL_U_CHGPASSWD'	=> 'Може променити лозинку',
	'ACL_U_CHGEMAIL'	=> 'Може променити мејл адресу',
	'ACL_U_CHGAVATAR'	=> 'Може променити грб',
	'ACL_U_CHGGRP'		=> 'Може променити подразумевану корисничку групу',
	'ACL_U_CHGPROFILEINFO'	=> 'Може променити податак поља профила',

	'ACL_U_ATTACH'		=> 'Може додавати прилоге',
	'ACL_U_DOWNLOAD'	=> 'Може преузимати датотеке',
	'ACL_U_SAVEDRAFTS'	=> 'Може сачувати нацрте',
	'ACL_U_CHGCENSORS'	=> 'Може искључити пречистаче речи',
	'ACL_U_SIG'			=> 'Може користити потпис',

	'ACL_U_SENDPM'		=> 'Може слати приватне поруке',
	'ACL_U_MASSPM'		=> 'Може слати поруке вишеструким корисницима',
	'ACL_U_MASSPM_GROUP'=> 'Може слати поруке групама',
	'ACL_U_READPM'		=> 'Може да чита приватне поруке',
	'ACL_U_PM_EDIT'		=> 'Може да учита сопствене приватне поруке',
	'ACL_U_PM_DELETE'	=> 'Може да уклони приватне поруке из сопствене фасцикле',
	'ACL_U_PM_FORWARD'	=> 'Може да прослеђује приватне поруке',
	'ACL_U_PM_EMAILPM'	=> 'Може да шаље приватне поруке преко мејла',
	'ACL_U_PM_PRINTPM'	=> 'Може да штампа приватне поруке',
	'ACL_U_PM_ATTACH'	=> 'Може да дода прилог у приватне поруке',
	'ACL_U_PM_DOWNLOAD'	=> 'Може да преузима датотеке у приватним порукама',
	'ACL_U_PM_BBCODE'	=> 'Може да користи ББКод у приватним порукама',
	'ACL_U_PM_SMILIES'	=> 'Може да користи смајлиће у приватним порукама',
	'ACL_U_PM_IMG'		=> 'Може да користи [img] ББКод таг у приватним порукама',
	'ACL_U_PM_FLASH'	=> 'Може да користи [flash] ББКод таг у приватним порукама',

	'ACL_U_SENDEMAIL'	=> 'Може да шаље мејлове',
	'ACL_U_SENDIM'		=> 'Може да шаље тренутне поруке',
	'ACL_U_IGNOREFLOOD'	=> 'Може да занемари ограничење поплаве',
	'ACL_U_HIDEONLINE'	=> 'Може да сакрије статус на вези',
	'ACL_U_VIEWONLINE'	=> 'Може да види скривене кориснике на вези',
	'ACL_U_SEARCH'		=> 'Може да претражује форум',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Може да види форум',
	'ACL_F_READ'		=> 'Може да чита форум',
	'ACL_F_SEARCH'		=> 'Може да претражује форум',
	'ACL_F_SUBSCRIBE'	=> 'Може да прати форум',
	'ACL_F_PRINT'		=> 'Може да штампа теме',
	'ACL_F_EMAIL'		=> 'Може да шаље теме на мејл',
	'ACL_F_BUMP'		=> 'Може да гура теме',
	'ACL_F_USER_LOCK'	=> 'Може да закључа сопствене теме',
	'ACL_F_DOWNLOAD'	=> 'Може да преузима датотеке',
	'ACL_F_REPORT'		=> 'Може да пријави поруке',

	'ACL_F_POST'		=> 'Може да започне нову тему',
	'ACL_F_STICKY'		=> 'Може да шаље лепљиве',
	'ACL_F_ANNOUNCE'	=> 'Може да шаље саопштења',
	'ACL_F_REPLY'		=> 'Може да одговара на теме',
	'ACL_F_EDIT'		=> 'Може да учита сопствене поруке',
	'ACL_F_DELETE'		=> 'Може да трајно обрише сопствене поруке',
	'ACL_F_SOFTDELETE'	=> 'Може привремено обрисати сопствене поруке<br /><em>Уредници, који имају дозволу да одобравају поруке, могу вратити привремено обрисане поруке.</em>',
	'ACL_F_IGNOREFLOOD' => 'Може да занемари ограничење поплаве',
	'ACL_F_POSTCOUNT'	=> 'Повећа бројач порука<br /><em>Молимо знајте да ова поставка делује само на нове поруке.</em>',
	'ACL_F_NOAPPROVE'	=> 'Може да шаље поруке без одобрења',

	'ACL_F_ATTACH'		=> 'Може да додаје прилоге',
	'ACL_F_ICONS'		=> 'Може да користи тема/порука иконице',
	'ACL_F_BBCODE'		=> 'Може да користи ББКод',
	'ACL_F_FLASH'		=> 'Може да користи [flash] ББКод таг',
	'ACL_F_IMG'			=> 'Може да користи [img] ББКод таг',
	'ACL_F_SIGS'		=> 'Може да користи потписе',
	'ACL_F_SMILIES'		=> 'Може да користи смајлиће',

	'ACL_F_POLL'		=> 'Може да прави гласања',
	'ACL_F_VOTE'		=> 'Може да гласа',
	'ACL_F_VOTECHG'		=> 'Може да промени постојећи глас',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Може да учита поруке',
	'ACL_M_DELETE'		=> 'Може трајно обрисати поруке',
	'ACL_M_SOFTDELETE'	=> 'Може привремено обрисати поруке<br /><em>Уредници, који имају дозволу да одобравају поруке, могу вратити привремено обрисане поруке.</em>',
	'ACL_M_APPROVE'		=> 'Може одобравати и враћати поруке',
	'ACL_M_REPORT'		=> 'Може да затвори и брише пријаве',
	'ACL_M_CHGPOSTER'	=> 'Може да промени аутора поруке',

	'ACL_M_MOVE'	=> 'Може да премешта теме',
	'ACL_M_LOCK'	=> 'Може да закључа теме',
	'ACL_M_SPLIT'	=> 'Може да раздвоји теме',
	'ACL_M_MERGE'	=> 'Може да споји теме',

	'ACL_M_INFO'	=> 'Може видети појединости поруке',
	'ACL_M_WARN'	=> 'Може давати опомене<br /><em>Ова поставка је додељена само уопште. Није основана на форумима.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Може управљати забранама<br /><em>Ова поставка је додељена само уопште. Није основана на форумима.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Може да мења поставке форума/проверава за ажурирања',
	'ACL_A_SERVER'		=> 'Може да мења сервер/комуникација поставке',
	'ACL_A_JABBER'		=> 'Може да мења Jabber поставке',
	'ACL_A_PHPINFO'		=> 'Може да прегледа php поставке',

	'ACL_A_FORUM'		=> 'Може да управља форумима',
	'ACL_A_FORUMADD'	=> 'Може да дода нове форуме',
	'ACL_A_FORUMDEL'	=> 'Може да брише форуме',
	'ACL_A_PRUNE'		=> 'Може да поткресује форуме',

	'ACL_A_ICONS'		=> 'Може да мења иконице тема/порука и смајлиће',
	'ACL_A_WORDS'		=> 'Може да мења пречистаче речи',
	'ACL_A_BBCODE'		=> 'Може да одређује ББКод тагове',
	'ACL_A_ATTACH'		=> 'Може да мења поставке у вези прилога',

	'ACL_A_USER'		=> 'Може да управља корисницима<br /><em>Ово такође укључује виђење корисниковог прегледача на списку на вези.</em>',
	'ACL_A_USERDEL'		=> 'Може брисати/поткресивати кориснике',
	'ACL_A_GROUP'		=> 'Може да управља групама',
	'ACL_A_GROUPADD'	=> 'Може да додаје нове групе',
	'ACL_A_GROUPDEL'	=> 'Може да брише групе',
	'ACL_A_RANKS'		=> 'Може да управља чиновима',
	'ACL_A_PROFILE'		=> 'Може да управља властитим пољима профила',
	'ACL_A_NAMES'		=> 'Може да управља недозвољеним именима',
	'ACL_A_BAN'			=> 'Може да управља забранама',

	'ACL_A_VIEWAUTH'	=> 'Може да види маске дозвола',
	'ACL_A_AUTHGROUPS'	=> 'Може да мења дозволе за појединачне групе',
	'ACL_A_AUTHUSERS'	=> 'Може да мења дозволе за појединачне кориснике',
	'ACL_A_FAUTH'		=> 'Може да мења дозволе форума',
	'ACL_A_MAUTH'		=> 'Може да мења дозволе уредника',
	'ACL_A_AAUTH'		=> 'Може да мења дозволе администратора',
	'ACL_A_UAUTH'		=> 'Може да мења дозволе корисника',
	'ACL_A_ROLES'		=> 'Може да управља ролама',
	'ACL_A_SWITCHPERM'	=> 'Може да користи друге дозволе',

	'ACL_A_STYLES'		=> 'Може да управља стиловима',
	'ACL_A_EXTENSIONS'	=> 'Може да управља прикључцима',
	'ACL_A_VIEWLOGS'	=> 'Може да прегледа записе',
	'ACL_A_CLEARLOGS'	=> 'Може да брише записе',
	'ACL_A_MODULES'		=> 'Може да управља модулима',
	'ACL_A_LANGUAGE'	=> 'Може да управља језичким пакетима',
	'ACL_A_EMAIL'		=> 'Може да шаље масовни мејл',
	'ACL_A_BOTS'		=> 'Може да управља роботима',
	'ACL_A_REASONS'		=> 'Може да управља пријава/одбијања разлозима',
	'ACL_A_BACKUP'		=> 'Може да прави резервни умножак/врати базу',
	'ACL_A_SEARCH'		=> 'Може да управља позадинама претраге и поставкама',
));
