<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta name="description" content="Desenvolvedor Front-End, especialista em CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e viciado em código, esse é Wallace Erick." />
		<meta name="author" content="Wallace Erick" />
		<meta name="google-site-verification" content="l7y8qVdO4aooy_Lx5uuGlUWIVCLZHHC4h3aI1EHpL7I" />
		<meta name="msvalidate.01" content="B1A626B27A883372CCAB1253F50ED9B0" />
		<meta name="robots" content="index, follow" />

		<meta property="fb:admins" content="100000907604118" />
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:image" content="<?php echo $base_url ?>content/images/share.png" />
		<meta property="og:url" content="<?php echo $base_url ?>" />
		<meta property="og:title" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta property="og:description" content="Desenvolvedor Front-End, especialista em CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e viciado em código, esse é Wallace Erick." />
		<meta property="og:article:tags" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta property="og:article:author" content="Wallace Erick" />

		<meta itemprop="image" content="<?php echo $base_url ?>content/images/share.png" />
		<meta itemprop="url" content="<?php echo $base_url ?>" />
		<meta itemprop="name" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta itemprop="description" content="Desenvolvedor Front-End, especialista em CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e viciado em código, esse é Wallace Erick." />
		<meta itemprop="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />

		<link rel="canonical" href="<?php echo $base_url ?>" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php echo $base_url ?>content/js/html5.js"></script>
		<![endif]--> 
		
	</head>  

	<body class="fullscreen">
		
		<?php include('_includes/header.php'); ?>

		<section id="home">
			
			<span class="logo-icon animated-content js-animated-content">
				<i></i>
				<h1 class="author">Wallace <span>Erick</span></h1>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2><span class="step-1">Fro</span><span class="step-2">nt</span> <span class="step-3">End</span></h2>
				<h3 class="js-animated-words">
					<div>Desenvolvedor</div>
					<div>Programador</div>
					<div>Entusiasta</div>
				</h3>
			</span>

			<a href="<?php echo $base_url ?>works" class="button animated-content js-animated-content">
				<span>Meus Projetos</span>
				<i class="icon icon-arrow-right"></i>
			</a> 

			<span class="animated-image animate-scale">
				<span class="overlay"></span>
				<img src="<?php echo $base_url ?>content/images/landscape.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

		</section>

		<?php include('_includes/scripts.php') ?>

	</body>
	</html>