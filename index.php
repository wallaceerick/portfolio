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

	/*
	https://support.google.com/webmasters/answer/174992?hl=pt-BR
	http://forum.imasters.com.br/topic/530353-google-indexar-urls-com-parametro/
	http://www.todoespacoonline.com/post.php?id=2059
	*/
?>
<!DOCTYPE HTML>
<html lang="pt-BR">

	<head prefix="og: http://ogp.me/ns#">
		<meta charset="UTF-8">

		<title>Wallace Erick | Desenvolvedor Front-End &amp; Designer</title>

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

		<link rel="canonical" href="index" />
		
		<link rel="stylesheet" type="text/css" href="assets/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="content/images/favicon.ico" />
		
	</head>

	<body class="blue">
		
		<?php include('_includes/header.php'); ?>

		<section id="home" class="page">
			<div class="content page">
				<span class="logo-icon">
					<i></i>
					<h2>Wallace <span>Erick</span></h2>
				</span>
				<h3>Desenvolvedor Front-End</h3>
				<p>Pensando criativamente. <span class="highlight">Codando continuamente.</span></p>
			</div>
			<span class="overlay">
				<span class="top"></span>
				<span class="bottom"></span>
			</span>
			<a href="#" class="scroll-down js-scroll">
				<i class="icon icon-arrow icon-down-medium-arrow"></i>
				<span>Sobre Mim</span>
			</a>
		</section>

		<section id="about" class="page">
			<h2 class="page-title">
				<i class="icon icon-user"></i>
				<span>Sobre Mim</span>
			</h2>
		</section>

		<section id="portfolio" class="page">
			<ul class="js-hashchange">
				<li><a href="?projeto=sadia.html" name="#!sadia.html">Sadia</a></li>
				<li><a href="?projeto=natura.html" name="#!natura.html">Natura</a></li>
				<li><a href="?projeto=biopet.html" name="#!biopet.html">Biopet</a></li>
				<li><a href="?projeto=toyota.html" name="#!toyota.html">Toyota</a></li>
				<li><a href="?projeto=gendai.html" name="#!gendai.html">Gendai</a></li>
			</ul>
		</section>

			<div class="loading">
				<img src="images/loading.gif" height="25" width="25" />
			</div>
	
		<span class="project-overlay"></span>
		<section id="project">
			
			<header class="project-header">
				<span class="square flipper">
					<span class="square-inner flipper-inner">
						<div class="front">
							<span class="face-inner">
								<h2>Toyota</h2>
								<h3>Visita à Fábrica</h4>
								<hr />
							</span>
						</div>
						<div class="back toyota">
							<span class="face-inner">
								<img src="assets/images/portfolio/toyota/logo.png" alt="" />
							</span>
						</div>
					</span>
				</span>
				<span class="date mounth">
					<span>Mês</span>
					<strong>Dez</strong>
				</span>
				<span class="date year">
					<span>Ano</span>
					<strong>14</strong>
				</span>

				<a href="#details" class="scroll-down">
					<i class="icon icon-arrow icon-down-medium-arrow"></i>
					<span>Detalhes</span>
				</a>
				<a href="#close" class="close-page">
					<i class="icon icon-close"></i>
					<span>Fechar</span>
				</a>
			</header> <!-- /project-header -->

			<article class="project-content wrapper">
				<h3>Sobre</h3>
				<p>A campanha #jogapramim da Sadia, teve início em 27 de março de 2014 e término em 02 de julho de 2014 e será realizada em todo o território nacional. Essa campanha permite aos participantes ganharem prêmios como uma camiseta da seleção até R$ 1 milhão de reais.</p>
				<a href="#" class="colored-link">http://promo.sadia.com.br/</a>

				<br class="clear" />

				<span class="column column-half">
					<h4>Detalhes</h4>
					<ul>
						<li><strong>Agência:</strong> DigiPronto</li>
						<li><strong>Data:</strong> Março de 2014</li>
						<li><strong>Duração:</strong> 2 Semanas</li>
						<li><strong>Ferramentas:</strong> Photoshop e Sublimet Text 2</li>
						<li><strong>Categoria:</strong> Sistemas</li>
						<li><strong>Status:</strong> Online *</li>
					</ul>
				</span>

				<span class="column column-half">
					<h4>Tecnologias</h4>
					<ul class="bullet">
						<li>CSS3</li>
						<li>HTML5</li>
						<li>JS</li>
						<li>Sass</li>
						<li>Responsive Design</li>
						<li>PHP</li>
					</ul>
				</span>

				<h3>Layouts</h3>
			</article>

			<article class="project-slides">
				<ul class="small-arrows">
					<li class="previous-image">
						<i class="icon icon-left-medium-arrow"></i>
						<span>Anterior</span>
					</li>
					<li class="next-image">
						<i class="icon icon-right-medium-arrow"></i>
						<span>Próximo</span>
					</li>
				</ul>

				<span class="slider-inner">
					<span class="slider-button previous-image">
						<i class="icon icon-left-small-arrow"></i>
						<span>Anterior</span>
					</span>
					<span class="slider-button next-image">
						<i class="icon icon-right-small-arrow"></i>
						<span>Próximo</span>
					</span>
					<div class="owl-carousel js-projects-carousel">
						<img src="assets/images/portfolio/toyota/1.jpg" alt="" />
						<img src="assets/images/portfolio/toyota/1.jpg" width="1900" height="2000" alt="" />
						<img src="assets/images/portfolio/toyota/1.jpg" alt="" />
						<img src="assets/images/portfolio/toyota/1.jpg" alt="" />
						<img src="assets/images/portfolio/toyota/1.jpg" alt="" />
						<img src="assets/images/portfolio/toyota/1.jpg" alt="" />
						<img src="assets/images/portfolio/toyota/1.jpg" alt="" />
					</div>
				</span>
			</article>

			<br class="clear" />


			<?php echo $page; ?>

        </section>

		<footer id="footer">
			<ul>
				<li>
					<a href="#">
						<i class="icon icon-facebook"></i>
						<span>Facebook</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon icon-twitter"></i>
						<span>Twitter</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon icon-linkedin"></i>
						<span>Linkedin</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon icon-codepen"></i>
						<span>Codepen</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon icon-github"></i>
						<span>Github</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon icon-bitbucket"></i>
						<span>BitBucket</span>
					</a>
				</li>
			</ul>

			<p>Copyright &copy; 2015 <strong>Wallace Erick</strong>. Alguns Direitos Reservados. </p>
		</footer>
		
		<?php include('_includes/footer.php'); ?>

	</body>
	</html>