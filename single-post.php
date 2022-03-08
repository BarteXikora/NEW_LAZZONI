<?php get_header(); the_post(); ?>

<!-- MAIN CONTENT -->
<main class="container-fluid single-container my-5 pt-1 px-md-5" data-custom-title="<?php 
echo get_post_meta($post->ID, 'title', true); ?>">
    <div class="row my-5 px-3">
        <div class="col-12 col-lg-9 pr-lg-5" id="single-content">
            <h1 class="title"><?php the_title(); ?></h1>

            <div class="px-1 px-md-4">
                <?php the_content(); ?>
            </div>

            <div class="text-center mb-5">
                <a href="<?php echo get_page_link(get_page_by_path('products')); ?>" class="button">
                    Wróć na listę produktów
                </a>
            </div>
        </div>

        <div class="col-12 col-lg-3">
            <h2 class="title">Kontakt:</h2>

            <div class="text-center pt-3">
                <a href="<?php
                    echo get_page_link(get_page_by_path('contact'));
                    echo '?about='.get_the_title();
                ?>" target="_blank" class="button">
                    <div class="row font-weight-bold text-left d-flex align-items-center">
                        <div class="col-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/contact.png" 
                                alt="Skontaktuj się w sprawie tego produktu" class="img-fluid">
                        </div>
                        <div class="col-8 px-2">
                            <span>Skontaktuj się w sprawie tego produktu</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="mt-3 ml-1 sidebar-social-icon">
                
            </div>

            <h2 class="title mt-5 mb-3">Zobacz również:</h2>

            <div class="single-container-products px-1">
                <?php

                    $query_array = array('post_type' => 'post', 'posts_per_page' => 3, 
                    'orderby' => 'rand', 'tax_query' => array(array(
                        'taxonomy' => 'product-group',
                        'field' => 'slug',
                        'terms' => array (
                            'dostepne'
                        ))
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
                            'sidebar' => true
                        ]);
                    }

                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>