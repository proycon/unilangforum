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
	'ADMIN_CONFIG'				=> 'Yönetici ayarları',
	'ADMIN_PASSWORD'			=> 'Yönetici şifresi',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Yönetici şifresini doğrula',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Lütfen 6 ve 30 karakter arası uzunlukta bir şifre girin.',
	'ADMIN_TEST'				=> 'Yönetici ayarları kontrolü',
	'ADMIN_USERNAME'			=> 'Yönetici kullanıcı adı',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Lütfen 3 ve 20 karakter arası uzunlukta bir kullanıcı adı girin.',
	'APP_MAGICK'				=> 'Imagemagick desteği [ Dosya ekleri için ]',
	'AUTHOR_NOTES'				=> 'Yapımcı notları<br />» %s',
	'AVAILABLE'					=> 'Mevcut',
	'AVAILABLE_CONVERTORS'		=> 'Mevcut dönüştürücüler',

	'BEGIN_CONVERT'					=> 'Dönüşüme başla',
	'BLANK_PREFIX_FOUND'			=> 'Tablolarınızda yapılan tarama sırasında, geçerli bir kurulum için hiç bir tablo öneki kullanılmadığı görüldü.',
	'BOARD_NOT_INSTALLED'			=> 'Hiç bir kurulum bulunmadı',
 	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB Birleştirme Dönüştürücü Sistemi işlevini yerine getirmek için phpBB3\'ün varsayılan bir kurulumuna ihtiyaç duyuyor, lütfen <a href="%s">ilk önce phpBB3 kurulumuna devam edin</a>.',
	'BACKUP_NOTICE'					=> 'Lütfen güncelleme işlemi sırasında ortaya çıkabilecek problemlere karşı, güncelleme yapmadan önce mesaj panonuzu yedekleyin.',	

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Önbellek tipi',
	'CACHE_STORE_EXPLAIN'		=> 'Verilerin önbellekleneceği fiziksel konum, dosya sistemi tercih edilir.',
	'CAT_CONVERT'				=> 'Dönüştür',
	'CAT_INSTALL'				=> 'Kur',
	'CAT_OVERVIEW'				=> 'Görünüm',
	'CAT_UPDATE'				=> 'Güncelle',
	'CHANGE'					=> 'Değiştir',
	'CHECK_TABLE_PREFIX'		=> 'Lütfen tablo önekini kontrol edin ve tekrar deneyin.',
	'CLEAN_VERIFY'				=> 'Final yapısı temizleniyor ve doğrulanıyor',
	'CLEANING_USERNAMES'		=> 'Kullanıcı adları temizleniyor',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> temiz kullanıcı adı şunun için:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Eski mesaj panonuzda çakışan kullanıcı adları bulundu. Dönüşümü tamamlamak için lütfen bu kullanıcıları silin veya yeniden adlandırın; böylece her temiz kullanıcı adı için eski forumunuzda sadece bir kullanıcı olacaktır.',
	'COLLIDING_USER'			=> '» kullanıcı id: <strong>%d</strong> kullanıcı adı: <strong>%s</strong> (%d mesaj)',
	'CONFIG_CONVERT'			=> 'Ayarlar dönüştürülüyor',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Ayar dosyasına yazılamıyor. Bu dosyanın oluşturulması için alternatif metotlar altta gösterilmiştir.',
	'CONFIG_FILE_WRITTEN'		=> 'Ayar dosyasına yazıldı. Şimdi kurulum için bir sonraki adıma geçebilirsiniz.',
	'CONFIG_PHPBB_EMPTY'            => '“%s” için phpBB3 config değişkeni boş.',
	'CONFIG_RETRY'				=> 'Tekrar dene',
	'CONTINUE_CONVERT'			=> 'Dönüştürmeye devam et',
	'CONTINUE_CONVERT_BODY'         => 'Önceki bir dönüştürme denemesi belirlendi. Şimdi, yeni bir dönüşüm başlatmak ya da dönüşüme devam etmek arasında bir seçim yapabilirsiniz.',
	'CONTINUE_LAST'				=> 'Son anlatımlara devam et',
	'CONTINUE_OLD_CONVERSION'       => 'Önceki başlatılan dönüştürmeye devam et',
	'CONVERT'					=> 'Dönüştür',
	'CONVERT_COMPLETE'			=> 'Dönüşüm tamamlandı',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Mesaj panonuzu phpBB 3.1’e başarıyla dönüştürdünüz. Şimdi giriş yapabilir ve <a href="../">mesaj panonuza erişebilirsiniz</a>. Lütfen install dizinini silerek mesaj panonuzu aktif etmeden önce, ayarların doğru şekilde transfer edildiğine emin olun. Unutmayın, phpBB kullanımı için çevrimiçi yardım <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Dokümantasyon</a> ve <a href="https://www.phpbb.com/community/viewforum.php?f=466">destek forumlarında</a> mevcuttur.',
	'CONVERT_INTRO'				=> 'phpBB Birleştirme Dönüştürücü Sistemine Hoşgeldiniz',
	'CONVERT_INTRO_BODY'		=> 'Buradan, diğer (kurulmuş) mesaj panosu sistemlerinden veri transfer edebilirsiniz. Alttaki listede geçerli tüm dönüşüm modülleri mevcuttur. Eğer alttaki listede dönüşüm yapmak istediğiniz mesaj panosu yazılımı gösterilmemişse, daha fazla dönüşüm modülleri için lütfen web sitemizi kontrol edin, bu modüller için mevcut bir indirme dosyası bulunabilir.',
	'CONVERT_NEW_CONVERSION'        => 'Yeni dönüştürme',
	'CONVERT_NOT_EXIST'			=> 'Belirtilen dönüştürücü bulunmuyor.',
	'CONVERT_OPTIONS'         => 'Ayarlar',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Girdiğiniz bilgiler doğrulandı. Dönüşüm işlemine devam etmek için lütfen alttaki butona tıklayın.',
	'CONV_ERR_FATAL'			=> 'Tehlikeli dönüştürme hatası',
	
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Eski mesaj panonuzda dosya ekleri için FTP yüklemesi açık. Lütfen FTP yükleme seçeneğini kapatın ve geçerli bir dizin belirlendiğine emin olun, daha sonra tüm dosya eki dosyalarını bu yeni web erişilebilirliği olan dizine kopyalayın. Bunu yaptıktan sonra, dönüştürücüyü yeniden başlatın.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Dönüştürme için hiç bir konfigürasyon bilgisi mevcut değil.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Forum erişim bilgilerine ulaşılamıyor.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kategorilere ulaşılamıyor.',
	'CONV_ERROR_GET_CONFIG'				=> 'Mesaj panosu ayarlarınıza erişilemiyor.',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” dosyasına erişilemiyor/okunamıyor.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Grup doğrulama bilgilerine ulaşılamıyor.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'add_bots() içerisindeki gruplar tablosunda uyuşmazlık tespit edildi - eğer bunu elle yaptıysanız tüm özel grupları eklemelisiniz.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kullanıcılar tablosuna bot eklenemiyor.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Botlar tablosuna bot eklenemiyor.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'user_group tablosuna kullanıcı eklenemiyor.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mesaj ayrıştırıcı hatası',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Geliştirici için not: %s kullanmak için $convertor[\'avatar_path\'] belirlemelisiniz.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Kaynak mesaj panosuna bağlı yol belirlenmedi.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Geliştirici için not: %s kullanmak için $convertor[\'avatar_gallery_path\'] belirlemelisiniz.',
	'CONV_ERROR_NO_GROUP'				=> '%2$s içerisinde “%1$s” grubu bulunamadı.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Geliştirici için not: %s kullanmak için $convertor[\'ranks_path\'] belirlemelisiniz.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Geliştirici için not: %s kullanmak için $convertor[\'smilies_path\'] belirlemelisiniz.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Geliştirici için not: %s kullanmak için $convertor[\'upload_path\'] belirlemelisiniz.',
	'CONV_ERROR_PERM_SETTING'			=> 'İzin ayarı eklenemiyor/güncellenemiyor.',
	'CONV_ERROR_PM_COUNT'				=> 'Özel mesaj sayaç klasörü seçilemiyor.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Eski kategori yerine yeni forum eklenemiyor.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Eski forum yerine yeni forum eklenemiyor.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kullanıcı doğrulama bilgilerine ulaşılamıyor.',
	'CONV_ERROR_WRONG_GROUP'			=> '%2$s içerisinde tanımlanan “%1$s” grubu yanlış.', 
	'CONV_OPTIONS_BODY'            => 'Bu sayfa kaynak mesaj panosuna erişim için istenilen verileri toplar. Önceki mesaj panonuzun veritabanı bilgilerini girin; dönüştürücü, altta verilen veritabanı içerisinde herhangi bir şeyi değiştirmeyecektir. Tutarlı bir dönüşüm izni için kaynak mesaj panosu kapalı olmalıdır.',
	'CONV_SAVED_MESSAGES'         => 'Kaydedilen mesajlar',
	
	'COULD_NOT_COPY'			=> 'Dosya kopyalanamıyor <strong>%1$s</strong> -> <strong>%2$s</strong><br /><br />Lütfen hedef dizinin bulunduğunu ve web sunucusu tarafından yazılabilir olduğunu kontrol edin.',
	'COULD_NOT_FIND_PATH'		=> 'Önceki mesaj panonuzun yolu bulunamıyor. Lütfen ayarlarınızı kontrol edip tekrar deneyin.<br />» %s kaynak yolu olarak belirtildi.',

	'DBMS'						=> 'Veritabanı tipi',
	'DB_CONFIG'					=> 'Veritabanı ayarları',
	'DB_CONNECTION'				=> 'Veritabanı bağlantısı',
	'DB_ERR_INSERT'				=> '<code>INSERT</code> sorgusu işlemi sırasında hata oluştu.',
	'DB_ERR_LAST'				=> '<var>query_last</var> işlemi sırasında hata oluştu.',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> uygulaması sırasında hata oluştu.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> uygulaması sırasında hata oluştu, %s (“%s”).',
	'DB_ERR_SELECT'				=> '<code>SELECT</code> sorgusu çalıştırılması sırasında hata oluştu.',
	'DB_HOST'					=> 'Veritabanı ana makine adı veya VKA',
   	'DB_HOST_EXPLAIN'         => 'Veri Kaynak Adı için VKA (DSN) belirtilmelidir ve bu sadece ODBC kurulumlarında bulunur. PostgreSQL’da, yerel sunucuya UNIX domain socket yoluyla bağlanmak için localhost, TCP yoluyla bağlanmak içinse 127.0.0.1 kullanılır. SQLite için, veritabanı dosyanıza giden tam yolu girin.',
	'DB_NAME'					=> 'Veritabanı adı',
	'DB_PASSWORD'				=> 'Veritabanı şifresi',
	'DB_PORT'					=> 'Veritabanı sunucu portu',
	'DB_PORT_EXPLAIN'			=> 'Bildiğiniz sunucu işlemleri bir standart portta olmadıkça burayı boş bırakın.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Üzgünüz, ancak bu güncelleme paketi phpBB’nin “%1$s” sürümünden önceki sürümlerden güncellemeyi desteklememektedir. Yüklü olan mevcut sürümünüz “%2$s”\'dir. Lütfen bu güncelleme paketini çalıştırmadan önce forumunuzu bir önceki sürüme güncelleyin. Konu ile ilgili olarak phpBB.com sitesindeki Destek Forumları size yardımcı olacaktır.',
	'DB_USERNAME'				=> 'Veritabanı kullanıcı adı',
	'DB_TEST'					=> 'Bağlantı testi',
	'DEFAULT_LANG'				=> 'Varsayılan forum dili',
	'DEFAULT_PREFIX_IS'			=> 'Dönüştürücü, belirtilen önek ile tabloları bulamadı. Lütfen dönüştüreceğiniz mesaj panosundan mesaj panosu için doğru bilgileri girdiğinize emin olun. %1$s için varsayılan tablo öneki <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Dönüştürücü içerisindeki test_file değişkeni için hiç bir değer belirtilmedi. Eğer siz bu dönüştürücünün bir kullanıcıysanız, bu hatayı göremezsiniz, lütfen dönüştürücü yapımcısına bu mesajı bildirin. Eğer siz bir dönüştürücü yapımcısıysanız, doğrulamaya izin verilen yol hangi kaynak mesaj panosu içerisinde bulunuyorsa bir dosyanın adını belirlemelisiniz.',
	'DIRECTORIES_AND_FILES'		=> 'Dizin ve dosya ayarı',
	'DISABLE_KEYS'				=> 'Anahtarlar kapatılıyor',
	'DLL_FTP'					=> 'Uzak FTP desteği [ Kurulum ]',
	'DLL_GD'					=> 'GD grafik desteği [ Görsel Doğrulama ]',
	'DLL_MBSTRING'				=> 'Multi-byte karakter desteği',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ ile ODBC',
   	'DLL_MSSQLNATIVE'         => 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL ile MySQLi Uzantısı',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',	
	'DLL_XML'					=> 'XML desteği [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib sıkıştırma desteği [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'İndirme ayarları',
	'DL_CONFIG_EXPLAIN'			=> 'config.php dosyasının tamamını kendi bilgisayarınıza indirebilirsiniz. O zaman dosyayı elle yüklemeniz ve phpBB 3.1 ana dizininizde mevcut olan config.php dosyası ile değiştirmeniz gerekecektir. Lütfen dosyayı ASCII formatında yüklemeyi unutmayın (eğer bunu nasıl yapacağınıza emin değilseniz FTP uygulama dokümantasyonunuza bakın). config.php dosyasını yüklediğiniz zaman lütfen sonraki adıma geçmek için “Bitti” bağlantısına tıklayın.',
	'DL_DOWNLOAD'				=> 'İndir',
	'DONE'						=> 'Bitti',

	'ENABLE_KEYS'				=> 'Anahtarlar tekrar açılıyor. Bu biraz sürebilir.',

	'FILES_OPTIONAL'			=> 'İsteğe Bağlı dosyalar ve klasörler',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>İsteğe Bağlı</strong> - Bu dosyalar, klasörler veya izin ayarları gerekli değildir. Eğer bunlar bulunamıyorsa veya yazılamıyorsa, kurulum sistemi çeşitli teknikler kullanarak onları oluşturmaya çalışacaktır. Fakat, bunların hazır bulunması kurulumu hızlandıracaktır.',
	'FILES_REQUIRED'			=> 'Dosyalar ve Klasörler',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Gerekli</strong> - phpBB\'nin düzgün bir şekilde işlemesi için bazı dosya ve klasörlere yazılabilmesi veya erişilebilmesi gerekmektedir. Eğer "Bulunamadı" ifadesini görüyorsanız konu ile ilgili dosya veya klasörü oluşturmanız gerekmektedir. Eğer "Yazılabilir değil" ifadesini görüyorsanız dosya veya klasördeki izinleri değiştirip yazılması için phpBB\'ye izin vermeniz gerekmektedir.',
	'FILLING_TABLE'				=> 'Doldurulan tablo <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Tablolar dolduruluyor',
	'FINAL_STEP'				=> 'Final adımı işlemi',
	'FORUM_ADDRESS'				=> 'Mesaj panosu adresi',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Bu, önceki mesaj panonuzun URL adresidir, örneğin <samp>http://www.siteadresi.com/phpBB2/</samp>. Eğer buraya bir adres girilmişse ve bu adresin hiç bir kısmı boş değilse yeni mesaj panosu adresiniz tarafından mesajlar, özel mesajlar ve imzalar dahilinde eskisi ile değiştirilecektir.',
	'FORUM_PATH'				=> 'Mesaj panosu yolu',
	'FORUM_PATH_EXPLAIN'		=> 'Bu, <strong>şu anki phpBB kurulumunuzun ana dizininden</strong> önceki mesaj panonuza giden diskteki <strong>ilgili</strong> yoldur.',
	'FOUND'						=> 'Bulundu',
	'FTP_CONFIG'				=> 'FTP tarafından transfer ayarı',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB, bu sunucuda FTP modülünün hazır bulunduğunu tespit etti. Eğer isterseniz config.php dosyanızı bu yolla yükleyebilirsiniz. Aşağıda listelenen bilgileri temin etmeniz gerekmektedir. Unutmayın, kullanıcı adı ve şifreniz sunucunuza ait olandır! (eğer bunların ne olduğuna emin değilseniz bilgi için hosting sağlayıcınıza sorun).',
	'FTP_PATH'					=> 'FTP yolu',
	'FTP_PATH_EXPLAIN'			=> 'Bu, ana dizininizden phpBB\'ye giden yoldur, ör. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Yükle',

	'GPL'						=> 'Genel Kamu Lisansı',
	
	'INITIAL_CONFIG'			=> 'Temel ayarlar',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Şimdi, sunucunuzda phpBB çalıştırabilmek için kurulum tarafından belirlenecek bazı özel bilgileri temin etmeniz gerekmektedir. Eğer veritabanınıza nasıl bağlanılacağını bilmiyorsanız lütfen (ilk olarak) hosting sağlayıcınız ile iletişime geçin ya da phpBB destek forumlarını kullanın. Devam etmeden önce lütfen girdiğiniz verileri en ince ayrıntısına kadar kontrol edin.',
	'INSTALL_CONGRATS'			=> 'Tebrikler!',
 	'INSTALL_CONGRATS_EXPLAIN'	=> '
		phpBB %1$s sürümünü başarıyla kurdunuz. Lütfen aşağıdaki seçeneklerden birini seçerek ilerleyin:</p>
		<h2>Mevcut bir mesaj panosunu phpBB3\'e dönüştürmek</h2>
		<p>phpBB Birleştirme Dönüştürücü Sistemi phpBB 2.0.x ve diğer mesaj panosu sistemlerinden phpBB3\'e dönüşümü destekler. Eğer dönüştürmek istediğiniz mevcut bir mesaj panonuz varsa, lütfen <a href="%2$s">dönüştürücüye doğru ilerleyin</a>.</p>
		<h2>phpBB3\'ünüz ile yolunuza devam edin!</h2>
		<p>Alttaki butona tıkladıktan sonra Yönetim Kontrol Paneli (YKP)’nizdeki bazı istatistiksel verileri phpBB’ye ulaştıracağınız bir form ile karşılaşacaksınız. Eğer o bilgileri göndererek bizlere yardımcı olursanız, sizlere minnettar kalacağız. Daha sonra biraz zamanınızı ayırarak size sunulan mevcut seçenekleri inceleyebilirsiniz. <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Dokümantasyon</a>, <a href="%3$s">BENİ OKU</a> ve <a href="https://www.phpbb.com/community/viewforum.php?f=466">Destek Forumları</a> yoluyla çevrimiçi yardım alabileceğinizi unutmayın.</p><p><strong>Lütfen mesaj panonuzu kullanmadan önce install klasörünü silin, taşıyın ya da yeniden adlandırın. Eğer bu klasör mevcutsa, sadece Yönetim Kontrol Paneline (YKP) erişilebilinecektir.</strong>',
	'INSTALL_INTRO'				=> 'Kuruluma Hoşgeldiniz',

	'INSTALL_INTRO_BODY'		=> 'Bu seçenek ile, sunucunuza phpBB3 kurmak mümkün olacaktır.</p><p>Devam etmek için, veritabanı ayarlarınıza ihtiyacınız vardır. Eğer veritabanı ayarlarınızı bilmiyorsanız, lütfen hosting firmanız ile iletişime geçin ve onlara sorun. Bu ayarlar olmadan devam edemezsiniz. Size gerekenler:</p>
	
	<ul>
		<li>Veritabanı Tipi - kullanacağınız veritabanı.</li>
		<li>Veritabanı sunucu adı ya da DSN - veritabanı sunucusunun adresi.</li>
		<li>Veritabanı sunucu portu - veritabanı sunucusunun portu (genellikle bu gerekli değildir).</li>
		<li>Veritabanı adı - sunucudaki veritabanının adı.</li>
		<li>Veritabanı kullanıcı adı ve Veritabanı şifresi - veritabanına erişim için giriş bilgileri.</li>
	</ul>
     
	<p><strong>Not:</strong> eğer kurulum yaparken SQLite kullanacaksanız, DSN alanına veritabanı dosyanıza ulaşan tam yolu girmelisiniz ve kullanıcı adı ile şifre alanlarını boş bırakmalısınız. Güvenlik sebeplerinden dolayı, veritabanı dosyasının web üzerinden erişilebilir bir konumda bulunmadığına emin olun.</p> 
     
	<p>phpBB3 alttaki veritabanlarını destekler:</p>
	<ul>
		<li>MySQL 3.23 veya üzeri (MySQLi destekli)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 veya üzeri (direkt olarak veya ODBC yoluyla)</li>
		<li>MS SQL Server 2005 veya üzeri (native)</li>
		<li>Oracle</li>
	</ul>
        
	<p>Sunucunuzda sadece bu desteklenen veritabanları görüntülenecektir.',
	'INSTALL_INTRO_NEXT'		=> 'Kurulumu başlatmak için, lütfen alttaki butona tıklayın.',
	'INSTALL_LOGIN'				=> 'Giriş',
	'INSTALL_NEXT'				=> 'Sonraki Adım',
	'INSTALL_NEXT_FAIL'			=> 'Bazı testler hatalı ve bir sonraki adıma geçmeden önce bu problemleri düzeltmelisiniz. Tamamlanamayan bir kurulumun sonucu başarısız olabilir.',
	'INSTALL_NEXT_PASS'			=> 'Tüm temel testler geçildi ve kurulumunuzun sonraki adımına ilerleyebilirsiniz. Eğer herhangi izinleri, modülleri, v.b. şeyleri değiştirdiyseniz ve tekrar test yapmak isterseniz bu şekilde yapabilirsiniz.',
	'INSTALL_PANEL'				=> 'Kurulum Paneli',
	'INSTALL_SEND_CONFIG'		=> 'Ne yazık ki phpBB, config.php dosyanıza direkt olarak ayar bilgilerini yazamıyor. Çünkü dosya bulunamıyor veya yazılamıyor olabilir. config.php dosyanızın yüklemesinin tamamlanması için altta, aktif edeceğiniz seçeneklerin bir sayısı listelenmiş olacaktır.',
	'INSTALL_START'				=> 'Kuruluma başla',
	'INSTALL_TEST'				=> 'Tekrar test et',
	'INST_ERR'					=> 'Kurulum hatası',
	'INST_ERR_DB_CONNECT'		=> 'Veritabanına bağlanılamıyor, hata mesajı için alta bakın.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Mesaj panosu dizin ağacınız içerisinde veritabanı dosyası belirlendi. Web erişim konumu olmayan bir yere bu dosyayı yerleştirmelisiniz.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Girdiğiniz önek hatalı. Önek, bir harf ile başlamalıdır ve sadece harfler, sayılar ve altçizgiler içermelidir.',
	'INST_ERR_DB_NO_ERROR'		=> 'Hiç bir hata mesajı belirlenmedi.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Bu makinede kurulu olan MySQL sürümü seçtiğiniz “MySQL ile MySQLi Uzantısı” seçeneği ile uyuşmuyor. Lütfen bunun yerine “MySQL” seçeneğini seçerek tekrar deneyin.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Kurulu olan SQLite uzantısı\'nın sürümü çok eski, en düşük 2.8.2 sürümüne güncellenmelidir.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Kurulu olan SQLite uzantısı\'nın sürümü çok eski, en düşük 3.6.15 sürümüne güncellenmelidir.',	
	'INST_ERR_DB_NO_ORACLE'		=> 'Bu makinede kurulu olan Oracle\'nin sürümünde <var>NLS_CHARACTERSET</var> parametresini <var>UTF8</var>\'e göre ayarlamanız gerekiyor. Kurulumunuzu 9.2+ sürümüne güncelleyin veya parametreyi değiştirin.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Seçtiğiniz veritabanı <var>UNICODE</var> veya <var>UTF8</var> kodlaması içerisinde oluşturulamadı. <var>UNICODE</var> veya <var>UTF8</var> kodlaması ile oluşturulmuş bir veritabanı ile kurmayı deneyin.',
	'INST_ERR_DB_NO_NAME'		=> 'Hiç bir veritabanı adı belirtilmedi.',
	'INST_ERR_EMAIL_INVALID'	=> 'Girdiğiniz e-posta adresi hatalı.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Girdiğiniz e-posta adresleri uyuşmuyor.',
	'INST_ERR_FATAL'			=> 'Tehlikeli kurulum hatası',
	'INST_ERR_FATAL_DB'			=> 'Tehlikeli ve düzeltilemez bir veritabanı hatası meydana geldi. Bu olabilir, çünkü belirlenen kullanıcı <code>CREATE TABLES</code> ya da <code>INSERT</code> verisi, v.b. için uygun izinlere sahip değildir. Daha fazla bilgiyi aşağıdan alabilirsiniz. Lütfen ilk önce hosting sağlayıcınız ile iletişime geçin ya da daha fazla yardımcı bilgi için phpBB\'nin destek forumlarını ziyaret edin.',
	'INST_ERR_FTP_PATH'			=> 'Belirlenen klasöre değişim yapılamıyor, lütfen dizini kontrol edin.',
	'INST_ERR_FTP_LOGIN'		=> 'FTP sunucuna giriş yapılamıyor, kullanıcı adı ve şifrenizi kontrol edin.',
	'INST_ERR_MISSING_DATA'		=> 'Bu bölümdeki tüm alanları doldurmalısınız.',
	'INST_ERR_NO_DB'			=> 'Seçilen veritabanı tipi için PHP modülü yüklenmedi.',
	'INST_ERR_PASSWORD_MISMATCH' => 'Girdiğiniz şifreler uyuşmuyor.',
	'INST_ERR_PASSWORD_TOO_LONG' => 'Girdiğiniz şifre çok uzun. En fazla uzunluk 30 karakter olmalıdır.',
	'INST_ERR_PASSWORD_TOO_SHORT' => 'Girdiğiniz şifre çok kısa. En az uzunluk 6 karakter olmalıdır.',
	'INST_ERR_PREFIX'			=> 'Belirtilen önek ile tablolar zaten bulunuyor, lütfen alternatif bir tane seçin.',
	'INST_ERR_PREFIX_INVALID'	=> 'Belirttiğiniz tablo öneki veritabanınız için doğru değil. Lütfen diğer fazla karakterleri ve tireleri silerek tekrar deneyin.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Belirttiğiniz tablo öneki çok uzun. En fazla %d karakter uzunluğunda olmalıdır.',
	'INST_ERR_USER_TOO_LONG'	=> 'Girdiğiniz kullanıcı adı çok uzun. En fazla 20 karakter uzunluğunda olmalıdır.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Girdiğiniz kullanıcı adı çok kısa. En az 4 karakter uzunluğunda olmalıdır.',
	'INVALID_PRIMARY_KEY'		=> 'Geçersiz birinci anahtar : %s',
	
 	'LONG_SCRIPT_EXECUTION'		=> 'Not: Bu biraz sürebilir... Lütfen sayfayı durdurmayın.',

	// mbstring
	'MBSTRING_CHECK'			=> '<samp>mbstring</samp> uzantısı kontrolü',
	'MBSTRING_CHECK_EXPLAIN'  => '<strong>Gerekli</strong> - <samp>mbstring</samp>, çoklu bayt dizisi fonksiyonu sağlayan bir PHP uzantısıdır. mbstring\'in bazı özellikleri phpBB ile uyumlu değildir ve kapalı olmalıdır',
	'MBSTRING_FUNC_OVERLOAD' => 'Aşırı yükleme fonksiyonu',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN' => '<var>mbstring.func_overload</var> 0 veya 4 olarak ayarlanmalıdır.',
	'MBSTRING_ENCODING_TRANSLATION' => 'Açık karakter kodlaması',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN' => '<var>mbstring.encoding_translation</var> 0 olarak ayarlanmalıdır.',
	'MBSTRING_HTTP_INPUT' => 'HTTP girdi karakter dönüşümü',
	'MBSTRING_HTTP_INPUT_EXPLAIN' => '<var>mbstring.http_input</var> <samp>izinli</samp> olarak ayarlanmalıdır.',
	'MBSTRING_HTTP_OUTPUT' => 'HTTP çıktı karakter dönüşümü',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN' => '<var>mbstring.http_output</var> <samp>izinli</samp> olarak ayarlanmalıdır.', 

	'MAKE_FOLDER_WRITABLE'		=> 'Lütfen bu dosyanın mevcut olduğuna ve web sunucusu tarafından yazılabilir olduğuna emin olup tekrar deneyin:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Lütfen bu dosyaların mevcut olduğuna ve web sunucusu tarafından yazılabilir olduğuna emin olup tekrar deneyin:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'   => 'phpBB için MySQL veritabanınızın şeması güncelliğini kaybetmiş. phpBB, MySQL 3.x/4.x için bir şema belirledi, fakat sunucu MySQL %2$s üzerinde çalışıyor.<br /><strong>Güncelleme işleminden önce, şemanızı güncellemeniz gerekmektedir.</strong><br /><br />Lütfen <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">MySQL şemasının güncellenmesi hakkında ki Bilgi Tabanı makalesi</a> sayfasına bakın. Eğer problemlerle karşılaşırsanız, lütfen <a href="https://www.phpbb.com/community/viewforum.php?f=466">destek forumlarımızı</a> kullanın.',

	'NAMING_CONFLICT'			=> 'Adlandırma uyuşmazlığı: %s ve %s farklı adlar<br /><br />%s',
	'NEXT_STEP'					=> 'Sonraki adıma ilerle',
	'NOT_FOUND'					=> 'Bulunamadı',
	'NOT_UNDERSTAND'			=> '%s #%d anlaşılmıyor, tablo %s (“%s”)',
	'NO_CONVERTORS'				=> 'Kullanım için mevcut hiç bir dönüştürücü yok.',
	'NO_CONVERT_SPECIFIED'		=> 'Hiç bir dönüştürücü belirtilmedi.',
	'NO_LOCATION'				=> 'Konumu tespit edilemedi. Eğer Imagemagick’in kurulu olduğunu biliyorsanız, daha sonra yönetim kontrol panelinizden konumunu belirleyebilirsiniz',
	'NO_TABLES_FOUND'			=> 'Hiç bir tablo bulunmadı.',

	'OVERVIEW_BODY'            => 'phpBB3’e hoşgeldiniz!<br /><br />phpBB® dünyadaki açık kaynak mesaj panosu çözümlerinin en yaygın olarak kullanılanıdır. phpBB3 2000 yılında başlayan bir paket dizisinin en son bölümüdür. Bunlardan önce phpBB3 zengin özellikli, kullanıcı dostu, ve phpBB Takımı tarafından tam desteklenen bir yazılımdır. phpBB3, phpBB2\'de yapılanlardan daha çok geliştirilmiştir, önceki sürümlerde bulunmayan popüler ve genellikle istenilen özellikler eklenmiştir. Umarız beklentilerinizi fazlasıyla karşılar.<br /><br />Bu kurulum sistemi phpBB3 kurulumu yaparken, geçmiş bir sürümden phpBB3’ün son sürümüne güncelleme yaparken, hem de farklı bir mesaj panosu sisteminden phpBB3’e dönüşüm yaparken (phpBB2 dahil) size rehberlik edecektir. Daha fazla bilgi için, sizi <a href="../docs/INSTALL.html">kurulum rehberini</a> okumaya teşvik ediyoruz.<br /><br />phpBB3 lisansını okumak için ya da destek almak hakkında bilgileri ve bizim bu konuda tutumlarımızı öğrenmek için, lütfen yan menüden ilgili seçenekleri seçin. Devam etmek için, lütfen yukarıdan uygun bir sekme seçin.',
	
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 desteği',
 	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'Eğer PHP kurulumunuz PCRE uzantısı içinde UTF-8 desteği ile derlenmediyse phpBB <strong>çalışmayacaktır</strong>.',
 	'PHP_GETIMAGESIZE_SUPPORT'     => 'PHP getimagesize() fonksiyonu mevcut', 
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN' => '<strong>Gerekli</strong> - phpBB’nin düzgün bir şekilde çalışması için, getimagesize fonksiyonu mevcut olmalıdır.',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON desteği',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Gerekli</strong> - phpBB’nin düzgün bir şekilde çalışması için, PHP JSON uzantısının mevcut olması gereklidir.',	
	'PHP_OPTIONAL_MODULE'			=> 'İsteğe bağlı modüller',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>İsteğe Bağlı</strong> - Bu modüller veya uygulamalar isteğe bağlıdır. Fakat, eğer bunlar mevcutsa ekstra özellikler aktif olacaktır.',
	'PHP_SUPPORTED_DB'				=> 'Desteklenen veritabanları',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Gerekli</strong> - PHP için uyumlu en düşük bir veritabanı desteğine sahip olmalısınız. Eğer mevcut görünen veritabanı modülleri yoksa hosting sağlayıcınız ile iletişime geçin ya da konu ile ilgili tavsiyeler için PHP kurulum dokümanını inceleyin.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP ayarı "register_globals" aktif değil',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'Eğer bu ayar aktifse phpBB çalışacaktır, fakat eğer mümkünse, güvenlik sebepleri için PHP kurulumunuzdan bu register_globals ayarını deaktif etmenizi öneriyoruz.',
	'PHP_SAFE_MODE'					=> 'Güvenli mod',
	'PHP_SETTINGS'					=> 'PHP sürümü ve ayarları',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Gerekli</strong> - phpBB kurulumu için en düşük PHP sürümünüz 5.3.3 olmalıdır. Eğer altta "güvenli mod" görünüyorsa PHP kurulumunuz bu modda çalışmaktadır. Bu, uzaktan yönetim ve benzer özelliklerde sınırlama getirecektir.',
	'PHP_URL_FOPEN_SUPPORT'     => 'PHP <var>allow_url_fopen</var> ayarı açık', 
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN' => '<strong>İsteğe Bağlı</strong> - Bu ayar isteğe bağlıdır, fakat site dışı avatarlar gibi bazı phpBB özellikleri bu olmadan düzgün bir şekilde çalışmayacaktır.',
	'PHP_VERSION_REQD'				=> 'PHP sürümü >= 5.3.3',
	'POST_ID'						=> 'Mesaj ID numarası',
	'PREFIX_FOUND'					=> 'Tablolarınızda yapılan tarama sırasında, geçerli bir kurulum için <strong>%s</strong> adında bir tablo öneki kullanıldığı görüldü.',
	'PREPROCESS_STEP'				=> 'Özelliklerin/sorguların ön-işlemi yapılıyor',
	'PRE_CONVERT_COMPLETE'			=> 'Tüm ön-dönüştürme adımları başarıyla tamamlandı. Şimdi gerçek dönüştürme işlemine başlayabilirsiniz. Not: Yapılması gerekli diğer şeyleri elle ayarlayabilirsiniz. Dönüşümden sonra, özellikle tanımlı izinleri kontrol edin, eğer arama indeksiniz dönüştürülmediyse yeniden oluşturun ve ayrıca dosyaların (örneğin, avatarlar ve ifadeler) doğru şekilde kopyalandığına emin olun.',
	'PROCESS_LAST'					=> 'Son rapor işlemi',

	'REFRESH_PAGE'				=> 'Dönüşüme devam etmek için sayfayı yenile',
 	'REFRESH_PAGE_EXPLAIN'		=> 'Eğer evet olarak ayarlanırsa, dönüşüme devam etmek için bir adım tamamlandıktan sonra dönüştürücü sayfayı yenileyecektir. Eğer bu, önceden meydana gelen herhangi bir hatayı saptamak için ve test amaçlı ilk dönüşümünüz ise, bunu hayır olarak ayarlamanızı öneririz.',
	'REQUIREMENTS_TITLE'		=> 'Kurulum uyumluluğu',
	'REQUIREMENTS_EXPLAIN'		=> 'phpBB’nin tam kurulum işlemine devam edilmeden önce sunucu ayarlarınızda ve dosyalarınızda bazı testler yapılacaktır, bunlar sağlandıktan sonra phpBB’yi kurabilir ve çalıştırabilirsiniz. Lütfen sonuçları baştan sona tamamen okuyun ve gerekli testler geçilene kadar ilerlemeyin. Eğer bağlı olan özelliklerin herhangi birini isteğe bağlı testlerde kullanmak istiyorsanız, ayrıca bu testlerinde geçilmesini sağlamalısınız.',
	'RETRY_WRITE'				=> 'Tekrar config.php dosyasına yazmayı dene',
	'RETRY_WRITE_EXPLAIN'		=> 'Eğer isterseniz config.php dosyasının izinlerini phpBB’nin yazabilmesi için değiştirebilirsiniz. Bunu yaptıktan sonra alttaki Tekrar dene butonuna tıklamalısınız. phpBB kurulumu bittikten sonra config.php dosyasının izinlerini eski haline getirmeyi unutmayın.',

	'SCRIPT_PATH'				=> 'Script yolu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Alan adına göre phpBB’nin ilgili konum yolu, ör: <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Dil seç',
	'SERVER_CONFIG'				=> 'Sunucu ayarları',
 	'SEARCH_INDEX_UNCONVERTED'	=> 'Arama indeksi dönüştürülemedi',
 	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Eski arama indeksiniz dönüştürülemedi. Aramalar daima boş bir sonuç verecektir. Yeni bir arama indeksi oluşturmak için Yönetim Kontrol Paneline gidin, Bakım bölümünü seçin ve oradaki alt menüdende Arama indeksini seçin.',
	'SELECT_FORUM_GA'			=> 'phpBB 3.1’de global duyurular forumlara bağlantılıdır. Şu anki global duyurularınız için bir forum seçin (daha sonra taşınabilir):',	
	'SOFTWARE'					=> 'Mesaj panosu yazılımı',
	'SPECIFY_OPTIONS'			=> 'Dönüştürme seçeneklerini belirle',
	'STAGE_ADMINISTRATOR'		=> 'Yönetici bilgileri',
	'STAGE_ADVANCED'			=> 'Gelişmiş ayarlar',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Eğer varsayılandan farklı şeylerin kesinlikle ayarlanması gerektiğini biliyorsanız bu sayfadaki ayarları yapın. Eğer şüpheliyseniz, sadece sonraki sayfaya ilerleyin, bu ayarlar daha sonra Yönetici Kontrol Panelinden değiştirilebilir.',
	'STAGE_CONFIG_FILE'			=> 'Ayar dosyası',
	'STAGE_CREATE_TABLE'		=> 'Veritabanı tabloları oluştur',
	'STAGE_CREATE_TABLE_EXPLAIN' 	=> 'phpBB 3.1 tarafından kullanılan veritabanı tabloları oluşturuldu ve bir kısım önceki veriyle beraber yerleştirildi. phpBB kurulumunu bitirmek için sonraki ekrana ilerleyin.',
	'STAGE_DATABASE'			=> 'Veritabanı ayarları',
	'STAGE_FINAL'				=> 'Final aşaması',
	'STAGE_INTRO'				=> 'Giriş',
	'STAGE_IN_PROGRESS'			=> 'Dönüşüm işlemi',
	'STAGE_REQUIREMENTS'		=> 'Gerekenler',
	'STAGE_SETTINGS'			=> 'Ayarlar',
	'STARTING_CONVERT'			=> 'Dönüştürme işlemine başlanıyor',
	'STEP_PERCENT_COMPLETED'	=> 'Adım <strong>%d</strong> / <strong>%d</strong>',
	'SUB_INTRO'					=> 'Giriş',
	'SUB_LICENSE'				=> 'Lisans',
	'SUB_SUPPORT'				=> 'Destek',
	'SUCCESSFUL_CONNECT'		=> 'Bağlantı başarılı',
	'SUPPORT_BODY'            => 'phpBB3’ün şu anki sabit sürümü için ücretsiz, tam destek sağlanacaktır. Destek, şu konuları kapsar:</p><ul><li>kurulum</li><li>ayarlar</li><li>teknik sorular</li><li>yazılımdaki olası hatalara bağlı problemler</li><li>Release Candidate (RC) sürümlerinden son sabit sürüme güncelleme</li><li>phpBB 2.0.x sürümlerinden phpBB3 sürümüne dönüştürme</li><li>diğer mesaj panosu yazılımlarından phpBB3’e dönüştürme (lütfen <a href="https://www.phpbb.com/community/viewforum.php?f=486">Dönüştürücüler Forumuna</a> bakın)</li></ul><p>Hala phpBB3’ün beta sürümlerini kullanan kullanıcıların kurulumlarını, son sürümün yeni kopyası ile değiştirmeye teşvik ediyoruz.</p><h2>Eklentiler / Stiller</h2><p>Eklentiler ile ilgili sorunlar için, lütfen uygun olan <a href="https://www.phpbb.com/community/viewforum.php?f=451">Uzantılar Forumuna</a> mesaj gönderin.<br />Stiller, temalar ve şablonlar ile ilgili sorunlar için, lütfen uygun olan <a href="https://www.phpbb.com/community/viewforum.php?f=471">Stiller Forumuna</a> mesaj gönderin.<br /><br />Eğer belirli bir pakete bağlı sorunuz varsa, lütfen direkt olarak paket için belirlenmiş başlığa mesaj gönderin.</p><h2>Destek Alma</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB Hoşgeldiniz Paketi</a><br /><a href="https://www.phpbb.com/support/">Destek Bölümü</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Kolay Başlangıç Rehberi</a><br /><br />Son haberler ve yayınlanan sürümler ile güncel kaldığınıza emin olmak için, neden <a href="https://www.phpbb.com/support/">e-posta listemize abone olmuyorsunuz</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Forumların eşleştirilmesine başlanıyor',
	'SYNC_POST_COUNT'         => 'post_counts senkronize ediliyor',
	'SYNC_POST_COUNT_ID'      => 'post_counts %1$s <var>girdisinden</var> %2$s <var>girdisine</var> senkronize ediliyor.',
	'SYNC_TOPICS'				=> 'Başlıkların eşleştirilmesine başlanıyor',
	'SYNC_TOPIC_ID'				=> '%1$s <var>topic_id</var> değerinden %2$s değerine başlıklar senkronize ediliyor.',

	'TABLES_MISSING'			=> 'Bu tablolar bulunamıyor<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Veritabanındaki tablolar için önek',
	'TABLE_PREFIX_EXPLAIN'		=> 'Önek, bir harf ile başlamalıdır ve sadece harfler, sayılar ve altçizgiler içermelidir.',	
	'TABLE_PREFIX_SAME'			=> 'Dönüştüreceğiniz yazılım tarafından kullanılan bir tablo öneki olmalıdır.<br />» Belirtilen tablo öneki %s.',
	'TESTS_PASSED'				=> 'Testler geçildi',
	'TESTS_FAILED'				=> 'Testler hatalı',

	'UNABLE_WRITE_LOCK'			=> 'Kilitli dosyaya yazılamıyor.',
	'UNAVAILABLE'				=> 'Mevcut değil',
	'UNWRITABLE'				=> 'Yazılabilir değil',
	'UPDATE_TOPICS_POSTED'   => 'Başlıklara gönderilen mesaj bilgileri oluşturuluyor',
	'UPDATE_TOPICS_POSTED_ERR'      => 'Başlıklara gönderilen mesaj bilgileri oluşturulurken bir hata meydana geldi. Dönüşüm işlemi tamamlandıktan sonra YKP içerisinden bu adımı tekrar deneyebilirsiniz.',
	'VERIFY_OPTIONS'         => 'Dönüştürme ayarları doğrulanıyor',
	'VERSION'					=> 'Sürüm',

	'WELCOME_INSTALL'			=> 'phpBB3 Kurulumuna Hoşgeldiniz',
	'WRITABLE'					=> 'Yazılabilir',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Tüm dosyalar son phpBB sürümü ile güncel.',
	'ARCHIVE_FILE'				=> 'Arşiv içinde kaynak dosya',

	'BACK'				=> 'Geri',
	'BINARY_FILE'		=> 'İkili dosya',
	'BOT'				=> 'Örümcek/Robot',
  
 	'CHANGE_CLEAN_NAMES'			=> 'Kullanılan metot, çoklu kullanıcılar tarafından kullanılmayan emin olunan bir kullanıcı adına değiştirildi. Yeni metot ile karşılaştırıldığı zaman bazı kullanıcılar aynı ada sahip oldular. İşleme başlamadan önce bu kullanıcıları emin olduğunuz her adı sadece bir kullanıcı tarafından kullanılacak şekilde yeniden adlandırın ya da silin.',
	'CHECK_FILES'					=> 'Dosyaları kontrol et',
	'CHECK_FILES_AGAIN'				=> 'Dosyaları tekrar kontrol et',
	'CHECK_FILES_EXPLAIN'			=> 'Sonraki adım içerisinde tüm dosyalar güncellenen dosyalara karşı kontrol edilecektir - eğer bu ilk dosya kontrolü ise biraz zaman alabilir.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Veritabanınız için uygun olan son sürümünüz güncel. İsterseniz son phpBB sürümü ile tüm dosyaların gerçekten güncellendiğine emin olmak için dosya kontrolü ile ilerleyebilirsiniz.',
	'CHECK_UPDATE_DATABASE'			=> 'Güncelleme işlemine devam et',
	'COLLECTED_INFORMATION'         => 'Dosya bilgisi',
	'COLLECTED_INFORMATION_EXPLAIN'=> 'Alttaki listede bir güncelleme yapılması gereken dosyalar hakkında bilgiler gösterilmektedir. Lütfen her durum bloğunun ön yüzündeki bilgileri okuyup ne demek istediklerine ve başarılı bir güncelleme için ne yapabilmeniz gerektiğine bakın.',
	'COLLECTING_FILE_DIFFS'         => 'Dosya farklılıkları toplanıyor',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Şimdi <a href="../ucp.php?mode=login">mesaj panonuza giriş yapmalısınız</a> ve herşeyin iyi çalıştığını kontrol etmelisiniz. install klasörünüzü silmeyi, yeniden adlandırmayı veya taşımayı unutmayın!',
	'CONTINUE_UPDATE_NOW'			=> 'Güncelleme işlemine şimdi devam et',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Güncellemeye şimdi devam et',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'               => 'Uyuşmazlığın başlangıcı - Güncellemeden önceki Orijinal Dosya kodu',
	'CURRENT_VERSION'				=> 'Şu anki sürüm',

	'DATABASE_TYPE'						=> 'Veritabanı tipi',
	'DATABASE_UPDATE_COMPLETE'			=> 'Veritabanı güncelleyici tamamlandı!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Veritabanı güncellemesine devam et',	
	'DATABASE_UPDATE_INFO_OLD'			=> 'install dizini içerisindeki veritabanı güncelleme dosyası güncel değil. Lütfen dosyanın geçerli sürümünü yüklediğinize emin olun.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Veritabanı güncellemesi henüz tamamlanmadı.',	
 	'DELETE_USER_REMOVE'				=> 'Kullanıcıyı sil ve mesajları kaldır',
 	'DELETE_USER_RETAIN'				=> 'Kullanıcıyı sil fakat mesajları tut',
	'DESTINATION'						=> 'Gidilecek dosya',
	'DIFF_INLINE'						=> 'Satır içi',
	'DIFF_RAW'							=> 'Ham karşılaştırmayı birleştir',
	'DIFF_SEP_EXPLAIN'               => 'Güncellenen/yeni dosya içerisinde kullanılan kod bloğu',
	'DIFF_SIDE_BY_SIDE'					=> 'Yan yana',
	'DIFF_UNIFIED'						=> 'Karşılaştırmayı birleştir',
	'DO_NOT_UPDATE'						=> 'Bu dosyayı güncelleme',
	'DONE'								=> 'Bitti',
	'DOWNLOAD'							=> 'İndir',
	'DOWNLOAD_AS'						=> 'Farklı indir',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'      => 'Düzenlenen dosyalar arşivini indir (önerilen)',
	'DOWNLOAD_CONFLICTS'            => 'Bu dosya için uyuşmazlıkları indir',
	'DOWNLOAD_CONFLICTS_EXPLAIN'      => 'Farkedilen uyuşmazlıklar için &lt;&lt;&lt; ara',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Düzenlenen dosyalar arşivini indir',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'İndirme işlemini tamamladıktan sonra arşivi açın. Arşivin içerisinde phpBB ana dizininize yüklemeniz gereken değiştirilmiş dosyaları bulacaksınız. Lütfen dosyaları ait olan yerlerine yükleyin. Tüm dosyaları yükledikten sonra, lütfen aşağıdaki ilgili diğer butonu kullanarak dosyaları tekrar kontrol edin.',

 	'EDIT_USERNAME'	=> 'Kullanıcı adını düzenle',
	'ERROR'			=> 'Hata',
	'EVERYTHING_UP_TO_DATE'		=> 'Her şey son phpBB sürümü ile güncel. Şimdi <a href="%1$s">mesaj panonuza giriş</a> yapmalısınız ve herşeyin iyi çalıştığını kontrol etmelisiniz. install klasörünüzü silmeyi, yeniden adlandırmayı veya taşımayı unutmayın! Lütfen sunucunuz hakkındaki güncel bilgileri ve mesaj panosu konfigrasyonunuzu YKP’nizdeki <a href="%2$s">İstatistikleri gönder</a> modülünü kullanarak bize gönderin.',	

	'FILE_ALREADY_UP_TO_DATE'		=> 'Dosya zaten güncel.',
	'FILE_DIFF_NOT_ALLOWED'   => 'Dosya, karşılaştırma yapmaya izinli değil.',
	'FILE_USED'						=> 'Şuradan bilgi kullanıldı',			// Single file
	'FILES_CONFLICT'				=> 'Uyuşmayan dosyalar',
	'FILES_CONFLICT_EXPLAIN'		=> 'Aşağıdaki dosyalarda siz ya da başka bir yönetici tarafından daha önce değişiklik yapılmıştır ve eski phpBB sürümünün orijinal dosyaları ile aynı değildir (Bu durum genelde MOD/Eklenti kurulumlarında ortaya çıkar). phpBB, bu dosyalar eğer birleşmeyi denerlerse uyuşmazlıkların meydana geleceğini belirledi. Lütfen uyuşmazlıkları inceleyin ve elle onları düzeltmeyi deneyin ya da size sunulan bir birleştirme metotu seçerek güncellemeye devam edin. Eğer uyuşmazlıkları elle çözdüyseniz, dosyalarda değişiklik yaptıktan sonra tekrar dosya kontrolü yapın. Ayrıca her dosya için sunulan birleştirme metotları arasında seçim yapabilirsiniz. Bu metotlardan birincisini seçerseniz eski dosyanızdaki uyuşmaz satırlar silinerek yeni bir dosya oluşturulacaktır, diğerini seçtiğinizde ise yeni dosya için yapılacak değişiklikler uygulanmayacaktır.',
	'FILES_DELETED'					=> 'Silinen dosyalar',
	'FILES_DELETED_EXPLAIN'			=> 'Aşağıdaki dosyalar yeni sürümde mevcut değildir. Bu dosyaların kurulumunuzdan silinmiş olması gerekmektedir.',	
	'FILES_MODIFIED'				=> 'Düzenlenmiş dosyalar',
	'FILES_MODIFIED_EXPLAIN'		=> 'Aşağıdaki dosyalarda siz ya da başka bir yönetici tarafından daha önce değişiklik yapılmıştır ve eski phpBB sürümünün orijinal dosyaları ile aynı değildir (Bu durum genelde MOD/Eklenti kurulumlarında ortaya çıkar). Yaptığınız bu değişiklikler ile yeni dosya için yapılacak değişiklikler birleştirilerek güncel bir dosya oluşturulacaktır.',
	'FILES_NEW'						=> 'Yeni dosyalar',
	'FILES_NEW_EXPLAIN'				=> 'Aşağıdaki dosyalar şu anki kurulumunuz içerisinde mevcut değil. Bu dosyalar kurulumunuza eklenecektir.',
	'FILES_NEW_CONFLICT'			=> 'Yeni uyuşmayan dosyalar',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Aşağıdaki dosyalar son sürüm içerisindeki yeni dosyalardır, fakat aynı konumda ve aynı isimde zaten bir dosyanın var olduğu belirlendi. Yeni dosya, bu dosyanın üzerine yazılarak değiştirilecektir.',
	'FILES_NOT_MODIFIED'			=> 'Düzenlenmemiş dosyalar',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Aşağıdaki dosyalarda siz ya da başka bir yönetici tarafından daha önce hiç bir değişiklik yapılmamıştır ve güncellemek istediğiniz eski phpBB sürümünün orijinal dosyaları ile aynıdır.',
	'FILES_UP_TO_DATE'				=> 'Zaten güncellenmiş dosyalar',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Aşağıdaki dosyalar zaten güncel ve güncelleme yapılmalarına gerek yok.',
	'FTP_SETTINGS'					=> 'FTP ayarları',
	'FTP_UPDATE_METHOD'				=> 'FTP yüklemesi',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Kurulu olan sürümünüz ile uyuşmayan güncelleme dosyaları bulundu. Kurulu olan sürümünüz %1$s ve güncelleme dosyası phpBB %2$s sürümünden %3$s sürümüne güncellemek içindir.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Dosyaların güncellenmesi tamamlanmadı.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Veritabanı başarıyla güncellendi. Şimdi güncelleme işlemine devam etmelisiniz.',

	'KEEP_OLD_NAME'		=> 'Kullanıcı adını tut',

	'LATEST_VERSION'		=> 'Son sürüm',
	'LINE'					=> 'Satır',
	'LINE_ADDED'			=> 'Eklendi',
	'LINE_MODIFIED'			=> 'Değiştirildi',
	'LINE_REMOVED'			=> 'Silindi',
	'LINE_UNMODIFIED'		=> 'Değiştirilmedi',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Kurulumunuzu güncelleştirmek için ilk önce giriş yapmalısınız.',

	'MAPPING_FILE_STRUCTURE'	=> 'Burada, kolay bir yükleme yapabilmeniz için phpBB kurulumunuzdaki dosya yerlerinin haritası gösterilmektedir.',
 
 	'MERGE_MODIFICATIONS_OPTION'	=> 'Değişiklikleri birleştir',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Birleştirme - yeni dosyayı kullan',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Birleştirme - şu an yüklü olan dosyayı kullan',
	'MERGE_MOD_FILE_OPTION'      => 'Değişiklikleri birleştir (Uyuşmazlık bloğu içindeki yeni phpBB kodu silinir)',
	'MERGE_NEW_FILE_OPTION'      => 'Değişiklikleri birleştir (Uyuşmazlık bloğu içindeki değiştirilmiş kod silinir)',
	'MERGE_SELECT_ERROR'		=> 'Uyuşmayan dosya birleştirme modları doğru olarak seçilmedi.',
	'MERGING_FILES'            => 'Farklılıkları birleştir',
	'MERGING_FILES_EXPLAIN'      => 'Şu an son dosya değişiklikleri toplanıyor.<br /><br />Lütfen phpBB, değiştirilen dosyalar üzerindeki tüm işlemleri tamamlayana kadar bekleyin.',

	'NEW_FILE'						=> 'Uyuşmazlığın sonu',
	'NEW_USERNAME'					=> 'Yeni kullanıcı adı',
	'NO_AUTH_UPDATE'				=> 'Güncellemek için yetki yok',
	'NO_ERRORS'						=> 'Hata yok',
	'NO_UPDATE_FILES'				=> 'Aşağıdaki dosyalar güncellenmedi',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Aşağıdaki dosyalar yeni veya değiştirilmiş, fakat bu dosyaların normalde bulunması gereken dizinler kurulumunuzda bulunmuyor. Eğer bu liste lanugage/ ya da styles/ klasörlerinden başka diğer dizindeki dosyaları içeriyorsa o zaman dizin yapınızı değiştirmiş olabilirsiniz ve güncelleme tamamlanmayabilir.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Geçerli güncelleme klasörü bulunamadı, lütfen ilgili dosyaları yüklediğinize emin olun.<br /><br />Kurulumunuz güncel olarak <strong>görünmüyor</strong>. Sürümünüz için phpBB’nin %1$s güncellemesi mevcut, lütfen %2$s sürümünden %3$s sürümüne güncelleme yapmak için <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> sayfasını ziyaret ederek uygun paketi alın.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'phpBB sürümünüz güncel. Güncelleme aracını çalıştırmanıza gerek yok. Eğer dilerseniz doğru güncelleme dosyalarını yüklediğinize emin olmak için dosyalarınızda bir doğrulama kontrolü yapabilirsiniz.',
	'NO_UPDATE_INFO'				=> 'Güncelleme dosya bilgileri bulunamadı.',
	'NO_UPDATES_REQUIRED'			=> 'Gerekli güncelleme yok',
	'NO_VISIBLE_CHANGES'			=> 'Görünen hiç bir değişiklik yok',
	'NOTICE'						=> 'Uyarı',
	'NUM_CONFLICTS'					=> 'Uyuşmazlıkların sayısı',
	'NUMBER_OF_FILES_COLLECTED'      => 'Şu anda %2$d dosyadan %1$d tanesinin farklılıkları kontrol edildi.<br />Lütfen tüm dosyalar kontrol edilene kadar bekleyin.',

	'OLD_UPDATE_FILES'              => 'Güncelleme dosyaları eski. phpBB %1$s sürümünden phpBB %2$s sürümüne güncelleme yapmak için güncelleme dosyaları bulundu fakat phpBB\'nin son sürümü %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Sürüm için şu anki paket güncellemeleri',
	'PERFORM_DATABASE_UPDATE'			=> 'Veritabanı güncellemesi yap',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Aşağıda veritabanı güncelleme sayfası için bir buton bulacaksınız. Veritabanı güncellemesi biraz zaman alabilir, bu yüzden eğer askıda kalmış gibi görünüyorsa lütfen işlemi durdurmayın. Veritabanı güncelleme işleminden sonra güncelleme işlemine devam etmek için sadece açıklamaları takip edin.',
	'PREVIOUS_VERSION'					=> 'Önceki sürüm',
	'PROGRESS'							=> 'İlerleme',

	'RELEASE_ANNOUNCEMENT'		=> 'Duyuru',	
	'RESULT'					=> 'Sonuç',
	'RUN_DATABASE_SCRIPT'		=> 'Veritabanımı şimdi güncelle',

	'SELECT_DIFF_MODE'			=> 'Farklılık modu seçin',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Arşiv indirme formatı seç',
	'SELECT_FTP_SETTINGS'		=> 'FTP ayarlarını seç',
	'SHOW_DIFF_CONFLICT'		=> 'Farklılıkları/uyuşmazlıkları göster',
	'SHOW_DIFF_DELETED'			=> 'Dosya içeriklerini göster',	
	'SHOW_DIFF_FINAL'			=> 'Dosya sonucunu göster',
	'SHOW_DIFF_MODIFIED'		=> 'Birleştirilen farklılıkları göster',
	'SHOW_DIFF_NEW'				=> 'Dosya içeriklerini göster',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Farklılıkları göster',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Farklılıkları göster',
	'SOME_QUERIES_FAILED'		=> 'Bazı sorgular hatalı, raporlar ve hatalar aşağıda listelenmiştir.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Endişe etmenize gerek yok bunun olması muhtemeldir, güncelleme devam edecektir. Bu hatanın devam etmesi durumunda destek forumlarımızda yardım araştırması yapabilirsiniz. Nasıl tavsiye alınması konusunda bilgiler için <a href="../docs/README.html">BENİ OKU</a> dosyasına bakın.',
	'STAGE_FILE_CHECK'			=> 'Dosya kontrolü',
	'STAGE_UPDATE_DB'			=> 'Veritabanı güncellemesi',
	'STAGE_UPDATE_FILES'		=> 'Dosya güncellemesi',
	'STAGE_VERSION_CHECK'		=> 'Sürüm kontrolü',
	'STATUS_CONFLICT'			=> 'Uyuşmazlıklar doğuran değiştirilmiş dosya',
	'STATUS_DELETED'			=> 'Silinmiş dosya',	
	'STATUS_MODIFIED'			=> 'Değiştirilmiş dosya',
	'STATUS_NEW'				=> 'Yeni Dosya',
	'STATUS_NEW_CONFLICT'		=> 'Yeni dosya uyuşmazlığı',
	'STATUS_NOT_MODIFIED'		=> 'Değiştirilen dosya yok',
	'STATUS_UP_TO_DATE'			=> 'Dosya zaten güncellendi',

	'TOGGLE_DISPLAY'         => 'Dosya listesini göster/gizle',
	'TRY_DOWNLOAD_METHOD'      => 'Düzenlenen dosyaları indirme metodunu denemek isteyebilirsiniz.<br />Bu metot her zaman çalışmaktadır ve ayrıca önerilen güncelleme yoludur.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Bu metodu şimdi dene',

	'UPDATE_COMPLETED'				=> 'Güncelleme tamamlandı',
	'UPDATE_DATABASE'				=> 'Veritabanı güncellemesi',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Sonraki adım içerisinde veritabanı güncellenecektir.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Veritabanı şeması güncelleniyor',
	'UPDATE_FILES'					=> 'Dosya güncellemesi',
	'UPDATE_FILES_NOTICE'			=> 'Lütfen mesaj panosu dosyalarınızı da güncellediğinize emin olun, bu dosya sadece veritabanınızı günceller.',
	'UPDATE_INSTALLATION'			=> 'phpBB kurulum güncelleştirmesi',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Bu seçenek ile, phpBB kurulumunuzu son sürüme güncellemek mümkündür.<br />İşlem sırasında doğruluk için tüm dosyalarınız kontrol edilecektir. Güncellemeden önce tüm farklılıkları ve dosyaları inceleyebilirsiniz.<br /><br />Dosya güncellemesi iki farklı yolla yapılabilir.</p><h2>Elle Güncelleme</h2><p>Bu seçenek ile dosya değişikliklerinizi kaybetmediğinize emin olmak için sadece değişecek dosyaları indirerek kişisel olarak ayarlayıp yapabilirsiniz. Bu paketi indirdikten sonra phpBB ana dizininizin altındaki doğru pozisyonlara elle yükleme yapmalısınız. İşlem tamamlanmadan önce, eğer dosyaları doğru yerlerine taşıdıysanız tekrar dosya kontrol bölümünden yapılanları görebileceksiniz.</p><h2>FTP ile Otomatik Güncelleme</h2><p>Bu metot ilkine benzer fakat değişecek dosyaları indirmenize ve onları kendinizin güncellemesine gerek yoktur. Bu sizin için yapılacaktır. Bu metotu kullanmak için size sorulacağından FTP giriş bilgilerini bilmeniz gerekmektedir. İşlem bitmeden önce herşeyin doğru olarak güncellendiğine emin olmak için tekrar dosya kontrolüne yönlendirileceksiniz.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Sürüm duyurusu</h1>

		<p>Güncelleme işleminize başlamadan önce lütfen son sürüm için sürüm duyurusunu okuyun. Bu duyuru yararlı bilgiler içerebilir. Sürüm duyurusu ayrıca tüm indirme bağlantılarını ve değişiklik kayıtlarını içermektedir.</p>

		<br />

		<h1>Otomatik Güncelleme Paketi ile kurulumunuz nasıl güncelleştirilir?</h1>

		<p>Burada listelenen önerilen kurulum güncelleştirmesi sadece otomatik güncelleme paketi için geçerlidir. Ayrıca kurulumunuzu INSTALL.html belgesi içerisinde belirtilen metotları kullanarakta güncelleyebilirsiniz. Otomatik phpBB3 güncellemesi için takip edilecek adımlar:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com indirme sayfasına</a> gidin ve "Otomatik Güncelleme Paketi" arşivini indirin.<br /><br /></li>
			<li>Arşivi açın.<br /><br /></li>
			<li>phpBB ana dizininize (config.php dosyanızın bulunduğu dizin) sıkıştırılmamış "install" ve "vendor" klasörlerinin tamamını yükleyin.<br /><br /></li>
		</ul>

		<p>Mesaj panonuz, şu anda yüklediğiniz mevcut install klasörünün yükleme işlemi sırasında ve işlem bittikten sonra normal kullanıcılar için çevrimdışı olacaktır.<br /><br />
		<strong><a href="%1$s" title="%1$s">Şimdi install klasörüne tarayıcınız ile giderek güncelleme işlemine başlayın</a>.</strong><br />
		<br />
		Güncelleme işlemi sırasında size rehberlik edilecektir. Güncelleme tamamlandığında ise bildiri alacaksınız.
		</p>
	',
	'UPDATE_METHOD'					=> 'Güncelleme metodu',
	'UPDATE_METHOD_EXPLAIN'			=> 'Şimdi güncelleme metodu tercihinizi seçebilirsiniz. FTP yüklemesi kullanıldığında size bir form gösterilecektir, buraya FTP hesap bilgilerinizi girmeniz gerekmektedir. Bu metot ile dosyalar yeni yerlerine otomatik olarak taşınacaktır ve dosya adlarına .bak uzantısı ilave edilerek eski dosyalarınızın yedekleri oluşturulacaktır. Eğer düzenlenmiş dosyaları indirmeyi seçtiyseniz dosyaları açıp daha sonra doğru yerlerine elle yükleyebilirsiniz.',
	'UPDATE_REQUIRES_FILE'			=> 'Güncelleyici şu dosyayı istiyor: %s',
	'UPDATE_SUCCESS'				=> 'Güncelleme başarıyla yapıldı',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Tüm dosyalar başarıyla güncellendi. Sonraki adımda, dosyaların doğru bir şekilde güncellendiğinden emin olmak için tüm dosyalar tekrar kontrol edilecektir.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Sürüm güncelleniyor ve tablolar optimize ediliyor',
	'UPDATING_DATA'					=> 'Veri güncelleniyor',
	'UPDATING_TO_LATEST_STABLE'		=> 'Veritabanı en son sabit sürüme güncelleniyor',
	'UPDATED_VERSION'				=> 'Güncellenen sürüm',
	'UPLOAD_METHOD'					=> 'Yükleme metodu',

	'UPDATE_DB_SUCCESS'				=> 'Veritabanı güncellemesi başarıyla yapıldı.',
	'UPDATE_FILE_SUCCESS'			=> 'Dosya güncellemesi başarıyla yapıldı.',	
	'USER_ACTIVE'					=> 'Aktif kullanıcı',
	'USER_INACTIVE'					=> 'Aktif olmayan kullanıcı',

	'VERSION_CHECK'				=> 'Sürüm kontrolü',
	'VERSION_CHECK_EXPLAIN'			=> 'phpBB kurulumunuzun güncelliğini buradan kontrol edebilirsiniz.',
	'VERSION_NOT_UP_TO_DATE'		=> 'phpBB kurulumunuz güncel değil. Lütfen güncelleme işlemine devam edin.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'phpBB kurulumunuz güncel değil.<br />Aşağıdaki bağlantıdan güncelleme işlemleriyle ilgili daha fazla bilgi alabileceğiniz sürüm yayınlama duyurularına ulaşabilirsiniz.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'phpBB kurulumunuz güncel değil.',
	'VERSION_UP_TO_DATE'			=> 'phpBB kurulumunuz güncel. Şu anda herhangi bir güncelleme mevcut değil, isterseniz bir dosya doğrulaması kontrolü için devam edebilirsiniz.',
	'VERSION_UP_TO_DATE_ACP'		=> 'phpBB kurulumunuz güncel. Şu anda herhangi bir güncelleme mevcut değil.',
	'VIEWING_FILE_CONTENTS'		=> 'Dosya içeriği görüntüleniyor',
	'VIEWING_FILE_DIFF'			=> 'Dosya farklılıkları görüntüleniyor',

	'WRONG_INFO_FILE_FORMAT'	=> 'Hatalı dosya formatı bilgisi',
));

