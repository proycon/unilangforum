<?php
/*
*
* @package unilang
* @author proycon
* @copyright (c) 2015 UniLang Language Community
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace unilang\languages\ucp;

if (!defined('IN_PHPBB')) {
    exit;
}


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
        $this->lf = $this->container->get('unilang.languages.langfunctions');
        $this->user->add_lang_ext('unilang/languages', 'common');
    }

    function main($id, $mode) {
        $sourcelang = 'en'; //TODO: get board language
        $this->tpl_name = 'ucp_language_panel';
        $this->page_title = 'LANG_TITLE';

        $submitted = $this->request->variable('submitted',0);

        if ($submitted) {
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

        $delete = $this->request->variable('delete',''); //will contain the language code to delete
        if ($delete) {
            list($baselang,$complexlang) = $this->lf->split_language_code($delete,true);
            $this->lf->member_delete_language($this->user->data['user_id'],$baselang,$complexlang);
        }

        //assign language data to the template
        $this->lf->assignlanguages($this->template, 'languages', $this->user->data['user_id']);

        $this->template->assign_vars(array(
            'NATIONALITY' => $this->lf->countrylist($sourcelang, false,$nationality),
            'COUNTRY' => $this->lf->countrylist($sourcelang, false,$country),
            'REGION' => $regionlist,
            'LANGLIST' => $this->lf->langlist($sourcelang),
            'S_UCP_ACTION' => append_sid("{$this->lf->phpbb_root_path}ucp.php","i=-unilang-languages-ucp-main_module"),
        ));



    }
}
