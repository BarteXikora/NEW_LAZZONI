jQuery('document').ready(($) => {
    // LIVE VALIDATION:
    $('#service-form input, #service-form textarea').on('keyup change click', () => {
        validate($('#s-company-name'))
        validate($('#s-adress'))
        validate($('#s-nip'), 5, 25)
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

    const showError = () => {
        $('#s-submit').html('Wyślij!')
        $('#s-submit').removeClass('button-disabled')

        $('.error-box').html('Nie udało się wysłaćdanych. Prosimy spróbować później!')
    }
})