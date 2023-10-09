<?php

/**
 * Template part for displaying post content
 * 
 * To be used inside the Wordpress Loop
 * @package arrow
 */
?>

<div class="entry-content">
    <?php
    if (is_single()) {
        the_content(
            sprintf(
                wp_kses(
                    __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'arrow'),
                    ['span' => ['class' => []]]
                ),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            )
        );
    } else {
        arrow_the_excerpt(100);
        echo arrow_excerpt_more();
    }
    ?>
</div>