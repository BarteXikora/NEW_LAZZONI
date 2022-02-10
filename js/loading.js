jQuery('document').ready(($) => {
    $('.loading-page').animate({
        opacity: 0
    }, 1000, () => {
        $('.loading-page').addClass('d-none')
    })
})