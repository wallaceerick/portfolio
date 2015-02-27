<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Projetos • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

 		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
	    <meta name="keywords" content="" />
	    <meta name="revisit" content="3 days" />
	    <meta name="robots" content="index, follow" />
	    <meta name="url" content="" />
	    <meta name="copyright" content="" />
	    <meta name="author" content="" />
		<meta name="fragment" content="!" />

	    <meta property="og:image" content="<?php echo $base_url ?>content/images/share.png" />
	    <meta property="og:title" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:description" content="" />
 
	    <meta itemprop="image" content="<?php echo $base_url ?>content/images/share.png" />
	    <meta itemprop="name" content="" />
	    <meta itemprop="url" content="" />

		<link rel="canonical" href="<?php echo $base_url ?>projects" />
		
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
				<h3 class="double-line">Corpo <span>&amp;</span> Mente</h3>
			</span>

			<span class="animated-image animate-vertical">
				<span class="overlay"></span>
				<img src="<?php echo $base_url ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

			<span class="mouse">
				<span class="scroll"></span>
			</span>

			<span class="diagonal"></span>

		</section>

		<section id="projects" class="animated-content js-animated-content">

			<ol class="js-projects">

				<li class="sadia">
					<span class="number">01</span>
					<span class="info">
						<h4 class="title">Sadia</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>sadia" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image init-animation">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/sadia/preview.jpg" alt="Sadia #jogapramim">
					</span> <!-- /image -->
				</li>

				<li class="toyota">
					<span class="number">02</span>
					<span class="info">
						<h4 class="title">Toyota</h4>
						<h5 class="category">Institucional</h5>
						<hr />
						<a href="<?php echo $base_url ?>toyota" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/toyota/preview.jpg" alt="Toyota Tour">
					</span> <!-- /image -->
				</li>

				<li class="natura">
					<span class="number">03</span>
					<span class="info">
						<h4 class="title">Natura</h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php echo $base_url ?>natura" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/natura/preview.jpg" alt="Natura SOU">
					</span> <!-- /image -->
				</li>

				<li class="biopet">
					<span class="number">04</span>
					<span class="info">
						<h4 class="title">Biopet</h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>biopet" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/biopet/preview.jpg" alt="Biopet">
					</span> <!-- /image -->
				</li>
				
				<li class="onda">
					<span class="number">05</span>
					<span class="info">
						<h4 class="title">Onda</h4>
						<h5 class="category">Wordpress</h5>
						<hr />
						<a href="<?php echo $base_url ?>onda" class="hidden">Detalhes</a>
					</span> <!-- /info -->
					<span class="image">
						<span></span>
						<img src="<?php echo $base_url ?>content/images/portfolio/onda/preview.jpg" alt="Grupo Onda">
					</span> <!-- /image -->
				</li>
			</ol>

			<a href="#" class="load-more js-btn-more">
				<i class="icon icon-plus"></i>
				<span>Carregar Mais</span>
			</a>
		</section>

		<?php include('_includes/like.php'); ?>

		<?php include('_includes/footer.php'); ?>

	</body>
	</html>