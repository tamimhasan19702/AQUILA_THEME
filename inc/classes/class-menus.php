<?php

/**
 * Register Menus
 * 
 * @package Arrow
 */

namespace ARROW_THEME\Inc;

use ARROW_THEME\Inc\Traits\Singelton;

class Menus{
    use Singelton;

    protected function __construct(){

        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        //actions and filters
        add_action('init', [$this, 'register_menus']); 
    }

    public function register_menus(){
        register_nav_menu([
            'arrow-header-menu' => esc_html__('Header Menu', 'arrow'),
            'arrow-footer-menu' => esc_html__('Footer Menu','arrow'),
        ]);
    }
    
    
}