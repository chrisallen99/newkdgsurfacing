<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FSE Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#ffffff">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fse' ); ?></a>

		<div class="kdg-header">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="logo">
						<img src="/wp-content/uploads/2022/10/kdg-surfacing-logo.jpg">
					</div>
</div>
					<div class="col-12 col-lg-6">
						<header id="masthead" class="site-header">
							<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
						</header><!-- #masthead -->
					</div>
					<div class="col-12 col-lg-3 text-right pt-2">

					<p class="top-header-tel"><i class="fas fa-phone"></i> 01379 309 027</p>

					</div>

				</div>
			</div>
		</div>
		<div id="content" class="site-content">
