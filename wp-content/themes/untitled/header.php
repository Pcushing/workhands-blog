<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package untitled
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<div id="masthead-wrap">
			<header id="masthead" class="site-header" role="banner">
				<div id="logo">
					<a href="https://www.workhands.us" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="https://dlq4neh27kdoh.cloudfront.net/assets/static/logo.png" alt="workhands" /></a>
				</div>
				<div class="nav-wrap">
					<nav role="navigation" class="site-navigation main-navigation">
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'untitled' ); ?>"><?php _e( 'Skip to content', 'untitled' ); ?></a></div>
					</nav><!-- .site-navigation -->
				</div><!-- .nav-wrap -->
			</header><!-- #masthead -->
		</div><!-- #masthead-wrap -->
