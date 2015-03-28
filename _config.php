<?php 

/* 
*****************************************************************
Configuração da URL Base
*****************************************************************
*/

# Produção
#$base_url = "http://www.wallaceerick.com.br/";

# Desenvolvimento
// $base_url = "http://localhost/~wallace/portfolio/";

function base_url(){
	// echo 'http://www.wallaceerick.com.br/';
	echo 'http://localhost/~wallace/portfolio/';
}


/* 
*****************************************************************
Seletor de Linguagens
*****************************************************************
*/

# Pega a sessão da página para descer ao conteúdo correto
$section = basename($_GET['section']);

# Pega URL para ativar itens do menu.
$url = basename($_SERVER['PHP_SELF']);

# Muda a linguagem de acordo com o parâmetro passado na URL
$parameter = basename($_GET['language']);

# Muda a linguagem de acordo com a linguagem do navegador
$language  = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

# Verifica se a URL contém os parâmetros, caso tenha carrega o respectivo arquivo.
if($parameter == 'pt' ){
    //require_once('_languages/portuguese.php');
}
# Se não tiver parâmetro na URL, busca a linguagem do navegador.
else {
    if($language == 'pt'){
        //require_once('_languages/portuguese.php');
    }
    # Se não tiver nenhum dos dois, carrega a linguagem padrão.
    else {
    	//require_once('_languages/english.php');
	}
}

?>
