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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aqui pode definir configurações básicas do phpBB e configurações gerais do Fórum.',
	'BOARD_INDEX_TEXT'				=> 'Texto Índice do Fórum',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Texto que será mostrado no board’s breadcrumbs (Navegação estrutural). Se não for indicado o texto mostrado será Board index',
	'BOARD_STYLE'					=> 'Estilo do Fórum',
	'CUSTOM_DATEFORMAT'				=> 'Personalizado…',
	'DEFAULT_DATE_FORMAT'			=> 'Formato da Data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A sintaxe usada é idêntica à função PHP  <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Idioma Padrão',
	'DEFAULT_STYLE'					=> 'Estilo Padrão',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Estilo por defeito para novos Utilizadores.',
	'DISABLE_BOARD'					=> 'Desativar o Fórum',
	'DISABLE_BOARD_EXPLAIN'			=> 'O Fórum fica inacessível aos utilizadores que não sejam Administradores ou Moderadores. Pode justificar o fecho temporário introduzindo uma mensagem até 255 caracteres',
	'DISPLAY_LAST_SUBJECT'			=> 'Mostrar assunto da última mensagem adicionado na lista do fórum',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'O assunto da última mensagem será mostrado na lista de fóruns com um link para mensagem. Não são mostrados assuntos relativos a fóruns protegidos por senha ou inacessíveis ao utilizador.',
	'GUEST_STYLE'					=> 'Estilo para visitantes',
	'GUEST_STYLE_EXPLAIN'			=> 'Estilo que o Fórum apresenta aos visitantes.',
	'OVERRIDE_STYLE'				=> 'Sobrepor Estilo do Utilizador',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Substitui o Estilo dos Utilizadores e dos visitantes pelo Estilo Padrão do Fórum.',
	'SITE_DESC'						=> 'Descrição do Site',
	'SITE_HOME_TEXT'				=> 'Texto principal do sítio Web',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Este texto será exibido como um link para sua página inicial do sítio, no breadcrumbs do Fórum. Se não for especificado, o padrão será "Home".',
	'SITE_HOME_URL'					=> 'URL principal do sítio',
	'SITE_HOME_URL_EXPLAIN'			=> 'Se for especificado, será colocado no inicio do breadcrumbs um link para este URL e o logotipo do Fórum vai apontar para este URL em vez do índice do Fórum. É obrigatório indicar um URL, por exemplo, <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Nome do Sítio',
    'SYSTEM_TIMEZONE'				=> 'Fuso horário do visitante',
    'SYSTEM_TIMEZONE_EXPLAIN'		=> 'Fuso horário a mostrar a utilizadores não ligados (visitantes, motores de busca). Os utilizadores ligados definem o seu fuso horário durante o registo e podem alterá-lo no Painel de Controlo do Utilizador.',
	'WARNINGS_EXPIRE'				=> 'Duração do aviso',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'O número de dias que uma advertência permanece no Registo do Utilizador. Defina como 0 para advertência permanente.',
)); 

// Board Features 
$lang = array_merge($lang, array( 
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aqui pode Ativar/Desativar diversos recursos do phpBB.',

	'ALLOW_ATTACHMENTS'				=> 'Ativar Anexos',
	'ALLOW_BOOKMARKS'				=> 'Permitir histórico dos Tópicos',
	'ALLOW_BOOKMARKS_EXPLAIN'		=> 'O Utilizador poderá arquivar o seu histórico.',
	'ALLOW_BIRTHDAYS'				=> 'Permitir aniversários',
	'ALLOW_BIRTHDAYS_EXPLAIN'		=> 'Permitir a exibição dos aniversários no Perfil do Utilizador.',
	'ALLOW_BBCODE'					=> 'Permitir BBCode',
	'ALLOW_FORUM_NOTIFY'			=> 'Permitir a vigilância dos Fóruns',
	'ALLOW_NAME_CHANGE'				=> 'Permitir mudanças do Nome de Utilizador',
	'ALLOW_NO_CENSORS'				=> 'Permitir desativação da Censura de palavras',
	'ALLOW_NO_CENSORS_EXPLAIN'		=> 'O Utilizador poderá desativar a Censura automática de palavras.',
	'ALLOW_PM_ATTACHMENTS'			=> 'Permitir anexos nas Mensagens Privadas',
	'ALLOW_PM_REPORT'				=> 'Permitir aos utilizadores reportar Mensagens Privadas',
	'ALLOW_PM_REPORT_EXPLAIN'		=> 'Caso esteja ativado, os utilizadores terão a opção de reportar uma mensagem privada que tenham recebido ou enviado para moderação. Estas mensagens privadas irão ser visíveis no Painel de Controlo de Moderação.',
	'ALLOW_QUICK_REPLY'				=> 'Permitir Resposta Rápida',
	'ALLOW_QUICK_REPLY_EXPLAIN'		=> 'Este interruptor permite ativar/desativar globalmente a Resposta Rápida em todo o Fórum. Quando ativado, terá ainda que ativar a Resposta Rápida individualmente em cada um dos Fóruns.',
	'ALLOW_QUICK_REPLY_BUTTON'		=> 'Ativar a Resposta Rápida em todos os Fóruns',
	'ALLOW_SIG'						=> 'Permitir Assinaturas',
	'ALLOW_SIG_BBCODE'				=> 'Permitir aos Utilizadores usar BBCode na Assinatura',
	'ALLOW_SIG_FLASH'				=> 'Permitir aos Utilizadores usar BBCode <code>[FLASH]</code> na Assinatura',
	'ALLOW_SIG_IMG'					=> 'Permitir aos Utilizadores usar BBCode <code>[IMG]</code> na Assinatura',
	'ALLOW_SIG_LINKS'				=> 'Permitir aos Utilizadores usar Links na Assinatura',
	'ALLOW_SIG_LINKS_EXPLAIN'		=> 'Se desativado o BBCode <code>[URL]</code> e o processamento automatico de URLs é desativado.',
	'ALLOW_SIG_SMILIES'				=> 'Permitir aos Utilizadores usar Emoções na Assinatura',
	'ALLOW_SMILIES'					=> 'Permitir Emoções (Ícones de Emoções)',
	'ALLOW_TOPIC_NOTIFY'			=> 'Permitir a vigilância dos Tópicos',
	'BOARD_PM'						=> 'Mensagem Privada',
	'BOARD_PM_EXPLAIN'				=> 'Ativar as Mensagens Privadas para todos os Utilizadores.',
)); 

