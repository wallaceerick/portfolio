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
	    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
		
	</head>

	<body> 

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
		<section id="project" class="opened">
			 

			<?php echo $page; ?>

        </section>
 
		
		<?php include('_includes/footer.php'); ?>

	</body>
	</html>