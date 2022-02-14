jQuery(document).ready(($) => {
    const customTitle = $('#single-content').data('custom-title')

    if (customTitle.length > 0) $('head title', window.parent.document).text(customTitle)
})