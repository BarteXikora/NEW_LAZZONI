jQuery('document').ready(($) => {
    let $list = $('.language-list')

    $('.language-btn').click(() => {
        if ($list.hasClass('d-none')) {
            $list.removeClass('d-none')
            $list.trigger('ls-show')
        } else {
            $list.addClass('d-none')
            $list.trigger('ls-hide')
        }
    });

    $list.click(() => {
        $list.addClass('d-none')
        $list.trigger('ls-hide')
    });
})
