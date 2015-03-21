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
	'ABOUT_USER'			=> 'Профил',
	'ACTIVE_IN_FORUM'		=> 'Најактивнији на форуму',
	'ACTIVE_IN_TOPIC'		=> 'Најактивнији на теми',
	'ADD_FOE'				=> 'Додај за игнорисање',
	'ADD_FRIEND'			=> 'Додај пријатеља',
	'AFTER'					=> 'После',

	'ALL'					=> 'Сви',

	'BEFORE'				=> 'Пре',

	'CC_SENDER'				=> 'Пошаљите умножак овог мејла себи.',
	'CONTACT_ADMIN'			=> 'Повежите се са Администратором Форума',

	'DEST_LANG'				=> 'Језик',
	'DEST_LANG_EXPLAIN'		=> 'Изаберите одговарајући језик (ако постоји) за примаоца ове поруке.',

	'EDIT_PROFILE'			=> 'Учитај профил',

	'EMAIL_BODY_EXPLAIN'	=> 'Ова порука ће бити послата као plain text, немојте убацивати никакав HTML или ББКод. Повратна адреса за ову поруку ће бити подешена на вашу мејл адресу.',
	'EMAIL_DISABLED'		=> 'Жао нам је али све функције везане за мејл су онемогућене.',
	'EMAIL_SENT'			=> 'Мејл је послат.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Ова порука ће бити послата као plain text, немојте убацивати никакав HTML или ББКод. Молимо знајте да је податак о теми већ укључен у поруку. Повратна адреса за ову поруку ће бити подешена на вашу мејл адресу.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Морате унети исправну мејл адресу за примаоца.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Морате унети поруку која ће бити послата мејлом.',
	'EMPTY_MESSAGE_IM'		=> 'Морате унети поруку за слање.',
	'EMPTY_NAME_EMAIL'		=> 'Морате унети право име примаоца.',
	'EMPTY_SENDER_EMAIL'	=> 'Морате унети ваљану мејл адресу.',
	'EMPTY_SENDER_NAME'		=> 'Морате унети име.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Морате унети наслов за овај мејл.',
	'EQUAL_TO'				=> 'Једнако',

	'FIND_USERNAME_EXPLAIN'	=> 'Користите овај образац да пронађете одређене чланове. Не морате попунити сва поља. За делимично поклапање користите * као џокер. Када уносите датум користите облик <kbd>ГГГГ-ММ-ДД</kbd>, н.пр. <samp>2004-02-29</samp>. Користите кућице да изаберете једно или више корисничких имена (неколико корисничких имена може бити прихваћено у зависности од самог обрасца) и кликните на дугме Изабери Означено да се вратите на претходни образац.',
	'FLOOD_EMAIL_LIMIT'		=> 'Не можете послати још један мејл у овом тренутку. Молимо вас да пробате касније.',

	'GROUP_LEADER'			=> 'Вођа групе',

	'HIDE_MEMBER_SEARCH'	=> 'Сакриј претрагу чланова',

	'IM_ADD_CONTACT'		=> 'Додај Контакт',
	'IM_DOWNLOAD_APP'		=> 'Преузми апликацију',
	'IM_JABBER'				=> 'Молимо знајте да су корисници можда изабрали да не примају unsolicited instant поруке.',
	'IM_JABBER_SUBJECT'		=> 'Ово је аутоматска порука молимо вас да не одговарате! Порука од корисника %1$s на %2$s.',
	'IM_MESSAGE'			=> 'Ваша порука',
	'IM_NAME'				=> 'Ваше име',
	'IM_NO_DATA'			=> 'Нема одговарајућих података о контакту за овог корисника.',
	'IM_NO_JABBER'			=> 'Жао нам је, директне поруке од Jabber корисника нису подржане на овом серверу. Треба вам Jabber клијент инсталиран на вашем рачунару како бисте се повезали са примаоцима изнад.',
	'IM_RECIPIENT'			=> 'Прималац',
	'IM_SEND'				=> 'Пошаљи поруку',
	'IM_SEND_MESSAGE'		=> 'Пошаљи поруку',
	'IM_SENT_JABBER'		=> 'Ваша порука за %1$s је успешно послата.',
	'IM_USER'				=> 'Пошаљи тренутну поруку',

	'LAST_ACTIVE'				=> 'Последња активност',
	'LESS_THAN'					=> 'Мање од',
	'LIST_USERS'				=> array(
		1	=> '%d корисник',
		2	=> '%d корисника',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Форум захтева да будете регистровани и пријављени како бисте прегледали списак чланова тима.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Форум захтева да будете регистровани и пријављени за приступ списку чланова.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Форум захтева да будете регистровани и пријављени како бисте претраживали кориснике.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Форум захтева да будете регистровани и пријављени да бисте прегледали профиле.',

	'MORE_THAN'				=> 'Више од',

	'NO_CONTACT_FORM'		=> 'Образац за повезивање са администратором форума је онемогућен.',
	'NO_CONTACT_PAGE'		=> 'Страница за повезивање са администратором форума је онемогућена.',
	'NO_EMAIL'				=> 'Немате дозволу да пошаљете мејл овом кориснику.',
	'NO_VIEW_USERS'			=> 'Нисте овлашћени да прегледате списак чланова или профиле.',

	'ORDER'					=> 'Редослед',
	'OTHER'					=> 'Остало',

	'POST_IP'				=> 'Послато са IP/домена',

	'REAL_NAME'				=> 'Име примаоца',
	'RECIPIENT'				=> 'Прималац',
	'REMOVE_FOE'			=> 'Уклони игнорисање',
	'REMOVE_FRIEND'			=> 'Уклони пријатеља',

	'SELECT_MARKED'			=> 'Изабери означено',
	'SELECT_SORT_METHOD'	=> 'Изабери начин ређања',
	'SENDER_EMAIL_ADDRESS'	=> 'Ваша мејл адреса',
	'SENDER_NAME'			=> 'Ваше име',
	'SEND_ICQ_MESSAGE'		=> 'Пошаљи ICQ поруку',
	'SEND_IM'				=> 'Тренутне поруке',
	'SEND_JABBER_MESSAGE'	=> 'Пошаљи Jabber поруку',
	'SEND_MESSAGE'			=> 'Порука',
	'SEND_YIM_MESSAGE'		=> 'Пошаљи YIM поруку',
	'SORT_EMAIL'			=> 'Мејл',
	'SORT_LAST_ACTIVE'		=> 'Последњој активности',
	'SORT_POST_COUNT'		=> 'Броју порука',

	'USERNAME_BEGINS_WITH'	=> 'Корисничко име почиње са',
	'USER_ADMIN'			=> 'Администрирај корисника',
	'USER_BAN'				=> 'Забрана',
	'USER_FORUM'			=> 'Корисникова статистика',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Потсетник тренутно није послат',
		1		=> '%1$d потсетник послат<br />» %2$s',
		2		=> '%1$d потсетник послат<br />» %2$s',
	),
	'USER_ONLINE'			=> 'На вези',
	'USER_PRESENCE'			=> 'Присуство на форуму',
	'USERS_PER_PAGE'		=> 'Корисника по страни',

	'VIEWING_PROFILE'		=> 'Преглед профила - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Преглед Facebook Профила',
	'VIEW_SKYPE_PROFILE'	=> 'Преглед Skype Профила',
	'VIEW_TWITTER_PROFILE'	=> 'Преглед Twitter Профила',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Преглед YouTube Канала',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Преглед Google+ Профила',
));
