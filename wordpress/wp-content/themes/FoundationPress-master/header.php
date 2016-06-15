<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/animate.css/animate.min.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<article id="header">
		  <section>
		    <div class="toggleMenu">
		      <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
		    </div>
				<a href="http://localhost/www.plaitil.fr/wordpress/">
					<div class='logo_header'>
		    </div>
			</a>
		  </section>
		  <nav id="navigation">
		  <ul>
		    <li><a href="#agence" onClick="window.location.reload()">agence</a></li>
		    <li><a href="#projets" onClick="window.location.reload()">projets</a></li>
		    <li><a href="#contact" onClick="window.location.reload()">contact</a></li>
			</ul>
		</nav>
		</article>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<!--<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home">
						<nav class="tab-bar">
						  <div class="right tab-bar-section"><?php foundationpress_top_bar_r(); ?>

							<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
								<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
							<?php endif; ?></div>
						  <div class="right-small"></div>
						</nav>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>-->

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
