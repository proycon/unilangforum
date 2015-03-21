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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Buradan <strong>toplu e-postaları al seçeneğini aktifleştiren</strong> tüm kullanıcılarınıza ya da belirli bir grubun tüm kullanıcılarına bir e-posta mesajı gönderebilirsiniz. Bu yapıldığında, e-postalar yönetim e-posta adresi olarak belirlenen adresten gönderilecek, bir kopyası ise tüm ilgili alıcılara iletilecektir. Varsayılan ayar olarak, bir e-posta içine sadece 20 alıcı dahil edilecektir, daha fazla alıcı için daha fazla e-posta gönderilecektir. Geniş bir gruba e-posta gönderirken lütfen sabırlı olun, gönderim butonuna tıkladığınızda işlemi durdurmayın ve yarıda bırakmayın. Toplu e-posta gönderimlerinde bu işlemin uzun zaman alması normaldir, işlem tamamlandığında size bildirilecektir.',
	'ALL_USERS'						=> 'Tüm kullanıcılar',

	'COMPOSE'				=> 'Oluştur',

	'EMAIL_SEND_ERROR'		=> 'E-posta gönderilirken bir ya da daha fazla hata oluştu. Hata mesajlarının detayları için lütfen %sHata kayıtlarını%s kontrol edin.',
	'EMAIL_SENT'			=> 'Bu mesaj gönderildi.',
	'EMAIL_SENT_QUEUE'		=> 'Bu mesaj gönderilmek için sıraya alındı.',

	'LOG_SESSION'			=> 'Kritik kayıtlar için posta oturumu kayıtlarını tut',

	'SEND_IMMEDIATELY'		=> 'Hemen gönder',
	'SEND_TO_GROUP'			=> 'Gönderilecek grup',
	'SEND_TO_USERS'			=> 'Gönderilecek kullanıcılar',
	'SEND_TO_USERS_EXPLAIN'	=> 'Buraya adlar girildiği zaman, üstte seçilmiş herhangi bir grup varsa o gruba gönderim işlemi yapılmayacaktır. Her kullanıcı adını yeni bir satıra girin.',

	'MAIL_BANNED'			=> 'Yasaklanmış kullanıcılara posta',
	'MAIL_BANNED_EXPLAIN'	=> 'Bir gruba toplu e-posta gönderirken aynı zamanda yasaklanmış kullanıcıların e-posta alıp almayacaklarını buradan seçebilirsiniz.',	
	'MAIL_HIGH_PRIORITY'	=> 'Yüksek',
	'MAIL_LOW_PRIORITY'		=> 'Düşük',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Posta önceliği',
	'MASS_MESSAGE'			=> 'Mesajınız',
	'MASS_MESSAGE_EXPLAIN'	=> 'Not: Sadece düz yazı girebilirsiniz. Tüm biçimlendirmeler postayı göndermeden önce silinecektir.',
	
	'NO_EMAIL_MESSAGE'		=> 'Bir mesaj yazmalısınız.',
	'NO_EMAIL_SUBJECT'		=> 'Mesajınız için bir başlık belirlemelisiniz.',
));
