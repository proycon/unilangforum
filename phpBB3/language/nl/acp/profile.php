<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ADDED_PROFILE_FIELD'	=> 'Eigen profielveld succesvol toegevoegd.',
	'ALPHA_DOTS'            => 'Alfanumerieke en punten',
	'ALPHA_ONLY'			=> 'Alleen alfanumeriek',
	'ALPHA_SPACERS'			=> 'Alfanumeriek en spaties',
	'ALPHA_UNDERSCORE'		=> 'Alfanumeriek en underscores',
	'ALPHA_PUNCTUATION'     => 'Alfanumeriek met een komma, punten, underscore en streepjes te beginnen met een letter',
	'ALWAYS_TODAY'			=> 'Altijd de datum van vandaag',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Vul nu je opties in',
	'BOOL_TYPE_EXPLAIN'		=> 'Definieer het type, ofwel een checkbox of radioknoppen. Een checkbox zal alleen weergegeven worden als het afgevinkt is voor een bepaalde gebruiker. In dat geval zal de <strong>tweede</strong> taaloptie gebruikt worden. Radioknoppen zullen weergegeven worden ongeacht hun waarde.',

	'CHANGED_PROFILE_FIELD'		=> 'Profielveld succesvol gewijzigd.',
	'CHARS_ANY'					=> 'Elk karakter',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Kolommen',
	'CP_LANG_DEFAULT_VALUE'		=> 'Standaard waarde',
	'CP_LANG_EXPLAIN'			=> 'Veldbeschrijving',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'De uitleg van dit veld weergegeven aan de gebruiker.',
	'CP_LANG_NAME'				=> 'Veldnaam/titel weergegeven aan de gebruiker',
	'CP_LANG_OPTIONS'			=> 'Opties',
	'CREATE_NEW_FIELD'			=> 'Nieuw veld aanmaken',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Tenminste één eigen profielveld is nog niet vertaald. Vul de benodigde informatie in door te klikken op de “Vertaal” link.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Standaard taal [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'De taalitems voor de standaard taal zijn niet ingevuld voor dit profielveld.',
	'DEFAULT_VALUE'					=> 'Standaard waarde',
	'DELETE_PROFILE_FIELD'			=> 'Profielveld verwijderen',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Weet je zeker dat je dit profielveld wilt verwijderen?',
	'DISPLAY_AT_PROFILE'			=> 'Weergeven in gebruikerspaneel',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'De gebruiker kan dit profielveld veranderen in het gebruikerspaneel.',
	'DISPLAY_AT_REGISTER'			=> 'Weergeven op registratiepagina',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Als deze optie is ingeschakeld, dan zal het veld weergegeven worden bij de registratie.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Weergeven op ledenlijst',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Als deze optie is ingechakeld, dan zal het veld weergegeven worden in de gebruikersrij op de ledenlijst.',
	'DISPLAY_ON_PM'					=> 'Weergeven op de bekijk privéberichten-pagina',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Als deze optie is ingeschakeld, dan zal het veld weergegeven worden in het mini-profiel op de privéberichten-pagina.',
	'DISPLAY_ON_VT'					=> 'Weergeven op onderwerpenpagina',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Als deze optie is ingeschakeld, dan zal het veld weergegeven worden in het mini-profiel op de onderwerpenpagina.',
	'DISPLAY_PROFILE_FIELD'			=> 'Publiekelijk weergeven profielveld',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Het profielveld zal weergegeven worden op alle locaties, die toegestaan zijn in de laadinstellingen. Het instellen van dit op “nee” zal het veld verbergen van onderwerppagina‘s, profielen en de ledenlijst.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Voer je opties hier in, elke optie op een aparte regel.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Let op dat je de mogelijkheid hebt om je optietekst te veranderen en ook nieuwe opties aan het eind toe kan voegen. Het wordt niet aanbevolen om nieuwe opties tussen bestaande opties in te voegen - dit kan resulteren in verkeerde opties toegewezen aan je gebruikers. Dit kan ook gebeuren als je opties er tussen uit haalt. Het verwijderen van opties aan het eind zal resulteren in gebruikers die deze optie hadden nu teruggezet worden naar de standaard optie.',
	'EMPTY_FIELD_IDENT'				=> 'Leeg veldindentificatie',
	'EMPTY_USER_FIELD_NAME'			=> 'Vul een veldnaam/titel in',
	'ENTRIES'						=> 'Items',
	'EVERYTHING_OK'					=> 'Alles is OK',

	'FIELD_BOOL'				=> 'Booleaans (Ja/Nee)',
	'FIELD_CONTACT_DESC'		=> 'Contactbeschrijving',
	'FIELD_CONTACT_URL'			=> 'Contactlink',
	'FIELD_DATE'				=> 'Datum',
	'FIELD_DESCRIPTION'			=> 'Veldbeschrijving',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'De uitleg voor dit veld dat weergegeven wordt aan de gebruiker.',
	'FIELD_DROPDOWN'			=> 'Dropdown box',
	'FIELD_GOOGLEPLUS'          => 'Google+',
	'FIELD_IDENT'				=> 'Veldidentificatie',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'De gekozen veldidentificatie bestaat al. Kies een andere naam.',
	'FIELD_IDENT_EXPLAIN'		=> 'De veldidentificatie is een naam om het profielveld te identificeren in de database en in de template.',
	'FIELD_INT'					=> 'Cijfers',
	'FIELD_IS_CONTACT'			=> 'Veld weergeven als een contactveld',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Contactvelden worden weergegeven in het contactgedeelte van het gebruikersprofiel en worden anders weergegeven in het mini-profiel naast de berichten en privéberichten. Je kan <samp>%s</samp> gebruiken als een plaatshouder variabele, welke vervangen zal worden door een waarde opgegeven door de gebruiker.',
	'FIELD_LENGTH'				=> 'Lengte van invulveld',
	'FIELD_NOT_FOUND'			=> 'Profielveld niet gevonden.',
	'FIELD_STRING'				=> 'Enkel tekstveld',
	'FIELD_TEXT'				=> 'Tekstveld',
	'FIELD_TYPE'				=> 'Veldtype',
	'FIELD_TYPE_EXPLAIN'		=> 'Je kan het veldtype later niet veranderen.',
	'FIELD_URL'					=> 'URL (Link)',
	'FIELD_VALIDATION'			=> 'Veldvalidatie',
	'FIRST_OPTION'				=> 'Eerste optie',

	'HIDE_PROFILE_FIELD'			=> 'Verberg profielveld',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Verberg het profielveld voor alle andere gebruikers behalve de gebruiker zelf, beheerders en moderators die dit veld nog steeds kunnen zien. Als het “Weergeven in gebruikerspaneel”-optie is uitgeschakeld, zal de gebruiker dit veld niet kunnen zien of veranderen en het veld kan dan alleen veranderd worden door beheerders.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Veldidentificatie kan alleen kleine letters a-z en _ bevatten',
	'INVALID_FIELD_IDENT_LEN'	=> 'Veldidentificatie kan alleen 17 tekens lang zijn',
	'ISO_LANGUAGE'				=> 'Taal [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Taal specifieke opties [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> 'Alle letters, cijfers en punten',
	'LETTER_NUM_ONLY'			=> 'Alle letters en cijfers',
	'LETTER_NUM_PUNCTUATION'	=> 'Alle letters, cijfers, komma, punten, underscores en streepjes beginnend met een willekeurige letter',
	'LETTER_NUM_SPACERS'		=> 'Alle letters en spaties',
	'LETTER_NUM_UNDERSCORE'		=> 'Alle letters, cijfers en underscores',

	'MAX_FIELD_CHARS'		=> 'Maximum aantal tekens',
	'MAX_FIELD_NUMBER'		=> 'Hoogst toegestane cijfer',
	'MIN_FIELD_CHARS'		=> 'Minimum aantal tekens',
	'MIN_FIELD_NUMBER'		=> 'Laagst toegestane cijfer',

	'NO_FIELD_ENTRIES'			=> 'Geen items opgegeven',
	'NO_FIELD_ID'				=> 'Geen veld-ID gespecificeerd.',
	'NO_FIELD_TYPE'				=> 'Geen veldtype gespecificeerd.',
	'NO_VALUE_OPTION'			=> 'Optie gelijk aan geen ingevoerde waarde',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Waarde voor een nul-item. Als het veld vereist is, zal de gebruiker een foutmelding krijgen als hij de optie kiest die hier geselecteerd is.',
	'NUMBERS_ONLY'				=> 'Alleen cijfers (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Basis opties',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profielveld succesvol geactiveerd.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profielveld succesvol gedeactiveerd.',
	'PROFILE_LANG_OPTIONS'		=> 'Taal specifieke opties',
	'PROFILE_TYPE_OPTIONS'		=> 'Profieltype specifieke opties',

	'RADIO_BUTTONS'				=> 'Radioknoppen',
	'REMOVED_PROFILE_FIELD'		=> 'Profielveld succesvol verwijderd.',
	'REQUIRED_FIELD'			=> 'Vereist veld',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Forceert dat het profielveld ingevuld dient te worden of gespecificeerd door een gebruiker of een beheerder. Als de “Weergeven bij registratie”-optie is uitgeschakeld, dan zal het veld alleen vereist zijn wanneer de gebruiker zijn profiel wijzigt.',
	'ROWS'						=> 'Rijen',

	'SAVE'							=> 'Opslaan',
	'SECOND_OPTION'					=> 'Tweede optie',
	'SHOW_NOVALUE_FIELD'			=> 'Veld weergeven als geen waarde is geselecteerd',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Bepaalt of het profielveld weergegeven dient te worden als er geen waarde is geselecteerd voor de optionele velden of als er nog geen waarde is geselecteerd voor vereiste velden.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Hier kan je de eerste basisparameters invoeren van je nieuwe profielveld. Deze informatie is nodig voor de tweede stap waar je de overige opties kan instellen en je profielveld verder kan aanpassen.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Hier kan je de basisparameters van je profielveld veranderen. De relevante opties worden herberekend in de tweede stap.',
	'STEP_1_TITLE_CREATE'			=> 'Profielveld toevoegen',
	'STEP_1_TITLE_EDIT'				=> 'Profielveld wijzigen',
	'STEP_2_EXPLAIN_CREATE'			=> 'Hier kan je enkele algemene opties bepalen die je misschien wilt aanpassen.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Hier kan je enkele algemene opties veranderen.<br /><strong>Let op dat de veranderingen aan de profielvelden niet de bestaande profielvelden ingevuld door je gebruikers zal beïnvloeden.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Profieltype specifieke opties',
	'STEP_2_TITLE_EDIT'				=> 'Profieltype specifieke opties',
	'STEP_3_EXPLAIN_CREATE'			=> 'Aangezien je meer dan één forumtaal hebt geïnstalleerd, zal je de overgebleven taalitems ook moeten invullen. Het profielveld zal werken met de standaard taal ingeschakeld, je kan dus de overige taalitems ook later invullen.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Aangezien je meer dan één forumtaal hebt geïnstalleerd, kan je nu de overgebleven taalitems ook veranderen of toevoegen. Het profielveld zal werken met de standaard taal ingeschakeld.',
	'STEP_3_TITLE_CREATE'			=> 'Overige taaldefinities',
	'STEP_3_TITLE_EDIT'				=> 'Taaldefinities',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vul een standaard zin in om weer te geven, een standaard waarde. Laat leeg als je dit leeg wilt weergeven.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vul een standaard tekst in om weer te geven, een standaard waarde. Laat leeg als je dit leeg wilt weergeven.',
	'TRANSLATE'						=> 'Vertaal',

	'USER_FIELD_NAME'	=> 'Veldnaam/titel weergegeven aan de gebruiker',

	'VISIBILITY_OPTION'				=> 'Zichtbaarheidsopties',
));
