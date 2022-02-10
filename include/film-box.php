<div class="film-box-container d-none" data-default="<?php if (isset($_GET['v'])) echo $_GET['v'] ?>"> 
    <div class="film-box">
        <div class="film-box-close-box">
            <button class="film-box-close">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" alt="Zamknij okno." class="p-2">
            </button>
        </div>
        <div class="px-5 pt-2 pb-2">
            <iframe 
                id="yt-film-iframe" 
                src=""
                class="yt-film-iframe"
                allowfullscreen>
            </iframe>
            <h3 id="film-title" class="mt-4"></h3>
        </div>
    </div>
</div>