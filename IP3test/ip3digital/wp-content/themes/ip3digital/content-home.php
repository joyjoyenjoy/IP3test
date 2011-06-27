<?php
/**
 * @package WordPress
 * @subpackage ip3digital
 */

?>

<article id="post-<?php the_ID(); ?>" class="column">
	<header class="entry-header">
		<h3 class="entry-title">
			<?php the_post_thumbnail(); ?>
			<?php the_title(); ?>
		</h3>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php echo strip_tags(get_the_content(), '<img>')
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
