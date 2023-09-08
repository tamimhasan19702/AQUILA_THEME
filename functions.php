<?php 

/**
 * Theme Functions
 * 
 * @package Arrow
 */

  function arrow_enqueue_scripts(){
    
    //Register Styles
   wp_register_style(
    'style-css',
    get_stylesheet_uri(),
    [],
    filemtime(get_template_directory() . '/style.css'),
    'all'
    );
   wp_register_style(
    'bootstap-css',
    get_stylesheet_uri().'/assets/src/library/css/bootstrap.min.css',
    [],
    false,
    'all'
    );

    //Register Scripts
    wp_register_script(
      'main-js',
      get_template_directory_uri(),
      '/assets/main.js',
      [],
      filemtime(get_template_directory() . '/assets/main.js'),
      true
    );
    wp_register_script(
      'bootstarp-js',
      get_template_directory_uri(),
      '/assets/src/library/js/bootstrap.min.js',
      ['jquery'],
      false,
      true
    );

    //Enqueue Styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstap-css');

    //Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstarp-js');
    
  }

  add_action('wp_enqueue_scripts', 'arrow_enqueue_scripts');

?>