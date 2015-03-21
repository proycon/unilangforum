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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Овде можете направити резервни умножак свих података везаних за phpBB. Можете сачувати добијену архиву у вашој <samp>store/</samp> фасцикли или је преузети непосредно. У зависности од конфигурације вашег сервера можете бити у могућности да сабијете датотеку у неколико облика.',
	'ACP_RESTORE_EXPLAIN'	=> 'Ово ће извести пуно враћање свих phpBB табела из сачуване датотеке. Уколико ваш сервер подржава можете користити gzip или bzip2 сабијену текстуалну датотеку и биће аутоматски распакована. <strong>УПОЗОРЕЊЕ</strong> Ово ће преписати преко било којих постојећих података. Враћање података може да потраје са обрадом и молимо вас да се не померате са ове странице док се не употпуни. Резервни умношци су сачувани у <samp>store/</samp> фасцикли и претпоставља се да су направљени од phpBB система за резервни умножак. Враћање резервног умношка који није направљен од уграђеног система може али не мора да ради.',

	'BACKUP_DELETE'		=> 'Датотека резервног умношка је успешно обрисана.',
	'BACKUP_INVALID'	=> 'Одабрана датотека за резервни умножак је неисправна.',
	'BACKUP_OPTIONS'	=> 'Поставке резервног умношка',
	'BACKUP_SUCCESS'	=> 'Датотека резервног умношка је успешно направљена.',
	'BACKUP_TYPE'		=> 'Тип резервног умношка',

	'DATABASE'			=> 'Алати за базу',
	'DATA_ONLY'			=> 'Само подаци',
	'DELETE_BACKUP'		=> 'Обриши резервни умножак',
	'DELETE_SELECTED_BACKUP'	=> 'Да ли сигурно желите да обришете изабрани резервни умножак?',
	'DESELECT_ALL'		=> 'Одзначи све',
	'DOWNLOAD_BACKUP'	=> 'Преузми резервни умножак',

	'FILE_TYPE'			=> 'Тип датотеке',
	'FILE_WRITE_FAIL'	=> 'Немогуће уписати датотеку у складишну фасциклу.',
	'FULL_BACKUP'		=> 'Потпун',

	'RESTORE_FAILURE'		=> 'Датотека резервног умношка је можда неисправна.',
	'RESTORE_OPTIONS'		=> 'Поставке за враћање',
	'RESTORE_SELECTED_BACKUP'	=> 'Да ли сигурно желите да вратите одабрани резервни умножак?',
	'RESTORE_SUCCESS'		=> 'База је успешно враћена.<br /><br />Ваш форум би требало да се врати у стање када је резервни умножак направљен.',

	'SELECT_ALL'			=> 'Означи све',
	'SELECT_FILE'			=> 'Означи датотеку',
	'START_BACKUP'			=> 'Почни прављење резервног умношка',
	'START_RESTORE'			=> 'Почни враћање',
	'STORE_AND_DOWNLOAD'	=> 'Сачувај и преузми',
	'STORE_LOCAL'			=> 'Сачувај датотеку локално',
	'STRUCTURE_ONLY'		=> 'Само структура',

	'TABLE_SELECT'		=> 'Избор табела',
	'TABLE_SELECT_ERROR'=> 'Морате изабрати најмање једну табелу.',
));
