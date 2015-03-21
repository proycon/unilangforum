<?php
/**
*
* @package Delete my registration
* @version $Id$
* @author KillBill - killbill@jatek-vilag.com
* @copyright 2010-2014 (c) http://jatek-vilag.com/ - info@jatek-vilag.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\deletemyregistration\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	public function __construct()
	{
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'	=> 'language',
			'core.permissions'	=> 'permissions_language'
		);
	}

	public function language($event)
	{
		$event['lang_set_ext'] = array_merge($event['lang_set_ext'], array(
			array(
				'ext_name' => 'jv/deletemyregistration',
				'lang_set' => 'common'
			)
		));
	}

	public function permissions_language($event)
	{
		$event['permissions'] = array_merge($event['permissions'], array(
			'u_my_acc_post_delete' => array('lang' => 'ACL_U_MY_ACC_POST_DELETE', 'cat' => 'profile')
		));
	}
}