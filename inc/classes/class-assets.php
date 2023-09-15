<?php

/**
 * enqueue theme assets
 * 
 * @package Arrow
 */

namespace ARROW_THEME\Inc;

use ARROW_THEME\Inc\Traits\Singelton;

class Assets{
    use Singelton;

    protected function __construct(){

        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        //actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']); 
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']); 
    }
    
    public function register_styles(){
  // Register Styles
  wp_register_style(
    'style',
    get_stylesheet_uri(),
    [],
    filemtime(ARROW_DIR_PATH . '/style.css'),
    'all'
  );
  wp_register_style(
    'bootstrap',
    ARROW_DIR_URI .'/assets/src/library/css/bootstrap.min.css',
    [],
    false,
    'all'
  );

  
  // Enqueue Styles
  wp_enqueue_style('style');
  wp_enqueue_style('bootstrap');
    }

    public function register_scripts(){
        
  // Register Scripts
  wp_register_script(
    'main',
    ARROW_DIR_URI .'/assets/main.js',
    [],
    filemtime(ARROW_DIR_PATH . '/assets/main.js'),
    true
  );
  wp_register_script(
    'bootstarp',
    ARROW_DIR_URI .'/assets/src/library/js/bootstrap.min.js',
    ['jquery'],
    false,
    true
  );


  // Enqueue Scripts
  wp_enqueue_script('main');
  wp_enqueue_script('bootstarp');
  
    }
}