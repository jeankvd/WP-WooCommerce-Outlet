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
	<div class="card-deck" id="top-sales">
		<div class="card card-inverse">
			<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/download-3.jpg") ?>' alt="Card image">
			<div class="card-img-overlay">
				<h4 class="card-title"></h4>
				<p class="card-text"></p>
				<p class="card-text"><small class="text-muted"></small></p>
			</div>
		</div>
		<div class="card card-inverse">
			<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/download-4.jpg") ?>'  alt="Card image">
			<div class="card-img-overlay">
				<h4 class="card-title"></h4>
				<p class="card-text"></p>
				<p class="card-text"><small class="text-muted"></small></p>
			</div>
		</div>
		<div class="card card-inverse">
			<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/download-5.jpg") ?>'  alt="Card image">
			<div class="card-img-overlay">
				<h4 class="card-title"></h4>
				<p class="card-text"></p>
				<p class="card-text"><small class="text-muted"></small></p>
			</div>
		</div>
	</div>

	<!-- Our Prodcts Woocomerce -->
	<!-- TODO: Link to WooCommerce shop & featured items -->

	<div id="featured-products">
		<h2>Our Products</h2>
		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora quasi rem quia</p>
		
		<!-- Owl.js products Carousel -->
		<!-- TODO: WP Woocommerce mini menu (maybe)
				Change on Click-->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="women-tab" data-toggle="tab" href="#women" role="tab" aria-controls="women" aria-selected="true">Women</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab" aria-controls="men" aria-selected="false">Men</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="kids-tab" data-toggle="tab" href="#kids" role="tab" aria-controls="kids" aria-selected="false">Kids</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="jewelry-tab" data-toggle="tab" href="#jewelry" role="tab" aria-controls="jewelry" aria-selected="false">Jewelry</a>
				</li>
			</ul>
		<!-- TODO: WP Integration -->
			
			<div class="tab-content container">
				<div class="tab-pane fade show active" id="women" role="tabpanel" aria-labelledby="women-tab">
					<div class="owl-women owl-carousel owl-theme">
					<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'women',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
					</div>
				</div>
						
				<div class="tab-pane fade" id="men" role="tabpanel" aria-labelledby="men-tab">
					<div class="owl-women owl-carousel owl-theme">
					<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'men',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
					</div>
				</div>

				<div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
					<div class="owl-women owl-carousel owl-theme">
					<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'kids',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
					</div>
				</div>

				<div class="tab-pane fade" id="jewelry" role="tabpanel" aria-labelledby="jewelry-tab">
					<div class="owl-women owl-carousel owl-theme">
					<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'jewelry',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
					</div>
				</div>

		</div>
	</div>

	<!-- Featured Products listings widget -->
	<!-- TODO: Widget WordPress Integration with images and Card Stylings-->
	<div class="container">
		<div id="featured-categories">
			<div class="row">
				<div class="col-6">
					<div class="card card-inverse">
						<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img1-middle-nego1.jpg") ?>' alt="Card image">
						<div class="card-img-overlay">
							<h4 class="card-title">Card title</h4>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img2-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Card title</h4>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img3-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Card title</h4>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img4-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Card title</h4>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img5-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Card title</h4>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured Products slider -->

	<div class="container">
		<div class="row">
			<div class="col-6">
				<h3>Latest Arrivals</h3>
				<div class="owl-arrivals owl-carousel owl-theme">
				<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'latest-arrivals',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
				</div>
			</div>
			<div class="col-6">
				<h3>Featured Products</h3>
				<div class="owl-featured owl-carousel owl-theme">
				<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'featured',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
				</div>	
			</div>
		</div>
	</div>

<!-- Sales Images-->

	<div class="container" >
		<div class="row">
			<div class="col-6">
				<div class="card card-inverse">
					<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/bottom.jpg") ?>'  alt="Card image">
					<div class="card-img-overlay">
						<h4 class="card-title"></h4>
						<p class="card-text"></p>
						<p class="card-text"><small class="text-muted"></small></p>
					</div>
				</div>	
			</div>
			<div class="col-6">
				<div class="card card-inverse">
					<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/bottom2.jpg") ?>'  alt="Card image">
					<div class="card-img-overlay">
						<h4 class="card-title"></h4>
						<p class="card-text"></p>
						<p class="card-text"><small class="text-muted"></small></p>
					</div>
				</div>	
			</div>
		</div>
	</div>

<!-- Sales and Blog Section -->
<!-- TODO: loop the cat and if statement inside loop -->
	<div class="container" id="blog">
		<div class="row">
			<div class="col-3">
				<h3>Most Viewed</h3>
				<div class="owl-viewed owl-carousel owl-theme">
						<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'most-viewed',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
				</div>	
			</div>
			<div class="col-3">
				<h3>On Sale</h3>
					<div class=" on-sale owl-carousel owl-theme">
						<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'on-sale',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									wc_get_template_part( 'content', 'product' );
								endwhile;
							} else {
								echo __( 'No products found' );
							}
							wp_reset_postdata();
						?>
					</div>	
			</div>
			<div class="col-6">
				<h3>Our Blog</h3>
				<div>Cards</div>
			</div>
		</div>
	</div>

<!-- Subscription -->

	<div id="subscribe">
		<p><span>Special Offer</span> for Subscribers</p>
		<h3>10% Members Discount</h3>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
		<form>
			<input type="email" name="email">
			<a>Submit</a>
		</form>
		<div class="instagram-feed">
			instagram feed
		</div>
	</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();

