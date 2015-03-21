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
* @Polish locale 2014-10-07 18:24:32 Zespół Olympus.pl $
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
		1 => 'Problemy z logowaniem i rejestracją'
	),
	array(
		0 => 'Dlaczego w ogóle muszę się rejestrować?',
		1 => 'Możliwe, że nie musisz. To od administratora witryny zależy czy, aby pisać wiadomości, konieczna jest rejestracja. Niemniej rejestracja umożliwia dostęp do dodatkowych funkcji niedostępnych dla gości, takich jak własny awatar, wysyłanie prywatnych wiadomości i e-maili do innych użytkowników, możliwość przypisania do grup użytkowników itp. Rejestracja zajmuje tylko chwilę, więc zaleca się jej wykonanie.',
	),
	array(
		0 => 'Co to jest COPPA?',
		1 => 'COPPA, to skrót od Child Online Privacy and Protection Act – prawa obowiązującego od 1998 roku w USA, nakładającego na właścicieli stron internetowych, które potencjalnie mogą zbierać informacje od osób małoletnich – mających mniej niż 13 lat – obowiązek posiadania pisemnej zgody rodziców lub opiekunów prawnych na zbieranie informacji prywatnych od osób poniżej 13 roku życia. Jeżeli nie masz pewności czy to dotyczy ciebie jako kogoś próbującego zarejestrować się na danej witrynie internetowej – skontaktuj się z prawnikiem, by uzyskać wyjaśnienie. phpBB Limited i właściciele tej witryny nie dostarczają pomocy prawnej z wyjątkiem przypadku opisanego w pytaniu „Z kim się kontaktować w sprawach nadużyć lub zagadnień prawnych związanych z tą witryną?”, a także nie są punktem kontaktowym dla wszelkiego rodzaju porad prawnych.',
	),
	array(
		0 => 'Dlaczego nie mogę się zarejestrować?',
		1 => 'Być może właściciel witryny wyłączył funkcję rejestracji, aby nie rejestrowały się nowe osoby. Właściciel witryny mógł także zablokować twój adres IP lub zabronił nazwy użytkownika, którą próbujesz zarejestrować. W sprawie pomocy, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'Rejestracja została przeprowadzona poprawnie, ale nie mogę się zalogować!',
		1 => 'Po pierwsze, sprawdź swoją nazwę użytkownika i hasło. Jeśli są poprawne, to wystąpiła jedna z dwóch przyczyn. Pierwszą z nich może być włączona funkcja COPPA, a w czasie rejestracji została podana informacja, że masz mniej niż 13 lat. Wówczas należy wykonać instrukcje wysłane na twój adres e-mail. Jeśli nie to było przyczyną, być może nie została aktywowana rejestracja. Niektóre witryny przed pierwszym zalogowaniem wymagają aktywowania rejestracji przez osobę rejestrującą się lub przez administratora. Informacja o tym była wyświetlona podczas rejestracji. Jeśli została wysłana do ciebie wiadomość e-mail, postępuj zgodnie z zawartymi w niej instrukcjami. Jeżeli taka wiadomość do ciebie nie dotarła, być może został podany nieprawidłowy adres e-mail lub wiadomość została zatrzymana przez filtr antyspamowy. Jeśli na pewno podany przez ciebie adres e-mail jest prawidłowy, spróbuj skontaktować się z administratorem.',
	),
	array(
		0 => 'Dlaczego nie mogę się zalogować?',
		1 => 'Powodów może być kilka. Po pierwsze, sprawdź czy twoja nazwa użytkownika i hasło są prawidłowe. Jeżeli są prawidłowe, skontaktuj się z właścicielem witryny i zapytaj czy cię nie zablokowano. Istnieje też prawdopodobieństwo, że problem powoduje błędna konfiguracja witryny, na której znajduje się forum. Skontaktuj się z właścicielem witryny i powiadom go o tym problemie. Musi on go naprawić.',
	),
	array(
		0 => 'Rejestracja została dokonana jakiś czas temu, ale teraz nie mogę się zalogować?!',
		1 => 'Możliwe, że z jakiegoś powodu administrator dezaktywował lub usunął twoje konto. Wiele witryn, aby zmniejszyć rozmiar bazy danych, cyklicznie usuwa użytkowników, którzy nic nie pisali przez dłuższy czas. Jeśli tak się stało, spróbuj zarejestrować się ponownie i bądź bardziej aktywnym i zaangażowanym w dyskusje użytkownikiem.',
	),
	array(
		0 => 'Nie pamiętam hasła!',
		1 => 'Zachowaj spokój! Twoje hasło wprawdzie nie może zostać odzyskane, ale bez problemu może zostać zresetowane. Przejdź na stronę logowania i kliknij odnośnik <samp><strong>Nie pamiętam hasła</strong></samp>. Postępuj zgodnie z instrukcjami, a prawdopodobnie niedługo znów będziesz móc się zalogować.',
	),
	array(
		0 => 'Dlaczego następuje automatyczne wylogowanie?',
		1 => 'Jeżeli w czasie logowania nie zaznaczysz funkcji <samp><strong>Zapamiętaj mnie</strong></samp>, witryna zachowa informację o tym, że twój pobyt na tej witrynie będzie trwał tylko określony przez administratora czas. Zapobiega to niewłaściwemu użyciu twojego konta przez kogoś innego. Aby pozostać zalogowanym/zalogowaną, podczas logowania zaznacz funkcję <samp><strong>Loguj mnie automatycznie</strong></samp>. Jest to niezalecane, jeżeli korzystasz z witryny z ogólnie dostępnego komputera, np. w bibliotece, kawiarence internetowej, sali komputerowej w szkole lub na uczelni itp. Jeśli nie widzisz tej funkcji, oznacza to, że administrator ją wyłączył.',
	),
	array(
		0 => 'Jak działa funkcja <samp><strong>Usuń ciasteczka witryny</strong></samp>?',
		1 => 'Funkcja <samp><strong>Usuń ciasteczka witryny</strong></samp> usuwa wszystkie ciasteczka utworzone przez phpBB dzięki, którym użytkownik jest autoryzowany i logowany do witryny. Dostarczają one również funkcję – jeśli została włączona przez administratora witryny – śledzenia przeczytanych i nieprzeczytanych przez użytkownika postów. Jeśli występują problemy z logowaniem/wylogowaniem, usunięcie ciasteczek może być pomocne.',
	),
	array(
		0 => '--',
		1 => 'Preferencje i ustawienia użytkowników',
	),
	array(
		0 => 'Jak zmienić moje ustawienia?',
		1 => 'Jeżeli jesteś zarejestrowanym użytkownikiem, wszystkie twoje ustawienia są zapisywane w bazie danych witryny. Aby je zmienić, przejdź do panelu zarządzania swoim kontem. W tym miejscu możesz dokonać zmian swoich ustawień i preferencji. Odnośnik do panelu o nazwie <samp><strong>Moje konto</strong></samp> znajduje się zazwyczaj na górze stron witryny.',
	),
	array(
		0 => 'W jaki sposób można zapobiec wyświetlaniu nazwy użytkownika na liście użytkowników przeglądających forum?',
		1 => 'W panelu zarządzania kontem, w <samp><strong>Ustawieniach witryny</strong></samp> znajduje się funkcja <samp><strong>Nie pokazuj statusu online</strong></samp>. Włącz tę funkcję, zaznaczając <samp><strong>Tak</strong></samp>. Nazwa użytkownika będzie wyświetlana tylko dla administratorów, moderatorów i dla ciebie. Twoja obecność na witrynie będzie wykazana w liczbie ukrytych użytkowników.',
	),
	array(
		0 => 'Jest wyświetlany nieprawidłowy czas!',
		1 => 'Możliwe, że jest wyświetlany czas z innej strefy czasowej, niż ta, w której się znajdujesz. Jeśli tak właśnie jest, przejdź do panelu zarządzania kontem i zmień strefę czasową, tak aby była zgodna z twoim miejscem pobytu. Np. Europa centralna, Afryka, czy Nowa Zelandia. Zmiana strefy czasowej, tak jak i większości ustawień, może zostać wykonana tylko przez zarejestrowanych użytkowników. Jeżeli nie jesteś zarejestrowanym użytkownikiem – teraz jest dobry moment, by się zarejestrować.',
	),
	array(
		0 => 'Została wykonana zmiana strefy czasowej, a nadal jest wyświetlany nieprawidłowy czas!',
		1 => 'Jeżeli na pewno strefa czasowa została ustawiona prawidłowo, a czas nadal jest wyświetlany nieprawidłowo, oznacza to, że czas na serwerze jest ustawiony nieprawidłowo. Poinformuj o tym administratora, by naprawił problem.',
	),
	array(
		0 => 'Mojego języka nie ma na liście!',
		1 => 'Być może administrator nie zainstalował pakietu zawierającego twoją wersję językową albo nikt jeszcze nie przetłumaczył phpBB3 na twój język. Zapytaj administratora witryny czy może zainstalować pakiet językowy, którego potrzebujesz. Jeśli pakiet dla twojego języka nie istnieje, może spróbujesz go utworzyć. Więcej informacji na ten temat można znaleźć na stronie internetowej phpBB Limited. Na dole każdej strony tej witryny znajduje się odnośnik do portalu phpBB Limited.',
	),
	array(
		0 => 'Czym są obrazki wyświetlane obok nazwy użytkownika?',
		1 => 'Na stronie przeglądania postów, w miejscu, gdzie są wyświetlane informacje o użytkowniku, mogą być wyświetlane dwa obrazki. Pierwszy obrazek jest skojarzony z rangą użytkownika. W zależności od używanego stylu jest on w formie gwiazdek, kwadracików lub kropek pokazujących, jak dużo postów zostało napisanych przez użytkownika lub jaki jest jego status na tej witrynie. Jest on wyświetlany poniżej nazwy użytkownika. Drugi, zazwyczaj większy obrazek, wyświetlany powyżej nazwy użytkownika jest znany jako awatar i jest unikatowy lub osobisty dla każdego użytkownika.',
	),
	array(
		0 => 'Jak wyświetlić awatar?',
		1 => 'W panelu zarządzania kontem na karcie „Profil” w sekcji „Awatar”, używając jednej z czterech metod: Gravatar, Galeria awatarów, Zdalny awatar lub Prześlij awatar, można dodać awatar. Wyświetlanie awatarów i sposób ich wyświetlania są uzależnione od administratora witryny. Jeśli nie można używać awatarów na danej witrynie, należy skontaktować się z jej administratorem.',
	),
	array(
		0 => 'Co to jest ranga i jak można ją zmienić?',
		1 => 'Rangi wyświetlane pod nazwami użytkowników oznaczają, ile postów dany użytkownik napisał lub jaki ma status na forum, np. moderatora czy administratora. Użytkownicy nie mogą bezpośrednio zmieniać stylu rang, ponieważ ustawia je administrator witryny. Nie należy pisać postów tylko po to, aby zwiększyć swój licznik postów i przez to swoją rangę. Większość witryn nie toleruje takich działań i moderator lub administrator obniży licznik postów takiego użytkownika.',
	),
	array(
		0 => 'Podczas próby wysłania wiadomości e-mail do użytkownika witryna prosi mnie o zalogowanie. Dlaczego?',
		1 => 'Tylko zarejestrowani użytkownicy mogą wysyłać e-maile do innych użytkowników przez wbudowany formularz wysyłania e-maili i tylko wtedy, jeżeli administrator włączył tę funkcję. Ma to zabezpieczać przed nieprawidłowym używaniem systemu poczty elektronicznej witryny przez anonimowych użytkowników.',
	),
	array(
		0 => '--',
		1 => 'Problemy z pisaniem',
	),
	array(
		0 => 'Jak utworzyć nowy temat na forum lub wysłać odpowiedź w temacie?',
		1 => 'Aby utworzyć nowy temat na forum, należy nacisnąć przycisk „Nowy temat”, aby odpowiedzieć w temacie, nacisnąć przycisk „Odpowiedz”. Być może, że przed publikowaniem wiadomości trzeba będzie się zarejestrować. Na dole strony forum lub strony tematów jest wyświetlana lista uprawnień użytkownika na każdym forum. Na przykład: Możesz tworzyć nowe tematy, Możesz dodawać załączniki itp.',
	),
	array(
		0 => 'W jaki sposób można zmienić lub usunąć post?',
		1 => 'Jeśli nie jesteś administratorem lub moderatorem, możesz zmieniać i usuwać tylko swoje posty. Możesz zmienić post, naciskając przycisk <samp><strong>Zmień</strong></samp> znajdujący się przy danym poście. Czasami można to zrobić tylko przez pewien czas po jego napisaniu. Jeżeli ktoś odpowiedział na ten post, pod twoim postem pojawi się informacja ile razy i kiedy ostatni raz post był zmieniany. Informacja ta wyświetli się tylko wtedy, jeśli ktoś zamieścił pod tym postem kolejny post. Jeśli post zmienił moderator lub administrator, informacja ta nie zostanie wyświetlona. Administratorzy i moderatorzy mogą zostawić notatkę z informacją, dlaczego ten post zmieniali. Zwykli użytkownicy nie mogą usuwać postów, gdy ktoś zamieścił pod ich postem nowy post.',
	),
	array(
		0 => 'W jaki sposób można dodać podpis do swojego posta?',
		1 => 'Aby dodawać podpis do posta, należy go najpierw utworzyć w panelu użytkownika. Aby dołączyć do danej wiadomości swój podpis, zaznacz funkcję <em>Dołącz podpis</em> znajdującą się w formularzu tworzenia wiadomości. Możesz także domyślnie dodawać podpis do wszystkich swoich postów, zaznaczając odpowiednią funkcję w panelu użytkownika. Po uaktywnieniu tej funkcji, za każdym razem pisząc post, możesz zdecydować o niedodawaniu do niego podpisu, usuwając w formularzu tworzenia wiadomości zaznaczenie z pola <em>Dołącz podpis</em>.',
	),
	array(
		0 => 'W jaki sposób można utworzyć ankietę?',
		1 => 'Tworzenie ankiet jest proste. Kiedy tworzysz nowy temat bądź zmieniasz pierwszy post w wątku, na dole formularza tworzenia tematu będziesz widzieć etykietę <samp><strong>Utwórz ankietę</strong></samp>. Kliknij ją i w otworzonym formularzu podaj tytuł ankiety i co najmniej dwie opcje. Każdą opcję należy wpisać w nowym wierszu widocznego pola tekstowego. Możesz określić liczbę opcji, jakie użytkownik może wybrać, wyznaczyć czas trwania ankiety (0 – bez limitu czasowego), a także umożliwić użytkownikom zmianę wcześniej oddanego głosu. Jeśli nie widzisz etykiety, prawdopodobnie nie masz uprawnień do tworzenia ankiet.',
	),
	array(
		0 => 'Dlaczego nie można dodać więcej opcji ankiety?',
		1 => 'Limit opcji w ankiecie jest ustalany przez administratora witryny. Jeśli uważasz, że potrzebujesz wstawić więcej opcji niż dozwolony limit, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'W jaki sposób zmienić lub usunąć ankietę?',
		1 => 'Podobnie, jak posty, ankiety mogą być zmieniane tylko przez ich autorów, moderatorów lub administratorów. Aby zmienić ankietę, należy dokonać zmiany pierwszego posta w wątku, z którym zawsze związana jest ankieta. Jeśli nikt jeszcze nie oddał głosu w ankiecie, jej autor może usunąć ankietę lub zmienić jej opcje. Jednakże, jeśli w ankiecie zostały już oddane głosy, tylko moderatorzy lub administratorzy mogą ją zmienić, lub usunąć. Zapobiega to modyfikowaniu ankiety w czasie jej trwania.',
	),
	array(
		0 => 'Dlaczego nie mam dostępu do forum?',
		1 => 'Niektóre fora mogą być dostępne tylko dla określonych grup lub użytkowników. Aby przeglądać, czytać, pisać na nich lub wykonywać inne operacje, musisz mieć odpowiednie uprawnienia. Skontaktuj się z moderatorem lub administratorem witryny, aby ci je przydzielił.',
	),
	array(
		0 => 'Dlaczego nie mogę dodawać załączników?',
		1 => 'Uprawnienia dotyczące załączników są przydzielane dla każdego forum, dla każdej grupy i dla każdego użytkownika. Administrator witryny mógł nie zezwolić na zamieszczanie załączników na forum, na którym piszesz lub przyznał uprawnienia tylko niektórym grupom. Jeśli nadal nie masz jasności, dlaczego nie możesz zamieszczać załączników, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'Dlaczego otrzymałem/otrzymałam ostrzeżenie?',
		1 => 'Każdy administrator witryny ma swoje zasady i regulaminy obowiązujące na danej witrynie. Są one opublikowane i administrator zaleca zapoznanie się z nimi. Jeśli ktoś ich nie przestrzegał, może otrzymać ostrzeżenie. O udzieleniu ostrzeżenia decyduje administrator witryny. phpBB Limited nie ma nic wspólnego z ostrzeżeniami udzielanymi na tej witrynie i nie ponosi żadnej odpowiedzialności związanej z nimi. Jeśli nadal nie masz jasności, dlaczego otrzymałeś/otrzymałaś ostrzeżenie, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'W jaki sposób można zgłosić posty moderatorowi?',
		1 => 'Jeśli administrator na to zezwolił, w prawym górnym rogu treści posta, który chcesz zgłosić, powinien być widoczny odpowiedni przycisk. Naciśnięcie tego przycisku spowoduje przeniesienie cię do formularza, który po jego wypełnieniu umożliwi wysłanie zgłoszenia.',
	),
	array(
		0 => 'Do czego służy przycisk <samp>Zapisz</samp> znajdujący się w oknie tworzenia tematu?',
		1 => 'Funkcja ta umożliwia zapisanie kopii roboczej i dokończenie pisania oraz wysłanie w późniejszym czasie. Zapisaną kopię roboczą można wczytać z poziomu panelu użytkownika.',
	),
	array(
		0 => 'Dlaczego mój post musi być akceptowany?',
		1 => 'Administrator witryny mógł zadecydować, że posty na danym forum wymagają przejrzenia przed publikacją. Jest również możliwe, że administrator umieścił cię w grupie, która ma ograniczenia publikowania postów polegające na konieczności ich akceptowania przez moderatorów przed opublikowaniem na forum. Aby uzyskać więcej informacji, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'W jaki sposób mogę przesunąć swój temat na górę strony tematów?',
		1 => 'Klikając odnośnik <samp><strong>Przesuń temat w górę</strong></samp>, znajdujący się w widoku tematu zazwyczaj na dole strony, możesz przesunąć go na samą górę pierwszej strony forum. Jeśli nie widać takiego odnośnika, oznacza to, że funkcja ta jest wyłączona lub nie upłynął jeszcze wymagany czas, zanim będzie możliwe użycie tej funkcji. Innym, łatwym sposobem na przesunięcie tematu na początek, jest napisanie w nim posta. Należy pamiętać, aby przy tym przestrzegać regulaminu witryny.',
	),
	array(
		0 => '--',
		1 => 'Formatowanie i typy tematów',
	),
	array(
		0 => 'Co to jest BBCode?',
		1 => 'BBCode jest specjalną implementacją języka HTML, która daje lepszą kontrolę formatowania poszczególnych elementów w postach. Używanie BBCode na forum jest uzależnione od ustawień określanych przez administratora. Można wyłączyć BBCode w poszczególnych postach, zaznaczając odpowiednią funkcję w formularzu tworzenia posta. Sam BBCode jest podobny w składni do HTML-a, ale znaczniki zawarte są w nawiasach kwadratowych [przykład] zamiast w używanych w HTML-u nawiasach ostrych &lt;przykład&gt;. Aby uzyskać więcej informacji o BBCode, zapoznaj się z przewodnikiem dostępnym ze strony tworzenia posta po kliknięciu odnośnika <samp><strong>BBCode</strong></samp>.',
	),
	array(
		0 => 'Czy można używać języka HTML?',
		1 => 'Nie. Nie można używać i przetwarzać znaczników HTML na tej witrynie. Większość formatowania, które dostarcza HTML można uzyskać, używając BBCode.',
	),
	array(
		0 => 'Co to są są emotikony?',
		1 => 'Emotikony, zwane też uśmieszkami, to małe obrazki, które mogą być użyte do wyrażania emocji. Do wyrażania emocji można też stosować krótkie kody, np. :) oznacza radość, podczas gdy :( smutek. Pełna lista emotikon jest dostępna z poziomu formularza tworzenia wiadomości. Nie należy jednak nadmiernie używać emotikon, gdyż mogą spowodować, że post stanie się nieczytelny i moderator może podjąć decyzję o ich usunięciu bądź też usunięciu całego posta. Administrator witryny może określić dopuszczalny limit emotikon w poście.',
	),
	array(
		0 => 'Czy można umieszczać obrazki w poście?',
		1 => 'Tak, obrazki można umieszczać w postach. Jeśli administrator włączył możliwość zamieszczania załączników, można wgrać obrazek bezpośrednio na witrynę. Jeśli ta funkcja nie działa, aby obrazek był wyświetlany na forum, należy podać odnośnik do obrazka umieszczonego na publicznie dostępnym serwerze, np. http://www.jakas_strona.com/moj_obrazek.gif. Nie można podawać odnośników do obrazków zapisanych na prywatnym komputerze, chyba że jest publicznie dostępnym serwerem ani do obrazków znajdujących się na stronach wymagających autoryzacji, takich jak, np. skrzynki pocztowe na Gmail lub Yahoo! oraz stronach chronionych hasłem. Aby umieścić obrazek w poście, użyj znacznika BBCode <strong>[img]</strong>.',
	),
	array(
		0 => 'Co to są ogłoszenia globalne?',
		1 => 'Ogłoszenia globalne zawierają ważne informacje i należy zawsze je czytać. Są one wyświetlane na górze każdego forum i w panelu zarządzania kontem użytkownika. Uprawnienia zamieszczania ogłoszeń globalnych są nadawane przez administratora witryny.',
	),
	array(
		0 => 'Co to są ogłoszenia?',
		1 => 'Ogłoszenia często zawierają ważne informacje dotyczące przeglądanego forum i należy je przeczytać, gdy tylko jest to możliwe. Ogłoszenia są wyświetlane na górze każdej strony forum, w którym zostały napisane. Uprawnienia zamieszczania ogłoszeń są nadawane przez administratora witryny.',
	),
	array(
		0 => 'Co to są przyklejone tematy?',
		1 => 'Przyklejone tematy są wyświetlane pod ogłoszeniami na pierwszej stronie przeglądu tematów. Często są one dość ważne, więc należy je przeczytać, gdy tylko jest to możliwe. Podobnie, jak uprawnienia zamieszczania ogłoszeń i globalnych ogłoszeń, uprawnienia przyklejania tematów są nadawane przez administratora witryny.',
	),
	array(
		0 => 'Co to są zamknięte tematy?',
		1 => 'Zamknięte tematy są to tematy, w których użytkownicy nie mogą zamieszczać odpowiedzi, a wszystkie zawarte w nich ankiety zostały automatycznie zakończone w momencie zamykania tematu. Tematy mogą być zamykane z wielu powodów i robią to moderatorzy forum lub administratorzy witryny. Zależnie od uprawnień nadanych przez administratora witryny użytkownik może mieć możliwość zamykania swoich tematów.',
	),
	array(
		0 => 'Co to są ikony tematu?',
		1 => 'Ikony tematu są obrazkami wybieranymi przez autora tematu skojarzonymi z postami – sugerują ich treść. Możliwość korzystania z ikon tematu uzależniona jest od uprawnień nadanych przez administratora witryny.',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--',
	),
	array(
		0 => '--',
		1 => 'Rangi użytkownika i grupy',
	),
	array(
		0 => 'Kim są administratorzy?',
		1 => 'Administratorzy są użytkownikami albo też grupami użytkowników posiadającymi najwyższy poziom uprawnień kontrolnych całej witryny. Mogą oni kontrolować wszystkie zagadnienia związane z funkcjonowaniem witryny włącznie z nadawaniem uprawnień, blokowaniem użytkowników, tworzeniem grup użytkowników lub moderatorów itp. Zakres ich uprawnień zależy od założyciela witryny i innych administratorów mających prawo nominowania nowych administratorów. Administratorzy mogą mieć pełne uprawnienia moderatorów na wszystkich forach utworzonych na witrynie. Zakres uprawnień moderacyjnych uzależniony jest od uprawnień nadanych przez założyciela witryny.',
	),
	array(
		0 => 'Kim są moderatorzy?',
		1 => 'Moderatorzy są użytkownikami albo też grupami użytkowników, których zadaniem jest codzienne przeglądanie forów. Mają oni możliwość zmiany treści lub usuwania postów, a także blokowania, odblokowywania, przenoszenia, usuwania i dzielenia tematów na forum, które moderują. Z reguły moderatorzy czuwają, aby użytkownicy pisali na temat oraz nie publikowali niewłaściwych i obraźliwych materiałów.',
	),
	array(
		0 => 'Co to są grupy użytkowników?',
		1 => 'Grupy użytkowników, to grupy, na jakie administratorzy dzielą całą społeczność witryny, aby łatwiej było nimi zarządzać. Każdy użytkownik może należeć do wielu grup, a każda grupa może mieć swoje własne uprawnienia. Dzięki temu administratorzy mogą łatwo zmieniać uprawnienia wielu użytkowników naraz, nadawać uprawnienia moderatora lub dawać dostęp użytkownikom do prywatnego forum.',
	),
	array(
		0 => 'Gdzie znajduje się spis grup użytkowników i jak można dołączyć do grupy?',
		1 => 'Spis grup użytkowników można zobaczyć, otwierając kartę <samp><strong>Grupy</strong></samp> znajdującą się w panelu zarządzania kontem, który otwiera się po kliknięciu odnośnika <samp><strong>Moje konto</strong></samp>. Nie wszystkie grupy są dostępne dla każdego. Niektóre mogą wymagać akceptacji przyjęcia nowego członka, niektóre mogą być zamknięte, a jeszcze inne mogą mieć ukrytych członków. Użytkownik może poprosić o przyjęcie do danej grupy, naciskając odpowiedni przycisk. Prośba o przyjęcie do grupy, która wymaga akceptacji przyjęcia nowego członka, musi zostać zaakceptowana przez lidera grupy. Może on poprosić użytkownika o podanie wyjaśnień, dlaczego chce on dołączyć do tej grupy. W przypadku otrzymania negatywnej decyzji, proszę nie nękać lidera grupy pytaniami – widocznie miał on swoje powody.',
	),
	array(
		0 => 'W jaki sposób można zostać liderem grupy?',
		1 => 'Lidera grupy zazwyczaj mianuje administrator witryny podczas tworzenia grupy. Jeśli chcesz utworzyć grupę użytkowników, skontaktuj się z administratorem, wysyłając do niego prywatną wiadomość.',
	),
	array(
		0 => 'Dlaczego niektóre nazwy użytkowników są wyświetlane innymi kolorami?',
		1 => 'Możliwe, że administrator witryny przypisał kolor członkom grupy, aby ułatwić identyfikowanie członków tej grupy.',
	),
	array(
		0 => 'Co to jest <samp>Domyślna grupa użytkownika</samp>?',
		1 => 'Jeżeli użytkownik jest członkiem kilku grup, jego domyślna grupa jest używana do określenia, jaki kolor i ranga będzie domyślnie dla niego wyświetlana. Administrator witryny może nadać użytkownikowi uprawnienia do zmiany domyślnej grupy. Wówczas można to zrobić z poziomu panelu zarządzania kontem.',
	),
	array(
		0 => 'Czym jest odnośnik <samp>Zespół administracyjny</samp>?',
		1 => 'Odnośnik ten prowadzi do strony z listą osób odpowiedzialnych za forum, na której znajduje się spis administratorów i moderatorów oraz inne dane, takie jak fora przez nich moderowane.',
	),
	array(
		0 => '--',
		1 => 'Prywatne wiadomości',
	),
	array(
		0 => 'Nie mogę wysyłać prywatnych wiadomości!',
		1 => 'Mogą być trzy przyczyny takiej sytuacji. Pierwsza – nie jesteś zarejestrowanym użytkownikiem lub nie jesteś zalogowany/zalogowana. Druga – administrator witryny wyłączył przesyłanie prywatnych wiadomości na całej witrynie. Trzecia – administrator witryny uniemożliwił ci przesyłanie prywatnych wiadomości. Aby uzyskać więcej informacji, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'Otrzymuję niechciane prywatne wiadomości!',
		1 => 'W panelu użytkownika możesz, określając odpowiednie reguły ustawić automatyczne usuwanie wiadomości od danego nadawcy. Jeżeli otrzymujesz od kogoś obraźliwe prywatne wiadomości, poinformuj o tym moderatorów witryny, którzy będą mogli zabronić takiemu użytkownikowi wysyłania jakichkolwiek prywatnych wiadomości.',
	),
	array(
		0 => 'Otrzymałem/otrzymałam spam lub obraźliwy e-mail od kogoś z tej witryny!',
		1 => 'Przykro nam z tego powodu. System wysyłania e-maili witryny zawiera zabezpieczenia umożliwiające wytropienie użytkowników, którzy wysyłają takie wiadomości. Prześlij administratorowi witryny pełną kopię otrzymanego e-maila – ważne, aby były w niej zawarte nagłówki, ponieważ zawierają one informacje o nadawcy. Administrator będzie wówczas mógł podjąć odpowiednie działania.',
	),
	array(
		0 => '--',
		1 => 'Przyjaciele i wrogowie'
	),
	array(
		0 => 'Co to jest lista przyjaciół i wrogów?',
		1 => 'Jest to lista, którą można użyć do organizowania różnych użytkowników witryny. Użytkownicy dodani do listy przyjaciół będą wyświetleni na karcie <samp><strong>Przyjaciele</strong></samp> znajdującej się w panelu zarządzania kontem. Z tego poziomu można szybko sprawdzić ich status, a także wysłać prywatną wiadomość. Zależnie od używanego stylu witryny, posty tych użytkowników mogą być wyróżniane. Jeśli użytkownik zostanie dodany do listy wrogów, wszystkie posty przez niego napisane domyślnie nie będą wyświetlane.',
	),
	array(
		0 => 'W jaki sposób można dodawać/usuwać użytkowników z listy przyjaciół lub wrogów?',
		1 => 'Można dodawać użytkowników na dwa sposoby. Po pierwsze, klikając w profilu wybranego użytkownika odnośnik <samp><strong>Dodaj do przyjaciół</strong></samp> lub <samp><strong>Dodaj do wrogów</strong></samp>. Po drugie, przejść do panelu zarządzania swoim kontem i tam na karcie <samp><strong>Przyjaciele i wrogowie</strong></samp> wprowadzić odpowiednie dane użytkownika. Na tej samej karcie można także usuwać użytkowników z list.',
	),
	array(
		0 => '--',
		1 => 'Przeszukiwanie forów'
	),
	array(
		0 => 'W jaki sposób można przeszukiwać fora?',
		1 => 'Należy wprowadzić poszukiwaną frazę w pole wyszukiwania znajdujące się na stronie wykazu forów, a także stronach forów i tematów. W celu uzyskania zaawansowanych funkcji wyszukiwania, należy kliknąć odnośnik <samp><strong>Wyszukiwanie zaawansowane</strong></samp> dostępny na wszystkich stronach witryny. Rozmieszczenie elementów sterujących mechanizmem wyszukiwania może zależeć od używanego stylu.',
	),
	array(
		0 => 'Dlaczego moje wyszukiwanie nie zwraca wyników?',
		1 => 'Prawdopodobnie zapytanie nie było jasno sprecyzowane i zawierało wiele podobnych zwrotów nie zindeksowanych przez phpBB. Dokładnie sprecyzuj zapytanie – użyj funkcji dostępnych w wyszukiwaniu zaawansowanym.',
	),
	array(
		0 => 'Dlaczego moje wyszukiwanie zwraca pustą stronę?!',
		1 => 'Wyszukiwanie zwróciło zbyt dużo wyników. Użyj zaawansowanego wyszukiwania i postaraj się bardziej precyzyjnie określić szukany fragment oraz fora, które mają być przeszukane.',
	),
	array(
		0 => 'Jak można wyszukać użytkowników?',
		1 => 'Przejdź na stronę <samp><strong>Użytkownicy</strong></samp> i kliknij odnośnik <samp><strong>Znajdź użytkownika</strong></samp>.',
	),
	array(
		0 => 'W jaki sposób można znaleźć swoje posty i tematy?',
		1 => 'Swoje posty można znaleźć, klikając odnośnik <samp><strong>Wyświetl moje posty</strong></samp> znajdujący się w panelu zarządzania kontem lub odnośnik <samp><strong>Posty użytkownika</strong></samp> na stronie swojego profilu lub wybierając „Twoje posty” z menu „Więcej…” znajdującego się w górnym lewym rogu witryny. Jeśli chcesz wyszukać swoje tematy, użyj strony wyszukiwania zaawansowanego i skorzystaj z odpowiednich funkcji.',
	),
	array(
		0 => '--',
		1 => 'Obserwowanie tematów i zakładki'
	),
	array(
		0 => 'Jaka jest różnica między dodaniem zakładki a obserwowaniem?',
		1 => 'Dodawanie zakładek w phpBB 3.0 działa podobnie, jak dodawanie zakładek w przeglądarce. Użytkownik nie dostaje powiadomienia, gdy w temacie pojawia się nowa treść. W phpBB 3.1 dodawanie zakładek przypomina obserwowanie tematu. Użytkownik może być powiadamiany, gdy nastąpi aktualizacja tematu oznaczonego zakładką. Funkcja obserwowania powiadamia użytkownika – w wybrany przez niego sposób – gdy w obserwowanym temacie bądź forum pojawiła się nowa treść. Sposoby powiadamiania dla zakładek i obserwowanych elementów można konfigurować w panelu użytkownika na karcie „Ustawienia witryny”.',
	),
	array(
		0 => 'W jaki sposób można dodać zakładkę do wybranych tematów lub je obserwować?',
		1 => 'Aby dodać zakładkę do wybranego tematu lub go obserwować, należy kliknąć odpowiedni odnośnik w menu <samp><strong>Narzędzia tematu</strong></samp> znajdujące się na górze i na dole wątku.<br /> Udzielenie odpowiedzi w temacie, gdy jest aktywna funkcja <samp><strong>Powiadamiaj o opublikowaniu odpowiedzi</strong></samp> spowoduje włączenie obserwowania tematu.',
	),
	array(
		0 => 'Jak obserwować wybrane forum?',
		1 => 'Aby obserwować wybrane forum, należy kliknąć „Obserwuj forum” znajdujący się na dole strony.',
	),
	array(
		0 => 'W jaki sposób usunąć obserwowanie forum, tematu?',
		1 => 'Aby wyłączyć funkcję obserwowania forum, tematu, należy przejść do panelu zarządzania kontem i następnie do karty <samp><strong>Obserwowane</strong></samp>. W tym miejscu można wyłączyć obserwowanie forów i tematów.',
	),
	array(
		0 => '--',
		1 => 'Załączniki',
	),
	array(
		0 => 'Jakie typy załączników są dozwolone na tej witrynie?',
		1 => 'Każdy administrator witryny może zezwolić lub zabronić zamieszczać pewne typy załączników. Jeśli nie masz pewności zamieszczanie, jakich typów załączników jest zabronione, skontaktuj się z administratorem witryny.',
	),
	array(
		0 => 'W jaki sposób można znaleźć wszystkie swoje załączniki?',
		1 => 'Aby wyświetlić listę zamieszczonych przez ciebie załączników, przejdź do panelu zarządzania swoim kontem i kliknij odnośnik <samp><strong>Załączniki</strong></samp>.',
	),
	array(
		0 => '--',
		1 => 'Zagadnienia związane z phpBB',
	),
	array(
		0 => 'Kto jest autorem tego oprogramowania?',
		1 => 'Prawa autorskie do tego oprogramowania w jego niezmodyfikowanej formie, ma <a href="https://www.phpbb.com/">phpBB Limited</a>. Jest ono publikowane na licencji GNU General Public License wersja 2 (GPL-2.0), co w praktyce oznacza, że może być bez ograniczeń dystrybuowane. Więcej na ten temat dowiesz się na stronie <a href="https://www.phpbb.com/about/">About phpBB</a>.',
	),
	array(
		0 => 'Dlaczego funkcja X nie jest dostępna?',
		1 => 'To oprogramowanie zostało stworzone i jest licencjonowane przez phpBB Limited. Jeśli uważasz, że brakuje w nim jakiejś funkcji, przejdź na stronę <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, gdzie możesz zagłosować na istniejące propozycje lub zaproponować nowe funkcje.',
	),
	array(
		0 => 'Z kim się kontaktować w sprawach nadużyć lub zagadnień prawnych związanych z tą witryną?',
		1 => 'W tych sprawach, należy skontaktować się z jednym z administratorów, których dane wyświetlone są na liście zespołu administracyjnego. Jeżeli jednak nie otrzymasz odpowiedzi, należy skontaktować się z właścicielem domeny – wykonaj sprawdzenie <a href="http://www.google.com/search?q=whois">kto to jest</a> lub, jeśli witryna jest uruchomiona na jednym z darmowych serwisów, np. Yahoo!, free.fr, f2s.com, itp., z kierownictwem lub wydziałem nadużyć tego serwisu. Absolutnie <strong>nie należy</strong> do kompetencji phpBB Limited i nie może ona w żaden sposób być obarczana odpowiedzialnością za to w jaki sposób, gdzie lub przez kogo ta witryna jest używana. Proszę nie kontaktować się z phpBB Limited w sprawach zagadnień prawnych (wstrzymania i zaniechania, odpowiedzialności, szkalujących komentarzy itp.) <strong>bezpośrednio nie związanych</strong> z witryną phpBB.com lub oprogramowaniem phpBB samym w sobie. Jeśli do phpBB Limited zostanie wysłana wiadomość dotycząca <strong>innych podmiotów</strong> używających tego oprogramowania, nie należy oczekiwać odpowiedzi, lub zostanie udzielona odpowiedź lakoniczna.',
	),
	array(
		0 => 'Jak nawiązać kontakt z administratorem witryny?',
		1 => 'Wszyscy użytkownicy witryny mogą używać – jeśli funkcja ta jest włączona przez administratora witryny – formularza „Kontakt z nami”.<br />Członkowie witryny mogą także używać odnośnika „Zespół administracyjny”.',
	),
);
