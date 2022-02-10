<?php get_header(); ?>

<!-- MAIN CONTENT -->
<main class="container single-container my-5">
    <div class="row my-5 pt-3">
        <div class="col-12 pt-5 text-center text-md-left">
            <h1 class="title">
                <?php
                    the_post(); the_title();
                ?>
            </h1>
        </div>

        <div class="col-12 pt-1 px-md-5 text-center text-md-left">
            <?php the_content(); ?>
        </div>

        <div class="col-12 text-center mt-5">
            <a href="<?php echo get_page_link(get_page_by_path('news')); ?>" class="button button-prim">Wróć do aktualności</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>