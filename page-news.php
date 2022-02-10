<?php get_header(); ?>

<main class="container single-container my-5">
    <div class="row my-5 pt-5">
        <div class="col-12">
            <h1 class="title">Aktualności / Katalogi:</h1>
        </div>

        <?php
            $wp_query = new WP_Query(array(
                'post_type' => 'news',
                'post_status'    => 'publish',
                'posts_per_page' => -1
            ));

            if ($wp_query->have_posts()) {
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();

                    get_template_part('include/news-miniature', 'news-miniature', [
                        'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                        'link' => get_the_permalink(),
                        'title' => get_the_title(),
                        'date' => get_the_date()
                    ]);
                }
            }
        ?>

        <div class="col-12 text-center mt-5">
            <a href="<?php echo home_url(); ?>" class="button button-prim">Wróć na stronę główną</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>