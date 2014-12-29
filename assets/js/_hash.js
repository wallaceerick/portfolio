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

		if(hash)
		{
			loadPage(hash);
		}
		
		// Pega o clique nos links
		$('ul.js-hashchange li a').click(function(){

			var obj = $(this);
			hash = obj.attr('name');
			window.location.hash = hash;

			$('ul.js-hashchange li a').removeClass('selected');
			obj.addClass('selected');

			if(hash)
			{
				loadPage(hash);
			}
			return false;
		});
		
		
		// Função loadPage()
		function loadPage(hash)
		{
			// Pega o hash e remove o fragmento #!
			var theHash = hash.replace(/#!/g, "");
			// alert(hash);
			// hash.addClass('selected');
			
			// Checa se o último hash utilizado
			// é o atual, se for não carrega novamente
			if(lastHash != theHash)
			{ 
				// Ajax para fazer o load
				$.ajax({
					beforeSend: function(){
						lastHash = theHash;
						$('.loading').show();
					},
					url: 'data.php',
					type: 'GET',
					data: 'projeto=' + theHash,
					success: function(data){
						$('.loading').hide();
						$('#project').html(data);
						$('#project .title').delay(300).fadeIn(300);
						$('#project img').delay(600).fadeIn(300);
						$('#project .infos').delay(900).slideDown(700);
					}	
				});
			}
		}
		
	});