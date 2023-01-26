jQuery('document').ready(($) => {
    const $submit = $('#s-submit')

    // LIVE VALIDATION:
    $('#service-form input, #service-form textarea').on('keyup change click', () => {
        validate($('#s-company-name'))
        validate($('#s-adress'))
        validate($('#s-nip'), 6, 13)
        validate($('#s-name'))
        validate($('#s-email'), 5, 50, mailValid)
        validate($('#s-phone'), 5, 50, phoneValid)

        validate($('#s-drill'))
        validate($('#s-sn'))
        validate($('#s-date'), 1, 30)
        validate($('#s-fv'))
        validate($('#s-message'), 15, 255)

        if ($('.input-wrong').length == 0) {
            if ($('.input-required:not(.input-correct)').length == 0) {
                if ($('#s-rodo').is(':checked')) {
                    if ($('#s-submit').hasClass('button-disabled'))
                        $('#s-submit').removeClass('button-disabled')
                } else $('#s-submit').addClass('button-disabled')
            } else $('#s-submit').addClass('button-disabled')
        } else $('#s-submit').addClass('button-disabled')
    })

    // HANDLE SUBMIT:
    $('#service-form').submit((event) => {
        event.preventDefault()

        if (!$('#s-submit').hasClass('button-disabled')) {
            $('#s-submit').html('Wysyłanie...')
            $('#s-submit').addClass('button-disabled')

            $.ajax({
                url: $('#service-form').data('link'),
                data: {
                    action: 'enquiry_form',
                    from: 'service-form',
                    type: $('#s-type').data('value'),
                    country: $('#s-country').data('value'),
                    company: $('#s-company-name').val(),
                    adress: $('#s-adress').val(),
                    nip: $('#s-nip').val(),
                    name: $('#s-name').val(),
                    email: $('#s-email').val(),
                    phone: $('#s-phone').val(),
                    drill: $('#s-drill').val(),
                    sn: $('#s-sn').val(),
                    date: $('#s-date').val(),
                    fv: $('#s-fv').val(),
                    message: $('#s-message').val(),
                },
                method: 'post',
                success: (answer) => {
                    if (answer) {
                        $('#service-form').animate({
                            opacity: 0
                        }, 300, () => {
                            $('#service-form').addClass('d-none')

                            $('#s-success').css('opacity', 0)
                            $('#s-success').removeClass('d-none')
                            $('#s-success').animate({
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
        $('#s-submit').html('Wyślij formularz serwisowy!')
        $('#s-submit').removeClass('button-disabled')

        $('.error-box').html('Nie udało się wysłaćdanych. Prosimy spróbować później!')
    }

    // CREATE HINT CONTENT:
    const checkForHint = () => {
        if ($('.input-wrong').length == 0) {
            if ($('.input-required:not(.input-correct)').length == 0)
                return 'Proszę wyrazić zgodę na przetwarzanie danych osobowych.'
            else return 'Proszę uzupełnić wszystkie pola oznaczone gwiazdką.'
        } else if ($('#s-company-name').hasClass('input-wrong'))
            return 'Nazwa firmy powinna mieć długość 3 &mdash; 50 znaków.'
        else if ($('#s-adress').hasClass('input-wrong'))
            return 'Adres powinien mieć długość 3 &mdash; 50 znaków.'
        else if ($('#s-nip').hasClass('input-wrong'))
            return 'Podano nieprawidłowy NIP.'
        else if ($('#s-name').hasClass('input-wrong'))
            return 'W polu Imię i Nazwisko proszę wpisać minimalnie 3 znaki, a maksymalnie 50.'
        else if ($('#s-email').hasClass('input-wrong'))
            return 'Podano nieprawidłowy adres e&mdash;mail. Adres musi zawierać symbol @, oraz ' +
                'nazwę poczty wraz z domeną.'
        else if ($('#s-phone').hasClass('input-wrong'))
            return 'Podano nieprawidłowy numer telefonu.'


        else if ($('#s-drill').hasClass('input-wrong'))
            return 'Marka / model powinien mieć długość 3 &mdash; 50 znaków.'
        else if ($('#s-sn').hasClass('input-wrong'))
            return 'Numer seryjny powinien mieć długość 3 &mdash; 50 znaków.'
        else if ($('#s-date').hasClass('input-wrong'))
            return 'Podano nieprawidłową datę zakupu.'
        else if ($('#s-fv').hasClass('input-wrong'))
            return 'Numer faktury powinien mieć długość 3 &mdash; 50 znaków.'
        else if ($('#s-message').hasClass('input-wrong')) {
            if ($('#s-message').val().length < 15)
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