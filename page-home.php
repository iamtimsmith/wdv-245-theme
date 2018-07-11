<?php get_header(); ?>

<section class="section hero is-medium">
  <div class="has-text-centered">
    <h1 class="has-text-white"><?php echo get_theme_mod('hero_text'); ?></h1>
    <h4 class="has-text-white"><?php echo get_theme_mod('hero_subheading'); ?></h4>
    <?php if( get_theme_mod('hero_button') == 'true') 
      echo '<a class="button ' . get_theme_mod('hero_button_color') . '" href="' . get_theme_mod('hero_button_url') . '">' . get_theme_mod('hero_button_text') . '</a>'
    ?>
  </div>
</section>

<section class="section">
  <div class="columns">
    <div class="column">
      <figure class="image"><img src="<?php echo get_theme_mod('column_one_image'); ?>" alt="<?php echo get_theme_mod('column_one_text'); ?>"></figure>
      <h3 class="has-text-centered"><?php echo get_theme_mod('column_one_text'); ?></h3>
    </div>
    <div class="column">
      <figure class="image"><img src="<?php echo get_theme_mod('column_two_image'); ?>" alt="<?php echo get_theme_mod('column_two_text'); ?>"></figure>
      <h3 class="has-text-centered"><?php echo get_theme_mod('column_two_text'); ?></h3>
    </div>
    <div class="column">
      <figure class="image"><img src="<?php echo get_theme_mod('column_three_image'); ?>" alt="<?php echo get_theme_mod('column_three_text'); ?>"></figure>
      <h3 class="has-text-centered"><?php echo get_theme_mod('column_three_text'); ?></h3>
    </div>
  </div>
</section>
</div><!-- .container -->

<section class="section testimonials">
  <div class="container">
  <p class="is-size-2"><img src="<?php echo get_template_directory_uri(); ?>/images/quot.jpg" alt='"' /><?php echo get_theme_mod('testimonial_one_text'); ?></p>
  <p class="is-size-2 has-text-right"><img src="<?php echo get_template_directory_uri(); ?>/images/quot.jpg" alt='"' /><?php echo get_theme_mod('testimonial_two_text'); ?></p>
  <p class="is-size-2"><img src="<?php echo get_template_directory_uri(); ?>/images/quot.jpg" alt='"' /><?php echo get_theme_mod('testimonial_three_text'); ?></p>
  </div>
</section>

<div class="container">
  <section class="section widget-form">
    <div class="columns is-centered">
      <div class="column is-8">
        <?php dynamic_sidebar( 'homepage_form' ); ?>
      </div>
    </div>
  </section>




<?php get_footer(); ?>