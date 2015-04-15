<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'devlugansk');

/** Имя пользователя MySQL */
define('DB_USER', 'devlugansk');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'P@ssw0rd1');

/** Имя сервера MySQL */
define('DB_HOST', 'devlugansk.db.11234044.hostedresource.com');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9eBUrbzGzXli3N3m`?i}D;F>$bu.i|,Y-v=0@&/CQg?3N1?&#7#RYmd!z&VtNbv=');
define('SECURE_AUTH_KEY',  'k,JISD^!xH2Ug*q3jdrY6g|F4-fM-F41joYFA6t[Kr`qWC#H<-F`#7)c;)BE]&-|');
define('LOGGED_IN_KEY',    ':>aZ4)])9cKk|:XX%/@z#P3:`i<)I;IIA{5[-Edp)r|iH]/|2jWe713_#Vy{7>t=');
define('NONCE_KEY',        'y@#t?mbyfKH<R2B+8|2t:EI<8[?D>a>5Q1}8`FYUABY8k)-s.v!p/dDkT}]7G.oc');
define('AUTH_SALT',        'eU8AhG-w@EOAlH+6EPZfP(^COgb`{f+ua_$+*>.bwo]|(3G28:vB:K-9qAWZe#+1');
define('SECURE_AUTH_SALT', 'S27uFx_--=CwX,U5,PG@TQ.4mkwbPS[]<=Nd+0Frzd]GZAQ7Yh wQch)&E!dO*j=');
define('LOGGED_IN_SALT',   '?$`=,z^/g|+arxs-#?0RP|:do}brJs!9Xicd+6Ro(XnVn.Mqi@khJ-i9o=G2>,Rs');
define('NONCE_SALT',       '}|-^NjI ;m*xGZKQ/)z(i&3FNF}De7>>W}88bGr(=R--0Mx|~]}F!Djx@cl:aWM-');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');


/** 
* The WordPress Dashboard by default allows administrators to edit PHP files, 
* such as plugin and theme files. This is often the first tool an attacker will 
* use if able to login, since it allows code execution. WordPress has a constant 
* to disable editing from Dashboard. Placing this line in wp-config.php is 
* equivalent to removing the 'edit_themes', 'edit_plugins' and 'edit_files' capabilities of all users: 
* define('DISALLOW_FILE_EDIT', true);
*/
