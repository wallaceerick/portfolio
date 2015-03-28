<?php
/**
 * @package WordPress
 * @subpackage WallaceErick
 * @since Portfolio 1.0
 */
?>

<?php get_header(); ?>

	<section id="projects" class="animated-content js-animated-content js-projects-parent"> 

			<ul class="project-navigation animated-content js-navigation js-animated-content">
				<li class="filter active" data-filter="all" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Filter: All'});">Tudo</li>
				<li class="filter" data-filter=".institucional" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Filter: Institutional'});">Institucional</li>
				<li class="filter" data-filter=".sistemas" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Filter: Systems'});">Sistemas</li>
				<li class="filter" data-filter=".wordpress" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Filter: Wordpress'});">Wordpress</li>
				<li class="filter" data-filter=".loja-virtual" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Filter: E-commerce'});">Loja Virtual</li>
				<li class="filter" data-filter=".responsivo" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Filter: Responsive'});">Responsivo</li>
			</ul>

			<ol id="portfolio" class="js-projects animated-content js-animated-content">

				<li class="mix sadia sistemas responsivo" data-value="1">
					<span class="number">01</span>
					<span class="info">
						<h4 class="title">Sadia <span>jogapramim</span></h4>
						<h5 class="category">Sistemas</h5>
						<hr />
						<a href="<?php base_url(); ?>blog/jquery/ola-mundo/" class="hidden" onclick="ga('send', 'event', {eventCategory: 'Button', eventAction: 'Works: Sadia'});">Detalhes</a>
					</span> <!-- /info -->
					<span class="image init-animation">
						<span></span>
						<img src="<?php base_url(); ?>content/images/portfolio/sadia/preview.jpg" alt="Sadia">
					</span> <!-- /image -->
				</li>

			</ol>

	</section>
 

<?php get_footer(); ?>
