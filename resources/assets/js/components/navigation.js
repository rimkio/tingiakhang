(function ($) {
    "use strict";


    $(window).scroll(function () {

    });

    $(window).on("load", function () {
        $(document).on("click", "#tgk-menu-open", function () {
            $('body').addClass('menu-open');
            $('#tgk-menu-close').show();
            $(this).hide();
        });

        $(document).on("click", "#tgk-menu-close", function () {
            $('body').removeClass('menu-open');
            $('#tgk-menu-open').show();
            $(this).hide();
        });

        $(document).on("click", ".tgk-header-menu .menu-item-has-children", function (e) {
            if ($(window).width() < 767) {
                e.preventDefault();
                $(this).find('.sub-menu').slideToggle(500);
            }
        });
    });

})(jQuery);