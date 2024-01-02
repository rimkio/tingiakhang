global.$ = global.jQuery = require('jquery');
import $ from 'jquery'
import 'slick-carousel'

window.jQuery = window.$ = $;

(function ($) {
    "use strict";


    const Gallery = () => {
        if (!$('.hlx-home-gallery__wrap-item').length) return;

        $(".hlx-home-gallery__wrap").slick({
            infinite: false,
            arrows: true,
            dots: true,
            appendArrows: ".gallery-slick",
            appendDots: '.gallery-slick',
        });
    }


    $(window).on("load", function () {

    });

    $(document).ready(function () {
        Gallery();
    })
})(jQuery); 