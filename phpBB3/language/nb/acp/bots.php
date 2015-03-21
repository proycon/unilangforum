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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Administrer boter',
	'BOTS_EXPLAIN'		=> '«Boter», «spidere» og «kravlere» er automatiserte agenter som vanligvis brukes av søkemotorer til å oppdatere databasene sine. Siden de sjelden bruker økter på riktig måte, kan de forstyrre besøkstall, øke belastningen og enkelte ganger mislykkes i å indeksere nettsteder på riktig måte. Her kan du definere en spesiell brukertype til å komme rundt disse problemene.',
	'BOT_ACTIVATE'		=> 'Aktiver',
	'BOT_ACTIVE'		=> 'Bot aktiv',
	'BOT_ADD'			=> 'Legg til bot',
	'BOT_ADDED'			=> 'Nyt bot lagt til.',
	'BOT_AGENT'			=> 'Agent-treff',
	'BOT_AGENT_EXPLAIN'	=> 'En streng som samsvarer med botens nettleseragent. Delvise treff tillates.',
	'BOT_DEACTIVATE'	=> 'Deaktiver',
	'BOT_DELETED'		=> 'Boten er slettet.',
	'BOT_EDIT'			=> 'Rediger boter',
	'BOT_EDIT_EXPLAIN'	=> 'Her kan du legge til eller redigere en eksisterende botoppføring. Du kan definere en agentstreng og/eller én eller flere IP-adresser (eller adresseintervaller) som må samsvare. Vær varsom når du definerer agentstrenger eller adresser som skal gi treff. Du kan også angi en stil og et språk som boten bruker systemet med. Dette kan la deg redusere båndbredden ved å angi en enkel stil for boter. Husk å gi relevante tillatelser til den spesielle brukergruppen Boter.',
	'BOT_LANG'			=> 'Bot-språk',
	'BOT_LANG_EXPLAIN'	=> 'Språket som boten møter mens den blar gjennom.',
	'BOT_LAST_VISIT'	=> 'Forrige besøk',
	'BOT_IP'			=> 'Botens IP-adresse',
	'BOT_IP_EXPLAIN'	=> 'Delvise treff tillates, skill adresser med komma.',
	'BOT_NAME'			=> 'Bot-navn',
	'BOT_NAME_EXPLAIN'	=> 'Bare til eget bruk.',
	'BOT_NAME_TAKEN'	=> 'Navnet er allerede i bruk på systemet og kan ikke brukes til boten.',
	'BOT_NEVER'			=> 'Aldri',
	'BOT_STYLE'			=> 'Bot-stil',
	'BOT_STYLE_EXPLAIN'	=> 'Stilen som brukes på systemet av boten.',
	'BOT_UPDATED'		=> 'Eksisterende bot er oppdatert.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Botagenten du angav, ligner på den du allerede bruker. Juster agenten for denne boten.',
	'ERR_BOT_NO_IP'				=> 'IP-adressene du angav, var ugyldige, eller så kunne ikke vertsnavnene løses.',
	'ERR_BOT_NO_MATCHES'		=> 'Du må angi enten agent eller IP for dette bot-treffet.',

	'NO_BOT'		=> 'Fant ingen boter med angitt ID.',
	'NO_BOT_GROUP'	=> 'Finner ikke den spesielle Boter-gruppen.',
));
