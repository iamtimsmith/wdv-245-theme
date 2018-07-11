<?php

function custom_frontpage_column_two_register($wp_customize) {

  /**
  * Add controls to the Columns section in Customizer
  *
  */
  // Add Columns image
  $wp_customize->add_setting ('column_two_image');
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'column_two_image', array(
    'label'							=> __('Column Two Image', 'WDV-245'),
    'section'						=> 'Columns',
    'settings'					=> 'column_two_image',
  )));

  // Add Columns Heading
  $wp_customize->add_setting ( 'column_two_text');
  $wp_customize->add_control ( 'column_two_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Column Two Text',
    'section'						=> 'Columns',
    'settings'					=> 'column_two_text',
  ));

}
add_action('customize_register', 'custom_frontpage_column_two_register');


 ?>