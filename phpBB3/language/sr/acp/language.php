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
	'ACP_FILES'						=> 'Админ језичке датотеке',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Овде можете да инсталирате/уклоните језичке пакете. Подразумевани језички пакет је означен са звездицом (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Да ли сигрно желите да обришете “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Инсталирани језички пакети',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Појединости језика су успешно ажуриране.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Овај језички пакет је већ инсталиран.',
	'LANGUAGE_PACK_DELETED'				=> 'Језички пакет “%s” је успешно уклоњен. Сви корисници који користе овај језик су враћени на подразумевани је’зик форума.',
	'LANGUAGE_PACK_DETAILS'				=> 'Појединости језичког пакета',
	'LANGUAGE_PACK_INSTALLED'			=> 'Језички пакет “%s” је успешно инсталиран.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Језичке ознаке властитих поља профила’ су умножене из подразумеваног језика. Молимо промените их уколико је неопходно.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Месни назив',
	'LANGUAGE_PACK_NAME'				=> 'Име',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Одабрани језички пакет не постоји.',
	'LANGUAGE_PACK_USED_BY'				=> 'Коришћен од (укључујући роботе)',
	'LANGUAGE_VARIABLE'					=> 'Језичка променљива',
	'LANG_AUTHOR'						=> 'Аутор језичког пакета',
	'LANG_ENGLISH_NAME'					=> 'Енглески назив',
	'LANG_ISO_CODE'						=> 'ISO код',
	'LANG_LOCAL_NAME'					=> 'Месни назив',

	'MISSING_LANG_FILES'		=> 'Недостају језичке датотеке',
	'MISSING_LANG_VARIABLES'	=> 'Недостају језичке променљиве',

	'NO_FILE_SELECTED'				=> 'Нисте изабрали језичку датотеку.',
	'NO_LANG_ID'					=> 'Нисте изабрали језички пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Нисте у могућности да уклоните подразумевани језички пакет.<br />Уколико желите да уклоните овај језички пакет, прво промените подразумевани је’зик вашег форума.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Нема деинсталираних језичких пакета',

	'THOSE_MISSING_LANG_FILES'			=> 'Следеће језичке датотеке недостају у “%s” језичкој фасцикли',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Следеће језичке променљиве недостају у “%s” језичком пакету',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Деинсталирани језички пакети',
));
