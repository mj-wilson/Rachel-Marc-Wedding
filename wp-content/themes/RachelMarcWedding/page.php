<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="page" role="main">
    <div class="content">
    <?php the_content(); ?>
    </div>

</section>
<?php endwhile;?>

 <?php get_footer();
