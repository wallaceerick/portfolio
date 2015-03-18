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
        audioPlayer      	  = $('.js-audio-player'),
        videoPlayer      	  = $('#teste'),

        pullButton 			  = $('.js-pull'),
        pullContent 		  = $('.js-menu-content'),

        animatedText 		  = $('.js-animated-text'),
        animatedIcon 		  = $('.js-animated-icon'),
        animatedContent 	  = $('.js-animated-content'),
        animatedForm	      = $('.js-animated-form'),
        animatedHead     	  = $('.js-animated-page-head'),
        animatedWords     	  = $('.js-animated-words'),

        contactForm  		  = $('.js-contact-form'),
        contactPhoneMask  	  = $('.js-phone-mask'),

        serviceSection  	  = $('.js-services-section'),
        skillSection  		  = $('.js-skills-section'),

        projectsParent        = $('.js-projects-parent'),
        projectsNav           = $('.js-navigation'),
        projectsCarousel      = $('.js-projects-carousel'),
        projectsFilter 		  = $('.js-projects'),
        projectItem 		  = $('.js-projects li'),
		projectSize 	      = projectItem.size(),
		projectQuantity 	  = 5,
        projectPrev 		  = $('.js-project-prev-button'),
        projectNext 		  = $('.js-project-next-button'),

        btnMore 		      = $('.js-btn-more'),
        btnLess 		      = $('.js-btn-less'),
        btnBlog 		      = $('.js-btn-blog');
				        
    // Preloader
    loadedContent.jpreLoader({
        showPercentage:       false,
        autoClose:            true,
        onetimeLoad:          false,
        splashFunction: function(){
            // console.log('Carregando...');
        }
    }, function(){

    	// var pathname = window.location.pathname;
    	// alert(pathname);

    	$('html, body').stop().animate({
            scrollTop: 0
        }, 500); 
    	
    	if(animatedHead[0]){
    		animatedHead.addClass('init-animation');
    	}

    	// Animations
    	setTimeout(function(){
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
	    	// Sound
    		// audioPlayer[0].play();
    		
    	}, 1000);  

		// Slider
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

		// Word Rotation
		if(animatedWords[0]){
			animatedWords.rotaterator({
				fadeSpeed: 800, 
				pauseSpeed: 5000
			});
		}

    });

    // REMOVER
    if(btnBlog[0]){
    	btnBlog.click(function(e){
    		e.preventDefault();
    		alert('Estou atualizando o layout do Blog pra ficar fininho também, logo eu atualizo esse link! :D');
    	});
    }

    // Mix It Up
    projectsFilter.mixItUp({
		load: {
			filter: document.location.hash == '' ? 'all' : ('.' + document.location.hash.substring(1))
		},
		animation: {
			duration:  600,
			effects:  'fade translateZ(-360px) stagger(3ms) scale(0.01)',
			easing:   'ease'
		},
		callbacks: {
			onMixStart: function(state){
				$('html, body').stop().animate({
		            scrollTop: 615
		        }, 1000); 
			}
			/*
			onMixEnd: function(state){

				projectItem.hide();
				$('#portfolio li:lt(' + projectQuantity + ')').show();

				// View More
			    btnMore.click(function () {
			        projectQuantity = (projectQuantity + 5 <= projectSize) ? projectQuantity + 5 : projectSize;
			        $('#portfolio li:lt(' + projectQuantity + ')').show();
			    });

			    // View Less
			    btnLess.click(function () {
			        projectQuantity = (projectQuantity - 5 < 0) ? 3 : projectQuantity - 5;
			        projectItem.not(':lt(' + projectQuantity + ')').hide();
			    });

			}
			*/
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

    		// console.log(windowTop);
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
		// Form
		contactForm.find('input').focusin(function(){
			$('.fs-continue').removeClass('is-textarea').fadeIn(300);
		});
		contactForm.find('textarea').focusin(function(){
			$('.fs-continue').addClass('is-textarea').fadeIn(300);
		});

		// Mask
		contactPhoneMask.mask('(99) 9999?9-9999');
		contactPhoneMask.on('blur', function(){
		    var last = $(this).val().substr( $(this).val().indexOf('-') + 1 );
		    
		    if( last.length == 3 ) {
		        var move = $(this).val().substr( $(this).val().indexOf('-') - 1, 1 );
		        var lastfour = move + last;
		        
		        var first = $(this).val().substr( 0, 9 );
		        
		        $(this).val( first + '-' + lastfour );
		    }
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

	// Back top Top
	backToTop.click(function(){
		$('html, body').stop().animate({
		    scrollTop: 0
		}, 1200);
	});

	// Change logo and pull color dark/light
    $(window).scroll(function(){
    	var windowTop = $(window).scrollTop();

    	// Pull and Top Button
		if (windowTop >= 460) {
			pullButton.addClass('dark');
			backToTop.fadeIn(300);
	    }
	    else {
	    	pullButton.removeClass('dark');
	    	backToTop.hide();
	    }

	    // Header Logo
		if (windowTop >= 570) {
			logoHeader.addClass('dark');
	    }
	    else {
	    	logoHeader.removeClass('dark');
	    }

	    // About Page
	    if(serviceSection[0] && skillSection[0]){
	    	if (windowTop > 1130 && windowTop < 2095) {
	    		logoHeader.removeClass('dark').addClass('light');
				pullButton.removeClass('dark').addClass('light');
		    }
	    	if (windowTop > 2096) {
	    		logoHeader.removeClass('light').addClass('dark');
				pullButton.removeClass('light').addClass('dark');
		    }
	    }

	    // Projects
	    if(projectsNav[0] && projectsParent[0]){
	    	if (windowTop >= 615) {
	    		projectsNav.addClass('fixed');
				projectsParent.addClass('fixed');
		    }
		    else {
	    		projectsNav.removeClass('fixed');
				projectsParent.removeClass('fixed');
		    }
	    }

	});
						

});




