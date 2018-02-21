<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <jari@tumba25.net>
* @author Rich McGirr
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbmodders\banhammer\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class banhammer_listener implements EventSubscriberInterface
{
	/**
	 * Target user data
	 */
	private $data = array();

	/**
	 * Target user id
	 */
	private $user_id = 0;

	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\cache\driver\driver_interface */
	protected $cache;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/* @var \phpbbmodders\banhammer\core\bantime */
	protected $bantime;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string phpEx */
	protected $php_ext;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\cache\driver\driver_interface $cache,
		\phpbb\config\config $config,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\request\request $request,
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbbmodders\banhammer\core\bantime $bantime,
		$root_path,
		$phpExt
	)
	{
		$this->auth			= $auth;
		$this->cache		= $cache;
		$this->config 		= $config;
		$this->db			= $db;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->bantime		= $bantime;
		$this->root_path	= $root_path;
		$this->php_ext		= $phpExt;

	}

	static public function getSubscribedEvents()
	{
		return(array(
			'core.memberlist_view_profile'	=> 'do_ban_hammer_stuff',
		));
	}

	public function do_ban_hammer_stuff($event)
	{
		$this->data		= $event['member'];
		$this->user_id	= (int) $this->data['user_id'];
		$curl_exists	= (function_exists('curl_init')) ? true : false;

		/**
		 * Split these up and give error messages? Later maybe.
		 */
		if (!$this->auth->acl_get('m_ban') || !$this->auth->acl_get('a_user') || $this->data['user_type'] == USER_FOUNDER || $this->user_id == $this->user->data['user_id'])
		{
			// Nothing to see here, move on.
			return;
		}

		$this->user->add_lang_ext('phpbbmodders/banhammer', array('banhammer', 'banhammer_acp'));
		$this->user->add_lang('acp/ban');

		// Check if this user already is banned.
		if (!function_exists('phpbb_get_banned_user_ids'))
		{
			include($this->root_path . 'includes/functions_user.' . $this->php_ext);
		}

		$banned = phpbb_get_banned_user_ids(array($this->user_id));

		if (!empty($banned))
		{
			$bh_result = $this->request->variable('bh_res', '');

			if (!empty($bh_result))
			{
				if ($bh_result == 'success')
				{
					$bh_message = $this->user->lang['BANNED_SUCCESS'];
				}
				else
				{
					// One or more actions failed.
					$message_ary = explode('+', urldecode($bh_result));
					$bh_message = $this->user->lang['BANNED_ERROR'];

					foreach ($message_ary as $error)
					{
						$bh_message .= '<br />' . $this->user->lang[$error];
					}
				}

				$this->template->assign_vars(array(
					'BH_STYLE'		=> (($bh_result == 'success') ? 'green' : '#a92c2c') . '; color: white;"',
					'BH_MESSAGE'	=> $bh_message,
				));
			}
			else
			{
				// It's enough to ban them once.
				$this->template->assign_var('BH_MESSAGE', $this->user->lang['BH_BANNED']);
			}

			return;
		}

		if ($this->config['bh_group_id'])
		{
			// Get group name for banned users, if any.
			$sql = 'SELECT group_id, group_name FROM ' . GROUPS_TABLE . '
					WHERE group_id = ' . (int) $this->config['bh_group_id'];
			$result = $this->db->sql_query($sql);
			$group_name = $this->db->sql_fetchfield('group_name');
			$this->db->sql_freeresult($result);

			if (empty($group_name))
			{
				$this->config['bh_group_id'] = 0;
			}
		}

		if (!$this->request->is_set('bh') || ($this->request->is_set('bh') && $this->request->is_set('confirm_key') && !confirm_box(true)))
		{
			$params = array(
				'mode'	=> 'viewprofile',
				'u'		=> $this->user_id,
				'bh'	=> 1,
			);

			$this->template->assign_vars(array(
				'BH_BAN_EMAIL'		=> $this->config['bh_ban_email'],
				'BH_BAN_IP'			=> $this->config['bh_ban_ip'],
				'BH_DEL_AVATAR'		=> $this->config['bh_del_avatar'],
				'BH_DEL_PRIVMSGS'	=> $this->config['bh_del_privmsgs'],
				'BH_DEL_POSTS'		=> $this->config['bh_del_posts'],
				'BH_DEL_PROFILE'	=> $this->config['bh_del_profile'],
				'BH_DEL_SIGNATURE'	=> $this->config['bh_del_signature'],
				'BAN_TIME'		=> $this->bantime->display_ban_time($this->config['bh_ban_time']),

				'L_BH_MOVE_GROUP'	=> (!empty($group_name)) ? sprintf($this->user->lang['BH_MOVE_GROUP'], $group_name) : '',

				'S_BH_SFS'	=> (!empty($this->config['bh_sfs_api_key']) && $curl_exists) ? true : false,
				'S_SHOW_BH'	=> true,

				'U_HAMMERBAN'	=> append_sid($this->root_path . 'memberlist.' . $this->php_ext, $params),
			));
			return;
		}

		// Time to ban a user. But are you sure?
		if (!confirm_box(true))
		{
			$hidden_fields = array(
				'ban_email'			=> $this->request->variable('ban_email', 0),
				'ban_ip'			=> $this->request->variable('ban_ip', 0),
				'ban_time'			=> $this->request->variable('ban_time', 0),
				'bh_reason'			=> $this->request->variable('bh_reason', '', true),
				'bh_reason_user'	=> $this->request->variable('bh_reason_user', '', true),
				'del_avatar'		=> $this->request->variable('del_avatar', 0),
				'del_privmsgs'		=> $this->request->variable('del_privmsgs', 0),
				'del_posts'			=> $this->request->variable('del_posts', 0),
				'del_profile'		=> $this->request->variable('del_profile', 0),
				'del_signature'		=> $this->request->variable('del_signature', 0),
				'mode'				=> 'viewprofile',
				'move_group'		=> $this->request->variable('move_group', 0),
				'sfs_report'		=> $this->request->variable('sfs_report', 0),
			);

			// we state how long the user will be banned for
			$ban_length_options = $this->bantime->ban_length_options();
			$length = '';
			$permanent = false;
			foreach ($ban_length_options as $key => $value)
			{
				if ($key == $hidden_fields['ban_time'])
				{
					$length = $value;
					if ($key == 0)
					{
						$permanent = true;
					}
				}
			}

			$message = sprintf($this->user->lang['SURE_BAN'], $this->data['username']) . '<br><br>';
			$message .= $this->user->lang['THIS_WILL'] . $this->user->lang['COLON'] . '<br>';
			$message .= ($length)							? (($permanent) ? $this->user->lang['BH_BAN_USER_PERM'] . '<br>' : $this->user->lang('BH_BAN_USER', $length). '<br>') : '';
			$message .= ($hidden_fields['ban_email'])		? (($permanent) ? $this->user->lang['BH_BAN_EMAIL_PERM'] . '<br>' : $this->user->lang('BH_BAN_EMAIL_FOR', $length) . '<br>') : '';
			$message .= ($hidden_fields['ban_ip'])			? (($permanent) ? $this->user->lang['BH_BAN_IP_PERM'] . '<br>' : $this->user->lang('BH_BAN_IP_FOR', $length) . '<br>') : '';
			$message .= ($hidden_fields['bh_reason'])		? $this->user->lang('BH_REASON', $hidden_fields['bh_reason']) . '<br>' : '';
			$message .= ($hidden_fields['bh_reason_user'])	? $this->user->lang('BH_REASON_USER', $hidden_fields['bh_reason_user']) . '<br>' : '';
			$message .= ($hidden_fields['del_avatar'])		? $this->user->lang['BH_DEL_AVATAR'] . '<br>' : '';
			$message .= ($hidden_fields['del_privmsgs'])	? $this->user->lang['BH_DEL_PRIVMSGS'] . '<br>' : '';
			$message .= ($hidden_fields['del_posts'])		? $this->user->lang['BH_DEL_POSTS'] . '<br>' : '';
			$message .= ($hidden_fields['del_profile'])		? $this->user->lang['BH_DEL_PROFILE'] . '<br>' : '';
			$message .= ($hidden_fields['del_signature'])	? $this->user->lang['BH_DEL_SIGNATURE'] . '<br>' : '';
			$message .= (!empty($group_name) && $hidden_fields['move_group'])	? $this->user->lang('BH_MOVE_GROUP', $group_name) . '<br>' : '';
			$message .= ($hidden_fields['sfs_report'] && $curl_exists)			? $this->user->lang['BH_SUBMIT_SFS'] . '<br>' : '';

			confirm_box(false, $message, build_hidden_fields($hidden_fields));
		}

		// We have a user to ban.
		$error = array();

		// Any reason for this ban?
		$bh_reason		= $this->request->variable('bh_reason', '', true);
		$bh_reason_user	= $this->request->variable('bh_reason_user', '', true);
		$ban_time		= $this->request->variable('ban_time', 0);

		// The username is the user so it's always banned.
		$success = user_ban('user', $this->data['username'], $ban_time, '', false, $bh_reason, $bh_reason_user);

		if (!$success)
		{
			$error[] = 'ERROR_BAN_USER';
		}

		if ($this->request->variable('ban_email', 0))
		{
			$success = user_ban('email', $this->data['user_email'], $ban_time, '', false, $bh_reason, $bh_reason_user);

			if (!$success)
			{
				$error[] = 'ERROR_BAN_EMAIL';
			}
		}

		if ($this->request->variable('ban_ip', 0) && !empty($this->data['user_ip']))
		{
			$success = user_ban('ip', $this->data['user_ip'], $ban_time, '', false, $bh_reason, $bh_reason_user);

			if (!$success)
			{
				$error[] = 'ERROR_BAN_IP';
			}
		}

		if ($this->request->variable('del_posts', 0))
		{
			$this->bh_del_posts();
		}

		if ($this->request->variable('del_privmsgs', 0))
		{
			$this->bh_del_privmsgs();
		}

		if ($this->request->variable('del_avatar', 0))
		{
			avatar_delete('user', $this->data, true);
		}

		if ($this->request->variable('del_signature', 0))
		{
			$sql = 'UPDATE ' . USERS_TABLE . "
					SET user_sig = '',
						user_sig_bbcode_uid = '',
						user_sig_bbcode_bitfield = ''
					WHERE user_id = " . (int) $this->user_id;
			$this->db->sql_query($sql);
		}

		if ($this->request->variable('del_profile', 0))
		{
			$sql = 'DELETE FROM ' . PROFILE_FIELDS_DATA_TABLE . '
					WHERE user_id = ' . (int) $this->user_id;
			$this->db->sql_query($sql);
		}

		if ($this->request->variable('move_group', 0) && !empty($group_name))
		{
			$return = group_user_add($this->config['bh_group_id'], array($this->user_id), array($this->data['username']), $group_name, true);

			if ($return != false)
			{
				$error[] = $this->user->lang['ERROR_MOVE_GROUP'];
			}
		}

		if ($this->request->variable('sfs_report', 0) && !empty($this->config['bh_sfs_api_key']) && $curl_exists)
		{
			// add the spammer to the SFS database
			$http_request = 'http://www.stopforumspam.com/add.php';
			$http_request .= '?username=' . $this->data['username'];
			$http_request .= '&ip_addr=' . $this->data['user_ip'];
			$http_request .= '&email=' . urlencode($this->data['user_email']);
			$http_request .= '&api_key=' . $this->config['bh_sfs_api_key'];

			$response = $this->get_file($http_request);

			if (!$response)
			{
				$error[] = $this->user->lang['ERROR_SFS'];
			}
		}

		// Need to purge the cache.
		$this->cache->destroy('sql', BANLIST_TABLE);

		// The page needs to be reloaded to show the new banned status.
		$args = array(
			'mode'		=> 'viewprofile',
			'u'			=> $this->user_id,
			'bh_res'	=> (empty($error)) ? 'success' : urlencode(implode('+', $error)),
		);

		$url	= generate_board_url();
		$url	.= ((substr($url, -1) == '/') ? '' : '/') . 'memberlist.' . $this->php_ext;
		$url	= append_sid($url, $args);

		redirect($url);
	}

	private function bh_del_privmsgs()
	{
		$user_id = $this->user_id;

		// Get private messages
		$sql = 'SELECT msg_id, author_id FROM ' . PRIVMSGS_TABLE . "
				WHERE author_id = $user_id";
		$result = $this->db->sql_query($sql);

		$privmsgs_ary = array();
		while ($row = $this->db->sql_fetchrow($result))
		{
			$privmsgs_ary[] = $row['msg_id'];
		}
		$this->db->sql_freeresult($result);

		if (!empty($privmsgs_ary))
		{
			// And now close eventual reports.
			$sql = 'UPDATE ' . REPORTS_TABLE . '
					SET report_closed = 1
					WHERE ' . $this->db->sql_in_set('pm_id', $privmsgs_ary);
			$this->db->sql_query($sql);
		}

		$this->db->sql_query('DELETE FROM ' . PRIVMSGS_TABLE .			" WHERE author_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . PRIVMSGS_FOLDER_TABLE .	" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . PRIVMSGS_RULES_TABLE .	" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . PRIVMSGS_TO_TABLE .		" WHERE user_id = $user_id OR author_id = $user_id");
	}

	private function bh_del_posts()
	{
		$user_id = (int) $this->user_id;

		// Close reports.
		// Topics can have more than one reported post so we need to get them first.
		$sql = 'SELECT p.post_id, p.topic_id, p.poster_id, p.post_reported, p.forum_id, t.topic_id, t.topic_first_post_id, t.topic_poster
				FROM ' . POSTS_TABLE . ' p, ' . TOPICS_TABLE . " t
				WHERE p.poster_id = $user_id
					AND t.topic_id = p.topic_id
				ORDER BY t.topic_id ASC, p.post_id ASC";
		$result	= $this->db->sql_query($sql);
		$posts = $topics = array();

		// Step through the topics and count reported posts in each topic where this user is reported.
		while ($row = $this->db->sql_fetchrow($result))
		{
			$posts[$row['post_id']] = $row;

			if ($row['post_reported'] == 1)
			{
				$topics[$row['topic_id']] = (isset($topics[$row['topic_id']])) ? ++$topics[$row['topic_id']] : 1;
			}
		}
		$this->db->sql_freeresult($result);

		// And now handle the reports.
		$sql = 'SELECT report_id, post_id, report_closed
				FROM ' . REPORTS_TABLE . '
				WHERE report_closed = 0
					AND post_id <> 0';
		$result = $this->db->sql_query($sql);
		$close_reports = $unreport_topics = array();

		while ($row = $this->db->sql_fetchrow($result))
		{
			if (!empty($row['post_id']) && !empty($posts[$row['post_id']]))
			{
				// A reported post.
				$close_reports[] = (int) $row['report_id'];

				// Check if the topic has more reported posts
				if (isset($topics[$posts[$row['post_id']]['topic_id']]) && --$topics[$posts[$row['post_id']]['topic_id']] <= 0)
				{
					$unreport_topics[] = (int) $posts[$row['post_id']]['topic_id'];
				}
			}
		}
		$this->db->sql_freeresult($result);

		// Close reports. Posts will be deleted so there is no need to unmark them as reported.
		if (!empty($close_reports))
		{
			$sql = 'UPDATE ' . REPORTS_TABLE . '
					SET report_closed = 1
					WHERE ' . $this->db->sql_in_set('report_id', $close_reports);
			$this->db->sql_query($sql);
		}

		// Unreport topics
		if (!empty($unreport_topics))
		{
			$sql = 'UPDATE ' . TOPICS_TABLE . '
					SET topic_reported = 0
					WHERE ' . $this->db->sql_in_set('topic_id', $unreport_topics);
			$this->db->sql_query($sql);
		}

		// Delete some posts.
		if (!function_exists('delete_posts'))
		{
			include($this->root_path . 'includes/functions_admin.' . $this->php_ext);
		}

		delete_posts('post_id', array_keys($posts));

		// Delete from other tables.
		$this->db->sql_query('DELETE FROM ' . BOOKMARKS_TABLE .			" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . DRAFTS_TABLE .			" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . FORUMS_TRACK_TABLE .		" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . FORUMS_WATCH_TABLE .		" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . MODERATOR_CACHE_TABLE .	" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . NOTIFICATIONS_TABLE .		" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . POLL_VOTES_TABLE .		" WHERE vote_user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . TOPICS_POSTED_TABLE .		" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . TOPICS_TRACK_TABLE .		" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . TOPICS_WATCH_TABLE .		" WHERE user_id = $user_id");
		$this->db->sql_query('DELETE FROM ' . USER_NOTIFICATIONS_TABLE .	" WHERE user_id = $user_id");
	}

	// use curl to get response from SFS
	private function get_file($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		// if nothing is returned (SFS is down)
		if ($httpcode != 200)
		{
			return false;
		}

		return(true);
	}
}
