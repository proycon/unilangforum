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

namespace wolfsblvt\primebantogroup\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \wolfsblvt\primebantogroup\core\primebantogroup */
	protected $primeban;

	/** @var \phpbb\path_helper */
	protected $path_helper;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\cache\service */
	protected $cache;

	/** @var string phpEx */
	protected $php_ext;

	/**
	 * Constructor of event listener
	 *
	 * @param \wolfsblvt\primebantogroup\core\primebantogroup		$primeban		Ban to group module
	 * @param \phpbb\path_helper									$path_helper	phpBB path helper
	 * @param \phpbb\template\template								$template		Template object
	 * @param \phpbb\user											$user			User object
	 * @param string												$php_ext		phpEx
	 */
	public function __construct(\wolfsblvt\primebantogroup\core\primebantogroup $primeban, \phpbb\path_helper $path_helper, \phpbb\template\template $template, \phpbb\user $user, \phpbb\cache\service $cache, $php_ext)
	{
		$this->primeban = $primeban;
		$this->path_helper = $path_helper;
		$this->template = $template;
		$this->user = $user;
		$this->cache = $cache;
		$this->php_ext = $php_ext;
		$this->ext_root_path = 'ext/wolfsblvt/primebantogroup';
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'				=> 'assign_template_vars',
			'core.common'					=> 'add_lang_for_groups',
			'core.mcp_ban_after'			=> 'prime_ban_user',
			'core.acp_ban_after'			=> 'prime_ban_user',
			'core.modify_user_rank'			=> 'get_language_for_rank_image',
		);
	}

	/**
	 * Assigns the global template vars
	 * 
	 * @param object $event The event object
	 * @return void
	 */
	public function assign_template_vars($event)
	{
		$this->template->assign_vars(array(
			'T_EXT_PRIMEBANTOGROUP_PATH'				=> $this->path_helper->get_web_root_path() . $this->ext_root_path,
			'T_EXT_PRIMEBANTOGROUP_THEME_PATH'			=> $this->path_helper->get_web_root_path() . $this->ext_root_path . '/styles/' . $this->user->style['style_path'] . '/theme',
		));
	}

	/**
	 * Adds the language var to get group names
	 * 
	 * @param object $event The event object
	 * @return void
	 */
	public function add_lang_for_groups($event)
	{
		// Add language vars
		$this->user->add_lang_ext('wolfsblvt/primebantogroup', 'primebantogroup');
	}

	/**
	 * Adds the language translation for user ranks
	 * 
	 * @param object $event The event object
	 * @return void
	 */
	public function get_language_for_rank_image($event)
	{
		global $ranks;
		$user_data = $event['user_data'];

		if (empty($ranks))
		{
			$ranks = $this->cache->obtain_ranks();
		}

		if (!empty($user_data['user_rank']))
		{
			$rank_name = $ranks['special'][$user_data['user_rank']]['rank_title'];

			if(in_array($rank_name, array($this->primeban->BANNED_GROUP_NAME, $this->primeban->SUSPENDED_GROUP_NAME, $this->primeban->INACTIVE_GROUP_NAME)))
				$ranks['special'][$user_data['user_rank']]['rank_title'] = $this->user->lang['R_' . $rank_name];
		}

	}

	/**
	 * Runs the prime ban code if a user is banned
	 * 
	 * @param object $event The event object
	 * @return void
	 */
	public function prime_ban_user($event)
	{
		if($event['mode'] != 'user')
			return;

		$this->primeban->ban_to_group(false, $event['ban_length'], $event['mode'], $event['ban']);
	}
}
