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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Прикључак',
	'EXTENSIONS'				=> 'Прикључци',
	'EXTENSIONS_ADMIN'			=> 'Управник Прикључака',
	'EXTENSIONS_EXPLAIN'		=> 'А Управник Прикључака је алат у вашем phpBB Форуму који вам омогућава да управљате стањем свих ваших прикључака и да прегледате податке о њима.',
	'EXTENSION_INVALID_LIST'	=> 'Прикључак “%s” није исправан.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Одабрани прикључак није доступан за овај форум, молимо проверите да ли су ваша phpBB и PHP верзија дозвољене (погледајте страницу појединости).',
	'EXTENSION_DIR_INVALID'		=> 'Одабрани прикључак има неисправну структуру фасцикли и не може бити омогућен.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Одабрани прикључак не може бити омогућен, молимо проверите техничке захтеве прикључка.',

	'DETAILS'				=> 'Појединости',

	'EXTENSIONS_DISABLED'	=> 'Онемогућени Прикључци',
	'EXTENSIONS_ENABLED'	=> 'Омогућени Прикључци',

	'EXTENSION_DELETE_DATA'	=> 'Обриши податке',
	'EXTENSION_DISABLE'		=> 'Онемогући',
	'EXTENSION_ENABLE'		=> 'Омогући',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Брисање података прикључка уклања све његове податке и поставке. Датотеке прикључка се чувају тако да прикључак поново може бити омогућен.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Онемогућавањем прикључка се задржавају његове датотеке, подаци и поставке али се уклањају све функције додате од прикључка.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Омогућавањем прикључка се дозвољава његова употреба на вашем форуму.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Подаци прикључка се тренутно бришу. Молимо немојте напуштати или освежавати ову страницу док се брисање не употпуни.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Прикључак се тренутно онемогућава. Молимо немојте напуштати или освежавати ову страницу док се онемогућавање не употпуни.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Прикључак се тренутно омогућава. Молимо немојте напуштати или освежавати ову страницу док се омогућавање не употпуни.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Подаци прикључка су успешно обрисани',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Прикључак је успешно онемогућен',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Прикључак је успешно омогућен',

	'EXTENSION_NAME'			=> 'Назив Прикључка',
	'EXTENSION_ACTIONS'			=> 'Поступци',
	'EXTENSION_OPTIONS'			=> 'Поставке',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Ажурирање прикључка',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Онемогући прикључак</li>
			<li>Обриши датотеке прикључка из система датотека</li>
			<li>Додај нове датотеке</li>
			<li>Омогући прикључак</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Потпуно уклањање прикључка са вашег форума',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Онемогући прикључак</li>
			<li>Обриши податке прикључка</li>
			<li>Обриши датотеке прикључка из система датотека</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Да ли сигурно желите да обришете податке удружене са прикључком “%s”?<br /><br />Ово уклања све његове податке и поставке и не може бити опозвано!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Да ли сигурно желите да онемогућите “%s” прикључак?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Да ли сигурно желите да омогућите “%s” прикључак?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Да ли сигурно желите да присилите на коришћење нестабилне верзије?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Повратак на списак прикључака',

	'EXT_DETAILS'			=> 'Појединости Прикључка',
	'DISPLAY_NAME'			=> 'Приказни Назив',
	'CLEAN_NAME'			=> 'Јасан Назив',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Опис',
	'VERSION'				=> 'Верзија',
	'HOMEPAGE'				=> 'Главна',
	'PATH'					=> 'Путања Датотеке',
	'TIME'					=> 'Време Објаве',
	'LICENSE'				=> 'Лиценца',

	'REQUIREMENTS'			=> 'Захтеви',
	'PHPBB_VERSION'			=> 'phpBB Верзија',
	'PHP_VERSION'			=> 'PHP Верзија',
	'AUTHOR_INFORMATION'	=> 'Подаци Аутора',
	'AUTHOR_NAME'			=> 'Име',
	'AUTHOR_EMAIL'			=> 'Мејл',
	'AUTHOR_HOMEPAGE'		=> 'Главна',
	'AUTHOR_ROLE'			=> 'Улога',

	'NOT_UP_TO_DATE'		=> '%s није ажуран',
	'UP_TO_DATE'			=> '%s је ажуран',
	'ANNOUNCEMENT_TOPIC'	=> 'Саопштење о Издању',
	'DOWNLOAD_LATEST'		=> 'Верзија за Преузимање',
	'NO_VERSIONCHECK'		=> 'Никакви подаци нису дати при провери верзије.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Поновна-Провера свих верзија',
	'FORCE_UNSTABLE'					=> 'Увек провера за нестабилне верзије',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Поставке провере верзије',

	'META_FIELD_NOT_SET'	=> 'Тражено мета поље %s није подешено.',
	'META_FIELD_INVALID'	=> 'Мета поље %s је неисправно.',
));
