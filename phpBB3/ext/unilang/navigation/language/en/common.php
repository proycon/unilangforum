<?php
/*
*
* @package unilang
* @name Translations
* @copyright (c) 2007-2015 UniLang
* @author proycon
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB')) {
    exit;
}

if (empty($lang) || !is_array($lang)) {
    $lang = array();
}


$lang = array_merge($lang, array(
    'CHAT' => "Chat",
    'RESOURCE_ARCHIVE' => "Resource Archive",
    'DEVELOPMENT' => "Development",
));

?>
