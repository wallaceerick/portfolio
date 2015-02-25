$(function(){
	
	// Define as Variáveis
	var name,
		email,
		phone,
		message;

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
					alert(' email enviado');
				}
				else {
					alert('erro');
				} 
			}); 
		}

	});

});