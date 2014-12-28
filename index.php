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

 		<meta name="viewport" content="width=1080" />
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

		<header id="header">
			<div class="wrapper">
				<span class="logo">
					<a href="#home">
						<span class="logo-icon">
							<i></i>
						</span>
						<h1>Wallace Erick <span>Front-End Developer &amp; Designer</span></h1>
					</a>
				</span>
				<nav id="menu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#" class="current">Sobre</a></li>
						<li><a href="#">Portfólio</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="home" class="page">
			<div class="content page">
				<span class="logo-icon">
					<i></i>
					<h2>Wallace <span>Erick</span></h2>
				</span>
				<h3>Desenvolvedor Front-End</h3>
				<p>Pensando criativamente. <span class="highlight">Codando continuamente.</span></p>
			</div>
			<a href="#about" class="scroll-down js-scroll">Sobre Mim</a>
			<span class="overlay">
				<span class="top"></span>
				<span class="bottom"></span>
			</span>
		</section>

		<section id="about" class="page">
			<h2 class="page-title">
				<i class="icon icon-user"></i>
				<span>Sobre Mim</span>
			</h2>
		</section>

		<section id="projects" class="page">
			<ul class="js-hashchange">
				<li><a href="?projeto=sadia.html" name="#!sadia.html">Sadia</a></li>
				<li><a href="?projeto=natura.html" name="#!natura.html">Natura</a></li>
				<li><a href="?projeto=biopet.html" name="#!biopet.html">Biopet</a></li>
				<li><a href="?projeto=toyota.html" name="#!toyota.html">Toyota</a></li>
				<li><a href="?projeto=gendai.html" name="#!gendai.html">Gendai</a></li>
			</ul> 

			<div id="content">
				<div class="loading">
					<img src="images/loading.gif" height="25" width="25" />
				</div>
	            <div id="result"> 
	            	<?php echo $page;?>
	            </div> 
	        </div>

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