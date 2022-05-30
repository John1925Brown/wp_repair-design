<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'repair-design' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin_repair-design' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*%1PfL[nCZW)|s~>fV^rJ${Q=Ys$lS.u+DK [x_5V6[]bTe,vmGbM/qHsz.sHNmB' );
define( 'SECURE_AUTH_KEY',  'f+@wqw/+LZ7h(4?7F%=2~^$JAPL6q[FQeQSS=&T$uEQKTY*+t!2}!-ZBt&);:iXg' );
define( 'LOGGED_IN_KEY',    '0<+Q?Nf8m}Ib>2d4^mAzruk~?jOP%7)GXx`S(Y,fWGzuX%|Kzm#{ok{3w~3`2y&/' );
define( 'NONCE_KEY',        'XJg2:1h^Uvis[Gd^BO*t.j;=JfVh9A%#LW:*k[w?R-ExbmlB2Mo/C{*rXE/lVjUu' );
define( 'AUTH_SALT',        '-O3//P2st3tN<iG0tt6JrB@ag[SbZQ)^<>?vWl.NGs!ptV6LSB~;PxM^>-G8Q*7V' );
define( 'SECURE_AUTH_SALT', 'fjghzU2YfO+8jYenZcW$)EtT$C[jd{^Mpqah0aE1WB%8DahIR{!|/tZdCRzC2i{z' );
define( 'LOGGED_IN_SALT',   'RoiQyjEp{]+-k%VW{m?7tMFIdF@%SI(%7q<zLI!bxI9)c=NJks{3$jR/hy=F n-C' );
define( 'NONCE_SALT',       '7Tzo~~Zl.rxeaiQyd0C`]1D<@36TKgO>VW@7efb7gnL%xi!>a#*`Y%niD+i)uU}x' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
