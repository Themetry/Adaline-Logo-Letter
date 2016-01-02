<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Adaline Logo Letter
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adaline' ); ?></a>

	<header id="masthead" class="site-header<?php if ( has_header_image() ) { ?> header-image<?php } ?>" role="banner"<?php if ( has_header_image() ) { ?> style="background-image: url('<?php header_image(); ?>');"<?php } ?>>
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->
		<button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'adaline' ); ?></span></button>
		<?php get_template_part( 'template-parts/logo-letter' ); ?>
	</header><!-- #masthead -->
	<div id="slide-menu" class="slide-menu">
		<?php get_template_part( 'template-parts/logo-letter' ); ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div><!-- #slide-menu -->
	<div id="content" class="site-content">
