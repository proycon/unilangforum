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
	'ACP_STYLES_EXPLAIN'			=> 'O gestor de estilos permite alterar estilos existentes, apagar, desinstalar, reinstalar e instalar novos. Também pode ver como será o seu estilo usando a função de pré-visualização. É mostrado o número de utilizadores de cada estilo. No entanto, a função Sobrepor Estilo do Utilizador, não reflete esta contagem.',

	'CANNOT_BE_INSTALLED'			=> 'Não pode ser instalado',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Tem certeza de deseja desinstalar os estilos selecionados?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'			=> 'Não pode desativar o Estilo Padrão.',
	'DELETE_FROM_FS'				=> 'Apagar do Sistema de Ficheiros',
	'DELETE_STYLE_FILES_FAILED'		=> 'Erro ao apagar os ficheiros do estilo "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Os ficheiros do estilo "%s" foram apagados.',
	'DETAILS'						=> 'Detalhes',

	'INHERITING_FROM'				=> 'Herdar de',
	'INSTALL_STYLE'					=> 'Instalar Estilo',
	'INSTALL_STYLES'				=> 'Instalar Estilos',
	'INSTALL_STYLES_EXPLAIN'		=> 'Aqui pode instalar um novo Estilo e elementos correspondentes. Se já tem instalados os elementos relevantes do Estilo serão substituídos. Alguns Estilos necessitam que os elementos do Estilo já estejam instalados. Se tentar instalar um Estilo e os seus elementos ainda não estiverem instalados será avisado.',
	'INVALID_STYLE_ID'				=> 'A ID do estilo inválida.',

	'NO_MATCHING_STYLES_FOUND'		=> 'No styles match your query.',
	'NO_UNINSTALLED_STYLE'			=> 'Não há estilos desinstalados.',

	'PURGED_CACHE'					=> 'A Cache foi limpa.',

	'REQUIRES_STYLE'				=> 'Este estilo precisa do estilo "%s" para ser instalado.',

	'STYLE_ACTIVATE'				=> 'Ativar',
	'STYLE_ACTIVE'					=> 'Ativo',
	'STYLE_DEACTIVATE'				=> 'Desativar',
	'STYLE_DEFAULT'					=> 'Tornar Estilo Padrão',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Tem que ativar o estilo antes de o tornar padrão.',
	'STYLE_ERR_INVALID_PARENT'		=> 'Estilo principal inválido.',
	'STYLE_ERR_NAME_EXIST'			=> 'Um Estilo com o mesmo nome já existe.',
	'STYLE_ERR_STYLE_NAME'			=> 'Tem que especificar um nome para este Estilo.',
	'STYLE_INSTALLED'				=> 'O estilo "%s" foi instalado.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Voltar à lista estilos instalados',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instalar mais estilos',
	'STYLE_NAME'					=> 'Nome do Estilo',
	'STYLE_NAME_RESERVED'			=> 'O Estilo "%s" não pode ser instalado, porque o nome está reservado.',
	'STYLE_NOT_INSTALLED'			=> 'O estilo "%s" não foi instalado.',
	'STYLE_PATH'					=> 'Localização:',
	'STYLE_UNINSTALL'				=> 'Desinstalar',
	'STYLE_UNINSTALL_DEPENDENT'		=> 'O estilo "%s" não pode ser desinstalado porque há um ou mais estilos secundários.',
	'STYLE_UNINSTALLED'				=> 'O estilo "%s" foi desinstalado com sucesso.',
	'STYLE_USED_BY'					=> 'Usado por (incluindo Motor de Busca)',
	
	'UNINSTALL_DEFAULT'				=> 'You cannot uninstall the default style.',
));
