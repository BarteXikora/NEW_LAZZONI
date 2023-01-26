jQuery(document).ready(($) => {
    const $submit = $('#c-submit')

    // LIVE VALIDATION:
    $('#contact-form input, #contact-form textarea').on('keyup change click', () => {
        validate($('#c-name'))
        validate($('#c-email'), 5, 50, mailValid)
        validate($('#c-phone'), 5, 50, phoneValid)
        validate($('#c-about'), 5, 100)
        validate($('#c-message'), 15, 255)

        if ($('.input-wrong').length == 0) {
            if ($('.input-required:not(.input-correct)').length == 0) {
                if ($('#c-rodo').is(':checked')) {
                    if ($('#c-submit').hasClass('button-disabled'))
                        $('#c-submit').removeClass('button-disabled')
                } else $('#c-submit').addClass('button-disabled')
            } else $('#c-submit').addClass('button-disabled')
        } else $('#c-submit').addClass('button-disabled')
    })

    // HANDLE SUBMIT:
    $('#contact-form').submit((event) => {
        event.preventDefault()

        if (!$('#c-submit').hasClass('button-disabled')) {
            $('#c-submit').html('Wysyłanie...')
            $('#c-submit').addClass('button-disabled')

            $.ajax({
                url: $('#contact-form').data('link'),
                data: {
                    action: 'enquiry_form',
                    from: 'contact-form',
                    name: $('#c-name').val(),
                    email: $('#c-email').val(),
                    phone: $('#c-phone').val(),
                    about: $('#c-about').val(),
                    message: $('#c-message').val()
                },
                method: 'post',
                success: (answer) => {
                    if (answer) {
                        $('#contact-form').animate({
                            opacity: 0
                        }, 300, () => {
                            $('#contact-form').addClass('d-none')

                            $('#c-success').css('opacity', 0)
                            $('#c-success').removeClass('d-none')
                            $('#c-success').animate({
                                opacity: 1
                            }, 300)
                        })
                    } else showError()
                },
                error: (error) => {
                    showError()
                }
            })
        }
    })

    // SHOWS AN ERROR IF THERE IS ONE:
    const showError = () => {
        $('#s-submit').html('Wyślij!')
        $('#s-submit').removeClass('button-disabled')

        $('.error-box').html('Nie udało się wysłać danych. Prosimy spróbować później!')
    }

    // CREATE HINT CONTENT:
    const checkForHint = () => {
        if ($('.input-wrong').length == 0) {
            if ($('.input-required:not(.input-correct)').length == 0)
                return 'Proszę wyrazić zgodę na przetwarzanie danych osobowych.'
            else return 'Proszę uzupełnić wszystkie pola oznaczone gwiazdką.'
        } else if ($('#c-name').hasClass('input-wrong'))
            return 'W polu Imię i Nazwisko proszę wpisać minimalnie 3 znaki, a maksymalnie 50.'
        else if ($('#c-email').hasClass('input-wrong'))
            return 'Podano nieprawidłowy adres e&mdash;mail. Adres musi zawierać symbol @, oraz ' +
                'nazwę poczty wraz z domeną.'
        else if ($('#c-phone').hasClass('input-wrong'))
            return 'Podano nieprawidłowy numer telefonu.'
        else if ($('#c-about').hasClass('input-wrong'))
            return 'W polu "Kontakt w sprawie" proszę wpisać 5&mdash;50 znaków.'
        else if ($('#c-message').hasClass('input-wrong')) {
            if ($('#c-message').val().length < 15)
                return 'Treść wiadomości powinna mieć długość minimum 15 znaków.'
            else return 'Wiadomość nie może być dłużna niż 254 znaki.'
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