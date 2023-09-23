<?php

/**
 * Register meta boxes
 * 
 * @package Arrow
 */

namespace ARROW_THEME\Inc;

use ARROW_THEME\Inc\Traits\Singelton;

class Meta_Boxes
{
    use Singelton;

    protected function __construct()
    {

        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_boxes']);
    }

    public function add_custom_meta_boxes()
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title',
                __('Hide page title', 'arrow'),
                [$this, 'custom_meta_box_html'],
                $screen
            );
        }
    }

    public function custom_meta_box_html()
    {

    }

}