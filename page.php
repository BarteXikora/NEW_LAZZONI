<?php get_header(); the_post(); ?>

<!-- MAIN CONTENT -->
<main class="container single-container my-5">
    <div class="row my-5 py-5">

        <div class="col-12 pt-1 px-md-5 text-center text-md-left">
            <?php the_content(); ?>
        </div>

        <div class="col-12 text-center mt-5">
            <a href="<?php echo home_url(); ?>" class="button button-prim">Wróć na stronę główną</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>