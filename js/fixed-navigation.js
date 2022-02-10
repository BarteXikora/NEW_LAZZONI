jQuery('document').ready(($) => {
    const $navContainer = $('.products-navigation-container')
    const $navigation = $('.products-navigation')
    const $openIcon = $('.products-toggler #open')
    const $closeIcon = $('.products-toggler #close')
    let isFooter
    let isCollapseOpen = false

    // CHECK IF IT IS MOBILE:
    const isMobile = () => {
        return Math.max(document.documentElement.clientWidth, window.innerWidth || 0) <= 992
    }

    // DISABLE GO-UP-BUTTON WHEN PRODUCTS MENU IS OPEN:
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

    // SET OFFSET WHEN NAVIGATION IS LOWER THAN FOOTER:
    const setNavFixed = () => {
        if (!isMobile()) {
            if (isFooter) {
                $navContainer.css('top',
                    (($(this).scrollTop() + $navContainer.innerHeight() + 50) - $('footer').offset().top) * -1)
            } else {
                $navContainer.css('top', 0)
            }
        }
    }

    // TOGGLE COLLAPSE MENU:
    const toggleNavCollapse = () => {
        $navigation.stop()
        $navContainer.css('top', 0)

        if (isCollapseOpen) {
            $navigation.animate({
                left: 0
            }, 700)

            setGoUp(false)

            $('.products-toggler').addClass('products-toggler-black')
            $openIcon.addClass('d-none')
            if ($closeIcon.hasClass('d-none')) $closeIcon.removeClass('d-none')
        } else {
            $navigation.animate({
                left: ($navigation.outerWidth() + $navContainer.offset().left) * -1
            }, 700)

            setGoUp(true)

            if ($('.products-toggler').hasClass('products-toggler-black'))
                $('.products-toggler').removeClass('products-toggler-black')
            $closeIcon.addClass('d-none')
            if ($openIcon.hasClass('d-none')) $openIcon.removeClass('d-none')
        }
    }

    // ADJUST ON SCROLL:
    $(window).scroll(() => {
        checkForScroll()
    })

    // ADJUST ON RESIZE:
    $(window).on('resize', () => {
        checkForScroll()
        checkForMobile()
        checkForFixed()
    })

    // HANDLE ADJUSTING NAVIGATION:
    const checkForScroll = () => {
        if ($(this).scrollTop() + $navContainer.height() >= $('footer').offset().top) {
            isFooter = true
            setNavFixed()
        } else {
            if (isFooter) {
                isFooter = false
                setNavFixed()
            }
        }
    }

    // HANDLE SWITCHING BETWEEN MOBILE AND DESKTOP VERSION:
    const checkForMobile = () => {
        if (!isMobile()) {
            setGoUp(true)

            $navigation.stop()
            $navigation.css('left', 0)
        }
    }

    // TURN OF FIXED POSITION WHEN THERE IS NOT ENOUGH SPACE FOR THAT SHIT:
    const checkForFixed = () => {
        if (!isMobile()) {
            if ($navContainer.outerHeight() > $(window).height()) $navContainer.css('position', 'absolute')
            else $navContainer.css('position', 'fixed')
        }
    }

    // HANDLE TOGGLER BUTTON:
    $('.products-toggler').click(() => {
        isCollapseOpen = !isCollapseOpen

        toggleNavCollapse()
    })

    // HIDE MOBILE NAV ON ANY OPERATION:
    $('.group-button').click(() => {
        if (isMobile()) {
            isCollapseOpen = false
            toggleNavCollapse()
        }
    })
    $('#search-form').submit((e) => {
        if (isMobile()) {
            isCollapseOpen = false
            toggleNavCollapse()
        }
    })

    // ADJUST ON START:
    checkForScroll()
    checkForMobile()
    checkForFixed()

    if (isMobile()) {
        isCollapseOpen = false

        $navigation.css('left', ($navigation.outerWidth() + $navContainer.offset().left) * -1)
        toggleNavCollapse()
    }
})