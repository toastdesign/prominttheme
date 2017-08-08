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
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div data-sticky-container>

		<header id="main-nav-header" class="site-header sticky" role="banner"  data-sticky  data-sticky-on="small" data-options="marginTop:0;" style="width:100%; ">
			
			<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?> data-hide-for="large">
				
				<div class="flex-container align-middle align-justify">
								
					<div class="site-mobile-title title-bar-title columns">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"><span class="sr-only"><?php bloginfo( 'name' ); ?></span></a>
					</div>
					
					<div class="columns shrink">
						<button id="hamburger-btn" class="hamburger hamburger--squeeze" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
					</div>
					
				</div>
			</div>
			
			<nav class="site-navigation top-bar" role="navigation">
				<div class="row flex-container align-middle align-justify">
					<div class="top-bar-left columns ">
						<div class="site-desktop-title top-bar-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>"><span class="sr-only"><?php bloginfo( 'name' ); ?></span></a>
						</div>
					</div>
					
					<div class="top-bar-right columns flex-child-auto large-flex-child-shrink">
						<?php foundationpress_top_bar_r(); ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					</div>
				</div>
			</nav>

		</header>

	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
