<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-05-30 - GunChleoc http://www.foramnagaidhlig.net is akerbeltz http://www.akerbeltz.org
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
	'BANNED_UNTIL_DATE'	=> 'gu %s',
	'BANNED_UNTIL_DURATION'	=> '%1$s (gu %2$s)',
	'1_HOUR'	=> 'Uair',
	'30_MINS'	=> '30 mionaidean',
	'6_HOURS'	=> '6 uairean',
	'ACP_BAN_EXPLAIN'	=> '’S urrainn dhut buill a thoirmeasg an-seo, a’ cleachdadh far-ainm, seòladh IP no seòladh puist-d. Cuiridh na dòighean seo bacadh air a’ bhall pàirt sam bith dhen bhòrd a ruigsinn. ’S urrainn dhut mìneachadh goirid airson an toirmisg a thoirt seachad (gu ruige 3000 charactar) ma thogras tu. Thèid seo a shealltainn ann an loga nan rianairean an uairsin. ’S urrainn dhut faide an toirmisg a shònrachadh cuideachd. Ma tha thu airson ’s gun dèid an toirmeasg gu crìch air ceann-là sònraichte seach às dèidh ùine, tagh <span style="text-decoration: underline;">Gu -&gt;</span> airson ùine an toirmisg agus sònraich ceann-là ann an cruth <kbd>BBBB-MM-LL</kbd>',
	'BAN_EXCLUDE'	=> 'Dìon o thoirmeasg',
	'BAN_LENGTH'	=> 'Ùine an toirmisg',
	'BAN_REASON'	=> 'Adhbhar toirmisg',
	'BAN_GIVE_REASON'	=> 'Adhbhar toirmisg ri shealltainn dhan bhall',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Tha liosta nam ball toirmisgte air a h&#8209;ùrachadh.',
	'EMAIL_BAN'	=> 'Toirmeasg seòlaidh no sheòlaidhean puist-d',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Cuir seo an comas gus na seòlaidhean puist-d a shònraich thu a dhìon o na h&#8209;uile toirmeasg làithreach.',
	'EMAIL_BAN_EXPLAIN'	=> 'Gus iomadh seòladh puist-d a shònrachadh, sgrìobh gach fear air loidhne fa leth. Gus freagairt ri pàirt de sheòladh, cleachd * mar shaorag, m.e. <samp>*@hotmail.com</samp>, <samp>*@*.arainn.tld</samp>, amsaa.',
	'EMAIL_NO_BANNED'	=> 'Chan eil post-d toirmisgte ann',
	'EMAIL_UNBAN'	=> 'Dì-thoirmisg no dì-dhìon seòlaidhean puist-d',
	'EMAIL_UNBAN_EXPLAIN'	=> 'Cleachd an luchag is am meur-chlàir còmhla an dòigh iomachaidh airson a’ choimpiutair is brabhsair agad gus iomadh seòladh puist-d a dhì-thoirmeasg (no dì-dhìon) aig an aon àm. Tha cuideam air na puist-d air an dìon.',
	'IP_BAN'	=> 'Toirmeasg seòladh no seòlaidhean IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Cuir seo an comas gus na seòlaidhean IP a shònraich thu a dhìon o na h&#8209;uile toirmeasg làithreach.',
	'IP_BAN_EXPLAIN'	=> 'Gus iomadh seòladh IP no ainm-òstair a shònrachadh, sgrìobh gach fear air loidhne fa leth. Gus rainse de sheòlaidhean IP a shònrachadh, sgar an toiseach is a’ chrìoch le tathan (-) agus cleachd “*” mar shaorag.',
	'IP_HOSTNAME'	=> 'Seòlaidhean IP no ainmean-òstair',
	'IP_NO_BANNED'	=> 'Chan eil IP toirmisgte ann',
	'IP_UNBAN'	=> 'Dì-thoirmisg no dì-dhìon seòlaidhean IP',
	'IP_UNBAN_EXPLAIN'	=> 'Cleachd an luchag is am meur-chlàir còmhla an dòigh iomachaidh airson a’ choimpiutair is brabhsair agad gus iomadh seòladh IP a dhì-thoirmeasg (no dì-dhìon) aig an aon àm. Tha cuideam air na IPan air an dìon.',
	'LENGTH_BAN_INVALID'	=> 'Feumaidh cruth <kbd>BBBB-MM-LL</kbd> a bhith air a’ cheann-là.',
	'OPTIONS_BANNED'	=> 'Toirmisgte',
	'OPTIONS_EXCLUDED'	=> 'Dìonta o thoirmeasg',
	'PERMANENT'	=> 'Gun chrìch',
	'UNTIL'	=> 'Gu',
	'USER_BAN'	=> 'Toirmeasg ball no buill le fhar-ainm',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Cuir seo an comash gus na far-ainmean a shònraich thu a dhìon o na h&#8209;uile toirmeasg làithreach.',
	'USER_BAN_EXPLAIN'	=> 'Gus iomadh far-ainm a thoirmeasg aig an aon àm, sgrìobh gach fear air loidhne fa leth. Cleachd am feart <span style="text-decoration: underline;">Lorg ball</span> gus an cuir am bathar-bog taic riut le seo.',
	'USER_NO_BANNED'	=> 'Chan eil far-ainm toirmisgte ann',
	'USER_UNBAN'	=> 'Dì-thoirmisg no dì-dhìon ball no buill le fhar-ainm',
	'USER_UNBAN_EXPLAIN'	=> 'Cleachd an luchag is am meur-chlàir còmhla an dòigh iomachaidh airson a’ choimpiutair is brabhsair agad gus iomadh far-ainm a dhì-thoirmeasg (no dì-dhìon) aig an aon àm. Tha cuideam air na far-ainmean air an dìon.',
));
