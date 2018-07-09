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
      <figure class="image"><img src="https://placeimg.com/300/300" alt=""></figure>
      <h3 class="has-text-centered">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
    </div>
    <div class="column">
      <figure class="image"><img src="https://placeimg.com/300/300" alt=""></figure>
      <h3 class="has-text-centered">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
    </div>
    <div class="column">
      <figure class="image"><img src="https://placeimg.com/300/300" alt=""></figure>
      <h3 class="has-text-centered">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
    </div>
  </div>
</section>



<?php get_footer(); ?>