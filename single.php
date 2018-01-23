<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Boilerplate
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<header class=" woocommerce-products-header" style="background-image: url(<?php echo get_template_directory_uri() . '/images/shop-header.jpg' ?>); background-position: center; min-height:400px;" >
		<h1 id="wc-title">Blog</h1>
	    </header>
		<div class="container" id="blog-content">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="blog-entry">
					
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
						<span><?php the_time('d/m/Y |'); ?></span>
						<span><?php the_author(); ?></span>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<div class="col-md-8 col-sm-12">
								<?php the_content();?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
