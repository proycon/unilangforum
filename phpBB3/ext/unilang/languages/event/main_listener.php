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
            'core.user_setup'   => 'load_language_on_setup',
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
    public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template) {
        $this->helper = $helper;
        $this->template = $template;
    }

    public function load_language_on_setup($event)
    {
        $lang_set_ext = $event['lang_set_ext'];
        $lang_set_ext[] = array(
            'ext_name' => 'unilang/languages',
            'lang_set' => 'common',
        );
        $event['lang_set_ext'] = $lang_set_ext;
    }

    public function add_page_header_link($event) {
        $this->template->assign_vars(array(
            'U_LANG_INFO_PAGE'   => $this->helper->route('unilang_languages_controller', array('name' => 'world')),
        ));
    }
}
