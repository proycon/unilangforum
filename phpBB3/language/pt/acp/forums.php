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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'				=> 'Auto-Limpeza por idade',
	'AUTO_PRUNE_DAYS_EXPLAIN'		=> 'Dias desde a última Mensagem até à eliminação do Tópico.',
	'AUTO_PRUNE_FREQ'				=> 'Frequência da Auto-Limpeza',
	'AUTO_PRUNE_FREQ_EXPLAIN'		=> 'Dias entre limpezas.',
	'AUTO_PRUNE_VIEWED'				=> 'Auto-Limpeza por visualização',
	'AUTO_PRUNE_VIEWED_EXPLAIN'		=> 'Dias desde a última visualização até à eliminação do Tópico.',
	'AUTO_PRUNE_SHADOW_FREQ'		=> 'Frequência de limpeza dos Tópicos Fantasma',
	'AUTO_PRUNE_SHADOW_DAYS'		=> 'Idade dos Tópicos Fantasma para Auto limpeza',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Número de dias após o qual Tópico Fantasma é eliminado.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Tempo em dias entre os eventos de limpeza.',

	'CONTINUE'						=> 'Continuar',
	'COPY_PERMISSIONS'				=> 'Copiar Permissões de',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitar a configuração das permissões do seu novo Fórum, poderá copiar as permissões de um Fórum já existente.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Quando criado, este Fórum terá as mesmas permissões do Fórum selecionado. Se não selecionar nenhum o novo Fórum não será visível até que sejam definidas as suas Permissões.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Selecione o Fórum cujas Permissões deseja copiar para este. Se não selecionar nenhum Fórum mantêm-se as Permissões atuais.',
	'COPY_TO_ACL'					=> 'Alternativamente, também poderá %sconfigurar novas permissões%s para este Fórum.',
	'CREATE_FORUM'					=> 'Criar novo Fórum',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Apagar Mensagens ou Mover para Fórum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Apagar Subfóruns ou Mover para Fórum',
	'DEFAULT_STYLE'					=> 'Estilo Padrão',
	'DELETE_ALL_POSTS'				=> 'Apagar Mensagens',
	'DELETE_SUBFORUMS'				=> 'Apagar Subfóruns e Mensagens',
	'DISPLAY_ACTIVE_TOPICS'			=> 'Mostrar Tópicos ativos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Se definido como sim mostra os Tópicos ativos dos Fóruns desta categoria.',

	'EDIT_FORUM'					=> 'Editar Fórum',
	'ENABLE_INDEXING'				=> 'Indexar para Pesquisa',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se definido como sim, as Mensagens deste Fórum serão indexadas para pesquisa.',
	'ENABLE_POST_REVIEW'			=> 'Revisão de Mensagens',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se definido como sim, as Mensagens podem ser sempre editadas pelos seus autores.',
	'ENABLE_QUICK_REPLY'			=> 'Resposta Rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Se definido como sim, ativa a Resposta Rápida neste Fórum. No entanto esta tem que estar globalmente ativada. A Resposta Rápida só é permitida aos Utilizadores com Permissão para enviar Mensagens neste Fórum.',
	'ENABLE_RECENT'					=> 'Mostrar Tópicos ativos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Se definido como sim, inclui os Tópicos deste Fórum na lista de Tópicos ativos.',
	'ENABLE_TOPIC_ICONS'			=> 'Ativar Ícones de Tópicos',

	'FORUM_ADMIN'					=> 'Administração de Fóruns',
	'FORUM_ADMIN_EXPLAIN'			=> 'No phpBB3 tudo é baseado em Fóruns que podem ser de três tipos: Categoria, Fórum e Atalho. O Fórum pode ter um número ilimitado de Subfóruns, podendo o Administrador decidir o que cada um pode receber. Aqui pode adicionar, editar, apagar, trancar e destrancar Fóruns individuais e ainda adicionar controlos. Se as suas Mensagens e Tópicos não estão sincronizadas, pode resincronizar um Fórum. <strong>Os Fóruns criados só se tornam visíveis aos Utilizadores depois de definidas ou copiadas as Permissões adequadas.</strong>',
	'FORUM_AUTO_PRUNE'				=> 'Ativar Auto-limpeza',
	'FORUM_AUTO_PRUNE_EXPLAIN'		=> 'Elimina os Tópicos deste Fórum conforme os parâmetros de frequência/idade definidos abaixo.',
	'FORUM_CREATED'					=> 'Fórum criado com sucesso.',
	'FORUM_DATA_NEGATIVE'			=> 'Os Parâmetros de Limpeza não podem ser negativos.',
	'FORUM_DESC_TOO_LONG'			=> 'A sua descrição é muito grande, o limite é de 4.000 caracteres.', 
	'FORUM_DELETE'					=> 'Apagar Fórum',
	'FORUM_DELETE_EXPLAIN'			=> 'Esta ferramenta permite-lhe apagar um determinado Fórum. Se este, for um Fórum com um elevado número de mensagens, pode se desejar mover, todas as suas mensagens (ou Fóruns) incluidas.',
	'FORUM_DELETED'					=> 'Fórum selecionado apagado com sucesso.',
	'FORUM_DESC'					=> 'Descrição',
	'FORUM_DESC_EXPLAIN'			=> 'Este texto será exibido com o Fórum. Pode incluir códigos HTML.',
	'FORUM_EDIT_EXPLAIN'			=> 'Esta ferramenta permite-lhe criar um novo Fórum. Tenha em atenção que a Moderação e o Controlo do Contador de Mensagens são determinados pelas Permissões do Fórum para cada Utilizador ou Grupo.',
	'FORUM_IMAGE'					=> 'Imagem do Fórum',
	'FORUM_IMAGE_EXPLAIN'			=> 'Local da Imagem (relativo à Diretoria raíz do phpBB).',
	'FORUM_IMAGE_NO_EXIST'			=> 'A imagem do Fórum especificada não existe',	
	'FORUM_LINK_EXPLAIN'			=> 'URL Completa (incluindo o protocolo, ex. <samp>http://</samp>) para o local em que o utilizador será redirecionado ao clicar, ex: http://www.phpbb.com/.',
	'FORUM_LINK_TRACK'				=> 'Salvar Redirecionamento de Links',
	'FORUM_LINK_TRACK_EXPLAIN'		=> 'Guarda o número de vezes que o atalho do Fórum foi usado.',
	'FORUM_NAME'					=> 'Nome do Fórum',
	'FORUM_NAME_EMPTY'				=> 'Deve escreve um nome para o Fórum.',
	'FORUM_PARENT'					=> 'Fórum Pai',
	'FORUM_PASSWORD'				=> 'Senha do Fórum',
	'FORUM_PASSWORD_CONFIRM'		=> 'Confirmar Senha do Fórum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'=> 'Só se definir uma senha para este Fórum.',
	'FORUM_PASSWORD_EXPLAIN'		=> 'Defina uma Senha para este Fórum. Utilize preferencialmente o sistema de Permissões.',
	'FORUM_PASSWORD_UNSET'			=> 'Remover password do Fórum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'Selecione se deseja remover a password do Fórum.',
	'FORUM_PASSWORD_OLD'			=> 'A senha do Fórum está a usar um método de encriptação antigo e deve ser mudada.',
	'FORUM_PASSWORD_MISMATCH'		=> 'As senhas não coincidem entre si.',
	'FORUM_PRUNE_SETTINGS'			=> 'Configuração da Limpeza de Fóruns.',
	'FORUM_PRUNE_SHADOW'			=> 'Ativar auto limpeza de Tópicos fantasma',
	'FORUM_PRUNE_SHADOW_EXPLAIN'	=> 'Limpa o fórum de Tópicos fantasma, defina os parâmetros frequência/idade mais abaixo.',
	'FORUM_RESYNCED'				=> 'O Fórum "%s" foi Ressincronizado com sucesso',
	'FORUM_RULES_EXPLAIN'			=> 'As Regras são exibidas em qualquer página do Fórum selecionado.',
	'FORUM_RULES_LINK'				=> 'Link para as Regras do Fórum',
	'FORUM_RULES_LINK_EXPLAIN'		=> 'Escreva aqui o URL da página das regras do Fórum. Esta configuração irá substituir o texto que escreveu das regras do Fórum.',
	'FORUM_RULES_PREVIEW'			=> 'Prever Regras do Fórum',
	'FORUM_RULES_TOO_LONG'			=> 'As Regras do Fórum são muito grandes, o limite é de 4.000 caracteres.',
	'FORUM_SETTINGS'				=> 'Configurações do Fórum',
	'FORUM_STATUS'					=> 'Estado do Fórum',
	'FORUM_STYLE'					=> 'Estilo do Fórum',
	'FORUM_TOPICS_PAGE'				=> 'Tópicos por página',
	'FORUM_TOPICS_PAGE_EXPLAIN'		=> 'Um valor diferente de zero, altera o número padrão de Tópicos por página.',
	'FORUM_TYPE'					=> 'Tipo de Fórum',
	'FORUM_UPDATED'					=> 'A Configuração do Fórum foi atualizada com sucesso.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Está a tentar modificar um Fórum com Subfóruns para um atalho. Por favor, mova todos os Subfóruns deste Fórum antes de continuar, caso não mova os Subfóruns e faça a modificação para atalho todos os Subfóruns ficarão indisponíveis.',

	'GENERAL_FORUM_SETTINGS'		=> 'Configuração Geral dos Fóruns',

	'LINK'							=> 'atalho',
	'LIST_INDEX'					=> 'Mostrar no Fórum Pai',
	'LIST_INDEX_EXPLAIN'			=> 'Se definido como Sim, mostra no Fórum Pai, um atalho para este Fórum, se tiver a opção Mostrar os Subfóruns ativada.',
	'LIST_SUBFORUMS'				=> 'Mostrar os Subfóruns',
	'LIST_SUBFORUMS_EXPLAIN'		=> 'Se definido como sim, mostra um atalho para os Subfóruns que tiverem a opção Mostrar no Fórum Pai ativada.',
	'LOCKED'						=> 'Bloqueado',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'O Fórum escolhido para mover as mensagens não pode receber mensagens. Selecione um Fórum que possa receber mensagens.',
	'MOVE_POSTS_TO'					=> 'Mover Mensagens para',
	'MOVE_SUBFORUMS_TO'				=> 'Mover Subfóruns para',

	'NO_DESTINATION_FORUM'			=> 'Não selecionou nenhum Fórum para Mover o conteúdo.',
	'NO_FORUM_ACTION'				=> 'Sem ações definidas para o conteúdo do Fórum.',
	'NO_PARENT'						=> 'Sem Pai',
	'NO_PERMISSIONS'				=> 'Não Copiar Permissões',
	'NO_PERMISSION_FORUM_ADD'		=> 'Não está autorizado a adicionar Fóruns.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Não está autorizado a apagar Fóruns.',

	'PARENT_IS_LINK_FORUM'			=> 'O Fórum Pai indicado está na forma de atalho. Fóruns em forma de atalho não podem ter Subfóruns, selecione um Fórum ou Categoria.',
	'PARENT_NOT_EXIST'				=> 'O Fórum Pai selecionado não existe.',
	'PRUNE_ANNOUNCEMENTS'			=> 'Limpar Anúncios',
	'PRUNE_STICKY'					=> 'Limpar Tópicos Fixos',
	'PRUNE_OLD_POLLS'				=> 'Limpar Votações antigas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Apaga os Tópicos com votações sem votos, nos dias que definiu em Auto-Limpeza por idade.',

	'REDIRECT_ACL'					=> 'Aqui pode %sconfigurar as Permissões%s deste Fórum.',

	'SYNC_IN_PROGRESS'				=> 'Sincronizando Fórum',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Resincronização em progresso da ordem dos Tópicos %1$d/%2$d.',

	'TYPE_CAT'						=> 'Categoria',
	'TYPE_FORUM'					=> 'Fórum',
	'TYPE_LINK'						=> 'Link',

	'UNLOCKED'						=> 'Desbloqueado',
));
