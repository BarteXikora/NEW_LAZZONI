<div class="film-box-container d-none" id="wait-box-container"> 
    <div class="film-box wait-box">
        <div class="film-box-bar p-0 mb-3">
            <div class="film-box-close-box">
                <button class="film-box-close" id="wait-box-close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" alt="Zamknij okno." class="p-2">
                </button>
            </div>
        </div>
        <div class="px-5 pb-5 pt-4">
            <h2 class="title">Może Cię zainteresować:</h2>

            <div class="row my-5 px-3">

            <?php

                $query_array = array('post_type' => 'post', 'posts_per_page' => 3, 
                    'orderby' => 'rand', 'tax_query' => array(array(
                        'taxonomy' => 'product-group',
                        'field' => 'slug',
                        'terms' => array (
                            'dostepne'
                        )
                    )
                ));
                query_posts($query_array);

                $products_list = array();

                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        $current = array(
                            'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                            'link' => get_the_permalink(),
                            'title' => get_the_title(),
                        );
            
                        array_push($products_list, $current);
                    }
                }

                foreach ($products_list as $current_product) {
                    get_template_part('include/product-miniature', 'product-miniature', [
                        'image' => $current_product['image'],
                        'link' => $current_product['link'],
                        'title' => $current_product['title'],
                        'wait-box' => true
                    ]);
                }

            ?>

            </div>

            <div class="text-center">
                <a href="<?php echo get_page_link(get_page_by_path('contact')); ?>" class="button button-prim mb-2">Skontaktuj się z nami</a>
                <a href="<?php echo get_page_link(get_page_by_path('products')); ?>" class="button mb-5 mb-md-0">Zobacz więcej produktów</a>
            </div>
        </div>
    </div>
</div>