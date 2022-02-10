<?php

function lazzoni_taxonomy_type() {
    $labels = array(
        'name' => 'Typy produktów',
        'singular_name' => 'Typ produktu',
        'search_items' => 'Szukaj typów',
        'all_items' => 'Wszystkie typy produktów',
        'parent_item' => 'Rodzic',
        'parent_item_colon' => 'Rodzic',
        'edit_item' => 'Edytuj typ produktu',
        'update_item' => 'Aktualizuj typ produktu',
        'add_new_item' => 'Dodaj nowy typ',
        'new_item_name' => 'Nazwa nowego typu produktu',
        'menu_name' => 'Typ produktu'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product-type')
    );

    register_taxonomy('product-type', array('post', 'product'), $args);
}
add_action('init', 'lazzoni_taxonomy_type');