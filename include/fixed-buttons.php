<div class="fixed-buttons-container">
    <button class="fixed-button go-up-button mb-1 mr-2 mb-md-2 mr-md-4 d-none" id="go-up-button">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-go-up.png" alt="Przewiń na górę strony!" class="img-fluid">
    </button>

    <?php if (is_home()) { ?>

    <button class="fixed-button contact-app-button mb-2 mr-2 mb-md-4 mr-md-4" id="contact-app-button">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-contact.png" alt="Zostaw nam numer telefonu!" class="img-fluid p-2" id="open">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" alt="Zamknij okno kontaktu!" class="img-fluid p-2 d-none" id="close">
    </button>

    <?php } ?>
</div>