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
* @author       2016-10-14 phpBBeesti.net <et.translations@phpbbeesti.net>
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
	'EXTENSION'					=> 'Laiendus',
	'EXTENSIONS'				=> 'Laiendused',
	'EXTENSIONS_ADMIN'			=> 'Laienduste haldus',
	'EXTENSIONS_EXPLAIN'		=> 'Laienduste haldus on phpBB foorumis vahend, mis lubab sul hallata kõikide laienduste olekut ja vaadata teavet nende kohta. Laiendused laadi oma serverisse üles kausta nimega “ext”. Laienduse asukoht peab olema Sinu serveris järgmisel teekonna kujul: <samp>phpBB/ext/autori-nimega-kaust/laienduse-enda-kaust</samp>, näiteks: <samp>phpBB/ext/phpbb/boardrules</samp>. Head kasutamist!',
	'EXTENSION_INVALID_LIST'	=> 'Laiendus “%s” ei ole kehtiv.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Valitud laiendus ei ole saadaval sellele foorumile, palun kontrolli oma phpBB ja PHP versioone, et need oleksid lubatud (vaata detailide lehte).',
	'EXTENSION_DIR_INVALID'		=> 'Valitud laiendusel on vigane kataloogi struktuur ja seda ei saa lubada.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Valitud laiendust ei saa lubada, palun kontrolli laienduse nõudeid.',

	'DETAILS'				=> 'Detailid',

	'EXTENSIONS_DISABLED'	=> 'Keelatud laiendused',
	'EXTENSIONS_ENABLED'	=> 'Lubatud laiendused',

	'EXTENSION_DELETE_DATA'	=> 'Kustuta andmed',
	'EXTENSION_DISABLE'		=> 'Keela',
	'EXTENSION_ENABLE'		=> 'Luba',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Laienduse andmete kustutamine eemaldab kõik andmed ja seaded. Laienduse failid säilitatakse, et seda saaks uuesti lubada.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Laienduse keelamine säilitab failid, andmed ja seaded, kuid eemaldab iga funktsionaalsuse, mis on lisatud laienduse poolt.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Laienduse lubamine lubab sul seda kasutada oma foorumil.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Laienduse andmeid kustutatakse. Palun ära lahku ega värskenda antud lehte kuniks see tegevus on lõpetatud',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Laiendus on hetkel keelatud. Palun ära lahku ega värskenda antud lehte kuniks see tegevus on lõpetatud.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Laiendus on hetkel lubatud. Palun ära lahku ega värskenda antud lehte kuniks see tegevus on lõpetatud.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Laienduse andmed on kustutatud',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Laiendus keelati',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Laiendus lubati',

	'EXTENSION_NAME'			=> 'Laienduse nimi',
	'EXTENSION_ACTIONS'			=> 'Tegevused',
	'EXTENSION_OPTIONS'			=> 'Valikud',
	'EXTENSION_INSTALL_HEADLINE'=> 'Laienduste installeerimine',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Laadi alla laiendus phpBB laienduste andmebaasist</li>
			<li>Paki allalaaditud laiendus lahti, ning laadi see oma serveri <samp>ext/</samp> kausta, kus asub Sinu phpBB foorum</li>
			<li>Luba laiendus, sellel "Laienduste haldus" leheküljel</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Laienduse uuendamine',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Keela laiendus;</li>
			<li>Kustuta laienduse failid failisüsteemist;</li>
			<li>Laadi uued failid ülesse oma serverisse;</li>
			<li>Luba laiendus uuesti</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Laienduse täielik eemaldamine foorumilt',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Keela laiendus;</li>
			<li>Kustuta laienduse andmed;</li>
			<li>Kustuta laienduse failid oma serveri failisüsteemist</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada andmed, mis on seotud laiendusega “%s”?<br /><br />See tegevus eemaldab kõik antud laienduse andmed ja seaded, ning neid ei ole võimalik taastada!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Kas oled kindel, et soovid keelata laienduse “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Kas oled kindel, et soovid lubada laienduse “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Kas oled kindel, et soovid sundida kasutama ebastabiilseid laienduse versioone?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Tagasi laienduste nimekirja juurde',

	'EXT_DETAILS'			=> 'Laienduse detailid',
	'DISPLAY_NAME'			=> 'Laienduse nimi',
	'CLEAN_NAME'			=> 'Täielik nimi',
	'TYPE'					=> 'Tüüp',
	'DESCRIPTION'			=> 'Kirjeldus',
	'VERSION'				=> 'Versioon',
	'HOMEPAGE'				=> 'Koduleht',
	'PATH'					=> 'Faili teekond',
	'TIME'					=> 'Väljalaske aeg',
	'LICENSE'				=> 'Litsents',

	'REQUIREMENTS'			=> 'Nõuded',
	'PHPBB_VERSION'			=> 'phpBB versioon',
	'PHP_VERSION'			=> 'PHP versioon',
	'AUTHOR_INFORMATION'	=> 'Autori andmed',
	'AUTHOR_NAME'			=> 'Nimi',
	'AUTHOR_EMAIL'			=> 'E-posti aadress',
	'AUTHOR_HOMEPAGE'		=> 'Koduleht',
	'AUTHOR_ROLE'			=> 'Roll',

	'NOT_UP_TO_DATE'		=> '%s ei ole ajakohane',
	'UP_TO_DATE'			=> '%s on ajakohane',
	'ANNOUNCEMENT_TOPIC'	=> 'Väljalaske teadaanne',
	'DOWNLOAD_LATEST'		=> 'Uue versiooni allalaadimine',
	'NO_VERSIONCHECK'		=> 'Informatsiooni versiooni kontrollimiseks pole antud.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Kontrolli versiooni uuendusi',
	'FORCE_UNSTABLE'					=> 'Alati kontrolli ebastabiilseid versioone',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Versiooni kontrolli seaded',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Sirvi laienduste andmebaasi',

	'META_FIELD_NOT_SET'	=> 'Nõutud meta väli %s ei ole seadistatud.',
	'META_FIELD_INVALID'	=> 'Meta väli %s on vigane.',
));
