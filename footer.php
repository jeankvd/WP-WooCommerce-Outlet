<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Boilerplate
 */

?>

<!-- Subscription -->

<div id="subscribe" class="container">
		<p><span>Special Offer</span> for Subscribers</p>
		<h3>10% Members Discount</h3>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
		<form>
			<input type="email" name="email">
			<a>Submit</a>
		</form>
		<div class="instagram-feed row">
			<span><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</span>
			<div class="col-2">
				<img src='<?php echo(get_template_directory_uri() ."/images/1.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
            </div>
            <div class="col-2">
				<img src='<?php echo(get_template_directory_uri() ."/images/2.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
			</div>
            <div class="col-2">
				<img src='<?php echo(get_template_directory_uri() ."/images/3.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
			</div>
			<div class="col-2">
				<img src='<?php echo(get_template_directory_uri() ."/images/4.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
			</div>
			<div class="col-2">
				<img src='<?php echo(get_template_directory_uri() ."/images/5.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
			</div>
			<div class="col-2">
				<img src='<?php echo(get_template_directory_uri() ."/images/6.jpg") ?>' data-thumb='<?php echo(get_template_directory_uri() ."/images/download.jpg") ?>' alt="" />
			</div>
		</div>
	</div>


	</div><!-- #content -->

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h4>About Us</h4>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum...</p>
				<a href="">Redmore</a>
				<div id="social-widget">
					<h4>Follow Us on Social Media</h4>
					<p>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-google-plus" aria-hidden="true"></i>
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-youtube" aria-hidden="true"></i>
						<i class="fa fa-flickr" aria-hidden="true"></i>
					</p>
				</div>
			</div>
			<div class="col-md-2 information-ul">
				<h4>Information</h4>
				<ul>
					<li>About Us</li>
					<li>Delivery Information</li>
					<li>Privacy Policy</li>
					<li>Terms & Conditions</li>
					<li>Gifts Cetificates</li>					
				</ul>
			</div>
			<div class="col-md-2 information-ul">
				<h4>My Account</h4>
				<ul>
					<li>My Account</li>
					<li>Order History</li>
					<li>Affiliates</li>
					<li>Newsletter</li>
					<li>Brands</li>					
				</ul>
			</div>
			<div class="col-md-3" id="popular-tags">
				<h4>Popular Tags</h4>
				<ul>
					<li>Woolrich</li>
					<li>Vapo</li>
					<li>T-shirts</li>
					<li>Handbags</li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<span>Copyright &copy2017 Jean Villalobos</span>
			</div>
			<div class="col-md-6" id="credit-cards">
				<p>
					<i class="fa fa-cc-visa" aria-hidden="true"></i>
					<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
					<i class="fa fa-cc-paypal" aria-hidden="true"></i>
					<i class="fa fa-cc-stripe" aria-hidden="true"></i>
					<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
				</p>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
