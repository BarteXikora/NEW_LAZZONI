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
                        Jesteśmy polskim producentem wiertarek przemysłowych stworzonych dla branży meblarskiej.

                        <span class="d-none d-lg-inline">
                            Specjalizujemy się w zakresie wiertarek przelotowych, wiertarek CNC, a także
                            automatyzacji procesu wiercenia. Oprócz szerokiego wachlarzu maszyn w standardowej
                            konfiguracji, produkujemy również maszyny customowe oraz głowice wiertarskie bazując
                            na rysunkach elementów otrzymanych od klienta.
                        </span>
                    </p>

                    <div class="gsap-main-buttons px-5">
                        <a href="#" class="button button-prim mb-2">Nasze produkty</a>
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
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=010_wiertarki" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pr-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-0.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Wiertarki</h2>
                        <p>
                            W ofercie posiadamy wiertarki półautomatyczne z załadunkiem ręcznym, wiertarki przemysłowe z załadunkiem 
                            automatycznym, wiertarki przelotowe, wiertarki wielowrzecionowe oraz inne urządzenia.
                        </p>
                    </div>
                </div>
            </a>

            <!-- CARD 2: AUTOMATYZACJA -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=030_automatyzacja" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pl-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-1.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Automatyzacja</h3>
                            <p>
                                Specjalizujemy się również w automatyzacji procesu wiercenia. Nasze zautomatyzowane podajniki 
                                idealnie współgrają z wiertarkami przelotowymi.
                            </p>
                    </div>
                </div>
            </a>

            <!-- CARD 3: GŁOWICE WIERTARSKIE -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=020_glowice-wiertarskie" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pr-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-2.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Głowice wiertarskie</h3>
                            <p>
                                Projektujemy i wykonujemy głowice wiertarskie na zamówienie do wiertarek przemysłowych, wiertarek 
                                przelotowych, wielowrzecionowych itp. Posiadamy wiele konfiguracji głowic wiertarskich z 
                                możliwością adaptacji pod Państwa urządzenie. 
                            </p>
                    </div>
                </div>
            </a>

            <!-- CARD 4: DOSTEPNE W MAGAZYNIE -->
            <a href="<?php echo get_page_link(get_page_by_path('products')); ?>?p=000_dostepne" class="card-a d-flex col-10 col-md-12 col-lg-6 offset-1 offset-md-0 mb-4 pl-lg-4">
                <div class="row card-container">
                    <div class="card-image col-12 col-md-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/card-3.jpg)"></div>
                    <div class="col-12 col-md-7 p-3 pl-md-4 text-center text-md-left">
                        <h2 class="font-title pt-2 pb-3">Dostępne w magazynie</h3>
                            <p>
                                W naszej hali wystawowo-prezentacyjnej posiadamy około 60 produktów lazzoni dostępnych od ręki. 
                                Są to urządzenia takie jak: wiertarki przelotowe, wiertarki wielowrzecionowe, podajniki, roboty.
                            </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-12 text-center mt-5">
            <a href="#" class="button button-prim">
                Zobacz nasze aukcje
            </a>
        </div>
    </div>
</section>

