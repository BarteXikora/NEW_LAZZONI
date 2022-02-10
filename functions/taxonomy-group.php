<?php

function lazzoni_taxonomy_group() {
    $labels = array(
        'name' => 'Grupy produktów',
        'singular_name' => 'Grupa produktu',
        'search_items' => 'Szukaj grup',
        'all_items' => 'Wszystkie grupy produktów',
        'parent_item' => 'Rodzic',
        'parent_item_colon' => 'Rodzic',
        'edit_item' => 'Edytuj grupę produktu',
        'update_item' => 'Aktualizuj grupę produktu',
        'add_new_item' => 'Dodaj nową grupę',
        'new_item_name' => 'Nazwa nowegj grupy produktu',
        'menu_name' => 'Grupa produktu'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product-group')
    );

    register_taxonomy('product-group', array('post', 'product'), $args);
}
add_action('init', 'lazzoni_taxonomy_group');