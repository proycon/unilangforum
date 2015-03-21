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
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
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
	'ACTIVE_TOPICS'					=> 'Tópicos ativos',
	'ANNOUNCEMENTS'					=> 'Anúncios',

	'FORUM_PERMISSIONS'				=> 'Permissões do Fórum',

	'ICON_ANNOUNCEMENT'				=> 'Anúncio',
	'ICON_STICKY'					=> 'Fixo',

	'LOGIN_NOTIFY_FORUM'			=> 'Foi notificado por este Fórum. Visite o Fórum para poder ver o aviso.',

	'MARK_TOPICS_READ'				=> 'Marcar todos os Tópicos como lidos',

	'NEW_POSTS_HOT'					=> 'Novas Mensagens [ Popular ]',   // Not used anymore
	'NEW_POSTS_LOCKED'				=> 'Novas Mensagens [ Fechado ]',   // Not used anymore
	'NO_NEW_POSTS_HOT'				=> 'Sem novas Mensagens [ Popular ]',   // Not used anymore
	'NO_NEW_POSTS_LOCKED'			=> 'Sem novas Mensagens [ Fechado ]',   // Not used anymore
	'NO_READ_ACCESS'				=> 'Não tem as Permissões para ler Tópicos neste Fórum.',
    'NO_UNREAD_POSTS_HOT'			=> 'Sem mensagens por ler [ Popular ]',
    'NO_UNREAD_POSTS_LOCKED'		=> 'Sem mensagens por ler [ Bloqueado ]',

	'POST_FORUM_LOCKED'				=> 'Fórum fechado',

	'TOPICS_MARKED'					=> 'Todos os Tópicos foram sinalizados como lidos.',

    'UNREAD_POSTS_HOT'				=> 'Mensagens por ler [ Popular ]',
    'UNREAD_POSTS_LOCKED'			=> 'Mensagens por ler [ Bloqueado ]',

	'VIEW_FORUM'					=> 'Ver Fórum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tópico',
		2	=> '%d tópicos',
	),
));
