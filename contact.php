<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Contato • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

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

		<link rel="canonical" href="<?php echo $base_url ?>contact" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php echo $base_url ?>content/js/html5.js"></script>
		<![endif]--> 
		
	</head>  

	<body class="fullscreen">
		
		<?php include('_includes/header.php'); ?>

		<section id="contact">

			<div id="page">

				<span class="page-icon js-animated-icon">
					<i class="icon icon-mail"></i>
				</span>
					
				<span class="animated-text js-animated-text form-response js-response-form">
					<h2>Contato</h2>
					<h3>Posso <span>te ajudar?</span></h3>
				</span>

			</div>

			<div id="fs-form-wrap" class="fs-form-wrap animated-form js-animated-form">

				<form id="contact-form" method="post" class="fs-form fs-form-full js-contact-form">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="name">Qual seu nome?</label>
							<input class="fs-anim-lower" id="name" name="name" type="text" autocomplete="off" required />
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="email">E seu e-mail?</label>
							<input class="fs-anim-lower" id="email" name="email" type="text" autocomplete="off" required />
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="phone">Telefone?</label>
							<input class="fs-anim-lower" id="phone" name="phone" type="text" autocomplete="off" required />
						</li>
						<li class="fs-message-box">
							<label class="fs-field-label fs-anim-upper" for="message">O que está precisando?</label>
							<textarea class="fs-anim-lower" id="message" name="message"></textarea>
						</li>
					</ol>
					<button id="submit-form" class="button fs-submit" type="submit">
						<span>Enviar</span>
						<i class="icon icon-arrow-right"></i>
					</button>
				</form>

			</div> <!-- /fs-form-wrap -->

			<span class="animated-image animate-vertical animate-contact">
				<span class="overlay"></span>
				<img src="<?php echo $base_url ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

		</section>

		<?php include('_includes/scripts.php') ?>

	</body>
	</html>