<?php
	if(file_exists('projetos/' . $_GET['projeto'])){
		// Pega os dados do arquivo e imprime na tela!
		$content = file_get_contents('projetos/' . $_GET['projeto']);
		
		echo $content;
	}
	else {
		echo 'Not found';	
	}
?>