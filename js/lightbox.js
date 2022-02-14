jQuery(document).ready(($) => {
    const $images = $('#single-content img')
    const $lightbox = $('#lightbox-container')

    $images.click((e) => {
        if (!$(e.target).hasClass('img-no-lightbox')) {
            e.preventDefault()

            openLightBox($(e.target).attr('src'), $(e.target).attr('alt'))
        }
    })

    $('.film-box-close').click(() => {
        closeLightBox()
    })

    const openLightBox = (src, title) => {
        $('#lightbox-content').attr('src', src)
        $('#lightbox-content').attr('alt', title)
        $('#lightbox-title').text(title)

        $lightbox.css('opacity', 0)
        if ($lightbox.hasClass('d-none')) $lightbox.removeClass('d-none')

        $lightbox.animate({
            opacity: 1
        }, 300)
    }

    const closeLightBox = () => {
        $lightbox.animate({
            opacity: 0
        }, 300, () => {
            $lightbox.addClass('d-none')
        })
    }
})