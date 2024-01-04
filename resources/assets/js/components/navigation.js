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
            e.preventDefault();
            if ($(window).width() < 767) {
                $(this).find('.sub-menu').slideToggle(500);
            }
        });
    });

})(jQuery);