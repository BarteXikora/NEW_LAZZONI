jQuery(document).ready(($) => {
    const delayInMinutes = .5

    let delay = delayInMinutes * 60000
    let isDelayDone = false
    let everShown = false

    const $container = $('#wait-box-container')

    // Check for everShown var in local storage:
    if (localStorage.getItem('everShown') !== undefined)
        everShown = localStorage.getItem('everShown')

    // Allow wait box to open after delay:
    setTimeout(() => {
        isDelayDone = true
    }, delay)

    // Show wait box on mouse leave:
    $(document).mouseleave(() => {
        if (isDelayDone && !everShown) showWaitBox()
    })

    // Close wait box on click outsite:
    $container.click((e) => {
        if ($(e.target).hasClass('film-box-container')) hideWaitBox()
    })

    // Show wait box:
    const showWaitBox = () => {
        everShown = true
        localStorage.setItem('everShown', true)

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