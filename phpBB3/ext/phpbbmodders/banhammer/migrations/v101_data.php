<?php
/**
*
* @package Ban Hammer
*
* @copyright (c) Rich McGirr
* @author 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbbmodders\banhammer\migrations;

/**
* Primary migration
*/

class v101_data extends \phpbb\db\migration\container_aware_migration
{
	static public function depends_on()
	{
		return array('\phpbbmodders\banhammer\migrations\install_banhammer');
	}

	public function update_data()
	{
		$config_text = $this->container->get('config_text');

		$this->settings = @unserialize($config_text->get('banhammer_settings'));

		return array(
			array('config.add', array('bh_ban_email', $this->get('ban_email', 1))),
			array('config.add', array('bh_ban_ip', $this->get('ban_ip', 0))),
			array('config.add', array('bh_del_avatar', $this->get('del_avatar', 0))),
			array('config.add', array('bh_del_privmsgs', $this->get('del_privmsgs', 0))),
			array('config.add', array('bh_del_posts', $this->get('del_posts', 0))),
			array('config.add', array('bh_del_profile', $this->get('del_profile', 1))),
			array('config.add', array('bh_del_signature', $this->get('del_signature', 1))),
			array('config.add', array('bh_group_id', $this->get('group_id', 1))),
			array('config.add', array('bh_sfs_api_key', $this->get('sfs_api_key', ''))),
			array('config.remove', array('banhammer_version')),
			array('config_text.remove', array('banhammer_settings')),
		);
	}

	protected function get($name, $default)
	{
		return isset($this->settings[$name]) ? (int) $this->settings[$name] : $default;
	}
}
