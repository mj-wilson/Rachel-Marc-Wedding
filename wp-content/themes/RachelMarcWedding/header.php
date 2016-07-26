<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="rmwedding">
	<?php do_action( 'foundationpress_after_body' ); ?>
	<div class="wrapper">

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="content">
			<div class="nav nav-left">
				<?php wp_nav_menu( array('menu'  => 'Main Nav Left') );?>
			</div>
			<div id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/emblem.svg"">
				</a>
			</div>
			<div class="nav nav-right">
				<?php wp_nav_menu( array('menu'  => 'Main Nav Right') );?>
			</div>
			<div class="menu-holder">
				<div class="mobile-nav-toggle"><span></span></div>
				<div class="nav nav-full mobile-menu-holder">
					<?php wp_nav_menu( array('menu'  => 'Full Menu') );?>
				</div>
			</div>
		</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
