<?php
/**
 * 
 * Prime Ban to Group
 * 
 * @copyright (c) 2014 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 * 
 * Original code by primehalo (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=183323)
 * Thanks to him for let me convert his MOD.
 */

namespace wolfsblvt\primebantogroup\migrations;

class v1_0_0_configs extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('wolfsblvt.primebantogroup.check_gc',			10*60)),
			array('config.add', array('wolfsblvt.primebantogroup.check_last_gc',	0)),
			array('config.add', array('wolfsblvt.primebantogroup.resync_last_gc',	0)),
			array('config.add', array('wolfsblvt.primebantogroup.inactive_group',	1)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('wolfsblvt.primebantogroup.check_gc')),
			array('config.remove', array('wolfsblvt.primebantogroup.check_last_gc')),
			array('config.remove', array('wolfsblvt.primebantogroup.resync_last_gc')),
			array('config.remove', array('wolfsblvt.primebantogroup.inactive_group')),
		);
	}
}
