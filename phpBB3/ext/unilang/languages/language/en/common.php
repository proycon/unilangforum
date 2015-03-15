<?php
/*
*
* @package unilang
* @name Language functions and definitions
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
    'LANG_TITLE' => "Languages",
    'NATIONALITY' => "Nationality",
    'REGION' => "Region",
    'CITY' => "City",
    'COUNTRY' => "Country",
    'LANGUAGE' => "Language",
    'PROFICIENCY' => "Proficiency",
    'LANG_INFO_PAGE' => "Language List",
    'LANG_NATIVE' => "Native language",
    'LANG_FLUENT' => "Fluently spoken (C2)",
    'LANG_ADVANCED' => "Known at an advanced level (B2,C1)",
    'LANG_INTERMEDIATE' => "Known at an intermediate level (A2,B1)",
    'LANG_BEGINNER' => "Known at a beginner's level (A1)",
    'LANG_INTERESTED' => "Not known yet, but interested in learning",
    'CANHELP' => "I can help others with this language",
    'WANTHELP' => "I want help with this language",
    'ADDLANGUAGE' => "Add a new language",
));

?>
