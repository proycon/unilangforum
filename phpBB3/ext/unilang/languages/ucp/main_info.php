<?php
/*
*
* @package unilang
* @author proycon
* @copyright (c) 2015 UniLang Language Community
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/


if (!defined('IN_PHPBB')) {
    exit;
}

namespace unilang\languages\ucp;

class main_info {
    function module() {
        return array(
            'filename'  => '\unilang\languages\ucp\main_module',
            'title'     => 'UCP_LANGUAGES',
            'version'   => '0.2',
            'modes'     => array(
                'view'               => array('title' => 'UCP_LANGUAGES', 'auth' => '', 'cat' => array('UCP_LANGUAGES')),
            ),
        );
    }
}