// Avatar Settings 
$lang = array_merge($lang, array( 
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Os Avatares são pequenas imagens que o Utilizador pode usar para ser identificado no Fórum. Dependendo do Estilo usado, o Avatar é mostrado normalmente acima do nome do Utilizador na visualização dos Tópicos. Aqui pode definir como os Utilizadores podem usar os seus Avatares. Para enviar Avatares, a Diretoria abaixo já tem que estar criada e certificar-se que o Servidor pode gravar Ficheiros nela. O limite do tamanho da imagem do Avatar é válido apenas para Avatares enviados, não se aplicando a imagens utilizadas de outros sítios web.',

	'ALLOW_AVATARS'					=> 'Ativar avatares',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Permitir o uso normal de avatares;<br />Caso desative o uso normal de avatares ou um uso de avatares, os avatares desativados deixarão de ser visíveis no Fórum, embora os utilizadores possam transferir os seus próprios avatares no Painel de Controlo do Utilizador.',
	'ALLOW_GRAVATAR'				=> 'Ativar Gravatar Avatars',
	'ALLOW_LOCAL'					=> 'Permitir Galeria de Avatares',
	'ALLOW_REMOTE'					=> 'Ativar Avatar Remoto',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Os Avatares utilizados de outros sítios web.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Permitir o envio de avatar remoto',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Permitir o envio de avatares de um outro sítio.',	
	'ALLOW_UPLOAD'					=> 'Ativar o envio de Avatar',
	'AVATAR_GALLERY_PATH'			=> 'Diretoria da Galeria de Avatares',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Diretoria dependendo da raiz do phpBB para Galeria de Avatares: Exemplo: <samp>images/avatars/gallery</samp>.<br />Pontos duplos como <samp>../</samp> serão retirados do caminho por razões de segurança.',
	'AVATAR_STORAGE_PATH'			=> 'Diretoria de arquivo dos Avatares',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Diretoria dependendo da raiz do phpBB para envio de Avatares. Exemplo: <samp>images/avatars/upload</samp>.<br />O Avatar <strong>não ficará disponível</strong> se a diretoria não for gravável.<br />Pontos duplos como <samp>../</samp> serão retirados do caminho por razões de segurança.',
	'MAX_AVATAR_SIZE'				=> 'Dimensões Máximas do Avatar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(Altura x Largura em píxeis).',
	'MAX_FILESIZE'					=> 'Tamanho Máximo do Ficheiro Avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Dos Ficheiros de Avatar enviados. Se este valor for 0, o tamanho do ficheiro enviado fica sujeito às permissões do PHP.',
	'MIN_AVATAR_SIZE'				=> 'Dimensões Mínimas do Avatar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(Altura x Largura em píxeis).',
)); 

// Message Settings 
$lang = array_merge($lang, array( 
	'ACP_MESSAGE_SETTINGS_EXPLAIN'	=> 'Aqui pode configurar as opções das Mensagens Privadas.',

	'ALLOW_BBCODE_PM'				=> 'Permitir BBCode nas Mensagens Privadas',
	'ALLOW_FLASH_PM'				=> 'Permitir o uso do BBCode FLASH',
	'ALLOW_FLASH_PM_EXPLAIN'		=> 'Para enviar Flash nas Mensagens Privadas tem que ativar esta opção. O que depende das suas Permissões.',
	'ALLOW_FORWARD_PM'				=> 'Permitir reencaminhamento das Mensagens Privadas',
	'ALLOW_IMG_PM'					=> 'Permitir o uso do BBCode IMG',
	'ALLOW_MASS_PM'					=> 'Permitir envio de Mensagens Privadas para múltiplos Utilizadores e Grupos',
	'ALLOW_MASS_PM_EXPLAIN'			=> 'O envio para Grupos pode ser ajustado individualmente de acordo com a página de configurações do Grupo.',	
	'ALLOW_PRINT_PM'				=> 'Permitir a impressão das Mensagem Privadas',
	'ALLOW_QUOTE_PM'				=> 'Permitir citar nas Mensagens Privadas',
	'ALLOW_SIG_PM'					=> 'Permitir assinaturas nas Mensagens Privadas',
	'ALLOW_SMILIES_PM'				=> 'Permitir Emoções nas Mensagens Privadas',
	'BOXES_LIMIT'					=> 'Máximo de Mensagens Privadas por pasta',
	'BOXES_LIMIT_EXPLAIN'			=> 'Número máximo de Mensagens Privadas que os Utilizadores podem receber em cada uma das suas Pastas Pessoais (0 = ilimitadas).',
	'BOXES_MAX'						=> 'Máximo de pastas de Mensagens Privadas',
	'BOXES_MAX_EXPLAIN'				=> 'Número máximo de Pastas Pessoais que os Utilizadores podem criar para as Mensagens Privadas.',
	'ENABLE_PM_ICONS'				=> 'Ativa o uso de ícones de Tópico nas Mensagens Privadas',
	'FULL_FOLDER_ACTION'			=> 'Ação padrão para pastas cheias',
	'FULL_FOLDER_ACTION_EXPLAIN'	=> 'Define o procedimento se a pasta do Utilizador encher e a ação configurada não for aplicável. Na pasta "Mensagens enviadas" serão sempre excluídas as Mensagens mais antigas.',
	'HOLD_NEW_MESSAGES'				=> 'Manuseio de novas Mensagens',
	'PM_EDIT_TIME'					=> 'Limite do tempo de edição',
	'PM_EDIT_TIME_EXPLAIN'			=> 'Limita o tempo disponível para editar uma nova Mensagem Privada ainda não enviada (0 = ilimitado).',
	'PM_MAX_RECIPIENTS'				=> 'Número máximo de destinatários',
	'PM_MAX_RECIPIENTS_EXPLAIN'		=> 'Número máximo de destinatários por Mensagem Privada (0 = ilimitados). Estes valores podem ser ajustados por Grupo nas configurações do Grupo.',
)); 

// Post Settings 
$lang = array_merge($lang, array( 	
	'ACP_POST_SETTINGS_EXPLAIN'		=> 'Aqui pode configurar todas as opções de Mensagens.',
	'ALLOW_POST_LINKS'				=> 'Permitir a Tag BBCode [URL] nas Mensagens Privadas',
	'ALLOW_POST_LINKS_EXPLAIN'		=> 'Se desativado, a Tag BBCode [URL] e as URLs mágicas serão desativadas nas Mensagens Privadas.',
	'ALLOW_POST_FLASH'				=> 'Permitir o uso da Tag BBCode [FLASH] nas Mensagens',
	'ALLOW_POST_FLASH_EXPLAIN'		=> 'Se desativado, a Tag BBCode [FLASH] ficará inativa nas Mensagens em geral. De qualquer forma, o Sistema de Permissões pode ajudar a controlar as TAGs que Utilizadores podem usar.',

	'BUMP_INTERVAL'					=> 'Intervalo de Bump',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Número de minutos, horas ou dias entre a última Mensagem num Tópico e a reativação deste Tópico. Definir o valor como 0 desativa este recurso.',
	'CHAR_LIMIT'					=> 'Máximo de caracteres por Mensagem',
	'CHAR_LIMIT_EXPLAIN'			=> 'Número máximo de caracteres da mensagem. 0 = ilimitados.',
	'DELETE_TIME'					=> 'Tempo limite para apagar',
	'DELETE_TIME_EXPLAIN'			=> 'Limita o tempo disponível para eliminar uma nova Mensagem (0 = ilimitado).',
	'DISPLAY_LAST_EDITED'			=> 'Mostra a data e a hora da última edição',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Se ativo mostra a data e a hora da última edição da Mensagem.',
	'EDIT_TIME'						=> 'Tempo limite de edição',
	'EDIT_TIME_EXPLAIN'				=> 'Limita o tempo disponível para editar uma nova Mensagem (0 = ilimitado).',
	'FLOOD_INTERVAL'				=> 'Intervalo de Segurança',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Número de segundos que o Utilizador tem de esperar para criar nova Mensagem.',
	'HOT_THRESHOLD'					=> 'Mensagens para se tornar um Tópico Popular',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Número de Mensagens para tornar um Tópico Popular. 0 para desativar',
	'MAX_POLL_OPTIONS'				=> 'Número máximo de opções em votações',
	'MAX_POST_FONT_SIZE'			=> 'Tamanho máximo da fonte nas Mensagens',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Tamanho máximo da letra numa mensagem. 0 = ilimitado.',
	'MAX_POST_IMG_HEIGHT'			=> 'Altura máxima das imagens por Mensagem',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Altura máxima das imagens/flash nas Mensagens. 0 = ilimitado.',
	'MAX_POST_IMG_WIDTH'			=> 'Largura máxima das imagens por Mensagem',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Largura máxima das imagens/flash nas Mensagens 0 = ilimitado.',
	'MAX_POST_URLS'					=> 'Número máximo de URLs por Mensagem',
	'MAX_POST_URLS_EXPLAIN'			=> 'Número máximo de URLs que podem ser inseridas numa mensagem. 0 = ilimitadas.',
	'MIN_CHAR_LIMIT'				=> 'Mínimo de caracteres por Mensagem',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'O número mínimo de caracteres que o Utilizador tem de usar numa Mensagem. 1 é o valor mínimo admitido nesta configuração.',
	'POSTING'						=> 'Publicação de mensagens',
	'POSTS_PER_PAGE'				=> 'Mensagens por página',
	'QUOTE_DEPTH_LIMIT'				=> 'Tamanho máximo das citações',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Número máximo de citações por mensagem. 0 = ilimitadas.',
	'SMILIES_LIMIT'					=> 'Máximo de Emoções por Mensagem',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Número máximo de Emoções que podem ser inseridas numa mensagem. 0 = ilimitadas.',
	'SMILIES_PER_PAGE'				=> 'Emoções por página',
	'TOPICS_PER_PAGE'				=> 'Tópicos por Página',
)); 

