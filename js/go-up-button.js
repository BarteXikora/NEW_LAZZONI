jQuery('document').ready(($) => {

    // BUTTON WILL BE INVISIBLE IF SCROLL-TOP IS LESSER THAN (IN PX):
    const offsetTop = 500

    const $goUp = $('#go-up-button')
    let isButtonShown = false

    // ONCLICK HANDLER: 
    $goUp.click(() => {
        hideButton()
        window.scrollTo({ top: 0, behavior: 'smooth' })
    })

    // SHOWS THE BUTTON:
    const showButton = () => {
        if (!isButtonShown) {
            isButtonShown = true

            if ($goUp.hasClass('d-none')) $goUp.removeClass('d-none')

            $goUp.animate({
                opacity: 1
            }, 200)
        }
    }

    // HIDES THE BUTTON:
    const hideButton = () => {
        if (isButtonShown) {
            isButtonShown = false

            $goUp.animate({
                opacity: 0
            }, 200, () => {
                if (!$goUp.hasClass('d-none')) $goUp.addClass('d-none')
            })
        }
    }

    // DECIDE WHEN TO SHOW AND HIDE THE BUTTON:
    $(window).scroll(() => {
        if ($(window).scrollTop() >= offsetTop) showButton()
        else hideButton()
    })
})