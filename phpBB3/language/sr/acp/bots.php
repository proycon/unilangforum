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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Управљање роботима',
	'BOTS_EXPLAIN'		=> '“Роботи”, “пауци” или “crawlers” су аутоматски агенти обично коришћени од претраживача за ажурирање њихових база. Обзиром да они ретко када правилно користе сесије то они могу изокренути број посетилаца, повећати оптерећење и понекад не успети да индексирају веб страницу исправно. Овде можете да их одредите као посебан тип корисника како би превазишли ове сметње.',
	'BOT_ACTIVATE'		=> 'Активирајте',
	'BOT_ACTIVE'		=> 'Робот активан',
	'BOT_ADD'			=> 'Додај робота',
	'BOT_ADDED'			=> 'Нови робот је успешно додат.',
	'BOT_AGENT'			=> 'Поклапање агента',
	'BOT_AGENT_EXPLAIN'	=> 'Стринг који се поклапа са прегледачевим роботом, делимична поклапања су дозвољена.',
	'BOT_DEACTIVATE'	=> 'Деактивирај',
	'BOT_DELETED'		=> 'Робот је успешно обрисан.',
	'BOT_EDIT'			=> 'Учитај роботе',
	'BOT_EDIT_EXPLAIN'	=> 'Овде можете додати или учитати постојеће уносе робота. Можете одредити стринг агента и/или једну или више IP адреса (или опсег адреса) за поклапање. Будите пажљиви када одређујете поклапајуће стрингове агента или адресе. Можете такође одредити стил и језик који ће робот видети да форум користи. Ово вам може омогућити да смањите коришћење промета подешавањем једноставног стила за роботе. Имајте у виду да подесите одговарајуће дозволе за посебну корисничку групу Робота.',
	'BOT_LANG'			=> 'Робот језик',
	'BOT_LANG_EXPLAIN'	=> 'Језик представљен роботу док га прегледа.',
	'BOT_LAST_VISIT'	=> 'Последња посета',
	'BOT_IP'			=> 'IP адреса робота',
	'BOT_IP_EXPLAIN'	=> 'Делимична поклапања су дозвољена, раздвојте адресе зарезом.',
	'BOT_NAME'			=> 'Име робота',
	'BOT_NAME_EXPLAIN'	=> 'Користи се само за вашу обавештеност.',
	'BOT_NAME_TAKEN'	=> 'Име је већ у употреби на вашем форуму и не може бити коришћено за Робота.',
	'BOT_NEVER'			=> 'Никада',
	'BOT_STYLE'			=> 'Робот стил',
	'BOT_STYLE_EXPLAIN'	=> 'Стил који робот користи за форум.',
	'BOT_UPDATED'		=> 'Постојећи робот је успешно ажуриран.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Агент робота којег сте доставили је сличан оном којег тренутно користите. Молимо вас да подесите агента за овог робота.',
	'ERR_BOT_NO_IP'				=> 'IP адресе које сте доставили су неисправне или име сервера није могуће решити.',
	'ERR_BOT_NO_MATCHES'		=> 'Морате доставити бар једног од агената или IP адресу за поклапање овог робота.',

	'NO_BOT'		=> 'Није пронађен ниједан робот са назначеним ID.',
	'NO_BOT_GROUP'	=> 'Не могу да пронађем посебну групу робота.',
));
