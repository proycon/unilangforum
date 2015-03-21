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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'			=> 'BBCode (Bulletin Board Code) é uma linguagem originalmente desenvolvida para phpBB. Permite configurar o que é, e como é exibido. Aqui é possível adicionar, editar e apagar BBCodes.',
	'ADD_BBCODE'					=> 'Adicionar novo BBCode',

	'BBCODE_DANGER'					=> 'O BBCode que está a tentar adicionar parece usar um {TEXT} dentro de um atributo de HTML. Esta é uma possível questão de segurança XSS. Em alternativa, tente usar o mais restritivo {SimpleText} ou {INTTEXT}. Só prossiga se compreende os riscos de segurança envolvidos e se considera inevitável o uso de {TEXT}.',
	'BBCODE_DANGER_PROCEED'			=> 'Continuar', //'I understand the risk',

	'BBCODE_ADDED'					=> 'O BBCode foi adicionado com sucesso.',
	'BBCODE_EDITED'					=> 'O BBCode foi editado com sucesso.',
	'BBCODE_DELETED'				=> 'O BBCode foi apagado com sucesso.',
	'BBCODE_NOT_EXIST'				=> 'O BBCode que selecionou não existe.',
	'BBCODE_HELPLINE'				=> 'Linha de Ajuda',
	'BBCODE_HELPLINE_EXPLAIN'		=> 'Neste Campo deve ser inserido o texto mostrado quando se coloca o cursor sobre o BBCode.',
	'BBCODE_HELPLINE_TEXT'			=> 'Texto da Linha de Ajuda',
	'BBCODE_HELPLINE_TOO_LONG'		=> 'A linha de ajuda que escreveu é muito longa.',	

	'BBCODE_INVALID_TAG_NAME'		=> 'O Nome da TAG de BBCode selecionado já existe.',
	'BBCODE_INVALID'				=> 'A construção do seu BBCode é invalido.',
	'BBCODE_OPEN_ENDED_TAG'			=> 'O BBCode customizado deve conter uma TAG de início e outra de fim.',
	'BBCODE_TAG'					=> 'TAG',
	'BBCODE_TAG_TOO_LONG'			=> 'O Nome da TAG selecionado é muito grande.',
	'BBCODE_TAG_DEF_TOO_LONG'		=> 'A Definição da TAG escrita é muito grande. Por Favor, reescreva de forma mais curta.',
	'BBCODE_USAGE'					=> 'Uso do BBCode',
	'BBCODE_USAGE_EXAMPLE'			=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'			=> 'Aqui pode definir como utilizar o BBCode. Substitua qualquer variável inserida pelo símbolo correspondente (%sleia as instruções%s).',

	'EXAMPLE'						=> 'Exemplo:',
	'EXAMPLES'						=> 'Exemplos:',

	'HTML_REPLACEMENT'				=> 'Substituição do HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};">{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};">{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aqui pode definir a substituição padrão do HTML. Não se esqueça de colocar os símbolos utilizados acima!',

	'TOKEN'							=> 'Símbolo',
	'TOKENS'						=> 'Símbolos',
	'TOKENS_EXPLAIN'				=> 'Os Símbolos são campos especiais a serem adicionados pelos Utilizadores. Mas estes apenas serão válidos se tiverem as definições correspondentes. Se necessário, pode numerá-los adicionando um número como o último carácter: Exemplo: {Utilizador}, {Utilizador1}.<br /> <br />Pode ainda utilizar estes Símbolos com qualquer sequência de linguagem presente na diretoria /language como esta: {L_<em>&lt;STRINGNAME&gt;</em>} onde <em>&lt;STRINGNAME&gt;</em> é o nome da sequência traduzida que deseja adicionar. Por exemplo, {L_WROTE} será exibido como “Escreveu” ou traduzido de acordo com a localidade do Utilizador.<br /><br /><strong>Tenha em atenção que apenas os Símbolos listados abaixo podem ser utilizados com os BBCodes personalizados.</strong>',
	'TOKEN_DEFINITION'				=> 'O que é que isto pode ser?',
	'TOO_MANY_BBCODES'				=> 'Não pode criar mais BBCodes. Elimine alguns BBCodes para poder criar outros.',

	'tokens'			=> array(
		'TEXT'			=> 'Qualquer texto, incluindo caracteres estrangeiros, números, etc ... Não deve usar o símbolo TEXT em tags HTML. Em vez disso tente usar intText ou SimpleText.',
		'SIMPLETEXT'	=> 'Caracteres do alfabeto latino (A-Z), números, espaços, vírgulas, pontos, menos, mais, hífen e sublinhado.',
		'INTTEXT'		=> 'Caracteres Unicode, números, espaços, vírgulas, pontos, menos, mais, hífen, underscore e espaços em branco.',
        'IDENTIFIER'    => 'Caracteres do alfabeto latino (A-Z), números, hífen e underline',
		'NUMBER'		=> 'Qualquer Séries de Dígitos',
		'EMAIL'			=> 'Um endereço de email válido',
		'URL'			=> 'Uma URL válida utilizando qualquer protocolo (http, ftp, etc. não pode ser utilizada para javascript). Se nenhum for concedido, “http://” é o prefixado para a sequência.',
		'LOCAL_URL'		=> 'Uma URL local. O URL deve ser relativo à página do tópico e não pode conter o nome do servidor ou o protocolo, como as ligações são prefixados com “%s”',
		'RELATIVE_URL'	=> 'Uma URL relativa. Pode combinar partes de uma URL, mas tenha cuidado: a URL completa é uma URL relativa válida. Quando quiser usar URLs relativas do seu fórum, use o token LOCAL_URL.',
		'COLOR'			=> 'Uma Cor de HTML, pode ser tanto na forma numérica <samp>#FF1234</samp> ou uma <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> assim como <samp>fuchsia</samp> ou <samp>InativeBorder</samp>',
	)
));

