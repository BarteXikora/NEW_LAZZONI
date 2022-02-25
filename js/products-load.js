jQuery('document').ready(($) => {
    // DEFAULT GROUP SLUG:
    const defaultGroup = 'wiertarki'

    // HANDLE EXPANDING ANIMATION:
    const showSubMenu = () => {
        $('.groups-list .active .sub-groups-list').css('height', 'auto')
        let currentHeight = $('.groups-list .active .sub-groups-list').innerHeight()
        $('.groups-list .active .sub-groups-list').css('height', 0)

        $('.groups-list .active .sub-groups-list').animate({
            opacity: 1,
            height: currentHeight
        }, 300)
    }

    const makeSure = () => {
        const $activeSubMenu = $('.groups-list .active .sub-groups-list')

        $activeSubMenu.css('height', 'auto')
        const realHeight = $activeSubMenu.height()

        $activeSubMenu.animate({
            height: realHeight
        }, 300)
    }

    // FILL SUBCATEGORIES LIST BASED ON LOADED CONTENT:
    const getCategoriesFromProducts = () => {
        $('.sub-groups-list').animate({
            opacity: 0,
            height: 0
        }, 300, () => {
            $('.sub-groups-list').each((i, e) => {
                $(e).empty()
            })

            $('#products-content').children().each(function () {
                if ($(this).data('anchor')) {

                    let anchorID = $(this).data('anchor').replace(/\s+/g, '-').toLowerCase()

                    $(this).attr('id', anchorID)

                    $('.groups-list .active .sub-groups-list')
                        .append('<a class="group-button pb-1" href="#' + anchorID +
                            '">' + $(this).data('anchor') + '</a>')
                }
            })
        })

        setTimeout(() => {
            showSubMenu()
        }, 350)

        setTimeout(() => {
            makeSure()
        }, 1000)
    }

    $(window).resize(function () {
        clearTimeout(this.id)
        this.id = setTimeout(showSubMenu(), 100)
    })

    $('.groups-container h2').on('DOMSubtreeModified', () => { setTimeout(() => { showSubMenu() }, 1000) })

    // HIGHLIGHT SUBCATEGORY ON SCROLL:
    const highlightSubCategory = () => {
        $('#products-content').children().each(function () {
            if ($(this).data('anchor')) {
                if ($(this).offset().top < $(window).scrollTop() + 200) {
                    let currentAnchor = $(this).data('anchor')

                    currentAnchor = currentAnchor.replace(/\s+/g, '-').toLowerCase()

                    $('.groups-list .active .sub-groups-list').children().each(function (e) {
                        if ($(this).hasClass('selected')) $(this).removeClass('selected');
                        if ($(this).attr('href') == '#' + currentAnchor) $(this).addClass('selected');
                    })
                }
            }
        })
    }
    $(window).scroll(() => {
        highlightSubCategory()
    })

    // SHOW AND HIDE LOADING COURTAIN:
    const setLoadingCourtain = (value) => {
        const $courtain = $('.loading-courtain')

        if (value) {
            $courtain.css('opacity', 0)
            if ($courtain.hasClass('d-none')) $courtain.removeClass('d-none')

            $courtain.animate({
                'opacity': 1
            }, 300)
        } else {
            $courtain.animate({
                'opacity': 0
            }, 300, () => {
                $courtain.addClass('d-none')
            })
        }
    }

    // HANDLE LOAD PRODUCTS:
    let isLoading = false

    const loadProducts = (group) => {
        if (!isLoading) {
            isLoading = true

            setLoadingCourtain(true)

            $('.groups-list').children().each((i, e) => {
                if ($(e).hasClass('active')) $(e).removeClass('active')
            })

            $.ajax({
                url: $('.single-container-products').data('link'),
                data: {
                    action: 'lazzoni_load',
                    search: $('#search-input').val(),
                    group: group
                },
                method: 'post',
                success: (ans) => {
                    isLoading = false

                    $('#products-content').html(ans)

                    $('.groups-list').find("[data-category='" + group + "']").parent().addClass('active')

                    getCategoriesFromProducts()
                    highlightSubCategory()
                    updateURL(group)

                    setLoadingCourtain(false)

                    $("html, body").animate({ scrollTop: 0 }, "smooth");
                },
                error: (err) => {
                    isLoading = false

                    $('#products-content')
                        .html('<div class="col-12 text-center mt-5 error">' +
                            '<h2>Wystąpił błąd i nie udało się wczytać produktów!' +
                            '</h2><p>Proszę spróbować później!</p></div>')

                    getCategoriesFromProducts()
                    setLoadingCourtain(false)

                    $("html, body").animate({ scrollTop: 0 }, "smooth");
                }
            })

            $('#search-input').val('')
        }
    }

    // HANDLE CLICK ON NAVIGATION:
    $('.group-button').click((e) => {
        if (!$(getTranslatedParent(e.target)).parent().hasClass('active')) {
            loadProducts($(getTranslatedParent(e.target)).data('category') || '')
        }
    })

    // HANDLE SEARCH:
    $('#search-form').on('submit', (e) => {
        e.preventDefault()

        if ($('#search-input').val()) loadProducts('')
    })

    // UPDATES URL:
    const updateURL = (group) => {
        var newURL = window.location.origin + '/new_lazzoni/products/?p=' + group
        window.history.pushState("data", "Title", newURL)

        $('head title', window.parent.document).html(
            $('.groups-container').find(`[data-category="${group}"]`).text() + '&mdash; Lazzoni Group'
        )
    }

    getCategoriesFromProducts()
    highlightSubCategory()

    loadProducts($('.single-container-products').data('page') || defaultGroup)
})