<?php 

function lazzoni_remove_canonical() {
    remove_action('wp_head', 'rel_canonical');
}
add_action('init', 'lazzoni_remove_canonical');