<div class="language-box ml-auto <?php 
    if ($args['mobile']) echo 'd-flex d-xl-none';
    else echo 'd-none d-xl-flex';
?>">
    <button class="btn language-btn">
        <img src="<?php echo get_template_directory_uri(); ?>/img/language.png" alt="Zmień język" width="30">
    </button>

    <div class="language-list d-none">
        <?php echo do_shortcode('[google-translator]'); ?>
    </div>
</div>