$(function(){
	
	// Define as Variáveis
	var name,
		email,
		phone,
		message,
		form     = $('.js-animated-form'),
		response = $('.js-response-form'),
		page     = $('#page');

	$('#submit-form').on('click', function(){

		//Pega o valor das Variáveis
		name 		= $('input[id="name"]').val();
		email 		= $('input[id="email"]').val();
		phone 	    = $('input[id="phone"]').val();
		message 	= $('textarea[id="message"]').val();

		// Checa os campos preenchidos e se estiver tudo OK, envia.
		if (name != "" && email != "" && phone != "" && message != ""){
			$.ajax({
				type: 'POST',
				url:  'sender.php',
				data: {
					name: name,
					email: email,
					phone: phone,
					message: message,
				}			
			}).done(function(data){
				if (data == 'enviado') {
					// Hide Form
					form.find('form').fadeOut(300);

					// Shoe Icon
					page.delay(400).fadeIn(300);

					// Update Message
					response.addClass('success-message');
					response.find('h2').html('Sucesso');
					response.find('h3').html('Sua mensagem foi <span>enviada com sucesso!</span>');
					response.delay(400).fadeIn(500);
				}
				else {
					form.find('form').fadeOut(300);

					page.delay(400).fadeIn(300);

					response.addClass('error-message');
					response.find('h2').html('Erro');
					response.find('h3').html('Desculpe, ocorreu <span>um erro no envio!</span>');
					response.delay(400).fadeIn(500);
				} 
			}); 
		}

		return false

	});

});