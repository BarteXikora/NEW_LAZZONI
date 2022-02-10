<?php

function lazzoni_enqueue_styles() {
    // Bootstrap styles:
    wp_enqueue_style(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
    );

    // Bootstrap script:
    wp_enqueue_script(
        'bootstrap',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        array('jquery')
    );

    // Main styles:
    wp_enqueue_style(
        'styles',
        get_stylesheet_directory_uri() . '/css/main.css'
    );

    // Loading script:
    wp_enqueue_script(
        'loading-page',
        get_stylesheet_directory_uri() . '/js/loading.js',
        array('jquery')
    );

    // Go-up button script:
    wp_enqueue_script(
        'go-up-button',
        get_stylesheet_directory_uri() . '/js/go-up-button.js',
        array('jquery')
    );

    // Language selector script:
    wp_enqueue_script(
        'language-select',
        get_stylesheet_directory_uri() . '/js/language-select.js',
        array('jquery')
    );

    // Smooth anchor script:
    wp_enqueue_script(
        'smooth-anchor',
        get_stylesheet_directory_uri() . '/js/smooth-anchor.js',
        array('jquery')
    );

    // Form validation script:
    if (is_home() || is_page('contact') || is_page('service')) {
        wp_enqueue_script(
            'form-validation',
            get_stylesheet_directory_uri() . '/js/form-validation.js',
            array('jquery')
        );
    }

    // Contact App script:
    if (is_home()) {
        wp_enqueue_script(
            'contact-app',
            get_stylesheet_directory_uri() . '/js/contact-app.js',
            array('jquery')
        );
    }

    // Film box script:
    if (is_home() || is_page('films')) {
        wp_enqueue_script(
            'film-box',
            get_stylesheet_directory_uri() . '/js/film-box.js',
            array('jquery')
        ); 
    }

    // Box aspect ratio script:
    if (is_home() || is_page('films') || is_page('news') || is_page('products')) {
        wp_enqueue_script(
            'box-aspect-ratio',
            get_stylesheet_directory_uri() . '/js/box-aspect-ratio.js',
            array('jquery')
        ); 
    }

    // Contact page script:
    if (is_page('contact')) {
        wp_enqueue_script(
            'contact-form',
            get_stylesheet_directory_uri() . '/js/contact-form.js',
            array('jquery')
        ); 
    }

    // Service page script:
    if (is_page('service')) {
        wp_enqueue_script(
            'service-form',
            get_stylesheet_directory_uri() . '/js/service-form.js',
            array('jquery')
        ); 
    }
}
add_action('wp_enqueue_scripts', 'lazzoni_enqueue_styles');