// Smilies and topic icons 
$lang = array_merge($lang, array( 
	'ACP_ICONS_EXPLAIN'				=> 'Aqui pode adicionar, editar e apagar os ícones que os Utilizador terão disponíveis para adicionar nos Tópicos e Mensagens. Estes ícones são exibidos geralmente perto do Título dos Tópicos na lista de Fóruns, ou o título do Tópico na lista de Tópicos. Também pode instalar e criar Pacotes de Ícones novos.',
	'ACP_SMILIES_EXPLAIN'			=> 'Emoções ou Smiles são tipicamente pequenas, às vezes imagens animadas utilizadas para mostrar alguma emoção ou sentimento. Aqui pode adicionar, editar e apagar as Emoções que os Utilizadores terão disponíveis nos Tópicos e Mensagens Privadas. Também pode instalar e criar Pacotes de Emoções.',
	'ADD_SMILIES'					=> 'Adicionar Múltiplas Emoções',
	'ADD_SMILEY_CODE'				=> 'Adicionar Código Adicional à Emoção',
	'ADD_ICONS'						=> 'Adicionar Ícones Múltiplos',
	'AFTER_ICONS'					=> 'Depois %s',
	'AFTER_SMILIES'					=> 'Depois %s',

	'CODE'							=> 'Código',
	'CURRENT_ICONS'					=> 'Ícones Atuais',
	'CURRENT_ICONS_EXPLAIN'			=> 'Escolha o que fazer com os ícones atualmente instalados.',
	'CURRENT_SMILIES'				=> 'Emoções atuais',
	'CURRENT_SMILIES_EXPLAIN'		=> 'Escolha o que fazer com as Emoções atualmente instaladas.',

	'DISPLAY_ON_POSTING'			=> 'Exibir na Mensagem',
	'DISPLAY_POSTING'				=> 'Na Mensagem',
	'DISPLAY_POSTING_NO'			=> 'Não Exibir na Mensagem',

	'EDIT_ICONS'					=> 'Editar Ícones',
	'EDIT_SMILIES'					=> 'Editar Emoções',
	'EMOTION'						=> 'Emoção',
	'EXPORT_ICONS'					=> 'Exportar e descarregar Pacote de ícones (smilies.pak)',
	'EXPORT_ICONS_EXPLAIN'			=> '%sClicando neste atalho, as configurações para os seus ícones instalados serão compatadas para <samp>icons.pak</samp> que uma vez descarregado pode ser utilizado para criar um ficheiro <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus ícones mais este ficheiro de configuração<samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'				=> 'Exportar e descarregar um pack de Emoções',
	'EXPORT_SMILIES_EXPLAIN'		=> '%sClicando neste atalho, os icones de emoções instalados será compatado para <samp>smilies.pak</samp> que uma vez descarregado pode ser utilizado para criar um ficheiro <samp>.zip</samp> ou <samp>.tgz</samp> contendo todas as suas emoções mais este ficheiro de configuração<samp>smilies.pak</samp>%s.',

	'FIRST'							=> 'Primeiro',

	'ICONS_ADD'						=> 'Adicionar novo ícone',
	'ICONS_ADDED'			=> array(
		0	=> 'Não foram adicionados icones.',
		1	=> 'O icone foi adicionado com sucesso.',
		2	=> 'Os icones foram adicionados com sucesso.',
	),
	'ICONS_CONFIG'			=> 'Configuração dos icones',
	'ICONS_DELETED'			=> 'O icone foi apagado com sucesso.',
	'ICONS_EDIT'			=> 'Editar icone',
	'ICONS_EDITED'			=> array(
		0	=> 'Não há icones para atualizar.',
		1	=> 'O icone foi atualizado com sucesso.',
		2	=> 'Os icones foram atualizados com sucesso.',
	),
	'ICONS_HEIGHT'					=> 'Altura do ícone',
	'ICONS_IMAGE'					=> 'Imagem do ícone',
	'ICONS_IMPORTED'				=> 'O Pacote de ícones foi instalado com sucesso.',
	'ICONS_IMPORT_SUCCESS'			=> 'O Pacote de ícones foi importado com sucesso.',
	'ICONS_LOCATION'				=> 'Local do ícone',
	'ICONS_NOT_DISPLAYED'			=> 'Os ícones seguintes não serão exibidos na página de mensagens',
	'ICONS_ORDER'					=> 'Ordem do Ícone',
	'ICONS_URL'						=> 'Ficheiro de imagem do ícone',
	'ICONS_WIDTH'					=> 'Largura do Ícone',
	'IMPORT_ICONS'					=> 'Instalar Pacote de ícones',
	'IMPORT_SMILIES'				=> 'Instalar Pacote de Emoções',	

	'KEEP_ALL'						=> 'Guardar Todas',

	'MASS_ADD_SMILIES'				=> 'Adicionar Múltiplas Emoções',

	'NO_ICONS_ADD'					=> 'Não há ícones disponíveis para adicionar.',
	'NO_ICONS_EDIT'					=> 'Não há ícones disponíveis para modificar.',
	'NO_ICONS_EXPORT'				=> 'Não tem ícones para Criar um Pacote.',
	'NO_ICONS_PAK'					=> 'Não foi encontrado nenhum Pacote de ícones.',
	'NO_SMILIES_ADD'				=> 'Não há Emoções disponíveis para adicionar.',
	'NO_SMILIES_EDIT'				=> 'Não há Emoções disponíveis para modificar.',
	'NO_SMILIES_EXPORT'				=> 'Não tem Emoções para criar um Pacote.',
	'NO_SMILIES_PAK'				=> 'Não foi encontrado nenhum Pacote de Emoções.',

	'PAK_FILE_NOT_READABLE'			=> 'Não é possível ler o ficheiro <samp>.pak</samp>.',

	'REPLACE_MATCHES'				=> 'Substituir entradas',

	'SELECT_PACKAGE'				=> 'Selecionar o Ficheiro do Pacote',
	'SMILIES_ADD'					=> 'Adicionar nova Emoção',
	'SMILIES_ADDED'				=> array(
		0	=> 'Não foram adicionadas emoções.',
		1	=> 'A emoção foi adicionada com sucesso.',
		2	=> 'As emoções foram adicionadas com sucesso.',
	),
	'SMILIES_CODE'					=> 'Código da Emoção',
	'SMILIES_CONFIG'				=> 'Configuração da Emoção',
	'SMILIES_DELETED'				=> 'A Emoção foi apagada com sucesso.',
	'SMILIES_EDIT'					=> 'Editar Emoção',
	'SMILIE_NO_CODE'				=> 'A Emoção "%s"  foi ignorada, como se nenhum código tivesse sido escrito.',
	'SMILIE_NO_EMOTION'				=> 'A Emoção "%s" foi ignorada, como se nenhuma emoção tivesse sido escrita.',
	'SMILIE_NO_FILE'				=> 'A Emoção “%s” foi ignorada, porque falta o ficheiro.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Não foram atualizadas emoções.',
		1	=> 'A emoção foi atualizada com sucesso.',
		2	=> 'As emoções foram atualizadas com sucesso.',
	),
	'SMILIES_EMOTION'				=> 'Emoção',
	'SMILIES_HEIGHT'				=> 'Altura da Emoção',
	'SMILIES_IMAGE'					=> 'Imagem da Emoção',
	'SMILIES_IMPORTED'				=> 'O Pacote de Emoções foi instalado com sucesso.',
	'SMILIES_IMPORT_SUCCESS'		=> 'O Pacote de Emoções foi importado com sucesso.',
	'SMILIES_LOCATION'				=> 'Local do Emoção',
	'SMILIES_NOT_DISPLAYED'			=> 'As Emoções seguintes são exibidos na página de mensagens',
	'SMILIES_ORDER'					=> 'Ordem da Emoção',
	'SMILIES_URL'					=> 'Ficheiro de Imagem da Emoção',
	'SMILIES_WIDTH'					=> 'Largura da Emoção',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Limite de %d emoção atingido.',
		2	=> 'Limite de %d emoções atingido.',
	),

	'WRONG_PAK_TYPE'				=> 'O Pacote selecionado não tem as informações necessárias',
)); 

