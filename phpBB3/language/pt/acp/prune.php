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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'		=> 'Esta secção permite excluir ou desativar Utilizadores do Fórum. As contas podem ser filtradas de várias maneiras: pela contagem de mensagens, atividade mais recente, etc. Os critérios podem ser combinados para determinar as contas afetadas. Por exemplo, pode selecionar os Utilizadores com menos de 10 mensagens, inativos de 01/01/2002. Use um * como complemento para campos de texto. Alternativamente, pode não usar a seleção por critérios, introduzindo a lista de Utilizadores (um por linha) no campo de texto. Tenha cuidado com este recurso! Depois de excluir um Utilizador não é possível reverter a ação.',

	'CRITERIA'						=> 'Critérios',

	'DEACTIVATE_DELETE'				=> 'Desativar ou apagar',
	'DEACTIVATE_DELETE_EXPLAIN'		=> 'Escolher se quer desativar Utilizadores ou excluí-los totalmente. Por favor, note que os Utilizadores excluídos não podem ser restaurados!',
	'DELETE_USERS'					=> 'Apagar',
	'DELETE_USER_POSTS'				=> 'Apagar Mensagens Limpas',
	'DELETE_USER_POSTS_EXPLAIN'		=> 'Não é possível apagar as Mensagens de Utilizadores eliminados',

	'JOINED_EXPLAIN'				=> 'Escrever uma Data em formato <kbd>YYYY-MM-DD</kbd>. Pode usar ambos os campos para definir um intervalo, ou deixar em branco para um intervalo aberto de datas.',

	'LAST_ACTIVE_EXPLAIN'			=> 'Introduza a data no formato <kbd>YYYY-MM-DD</kbd>. Introduza <kbd>0000-00-00</kbd> para selecionar Utilizadores que nunca entraram, as condições <em>Antes</em> e <em>Depois</em> serão ignoradas.',

	'POSTS_ON_QUEUE'				=> 'Mensagens a aguardar aprovação',
	'PRUNE_USERS_GROUP_EXPLAIN'		=> 'Limite de utilizadores no grupo selecionado.',
	'PRUNE_USERS_GROUP_NONE'		=> 'Todos os grupos',
	'PRUNE_USERS_LIST'				=> 'Limpeza automatica de Utilizadores',
	'PRUNE_USERS_LIST_DELETE'		=> 'Se selecionar este critério, os Utilizadores terão as suas contas removidas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Se selecionar este critério, os Utilizadores terão as suas contas desativadas.',

	'SELECT_USERS_EXPLAIN'			=> 'Digite aqui utilizadores, que serão utilizados de preferência nos critérios acima. Fundadores não podem ser apagados.',

	'USER_DEACTIVATE_SUCCESS'		=> 'Os Utilizadores selecionados foram desativados com sucesso.',
	'USER_DELETE_SUCCESS'			=> 'Os Utilizadores selecionados foram apagados com sucesso.',
	'USER_PRUNE_FAILURE'			=> 'Nenhum Utilizador cumpriu estes critérios.',

	'WRONG_ACTIVE_JOINED_DATE'		=> 'A data indicada está incorreta, o formato correto é <kbd>YYYY-MM-DD</kbd>.',
)); 

// Forum Pruning 
$lang = array_merge($lang, array( 
	'ACP_PRUNE_FORUMS_EXPLAIN'		=> 'Aqui pode apagar qualquer Tópico que não tenha sido respondido ou visualizado dentro do número de dias selecionado. Se não escrever um número, então todos os Tópicos serão apagados. Note que esta operação não excluirá Tópicos com Votações em Curso ou Tópicos Fixos e Anúncios.',

	'FORUM_PRUNE'					=> 'Limpeza',

	'NO_PRUNE'						=> 'Sem Fóruns Limpos.',

	'SELECTED_FORUM'				=> 'Fórum selecionado',
	'SELECTED_FORUMS'				=> 'Fóruns selecionados',

	'POSTS_PRUNED'					=> 'Mensagens Limpas',
	'PRUNE_ANNOUNCEMENTS'			=> 'Limpar Anúncios',
	'PRUNE_FINISHED_POLLS'			=> 'Limpar Votações Encerradas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Apagar Tópicos com Votações concluídas',
	'PRUNE_FORUM_CONFIRM'			=> 'Tem a certeza de que deseja ativar a limpeza automatica nos Fóruns selecionados com as configurações especificadas? Os Tópicos e Mensagens apagados não podem ser recuperados.',
	'PRUNE_NOT_POSTED'				=> 'Dias desde o último enviado',
	'PRUNE_NOT_VIEWED'				=> 'Dias desde o último visualizado',
	'PRUNE_OLD_POLLS'				=> 'Limpar votações Antigas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Apagar Tópicos com Votações que não tenham tido votos dentro do número de dias selecionados.',
	'PRUNE_STICKY'					=> 'Limpar Tópicos Fixos',
	'PRUNE_SUCCESS'					=> 'A Limpeza foi executada com sucesso.',

	'TOPICS_PRUNED'					=> 'Tópicos Limpos',
));
