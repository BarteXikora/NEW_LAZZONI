jQuery(document).ready(($) => {
    const delayInMinutes = .5

    let delay = delayInMinutes * 60000
    let isDelayDone = false
    let lastShown = -1

    const $container = $('#wait-box-container')

    // Check for everShown var in local storage:
    if (localStorage.getItem('everShown') !== undefined)
        lastShown = localStorage.getItem('lastShown')

    // Allow wait box to open after delay:
    setTimeout(() => {
        isDelayDone = true
    }, delay)

    // Show wait box on mouse leave:
    $(document).mouseleave(() => {
        if (isDelayDone && lastShown - $.now() < -86400000) showWaitBox()
    })

    // Close wait box on click outsite:
    $container.click((e) => {
        if ($(e.target).hasClass('film-box-container')) hideWaitBox()
    })

    // Close wait box on click on X button:
    $('#wait-box-close').click(() => { hideWaitBox() })

    // Show wait box:
    const showWaitBox = () => {
        lastShown = $.now()
        localStorage.setItem('lastShown', $.now())

        $container.css('opacity', 0)
        $container.addClass('d-md-flex')

        resizeBox()

        $container.animate({
            opacity: 1
        }, 500)
    }

    // Hide wait box:
    const hideWaitBox = () => {
        $container.animate({
            opacity: 0
        }, 200, () => {
            if ($container.hasClass('d-md-flex')) $container.removeClass('d-md-flex')
        })
    }
})