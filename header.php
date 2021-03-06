<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Boilerplate
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme-boilerplate' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation navbar">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" id="menu-btn"><?php esc_html_e( 'Menu', 'theme-boilerplate' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<div id="logo"><img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt=""></div>
			<div id="nav-cart"><a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
