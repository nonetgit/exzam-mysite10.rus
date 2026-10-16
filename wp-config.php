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
 * * Настройки базы данных
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
define( 'DB_NAME', 'mysite10.rus' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin1' );

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
define( 'AUTH_KEY',         'q4&wEGfwdd{%/|:c+i6M/4qC AO@fi(ymyN:p$AOJF$jm=lxuU1IHObS<M5BtNx$' );
define( 'SECURE_AUTH_KEY',  'tYPzI#LIPRP l{HiHCoKGWYbi~3cKM)@&;6cjkyfJ7p.%^*&5,G|ndk8Q_zKq TA' );
define( 'LOGGED_IN_KEY',    'p)+0j[2kCy>4W2/|T>b8zy-G+y4mssFQqd*GDh{|:7qT3QQ-5eAjyWk+P]}[K%.w' );
define( 'NONCE_KEY',        'RcPf(~/FJ$#QlAXeuTjkY2L3?AqZcT%FHI=M~Aeo1giwllO-YhXDbz~0qG-Hqq^0' );
define( 'AUTH_SALT',        '0IyXUnV4D,O+AltWyU|DUE~b|j{uqD<k~:v1HBY+Y(PVG1aYC_7Z#z%JZmJxf1.m' );
define( 'SECURE_AUTH_SALT', '^~mt9C~qI^fK(dUFPMp4@T|]vfW`f8On`<m]JLVOr[ u0U+:&eWKiNWg_c;H.gQI' );
define( 'LOGGED_IN_SALT',   'c<Q;^YccKwft#{}jiE/t+P(,)8Stt,%1vJBTahT_O]Gt8b93t6.8x!y RD:GtCEx' );
define( 'NONCE_SALT',       't@{:^c1V6y8GxhE7uxQ<P))&a17)NF]a)zYqlU3w )7u(s.g.T[?Za>JK1K(Jxk7' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
