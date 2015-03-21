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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'						=> 'Gestão de Motores de Busca',
	'BOTS_EXPLAIN'				=> 'Motores de Busca ou espiões são agentes de pesquisa usados para manter atualizadas as Bases de Dados dos servidores de pesquisa. Estes podem distorcer as estatísticas do número de visitantes, aumentando a carga do servidor e, em algumas situações, provocar erros. Aqui pode definir um tipo especial de utilizador para contornar estes problemas.',
	'BOT_ACTIVATE'				=> 'Ativar',
	'BOT_ACTIVE'				=> 'Motor de Busca Ativo',
	'BOT_ADD'					=> 'Adicionar motor de busca',
	'BOT_ADDED'					=> 'Novo Motor de Busca adicionado com sucesso.',
	'BOT_AGENT'					=> 'Agente de partida',
	'BOT_AGENT_EXPLAIN'			=> 'Localização na web do rastreio do motor de busca. Correspondências parciais são permitidas.',
	'BOT_DEACTIVATE'			=> 'Desativar',
	'BOT_DELETED'				=> 'Motor de Busca removido com sucesso.',
	'BOT_EDIT'					=> 'Editar Motores de Busca',
	'BOT_EDIT_EXPLAIN'			=> 'Aqui pode editar ou adicionar novos Motores de Busca. Pode definir qualquer sequência de agentes e/ou um ou mais endereços de IP (ou grupo de endereços) para coincidir. Cuidado ao definir os parâmetros dos agentes ou endereços. Pode especificar um estilo ou Idioma com os quais o Motor de Busca visualizará o seu Fórum. Isto pode reduzir o tráfego de seu site especificando um estilo simples para motores de busca. Lembre-se de especificar permissões para o grupo especial de Motores de Busca.',
	'BOT_LANG'					=> 'Idioma do Motor de Busca',
	'BOT_LANG_EXPLAIN'			=> 'O idioma presente no Motor de Busca quando ele navega.',
	'BOT_LAST_VISIT'			=> 'Última visita',
	'BOT_IP'					=> 'Endereço do IP do Motor de Busca',
	'BOT_IP_EXPLAIN'			=> 'São permitidos nomes parciais se separados por virgulas (,).',
	'BOT_NAME'					=> 'Nome do Motor de Busca',
	'BOT_NAME_EXPLAIN'			=> 'Usado apenas para sua informação.',
	'BOT_NAME_TAKEN'			=> 'Este nome está a ser usado por um Utilizador e não pode ser usado por um Bot.',
	'BOT_NEVER'					=> 'Nunca',
	'BOT_STYLE'					=> 'Estilo do Motor de Busca',
	'BOT_STYLE_EXPLAIN'			=> 'O estilo usado para o Fórum pelo Motor de Busca.',
	'BOT_UPDATED'				=> 'Motor de Busca existente atualizado com sucesso.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'O agente do motor de busca que escolheu é semelhante ao que está a usar atualmente. Por favor ajuste o agente para este Motor de Busca.',
	'ERR_BOT_NO_IP'				=> 'O IP que forneceu é inválido ou o hostname não pode ser resolvido.',
	'ERR_BOT_NO_MATCHES'		=> 'Tem que indicar pelo menos uma descrição do navegador ou um IP para o parâmetro.',

	'NO_BOT'					=> 'O Motor de Busca selecionado não existe.',
	'NO_BOT_GROUP'				=> 'O Grupo de Motores de Busca especial existe.',
));