// Signature Settings 
$lang = array_merge($lang, array( 
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aqui pode configurar as opções para as Assinaturas dos Utilizadores.',

	'MAX_SIG_FONT_SIZE'					=> 'Tamanho Máximo da fonte Assinatura',
	'MAX_SIG_FONT_SIZE_EXPLAIN'			=> 'Tamanho Máximo da fonte permitido na Assinatura dos Utilizadores (0 = ilimitado).',
	'MAX_SIG_IMG_HEIGHT'				=> 'Altura Máxima da imagem na Assinatura',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'		=> 'Altura Máxima de um ficheiro de imagem/flash na Assinatura dos Utilizadores (0 = ilimitado).',
	'MAX_SIG_IMG_WIDTH'					=> 'Largura Máxima de uma imagem na Assinatura',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'			=> 'Largura Máxima de um ficheiro de imagem/flash na Assinatura do Utilizador. (0 = ilimitado).',
	'MAX_SIG_LENGTH'					=> 'Comprimento máximo da Assinatura',
	'MAX_SIG_LENGTH_EXPLAIN'			=> 'Número Máximo de caracteres na Assinatura do Utilizador.',
	'MAX_SIG_SMILIES'					=> 'Número Máximo de Emoções por Assinatura',
	'MAX_SIG_SMILIES_EXPLAIN'			=> 'Número Máximo de Emoções permitidas na Assinatura do Utilizador. (0 = ilimitado).',
	'MAX_SIG_URLS'						=> 'Número Máximo de atalhos',
	'MAX_SIG_URLS_EXPLAIN'				=> 'Número Máximo de atalhos numa Assinatura. (0 = ilimitados).',
)); 

// Registration Settings 
$lang = array_merge($lang, array( 
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aqui são definidas as opções de Registo e Perfil do Utilizador.',

	'ACC_ACTIVATION'					=> 'Ativação de Conta',
	'ACC_ACTIVATION_EXPLAIN'			=> 'Define se os utilizadores têm acesso imediato ao Fórum ou se é necessária uma confirmação. Também pode desativar completamente novos registos. O <em>"Correio eletrónico do Fórum" tem que estar ativado para que a ativação seja feita pelo utilizador ou pelo administrador.</em>',
	'ACC_ACTIVATION_WARNING'			=> 'Por favor, note que o método de ativação selecionado atualmente exige a ativação do Correio eletrónico do Fórum, de outra forma os registos serão desativados. Recomendamos que selecione um método de ativação diferente ou ative o Correio eletrónico do Fórum.',
	'NEW_MEMBER_POST_LIMIT'				=> 'Limite das Mensagens dos Utilizadores Registados Recentemente',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'		=> 'Os novos utilizadores entram para o Grupo <em>Utilizadores Registados Recentemente</em> até atingirem este número de mensagens. Pode usar este Grupo para impedir que usem as mensagens privadas ou para rever as suas mensagens. <strong>0 para desativar.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'			=> 'Grupo de Utilizadores Registados Recentemente',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Se definido como Sim e especificado um limite de mensagens, o novo utilizador será colocado no Grupo <em>Utilizadores Registados Recentemente</em>, sendo esse o seu Grupo Padrão. Isso pode ser util se deseja atribuir um Grupo Padrão, Classificação e/ou Avatar a estes utilizadores.',

	'ACC_ADMIN'							=> 'Administrador',
	'ACC_DISABLE'						=> 'Desativar Registos',
	'ACC_NONE'							=> 'Nenhuma',
	'ACC_USER'							=> 'Utilizador',
//	'ACC_USER_ADMIN'					=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'					=> 'Ativar duplicação de emails',
	'ALLOW_EMAIL_REUSE_EXPLAIN'			=> 'O mesmo email pode ser usado no Registo de vários Utilizadores.',
	'COPPA'								=> 'COPPA',
	'COPPA_FAX'							=> 'Número de Fax do COPPA',
	'COPPA_MAIL'						=> 'Email do COPPA',
	'COPPA_MAIL_EXPLAIN'				=> 'Email para os Encarregados de Educação, enviarem a Autorização de Registo dos menores de 13 anos.',
	'ENABLE_COPPA'						=> 'Ativar COPPA',
	'ENABLE_COPPA_EXPLAIN'				=> 'Solicita ao Utilizador declaração de idade superior a 13 anos.',
	'MAX_CHARS'							=> 'Máximo',
	'MIN_CHARS'							=> 'Mínimo',
	'NO_AUTH_PLUGIN'					=> 'Nenhum Módulo de Segurança encontrado.',
	'PASSWORD_LENGTH'					=> 'Tamanho da Senha',
	'PASSWORD_LENGTH_EXPLAIN'			=> 'Número Mínimo e Máximo de caracteres das Senhas.',
	'REG_LIMIT'							=> 'Tentativas de Registo',
	'REG_LIMIT_EXPLAIN'         		=> 'Número de tentativas permitidas aos utilizadores antes da sessão ser bloqueada.',
	'USERNAME_ALPHA_ONLY'				=> 'Alfanumérico apenas',
	'USERNAME_ALPHA_SPACERS'			=> 'Alfanumérico e Espaços',
	'USERNAME_ASCII'					=> 'ASCII (Nenhum padrão de codificação unicode internacional)',
	'USERNAME_LETTER_NUM'				=> 'Qualquer letra ou número',
	'USERNAME_LETTER_NUM_SPACERS'		=> 'Qualquer letra, número, ou espaço',
	'USERNAME_CHARS'					=> 'Limite de caracteres para o nome do Utilizador',
	'USERNAME_CHARS_ANY'				=> 'Qualquer carácter',
	'USERNAME_CHARS_EXPLAIN'			=> 'Tipo restrito de caracteres aceites no nome do Utilizador; espaço, -, +, _, [ e ].',
	'USERNAME_LENGTH'					=> 'Tamanho do nome do Utilizador',
	'USERNAME_LENGTH_EXPLAIN'			=> 'Número Mínimo e Máximo de caracteres nos nomes dos Utilizadores.',
)); 

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Configurações Gerais de Feeds',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Este Módulo disponibiliza vários ATOM Feeds, qualquer BBCode utilizado em mensagens fá-los serem legíveis em qualquer feed externo.',

	'ACP_FEED_GENERAL'					=> 'Configurações Gerais de Feed',
	'ACP_FEED_POST_BASED'				=> 'Configurações dos Feeds baseadas nas mensagens',
	'ACP_FEED_TOPIC_BASED'				=> 'Configurações dos Feeds baseadas nos Tópicos',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Outros Feeds e configurações',

	'ACP_FEED_ENABLE'					=> 'Ativar Feeds',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Ligar ou desligar Atom Feeds em todo o Fórum.<br />Desativar as ligações de todos os Feeds, independentemente das opções configuradas em baixo.',
	'ACP_FEED_LIMIT'					=> 'Número de itens',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Número máximo de itens de Feed a mostrar.',
	
	'ACP_FEED_OVERALL'					=> 'Ativar Feeds em todo o Fórum',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Novas mensagens em todo o Fórum.',
	'ACP_FEED_FORUM'					=> 'Ativa os Feeds por Fórum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Fórum e Subfórum de novas mensagens.',
	'ACP_FEED_TOPIC'					=> 'Ativa os Feeds por Tópico',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Tópicos únicos de novas mensagens.',

	'ACP_FEED_TOPICS_NEW'				=> 'Ativar Feeds nos Tópicos novos',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Ativa Feeds nos "Tópicos Novos", exibindo os últimos Tópicos criados, incluindo a primeira mensagem.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Ativar Feeds nos Tópicos ativos',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Ativa Feeds nos "Tópicos ativos”, exibindo os últimos Tópicos ativos, incluindo as últimas mensagens.',
	'ACP_FEED_NEWS'						=> 'Notícias Feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Selecione a primeira mensagem destes Fóruns. Selecione nenhum Fórum para desativar o Feed de notícias.<br />Selecione múltiplos Fóruns clicando na tecla <samp>CTRL</samp> e clicando no Fórum.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Ativar Feed nos Fóruns',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Permite mostrar a lista de “Todos os Fóruns” com Feed.',

	'ACP_FEED_HTTP_AUTH'				=> 'Permitir Autenticação HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Permite aos utilizadores receber o conteúdo oculto para visitantes adicionando o parâmetro <samp>auth=http</samp> ao URL do feed. Note por favor que algumas configurações do PHP exigem mudanças adicionais no ficheiro .htacess. As instruções podem ser encontradas no ficheiro.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Item de estatísticas',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Exibe estatísticas individuais por baixo dos itens de feed<br />(Postado por, data e hora, respostas, visualizações)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Excluir Fóruns',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'O conteúdo destes <strong>não será incluído nos feeds</strong>. Não selecione nenhum Fórum, para puxar os dados de todos os Fóruns.<br />Selecione/Desmarque múltiplos Fóruns clicando <samp>CTRL</samp> e clicando.',
));

