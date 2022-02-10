<?php get_header() ?>

<section class="container fixed-top products-navigation-container">
    <div class="row pt-5 pb-4">
        <div class="col-10 col-md-5 col-lg-4 py-4 py-md-5 pr-5 products-navigation">
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
                    <li>
                        <a class="group-button py-1" data-category="dostępne-w-magazynie">Dostępne w magazynie</a>
                        <div class="sub-groups-list"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="container single-container py-5">
    <div class="row pt-5 pb-4 single-container-products" data-page="wiertarki" data-link="//"> <!-- SET IN PHP -->
        <div class="col-12 col-lg-8 offset-0 offset-lg-4">
            <div class="loading-courtain pt-5">
                <div class="loading-elements mt-5"></div>
            </div>

            <div class="row text-center" id="products-content">
                <div class="col-12 px-4" data-anchor="Wiertarki przelotowe">
                    <h2 class="products-category-title title text-center text-md-left">
                        Wiertarki przelotowe: 
                    </h2>
                </div>

                <a href="#" class="miniature col-12 col-md-6 p-4 text-center text-md-left">
                    <div class="box ar8" style="background-image: url(img/__drill.jpg)">
                        <div class="box-content">
                            <h3>Wiertarka wielowrzecionowa EXPERT Z 1+1 K</h3>
                        </div>
                    </div>
                </a> 
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>