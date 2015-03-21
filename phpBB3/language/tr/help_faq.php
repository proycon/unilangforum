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
*/
if (!defined('IN_PHPBB'))
{
   exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Giriş ve Kayıt sorunları'
	),
	array(
		0 => 'Neden kayıt olmam gerekiyor?',
		1 => 'Kayıt olmanıza gerek olmayabilirdi aslında. Mesaj gönderebilmek için kaydın şart olması, mesaj panosu yöneticisinin (yönetici) kararına bağlı. Ayrıca kayıt olunca bazı özel imkanlara ulaşabilirsiniz. Örneğin mesajlarınızın yanında kendinize ait küçük bir resim (avatar) gösterme, özel mesaj gönderme, tanıdığınız kullanıcılara e-posta gönderme veya kullanıcı gruplarına katılma imkanlarına misafir kullanıcılar sahip değildir. Kayıt işlemi çok basit olduğu için kayıt olmanız önerilir.'
	),
	array(
		0 => 'COPPA nedir?',
		1 => 'COPPA ya da Child Online Privacy and Protection Act of 1998, Birleşik Devletlerde web sitelerinin 13 yaşından küçüklerin ebeveynlerinden potansiyel bilgi toplayabilmek için yazılı izin almayı gerekli tutan bir kanundur, ya da başka bir deyişle yasal veli/vasi onay şeklidir, veliler 13 yaşından küçüklerden kişisel kimlik bilgilerinin toplanması için izin verirler. Eğer bu uygulama ile kayıt olmak ya da bu uygulama ile bir web sitesine kayıt olmak size güvenilir gelmiyorsa, yardım için bir yasal danışman ile iletişime geçin. Not: phpBB Limited ya da bu mesaj panosunun sahibi yasal destek sağlamaz, ve “Bu mesaj panosu ile ilgili kötü niyetli ve/veya hukuki konularda kime başvurabilirim?” sorusu hariç, yasayı ilgilendiren herhangi bir konuda iletişim noktası olarak gösterilemez.',
	),
	array(
		0 => 'Neden kayıt olamıyorum?',
		1 => 'Bir mesaj panosu yöneticisi yeni ziyaretçilerin kayıt olmasını önlemek amacıyla kayıt işlemini devre dışı bırakmış olabilir. Ayrıca mesaj panosu yöneticisi IP adresinizi yasaklamış ya da kullanıcı adınızı kullanmanıza izin vermemiş olabilir. Yardım için bir mesaj panosu yöneticisiyle iletişime geçin.',
	),
	array(
		0 => 'Kayıt oldum ama giriş yapamıyorum!',
		1 => 'Öncelikle, kullanıcı adınızı ve şifrenizi kontrol edin. Eğer onlar doğruysa, o zaman şu iki durumdan biri meydana gelmiş olabilir. Eğer COPPA desteği açıksa ve kayıt sırasında 13 yaşından küçük olduğunuzu belirttiyseniz, size tarif edilen işlemleri uygulamanız gerekmektedir. Bazı mesaj panoları yeni kayıtlarda ayrıca aktivasyon istemektedir, giriş yapmadan önce bu aktivasyonun kendiniz ya da bir yönetici tarafından yapılması gerekmektedir; bu bilgi kayıt sırasında gösterilmiştir. Eğer size bir e-posta gönderildiyse, açıklamaları takip edin. Eğer bir e-posta almadıysanız, yanlış bir e-posta adresi belirtmiş olabilirsiniz ya da e-posta, bir spam filtresi tarafından spam olarak seçilmiş olabilir. Eğer doğru e-posta adresi belirttiğinize eminseniz, bir yönetici ile iletişime geçmeyi deneyin.'
	),
	array(
		0 => 'Neden giriş yapamıyorum?',
		1 => 'Bunun meydana gelmesinde çeşitli sebepler vardır. Öncelikle, kullanıcı adınız ve şifrenizi doğru olarak girdiğinizden emin olmalısınız. Eğer kullanıcı adı ve şifrenizin doğruluğundan eminseniz, bir mesaj panosu yöneticisi ile iletişime geçerek mesaj panosundan yasaklanıp yasaklanmadığınızdan emin olun. Eğer sorun bu da değilse web sitesi sahibi mesaj panosu için yanlış ayar yapmış olabilir ve bunu düzeltmesi gerekebilir.',
	),
	array(	
		0 => 'Daha önce kayıt olmuştum ama artık giriş yapamıyorum?!',
		1 => 'Bazı sebeplerden dolayı bir yönetici hesabınızı deaktif etmiş ya da silmiş olabilir. Ayrıca, bazı mesaj panoları veritabanını azaltmak için uzun bir süredir mesaj göndermeyen kullanıcıları periyodik aralıklarla silerler. Eğer bu olmuşsa, tekrar kayıt olmayı deneyin ve tartışmalara katılın.'
	),
	array(
		0 => 'Şifremi kaybettim!',
		1 => 'Panik yapmayın! Şifreniz geri getirelemese de, kolayca sıfırlanabilir. Giriş sayfasını ziyaret edin ve <em>Şifremi unuttum</em> bağlantısına tıklayın. Buradaki talimatları takip ederek kısa bir süre içerisinde yeniden giriş yapabilirsiniz.<br />Yine de, eğer şifenizi sıfırlayamazsanız, bir mesaj panosu yöneticisi ile iletişime geçin.',
	),
	array(
		0 => 'Neden otomatik olarak çıkışım yapılıyor?',
		1 => 'Eğer giriş yaparken <em>Beni hatırla</em> kutucuğunu işaretlemezseniz, mesaj panosu sadece belirli bir zaman için sizi giriş yapmış şekilde tutacaktır. Bu, hesabınızın başka biri tarafından kötüye kullanımını önlemek içindir. Sürekli giriş yapmış olarak kalmak için, giriş sırasında <em>Beni hatırla</em> kutucuğunu işaretleyin. Ancak bu işlem başkalarıyla paylaşılan bir bilgisayarlardan, örneğin; kütüphane, internet kafe, üniversite bilgisayar laboratuarı, v.b. gibi yerlerden mesaj panosuna erişim yaptığınızda önerilmez. Eğer giriş sırasında <em>Beni hatırla</em> kutucuğunu göremiyorsanız, bunun anlamı bir mesaj panosu yöneticisinin bu özelliği devre dışı bırakmış olmasıdır.',
	),
	array(
		0 => '“Tüm mesaj panosu çerezlerini sil” nedir?',
		1 => '“Tüm mesaj panosu çerezlerini sil” özelliği, phpBB tarafından oluşturulan ve mesaj panosuna girişiniz, doğrulanmanız için tutulan çerezleri silmeye yarar. Çerezler ayrıca, eğer bir mesaj panosu yöneticisi tarafından ayarlandıysa, okuma takibi gibi özellikler sağlar. Eğer giriş ya da çıkış problemleri yaşıyorsanız, mesaj panosu çerezlerini silmek size yardımcı olabilir.',
	),
	array(
		0 => '--',
		1 => 'Kullanıcı Seçenekleri ve ayarları'
	),
	array(
		0 => 'Ayarlarımı nasıl değiştirebilirim?',
		1 => 'Eğer kayıtlı bir kullanıcı iseniz, tüm ayarlarınız mesaj panosu veritabanına kaydedilir. Ayarlarınızı değiştirmek için Kullanıcı Kontrol Panelinizi ziyaret edin; genellikle sayfaların üst kısmında, kullanıcı adınızın üzerine tıkladığınızda bir bağlantı bulunur. Bu sistem size tüm ayarlarınızı ve tercihlerinizi değiştirme izni verecektir.',
	),
	array(
		0 => 'Kullanıcı adımın çevrimiçi kullanıcılar listesinde görüntülenmesini nasıl önleyebilirim?',
		1 => 'Kullanıcı Kontrol Panelinizden, “Mesaj panosu tercihleri” bölümüne tıkladığınızda, <em>Çevrimiçi durumumu gizle</em> seçeneğini bulacaksınız. Bu seçeneği aktifleştirdiğinizde kullanıcı adınız, çevrimiçi kullanıcılar listesinde sadece yöneticiler, moderatörler ve kendiniz tarafından görüntülenecektir. Böylece gizli bir kullanıcı olarak sayılacaksınız.'
	),
	array(
		0 => 'Gösterilen zamanlar yanlış!',
		1 => 'Gösterilen zaman, sizin bulunduğunuz yerden farklı bir zaman dilimindeyse bu olabilir. Bu durumu düzeltmek için, Kullanıcı Kontrol Panelinizi ziyaret edin ve ayrıntılı alandan uygun zaman diliminize göre değiştirin, ör. Londra, Paris, New York, Sydney, gibi. Not: Bu zaman dilimi değişikliklerini ve diğer bir çok ayarları sadece kayıtlı kullanıcılar yapabilir. Eğer kayıtlı değilseniz, şimdi kaydolmanın tam zamanı.'
	),
	array(
		0 => 'Değişik bir zaman dilimi seçtim ama saatler hala yanlış!',
		1 => 'Eğer doğru zaman dilimini seçtiğinize eminseniz ve zaman hala yanlışsa, sunucu saatinde kayıtlı zaman yanlış olabilir. Lütfen problemin düzeltilmesi için bir yöneticiyi haberdar edin.'
	),
	array(
		0 => 'Konuştuğum dil listede yok!',
		1 => 'Mesaj panosu yöneticisi konuştuğunuz dili destekleyen paketi kurmamıştır, ya da hiç kimse bu mesaj panosunu konuştuğunuz dile henüz çevirmemiştir. Bir mesaj panosu yöneticisine başvurup, ihtiyacınız olan dil paketini kurmasını rica edin. Eğer dil paketi mevcut değilse, yeni bir çeviri oluşturmakta özgürsünüz. Daha fazla bilgi <a href="https://www.phpbb.com/">phpBB</a>&reg; websitesinde bulunabilir.',
	),
	array(
		0 => 'Kullanıcı adımın yanındaki resim nedir?',
		1 => 'Mesajları görüntülerken kullanıcı adı ile birlikte iki tane resim görüntülenebilir. Bunlardan bir tanesi rütbeniz ile ilişkilendirilmiş; genellikle yıldız, blok ya da nokta şeklinde; mesaj panosundaki durumunuzu veya gönderdiğiniz mesaj sayısına göre değişkenlik gösteren bir resim olabilir. Diğeri ise, çoğunlukla büyük boyda, her kullanıcı için kişisel ya da benzersiz, avatar olarak bilinen bir resimdir.',
	),
	array(
		0 => 'Bir avatarı nasıl gösterebilirim?',
		1 => 'Kullanıcı Kontrol Panelinizde, “Profil” bölümünden şu dört farklı metottan birisini kullanarak avatar ekleyebilirsiniz: Gravatar, Galeri, Uzak Avatar ya da Avatar Yükleme. Avatar kullanma imkanı ve avatar kullanımında seçilebilecek yollar mesaj panosu yöneticisinin kararına bağlıdır. Eğer avatarları kullanamıyorsanız, bir mesaj panosu yöneticisi ile iletişime geçin.',
	),
	array(
		0 => 'Rütbem nedir ve onu nasıl değiştirebilirim?',
		1 => 'Genelde kullanıcı rütbenizi doğrudan değiştirmeniz mümkün değildir (kullanıcı rütbesi, gönderdiğiniz mesajın yanında bulunan isminizin altında ve kullanıcı profili sayfasında görülür). Çoğu mesaj panosunda kullanıcı rütbeleri, gönderilen mesajların sayısını veya yetkili üyeleri belirlemek için kullanılır, örn. yöneticiler veya mesaj panosu yöneticileri özel bir rütbeye sahip olabilir. Lütfen gereksiz yere mesaj gönderipte rütbenizi yükseltmeye çalışmayın, elde edeceğiniz tek sonuç, yöneticilerin mesajlarınızın sayısını düşürmesi olacaktır.'
	),
	array(
		0 => 'Bir kullanıcıya ait e-posta bağlantısını tıklayınca neden giriş yapmam isteniyor?',
		1 => 'Üzgünüz fakat e-posta formuyla maalesef sadece kayıtlı kullanıcılar e-posta gönderebilir (eğer yönetici bu özelliği aktif ettiyse). Bunun sebebi, e-posta sisteminin anonim kullanıcılar tarafından suistimal edilmesini önlemektir.'
	),
	array(
		0 => '--',
		1 => 'Mesaj Gönderme'
	),
	array(
		0 => 'Yeni bir başlık ya da bir mesaja nasıl cevap gönderebilirim?',
		1 => 'Bir foruma yeni bir başlık göndermek için, "Yeni Başlık" bağlantısına, bir başlığa cevap göndermek içinse, "Cevap Gönder" bağlantısına tıklayın. Bir mesaj göndermeden önce kayıt olmanız gerekebilir. Forum ve başlık ekranlarının alt kısımlarında her forum için mevcut olan izinlerin bir listesini görebilirsiniz. Örneğin: Yeni başlıklar gönderebilirsiniz, Dosya ekleri gönderebilirsiniz, v.b.',
	),
	array(
		0 => 'Bir mesajı nasıl silebilir veya düzenleyebilirim?',
		1 => 'Mesaj panosu yöneticisi veya moderatör olmadığınız sürece, sadece kendinize ait mesajları düzenleyebilir veya silebilirsiniz. Gönderdiğiniz bir mesajı <em>düzenle</em> butonuna tıklayarak düzenleyebilirsiniz (bu imkan bazen sadece belirli bir süre için mevcuttur). Eğer mesajınıza birileri cevap göndermişse, başlığa döndüğünüzde mesajınızın altında metni kaç defa düzenlediğinizi gösteren kısa bir yazı göreceksiniz. Mesajınıza henüz cevap verilmemişse, bu not görülmez. Ayrıca mesajınız mesaj panosu yöneticileri veya moderatörler tarafından düzenlenince de bu metin görünmez. Buna rağmen mesajı neden düzenlediklerine dair kendilerine has bir not bırakabilirler. Not: Normal kullanıcılar herhangi birinden cevap geldikten sonra bir mesajı silemezler.'
	),
	array(
		0 => 'Mesajıma bir imza nasıl eklerim?',
		1 => 'Herhangi bir mesaja imzanızı ekleyebilmek için önce bir imza oluşturmanız gerekmektedir. Bu, Kullanıcı Kontrol Paneliniz yoluyla yapılır. Daha sonra mesaj gönderme formunun alt kısmındaki <em>Bir imza ekle</em> seçeneğini seçip mesajınıza imzanızı ekleyebilirsiniz. Ayrıca Kullanıcı Kontrol Panelindeki uygun seçeneği işaretleyerek tüm mesajlarınıza varsayılan olarak bir imza ekleyebilirsiniz. Buna rağmen dilediğiniz her mesaj için imzanızın eklenmesini önleyebilirsiniz, bunu yapmak içinse mesaj gönderme formunda imza ekleme seçeneğinin işaretini kaldırmanız yeterlidir.'
	),
	array(
		0 => 'Nasıl bir anket oluştururum?',
		1 => 'Anket oluşturmak kolaydır, yeni bir başlık gönderirken (veya bir başlığın ilk mesajını düzenlerken (bu tabiki sahip olduğunuz izne bağlıdır)), mesaj gönderme formunun altında “Anket oluştur” sekmesini göreceksiniz (böyle bir formu göremiyorsanız, anket oluşturma yetkiniz yok demektir). Anket için “Anket sorusu” kısmına bir başlık girmelisiniz ve sonra “Anket seçenekleri” alanına, her satıra ayrı bir seçenek olacak şekilde en az iki seçenek girmelisiniz (bu limit mesaj panosu yönetici tarafından ayarlanır). Ayrıca kullanıcıların oylama sırasında seçebilecekleri seçeneklerin sayısını “Her kullanıcı için seçenek” bölümünün altından ayarlayabilirsiniz, anket için gün cinsinden bir zaman sınırı belirleyebilirsiniz (sınırsız sürede olması için 0 yazın) ve son olarak eğer kullanıcıların kendi oylarını değiştirme izni varsa oy verdikleri seçeneği değiştirebilirler.'
	), 
	array( 
		0 => 'Neden daha fazla anket seçeneği ekleyemiyorum?', 
		1 => 'Anket seçenekleri için limit, mesaj panosu yöneticisi tarafından ayarlanır. Eğer anketiniz için izin verilen miktardan daha fazla seçenek eklemeniz gerekiyorsa, mesaj panosu yöneticisi ile iletişime geçin.'
	),
	array(
		0 => 'Bir anketi nasıl değiştirir veya silerim?',
		1 => 'Anketlerde, mesajlar gibi sadece gönderen kullanıcı, bir moderatör veya bir yönetici tarafından değiştirilebilir. Bir anketi değiştirmek için, başlığın ilk mesajını tıklayın; ilgili anket daima bu mesaja bağlıdır. Ankete henüz katılan olmadıysa, hazırlayan kullanıcı tarafından değiştirilebilir veya silinebilir. Fakat, eğer üyeler ankete katılmışsa, sadece forum ve mesaj panosu yöneticileri tarafından değiştirilebilir veya silinebilir. Böylece bir süre sonra şıkları değiştirip anket sonuçlarını saptırma olanağı kalmaz.'
	),
	array(
		0 => 'Neden bir foruma erişimim yok?',
		1 => 'Bazı forumlar sadece belirli kullanıcılara veya kullanıcı gruplarına açık olabilir. Mesajları okumak, görüntülemek, göndermek ya da diğer işlemler için özel yetki gerekebilir. Size erişim verilebilmesi için bir moderatör ya da mesaj panosu yöneticisiyle iletişime geçin.'
	),
	array(
		0 => 'Neden dosya ekleri ekleyemiyorum?',
		1 => 'Her forumda, her grupta, veya her kullanıcı temelinde dosya eki izinleri vardır. Mesaj panosu yöneticisi mesaj gönderdiğiniz belirli forum için eklenen dosya eklerine izin vermemiş olabilir, ya da muhtemelen sadece bazı gruplar dosya eki gönderebiliyordur. Eğer dosya eki eklemenin sizin için neden kapalı olduğu hakkında bir şüpheniz varsa mesaj panosu yöneticiyle iletişime geçin.'
	),
	array(
		0 => 'Neden bir uyarı aldım?',
		1 => 'Her mesaj panosu yöneticisi, mesaj panoları için kendi kurallarını belirlemiştir. Eğer bir kural ihlalinde bulunduysanız, uyarı alabilirsiniz. Not: Bu durum, mesaj panosu yöneticisi’nin kararındadır ve phpBB Limited verilen bu uyarı ile ilgili herhangi bir şey yapamaz. Eğer neden bir uyarı aldığınızı bilmiyorsanız, mesaj panosu yöneticisi ile iletişime geçin.'
	),
	array(
		0 => 'Bir moderatöre mesajları nasıl bildirebilirim?',
		1 => 'Eğer mesaj panosu yöneticisi buna izin veriyorsa, bildiri yapmak istediğiniz mesaja gidin ve orada mesaj bildirileri için bir buton göreceksiniz. Bu butona tıklayarak mesaj bildirisi için zorunlu adımlara ulaşacaksınız.'
	),
	array(
		0 => 'Başlığa mesaj gönderilirkenki “Kaydet” butonu nedir?',
		1 => 'Bu buton sonraki bir tarihte tamamlamak ve göndermek için başlığınızı taslak olarak kaydetmeye olanak sağlar. Kaydedilen bir taslağı yeniden yüklemek için, Kullanıcı Kontrol Panelini ziyaret edin.'
	),
	array(
		0 => 'Neden mesajımın onaylanması gerekiyor?',
		1 => 'Mesaj panosu yöneticisi, foruma mesaj göndermek için ilk önce mesajların incelenmesi gerektiğine karar vermiş olabilir. Ayrıca yönetici, sizi bir kullanıcı grubuna yerleştirmiş olabilir ve bu grubun mesajları gönderilmeden önce incelenmesi gerekiyor olabilir. Daha fazla bilgi için lütfen mesaj panosu yöneticisiyle iletişime geçin.'
	),
	array(
		0 => 'Başlığımı nasıl darbelerim?',
		1 => '“Başlığı darbele” bağlantısını görüp tıkladığınız zaman, başlığı “darbeleyerek” forumun ilk sayfasında en üst sıraya çıkarabilirsiniz. Fakat, eğer bu bağlantıyı göremiyorsanız, o zaman başlık darbeleme özelliği kapatılmış olabilir ya da darbelemeler arası izin verilen zamana henüz ulaşılmamıştır. Ayrıca cevap gelene kadar başlığın basit bir şekilde darbelenmesi mümkündür. Buna rağmen, mesaj panosu kurallarını takip ettiğinize emin olun.'
	),
	array(
		0 => '--',
		1 => 'Biçimlendirme ve Başlık Tipleri'
	),
	array(
		0 => 'BBCode nedir?',
		1 => 'BBCode HTML\'in özel bir uygulamasıdır. Forum\'a yazdığınız mesajlarda BBCode kullanabilme imkanını mesaj panosu yöneticisi saptar. Ayrıca mesaj gönderme formundaki seçenekler sayesinde dilediğiniz mesajlarda BBCode\'ı iptal etmeniz mümkündür. BBCode, HTML\'e benzer tarzdadır fakat tag\'ler &lt; ve &gt; yerine köşeli parantez içine alınır: [ ve ]. Ayrıca nelerin nasıl görüntülendiği daha iyi kontrol edilebilir. BBCode hakkında daha geniş bilgiler için, mesaj gönderme sayfasından ulaşabileceğiniz rehbere bakınız.'
	),
	array(
		0 => 'HTML kullanabilir miyim?',
		1 => 'Hayır. Bu mesaj panosunda HTML mesajları göndermek ve farklı HTML kodları kullanmak mümkün değildir. Daha fazla biçimlendirme için HTML yerine BBCode kullanarak uygulayabilirsiniz.'
	),
	array(
		0 => 'İfadeler nedir?',
		1 => 'İfadeler veya Semboller, belirli duygu ifadelerini vermek için kullanılan küçük resimler halindeki kısa kodlardır. Örn. :) mutlu, :( ise üzgün anlamındadır. Kullanabileceğiniz ifadelerin tam listesini mesaj gönderme formunda görebilirsiniz. İfadeleri aşırı derecede kullanmamaya özen gösterin, onlar metin yoksa okunmaz hale gelebilir ve bir moderatör mesajınızı düzenlemeye ya da silmeye karar verebilir. Mesaj panosu yöneticisi ayrıca bir mesajınızda kullanabileceğiniz en fazla ifade limitini ayarlamış olabilir'
	),
	array(
		0 => 'Resim gönderebilir miyim?',
		1 => 'Gönderdiğiniz mesajla beraber resimde görüntülenebilir. Fakat şu anda mesaj panosuna doğrudan resim göndermek mümkün değildir. Bu yüzden umuma açık bir web sunucusunda kayıtlı bir resme bağlantı vermeniz gerek, örn. http://www.umuma-acik-sunucu.net/resim.gif . Kendi bilgisayarınızda bulunan bir resme bağlantı vermeniz mümkün değil (bilgisayarınız umuma açık bir web sunucu olmadığı sürece). Ayrıca, umuma açık olmayan ve sadece şifreyle ulaşılan resimlere bağlantı vermek mümkün değildir (örn. hotmail veya yahoo mailboxlarında vs. kayıtlı resimler). Resim görüntülemek için, BBCode\'ın [img] tag\'ini ya da (müsaade verilmişse) HTML kullanabilirsiniz.'
	),
	array(
		0 => 'Global duyurular nedir?',
		1 => 'Global duyurular önemli bilgiler içerir ve onları mümkün olan en kısa zamanda okumalısınız. Global duyurular her forumun başında görünecektir ve ayrıca Kullanıcı Kontrol Panelinizden görebilirsiniz. Gerekli izinlere sahipseniz sizde bir global duyuru gönderebilirsiniz, bu izinler yönetici tarafından ayarlanır.'
	),
	array(
		0 => 'Duyurular nedir?',
		1 => 'Duyurular çoğu zaman önemli bilgileri içerir, en kısa zamanda okumanızı öneririz. Duyurular, ilgili forumun her sayfasının başında görülür. Duyuru gönderebilmeniz için bu yetkiye sahip olmanız gerek. Yetkilerinizi ise mesaj panosu yöneticisi saptar.'
	),
	array(
		0 => 'Sabit başlıklar nedir?',
		1 => 'Sabit başlıklar, ilgili forumun ilk sayfasında, duyuruların hemen altında görülür. Çoğu zaman önemli bilgileri içerirler, mümkünse okumanızı öneririz. Duyurular için geçerli olduğu gibi, herhangi bir foruma sabit başlık göndermek için gereken yetkileri mesaj panosu yöneticisi saptar.'
	),
	array(
		0 => 'Kilitli başlıklar nedir?',
		1 => 'Bu başlıkları forum moderatörü veya mesaj panosu yöneticisi kilitler. Kilitli başlıkları yanıtlamak mümkün değildir, içerdikleri anketler otomatik olarak sona erir. Başlıklar bir çok nedenlerden dolayı kilitlenmiş olabilir. Ayrıca mesaj panosu yöneticisi tarafından verilen izinlere bağlı olarak kendi başlıklarınızı kilitleyebilirsiniz.'
	),
	array(
		0 => 'Başlık ikonları nedir?',
		1 => 'Mesajlara, içeriğini işaret edecek başlık ikon resimleri tanımlanabilir. Başlık ikonlarının kullanımı yönetici tarafından ayarlanan izinlere bağlıdır.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Kullanıcı Seviyeleri ve Grupları'
	),
	array(
		0 => 'Yöneticiler nedir?',
		1 => 'Yöneticiler, mesaj panosunun her bölümünde en çok yetkiye sahip olan üyelerdir. Bu üyeler, mesaj panosunun her türlü işlevini kontrol edebilir: izin verme, yetkilendirme, kullanıcı yasaklama, kullanıcı grupları oluşturma, moderatör yetkilerini verme vs. Ayrıca onlar mesaj panosu kurucusu tarafından verilen ayarlara bağlı olarak bütün forumlarda tam moderatör yetkilerine sahip olabilirler.'
	),
	array(
		0 => 'Moderatörler nedir?',
		1 => 'Moderatörler (ya da onların grupları), günlük olarak forumun çalışmasını kontrol eden şahıslar veya gruplardır. Başlıkları değiştirme ve silme yetkisine sahip olabilirler. Ayrıca moderatör oldukları forumdaki başlıkları kilitleyebilir, taşıyabilir, silebilir ve bölebilirler. Genelde moderatörlerin görevi, <em>off-topic</em>, yani başlık konusuyla ilgisi olmayan yanıtların veya hakaret ve saldırı niteliğinde metinlerin gönderilmesini önlemektir.'
	),
	array(
		0 => 'Kullanıcı grupları nedir?',
		1 => 'Kullanıcı grupları, mesaj panosu yöneticilerinin kullanıcıları grup halinde ayırabilmesi için öngörülen bir yöntemdir. Her kullanıcı (çoğu mesaj panolarından farklı olarak) bir çok gruba üye olabilir ve her gruba ayrı ayrı izinler tanımlanabilir. Bu şekilde mesaj panosu yöneticileri belirli kullanıcılara rahatlıkla moderatör yetkilerini veya özel forumlara ulaşma yetkisini vs. verebilir'
	),
	array(
		0 => 'Bir kullanıcı grubuna nasıl katılabilirim?',
		1 => 'Bir kullanıcı grubuna katılabilmek için, Kullanıcı Kontrol Panelinizden “Kullanıcı grupları” bağlantısına tıklayın; oradan tüm kullanıcı gruplarını görüntüleyebilirsiniz. Grupların tümü <em>erişime açık</em> olmayabilir. Bazılarına katılmak için onay gerekebilir ve bazıları kapalı ya da gizli üyeliklere sahip olabilir. Eğer grup açık ise, ilgili bağlantıya tıklayarak katılabilirsiniz. Eğer bir gruba katılmak için onay gerekiyorsa ilgili bağlantıya tıklayarak istek yapabilirsiniz. İsteğinizin kullanıcı grubu lideri tarafından onaylanması gerek, onlar size neden gruba katılmak istediğinizi sorabilirler. İsteğiniz reddedilirse grup liderini rahatsız etmeyin; bunun çeşitli nedenleri olsa gerek.'
	),
	array(
		0 => 'Bir kullanıcı grubunun lideri olmak için ne yapmam gerek?',
		1 => 'Kullanıcı grupları bir yönetici tarafından oluşturulur, genellikle bir kullanıcı grubu lideri belirlenir. Eğer yeni bir kullanıcı grubu oluşturmak istiyorsanız, ilk önce bir yöneticiyle iletişime geçmelisiniz; bir özel mesaj göndermeyi deneyin.'
	),
	array(
		0 => 'Neden bazı kullanıcı grupları farklı renkte görünüyor?',
		1 => 'Mesaj panosu yöneticisi bir kullanıcı grubunun üyelerine bir renk belirler, ve bu grubun üyelerinin kolayca tanınması mümkün olur.'
	),
	array(
		0 => '“Varsayılan kullanıcı grubu” nedir?',
		1 => 'Eğer bir kullanıcı grubundan daha fazlasının üyesi iseniz, varsayılan olarak kullanmak için belirlenen grubunuzun rengi ve rütbesi gösterilir. Mesaj panosu yöneticisi, Kullanıcı Kontrol Panelinizden varsayılan kullanıcı grubunuzu değiştirmenize izin vermiş olabilir.'
	),
	array(
		0 => '“Takım” bağlantısı nedir?',
		1 => 'Bu sayfa mesaj panosu yönetiminin bir listesini size belirtir, mesaj panosu yöneticileri ile moderatörlerinin bilgilerini ve diğer detaylarla onların yönettikleri forumları içerir.'
	),
	array(
		0 => '--',
		1 => 'Özel Mesajlar'
	),
	array(
		0 => 'Özel mesaj gönderemiyorum!',
		1 => 'Bunun üç sebebi olabilir; henüz kayıt olmamış veya giriş yapmamışsınız, veya mesaj panosu yöneticisi bütün mesaj panosu için özel mesajları iptal etmiş. Üçüncü olanak ise: mesaj panosu yöneticisi sizin bu imkanı kullanmanızı önlemiş olabilir, bu durumda kendisine nedenini sormanız gerekir.'
	),
	array(
		0 => 'İstemediğim özel mesajları almaya devam ediyorum!',
		1 => 'Kullanıcı Kontrol Panelinizdeki mesaj kuralları özelliğini kullanarak bir kullanıcıdan gelen özel mesajları otomatik olarak silebilirsiniz. Eğer belirli bir kullanıcıdan küfürlü ya da kötü niyetli özel mesajlar alıyorsanız, bu mesajları moderatörlere bildirin; onlar özel mesaj gönderen bir kullanıcıyı önleme yetkisine sahiptir.'
	),
	array(
		0 => 'Bu mesaj panosunda herhangi birinden spam e-posta aldım!',
		1 => 'Üzgünüz. Aslında bu mesaj panosunun sunduğu e-posta gönderme işlevi bundan korunmak için birçok önlemi almış bulunuyor. Aldığınız spam e-postanın bir kopyasını mesaj panosu yöneticisine gönderin. Özellikle aldığınız e-posta’nın başlık kısmını (to (kime), subject (konu) vs.) iletmeyi unutmayın, bu kısımda e-postayı gönderen kullanıcı hakkında bilgiler bulunur. Mesaj panosu yöneticileri bu bilgilerle meseleyi takip edebilir.'
	),
	array(
		0 => '--',
		1 => 'Arkadaşlar ve Engellenenler'
	),
	array(
		0 => 'Arkadaşlarım ve Engellenenler listesi nedir?',
		1 => 'Bu listeleri kullanarak mesaj panosunun diğer üyelerini toplayabilirsiniz. Arkadaşlar listenize eklenen üyeler, onlara özel mesajlar göndermeye ve çevrimiçi durumlarını görüntülemeye kolay erişim sağlamak için Kullanıcı Kontrol Panelinizde listelenecektir. Tema uygun desteği sağlıyorsa, bu kullanıcılardan gelen mesajlar ayrıca detaylı ve belirgin olarak görünebilir. Eğer engellenenler listenize bir kullanıcı eklediyseniz onlar tarafından oluşturulan mesajlar varsayılan olarak gizlenecektir.'
	),
	array(
		0 => 'Kullanıcıları Arkadaşlar veya Engellenenler listeme nasıl ekleyebilir / silebilirim?',
		1 => 'Listenize kullanıcıları iki yolla ekleyebilirsiniz. Her kullanıcı’nın profilinde, onları Arkadaşlar ya da Engellenenler listenize eklemek için bir bağlantı olacaktır. Alternatif olarak Kullanıcı Kontrol Paneliniz’den, direkt olarak kullanıcıların üye adlarını girerek ekleyebilirsiniz. Ayrıca aynı sayfayı kullanarak kullanıcıları listenizden silebilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Forumlarda Arama'
	),
	array(
		0 => 'Bir forumda ya da forumlarda nasıl arama yapabilirim?',
		1 => 'Ana sayfa görüntülenirken, forum görüntülenirken ya da başlık görüntülenirken yerleşik arama kutusunun içerisine aranacak terimi girerek arama yapabilirsiniz. Gelişmiş arama yapmak için forumda tüm sayfalarda bulunan “Arama” bağlantısına tıklayabilirsiniz. Arama erişiminiz kullandığınız temaya bağlı olarak değişebilir.'
	),
	array(
		0 => 'Neden arama yaptığımda sonuç çıkmıyor?',
		1 => 'Yaptığınız arama muhtemelen çok belirsiz ve phpBB tarafından indekslenmeyen çok fazla genel terim içeriyor. Gelişmiş Arama içerisindeki daha fazla özellik ve mevcut seçenekleri kullanarak arama yapabilirsiniz.'
	),
	array(
		0 => 'Neden arama yaptığımda boş bir sayfa çıkıyor!?',
		1 => 'Aramanızda geri dönen çok fazla sonuç olduğu için web sunucusu meşgul oldu. Gelişmiş aramayı kullanın ve terimler içinde kullanılacak daha fazla özellik ile aranacak forumları belirleyin.'
	),
	array(
		0 => 'Üyeler için nasıl arama yaparım?',
		1 => '“Üyeler” sayfasına gidin ve “Bir üye bul” bağlantısına tıklayın. Buradan, açıklanan seçenekleri doldurun.'
	),
	array(
		0 => 'Kendi mesajlarımı ve başlıklarımı nasıl bulabilirim?',
		1 => 'Kendi mesajlarınızı, Kullanıcı Kontrol Panelinden “Mesajlarımı göster” bağlantısına tıklayarak ya da kendi profil sayfanızdaki “Kullanıcı’nın mesajlarını ara” bağlantısına tıklayarak ya da mesaj panosunun üstündeki “Hızlı Bağlantılar” menüsüne tıklayarak bulabilirsiniz. Başlıklarınızı aramak için, Gelişmiş arama sayfasını kullanın ve uygun olan seçenekleri doldurun.',
	),
	array(
		0 => '--',
		1 => 'Abonelikler ve Yer imleri'
	),
	array(
		0 => 'Yer imi ve abonelik arasındaki fark nedir?',
		1 => 'phpBB 3.0’da, başlık yer imleri bir web tarayıcısındaki yer imleri gibi çalışıyordu. Yer imlerine eklenen başlıklar güncellendiği zaman hiç bir uyarı alamıyordunuz. phpBB 3.1 itibariyle, yer imleri tıpkı bir başlığa abone olmak gibi çalışıyor. Yer imlerindeki bir başlık güncellendiği zaman artık bildirim alabiliyorsunuz. Aboneliklerde ise, farklı olarak, mesaj panosu genelinde bir başlık ya da forum güncellendiğinde bildirim alacaksınız. Yer imleri ve abonelikler için bildirim seçeneklerini Kullanıcı Kontrol Panelindeki “Mesaj panosu tercihleri” bölümünden ayarlayabilirsiniz.',
	),
	array(
		0 => 'Belirli başlıkları nasıl yer imlerine eklerim ya da bu başlıklara nasıl abone olurum?',
		1 => 'Belirli bir başlığı yer imlerine eklemek ya da bu başlığa abone olmak için bir başlıktaki üst ve alt kısımlarda bulunan “Başlık araçları” menüsünden uygun bağlantıyı tıklayabilirsiniz.<br />Ayrıca bir başlığa cevap yazarken “Mesaja cevap geldiğinde bana bildir” seçeneğini işaretleyerek başlığa abone olabilirsiniz.',
	),
	array(
		0 => 'Belirli bir foruma nasıl abone olurum?',
		1 => 'Belirli bir foruma abone olmak için, ilgili foruma giriş yaptığınızda sayfanın alt kısmında bulunan “Foruma abone ol” bağlantısına tıklayabilirsiniz.',
	),
	array(
		0 => 'Aboneliklerimi nasıl silerim?',
		1 => 'Aboneliklerinizi, Kullanıcı Kontrol Panelinize giderek ve abonelikleriniz için bağlantıları takip ederek silebilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Dosya ekleri'
	),
	array(
		0 => 'Bu mesaj panosunda hangi dosya eklerine izin veriliyor?',
		1 => 'Her mesaj panosu yöneticisi bazı dosya eki tiplerine izin verebilir ya da izin vermeyebilir. Eğer nelerin yüklenmesine izin verildiğinden şüpheliyseniz, yardım için mesaj panosu yöneticisiyle iletişime geçin.'
	),
	array(
		0 => 'Tüm dosya eklerimi nasıl bulurum?',
		1 => 'Yüklediğiniz dosya eklerinin listesini bulmak için, Kullanıcı Kontrol Panelinize gidin ve dosya ekleri kısmındaki bağlantıları takip edin.'
	),
	array(
		0 => '--',
		1 => 'phpBB Konuları'
	),
	array(
		0 => 'Bu mesaj panosunu kim yazdı?',
		1 => 'Bu yazılım (değiştirilmemiş haliyle) <a href="https://www.phpbb.com/">phpBB Limited</a> tarafından telif hakkıyla üretilmiş ve genel dağıtıma çıkarılmıştır. Bu yazılım, GNU General Public License (Genel Kamu Lisansı), sürüm 2 (GPL-2.0) altında yapılmıştır ve serbestçe dağıtılabilir. Daha fazla detay için <a href="https://www.phpbb.com/about/">phpBB Hakkında</a> sayfasına bakın.',
	),
	array(
		0 => 'Aradığım X özellik neden yok?',
		1 => 'Bu yazılım phpBB Limited tarafından yazılmış ve lisanslanmıştır. Eğer herhangi bir özelliğin eklenmesi gerektiğini düşünüyorsanız lütfen <a href="https://www.phpbb.com/ideas/">phpBB Fikirleri Merkezi</a>’ni ziyaret edin, oradan mevcut fikirlere oy verebilir ya da yeni özellikler önerebilirsiniz.'
	),
	array(
		0 => 'Bu mesaj panosuyla ilgili hukuki sorunlar için veya suistimal durumlarda kime başvurabilirim?',
		1 => '“Takım” sayfasında listelenmiş yöneticilerin herhangi biri ile şikayetleriniz için iletişime geçebilirsiniz. Eğer onlardan cevap alamıyorsanız, o zaman alan adının sahibi ile (bir <a href="http://www.google.com/search?q=whois">whois sorgulaması</a> yaparak alan adı sahibine ulaşılabilir) ya da, eğer bu mesaj panosu ücretsiz bir serviste çalışıyorsa (ör. Yahoo!, free.fr, f2s.com, v.b.), bu servisin yönetimi veya suistimal konularla ilgilenen bölümüyle iletişime geçmelisiniz. Not: phpBB Limited, bu mesaj panosunun nasıl, nerede ve kimler tarafından kullanıldığı konusunda bir bilgisi olmadığı için <strong>kesinlikle yargılanamaz</strong> ve her ne olursa olsun sorumlu tutulamaz. phpBB.com sitesiyle veya phpBB yazılımıyla <strong>doğrudan ilgisi olmayan</strong> herhangi bir hukuki konuda (ihtiyati tedbir, mali sorumluluk, iftira vs.) phpBB Limited ile iletişime geçmeyin. Bu yazılımın herhangi <strong>üçüncü şahıslar tarafından kullanımıyla ilgili</strong> phpBB Limited’e e-posta gönderirseniz, ya çok kısa bir cevap alırsınız ya da hiç bir cevap alamazsınız.'
	),
	array(
		0 => 'Bir mesaj panosu yöneticisiyle nasıl iletişime geçebilirim?',
		1 => 'Mesaj panosunun tüm kullanıcıları, “Bize ulaşın” formunu (eğer bu özellik mesaj panosu yöneticisi tarafından etkinleştirilmişse) kullanabilir.<br />Mesaj panosunun üyeleri, bir mesaj panosu yöneticisi ile iletişime geçmek için ayrıca “Takım” bağlantısını da kullanabilir.',
	),
);
