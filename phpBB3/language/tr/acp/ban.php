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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 Saat',
	'30_MINS'		=> '30 Dakika',
	'6_HOURS'		=> '6 Saat',

	'ACP_BAN_EXPLAIN'	=> 'Burada yasaklanmış kullanıcıları ad, IP adresi ya da e-posta adresleri şeklinde kontrol edebilirsiniz. Bu sayede kullanıcının mesaj panosunun herhangi bir bölümüne ulaşmasına engel olacaksınız. Arzu ederseniz, yasaklama nedeni olarak kısa bir açıklama (en fazla 3000 karakter) yazabilirsiniz. Bu durum yönetici kayıtlarında gösterilecektir. Ayrıca yasaklama süresini belirleyebilirsiniz. Eğer isterseniz yasaklamayı belirli bir tarihte sonlandırabilirsiniz, bu durumda yasaklama uzunluğu için <span style="text-decoration: underline;">Zaman aralığı - &gt;</span> seçeneğini kullanın ve <kbd>YYYY-AA-GG</kbd> formatında bir tarih girin.',

	'BAN_EXCLUDE'			=> 'Yasaklanmışların dışında tut ',
	'BAN_LENGTH'			=> 'Yasaklama süresi',
	'BAN_REASON'			=> 'Yasaklama nedeni',
	'BAN_GIVE_REASON'		=> 'Yasaklanan kişiye gösterilen açıklama',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Yasaklama listesi başarıyla güncellendi.',
	'BANNED_UNTIL_DATE'		=> '%s tarihine kadar', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (%2$s tarihine kadar)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Bir ya da daha fazla e-posta adresini yasaklama',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Bu kısım aktif olduğunda, belirttiğiniz e-posta adresleri var olan tüm yasaklamaların dışında tutulur.',
	'EMAIL_BAN_EXPLAIN'			=> 'Birden fazla e-posta adresi belirtmek için her satıra bir tane girin, kısmi olarak adreslerin belirli bir bölümünü göstererek yasaklama işlemini genelleyebilirsiniz. Joker * sembolü kullanarak belirli bir kısım adresi yasaklayabilirsiniz, örneğin; <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, vb. şekilde tanımlayabilirsiniz.',
	'EMAIL_NO_BANNED'			=> 'Yasaklanmış hiç bir e-posta adresi yok',
	'EMAIL_UNBAN'				=> 'E-posta adreslerindeki yasaklamayı kaldır',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Fare ve klavye kombinasyonu kullanarak tarayıcınız ve bilgisayarınız yardımıyla birden çok e-posta adresi üzerindeki yasaklamayı kaldırabilirsiniz. Dışarda tutulan e-posta adresleri vurgulanmıştır.',

	'IP_BAN'					=> 'Bir ya da daha fazla ip adresini yasaklama',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Bu kısım aktif olduğunda, belirttiğiniz ip adresleri var olan tüm yasaklamaların dışında tutulur.',
	'IP_BAN_EXPLAIN'			=> 'Farklı IP/Sunucu isimlerini her bir satıra ayrı olarak girin. Belirli bir aralıktaki ip adresini girmek isterseniz kısa çizgi (-) ile ve joker sembolü “*” kullanarak bu adresleri girebilirsiniz.',
	'IP_HOSTNAME'				=> 'IP adresleri ya da sunucu isimleri',
	'IP_NO_BANNED'				=> 'Yasaklı IP adresleri yok',
	'IP_UNBAN'					=> 'IP adreslerindeki yasağı ya da engeli kaldır',
	'IP_UNBAN_EXPLAIN'			=> 'Fare ve klavye kombinasyonu kullanarak tarayıcınız ve bilgisayarınız yardımıyla birden çok IP adresi üzerindeki yasaklamayı kaldırabilirsiniz. Dışarda tutulan IP adresleri vurgulanmıştır.',

	'LENGTH_BAN_INVALID'            => 'Tarih, <kbd>YYYY-AA-GG</kbd> formatında olmalıdır.',
	
	'OPTIONS_BANNED'			=> 'Yasaklandı',
	'OPTIONS_EXCLUDED'			=> 'Dışarda tutuldu',	
	
	'PERMANENT'		=> 'Sürekli',
	
	'UNTIL'						=> 'Zaman aralığı',
	'USER_BAN'					=> 'Kullanıcı adına göre bir ya da daha fazla kullanıcıyı yasakla',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Bu kısım aktif olduğunda, belirttiğiniz kullanıcılar var olan tüm yasaklamaların dışında tutulur.',
	'USER_BAN_EXPLAIN'			=> 'Her satıra bir ad girerek çoklu kullanıcı yasaklayabilirsiniz. <span style="text-decoration: underline;">Bir üye bul</span> seçeneğini kullanarak bir ya da birden fazla kullanıcıya bakabilir ve bunları otomatik olarak ekleyebilirsiniz.',
	'USER_NO_BANNED'			=> 'Yasaklı kullanıcı yok',
	'USER_UNBAN'				=> 'Kullanıcı adına göre kullanıcıların yasağını ya da hariçliğini kaldır',
	'USER_UNBAN_EXPLAIN'		=> 'Fare ve klavye kombinasyonu kullanarak tarayıcınız ve bilgisayarınız yardımıyla birden çok kullanıcı üzerindeki yasaklamayı (ya da hariçliği) kaldırabilirsiniz. Hariç tutulan kullanıcılar vurgulu olarak belirtilmiştir.',
));
