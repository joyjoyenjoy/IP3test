<?php
/**
 * @package WordPress
 * @subpackage ip3digital
 */

get_header(); ?>


			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'content', 'single' ); ?>


				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>