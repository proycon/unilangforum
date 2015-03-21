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
	'ADMIN_SIG_PREVIEW'				=> 'Pré-visualização da Assinatura',
	'AT_LEAST_ONE_FOUNDER'			=> 'Não pode mudar este Fundador para um Utilizador normal. É necessário ter no mínimo um Fundador para este Fórum. Se quer mudar a situação deste Fundador, promova outro Utilizador à condição de Fundador primeiro.',

	'BAN_ALREADY_ENTERED'			=> 'A expulsão já tinha sido previamente informada. A lista de expulsões não foi atualizada.',
	'BAN_SUCCESSFUL'				=> 'Expulso com sucesso!',
	
	'CANNOT_BAN_ANONYMOUS'			=> 'Não tem permissão para eliminar a conta Visitantes. As Permissões dos Visitantes podem ser definidas no separador Permissões.',
	'CANNOT_BAN_FOUNDER'			=> 'Não pode expulsar Fundadores.',
	'CANNOT_BAN_YOURSELF'			=> 'Não pode auto expulsar-se.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Não pode desativar contas de Motores de Busca. Desative o Motor de Busca.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Não pode desativar contas de Fundador.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Não pode desativar sua própria conta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Não pode forçar a Reativação de contas de Motores de Busca. Desative o Motor de Busca.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Não pode forçar a Reativação de uma conta de Fundador.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Não pode forçar a Reativação da sua própria conta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Não pode remover a conta de Utilizador convidado.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Não tem permissão para remover contas de fundador.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Não pode remover sua própria conta.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Não pode promover os Utilizadores ignorados a Fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Tem que ativar os Utilizadores antes de os promover a Fundadores, apenas Utilizadores ativos podem ser promovidos.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Introduzir apenas se desejar alterar o endereço de email.',

	'DELETE_POSTS'					=> 'Apagar as Mensagens',
	'DELETE_USER'					=> 'Apagar Utilizador',
	'DELETE_USER_EXPLAIN'			=> 'Atenção: Esta operação é irreversível. Não é possível recuperar utilizadores depois de apagados. As Mensagens Privadas enviadas por este utilizador serão apagadas e deixarão de estar disponíveis nos seus destinatários.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'A Reativação foi forçada com sucesso.',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Fundadores não podem ser Banidos, Excluídos ou Alterados por membros não Fundadores.',

	'GROUP_APPROVE'					=> 'Aprovar Membro',
	'GROUP_DEFAULT'					=> 'Padrão',
	'GROUP_DELETE'					=> 'Apagar',
	'GROUP_DEMOTE'					=> 'Demitir',
	'GROUP_PROMOTE'					=> 'Promover',

	'IP_WHOIS_FOR'					=> 'Quem é o IP para %s',

	'LAST_ACTIVE'					=> 'Últimos ativos',

	'MOVE_POSTS_EXPLAIN'			=> 'Selecione o Fórum para o onde deseja mover todas as Mensagens que este Utilizador fez.',

	'NO_SPECIAL_RANK'				=> 'Sem atribuição de classificação especial',
	'NO_WARNINGS'					=> 'Nenhum Aviso.',
	'NOT_MANAGE_FOUNDER'			=> 'Tentou gerir um Utilizador Fundador do Fórum. Apenas Fundadores podem gerir outros Fundadores.',

	'QUICK_TOOLS'					=> 'Ferramentas Rápidas',

	'REGISTERED'					=> 'Registado',
	'REGISTERED_IP'					=> 'Registo do IP',
	'RETAIN_POSTS'					=> 'Manter as Mensagens',

	'SELECT_FORM'					=> 'Selecionar um Formulário',
	'SELECT_USER'					=> 'Selecionar um Utilizador',

	'USER_ADMIN'					=> 'Administração de Utilizadores',
	'USER_ADMIN_ACTIVATE'			=> 'Ativar Conta',
	'USER_ADMIN_ACTIVATED'			=> 'Utilizador Ativado com sucesso.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'O Avatar foi removido com sucesso da conta do Utilizador.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Expulso pelo email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Endereço de email expulso via Adminstração do Utilizador.',
	'USER_ADMIN_BAN_IP'				=> 'Expulso pelo IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP expulso via Adminstração do Utilizador',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nome de Utilizador expulso via Adminstração do Utilizador',
	'USER_ADMIN_BAN_USER'			=> 'Expulso pelo nome de Utilizador',
	'USER_ADMIN_DEACTIVATE'			=> 'Desativar conta',
	'USER_ADMIN_DEACTIVED'			=> 'Utilizador desativado com sucesso.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Apagar todos os anexos',
	'USER_ADMIN_DEL_AVATAR'			=> 'Apagar Avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Caixa de saída de Mensagens Privadas vazias',
	'USER_ADMIN_DEL_POSTS'			=> 'Apagar todas as Mensagens',
	'USER_ADMIN_DEL_SIG'			=> 'Apagar Assinatura',
	'USER_ADMIN_EXPLAIN'			=> 'Aqui pode alterar as informações dos Utilizadores. Para modificar as Permissões dos Utilizadores use o Sistema de Permissões de Utilizadores e Grupos.',
	'USER_ADMIN_FORCE'				=> 'Forçar a Reativação',
	'USER_ADMIN_LEAVE_NR'			=> 'Apague para um Novo Registo',
	'USER_ADMIN_MOVE_POSTS'			=> 'Move todas as Mensagens',
	'USER_ADMIN_SIG_REMOVED'		=> 'Assinatura removida com sucesso da Conta do Utilizador.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Todos os Anexos feitos por este Utilizador foram apagados com sucesso.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'O avatar não pode ser exibido porque os avatars não são permitidos.',
	'USER_AVATAR_UPDATED'			=> 'Detalhes dos Avatares do Utilizador foram atualizados com sucesso.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'O avatar atual não pode ser exibido porque não é permitido.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de Perfil Personalizados',
	'USER_DELETED'					=> 'Utilizador apagado com sucesso.',
	'USER_GROUP_ADD'				=> 'Adiciona Utilizador ao Grupo',
	'USER_GROUP_NORMAL'				=> 'Grupos de Utilizadores Normal é um membro de',
	'USER_GROUP_PENDING'			=> 'O Utilizador tem a inscrição pendente nos Grupos',
	'USER_GROUP_SPECIAL'			=> 'O Utilizador é Membro dos Grupos pré-definidos',
	'USER_LIFTED_NR'				=> 'Removido com sucesso o novo utilizador registado recentemente.',
	'USER_NO_ATTACHMENTS'			=> 'Não existem Ficheiros a exibir.',
	'USER_NO_POSTS_TO_DELETE'		=> 'O utilizador não tem mensagens para reter ou excluir.',
	'USER_OUTBOX_EMPTIED'			=> 'Apagado com sucesso a mensagem privada da caixa de saída.',
	'USER_OUTBOX_EMPTY'				=> 'A caixa de saída de mensagens privdas está agora vazia.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalhes do Utilizador foram atualizados.',
	'USER_POSTS_DELETED'			=> 'As Mensagens do Utilizador foram excluídas com sucesso.',
	'USER_POSTS_MOVED'				=> 'As Mensagens dos Utilizadores foram movidas com sucesso.',
	'USER_PREFS_UPDATED'			=> 'As preferências do Utilizador foram atualizadas.',
	'USER_PROFILE'					=> 'Perfil do Utilizador',
	'USER_PROFILE_UPDATED'			=> 'O Perfil do Utilizador foi atualizado com sucesso.',
	'USER_RANK'						=> 'Classificação do Utilizador',
	'USER_RANK_UPDATED'				=> 'Classificação do Utilizador atualizada.',
	'USER_SIG_UPDATED'				=> 'A Assinatura do Utilizador foi atualizada com sucesso.',
	'USER_WARNING_LOG_DELETED'		=> 'Informação não disponível. Possivelmente a entrada de registo foi apagada.',
	'USER_TOOLS'					=> 'Ferramentas Básicas',
));
