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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Ações',
	'ACL_CAT_CONTENT'		=> 'Conteúdo',
	'ACL_CAT_FORUMS'		=> 'Fóruns',
	'ACL_CAT_MISC'			=> 'Diversos',
	'ACL_CAT_PERMISSIONS'	=> 'Permissões',
	'ACL_CAT_PM'			=> 'Mensagens Privadas',
	'ACL_CAT_POLLS'			=> 'Votações',
	'ACL_CAT_POST'			=> 'Mensagem',
	'ACL_CAT_POST_ACTIONS'	=> 'Ações das Mensagens',
	'ACL_CAT_POSTING'		=> 'Enviar Mensagem',
	'ACL_CAT_PROFILE'		=> 'Perfil',
	'ACL_CAT_SETTINGS'		=> 'Configurações',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Ações dos Tópicos',
	'ACL_CAT_USER_GROUP'	=> 'Utilizadores &amp; Grupos',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'		=> 'Pode ver perfis, lista de utilizadores e utilizadores online',
	'ACL_U_CHGNAME'			=> 'Pode alterar nome de utilizador',
	'ACL_U_CHGPASSWD'		=> 'Pode alterar senha',
	'ACL_U_CHGEMAIL'		=> 'Pode alterer endereço de email',
	'ACL_U_CHGAVATAR'		=> 'Pode alterar avatar',
	'ACL_U_CHGGRP'			=> 'Pode alterar Grupo predefinido',
	'ACL_U_CHGPROFILEINFO'	=> 'Pode alterar as informações do Perfil',

	'ACL_U_ATTACH'		=> 'Pode anexar ficheiros',
	'ACL_U_DOWNLOAD'	=> 'Pode transferir ficheiros',
	'ACL_U_SAVEDRAFTS'	=> 'Pode guardar rascunhos',
	'ACL_U_CHGCENSORS'	=> 'Pode desativar a cencura de palavras',
	'ACL_U_SIG'			=> 'Pode usar assinaturas',

	'ACL_U_SENDPM'		=> 'Pode enviar mensagens privadas',
	'ACL_U_MASSPM'		=> 'Pode enviar mensagens para vários utilizadores',
	'ACL_U_MASSPM_GROUP'=> 'Pode enviar mensagens para Grupos',
	'ACL_U_READPM'		=> 'Pode ler mensagens privadas',
	'ACL_U_PM_EDIT'		=> 'Pode editar as suas mensagens privadas',
	'ACL_U_PM_DELETE'	=> 'Pode apagar as suas mensagens privadas',
	'ACL_U_PM_FORWARD'	=> 'Pode reenviar mensagens privadas',
	'ACL_U_PM_EMAILPM'	=> 'Pode enviar mensagens privadas por email',
	'ACL_U_PM_PRINTPM'	=> 'Pode imprimir mensagens privadas',
	'ACL_U_PM_ATTACH'	=> 'Pode anexar ficheiros nas mensagens privadas',
	'ACL_U_PM_DOWNLOAD'	=> 'Pode transferir ficheiros das mensagens privadas',
	'ACL_U_PM_BBCODE'	=> 'Pode usar BBCodes nas mensagens privadas',
	'ACL_U_PM_SMILIES'	=> 'Pode usar emoções nas mensagens privadas',
	'ACL_U_PM_IMG'		=> 'Pode usar a tag [img] BBCode nas mesnagens privadas',
	'ACL_U_PM_FLASH'	=> 'Pode usar a tag [flash] BBCode nas mensagens privadas',

	'ACL_U_SENDEMAIL'	=> 'Pode enviar emails',
	'ACL_U_SENDIM'		=> 'Pode enviar mensagens instantâneas',
	'ACL_U_IGNOREFLOOD'	=> 'Pode ingnorar o Intervalo de Segurança',
	'ACL_U_HIDEONLINE'	=> 'Pode esconder a informação que está ligado',
	'ACL_U_VIEWONLINE'	=> 'Pode ver utilizadores escondidos',
	'ACL_U_SEARCH'		=> 'Pode pesquisar no Fórum',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Pode ver o fórum',
	'ACL_F_READ'		=> 'Pode ler o fórum',
	'ACL_F_SEARCH'		=> 'Pode pesquisar no fórum',
	'ACL_F_SUBSCRIBE'	=> 'Pode subscrever o fórum',
	'ACL_F_PRINT'		=> 'Pode imprimir tópicos',
	'ACL_F_EMAIL'		=> 'Pode enviar tópicos por email',
	'ACL_F_BUMP'		=> 'Pode puxar os tópicos para cima',
	'ACL_F_USER_LOCK'	=> 'Pode bloquear os seus tópicos',
	'ACL_F_DOWNLOAD'	=> 'Pode transferir ficheiros',
	'ACL_F_REPORT'		=> 'Pode denunciar mensagens',

	'ACL_F_POST'		=> 'Pode criar tópicos',
	'ACL_F_STICKY'		=> 'Pode fixar Tópicos',
	'ACL_F_ANNOUNCE'	=> 'Pode criar anúncios',
	'ACL_F_REPLY'		=> 'Pode responder nos Tópicos',
	'ACL_F_EDIT'		=> 'Pode editar as suas mensagens',
	'ACL_F_DELETE'		=> 'Pode apagar permanentemente as suas mensagens ',
	'ACL_F_SOFTDELETE'	=> 'Pode excluír as suas próprias mensagens<br /><em>Moderadores com permissões para aprovar mensagens, podes restaurar mensagens excluídas.</em>',
	'ACL_F_IGNOREFLOOD' => 'Pode ignorar o Intervalo de Segurança',
	'ACL_F_POSTCOUNT'	=> 'Pode aumentar o contador de mensagens<br /><em>Esta função só é válida para novas mensagens.</em>',
	'ACL_F_NOAPPROVE'	=> 'Pode criar mensagens sem aprovação',

	'ACL_F_ATTACH'		=> 'Pode anexar ficheiros',
	'ACL_F_ICONS'		=> 'Pode usar icones de tópico/mensagem',
	'ACL_F_BBCODE'		=> 'Pode usar BBCode',
	'ACL_F_FLASH'		=> 'Pode usar [flash] BBCode tag',
	'ACL_F_IMG'			=> 'Pode usar [img] BBCode tag',
	'ACL_F_SIGS'		=> 'Pode usar assinatura',
	'ACL_F_SMILIES'		=> 'Pode usar emoções',

	'ACL_F_POLL'		=> 'Pode criar votações',
	'ACL_F_VOTE'		=> 'Pode votar',
	'ACL_F_VOTECHG'		=> 'Pode alterar o seu voto',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Pode editar mensagens',
	'ACL_M_DELETE'		=> 'Pode apagar mensagens permanentemente',
	'ACL_M_SOFTDELETE'	=> 'Pode excluír mensagens<br /><em>Moderadores com permissões para aprovar mensagens, podes restaurar mensagens excluídas.</em>',
	'ACL_M_APPROVE'		=> 'Pode aprovar e restaurar mensagens',
	'ACL_M_REPORT'		=> 'Pode encerrar e apagar denúncias',
	'ACL_M_CHGPOSTER'	=> 'Pode alterar o autor das mensagens',

	'ACL_M_MOVE'	=> 'Pode mover tópicos',
	'ACL_M_LOCK'	=> 'Pode bloquear tópicos',
	'ACL_M_SPLIT'	=> 'Pode fixar Tópicos',
	'ACL_M_MERGE'	=> 'Pode fundir tópicos',

	'ACL_M_INFO'	=> 'Pode ver detalhes das mensagens',
	'ACL_M_WARN'	=> 'Pode fazer avisos<br /><em>Esta é uma configuração global. Não é baseada em fóruns.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Pode fazer expulsões<br /><em>Esta é uma configuração global. Não é baseada em fóruns.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Pode alterar as configurações do Fórum. Verificar atualizações',
	'ACL_A_SERVER'		=> 'Pode alterar as configurações do servidor/comunicações',
	'ACL_A_JABBER'		=> 'Pode alterar as configurações Jabber',
	'ACL_A_PHPINFO'		=> 'Pode ver as configurações php',

	'ACL_A_FORUM'		=> 'Pode gerir fóruns',
	'ACL_A_FORUMADD'	=> 'Pode criar novos fóruns',
	'ACL_A_FORUMDEL'	=> 'Pode apagar fóruns',
	'ACL_A_PRUNE'		=> 'Pode limpar fóruns',

	'ACL_A_ICONS'		=> 'Pode alterar icones de tópicos/mensagens e emoções',
	'ACL_A_WORDS'		=> 'Pode alterar cencura de palavras',
	'ACL_A_BBCODE'		=> 'Pode definir tags BBCode',
	'ACL_A_ATTACH'		=> 'Pode alterar as configurações dos anexos',

	'ACL_A_USER'		=> 'Pode gerir utilizadores<br /><em>Inclui saber o navegador dos utilizadores na lista de utilizadores online.</em>',
	'ACL_A_USERDEL'		=> 'Pode apagar/limpar utilizadores',
	'ACL_A_GROUP'		=> 'Pode gerir grupos',
	'ACL_A_GROUPADD'	=> 'Pode adicionar novos grupos',
	'ACL_A_GROUPDEL'	=> 'Pode apagar grupos',
	'ACL_A_RANKS'		=> 'Pode gerir classificações',
	'ACL_A_PROFILE'		=> 'Pode gerir campos de perfil personalizados',
	'ACL_A_NAMES'		=> 'Pode gerir nomes não permitidos',
	'ACL_A_BAN'			=> 'Pode gerir expulsões',

	'ACL_A_VIEWAUTH'	=> 'Pode ver as máscara de permissões',
	'ACL_A_AUTHGROUPS'	=> 'Pode alterar as permissões idividuais dos grupos',
	'ACL_A_AUTHUSERS'	=> 'Pode alterar as permissões idividuais dos utilizadores',
	'ACL_A_FAUTH'		=> 'Pode alterar as permissões das categorias dos fóruns',
	'ACL_A_MAUTH'		=> 'Pode alterar as permissões das categorias dos moderadores',
	'ACL_A_AAUTH'		=> 'Pode alterar as permissões das categorias dos administradores',
	'ACL_A_UAUTH'		=> 'Pode alterar as permissões das categorias dos utilizadores',
	'ACL_A_ROLES'		=> 'Pode gerir regras',
	'ACL_A_SWITCHPERM'	=> 'Pode usar outras permissões',

	'ACL_A_STYLES'		=> 'Pode gerir estilos',
	'ACL_A_EXTENSIONS'	=> 'Pode gerir extensões',
	'ACL_A_VIEWLOGS'	=> 'Pode ver logs',
	'ACL_A_CLEARLOGS'	=> 'Pode apagar logs',
	'ACL_A_MODULES'		=> 'Pode gerir módulos',
	'ACL_A_LANGUAGE'	=> 'Pode gerir pacotes de idiomas',
	'ACL_A_EMAIL'		=> 'Pode enviar mass mails',
	'ACL_A_BOTS'		=> 'Pode gerir motores de busca',
	'ACL_A_REASONS'		=> 'Pode gerir relatório e razões de negação',
	'ACL_A_BACKUP'		=> 'Pode fazer Cópias de Segurança e restaura da Base de Dados',
	'ACL_A_SEARCH'		=> 'Pode gerir as configurações de pesquisa',
));
