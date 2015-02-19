<?php $url = basename($_SERVER['PHP_SELF']); ?>
	
	<header id="header">
		
		<h1 class="logo-icon <?php if($url == 'index.php'){ echo 'hide js-logo-home '; } ?>js-logo-icon">
			<a href="/">
				<i></i>
				<span>Wallace Erick</span>
			</a>
		</h1>

		<a href="#" class="pull-menu js-pull">
			<span></span>
			<p>Menu</p>
		</a>
		
	</header>
	
	<div class="overlay overlay-menu js-overlay-menu">
		<nav id="menu" class="js-menu-content">
			<ul>
				<li class="projects<?php if($url == 'projects.php'){ echo 'current'; } ?>">
					<span>
						<a href="/projects">
							<strong>P</strong>
							<span>Portfólio</span>
						</a>
					</span>
				</li>
				<li class="about<?php if($url == 'about.php'){ echo 'current'; } ?>">
					<span>
						<a href="/about">
							<strong>S</strong>
							<span>Sobre</span>
						</a>
					</span>
				</li>
				<li class="blog">
					<span>
						<a href="/blog" target="_blank">
							<strong>B</strong>
							<span>Blog</span>
						</a>
					</span>
				</li>
				<li class="contact<?php if($url == 'contact.php'){ echo 'current'; } ?>">
					<span>
						<a href="/contact">
							<strong>C</strong>
							<span>Contato</span>
						</a>
					</span>
				</li>
			</ul>
		</nav>
	</div> <!-- /overlay-menu -->
	