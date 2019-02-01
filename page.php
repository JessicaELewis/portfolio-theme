<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bootscores
 */

get_header(); ?>
	<!-- begin page.php -->

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="main__content"><?php the_content(); ?></div>

                <div class="main__image flex-nogrow flex-noshrink"><?php the_post_thumbnail( 'full' )//photo ?></div>


			<?php endwhile; // End of the loop. ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
