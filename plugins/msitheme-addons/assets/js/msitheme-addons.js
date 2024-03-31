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

    $(document).ready(function () {
        $('.popup-youtube, .popup-vimeo, .popup-media-v').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });



    // Product tab js (changing background color)
    $(".tablist-1 label").click(function () {
        $(".product-tabbed").addClass("tablist-1-active-new");
        $(".product-tabbed").removeClass("tablist-1-active");
        $(".product-tabbed").removeClass("tablist-2-active");
    });
    $(".tablist-2 label").click(function () {
        $(".product-tabbed").addClass("tablist-2-active");
    });

    // Product plus button click and change left content
    $(".product-1-tab-content .aircraft-icon1, .product-2-tab-content .aircraft-icon1").click(function () {
        $(".btn-content-1").addClass("btn-content1-active");
        $(".btn-content-1").removeClass("btn-content1-active-default");
        $(".btn-content-2").removeClass("btn-content2-active");
        $(".btn-content-3").removeClass("btn-content3-active");
        $(".btn-content-4").removeClass("btn-content4-active");
        $(".btn-content-5").removeClass("btn-content5-active");
        $(".btn-content-6").removeClass("btn-content6-active");
    });

    $(".product-1-tab-content .aircraft-icon2, .product-2-tab-content .aircraft-icon2").click(function () {
        $(".btn-content-2").addClass("btn-content2-active");
        $(".btn-content-1").removeClass("btn-content1-active");
        $(".btn-content-3").removeClass("btn-content3-active");
        $(".btn-content-4").removeClass("btn-content4-active");
        $(".btn-content-5").removeClass("btn-content5-active");
        $(".btn-content-6").removeClass("btn-content6-active");
    });

    $(".product-1-tab-content .aircraft-icon3, .product-2-tab-content .aircraft-icon3").click(function () {
        $(".btn-content-3").addClass("btn-content3-active");
        $(".btn-content-1").removeClass("btn-content1-active");
        $(".btn-content-2").removeClass("btn-content2-active");
        $(".btn-content-4").removeClass("btn-content4-active");
        $(".btn-content-5").removeClass("btn-content5-active");
        $(".btn-content-6").removeClass("btn-content6-active");
    });

    $(".product-1-tab-content .aircraft-icon4, .product-2-tab-content .aircraft-icon4").click(function () {
        $(".btn-content-4").addClass("btn-content4-active");
        $(".btn-content-1").removeClass("btn-content1-active");
        $(".btn-content-2").removeClass("btn-content2-active");
        $(".btn-content-3").removeClass("btn-content3-active");
        $(".btn-content-5").removeClass("btn-content5-active");
        $(".btn-content-6").removeClass("btn-content6-active");
    });

    $(".product-1-tab-content .aircraft-icon5, .product-2-tab-content .aircraft-icon5").click(function () {
        $(".btn-content-5").addClass("btn-content5-active");
        $(".btn-content-1").removeClass("btn-content1-active");
        $(".btn-content-2").removeClass("btn-content2-active");
        $(".btn-content-3").removeClass("btn-content3-active");
        $(".btn-content-4").removeClass("btn-content4-active");
        $(".btn-content-6").removeClass("btn-content6-active");
    });

    $(".product-1-tab-content .aircraft-icon6, .product-2-tab-content .aircraft-icon6").click(function () {
        $(".btn-content-6").addClass("btn-content6-active");
        $(".btn-content-1").removeClass("btn-content1-active");
        $(".btn-content-2").removeClass("btn-content2-active");
        $(".btn-content-3").removeClass("btn-content3-active");
        $(".btn-content-4").removeClass("btn-content4-active");
        $(".btn-content-5").removeClass("btn-content5-active");
    });

    // https://codepen.io/bastia-g5/pen/RwqLdzO
    // $(function () {
    //     $('.tab-content-right-img i.fa-plus').off("click").on("click", function () {
    //         $parentElement = $(this).closest(".tab-content-right-img");
    //         $parentElement.siblings(".tab-content-right-img").removeClass("active");
    //         if ($parentElement.hasClass("active")) {
    //             $parentElement.removeClass("active");
    //             $parentElement.siblings(".tab-content-right-img").removeClass('filteropacity');
    //         } else {
    //             $parentElement.addClass("active").removeClass("filteropacity");
    //             $parentElement.siblings(".tab-content-right-img").addClass('filteropacity');
    //         }

    //         $('.plus-btn-content').not('#div' + $(this).attr('data-target')).hide();
    //         $('#div' + $(this).attr('data-target')).toggle();
    //     });
    // });


    // $('.product-1-tab-content .aircraft-icon1').click(function(event){
    //     $('.product-1-tab-content .plus-btn-content, .product-1-tab-content .btn-content-1').removeClass('active-tab');

    //     $(this).addClass('active-tab');  
    //     event.preventDefault();
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