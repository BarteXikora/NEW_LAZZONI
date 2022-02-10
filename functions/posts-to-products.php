<?php

function lazzoni_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Produkty';
        $labels->singular_name = 'Produkty';
        $labels->add_new = 'Dodaj produkty';
        $labels->add_new_item = 'Dodaj produkt';
        $labels->edit_item = 'Edytuj produkt';
        $labels->new_item = 'Produkty';
        $labels->view_item = 'Wyświetl produkty';
        $labels->search_items = 'Wyszukaj produkty';
        $labels->not_found = 'Nie znaleziono produktów';
        $labels->not_found_in_trash = 'Nie znaleziono produktów w koszu';
        $labels->all_items = 'Wszystkie produkty';
        $labels->menu_name = 'Produkty';
        $labels->name_admin_bar = 'Produkty';
}
add_action( 'init', 'lazzoni_change_post_object' );