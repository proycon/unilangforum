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
            'core.user_setup'=> 'load_language_on_setup', 
            'core.page_header'  => 'add_page_header_link',
            'core.memberlist_view_profile' => 'add_profiledata',
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


    public function load_language_on_setup($event) {
        $lang_set_ext = $event['lang_set_ext'];
        $lang_set_ext[] = array(
            'ext_name' => 'unilang/languages',
            'lang_set' => 'common',
        );
        $event['lang_set_ext'] = $lang_set_ext;
    }

    public function add_page_header_link($event) {
        //add the page link for the language list info page
        $this->template->assign_vars(array(
            'U_LANG_INFO_PAGE'   => $this->helper->route('unilang_languages_controller'),
        ));
    }


    public function add_profiledata($event) {
        $member = $event['member'];
        //add language data to the template
        //TODO
        //add location data to the template
        $this->template->assign_vars(array(
            'NATIONALITY' => $this->lf->get_country_name($member['user_nationality']),
            'NATIONALITYICON' => $this->lf->countryicon($member['user_nationality']),
            'COUNTRY' => $this->lf->get_country_name($member['user_country']),
            'COUNTRYICON' => $this->lf->countryicon($member['user_country']),
            'REGION' => $this->lf->get_region_name($member['user_country'],$member['user_region']),
            'REGIONICON' => $this->lf->regionicon($member['user_country'],$member['user_region'])
        ));
    }


}
