<div class="film-box-container d-none" id="lightbox-container"> 
    <div class="film-box">
        <div class="film-box-bar p-0 mb-3">
            <div class="film-box-close-box">
                <button class="film-box-close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-close.png" alt="Zamknij okno." class="p-2">
                </button>
            </div>
        </div>
        <div class="px-5 px-md-3 pt-2 pb-5 text-center">
            <div>
                <img src="" alt="" class="lightbox-image img-fluid" id="lightbox-content">
            </div>
        </div>

        <button class="lightbox-arrow-button arrow-left" id="prev-image-button">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-left.png"
                alt="Poprzedni obrazek" class="img-fluid">
        </button>

        <button class="lightbox-arrow-button arrow-right" id="next-image-button">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-left.png" 
                alt="Następny obrazek" class="img-fluid">
        </button>
    </div>
</div>