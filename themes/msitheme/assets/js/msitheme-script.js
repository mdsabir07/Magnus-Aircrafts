/*jslint browser: true*/
/*global $, jQuery, alert*/
(function ($) {
    "use strict";

    // Event js
    $('.event-cat-list').click(function() {
        const value = $(this).attr('data-filter');
        $('.eventBox').not('.'+value).hide('1000');
        $('.eventBox').filter('.'+value).show('1000');
    })
    $('.event-cat-list').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    })

    // Dealer js
    $('.dealer-cat-list').click(function() {
        const value = $(this).attr('data-filter');

        if (value === 'all') {
            $('.dealerBox').show('1000');
        } else {
            $('.dealerBox').not('.'+value).hide('1000');
            $('.dealerBox').filter('.'+value).show('1000');
        }
    })
    $('.dealer-cat-list').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    })

}(jQuery));