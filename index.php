<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_Boilerplate
 */

get_header(); ?>

	

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- Hero Banner -->
			<!-- TODO: Make Images ACF on WP & Add Text -->
		<div id="slider-parent">
			<div id="slider" class="nivoSlider">
				<img src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
				<img src='<?php echo(get_template_directory_uri() ."/images/download-1.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download-2.jpg") ?>' alt="" title="This is an example of a caption" />
				<img src='<?php echo(get_template_directory_uri() ."/images/download-2.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download-1.jpg") ?>' alt="" data-transition="slideInLeft" />
			</div>
		</div>

		<!-- Sales imgs -->
		<!-- TODO: make images editable from WP ADMIN ACFs -->
		<div class="card-deck">
			<div class="card card-inverse">
				<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/download-2.jpg") ?>' alt="Card image">
				<div class="card-img-overlay">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card card-inverse">
				<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>'  alt="Card image">
				<div class="card-img-overlay">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card card-inverse">
				<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/download-1.jpg") ?>'  alt="Card image">
				<div class="card-img-overlay">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>

		<!-- Our Prodcts Woocomerce -->
		<!-- TODO: Link to WooCommerce shop & featured items -->

		<div id="featured-products">
			<h2>Our Products</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora quasi rem quia</p>
			<!-- TODO: WP Woocommerce mini menu (maybe)
					Change on Click-->
			<ul>
				<li><a href="">Women</a></li>
				<li><a href="">Men</a></li>
				<li><a href="">Kids</a></li>
				<li><a href="">Jewelry</a></li>
			</ul>

			<!-- TODO: WP Integration -->
			<div class="owl-carousel owl-theme owl-loaded">
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<div class="owl-item">Hola</div>
						<div class="owl-item">sup</div>
						<div class="owl-item">dertp</div>
					</div>
				</div>
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<div class="owl-item">Holaaasd</div>
						<div class="owl-item">susdsdsp</div>
						<div class="owl-item">dessddrtp</div>
					</div>
				</div>
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<div class="owl-item">Hola</div>
						<div class="owl-item">sup</div>
						<div class="owl-item">dertp</div>
					</div>
				</div>
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<div class="owl-item">Hola</div>
						<div class="owl-item">sup</div>
						<div class="owl-item">dertp</div>
					</div>
				</div>
				<div class="owl-controls">
					<div class="owl-nav">
						<div class="owl-prev">prev</div>
						<div class="owl-next">next</div>
					</div>
					<div class="owl-dots">
						<div class="owl-dot active"><span></span></div>
						<div class="owl-dot"><span></span></div>
						<div class="owl-dot"><span></span></div>
					</div>
				</div>
			</div>

			<div class="card-deck" id="products">
				<div class="card">
					<img class="card-img-top" src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="Card image cap">
					<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="Card image cap">
					<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="Card image cap">
					<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="Card image cap">
					<div class="card-block">
					<h4 class="card-title">Card title</h4>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>


		</div>
		

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();

get_footer();

