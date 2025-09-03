

(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        //Menu
        $(".mobile_menu").click(function () {
            $("#menu").slideToggle(400);

        });
       
        jQuery(window).resize(function () {
            var screenwidth = jQuery(window).width();
            if (screenwidth > 991) {
                jQuery("#menuArea").removeAttr("style");
            }
        });



        // scroll_top   
        $(window).scroll(function () {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
                //stiky header
                $('.header_area').addClass('stiky');
            } else {
                $('#toTop').fadeOut();
                //stiky header
                $('.header_area').removeClass('stiky');
            }
        });

        // scroll_top
        $("#toTop").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });

        //slick slider
        $('.slider_wrapper').owlCarousel({
            loop: false,
            margin: 0,
            autoPlay: true,
            autoplaySpeed: 100,
            nav: false,
            dots: true,
            responsiveClass: true,
            items: 3,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 3,
                }
            }

        });



    });


}(jQuery));