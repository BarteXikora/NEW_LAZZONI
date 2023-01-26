<?php get_header(); ?>

<main class="container single-container my-5">
    <div class="row my-5 pt-5">

        <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'films',
                'post_status' => 'publish',
                'posts_per_page' => -1
            ));

            $film_categories = get_terms('film-category', array(
                'hide_empty' => 1,
                'orderby' => 'slug',
                'order' => 'ASC'
            ));

            $films_list = array();

            foreach($film_categories as $category) {
                $films_list = array_merge($films_list, array($category->slug => array()));
            }

            if ($wp_query->have_posts()) {
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();

                    $current = array(
                        'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                        'link' => get_post_meta($post->ID, 'link', true),
                        'title' => get_the_title(),
                        'category' => get_the_terms( $post->ID, 'film-category' )[0]->name,
                        'category_slug' => get_the_terms( $post->ID, 'film-category' )[0]->slug
                    );

                    array_push($films_list[get_the_terms($post->ID, 'film-category')[0]->slug], $current);
                }
            }

            foreach ($films_list as $current_category) {
                $i = 0;

                foreach ($current_category as $current_film) {
                    if ($i == 0) {
                        if ($current_film['category'] == '') $current_film['category'] = 'Inne filmy Lazzoni Group';
                        
                    ?>
                        <div class="col-12">
                            <h1 class="title"><?php echo $current_film['category']; ?>:</h1>
                        </div>
                    <?php

                    }

                    if ($i == 2 && count($current_category) > 2) {
                            
                    ?>
                        <div class="collapse row m-0" id="read-more-<?php echo $current_film['category_slug']; ?>">
                    <?php

                    }

                    get_template_part('include/film-miniature', 'film-miniature', [
                        'image' => $current_film['image'],
                        'link' => $current_film['link'],
                        'title' => $current_film['title'],
                        'small' => false
                    ]);

                    if ($i == count($current_category) - 1 && count($current_category) > 2) {
                    ?>

                        </div>
                        <div class="col-12 text-center mb-5">
                            <button class="button-read-more py-2 px-4 mt-4" type="button" data-toggle="collapse"
                                data-target="#read-more-<?php echo $current_film['category_slug']; ?>">
                                    więcej
                            </button>
                        </div>

                    <?php
                    }

                    $i++;
                }
            } 
        ?>

        <div class="col-12 text-center mt-5">
            <a href="<?php echo home_url(); ?>" class="button button-prim">Wróć na stronę główną</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>