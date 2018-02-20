<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2017 phpBB Modders <https://phpbbmodders.net/>
* @author Rich McGirr rmcgirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbmodders\banhammer\controller;

/**
* Admin controller
*/
class admin_controller
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\log\log */
	protected $log;

	/* @var \phpbbmodders\banhammer\core\bantime */
	protected $bantime;

	/** @var string Custom form action */
	protected $u_action;

	/**
	* Constructor
	*
	* @param \phpbb\config\config					$config				Config object
	* @param \phpbb\db\driver\driver_interface		$db					Database object
	* @param \phpbb\request\request					$request			Request object
	* @param \phpbb\template\template				$template			Template object
	* @param \phpbb\user							$user				User object
	* @param \phpbb\log								$log				Log object
	* @param \phpbbmodders\banhammer\core\bantime	$bantime			methods for the extension
	* @return phpbbmodders\banhammer\controller\admin_controller
	* @access public
	*/
	public function __construct(
			\phpbb\config\config $config,
			\phpbb\db\driver\driver_interface $db,
			\phpbb\request\request $request,
			\phpbb\template\template $template,
			\phpbb\user $user,
			\phpbb\log\log $log,
			\phpbbmodders\banhammer\core\bantime $bantime)
	{
		$this->config = $config;
		$this->db = $db;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->log = $log;
		$this->bantime = $bantime;
	}

	/**
	 * Display the options a user can configure for this extension
	 *
	 * @return null
	 * @access public
	 */
	public function display_options()
	{
		// Create a form key for preventing CSRF attacks
		add_form_key('banhammer');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			// Test if form key is valid
			if (!check_form_key('banhammer'))
			{
				trigger_error($this->user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'BH_SETTINGS_SUCCESS');

			// Option settings have been updated and logged
			// Confirm this to the user and provide link back to previous page
			trigger_error($this->user->lang['BH_SETTINGS_SUCCESS'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'BAN_EMAIL'		=> (!empty($this->config['bh_ban_email'])) ? true : false,
			'BAN_IP'		=> (!empty($this->config['bh_ban_ip'])) ? true : false,
			'BAN_TIME'		=> $this->bantime->display_ban_time($this->config['bh_ban_time']),
			'DEL_AVATAR'	=> (!empty($this->config['bh_del_avatar'])) ? true : false,
			'DEL_PRIVMSGS'	=> (!empty($this->config['bh_del_privmsgs'])) ? true : false,
			'DEL_POSTS'		=> (!empty($this->config['bh_del_posts'])) ? true : false,
			'DEL_PROFILE'	=> (!empty($this->config['bh_del_profile'])) ? true : false,
			'DEL_SIGNATURE'	=> (!empty($this->config['bh_del_signature'])) ? true : false,
			'MOVE_GROUP'	=> $this->get_groups($this->request->variable('move_group', $this->config['bh_group_id'])),
			'SFS_API_KEY'	=> (!empty($this->config['bh_sfs_api_key'])) ? $this->config['bh_sfs_api_key'] : '',
			'SFS_CURL'		=> (function_exists('curl_init')) ? true : false,

			'U_ACTION'		=> $this->u_action,
		));
	}

	/**
	 * Set the options a user can configure
	 *
	 * @return null
	 * @access protected
	 */
	protected function set_options()
	{
		$this->config->set('bh_ban_email', $this->request->variable('ban_email', 0));
		$this->config->set('bh_ban_ip', $this->request->variable('ban_ip', 0));
		$this->config->set('bh_del_avatar', $this->request->variable('del_avatar', 0));
		$this->config->set('bh_del_privmsgs', $this->request->variable('del_privmsgs', 0));
		$this->config->set('bh_del_posts', $this->request->variable('del_posts', 0));
		$this->config->set('bh_del_profile', $this->request->variable('del_profile', 0));
		$this->config->set('bh_del_signature', $this->request->variable('del_signature', 0));
		$this->config->set('bh_group_id', $this->request->variable('move_group', 0));
		$this->config->set('bh_sfs_api_key', $this->request->variable('sfs_api_key', '', true));
		$this->config->set('bh_ban_time', $this->request->variable('ban_time', 0));
	}

	/**
	 * function to return groups that are allowed
	 */
	private function get_groups($group_selected)
	{
		$this->user->add_lang('acp/groups');

		// Don't display any of the default groups
		// highly doubt an admin would want to ban someone into a default group
		$ignore_groups = array('BOTS', 'GUESTS', 'REGISTERED', 'REGISTERED_COPPA', 'NEWLY_REGISTERED', 'ADMINISTRATORS', 'GLOBAL_MODERATORS');

		$sql = 'SELECT group_name, group_id, group_type
			FROM ' . GROUPS_TABLE . '
			WHERE ' . $this->db->sql_in_set('group_name', $ignore_groups, true) . '
			ORDER BY group_name ASC';
		$result = $this->db->sql_query($sql);

		$selected = ($group_selected == 0) ? ' selected="selected"' : '';
		$s_group_options = "<option value='0'$selected>&nbsp;{$this->user->lang['NO_GROUP']}&nbsp;</option>";
		while ($row = $this->db->sql_fetchrow($result))
		{
			$selected = ($row['group_id'] == $group_selected) ? ' selected="selected"' : '';
			$group_name = ($row['group_type'] == GROUP_SPECIAL) ? $this->user->lang['G_' . $row['group_name']] : $row['group_name'];
			$s_group_options .= "<option value='{$row['group_id']}'$selected>$group_name</option>";
		}
		$this->db->sql_freeresult($result);

		return $s_group_options;
	}

	/**
	 * Set page url
	 *
	 * @param string $u_action Custom form action
	 * @return null
	 * @access public
	 */
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
