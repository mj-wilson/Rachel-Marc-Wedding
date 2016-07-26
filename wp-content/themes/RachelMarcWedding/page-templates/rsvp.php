<?php
/*
Template Name: RSVP
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section id="rsvp" class="intro" role="main">
	<div class="content">
		<div class="rsvp-container">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php endwhile;?>



<?php get_footer();
