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