jQuery(document).ready(($) => {
    // LIVE VALIDATION:
    $('#contact-form input, #contact-form textarea').on('keyup change click', () => {
        validate($('#c-name'))
        validate($('#c-email'), 5, 50, mailValid)
        validate($('#c-phone'), 5, 50, phoneValid)
        validate($('#c-about'), 5, 50)
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

    const showError = () => {
        $('#s-submit').html('Wyślij!')
        $('#s-submit').removeClass('button-disabled')

        $('.error-box').html('Nie udało się wysłać danych. Prosimy spróbować później!')
    }
})