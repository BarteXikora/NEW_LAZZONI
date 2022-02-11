<?php

add_action('wp_ajax_lazzoni_load', 'load_products');
add_action('wp_ajax_nopriv_lazzoni_load', 'load_products');

function load_products () {
    $default_group_slug = 'test';

    $search = $_REQUEST['search'];
    $group = $_REQUEST['group'];

    $show_categories = true;

    if ($group == 'test') { ?> 

        <div class="col-12 mb-5 text-center text-md-left">
            <h1 class="h4 font-title mb-3">
                <a href="tel:+48504262401">
                    GŁOWICE WIERTARSKIE &mdash; ZAMÓW TERAZ +48 504 262 401
                </a>
            </h1>

            <p>
                Jesteśmy polskim producentem głowic wiertarskich. Zaufało nam już ponad 1000 firm. 
                Nasze produkty podbijają również rynek zagraniczny. Podczas współpracy z klientem 
                dokładamy wszelkiej staranności, aby każda nasza głowica wiertarska była niezawodna. 
                Ponadto jesteśmy w stanie wyprodukować głowicę w bardzo krótkim czasie.
            </p>

            <div class="collapse m-0" id="read-more">
                <p>
                    Produkcja głowic wiertarskich odbywa się z zachowaniem wszelkich norm 
                    konstrukcyjnych oraz na najwyższym poziomie tolerancji. Głowica wiertarska składa 
                    się z solidnych podzespołów oraz stalowego korpusu, co przekłada się na żywotność 
                    i bezawaryjność. Kontrola jakości wraz z zapisaniem jej historii na każdym etapie 
                    produkcji sprawia, że nasze głowice wiertarskie charakteryzują się najwyższą 
                    wydajnością. Szeroki wybór głowic wiertarskich pozwala na idealne dopasowanie 
                    urządzenia do potrzeb klienta. Realizujemy indywidualne zamówienia, zapewniając 
                    elastyczność na każdym etapie współpracy.
                </p>

                <p>W naszej ofercie znajdziemy:</p>
                <ul>
                    <li>Głowice wiertarskie (głowice wielowrzecionowe)</li>
                    <li>Głowice na zamówienie</li>
                    <li>Głowice liniowe</li>
                    <li>Głowice puszkowe</li>
                </ul>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/glowice-wiertarskie/gw-0.png" alt="" class="img-fluid p-5 p-lg-2">
                    </div> 

                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/glowice-wiertarskie/gw-1.png" alt="" class="img-fluid p-5 p-lg-2">
                    </div> 

                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/glowice-wiertarskie/gw-2.png" alt="" class="img-fluid p-5 p-lg-2">
                    </div> 

                    <div class="col-12 col-md-6 col-lg-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/glowice-wiertarskie/gw-3.png" alt="" class="img-fluid p-5 p-lg-2">
                    </div> 
                </div>
            </div>

            <div class="text-center">
                <button class="button-read-more py-2 px-4 mt-2" type="button" data-toggle="collapse"
                    data-target="#read-more">
                    Czytaj dalej
                </button>
            </div>
        </div>

    <?php }


    if ($group == '') $group = $default_group_slug;

    $query_array = array('post_type' => 'post', 'posts_per_page' => -1);

    if (strlen($search) > 0) {
        $show_categories = false;

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

        <div class="col-12 px-4">
            <h2 class="products-category-title title text-center text-md-left">
                Wyniki wyszukiwania dla <i>&bdquo;<?php echo $search; ?>&rdquo;</i>:
            </h2>
        </div>

        <?php
    }
    
    $last_category = '';
    foreach ($products_list as $current_product) {
        if ($show_categories && $last_category != $current_product['category']) {
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