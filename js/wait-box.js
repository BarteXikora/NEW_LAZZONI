jQuery(document).ready(($) => {
    const delayInMinutes = 2
    const delayAfterAction = .1 // 10 sec
    const showOnceEvery = 60 // 1 h

    let isDelayDone = false
    let lastShown = -1
    let sessionDelay = $.now()

    const $container = $('#wait-box-container')

    // Check for lastShown var in local storage:
    if (localStorage.getItem('lastShown') !== null)
        lastShown = localStorage.getItem('lastShown')

    // Check for sessionDelay in local storage:
    if (localStorage.getItem('sessionDelay') !== null) {
        sessionDelay = localStorage.getItem('sessionDelay')
    } else {
        localStorage.setItem('sessionDelay', sessionDelay)
    }

    // Allow wait box to open after delay:
    setTimeout(() => {
        isDelayDone = true
    }, delayAfterAction * 60000)

    // Show wait box on mouse leave:
    $(document).mouseleave(() => {
        if (isDelayDone && sessionDelay - $.now() < delayInMinutes * -60 * 1000
            && lastShown - $.now() < showOnceEvery * -60 * 1000)
            showWaitBox()
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

        localStorage.removeItem('sessionDelay')

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