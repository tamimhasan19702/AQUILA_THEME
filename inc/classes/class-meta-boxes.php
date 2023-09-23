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
                $screen,
                'side'
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, 'hide-page-title', true);
        ?>

        <label for="arrow-field">
            <?php esc_html_e('Hide the page title', 'arrow'); ?>
        </label>
        <select name="arrow-field" id="arrow-field" class="postbox">
            <option value="">
                <?php esc_html_e('Select', 'arrow') ?>
            </option>
            <option value="yes">
                <?php esc_html_e('Yes', 'arrow') ?>
            </option>
            <option value="else">
                <?php esc_html_e('No', 'arrow') ?>
            </option>
        </select>

        <?php
    }

}