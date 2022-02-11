<footer class="section-dark py-5<?php if (is_404()) echo ' d-none'; ?>">
        <div class="container py-4">
            <div class="row">

                <!-- FIRST FOOTER MENU COLUMN -->
                <div class="col-12 col-md-3 col-lg-4 text-center text-md-left">
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

                <!-- SECOND FOOTER MENU COLUMN -->
                <div class="col-12 col-md-3 col-lg-4 text-center text-md-left">
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

                <!-- THIRD FOOTER MENU COLUMN -->
                <div class="col-12 col-md-6 col-lg-4 text-center footer-contact">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="LAZZONI GROUP" class="img-fluid mb-4">
                    <p>32-432 Pcim 1563</p>
                    <p><a href="tel:+48 535 732 115">+48 535 732 115</a></p>
                    <p><a href="mail:biuro@lazzonigroup.pl">biuro@lazzonigroup.pl</a></p>
                    <div class="mt-4">
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
            </div>
        </div>

        <?php wp_footer(); ?>
    </footer>
</body>
</html>