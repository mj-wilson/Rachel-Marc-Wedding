<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section id="front" class="intro" role="main">
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
				please <a href="/rsvp">RSVP</a> by september 1<sup>st</sup></div>
			</div>
		</div>

</section>
<?php endwhile;?>



<?php get_footer();
