jQuery(document).ready(($) => {
    const resizeBox = () => {
        $('.box').each((i, e) => {
            if ($(e).hasClass('ar8')) $(e).css('height', $(e).width() * .8)
            else $(e).css('height', $(e).width() * 9 / 16)
        })
    }

    $(window).resize(function () {
        clearTimeout(this.id)
        this.id = setTimeout(resizeBox, 100)
    })

    $('#products-content').on('DOMSubtreeModified', () => { resizeBox() })

    resizeBox()
})