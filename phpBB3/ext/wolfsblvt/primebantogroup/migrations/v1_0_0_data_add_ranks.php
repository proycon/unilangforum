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

class v1_0_0_data_add_ranks extends \phpbb\db\migration\migration
{
	protected $ranks = array(
		'BANNED_USERS',
		'SUSPENDED_USERS',
		'INACTIVE_USERS',
	);

	public static function depends_on()
	{
		return array('\wolfsblvt\primebantogroup\migrations\v1_0_0_configs');
	}

	public function effectively_installed()
	{
		$sql = 'SELECT COUNT(*) as total
						FROM ' . RANKS_TABLE . '
						WHERE ' . $this->db->sql_in_set('rank_title', $this->ranks);
		$result = $this->db->sql_query($sql);
		$total = (int) $this->db->sql_fetchfield('total');
		$this->db->sql_freeresult($result);

		return ($total == count($this->ranks));
	}

	public function update_data()
	{
		return array(
			array('custom', array(
				array(&$this, 'add_ranks')
			)),
		);
	}

	public function revert_data()
	{
		return array(
			array('custom', array(
				array(&$this, 'delete_ranks')
			)),
		);
	}

	/**
	 * Adds the banned, suspended and inactive rank to the ranks table
	 * 
	 * @return void
	 */
	public function add_ranks()
	{
		if ($this->effectively_installed())
			return true;

		$rank_data = array();

		foreach ($this->ranks as $rank_name)
		{
			$rank_data[] = array(
				'rank_title' => $rank_name,
				'rank_special' => 1,
				'rank_image' => '../../ext/wolfsblvt/primebantogroup/images/ranks/' . strtolower($rank_name) . '.png',
			);
		}

		$this->db->sql_multi_insert(RANKS_TABLE, $rank_data);
	}

	/**
	 * Removes the banned, suspended and inactive rank from the ranks table
	 */
	public function delete_ranks()
	{
		$sql = 'DELETE FROM ' . RANKS_TABLE . '
					WHERE ' . $this->db->sql_in_set('rank_title', $this->ranks);
		$result = $this->db->sql_query($sql);
		$this->db->sql_freeresult($result);

		return true;
	}
}
