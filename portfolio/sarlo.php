<?php require_once('../_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Grupo Sarlo • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

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

		<link rel="canonical" href="<?php echo $base_url ?>detail" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url ?>content/images/favicon.ico" />

	    <!--[if lt IE 9]>
			<script src="<?php echo $base_url ?>content/js/html5.js"></script>
		<![endif]--> 
		
	</head>

	<body>
		
		<?php include('../_includes/header.php'); ?>

		<section id="page" class="animated-page-head js-animated-page-head">

			<span class="page-icon js-animated-icon">
				<i class="icon icon-desktop"></i>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2>Sarlo</h2>
				<h3 class="single">Institucional</h3>
			</span>

			<span class="animated-image animate-vertical">
				<span class="overlay"></span>
				<img src="<?php echo $base_url ?>content/images/cloud.jpg" alt="Wallace Erick | Desenvolvedor Front-End &amp; Designer" />
			</span>

			<span class="mouse">
				<span class="scroll"></span>
			</span>

			<span class="diagonal">
				<a href="<?php echo $base_url ?>works" class="back">
					<span>Voltar</span>
					<i class="icon icon-keyboard-left"></i>
				</a>
			</span>

		</section>

		<article class="project-details animated-content js-animated-content">

		    <div class="row wrapper">
		    	<span class="column column-third animated-column">
		    		<h6 class="title">Detalhes:</h6>
		    		<ul>
		    			<li><strong>Agência:</strong> Imaginera</li>
		    			<li><strong>Data:</strong> Março de 2013</li>
		    			<li><strong>Duração:</strong> 3 Semanas</li>
		    			<li><strong>Ferramentas:</strong> Photoshop e Sublime Text </li>
		    			<li><strong>Categoria:</strong> Institucional</li>
		    			<li><strong>Status:</strong> Online <span class="online">*</span></li>
		    		</ul>
		    	</span>
		    	<span class="column column-third animated-column">
		    		<h6 class="title">Tecnologias:</h6>
		    		<ul class="check-list">
		    			<li>CSS</li>
		    			<li>HTML</li>
		    			<li>JS</li>
		    			<li>PHP</li>
		    		</ul>
		    	</span>
		    	<span class="column column-third animated-column">
		    		<h6 class="title">O que eu fiz?</h6>
		    		<p>O desenvolvimento da interface do projeto, recursos em javascript e funcionalidades com CSS3.</p>
		            <a href="http://gruposarlo.com.br/" target="_blank" class="external">
		                <i class="icon icon-link"></i>
		                <span>Acessar</span>
		            </a>  
		    	</span>
		    </div> <!-- /row -->

		    <div class="projects-carousel">
		        <a href="#" class="prev-button icon-big-arrow-left js-project-prev-button"></a>
		        <a href="#" class="next-button icon-big-arrow-right js-project-next-button"></a>

		        <div class="owl-carousel js-projects-carousel">
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/1.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/2.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/3.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/4.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/5.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/6.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/sarlo/7.jpg" alt="" />
		        </div> <!-- /owl-carousel -->
		    </div>

		</article>    

		<section class="quick-projects animated-content js-animated-content">
			<div class="project project-left">
				<a href="<?php echo $base_url ?>/portfolio/positivo-nuvem">
					<div class="title">
						<h3>Positivo <span>Nuvem</span></h3>
					</div>
					<span></span>
					<img src="<?php echo $base_url ?>content/images/portfolio/positivo/nuvem/preview.jpg" alt="Positivo Nuvem" />
				</a>
			</div>
			<div class="project project-right">
				<a href="<?php echo $base_url ?>/portfolio/digitaliza">
					<div class="title">
						<h3>Digitaliza</h3>
					</div>
					<span></span>
					<img src="<?php echo $base_url ?>content/images/portfolio/digitaliza/preview.jpg" alt="Digitaliza" />
				</a>
			</div>
		</section>

		<br class="clear" />

		<?php include('../_includes/footer.php'); ?>

	</body>
	</html>