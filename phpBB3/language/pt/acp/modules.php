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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Aqui pode gerir todos os tipos de Módulos. O Painel de Administração tem uma estrutura de menus de três níveis (Categoria -> Categoria -> Módulo) diferente de outros que possuem uma estrutura de menu de dois níveis (Categoria -> Módulo) que precisam ser salvos. Tenha em atenção que deve testar os resultados já que pode auto bloquear-se se desativar ou apagar os Módulos responsáveis pela própria Gestão de Módulos.',
	'ADD_MODULE'					=> 'Adicionar um Módulo',
	'ADD_MODULE_CONFIRM'			=> 'Deseja realmente ADICIONAR este Módulo com o modo selecionado?',
	'ADD_MODULE_TITLE'				=> 'Adicionar Módulos',

	'CANNOT_REMOVE_MODULE'			=> 'Não é possível apagar este Módulo porque tem outros módulos agregados. Mova ou elimine os módulos agregados e então apague-o.',
	'CATEGORY'						=> 'Categoria',
	'CHOOSE_MODE'					=> 'Escolher Modo de Módulo',
	'CHOOSE_MODE_EXPLAIN'			=> 'Escolher o modo dos módulos a ser utilizado.',
	'CHOOSE_MODULE'					=> 'Escolher Módulo',
	'CHOOSE_MODULE_EXPLAIN'			=> 'Escolher o Ficheiro usado por este módulo.',
	'CREATE_MODULE'					=> 'Criar novo Módulo',

	'DEACTIVATED_MODULE'			=> 'Módulo Desativado',
	'DELETE_MODULE'					=> 'Apagar Módulo',
	'DELETE_MODULE_CONFIRM'			=> 'Deseja realmente Apagar este Módulo?',

	'EDIT_MODULE'					=> 'Editar Módulo',
	'EDIT_MODULE_EXPLAIN'			=> 'Aqui pode definir as configurações dos Módulos.',

	'HIDDEN_MODULE'					=> 'Módulo Invisível',

	'MODULE'						=> 'Módulo',
	'MODULE_ADDED'					=> 'O Módulo selecionado foi adicionado com sucesso.',
	'MODULE_DELETED'				=> 'O Módulo selecionado foi apagado com sucesso.',
	'MODULE_DISPLAYED'				=> 'Módulos Exibidos',
	'MODULE_DISPLAYED_EXPLAIN'		=> 'Se não deseja exibir este Módulo, mas gostaria de utilizá-lo, selecione Não.',
	'MODULE_EDITED'					=> 'O Módulo selecionado foi editado com sucesso.',
	'MODULE_ENABLED'				=> 'Módulo Ativado',
	'MODULE_LANGNAME'				=> 'Nome do Idioma do Módulo',
	'MODULE_LANGNAME_EXPLAIN'		=> 'Escreva o nome do Módulo exibido. Utilize a constante da Idioma se o nome for oferecido pelo Ficheiro de linguagem.',
	'MODULE_TYPE'					=> 'Tipo de Módulo',

	'NO_CATEGORY_TO_MODULE'			=> 'Não é possível transformar esta Categoria em Módulo. Por Favor, exclua ou mova todas as Crianças antes de efetuar esta ação.',
	'NO_MODULE'						=> 'Nenhum módulo foi encontrado.',
	'NO_MODULE_ID'					=> 'A ID do Módulo não foi especificada.',
	'NO_MODULE_LANGNAME'			=> 'O Nome do Idioma do Módulo não foi especificado.',
	'NO_PARENT'						=> 'Sem Pais no momento',

	'PARENT'						=> 'Pais',
	'PARENT_NO_EXIST'				=> 'O Pai selecionado não existe.',

	'SELECT_MODULE'					=> 'Selecionar um Módulo',
));
