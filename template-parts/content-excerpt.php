<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wdv-245
 */

?>
<div class="column is-one-third">
	<article id="post-<?php the_ID(); ?>" <?php post_class(["has-background-white-bis","card", ""]); ?>>
		<a href="<?php the_permalink(); ?>">
			<div class="card-image">
				<figure class="image is-marginless">
					<?php wdv_245_post_thumbnail(); ?>
				</figure>
			</div>

			<div class="card-content">
				<header class="entry-header">
					<?php
						the_title( '<p class="title is-5 has-text-weight-normal"><a href="' . esc_url( get_permalink() ) . '" class="has-text-dark" rel="bookmark">', '</a></p>' );

					if ( 'post' === get_post_type() ) :
						?>
					<?php endif; ?>
				</header><!-- .entry-header -->

				
			</div>
		</a>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