// Word censors 
$lang = array_merge($lang, array( 
	'ACP_WORDS_EXPLAIN'				=> 'Aqui pode adicionar, editar e apagar palavras que serão automaticamente censuradas no Fórum. Adicionando esta opção, os visitantes continuarão a poder registar-se com Nomes de utilizadores contendo estas palavras. Podem ser utilizados asteriscos (*) aumentando as possibilidades de abranger variações de uma mesma palavra. Por exemplo, testa* abrangerá testar e detesta.',
	'ADD_WORD'						=> 'Adicionar nova Palavra',

 	'EDIT_WORD'						=> 'Editar Palavra Censurada',
	'ENTER_WORD'					=> 'Tem que escrever uma palavra e a sua substituição.',

	'NO_WORD'						=> 'Não foi selecionada nenhuma palavra para poder ser editada.',

	'REPLACEMENT'					=> 'Substituição',

	'UPDATE_WORD'					=> 'Atualizar Palavra Censurada',

	'WORD'							=> 'Palavra',
	'WORD_ADDED'					=> 'A Palavra Censurada foi adicionada com sucesso.',
	'WORD_REMOVED'					=> 'A Palavra Censurada foi apagada com sucesso.',
	'WORD_UPDATED'					=> 'A Palavra Censurada foi atualizada com sucesso.',
)); 

