<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Egendefinert profilfelt lagt til.',
	'ALPHA_DOTS'			=> 'Alfanumerisk og punktum',
	'ALPHA_ONLY'			=> 'Bare alfanumerisk',
	'ALPHA_SPACERS'			=> 'Alfanumerisk og skilletegn',
	'ALPHA_UNDERSCORE'		=> 'Alfanumerisk og understrek',
	'ALPHA_PUNCTUATION'		=> 'Alfanumerisk med komma, punktum, understrek og bindestrek og som begynner med en bokstav',
	'ALWAYS_TODAY'			=> 'Alltid gjeldende dato',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Angi alternativene nå',
	'BOOL_TYPE_EXPLAIN'		=> 'Definer type, enten avhakingsboks eller radioknapper. En avhakingsboks vises bare hvis den er haket av for en gitt bruker. I slike tilfeller brukes det <strong>andre</strong> språkalternativet. Radioknapper vises uavhengig av verdiene.',

	'CHANGED_PROFILE_FIELD'		=> 'Profilfelt endret.',
	'CHARS_ANY'					=> 'Alle tegn',
	'CHECKBOX'					=> 'Avhakingsboks',
	'COLUMNS'					=> 'Kolonner',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standardverdi',
	'CP_LANG_EXPLAIN'			=> 'Feltbeskrivelse',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Forklaringen for dette feltet som vises til brukeren.',
	'CP_LANG_NAME'				=> 'Feltnavnet/tittelen som vises til brukeren',
	'CP_LANG_OPTIONS'			=> 'Alternativer',
	'CREATE_NEW_FIELD'			=> 'Opprett nytt felt',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Minst ett egendefinert profilfelt er ikke oversatt ennå. Angi nødvendig informasjon ved å klikke på lenken «Oversett».',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standardspråk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Språkoppføringene for standardspråket er ikke fylt ut for dette profilfeltet.',
	'DEFAULT_VALUE'					=> 'Standardverdi',
	'DELETE_PROFILE_FIELD'			=> 'Fjern profilfelt',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Er du sikker på at du vil slette dette profilfeltet?',
	'DISPLAY_AT_PROFILE'			=> 'Vis i brukerkontrollpanel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Brukeren kan endre dette profilfeltet i brukerkontrollpanelet.',
	'DISPLAY_AT_REGISTER'			=> 'Vis på registreringsskjermen',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Hvis dette alternativet er aktivert, vil feltet vises ved registrering.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Vis på brukerlisteskjermen',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Hvis dette alternativet er aktivert, vil feltet vises i brukerradene på brukerlisteskjermen.',
	'DISPLAY_ON_PM'					=> 'Vis på skjermen for private meldinger',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Hvis dette alternativet er aktivert, vil feltet vises i miniprofilen på skjermen for private meldinger.',
	'DISPLAY_ON_VT'					=> 'Vis på skjermen for emnevisning',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Hvis dette alternativet er aktivert, vil feltet vises i miniprofilen på emneskjermen.',
	'DISPLAY_PROFILE_FIELD'			=> 'Vis profilfelt offentlig',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profilfeltet vil bli vist alle steder og tillates innenfor innstillingene for belastning. Hvis dette angis til «Nei», skjules feltet fra emnesider, profiler og brukerlisten.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Angi alternativene nå, ett alternativ på hver sin linje.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Merk at du kan endre alternativteksten og også legge til nye alternativer på slutten. Det anbefales ikke å legge til nye alternativer mellom eksisterende – dette kan føre til at gale alternativer tilordnes til brukerne dine. Dette kan også skje hvis du fjerner alternativer innimellom. Hvis du fjerner alternativer fra slutten, fører dette til at brukere som er tilordnet dette elementet, tilbakeføres til standardalternativet.',
	'EMPTY_FIELD_IDENT'				=> 'Tom feltidentifikasjon',
	'EMPTY_USER_FIELD_NAME'			=> 'Angi et feltnavn/tittel',
	'ENTRIES'						=> 'Oppføringer',
	'EVERYTHING_OK'					=> 'Alt OK',

	'FIELD_BOOL'				=> 'Boolsk (Ja/Nei)',
	'FIELD_CONTACT_DESC'		=> 'Kontaktbeskrivelse',
	'FIELD_CONTACT_URL'			=> 'Kontaktlenke',
	'FIELD_DATE'				=> 'Dato',
	'FIELD_DESCRIPTION'			=> 'Feltbeskrivelse',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Forklaringen til dette feltet, som vises til brukeren.',
	'FIELD_DROPDOWN'			=> 'Nedtrekksboks',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'				=> 'Feltidentifikasjon',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Den valgte feltidentifikasjonen finnes allerede. Velg et annet navn.',
	'FIELD_IDENT_EXPLAIN'		=> 'Feltidentifikasjonen er et navn som identifiserer profilfeltet i databasen og malene.',
	'FIELD_INT'					=> 'Tall',
	'FIELD_IS_CONTACT'			=> 'Vis felt som kontaktfelt',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Kontaktfelt vises i kontaktdelen av brukerprofilen og vises på en annen måte i miniprofilen ved siden av innlegg og private meldinger. Du kan bruke <samp>%s</samp> som plassholder, som vil bli erstattet av en verdi som angis av brukeren.',
	'FIELD_LENGTH'				=> 'Lengde på inndataboks',
	'FIELD_NOT_FOUND'			=> 'Finner ikke profilfelt.',
	'FIELD_STRING'				=> 'Enkelt tekstfelt',
	'FIELD_TEXT'				=> 'Tekstområde',
	'FIELD_TYPE'				=> 'Felttype',
	'FIELD_TYPE_EXPLAIN'		=> 'Du vil ikke kunne endre felttypen senere.',
	'FIELD_URL'					=> 'URL (lenke)',
	'FIELD_VALIDATION'			=> 'Feltvalidering',
	'FIRST_OPTION'				=> 'Første alternativ',

	'HIDE_PROFILE_FIELD'			=> 'Skjul profilfelt',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Skjul profilfeltet for alle andre brukere. Brukeren selv, administratorer og moderatorer vil fortsatt kunne se dette feltet. Hvis visning i brukerkontrollpanelet er deaktivert, vil ikke brukeren kunne se eller endre dette feltet, og feltet kan bare endres av administratorer.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Feltidentifikasjon kan bare inneholde små bokstaver a-z og _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Feltidentifikasjon kan bare være 17 tegn lang',
	'ISO_LANGUAGE'				=> 'Språk [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Språkspesifikke alternativer [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> 'Alle bokstaver, sifre og punktum',
	'LETTER_NUM_ONLY'			=> 'Alle bokstaver og sikfre',
	'LETTER_NUM_PUNCTUATION'	=> 'Alle bokstaver, sifre, komma, punktum, under- og bindestrek, starter med en bokstav',
	'LETTER_NUM_SPACERS'		=> 'Alle bokstaver, sifre og skilletegn',
	'LETTER_NUM_UNDERSCORE'		=> 'Alle bokstaver, sifre og understrek',

	'MAX_FIELD_CHARS'		=> 'Maksimalt antall tegn',
	'MAX_FIELD_NUMBER'		=> 'Høyeste mulige tall',
	'MIN_FIELD_CHARS'		=> 'Minste antall tegn',
	'MIN_FIELD_NUMBER'		=> 'Laveste mulige tall',

	'NO_FIELD_ENTRIES'			=> 'Ingen oppføringer er definert',
	'NO_FIELD_ID'				=> 'Ingen felt-ID er angitt.',
	'NO_FIELD_TYPE'				=> 'Ingen felttype er angitt.',
	'NO_VALUE_OPTION'			=> 'Alternativ likt ikke-angitt verdi',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Verdi for ikke-angivelse. Hvis feltet er obligatorisk, får brukeren en feilmelding ved valg av dette alternativet.',
	'NUMBERS_ONLY'				=> 'Bare sifre (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Grunnleggende alternativer',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profilfeltet er aktivert.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profilfeltet er deaktivert.',
	'PROFILE_LANG_OPTIONS'		=> 'Språkspesifikke alternativer',
	'PROFILE_TYPE_OPTIONS'		=> 'Profiltypespesifikke alternativer',

	'RADIO_BUTTONS'				=> 'Radioknapper',
	'REMOVED_PROFILE_FIELD'		=> 'Profilfelt er fjernet.',
	'REQUIRED_FIELD'			=> 'Obligatorisk felt',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Krev at feltet fylles ut eller angis av bruker eller administrator. Hvis alternativet for visning på registreringsskjerm er valgt, vil dette feltet bare være obligatorisk når brukeren redigerer profilen sin.',
	'ROWS'						=> 'Rader',

	'SAVE'							=> 'Lagre',
	'SECOND_OPTION'					=> 'Andre alternativ',
	'SHOW_NOVALUE_FIELD'			=> 'Vis felt hvis ingen verdi ble valgt',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Angir hvorvidt profilfeltet skal vises hvis det ikke ble valgt noen verdi for valgfrie felt eller hvis ingen verdi ennå er valgt for de obligatoriske feltene.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Her kan du angi den første grunnleggende parameteren for det nye profilfeltet. Denne informasjonen er nødvendig for andre trinn, hvor du kan angi de øvrige alternativene og tilpasse profilfeltet ytterligere.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Her kan du endre de grunnleggende parametrene for profilfeltet. De aktuelle alternativene rekalkuleres i andre trinn.',
	'STEP_1_TITLE_CREATE'			=> 'Legg til profilfelt',
	'STEP_1_TITLE_EDIT'				=> 'Rediger profilfelt',
	'STEP_2_EXPLAIN_CREATE'			=> 'Her kan du definere visse vanlige alternativer som du kanskje ønsker å justere.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Her kan du endre visse vanlige alternativer.<br /><strong>Mer at endringer i profilfelt ikke vil påvirke eksisterende profilfelt som er angitt av brukerne.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Profiltypespesifikke alternativer',
	'STEP_2_TITLE_EDIT'				=> 'Profiltypespesifikke alternativer',
	'STEP_3_EXPLAIN_CREATE'			=> 'Siden du har flere enn ett systemspråk installert, må du fylle ut de øvrige språkelementene også. Profilfeltet vil fungere med standardspråket aktivert, og du kan også fylle ut de øvrige språkelementene senere.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Siden du har flere enn ett systemspråk installert, kan du nå endre eller legge til de øvrige språkelementene også. Profilfeltet vil fungere med standardspråket aktivert.',
	'STEP_3_TITLE_CREATE'			=> 'Øvrige språkdefinisjoner',
	'STEP_3_TITLE_EDIT'				=> 'Språkdefinisjoner',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Angi en standardfrase som skal vises, en standardverdi. La stå tom hvis du vil vise den tom i utgangspunktet.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Angi en standardtekst som skal vises, en standardverdi. La stå tom hvis du vil vise den tom i utgangspunktet.',
	'TRANSLATE'						=> 'Oversett',

	'USER_FIELD_NAME'	=> 'Feltnavn/tittel som vises til brukeren',

	'VISIBILITY_OPTION'				=> 'Synlighetsalternativer',
));
