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

class main_module {
    /**
    * Constructor
    *
    * @param \phpbb\config\config $config
    * @param \phpbb\controller\helper $helper
    * @param \phpbb\template\template $template
    * @param \phpbb\user $user
    */
    public function __construct()
    {
        global $config, $phpbb_container, $request, $user, $template, $db;
        $this->config = $config;
        $this->container = $phpbb_container;
        $this->request = $request;
        $this->user = $user;
        $this->template = $template;
        $this->db = $db;
        $this->lf = $this->container->get('unilang.languages.langfunctions')
        $this->user->add_lang_ext('unilang/languages', 'common');
    }

    function main($id, $mode) {
        $this->tpl_name = 'ucp_language_panel';
        $this->page_title = 'LANG_TITLE';

        $submit = $this->request->variable('submit',0);

        if ($submit) {
            $nationality = $this->request->variable('nationality','');
            $country = $this->request->variable('country','');
            $region = $this->request->variable('region','');
            if ($country || $nationality || $region) {
                $sql = 'UPDATE ' . USERS_TABLE . "
                SET user_nationality='$nationality',user_country='$country', user_region='$region' 
                WHERE user_id = " . $this->user->data['user_id'];
                $this->db->sql_query($sql);
            }
        } else {
            $nationality = $this->user->data['user_nationality'];
            $country = $this->user->data['user_country'];
            $region = $this->user->data['user_region'];
        }

        $regionlist = $this->lf->regionlist($country, $region);

        $template->assign_vars(array(
            'NATIONALITY' => $this->lf->countrylist('en', false,$nationality),
            'COUNTRY' => $this->lf->countrylist('en', false,$country),
            'REGION' => $regionlist
        ));
    }
}
