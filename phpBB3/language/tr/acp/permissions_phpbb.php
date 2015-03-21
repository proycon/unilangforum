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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Eylemler',
	'ACL_CAT_CONTENT'		=> 'İçerik',
	'ACL_CAT_FORUMS'		=> 'Forumlar',
	'ACL_CAT_MISC'			=> 'Çeşitli',
	'ACL_CAT_PERMISSIONS'	=> 'İzinler',
	'ACL_CAT_PM'			=> 'Özel mesajlar',
	'ACL_CAT_POLLS'			=> 'Anketler',
	'ACL_CAT_POST'			=> 'Mesaj',
	'ACL_CAT_POST_ACTIONS'	=> 'Mesaj faaliyetleri',
	'ACL_CAT_POSTING'		=> 'Mesajlaşma',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Ayarlar',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Başlık faaliyetleri',
	'ACL_CAT_USER_GROUP'	=> 'Kullanıcılar &amp; Gruplar',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Profilleri, üye listesini ve çevrimiçi listesini görüntüleyebilir',
	'ACL_U_CHGNAME'		=> 'Kullanıcı adı değiştirebilir',
	'ACL_U_CHGPASSWD'	=> 'Şifre değiştirebilir',
	'ACL_U_CHGEMAIL'	=> 'E-posta adresi değiştirebilir',
	'ACL_U_CHGAVATAR'	=> 'Avatar değiştirebilir',
	'ACL_U_CHGGRP'		=> 'Varsayılan kullanıcı grubunu değiştirebilir',
	'ACL_U_CHGPROFILEINFO'	=> 'Profil alanı bilgisini değiştirebilir',

	'ACL_U_ATTACH'		=> 'Dosyalar ekleyebilir',
	'ACL_U_DOWNLOAD'	=> 'Dosyaları indirebilir',
	'ACL_U_SAVEDRAFTS'	=> 'Taslakları kaydedebilir',
	'ACL_U_CHGCENSORS'	=> 'Kelime sansürlerini kapatabilir',
	'ACL_U_SIG'			=> 'İmza kullanabilir',

	'ACL_U_SENDPM'		=> 'Özel mesajlar gönderebilir',
	'ACL_U_MASSPM'		=> 'Çoklu kullanıcılara mesajlar gönderebilir',
	'ACL_U_MASSPM_GROUP'=> 'Gruplara mesajlar gönderebilir',
	'ACL_U_READPM'		=> 'Özel mesajları okuyabilir',
	'ACL_U_PM_EDIT'		=> 'Kendi özel mesajlarını düzenleyebilir',
	'ACL_U_PM_DELETE'	=> 'Kendi klasöründen özel mesajları silebilir',
	'ACL_U_PM_FORWARD'	=> 'Özel mesajları iletebilir',
	'ACL_U_PM_EMAILPM'	=> 'Özel mesajları e-posta ile gönderebilir',
	'ACL_U_PM_PRINTPM'	=> 'Özel mesajları yazdırabilir',
	'ACL_U_PM_ATTACH'	=> 'Özel mesajlara dosya ekleyebilir',
	'ACL_U_PM_DOWNLOAD'	=> 'Özel mesajlardaki dosyaları indirebilir',
	'ACL_U_PM_BBCODE'	=> 'Özel mesajlarda BBCode kullanabilir',
	'ACL_U_PM_SMILIES'	=> 'Özel mesajlarda ifadeler kullanabilir',
	'ACL_U_PM_IMG'		=> 'Özel mesajlarda [img] BBCode etiketi kullanabilir',
	'ACL_U_PM_FLASH'	=> 'Özel mesajlarda [flash] BBCode etiketi kullanabilir',

	'ACL_U_SENDEMAIL'	=> 'E-postalar gönderebilir',
	'ACL_U_SENDIM'		=> 'Anlık mesajlar gönderebilir',
	'ACL_U_IGNOREFLOOD'	=> 'Flood kısıtlamasını yoksayabilir',
	'ACL_U_HIDEONLINE'	=> 'Çevrimiçi durumunu gizleyebilir',
	'ACL_U_VIEWONLINE'	=> 'Gizli çevrimiçi kullanıcıları görebilir',
	'ACL_U_SEARCH'		=> 'Mesaj panosunda arama yapabilir',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Forumu görüntüleyebilir',
	'ACL_F_READ'		=> 'Forumu okuyabilir',
	'ACL_F_SEARCH'		=> 'Forumda arama yapabilir',
	'ACL_F_SUBSCRIBE'	=> 'Foruma abone olabilir',
	'ACL_F_PRINT'		=> 'Başlıkları yazdırabilir',
	'ACL_F_EMAIL'		=> 'Başlıkları e-posta ile gönderebilir',
	'ACL_F_BUMP'		=> 'Başlıkları darbeleyebilir',
	'ACL_F_USER_LOCK'	=> 'Kendi başlıklarını kilitleyebilir',
	'ACL_F_DOWNLOAD'	=> 'Dosyaları indirebilir',
	'ACL_F_REPORT'		=> 'Mesajları bildirebilir',

	'ACL_F_POST'		=> 'Yeni başlıklar açabilir',
	'ACL_F_STICKY'		=> 'Sabit başlıklar gönderebilir',
	'ACL_F_ANNOUNCE'	=> 'Duyurular gönderebilir',
	'ACL_F_REPLY'		=> 'Başlıklara cevap verebilir',
	'ACL_F_EDIT'		=> 'Kendi mesajlarını düzenleyebilir',
	'ACL_F_DELETE'		=> 'Kendi mesajlarını kalıcı olarak silebilir',
	'ACL_F_SOFTDELETE'	=> 'Kendi mesajlarını yumuşak silme yapabilir<br /><em>Mesaj onay izinlerine sahip moderatörler, yumuşak silme yapılan mesajları geri getirebilir.</em>',
	'ACL_F_IGNOREFLOOD' => 'Flood kısıtlamasını yoksayabilir',
	'ACL_F_POSTCOUNT'	=> 'Mesaj sayacı artışı<br /><em>Not: Bu ayar sadece yeni mesajları etkiler.</em>',
	'ACL_F_NOAPPROVE'	=> 'Onaylama olmadan mesaj gönderebilir',

	'ACL_F_ATTACH'		=> 'Dosyalar ekleyebilir',
	'ACL_F_ICONS'		=> 'Başlık/mesaj ikonlarını kullanabilir',
	'ACL_F_BBCODE'		=> 'BBCode kullanabilir',
	'ACL_F_FLASH'		=> '[flash] BBCode etiketi kullanabilir',
	'ACL_F_IMG'			=> '[img] BBCode etiketi kullanabilir',
	'ACL_F_SIGS'		=> 'İmzalar kullanabilir',
	'ACL_F_SMILIES'		=> 'İfadeler kullanabilir',

	'ACL_F_POLL'		=> 'Anketler oluşturabilir',
	'ACL_F_VOTE'		=> 'Anketlere oy verebilir',
	'ACL_F_VOTECHG'		=> 'Anketlerde kullanmış olduğu mevcut oyunu değiştirebilir',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Mesajları düzenleyebilir',
	'ACL_M_DELETE'		=> 'Mesajları kalıcı olarak silebilir',
	'ACL_M_SOFTDELETE'	=> 'Mesajları yumuşak silme yapabilir<br /><em>Mesaj onay izinlerine sahip moderatörler, yumuşak silme yapılan mesajları geri getirebilir.</em>',
	'ACL_M_APPROVE'		=> 'Mesajları onaylayabilir ve geri getirebilir',
	'ACL_M_REPORT'		=> 'Bildirileri kapatabilir ve silebilir',
	'ACL_M_CHGPOSTER'	=> 'Mesaj yazarını değiştirebilir',

	'ACL_M_MOVE'	=> 'Başlıkları taşıyabilir',
	'ACL_M_LOCK'	=> 'Başlıkları kilitleyebilir',
	'ACL_M_SPLIT'	=> 'Başlıkları ayırabilir',
	'ACL_M_MERGE'	=> 'Başlıkları birleştirebilir',

	'ACL_M_INFO'	=> 'Mesaj bilgilerini görebilir',
	'ACL_M_WARN'	=> 'Uyarılar verebilir<br /><em>Bu ayar sadece genel olarak tanımlıdır. Forum bazlı değildir.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Yasaklamaları yönetebilir<br /><em>Bu ayar sadece genel olarak tanımlıdır. Forum bazlı değildir.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Mesaj panosu ayarlarını değiştirebilir/güncellemeler için kontrol edebilir',
	'ACL_A_SERVER'		=> 'Sunucu/iletişim ayarlarını değiştirebilir',
	'ACL_A_JABBER'		=> 'Jabber ayarlarını değiştirebilir',
	'ACL_A_PHPINFO'		=> 'Php ayarlarını görebilir',

	'ACL_A_FORUM'		=> 'Forumları yönetebilir',
	'ACL_A_FORUMADD'	=> 'Yeni forumlar ekleyebilir',
	'ACL_A_FORUMDEL'	=> 'Forumları silebilir',
	'ACL_A_PRUNE'		=> 'Forumları budayabilir',

	'ACL_A_ICONS'		=> 'Başlık/mesaj ikonlarını ve ifadeleri değiştirebilir',
	'ACL_A_WORDS'		=> 'Kelime sansürlerini değiştirebilir',
	'ACL_A_BBCODE'		=> 'BBCode etiketleri tanımlayabilir',
	'ACL_A_ATTACH'		=> 'Dosya eki ile ilgili ayarları değiştirebilir',

	'ACL_A_USER'		=> 'Kullanıcıları yönetebilir<br /><em>Bu ayar ayrıca kullanıcı tarayıcılarını kimler çevrimiçi listesinde görüntülenmesini de içerir.</em>',
	'ACL_A_USERDEL'		=> 'Kullanıcıları silebilir/budayabilir',
	'ACL_A_GROUP'		=> 'Grupları yönetebilir',
	'ACL_A_GROUPADD'	=> 'Yeni gruplar ekleyebilir',
	'ACL_A_GROUPDEL'	=> 'Grupları silebilir',
	'ACL_A_RANKS'		=> 'Rütbeleri yönetebilir',
	'ACL_A_PROFILE'		=> 'Özel profil alanlarını yönetebilir',
	'ACL_A_NAMES'		=> 'İzin verilmeyen kullanıcı adlarını yönetebilir',
	'ACL_A_BAN'			=> 'Yasaklamaları yönetebilir',

	'ACL_A_VIEWAUTH'	=> 'İzin maskelerini görebilir',
	'ACL_A_AUTHGROUPS'	=> 'Gruplara özgün izinleri değiştirebilir',
	'ACL_A_AUTHUSERS'	=> 'Kullanıcılara özgün izinleri değiştirebilir',
	'ACL_A_FAUTH'		=> 'Forum izin sınıfını değiştirebilir',
	'ACL_A_MAUTH'		=> 'Moderatör izin sınıfını değiştirebilir',
	'ACL_A_AAUTH'		=> 'Yönetici izin sınıfını değiştirebilir',
	'ACL_A_UAUTH'		=> 'Kullanıcı izin sınıfını değiştirebilir',
	'ACL_A_ROLES'		=> 'Rolleri yönetebilir',
	'ACL_A_SWITCHPERM'	=> 'Diğer kullanıcıların izinlerini kullanarak mesaj panosunu görüntüleyebilir',

	'ACL_A_STYLES'		=> 'Stilleri yönetebilir',
	'ACL_A_EXTENSIONS'	=> 'Eklentileri yönetebilir',
	'ACL_A_VIEWLOGS'	=> 'Kayıtları görebilir',
	'ACL_A_CLEARLOGS'	=> 'Kayıtları silebilir',
	'ACL_A_MODULES'		=> 'Modülleri yönetebilir',
	'ACL_A_LANGUAGE'	=> 'Dil paketlerini yönetebilir',
	'ACL_A_EMAIL'		=> 'Toplu e-postalar gönderebilir',
	'ACL_A_BOTS'		=> 'Botları yönetebilir',
	'ACL_A_REASONS'		=> 'Bildiri/yasaklama sebeplerini yönetebilir',
	'ACL_A_BACKUP'		=> 'Veritabanını yedekleyebilir/geri yükleyebilir',
	'ACL_A_SEARCH'		=> 'Arama uygulamalarını ve ayarlarını yönetebilir',
));
