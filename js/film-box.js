jQuery('document').ready(function ($) {
    const $filmBoxContainer = $('.film-box-container')

    // KEEP IFRAME'S ASPECT RATIO:
    const resizeIframe = () => {
        const $iframe = $('#yt-film-iframe')
        $iframe.css('height', $iframe.width() * 9/16)
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
    $('.film .box').click((e) => {
        let link = e.currentTarget.getAttribute('data-link')
        link = link.replace("watch?v=", "embed/")
        link += '?autoplay=1&mute=1'

        $('#yt-film-iframe').attr('src', link)
        $('#film-title').html(e.currentTarget.getAttribute('data-title'))

        if ($filmBoxContainer.hasClass('d-none')) $filmBoxContainer.removeClass('d-none')

        resizeIframe()

        $filmBoxContainer.animate({
            'opacity': 1
        }, 200)
    })

    // HANDLE CLOSE BUTTON:
    $('.film-box-close').click((e) => {closeFilmBox()})

    // HANDLE WINDOW OPEN:
    $filmBoxContainer.click((e) => {
        if ($(e.target).hasClass('film-box-container')) closeFilmBox()
    })    

    // SET ASPECT RATIO ON RESIZE:
    $(window).on('resize', () => resizeIframe());
});