jQuery(document).ready(($) => {
    $(document).scroll(() => { toggleBackground() })

    const toggleBackground = () => {
        if ($(window).scrollTop() > 200) {
            if ($('.navbar').hasClass('navbar-transparent')) $('.navbar').removeClass('navbar-transparent')
        } else $('.navbar').addClass('navbar-transparent')
    }

    toggleBackground()
})