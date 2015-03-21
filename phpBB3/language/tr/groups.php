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

// DEVELOPERS PLEASE NOTE 
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'	=> 'Seçilen grup zaten sizin varsayılan grubunuzdur.',
	'ALREADY_IN_GROUP'		=> 'Seçilen grubun zaten bir üyesisiniz.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Seçilen gruba zaten katılım isteğinde bulundunuz.',
	
	'CANNOT_JOIN_GROUP'         => 'Bu gruba katılamazsınız. Sadece açık ve serbestçe açık olan gruplara katılabilirsiniz.',
	'CANNOT_RESIGN_GROUP'      => 'Bu gruptan ayrılamazsınız. Sadece açık ve serbestçe açık olan gruplardan ayrılabilirsiniz.',
	'CHANGED_DEFAULT_GROUP'	=> 'Varsayılan grup başarıyla değiştirildi.',
	
	'GROUP_AVATAR'			=> 'Grup avatarı', 
	'GROUP_CHANGE_DEFAULT'	=> 'Varsayılan grup üyeliğinizi "%s" grubu üyeliği ile değiştirmek istediğinizden emin misiniz?',
	'GROUP_CLOSED'			=> 'Kapalı',
	'GROUP_DESC'			=> 'Grup Açıklaması',
	'GROUP_HIDDEN'			=> 'Gizli',
	'GROUP_INFORMATION'		=> 'Kullanıcı Grubu Bilgisi', 
	'GROUP_IS_CLOSED'					=> 'Bu kapalı bir gruptur, yeni üyeler sadece bir grup liderinin daveti üzerine katılabilirler.',
	'GROUP_IS_FREE'						=> 'Bu serbest bir gruptur, tüm yeni üyeler alınırlar.', 
	'GROUP_IS_HIDDEN'					=> 'Bu gizli bir gruptur, sadece bu grubun üyeleri üyelikleri görüntüleyebilir.',
	'GROUP_IS_OPEN'			=> 'Bu bir açık gruptur, üyeler katılım yapabilir.',
	'GROUP_IS_SPECIAL'		=> 'Bu bir özel gruptur, özel gruplar mesaj panosu yöneticileri tarafından düzenlenir.',  
	'GROUP_JOIN'			=> 'Gruba Katıl',
	'GROUP_JOIN_CONFIRM'	=> 'Seçilen gruba katılmak istediğinize emin misiniz?',
	'GROUP_JOIN_PENDING'	=> 'Gruba katılma talebi',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Seçilen gruba katılma talebi yapmak istediğinize emin misiniz?',
	'GROUP_JOINED'			=> 'Seçilen gruba başarıyla katıldınız.',
	'GROUP_JOINED_PENDING'	=> 'Grup üyeliği talebi başarıyla yapıldı. Lütfen grup liderinin üyeliğinizi onaylamasını bekleyin.',
	'GROUP_LIST'						=> 'Kullanıcıları Düzenle',
	'GROUP_MEMBERS'			=> 'Grup üyeleri',
	'GROUP_NAME'			=> 'Grup adı',
	'GROUP_OPEN'			=> 'Açık',
	'GROUP_RANK'			=> 'Grup rütbesi', 
	'GROUP_RESIGN_MEMBERSHIP'		=> 'Grup üyeliğinden ayrıl',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Seçilen grubun üyeliğinden ayrılmak istediğinize emin misiniz?',
	'GROUP_RESIGN_PENDING'			=> 'Askıda olan grup üyeliğinden ayrıl',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Seçilen gruptaki askıda olan grup üyeliğinden ayrılmak istediğinize emin misiniz?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Seçilen gruptan başarıyla silindiniz.',
	'GROUP_RESIGNED_PENDING'		=> 'Askıda olan üyeliğiniz seçilen gruptan başarıyla silindi.',
	'GROUP_TYPE'			=> 'Grup tipi',
	'GROUP_UNDISCLOSED'					=> 'Gizli Grup',
	'FORUM_UNDISCLOSED'					=> 'Gizli forum(lar)\'ı yönet',

	'LOGIN_EXPLAIN_GROUP'	=> 'Grup detaylarını görüntülemek için giriş yapmalısınız.',

	'NO_LEADERS'					=> 'Herhangi bir grubun lideri değilsiniz.',
	'NOT_LEADER_OF_GROUP'	=> 'İstenilen işlem yapılamadı çünkü seçilen grubun lideri değilsiniz.',
	'NOT_MEMBER_OF_GROUP'	=> 'İstenilen işlem yapılamadı çünkü seçilen grubun üyesi değilsiniz ya da üyeliğiniz henüz onaylanmadı.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Varsayılan gurubunuzdan ayrılma izniniz yok.',

	'PRIMARY_GROUP'		=> 'Birinci grup',

	'REMOVE_SELECTED'		=> 'Seçileni sil',

	'USER_GROUP_CHANGE'			=> '"%1$s" grubundan "%2$s" grubuna',
	'USER_GROUP_DEMOTE'			=> 'Liderlik derecesini düşür',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Seçilen gruptaki grup liderinin liderlik derecesini düşürmek istediğinizden emin misiniz?',
	'USER_GROUP_DEMOTED'		=> 'Liderlik dereceniz başarıyla düşürüldü.',
));
