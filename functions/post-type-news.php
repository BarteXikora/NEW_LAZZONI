<?php

function lazzoni_post_type_news() {
    $labels = array(
        'name'                => 'Aktualności',
        'singular_name'       => 'Aktualności',
        'menu_name'           => 'Aktualności',
        'parent_item_colon'   => 'Nadrzędne aktualności',
        'all_items'           => 'Wszystkie aktualności',
        'view_item'           => 'Zobacz aktualność',
        'add_new_item'        => 'Dodaj aktualność',
        'add_new'             => 'Dodaj nową',
        'edit_item'           => 'Edytuj aktualność',
        'update_item'         => 'Aktualizuj',
        'search_items'        => 'Szukaj aktualności',
        'not_found'           => 'Nie znaleziono aktualności',
        'not_found_in_trash'  => 'Nie znaleziono aktualności w koszu'
    ); 
    $args = array(
        'label' => 'news',
        'rewrite' => array(
            'slug' => 'news'
        ),
        'description'         => 'Aktualności',
        'labels'              => $labels,
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true, 
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-admin-site',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'supports' => array('editor', 'title', 'thumbnail')
    );
    register_post_type( 'news', $args );
} 
add_action( 'init', 'lazzoni_post_type_news', 0 );