jQuery(document).ready(($) => {
    const $images = $('#single-content img').not('.img-no-lightbox')
    const $lightbox = $('#lightbox-container')

    let currentImage
    let lastImage

    $images.each((index, element) => {
        $(element).data('lbi', index)

        lastImage = index
    }).promise().done(() => {
        if (lastImage < 1) {
            $('.lightbox-arrow-button').addClass('d-none')
        }
    })

    $images.click((e) => {
        e.preventDefault()

        openLightBox($(e.target).attr('src'), $(e.target).attr('alt'), $(e.target).data('lbi'))
    })

    $('.film-box-close').click(() => {
        closeLightBox()
    })

    const openLightBox = (src, title, lbi) => {
        $('#lightbox-content').attr('src', src)
        $('#lightbox-content').attr('alt', title)
        $('#lightbox-title').text(title)

        currentImage = lbi

        $lightbox.css('opacity', 0)
        if ($lightbox.hasClass('d-none')) $lightbox.removeClass('d-none')

        $lightbox.animate({
            opacity: 1
        }, 300)
    }

    const switchImage = (src, title) => {
        $('#lightbox-content').attr('src', src)
        $('#lightbox-content').attr('alt', title)
        $('#lightbox-title').text(title)
    }

    const closeLightBox = () => {
        $lightbox.animate({
            opacity: 0
        }, 300, () => {
            $lightbox.addClass('d-none')
        })
    }

    $('#next-image-button').click(() => {
        let nextImage = $images[currentImage + 1]
        currentImage += 1

        if (currentImage > lastImage) {
            nextImage = $images[0]
            currentImage = 0
        }

        switchImage($(nextImage).attr('src'), $(nextImage).attr('alt'))
    })

    $('#prev-image-button').click(() => {
        let prevImage = $images[currentImage - 1]
        currentImage -= 1

        if (currentImage < 0) {
            prevImage = $images[lastImage]
            currentImage = lastImage
        }

        switchImage($(prevImage).attr('src'), $(prevImage).attr('alt'))
    })
})