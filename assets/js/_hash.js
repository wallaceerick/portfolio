$(function(){
		var hash = window.location.hash ? window.location.hash : false;
		var lastHash = false;
		var url = window.location.href;

		if(url.indexOf('projeto=') != '-1')
		{
			url = url.replace(/\?projeto\=/, "#!");
			window.location.href = url;
		}
		else if(url.indexOf('_escaped_fragment_') != '-1')
		{
			url = url.replace(/\?_escaped_fragment_\=/, "#!");
			window.location.href = url;
		}

		if(hash){
			loadPage(hash);
		}
		
		// Pega o clique nos links
		$('.js-hashchange li a.js-load-project').click(function(){
			var obj = $(this);
			hash = obj.attr('name');
			window.location.hash = hash; 

			$('.js-hashchange li').removeClass('selected');
			// obj.parent().parent().addClass('selected');

			if(hash){
				loadPage(hash); 
			}
			return false;
		});
		
		
		// Função loadPage()
		function loadPage(hash)
		{
			// Pega o hash e remove o fragmento #!
			var theHash = hash.replace(/#!/g, "");
			
			// Checa se o último hash utilizado 
			// é o atual, se for não carrega novamente
			if(lastHash != null)
			// if(lastHash != theHash)
			{ 
				// Ajax para fazer o load
				$.ajax({
					beforeSend: function(){
						lastHash = theHash;
						$('.js-ajax-loading').show().animate({
							right: '-100px'
						});
					},
					url: 'data.php',
					type: 'GET',
					data: 'projeto=' + theHash,
					success: function(data){
						var page       = theHash.replace('.html', ''),
							projectTop = $('li.' + page).offset().top;

						// Remove o conteúdo atual, esconde o loader e carrega o novo
						$('.loaded-content').slideUp().remove();
						$('.js-ajax-loading').animate({
							right: '-300px'
						}).hide();
						$('li.' + page).addClass('selected').append(data);

						// Anima a página para ficar o projeto selecionando sempre no topo
						$('html, body').stop().animate({
				            scrollTop: projectTop
				        }, 1000); 

						// Fecha o Projeto
						$('.js-close-project').click(function(e){
							e.preventDefault();
							//Remove a hash
							window.location.hash = '';
							// Remove o conteúdo do ajax e a classe da lista
							$(this).parent().parent().fadeOut(500);
							$(this).parent().parent().parent().removeClass('selected');
							// 'Anima' até o início da página
							$('html, body').stop().animate({
					            scrollTop: 1020
					        }, 0); 
						});

						// Inicia o Carousel
						var projectsCarousel = $('.js-projects-carousel');
				        projectsCarousel.owlCarousel({
				            slideSpeed:         1000,
				            pagination:         true,
				            navigation:         false,
				            itemsDesktop:       false,
				            itemsDesktopSmall:  false,
				            autoHeight: 		true,
				            singleItem:       	true,
				            afterInit: function(){ 
				            }
				        });
				        $('.prev-button').click(function(e){
				        	e.preventDefault();
				            projectsCarousel.trigger('owl.prev');
				            $('html, body').stop().animate({
					            scrollTop: projectTop + 500
					        }, 500); 
				        });
				        $('.next-button').click(function(e){
				        	e.preventDefault();
				            projectsCarousel.trigger('owl.next');
				            $('html, body').stop().animate({
					            scrollTop: projectTop + 520
					        }, 500); 
				        });

				        // Ajuste na posição das setas do slider
				        $(window).scroll(function(){
		            		var scrollTop     = $('.scroll-top').offset().top,
								scrollBottom  = $('.scroll-bottom').offset().top,
								sliderButtons = $('.prev-button, .next-button'),
								pageTop       = $(window).scrollTop(),
								pageHeight    = $(window).height();

							// Isso ficou punk, resumindo:
							// Verifica se o scroll da página é maior ou igual ao inicio da imagem
							// e é menor ou igual que o final da imagem para mudar o posicionamento dos botões.
							// OBS: No valor de scrollBottom está sendo subtraído o tamanho da página e dos botões
							// e sendo dividido por 2, que é equivalente ao centro da página.
							if (pageTop >= scrollTop && pageTop <= (scrollBottom - ((pageHeight + 220) / 2))) {
								sliderButtons.addClass('fixed').show();
						    }
						    else {
						    	sliderButtons.removeClass('fixed').hide();
						    }
						});


					}	
				});
			}
		}
		
	});