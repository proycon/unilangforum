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

namespace wolfsblvt\primebantogroup\core;

class primebantogroup
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\user */
	protected $user;

	/** @var string phpBB root path  */
	protected $root_path;

	/** @var string PHP file extension */
	protected $php_ext;

	/** @internal readonly! */
	public $BANNED_GROUP_NAME = 'BANNED_USERS';
	public $SUSPENDED_GROUP_NAME = 'SUSPENDED_USERS';
	public $INACTIVE_GROUP_NAME = 'INACTIVE_USERS';

	/**
	 * Constructor
	 * 
	 * @param \phpbb\config\config $config
	 * @param \phpbb\db\driver\driver_interface $db
	 * @param \phpbb\user $user
	 * @param string $root_path
	 * @param string $php_ext
	 * @return \wolfsblvt\primebantogroup\core\primebantogroup
	 * @access public
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\user $user, $root_path, $php_ext)
	{
		$this->config = $config;
		$this->db = $db;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;

		$this->ext_root_path = 'ext/wolfsblvt/primebantogroup';
	}

	/**
	 * Primary function to add and remove users from banned group
	 * 
	 * @param array $ids The array of user ids.
	 * @param int|'unban' $ban_len Either the length of the ban or string 'unban' to unban
	 * @param string $mode The mode of the ban. Either 'user', 'email' or empty.
	 * @param array $usernames An optional array of usernames.
	 * @return void
	 */
	public function ban_to_group($ids = null, $ban_len = 0, $mode = '', $usernames = false)
	{
		if ($mode == 'user' || $mode == 'email' || $mode == '')
		{
			if (is_int($ban_len))
			{
				$this->group_users_add(($ban_len ? $this->SUSPENDED_GROUP_NAME : $this->BANNED_GROUP_NAME), $ids, $usernames);
			}
			else if ($ban_len == 'unban')
			{
				if (empty($ids) || $mode === '') // remove stale bans
				{
					$sql = 'SELECT u.user_id, u.username, b.ban_end'
						 . '	FROM ' . USERS_TABLE . ' u, ' . BANLIST_TABLE . ' b'
						 . '	WHERE ban_end < ' . time()
						 . '		AND ban_end <> 0'
						 . '		AND u.user_type <> ' . USER_IGNORE
						 . '		AND u.user_id = b.ban_userid';
				}
				else
				{
					$sql = 'SELECT u.user_id, u.username, b.ban_end'
						 . '	FROM ' . USERS_TABLE . ' u, ' . BANLIST_TABLE . ' b'
						 . '	WHERE ' . $this->db->sql_in_set('b.ban_id', $ids)
						 . '		AND ' . ($mode == 'email' ? 'u.user_email = b.ban_email' : 'u.user_id = b.ban_userid');
				}
				$result = $this->db->sql_query($sql);
				$ids = array();
				while ($row = $this->db->sql_fetchrow($result))
				{
					$type = $row['ban_end'] ? $this->SUSPENDED_GROUP_NAME : $this->BANNED_GROUP_NAME;
					$ids[$type][] = $row['user_id'];
					$names[$type][] = $row['username'];
				}
				$this->db->sql_freeresult($result);
				foreach ($ids as $group_name => $user_ids)
				{
					$this->group_users_del($group_name, $user_ids, $names[$group_name]);
				}
			}
		}
	}

	/**
	 * Adds or removes users from group inactive
	 * 
	 * @param int|array $user_ids user_id or array of user_ids
	 * @param string $action Can either be 'add' or 'remove'
	 * @param array $usernames Optional usernames
	 * @return bool successfull or not
	 */
	public function group_inactive_users($user_ids, $action = 'add', $usernames = false) {
		if (!empty($user_ids))
		{
			if ($action == 'add')
			{
				$this->group_users_add($this->INACTIVE_GROUP_NAME, $user_ids, $usernames);
				return true;
			}
			else if ($action == 'remove')
			{
				$this->group_users_del($this->INACTIVE_GROUP_NAME, $user_ids, $usernames);
				return true;
			}
		}
		return false;
	}

	/**
	 * Returns data of a specific group
	 * 
	 * @param string $group_name The name of the group
	 * @return array Group data
	 */
	public function get_group_data($group_name)
	{
		$sql = 'SELECT * '
			 . ' FROM ' . GROUPS_TABLE . ' '
			 . " WHERE group_name='" . $this->db->sql_escape($group_name) . "'"
		;
		$result = $this->db->sql_query($sql);
		$group_data = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		return $group_data;
	}

	/**
	 * Resyncs all used groups. Remove and adds users wich are no longer valid or should be.
	 * 
	 * @return void
	 */
	function resync_banned_groups()
	{
		$config_inactive = $this->config['wolfsblvt.primebantogroup.inactive_group'];

		// Remove users from groups wich are unbanned
		$this->ban_to_group(null, 'unban');

		// Remove users wich are no more inactive
		$inactive_group = $this->get_group_data($this->INACTIVE_GROUP_NAME);

		if (!empty($inactive_group))
		{
			$sql = 'SELECT ug.user_id, u.user_type, u.username
				FROM ' . USER_GROUP_TABLE . ' ug
				LEFT JOIN ' . USERS_TABLE . ' u ON (ug.user_id = u.user_id)
				WHERE ug.group_id = ' . $inactive_group['group_id'];
			$result = $this->db->sql_query($sql);
			$data = array('user_ids' => array(), 'usernames' => array());
			while ($row = $this->db->sql_fetchrow($result))
			{
				if(!$config_inactive || $row['user_type'] != USER_INACTIVE)
				{
					$data['user_ids'][] = $row['user_id'];
					$data['usernames'][] = $row['username'];
				}
			}
			$this->db->sql_freeresult($result);

			$this->group_inactive_users($data['user_ids'], 'remove', $data['usernames']);
		}

		// Lets make one thing sure first. I'll not check if users are already in the group and will be added again in this function.
		// The phpBB group_user_add function checks that anyway, so no need here.
		// Why would you do work twice? (:		

		$users_to_groups = array(
			$this->BANNED_GROUP_NAME		=> array('user_ids' => array(), 'usernames' => array()),
			$this->SUSPENDED_GROUP_NAME		=> array('user_ids' => array(), 'usernames' => array()),
			$this->INACTIVE_GROUP_NAME		=> array('user_ids' => array(), 'usernames' => array()),
		);

		// Get the users that needs to be added in groups
		$sql = 'SELECT u.user_id, u.username, u.user_type, b.ban_userid, b.ban_end
				FROM ' . USERS_TABLE . ' u
				LEFT JOIN ' . BANLIST_TABLE . ' b ON (u.user_id = b.ban_userid)
				WHERE u.user_type <> ' . USER_IGNORE . ' 
					AND (
						( b.ban_end = 0 OR b.ban_end > ' . time() . ' )
						OR u.user_type = ' . USER_INACTIVE . '
					)';
		$result = $this->db->sql_query($sql);
		while ($row = $this->db->sql_fetchrow($result))
		{
			$group = false;
			if ($row['ban_userid'])
			{
				$group = ($row['ban_end'] == 0) ? $this->BANNED_GROUP_NAME : $this->SUSPENDED_GROUP_NAME;
			}
			else if ($config_inactive && $row['user_type'] == USER_INACTIVE)
			{
				$group = $this->INACTIVE_GROUP_NAME;
			}

			if ($group)
			{
				$users_to_groups[$group]['user_ids'][] = $row['user_id'];
				$users_to_groups[$group]['usernames'][] = $row['username'];
			}
		}
		$this->db->sql_freeresult($result);

		// Add inacitve users (if wished)
		$data = $users_to_groups[$this->INACTIVE_GROUP_NAME];
		if ($config_inactive && !empty($data['user_ids']))
		{
			$this->group_inactive_users($data['user_ids'], 'add', $data['usernames']);
		}

		// Add fully banned users
		$data = $users_to_groups[$this->BANNED_GROUP_NAME];
		if (!empty($data['user_ids']))
		{
			$this->ban_to_group($data['user_ids'], 0, 'user', $data['usernames']);
		}

		// Add suspended users
		$data = $users_to_groups[$this->SUSPENDED_GROUP_NAME];
		if (!empty($data['user_ids']))
		{
			$this->ban_to_group($data['user_ids'], 1, 'user', $data['usernames']);
		}
	}

	/**
	 * Add user(s) to group
	 * 
	 * @param string $group_name The name of the group
	 * @param array $user_ids Array of user_ids wich should be added
	 * @param array $usernames Optional usernames
	 * @return bool successfull or not
	 */
	private function group_users_add($group_name, $user_ids, $usernames = false)
	{
		// include for function
		if(!function_exists('group_user_add'))
			include($this->root_path . 'includes/functions_user.' . $this->php_ext);

		$group_data	= $this->get_group_data($group_name);
		$group_id	= isset($group_data['group_id']) ? $group_data['group_id'] : null;
		if (!empty($group_id))
		{
			$group_name = ($group_data['group_type'] == GROUP_SPECIAL && !empty($this->user->lang['G_' . $group_data['group_name']])) ? $this->user->lang['G_' . $group_data['group_name']] : $group_name;
			group_user_add($group_id, $user_ids, $usernames, $group_name, true, 0, 0, $group_data);
			return true;
		}
		return false;
	}

	/**
	 * Remove a user/s from a given group. When we remove users we update their
	 * default group_id. We do this by examining which "special" groups they belong
	 * to. The selection is made based on a reasonable priority system
	 * 
	 * @param string $group_name The name of the group
	 * @param array $user_ids Array of user_ids wich should be deleted
	 * @param array $usernames Optional usernames
	 * @return bool successfull or not
	 */
	private function group_users_del($group_name, $user_ids, $usernames = false)
	{
		// include for function
		if(!function_exists('group_user_del'))
			include($this->root_path . 'includes/functions_user.' . $this->php_ext);

		$group_data	= $this->get_group_data($group_name);
		$group_id	= isset($group_data['group_id']) ? (int)$group_data['group_id'] : null;
		if (!empty($group_id))
		{
			// Get users belonging to the group from which we want them removed (only needed to prevent log entries for removing users that don't even belong to the group)
			$sql = 'SELECT user_id'
				 . ' FROM ' . USER_GROUP_TABLE
				 . ' WHERE group_id = ' . $group_id
				 . ' 	AND ' . $this->db->sql_in_set('user_id', (array)$user_ids)
			;
			$result = $this->db->sql_query($sql);
			$user_ids = array(); // clear out the user_ids array
			while ($row = $this->db->sql_fetchrow($result))
			{
				$user_ids[] = $row['user_id'];
			}
			$this->db->sql_freeresult($result);
			if (!empty($user_ids))
			{
				remove_default_rank($group_id, $user_ids);
				$group_name = ($group_data['group_type'] == GROUP_SPECIAL && !empty($this->user->lang['G_' . $group_data['group_name']])) ? $this->user->lang['G_' . $group_data['group_name']] : $group_name;
				group_user_del($group_id, $user_ids, $usernames, $group_name, 0, 0, $group_data);
				return true;
			}
		}
		return false;
	}
}
