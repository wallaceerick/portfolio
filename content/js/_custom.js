/*!
 * Title: Custom JS
 * Author: Wallace Erick
 * Author URI: http://wallaceerick.com.br/
 * Version: 1.0
 */


$(document).ready(function(){

    // Cached selectors to improve performance
    var loadedContent         = $('body'),
        logoHeader      	  = $('.js-logo-icon'),
        logoHome        	  = $('.js-logo-home'),

        backToTop			  = $('.js-to-top'),
        scrollLinks      	  = $('.js-scroll'),
        overlayMenu      	  = $('.js-overlay-menu'),

        pullButton 			  = $('.js-pull'),
        pullContent 		  = $('.js-menu-content'),

        animatedText 		  = $('.js-animated-text'),
        animatedIcon 		  = $('.js-animated-icon'),
        animatedContent 	  = $('.js-animated-content'),
        animatedForm	      = $('.js-animated-form'),

        contactForm  		  = $('.js-contact-form'),

        projectsCarousel      = $('.js-projects-carousel'),
        projectItem 		  = $('.js-projects li'),
        projectPrev 		  = $('.js-project-prev-button'),
        projectNext 		  = $('.js-project-next-button');
				        
    // Preloader
    loadedContent.jpreLoader({
        showPercentage:       false,
        autoClose:            true,
        onetimeLoad:          false,
        splashFunction: function(){
            // console.log('Carregando...');
        }
    }, function(){
    	if(animatedText[0]){
    		animatedText.addClass('init-animation');
    	}
    	if(animatedIcon[0]){
    		animatedIcon.addClass('init-animation');
    	}
    	if(animatedContent[0]){
    		animatedContent.addClass('init-animation');
    	}
    	if(animatedForm[0]){
    		animatedForm.addClass('init-animation');
    	}
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
 

	//contactForm
	if(contactForm[0]){
		contactForm.find('input').focusin(function(){
			$('.fs-continue').removeClass('is-textarea').fadeIn(300);
		});
		contactForm.find('textarea').focusin(function(){
			$('.fs-continue').addClass('is-textarea').fadeIn(300);
		});
	}

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

	// Project slider
	if(projectsCarousel[0]){
		projectsCarousel.owlCarousel({
	        slideSpeed:         1000,
	        pagination:         true,
	        navigation:         false,
	        itemsDesktop:       false,
	        itemsDesktopSmall:  false,
	        autoHeight: 		true,
	        singleItem:       	true,
	        afterInit: function(){
	        	//
	        }
	    });

	    projectPrev.click(function(e){
	    	e.preventDefault();
	        projectsCarousel.trigger('owl.prev');
	        $('html, body').stop().animate({
	            scrollTop: projectTop + 500
	        }, 500); 
	    });
	    projectNext.click(function(e){
	    	e.preventDefault();
	        projectsCarousel.trigger('owl.next');
	        $('html, body').stop().animate({
	            scrollTop: projectTop + 520
	        }, 500); 
	    });
	}

	// Back top Top
	backToTop.click(function(){
		$('html, body').stop().animate({
		    scrollTop: 0
		}, 1200);
	});

	// Change logo and pull color dark/light
    $(window).scroll(function(){
    	var windowTop = $(window).scrollTop();

    	// console.log(windowTop);

    	// Pull Button
		if (windowTop >= 460) {
			pullButton.addClass('dark');
	    }
	    else {
	    	pullButton.removeClass('dark');
	    }

	    // Header Logo
		if (windowTop >= 570) {
			logoHeader.addClass('dark');
	    }
	    else {
	    	logoHeader.removeClass('dark');
	    }

	});
						

});




