<?php $url = basename($_SERVER['PHP_SELF']); ?>
<section id="like"<?php if($url == 'about.php') { echo ' class="dark"'; } ?>>
			<h4 class="title">Gostou do meu trabalho?</h4>
			<h5 class="subtitle">Podemos ser <span>excelentes parceiros</span></h5>
			<a href="<?php echo $base_url ?>contact">
				<span>Sim, vamos conversar!</span>
			</a>
		</section>