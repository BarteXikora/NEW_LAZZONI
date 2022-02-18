<?php get_header() ?>

<section class="container-fluid fixed-top products-navigation-container">
    <div class="row pt-5 pb-4 px-5">
        <div class="col-10 col-md-5 col-lg-3 py-4 py-md-5 pr-3 pr-xl-5 products-navigation">
            <!-- TOGGLE BUTTON -->
            <button class="products-toggler">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.png" id="open" alt="Rozwiń menu" class="img-fluid p-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-left.png" id="close" alt="Schowaj menu" class="img-fluid p-1 d-none">
            </button>

            <!-- SEARCH FORM -->
            <form class="form" id="search-form">
                <div class="input-group">
                    <input type="text" id="search-input" class="form-control" placeholder="Szukaj produktów">
                    <div class="input-group-append">
                    <button class="button-group button-prim" type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-search.png" alt="Wyszukaj!" width="34" class="img-fluid p-1">
                    </button>
                    </div>
                </div>
            </form>

            <!-- GROUPS -->
            <div class="groups-container pl-2 mt-4">
                <h2 class="p-2 mb-3">Grupy produktów:</h3>

                <ul class="pr-3 groups-list" id="groups">

                    <?php
                        $post_types = get_terms('product-group', array(
                            'hide_empty' => 0
                        ));

                        foreach($post_types as $type) {
                    ?>

                    <li>
                        <a class="group-button py-1" data-category="<?php echo $type->slug; ?>">
                            <?php echo $type->name; ?>
                        </a>
                        <div class="sub-groups-list"></div>
                    </li>

                    <?php
                        }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="container-fluid single-container py-5">
    <div class="row pt-5 pb-4 px-5 single-container-products"
        data-page="<?php if (isset($_GET['p'])) echo $_GET['p']; ?>" 
        data-link="<?php echo admin_url('admin-ajax.php'); ?>">
        <div class="col-12 col-lg-9 offset-0 offset-lg-3">
            <div class="loading-courtain pt-5">
                <div class="loading-elements mt-5"></div>
            </div>

            <div class="row text-center" id="products-content"></div>
        </div>
    </div>
</section>

<?php get_footer() ?>