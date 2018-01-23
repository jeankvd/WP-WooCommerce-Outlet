<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_Boilerplate
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	
		

			<?php
			while ( have_posts() ) : the_post();?>
	<header class=" woocommerce-products-header" style="background-image: url(<?php echo get_template_directory_uri() . '/images/header2.jpg' ?>); background-position: center; min-height:400px;" >
		<h1 id="wc-title"><?php single_post_title(); ?></h1>
	</header>

	<div class="container" id="blog-content">
		<div class="col-12">
			<?php the_content(); ?>
		</div>
	</div>

				



			<?php  endwhile; // End of the loop.?>
			

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
