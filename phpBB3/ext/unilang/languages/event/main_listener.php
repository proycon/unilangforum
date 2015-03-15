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
        //add location data to the template
        $this->template->assign_vars(array(
            'NATIONALITY' => $this->lf->get_country_name($member['user_nationality']),
            'NATIONALITYICON' => $this->lf->countryicon($member['user_nationality']),
            'COUNTRY' => $this->lf->get_country_name($member['user_country']),
            'COUNTRYICON' => $this->lf->countryicon($member['user_country']),
            'REGION' => $this->lf->get_region_name($member['user_country'],$member['user_region']),
            'REGIONICON' => $this->lf->regionicon($member['user_country'],$member['user_region'])
        ));


        //add language data to the template
        $sourcelang = 'en'; //TODO: allow others
        $vars = array();
        $languages = $this->lf->get_member_languages($member['user_id']);
        $prevprof = -1;
        $min_proficiency = 0; 

        usort($languages, array($this,"secondarySort"));

        foreach ($languages as $language) {
         if ($language['proficiency'] >= $min_proficiency) {
            $langcode = $language['baselang']. $language['complexlang'];
            if (($language['wanthelp']) && ($language['canhelp'])) {
                $rowstyle =  " style=\"background: #f0efe5;\"";
            } elseif ($language['wanthelp']) {
                $rowstyle =  " style=\"background: #f0e5e5;\"";
            } elseif ($language['canhelp']) {
                $rowstyle =  " style=\"background: #e5f0e6;\"";
            } else {
                $rowstyle =  '';
            }

            $r = '';
            $ascii = '';
            for ($i = 1; $i <= 4; $i++) {
                $ascii .= '*';
                if ($language['proficiency'] == 5) {
                    $r .= "<img src=\"/ext/unilang/languages/styles/all/theme/images/icons/starf2.png\" alt=\"star\" />";
                } elseif ($i <= $language['proficiency']) {
                    $r .= "<img src=\"/ext/unilang/languages/styles/all/theme/images/icons/starf.png\" alt=\"star\" />";
                } else {
                    $r .= "<img src=\"/ext/unilang/languages/styles/all/theme/images/icons/star.png\" alt=\"star\" />";
                }
            }
            $r .= ' ';

            $language_vars = array(
                'ICON' => $this->lf->langicon($langcode),
                'CODE' => $langcode,
                'ROWSTYLE' => $rowstyle,
                'PROF_RAW' => $language['proficiency'],
                'PROF_ASCII' => $ascii,
                'PROF_CHANGED' => ($language['proficiency'] != $prevprof),
                'PROFICIENCY' => $r,
                'NAME' => $this->lf->get_language_name($langcode,$sourcelang),
                //'U_SEARCHLINK' => append_sid("{$this->lf->phpbb_root_path}memberlist.php","mode=searchuser&amp;search_proficiency=".LANG_BEGINNER."&amp;search_language=".$langcode),
            );

            $prevprof = $language['proficiency'];

            $this->template->assign_block_vars('languages', $language_vars);
            $vars[] = $language_vars;
         }
        }
        
    }

    protected function secondarySort($a, $b) {
        if ( $a["proficiency"] == $b["proficiency"] )
            return strcasecmp(
                $this->lf->get_language_name($a["baselang"] . $a["complexlang"], $GLOBALS['sourcelang'], ( ($GLOBALS['mode'] == 0) || ($GLOBALS['mode'] == 2) )),
                $this->lf->get_language_name($b["baselang"] . $b["complexlang"], $GLOBALS['sourcelang'], ( ($GLOBALS['mode'] == 0) || ($GLOBALS['mode'] == 2) )));
        else
            return ( $b["proficiency"] < $a["proficiency"] ) ? -1 : 1;
    }

}
