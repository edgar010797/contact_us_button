(function ($) {
    "use strict";

    $('.seo-social-buttons').on('click', '.seo-first-social-button', function(){
        let el = $(this).find('i');

        if ( el.hasClass('fa-phone') ) {
            el.removeClass('fa-phone');
            el.addClass('fa-times');
        } else {
            el.removeClass('fa-times');
            el.addClass('fa-phone');
        }

        $('.seo-social-button').toggle('fast');

    });

})(jQuery);

