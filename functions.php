<?php 

/**
 * Theme Functions
 * 
 * @package Arrow
 */

  function arrow_enqueue_scripts(){
    
    //   wp_enqueue_style('arrow-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), "all" );
    
    wp_register_style( "arrow-style", get_template_directory_uri() . "/style.css", [], filemtime( get_template_directory() . '/style.css' ), "all" );

    wp_enqueue_style( "arrow-style" );
    
    wp_enqueue_script( "arrow-script", get_template_directory_uri() . "/assets/main.js", [], filemtime( get_template_directory() . '/assets/main.js' ), true );



  }

  add_action('wp_enqueue_scripts', 'arrow_enqueue_scripts');

?>