jQuery(document).ready(($) => {
    $(window).resize(function () {
        clearTimeout(this.id)
        this.id = setTimeout(resizeBox, 100)
    })

    $('#products-content').on('DOMSubtreeModified', () => { resizeBox() })

    $('.button-read-more').click(() => {
        setTimeout(() => {
            resizeBox()
        }, 1)
    })

    resizeBox()
})