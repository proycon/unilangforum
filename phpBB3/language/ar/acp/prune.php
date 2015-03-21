<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @translated 2014 phpBBArabia.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'هنا تستطيع حذف الأعضاء من منتداك أو تعطيلهم. يمكنك فعل هذا بطرق عديدة، عن طريق عدد المشاركات أو آخر نشاط وغيرها. كل هذه المعايير يمكن الجمع بينها، مثال: تستطيع تهذيب الأعضاء الذين كانت آخر مشاركة لهم قبل 01-01-2002 ومشاركاتهم أقل من 10 مشاركات. كبديل تستطيع إدخال قائمة من الأعضاء مباشرة إلى صندوق النص، حيث ستـُـتجاهل أي معايير أدخِلَت. كن حذراً عند استخدام هذه الخاصية! فبمجرد حذف العضو لن تكون هناك طريقة لاسترجاعه',

	'CRITERIA'				=> 'المعايير',

	'DEACTIVATE_DELETE'			=> 'تعطيل أو حذف',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'اختر إذا كنت تريد حذف الأعضاء أو تعطيل حساباتهم فقط، تذكر أنه لا يمكن التراجع عن هذه العملية !',
	'DELETE_USERS'				=> 'حذف',
	'DELETE_USER_POSTS'			=> 'حذف مشاركات الأعضاء المحذوفين',
	'DELETE_USER_POSTS_EXPLAIN' => 'حذف المشاركات المكتوبة بواسطة الأعضاء المحذوفين، لا يوجد أي تأثير على الأعضاء المعطلة حساباتهم',

	'JOINED_EXPLAIN'			=> 'أدخل التاريخ على شكل <kbd>YYYY-MM-DD</kbd> ',

	'LAST_ACTIVE_EXPLAIN'		=> 'أدخل التاريخ على شكل <kbd>YYYY-MM-DD</kbd>. أدخل <kbd>0000-00-00</kbd> لحذف الأعضاء الذين لم يسجلوا الدخول مطلقاً. <em>ما قبل</em> و<em>بعد</em>الشروط ستـُـتجاهل',

	'POSTS_ON_QUEUE'			=> 'مشاركات تنتظر الموافقة',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'حصره على المستخدمين في المجموعة المحددة.',
	'PRUNE_USERS_GROUP_NONE'	=> 'كل المجموعات',
	'PRUNE_USERS_LIST'				=> 'الأعضاء الذين سيهذبون',
	'PRUNE_USERS_LIST_DELETE'		=> 'باستعمال المعايير المحددة لتهذيب الأعضاء ستحذف الحسابات الآتية',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'باستعمال المعايير المحددة لتهذيب الأعضاء ستعطل الحسابات الآتية',

	'SELECT_USERS_EXPLAIN'		=> 'ادخِل أسماء المستخدمين هنا، سيستـَخدمون بدلاً من المعايير أعلاه. لا يمكن حذف الإداريين.',

	'USER_DEACTIVATE_SUCCESS'	=> 'تعطل الأعضاء المحددون بنجاح',
	'USER_DELETE_SUCCESS'		=> 'حذِف الأعضاء المحددون بنجاح',
	'USER_PRUNE_FAILURE'		=> 'لا يوجد أعضاء يطابقون المعايير المدخلة',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'التاريخ الذي أدخلته خاطئ، ينبغي أن يكون على شكل <kbd>YYYY-MM-DD</kbd>',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'هذه ستحذف أي موضوع لم يشارَك فيه أو يشاهَد بدءاً من عدد الأيام التي ستحددها إذا لم تدخِل أي رقم فستحذف المواضيع كلها. افتراضياً لن تحذف مواضيع الاستفتاءات التي ما زالت نشطة، ولن تحذف المواضيع المثبتة والإعلانات',

	'FORUM_PRUNE'		=> 'تهذيب المنتدى',

	'NO_PRUNE'			=> 'لم تهذب المنتديات',

	'SELECTED_FORUM'	=> 'المنتدى المحدد',
	'SELECTED_FORUMS'	=> 'المنتديات المحددة',

	'POSTS_PRUNED'					=> 'المشاركات المهذبة',
	'PRUNE_ANNOUNCEMENTS'			=> 'تهذيب الإعلانات',
	'PRUNE_FINISHED_POLLS'			=> 'تهذيب مواضيع الاستفتاءات المغلقة',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'تهذيب مواضيع الاستفتاءات المنتهية',
	'PRUNE_FORUM_CONFIRM'			=> 'هل أنت متأكد من أنك تريد تهذيب المنتديات المحددة باستخدام هذه المعايير؟ بمجرد حذفها، لن تكون هناك طريقة لاستعادة المواضيع والمشاركات التي تهذبت',
	'PRUNE_NOT_POSTED'				=> 'الأيام منذ آخر مشاركة',
	'PRUNE_NOT_VIEWED'				=> 'الأيام منذ آخر مشاهدة',
	'PRUNE_OLD_POLLS'				=> 'تهذيب الاستفتاءات القديمة',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'تهذيب مواضيع الاستفتاء التي لم يصوّت عليها بعد مرور الأيام المسموح بها',
	'PRUNE_STICKY'					=> 'تهذيب المواضيع المثبتة',
	'PRUNE_SUCCESS'					=> 'تهذبت المنتديات بنجاح',

	'TOPICS_PRUNED'		=> 'المواضيع المهذبة',
));