// Ranks 
$lang = array_merge($lang, array( 
	'ACP_RANKS_EXPLAIN'				=> 'Aqui poderá adicionar, editar, visualizar e apagar classificações. Pode também criar classificações personalizadas que podem ser aplicados a um Utilizador nas Ferramentas de Administração de Utilizadores.',
	'ADD_RANK'						=> 'Adicionar nova classificação',

	'MUST_SELECT_RANK'				=> 'Tem de selecionar uma classificação.',

	'NO_ASSIGNED_RANK'				=> 'Nenhuma Classificação Especial existente.',
	'NO_RANK_TITLE'					=> 'Tem que escrever o Título da Classificação.',
	'NO_UPDATE_RANKS'				=> 'A classificação foi apagada com sucesso. De qualquer modo, os registos que utilizavam esta classificação não foram atualizados. Tem que atualizar as classificações nestes registos manualmente.',

	'RANK_ADDED'					=> 'A classificação foi adicionada com sucesso.',
	'RANK_IMAGE'					=> 'Imagem da Classificação',
	'RANK_IMAGE_EXPLAIN'			=> 'Imagem da Classificação (relativo à pasta raíz do phpBB).',
	'RANK_IMAGE_IN_USE'		=> '(em uso)',
	'RANK_MINIMUM'					=> 'Número Mínimo de Mensagens',
	'RANK_REMOVED'					=> 'A classificação foi apagada com sucesso.',
	'RANK_SPECIAL'					=> 'Escreva uma Classificação Especial',
	'RANK_TITLE'					=> 'Título da Classificação',
	'RANK_UPDATED'					=> 'A Classificação foi atualizada com sucesso.',
)); 

