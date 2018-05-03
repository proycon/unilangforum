<?php
/*
*
* @package unilang
* @name Translations
* @copyright (c) 2007-2015 UniLang
* @author Patryk Kalinowski
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
    'VKBD_SHOW' => "Show virtual keyboard",
    'VKBD_HIDE' => "Hide virtual keyboard",
    'VKBD_EXTENDED' => "Extended",
    'VKBD_PLEASE_WAIT' => "Please wait...",
    'VKBD_IPA' => "IPA",
    'VKBD_LATN' => "Latin/Roman",
    'VKBD_CYRL' => "Cyrillic",
    'VKBD_GREK' => "Greek",
    'VKBD_HEBR' => "Hebrew"
));

?>
