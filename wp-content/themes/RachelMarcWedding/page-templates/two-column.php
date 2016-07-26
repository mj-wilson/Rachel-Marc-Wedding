<?php
/*
Template Name: Two Columns
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section id="page" class="two-col" role="main">
		<div class="content">
			<div class="column-container">
				<div class="col left">
	          		<?php the_field('right_column'); ?>
	          	</div>
				<div class="col right">
	          		<?php the_content(); ?>
	          	</div>
          	</div>
		</div>
</section>


<?php endwhile;?>



<?php get_footer();
