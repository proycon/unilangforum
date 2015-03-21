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

class module_update extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_auth
			FROM ' . MODULES_TABLE . "
			WHERE module_class = '" . $this->db->sql_escape('ucp') . "'
				AND module_basename = '" . $this->db->sql_escape('\jv\deletemyregistration\ucp\delete_my_registration_module') . "'
				AND module_mode = '" . $this->db->sql_escape('my_acc_delete') . "'";
		$result = $this->db->sql_query($sql);
		$module_auth = $this->db->sql_fetchfield('module_auth');
		$this->db->sql_freeresult($result);

		return $module_auth === 'ext_jv/deletemyregistration';
	}

	static public function depends_on()
	{
		return array('\jv\deletemyregistration\migrations\v1\module');
	}

	public function update_data()
	{
		return array(
			array('custom', array(
					array($this, 'update_deletemyregistration_module_auth'),
				),
			),
		);
	}

	// Update old 3.0.12 module basename and fixed 3.1 ext auth
	public function update_deletemyregistration_module_auth()
	{
		$sql = 'UPDATE ' . MODULES_TABLE . "
			SET module_auth = '" . $this->db->sql_escape('ext_jv/deletemyregistration') . "',
				module_basename = '" . $this->db->sql_escape('\jv\deletemyregistration\ucp\delete_my_registration_module') . "'
			WHERE module_class = '" . $this->db->sql_escape('ucp') . "'
				AND (module_basename = '" . $this->db->sql_escape('profile') . "' OR module_basename = '" . $this->db->sql_escape('\jv\deletemyregistration\ucp\delete_my_registration_module') . "')
				AND module_mode = '" . $this->db->sql_escape('my_acc_delete') . "'
				AND module_auth = ''";
		$this->db->sql_query($sql);
	}
}