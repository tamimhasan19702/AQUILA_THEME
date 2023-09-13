<?php

/**
 * Bootstrap the theme
 * 
 * @package Arrow
 */

 namespace ARROW_THEME\inc;
 use ARROW_THEME\Inc\Traits\Singelton;


 class ARROW_THEME{
    use Singelton;

    protected function __construct(){

        wp_die('hello');
        //load class
        $this->set_hooks();
    }

    protected function set_hooks(){
        //actions and filters
    }
 }