<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Simone4
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'simone-slug' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<?php
		// seperate if statement that looks for an image and if text is blank first, then do the other if statement
		if ( get_header_image() && ('blank' == get_header_textcolor()) ) : ?>

			<div class="site-branding" style="background-image:url(<?php header_image(); ?>);width:100%;height:100%;">

		<?php endif; ?>

		<?php if( get_header_image() && !('blank' == get_header_textcolor()) ){
			//if we have a header image and text is not blank get the header image, if not just display div below
			//Use get_header_image() when using echo otherwise in php use header_image like above.
			echo ' <div class="site-branding" style="background-image:url(' . get_header_image() . ' );width:100%;
				height:100%;"> ';
		} else {

			echo ' <div class="site-branding"> ';
		}

		?>


			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'simone-slug' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
