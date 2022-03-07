<?php get_header(); the_post(); ?>

<!-- MAIN CONTENT -->
<main class="container single-container my-5" id="single-content" data-custom-title="<?php 
echo get_post_meta($post->ID, 'title', true); ?>">
    <div class="row my-5 pt-2">
        <div class="col-12 pt-5 text-center text-md-left">
            <h1 class="title"><?php the_title(); ?></h1>
        </div>

        <div class="col-12 pt-1 px-md-5 text-center text-md-left">
            <?php the_content(); ?>
        </div>

        <div class="col-12 text-center mt-5">
            <a href="<?php
                echo get_page_link(get_page_by_path('contact'));
                echo '?about=Oferta pracy: '.get_the_title();
            ?>" class="button button-prim" target="_blank">Skontaktuj się w sprawie tego ogłoszenia</a>
            <a href="<?php echo get_page_link(get_page_by_path('career')); ?>" class="button">Wróć na listę ofert</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>