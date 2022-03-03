<?php

add_action('wp_ajax_lazzoni_load', 'load_products');
add_action('wp_ajax_nopriv_lazzoni_load', 'load_products');

function load_products () {
    $default_group_slug = 'wiertarki';

    $search = $_REQUEST['search'];
    $group = $_REQUEST['group'];

    $show_categories = true;

    get_template_part('include/product-desc', 'product-desc', ['group' => $group]);

    if ($group == '') $group = $default_group_slug;

    $query_array = array('post_type' => 'post', 'posts_per_page' => -1);

    if (strlen($search) > 0) {
        $show_categories = false;

        $_a = array('s' => $search);

        $query_array = array_merge($query_array, $_a);

        // Only in any group:
        $post_types = get_terms('product-group', array(
            'hide_empty' => 0
        ));

        $all_groups = array();

        foreach($post_types as $type) {
            array_push($all_groups, $type->slug);
        }

        $_a = array('tax_query' => array(
            array(
                'taxonomy' => 'product-group',
                'field' => 'slug',
                'terms' => $all_groups
            )
        ));

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

            $current_image;

            if ($group == 'dostepne') {
                $current_image = kdmfi_get_featured_image_src( 'featured-image-2', 'full' );  

                if ($current_image == '') $current_image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
            } 
            else $current_image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));

            $current = array(
                'image' => $current_image,
                'link' => get_the_permalink(),
                'title' => get_the_title(),
                'category' => get_the_category()[0]->slug
            );
            
            array_push($products_list, $current);
        }
    } else {
        ?>

            <div class="col-12 text-center mt-5 error">
                <h2>Nie znaleziono żadnych produktów!</h2>
            </div>

        <?php

        die();
    }

    $columns = array_column($products_list, 'category');
    array_multisort($columns, SORT_ASC, $products_list);

    if (!$show_categories) {
        ?>

        <div class="col-12">
            <h2 class="products-category-title title text-md-left d-block">
                Wyniki wyszukiwania dla <i>&bdquo;<?php echo $search; ?>&rdquo;</i>:
            </h2>
        </div>

        <?php
    }
    
    $last_category = '';
    $n = 0;
    foreach ($products_list as $current_product) {
        if ($show_categories && $last_category != $current_product['category']) {
            $current_category = get_category_by_slug($current_product['category'])->name;

            $current_slug = get_category_by_slug($current_product['category'])->slug;
            if ($current_slug == 'uncategorized' || $current_slug == 'bez-kategorii')
                $current_category = "Produkty LAZZONI GROUP";

            $current_description = category_description( get_category_by_slug($current_slug)->term_id );
            
            ?>

            <div class="col-12 p-0 title-box text-left py-3 <?php if ($n > 0) echo 'mt-5' ?>" data-anchor="<?php echo $current_category; ?>">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2 class="products-category-title px-3 px-md-5 pl-3 pl-md-5 my-0 py-2">
                            <?php echo $current_category.':'; ?>
                        </h2>
                    </div>

                    <?php if (strlen($current_description) > 0) { ?>

                        <div class="col-12 col-lg-4 text-center text-md-right">
                            <button class="button-read-more read-more-product py-2 px-4 mr-5" type="button" data-toggle="collapse"
                                data-target="#read-more-<?php echo $current_slug; ?>">
                                rozwiń opis
                            </button>
                        </div>

                        <div class="col-12">
                            <div class="collapse m-0 pr-5 pl-3 pl-md-5 mr-md-5 mb-0" id="read-more-<?php echo $current_slug; ?>">
                                <?php echo $current_description; ?>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>

            <?php

            $n++;
            $last_category = $current_product['category'];
        }

        get_template_part('include/product-miniature', 'product-miniature', [
            'image' => $current_product['image'],
            'link' => $current_product['link'].'/?g='.$group,
            'title' => $current_product['title']
        ]);
    }

    die();
}