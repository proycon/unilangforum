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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, array(
'ADDED_PROFILE_FIELD'=>'Prilagođeno korisničko polje je dodano.',
'ALPHA_DOTS'=>'Alfanumerički znakovi i točke',
'ALPHA_ONLY'=>'Alfanumerički znakovi',
'ALPHA_SPACERS'=>'Alfanumerički znakovi i razmaknice',
'ALPHA_UNDERSCORE'=>'Alfanumerički znakovi i podvlaknice (_)',
'ALPHA_PUNCTUATION'=>'Alfanumerički znakovi, zarezi, točke, podvlaknice (_) i minusnice (-) počev sa slovom',
'ALWAYS_TODAY'=>'Uvijek trenutni datum',
'BOOL_ENTRIES_EXPLAIN'=>'Upiši opcije.',
'BOOL_TYPE_EXPLAIN'=>'Definiraj tip za odabir: ili kvadratići [checkbox] ili kružići [radio buttons].<br />Kvadratići će biti prikazani samo ako su označeni za korisnika/cu u slučaju čega će <strong>druga</strong> jezična opcija biti korištena.<br />Kružići će biti prikazani bez obzira na njihovu vrijednost.',
'CHANGED_PROFILE_FIELD'=>'Korisničko polje je izmijenjeno.',
'CHARS_ANY'=>'Bilo koji znak',
'CHECKBOX'=>'Kvadratić(i) za odabir [checkbox]',
'COLUMNS'=>'Stupci',
'CP_LANG_DEFAULT_VALUE'=>'Zadana vrijednost',
'CP_LANG_EXPLAIN'=>'Opis polja',
'CP_LANG_EXPLAIN_EXPLAIN'=>'Objašnjenje polja koje će biti vidljivo korisniku/ci.',
'CP_LANG_NAME'=>'Naziv polja koje će biti vidljivo korisniku/ci.',
'CP_LANG_OPTIONS'=>'Opcije',
'CREATE_NEW_FIELD'=>'Kreiraj novo polje',
'CUSTOM_FIELDS_NOT_TRANSLATED'=>'Najmanje jedno prilagođeno korisničko polje nije prevedeno.<br />Upiši tražene informacije klikom na <em>“Prevedi”</em> link.',
'DEFAULT_ISO_LANGUAGE'=>'Zadani jezik [%s]',
'DEFAULT_LANGUAGE_NOT_FILLED'=>'Jezični upisi zadanog jezika nisu ispunjeni za korisničko polje.',
// <!-- Kocka je hičena! -->
'DEFAULT_VALUE'=>'Zadana vrijednost',
'DELETE_PROFILE_FIELD'=>'Izbriši korisničko polje',
'DELETE_PROFILE_FIELD_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati korisničko polje?',
'DISPLAY_AT_PROFILE'=>'Prikaži u korisničkom Profilu/Postavkama',
'DISPLAY_AT_PROFILE_EXPLAIN'=>'Ukoliko je omogućeno, korisnik/ca će moći mijenjati korisničko polje u korisničkom Profilu/Postavkama.',
'DISPLAY_AT_REGISTER'=>'Prikaži prilikom registracije',
'DISPLAY_AT_REGISTER_EXPLAIN'=>'Ukoliko je omogućeno, korisničko polje bit će prikazano prilikom registracije.',
'DISPLAY_ON_MEMBERLIST'=>'Prikaži na popisu Članstva',
'DISPLAY_ON_MEMBERLIST_EXPLAIN'=>'Ukoliko je omogućeno, polje će biti prikazano, na popisu Članstva, u retku pored korisničkog imena korisnika/ce.',
'DISPLAY_ON_PM'=>'Prikaži u privatnim porukama',
'DISPLAY_ON_PM_EXPLAIN'=>'Ukoliko je omogućeno, polje će biti prikazano, u mini profilu, kod prikazivanja privatnih poruka.',
'DISPLAY_ON_VT'=>'Prikaži na “zaslonu” tema/e',
'DISPLAY_ON_VT_EXPLAIN'=>'Ukoliko je omogućeno, polje će biti prikazano u mini-profilu na “zaslonu” tema/e.',
'DISPLAY_PROFILE_FIELD'=>'Prikaži korisničko polje',
'DISPLAY_PROFILE_FIELD_EXPLAIN'=>'Korisničko polje bit će prikazano na svim dopuštenim mjestima, ukoliko [će biti] je omogućeno u <em>Ostalim postavkama</em>.<br />Postavljanje opcije na "Ne" rezultirat će skrivanjem polja na stranicama tema, korisničkim profilima i popisu Članstva.',
'DROPDOWN_ENTRIES_EXPLAIN'=>'Upiši opcije, svaku u novi redak.',
'EDIT_DROPDOWN_LANG_EXPLAIN'=>'Možeš mijenjati opcije te dodavati nove.<br />Prilikom dodavanja novih opcija, nije preporučljivo umetati ih između već postojećih već, dodavati ih na kraj da ne bi došlo do netočnog opcioniranja kod korisnika/ca [isto vrijedi i za izbrisivanje opcija (s time da kod izbrisivanja treba obratiti pažnju na to da će korisniku/ci, ukoliko je izbrisana opcija koju je izabrao/la, “izabranom” opcijom postati zadana opcija)].',
'EMPTY_FIELD_IDENT'=>'Nije upisano polje identifikacije.',
'EMPTY_USER_FIELD_NAME'=>'Nije upisan naziv polja.',
'ENTRIES'=>'Zapisi',
'EVERYTHING_OK'=>'Sve u redu',
'FIELD_BOOL'=>'Boolean [Da/Ne]',
'FIELD_CONTACT_DESC'=>'Kontakt opis',
'FIELD_CONTACT_URL'=>'Kontakt link',
'FIELD_DATE'=>'Datum',
'FIELD_DESCRIPTION'=>'Opis polja',
'FIELD_DESCRIPTION_EXPLAIN'=>'Objašnjenje polja koje će biti vidljivo korisniku/ci.',
'FIELD_DROPDOWN'=>'Padajući izbornik',
'FIELD_GOOGLEPLUS'=>'Google+',
'FIELD_IDENT'=>'Identifikacija polja',
'FIELD_IDENT_ALREADY_EXIST'=>'Izabrana identifikacija polja [već] postoji.<br />Izaberi drugi naziv.',
'FIELD_IDENT_EXPLAIN'=>'Identifikacija polja je naziv koji služi za identifikaciju korisničkog polja u bazi podataka i predlošcima.',
'FIELD_INT'=>'Brojevi',
'FIELD_IS_CONTACT'=>'Prikaži polje kao Kontakt polje',
'FIELD_IS_CONTACT_EXPLAIN'=>'Kontakt polja prikazana su u kontakt odjeljku korisničkog profila te [različito] u mini profilu, kod prikazivanja privatnih poruka.<br />Možeš koristiti <samp>%s</samp> kao “mjesto rezervirano za promjenjivu varijablu” (a) koja će biti zamijenjena vrijednošću unesenom od strane korisnika/ce.',
'FIELD_LENGTH'=>'Dužina kućice za upis podataka',
'FIELD_NOT_FOUND'=>'Korisničko polje nije (pro)nađeno.',
'FIELD_STRING'=>'Tekstualno polje',
'FIELD_TEXT'=>'Kućica za upis teksta',
'FIELD_TYPE'=>'Tip polja',
'FIELD_TYPE_EXPLAIN'=>'Tip polja nećeš moći promijeniti naknadno.',
'FIELD_URL'=>'URL [Link]',
'FIELD_VALIDATION'=>'Provjera valjanosti polja',
'FIRST_OPTION'=>'Prva opcija',
'HIDE_PROFILE_FIELD'=>'Sakrij korisničko polje',
'HIDE_PROFILE_FIELD_EXPLAIN'=>'Ukoliko je omogućeno, korisničko polje bit će prikazano samo korisniku/ci te administratori(ca)ma/moderatori(ca)ma.<br />Ukoliko je onemogućen prikaz u korisničkom Profilu/Postavkama, korisnik/ca neće moći vidjeti/uređivati polje (a) što će moći [samo] administratori(ce)/moderatori(ce).',
'INVALID_CHARS_FIELD_IDENT'=>'Identifikacija polja može sadržavati samo mala slova i podvlaknice (_).',
'INVALID_FIELD_IDENT_LEN'=>'Identifikacija polja može sadržavati maksimalno 17 znakova.',
'ISO_LANGUAGE'=>'Jezik [%s]',
'LANG_SPECIFIC_OPTIONS'=>'Posebne postavke jezika [<strong>%s</strong>]',
'LETTER_NUM_DOTS'=>'(Sva) Slova, brojevi i točke',
'LETTER_NUM_ONLY'=>'(Sva) Slova i brojevi',
'LETTER_NUM_PUNCTUATION'=>'(Sva) Slova, brojevi, zarezi, točke, podvlaknice (_) i minusnice (-) počev s bilo kojim slovom',
// <!-- Kocka je hičena! -->
'LETTER_NUM_SPACERS'=>'(Sva) Slova, brojevi i razmaknice',
'LETTER_NUM_UNDERSCORE'=>'(Sva) Slova, brojevi i podvlaknice (_)',
'MAX_FIELD_CHARS'=>'Maksimalan broj znakova',
'MAX_FIELD_NUMBER'=>'Najveći dopušten broj',
'MIN_FIELD_CHARS'=>'Minimalan broj znakova',
'MIN_FIELD_NUMBER'=>'Najmanji dopušten broj',
'NO_FIELD_ENTRIES'=>'Nisu definirani upisi.',
'NO_FIELD_ID'=>'Nije određeno polje.',
'NO_FIELD_TYPE'=>'Nije određen tip polja.',
'NO_VALUE_OPTION'=>'Opcija jednaka neupisanoj vrijednosti',
'NO_VALUE_OPTION_EXPLAIN'=>'Vrijednost za neupisano.<br />Ukoliko je polje obvezno, korisnik/ca dobiva grešku ukoliko izabere ovdje izabranu opciju.',
'NUMBERS_ONLY'=>'Samo brojevi [0-9]',
'PROFILE_BASIC_OPTIONS'=>'Osnovne postavke',
'PROFILE_FIELD_ACTIVATED'=>'Korisničko polje je aktivirano.',
'PROFILE_FIELD_DEACTIVATED'=>'Korisničko polje je deaktivirano.',
'PROFILE_LANG_OPTIONS'=>'Posebne postavke jezika',
'PROFILE_TYPE_OPTIONS'=>'Posebne postavke korisničkog polja',
'RADIO_BUTTONS'=>'Kružić(i) za odabir [radio buttons]',
'REMOVED_PROFILE_FIELD'=>'Korisničko polje je izbrisano.',
'REQUIRED_FIELD'=>'Obvezno polje',
'REQUIRED_FIELD_EXPLAIN'=>'Korisničko polje treba biti ispunjeno ili određeno od strane korisnika/ce odnosno administratora/ice.<br />Ukoliko je onemogućen prikaz prilikom registracije, polje će trebati biti ispunjeno/određeno [samo] prilikom uređivanja profila od strane korisnika/ce.',
'ROWS'=>'Redci',
'SAVE'=>'Pohrani',
'SECOND_OPTION'=>'Druga opcija',
'SHOW_NOVALUE_FIELD'=>'Prikaži polje ukoliko vrijednost nije izabrana',
'SHOW_NOVALUE_FIELD_EXPLAIN'=>'Određuje hoće li korisničko polje biti prikazano ukoliko vrijednost nije izabrana za neobvezna polja odnosno ukoliko vrijednost još nije izabrana za obvezna polja.',
'STEP_1_EXPLAIN_CREATE'=>'Ovdje možeš upisati prve osnovne parametre novog korisničkog polja.<br />Informacije su potrebne zbog drugog koraka gdje ćeš moći podesiti preostale opcije.',
'STEP_1_EXPLAIN_EDIT'=>'Ovdje možeš promijeniti osnovne parametre polja.<br />Relevantne postavke/opcije su rekalkulirane u sljedećem koraku.',
'STEP_1_TITLE_CREATE'=>'Dodavanje korisničkog polja',
'STEP_1_TITLE_EDIT'=>'Uređivanje korisničkog polja',
'STEP_2_EXPLAIN_CREATE'=>'Ovdje možeš definirati/podesiti uobičajene postavke.',
'STEP_2_EXPLAIN_EDIT'=>'Ovdje možeš promijeniti neke uobičajene postavke.<br /><strong>Promjene u korisničkim poljima neće imati efekta na korisnička polja u koja su korisnici/e već upisali/e podatke.</strong>',
'STEP_2_TITLE_CREATE'=>'Posebne postavke korisničkog tipa',
'STEP_2_TITLE_EDIT'=>'Posebne postavke korisničkog tipa',
'STEP_3_EXPLAIN_CREATE'=>'Obzirom da je instalirano više od jednog jezičnog paketa, trebaš upisati preostale jezične stavke.<br />Korisničko polje će raditi s omogućenim zadanim jezikom [što će reći da preostale jezične stavke možeš naknadno upisati].',
'STEP_3_EXPLAIN_EDIT'=>'Obzirom da je instalirano više od jednog jezičnog paketa, možeš mijenjati/dodavati (pre)ostale jezične stavke.<br />Korisničko polje će raditi s omogućenim zadanim jezikom.',
'STEP_3_TITLE_CREATE'=>'Preostale jezične definicije',
'STEP_3_TITLE_EDIT'=>'Jezične definicije',
'STRING_DEFAULT_VALUE_EXPLAIN'=>'Želiš li da polje bude prikazano praznim, nemoj upisati ništa; u protivnom, upiši ono što želiš da se prikaže prilikom prikazivanja polja.',
'TEXT_DEFAULT_VALUE_EXPLAIN'=>'Želiš li da polje bude prikazano praznim, nemoj upisati ništa; u protivnom, upiši ono što želiš da se prikaže prilikom prikazivanja polja.',
'TRANSLATE'=>'Prevedi',
'USER_FIELD_NAME'=>'Naziv polja koje će biti vidljivo korisniku/ci',
'VISIBILITY_OPTION'=>'Gdje će polje biti prikazano',
));
