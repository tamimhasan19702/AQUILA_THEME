<?php

/**
 * arrow theme meta boxes
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
        //actions and filters
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }

    public function add_custom_meta_box()
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide_page_title',
                esc_html__('Hide Page Title', 'arrow'),
                [$this, 'custom_meta_box_html'],
                $screen
            );
        }
    }

}