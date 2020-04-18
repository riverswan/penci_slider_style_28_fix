(function ($) {
    'use strict';
    function changeSliderCss(){
        if ($(window).width() < 767) {
            $('.featured-style-28  .owl-stage').css({
                'right': ($(window).width() - $('.owl-item').width()) / -2 + 10 + "px" ,
            })
            console.log($('.featured-style-28  .owl-stage').css('right'));
        }
    }

    $(window).load(function () {
        changeSliderCss();
    });

    $(window).resize(function () {
        changeSliderCss()
    })

})(jQuery);

