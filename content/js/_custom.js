/*!
 * Title: Custom JS
 * Author: Wallace Erick
 * Author URI: http://wallaceerick.com.br/
 * Version: 1.0
 */

$(document).ready(function(){

    // Cached selectors to improve performance
    var loadedContent         = $('body'),
        primaryBanner      	  = $('.js-primary-banner'),
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

    // Banner: Home
    if (primaryBanner[0]){
        primaryBanner.owlCarousel({
        	// autoPlay: 			5000,
            slideSpeed:         1000,
            pagination:         true,
            navigation:         false,
            itemsDesktop:       false,
            itemsDesktopSmall:  false,
            singleItem:       	true
        });
    }


});




