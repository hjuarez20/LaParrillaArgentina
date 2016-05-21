$(document).ready(function(){
	var heigth = $('.StickyMenu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > heigth){
			$('.StickyMenu').addClass('menu-fixed animated slideInDown');
			$('.show').removeClass('hidden');
		} else {
			$('.StickyMenu').removeClass('menu-fixed animated slideInDown');
			$('.show').addClass('hidden');
			
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
/*$(".campofecha").calendarioDW();*/
});
