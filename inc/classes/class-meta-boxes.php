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
        add_action('save_post', [$this, 'save_post_meta_data']);
    }

    public function add_custom_meta_box()
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide_page_title',
                esc_html__('Hide Page Title', 'arrow'),
                [$this, 'custom_meta_box_html'],
                $screen,
                'side',
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);

        ?>

<label for="arrow-field">
    <?php esc_html_e('Hide Page Title', 'arrow');?>
</label>
<select name="arrow_hide_title_field" id="arrow_field" class="postbox">

    <option value=""><?php esc_html_e('Select', 'arrow');?></option>

    <option value="yes" <?php selected($value, 'yes');?>>
        <?php esc_html_e('Yes', 'arrow');?>
    </option>

    <option value="no" <?php selected($value, 'no');?>>
        <?php esc_html_e('No', 'arrow');?>
    </option>

</select>
<?php

    }

    public function save_post_meta_data() {
    if(array_key_exists('arrow_hide_title_field', $_POST)) {
    update_post_meta(
        $post_id,
        '_hide_page_title',
        $_POST['arrow_hide_title_field']
    );
    }
    }

}