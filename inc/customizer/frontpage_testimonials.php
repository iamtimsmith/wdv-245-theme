<?php

function custom_frontpage_testimonials_register($wp_customize) {

  /**
  * Add Testimonials section in Customizer
  *
  */
	$wp_customize->add_section( 'Testimonials', array(
    'title'		=>	__('Testimonials', 'WDV-245'),
    'priority' => 50,
		'panel'		=>	'front_page',
		'capability'	=>	'edit_theme_options',
	));

  /**
  * Add controls to the Testimonials section in Customizer
  *
  */
  // Add Testimonial One
  $wp_customize->add_setting ( 'testimonial_one_text');
  $wp_customize->add_control ( 'testimonial_one_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Testimonial One Text',
    'section'						=> 'Testimonials',
    'settings'					=> 'testimonial_one_text',
  ));

  // Add Testimonial Two
  $wp_customize->add_setting ( 'testimonial_two_text');
  $wp_customize->add_control ( 'testimonial_two_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Testimonial Two Text',
    'section'						=> 'Testimonials',
    'settings'					=> 'testimonial_two_text',
  ));

  // Add Testimonial Three
  $wp_customize->add_setting ( 'testimonial_three_text');
  $wp_customize->add_control ( 'testimonial_three_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Testimonial Three Text',
    'section'						=> 'Testimonials',
    'settings'					=> 'testimonial_three_text',
  ));
}
add_action('customize_register', 'custom_frontpage_testimonials_register');


 ?>