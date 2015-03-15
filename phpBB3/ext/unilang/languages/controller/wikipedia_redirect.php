<?php
/**
*
* @package unilang
* @name BBcode wikipedia redirect
* @copyright (c) 2015 UniLang
* @author Yserenhart
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace unilang\languages\controller; 

if (!defined('IN_PHPBB')) {
	exit;
}


class wikipedia_redirect {
	if (isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		$wikipedialink = get_language_name($lang,$sourcelang = 'en',$addnative = false);
	} else {
		$wikipedialink = NULL;
	}


	header('Location: http://en.wikipedia.org/wiki/'.$wikipedialink.'_language');
}

?>
