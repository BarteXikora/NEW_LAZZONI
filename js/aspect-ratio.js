const resizeBox = () => {
    jQuery('.box').each((i, e) => {
        if (jQuery(e).hasClass('ar8')) jQuery(e).css('height', jQuery(e).width() * .8)
        else jQuery(e).css('height', jQuery(e).width() * 9 / 16)
    })
}