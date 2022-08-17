<?php
define( 'WP_CACHE', true );
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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "uggwc_ug" );

/** Имя пользователя MySQL */
define( 'DB_USER', "uggwc_ug" );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "JSKPris7" );

/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '7h:P ;UP+j<,w/[n)nmW=A4TNK~T#,k2g+Lj<N6D^-I31j}*7*JWTaOcIf_B#qc*' );
define( 'SECURE_AUTH_KEY',  '}]SQm:EI|>HLoGc71u<S|)t=k$nZ+eo!VAKibcEfzS8ffKqjiI@{_6w*%qQ;@/$o' );
define( 'LOGGED_IN_KEY',    '[t+nh4$p1D3&@tl/qvB`$;2vXuT9D{09 w*r w9bK&3VEi?W73w.9@T%G](+(,/|' );
define( 'NONCE_KEY',        '7Rh|G!$H+SXp^iM1/tI}jHxXamwQ,S1$D,.@<c>]*~KXc@_x:1~X8[l=DDHmHdSH' );
define( 'AUTH_SALT',        '=K59k[k{n,fm7=;M17oCH1l$:!E>|lQOW9+~`T@{9P$VsXteXas=1l#vUj:R)Sbj' );
define( 'SECURE_AUTH_SALT', '-uk^SNUs7vx@5f3(c Q5!f0EPZ]q=y:#q6nM_L+cwD-!4;?%BMa<0kt_&K2Hl.Ef' );
define( 'LOGGED_IN_SALT',   'dSZ $i>:u<ht%)e!5.ir_Bt}{uIi^SGK=QVhA2zRDnE-iT:q}d2hQ6TI%T}>m]3=' );
define( 'NONCE_SALT',       'Nm0di5t<cpU2:@SuaZ#zZ-]1d{D7BHUaR`k?Ua2i%tx=5=X2eT>_)Sv6f@gfUo6e' );

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
