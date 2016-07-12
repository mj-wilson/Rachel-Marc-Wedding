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
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<div class="wrapper">

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="content">
			<div id="rach-marc">
				<div><span>R</span>achel</div>
				<div class="and"><span>&amp;</span></div>
				<div><span>M</span>arc</div>
			</div>
			<img id="getting-married" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/getting-married2.png"/>
			<div id="date-venue">
				<div class="date">OCTOBER 23, 2016<span>four o'clock in the afternoon</span></div>
				<div class="leaf">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/leaf.svg"/>
				</div>
				<div class="venue">DEER PARK VILLA<span>fairfax, california</span></div>
			</div>
			<div id="dinner-dancing">
				<div class="dinner-dancing">dinner <span class="and"><span>&amp;</span></span> dancing to follow</div>
				<div class="leaf">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/leaf.svg"/>
				</div>
				<div class="adults">adults only please</div>
			</div>
			<div id="rsvp">
				<a href="/rsvp">RSVP Here</a>
			</div>
		</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
