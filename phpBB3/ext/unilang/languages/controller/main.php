<?php
/*
*
* @package unilang
* @author proycon
* @copyright (c) 2015 UniLang Language Community
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace unilang\languages\controller;

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

    /* @var \phpbb\user */
    protected $user;

    /**
    * Constructor
    *
    * @param \phpbb\config\config $config
    * @param \phpbb\controller\helper $helper
    * @param \phpbb\template\template $template
    * @param \phpbb\user $user
    */
    public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, \unilang\languages\includes\lang_functions $lf)
    {
        $this->config = $config;
        $this->helper = $helper;
        $this->template = $template;
        $this->user = $user;
        $this->db = $db;
        $this->lf = $lf;
    }

    public function info()
    {
        foreach ($this->lf->language_names() as $baselang => $value) {
            if (is_array($value)) {
                foreach ($value as $complexlang => $name) {
                if ($complexlang === 0) $complexlang = '';
                $this->template->assign_block_vars("items", array(
                'FLAG' => $this->lf->langicon($baselang.$complexlang),
                'BASELANG' => $baselang,
                'COMPLEXLANG' => $complexlang,
                'S_ENGLISHNAME' => $this->lf->get_language_name($baselang.$complexlang,'en',false),
                'S_NATIVENAME' => $name,
                'S_SCRIPTNAME' => $this->lf->get_script_name($this->lf->get_language_script($baselang.$complexlang))
                ));			
                }
            } else {
                $this->template->assign_block_vars("items",array(
                'FLAG' => $this->lf->langicon($baselang),
                'BASELANG' => $baselang,
                'COMPLEXLANG' => '',
                'S_ENGLISHNAME' => $this->lf->get_language_name($baselang,'en',false),
                'S_NATIVENAME' => $value,
                'S_SCRIPTNAME' => $this->lf->get_script_name($this->lf->get_language_script($baselang))
                ));					
            }
        }

        return $this->helper->render('info.html');
    }
}
