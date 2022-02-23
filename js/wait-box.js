jQuery(document).ready(($) => {
    let delay = 5000 //2 * 60 * 1000
    let isDelayDone = false
    let everShown = false

    const $container = $('#wait-box-container')

    setTimeout(() => {
        isDelayDone = true
    }, delay)

    $(document).mouseleave(() => {
        if (isDelayDone && !everShown) showWaitBox()
    })

    $container.click(() => { hideWaitBox() })

    const showWaitBox = () => {
        everShown = true

        $container.css('opacity', 0)
        $container.addClass('d-md-flex')

        $container.animate({
            opacity: 1
        }, 500)
    }

    const hideWaitBox = () => {
        $container.animate({
            opacity: 0
        }, 200, () => {
            if ($container.hasClass('d-md-flex')) $container.removeClass('d-md-flex')
        })
    }

    $container.addClass('d-none')
})