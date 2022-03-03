<?php get_header(); ?>

<!-- VIDEO BACKGROUND -->
<section class="video-bg-container" id="t">
    <video autoplay muted loop>
        <source src="<?php echo get_template_directory_uri(); ?>/img/background.mp4" type="video/mp4">
    </video>
    <div class="video-bg-courtain">
        <div class="video-bg-content container-fluid text-center text-lg-left px-md-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0 col-xl-10 pr-lg-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-main.png" alt="LAZZONI GROUP" class="d-none d-lg-inline px-5 mb-3 mr-5 gsap-main-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.png" alt="LAZZONI GROUP" class="d-inline px-4 d-lg-none mb-4 gsap-main-logo">

                    <p class="mb-4 mb-md-5 px-5 gsap-main-text">
                        <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'film-bg-text']); ?>

                        <span class="d-none d-lg-inline">
                            <?php get_template_part('include/main-languages', 'main-languages', 
                                ['content' => 'film-bg-desktop']); ?>
                        </span>
                    </p>

                    <div class="gsap-main-buttons px-5">
                        <a href="#o" class="button button-prim mb-2">Nasze produkty</a>
                        <a href="#f" class="button button-white mb-5 mb-md-0">Nasze filmy</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ARROW DOWN -->
        <a href="#o">
            <div class="arrow-down-container container-fluid px-5">
                <div class="row px-5">
                    <div class="col-12 px-5 text-center text-lg-left">
                        <div class="arrow-down ml-md-4"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- CARDS -->
<section class="section-dark py-5 px-3" id="o">
    <div class="container-fuid px-md-5 py-5">
        <div class="row">

            <!-- CARD 1: WIERTARKI -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=wiertarki" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pr-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-0.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Wiertarki</h2>
                        <p>
                            <?php get_template_part('include/main-languages', 'main-languages', 
                                ['content' => 'wiertarki']); ?>
                        </p>
                    </div>
                </div>
            </a>

            <!-- CARD 2: AUTOMATYZACJA -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=automatyzacja" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pl-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-1.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Automatyzacja</h3>
                            <p>
                                <?php get_template_part('include/main-languages', 'main-languages', 
                                    ['content' => 'automatyzacja']); ?>
                            </p>
                    </div>
                </div>
            </a>

            <!-- CARD 3: GŁOWICE WIERTARSKIE -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=glowice-wiertarskie" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pr-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-2.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Głowice wiertarskie</h3>
                            <p>
                                <?php get_template_part('include/main-languages', 'main-languages', 
                                    ['content' => 'glowice']); ?>
                            </p>
                    </div>
                </div>
            </a>

            <!-- CARD 4: DOSTEPNE W MAGAZYNIE -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=dostepne" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pl-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-3.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Dostępne w magazynie</h3>
                            <p>
                                <?php get_template_part('include/main-languages', 'main-languages', 
                                    ['content' => 'dostepne']); ?>
                            </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-12 text-center mt-5">
            <a href="https://lazzonigroup.olx.pl" target="_blank" class="button button-prim">
                Zobacz nasze aukcje
            </a>
        </div>
    </div>
</section>

<!-- ABOUT US SECTION -->
<main class="py-5">
    <div class="container-fluid px-md-5 py-5">
        <div class="row px-md-5 about-us-container text-center text-md-left">
            <div class="col-12">
                <h1>
                    <?php get_template_part('include/main-languages', 'main-languages', 
                        ['content' => 'about-title']); ?>
                </h1>
                <h2>
                    <?php get_template_part('include/main-languages', 'main-languages', 
                        ['content' => 'about-subtitle1']); ?>
                </h2>
            </div>

            <div class="col-12 col-lg-4">
                <p>
                    <?php get_template_part('include/main-languages', 'main-languages', 
                        ['content' => 'about-p1']); ?>
                </p>
            </div>

            <div class="col-12 col-lg-4">
                <p>
                    <?php get_template_part('include/main-languages', 'main-languages', 
                        ['content' => 'about-p2']); ?>
                </p>
            </div>

            <div class="col-12 col-lg-4">
                <p>
                    <?php get_template_part('include/main-languages', 'main-languages', 
                        ['content' => 'about-p3']); ?>
                </p>
            </div>

            <div class="collapse row m-0" id="read-more">
                <div class="col-12 col-lg-8 mt-5 pr-lg-5">
                    <h2>
                        <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'about-subtitle2']); ?>
                    </h2>
                    <p>
                        <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'about-p4']); ?>
                    </p>
                </div>

                <div class="col-12 col-lg-4">
                    <h3 class="mb-3">
                        <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'about-subtitle3']); ?>
                    </h3>

                    <ul>
                        <!-- <li>Wiertarki przelotowe</li>
                        <li>Wiertarki CNC</li>
                        <li>Wiertarki do szuflad</li>
                        <li>Wiertarki wielowrzecionowe</li>
                        <li>wiertarki automatyczne</li>
                        <li>Centra wiertarskie</li>
                        <li>Głowice wielowrzecionowe</li>
                        <li>Spersonalizowane głowice wiertarskie</li> -->

                        <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'about-list']); ?>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center">
                <button class="button-read-more py-2 px-4 mt-4" type="button" data-toggle="collapse"
                    data-target="#read-more">
                        <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'read-more']); ?>
                </button>
            </div>

        </div>
    </div>
</main>

<!-- YOUTUBE FILMS SECTION -->
<section class="section-dark py-5" id="f">
    <div class="container-fluid px-md-5 py-5">
        <div class="row px-md-5">
            <div class="col-12 text-center text-md-left">
                <h2 class="h1">
                    <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'films-title']); ?>
                </h2>
            </div>

            <?php
                $wp_query = new WP_Query(array(
                    'post_type' => 'films',
                    'post_status' => 'publish',
                    'posts_per_page' => 4
                ));

                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();

                        get_template_part('include/film-miniature', 'film-miniature', [
                            'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                            'link' => get_post_meta($post->ID, 'link', true),
                            'title' => get_the_title(),
                            'small' => true
                        ]);
                    }
                }
            ?>

            <div class="col-12 text-center mt-5">
                <a href="<?php echo get_page_link(get_page_by_path('films')); ?>" class="button button-prim">
                    <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'films-btn']); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="py-5">
    <div class="container-fluid px-md-5 py-5">
        <div class="row px-md-5">
            <div class="col-12 text-center text-md-left">
                <h2 class="h1">
                    <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'news-title']); ?>
                </h2>
            </div>

            <?php
                $wp_query = new WP_Query(array(
                    'post_type' => 'news',
                    'post_status'    => 'publish',
                    'posts_per_page' => 4
                ));

                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();

                        get_template_part('include/news-miniature', 'news-miniature', [
                            'image' => wp_get_attachment_url(get_post_thumbnail_id( $post->ID )),
                            'link' => get_the_permalink(),
                            'title' => get_the_title(),
                            'date' => get_the_date(),
                            'small' => true,
                            'catalog' => false
                        ]);
                    }
                }
            ?>

            <div class="col-12 text-center mt-5">
                <a href="<?php echo get_page_link(get_page_by_path('news')); ?>" class="button button-prim">
                    <?php get_template_part('include/main-languages', 'main-languages', 
                            ['content' => 'news-btn']); ?>
                </a>
            </div>
        </div>
    </div>
</section>  

<?php 

get_template_part('include/map', 'map');

get_footer(); 

?>