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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'			=> 'O Campo do Perfil Personalizado foi adicionado com sucesso.',
	'ALPHA_DOTS'					=> 'Alfanumérico e pontos (períodos)',
	'ALPHA_ONLY'					=> 'Somente caracteres alfanuméricos',
	'ALPHA_SPACERS'					=> 'Caracteres alfanuméricos e espaços',
	'ALPHA_UNDERSCORE'				=> 'Alfanuméricos e sublinhados',
	'ALPHA_PUNCTUATION'				=> 'Alfanumérico com vírgulas, pontos, sublinhados e traços começando com uma letra',
	'ALWAYS_TODAY'					=> 'Sempre a Data Atual',

	'BOOL_ENTRIES_EXPLAIN'			=> 'Escreva as suas opções agora',
	'BOOL_TYPE_EXPLAIN'				=> 'Defina o tipo, entre uma caixa de seleção (checkbox) ou botões de rádio (radio). Uma caixa só será apresentada se estiver marcada para um determinado Utilizador. Nesse caso a <strong>segunda</strong> opção de linguagem será utilizada. Os Botões de rádio são apresentados, independentemente dos seus valores.',

	'CHANGED_PROFILE_FIELD'			=> 'O Campo do Perfil foi modificado com sucesso.',
	'CHARS_ANY'						=> 'Qualquer carácter',
	'CHECKBOX'						=> 'Checkbox',
	'COLUMNS'						=> 'Colunas',
	'CP_LANG_DEFAULT_VALUE'			=> 'Valor Padrão',
	'CP_LANG_EXPLAIN'				=> 'Descrição do Campo',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'A Explicação para este Campo será exibida ao Utilizador.',
	'CP_LANG_NAME'					=> 'Título do Campo que será mostrado ao Utilizador',
	'CP_LANG_OPTIONS'				=> 'Opções',
	'CREATE_NEW_FIELD'				=> 'Criar novo Campo',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Os Campos do Perfil não foram totalmente traduzidos. Por Favor, escreva a informação solicitada clicando no atalho &quot;Traduzir&quot;.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Idioma Padrão [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'As entradas de linguagem para o Idioma Padrão não estão preenchidos para este Campo do Perfil.',
	'DEFAULT_VALUE'					=> 'Valor Padrão',
	'DELETE_PROFILE_FIELD'			=> 'Apagar Campo do Perfil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Deseja realmente Apagar este Campo do Perfil?',
	'DISPLAY_AT_PROFILE'			=> 'Exibir no Painel de Utilizadores',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'O Utilizador está autorizado a alterar este Campo do Perfil no Painel de Controlo do Utilizador.',
	'DISPLAY_AT_REGISTER'			=> 'Exibir na tela de Registos',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Se esta opção estiver ativa, o Campo será exibido no Registo pode ser alterado no Painel de Controlo do Utilizador.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Mostrar na tela de lista de membros',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Se esta opção estiver ativada, o campo será exibido nas linhas do utilizador na tela da lista de membros.',
	'DISPLAY_ON_PM'					=> 'Mostrar na tela da Mensagem Privada',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Se esta opção estiver ativada, o campo será exibido no mini-perfil na tela da Mensagem Privada.',
	'DISPLAY_ON_VT'					=> 'Exibir na página viewtopic',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Caso esta opção esteja ativa, o campo irá ser exibido no mini-perfil na página de Tópicos.',
	'DISPLAY_PROFILE_FIELD'			=> 'Exibir publicamente o campo do perfil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'O Campo do Perfil será visualizado nos Tópicos, Perfis e Lista de Membros, se isto estiver ativo com as configurações de carga.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Escreva as suas Opções agora, todas elas numa linha.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Por Favor, note que pode alterar os seus textos de Opções e também pode adicionar novas opções ao fim. Não é aconselhavel adicionar novas Opções dentre outras opções existentes - isto pode resultar em opções defeituosas exibidas aos utilizadores. Isto pode também acontecer se apagar opções no meio de outras. Excluindo opções do fim, resultará em Utilizadores com este item revertido ao padrão inicial.',
	'EMPTY_FIELD_IDENT'				=> 'Identificação do Campo vazia',
	'EMPTY_USER_FIELD_NAME'			=> 'Por Favor, dê um Título ao Campo',
	'ENTRIES'						=> 'Entradas',
	'EVERYTHING_OK'					=> 'Tudo OK',

	'FIELD_BOOL'					=> 'Boolean (Sim/Não)',
	'FIELD_CONTACT_DESC'			=> 'Descrição de contacto',
	'FIELD_CONTACT_URL'				=> 'Link do contacto',
	'FIELD_DATE'					=> 'Data',
	'FIELD_DESCRIPTION'				=> 'Descrição do Campo',
	'FIELD_DESCRIPTION_EXPLAIN'		=> 'A explicação para este Campo será mostrada ao Utilizador.',
	'FIELD_DROPDOWN'				=> 'Menu Suspenso',
	'FIELD_GOOGLEPLUS'				=> 'Google+',
	'FIELD_IDENT'					=> 'Identificação do Campo',
	'FIELD_IDENT_ALREADY_EXIST'		=> 'A Identificação do Campo selecionada já existe. Por Favor, escolha outro nome.',
	'FIELD_IDENT_EXPLAIN'			=> 'A Identificação do Campo é um nome para identificar o Campo do Perfil com a Base de Dados e os Templates.',
	'FIELD_INT'						=> 'Números',
	'FIELD_IS_CONTACT'				=> 'Mostrar como campo de contacto',
	'FIELD_IS_CONTACT_EXPLAIN'		=> 'Campos de conctato são exibidos com na secção conctato do perfil do utilizador e são exibidos de forma diferente no mini-perfil ao lado de mensagens e mensagens privadas. Pode usar <samp>%s</samp> como variável eservada que será substituída por um valor fornecido pelo Utilizador.',
	'FIELD_LENGTH'					=> 'Comprimento da Caixa de Entrada',
	'FIELD_NOT_FOUND'				=> 'O Campo de Perfil não foi encontrado.',
	'FIELD_STRING'					=> 'Campo de Texto Simples',
	'FIELD_TEXT'					=> 'Área de Texto',
	'FIELD_TYPE'					=> 'Tipo do Campo',
	'FIELD_TYPE_EXPLAIN'			=> 'Não pode alterar o tipo de Perfil depois.',
	'FIELD_URL'						=> 'URL (Link)',
	'FIELD_VALIDATION'				=> 'Validação do Campo',
	'FIRST_OPTION'					=> 'Primeira Opção',

	'HIDE_PROFILE_FIELD'			=> 'Campo de Perfil Invisível',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Apenas Administradores e Moderadores podem visualizar/preencher este Campo. Se esta opção estiver ativa, o Campo será exibido apenas no Perfil dos Utilizadores.',

	'INVALID_CHARS_FIELD_IDENT'		=> 'A Identificação do Campo pode conter apenas a-z e _',
	'INVALID_FIELD_IDENT_LEN'		=> 'A Identificação do Campo pode conter apenas 17 caracteres',
	'ISO_LANGUAGE'					=> 'Idioma [%s]',

	'LANG_SPECIFIC_OPTIONS'			=> 'Opções Específicas do Idioma [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'				=> 'Todas as letras, numbers and ponto (periods)',
	'LETTER_NUM_ONLY'				=> 'Todas as letras e números',
	'LETTER_NUM_PUNCTUATION'		=> 'Todas as letras, números, vírgula, pontos, sublinhados e traços que começam com qualquer letra',
	'LETTER_NUM_SPACERS'			=> 'Todas as letras, números e espaços',
	'LETTER_NUM_UNDERSCORE'			=> 'Todas as letras, números e sublinhados',

	'MAX_FIELD_CHARS'				=> 'Núm. Máx. de Caracteres',
	'MAX_FIELD_NUMBER'				=> 'Número Máximo Permitido',
	'MIN_FIELD_CHARS'				=> 'Núm. Mín. de Caracteres',
	'MIN_FIELD_NUMBER'				=> 'Número Mínimo Permitido',

	'NO_FIELD_ENTRIES'				=> 'Sem entradas definidas',
	'NO_FIELD_ID'					=> 'Não foi especificada a Identificação do Campo.',
	'NO_FIELD_TYPE'					=> 'Não foi especificado o Tipo de Campo.',
	'NO_VALUE_OPTION'				=> 'Campo a evitar pelo Utilizador',
	'NO_VALUE_OPTION_EXPLAIN'		=> 'Se este campo for seleccionado o Utilizador recebe um erro, tendo que escolher outro para continuar.',
	'NUMBERS_ONLY'					=> 'Apenas Números (0-9)',

	'PROFILE_BASIC_OPTIONS'			=> 'Opções Básicas',
	'PROFILE_FIELD_ACTIVATED'		=> 'O Campo foi ativado com sucesso.',
	'PROFILE_FIELD_DEACTIVATED'		=> 'O Campo foi desativado com sucesso.',
	'PROFILE_LANG_OPTIONS'			=> 'Opções Específicas da Idioma',
	'PROFILE_TYPE_OPTIONS'			=> 'Opções Específicas ao Tipo de Perfil',

	'RADIO_BUTTONS'					=> 'Botões do Rádio',
	'REMOVED_PROFILE_FIELD'			=> 'O Campo foi apagado com sucesso.',
	'REQUIRED_FIELD'				=> 'Campo Requerido',
	'REQUIRED_FIELD_EXPLAIN'		=> 'Obriga ao preenchimento do campo pelo Utilizador. Isto irá exibir o campo no registo e no Painel de Controlo do Utilizador.',
	'ROWS'							=> 'Linhas',

	'SAVE'							=> 'Guardar',
	'SECOND_OPTION'					=> 'Segunda Opção',
	'SHOW_NOVALUE_FIELD'			=> 'Mostrar campo se nenhum valor for seleccionado',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Define se deve ser mostrado o campo do perfil, caso nenhum valor nos campos opcionais ou obrigatórios for selecionado.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Aqui pode escrever os primeiros parâmetros básicos de seu novo Campo no Perfil. Estas informações são necessárias para a segunda etapa, onde poderá inserir as opções restantes e prever o seu Campo mais adiante.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Aqui pode alterar os parâmetros básicos de seu campo no Perfil. As opções relevantes são re-calculadas com a segunda etapa, onde poderá prever e testar as suas novas configurações.',
	'STEP_1_TITLE_CREATE'			=> 'Adicionar Campo de Perfil',
	'STEP_1_TITLE_EDIT'				=> 'Editar Campo de Perfil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Aqui pode definir algumas opções comuns. Além disso, pode prever o Campo o qual gerou, visualizando-o enquanto Utilizador. Por Favor, teste as suas configurações para ver se tudo está funcionando corretamente.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Aqui pode alterar algumas opções comuns. Além disso, pode prever o Campo alterado, visualizando-o enquanto Utilizador. Por Favor, teste as suas configurações para ver se tudo está funcionando corretamente.<br /><strong>Por Favor, note que as alterações no Campos do Perfil não afetará os Campos existentes inseridos pelos seus utilizadores.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opções Específicas ao Tipo de Perfil',
	'STEP_2_TITLE_EDIT'				=> 'Opções Específicas ao Tipo de Perfil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Desde que tenha mais de um Idioma instalado, deve preencher os itens de linguagem restantes também. O Campo irá trabalhar com o Idioma Padrão selecionado, e pode preencher os itens de linguagem restantes depois também.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Desde que tenha mais de um Idioma instalado, pode alterar ou adicionar os itens de linguagem restantes também. O Campo irá trabalhar com o Idioma Padrão selecionado.',
	'STEP_3_TITLE_CREATE'			=> 'Definições do Idioma Restantes',
	'STEP_3_TITLE_EDIT'				=> 'Definições do Idioma',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Escreva uma frase padrão a ser exibida, um valor padrão. Deixe em branco se não deseja ativar esta opção.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Escreva um texto padrão a ser exibido, um valor padrão. Deixe em branco se não deseja ativar esta opção.',
	'TRANSLATE'						=> 'Traduzir',

	'USER_FIELD_NAME'				=> 'Título do Campo será mostrado ao Utilizador',

	'VISIBILITY_OPTION'				=> 'Opção de Visibilidade',
));
