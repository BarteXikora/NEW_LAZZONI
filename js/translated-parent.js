const getTranslatedParent = (element) => {
    while (jQuery(element).is('font')) element = jQuery(element).parent()
    return element
}