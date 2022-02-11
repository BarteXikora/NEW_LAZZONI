jQuery(document).ready(($) => {
    const $container = $('.select-container')

    // PREPARE DEFAULT OPTION:
    $container.each((i, e) => {
        const defaultOption = $(e).find('.selected').text()

        $(e).prepend('<div class="selected-option">' + defaultOption + '</div>')
    })

    // HANDLE CLICK ON SELECT:
    $container.click((e) => {
        const currentSelect = $(e.currentTarget).find('.select')

        if ($(currentSelect).hasClass('select-show')) $(currentSelect).removeClass('select-show')
        else $(currentSelect).addClass('select-show')
    })

    // FANDLE CLICK ON OPTION:
    $('.select-container .option').click((e) => {
        $(e.target).parent().parent().find('.selected-option').text($(e.target).text())
        $(e.target).parent().parent().data('value', $(e.target).data('value'))
    })

    // HIDE ON CLICK OUTSIDE:
    $(window).click((e) => {
        if (!($(e.target).hasClass('selected-option')) && !($(e.target).hasClass('option')))
            if ($container.find('.select').hasClass('select-show'))
                $container.find('.select').removeClass('select-show')
    })

})