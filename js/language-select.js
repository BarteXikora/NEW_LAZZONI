jQuery('document').ready(($) => {
    let $list = $('.language-list')

    $('.language-btn').click(() => {
        if ($list.hasClass('d-none')) {
            $list.removeClass('d-none')
        } else {
            $list.addClass('d-none')
        }
    });

    $list.click(() => {
        $list.addClass('d-none')
    });
})
