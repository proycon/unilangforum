<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
'ACTIVE_TOPICS'=>'Aktivne teme',
'ANNOUNCEMENTS'=>'Obavijesti',
'FORUM_PERMISSIONS'=>'Dopuštenja',
'ICON_ANNOUNCEMENT'=>'Obavijest',
'ICON_STICKY'=>'Važno',
'LOGIN_NOTIFY_FORUM'=>'Za pregledavanje ovog foruma, [o kojem ti je stigla obavijest], trebaš se prijaviti.',
'MARK_TOPICS_READ'=>'Označi teme kao pročitane',
'NEW_POSTS_HOT'=>'Novi postovi [Popularno]',
'NEW_POSTS_LOCKED'=>'Novi postovi [Zaključano]',
'NO_NEW_POSTS_HOT'=>'Nema novih postova [Popularno]',
'NO_NEW_POSTS_LOCKED'=>'Nema novih postova [Zaključano]',
'NO_READ_ACCESS'=>'Nemaš dopuštenje za pregledavanje tema na ovom forumu.',
'NO_UNREAD_POSTS_HOT'=>'Nema nepročitanih postova [Popularno]',
'NO_UNREAD_POSTS_LOCKED'=>'Nema nepročitanih postova [Zaključano]',
'POST_FORUM_LOCKED'=>'Forum je zaključan.',
'TOPICS_MARKED'=>'Teme su označene kao pročitane.',
'UNREAD_POSTS_HOT'=>'Nepročitani postovi [Popularno]',
'UNREAD_POSTS_LOCKED'=>'Nepročitani postovi [Zaključano]',
'VIEW_FORUM'=>'Pogledaj forum',
//'VIEW_FORUM_TOPIC'=>'1 tema',
//'VIEW_FORUM_TOPICS'=>'%d tema/e',
'VIEW_FORUM_TOPICS'=> array(
// <!-- Kocka je hičena! -->
1=>'%d tema',
2=>'%d teme',
3=>'%d tema',
),
));
