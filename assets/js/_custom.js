/*!
 * Title: Custom JS
 * Author: Wallace Erick
 * Author URI: http://wallaceerick.com.br/
 * Version: 1.0
 */


$(document).ready(function(){

    // Cached selectors to improve performance
    var loadedContent         = $('body'),
        projectsCarousel 	  = $('.js-projects-carousel'),
        scrollLinks      	  = $('.js-scroll');

    // Preloader
    loadedContent.jpreLoader({
        showPercentage:       true,
        autoClose:            true,
        onetimeLoad:          true,
        splashFunction: function(){
            //console.log('Carregando...');
        }
    }, function(){
        //console.log('Carregado!');
    });

    scrollLinks.bind('click',function(event){
        var $anchor = $(this);
 
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500);
        
        event.preventDefault();
    });

    // Carousel to Layouts
    if (projectsCarousel[0]){
        projectsCarousel.owlCarousel({
            slideSpeed:         1500,
            pagination:         true,
            navigation:         false,
            itemsDesktop:       false,
            itemsDesktopSmall:  false,
            autoHeight: 		true,
            singleItem:       	true
        });
        $('.previous-image').click(function(){
            projectsCarousel.trigger('owl.prev');
        });
        $('.next-image').click(function(){
            projectsCarousel.trigger('owl.next');
        });
    }

    $(window).scroll(function(){
    	var headerHeight 		= 90,
    		carouselTop 		= $('.js-slides').offset().top,
    		contentTop 		    = $('.js-content').offset().top - 90,
    		windowTop 			= $(window).scrollTop();

    	console.log(windowTop + ' ' + contentTop);

		if (windowTop >= carouselTop) {
			$('.slider-button').addClass('fixed');
	    }
	    else if(windowTop >= contentTop){
	    	$('#header').addClass('black');
	    }
	    else {
	    	$('#header').removeClass('black');
			$('.slider-button').removeClass('fixed');
	    }
	});


});




