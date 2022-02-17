<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ROBOTS ON CERTAIN PAGES -->
    <?php  if(is_page('regulamin') || is_page('polityka') || preg_match( '#^category(/.+)?$#', $wp->request)) { ?>
        <meta name="robots" content="noindex, follow">
    <?php } ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/fav.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title>
        <?php if(is_home()) 
            echo 'Wiertarki przemysłowe, wielowrzecionowe, CNC, Głowice wiertarskie - Lazzoni Group'; 
        else { wp_title(''); echo ' &mdash; Lazzoni Group'; } ?>
    </title>

    <?php wp_head(); ?>
</head>
<body>
    <?php 
        get_template_part('include/loading-page', 'loading-page');
        get_template_part('include/fixed-buttons', 'fixed-buttons');
        if (is_home()) get_template_part('include/contact-app', 'contact-app');
        if (is_home() || is_page('films')) get_template_part('include/film-box', 'film-box');
        if (is_single()) get_template_part('include/lightbox', 'lightbox');
    ?>

    <!-- __ SIZES -->
    <div class="_sizes">
        <span class="_size d-sm-none">XS</span>
        <span class="_size d-none d-sm-flex d-md-none">SM</span>
        <span class="_size d-none d-md-flex d-lg-none">MD</span>
        <span class="_size d-none d-lg-flex d-xl-none">LG</span>
        <span class="_size d-none d-xl-flex">XL</span>
    </div>
    
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-xl py-0<?php if (is_404()) echo ' d-none'; ?>">
        <div class="container-fluid px-md-5">

            <!-- NAVBAR LOGO -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-main.png" alt="LAZZONI GROUP" class="d-none d-md-flex img-fluid my-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mobile-navbar.png" alt="LAZZONI GROUP" class="d-flex d-md-none img-fluid my-2">
            </a>

            <?php get_template_part('include/language-select', 'language-select', ['mobile' => true]); ?>

            <!-- MENU TOGGLER -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#menu" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/toggler.png" alt="Rozwiń menu" class="img-fluid">
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse py-0" id="menu">
                <?php
                    // Main menu:
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'depth'           => 2,
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav ml-auto py-4 py-xl-0',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker()
                    ));
                ?>
            </div>

            <?php get_template_part('include/language-select', 'language-select', ['mobile' => false]); ?>
        </div>
    </nav>