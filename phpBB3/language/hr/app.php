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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, array(
'CONTROLLER_ARGUMENT_VALUE_MISSING'=>'Nedostaje vrijednost za argument #%1$s: <strong>%3$s</strong> u klasi <strong>%2$s</strong>.',
'CONTROLLER_NOT_SPECIFIED'=>'Nije određen niti jedan kontrolor.',
'CONTROLLER_METHOD_NOT_SPECIFIED'=>'Nije određena niti jedna metoda za kontrolor.',
'CONTROLLER_SERVICE_UNDEFINED'=>'Usluga za kontrolor "<strong>%s</strong>" nije definirana u ./config/services.yml.',
// <!-- Kocka je hičena! -->
));
