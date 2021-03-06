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
		<!-- Nivo will take all text inside the title attribute and convert it to HTML -->
	<div id="slider-parent">
		<div id="slider" class="nivoSlider">
			<img src='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' title="<div id='first-caption'>
			<span class='animated slideInRight'>Sale Off This Week</span>
			<h2 class='animated slideInRight'>Summer Collection</h2>
			<p class='animated slideInLeft'>Lorem ipsum dolor, sit amet consec\tetur adipisicing elit. Labore Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore</p>
			<a class='btn btn-secondary animated slideInUp'>Shopping Now</button>
		</div>" data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
			
			<img src='<?php echo(get_template_directory_uri() ."/images/download-1.jpg") ?>' title="<div id='second-caption'>
			<span class='animated rollIn'>Only in Our Store</span>
			<h2 class='animated slideInDown'>Perfect Outerwear</h2>
			<p class='animated slideInDown'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore</p>
			<a class='btn animated slideInUp'>Shopping Now</button>
		</div>" data-thumb='<?php echo(get_template_directory_uri() ."/images/download-2.jpg") ?>' alt="" title="This is an example of a caption" />
			<img src='<?php echo(get_template_directory_uri() ."/images/download-2.jpg") ?>' title="<div id='third-caption'>
			<span class='animated slideInRight'>-10% this Week</span>
			<h2 class='animated bounceIn'>Dress Shirt Nego</h2>
			<p class='animated bounceIn'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore</p>
			<a class='btn animated slideInUp'>Shopping Now</button>
		</div>" data-thumb='<?php echo(get_template_directory_uri() ."/images/download-1.jpg") ?>' alt="" data-transition="slideInLeft" />
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
	<div class="container" id="categories">
		<div id="featured-categories">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="card card-inverse">
						<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img1-middle-nego1.jpg") ?>' alt="Card image">
						<div class="card-img-overlay">
							<h4 class="card-title">Clothing's for Men</h4>
							<p class="card-text"><small class="text-muted">Discover Now </small></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img2-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Slip On</h4>
									<p class="card-text"><small class="text-muted">Discover Now</small></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img3-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">HandBags</h4>
									<p class="card-text"><small class="text-muted">Discover Now</small></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img4-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Accesories</h4>
									<p class="card-text"><small class="text-muted">Discover Now</small></p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="card card-inverse">
								<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/img5-middle-nego1.jpg") ?>' alt="Card image">
								<div class="card-img-overlay">
									<h4 class="card-title">Sun Glasses</h4>
									<p class="card-text"><small class="text-muted">Discover Now</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured Products slider -->

	<div class="container" id="arrivals">
		<div class="row">
			<div class="col-md-6 col-sm-12">
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
			<div class="col-md-6 col-sm-12">
				<h3>Featured Products</h3>
				<div class="owl-featured owl-carousel owl-theme">
				<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'featured-products',
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

	<div class="container" id="bottom-sales" >
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card card-inverse">
					<img class="card-img" src='<?php echo(get_template_directory_uri() ."/images/bottom.jpg") ?>'  alt="Card image">
					<div class="card-img-overlay">
						<h4 class="card-title"></h4>
						<p class="card-text"></p>
						<p class="card-text"><small class="text-muted"></small></p>
					</div>
				</div>	
			</div>
			<div class="col-md-6 col-sm-12">
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
			<div class="col-md-3 col-sm-12">
				<h3>Most Viewed</h3>
				<div class="owl-viewed owl-carousel owl-theme">
					<div>
						<?php
							$index = 0;
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'most-viewed',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									if ($index !== 0 && $index % 3 == 0) { 
										echo "</div><div>";
									}
									$index++;
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
			<div class="col-md-3 col-sm-12">
				<h3>On Sale</h3>
					<div class=" on-sale owl-carousel owl-theme">
						<div>
						<?php
							$index = 0;
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'product_cat' => 'on-sale',
								);
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();
									if ($index !== 0 && $index % 3 == 0) { 
										echo "</div><div>";
									}
									$index++;
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
			<div class="col-md-6 col-sm-12">
				<h3>Our Blog</h3>
				<div class="blog-entries owl-carousel owl-theme container-fluid">
					<div class="row home-blog">
                        <?php
                        $index = 0;
                        
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        
                        if ($index !== 0 && $index % 2 == 0) { 
                            echo "</div><div class='row home-blog' >";
                        }
                        $index++;
                        ?>
                        

						<div class="col-12">
							<div class="col-6 img-fluid">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class=col-6>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
								<p><?php the_excerpt() ?></p>
							</div>
						</div>

						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>



	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();

