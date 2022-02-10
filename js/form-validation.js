// VALIDATION:
const phoneValid = /^[\+]?[(]?[0-9]{0,3}?[)]?[\s]?[0-9]{3,6}[\s]?[0-9]{2,6}[\s]?[0-9]{2,6}$/
const mailValid = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i 


// VALIDATE INPUT:
const validate = (target, lMin = 3, lMax = 50, compare = null) => {
    if (target.val().length > 0) {
        if (target.val().length < lMin) setInputClass(target, 'input-wrong')
        else if (target.val().length <= lMax) {
            if (compare !== null) {
                if (compare.test(target.val())) setInputClass(target, 'input-correct')
                else setInputClass(target, 'input-wrong')
            } else setInputClass(target, 'input-correct')
        } else setInputClass(target, 'input-wrong')
    } else setInputClass(target, '')
}

// HANDLE CHANGING INPUT'S CLASSES:
const setInputClass = (target, newClass) => {
    if (newClass === 'input-wrong') {
        if (target.hasClass('input-correct')) target.removeClass('input-correct')

        target.addClass(newClass)
    } else if (newClass === 'input-correct') {
        if (target.hasClass('input-wrong')) target.removeClass('input-wrong')

        target.addClass(newClass)
    } else if (newClass === '') {
        if (target.hasClass('input-correct')) target.removeClass('input-correct')
        if (target.hasClass('input-wrong')) target.removeClass('input-wrong')
    }
}