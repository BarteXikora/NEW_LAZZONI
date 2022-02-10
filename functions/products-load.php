<?php

add_action('wp_ajax_lazzoni_load', 'load_products');
add_action('wp_ajax_nopriv_lazzoni_load', 'load_products');

function load_products () {
    $search = $_REQUEST['search'];
    $group = $_REQUEST['group'];

    $query_array = array('post_type' => 'post', 'posts_per_page' => -1);

    if (strlen($search) > 0) {
        $_a = array('s' => $search);

        $query_array = array_merge($query_array, $_a);
    } else {
        $_a = array('tax_query' => array(
            array(
                'taxonomy' => 'product-group',
                'field' => 'slug',
                'terms' => array ($group)
            )
        ));

        $query_array = array_merge($query_array, $_a);
    }

    query_posts($query_array);

    $products_list = array();

    if (have_posts()) {
        while (have_posts()) {
            the_post();

            $current = array(
                'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                'link' => get_the_permalink(),
                'title' => get_the_title(),
                'category' => get_the_category()[0]->slug
            );
            
            array_push($products_list, $current);
        }
    } else echo 'nic ni ma';

    $columns = array_column($products_list, 'category');
    array_multisort($columns, SORT_ASC, $products_list);
    
    $last_category = '';
    foreach ($products_list as $current_product) {
        if ($last_category != $current_product['category']) {
            $current_category = get_category_by_slug($current_product['category'])->name;

            ?>

            <div class="col-12 px-4" data-anchor="<?php echo $current_category; ?>">
                <h2 class="products-category-title title text-center text-md-left">
                    <?php echo $current_category; ?>
                </h2>
            </div>

            <?php

            $last_category = $current_product['category'];
        }

        ?>

        <a href="<?php echo $current_product['link']; ?>" class="miniature col-12 col-md-6 p-4 text-center text-md-left">
            <div class="box ar8" style="background-image: url(<?php echo $current_product['image']; ?>)">
                <div class="box-content">
                    <h3><?php echo $current_product['title']; ?></h3>
                </div>
            </div>
        </a> 

        <?php
    }

    die();
}