<?php
/*
*
* @package unilang
* @name Language Extension
* @copyright (c) 2007-2015 UniLang
* @author proycon
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

namespace unilang\languages\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/**
* Event listener
*/
class main_listener implements EventSubscriberInterface
{
    static public function getSubscribedEvents() {
        return array(
            'core.page_header'  => 'add_page_header_link',
        );
    }

    /* @var \phpbb\controller\helper */
    protected $helper;

    /* @var \phpbb\template\template */
    protected $template;

    /**
    * Constructor
    *
    * @param \phpbb\controller\helper $helper Controller helper object
    * @param \phpbb\template $template Template object
    */
    public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, \unilang\languages\includes\lang_functions $lf) {
        $this->config = $config;
        $this->helper = $helper;
        $this->template = $template;
        $this->user = $user;
        $this->lf = $lf;
    }


    public function add_page_header_link($event) {
        $this->user->add_lang_ext('unilang/languages', 'common');
        $this->template->assign_vars(array(
            'U_LANG_INFO_PAGE'   => $this->helper->route('unilang_languages_controller'),
        ));
    }
}
