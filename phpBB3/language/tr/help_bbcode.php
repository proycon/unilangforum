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
		1 => 'Giriş'
	),
	array(
		0 => 'BBCode nedir?',
		1 => 'BBCode HTML\'in özel bir uygulamasıdır. Forum\'a yazdığınız mesajlarda BBCode kullanabilme imkanını pano yöneticisi saptar. Ayrıca mesaj gönderme formundaki seçenekler sayesinde dilediğiniz mesajlarda BBCode\'u iptal etmeniz mümkündür. BBCode, HTML\'ye benzer tarzdadır fakat etiketler &lt; ve &gt; yerine köşeli parantez içine alınır. Ayrıca nelerin nasıl görüntülendiği daha iyi kontrol edilebilir. Mesajlarınıza BBCode eklemek için mesaj gövdesi üzerinde bulunan araç çubuğunu kullanmanız işi çok daha kolaylaştırır (araç çubuğu görünümü kullandığınız tema\'ya bağlıdır). Ayrıca alttaki rehberi faydalı bulabilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Metin Biçimini Değiştirme'
	),
	array(
		0 => 'Kalın, italik veya altı çizili yazılar nasıl oluşturulur?',
		1 => 'BBCode, metnin temel biçimlemesini kolayca değiştirmenizi sağlayan etiketlere sahiptir. Bunu gerçekleştirmek için şu yöntemler kullanılır: <ul><li>Metnin belirli bir kısmını kalın harflerle görüntülemek için <strong>[b][/b]</strong> etiketleri içine alın, örn. <br /><br /><strong>[b]</strong>Merhaba<strong>[/b]</strong><br /><br />yazılınca <strong>Merhaba</strong> olarak görüntülenir.</li><li>Altı çizili yazılar için <strong>[u][/u]</strong> kullanın, örn.: <br /><br /><strong>[u]</strong>Günaydın<strong>[/u]</strong><br /><br />yazılınca <span style="text-decoration: underline">Günaydın</span> olarak görüntülenir.</li><li>Metni italik yazmak için <strong>[i][/i]</strong> kullanın, örn. <br /><br />Bu <strong>[i]</strong>Mükemmel!<strong>[/i]</strong><br /><br />yazılınca sonuç Bu <i>Mükemmel!</i> olur.</li></ul>'
	),
	array(
		0 => 'Yazıların rengi veya boyutu nasıl değiştirilir?',
		1 => 'Yazıların renk veya boyutunu değiştirmek için alttaki etiketler kullanılabilir. Elde edilen sonuç, kullanılan tarayıcı ve bilgisayar sistemine göre değişebilir, aklınızda bulunsun: <ul><li>Yazıların rengi, metni <strong>[color=][/color]</strong> etiketleri içine alarak değiştirilir. Belirli İngilizce renk isimlerini (örn. red, blue, yellow vs.) veya alternatif olarak 16 tabanlı sayı sisteminde kodlanmış üç rakamlı renk kodunu yazabilirsiniz (örn. #FFFFFF, #000000). Metni, örneğin kırmızı harflerle yazmak için:<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />veya<br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br />aynı şekilde görüntülenir: <span style="color:red">Hello!</span></li><li>Karakterlerin boyutunu benzer şekilde <strong>[size=][/size]</strong> kullanarak değiştirebilirsiniz. Bu etiket, kullanıcının seçtiği tema\'ya bağlıdır. Karakterlerin yüzde olarak boyutunu yazmanız önerilir. Bu rakam varsayılan olarak 20 (çok küçük) ile başlayıp, en fazla 200 (çok büyük) değerindedir. Örnek:<br /><br /><strong>[size=30]</strong>KÜÇÜK<strong>[/size]</strong><br /><br />genelde şu sonucu verir: <span style="font-size:30%;">KÜÇÜK</span><br /><br />öte yandan:<br /><br /><strong>[size=200]</strong>BÜYÜK!<strong>[/size]</strong><br /><br /><span style="font-size:200%;">BÜYÜK!</span> sonucunu verir.</li></ul>'
	),
	array(
		0 => 'Biçimlendirme etiketlerini karıştırabilir miyim?',
		1 => 'Evet, mesela dikkati çekmek için şöyle yazabilirsiniz:<br /><br /><strong>[size=150][color=red][b]</strong>DİKKAT!<strong>[/b][/color][/size]</strong><br /><br />Bu yazı şu şekilde görüntülenir: <span style="color:red;font-size:200%;"><strong>DİKKAT!</strong></span><br /><br />Uzun metinleri bu şekilde yazmamanızı öneririz! Unutmayın ki, etiketlerin düzgün bir şekilde kapatılmasını temin etmek, metni gönderen kişi olarak sizin görevinizdir. Örneğin bu şekilde yazmak yanlıştır: <br /><br /><strong>[b][u]</strong>Etiketler hatalı kapatılmış<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Alıntı ile cevap ve eşaralıklı yazıtipi'
	),
	array(
		0 => 'Alıntı ile cevap yazma',
		1 => 'Bir metinden alıntı yapmanın iki ayrı yöntemi vardır: kaynak vererek veya vermeyerek.<ul><li>Bir mesaja cevap vermek için Alıntı ile Cevap komutunu kullanırsanız, orijinal mesajın kendi mesajınıza <strong>[quote=&quot;&quot;][/quote]</strong> etiketleri arasında eklendiğini göreceksiniz. Bu yöntem, bir şahsı veya seçeceğiniz herhangi başka bir yeri kaynak vererek yanıt yazmanızı sağlar. Örneğin Ali isminde bir şahsın yazdıklarını iktibas etmek için şu şekilde yazmanız gerek: <br /><br /><strong>[quote=&quot;Ali&quot;]</strong>Ali\'nin yazdığı yazılar...<strong>[/quote]</strong><br /><br />Sonuçta iktibas edilen kısmın önüne otomatik olarak &quot;Ali demiş ki:&quot; yazılır. Alıntı yaptığınız şahsın ismini alıntılama işaretleri &quot;&quot; arasına almayı unutmayın, alıntılama işaretlerini kullanmanız <strong>şarttır</strong>.</li><li>İkinci yöntem, kaynak vermeden alıntı yapmanızı sağlar. İlgili bölümü <strong>[quote][/quote]</strong> etiketleri içine almanız yeterli. Mesajı görüntülediğiniz zaman metin, bir alıntı bloğunun içerisinde gösterilecektir.</li></ul>'
	),
	array(
		0 => 'Kaynak yazılım veya eşaralıklı yazıtipiyle görüntüleme',
		1 => 'Bir programlama dilinde yazılmış kaynak yazılım veya eş aralıklı yazı tipi (örn. Courier) gerektiren herhangi bir metni görüntülemek için, ilgili kısmı <strong>[code][/code]</strong> etiketleri içine almalısınız. Örn.: <br /><br /><strong>[code]</strong>echo &quot;Bu bir örnek koddur&quot;;<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> etiketleri arasına yazılan tüm biçimleme etiketleri (örn. [i], [b] gibi) iptal edilir. PHP sözdizimi vurgulaması <strong>[code=php][/code]</strong> etiketleri kullanılarak açılabilir ve okunabilirliği arttırmak açısından PHP kod örnekleri ile ilgili mesaj gönderildiğinde bu önerilir.'
	),
	array(
		0 => '--',
		1 => 'Listeler oluşturma'
	),
	array(
		0 => 'Madde imiyle bir liste oluşturma',
		1 => 'BBCode rakamsız (madde imiyle) ve rakamlı olmak üzere iki türlü liste destekler. Bu listeler aslında HTML listelerine eşittir. Rakamsız liste, her maddeyi bir madde imiyle beraber satır başını biraz girintilenmiş olarak görüntüler. Rakamsız bir liste hazırlamak için <strong>[list][/list]</strong> etiketlerini kullanın ve her satırın başına <strong>[*]</strong> yazın. Örn. sevdiğiniz renklerin bir listesini şu şekilde hazırlayabilirsiniz:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Kırmızı<br /><strong>[*]</strong>Mavi<br /><strong>[*]</strong>Sarı<br /><strong>[/list]</strong><br /><br />Sonuç olarak şu listeyi göreceksiniz:<ul><li>Kırmızı</li><li>Mavi</li><li>Sarı</li></ul>'
	),
	array(
		0 => 'Rakamlı bir liste oluşturma',
		1 => 'İkinci liste türü olan rakamlı listeyle, her satır başında görülen rakamı kontrol edebilirsiniz. Rakamlara göre sıralanmış bir liste için <strong>[list=1][/list]</strong> kullanmanız gerek. Alternatif olarak alfabeye göre sıralanmış bir liste için <strong>[list=a][/list]</strong> etiketlerini kullanabilirsiniz. Rakamsız listelerde olduğu gibi, her maddeyi <strong>[*]</strong> ile işaretlemeniz gerek. Örneğin:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Mağazaya git<br /><strong>[*]</strong>Yeni bilgisayar al<br /><strong>[*]</strong>Eve götür<br /><strong>[/list]</strong><br /><br />şu şekilde görüntülenir:<ol style="list-style-type: decimal;"><li>Mağazaya git</li><li>Yeni bilgisayar al</li><li>Eve götür</li></ol>Öte yandan alfabeye göre sıralanmış bir listeyi şu şekilde yazmanız gerekir:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Birinci seçenek<br /><strong>[*]</strong>İkinci seçenek<br /><strong>[*]</strong>Üçüncü seçenek<br /><strong>[/list]</strong><br /><br />Sonuç:<ol style="list-style-type: lower-alpha"><li>Birinci seçenek</li><li>İkinci seçenek</li><li>Üçüncü seçenek</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Bağlantı oluşturma'
	),
	array(
		0 => 'Ayrı bir siteye bağlantı verme',
		1 => 'phpBB, BBCode yoluyla daha iyi bir şekilde URLler olarak bilinen URIler (Uniform Resource Indicators) oluşturmayı destekler.<ul><li>Birinci yöntem <strong>[url=][/url]</strong> etiketiyledir. = işaretinin arkasına yazılanlar bağlantı olarak çalışır. Örneğin phpBB.com\'a bağlantı vermek için şu şekilde yazın:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>phpBB\'yi ziyaret edin!<strong>[/url]</strong><br /><br />Sonuçta şu bağlantıyı göreceksiniz: <a href="http://www.phpbb.com/">phpBB\'yi ziyaret edin!</a> Not: Bu bağlantı kullanıcıların tarayıcı ayarlarına bağlı olarak aynı pencerede veya yeni bir pencerede açılır.</li><li>Bağlantı adresinin gösterilmesini istiyorsanız, şu şekildede yazabilirsiniz:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Sonuçta şu bağlantıyı göreceksiniz: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>phpBB ayrıca <i>Sihirli Bağlantılar</i> denen bir işleme sahip. Bunun sayesinde, kurallara uygun bir şekilde yazılan her bağlantı adresi otomatik olarak bağlantıya çevrilir, herhangi bir etiket, hatta http:// yazmanıza gerek kalmaz. Örn. www.phpbb.com yazınca, izlenim sayfasında otomatik olarak <a href="http://www.phpbb.com/">www.phpbb.com</a> olarak görüntülenir.</li><li>Aynı işlem email adresleri için uygulanır. Dilerseniz özel olarak bir adres belirleyebilirsiniz, örn.:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />yazılınca şu şekilde görüntülenir: <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> Veya basitçe no.one@domain.adr yazabilirsiniz ve mesajınız görüntülendiğinde bu kısım otomatik olarak bağlantıya çevrilir.</li></ul>Bütün BBCode etiketleri gibi, bağlantı adreslerinide diğer etiketlerin içine alabilirsiniz, örn. <strong>[img][/img]</strong> (bir sonraki madde bakın), <strong>[b][/b]</strong>, vs. Biçimleme etiketlerinde olduğu gibi, etiketlerin düzgün bir şekilde sırasıyla kapatılmasını kendiniz sağlamalısınız, örn.:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />doğru <span style="text-decoration: underline">değildir</span> ve hatta mesajınızın silinmesine yol açabilir, bu konuda dikkatli olmanız gerek.'
	),
	array(
		0 => '--',
		1 => 'Mesajlarda Resim Görüntüleme'
	),
	array(
		0 => 'Bir mesaja resim eklemek',
		1 => 'phpBB BBCode mesajlarınıza resimler eklemek için bir etiket içerir. Bu etiketi kullanırken iki önemli noktayı dikkate almanız gerekir: birçok kullanıcı mesajlarda çok sayıda resmin görüntülenmesini hoş karşılamaz. Ayrıca göstermek istediğiniz resim internet üzerinde mevcut olmalıdır (bir web sunucusu çalıştırmıyorsanız, bu resmin kendi bilgisayarınızda bulunması yeterli değildir). Bir resmi görüntülemek için, resmin adresini <strong>[img][/img]</strong> etiketleri içine almalısınız. Örn.:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Bir önceki maddede belirtildiği gibi, resmi dilerseniz <strong>[url][/url]</strong> etiketleri içine alabilirsiniz. Örn.:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />oluşturulacak olan:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	), 
	array( 
		0 => 'Bir mesaja dosya ekleri eklemek',
		1 => 'Dosya ekleri, yeni <strong>[attachment=][/attachment]</strong> BBCode etiketlerini kullanarak bir mesajın herhangi bir bölümüne yerleştirilebilir, tabi ki eğer dosya eki özelliği mesaj panosu yöneticisi tarafından açıldıysa ve dosya ekleri oluşturmak için uygun izinleriniz verildiyse... Satır içi dosya ekleri yerleştirmek için mesaj gönderme ekranında aşağı açılır bir kutu (sırasıyla bir buton) bulunur.'
	),
	array(
		0 => '--',
		1 => 'Diğer Konular'
	),
	array(
		0 => 'Kendi etiketlerimi ekleyebilir miyim?',
		1 => 'Eğer bu mesaj panosunda bir yöneticiyseniz ve uygun izinleriniz varsa, Özel BBCode’lar bölümü aracılığıyla daha fazla BBCode ekleyebilirsiniz.'
	),
);
