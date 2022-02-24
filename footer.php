<?php

    get_template_part('include/wait-box', 'wait-box');
    get_template_part('include/cookies', 'cookies');

?>

<footer class="section-dark pt-5<?php if (is_404()) echo ' d-none'; ?>">
        <div class="container-fluid pt-4 px-md-5">
            <div class="row px-5 text-center text-md-left">

                <div class="col-12 col-lg-9 offset-lg-0 pr-md-5 col-xl-4 pr-xl-0 mb-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-main.png" alt="LAZZONI GROUP" class="img-fluid mb-4 <?php if (is_home()) echo 'footer-logo' ?>">
                    <p>
                        Polski producent wiertarek przelotowych, wiertarek wielowrzecionowych, wiertarek CNC,
                        oraz głowic wiertarskich. Automatyzujemy proces wiercenia, dostosowując nasze 
                        maszyny wedle potrzeb klienta.
                    </p>
                    <div class="mt-3">
                        <a target="_blank" href="https://www.facebook.com/lazzonigroup/?__tn__=%2Cd%2CP-R&eid=ARDawjMEBlb__QZVORVHD6vSI0GUMumWYJ6-Oz50WXLpIOLCIpCMc1-Zs5-iVTpygEgMYnjdCaSR0Njh" class="icon-a">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-fb.png" alt="Facebook">
                        </a>

                        <a target="_blank" href="https://lazzonigroup.olx.pl/" class="icon-a">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-olx.png" alt="OLX">
                        </a>

                        <a target="_blank" href="https://www.youtube.com/channel/UCFpmT64vTOIGB-v7fHT3eZg" class="icon-a">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-yt.png" alt="YouTube">
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-xl-2 offset-xl-2">
                    <h2>Zobacz również:</h2>
                    <div class="pl-md-2">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'footer_menu_1',
                                'depth'           => 1,
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                            ));
                        ?>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-xl-2">
                    <h2>Nasze produkty:</h2>
                    <div class="pl-md-2">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'footer_menu_2',
                                'depth'           => 1,
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => '',
                            ));
                        ?>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-xl-2 footer-contact pl-md-2">
                    <h2>Kontakt:</h2>
                    <p>32-432 Pcim 1563</p>
                    <p><a href="tel:+48 535 732 115">+48 535 732 115</a></p>
                    <p><a href="mailto:biuro@lazzonigroup.pl">biuro@lazzonigroup.pl</a></p>
                </div>

                <div class="col-12 mt-5 mb-3">
                    &copy; by Lazzoni Group 2022 
                    <?php if (date('Y') > 2022) echo '&mdash; '.date('Y'); ?>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>
    </footer>
</body>
</html>