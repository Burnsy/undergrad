<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Undergrad
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
	<div id="page" class="site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Undergrad' ); ?></a>
			<?php if ( get_header_image() ) { ?>
				<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
			<?php } else { ?>
				<header id="masthead" class="site-header" role="banner">
			<?php } ?>
			<?php // Display site icon or first letter as logo ?>
				<div class="site-branding<?php if ( is_singular() ) { echo ' screen-reader-text'; } ?>">
					<?php $description = get_bloginfo( 'description', 'display' ); if( get_theme_mod( 'compacted-header' ) == '1' ){ ?>

						<?php if ( is_front_page() && is_home() ){ ?>
							<a class="navbar-compact" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><h1><?php bloginfo( 'name' ); ?><?php if ( $description || is_customize_preview() ){ ?>
							<small class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></small></h1></a>
							<?php }; ?>
						<?php }else{ ?>
							<a class="navbar-compact" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><p><?php bloginfo( 'name' ); ?><?php if ( $description || is_customize_preview() ){ ?>
							<small class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></small></p></a>
								<?php }; ?>
							<?php }; ?>
						<?php }else{ ?>

							<?php if ( is_front_page() && is_home() ){ ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php }else{ ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php }; if ( $description || is_customize_preview() ){ ?>
										<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
										<?php }; ?>
						<?php } ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'Undergrad' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<div id="content" class="site-content <?php echo get_theme_mod( 'width_setting', 'fluid' ); ?>">
