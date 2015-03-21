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

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'		=> 'Преглед потписа',
	'AT_LEAST_ONE_FOUNDER'	=> 'Не можете да промените овога оснивача у обичног корисника. Бар један оснивач треба да буде омогућен за овај форум. Уколико желите да промените оснивачки статус за овог корисника, прво унапредите другог корисника да буде оснивач.',

	'BAN_ALREADY_ENTERED'	=> 'Забрана је већ претходно успешно унета. Списак забрана није ажуриран.',
	'BAN_SUCCESSFUL'		=> 'Забрана је успешно унета.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Немате дозволу да забраните анонимни налог. Дозволе за анонимне кориснике могу бити подешене преко оквира Дозволе у акп.',
	'CANNOT_BAN_FOUNDER'			=> 'Не можете да забраните налоге оснивача.',
	'CANNOT_BAN_YOURSELF'			=> 'Не можете да забраните сами себе.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Не можете да деактивирате робот налоге. Молимо вас да уместо тога деактивирате робота на страници робота.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Не можете да деактивирате налоге оснивача.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Не можете да деактивирате ваш налог.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Не можете да форсирате поновну активацију робот налога. Молимо вас да уместо тога поновно активирате робота на страници робота.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Не можете да форсирате поновну активацију налога оснивача.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Не можете да форсирате поновну активацију вашег налога.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Не можете да уклоните кориснички налог госта.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Немате дозволу да уклањате налоге оснивача.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Не можете да уклоните ваш кориснички налог.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Не можете да унапредите игнорисане кориснике да буду оснивачи.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Треба да активирате кориснике пре него што их прогласите за осниваче, само активирани корисници могу бити унапређени.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Треба само ово да одредите уколико мењате корисникову мејл адресу.',

	'DELETE_POSTS'			=> 'Обриши поруке',
	'DELETE_USER'			=> 'Обриши корисника',
	'DELETE_USER_EXPLAIN'	=> 'Молимо знајте да је брисање корисника коначно, они не могу бити враћени. Непрочитане приватне поруке послате од овог корисника ће бити обрисане и недоступне њиховим примаоцима.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Успешно форсирана поновна активација.',
	'FOUNDER'						=> 'Оснивач',
	'FOUNDER_EXPLAIN'				=> 'Оснивачи имају све администраторске дозволе и никада не могу да буду забрањени, обрисани или промењени од чланова не-оснивача.',

	'GROUP_APPROVE'					=> 'Одобри члана',
	'GROUP_DEFAULT'					=> 'Направи подразумевану групу за члана',
	'GROUP_DELETE'					=> 'Уклони члана из групе',
	'GROUP_DEMOTE'					=> 'Расчини вођу групе',
	'GROUP_PROMOTE'					=> 'Унапреди у вођу групе',

	'IP_WHOIS_FOR'			=> 'Провера IP адресе за %s',

	'LAST_ACTIVE'			=> 'Последња активност',

	'MOVE_POSTS_EXPLAIN'	=> 'Молимо вас да изаберете форум у који желите да преместите све поруке од овог корисника.',

	'NO_SPECIAL_RANK'		=> 'Није додељен посебан чин',
	'NO_WARNINGS'			=> 'Без опомена.',
	'NOT_MANAGE_FOUNDER'	=> 'Покушали сте да управљате корисником са оснивачким статусом. Само оснивачи могу да управљају другим оснивачима.',

	'QUICK_TOOLS'			=> 'Брзи алати',

	'REGISTERED'			=> 'Регистрован',
	'REGISTERED_IP'			=> 'Регистрован са IP адресе',
	'RETAIN_POSTS'			=> 'Задржане поруке',

	'SELECT_FORM'			=> 'Изаберите образац',
	'SELECT_USER'			=> 'Изаберите корисника',

	'USER_ADMIN'					=> 'Администрација корисника',
	'USER_ADMIN_ACTIVATE'			=> 'Активирање налога',
	'USER_ADMIN_ACTIVATED'			=> 'Корисник је успешно активиран.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Успешно је уклоњен грб из корисниковог налога.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Забрана по мејлу',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Мејл адреса је забрањена преко управљања корисницима',
	'USER_ADMIN_BAN_IP'				=> 'Забрана по IP адреси',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP адреса је забрањена преко управљања корисницима',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Корисничко име је забрањено преко управљања корисницима',
	'USER_ADMIN_BAN_USER'			=> 'Забрана по корисничком имену',
	'USER_ADMIN_DEACTIVATE'			=> 'Деактивирај налог',
	'USER_ADMIN_DEACTIVED'			=> 'Корисник је успешно деактивиран.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Обриши све прилоге',
	'USER_ADMIN_DEL_AVATAR'			=> 'Обриши грб',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Испразни ПП за слање',
	'USER_ADMIN_DEL_POSTS'			=> 'Обриши све поруке',
	'USER_ADMIN_DEL_SIG'			=> 'Обриши потпис',
	'USER_ADMIN_EXPLAIN'			=> 'Овде можете да промените податке ваших корисника и одређене посебне поставке.',
	'USER_ADMIN_FORCE'				=> 'Форсирај поновну активацију',
	'USER_ADMIN_LEAVE_NR'			=> 'Премести из Ново Регистрованих',
	'USER_ADMIN_MOVE_POSTS'			=> 'Премести све поруке',
	'USER_ADMIN_SIG_REMOVED'		=> 'Потпис из корисниковог налога је успешно уклоњен.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Сви прилози овог корисника су успешно уклоњени.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Грб не може бити приказан јер су грбови недозвољени.',
	'USER_AVATAR_UPDATED'			=> 'Појединости корисниковог грба су успешно ажуриране.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Тренутни грб не може бити приказан јер је његов тип недозвољен.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Властита поља профила',
	'USER_DELETED'					=> 'Корисник је успешно обрисан.',
	'USER_GROUP_ADD'				=> 'Додај корисника групи',
	'USER_GROUP_NORMAL'				=> 'Властите групе корисника је члан',
	'USER_GROUP_PENDING'			=> 'Корисник групе је на чекању одобрења',
	'USER_GROUP_SPECIAL'			=> 'По-себне групе корисника је члан',
	'USER_LIFTED_NR'				=> 'Успешно је уклоњен корисников статус новорегистровани.',
	'USER_NO_ATTACHMENTS'			=> 'Нема прилога за приказ.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Корисник нема никаквих порука за задржавање нити за брисање.',
	'USER_OUTBOX_EMPTIED'			=> 'Успешно је испражњено корисниково за слање приватних порука.',
	'USER_OUTBOX_EMPTY'				=> 'Корисниково за слање приватних порука је већ празно.',
	'USER_OVERVIEW_UPDATED'			=> 'Појединости корисника су ажуриране.',
	'USER_POSTS_DELETED'			=> 'Успешно су уклоњене све поруке од овог корисника.',
	'USER_POSTS_MOVED'				=> 'Успешно су премештене поруке корисника у циљани форум.',
	'USER_PREFS_UPDATED'			=> 'Корисникове поставке су ажуриране.',
	'USER_PROFILE'					=> 'Профил корисника',
	'USER_PROFILE_UPDATED'			=> 'Профил корисника је ажуриран.',
	'USER_RANK'						=> 'Чин корисника',
	'USER_RANK_UPDATED'				=> 'Чин корисника је ажуриран.',
	'USER_SIG_UPDATED'				=> 'Потпис корисника је успешно ажуриран.',
	'USER_WARNING_LOG_DELETED'		=> 'Подаци нису доступни. Вероватно је запис обрисан.',
	'USER_TOOLS'					=> 'Основни алати',
));
