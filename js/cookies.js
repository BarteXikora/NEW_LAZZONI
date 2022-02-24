jQuery(document).ready(($) => {
    const showCookies = () => {
        $('.cookies-container').css('opacity', 0)
        if ($('.cookies-container').hasClass('d-none'))
            $('.cookies-container').removeClass('d-none')

        $('.cookies-container').animate({
            opacity: 1
        }, 200)
    }

    const hideCookies = () => {
        $('.cookies-container').animate({
            opacity: 0
        }, 200, () => {
            $('.cookies-container').addClass('d-none')
        })
    }

    if (typeof $.cookie('cookies-info-shown') === 'undefined') {
        showCookies()
    } else if ($.cookie('cookies-info-shown') == false) {
        showCookies()
    }

    $('#cookies-button').click(() => {
        $.cookie('cookies-info-shown', true)
        hideCookies()
    })
})