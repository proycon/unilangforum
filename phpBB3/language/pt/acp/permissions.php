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
	'ACP_PERMISSIONS_EXPLAIN'	=> ' 
		<p>As Permissões do phpBB3 são bastante abrangentes e estão agrupadas em quatro grandes Grupos:</p> 

		<h2>1 - Permissões Globais</h2> 
		<p>Gestão, controlo e aplicação das Permissões ao nível global de acesso ao Fórum. As Permissões estão divididas em Permissões do Utilizador, Permissões do Grupo, Permissões dos Administradores e Permissões dos Moderadores Globais.</p>

		<h2>2 - Permissões do Fórum</h2> 
		<p>Gestão, controlo e aplicação das Permissões de acesso aos fóruns. As Permissões estão dividias em Permissões de Fóruns, Permissões dos Moderadores nos Fóruns, Permissões dos utilizadores nos Fóruns e Permissões dos Grupos nos Fóruns.</p>

		<h2>3 - Categorias das Permissões</h2>
		<p>Gestão, controlo e aplicação das Permissões às categorias. As Permissões estão divididas em 4 grupos, Categorias dos Administradores, Categorias dos Moderadores, Categorias dos Utilizadores e Categorias dos Fóruns. As categorias padrão cobrem a Administração do Fórum. Pode editar cada uma das categorias, para adicionar ou excluir tarefas se o desejar ou achar necessário.</p>

		<h2>4 - Cenário das Permissões</h2>
		<p>Dá uma visão global das Permissões atribuídas a Utilizadores, Moderadores (locais e globais), Administradores ou Fóruns.</p>
	 
		<br /> 

		<p>Para mais informações sobre a configuração e a Gestão de Permissões no phpBB3, veja o <a href="https://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capítulo 1.5 do Guia de Inicialização Rápida</a>.</p> 
	',

	'ACL_NEVER'				=> 'Nunca',
	'ACL_SET'				=> 'Configurar Permissões',
	'ACL_SET_EXPLAIN'		=> 'As Permissões são baseadas num sistema <strong>SIM</strong>/<strong>NÃO</strong>. A opção <strong>Nunca</strong> selecionada para um Utilizador ou Grupo sobrepor-se-á a todas as outras. Se não deseja atribuir um valor de qualquer opção para este Utilizador ou Grupo, selecione <strong>NÃO</strong>. Se valores são atribuídos para esta opção ou em outra qualquer, eles serão preferencialmente utilizados, senão o <strong>Nunca</strong> é assumido. Todos os objetos marcados (com a caixa de confirmação em frente a eles) irão copiar as permissões que definiu.',
	'ACL_SETTING'			=> 'Configuração',

	'ACL_TYPE_A_'			=> 'Permissões Administrativas',
	'ACL_TYPE_F_'			=> 'Permissões de Fóruns',
	'ACL_TYPE_M_'			=> 'Permissões Moderativas',
	'ACL_TYPE_U_'			=> 'Permissões de Utilizador',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permissões Administrativas',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permissões de Utilizador',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permissões de Moderadores Globais',
	'ACL_TYPE_LOCAL_M_'		=> 'Permissões de Moderadores de Fóruns',
	'ACL_TYPE_LOCAL_F_'		=> 'Permissões de Fóruns',

	'ACL_NO'				=> 'Não',
	'ACL_VIEW'				=> 'Inspeção das Permissões',
	'ACL_VIEW_EXPLAIN'		=> 'Aqui pode ver as Permissões dos Utilizadores/Grupos. Um quadrado vermelho indica que o Utilizador/Grupo não tem a Permissão, um quadrado verde indica que o Utilizador/Grupo tem a Permissão.',
	'ACL_YES'				=> 'Sim',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aqui pode configurar as Permissões Administrativas dos Utilizadores e Grupos. Todos os Utilizadores com Permissões Administrativas podem entrar no Painel de Administração.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aqui pode configurar Utilizadores e Grupos como Moderadores do Fórum. Para configurar Permissões de Utilizador, para definir Permissões de Moderadores Globais ou Administradores, por favor, use a página apropriada.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aqui pode definir que Utilizadores e Grupos podem aceder a cada um dos Fóruns. Para configurar Moderadores ou Administradores, por favor, use a página apropriada.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Aqui pode copiar as Permissões dum Fórum atribuindo-as a um ou mais Fóruns.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aqui pode configurar Permissões de Moderadores Globais para Utilizadores e Grupos. Estes são Moderadores normais, exceto se tiverem acesso a todos Fóruns.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui pode configurar Permissões de Fóruns para Grupos.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aqui pode configurar as Permissões Globais dos Grupos - Permissões dos Utilizadores, Permissões Globais e Permissões Administrativas. As Permissões dos Utilizadores incluem o uso de Avatares, envio de Mensagens Privadas, etc. Permissões Globais como a Aprovação de Mensagens, Gestão de Tópicos, Gestão de Expulsões, etc. Por último, as Permissões Administrativas como a alteração de Permissões, definição de BBCodes, Gestão de Fóruns, etc. As Permissões dos Utilizadores individuais apenas devem ser alteradas em ocasiões muito especificas. Adicione os Utilizadores a um Grupo e altere as permissões do Grupo.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aqui pode criar e configurar as Categorias dos Administradores. Cada Categoria tem as Permissões definidas pelo conjunto de funções selecionadas. Alterando uma função, altera as Permissões dos itens associados.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aqui pode criar e configurar as Categorias de acesso aos Fóruns. Cada Categoria tem as Permissões definidas pelo conjunto de funções selecionadas. Alterando uma função, altera as Permissões dos itens associados.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aqui pode criar e configurar as Categorias dos Moderadores. Cada Categoria tem as Permissões definidas pelo conjunto de funções selecionadas. Alterando uma função, altera as Permissões dos itens associados.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aqui pode criar e configurar as Categorias dos Utilizadores. Cada Categoria tem as Permissões definidas pelo conjunto de funções selecionadas. Alterando uma função, altera as Permissões dos itens associados.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aqui pode configurar as Permissões de Fóruns para Utilizadores.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aqui pode configurar as Permissões Globais para Utilizadores. As Permissões de Utilizadores incluem autorização do uso de Avatares, envio de Mensagens Privadas, etc; Permissões Globais como a aprovação de mensagens, gestão de Tópicos, gestão de Expulsões etc; Por último, as Permissões Administrativas como a alteração de permissões, definição de BBCodes, gestão de Fóruns e etc. Para alterar estas configurações para um grande número de Utilizadores, o sistema de permissões de grupos é o método mais aconselhável. As Permissões dos Utilizadores individuais apenas devem ser alteradas em ocasiões muito especificas. Adicione os Utilizadores a um Grupo e altere as permissões do Grupo.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Permissões Administrativas dos Utilizadores e/ou Grupos selecionados.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Permissões de Moderador Global dos Utilizadores e/ou Grupos selecionados.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Permissões dos Utilizadores e/ou Grupos nos Fóruns selecionadas.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Permissões de Moderador de Fórum dos Utilizadores e/ou Grupos e Fóruns selecionadas.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Permissões de Utilizador dos Utilizadores e/ou Grupos selecionados.',

	'ADD_GROUPS'					=> 'Adicionar Grupos',
	'ADD_PERMISSIONS'				=> 'Adicionar Permissões',
	'ADD_USERS'						=> 'Adicionar Utilizadores',
	'ADVANCED_PERMISSIONS'			=> 'Permissões Avançadas',
	'ALL_GROUPS'					=> 'Selecionar todos os Grupos',
	'ALL_NEVER'						=> 'Tudo <strong>Nunca</strong>',
	'ALL_NO'						=> 'Tudo <strong>Não</strong>',
	'ALL_USERS'						=> 'Selecionar Todos os Utilizadores',
	'ALL_YES'						=> 'Tudo <strong>Sim</strong>',
	'APPLY_ALL_PERMISSIONS'			=> 'Aplicar todas as Permissões',
	'APPLY_PERMISSIONS'				=> 'Aplicar Permissões',
	'APPLY_PERMISSIONS_EXPLAIN'		=> 'As Permissões e tarefas definidas para este item serão apenas aplicadas a este item e todos os itens marcados.',
	'AUTH_UPDATED'					=> 'As Permissões foram atualizadas com sucesso.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Tem a certeza que pretende prosseguir com esta operação? Por favor, esteja ciente que isto irá sobrescrever quaisquer permissões existentes nos alvos selecionados.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Selecione o Fórum cujas Permissões pretende copiar.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Selecione o Fórum cujas Permissões pretende definir.',
	'COPY_PERMISSIONS_FROM'					=> 'Copiar Permissões de',
	'COPY_PERMISSIONS_TO'					=> 'Aplicar Permissões a',

	'CREATE_ROLE'					=> 'Criar Categoria',
	'CREATE_ROLE_FROM'				=> 'Usar Configurações de',
	'CUSTOM'						=> 'Personalizar',

	'DEFAULT'						=> 'Padrão',
	'DELETE_ROLE'					=> 'Eliminar Tarefa',
	'DELETE_ROLE_CONFIRM'			=> 'Deseja realmente Eliminar esta Tarefa? Itens atribuídos a esta Tarefa <strong>não</strong> perderão as suas configurações de Permissões.',
	'DISPLAY_ROLE_ITEMS'			=> 'Ver Itens utilizando esta Tarefa',

	'EDIT_PERMISSIONS'				=> 'Editar Permissões',
	'EDIT_ROLE'						=> 'Editar Tarefa',

	'GROUPS_NOT_ASSIGNED'			=> 'Nenhum Grupo atribuído a esta Tarefa',

	'LOOK_UP_GROUP'					=> 'Gerir o Grupo',
	'LOOK_UP_USER'					=> 'Procurar um Utilizador',

	'MANAGE_GROUPS'					=> 'Administrar Grupos',
	'MANAGE_USERS'					=> 'Administrar Utilizadores',

	'NO_AUTH_SETTING_FOUND'			=> 'A Configuração de Permissões não foi definida.',
	'NO_ROLE_ASSIGNED'				=> 'Sem Tarefas atribuidas',
	'NO_ROLE_ASSIGNED_EXPLAIN'		=> 'A Configuração para esta Tarefa não alterou as Permissões na direita. Se deseja desativar/excluir todas as Permissões deve utilizar o atalho "Tudo <strong>Não</strong>".',
	'NO_ROLE_AVAILABLE'				=> 'Sem Tarefas Disponíveis',
	'NO_ROLE_NAME_SPECIFIED'		=> 'Deve inserir o nome da Categoria',
	'NO_ROLE_SELECTED'				=> 'A Tarefa não foi encontrada.',
	'NO_USER_GROUP_SELECTED'		=> 'Não selecionou nenhum Utilizador ou Grupo.',

	'ONLY_FORUM_DEFINED'			=> 'Apenas selecionou Fóruns. Selecione pelo menos um Utilizador ou um Grupo.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'As Tarefas e Permissões também serão aplicadas a todos os objetos selecionados',
	'PLUS_SUBFORUMS'				=> '+ Subfóruns',

	'REMOVE_PERMISSIONS'			=> 'Eliminar Permissões',
	'REMOVE_ROLE'					=> 'Eliminar Tarefa',
	'RESULTING_PERMISSION'			=> 'Resultando Permissão',
	'ROLE'							=> 'Tarefa',
	'ROLE_ADD_SUCCESS'				=> 'A Tarefa foi adicionada com sucesso.',
	'ROLE_ASSIGNED_TO'				=> 'Utilizadores/Grupos da Categoria %s',
	'ROLE_DELETED'					=> 'A Tarefa foi excluída com sucesso.',
	'ROLE_DESCRIPTION'				=> 'Descrição',

	'ROLE_ADMIN_FORUM'				=> 'Administrador de Fóruns',
	'ROLE_ADMIN_FULL'				=> 'Administrador Principal',
	'ROLE_ADMIN_STANDARD'			=> 'Administrador Secundário',
	'ROLE_ADMIN_USERGROUP'			=> 'Administrador de Grupos e Utilizadores',
	'ROLE_FORUM_BOT'				=> 'Acesso para Motores de Busca',
	'ROLE_FORUM_FULL'				=> 'Acesso Completo',
	'ROLE_FORUM_LIMITED'			=> 'Acesso Limitado',
	'ROLE_FORUM_LIMITED_POLLS'		=> 'Acesso Limitado + Votações',
	'ROLE_FORUM_NOACCESS'			=> 'Acesso Bloqueado',
	'ROLE_FORUM_ONQUEUE'			=> 'Acesso com Moderação',
	'ROLE_FORUM_POLLS'				=> 'Acesso Padrão + Votações',
	'ROLE_FORUM_READONLY'			=> 'Acesso de Leitura',
	'ROLE_FORUM_STANDARD'			=> 'Acesso Padrão',
	'ROLE_FORUM_NEW_MEMBER'			=> 'Acesso para Utilizadores Registados Recentemente',
	'ROLE_MOD_FULL'					=> 'Moderador Global',
	'ROLE_MOD_QUEUE'				=> 'Moderador de Fóruns',
	'ROLE_MOD_SIMPLE'				=> 'Moderador Secundário',
	'ROLE_MOD_STANDARD'				=> 'Moderador Principal',
	'ROLE_USER_FULL'				=> 'Utilizador Principal',
	'ROLE_USER_LIMITED'				=> 'Utilizador Iniciado',
	'ROLE_USER_NOAVATAR'			=> 'Utilizador Sem Avatar',
	'ROLE_USER_NOPM'				=> 'Utilizador Sem Mensagens Privadas',
	'ROLE_USER_STANDARD'			=> 'Utilizador Padrão',
	'ROLE_USER_NEW_MEMBER'			=> 'Utilizador Registado Recentemente',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Tem acesso às funções de Gestão e Permissões de Fóruns.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Tem acesso a todas as funções administrativas neste Fórum. Recomendado para Fundadores.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Tem acesso às funções administrativas, mas não às relacionadas com o Servidor ou o Sistema.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Tem acesso às funções de administração de Utilizadores e Grupos. Pode alterar permissões, configurações, administrar expulsões e classificações.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Acesso recomendado a Motores de Busca.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Pode utilizar todas as Funções do Fórum. Criar Anúncios e Tópicos Fixos e ignorar o Intervalo de Segurança. Não recomendado a Utilizadores Normais.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Pode utilizar algumas funções do Fórum. Não pode anexar ficheiros ou utilizar ícones nas Mensagens.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Pode utilizar algumas funções do Fórum. Não pode anexar ficheiros ou utilizar ícones nas mensagens. Pode criar Votações.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Não pode ver o Fórum (invisível).',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Pode utilizar a maior parte das Funções do Fórum, incluindo os Anexos, mas os Tópicos e as Mensagens têm que ser aprovadas por um Moderador.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Pode utilizar a maior parte das Funções do Fórum, incluindo os Anexos. Não pode bloquear ou eliminar os próprios Tópicos. Pode criar votações.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Pode ver e ler o Fórum. Não pode criar Tópicos nem responder às Mensagens.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Pode utilizar a maior parte das Funções do Fórum, incluindo os Anexos. Não pode bloquear ou eliminar os próprios Tópicos, e criar votações.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'A função dos membros do Grupo Especial de Utilizadores Registados Recentemente. Contém permissões <strong>Nunca</strong> para bloquear recursos aos novos utilizadores.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Pode utilizar todas as funções de Moderação. Pode fazer expulsões.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Pode utilizar algumas das funções de Moderação. Pode moderar fóruns, validar e editar mensagens.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Pode utilizar as funções de Moderação dos Tópicos. Não pode fazer advertências ou moderar fóruns.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Pode utilizar a maioria das funções de Moderação. Não pode fazer expulsões ou alterar o autor das mensagens.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Pode utilizar todas as funções do Utilizador, incluindo a alteração do nome do utilizador ou ignorar o Intervalo de Segurança. Usar apenas em situações especiais.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Pode utilizar algumas das funções do Utilizador. Não pode usar anexos, emails ou mensagens urgentes.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Pode utilizar algumas das funções do Utilizador. Não pode usar Avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Pode utilizar algumas das funções do Utilizador. Não pode usar Mensagens Privadas.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Pode utilizar a maior parte das funções do Utilizador. Não pode alterar o nome do utilizador ou o Intervalo de Segurança.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'A função dos membros do Grupo Especial de Utilizadores Registados Recentemente. Contém permissões <strong>Nunca</strong> para bloquear recursos aos novos utilizadores.',

	'ROLE_DESCRIPTION_EXPLAIN'				=> 'Pode fazer uma pequena descrição das Permissões desta Categoria. O Texto será mostrado na lista das Categorias.',
	'ROLE_DESCRIPTION_LONG'					=> 'A Descrição da tarefa é muito grande. Por Favor, limite seu texto a 4000 caracteres.',
	'ROLE_DETAILS'							=> 'Detalhes da tarefa',
	'ROLE_EDIT_SUCCESS'						=> 'A Tarefa foi editada com sucesso.',
	'ROLE_NAME'								=> 'Nome da Categoria',
	'ROLE_NAME_ALREADY_EXIST'				=> 'Uma tarefa nomeada <strong>%s</strong> já existe para o Tipo de Permissão especificado.',
	'ROLE_NOT_ASSIGNED'						=> 'A Categoria ainda não foi atribuída.',

	'SELECTED_FORUM_NOT_EXIST'				=> 'Os Fóruns selecionados não existem.',
	'SELECTED_GROUP_NOT_EXIST'				=> 'Os Grupos selecionados não existem.',
	'SELECTED_USER_NOT_EXIST'				=> 'Os Utilizadores selecionados não existem.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'			=> 'Nesta opção, selecionando um Fórum incluirá todos os seus Subfóruns.',
	'SELECT_ROLE'							=> 'Selecionar Tarefa',
	'SELECT_TYPE'							=> 'Selecionar Tipo',
	'SET_PERMISSIONS'						=> 'Dar Permissões',
	'SET_ROLE_PERMISSIONS'					=> 'Dar Permissões da Tarefa',
	'SET_USERS_PERMISSIONS'					=> 'Dar Permissões de Utilizador',
	'SET_USERS_FORUM_PERMISSIONS'			=> 'Dar Permissões de Utilizador do Fórum',

	'TRACE_DEFAULT'							=> 'Por Padrão, todas as opções estão assinaladas como <strong>NÃO</strong> (unset). Então, a permissão pode ser substituida por outras configurações.',
	'TRACE_FOR'								=> 'Copiar para',
	'TRACE_GLOBAL_SETTING'					=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> 'A Permissão do Grupo está assinalada como <strong>NUNCA</strong> como o resultado total, então o resultado antigo foi salvo.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'A Permissão do Grupo para este Fórum está assinalada como <strong>NUNCA</strong>, então o antigo resultado total foi salvo.',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> 'A Permissão do Grupo está assinalada como <strong>NUNCA</strong> que torna-se o novo valor total porque ainda não estava assinalado (assinale <strong>NÃO</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> 'A Permissão do Grupo para este Fórum está assinalada como <strong>NUNCA</strong> que vem a ser o novo valor total porque isto ainda não havia sido determinado (assinale <strong>NÃO</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> 'A Permissão do Grupo está assinalada como <strong>NUNCA</strong> que substitui o total <strong>SIM</strong> para um <strong>NUNCA</strong> para este utilizador.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> 'A Permissão do Grupo para este Fórum está assinalada como <strong>NUNCA</strong> que substitui o total <strong>SIM</strong> para um <strong>NUNCA</strong> a este Utilizador.',
	'TRACE_GROUP_NO'						=> 'A Permissão está assinalada como <strong>NÃO</strong> para este Grupo, o antigo valor total foi salvo.',
	'TRACE_GROUP_NO_LOCAL'					=> 'A Permissão do Grupo está assinalada como <strong>NÃO</strong>, o antigo valor total foi salvo.',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> 'A Permissão do Grupo está assinalada como <strong>SIM</strong> mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> 'A Permissão do Grupo está assinalada como <strong>SIM</strong> mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_GROUP_YES_TOTAL_NO'				=> 'A Permissão do Grupo está assinalada como <strong>SIM</strong> que torna-se o novo valor total porque ainda não estava assinalado (assinale <strong>NÃO</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'A Permissão do Grupo está assinalada como <strong>SIM</strong> que se torna um novo valor total pois ainda não estava definito (assinale <strong>NÃO</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'				=> 'A Permissão do Grupo está assinalada como <strong>SIM</strong> e a permissão total já está assinalada como <strong>SIM</strong>, então o resultado total foi salvo.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'A Permissão do Grupo para este Fórum está assinalada como <strong>SIM</strong> e a permissão total já está assinalada como <strong>SIM</strong>, então o antigo resultado total foi salvo.',
	'TRACE_PERMISSION'						=> 'Permissão de Cópia - %s',
	'TRACE_RESULT'							=> 'Indicar resultado',
	'TRACE_SETTING'							=> 'Configuração de Cópia',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'A Permissão de Utilizador independente do Fórum está avaliada como <strong>SIM</strong> mas a permissão total já está assinalada como <strong>SIM</strong>, então o resultado total é salvo. %sCópia da Permissão Global%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'A Permissão de Utilizador independente do Fórum está avaliada como <strong>SIM</strong> que substitui o resultado local atual <strong>NUNCA</strong>. %sCópia da Permissão Global%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'A Permissão de Utilizador independente do Fórum está avaliada como <strong>NUNCA</strong> que não influencia na permissão local. %sCópia da Permissão Global%s',

	'TRACE_USER_FOUNDER'					=> 'O Utilizador é um Fundador, por isso as Permissões Administrativas estão sempre assinaladas como <strong>SIM</strong>.',
	'TRACE_USER_KEPT'						=> 'A Permissão do Utilizador é <strong>NÃO</strong>, então o antigo valor total foi salvo.',
	'TRACE_USER_KEPT_LOCAL'					=> 'A permissão do Utilizador está assinalada como <strong>NUNCA</strong> e o valor total está assinalado como <strong>NUNCA</strong>, então nada será alterado.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'A Permissão do Utilizador está assinalada como <strong>NUNCA</strong> e o valor total está assinalado como <strong>NUNCA</strong>, então nada é alterado.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'A Permissão do Utilizador está assinalada como <strong>NUNCA</strong> e o valor total está assinalado como <strong>NUNCA</strong> e substitui o sim previo.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'A Permissão do Utilizador está assinalada como <strong>NUNCA</strong> que torna-se o valor total porque estava assinalado como <strong>NÃO</strong>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <strong>NUNCA</strong> mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'A Permissão do Utilizador está assinalada como <strong>NUNCA</strong> e substitui o <strong>SIM</strong> prévio.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <strong>NUNCA</strong> e substitui o <strong>SIM</strong> prévio',
	'TRACE_USER_NO_TOTAL_NO'				=> 'A Permissão do Utilizador é <strong>NÃO</strong> e o valor total estava assinalado como <strong>NÃO</strong>, então é padronizado para <strong>NUNCA</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'A Permissão deste Utilizador para este Fórum é <strong>NÃO</strong> mas o total e o valor total estava definido como NÃO então é pré-definido para <strong>NUNCA</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'A Permissão do Utilizador está assinalada como <strong>SIM</strong> mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <strong>SIM</strong> mas o total <strong>NUNCA</strong> não pode ser substituído.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'A Permissão do Utilizador está assinalada como <strong>SIM</strong> que torna-se o valor total porque estava assinalado como <strong>NÃO</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'A Permissão do Utilizador está assinalada como <strong>SIM</strong> que torna-se o valor total porque estava assinalado como <strong>NÃO</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'A Permissão do Utilizador está assinalada como <strong>SIM</strong> and o valor total é assinalado como <strong>SIM</strong>, então nada é alterado.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'A Permissão do Utilizador está assinalada como <strong>SIM</strong> and o valor total é assinalado como <strong>SIM</strong>, então nada é alterado.',
	'TRACE_WHO'								=> 'Quem',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'					=> 'Não há utilizadores com esta Categoria',
	'USER_IS_MEMBER_OF_DEFAULT'				=> 'é um Membro dos Grupos Pre-Definidos seguintes',
	'USER_IS_MEMBER_OF_CUSTOM'				=> 'é um Membro dos Grupos Personalizados pelo Utilizador seguintes',

	'VIEW_ASSIGNED_ITEMS'					=> 'Ver Itens Atribuídos',
	'VIEW_LOCAL_PERMS'						=> 'Permissões Locais',
	'VIEW_GLOBAL_PERMS'						=> 'Permissões Globais',
	'VIEW_PERMISSIONS'						=> 'Ver Permissões',

	'WRONG_PERMISSION_TYPE'					=> 'Foi selecionado o tipo de permissão errada.',
	'WRONG_PERMISSION_SETTING_FORMAT'		=> 'As configurações da permissão estão num formato errado, o phpBB não as consegue processar corretamente.',
));
