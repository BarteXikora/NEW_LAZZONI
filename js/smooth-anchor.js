jQuery('document').ready(($) => {
    $(document).on('click', 'a[href^="#"]', function (e) {
        e.preventDefault()

        if ($($.attr(this, 'href')).offset() !== undefined) $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 80
        }, 300)
    })
})