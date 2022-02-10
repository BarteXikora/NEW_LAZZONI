<?php

function lazzoni_post_type_films() {
    $labels = array(
        'name'                => 'Filmy',
        'singular_name'       => 'Filmy',
        'menu_name'           => 'Filmy',
        'parent_item_colon'   => 'Nadrzędne filmy',
        'all_items'           => 'Wszystkie filmy',
        'view_item'           => 'Zobacz filmy',
        'add_new_item'        => 'Dodaj film',
        'add_new'             => 'Dodaj nowy',
        'edit_item'           => 'Edytuj film',
        'update_item'         => 'Aktualizuj',
        'search_items'        => 'Szukaj filmu',
        'not_found'           => 'Nie znaleziono filmu',
        'not_found_in_trash'  => 'Nie znaleziono filmu w koszu'
    ); 
    $args = array(
        'label' => 'films',
        'rewrite' => array(
            'slug' => 'films'
        ),
        'description'         => 'Filmy z youtube',
        'labels'              => $labels,
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true, 
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-format-video',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'supports' => array('editor', 'title', 'thumbnail', 'custom-fields')
    );
    register_post_type( 'films', $args );
} 
add_action( 'init', 'lazzoni_post_type_films', 1 );