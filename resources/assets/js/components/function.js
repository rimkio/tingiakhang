global.$ = global.jQuery = require('jquery');
import $ from 'jquery'
import 'slick-carousel'

window.jQuery = window.$ = $;

(function ($) {
    "use strict";


    const Gallery = () => {
        if (!$('.carousel__inner').length) return;

        $(".carousel__inner").slick({
            infinite: false,
            arrows: false,
            dots: true,
        });
    }


    $(window).on("load", function () {

    });

    $(document).ready(function () {
        Gallery();

        $(document).on("click",".toggle-cat",function() {
            $(this).parent().toggleClass('active');
            $(this).parent().find('.list-wrap-product').slideToggle();
        });
    })
})(jQuery); 