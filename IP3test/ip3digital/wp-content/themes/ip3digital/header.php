<?php
/**
 * @package WordPress
 * @subpackage ip3digital
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ip3digital' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php bloginfo( 'template_directory' ); ?>/html5.js" type="text/javascript"></script>
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20371626-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
		<<?php if ( is_front_page() || is_home() || is_404() ) echo 'h1'; else echo 'div'; ?> id="title">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/ip3digital-logo.png" alt="<?php bloginfo( 'description' ); ?>" />
				<span><?php bloginfo( 'description' ); ?></span>
			</a>
		</<?php if ( is_front_page() || is_home() || is_404() ) echo 'h1'; else echo 'div'; ?>><!-- #title -->

		<nav id="access" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #access -->
		<div id="slider">
			<ul>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/images/slide-1.jpg" alt="" /></li>
			</ul>
		</div><!-- #slider -->
		<<?php if ( is_front_page() || is_home() || is_404() ) echo 'h2'; else echo 'h1'; ?> id="page-title">
		<?php if ( is_front_page() || is_home() || is_404() ) echo 'Serving over <strong>140 million</strong> visitors per month, <strong>IP3 Digital</strong> redefines <strong>quality traffic management</strong> and <strong>delivery</strong>'; else echo the_title(); ?>
		</<?php if ( is_front_page() || is_home() || is_404() ) echo 'h2'; else echo 'h1'; ?>>
	</header><!-- #branding -->
	<div id="content">