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

namespace wolfsblvt\primebantogroup\acp;

class primebantogroup_info
{
	function module()
	{
		return array(
			'filename'	=> '\wolfsblvt\primebantogroup\acp\primebantogroup_module',
			'title'		=> 'PBTG_TITLE_ACP',
			'modes'		=> array(
				'settings'	=> array('title' => 'PBTG_SETTINGS_ACP', 'auth' => 'ext_wolfsblvt/primebantogroup && acl_a_board', 'cat' => array('PBTG_TITLE_ACP')),
			),
		);
	}
}
