<?php
/**
 * @package WordPress
 * @subpackage ip3digital
 */

get_header(); ?>


		<?php the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php comments_template( '', true ); ?>


<?php get_footer(); ?>