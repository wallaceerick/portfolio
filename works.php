<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Portfólio • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta name="description" content="Esses são alguns dos projetos que desenvolvi trabalhando como Front-End desde 2007, em sua maioria utilizei CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e alguns frameworks." />
		<meta name="author" content="Wallace Erick" />
		<meta name="google-site-verification" content="l7y8qVdO4aooy_Lx5uuGlUWIVCLZHHC4h3aI1EHpL7I" />
		<meta name="msvalidate.01" content="B1A626B27A883372CCAB1253F50ED9B0" />
		<meta name="robots" content="index, follow" />

		<meta property="fb:admins" content="100000907604118" />
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:image" content="<?php echo $base_url ?>content/images/share.png" />
		<meta property="og:url" content="<?php echo $base_url ?>works" />
		<meta property="og:title" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta property="og:description" content="Esses são alguns dos projetos que desenvolvi trabalhando como Front-End desde 2007, em sua maioria utilizei CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e alguns frameworks." />
		<meta property="og:article:tags" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta property="og:article:author" content="Wallace Erick" /> 

		<meta itemprop="image" content="<?php echo $base_url ?>content/images/share.png" />
		<meta itemprop="url" content="<?php echo $base_url ?>works" />
		<meta itemprop="name" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta itemprop="description" content="Esses são alguns dos projetos que desenvolvi trabalhando como Front-End desde 2007, em sua maioria utilizei CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e alguns frameworks." />
		<meta itemprop="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />

		<link rel="canonical" href="<?php echo $base_url ?>works" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php echo $base_url ?>content/js/html5.js"></script>
		<![endif]--> 
		
	</head>

	<body>
		
		<?php include('_includes/header.php'); ?>

		<section id="page" class="animated-page-head js-animated-page-head">

			<span class="page-icon js-animated-icon">
				<i class="icon icon-bulb"></i>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2 class="single-word">Projetos</h2>
				<h3 class="double-line js-animated-words">
					<div>Corpo <span>&amp;</span> Mente</div>
					<div>Criação <span>&amp;</span> Desenvolvimento</div>
					<div>Design <span>&amp;</span> Front-End</div>
				</h3>
			</span>

			<span class="animated-image animate-vertical">
				<span class="overlay"></span>
				<img src="<?php echo $base_url ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>
			<span class="diagonal"></span>

			<!--
			<span class="mouse">
				<span class="scroll"></span>
			</span> 
			-->

		</section>

		<section id="projects" class="animated-content js-animated-content js-projects-parent"> 

			<ul class="project-navigation animated-content js-navigation js-animated-content">
				<li class="filter active" data-filter="all">Tudo</li>
				<li class="filter" data-filter=".institucional">Institucional</li>
				<li class="filter" data-filter=".sistemas">Sistemas</li>
				<li class="filter" data-filter=".wordpress">Wordpress</li>
				<li class="filter" data-filter=".loja-virtual">Loja Virtual</li>
				<li class="filter" data-filter=".responsivo">Responsivo</li>
			</ul>

			<ol id="portfolio" class="js-projects animated-content js-animated-content">

				<li class="mix sadia sistemas responsivo" data-value="1">
					<span class="number">01</span>
					<span class="info">
						<h4 class="title">Sadia <span>jogapramim</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/sadia" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image init-animation">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/sadia/preview.jpg" alt="Sadia">
					</span> <!-- /image -->
				</li>

				<li class="mix navegatium institucional responsivo" data-value="2">
					<span class="number">02</span>
					<span class="info">
						<h4 class="title">Navegatium</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/navegatium" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/navegatium/preview.jpg" alt="Navegatium">
					</span> <!-- /image -->
				</li>

				<li class="mix natura sistemas responsivo" data-value="3">
					<span class="number">03</span>
					<span class="info">
						<h4 class="title">Natura <span>sounovasescolhas</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/natura" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/natura/preview.jpg" alt="Natura">
					</span> <!-- /image -->
				</li>

				<li class="mix fashion-walk loja-virtual responsivo" data-value="4">
					<span class="number">04</span>
					<span class="info">
						<h4 class="title">Fashion Walk</h4>
						<h5 class="category">Loja Virtual</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/fashion-walk" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/fashion-walk/preview.jpg" alt="Fashion Walk">
					</span> <!-- /image -->
				</li>
				
				<li class="mix onda wordpress" data-value="5">
					<span class="number">05</span>
					<span class="info">
						<h4 class="title">Onda</h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/onda" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/onda/preview.jpg" alt="Grupo Onda">
					</span> <!-- /image -->
				</li>

				<li class="mix toyota sistemas" data-value="6">
					<span class="number">06</span>
					<span class="info">
						<h4 class="title">Toyota <span>Tour</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/toyota" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/toyota/preview.jpg" alt="Toyota Tour">
					</span> <!-- /image -->
				</li>

				<li class="mix gendai sistemas" data-value="7">
					<span class="number">07</span>
					<span class="info">
						<h4 class="title">Gendai</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/gendai" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/gendai/preview.jpg" alt="Gendai">
					</span> <!-- /image -->
				</li>

				<li class="mix paganelli-shop loja-virtual responsivo" data-value="8">
					<span class="number">08</span>
					<span class="info">
						<h4 class="title">Paganelli Shop</h4>
						<h5 class="category">Loja Virtual</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/paganelli-shop" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/paganelli-shop/preview.jpg" alt="Paganelli Shop">
					</span> <!-- /image -->
				</li>

				<li class="mix home-refill sistemas responsivo" data-value="9">
					<span class="number">09</span>
					<span class="info">
						<h4 class="title">Home Refill</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/home-refill" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/home-refill/preview.jpg" alt="Home Refill">
					</span> <!-- /image -->
				</li>

				<li class="mix biopet wordpress" data-value="10">
					<span class="number">10</span>
					<span class="info">
						<h4 class="title">Biopet</h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/biopet" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/biopet/preview.jpg" alt="Biopet">
					</span> <!-- /image -->
				</li>

				<li class="mix reconhece institucional" data-value="11">
					<span class="number">11</span>
					<span class="info">
						<h4 class="title">Reconhece</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/reconhece" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image init-animation">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/reconhece/preview.jpg" alt="Tim">
					</span> <!-- /image -->
				</li>

				<li class="mix tam-clube-do-agente sistemas" data-value="12">
					<span class="number">12</span>
					<span class="info">
						<h4 class="title">Tam <span>Clube do Agente</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/tam" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/tam/preview.jpg" alt="Tam">
					</span> <!-- /image -->
				</li>

				<li class="mix positivo-english-solution sistemas responsivo" data-value="13">
					<span class="number">13</span>
					<span class="info">
						<h4 class="title">Positivo <span>English Solution</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/positivo-english-solution" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/positivo/english-solution/preview.jpg" alt="Positivo English Solution">
					</span> <!-- /image -->
				</li>

				<li class="mix integra-medical institucional" data-value="14">
					<span class="number">14</span>
					<span class="info">
						<h4 class="title">Íntegra Medical</h4>
						<h5 class="category">institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/integra-medical" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/integra-medical/preview.jpg" alt="Íntegra Medical">
					</span> <!-- /image -->
				</li>
				
				<li class="mix smartia institucional" data-value="15">
					<span class="number">15</span>
					<span class="info">
						<h4 class="title">Smartia</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/smartia" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/smartia/preview.jpg" alt="Smartia">
					</span> <!-- /image -->
				</li>

				<li class="mix galvao wordpress" data-value="16">
					<span class="number">16</span>
					<span class="info">
						<h4 class="title">Galvão <span>Engenharia</span></h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/galvao" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image init-animation">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/galvao/preview.jpg" alt="Galvão Engenharia">
					</span> <!-- /image -->
				</li>

				<li class="mix mercado-arte sistemas" data-value="17">
					<span class="number">17</span>
					<span class="info">
						<h4 class="title">Mercado Arte</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/mercado-arte" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/mercado-arte/preview.jpg" alt="Mercado Arte">
					</span> <!-- /image -->
				</li>

				<li class="mix oi sistemas" data-value="18">
					<span class="number">18</span>
					<span class="info">
						<h4 class="title">Oi <span>Vida Saudável</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/oi" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/oi/preview.jpg" alt="Oi">
					</span> <!-- /image -->
				</li>

				<li class="mix colson institucional" data-value="19">
					<span class="number">19</span>
					<span class="info">
						<h4 class="title">Colson</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/colson" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/colson/preview.jpg" alt="Biopet">
					</span> <!-- /image -->
				</li>
				
				<li class="mix cubos-lagos sistemas" data-value="20">
					<span class="number">20</span>
					<span class="info">
						<h4 class="title">Cubos <span>Lagos</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/cubos-lagos" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/cubos/lagos/preview.jpg" alt="Cubos Lagos">
					</span> <!-- /image -->
				</li>

				<li class="mix cubos-revestimentos institucional" data-value="21">
					<span class="number">21</span>
					<span class="info">
						<h4 class="title">Cubos <span>Revestimentos</span></h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/cubos-revestimentos" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/cubos/revestimentos/preview.jpg" alt="Cubos Lagos">
					</span> <!-- /image -->
				</li>

				<li class="mix cubos-monte-seu-lago sistemas responsivo" data-value="22">
					<span class="number">22</span>
					<span class="info">
						<h4 class="title">Cubos <span>Monte Seu Lago</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/cubos-monte-seu-lago" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/cubos/monte-seu-lago/preview.jpg" alt="Cubos Monte Seu Lago">
					</span> <!-- /image -->
				</li>

				<li class="mix cubos-meu-primeiro-lago institucional" data-value="23">
					<span class="number">23</span>
					<span class="info">
						<h4 class="title">Cubos <span>Meu Primeiro Lago</span></h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/cubos-meu-primeiro-lago" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/cubos/meu-primeiro-lago/preview.jpg" alt="Cubos Meu Primeiro Lago">
					</span> <!-- /image -->
				</li>

				<li class="mix positivo-nuvem sistemas" data-value="24">
					<span class="number">24</span>
					<span class="info">
						<h4 class="title">Positivo <span>Nuvem</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/positivo-nuvem" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/positivo/nuvem/preview.jpg" alt="Nuvem Positivo">
					</span> <!-- /image -->
				</li>

				<li class="mix sarlo institucional" data-value="25">
					<span class="number">25</span>
					<span class="info">
						<h4 class="title">Sarlo</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/sarlo" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/sarlo/preview.jpg" alt="Sarlo">
					</span> <!-- /image -->
				</li>

				<li class="mix digitaliza institucional" data-value="26">
					<span class="number">26</span>
					<span class="info">
						<h4 class="title">Digitaliza</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/digitaliza" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/digitaliza/preview.jpg" alt="Digitaliza">
					</span> <!-- /image -->
				</li>

				<li class="mix alpex sistemas" data-value="27">
					<span class="number">27</span>
					<span class="info">
						<h4 class="title">Alpex</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/alpex" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/alpex/preview.jpg" alt="Alpex">
					</span> <!-- /image -->
				</li>

				<li class="mix lorpen institucional" data-value="28">
					<span class="number">28</span>
					<span class="info">
						<h4 class="title">Lorpen</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/lorpen" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/lorpen/preview.jpg" alt="Lorpen">
					</span> <!-- /image -->
				</li>

				<li class="mix lechen loja-virtual" data-value="29">
					<span class="number">29</span>
					<span class="info">
						<h4 class="title">Lechen</h4>
						<h5 class="category">Loja Virtual</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/lechen" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/lechen/preview.jpg" alt="Lechen">
					</span> <!-- /image -->
				</li>

				<li class="mix mondial wordpress" data-value="30">
					<span class="number">30</span>
					<span class="info">
						<h4 class="title">Mondial <span>Curtindo a Casa</span></h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/mondial" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/mondial/preview.jpg" alt="Mondial">
					</span> <!-- /image -->
				</li>

				<li class="mix azteq institucional" data-value="31">
					<span class="number">31</span>
					<span class="info">
						<h4 class="title">Azteq</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/azteq" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/azteq/preview.jpg" alt="Azteq">
					</span> <!-- /image -->
				</li>

				<li class="mix deuter sistemas" data-value="32">
					<span class="number">32</span>
					<span class="info">
						<h4 class="title">Deuter</h4>
						<h5 class="category">sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/deuter" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/deuter/preview.jpg" alt="Deuter">
					</span> <!-- /image -->
				</li>

				<li class="mix azul-fish wordpress" data-value="33">
					<span class="number">33</span>
					<span class="info">
						<h4 class="title">Azul Fish</h4>
						<h5 class="category">wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/azul-fish" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/azul-fish/preview.jpg" alt="Azul Fish">
					</span> <!-- /image -->
				</li>

				<li class="mix chevrolet responsive" data-value="34">
					<span class="number">34</span>
					<span class="info">
						<h4 class="title">Chevrolet <span>Aba Motors</span></h4>
						<h5 class="category">Mobile</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/chevrolet" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/chevrolet/preview.jpg" alt="Chevrolet">
					</span> <!-- /image -->
				</li>

				<li class="mix honda responsive" data-value="35">
					<span class="number">35</span>
					<span class="info">
						<h4 class="title">Honda <span>H Motors</span></h4>
						<h5 class="category">Mobile</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/honda" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/honda/preview.jpg" alt="Honda">
					</span> <!-- /image -->
				</li>

				<li class="mix 7ball institucional" data-value="36">
					<span class="number">36</span>
					<span class="info">
						<h4 class="title">7ball</span></h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>portfolio/7ball" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/7ball/preview.jpg" alt="7ball">
					</span> <!-- /image -->
				</li>
			</ol>
			
			<!-- 
			<a href="#" class="load-button js-btn-more">
				<i class="icon icon-plus"></i>
				<span>Carregar Mais</span>
			</a> 
			<a href="#" class="load-button js-btn-less">
				<i class="icon icon-minus"></i>
				<span>Carregar Mais</span>
			</a>
			-->
			
		</section>

		<?php include('_includes/like.php'); ?>

		<?php include('_includes/footer.php'); ?>

	</body>
	</html>