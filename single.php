<?php

/**
 * The template for displaying all single posts.
 *
 * @package bootscores
 */



get_header(); ?>

	<div id="primary" class="content-area col-sm-12">

<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			if ( $post->post_type == 'jlewis_project' ) {
				get_template_part( 'template-parts/content', 'project' );
			} else {
				get_template_part( 'template-parts/content', 'single' );
			} ?>

			<?php the_post_navigation(); ?>

			<?php

				// If comments are open or we have at least one comment, load up the comment template.

				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;

			?>



		<?php endwhile; // End of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->



<?php // get_sidebar(); ?>

<?php get_footer(); ?>

