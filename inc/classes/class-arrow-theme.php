<?php

/**
 * Bootstrap the theme
 * 
 * @package Arrow
 */

 namespace Arrow\inc;
 use Arrow\inc\traits\Singelton;

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