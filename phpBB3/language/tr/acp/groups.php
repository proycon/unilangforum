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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Bu panelden tüm kullanıcı gruplarınızı yönetebilirsiniz. Kullanıcı gruplarını silebilir, oluşturabilir ve var olan grupları düzenleyebilirsiniz. Ayrıca, grup liderlerini seçebilir, grup durumunu açık-kapalı olarak değiştirebilirsiniz ve grubun ismini belirleyebilir ve tanımlamasını yapabilirsiniz.',
	'ADD_GROUP_CATEGORY'			=> 'Kategori ekle',	
	'ADD_USERS'						=> 'Kullanıcı ekle',
	'ADD_USERS_EXPLAIN'				=> 'Burada gruplara yeni kullanıcılar ekleyebilirsiniz. Seçilmiş kullanıcılar için bu grup varsayılan olarak olsa bile seçim yapabilirsiniz. Ayrıca grup liderlerini tanımlayabilirsiniz. Lütfen her kullanıcı için ayrı satır kullanınız.',

	'COPY_PERMISSIONS'				=> 'İzinleri buradan kopyala',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Önceden başka gruplar için oluşturulmuş izinlerden birini seçerek, buraya ekleyin.',
	'CREATE_GROUP'					=> 'Yeni bir grup oluştur',

	'GROUPS_NO_MEMBERS'				=> 'Bu grubun üyeleri yok',
	'GROUPS_NO_MODS'				=> 'Grup lideri henüz tanımlanmadı',
	
	'GROUP_APPROVE'					=> 'Üyeyi onayla',
	'GROUP_APPROVED'				=> 'Onaylanmış Üyeler',
	'GROUP_AVATAR'					=> 'Grup Avatarı',
	'GROUP_AVATAR_EXPLAIN'			=> 'Bu resim Grup Kontrol Panelinde gösterilecektir.',
	'GROUP_CATEGORY_NAME'			=> 'Kategori adı',
	'GROUP_CLOSED'					=> 'Kapalı',
	'GROUP_COLOR'					=> 'Grup rengi',
	'GROUP_COLOR_EXPLAIN'			=> 'Bu gruba dahil üyelerin kullanıcı adlarının rengini tanımlar, boş bırakılırsa kullanıcı varsayılan rengi kullanır.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> '%2$s kullanıcısını gruba eklemek istediğinize emin misiniz?',
	),
	'GROUP_CREATED'					=> 'Grup başarıyla oluşturuldu',
	'GROUP_DEFAULT'					=> 'Üye için varsayılan grup yap',
	'GROUP_DEFS_UPDATED'			=> 'Varsayılan grup tüm üyeler için ayarlanır.',
	'GROUP_DELETE'					=> 'Üyeyi gruptan sil',
	'GROUP_DELETED'					=> 'Grup silindi ve kullanıcı varsayılan grupları başarıyla ayarlandı',
	'GROUP_DEMOTE'					=> 'Grup liderliğinden düşür',
	'GROUP_DESC'					=> 'Grup tanımlaması',
	'GROUP_DETAILS'					=> 'Grup detayları',
	'GROUP_EDIT_EXPLAIN'			=> 'Burada var olan grubu düzenleyebilirsiniz. İsmini değiştirebilir, tanımlayabilir ve tipini (açık, kapalı vb.) seçebilirsiniz. Ayrıca grubun geneli üzerinde renklendirme, rütbe verme vb. ayarlamaları yapabilirsiniz. Burada yapılan grupla ilgili değişimler kullanıcıların var olan kişisel ayarlarını değiştirecektir. Kullanıcı izinlerine uygun bir ayar yapmadıysanız, grup üyeleri kendi avatarlarını değiştirebilirler.',
	'GROUP_ERR_USERS_EXIST'			=> 'Belirlenen kullanıcılar zaten bu grubun üyeleridir.',
	'GROUP_FOUNDER_MANAGE'			=> 'Sadece kurucu yönetsin',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Bu grubun yönetimini sadece kurucularının yapması için kısıtlar. Kullanıcılar tam olarak bu grubu görüntüleyebilmeleri için bu grubun üyesi olarak grup izinlerine sahip olurlar.',
	'GROUP_HIDDEN'					=> 'Gizli',
	'GROUP_LANG'					=> 'Grup dili',
	'GROUP_LEAD'					=> 'Grup liderleri',
	'GROUP_LEADERS_ADDED'			=> 'Gruba yeni liderler başarıyla eklendi.',
	'GROUP_LEGEND'					=> 'Grubu “Takım” bölümünde göster',
	'GROUP_LIST'					=> 'Geçerli üyeler',
	'GROUP_LIST_EXPLAIN'			=> 'Burası, geçerli tüm kullanıcıların grup üyelikleriyle birlikte var olan tam listedir. Üyeleri silebilirsiniz(bazı özel gruplar hariç) veya yenilerini ekleyebilirsiniz.',
	'GROUP_MEMBERS'					=> 'Grup üyeleri',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Kullanıcı grubundaki tüm üyelerin tam listesi buradadır. Burada bölüm liderleri için ayrılmış bir bölüm vardır ayrıca askıda olan üyeleri ve var olan üyeleride içerir. Bu gruba dahil olan tüm üyeliklerin görünümlerinde hangi role sahip olduklarını buradan yönetebilirsiniz. Lideri kaldırmak ve grubun devamını istiyorsanız, grubu silmek yerine grup liderinin rütbesini kaldırın. Benzer olarak başka bir üyenizede bu liderlik rütbesini verebilirsiniz.',
	'GROUP_MESSAGE_LIMIT'			=> 'Her bir klasör için grubun özel mesaj sınırı',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Bu ayarlar her kullanıcının klasör mesaj sınırının yerini alır. 0 değeri kullanıcının varsayılan sınırı kullanmasını sağlayacaktır.',
	'GROUP_MODS_ADDED'				=> 'Yeni grup liderleri başarıyla eklendi.',
	'GROUP_MODS_DEMOTED'			=> 'Grup liderlerinin rütbeleri başarıyla düşürüldü.',
	'GROUP_MODS_PROMOTED'			=> 'Grup üyelerinin rütbeleri başarıyla yükseltildi.',
	'GROUP_NAME'					=> 'Grup adı',
	'GROUP_NAME_TAKEN'				=> 'Girdiğiniz grup adı zaten kullanılıyor, lütfen alternatif bir tane seçin.',
	'GROUP_OPEN'					=> 'Açık',
	'GROUP_PENDING'					=> 'Askıda olan üyeler',
	'GROUP_MAX_RECIPIENTS'         => 'Her özel mesajda izin verilen en fazla alıcı sayısı',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'   => 'Bir özel mesajda izin verilen en fazla alıcı sayısı. Eğer 0 sayısı girilirse, mesaj panosu-genişlik ayarı kullanılır.',
	'GROUP_OPTIONS_SAVE'			=> 'Grup genel seçenekleri',
	'GROUP_PROMOTE'					=> 'Grup liderliğine yükselt',
	'GROUP_RANK'					=> 'Grup rütbesi',
	'GROUP_RECEIVE_PM'				=> 'Grup özel mesajlar alabilir.',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Not: Gizli gruplar, bu ayarlar ne olursa olsun mesaj alamazlar.',
	'GROUP_REQUEST'					=> 'İstekli',
	'GROUP_SETTINGS_SAVE'			=> 'Grup özel ayarları',
	'GROUP_SKIP_AUTH'				=> 'Grup liderini izinlerden muaf tut',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Eğer aktif edilirse grup lideri grup izinlerden muaf tutulacaktır.',
	'GROUP_SPECIAL'					=> 'Önceden tanımlı',
	'GROUP_TEAMPAGE'				=> 'Grubu takım sayfasında göster',	
	'GROUP_TYPE'					=> 'Grup tipi',
	'GROUP_TYPE_EXPLAIN'			=> 'Bu, gruba hangi kullanıcıların katılabileceğini ya da hangi kullanıcıların grubu görebileceğini tanımlar.',
	'GROUP_UPDATED'					=> 'Grup ayarları başarıyla güncellendi.',
	
	'GROUP_USERS_ADDED'				=> 'Yeni kullanıcılar gruba başarıyla eklendi.',
	'GROUP_USERS_EXIST'				=> 'Seçilen kullanıcılar zaten üyedir.',
	'GROUP_USERS_REMOVE'			=> 'Kullanıcılar gruptan silindi ve yeni varsayılan ayarlar başarıyla yapıldı',
	
	'LEGEND_EXPLAIN'				=> 'Bunlar grup yetkililerinde gösterilen gruplardır:',
	'LEGEND_SETTINGS'				=> 'Yetkililer ayarları',
	'LEGEND_SORT_GROUPNAME'			=> 'Yetkilileri grup adına göre sırala',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Bu seçenek aktifleştirildiğinde aşağıdaki sıralama gözardı edilir.',

	'MANAGE_LEGEND'			=> 'Grup yetkililerini yönet',
	'MANAGE_TEAMPAGE'		=> 'Takım sayfasını yönet',	
	'MAKE_DEFAULT_FOR_ALL'	=> 'Her üye için varsayılan grup yap',
	'MEMBERS'				=> 'Üyeler',

	'NO_GROUP'					=> 'Hiç bir grup belirlenmedi',
	'NO_GROUPS_ADDED'			=> 'Henüz hiç bir grup eklenmedi.',
	'NO_GROUPS_CREATED'			=> 'Daha hiç bir grup oluşturulmadı.',
	'NO_PERMISSIONS'			=> 'İzinleri kopyalama',
	'NO_USERS'					=> 'Herhangi bir kullanıcı girmediniz.',
	'NO_USERS_ADDED'         	=> 'Gruba hiç bir kullanıcı eklenmedi.',
	'NO_VALID_USERS'         	=> 'Bu eylem için uygun nitelikte herhangi bir kullanıcı girmediniz.',
	
	'SELECT_GROUP'				=> 'Bir grup seç',
	'SPECIAL_GROUPS'			=> 'Önceden tanımlı gruplar',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Önceden tanımlı gruplar özel gruplardır. Bunlar silinemez ya da doğrudan düzenlenemez. Yine de kullanıcı ekleyebilir ve temel ayarlarını değiştirebilirsiniz.',

	'TEAMPAGE'					=> 'Takım sayfası',
	'TEAMPAGE_DISP_ALL'			=> 'Tüm üyelikler',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Sadece kullanıcının varsayılan grubu',
	'TEAMPAGE_DISP_FIRST'		=> 'Sadece ilk üyelik',
	'TEAMPAGE_EXPLAIN'			=> 'Bunlar takım sayfasında görüntülenen gruplardır:',
	'TEAMPAGE_FORUMS'			=> 'Moderatörlük yapılan forumları göster',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Eğer evet olarak ayarlanırsa, her moderatörün kendi satırında moderatör izinlerine sahip olduğu tüm forumların bir listesi gösterilecektir. Bu, büyük mesaj panoları için yoğun veritabanı işlemine yol açabilir.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Kullanıcı üyeliklerini göster',
	'TEAMPAGE_SETTINGS'			=> 'Takım sayfası ayarları',
	'TOTAL_MEMBERS'				=> 'Üyeler',

	'USERS_APPROVED'				=> 'Kullanıcılar başarıyla onaylandı.',
	'USER_DEFAULT'					=> 'Kullanıcı varsayılanı',
	'USER_DEF_GROUPS'				=> 'Kullanıcı tanımlı gruplar',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Bu gruplar siz ya da bu mesaj panosundaki başka bir yönetici tarafından oluşturulur. Üyelikleri yönetebilir, grup ayarlarını düzenleyebilir, grubu silebilirsiniz.',
	'USER_GROUP_DEFAULT'			=> 'Varsayılan Grup olarak ayarla',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Burada evet derseniz bu grup, eklenmiş kullanıcılar için varsayılan olarak ayarlanacaktır.',
	'USER_GROUP_LEADER'				=> 'Grup Lideri olarak ayarla',
));
