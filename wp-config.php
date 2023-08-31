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
define( 'DB_NAME', 'wp_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^i!Tp#v5e9}>)n,6&Ovx&Z/W#){g;^Bk:)aS*K^yS=aQc#s{L ho|QxTHhzy}-Zo' );
define( 'SECURE_AUTH_KEY',  'cm>Y5I4<#V?CaTmATyU6L~4X0L=7>yLf[dAs?trh8T/0{![:51`?~O!m`J]l.7wP' );
define( 'LOGGED_IN_KEY',    ':zMAtykv=l@KJ,mzb +]6L5Rd,2yEtev<@uOsi<u*cI((sY.~;Q-yHL{o-@BI=4i' );
define( 'NONCE_KEY',        'n1%8wr=U-pL5)R_u|gJ LE?L{9x_S?@zu5<$;^([`eoF@Qh;@=9mm_;7]wVLBSIO' );
define( 'AUTH_SALT',        '<*Ps9hPbpu6vBAd-P,TN3SDc{LEWq-b-9D-}]R([&6sA3 .R9/ynXaw%!Ddbc/xk' );
define( 'SECURE_AUTH_SALT', 'I)>nEK,9_.-.2t<s*goy;m2RPA<<h@xMXB[nPoO1gG@;%u>}C?i@l1@.(#Q9rBn+' );
define( 'LOGGED_IN_SALT',   'kx/Avh6&)|G/87 =,n55JTGK*{z?k>m6KaZ4Hs]_=:rGPf^q<RISB~Er/,;na77N' );
define( 'NONCE_SALT',       'h>z:(>{C1t$~LKBa&wtJK0mSW:g*YRC63{v`5wRUpAMDn-g]]+c6v0n+AINHg^?m' );

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