// Visual Confirmation Settings 
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Aqui pode selecionar e configurar plugins desenhados para bloquear registos automáticos de spambots. Estes plugins fazem um teste ao utilizador <em>(CAPTCHA)</em> de dificil resolução pelos computadores.',
	'ACP_VC_EXT_GET_MORE'					=> 'Para plugins adicionais (e possivelmente melhores) anti-spam, visite o <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a>. Para mais informações sobre a prevenção de spam no seu fórum, visite o <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Plugins disponíveis',
	'CAPTCHA_UNAVAILABLE'					=> 'O plugin não pode ser selecionado enquanto não preencher os requisitos necessários.',
	'CAPTCHA_GD'							=> 'Imagem GD',
	'CAPTCHA_GD_3D'							=> 'Imagem GD 3D',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Ruído em primeiro plano',
	'CAPTCHA_GD_EXPLAIN'					=> 'Use o GD para gerar uma imagem antispambot mais complexa.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'   => 'Use o ruído em primeiro plano para gerar uma imagem GD de mais difícil leitura.',
	'CAPTCHA_GD_X_GRID'						=> 'O ruído de fundo do eixo x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem mais complexa. 0 desativa o ruído de fundo no eixo X.',
	'CAPTCHA_GD_Y_GRID'						=> 'O ruído de fundo do eixo y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Utilize esta configuração para gerar uma imagem mais complexa. 0 desativa o ruído de fundo no eixo Y.',
	'CAPTCHA_GD_WAVE'						=> 'Onda de distorção',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Aplica uma onda para provocar distorção na imagem.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Adiciona ruído usando objetos 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Adiciona objetos à imagem, sobre as letras.',
	'CAPTCHA_GD_FONTS'						=> 'Usar fontes diferentes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Esta configuração controla quantas formas diferentes de letras são usadas. Só podem usar formatos padrão ou introduzir letras alteradas. Também é possível adicionar letras minúsculas.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Padrão',
	'CAPTCHA_FONT_NEW'						=> 'Novas formas',
	'CAPTCHA_FONT_LOWER'					=> 'Também usar minúsculas',
	'CAPTCHA_NO_GD'							=> 'Imagem simples',
	'CAPTCHA_PREVIEW_MSG'					=> 'As suas alterações não foram gravadas, isto é apenas uma previsão.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'O plugin será semelhante a esta imagem:',

	'CAPTCHA_SELECT'					=> 'Plugins instalados',
	'CAPTCHA_SELECT_EXPLAIN'			=> 'O menu mostra os plugins instalados. A cinzento estão os indisponíveis, porque precisam de configuração prévia.',
	'CAPTCHA_CONFIGURE'					=> 'Configurar plugins',
	'CAPTCHA_CONFIGURE_EXPLAIN'			=> 'Altere as definições do plugins selecionado.',
	'CONFIGURE'							=> 'Configuração',
	'CAPTCHA_NO_OPTIONS'				=> 'Este plugin não tem opções de configuração.',

	'VISUAL_CONFIRM_POST'				=> 'Confirmação visual de Mensagens dos Visitantes',
	'VISUAL_CONFIRM_POST_EXPLAIN'		=> 'Exige aos visitantes (anónimos) que introduzam um código aleatório para prevenir mensagens em massa.',
	'VISUAL_CONFIRM_REG'				=> 'Medidas antispambot no registo',
	'VISUAL_CONFIRM_REG_EXPLAIN'		=> 'Exige aos novos utilizadores uma tarefa antispambot para evitar registos automaticos.',
	'VISUAL_CONFIRM_REFRESH'			=> 'Permitir aos utilizadores atualizar a tarefa antispambot',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'	=> 'Permite que os utilizadores solicitem uma nova tarefa antispambot se forem incapazes de resolver a tarefa corrente durante o registo. Alguns plugins podem não suportar esta opção.',
));

