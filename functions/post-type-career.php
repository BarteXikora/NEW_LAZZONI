<?php

function lazzoni_post_type_career() {
    $labels = array(
        'name'                => 'Oferty pracy',
        'singular_name'       => 'Oferty pracy',
        'menu_name'           => 'Oferty pracy',
        'parent_item_colon'   => 'Nadrzędne oferty pracy',
        'all_items'           => 'Wszystkie oferty pracy',
        'view_item'           => 'Zobacz oferty pracy',
        'add_new_item'        => 'Dodaj ofertę pracy',
        'add_new'             => 'Dodaj nową',
        'edit_item'           => 'Edytuj ofertę pracy',
        'update_item'         => 'Aktualizuj',
        'search_items'        => 'Szukaj oferty pracy',
        'not_found'           => 'Nie znaleziono oferty pracy',
        'not_found_in_trash'  => 'Nie znaleziono oferty pracy w koszu'
    ); 
    $args = array(
        'label' => 'career',
        'rewrite' => array(
            'slug' => 'career'
        ),
        'description'         => 'Oferty pracy',
        'labels'              => $labels,
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true, 
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-businessman',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'supports' => array('editor', 'title', 'thumbnail', 'custom-fields')
    );
    register_post_type( 'career', $args );
} 
add_action( 'init', 'lazzoni_post_type_career', 3 );