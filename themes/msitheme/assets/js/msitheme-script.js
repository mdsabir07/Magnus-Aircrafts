/*jslint browser: true*/
/*global $, jQuery, alert*/
(function ($) {
    "use strict";


    $('.event-cat-list').click(function() {
        const value = $(this).attr('data-filter');
        $('.eventBox').not('.'+value).hide('1000');
        $('.eventBox').filter('.'+value).show('1000');
    })
    $('.event-cat-list').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    })

}(jQuery));