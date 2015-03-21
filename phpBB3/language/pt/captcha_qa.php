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
    'CAPTCHA_QA'				=> 'Q&amp;A',
    'CONFIRM_QUESTION_EXPLAIN'	=> 'Esta pergunta destina-se a prevenir registos automáticos de spambots.',
    'CONFIRM_QUESTION_WRONG'	=> 'A sua resposta à questão está errada.',

	'QUESTION_ANSWERS'			=> 'Respostas',
	'ANSWERS_EXPLAIN'			=> 'Introduza respostas corretas, uma por linha.',
	'CONFIRM_QUESTION'			=> 'Pergunta',

	'ANSWER'					=> 'Resposta',
	'EDIT_QUESTION'				=> 'Editar Pergunta',
	'QUESTIONS'					=> 'Perguntas',
    'QUESTIONS_EXPLAIN'			=> 'Para cada submissão ao formulário, onde ativou o plugin Q&amp;A, será feita uma das perguntas aqui definidas. Para usar este plugin deve definir pelo menos uma pergunta no idioma padrão. As perguntas devem ser de fácil resposta para o seu público alvo, mas sem excederem a capacidade de pesquisa do spambot no Google™. Serão obtidos melhores resultados se usar uma grande quantidade de perguntas e as alterar com regularidade. Ative a confirmação rigorosa se a sua pergunta se baseia em maiúsculas e minúsculas, pontuação ou espaços em branco.',
    'QUESTION_DELETED'			=> 'Pergunta excluída',
    'QUESTION_LANG'				=> 'Idioma',
    'QUESTION_LANG_EXPLAIN'		=> 'O idioma desta questão e das respostas é escrito em.',
    'QUESTION_STRICT'			=> 'Seleção rigorosa',
    'QUESTION_STRICT_EXPLAIN'	=> 'Ativar imposição de maiúsculas e minúsculas, pontuação e espaços em branco.',

    'QUESTION_TEXT'				=> 'Pergunta',
    'QUESTION_TEXT_EXPLAIN'		=> 'A pergunta feita ao utilizador.',

	'QA_ERROR_MSG'				=> 'Preencha todos os campos e pelo menos uma resposta.',
	'QA_LAST_QUESTION'			=> 'Não pode apagar todas as perguntas, enquanto o plugin estiver ativo.',
));
