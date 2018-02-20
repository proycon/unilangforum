<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <jari@tumba25.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbmodders\banhammer\migrations;

class remove_config extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return(array('\phpbbmodders\banhammer\migrations\install_banhammer'));
	}

	public function update_data()
	{
		return(array(
			array('config.remove', array('banhammer_version')),
		));
	}
}
