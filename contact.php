<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Contato • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta name="description" content="Entre em contato comigo, sou desenvolvedor Front-End desde 2007, especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, SEO e Responsive Design, além de frameworks como Wordpress e Opencart." />
		<meta name="author" content="Wallace Erick" />
		<meta name="google-site-verification" content="l7y8qVdO4aooy_Lx5uuGlUWIVCLZHHC4h3aI1EHpL7I" />
		<meta name="msvalidate.01" content="B1A626B27A883372CCAB1253F50ED9B0" />
		<meta name="robots" content="index, follow" />

		<meta property="fb:admins" content="100000907604118" />
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:image" content="<?php base_url(); ?>content/images/share.png" />
		<meta property="og:url" content="<?php base_url(); ?>contact" />
		<meta property="og:title" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta property="og:description" content="Entre em contato comigo, sou desenvolvedor Front-End desde 2007, especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, SEO e Responsive Design, além de frameworks como Wordpress e Opencart." />
		<meta property="og:article:tags" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta property="og:article:author" content="Wallace Erick" />

		<meta itemprop="image" content="<?php base_url(); ?>content/images/share.png" />
		<meta itemprop="url" content="<?php base_url(); ?>contact" />
		<meta itemprop="name" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta itemprop="description" content="Entre em contato comigo, sou desenvolvedor Front-End desde 2007, especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, SEO e Responsive Design, além de frameworks como Wordpress e Opencart." />
		<meta itemprop="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />

		<link rel="canonical" href="<?php base_url(); ?>contact" />
		
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php base_url(); ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php base_url(); ?>content/js/html5.js"></script>
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
					<h3 class="js-animated-words">
						<div>Posso <span>te ajudar?</span></div>
						<div>Precisa de <span>um orçamento?</span></div>
						<div>Procura alguém <span>comprometido?</span></div>
					</h3>
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
							<input class="fs-anim-lower js-phone-mask" id="phone" name="phone" type="text" autocomplete="off" required />
						</li>
						<li class="fs-message-box">
							<label class="fs-field-label fs-anim-upper" for="message">O que está precisando?</label>
							<textarea class="fs-anim-lower" id="message" name="message"></textarea>
						</li>
					</ol>
					<button id="submit-form" class="button fs-submit" type="submit" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Send Form'});">
						<span>Enviar</span>
						<i class="icon icon-arrow-right"></i>
					</button>
				</form>

			</div> <!-- /fs-form-wrap -->

			<span class="animated-image animate-vertical animate-contact">
				<span class="overlay"></span>
				<img src="<?php base_url(); ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

		</section>

		<?php include('_includes/scripts.php') ?>

	</body>
	</html>