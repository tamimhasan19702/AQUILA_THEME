<?php
/**
 * Template for post entry header
 * 
 * @package arrow
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail();
?>

<header class="entry-header">
    <?php
    //Featured Image
    if ($has_post_thumbnail) {
        ?>
        <div class="entry-image mb-3">
            <a href="<?php echo esc_url(get_the_permalink()); ?>">

            </a>
        </div>
        <?php
    }
    ?>
</header>