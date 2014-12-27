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

	    <meta property="og:image" content="content/images/share.png" />
	    <meta property="og:title" content="" />
	    <meta property="og:url" content="" />
	    <meta property="og:description" content="" />
 
	    <meta itemprop="image" content="content/images/share.png" />
	    <meta itemprop="name" content="" />
	    <meta itemprop="url" content="" />

		<link rel="canonical" href="index" />
		
		<link rel="stylesheet" type="text/css" href="content/css/application.css" media="all" />
	    <link rel="shortcut icon" type="image/x-icon" href="content/images/favicon.ico" />
		
	</head>
	
	<body class="blue" style="display: block;">

		<header id="header">
			
		</header>

		<section id="home" class="page">
			<div class="content page">
				<span class="logo">
					<i></i>
					<h1>Wallace <span>Erick</span></h1>
				</span>
				<h2>Desenvolvedor Front-End</h2>
				<p>Pensando criativamente. <span class="highlight">Codando continuamente.</span></p>
			</div>
			<a href="#" class="scroll-down">Descer</a>
			<span class="overlay"></span>
		</section>

		<!-- <section id="about" class="page"> -->
		<!-- </section> -->

		<section id="projects" class="page">
			<br /><br /><br /><br /><br /><br />
			<ul>
				<li><a href="?projeto=sadia.html" name="#!sadia.html">Sadia</a></li>
				<li><a href="?projeto=natura.html" name="#!natura.html">Natura</a></li>
				<li><a href="?projeto=biopet.html" name="#!biopet.html">Biopet</a></li>
				<li><a href="?projeto=toyota.html" name="#!toyota.html">Toyota</a></li>
				<li><a href="?projeto=gendai.html" name="#!gendai.html">Gendai</a></li>
			</ul> 

			<div id="result">
	        	<?php echo $page;?>
	        </div>
		</section>

		<?php include('includes/footer.php'); ?>
		
	</body>
</html>