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
	'CONFIG_NOT_EXIST'					=> 'Поставка конфига "%s" неочекивано не постоји.',

	'GROUP_NOT_EXIST'					=> 'Група "%s" неочекивано не постоји.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Примени зависности од %s.',
	'MIGRATION_DATA_DONE'				=> 'Инсталирани Подаци: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Инсталирање Податка: %1$s; Време: %2$.2f секунди',
	'MIGRATION_DATA_RUNNING'			=> 'Инсталирање Податка: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Миграција је већ успешно инсталирана (прескочено): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Нешто је кренуло лоше током захтева и изузетак је избачен. Промене направљене пре грешке која се појавила су враћене на најбољи могући начин, али бисте ипак требали да проверите форум за могуће грешке.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Миграција "%1$s" није употпуњена, недостаје миграција "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s није исправна миграција.',
	'MIGRATION_SCHEMA_DONE'				=> 'Инсталирана Шема: %1$s; Време: %2$.2f секунди',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Инсталирање Шеме: %s.',

	'MODULE_ERROR'						=> 'Појавила се грешка током прављења модула: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Тражена инфо датотека модула недостаје: %2$s',
	'MODULE_NOT_EXIST'					=> 'Тражени модул не постоји: %s',

	'PERMISSION_NOT_EXIST'				=> 'Поставка дозволе "%s" неочекивано не постоји.',

	'ROLE_NOT_EXIST'					=> 'Рола дозвола "%s" неочекивано не постоји.',
));
