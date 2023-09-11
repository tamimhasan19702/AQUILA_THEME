<?php

/**
 * Bootstrap the theme
 * 
 * @package Arrow
 */

 namespace ARROW\inc;
 use ARROW\inc\traits\Singelton;

 class ARROW_THEME{
    use Singelton;

    protected function __construct(){
        //load class
        $this->set_hooks();
    }

    protected function set_hooks(){
        //actions and filters
    }
 }