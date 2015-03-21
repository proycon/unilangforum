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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>İzinler çok parçalıdır ve dört ana bölümde gruplara ayrılmıştır, bunlar:</p>

		<h2>Global İzinler</h2>
		<p>Bu izinler global bir seviyede kontrol erişimi için ve tüm mesaj panosuna uygulamak için kullanılır. Bunlar Kullanıcı İzinleri, Grup İzinleri, Yöneticiler ve Global Moderatörler olarak sınıflara ayrılmıştır.</p>

		<h2>Forum Tabanlı İzinler</h2>
		<p>Bu izinler her bir forum tabanında kontrol erişimi için kullanılır. Bunlar Forum İzinleri, Forum Moderatörleri, Kullanıcı Forum İzinleri ve Grup Forum İzinleri olarak sınıflara ayrılmıştır.</p>

		<h2>İzin Rolleri</h2>
		<p>Bu izinler farklı izin türlerinin sonradan bir rol-tabanlı temelde tanımlanabilmesi için izinleri farklı ayarlarda oluşturmak amacıyla kullanılır. Varsayılan roller büyük ve küçük mesaj panolarının yönetimini kapsamalıdır, buna rağmen her dört bölüm içinde uygun gördüğünüz rolleri ekleyebilir/düzenleyebilir ya da silebilirsiniz.</p>

		<h2>İzin Maskeleri</h2>
		<p>Bunlar Kullanıcılara, Moderatörlere (Yerel ve Global), Yöneticilere veya Forumlara tanımlanmış geçerli izinleri görüntülemek için kullanılır.</p>
	
		<br />

		<p>phpBB3 mesaj panonuzda izinlerin yönetimi ve ayarları hakkında daha fazla bilgi için, lütfen <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">Kolay Başlangıç Rehberimizin İzin ayarları</a> bölümüne bakın.</p>
	',

	'ACL_NEVER'				=> 'Asla',
	'ACL_SET'				=> 'İzinleri ayarla',
	'ACL_SET_EXPLAIN'		=> 'İzinler <strong>EVET</strong>/<strong>HAYIR</strong> üzerine kurulu basit bir sistemdir. <strong>ASLA</strong> seçeneği kullanıcı ya da kullanıcı grupları için işaretlendiğinde diğer tüm değerlerin yerini alır. Eğer bu değerlerin kullanıcılar ya da kullanıcı gruplarındaki ayarların yerini almasını istemiyorsanız <strong>HAYIR</strong> seçeneğini seçin. Eğer değerler bu seçenek için başka bir yerde ayarlanırsa tercih olarak seçilen kabul edilecektir, aksi takdirde <strong>ASLA</strong> olarak kabul edilecektir. Tüm ögeler (önlerindeki seçme kutusuyla) işaretlendiğinde, belirlediğiniz izin ayarı kopyalanacaktır.',
	'ACL_SETTING'			=> 'Ayar',

	'ACL_TYPE_A_'			=> 'Yönetim izinleri',
	'ACL_TYPE_F_'			=> 'Forum izinleri',
	'ACL_TYPE_M_'			=> 'Moderasyon izinleri',
	'ACL_TYPE_U_'			=> 'Kullanıcı izinleri',

	'ACL_TYPE_GLOBAL_A_'	=> 'Yönetim izinleri',
	'ACL_TYPE_GLOBAL_U_'	=> 'Kullanıcı izinleri',
	'ACL_TYPE_GLOBAL_M_'	=> 'Global Moderator izinleri',
	'ACL_TYPE_LOCAL_M_'		=> 'Forum Moderator izinleri',
	'ACL_TYPE_LOCAL_F_'		=> 'Forum izinleri',
	
	'ACL_NO'				=> 'Hayır',
	'ACL_VIEW'				=> 'Görüntüleme izinleri',
	'ACL_VIEW_EXPLAIN'		=> 'Kullanıcı/Grubun sahip olduğu izinleri etkili bir şekilde görebileceksiniz. Her bir kırmızı kare kullanıcı/grup izininin olmadığını gösterir, her bir yeşil kare kullanıcı/grup izninin olduğunu gösterir.',
	'ACL_YES'				=> 'Evet',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Buradan kullanıcıların ya da grupların yönetim izinlerini tanımlayabilirsiniz. Tüm kullanıcılar yönetici izinleriyle birlikte yönetim kontrol panelini görebilecektir.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Buradan kullanıcıları ve grupları forum moderatörleri olarak tanımlayabilirsiniz. Bu tanımlamalarla kullanıcılar forumlara erişim hakkı kazanır, global yönetim izinlerini ya da yöneticileri tanımlamak için lütfen uygun sayfayı kullanın.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Buradan kullanıcıların ve grupların hangi forumlara erişebileceklerini belirleyebilirsiniz. Moderatörleri tanımlamak veya Yöneticileri tanımlamak için ilgili sayfayı kullanın.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Buradan forum izinlerini bir forumdan birine ya da diğer forumlara kopyalayabilirsiniz.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Buradan global moderatör izinlerinin kullanıcılar ya da gruplara tanımlamasını gerçekleştirebilirsiniz. Bu moderatörler sıradan moderatörlerden farklı olarak tüm forumlar üzerinde erişim hakkına sahiptirler.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Forum izinleri gruplara tanımlama işlemini buradan yapabilirsiniz.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Buradan gruplara - kullanıcı izinleri, global moderatör izinleri ve yönetici izinleri şeklinde global izinler tanımlamayabilirsiniz. Kullanıcı izinleri avatarların kullanımı, özel mesaj gönderme işlemi, vb. konular içerir; global moderatör izinleri mesajların onaylanması, başlık yönetimi, yasaklama yönetimi, v.b. konular ve son olarak yönetim izinleri ise izin değişimleri, özel BBCode tanımlama, forum yönetimi v.b. konular içerir. Bireysel kullanıcı izinleri sadece özel durumlarda değiştirilmelidir, tercih edilmesi gereken yöntem kullanıcıları grup içine yerleştirmek ve sonra grup izinlerini tanımlamaktır.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Burası yönetimsel izinler için rollerin düzenlenebileceği bir yerdir. Roller etkili izinlere sahiptir, daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebileceksiniz.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Burası forum izinlerini için rollerin düzenlenebileceği bir yerdir. Roller etkili izinlere sahiptir, daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebileceksiniz.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Burası yönetim izinlerini için rollerin düzenlenebileceği bir yerdir. Roller etkili izinlere sahiptir, daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebileceksiniz.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Burası kullanıcı izinleri için rollerin düzenlenebileceği bir yerdir. Roller etkili izinlere sahiptir, daha önceden işaretlenerek tanımlanmış rolü değiştirmek isterseniz burada bu izinleri değiştirebileceksiniz.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Forum izinlerinin kullanıcılara tanımlanması işlemini yapabilirsiniz.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Buradan kullanıcılara - kullanıcı izinleri, global moderatör izinleri ve yönetici izinleri şeklinde global izinler tanımlayabilirsiniz. Kullanıcı izinleri avatarların kullanımı, özel mesaj gönderme işlemi, vb. konular içerir; global moderatör izinleri mesajların onaylanması, başlık yönetimi, yasaklama yönetimi, v.b. konular ve son olarak yönetim izinleri ise izin değişimleri, özel BBCode tanımlama, forum yönetimi v.b. konular içerir. Geniş sayıdaki kullanıcılarda bu ayarları değiştirmek için Grup izinleri sistemi yöntemi tercih edilir. Kullanıcı izinleri sadece özel durumlarda değiştirilmelidir, tercih edilmesi gereken yöntem kullanıcıları grup içine yerleştirmek ve sonra grup izinlerini tanımlamaktır.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Buradan etkin yönetimsel izinlere tanımlanmış seçilen kullanıcıları/grupları görüntüleyebilirsiniz.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Buradan global yönetim izinlerine tanımlanmış seçilen kullanıcıları/grupları görüntüleyebilirsiniz.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Buradan forum izinlerine tanımlanmış seçilen kullanıcıları/grupları ve forumları görüntüleyebilirsiniz.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Buradan forum moderatör izinlerine tanımlanmış seçilen kullanıcıları/grupları ve forumları görüntüleyebilirsiniz.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Buradan etkin kullanıcı izinlerine tanımlanmış olan seçilen kullanıcıları/grupları görüntüleyebilirsiniz.',

	'ADD_GROUPS'				=> 'Gruplar ekle',
	'ADD_PERMISSIONS'			=> 'İzinler ekle',
	'ADD_USERS'					=> 'Kullanıcılar ekle',
	'ADVANCED_PERMISSIONS'          => 'Gelişmiş İzinler',
	'ALL_GROUPS'				=> 'Tüm grupları seç',
	'ALL_NEVER'					=> 'Tümü <strong>ASLA</strong>',
	'ALL_NO'					=> 'Tümü <strong>HAYIR</strong>',
	'ALL_USERS'					=> 'Tüm kullanıcıları seç',
	'ALL_YES'					=> 'Tümü <strong>EVET</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Tüm izinleri uygula',
	'APPLY_PERMISSIONS'			=> 'İzinleri uygula',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Bu alanda belirlenen rol ve izinler sadece bu alan için ve işaretlenen tüm maddelere göre uygulanacaktır.',
	'AUTH_UPDATED'				=> 'İzinler güncellendi',
	
	'COPY_PERMISSIONS_CONFIRM'				=> 'Bu işlemi gerçekleştirmek istediğinize emin misiniz? Şunu bilmelisiniz ki, bu işlem seçilen hedeflerdeki varolan izinlerin üzerine yazacaktır.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'İzinlerini kopyalamak istediğiniz kaynak forum.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Kopyalanmış izinleri uygulamak istediğiniz hedef forumlar.',
	'COPY_PERMISSIONS_FROM'					=> 'İzinleri şuradan kopyala',
	'COPY_PERMISSIONS_TO'					=> 'İzinleri şuraya uygula',

	'CREATE_ROLE'				=> 'Rol oluştur',
	'CREATE_ROLE_FROM'			=> 'Buradan ayarları kullan…',
	'CUSTOM'					=> 'Özel…',

	'DEFAULT'					=> 'Varsayılan',
	'DELETE_ROLE'				=> 'Rol sil',
	'DELETE_ROLE_CONFIRM'		=> 'Bu rolü silmek istediğinizden emin misiniz? Bu role tanımlanmış ögelere sahip olanların izin ayarları <strong>kaybolmayacaktır</strong>.',
	'DISPLAY_ROLE_ITEMS'		=> 'Bu rolün kullandığı ögeleri görüntüle',

	'EDIT_PERMISSIONS'			=> 'İzinleri düzenle',
	'EDIT_ROLE'					=> 'Rolü düzenle',

	'GROUPS_NOT_ASSIGNED'		=> 'Bu role hiç bir grup tanımlanmadı',

	'LOOK_UP_GROUP'				=> 'Kullanıcı grubunu incele',
	'LOOK_UP_USER'				=> 'Kullanıcı incele',

	'MANAGE_GROUPS'		=> 'Grupları yönet',
	'MANAGE_USERS'		=> 'Kullanıcıları yönet',

	'NO_AUTH_SETTING_FOUND'		=> 'İzin ayarları tanımlanmadı.',
	'NO_ROLE_ASSIGNED'			=> 'Hiç bir rol tanımlanmadı…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Bu role ayarlanan haklar üzerindeki izinler değişmez. Tüm izinleri ayarsız bırakmak/kaldırmak istiyorsanız, “Tümü <strong>HAYIR</strong>” bağlantısını kullanmalısınız.',
	'NO_ROLE_AVAILABLE'			=> 'Hiç bir rol mevcut değil',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Lütfen role bir isim verin.',
	'NO_ROLE_SELECTED'			=> 'Rol bulunamadı.',
	'NO_USER_GROUP_SELECTED'	=> 'Herhangi bir kullanıcı veya grup seçmediniz.',

	'ONLY_FORUM_DEFINED'	=> 'Seçiminizde sadece tanımlanmış forumlar olmalıdır. Lütfen en azından bir kullanıcı ya da bir grup seçin.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'İzinler ve rol aynı zamanda tüm işaretlenen objelere uygulanacaktır',
	'PLUS_SUBFORUMS'				=> '+Altforumlar',

	'REMOVE_PERMISSIONS'			=> 'İzinleri kaldır',
	'REMOVE_ROLE'					=> 'Rol kaldır',
	'RESULTING_PERMISSION'			=> 'İzin sonucu',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol başarıyla eklendi.',
	'ROLE_ASSIGNED_TO'				=> 'Kullanıcılar/Gruplar %s rolüne tanımlandı',
	'ROLE_DELETED'					=> 'Rol başarıyla kaldırıldı.',
	'ROLE_DESCRIPTION'				=> 'Rol Tanımı',

 	'ROLE_ADMIN_FORUM'			=> 'Forum Yöneticisi',
 	'ROLE_ADMIN_FULL'			=> 'Tam Yönetici',
 	'ROLE_ADMIN_STANDARD'		=> 'Standart Yönetici',
 	'ROLE_ADMIN_USERGROUP'		=> 'Kullanıcı ve Gruplar Yöneticisi',
 	'ROLE_FORUM_BOT'			=> 'Bot Erişimi',
 	'ROLE_FORUM_FULL'			=> 'Tam Erişim',
 	'ROLE_FORUM_LIMITED'		=> 'Sınırlı Erişim',
 	'ROLE_FORUM_LIMITED_POLLS'	=> 'Sınırlı Erişim + Anketler',
 	'ROLE_FORUM_NOACCESS'		=> 'Erişim Yok',
 	'ROLE_FORUM_ONQUEUE'		=> 'Yönetim Onaylı Mesajlar',
 	'ROLE_FORUM_POLLS'			=> 'Standart Erişim + Anketler',
 	'ROLE_FORUM_READONLY'		=> 'Sadece Okuma Erişimi',
 	'ROLE_FORUM_STANDARD'		=> 'Standart Erişim',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Yeni Kayıtlı Kullanıcı Erişimi',
 	'ROLE_MOD_FULL'				=> 'Tam Moderatör',
 	'ROLE_MOD_QUEUE'			=> 'Onay Moderatörü',
 	'ROLE_MOD_SIMPLE'			=> 'Basit Moderatör',
 	'ROLE_MOD_STANDARD'			=> 'Standart Moderatör',
 	'ROLE_USER_FULL'			=> 'Tüm Özellikler',
 	'ROLE_USER_LIMITED'			=> 'Sınırlı Özellikler',
 	'ROLE_USER_NOAVATAR'		=> 'Avatar Yok',
 	'ROLE_USER_NOPM'			=> 'Özel Mesaj Yok',
 	'ROLE_USER_STANDARD'		=> 'Standart Özellikler',
 	'ROLE_USER_NEW_MEMBER'		=> 'Yeni Kayıtlı Kullanıcı Özellikleri',

	'ROLE_DESCRIPTION_ADMIN_FORUM'		=> 'Forum yönetimine erişebilir ve forum izin ayarlarını düzenler',
	'ROLE_DESCRIPTION_ADMIN_FULL'		=> 'Bu mesaj panosunun tüm yönetim fonksiyonlarına erişebilir.<br />Tavsiye edilmez.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Bir çok yönetim özelliklerine erişebilir fakat sistemle ya da sunucuyla ilgili olan araçları kullanma izni yoktur.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Grupları ve kullanıcıları yönetebilir, izinleri değiştirebilir, ayarları, yasaklı kullanıcıları ve rütbelere ulaşabilir.',
	'ROLE_DESCRIPTION_FORUM_BOT'		=> 'Bu rol, Bot ve arama örümcekleri için tavsiye edilir.',
	'ROLE_DESCRIPTION_FORUM_FULL'		=> 'Tüm forum özelliklerini kullanabilir. Duyuru yapılması, ve başlık sabitlenmeside buna dahildir. Ayrıca flood sınırlamasını yoksayabilir.<br />Normal Kullanıcılar için tavsiye edilmez.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Bazı forum özelliklerini kullanabilir, fakat dosya ekleyemez veya cevaplama ikonlarını kullanamaz.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Sınırlı Erişime nazaran ayrıca anketler oluşturulabilir.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Ne forumu görebilirler ne de foruma ulaşabilirler.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Birçok forum özelliğini kullanabilirler, bunlara dosya ekleri de dahildir, fakat cevaplar ve başlıkların moderatör tarafından onaylanmış olması gereklidir.',
	'ROLE_DESCRIPTION_FORUM_POLLS'		=> 'Standart erişim gibidir, fakat anket oluşturabilir.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Forumu okuyabilirler, fakat yeni başlıklar oluşturamazlar ya da mesajlara cevap veremezler.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Forumun bir çok özelliklerinden yararlanabilirler, buna dosya ekleri ve kendi başlıklarını silmek dahildir, fakat kendi başlıklarını kilitleyemezler ve anketler oluşturamazlar.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Yeni kayıtlı kullanıcılar grubunun üyeleri için özel bir roldür; yeni kullanıcılar için kilit özelliklere <strong>ASLA</strong> izinlerini içerir.',
	'ROLE_DESCRIPTION_MOD_FULL'			=> 'Yönetim ile ilgili tüm özellikleri kullanırlar, buna yasaklamada dahildir.',
	'ROLE_DESCRIPTION_MOD_QUEUE'		=> 'Yönetim yapabilirler, onaylanmayı bekleyen mesajları ve mesajların düzenlenmesini yönetebilirler, fakat başka birşey yapamazlar.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'		=> 'Temel başlık işlerini kullanabilirler. Uyarı gönderemezler ya da yönetimle ilgili mesaj onaylama yapamazlar.',
	'ROLE_DESCRIPTION_MOD_STANDARD'		=> 'Birçok yönetim araçlarını kullanabilirler, fakat kullanıcıları yasaklayamazlar, mesajın yayıncısının adını değiştiremezler.',
	'ROLE_DESCRIPTION_USER_FULL'		=> 'Kullanıcılar için var olan tüm forum özelliklerini kullanabilirler, bunlara kullanıcı adını değiştirmede dahildir. Ayrıca flood sınırlamasını yoksayabilirler.<br />Tavsiye edilmez.',
	'ROLE_DESCRIPTION_USER_LIMITED'		=> 'Bazı kullanıcı özelliklerine ulaşmaları izin verilmiştir. Dosya eklemeleri, e-postalara ya da anlık mesaj göndermelerine izin verilmemiştir.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Sınırlı özellik ayarlarına sahiptir, ve Avatar özelliğini kullanmalarına izin verilmemiştir.',
	'ROLE_DESCRIPTION_USER_NOPM'		=> 'Sınırlı özellik ayarlarına sahiptir, ve Özel mesajlaşmalarına izin verilmemiştir.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Bir çoğu için giriş hakkı vardır fakat tüm kullanıcı özellikleri için değil. Örnek olarak, kullanıcı adını değiştiremez ya da flood limiti gözardı edilemez.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Yeni kayıtlı kullanıcılar grubunun üyeleri için özel bir roldür; yeni kullanıcılar için kilit özelliklere <strong>ASLA</strong> izinlerini içerir.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Hangi rol için ne yapılacağı ve rolün açıklamasını kısa bir tanımlama şeklinde girerek yazabilirsiniz. Burada gireceğiniz açıklama izinler ekranındada gösterilecektir.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rol açıklaması çok uzun, lütfen açıklamayı 4000 karakter olarak sınırlayın.',
	'ROLE_DETAILS'					=> 'Rol bilgileri',
	'ROLE_EDIT_SUCCESS'				=> 'Rol başarıyla düzenlendi.',
	'ROLE_NAME'						=> 'Rol adı',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Belirlenen izin türü için <strong>%s</strong> adında bir rol zaten mevcut.',
	'ROLE_NOT_ASSIGNED'				=> 'Rol henüz tanımlanmadı.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Seçilen forum(lar) mevcut değil',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Seçilen grup(lar) mevcut değil',
	'SELECTED_USER_NOT_EXIST'		=> 'Seçilen kullanıcı(lar) mevcut değil',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Buradan seçeceğiniz forum, tüm altforumlara yapılan seçimleri içerecektir.',
	'SELECT_ROLE'					=> 'Rol seçin..',
	'SELECT_TYPE'					=> 'Tür seçin',
	'SET_PERMISSIONS'				=> 'İzinleri ayarla',
	'SET_ROLE_PERMISSIONS'			=> 'Rol izinleri ayarla',
	'SET_USERS_PERMISSIONS'			=> 'Kullanıcı izinlerini ayarla',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Kullanıcı forum izinlerini ayarla',

	'TRACE_DEFAULT'					=> 'Varsayılan olarak tüm izinler <strong>HAYIR</strong> (ayarlanmamış) kabul edilir. Yani izinler diğer ayarlar tarafından değiştirilebilir.',
	'TRACE_FOR'						=> 'İzlenecek',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Bu grubun izninin toplam değeri <strong>ASLA</strong> olarak ayarlanmıştır bu yüzden eski sonuçlar kalır.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Bu forum için bu grubun izninin toplam değeri <strong>ASLA</strong> olarak ayarlanmıştır bu yüzden eski sonuçlar kalır.',
	'TRACE_GROUP_NEVER_TOTAL_NO'		=> 'Bu grubun izni <strong>ASLA</strong> olarak ayarlanmıştır bu durumda yeni toplam değere sahip olur çünkü bu değer henüz ayarlanmamıştır (<strong>HAYIR</strong> olarak ayarlıdır).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Bu forum için bu grubun izni <strong>ASLA</strong> olarak ayarlanmıştır bu durumda yeni toplam değere sahip olur çünkü bu değer henüz ayarlanmamıştır (<strong>HAYIR</strong> olarak ayarlıdır).',
	'TRACE_GROUP_NEVER_TOTAL_YES'		=> 'Bu grubun izni <strong>ASLA</strong> olarak ayarlanmıştır, bu kullanıcı için toplam <strong>EVET</strong> değeri <strong>ASLA</strong> olarak değiştirilir.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Bu forum için bu grubun izni <strong>ASLA</strong> olarak ayarlanmıştır, bu kullanıcı için toplam <strong>EVET</strong> değeri <strong>ASLA</strong> olarak değiştirilir.',
	'TRACE_GROUP_NO'				=> 'Bu grup için izin <strong>HAYIR</strong> olarak ayarlanmıştır bu durumda eski toplam değer kalır.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Bu forum içerisindeki bu grup için izin <strong>HAYIR</strong> olarak ayarlanmıştır bu durumda eski toplam değer kalır.',
	'TRACE_GROUP_YES_TOTAL_NEVER'		=> 'Bu grubun izni <strong>EVET</strong> olarak ayarlanmıştır fakat toplamda <strong>ASLA</strong> olarak ayarlandığı için değiştirilemez.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Bu forum için bu grubun izni <strong>EVET</strong> olarak ayarlanmıştır fakat toplamda <strong>ASLA</strong> olarak ayarlandığı için değiştirilemez.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Bu grubun izni <strong>EVET</strong> olarak ayarlanmıştır, bu durumda yeni toplam değere sahip olur çünkü bu değer henüz ayarlanmamıştır (<strong>HAYIR</strong> olarak ayarlanmıştır).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Bu forum için bu grubun izni <strong>EVET</strong> olarak ayarlanmıştır, bu durumda yeni toplam değere sahip olur çünkü bu değer henüz ayarlanmamıştır (<strong>HAYIR</strong> olarak ayarlanmıştır).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Bu grubun izni <strong>EVET</strong> olarak ayarlanmıştır ve toplam izin <strong>EVET</strong> olarak zaten ayarlıdır, bu yüzden toplam sonuçlar kalır.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Bu forum için bu grubun izni <strong>EVET</strong> olarak ayarlanmıştır ve toplam izin <strong>EVET</strong> olarak zaten ayarlıdır, bu yüzden toplam sonuçlar kalır.',
	'TRACE_PERMISSION'				=> 'İzini izle - %s',
	'TRACE_RESULT'					=> 'İzleme sonucu',
	'TRACE_SETTING'					=> 'İzleme ayarı',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'Forum bağımsız kullanıcı izni <strong>EVET</strong> olur fakat, fakat toplam sonuç zaten <strong>EVET</strong> olarak ayarlıdır, ayrıca toplam sonuç korunur. %sGlobal izinleri araştır%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'Forum bağımsız kullanıcı izni <strong>EVET</strong> seçeneğinin yerel izin sonucu olan <strong>ASLA</strong> seçeneğinin yerini alması durumunu değerlendirir %sGlobal izinleri araştır%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Forum bağımsız kullanıcı izni <strong>ASLA</strong> seçeneğinin yerel izinleri etkilemediğini değerlendirir %sGlobal izinleri araştır%s',
	
	'TRACE_USER_FOUNDER'			=> 'Kullanıcı bir kurucudur, bu nedenle yönetici izinleri her zaman <strong>EVET</strong> olarak ayarlıdır.',
	'TRACE_USER_KEPT'				=> 'Kullanıcının izni <strong>HAYIR</strong> olarak ayarlanmıştır bu yüzden eski toplam değer kalır.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Bu forum için kullanıcının izni <strong>HAYIR</strong> olarak ayarlanmıştır bu yüzden eski toplam değer kalır.',
	'TRACE_USER_NEVER_TOTAL_NEVER'		=> 'Kullanıcının izni <strong>ASLA</strong> olarak ayarlanmıştır ve toplam değer <strong>ASLA</strong> olarak ayarlandığında, hiç bir değişim olmaz.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Bu forum için kullanıcının izni <strong>ASLA</strong> olarak ayarlanmıştır ve toplam değer <strong>ASLA</strong> olarak ayarlandığında, hiç bir değişim olmaz.',
	'TRACE_USER_NEVER_TOTAL_NO'		=> 'Kullanıcının izni <strong>ASLA</strong> olarak ayarlanmıştır bu durumda toplam değerede sahip olur çünkü toplam değer HAYIR olarak ayarlıdır.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Bu forum için kullanıcının izni <strong>ASLA</strong> olarak ayarlanmıştır bu durumda toplam değerede sahip olur çünkü toplam değer HAYIR olarak ayarlıdır.',
	'TRACE_USER_NEVER_TOTAL_YES'		=> 'Kullanıcının izni <strong>ASLA</strong> olarak ayarlanmıştır ve önceki <strong>EVET</strong> değerinin yerini almıştır.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Bu forum için kullanıcının izni <strong>ASLA</strong> olarak ayarlanmıştır ve önceki <strong>EVET</strong> değerinin yerini almıştır.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'Kullanıcının izni <strong>HAYIR</strong>’dır ve toplam değer HAYIR olarak ayarlıdır bu yüzden varsayılan olarak <strong>ASLA</strong> değerini almıştır.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Bu forum için kullanıcının izni <strong>HAYIR</strong>’dır ve toplam değer HAYIR olarak ayarlıdır bu yüzden varsayılan olarak <strong>ASLA</strong> değerini almıştır.',
	'TRACE_USER_YES_TOTAL_NEVER'		=> 'Kullanıcının izni <strong>EVET</strong> olarak ayarlanmıştır fakat toplam <strong>ASLA</strong> değerinin üzerine yazılamaz.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Bu forum için kullanıcının izni <strong>EVET</strong> olarak ayarlanmıştır fakat toplam <strong>ASLA</strong> değerinin üzerine yazılamaz.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'Kullanıcının izni <strong>EVET</strong> olarak ayarlanmıştır bu durumda toplam değere döner, çünkü toplam değer <strong>HAYIR</strong> olarak ayarlanmıştır.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Bu forum için kullanıcının izni <strong>EVET</strong> olarak ayarlanmıştır bu durumda toplam değere döner, çünkü toplam değer <strong>HAYIR</strong> olarak ayarlanmıştır.',
	'TRACE_USER_YES_TOTAL_YES'		=> 'Kullanıcının izni <strong>EVET</strong> olarak ayarlanmıştır ve toplam değeri de <strong>EVET</strong> olarak ayarlanmıştır, bu yüzden hiç bir şey değişmez.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Bu forum için kullanıcının izni <strong>EVET</strong> olarak ayarlanmıştır ve toplam değeri de <strong>EVET</strong> olarak ayarlanmıştır, bu yüzden hiç bir şey değişmez',
	'TRACE_WHO'						=> 'Kim',
	'TRACE_TOTAL'					=> 'Toplam',

	'USERS_NOT_ASSIGNED'			=> 'Bu role hiç bir kullanıcı tanımlanmadı',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'alttaki ön-tanımlı grupların bir üyesidir.',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'alttaki kullanıcı tanımlı grupların bir üyesidir.',

	'VIEW_ASSIGNED_ITEMS'	=> 'Tanımlanan ögeleri görüntüle',
 	'VIEW_LOCAL_PERMS'		=> 'Yerel izinler',
 	'VIEW_GLOBAL_PERMS'		=> 'Global izinler',
	'VIEW_PERMISSIONS'		=> 'İzinleri görüntüle',

  'WRONG_PERMISSION_TYPE'            => 'Yanlış izin tipi seçildi.',
  'WRONG_PERMISSION_SETTING_FORMAT'   => 'İzin ayarları yanlış bir formatta, onlar düzeltilmeden phpBB işlemeyecektir.',
));
