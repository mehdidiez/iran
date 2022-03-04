jQuery(function ($) {

    'use strict';
    // 1. fixed navbar
    $(window).on('scroll', function () {
        // checks if window is scrolled more than 500px, adds/removes solid class
        if ($(this).scrollTop() > 60) {
            $('.navbar').addClass('affix');
        } else {
            $('.navbar').removeClass('affix');
        }
    });


    // 2. page scrolling feature - requires jQuery Easing plugin
    $(function () {
        $(document).on('click', 'a.page-scroll', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 60
            }, 900, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // 3. closes the responsive menu on menu item click
    $(".navbar-nav li a").on("click", function (event) {
        if (!$(this).parent().hasClass('dropdown'))
            $(".navbar-collapse").collapse('hide');
    });


        (function ($) {
            $.fn.inputFilter = function (inputFilter) {
                return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    }
                });
            };
        }(jQuery));


        // Install input filters.
        $("#intTextBox").inputFilter(function (value) {
            return /^-?\d*$/.test(value);
        });


    /**
     * Get the increment value
     * @param value
     * @returns {number}
     */
    function incrementValue(value) {
        var incVal = 0;
        if (Math.ceil(value / 2) <= 5) { // upto 10
            incVal = 1;
        }
        else if (Math.ceil(value / 10) <= 10) { // up to 100
            incVal = 10;
        }
        else if (Math.ceil(value / 100) <= 10) { // up to 1000
            incVal = 25;
        }
        else if (Math.ceil(value / 100) <= 100) { // up to 10000
            incVal = 50;
        }
        else if (Math.ceil(value / 1000) <= 100) { // up to 100000
            incVal = 150;
        }
        else {
            incVal = 500;
        }
        return incVal;
    }


    // 8. client-testimonial one item carousel
    $('.client-testimonial-1').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        lazyLoad: true,
        items: 1,
    })

    // 9. our clients logo carousel
    $('.clients-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 15,
        dots: true,
        slideTransition: 'linear',
        autoplayTimeout: 4500,
        autoplayHoverPause: true,
        autoplaySpeed: 4500,
        responsive: {
            0: {
                items: 2
            },
            500: {
                items: 3
            },
            600: {
                items: 4
            },
            800: {
                items: 5
            },
            1200: {
                items: 6
            }

        }
    })

    // 10. our clients logo carousel
    $(document).ready(function () {
        $(".player").YTPlayer();
    });


    // 11. wow js
    function wowAnimation() {
        new WOW({
            offset: 100,
            mobile: true
        }).init()
    }
    wowAnimation()

}); // JQuery end