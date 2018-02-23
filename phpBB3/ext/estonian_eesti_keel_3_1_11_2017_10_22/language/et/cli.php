<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Seadista antud valik, kui konfiguratsiooni valikud liiga tihedasti muutuvad, et tõhusamalt puhverdada.',
	'CLI_CONFIG_CURRENT'				=> 'Kasutatavad konfiguratsiooni väärtused, kasuta 0 ja 1, et täpsustada booleani väärtused',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfiguratsioon %s on edukalt kustutatud.',
	'CLI_CONFIG_NEW'					=> 'Uus konfiguratsiooni väärtus, kasuta 0 ja 1, et täpsustada booleani väärtused',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfiguratsioon %s ei eksisteeri',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfiguratsiooni valiku nimi',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Seadista see valik, kui väärtust tuleb printed ilma uue reata lõppu.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Juurdekasvu kogus',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Edukalt kasvatatud konfiguratsioon %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Ei õnnestunud seadistada konfiguratsiooni %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Edukalt seadistatud konfiguratsioon %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Nimekiri juba valmis, ning mitte valmis olevatest cron töödest.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Käivitab kõik valmis olevad cron ülesanded.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Ülesande nimi, mida tuleb käivitada',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uuendan andmebaasi kohaldades migratsiooni.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Kustutab konfiguratsiooni valikud',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Keelab määratud laienduse.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Lubab määratud laienduse.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Leiab migratsiooni, mis ei ole sõltuv.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Parandab foorumite ja moodulite puu struktuuri.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Saab konfiguratsiooni valiku väärtuse',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Kasvatab konfiguratsiooni valiku väärtust täisarvuni',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Nimekiri kõikidest laiendustest andmebaasis ja failisüsteemis.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Käivita turvalises režiimis ehk Safe Mode (ilma laiendusdeta).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Käivita shell\'is.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Puhastab määratletud laienduse.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Arvutab ümber user_email_hash kolumni andmebaasi tabelis users.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Seadistab konfiguratsiooni väärtused ainult siis, kui vanad kattuvad hetke väärtustega',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Seadistab konfiguratsiooni valiku väärtused',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Uuendab aegunud parooli räsid bcrypt räsideks.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ei õnnestunud keelata laiendust %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Laiendus %s on edukalt keelatud',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Laiendust %s ei olnud võimalik lubada',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Laiendus %s edukalt lubatud',
	'CLI_EXTENSION_NAME'				=> 'Laienduse nimi',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ei õnnestunud puhastada laiendust %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Laiendus %s on edukalt puhastatud',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ühtegi laiendust ei leitud.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Saadaval',
	'CLI_EXTENSIONS_DISABLED'			=> 'Keelatud',
	'CLI_EXTENSIONS_ENABLED'			=> 'Lubatud',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Edukalt parandatud foorumite, ning moodulite puu struktuur.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Kõik e-posti räsid on edukalt ümber arvutatud.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Edukalt uuendatud aegunud parooli räsid bcryptiks.'
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . 'Valikulisena Sa saad määratleda cron ülesande nime, et käivitada ainult spetsiifiline cron ülesanne.',
));
