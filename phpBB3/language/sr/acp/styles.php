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
	'ACP_STYLES_EXPLAIN'	=> 'Овде можете управљати доступним стиловима на вашем форуму. Можете мењати постојеће стилове, обрисати, деактивирати, реактивирати, инсталирати нове стилове. Можете такође видети како ће стил да изгледа користећи функцију прегледа. Такође је приказан списак укупног броја корисника за сваки стил, молимо знајте да преписивање преко корисниковог стила неће бити одражено овде.',

	'CANNOT_BE_INSTALLED'			=> 'Не може бити инсталирано',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Да ли сигурно желите да деинсталирате одабране стилове?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Не можете деактивирати подразумевани стил.',
	'DELETE_FROM_FS'			=> 'Обриши из система датотека',
	'DELETE_STYLE_FILES_FAILED'	=> 'Грешка при брисању датотека за стил "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Датотеке за стил "%s" су обрисане.',
	'DETAILS'					=> 'Појединости',

	'INHERITING_FROM'			=> 'Наслеђује од',
	'INSTALL_STYLE'				=> 'Инсталирај стил',
	'INSTALL_STYLES'			=> 'Инсталирај стилове',
	'INSTALL_STYLES_EXPLAIN'	=> 'Овде можете инсталирати нове стилове.<br />Уколико не можете да нађете одређени стил на списку испод, проверите да бисте се уверили да је стил већ инсталиран. Уколико није инсталиран, проверите да ли је исправно додат.',
	'INVALID_STYLE_ID'			=> 'Неисправан стил ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Ниједан стил се не поклапа са вашим упитом.',
	'NO_UNINSTALLED_STYLE'		=> 'Нису откривени деинсталирани стилови.',

	'PURGED_CACHE'				=> 'Кеш је избачен.',

	'REQUIRES_STYLE'			=> 'Овај стил тражи да стил "%s" буде инсталиран.',

	'STYLE_ACTIVATE'			=> 'Активирајте',
	'STYLE_ACTIVE'				=> 'Активно',
	'STYLE_DEACTIVATE'			=> 'Деактивирај',
	'STYLE_DEFAULT'				=> 'Постави као подразумевани стил',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Морате активирати стил пре него што га направите подразумеваним стилом.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Неисправан родитељски стил.',
	'STYLE_ERR_NAME_EXIST'		=> 'Стил са тим називом већ постоји.',
	'STYLE_ERR_STYLE_NAME'		=> 'Морате унети назив за овај стил.',
	'STYLE_INSTALLED'			=> 'Стил "%s" је инсталиран.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Повратак на списак инсталираних стилова',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Инсталирај још стилова',
	'STYLE_NAME'				=> 'Назив стила',
	'STYLE_NAME_RESERVED'		=> 'Стил "%s" не може бити инсталиран, јер је име заузето.',
	'STYLE_NOT_INSTALLED'		=> 'Стил "%s" није био инсталиран.',
	'STYLE_PATH'				=> 'Путања стила',
	'STYLE_UNINSTALL'			=> 'Деинсталирај',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Стил "%s" не може бити деинсталиран јер има један или више деце стилова.',
	'STYLE_UNINSTALLED'			=> 'Стил "%s" је успешно деинсталиран.',
	'STYLE_USED_BY'				=> 'Коришћено од (укључујући роботе)',

	'UNINSTALL_DEFAULT'		=> 'Не можете да деинсталирате подразумевани стил.',
));
