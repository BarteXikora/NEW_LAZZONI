jQuery(document).ready(($) => {
    // HANDLE SHOWING COOKIES INFO:
    const showCookies = () => {
        setTimeout(() => {
            $('.cookies-container').css('opacity', 0)
            if ($('.cookies-container').hasClass('d-none'))
                $('.cookies-container').removeClass('d-none')

            $('.cookies-container').animate({
                opacity: 1
            }, 200)
        }, 1500)
    }

    // HANDLES HIDING COOKIES IFNO:
    const hideCookies = () => {
        $('.cookies-container').animate({
            opacity: 0
        }, 200, () => {
            $('.cookies-container').addClass('d-none')
        })
    }

    // SHOWS COOKIES INFO ONLY FIRST TIME:
    if (typeof $.cookie('cookies-info-shown') === 'undefined') {
        showCookies()
    } else if ($.cookie('cookies-info-shown') == false) {
        showCookies()
    }

    // CLOSES COOKIES INFO ON BUTTON CLICK: 
    $('#cookies-button').click(() => {
        let date = new Date()
        date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));

        $.cookie('cookies-info-shown', true, { expires: date })
        hideCookies()
    })
})