// Cookie Settings 
$lang = array_merge($lang, array( 
	'ACP_COOKIE_SETTINGS_EXPLAIN'			=> 'Estas configurações definem os dados usados nos cookies enviados aos navegadores do Utilizadores. Na generalidade dos casos os valores abaixo são suficientes. Se os mudar faça-o com cuidado. Qualquer incorreção impede os Utilizadores de aceder ao Fórum.',

	'COOKIE_DOMAIN'							=> 'Domínio do Cookie',
	'COOKIE_NAME'							=> 'Nome do Cookie',
	'COOKIE_PATH'							=> 'Diretoria do Cookie',
	'COOKIE_SECURE'							=> 'Cookie seguro',
	'COOKIE_SECURE_EXPLAIN'					=> 'Se o Servidor funciona por SSL, mude para Ativado caso contrário, deixe-o Desativado. Estando Ativado sem funcionar por SSL poderá resultar em erros no Servidor durante os redirecionamentos.',
	'ONLINE_LENGTH'							=> 'Tempo limite para visualização online',
	'ONLINE_LENGTH_EXPLAIN'					=> 'Tempo em minutos após o qual o Utilizador inativo não aparecerá na lista de Utilizadores online. Quanto menor, menos processamento exige.',
	'SESSION_LENGTH'						=> 'Tempo da Sessão [ segundos ]',
	'SESSION_LENGTH_EXPLAIN'				=> 'A Sessão será encerrada após este tempo, em segundos.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'			=> 'Aqui pode ativar e desativar a página de contacto e adicionar o texto que será exibido.',

	'CONTACT_US_ENABLE'						=> 'Ativar página de contacto',
	'CONTACT_US_ENABLE_EXPLAIN'				=> 'Esta página permite aos utilizadores enviar emails para os administradores do fórum',

	'CONTACT_US_INFO'						=> 'Informação para contacto',
	'CONTACT_US_INFO_EXPLAIN'				=> 'A mensagem é mostrada na página de contacto',
	'CONTACT_US_INFO_PREVIEW'				=> 'Previsão da Página de Informações de contacto',
	'CONTACT_US_INFO_UPDATED'				=> 'A página das informações de contacto foi atualizada.',
));

// Load Settings
$lang = array_merge($lang, array( 
	'ACP_LOAD_SETTINGS_EXPLAIN'				=> 'Aqui pode ativar e desativar certas funções do Fórum que podem reduzir o total de processamento pedido. Para a maioria dos Servidores não é necessário desativar nenhuma função. No entanto, em certos sistemas ou em ambientes de hospedagem compartilhada pode ser benéfico se desativar alguns recursos que não sejam realmente necessário. Pode também especificar limites para a carga do sistema e ativar sessões, além das quais o Fórum sairá do ar.',

	'ALLOW_CDN'								=> 'Permitir o uso de redes de entrega de conteúdo de terceiros',
	'ALLOW_CDN_EXPLAIN'						=> 'Se esta configuração for ativada, alguns ficheiros podem ser colocados em servidores externos em vez do seu próprio servidor. Isso reduz o consumo de largura de banda no seu servidor, mas alguns administradores podem colocar questões de privacidade. Em instalações phpBB padrão inclui o carregamento do “jQuery” e da fonte “Open Sans” de rede de distribuição de conteúdo do Google.',
	'ALLOW_LIVE_SEARCHES'					=> 'Permitir pesquisas ativas',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'			=> 'Se esta configuração for ativada, serão sugeridas aos utilizadores palavras-chave, à medida que digitam em certos campos do fórum.',
	'CUSTOM_PROFILE_FIELDS'					=> 'Campos do Perfil Personalizados',
	'LIMIT_LOAD'							=> 'Limite de carga do Sistema',
	'LIMIT_LOAD_EXPLAIN'					=> 'Se, durante 1 minuto, a carga do Sistema ultrapassar este valor o Fórum fica fora de serviço. O valor 1 corresponde a aproximadamente 100% da capacidade dum Processador. Este sistema só funciona em Servidores UNIX e onde esta Mensagem é acessível. Este valor regressa a zero se o phpBB não atingir o limite de leitura.',
	'LIMIT_SESSIONS'						=> 'Limite de Sessões',
	'LIMIT_SESSIONS_EXPLAIN'				=> 'Se o número de sessões, durante 1 minuto, ultrapassar este valor o Fórum fica fora de serviço. (0 = ilimitadas).',
	'LOAD_CPF_MEMBERLIST'					=> 'Mostra os campos Personalizados na Lista dos Utilizadores',
	'LOAD_CPF_PM'							=> 'Mostra os campos Personalizados do seu perfil nas Mensagens Privadas',
	'LOAD_CPF_VIEWPROFILE'					=> 'Mostra os campos Personalizados no Perfil dos Utilizadores',
	'LOAD_CPF_VIEWTOPIC'					=> 'Mostra os campos Personalizados nos Tópicos',
	'LOAD_USER_ACTIVITY'					=> 'Mostra a atividade dos Utilizadores',
	'LOAD_USER_ACTIVITY_EXPLAIN'			=> 'Mostra o Fórum/Tópico ativo no Perfil do Utilizador e no Painel de Controle do Utilizador. Recomenda-se desativar em Fóruns com mais de um milhão de Mensagens.',
	'READ_NOTIFICATION_EXPIRE_DAYS'			=> 'Expiração da notificação de leitura',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Número de dias que irá decorrer antes que uma notificação de leitura seja automaticamente excluída. Defina o valor como 0 para fazer notificações permanentes.',
	'RECOMPILE_STYLES'						=> 'Recompilar os componentes de Estilo (Templates)',
	'RECOMPILE_STYLES_EXPLAIN'				=> 'Verificar por atualizações nos ficheiros de estilo no sistema de ficheiros e atualizar.',
	'YES_ANON_READ_MARKING'					=> 'Ativa marcação de Tópicos por convidados',
	'YES_ANON_READ_MARKING_EXPLAIN'			=> 'Armazena a marcação de lido/não lido para convidados. Se desativado, as Mensagens serão marcadas sempre como lidas pelos visitantes.',
	'YES_BIRTHDAYS'							=> 'Ativa a lista de aniversariantes',
	'YES_BIRTHDAYS_EXPLAIN'					=> 'Se desativar esta opção a lista de aniversariantes não será mostrada. Para que esta opção funcione a opção de ativar Aniversários também precisa estar ativada.',
	'YES_JUMPBOX'							=> 'Ativa a visualização de Jumpbox',
	'YES_MODERATORS'						=> 'Ativa a visualização de Moderadores',
	'YES_ONLINE'							=> 'Ativa lista de Utilizadores online',
	'YES_ONLINE_EXPLAIN'					=> 'Mostra informação de Utilizador online nas páginas de índice, Fóruns e Tópicos.',
	'YES_ONLINE_GUESTS'						=> 'Ativa lista de convidados on-line na visualização de quem está online',
	'YES_ONLINE_GUESTS_EXPLAIN'				=> 'Permitir visualização de informações de Utilizadores convidados na visualização de quem está online.',
	'YES_ONLINE_TRACK'						=> 'Ativa visualização da imagem do Utilizador online',
	'YES_ONLINE_TRACK_EXPLAIN'				=> 'Mostra informação online para Utilizadores em Perfil e Tópicos.',
	'YES_POST_MARKING'						=> 'Ativa Tópicos pontuados',
	'YES_POST_MARKING_EXPLAIN'				=> 'Indica se o Utilizador tem colocado Mensagens num Tópico.',
	'YES_READ_MARKING'						=> 'Ativa a marcação de Tópicos no Servidor',
	'YES_READ_MARKING_EXPLAIN'				=> 'Guarda a informação de lido/não lido na Base de Dados em vez de guardá-la em cookie.',
	'YES_UNREAD_SEARCH'						=> 'Ativar pesquisa de novas mensagens',
)); 

