<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wdv-245
 */

?>

	</div><!-- #content -->

	<div class="offcanvas">
		<p class="has-text-right">
			<span class="navbar-close delete is-large"></span>
		</p>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_class'     => '',
				'container'		 => false
			) );
			?>
	</div>

	<footer id="colophon" class="footer">
		<div class="container">
			<p class="has-text-centered is-size-7">Website by <a href="https://www.iamtimsmith.com">Tim Smith</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
