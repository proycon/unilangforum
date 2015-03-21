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

namespace jv\deletemyregistration\migrations\v1;

class permission extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\jv\deletemyregistration\migrations\v1\module');
	}

	public function update_data()
	{
		return array(
			// Add permission
			array('permission.add', array('u_my_acc_post_delete', true)),

			// Set permissions
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_my_acc_post_delete')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_my_acc_post_delete')),
			array('permission.permission_set', array('ROLE_USER_NOPM', 'u_my_acc_post_delete')),
			array('permission.permission_set', array('ROLE_USER_NOAVATAR', 'u_my_acc_post_delete')),
			array('permission.permission_set', array('ROLE_USER_NEW_MEMBER', 'u_my_acc_post_delete')),
			array('permission.permission_set', array('ROLE_USER_LIMITED', 'u_my_acc_post_delete'))
		);
	}
}