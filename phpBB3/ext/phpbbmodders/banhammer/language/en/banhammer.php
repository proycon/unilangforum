<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva <jari@tumba25.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BANNED_ERROR'		=> 'There was an error(s) banning this user',
	'BANNED_SUCCESS'	=> 'This user was successfully banned.',

	'ERROR_BAN_EMAIL'	=> 'Banning email failed.',
	'ERROR_BAN_IP'		=> 'Banning IP failed.',
	'ERROR_BAN_USER'	=> 'Banning user failed.',
	'ERROR_DEL_POSTS'	=> 'Delete users posts failed.',
	'ERROR_MOVE_GROUP'	=> 'Move user to the selected group failed.',
	'ERROR_SFS'			=> 'Stop Forum Spam',

	'BH_BAN_EMAIL'			=> 'Ban this users email address',
	'BH_BAN_GIVE_REASON'	=> 'The reason for this ban shown to the user',
	'BH_BAN_IP'				=> 'Ban this users IP address',
	'BH_BAN_IP_EXPLAIN'		=> '<strong>Be careful with this.</strong> Most home users have dynamic IP addresses and only need to reboot their router/modem to get a new IP address. The next day that IP address might be assigned to a user you want on your site. Spammers also uses internet anonymity proxies or the Tor network making a IP ban pointless.',
	'BH_BAN_LENGTH'			=> 'Ban this user for %s',
	'BH_BAN_REASON'			=> 'The internal reason for this ban',
	'BH_BAN_USER'			=> 'Ban this user for %s',
	'BH_BAN_USER_PERM'		=> 'Ban this user name permanently',
	'BH_BAN_EMAIL_PERM'		=> 'Ban this users email address permanently',
	'BH_BAN_EMAIL_FOR'		=> 'Ban this users email address for %s',
	'BH_BAN_IP_PERM'		=> 'Ban this users IP address permanently',
	'BH_BAN_IP_FOR'			=> 'Ban this users IP address for %s',
	'BH_BANNED'				=> 'This user is banned',

	'BH_DEL_AVATAR'		=> 'Delete this users avatar',
	'BH_DEL_PRIVMSGS'	=> 'Delete this users private messages',
	'BH_DEL_POSTS'		=> 'Delete this users posts',
	'BH_DEL_PROFILE'	=> 'Delete this users profile fields',
	'BH_DEL_SIGNATURE'	=> 'Delete this users signature',

	'BH_MOVE_GROUP'	=> 'Move this user to group &quot;%s&quot;', // %s will be a group name

	'BH_REASON'		=> 'Internal reason &quot;%s&quot;', // %s will be the reason
	'BH_REASON_USER'	=> 'Reason to user &quot;%s&quot;', // %s will be the reason

	'BH_SUBMIT_SFS'	=> 'Submit to stop forum spam',

	'BH_THIS_USER'	=> 'Ban Hammer this user',

	'SFS_REPORT'	=> 'Report this user to Stop Forum Spam',
	'SURE_BAN'		=> 'Are you sure you want to ban <strong>%s</strong>?', // %s will be a username.

	'THIS_WILL'	=> 'This will',
));
