<?php 

/**
 * Header file 
 *  
 * @package  Arrow
*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress</title>
    <?php wp_head() ?>
</head>

<body <?php body_class("theme-dev") ?>>

    <?php wp_body_open() ?>

    <header>Header</header>