// Auth settings 
$lang = array_merge($lang, array( 
	'ACP_AUTH_SETTINGS_EXPLAIN'				=> 'O phpBB suporta Plug-ins ou Módulos que permitem definir o método de autenticação dos Utilizadores que entram no Fórum. São disponibilizados três plugins: DB, LDAP e Apache. Nem todos os Módulos necessitam de informação adicional. Preencha apenas os campos relevantes para o método selecionado.',

	'AUTH_METHOD'							=> 'Selecione um método de autenticação',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Tem de indicar a key e o secret de cada OAuth service provider ativado. É necessário apenas uma de cada OAuth service provider.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Cada provedor de OAuth requer um segredo único e fundamental para se autenticar com o servidor externo. Este deve ser fornecido pelo serviço OAuth quando regista o seu site e deve ser inserido exatamente como fornecido.<br />Os serviços que não tenham uma chave e um segredo aqui inseridos não estarão disponíveis para serem usados pelos utilizadores do fórum. Tenha em atenção que o utilizador pode ainda registar-se e ligar-se usando a DB authentication plug-in.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'				=> 'Tem que configurar a autenticação no Apache antes de mudar para este método de autenticação. Certifique-se de que o nome do Utilizador usado para a autenticação Apache seja a mesma que o seu nome de Utilizador no phpBB. A autenticação Apache apenas pode ser utilizada com o mod_php (com uma versão CGI não funciona) e o safe_mode desativados.',

	'LDAP'									=> 'LDAP',
	'LDAP_DN'								=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'						=> 'Este é o Nome Distinto (dn), determinando a informação do Utilizador, Exemplo: o=Minha Companhia, c=EU.',
	'LDAP_EMAIL'							=> 'Atributo do email LDAP',
	'LDAP_EMAIL_EXPLAIN'					=> 'Atribui automaticamente ao nome de seu atributo de entrada de email do Utilizador (se existir um) o email ao novo Utilizador. Se deixar em branco, resulta num endereço de email vazio para os Utilizadores que entrem pela primeira vez ao Fórum.',
	'LDAP_INCORRECT_USER_PASSWORD'			=> 'As ligações para o Servidor LDAP falharam com nome de Utilizador e senha indicados.',
	'LDAP_NO_EMAIL'							=> 'O Atributo de email especificado não existe.',
	'LDAP_NO_IDENTITY'						=> 'Não foi possível encontrar uma identificação de Acesso para %s.',
	'LDAP_PASSWORD'							=> 'Senha LDAP',
	'LDAP_PASSWORD_EXPLAIN'					=> 'Deixe este campo em branco para acesso anónimo. Caso contrário preencha com a senha do Utilizador indicado. Necessário para Active Directory Servers.<br /><em><strong>Aviso:</strong> Esta senha será armazenada como texto simples na Base de Dados, visível a todos que podem aceder à Base de Dados ou a quem pode ver esta página de configuração.</em>',
	'LDAP_PORT'								=> 'Porta LDAP do Servidor',
	'LDAP_PORT_EXPLAIN'						=> 'Opcionalmente pode definir uma porta para o Servidor LDAP que tem como padrão a porta 389.',
	'LDAP_SERVER'							=> 'Nome do Servidor de LDAP',
	'LDAP_SERVER_EXPLAIN'					=> 'Se usando LDAP este é o nome ou IP do Servidor.',
	'LDAP_UID'								=> 'LDAP uid',
	'LDAP_UID_EXPLAIN'						=> 'Esta é a chave pela qual procurar para uma dada identificação de Utilizador. Igual a: uid, sn, etc.',
	'LDAP_USER'								=> 'Nome de Utilizador LDAP',
	'LDAP_USER_EXPLAIN'						=> 'Deixe em branco para acesso anónimo. Se preenchido o phpBB irá ligar ao Servidor LDAP com o nome de Utilizador indicado.',
	'LDAP_USER_FILTER'						=> 'Filtro do Utilizador LDAP',
	'LDAP_USER_FILTER_EXPLAIN'				=> 'Pode optar por aumentar o limite de objetos pesquisados com filtros adicionais. Por exemplo, <samp>objectClass=posixGroup</samp> deve resultar na utilização de <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>.',
)); 

// Server Settings 
$lang = array_merge($lang, array( 
	'ACP_SERVER_SETTINGS_EXPLAIN'			=> 'Aqui são definidas as configurações dos Servidores e Domínios. Certifique-se de que os dados estão correto. Eventuais erros resultarão em emails contendo informações incorretas. Quando introduzir o domínio, inclua o http:// ou outro protocolo. Altere apenas o número da Porta do Servidor se souber que seu Servidor usa um valor diferente, a Porta 80 é usada na maioria dos casos.',

	'ENABLE_GZIP'							=> 'Ativa Compressão GZip',
	'ENABLE_GZIP_EXPLAIN'					=> 'Conteúdo gerado será comprimido antes de enviado ao utilizador. Isto pode reduzir o tráfego na rede, mas irá aumentar o uso do CPU no servidor e cliente. Requer a utilização da extensão PHP zlib.',
	'FORCE_SERVER_VARS'						=> 'Forçar configurações da URL do Servidor',
	'FORCE_SERVER_VARS_EXPLAIN'				=> 'Se selecionar Sim serão usadas as configurações aqui definidas em alternativa aos valores definidos automaticamente.',
	'ICONS_PATH'							=> 'Diretoria para Ficheiro de Ícones',
	'ICONS_PATH_EXPLAIN'					=> 'Diretoria sob o diretoria raiz do phpBB. Exemplo: images/ícons.',
	'MOD_REWRITE_ENABLE'					=> 'Ativar URL Rewriting',
	'MOD_REWRITE_ENABLE_EXPLAIN' 			=> 'Quando ativado, as URLs que contenham ’app.php’ serão reescritas para remover o nome do ficheiro (ou seja, app.php/foo transforma-se em /foo). <strong>O mod_rewrite tem que estar ativado no Servidor Apache. Ativando esta opção sem o mod_rewrite, poderá comprometer o funcionamento do seu Fórum.</strong>',
	'MOD_REWRITE_DISABLED'					=> 'O módulo <strong>mod_rewrite</strong> está desativado no seu servidor web Apache. Ative o módulo ou entre em conctato com seu serviço de hospedagem web, para ativar este recurso.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' 	=> 'É impossível determinar se este servidor suporta regravação de URL. A configuração pode estar ativada, mas se a regravação não estiver disponível os caminhos gerados por este fórum (para uso em links) podem não funcionar. Contacte o seu fornecedor de hospedagem web, se não tiver a certeza se pode ou não ativar com segurança este recurso.',
	'PATH_SETTINGS'							=> 'Configurações de Pastas',
	'RANKS_PATH'							=> 'Diretoria para Ficheiro de Imagens de Classificação',
	'RANKS_PATH_EXPLAIN'					=> 'Diretoria sob a diretoria raiz do phpBB. Exemplo:  images/ranks.',
	'SCRIPT_PATH'							=> 'Diretoria do script',
	'SCRIPT_PATH_EXPLAIN'					=> 'Diretoria onde o phpBB está instalado com relação ao Domínio. Exemplo: phpBB3.',
	'SERVER_NAME'							=> 'Nome do Domínio',
	'SERVER_NAME_EXPLAIN'					=> 'O nome do Domínio que executa o Fórum. Exemplo: www.exemplo.com.',
	'SERVER_PORT'							=> 'Porta do Servidor',
	'SERVER_PORT_EXPLAIN'					=> 'A Porta usada pelo Servidor, normalmente a 80. Altere apenas se for diferente.',
	'SERVER_PROTOCOL'						=> 'Protocolo do Servidor',
	'SERVER_PROTOCOL_EXPLAIN'				=> 'Será usado como o protocolo do servidor se essa configuração for forçada. Se vazio ou não forçado, o protocolo é determinado pela configuração de segurança do cookie http:// ou https://.',
	'SERVER_URL_SETTINGS'					=> 'Configurações da URL do Servidor',
	'SMILIES_PATH'							=> 'Diretoria de Ficheiro de Emoções',
	'SMILIES_PATH_EXPLAIN'					=> 'Diretoria sob a diretoria raiz do phpBB. Exemplo: images/smilies.',
	'UPLOAD_ICONS_PATH'						=> 'Diretoria de Ficheiro de Ícones de Grupos de Extensões',
	'UPLOAD_ICONS_PATH_EXPLAIN'				=> 'Diretoria sob a diretoria raiz do phpBB. Exemplo: images/upload_icons.',
	'USE_SYSTEM_CRON'						=> 'Executar tarefas periódicas do sistema cron',
	'USE_SYSTEM_CRON_EXPLAIN'				=> 'Quando desligado, o phpBB organizará as tarefas periódicas para serem executadas automaticamente. Quando ligado, o phpBB não organizará as tarefas periódicas, por si só, um administrador do sistema deve executar o <code>bin/phpbbcli.php cron:run</code> para ser executado pelo sistema cron a intervalos regulares(por exemplo, a cada 5 minutos).',
)); 

