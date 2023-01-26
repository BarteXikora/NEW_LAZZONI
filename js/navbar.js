jQuery(document).ready(($) => {
    let isMenuOpen = false
    let isLanguageSelectorOpen = false

    $(document).scroll(() => { toggleBackground() })

    const toggleBackground = () => {
        if (!isMenuOpen && !isLanguageSelectorOpen) {
            if ($(window).scrollTop() > 50) {
                if ($('.navbar').hasClass('navbar-transparent')) $('.navbar').removeClass('navbar-transparent')
            } else $('.navbar').addClass('navbar-transparent')
        } else if ($('.navbar').hasClass('navbar-transparent')) $('.navbar').removeClass('navbar-transparent')
    }

    $('#menu').on('hidden.bs.collapse', () => {
        isMenuOpen = false
        toggleBackground()
    })

    $('#menu').on('show.bs.collapse', () => {
        isMenuOpen = true
        toggleBackground()
    })

    $('.dropdown').on('hidden.bs.dropdown', () => {
        isMenuOpen = false
        toggleBackground()
    })

    $('.dropdown').on('show.bs.dropdown', () => {
        isMenuOpen = true
        toggleBackground()
    })

    $('.language-list').on('ls-hide', () => {
        isLanguageSelectorOpen = false
        toggleBackground()
    })

    $('.language-list').on('ls-show', () => {
        isLanguageSelectorOpen = true
        toggleBackground()
    })

    toggleBackground()
})