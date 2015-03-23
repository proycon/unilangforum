<?php
/*
*
* @package unilang
* @name Virtual Keyboard Extension
* @copyright (c) 2007-2015 UniLang
* @author Patryk Kalinowski
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

namespace unilang\virtualkeyboard\event;

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
      'core.user_setup' => 'load_language_on_setup', 
      'core.posting_modify_template_vars'  => 'posting_modify_template_vars',
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


  public function load_language_on_setup($event) {
    $event['lang_set_ext'] = array_merge($event['lang_set_ext'], array(
      array(
        'ext_name' => 'unilang/virtualkeyboard',
        'lang_set' => 'common'
      )
    ));
  }

  public function posting_modify_template_vars($event) {
    $this->template->assign_vars(array(
        'U_AJAX_VK_CHARSETS'   => $this->helper->route('unilang_virtualkeyboard_ajax_charsets')
    ));
  }




}
