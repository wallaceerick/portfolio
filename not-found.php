<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Erro 404 • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta name="description" content="Desenvolvedor Front-End, especialista em CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e viciado em código, esse é Wallace Erick." />
		<meta name="author" content="Wallace Erick" />
		<meta name="google-site-verification" content="l7y8qVdO4aooy_Lx5uuGlUWIVCLZHHC4h3aI1EHpL7I" />
		<meta name="msvalidate.01" content="B1A626B27A883372CCAB1253F50ED9B0" />
		<meta name="robots" content="index, follow" />

		<meta property="fb:admins" content="100000907604118" />
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:image" content="<?php base_url(); ?>content/images/share.png" />
		<meta property="og:url" content="<?php base_url(); ?>not-found" />
		<meta property="og:title" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta property="og:description" content="Desenvolvedor Front-End, especialista em CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e viciado em código, esse é Wallace Erick." />
		<meta property="og:article:tags" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta property="og:article:author" content="Wallace Erick" />

		<meta itemprop="image" content="<?php base_url(); ?>content/images/share.png" />
		<meta itemprop="url" content="<?php base_url(); ?>not-found" />
		<meta itemprop="name" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta itemprop="description" content="Desenvolvedor Front-End, especialista em CSS/CSS3, HTML/HTML5, jQuery/Javascript, Sass/Grunt e viciado em código, esse é Wallace Erick." />
		<meta itemprop="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />

		<link rel="canonical" href="<?php base_url(); ?>not-found" />
		
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php base_url(); ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php base_url(); ?>content/js/html5.js"></script>
		<![endif]--> 
		
	</head> 

	<body class="fullscreen">
		
		<?php include('_includes/header.php'); ?>

		<section id="home">
			
			<span class="logo-icon">
				<i></i>
				<h1 class="author">Wallace <span>Erick</span></h1>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2><span class="step-1">Erro</span> <span class="step-3">404</span></h2>
				<h3>Página não encontrada!</h3>
			</span>

			<a href="<?php base_url(); ?>" class="button" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Not Found: Home'});">
				<span>Página Inicial</span>
				<i class="icon icon-arrow-right"></i>
			</a> 

			<span class="animated-image animate-scale">
				<span class="overlay"></span>
				<img src="<?php base_url(); ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

		</section>

		<?php include('_includes/scripts.php') ?>

	</body>
	</html>