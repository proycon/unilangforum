<?php
/*
*
* @package unilang
* @author Patryk Kalinowski
* @copyright (c) 2015 UniLang Language Community
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace unilang\virtualkeyboard\controller;

if (!defined('IN_PHPBB')) {
    exit;
}


class main {
    /* @var \phpbb\config\config */
    protected $config;

    /* @var \phpbb\controller\helper */
    protected $helper;

    /* @var \phpbb\template\template */
    protected $template;

    /**
    * Constructor
    *
    * @param \phpbb\config\config $config
    * @param \phpbb\controller\helper $helper
    * @param \phpbb\template\template $template
    */
    public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, $request)
    {
        $this->config = $config;
        $this->helper = $helper;
        $this->template = $template;
        $this->request = $request;
    }

    public function ajax_charsets()
    {
        return $this->helper->render('unilang_virtualkeyboard_charsets.html');
    }

}
