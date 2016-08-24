<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress_gi');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b!vVdxNyf8Y+->(Gqi>dn<IHOK|Ekqk:2&#DK5Q5#+##Tm(Dw.pGv;XI3mqgp33s');
define('SECURE_AUTH_KEY',  'V~%|5i @[#er)82qJwwHSUXR7t!`vF9JLiFir90m%HLyBPA+[<6Y3HuJ0C74P]Nh');
define('LOGGED_IN_KEY',    '{}vIax{A>Q.5l,*|Q|[=3aovO?Wl5:r t4Wf^p-(~h%%kqnO}ZNg/OB&_,r!,L94');
define('NONCE_KEY',        '/VNP YR_cdyhf&+(vJ#2r@q0v*:X9N2G^[q0vP@azf#4jr]TDQR]Fn@5ZH)Gz4V6');
define('AUTH_SALT',        '$n,>_#0dE|. &j[Uvvv#dYX[{%]2*y!K1ycXnxH]]!NO{S#]z }YOR4bQeH9is=3');
define('SECURE_AUTH_SALT', 'q`vU0??YBgy}U=R;FX^1j1)yDr$3ospvjuACFz_x,q}Nck?Q7j=P ^_UwE)VJ.a5');
define('LOGGED_IN_SALT',   'vV-V8[}<0l4Vi5Nse>k3Frg1ys>RA8^Ef:QF2Wv)?|d>T{.mDW216Lm}&;q<^1`i');
define('NONCE_SALT',       'VL/Q0 KeEU$=<i9=Q5QXUNh2t(m; x=r;a61~/KnM,Wd+Y2+P-Y}~K&=w,ef m^~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
