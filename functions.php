<?php 

/**
 * Theme Functions
 * 
 * @package Arrow
 */

if(!defined('ARROW_DIR_PATH')){
  define('ARROW_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once ARROW_DIR_PATH . '/inc/helpers/autoloader.php';

function arrow_enqueue_scripts(){
  
  // Register Styles
  wp_register_style(
    'style',
    get_stylesheet_uri(),
    [],
    filemtime(get_template_directory() . '/style.css'),
    'all'
  );
  wp_register_style(
    'bootstrap',
    get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',
    [],
    false,
    'all'
  );

  // Register Scripts
  wp_register_script(
    'main',
    get_template_directory_uri().'/assets/main.js',
    [],
    filemtime(get_template_directory() . '/assets/main.js'),
    true
  );
  wp_register_script(
    'bootstarp',
    get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',
    ['jquery'],
    false,
    true
  );

  // Enqueue Styles
  wp_enqueue_style('style');
  wp_enqueue_style('bootstrap');

  // Enqueue Scripts
  wp_enqueue_script('main');
  wp_enqueue_script('bootstarp');
  
}

add_action('wp_enqueue_scripts', 'arrow_enqueue_scripts');

?>