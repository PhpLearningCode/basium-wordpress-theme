<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <title><?php wp_title(); ?></title>
    </head>

<body <?php body_class()?> >

<header class="sticky-top">
    <div id="nav_menu">
        
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation',
            )
        );?>

        <img 
            src="<?php header_image(); ?>" 
            alt="headerImage"
            width="200"
            height="100"
        />
    </div>
</header>