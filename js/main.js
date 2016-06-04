$(document).ready(function () {
    var heigth = $('.StickyMenu').offset().top;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > heigth) {
            $('.StickyMenu').addClass('menu-fixed animated fadeIn');
            $('.show').removeClass('hidden');
        } else {
            $('.StickyMenu').removeClass('menu-fixed animated fadeIn');
            $('.show').addClass('hidden');
        }
    });
    $(function () {
        $('a.page-scroll').bind('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1700, 'easeInOutExpo');
            event.preventDefault();
        });
    });
});