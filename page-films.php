<?php get_header(); ?>

<main class="container single-container my-5">
    <div class="row my-5 pt-5">

        <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'films',
                'post_status'    => 'publish',
                'posts_per_page' => -1
            ));

            $films_list = array();

            if ($wp_query->have_posts()) {
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();

                    $current = array(
                        'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                        'link' => get_post_meta($post->ID, 'link', true),
                        'title' => get_the_title(),
                        'category' => get_the_terms( $post->ID, 'film-category' )
                    );
                    
                    array_push($films_list, $current);
                }
            }

            $columns = array_column($films_list, 'category');
            array_multisort($columns, SORT_ASC, $films_list);

            $last_category = '';
            foreach ($films_list as $film) {
                if ($film['category'][0]->name != $last_category) {
                    $last_category = $film['category'][0]->name;

                    if ($last_category == '') $last_category = 'Inne filmy Lazzoni Group'

                    ?>

                    <div class="col-12">
                        <h1 class="title"><?php echo $film['category'][0]->name; ?>:</h1>
                    </div>

                    <?php
                }

                get_template_part('include/film-miniature', 'film-miniature', [
                    'image' => $film['image'],
                    'link' => $film['link'],
                    'title' => $film['title'],
                    'small' => false
                ]);

            }
        ?>

        <div class="col-12 text-center mt-5">
            <a href="<?php echo home_url(); ?>" class="button button-prim">Wróć na stronę główną</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>