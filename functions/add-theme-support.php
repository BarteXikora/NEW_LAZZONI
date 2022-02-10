<?php

function lazzoni_theme_setup() {
    // Menus:
    add_theme_support('menus');
    register_nav_menu('primary', 'Menu główne');
    register_nav_menu('footer_menu_1', 'Menu w stopce - kolumna 1');
    register_nav_menu('footer_menu_2', 'Menu w stopce - kolumna 2');

    // Post thumbnails:
    add_theme_support('post-thumbnails'); 
}
add_action('init', 'lazzoni_theme_setup');