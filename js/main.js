$(document).ready(function(){
	var heigth = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > heigth){
			$('.menu').addClass('menu-fixed animated slideInDown');
			$('.logo').addClass('logo-fixed');

		} else {
			$('.menu').removeClass('menu-fixed');
			$('.logo').removeClass('logo-fixed');
			$('.menu').removeClass('menu-fixed animated slideInDown');
		}
	});

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 71
        }, 1700, 'easeInOutExpo');
        event.preventDefault();
    });
});
$(".campofecha").calendarioDW();
});