<!-- ABOUT US SECTION -->
<main class="py-5">
    <div class="container-fluid px-5 py-5">
        <div class="row px-5 about-us-container text-center text-md-left">
            <div class="col-12">
                <h1>Wiertarki przemysłowe, wielowrzencionowe, CNC</h1>
                <h2>DLACZEGO MY?</h2>
            </div>

            <div class="col-12 col-lg-4">
                <p>
                    Pierwsze wiertarki przemysłowe Lazzoni Group zapoczątkowały na rynku w 2000 r.
                    Doświadczenie, które zdobyliśmy przez ten okres czasu pozwala nam na zastosowanie
                    różnych rozwiązań w tematyce wiercenia. Ponadto kilka naszych wiertarek przemysłowych
                    zostało wzbogacone o dodatkowe wyposażenie takie jak piły tnąco-kątowe czy też
                    agregaty kołkujące. Dzięki doświadczeniu, które zdobyliśmy możemy śmiało powiedzieć,
                    że tworzymy silną grupę wiertarek przemysłowych dla zakładów stolarskich oraz
                    przemysłu.
                </p>
            </div>

            <div class="col-12 col-lg-4">
                <p>
                    Współpraca z różnymi producentami z Europy, Turcji oraz Azji pozwoliła nam jeszcze 
                    bardziej poszerzyć nasze doświadczenie w branży meblarskiej oraz stolarskiej, co 
                    sprawiło, że nasze wiertarki przemysłowe zostały pod każdym względem udoskonalone tak, 
                    aby maksymalnie przyspieszyć produkcję. Śmiało możemy stwierdzić, że znając potrzeby 
                    rynku jesteśmy w stanie sprostać nawet najbardziej wymagającym klientom. Nasza firma 
                    posiada szeroką gamę produktów. Zaczynając od wiertarek wielowrzecionowych, po 
                    wiertarki przelotowe, kończąc na Centrach wiertarskich sterowanych CNC.
                </p>
            </div>

            <div class="col-12 col-lg-4">
                <p>
                    Praktycznie każda wiertarka wielowrzecionowa oraz wiertarka przelotowa posiada
                    możliwość konfiguracji pod szczególne wymagania klienta. „Wyposażenie w dodatkowe
                    jednostki wiercące, zamontowanie spersonalizowanej głowicy wiertarskiej, powrót
                    elementu do operatora, zwiększenie pola roboczego wiertarki przelotowej lub wiertarki
                    wielowrzecionowej” są to przykładowe konfiguracje, które jesteśmy w stanie wykonać.
                </p>
            </div>

            <div class="collapse row m-0" id="read-more">
                <div class="col-12 col-lg-8 mt-5 pr-lg-5">
                    <h2>WIERTARKI PRZEMYSŁOWE OD LAZZONI GROUP</h2>
                    <p>
                        Zapewniamy projektowanie oraz realizację niezawodnych ciągów technologicznych dla wiertarek
                        przemysłowych pod względem wydajności, efektywności oraz jakości. Z naszymi maszynami można
                        zapoznać się zarówno zdalnie, za pośrednictwem filmów obrazujących pracę wiertarek
                        przemysłowych
                        na kanale YouTube, oraz stacjonarnie odwiedzając naszą halę wystawową, na której
                        prezentowane są
                        ich najnowsze modele (aktualnie na naszej hali wystawowej znajduje się ponad 40 wiertarek
                        przemysłowych). Oferujemy klientom również fachowe doradztwo z zakresu zakupu maszyn i
                        narzędzi,
                        profesjonalny serwis gwarancyjny oraz obsługę pogwarancyjną.
                    </p>
                </div>

                <div class="col-12 col-lg-4">
                    <h3 class="mb-3">
                        Poniżej przedstawiamy nasze wiertarki przemysłowe i ich rodzaje oraz rozwiązania w tematyce
                        wiercenia:
                    </h3>

                    <ul>
                        <li>Wiertarki przelotowe</li>
                        <li>Wiertarki CNC</li>
                        <li>Wiertarki do szuflad</li>
                        <li>Wiertarki wielowrzecionowe</li>
                        <li>wiertarki automatyczne</li>
                        <li>Centra wiertarskie</li>
                        <li>Głowice wielowrzecionowe</li>
                        <li>Spersonalizowane głowice wiertarskie</li>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center">
                <button class="button-read-more py-2 px-4 mt-4" type="button" data-toggle="collapse"
                    data-target="#read-more">
                    Czytaj dalej
                </button>
            </div>

        </div>
    </div>
</main>

