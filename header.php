<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wdv-245
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('content'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wdv-245' ); ?></a>

	<nav class="navbar">
		<div class="container">
			<div class="navbar-brand">
				<?php
				if ( has_custom_logo() ) :
					the_custom_logo();
					else :
				?>
				<a class="has-text-white is-size-3" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
				endif;
				?>
				<div class="navbar-burger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_class'     => 'navbar-menu navbar-end is-marginless',
				'container'		 => false
			) );
			?>
		</div>
	</nav>

	<div id="content" class="container" style="margin-top:50px; margin-bottom:50px;">