// Disallow Usernames 
$lang = array_merge($lang, array( 
	'ACP_DISALLOW_EXPLAIN'			=> 'Aqui pode gerir os nomes cuja utilização é proibida. Utilize o asterisco (*) para facilitar a construção de nomes.',
	'ADD_DISALLOW_EXPLAIN'			=> 'Pode proibir nomes de utilizadores combinando o asterisco (*) com outros caracteres.',
	'ADD_DISALLOW_TITLE'			=> 'Adicionar um Nome Proibido',

	'DELETE_DISALLOW_EXPLAIN'		=> 'Aqui pode eliminar uma proibição, selecionando na lista o nome cuja proibição pretende anular, clicando de seguida em enviar.',
	'DELETE_DISALLOW_TITLE'			=> 'Apagar um Nome Proibido',
	'DISALLOWED_ALREADY'			=> 'O Nome especificado já está proibido.',
	'DISALLOWED_DELETED'			=> 'O Nome Proibido foi apagado com sucesso.',
	'DISALLOW_SUCCESSFUL'			=> 'O Nome Proibido foi adicionado com sucesso.',

	'NO_DISALLOWED'					=> 'Não há Nomes Proibidos',
	'NO_USERNAME_SPECIFIED'			=> 'O Nome Proibido não foi selecionado.',
)); 

// Reasons 
$lang = array_merge($lang, array( 
	'ACP_REASONS_EXPLAIN'			=> 'Aqui pode gerir as razões utilizadas em denúncias e mensagens negativas quando desaprovando mensagens. Existe uma razão padrão (marcada com um (*)) em que não pode apagar, esta razão é normalmente utilizada para mensagens Personalizadas se não possuírem motivos plausíveis.',
	'ADD_NEW_REASON'				=> 'Adicionar nova Razão',
	'AVAILABLE_TITLES'				=> 'Titulos de Razões Locais Disponveis',

	'IS_NOT_TRANSLATED'				=> 'A Razão <strong>não</strong> foi encontrada.',
	'IS_NOT_TRANSLATED_EXPLAIN'		=> 'A Razão <strong>não</strong> foi encontrada. Se deseja estabelecer a forma local, especifique a chave correta através dos ficheiros de linguagem do Fórum de razões para denúncias.',
	'IS_TRANSLATED'					=> 'A Razão foi encontrada.',
	'IS_TRANSLATED_EXPLAIN'			=> 'A Razão foi encontrada. Se o título que escreveu aqui for especificado com os ficheiros de linguagem do Fórum de razões para denúncias, a forma localizada para o título e a descrição serão utilizadas.',

	'NO_REASON'						=> 'A Razão não pôde ser encontrada.',
	'NO_REASON_INFO'				=> 'O Título e a Descrição para esta Razão devem ser escritos.',
	'NO_REMOVE_DEFAULT_REASON'		=> 'Não está autorizado a apagar a Razão Padrão "Outros".',

	'REASON_ADD'					=> 'Adicionar Razão para Denúncia/Negação',
	'REASON_ADDED'					=> 'A Razão para Denúncia/Negação foi adicionada com sucesso.',
	'REASON_ALREADY_EXIST'			=> 'O Título escrito já existe. Por Favor, escreva outro título para esta razão.',
	'REASON_DESCRIPTION'			=> 'Descrição da Razão',
	'REASON_DESC_TRANSLATED'		=> 'Descrição da Razão exibida',
	'REASON_EDIT'					=> 'Editar Razão para Denúncia/Negação',
	'REASON_EDIT_EXPLAIN'			=> 'Aqui pode adicionar ou editar uma razão. Se a razão for traduzida, a versão localizada é utilizada ao invés da descrição descrita aqui.',
	'REASON_REMOVED'				=> 'A razão foi apagada por sucesso.',
	'REASON_TITLE'					=> 'Título da Razão',
	'REASON_TITLE_TRANSLATED'		=> 'Título da Razão exibida',
	'REASON_UPDATED'				=> 'A Razão para Denúncia/Negação foi atualizada com sucesso.',

	'USED_IN_REPORTS'				=> 'Utilizado em Denúncias',
));
