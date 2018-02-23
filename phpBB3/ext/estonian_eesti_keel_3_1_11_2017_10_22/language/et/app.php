<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2018 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2017-10-22 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti, Mikk, #EV100
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Puuduv väärtus argumendile #%1$s: <strong>%3$s</strong> klassis <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Ühtegi kontrollerit ei ole määratletud.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Ühtegi tegevusviisi ei ole määratletud kontrollerile.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Teenus kontrollerile “<strong>%s</strong>” ei ole määratletud kohas ./config/services.yml.',
));
