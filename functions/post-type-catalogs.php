<?php

function lazzoni_post_type_catalogs() {
    $labels = array(
        'name'                => 'Katalogi',
        'singular_name'       => 'Katalogi',
        'menu_name'           => 'Katalogi',
        'parent_item_colon'   => 'Nadrzędne katalogi',
        'all_items'           => 'Wszystkie katalogi',
        'view_item'           => 'Zobacz katalog',
        'add_new_item'        => 'Dodaj katalog',
        'add_new'             => 'Dodaj nowy',
        'edit_item'           => 'Edytuj katalog',
        'update_item'         => 'Aktualizuj',
        'search_items'        => 'Szukaj katalogu',
        'not_found'           => 'Nie znaleziono katalogów',
        'not_found_in_trash'  => 'Nie znaleziono katalogu w koszu'
    ); 
    $args = array(
        'label' => 'catalog',
        'rewrite' => array(
            'slug' => 'catalog'
        ),
        'description'         => 'Katalogi',
        'labels'              => $labels,
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true, 
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-book',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'supports' => array('editor', 'title', 'thumbnail', 'custom-fields')
    );
    register_post_type( 'catalog', $args );
} 
add_action( 'init', 'lazzoni_post_type_catalogs', 2 );