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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Тут ви можете встановлювати основні налаштування для вкладень та пов\'язаних з ними особливих категорій.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Тут ви можете додавати, видаляти, змінювати або вимикати групи розширень. Також призначати їм особливих категорії, змінювати механізм завантаження і встановлювати значок, який буде відображатись перед приєднанням відповідної групи.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Тут ви можете керувати розширеннями файлів. Для активації розширень перейдіть в панель керування групами розширень. Ми наполегливо рекомендуємо не дозволяти потенційно небезпечні розширення (таких як <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, і т.д.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Тут ви можете побачити загублені файли. Це трапляється в основному тоді, коли користувачі приєднують файли, але не розміщують повідомлення. Ви можете видалити ці файли або приєднати їх до існуючих повідомлень. При приєднанні до повідомлень вимагається вказання вами ID повідомлення. Це приєднає вже завантажений файл до вказаного вами повідомлення.',
	'ADD_EXTENSION'						=> 'Додати розширення',
	'ADD_EXTENSION_GROUP'				=> 'Додати групу розширень',
	'ADMIN_UPLOAD_ERROR'				=> 'Виникла помилка під час приєднання файлу: “%s”.',
	'ALLOWED_FORUMS'					=> 'Дозволені форуми',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Можливість розміщувати призначені розширення в обраних (або усіх при їхньому виборі) форумах.',
	'ALLOWED_IN_PM_POST'				=> 'Дозволено',
	'ALLOW_ATTACHMENTS'					=> 'Дозволити вкладення',
	'ALLOW_ALL_FORUMS'					=> 'Дозволено усі форуми',
	'ALLOW_IN_PM'						=> 'Дозволено в приватних повідомленнях',
	'ALLOW_PM_ATTACHMENTS'				=> 'Дозволити вкладення в приватних повідомленнях',
	'ALLOW_SELECTED_FORUMS'				=> 'Лише форуми, обрані нижче',
	'ASSIGNED_EXTENSIONS'				=> 'Призначені розширення',
	'ASSIGNED_GROUP'					=> 'Група призначених розширень',
	'ATTACH_EXTENSIONS_URL'				=> 'Розширення',
	'ATTACH_EXT_GROUPS_URL'				=> 'Групи розширень',
	'ATTACH_ID'							=> 'ID повідомлення',
	'ATTACH_MAX_FILESIZE'				=> 'Максимальний розмір файлу',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Максимальний розмір кожного файлу. Якщо встановлено значення 0, максимальний розмір файлу, який може бути завантажено, обмежується лише вашою конфігурацією PHP.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Максимальний розмір файлу в приватних повідомленнях',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Максимальний розмір кожного файлу, приєднаного до приватного повідомлення. Для необмеженого встановіть значення 0.',
	'ATTACH_ORPHAN_URL'					=> 'Загублені файли',
	'ATTACH_POST_ID'					=> 'ID повідомлення',
	'ATTACH_POST_TYPE'					=> 'Тип повідомлення',
	'ATTACH_QUOTA'						=> 'Загальна квота вкладень',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Максимальний дисковий простір, доступний для усіх вкладень на форумі. Для необмеженого встановіть значення 0.',
	'ATTACH_TO_POST'					=> 'Приєднати файл до повідомлення',

	'CAT_FLASH_FILES'			=> 'Файли Flash',
	'CAT_IMAGES'				=> 'Зображення',
	'CAT_QUICKTIME_FILES'		=> 'Медіа-файли Quicktime',
	'CAT_RM_FILES'				=> 'Медіа-файли RealMedia',
	'CAT_WM_FILES'				=> 'Медіа-файли Windows Media',
	'CHECK_CONTENT'            => 'Перевірити файли вкладень',
	'CHECK_CONTENT_EXPLAIN'      => 'Деякі браузери можуть бути введеними в оману при визначенні типу mime файлів, які завантажуються на сервер. Ця опція дозволяє запобігти завантаженню таких вкладень.',
	'CREATE_GROUP'				=> 'Створити нову групу',
	'CREATE_THUMBNAIL'			=> 'Створювати мініатюри',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Створювати мініатюри в усіх можливих варіантах.',

	'DEFINE_ALLOWED_IPS'			=> 'Дозволені IP/хости',
	'DEFINE_DISALLOWED_IPS'			=> 'Заборонені IP/хости',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Для задання декількох різних IP-адрес або хостів вводьте кожен з нового рядка. Для задання діапазону IP-адрес розділяйте початок та кінець дефісом (-), для маски використовуйте “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Ви можете видаляти (or un-exclude) декілька IP-адрес відразу, використовуючи відповідну комбінацію миші та клавіатури для вашого комп\'ютера та браузера. Виключені IP-адреси мають синій фон.',
	'DISPLAY_INLINED'				=> 'Відображати зображення в повідомленнях',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Якщо встановлено Ні, приєднані зображення будуть відображатись як посилання.',
	'DISPLAY_ORDER'					=> 'Порядок відображення приєднань',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Відображати приєднання за часом розміщення.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Редагувати групу розширень',
	'EXCLUDE_ENTERED_IP'			=> 'Увімкніть це для виключення введених IP/хостів.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Виключити IP-адресу з дозволених IP/хостів',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Виключити IP-адресу з заборонених IP/хостів',
	'EXTENSIONS_UPDATED'			=> 'Розширення успішно оновлено.',
	'EXTENSION_EXIST'				=> 'Розширення %s вже існує.',
	'EXTENSION_GROUP'				=> 'Група розширень',
	'EXTENSION_GROUPS'				=> 'Групи розширень',
	'EXTENSION_GROUP_DELETED'		=> 'Групу розширень успішно видалено.',
	'EXTENSION_GROUP_EXIST'			=> 'Група розширень %s вже існує.',
	'EXT_GROUP_ARCHIVES'         => 'Архіви',
	'EXT_GROUP_DOCUMENTS'         => 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'   => 'Файли завантаження',
	'EXT_GROUP_FLASH_FILES'         => 'Flash-файли',
   	'EXT_GROUP_IMAGES'            => 'Зображення',
   	'EXT_GROUP_PLAIN_TEXT'         => 'Текстові файли',
   	'EXT_GROUP_QUICKTIME_MEDIA'      => 'Файли Quicktime',
   	'EXT_GROUP_REAL_MEDIA'         => 'Файли Real Media',
   	'EXT_GROUP_WINDOWS_MEDIA'      => 'Файли Windows Media',
	'FILES_GONE'			=> 'Деякі з обраних для видалення вкладень не існують. Можливо вони вже видалені. Існуючі вкладення видалено.',
	'FILES_STATS_WRONG'		=> 'Схоже, що статистика вкладень недостовірна і потребує синхронізації. Актуальні дані: кількість вкладень = %1$d, загальний розмір вкладень = %2$s.<br />Натисність %3$sтут%4$s, що синхронізувати їх.',


	'GO_TO_EXTENSIONS'		=> 'Перейти на сторінку керування розширеннями',
	'GROUP_NAME'			=> 'Назва групи',

	'IMAGE_LINK_SIZE'			=> 'Розмір зображення для посилання',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Відображає приєднане зображення як текстове посилання в повідомленні, якщо зображення має більший розмір за вказаний. Для вимкнення цієї функції встановіть значення 0 x 0.',
	'IMAGICK_PATH'				=> 'Шлях до Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Повний шлях до додатку конвертування зображень Imagemagick, наприклад <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Максимальна кількість вкладень в повідомленні',
	'MAX_ATTACHMENTS_PM'			=> 'Максимальна кількість вкладень в приватному повідомленні',
	'MAX_EXTGROUP_FILESIZE'			=> 'Максимальний розмір файлу',
	'MAX_IMAGE_SIZE'				=> 'Максимальний розмір зображення',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Максимальний розмір для приєднаних зображень. Встановіть значення в 0 х 0 для вимкнення перевірки розмірів.',
	'MAX_THUMB_WIDTH'				=> 'Максимальна ширина мініатюри в пікселях',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Ширина створеної мініатюри не буде перевищувати встановлену тут.',
	'MIN_THUMB_FILESIZE'			=> 'Мінімальний розмір файлу мініатюр',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Не створювати мініатюру для зображень менших від заданих.',
	'MODE_INLINE'					=> 'В повідомленнях',
	'MODE_PHYSICAL'					=> 'Фізично',

	'NOT_ALLOWED_IN_PM'			=> 'Дозволено лише в повідомленнях',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Не дозволено',
	'NOT_ASSIGNED'				=> 'Не призначено',
 	'NO_ATTACHMENTS'			=> 'Не знайдено вкладень за цей період.',
	'NO_EXT_GROUP'				=> 'Немає',
	'NO_EXT_GROUP_NAME'			=> 'Не введене ім\'я групи',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Не задано групу розширень.',
	'NO_FILE_CAT'				=> 'Немає',
	'NO_IMAGE'					=> 'Немає зображення',
	'NO_THUMBNAIL_SUPPORT'		=> 'Підтримку мініатюр вимкнено. Для роботи цієї функції повинна бути доступна бібліотека GD або встановлено додаток imagemagick. Обидві програми не було знайдено.',
	'NO_UPLOAD_DIR'				=> 'Задана вами директорія для завантаження не існує.',
	'NO_WRITE_UPLOAD'			=> 'Неможливий запис в вказану вами директорію завантажень. Будь-ласка, змініть права доступу, дозволивши запис вебсерверу в цю директорію.',

	'ONLY_ALLOWED_IN_PM'	=> 'Дозволено лише в приватних повідомленнях',
	'ORDER_ALLOW_DENY'		=> 'Дозволити',
	'ORDER_DENY_ALLOW'		=> 'Заборонити',

	'REMOVE_ALLOWED_IPS'		=> 'Вилучення з виключених або видалення <em>дозволених</em> IP/хостів',
	'REMOVE_DISALLOWED_IPS'		=> 'Вилучення з виключених або видалення <em>заборонених</em> IPs/хостів',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Ви дійсно хочете синхронізувати статистику вкладень?',

	'SEARCH_IMAGICK'				=> 'Знайти Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Список Дозволених/Заборонених ',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Зміна дії за замовчуванням списку Дозволених/Заборонених при увімкнених безпечних завантаженнях на <strong>білий список</strong> (Дозволені) та <strong>чорний список</strong> (Заборонені).',
	'SECURE_DOWNLOADS'				=> 'Увімкнути безпечні завантаження',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Якщо ви увімкнули цю функцію, завантаження будуть доступні лише для вказаних IP/хостів.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Безпечні завантаження не увімкнено. Нижчеподані налаштування буде застосовано після увімкнення безпечних завантажень.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Список IP успішно оновлено.',
	'SECURE_EMPTY_REFERRER'			=> 'Дозволити порожнє джерело переходу',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Безпечні завантаження базуються на вказанні джерела переходу (referrer). Ви хочете дозволити завантаження для порожніх джерел переходу?',
	'SETTINGS_CAT_IMAGES'			=> 'Налаштування категорій зображень',
	'SPECIAL_CATEGORY'				=> 'Особлива категорія',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Особливі категорії відрізняються способом відображення вкладень в повідомленнях.',
	'SUCCESSFULLY_UPLOADED'			=> 'Успішно завантажено.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Групу розширень успішно додано.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Групу розширень успішно оновлено.',

	'UPLOADING_FILES'				=> 'Завантаження файлів',
	'UPLOADING_FILE_TO'				=> 'Завантаження файлу “%1$s” в повідомлення номер %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Ви не маєте права завантажувати файли в форум “%s”.',
	'UPLOAD_DIR'					=> 'Директорія для завантаження',
	'UPLOAD_DIR_EXPLAIN'			=> 'Шлях до папки для зберігання вкладень. Зауважте, якщо ви змінюєте цю папку, і в неї вже було завантажено файли, ви повинні будете вручну скопіювати файли в нову папку.',
	'UPLOAD_ICON'					=> 'Значок завантаження',
	'UPLOAD_NOT_DIR'				=> 'Вказаний шлях для завантаження файлів не є диреторією.',
));