// Security Settings 
$lang = array_merge($lang, array( 
	'ACP_SECURITY_SETTINGS_EXPLAIN'			=> 'Aqui configura as opções relacionadas as Sessões e Acesso.',

	'ALL'									=> 'Todos',
	'ALLOW_AUTOLOGIN'						=> 'Permitir "Lembrar os meus acessos"',
	'ALLOW_AUTOLOGIN_EXPLAIN'				=> 'Determina se os utilizadores têm a opção "Lembrar os meus acessos" quando regressam ao Fórum.',
	'ALLOW_PASSWORD_RESET'					=> 'Permitir redefinição de senha ("Esqueci-me da senha")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'			=> 'Determina se os utilizadores podem usar a opção "Esqueci-me da senha" na página de acesso para recuperar sua conta. Se usar um mecanismo de autenticação externo poderá desativar este recurso.',
	'AUTOLOGIN_LENGTH'						=> 'Duração em dias da chave "Lembrar os meus acessos"',
	'AUTOLOGIN_LENGTH_EXPLAIN'				=> 'Duração da chave "Esqueci-me da senha" em dias. 0 para desativar.',
	'BROWSER_VALID'							=> 'Validação do navegador',
	'BROWSER_VALID_EXPLAIN'					=> 'Ativa a validação do navegador em cada sessão, aumentando a segurança.',
	'CHECK_DNSBL'							=> 'Verifica se o IP está na lista de DNS bloquados',
	'CHECK_DNSBL_EXPLAIN'					=> 'Se ativado, os endereços IP dos Utilizadores são verificados nos serviços DNSBL quando forem enviadas Mensagens ou criadas Contas de Utilizador: <a href="http://spamcop.net">spamcop.net</a> e <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Essa operação pode tornar-se demorada, dependendo da configuração do Servidor. Nesse caso, ou se acusar falsamente endereços de IP, desative esta opção.',
	'CLASS_B'								=> 'A.B',
	'CLASS_C'								=> 'A.B.C',
	'EMAIL_CHECK_MX'						=> 'Verificar se o Domínio é um registo MX válido',
	'EMAIL_CHECK_MX_EXPLAIN'				=> 'Se ativado, o Domínio do email, quando indicado nos Registos ou alterações de Perfil será verficado nos Registos MX.',
	'FORCE_PASS_CHANGE'						=> 'Força a mudança de Senha',
	'FORCE_PASS_CHANGE_EXPLAIN'				=> 'Duração em dias da Senha de acesso ao Fórum. Após este prazo é pedido ao Utilizador que altere a sua Senha. 0 para desativar.',
	'FORM_TIME_MAX'							=> 'Tempo máximo para enviar formas',
	'FORM_TIME_MAX_EXPLAIN'					=> 'Tempo máximo para enviar formas. Use -1 para desativar. Note que uma forma pode vir a ser inválida se a sessão expirar.',
	'FORM_SID_GUESTS'						=> 'Formas de laço para Sessões de Visitantes',
	'FORM_SID_GUESTS_EXPLAIN'				=> 'Se ativado, o símbolo do formulário emitido aos visitantes será de sessão exclusiva, podendo causar problemas com alguns ISPs.',
	'FORWARDED_FOR_VALID'					=> 'Cabeçalho <var>X_FORWARDED_FOR</var> validado',
	'FORWARDED_FOR_VALID_EXPLAIN'			=> 'As Sessões só continuarão se o cabeçalho <var>X_FORWARDED_FOR</var> enviado for igual ao enviado na última visita. Serão expulsos os IPs que contiverem o mesmo cabeçalho <var>X_FORWARDED_FOR</var> validado.',
	'IP_VALID'								=> 'Verificação do IP da Sessão',
	'IP_VALID_EXPLAIN'						=> 'Determina como é autenticado o IP do Utilizador. Todos compara o endereço completo. A.B.C os primeiros x.x.x. A.B os primeiros x.x. Nenhum desativa a verificação. Em endereços IPv6: A.B.C compara os primeiros quatro blocos. A.B os primeiros 3 blocos.',
	'IP_LOGIN_LIMIT_MAX'					=> 'Número máximo de tentativas de acesso por endereço IP',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'			=> 'Limite de tentativas de acesso permitido, a partir de um único endereço IP, antes da tarefa antispambot ser acionada. Digite 0 para impedir que a tarefa antispambot de ser desencadeada por endereços IP.',
	'IP_LOGIN_LIMIT_TIME'					=> 'Tempo de duração para tentativas de acesso por endereço IP',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'			=> 'A permissão para tentar o acesso termina após este período.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'			=> 'Tentativas de acesso limitadas a valores <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Em vez de limitar as tentativas de acesso pelo endereço IP, são limitadas por valores <var>X_FORWARDED_FOR</var>. <br /><em><strong>Aviso:</strong> Só ative esta opção se o servidor proxy fornecer valores <var>X_FORWARDED_FOR</var> confiáveis.</em>',
	'MAX_LOGIN_ATTEMPTS'					=> 'Número máximo de tentativas de acesso',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'			=> 'Após este número de acessos inválidos, o Utilizador terá que fazer a tarefa antispambot. Digite 0 para impedir que a tarefa antispambot seja acionada para contas de utilizador distintas.',
	'NO_IP_VALIDATION'						=> 'Nenhum',
	'NO_REF_VALIDATION'						=> 'Nenhum',
	'PASSWORD_TYPE'							=> 'Complexidade da Senha',
	'PASSWORD_TYPE_EXPLAIN'					=> 'Define a complexidade da Senha quando criada ou alterada.',
	'PASS_TYPE_ALPHA'						=> 'Deve incluir Letras e Números',
	'PASS_TYPE_ANY'							=> 'Não definida',
	'PASS_TYPE_CASE'						=> 'Deve incluir maiúsculas e minúsculas',
	'PASS_TYPE_SYMBOL'						=> 'Deve incluir símbolos',
	'REF_HOST'								=> 'Apenas hosts válidos',
	'REF_PATH'								=> 'Também validar pasta',
	'REFERRER_VALID'						=> 'Validar Referência',
	'REFERRER_VALID_EXPLAIN'				=> 'Se ativado, a referência do POST vai verificar o local onde se encontra o Fórum no servidor. Isto pode causar problemas em Fóruns que usem muitos domínios ou acessos externos.',
	'TPL_ALLOW_PHP'							=> 'Permitir php nos Modelos (Templates)',
	'TPL_ALLOW_PHP_EXPLAIN'					=> 'Se ativado, os comandos PHP e INCLUDEPHP serão reconhecidos e inseridos nos Templates.',
)); 

