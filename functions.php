<?php 

/**
 * Theme Functions
 * 
 * @package Arrow
 */

  function arrow_enqueue_scripts(){
      wp_enqueue_style('arrow-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), "all" );
  }

  add_action('wp_enqueue_scripts', 'arrow_enqueue_scripts');

?>