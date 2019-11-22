;
(function () {

    'use strict';

    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var mobileMenuOutsideClick = function () {

        $(document).click(function (e) {
            var container = $("#colorlib-offcanvas, .js-colorlib-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {

                if ($('body').hasClass('offcanvas')) {

                    $('body').removeClass('offcanvas');
                    $('.js-colorlib-nav-toggle').removeClass('active');

                }


            }
        });

    };


    var offcanvasMenu = function () {

        $('#page').prepend('<div id="colorlib-offcanvas" />');
        $('#page').prepend('<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle colorlib-nav-white"><i></i></a>');
        var clone1 = $('.menu-1 > ul').clone();
        $('#colorlib-offcanvas').append(clone1);
        var clone2 = $('.menu-2 > ul').clone();
        $('#colorlib-offcanvas').append(clone2);

        $('#colorlib-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
        $('#colorlib-offcanvas')
                .find('li')
                .removeClass('has-dropdown');

        // Hover dropdown menu on mobile
        $('.offcanvas-has-dropdown').mouseenter(function () {
            var $this = $(this);

            $this
                    .addClass('active')
                    .find('ul')
                    .slideDown(500, 'easeOutExpo');
        }).mouseleave(function () {

            var $this = $(this);
            $this
                    .removeClass('active')
                    .find('ul')
                    .slideUp(500, 'easeOutExpo');
        });


        $(window).resize(function () {

            if ($('body').hasClass('offcanvas')) {

                $('body').removeClass('offcanvas');
                $('.js-colorlib-nav-toggle').removeClass('active');

            }
        });
    };

    var burgerMenu = function () {

        $('body').on('click', '.js-colorlib-nav-toggle', function (event) {
            event.preventDefault();
            event.stopPropagation();
            var $this = $(this);

            if ($('body').hasClass('overflow offcanvas')) {
                $('body').removeClass('overflow offcanvas');
            } else {
                $('body').addClass('overflow offcanvas');
            }
            $this.toggleClass('active');
        });
    };


    var contentWayPoint = function () {
        var i = 0;
        $('.animate-box').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('animated-fast')) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function () {

                    $('body .animate-box.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn animated-fast');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft animated-fast');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight animated-fast');
                            } else {
                                el.addClass('fadeInUp animated-fast');
                            }

                            el.removeClass('item-animate');
                        }, k * 200, 'easeInOutExpo');
                    });

                }, 100);

            }

        }, {offset: '85%'});
    };


    var dropdown = function () {

        $('.has-dropdown').mouseenter(function () {

            var $this = $(this);
            $this
                    .find('.dropdown')
                    .css('display', 'block')
                    .addClass('animated-fast fadeInUpMenu');

        }).mouseleave(function () {
            var $this = $(this);

            $this
                    .find('.dropdown')
                    .css('display', 'none')
                    .removeClass('animated-fast fadeInUpMenu');
        });

    };


    var goToTop = function () {

        $('.js-gotop').on('click', function (event) {

            event.preventDefault();

            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');

            return false;
        });

        $(window).scroll(function () {

            var $win = $(window);
            if ($win.scrollTop() > 200) {
                $('.js-top').addClass('active');
            } else {
                $('.js-top').removeClass('active');
            }

        });

    };


    // Loading page
    var loaderPage = function () {
        $(".colorlib-loader").fadeOut("slow");
    };

    var counter = function () {
        $('.js-counter').countTo({
            formatter: function (value, options) {
                return value.toFixed(options.decimals);
            },
        });
    };


    var counterWayPoint = function () {
        if ($('#colorlib-counter').length > 0) {
            $('#colorlib-counter').waypoint(function (direction) {

                if (direction === 'down' && !$(this.element).hasClass('animated')) {
                    setTimeout(counter, 400);
                    $(this.element).addClass('animated');
                }
            }, {offset: '90%'});
        }
    };

    var sliderMain = function () {

        $('#colorlib-hero .flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 5000,
            directionNav: true,
            start: function () {
                setTimeout(function () {
                    $('.slider-text').removeClass('animated fadeInUp');
                    $('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
                }, 500);
            },
            before: function () {
                setTimeout(function () {
                    $('.slider-text').removeClass('animated fadeInUp');
                    $('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
                }, 500);
            }

        });

    };

    var parallax = function () {

        if (!isMobile.any()) {
            $(window).stellar({
                horizontalScrolling: false,
                hideDistantElements: false,
                responsive: true

            });
        }
    };

    // Owl Carousel
    var owlCrouselFeatureSlide = function () {
        var owl = $('.owl-carousel1');
        owl.owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            autoplay: true,
            items: 1,
            loop: true,
            margin: 0,
            responsiveClass: true,
            nav: true,
            dots: false,
            smartSpeed: 500,
            navText: [
                "<i class='icon-arrow-left3 owl-direction'></i>",
                "<i class='icon-arrow-right3 owl-direction'></i>"
            ]
        });

        $('.owl-carousel2').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            autoplay: true,
            loop: true,
            margin: 30,
            nav: true,
            dots: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
            },
            navText: [
                "<i class='icon-arrow-left3 owl-direction'></i>",
                "<i class='icon-arrow-right3 owl-direction'></i>"
            ]
        })
    };



    $(function () {
        mobileMenuOutsideClick();
        offcanvasMenu();
        burgerMenu();
        contentWayPoint();
        sliderMain();
        dropdown();
        goToTop();
        loaderPage();
        counter();
        counterWayPoint();
        parallax();
        owlCrouselFeatureSlide();
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 60) {
            if ($(window).width() > 990) {
                $('.colorlib-nav').css('position', 'fixed');
                $('.colorlib-nav-toggle').css('position', 'fixed');
                $('.colorlib-nav-toggle').css('z-index', 5002);

                $('.colorlib-nav-toggle2').removeClass('colorlib-nav-white');
                $('.colorlib-nav-toggle2').addClass('colorlib-nav-black');

                $('.colorlib-nav ul li a').css('color', 'black');



                $('.colorlib-nav #colorlib-logo a').css('color', '#f35c32');
                $('.colorlib-nav ul li.active > a').css('color', '#f35c32');
                $('.colorlib-nav').css('background-color', 'white');
                $('.colorlib-nav').css('z-index', 1008);
                $('.colorlib-nav').css('box-shadow', '0px 2px 10px rgba(0, 0, 0, 0.22)');
            } else {


                $('.colorlib-nav').css('position', 'fixed');
                $('.colorlib-nav-toggle').css('position', 'fixed');
                $('.colorlib-nav-toggle').css('z-index', 5002);

                $('.colorlib-nav-toggle2').removeClass('colorlib-nav-white');
                $('.colorlib-nav-toggle2').addClass('colorlib-nav-black');

                $('.colorlib-nav ul li a').css('color', 'black');



                $('.colorlib-nav #colorlib-logo a').css('color', '#f35c32');
                $('.colorlib-nav ul li.active > a').css('color', '#f35c32');
                $('.colorlib-nav').css('background-color', 'white');
                $('.colorlib-nav').css('z-index', 1008);
                $('.colorlib-nav').css('box-shadow', '0px 2px 10px rgba(0, 0, 0, 0.22)');
            }
        } else {

            $('.colorlib-nav').css('background-color', 'transparent');
            $('.colorlib-nav').css('box-shadow', 'none');
            $('.colorlib-nav ul li a').css('color', 'white');
            $('.colorlib-nav #colorlib-logo a').css('color', 'white');
            $('.colorlib-nav ul li.active > a').css('color', '#007bd1');
            $('.colorlib-nav').css('z-index', 9);

            $('.colorlib-nav-toggle2').removeClass('colorlib-nav-black');
            $('.colorlib-nav-toggle2').addClass('colorlib-nav-white');
        }
    });

    $(".colorlib-nav-toggle").click(function () {
        alert("Handler for .click() called.");
    });

    if ($('.owl-slide-3').length > 0) {
        $('.owl-slide-3').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 30,
            autoplay: true,
            autoplayTimeout:5000,
            smartSpeed: 500,
            nav: true,
            dots: true,
            navText: ['<span class="icon-arrow-left2">', '<span class="icon-arrow-right2">'],
            responsive: {
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    }

    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function () {
        $('.js-fullheight').css('height', $(window).height());
    });

    $('.js-colorlib-nav-toggle2, .js-colorlib-nav-toggle3').on('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        var $this = $(this);
        if ($('body').hasClass('menu-show')) {
            $('body').removeClass('menu-show');
            $('#colorlib-main-nav > .js-colorlib-nav-toggle3').removeClass('show');
        } else {
            $('body').addClass('menu-show');
            setTimeout(function () {
                $('#colorlib-main-nav > .js-colorlib-nav-toggle3').addClass('show');
            }, 900);
        }
    });
    
    
    $('.zoom-gallery').magnificPopup({
        delegate: 'a.gallery',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function (item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: false,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }

    });
}());