jQuery('document').ready(($) => {

    // VALIDATION:
    const phoneValid = /^[\+]?[(]?[0-9]{0,3}?[)]?[\s]?[0-9]{3,6}[\s]?[0-9]{2,6}[\s]?[0-9]{2,6}$/
    const mailValid = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i


    const $switchButton = $('#contact-app-button')
    const openImg = $('#contact-app-button #open')
    const closeImg = $('#contact-app-button #close')
    const $app = $('.contact-app-container')
    const $submit = $('#app-submit')
    const $topics = $('.contact-app-topic-button')

    let isAppOpen = false

    // HANDLE BUTTON'S ON-CLICK:
    $switchButton.click(() => {
        isAppOpen = !isAppOpen

        if (isAppOpen) {
            $switchButton.addClass('close-button')
            openImg.addClass('d-none')
            closeImg.removeClass('d-none')

            showApp()
        } else {
            $switchButton.removeClass('close-button')
            openImg.removeClass('d-none')
            closeImg.addClass('d-none')

            hideApp()
        }
    })

    // SHOWES APP WINDOW:
    const showApp = () => {
        if ($app.hasClass('d-none')) $app.removeClass('d-none')
        $app.css('bottom', '-20px')

        $app.animate({
            opacity: 1,
            bottom: 0
        }, 200)

        setAppColumns()

        setGoUp(false)
    }

    // HIDES APP WINDOW:
    const hideApp = () => {
        $app.animate({
            opacity: 0,
            bottom: -20
        }, 200, () => {
            if (!$app.hasClass('d-none')) $app.addClass('d-none')
        })

        setGoUp(true)
    }

    // LIVE VALIDATION:
    $('.form-input').on('keyup change click', () => {
        const $phone = $('#app-phone')
        const $mail = $('#app-mail')
        const $message = $('#app-message')

        let isOK = true
        let isPhoneOK = 0
        let isMailOK = 0

        if ($($phone).val().length > 0) {
            if (phoneValid.test($($phone).val())) {
                setInputClass($phone, 'input-correct')
                isPhoneOK = 1
            } else {
                setInputClass($phone, 'input-wrong')
                isPhoneOK = -1
            }
        } else setInputClass($phone, '')

        if ($($mail).val().length > 0) {
            if (mailValid.test($($mail).val())) {
                setInputClass($mail, 'input-correct')
                isMailOK = 1
            } else {
                setInputClass($mail, 'input-wrong')
                isMailOK = -1
            }
        } else setInputClass($mail, '')

        if (isPhoneOK === -1 || isMailOK === -1) isOK = false
        else if (!(isPhoneOK === 1 || isMailOK === 1)) isOK = false

        if ($($message).val().length > 0) {
            if ($($message).val().length > 10 && $($message).val().length < 255)
                setInputClass($message, 'input-correct')
            else {
                setInputClass($message, 'input-wrong')
                isOK = false
            }
        } else {
            setInputClass($message, '')
            isOK = false
        }

        // ABLE OR DISABLE SUBMIT:
        if (isOK) {
            if ($submit.hasClass('button-disabled')) $submit.removeClass('button-disabled')
        } else $submit.addClass('button-disabled')

    })

    // HANDLE TOPIC SELECT:
    $topics.click((e) => {
        $topics.each((index, element) => {
            if ($(element).hasClass('selected')) $(element).removeClass('selected')
        })

        $(getTranslatedParent(e.target)).addClass('selected')
    })

    // SET APP COLUMNS WHEN APP IS TO HIGH:
    const setAppColumns = () => {
        if ($(window).width() > 768) {
            if ($app.height() + 200 > $(window).height()) $('.contact-app-set-columns').addClass('contact-app-column')
            else {
                if ($('.contact-app-set-columns').hasClass('contact-app-column'))
                    $('.contact-app-set-columns').removeClass('contact-app-column')
            }
        } else {
            if ($('.contact-app-set-columns').hasClass('contact-app-column'))
                $('.contact-app-set-columns').removeClass('contact-app-column')
        }
    }

    // SET APP COLUMNS ON RESIZE:
    $(window).resize(() => { setAppColumns() })

    // DISABLE GO-UP-BUTTON WHEN CONTACT APP IS OPEN:
    const setGoUp = (isShown) => {
        const $goUpBtn = $('#go-up-button')

        if (isShown) {
            $goUpBtn.css('opacity', 0)
            if ($goUpBtn.hasClass('go-up-disabled')) $goUpBtn.removeClass('go-up-disabled')

            $goUpBtn.animate({
                opacity: 1
            }, 200)
        } else {
            $goUpBtn.animate({
                opacity: 0
            }, 200, () => {
                $goUpBtn.addClass('go-up-disabled')
            })
        }
    }

    // HANDLE SUBMIT:
    $('#contact-app-form').submit((event) => {
        event.preventDefault()

        if (!$submit.hasClass('button-disabled')) {
            $submit.addClass('button-disabled')
            $submit.html('Wysyłanie...')

            let topic
            $topics.each(function (index) {
                if ($(this).hasClass('selected')) topic = $(this).text()
            })

            $.ajax({
                url: $('#contact-app-form').data('link'),
                data: {
                    action: 'enquiry_form',
                    from: 'contact-app',
                    phone: $('#app-phone').val(),
                    email: $('#app-mail').val(),
                    message: $('#app-message').val(),
                    topic: topic
                },
                method: 'post',
                success: (answer) => {
                    if (answer) {
                        $('.contact-app-form-container').animate({
                            opacity: 0
                        }, 200, () => {
                            $submit.css('animation', 'none')

                            $('.contact-app-form-container').addClass('d-none')

                            $('.contact-app-sent-container').removeClass('d-none')
                            $('.contact-app-sent-container').css('opacity', 0)
                            $('.contact-app-sent-container').animate({
                                opacity: 1
                            }, 200)
                        })
                    } else showError()
                },
                error: function (error) {
                    showError()
                }
            })
        }
    })

    // SHOWS AN ERROR IF THERE IS ONE:
    const showError = () => {
        $('.error-box').html('Nie udało się wysłać wiadomości. <br> Proszę spróbować później!')
        $('.error-box').removeClass('d-none')

        $submit.removeClass('button-disabled')
        $submit.html('Wyślij wiadomość!')
    }

    // CREATE HINT CONTENT:
    const checkForHint = () => {
        const $phone = $('#app-phone')
        const $mail = $('#app-mail')
        const $message = $('#app-message')

        if ($('.input-wrong').length == 0) {
            if ($phone.val().length == 0 && $mail.val().length == 0 && $message.val().length == 0)
                return 'Proszę wpisać numer telefonu i/lub adres e&mdash;mail, oraz uzupełnić wiadomość.'
            else if ($message.val().length == 0)
                return 'Proszę uzupełnić treść wiadomości.'
            else return 'Proszę podać numer telefonu i/lub adres e&mdash;mail.'
        } else if ($phone.hasClass('input-wrong'))
            return 'Podano nieprawidłowy numer telefonu.'
        else if ($mail.hasClass('input-wrong'))
            return 'Podano nieprawidłowy adres e&mdash;mail. Adres musi zawierać symbol @, oraz ' +
                'nazwę poczty wraz z domeną.'
        else if ($message.hasClass('input-wrong')) {
            if ($message.val().length < 10) return 'Treść wiadomości powinna mieć długość minimum 10 znaków.'
            else return 'Wiadomość nie może być dłuższa, niż 254 znaki.'
        } else return 'Proszę sprawdzić dane wpisane w formularzu.'
    }

    // HANDLE SHOWING HINT:
    let hintCounter
    $submit.click((e) => {
        if ($submit.hasClass('button-disabled')) {
            showHint($('.hint-box'), checkForHint())
        }
    })
    $submit.mouseenter(() => {
        if ($submit.hasClass('button-disabled')) {
            hintCounter = setTimeout(() => {
                showHint($('.hint-box'), checkForHint())
            }, 800)
        }
    })
    $submit.mouseleave(() => {
        clearTimeout(hintCounter)
        hideHint($('.hint-box'))
    })
})