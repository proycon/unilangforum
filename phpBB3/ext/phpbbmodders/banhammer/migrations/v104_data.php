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

class v104_data extends \phpbb\db\migration\container_aware_migration
{
	static public function depends_on()
	{
		return array('\phpbbmodders\banhammer\migrations\v101_data');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('bh_ban_time', 0)),
		);
	}
}
