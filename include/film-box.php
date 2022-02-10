<?php
    $link = ''; $title = '';

    if (is_page('films')) if (isset($_GET['v'])) {
        $link = $_GET['v'];

        if (isset($_GET['t'])) $title = $_GET['t'];
    }
?>

<div class="film-box-container <?php
    if ($link == '') echo 'd-none';
?>">
    <div class="film-box">
        <div class="film-box-close-box">
            <button class="film-box-close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" alt="Zamknij okno." class="p-2">
            </button>
        </div>
        <div class="px-5 pt-2 pb-2">
            <iframe 
                id="yt-film-iframe" 
                src="<?php echo $link; ?>"
                class="yt-film-iframe"
                allowfullscreen
            ></iframe>
            <h3 id="film-title" class="mt-4"><?php echo $title; ?></h3>
        </div>
    </div>
</div>