<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <title><?php wp_title(); ?></title>
    </head>

<body <?php body_class()?> >

<header class="sticky-top nav_menu">
    <img 
        src="<?php header_image(); ?>" 
        alt="headerImage"
        width="200"
        height="100"
    />

    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'navigation',
        )
    );?>

</header>