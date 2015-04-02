<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Sobre Mim • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta name="description" content="Atuo como desenvolvedor Front-End desde 2007. Especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, SEO e Responsive Design, além de frameworks como Wordpress e Opencart." />
		<meta name="author" content="Wallace Erick" />
		<meta name="google-site-verification" content="l7y8qVdO4aooy_Lx5uuGlUWIVCLZHHC4h3aI1EHpL7I" />
		<meta name="msvalidate.01" content="B1A626B27A883372CCAB1253F50ED9B0" />
		<meta name="robots" content="index, follow" />

		<meta property="fb:admins" content="100000907604118" />
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:image" content="<?php base_url(); ?>content/images/share.png" />
		<meta property="og:url" content="<?php base_url(); ?>about" />
		<meta property="og:title" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta property="og:description" content="Atuo como desenvolvedor Front-End desde 2007. Especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, SEO e Responsive Design, além de frameworks como Wordpress e Opencart." />
		<meta property="og:article:tags" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />
		<meta property="og:article:author" content="Wallace Erick" />

		<meta itemprop="image" content="<?php base_url(); ?>content/images/share.png" />
		<meta itemprop="url" content="<?php base_url(); ?>about" />
		<meta itemprop="name" content="Wallace Erick | Desenvolvedor Front-End" />
		<meta itemprop="description" content="Atuo como desenvolvedor Front-End desde 2007. Especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, SEO e Responsive Design, além de frameworks como Wordpress e Opencart." />
		<meta itemprop="keywords" content="desenvolvedor, front-end, wallace, erick, freelancer, programador, interface, web, portfólio, front, end" />

		<link rel="canonical" href="<?php base_url(); ?>about" /> 
		
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php base_url(); ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php base_url(); ?>content/js/html5.js"></script>
		<![endif]--> 
		
	</head>  

	<body>
		
		<?php include('_includes/header.php'); ?>

		<section id="page" class="animated-page-head js-animated-page-head">

			<span class="page-icon js-animated-icon">
				<i class="icon icon-user"></i>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2><span class="about">Sobre</span> <span class="me">Mim</span></h2>
				<h3 class="single-line js-animated-words">
					<div>Habilidades</div>
					<div>Tecnologias</div>
					<div>Serviços</div>
				</h3>
			</span>

			<span class="animated-image animate-vertical">
				<span class="overlay"></span>
				<img src="<?php base_url(); ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

			<span class="mouse">
				<span class="scroll"></span>
			</span>

			<span class="diagonal"></span>

		</section>

		<section id="about" class="animated-content js-animated-content">
			<?php if (!$detect->isMobile()) { ?>
				<i class="icon icon-profile"></i>
			<?php } ?>
			<p>Atualmente moro em Caieiras/SP. Atuo como desenvolvedor Front-End desde 2007.</p>
			<p>Especialista em HTML5 e CSS3, com sólidos conhecimentos em Javascript/jQuery, <br />SEO e Responsive Design, além de frameworks como Wordpress e Opencart.</p>
			<p>Tecnologias como Sass e Grunt são de uso obrigatório em meus projetos.</p>
			<p>Faça o <a href="<?php base_url(); ?>content/download/curriculo.pdf" target="_blank" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Curriculum Vitae'});">download do meu currículo</a> para outras informações relevantes sobre mim.</p>
		</section>

		<section class="services js-services-section animated-content js-animated-content">
			<h3>Serviços</h3>
			<h4>O que posso fazer pra te ajudar</h4>

			<ul>
				<li>
					<i class="icon icon-responsive"></i>
					<h5>Design <span>Resposivo</span></h5>
				</li>
				<li>
					<i class="icon icon-sites"></i>
					<h5>Sites <span>Institucionais</span></h5>
				</li>
				<li>
					<i class="icon icon-mobile"></i>
					<h5>Projetos <span>Mobile</span></h5>
				</li>
				<li>
					<i class="icon icon-cms"></i>
					<h5>Sistemas <span>Gerenciáveis</span></h5>
				</li>
				<li>
					<i class="icon icon-e-commerce"></i>
					<h5>Lojas <span>Virtuais</span></h5> 
				</li>
			</ul>
		</section>

		<section class="skills js-skills-section animated-content js-animated-content">
			<h3>Habilidades</h3>
			<h4>Comprometimento e qualidade</h4>

			<ul>
				<li>
					<i class="icon icon-html"></i>
					<h5>HTML/<span>HTML5</span></h5>
				</li>
				<li>
					<i class="icon icon-css"></i>
					<h5>CSS/<span>CSS3</span></h5>
				</li>
				<li>
					<i class="icon icon-js"></i>
					<h5>jQuery/<span>Javascript</span></h5>
				</li>
				<li>
					<i class="icon icon-sass"></i>
					<h5>Stylus/<span>Sass</span></h5>
				</li>
				<li>
					<i class="icon icon-grunt"></i>
					<h5>Gulp/<span>Grunt</span></h5>
				</li>
				<li>
					<i class="icon icon-opencart-and-wordpress"></i>
					<h5>Opencart/<span>Wordpress</span></h5>
				</li>
			</ul>
		</section>

		<?php include('_includes/like.php'); ?>

		<?php include('_includes/footer.php'); ?>

	</body>
	</html>