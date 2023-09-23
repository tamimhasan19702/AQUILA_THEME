<?php

/**
 * Theme Functions
 * 
 * @package Arrow
 */

if (!defined('ARROW_DIR_PATH')) {
  define('ARROW_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('ARROW_DIR_URI')) {
  define('ARROW_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once ARROW_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ARROW_DIR_PATH . '/inc/helpers/template-tags.php';


function Arrow_get_theme_instance()
{

  \ARROW_THEME\Inc\ARROW_THEME::get_instance();

}
Arrow_get_theme_instance();


function arrow_enqueue_scripts()
{


}

add_action('wp_enqueue_scripts', 'arrow_enqueue_scripts');

?>