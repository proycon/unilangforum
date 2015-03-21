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

class module extends \phpbb\db\migration\migration
{

	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . MODULES_TABLE . "
			WHERE module_class = '" . $this->db->sql_escape('ucp') . "'
				AND (module_basename = '" . $this->db->sql_escape('profile') . "' OR module_basename = '" . $this->db->sql_escape('\jv\deletemyregistration\ucp\delete_my_registration_module') . "')
				AND module_mode = '" . $this->db->sql_escape('my_acc_delete') . "'";
		$result = $this->db->sql_query($sql);
		$module_id = $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id;
	}

	public function update_data()
	{
		return array(
			array('module.add', array(
				'ucp', 'UCP_PROFILE', array(
					'module_basename'	=> '\jv\deletemyregistration\ucp\delete_my_registration_module',
					'modes'				=> array('my_acc_delete')
				)
			))
		);
	}
}