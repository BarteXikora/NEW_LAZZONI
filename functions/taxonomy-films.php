<?php

function lazzoni_taxonomy_films() {
    $labels = array(
        'name' => 'Kategorie filmów',
        'singular_name' => 'Kategoria filmu',
        'search_items' => 'Szukaj kategorii',
        'all_items' => 'Wszystkie kategorie filmów',
        'parent_item' => 'Rodzic',
        'parent_item_colon' => 'Rodzic',
        'edit_item' => 'Edytuj kategorię filmu',
        'update_item' => 'Aktualizuj kategorię filmu',
        'add_new_item' => 'Dodaj nową kategorię',
        'new_item_name' => 'Nazwa nowej kategorii filmu',
        'menu_name' => 'Kategoria filmu'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'film-category')
    );

    register_taxonomy('film-category', array('films'), $args);
}
add_action('init', 'lazzoni_taxonomy_films');