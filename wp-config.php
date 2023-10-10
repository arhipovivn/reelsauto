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
define( 'DB_NAME', 'reelsaut_base' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'reelsaut_root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'reels1409222' );

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
define( 'AUTH_KEY',         '`M=P+istSPlqXK/WRJd]y$P3v;0tB&fI5HisFiRm}FTSp.*hH%fL6uZ.A4l*/L<7' );
define( 'SECURE_AUTH_KEY',  '/=:cA{ #`Q9R{ 2I!HwwzOhv_6I/q~r4qu9Lka}|zD4fiT36{4Hn=$KzQu,k3|j=' );
define( 'LOGGED_IN_KEY',    'z]+^Q&XW:-~jf>3`B^RmN7]0Z|O ;vr,UG}*~Z4~,1 +#5JJeiIK<f(r:3=;L+%l' );
define( 'NONCE_KEY',        '%,qE#K586J].uKy$no}DZNs090[?eYo,`!}IDq{ <KmX6LK>7UP*}MlME}Dd0<@5' );
define( 'AUTH_SALT',        '2+U7BAN!<*Q@tA>dgLQiH.>KOXT==TU|.U ynW*FuE7T:ZC|FMS!m60h73_Tn7h|' );
define( 'SECURE_AUTH_SALT', 'o=F|a|Q4B:2$#{6~42<|U8:F+u%?konr~(]PB5=ogX-a|UZW[GUr}1s{G&Uv|-Qv' );
define( 'LOGGED_IN_SALT',   'C{SWQkTv 8)WWIv6caouRl.p:4 H:agz@~!&BOdH]XY6(GHs<l^; %|}MCg`,z*3' );
define( 'NONCE_SALT',       '{L3vWqM:h6yVeh%R-{r[1ErR92v?)f-VMMZO(q$-BHFaeGZw./q~/9J]fA%s&/2F' );

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
