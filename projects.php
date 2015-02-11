<?php
	$page = '';
	if(isset($_GET['_escaped_fragment_']) || isset($_GET['projeto']))
	{
		$page = isset($_GET['_escaped_fragment_']) ? $_GET['_escaped_fragment_'] : $_GET['projeto'];
		if(file_exists('projetos/' . $page))
		{
			$content = file_get_contents('projetos/' . $page);
			$page = $content;
		}
		else
		{
			$page = 'Página não encontrada!';	
		}
	}
?><!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Projetos • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

 		<meta name="viewport" content="width=device-width" />
		<meta name="description" content="" />
	    <meta name="keywords" content="" />
	    <meta name="revisit" content="3 days" />
	    <meta name="robots" content="index, follow" />
	    <meta name="url" content="" />
	    <meta name="copyright" content="" />
	    <meta name="author" content="" />
		<meta name="fragment" content="!" />

	    <meta property="og:image" content="content/images/share.png" />
	    <meta property="og:title" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:description" content="" />
 
	    <meta itemprop="image" content="content/images/share.png" />
	    <meta itemprop="name" content="" />
	    <meta itemprop="url" content="" />

		<link rel="canonical" href="projects" />
		
		<link rel="stylesheet" type="text/css" href="assets/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
		
	</head>

	<body>
		
		<?php include('_includes/header.php'); ?>

		<section id="page">

			<span class="page-icon js-animated-icon">
				<i class="icon icon-bulb"></i>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2 class="single-word">Projetos</h2>
				<h3 class="double-line">Corpo <span>&amp;</span> Mente</h3>
			</span>

			<span class="animated-image animate-vertical">
				<span class="overlay"></span>
				<img src="assets/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

			<span class="mouse">
				<span class="scroll"></span>
			</span>

			<span class="diagonal"></span>

		</section>

		<section id="projects">
			<div class="loading">
				<!-- <img src="images/loading.gif" height="25" width="25" /> -->
			</div>

			<?php echo $page; ?>
			<div id="result"></div>

			<ol class="js-projects js-hashchange">

				<li class="toyota">
					<span class="number">01</span>
					<span class="info">
						<h4 class="title">Toyota</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="?projeto=toyota.html" name="#!toyota.html" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="assets/images/portfolio/toyota/thumb.jpg" alt="">
					</span> <!-- /image -->
				</li>

				<li class="sadia">
					<span class="number">02</span>
					<span class="info">
						<h4 class="title">Sadia</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="?projeto=sadia.html" name="#!sadia.html" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image init-animation">
						<span></span>
						<img src="assets/images/portfolio/sadia/thumb.jpg" alt="">
					</span> <!-- /image -->
				</li>

				<li>
					<span class="number">03</span>
					<span class="info">
						<h4 class="title">Natura</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="#" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="assets/images/portfolio/natura/thumb.jpg" alt="">
					</span> <!-- /image -->
				</li>

				<li>
					<span class="number">04</span>
					<span class="info">
						<h4 class="title">Biopet</h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="#" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="assets/images/portfolio/biopet/thumb.jpg" alt="">
					</span> <!-- /image -->
				</li>
				
				<li>
					<span class="number">05</span>
					<span class="info">
						<h4 class="title">Onda</h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="#" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="assets/images/portfolio/onda/thumb.jpg" alt="">
					</span> <!-- /image -->
				</li>
			</ol>

			<a href="#" class="load-more">
				<i class="icon icon-plus"></i>
				<span>Carregar Mais</span>
			</a>
		</section>

		<?php include('_includes/like.php'); ?>

		<?php include('_includes/footer.php'); ?>

	</body>
	</html>