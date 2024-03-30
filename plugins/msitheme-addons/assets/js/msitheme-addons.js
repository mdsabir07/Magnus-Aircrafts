/*jslint browser: true*/
/*global $, jQuery, alert*/
(function ($) {
    "use strict";

    // Sticky header
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 50) {
    //         $("#header").addClass("sticky");
    //     } else {
    //         $("#header").removeClass("sticky");
    //     }
    // });
    // CounterUp JS
    $(function () {
        $(".count").counterUp({
            delay: 5,
            time: 1000
        });
    });

    $(document).ready(function() {
        $('.popup-youtube, .popup-vimeo, .popup-media-v').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
    
            fixedContentPos: false
        });
    });



    // minicart js
    $(".tablist-1 label").click(function () {
        $(".product-tabbed").addClass("tablist-1-active-new");
        $(".product-tabbed").removeClass("tablist-1-active");
        $(".product-tabbed").removeClass("tablist-2-active");
    });
    $(".tablist-2 label").click(function () {
        $(".product-tabbed").addClass("tablist-2-active");
    });

    // all categories menu js
    // $(".all-categories").click(function () {
    //     $(".cat-menus").addClass("cat-menus-active");
    // });
    // $(".close-cat-menus").click(function () {
    //     $(".cat-menus").removeClass("cat-menus-active");
    // });

    // responsive menu js
    // $(".responsive-menu svg").click(function () {
    //     $(".main-navigation").addClass("menus-active");
    // });
    // $(".responsive-menu-close").click(function () {
    //     $(".main-navigation").removeClass("menus-active");
    // });



    // Responsive Navigation JS
    // $(".nav-mobile").click(function () {
    //     $(".nav-list").stop().slideUp(300);
    //     $(this).next(".nav-list").stop().slideToggle(300);
    // });
    // FAQs JS
    // $('.faq-accordion-heading').click(function (e) {
    //     e.preventDefault();
    //     if (!$(this).hasClass('active')) {
    //         $('.faq-accordion-heading').removeClass('active');
    //         $('.faq-accordion-content').slideUp(50);
    //         $(this).addClass('active');
    //         $(this).next('.faq-accordion-content').slideDown(50);
    //     } else if ($(this).hasClass('active')) {
    //         $(this).removeClass('active');
    //         $(this).next('.faq-accordion-content').slideUp(50);
    //     }
    // });
}(jQuery));