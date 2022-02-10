jQuery('document').ready(function ($) {
    const $filmBoxContainer = $('.film-box-container')

    // KEEP IFRAME'S ASPECT RATIO:
    const resizeIframe = () => {
        const $iframe = $('#yt-film-iframe')
        $iframe.css('height', $iframe.width() * 9 / 16)
    }

    // HANDLE WINDOW CLOSING:
    const closeFilmBox = () => {
        $('#yt-film-iframe').attr('src', '')

        $filmBoxContainer.animate({
            'opacity': 0
        }, 200, () => {
            if (!$filmBoxContainer.hasClass('d-none')) $filmBoxContainer.addClass('d-none')
        })
    }

    // OPEN WINDOW AND SET FILM DATA IN IFRAME:
    const openFilmBox = (id, title) => {
        link = 'https://www.youtube.com/embed/' + id + '?autoplay=1&mute=1'

        $('#yt-film-iframe').attr('src', link)
        $('#film-title').html(title)

        if ($filmBoxContainer.hasClass('d-none')) $filmBoxContainer.removeClass('d-none')

        resizeIframe()

        $filmBoxContainer.animate({
            'opacity': 1
        }, 200)
    }

    // HANDLE MINIATURE CLICK:
    $('.film .box').click((e) => {
        let link = e.currentTarget.getAttribute('data-link')
        let title = e.currentTarget.getAttribute('data-title')

        openFilmBox(link, title)
    })

    // HANDLE CLOSE BUTTON:
    $('.film-box-close').click((e) => { closeFilmBox() })

    // HANDLE WINDOW OPEN:
    $filmBoxContainer.click((e) => {
        if ($(e.target).hasClass('film-box-container')) closeFilmBox()
    })

    // SET ASPECT RATIO ON RESIZE:
    $(window).on('resize', () => resizeIframe());

    // START FILM FROM LINK:
    const defaultID = $('.film-box-container').data('default')

    if (defaultID) {
        let title = $(document).find('[data-link="' + defaultID + '"]').parent().find('h3').text() || 'Zobacz film!'

        openFilmBox(defaultID, title)
    }
});