<!--<section class="py-5">
    <div class="container-fluid px-5 py-5">
        <main class="row about-us-container text-center text-md-left">
                    <div class="col-12">
                        <h1>Wiertarki przemysłowe, wielowrzencionowe, CNC</h1>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2>DLACZEGO MY?</h2>
                        <p>
                            Pierwsze wiertarki przemysłowe Lazzoni Group zapoczątkowały na rynku w 2000 r.
                            Doświadczenie, które zdobyliśmy przez ten okres czasu pozwala nam na zastosowanie
                            różnych rozwiązań w tematyce wiercenia. Ponadto kilka naszych wiertarek przemysłowych
                            zostało wzbogacone o dodatkowe wyposażenie takie jak piły tnąco-kątowe czy też
                            agregaty kołkujące. Dzięki doświadczeniu, które zdobyliśmy możemy śmiało powiedzieć,
                            że tworzymy silną grupę wiertarek przemysłowych dla zakładów stolarskich oraz
                            przemysłu.
                        </p>
                        <p>
                            Współpraca z różnymi producentami z Europy, Turcji oraz Azji pozwoliła nam jeszcze
                            bardziej poszerzyć nasze doświadczenie w branży meblarskiej oraz stolarskiej, co
                            sprawiło, że nasze wiertarki przemysłowe zostały pod każdym względem udoskonalone tak,
                            aby maksymalnie przyspieszyć produkcję. Śmiało możemy stwierdzić, że znając potrzeby
                            rynku jesteśmy w stanie sprostać nawet najbardziej wymagającym klientom. Nasza firma
                            posiada szeroką gamę produktów. Zaczynając od wiertarek wielowrzecionowych, po
                            <a href="#">wiertarki przelotowe</a>, kończąc na Centrach wiertarskich sterowanych CNC.
                        </p>
                    </div>

                    <div class="col-12 col-lg-6">
                        <p class="mb-3">
                            Praktycznie każda wiertarka wielowrzecionowa oraz wiertarka przelotowa posiada
                            możliwość konfiguracji pod szczególne wymagania klienta. „Wyposażenie w dodatkowe
                            jednostki wiercące, zamontowanie spersonalizowanej głowicy wiertarskiej, powrót
                            elementu do operatora, zwiększenie pola roboczego wiertarki przelotowej lub wiertarki
                            wielowrzecionowej” są to przykładowe konfiguracje, które jesteśmy w stanie wykonać.
                        </p>
                    </div>
                </div>
                

                <div class="collapse m-0" id="read-more">
                    <h3 class="m-0">
                        Poniżej przedstawiamy nasze wiertarki przemysłowe i ich rodzaje oraz rozwiązania w tematyce
                        wiercenia:
                    </h3>

                    <ul>
                        <li>Wiertarki przelotowe</li>
                        <li>Wiertarki CNC</li>
                        <li>Wiertarki do szuflad</li>
                        <li>Wiertarki wielowrzecionowe</li>
                        <li>wiertarki automatyczne</li>
                        <li>Centra wiertarskie</li>
                        <li>Głowice wielowrzecionowe</li>
                        <li>Spersonalizowane głowice wiertarskie</li>
                    </ul>

                    <h2>WIERTARKI PRZEMYSŁOWE OD LAZZONI GROUP</h2>
                    <p>
                        Zapewniamy projektowanie oraz realizację niezawodnych ciągów technologicznych dla wiertarek
                        przemysłowych pod względem wydajności, efektywności oraz jakości. Z naszymi maszynami można
                        zapoznać się zarówno zdalnie, za pośrednictwem filmów obrazujących pracę wiertarek
                        przemysłowych
                        na kanale YouTube, oraz stacjonarnie odwiedzając naszą halę wystawową, na której
                        prezentowane są
                        ich najnowsze modele (aktualnie na naszej hali wystawowej znajduje się ponad 40 wiertarek
                        przemysłowych). Oferujemy klientom również fachowe doradztwo z zakresu zakupu maszyn i
                        narzędzi,
                        profesjonalny serwis gwarancyjny oraz obsługę pogwarancyjną.
                    </p>
                </div>

                <div class="text-center">
                    <button class="button-read-more py-2 px-4 mt-4" type="button" data-toggle="collapse"
                        data-target="#read-more">
                        Czytaj dalej
                    </button>
                </div>
            </main>
</section> -->

<!-- YOUTUBE FILMS SECTION -->
<section class="section-dark py-5" id="f">
    <div class="container-fluid px-5 py-5">
        <div class="row px-5">
            <div class="col-12 text-center text-md-left">
                <h2 class="h1">Zobacz nasze wiertarki w akcji:</h2>
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
                <a href="<?php echo get_page_link(get_page_by_path('films')); ?>" class="button button-prim">Wszystkie filmy</a>
            </div>
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="py-5">
    <div class="container-fluid px-5 py-5">
        <div class="row px-5">
            <div class="col-12 text-center text-md-left">
                <h2 class="h1">Aktualności:</h2>
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
                <a href="<?php echo get_page_link(get_page_by_path('news')); ?>" class="button button-prim">Zobacz aktualności</a>
            </div>
        </div>
    </div>
</section>  

<?php 

get_template_part('include/map', 'map');

get_footer(); 

?>