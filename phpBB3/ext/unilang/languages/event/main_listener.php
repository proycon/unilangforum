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
            'core.viewtopic_cache_user_data' => 'viewtopic_add_profiledata1',
            'core.viewtopic_modify_post_row' => 'viewtopic_add_profiledata2'
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


    public function viewtopic_add_profiledata1($event) {
        //adds our custom location fields to the user_poster_data cache, for use by viewtopic_add_profiledata2
        $event['user_cache_data'] = array_merge($event['user_cache_data'], array(
                'country' => $event['row']['user_country'],
                'nationality' => $event['row']['user_nationality'],
                'region' => $event['row']['user_region']
        ));
    }

    public function viewtopic_add_profiledata2($event) {
        //assigns custom location fields from cached user data to template
        $member = $event['user_poster_data'];
        $event['post_row'] = array_merge($event['post_row'], array(
            'NATIONALITY' => $this->lf->get_country_name($member['nationality']),
            'NATIONALITYICON' => $this->lf->countryicon($member['nationality']),
            'COUNTRY' => $this->lf->get_country_name($member['country']),
            'COUNTRYICON' => $this->lf->countryicon($member['country']),
            'REGION' => $this->lf->get_region_name($member['country'],$member['region']),
            'REGIONICON' => $this->lf->regionicon($member['country'],$member['region'])
        ));
    }

    public function add_profiledata($event) {
        $member = $event['member'];
        //add location data to the template
        $this->template->assign_vars(array(
            'NATIONALITY' => $this->lf->get_country_name($member['user_nationality']),
            'NATIONALITYICON' => $this->lf->countryicon($member['user_nationality']),
            'COUNTRY' => $this->lf->get_country_name($member['user_country']),
            'COUNTRYICON' => $this->lf->countryicon($member['user_country']),
            'REGION' => $this->lf->get_region_name($member['user_country'],$member['user_region']),
            'REGIONICON' => $this->lf->regionicon($member['user_country'],$member['user_region'])
        ));

        //assign language data to the template
        $this->lf->assignlanguages($this->template, 'languages', $member['user_id']);
    }


}
