<?php require_once('_config.php'); ?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Onda • Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

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
		
		<?php include('_includes/header.php'); ?>

		<section id="page">

			<span class="page-icon js-animated-icon">
				<i class="icon icon-onda"></i>
			</span>
				
			<span class="animated-text js-animated-text">
				<h2>Onda</h2>
				<h3 class="single">Wordpress</h3>
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

		<article class="project-details">

		    <div class="row wrapper">
		    	<span class="column column-third">
		    		<h6 class="title">Detalhes:</h6>
		    		<ul>
		    			<li><strong>Agência:</strong> DigiPronto</li>
		    			<li><strong>Data:</strong> Março de 2014</li>
		    			<li><strong>Duração:</strong> 2 Semanas</li>
		    			<li><strong>Ferramentas:</strong> Photoshop e Sublime Text </li>
		    			<li><strong>Categoria:</strong> Sistemas</li>
		    			<li><strong>Status:</strong> Online <span class="online">*</span></li>
		    		</ul>
		    	</span>
		    	<span class="column column-third">
		    		<h6 class="title">Tecnologias:</h6>
		    		<ul class="check-list">
		    			<li>CSS3</li>
		    			<li>HTML5</li>
		    			<li>JS</li>
		    			<li>SASS</li>
		    			<li>Responsive Design</li>
		    			<li>PHP</li>
		    		</ul>
		    	</span>
		    	<span class="column column-third">
		    		<h6 class="title">O que eu fiz?</h6>
		    		<p>O desenvolvimento completo de toda a interface do projeto, homologação e integração com o Back-End.</p>
		            <a href="http://sadia.com.br" target="_blank" class="external">
		                <i class="icon icon-link"></i>
		                <span>Acessar</span>
		            </a>
		    	</span>
		    </div> <!-- /row -->

		    <div class="projects-carousel">
		        <a href="#" class="prev-button js-project-prev-button"></a>
		        <a href="#" class="next-button js-project-next-button"></a>

		        <div class="owl-carousel js-projects-carousel">
		            <img src="<?php echo $base_url ?>content/images/portfolio/toyota/1.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/toyota/2.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/toyota/3.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/toyota/4.jpg" alt="" />
		            <img src="<?php echo $base_url ?>content/images/portfolio/toyota/5.jpg" alt="" />
		        </div> <!-- /owl-carousel -->
		    </div>

		</article>

		<section class="quick-projects">
			<div class="project project-left">
				<a href="<?php echo $base_url ?>biopet">
					<div class="title">
						<h3>Biopet</h3>
					</div>
					<span></span>
					<img src="<?php echo $base_url ?>content/images/portfolio/biopet/preview.jpg" alt="Biopet" />
				</a>
			</div>
			<div class="project project-right">
				<a href="<?php echo $base_url ?>sadia">
					<div class="title">
						<h3>Sadia</h3>
					</div>
					<span></span>
					<img src="<?php echo $base_url ?>content/images/portfolio/sadia/preview.jpg" alt="Sadia" />
				</a>
			</div>
		</section>

		<br class="clear" />

		<?php include('_includes/footer.php'); ?>

	</body>
	</html>