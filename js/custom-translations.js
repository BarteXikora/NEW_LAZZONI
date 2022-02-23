jQuery(document).ready(($) => {
    let currentLanguage = 'Polish'

    // Handle switching language:
    const switchLanguage = (language) => {
        if (language != 'Polish' && language != 'English' && language != 'Ukrainian')
            language = 'English'

        $('.custom-translation').each((index, item) => {
            $(item).addClass('d-none')

            if ($(item).data('language-content') == language) {
                if ($(item).hasClass('d-none')) $(item).removeClass('d-none')
            }
        })
    }

    // Check for selected language in Cookies:
    if ($.cookie('googtrans') !== undefined) {
        currentLanguage = $.cookie('googtrans')

        switch (currentLanguage) {
            case '/pl/uk': currentLanguage = 'Ukrainian'
                break
            default: currentLanguage = 'English'
        }

        switchLanguage(currentLanguage)
    }

    // Handle click on flag:
    $('.flag').click((e) => {
        switchLanguage($(e.target).data('lang'))
    })

    switchLanguage(currentLanguage)
})