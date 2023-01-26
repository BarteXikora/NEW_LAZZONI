const showHint = ($target, content) => {
    $target.html(content)

    if ($target.hasClass('d-none')) {
        $target.css('opacity', 0)
        $target.removeClass('d-none')

        $target.animate({
            opacity: 1
        }, 200)
    }
}

const hideHint = ($target) => {
    $target.animate({
        opacity: 0
    }, 200, () => {
        $target.addClass('d-none')
    })
}