// Default database schema entries... 
$lang = array_merge($lang, array( 
   'CONFIG_BOARD_EMAIL_SIG'        => 'Teşekkürler, Yönetim', 
   'CONFIG_SITE_DESC'             => 'Mesaj panonuzu tanımlamak için kısa bir yazı', 
   'CONFIG_SITENAME'              => 'siteadresiniz.com', 
     
   'DEFAULT_INSTALL_POST'        => 'Bu, phpBB3 kurulumunuzun içerisindeki örnek bir mesajdır. Her şey çalışıyor görünüyor. Eğer isterseniz bu mesajı silebilirsiniz ve mesaj panonuzu ayarlamaya devam edebilirsiniz. Kurulum işlemi sırasında öntanımlı kullanıcı grupları, yöneticiler, botlar, global moderatörler, misafirler, kayıtlı kullanıcılar ve kayıtlı COPPA kullanıcıları için ayrılan izinler ilk kategoriniz ve ilk forumunuz için tanımlanmıştır. Ayrıca eğer ilk kategorinizi ve ilk forumunuzu silmeyi tercih ederseniz, oluşturacağınız tüm yeni kategoriler ve forumlar için tüm bu kullanıcı gruplarına izinleri atamayı unutmayın. İlk kategorinizi ve ilk forumunuzu yeniden adlandırmanız ve oluşturacağınız yeni kategoriler ve yeni forumlar için izinleri buradan kopyalamanız önerilir. İyi eğlenceler!', 
     
   'FORUMS_FIRST_CATEGORY'      => 'İlk kategoriniz', 
   'FORUMS_TEST_FORUM_DESC'   => 'İlk forumunuzun açıklaması.', 
   'FORUMS_TEST_FORUM_TITLE'     => 'İlk forumunuz', 
     
   'RANKS_SITE_ADMIN_TITLE'        => 'Mesaj Panosu Yöneticisi',
   'REPORT_WAREZ'               => 'Mesaj illegal ya da korsan yazılım bağlantıları içeriyor.',
   'REPORT_SPAM'               => 'Bildirilen mesaj bir web sitesinin ya da diğer bir ürünün reklamını yapma amacında.',
   'REPORT_OFF_TOPIC'            => 'Bildirilen mesaj konu dışı.',
   'REPORT_OTHER'               => 'Bildirilen mesaj diğer kategorilerden herhangi birine uymuyor, lütfen daha fazla bilgi alanını kullanın.', 
     
   'SMILIES_ARROW'            => 'Ok', 
   'SMILIES_CONFUSED'         => 'Şaşkın', 
   'SMILIES_COOL'        => 'Soğukkanlı', 
   'SMILIES_CRYING'           => 'Ağlıyor veya Çok Üzgün', 
   'SMILIES_EMARRASSED'      => 'Utangaç', 
   'SMILIES_EVIL'           => 'Kötü veya Çok Kızgın', 
   'SMILIES_EXCLAMATION'      => 'Haykırma', 
   'SMILIES_GEEK'              => 'Garip', 
   'SMILIES_IDEA'              => 'Fikir', 
   'SMILIES_LAUGHING'          => 'Gülüyor', 
   'SMILIES_MAD'               => 'Kızgın', 
   'SMILIES_MR_GREEN'          => 'Bay Yeşil', 
   'SMILIES_NEUTRAL'           => 'Tarafsız', 
   'SMILIES_QUESTION'          => 'Soru', 
   'SMILIES_RAZZ'              => 'Alaycı', 
   'SMILIES_ROLLING_EYES'      => 'Dönen Gözler', 
   'SMILIES_SAD'               => 'Üzgün', 
   'SMILIES_SHOCKED'           => 'Şok Olmuş', 
   'SMILIES_SMILE'             => 'Gülümseme', 
   'SMILIES_SURPRISED'         => 'Sürpriz', 
   'SMILIES_TWISTED_EVIL'     => 'Çok Kötü', 
   'SMILIES_UBER_GEEK'       => 'Daha Garip', 
   'SMILIES_VERY_HAPPY'      => 'Çok Mutlu', 
   'SMILIES_WINK'             => 'Göz Kırpıyor', 
     
   'TOPICS_TOPIC_TITLE'     => 'phpBB3’e hoşgeldiniz', 
)); 
