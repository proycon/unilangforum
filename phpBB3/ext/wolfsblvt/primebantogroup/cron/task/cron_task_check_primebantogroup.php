<?php
/**
 * 
 * Prime Ban to Group
 * 
 * @copyright (c) 2014 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 */

namespace wolfsblvt\primebantogroup\cron\task;

class cron_task_check_primebantogroup extends \phpbb\cron\task\base
{
	/** @var \wolfsblvt\primebantogroup\core\primebantogroup */
	protected $primeban;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var string phpBB root path  */
	protected $root_path;

	/** @var string PHP file extension */
	protected $php_ext;

	/**
	 * Constructor
	 * 
	 * @param \phpbb\db\driver\driver_interface $db
	 * @param \phpbb\config\config $config
	 * @param string $root_path
	 * @param string $php_ext
	 * @return \wolfsblvt\primebantogroup\cron\task\cron_task_primebantogroup
	 * @access public
	 */
	public function __construct(\wolfsblvt\primebantogroup\core\primebantogroup $primeban, \phpbb\db\driver\driver_interface $db, \phpbb\config\config $config, $root_path, $php_ext)
	{
		$this->primeban = $primeban;
		$this->db = $db;
		$this->config = $config;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;

		$this->ext_root_path = 'ext/wolfsblvt/primebantogroup';
	}

	/**
	 * Runs this cron task.
	 *
	 * @return null
	 */
	public function run()
	{
		$this->config->set('wolfsblvt.primebantogroup.check_last_gc', time());

		// Remove users from groups wich are unbanned
		$this->primeban->ban_to_group(null, 'unban');

		// Check for inactive users
		$config_inactive = $this->config['wolfsblvt.primebantogroup.inactive_group'];
		if($config_inactive)
		{
			$inactive_group_id = $this->primeban->get_group_data($this->primeban->INACTIVE_GROUP_NAME)['group_id'];

			$sql = 'SELECT ug.user_id, u.user_type, u.username
				FROM ' . USERS_TABLE . ' u
				LEFT JOIN ' . USER_GROUP_TABLE . " ug ON (ug.user_id = u.user_id AND ug.group_id = $inactive_group_id)
				WHERE (
					ug.group_id = $inactive_group_id
						AND u.user_type <> " . USER_INACTIVE . "
					)
					OR (
						ug.group_id <> $inactive_group_id
							AND u.user_type = " . USER_INACTIVE . '
					)';
			$result = $this->db->sql_query($sql);

			$data = array(
				'add'		=> array('user_ids' => array(), 'usernames' => array()),
				'remove'	=> array('user_ids' => array(), 'usernames' => array()),
			);
			while ($row = $this->db->sql_fetchrow($result))
			{
				$action = ($row['user_type'] == USER_INACTIVE) ? 'add' : 'remove';

				$data[$action]['user_ids'][] = $row['user_id'];
				$data[$action]['usernames'][] = $row['username'];
			}
			$this->db->sql_freeresult($result);

			$this->primeban->group_inactive_users($data['add']['user_ids'], 'add', $data['add']['usernames']);
			$this->primeban->group_inactive_users($data['remove']['user_ids'], 'remove', $data['remove']['usernames']);
		}
	}

	/**
	 * Returns whether this cron task can run, given current board configuration.
	 *
	 * @return bool
	 */
	public function is_runnable()
	{
		return (bool) $this->config['wolfsblvt.primebantogroup.check_gc'] > 0;
	}

	/**
	 * Returns whether this cron task should run now, because enough time
	 * has passed since it was last run.
	 *
	 * @return bool
	 */
	public function should_run()
	{
		return ($this->config['wolfsblvt.primebantogroup.check_last_gc'] < time() - ($this->config['wolfsblvt.primebantogroup.check_gc']));
	}
}
