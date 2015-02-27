<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Nada Encontrado • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

 		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
	    <meta name="keywords" content="" />
	    <meta name="revisit" content="3 days" />
	    <meta name="robots" content="index, follow" />
	    <meta name="url" content="" />
	    <meta name="copyright" content="" />
	    <meta name="author" content="" />

	    <meta property="og:image" content="<?php echo $base_url ?>content/images/share.png" />
	    <meta property="og:title" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:description" content="" />
 
	    <meta itemprop="image" content="<?php echo $base_url ?>content/images/share.png" />
	    <meta itemprop="name" content="" />
	    <meta itemprop="url" content="" />

		<link rel="canonical" href="<?php echo $base_url ?>not-found" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php echo $base_url ?>content/js/html5.js"></script>
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

			<a href="<?php echo $base_url ?>" class="button">
				<span>Página Inicial</span>
				<i class="icon icon-arrow-right"></i>
			</a> 

			<span class="animated-image animate-scale">
				<span class="overlay"></span>
				<img src="<?php echo $base_url ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

		</section>

		<?php include('_includes/scripts.php') ?>

	</body>
	</html>