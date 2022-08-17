<?php
/** Constants */
$dir = __DIR__ . '/';
define('DE_PATH', $dir);
define('DE_URI', get_template_directory_uri());
define('DE_HOMEPAGE', get_option('page_on_front'));

/** Settings WordPress */
require_once DE_PATH .'inc/General.php';
require_once DE_PATH .'inc/Helper.php';
require_once DE_PATH .'inc/Shortcodes.php';

/** CustomPostType */
require_once DE_PATH . 'inc/CustomPostType.php';

/** Custom fields */
require_once DE_PATH . 'inc/CarbonFields/CommonMeta.php';
require_once DE_PATH . 'inc/CarbonFields/PageMeta.php';
require_once DE_PATH . 'inc/CarbonFields/PostMeta.php';
require_once DE_PATH . 'inc/CarbonFields/UserMeta.php';
require_once DE_PATH . 'inc/CarbonFields/TermMeta.php';

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}