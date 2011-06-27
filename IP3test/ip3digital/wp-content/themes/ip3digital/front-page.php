<?php
/**
 * @package WordPress
 * @subpackage ip3digital
 */
 
global $more;
$more = 0;

get_header(); ?>


		<?php $args = array(
				'post_type' => 'page',
				'post__in' => array(56,7,9),
				'order' => 'DESC'
				);
			query_posts($args); ?>
		
		<?php while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" class="column">
				<header class="entry-header">
					<h3 class="entry-title">
						<?php the_post_thumbnail(); ?>
						<?php the_title(); ?>
					</h3>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>



<?php get_footer(); ?>