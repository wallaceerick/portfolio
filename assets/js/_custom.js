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
        logoHeader      	  = $('.js-logo-icon'),
        logoHome        	  = $('.js-logo-home'),
        scrollLinks      	  = $('.js-scroll'),
        overlayMenu      	  = $('.js-overlay-menu'),
        pullButton 			  = $('.js-pull'),
        pullContent 		  = $('.js-menu-content'),
        animatedText 		  = $('.js-animated-text'),
        animatedIcon 		  = $('.js-animated-icon'),
        projectItem 		  = $('.js-projects li');

    // Preloader
    loadedContent.jpreLoader({
        showPercentage:       false,
        autoClose:            true,
        onetimeLoad:          false,
        splashFunction: function(){
            //console.log('Carregando...');
        }
    }, function(){
    	if(animatedText[0]){
    		animatedText.addClass('init-animation');
    	}
    	if(animatedIcon[0]){
    		animatedIcon.addClass('init-animation');
    	}
    	/*
    	var pathname = window.location.pathname,
    		url      = pathname.replace('/~wallace/portfolio/', '');

		if(url == 'index.php'){

		}*/
        //console.log('Carregado!');
    });

    // Menu
    pullButton.click(function(e){
    	e.preventDefault();
    	var buttonText = $(this).find('p'),
    		windowTop = $(window).scrollTop();

    	// Remove dark class
    	pullButton.removeClass('dark');
    	logoHeader.removeClass('dark');

    	// Show overlay
    	overlayMenu.stop().fadeToggle(300);

    	// Add opened class
    	$(this).toggleClass('opened');

    	// Show menu
    	pullContent.stop().fadeToggle(300); 

    	// Change button text
    	if($(this).hasClass('opened')){
    		buttonText.text('Close');
    		logoHome.stop().fadeIn(300);
    		loadedContent.css('overflow', 'hidden');
    	}
    	else {
			buttonText.text('Menu');
			logoHome.stop().fadeOut(300);
			loadedContent.css('overflow', 'auto');

    		console.log(windowTop);
    		if(windowTop >= 810){
    			pullButton.addClass('dark');
    		}
    		else {
    			pullButton.removeClass('dark');
    		}
    		if(windowTop >= 920){
    			logoHeader.addClass('dark');
    		}
    		else {
    			logoHeader.removeClass('dark');
    		}
    	}

    	// Animate menu
    	setTimeout(function() {
		    pullContent.find('li').delay(1000).toggleClass('opened');
		}, 600);
    	
    	
    });

    // Projects Rollover
    projectItem.hover(function(){
    	$(this).find('a').removeClass('hidden');
    	$(this).find('.number').hide();
    	$(this).find('.image').fadeIn(300).addClass('init-animation');
    }, function(){
    	$(this).find('a').addClass('hidden');
    	$(this).find('.number').show();
    	$(this).find('.image').hide().removeClass('init-animation');
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
    	var windowTop = $(window).scrollTop();

    	// console.log(windowTop);

    	// Pull Button
		if (windowTop >= 810) {
			pullButton.addClass('dark');
	    }
	    else {
	    	pullButton.removeClass('dark');
	    }

	    // Header Logo
		if (windowTop >= 920) {
			logoHeader.addClass('dark');
	    }
	    else {
	    	logoHeader.removeClass('dark');
	    }

	});


});




