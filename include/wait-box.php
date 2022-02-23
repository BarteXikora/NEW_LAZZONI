<div class="film-box-container d-none" id="wait-box-container"> 
    <div class="film-box wait-box p-5">
        <h2 class="title">Może Cię zainteresować:</h2>

        <div class="row my-5 px-3">

        <?php

            $query_array = array('post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'rand');
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
            <a href="#" class="button button-prim mb-2">Skontaktuj się z nami</a>
            <a href="#f" class="button mb-5 mb-md-0">Zobacz więcej produktów</a>
        </div>

    </div>
</div>