// Email Settings 
$lang = array_merge($lang, array( 
	'ACP_EMAIL_SETTINGS_EXPLAIN'			=> 'Esta informação é usada quando o Fórum envia emails aos Utilizadores. Certifique-se que usa um email válido. Qualquer Mensagem incorreta não será entregue neste endereço. Se o seu serviço de hospedagem não oferece um serviço nativo de email baseado no PHP, pode enviar mensagens através de SMTP. É necessário um Servidor adequado, não especifique qualquer nome antigo aqui! Se o servidor requer autenticação, introduza os nomes e senhas necessários. tenha em atenção que apenas é usada a autenticação básica. Implementações de autenticações diferentes não estão disponíveis.',

	'ADMIN_EMAIL'							=> 'Endereço de Email de resposta',
	'ADMIN_EMAIL_EXPLAIN'					=> 'Será utilizado como endereço de resposta em todas as Mensagens. Este é o email padrão do Fórum para contacto e envio de emails pelo sistema phpBB.',
	'BOARD_EMAIL_FORM'						=> 'Envio de emails de Utilizadores via Fórum',
	'BOARD_EMAIL_FORM_EXPLAIN'				=> 'Permite aos Utilizadores do Fórum enviarem correio eletrónico.',
	'BOARD_HIDE_EMAILS'						=> 'Ocultar os endereços de email',
	'BOARD_HIDE_EMAILS_EXPLAIN'				=> 'Esta função esconde os endereços de email.',
	'CONTACT_EMAIL'							=> 'Endereço email de contacto',
	'CONTACT_EMAIL_EXPLAIN'					=> 'Este endereço será usado sempre que é necessário um contacto específico, (spam, erro de saída, etc). Pode ser sempre utilizado como endereço para envio e respostas nos emails.',
	'CONTACT_EMAIL_NAME'					=> 'Nome de Contacto',
	'CONTACT_EMAIL_NAME_EXPLAIN'			=> 'Este é o nome do conctato que os destinatários dos mails vão ver. Se não quer ter um nome de contacto, deixe este campo em branco.',
	'EMAIL_FUNCTION_NAME'					=> 'Nome da Função de email',
	'EMAIL_FUNCTION_NAME_EXPLAIN'			=> 'Função de email usada para enviar emails através do PHP.',
	'EMAIL_PACKAGE_SIZE'					=> 'Tamanho do Pacote de email',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'			=> 'Número de emails enviados por pacote.',
	'EMAIL_SIG'								=> 'Assinatura de Email',
	'EMAIL_SIG_EXPLAIN'						=> 'Este texto será anexado a todos os emails que o Fórum enviar.',
	'ENABLE_EMAIL'							=> 'Correio eletrónico do Fórum',
	'ENABLE_EMAIL_EXPLAIN'					=> 'Se estiver definido como desativado não poderá ser enviado correio eletrónico através do Fórum. <em>Note que a ativação e configuração de contas requer que esta função esteja ativada. Se atualmente usa a ativação pelo “Utilizador” ou “Administrador”, desativar esta função, significa desativar os registos.</em>',
	'SMTP_AUTH_METHOD'						=> 'Método de Autenticação para o SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'				=> 'Apenas usado se um Nome/Senha é atribuído, pergunte ao seu ISP se não sabe que método usa.',
	'SMTP_CRAM_MD5'							=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'						=> 'DIGEST-MD5',
	'SMTP_LOGIN'							=> 'ENTRAR',
	'SMTP_PASSWORD'							=> 'Senha do SMTP',
	'SMTP_PASSWORD_EXPLAIN'					=> 'Só introduza a Senha se o Servidor de SMTP a pedir.<br /><em><strong>Aviso:</strong> Esta senha será armazenada como texto simples na Base de Dados, visível a todos que podem aceder à Base de Dados ou a quem pode ver esta página de configuração.</em>',
	'SMTP_PLAIN'							=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'					=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'								=> 'Porta do Servidor de SMTP',
	'SMTP_PORT_EXPLAIN'						=> 'Mude apenas se tiver a certeza de que seu Servidor de SMTP está numa porta diferente.',
	'SMTP_SERVER'							=> 'Endereço do Servidor de SMTP',
	'SMTP_SETTINGS'							=> 'Configurações do SMTP',
	'SMTP_USERNAME'							=> 'Nome de Utilizador SMTP',
	'SMTP_USERNAME_EXPLAIN'					=> 'Só introduza um Nome se o Servidor de SMTP o pedir.',
	'USE_SMTP'								=> 'Usar um Servidor de SMTP para enviar emails',
	'USE_SMTP_EXPLAIN'						=> 'Marque “Sim” se quer ou tem que enviar os emails recorrendo a um Servidor SMTP em vez da função de email do Servidor.',
)); 

// Jabber settings 
$lang = array_merge($lang, array( 
	'ACP_JABBER_SETTINGS_EXPLAIN'			=> 'Aqui pode ativar e controlar o uso do Jabber para Mensagens Instantâneas e Notícias. Jabber é um Protocolo código-aberto e por isso mesmo disponível a qualquer pessoa interessada. Alguns Servidores de Jabber incluem Gateways e transportes que permitem que contate Utilizadores em outras redes. Nem todos os servidores oferecem todos os transportes, e mudanças nos protocolos podem evitar operações de transportes. Note que pode levar muitos segundos até à atualização dos detalhes da conta de Jabber, então não interrompa a execução dos procedimentos enquanto não estiver completo!',

	'JAB_ENABLE'							=> 'Ativa Jabber',
	'JAB_ENABLE_EXPLAIN'					=> 'Ativar o uso de Mensagens e Avisos Jabber.',
	'JAB_GTALK_NOTE'						=> 'Por favor, note que o GTalk não irá funcionar porque a função <samp>dns_get_record</samp> não pôde ser encontrada. Esta função não se encontra disponível no PHP4, e não é implementada nas plataformas do windows. Isto não é executável atualmente em sistemas BSD-based, incluindo o Mac OS.',
	'JAB_PACKAGE_SIZE'						=> 'Tamanho do pacote de Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'				=> 'Este é o número de Mensagens enviadas num pacote. Se for 0, a Mensagem será enviada imediatamente e não será colocada em fila de espera para posterior envio.',
	'JAB_PASSWORD'							=> 'Senha Jabber',
	'JAB_PASSWORD_EXPLAIN'					=> '<em><strong>Aviso:</strong> Esta senha será armazenada como texto simples na Base de Dados, visível a todos que podem aceder à Base de Dados ou a quem pode ver esta página de configuração.</em>',
	'JAB_PORT'								=> 'Porta do Jabber',
	'JAB_PORT_EXPLAIN'						=> 'Deixe em branco se souber que não é 5222.',
	'JAB_SERVER'							=> 'Servidor Jabber',
	'JAB_SERVER_EXPLAIN'					=> 'Veja a lista de Servidores em %sjabber.org%s.',
	'JAB_SETTINGS_CHANGED'					=> 'Configurações do Jabber alteradas com sucesso.',
	'JAB_USE_SSL'							=> 'Usar SSL para se ligar',
	'JAB_USE_SSL_EXPLAIN'					=> 'Se ativado, uma ligação segura tentará ser estabilizada. A porta Jabber será alterada para 5223 se a porta 5222 tiver sido indicado.',
	'JAB_USERNAME'							=> 'Utilizador Jabber',
	'JAB_USERNAME_EXPLAIN'					=> 'Se não estiver registado será criado se possível.',
));
