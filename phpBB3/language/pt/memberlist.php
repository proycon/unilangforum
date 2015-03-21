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
	'ABOUT_USER'				=> 'Perfil',
	'ACTIVE_IN_FORUM'			=> 'Fórum mais ativo',
	'ACTIVE_IN_TOPIC'			=> 'Tópico mais ativo',
	'ADD_FOE'					=> 'Adicionar como inimigo',
	'ADD_FRIEND'				=> 'Adicionar como amigo',
	'AFTER'						=> 'Depois',

	'ALL'						=> 'Todos',

	'BEFORE'					=> 'Antes',

	'CC_SENDER'					=> 'Enviar-me cópia deste email.',
	'CONTACT_ADMIN'				=> 'Contacte o Administrador',

	'DEST_LANG'					=> 'Linguagem',
	'DEST_LANG_EXPLAIN'			=> 'Selecione a linguagem apropriada (se ativada) para o destinatário desta mensagem.',

	'EDIT_PROFILE'				=> 'Editar Perfil',

	'EMAIL_BODY_EXPLAIN'		=> 'Esta mensagem será enviada como texto puro, não inclua qualquer código HTML ou BBCODE. O endereço de resposta desta mensagem é o seu endereço de email.',
	'EMAIL_DISABLED'			=> 'Todas as funções de email foram desativadas.',
	'EMAIL_SENT'				=> 'O email foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'		=> 'Esta mensagem será enviada como texto puro, não inclua qualquer código HTML ou BBCODE. As informações daquele Tópico serão incluídas na mensagem. O endereço de resposta desta mensagem é o seu endereço de email.',
	'EMPTY_ADDRESS_EMAIL'		=> 'Tem que indicar um endereço de email válido como destinatário.',
	'EMPTY_MESSAGE_EMAIL'		=> 'Tem que indicar uma mensagem para ser enviada no email.',
	'EMPTY_MESSAGE_IM'			=> 'Tem que inserir a mensagem para ser enviada.',
	'EMPTY_NAME_EMAIL'			=> 'Tem que indicar o nome real do destinatário.',
	'EMPTY_SENDER_EMAIL'		=> 'Tem que fornecer um endereço de email válido.',
	'EMPTY_SENDER_NAME'			=> 'Tem que fornecer um nome.',
	'EMPTY_SUBJECT_EMAIL'		=> 'Indique um assunto para o email',
	'EQUAL_TO'					=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'		=> 'Utilize este formulário para procurar Utilizadores. Não é necessário preencher todos os campos. Para dados parciais utilize o *. Se indicar uma data, use o formato <kbd>YYYY-MM-DD</kbd> ex. <samp>2004-02-29</samp>. Nas caixas de seleção escreva um ou mais nomes de utilizador (são aceites vários Utilizadores).',
	'FLOOD_EMAIL_LIMIT'			=> 'Não pode enviar novo email tão rapidamente. Aguarde algum tempo e tente novamente mais tarde.',

	'GROUP_LEADER'				=> 'Lider do Grupo',

	'HIDE_MEMBER_SEARCH'		=> 'Ocultar as opções de pesquisa dos Utilizadores',

	'IM_ADD_CONTACT'			=> 'Adicionar contacto',
	'IM_DOWNLOAD_APP'			=> 'Download Aplicativo',
	'IM_JABBER'					=> 'Os Utilizadores podem ter selecionado não receber mensagens instantâneas não solicitadas.',
	'IM_JABBER_SUBJECT'			=> 'Esta é uma mensagem automática, por favor, não responda! Mensagem enviada pelo Utilizador %1$s em %2$s.',
	'IM_MESSAGE'				=> 'Sua mensagem',
	'IM_NAME'					=> 'Seu nome',
	'IM_NO_DATA'				=> 'Não existe informação de contacto para este utilizador.',
	'IM_NO_JABBER'				=> 'Enviar mensagens Jabber não é suportado neste Servidor. Tem que ter um cliente Jabber instalado no seu sistema para contatar o destinatário.',
	'IM_RECIPIENT'				=> 'Destinatário',
	'IM_SEND'					=> 'Enviar Mensagem',
	'IM_SEND_MESSAGE'			=> 'Enviar Mensagem',
	'IM_SENT_JABBER'			=> 'A sua mensagem para %1$s foi enviada com sucesso.',
	'IM_USER'					=> 'Enviar uma mensagem instantânea',

	'LAST_ACTIVE'				=> 'Última vez ativo',
	'LESS_THAN'					=> 'Menor que',
	'LIST_USERS'				=> array(
		1	=> '%d utilizador',
		2	=> '%d utilizadores',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Tem que estar registado e ligado para ver os membros da Equipa de Responsáveis do Fórum.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Tem que estar registado e ligado para ver a lista de Utilizadores.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Tem que estar registado e ligado para pesquisar Utilizadores.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Tem que estar registado e ligado para ver Perfis.',

	'MORE_THAN'					=> 'Maior que',

	'NO_CONTACT_FORM'			=> 'O formulário de contacto do administrador foi desativado.',
	'NO_CONTACT_PAGE'			=> 'A página de contacto do administrador foi desativada.',
	'NO_EMAIL'					=> 'Não está autorizado a enviar email a este Utilizador.',
	'NO_VIEW_USERS'				=> 'Não está autorizado a ver a lista de Utilizadores ou Perfis.',

	'ORDER'						=> 'Ordenar',
	'OTHER'						=> 'Outro',

	'POST_IP'					=> 'Enviado do IP/Domínio',

	'REAL_NAME'					=> 'Nome do destinatário',
	'RECIPIENT'					=> 'Destinatário',
	'REMOVE_FOE'				=> 'Apagar dos inimigos',
	'REMOVE_FRIEND'				=> 'Apagar dos amigos',

	'SELECT_MARKED'				=> 'Selecionar marcados',
	'SELECT_SORT_METHOD'		=> 'Selecionar método de ordenação',
	'SENDER_EMAIL_ADDRESS'		=> 'O seu endereço de email',
	'SENDER_NAME'				=> 'O seu nome',
	'SEND_ICQ_MESSAGE'			=> 'Enviar Mensagem ICQ',
	'SEND_IM'					=> 'A enviar Mensagem instantânea',
	'SEND_JABBER_MESSAGE'		=> 'Enviar Mensagem Jabber',
	'SEND_MESSAGE'				=> 'Mensagem',
	'SEND_YIM_MESSAGE'			=> 'Enviar Mensagem YIM',
	'SORT_EMAIL'				=> 'Email',
	'SORT_LAST_ACTIVE'			=> 'Último ativo',
	'SORT_POST_COUNT'			=> 'Número de Mensagens',

	'USERNAME_BEGINS_WITH'		=> 'Nomes de Utilizadores iniciados por:',
	'USER_ADMIN'				=> 'Administrar Utilizador',
	'USER_BAN'					=> 'Expulsar',
	'USER_FORUM'				=> 'Estatísticas do Utilizador',
	'USER_LAST_REMINDED'		=> array(
		0						=> 'Não há nenhuma advertência',
		1						=> 'Foi enviada %1$d advertência<br />» %2$s',
		2						=> 'Foram enviadas %1$d advertências<br />» %2$s',
	),
	'USER_ONLINE'				=> 'Online',
	'USER_PRESENCE'				=> 'Presença no Fórum',
	'USERS_PER_PAGE'			=> 'Utilizadores por página',

	'VIEWING_PROFILE'			=> 'Perfil de: %s',
	'VIEW_FACEBOOK_PROFILE'		=> 'Ver perfil do Facebook',
	'VIEW_SKYPE_PROFILE'		=> 'Ver perfil do Skype',
	'VIEW_TWITTER_PROFILE'		=> 'Ver perfil do Twitter',
	'VIEW_YOUTUBE_CHANNEL'		=> 'Ver canal YouTube',
	'VIEW_GOOGLEPLUS_PROFILE'	=> 'Ver perfil do Google+',
));
