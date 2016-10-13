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
define('DB_NAME', 'inity');

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
define('AUTH_KEY',         '}*q$Tx+,k;c-2}1n-^lW:vAi4^6z:nLZ^_jTCZS-)}>$IvjTa-:lvR;7-:c*1_E/');
define('SECURE_AUTH_KEY',  'b>PN%w_g3#@zBhq<pK|WSy|f!@!)%RSs|oz/Ib78+53$yh*7[s>n&d!O2< 5jQq|');
define('LOGGED_IN_KEY',    'S7a<XX3g;<>36K~X5Y_|Dd9%l)m]Q& ss2irMtBiwkAFE/^dsi1We4r5/p@IS#38');
define('NONCE_KEY',        'z]1+Y4q<~:|SJHf&lW/wX/-N< ,Y&qm{uk>snO+Z#,4eEvjpHp[/t~|{>k2I_WYg');
define('AUTH_SALT',        'V.n|WFEc-y.#n,Ib+,.HiC6[iac`.HBCF+q$v/&5`VP_4~[l7V:QB`_*w):hkQNg');
define('SECURE_AUTH_SALT', 'MGHTQ(-saFkO3-mfIRX[uv ?W@|cPU]Ze(3G+pk|}A/+p<>OrMP]JH$BD!g|&;S(');
define('LOGGED_IN_SALT',   'Ci,B)x)rDAm&-Rpi.[.ZQLIKo(&3s-}X/0j 7WzU+f9??nyJ~oy5twzD_flW>5OG');
define('NONCE_SALT',       '#nZC-:f@fYT5CAA.MN T8Z/,Nx{@N+2j3)vv4z/i(rozZ.,A7v; JD w4sA=[:kn');

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
