<?php
/**
*
* @package Delete my registration
* @version $Id$
* @author KillBill - killbill@jatek-vilag.com
* @copyright 2010-2014 (c) http://jatek-vilag.com/ - info@jatek-vilag.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\deletemyregistration\ucp;

class delete_my_registration_module
{
	public $u_action;
	public $tpl_name;
	public $page_title;

	public function main($id, $mode)
	{
		global $db, $user, $auth, $template, $phpbb_root_path, $phpEx;
		global $request, $phpbb_container, $phpbb_log;

		$user->add_lang_ext('jv/deletemyregistration', 'ucp');

		$error = array();
		$submit			= $request->variable('submit', false, false, \phpbb\request\request_interface::POST);
		$delete_acc		= $request->variable('delete_acc', false, false, \phpbb\request\request_interface::POST);
		$delete_post	= ($request->variable('delete_post', false, false, \phpbb\request\request_interface::POST) && $auth->acl_get('u_my_acc_post_delete')) ? true : false;
		$user_password	= $request->variable('user_password', '', true);

		add_form_key('my_acc_delete');

		if ($submit)
		{
			if (!check_form_key('my_acc_delete'))
			{
				$error[] = 'FORM_INVALID';
			}

			if (!$delete_acc)
			{
				$error[] = 'MY_ACC_DELETE_CONFIRM_ERROR';
			}

			if ($user->data['user_type'] == USER_FOUNDER)
			{
				$error[] = 'MY_ACC_DELETE_FOUNDER_ERROR';
			}

			// Instantiate passwords manager
			$passwords_manager = $phpbb_container->get('passwords.manager');

			if (!$passwords_manager->check($user_password, $user->data['user_password']))
			{
				$error[] = 'CUR_PASSWORD_ERROR';
			}

			if (!sizeof($error) && $submit)
			{
				$delete_type = ($delete_post) ? 'remove' : 'retain';
				$log_type = ($delete_post) ? 'LOG_MY_ACC_POST_DELETE' : 'LOG_MY_ACC_DELETE';

				$additional_data = array(
					'reportee_id'	=> 0,
					$user->data['username']
				);

				$phpbb_log->add('user', ANONYMOUS, $user->ip, $log_type, time(), $additional_data);
				user_delete($delete_type, $user->data['user_id'], $user->data['username']);

				meta_refresh(5, append_sid($phpbb_root_path . 'index.' . $phpEx));
				trigger_error('MY_ACC_DELETE_SUCCESS');
			}

			// Replace "error" strings with their real, localised form
			$error = array_map(array($user, 'lang'), $error);
		}

		$template->assign_vars(array(
			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'S_DELETE_MY_POST'	=> ($auth->acl_get('u_my_acc_post_delete')) ? true : false,
			'S_UCP_ACTION'		=> $this->u_action,

			'L_TITLE'			=> $user->lang['UCP_PROFILE_' . strtoupper($mode)],

			'ERROR'				=> (sizeof($error)) ? implode('<br />', $error) : '',
			'CONFIRM_CHECKED'	=> ($delete_acc) ? ' checked="checked"' : '',
			'POST_CHECKED'		=> ($delete_post) ? ' checked="checked"' : ''
		));

		// Set desired template
		$this->tpl_name = 'ucp_profile_' . $mode;
		$this->page_title = 'UCP_PROFILE_' . strtoupper($mode);
	}
}