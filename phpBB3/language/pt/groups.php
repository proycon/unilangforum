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
	'ALREADY_DEFAULT_GROUP'				=> 'O Grupo selecionado já é o seu Grupo Padrão.',
	'ALREADY_IN_GROUP'					=> 'Já é Utilizador do Grupo selecionado.',
	'ALREADY_IN_GROUP_PENDING'			=> 'Já pediu para entrar no Grupo selecionado.',

	'CANNOT_JOIN_GROUP'					=> 'Não pode inscrever-se neste Grupo. Apenas o pode fazer em Grupos abertos.',
	'CANNOT_RESIGN_GROUP'				=> 'Não pode demitir-se deste Grupo. Apenas o pode fazer em Grupos abertos.',
	'CHANGED_DEFAULT_GROUP'				=> 'Grupo Padrão foi mudado.',

	'GROUP_AVATAR'						=> 'Avatar do Grupo',
	'GROUP_CHANGE_DEFAULT'				=> 'Tem a certeza de que deseja alterar o seu Grupo Padrão para o “%s”?',
	'GROUP_CLOSED'						=> 'Fechado',
	'GROUP_DESC'						=> 'Descrição do Grupo',
	'GROUP_HIDDEN'						=> 'Escondido',
	'GROUP_INFORMATION'					=> 'Informações do Grupo',
	'GROUP_IS_CLOSED'					=> 'Este é um Grupo fechado, não podem entrar novos Utilizadores automaticamente.',
	'GROUP_IS_FREE'						=> 'Este é um Grupo aberto, todos os Utilizadores são bem-vindos',
	'GROUP_IS_HIDDEN'					=> 'Este é um Grupo invisível, só os seus membros podem vê-lo.',
	'GROUP_IS_OPEN'						=> 'Este é um Grupo aberto, podem entrar novos Utilizadores.',
	'GROUP_IS_SPECIAL'					=> 'Este é um Grupo especial, só o Administrador pode adicionar novos Utilizadores.',
	'GROUP_JOIN'						=> 'Entrar no Grupo',
	'GROUP_JOIN_CONFIRM'				=> 'Tem certeza que deseja entrar no Grupo selecionado?',
	'GROUP_JOIN_PENDING'				=> 'Pedir para entrar no Grupo',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Tem certeza que deseja pedir para entrar no Grupo?',
	'GROUP_JOINED'						=> 'Entrou no Grupo',
	'GROUP_JOINED_PENDING'				=> 'Pediu para entrar no Grupo. Espere que o Lider aprove a sua entrada.',
	'GROUP_LIST'						=> 'Gerir Utilizadores',
	'GROUP_MEMBERS'						=> 'Utilizadores do Grupo',
	'GROUP_NAME'						=> 'Nome do Grupo',
	'GROUP_OPEN'						=> 'Aberto',
	'GROUP_RANK'						=> 'Classificação do Grupo',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Remover Utilizadores do Grupo',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Tem a certeza de que deseja remover o Utilizador pendente do Grupo selecionado?',
	'GROUP_RESIGN_PENDING'				=> 'Remover um Utilizador pendente',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Tem a certeza de que deseja remover a sua inscrição do Grupo selecionado?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Foi removido do Grupo',
	'GROUP_RESIGNED_PENDING'			=> 'Sua inscrição pendente para entrar no Grupo foi excluída com sucesso.',
	'GROUP_TYPE'						=> 'Tipo do Grupo',
	'GROUP_UNDISCLOSED'					=> 'Grupo invisível',
	'FORUM_UNDISCLOSED'					=> 'Moderar Fóruns invisível(is)',

	'LOGIN_EXPLAIN_GROUP'				=> 'Tem que entrar para ver detalhes deste Grupo',

	'NO_LEADERS'						=> 'Não é Líder de nenhum Grupo.',
	'NOT_LEADER_OF_GROUP'				=> 'A ação selecionada não pode ser realizada porque não é Líder do Grupo selecionado.',
	'NOT_MEMBER_OF_GROUP'				=> 'A operação desejada não pode ser feita porque não é Utilizador deste Grupo.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Não está autorizado a sair de seu Grupo Padrão.',

	'PRIMARY_GROUP'						=> 'Grupo Primário',

	'REMOVE_SELECTED'					=> 'Remover Selecionado',

	'USER_GROUP_CHANGE'					=> 'Do grupo “%1$s” para “%2$s”',
	'USER_GROUP_DEMOTE'					=> 'Lider do Grupo',
	'USER_GROUP_DEMOTE_CONFIRM'			=> 'Tem a certeza de que deseja tornar-se Líder do Grupo Selecionado?',
	'USER_GROUP_DEMOTED'				=> 'Tornou-se Líder do Grupo com sucesso.',
));
