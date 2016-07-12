<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">

</section>
<?php endwhile;?>



<?php get_footer();
