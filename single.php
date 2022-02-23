<?php get_header(); the_post(); ?>

<!-- MAIN CONTENT -->
<main class="container single-container my-5" id="single-content" data-custom-title="<?php 
echo get_post_meta($post->ID, 'title', true); ?>">
    <div class="row my-5 <?php if (get_post_type(get_the_ID()) == 'post') echo 'pt-5'; else echo 'pt-2' ?>">
        <?php if (get_post_type(get_the_ID()) == 'news') { ?>
            <div class="col-12 pt-5 text-center text-md-left">
                <h1 class="title"><?php the_title(); ?></h1>
            </div>
        <?php } ?>

        <div class="col-12 pt-1 px-md-5 text-center text-md-left">
            <?php the_content(); ?>
        </div>

        <div class="col-12 text-center mt-5">
            <?php if (get_post_type(get_the_ID()) == 'news') { ?>
                <a href="<?php echo get_page_link(get_page_by_path('news')); ?>" class="button button-prim">Wróć do aktualności</a>
            <?php } else if (get_post_type(get_the_ID()) == 'post') { ?>
                <a href="<?php
                    echo get_page_link(get_page_by_path('contact'));
                    echo '?about='.get_the_title();
                ?>" class="button button-prim">Skontaktuj się w sprawie tego produktu</a>

                <a href="<?php 

                    $goBack = '';

                    if (isset($_GET['g'])) $goBack = '?p='.$_GET['g'];

                    echo get_page_link(get_page_by_path('products')); 
                    echo $goBack;

                ?>" class="button">Wróć na listę produktów</a>
            <?php } else { ?>
                <a href="<?php echo home_url(); ?>" class="button button-prim">Wróć na stronę główną</a>
            <?php } ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>