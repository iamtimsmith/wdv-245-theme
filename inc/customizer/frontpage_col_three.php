<?php

function custom_frontpage_column_three_register($wp_customize) {

  /**
  * Add controls to the Columns section in Customizer
  *
  */
  // Add Columns image
  $wp_customize->add_setting ('column_three_image');
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'column_three_image', array(
    'label'							=> __('Column Three Image', 'WDV-245'),
    'section'						=> 'Columns',
    'settings'					=> 'column_three_image',
  )));

  // Add Columns Heading
  $wp_customize->add_setting ( 'column_three_text');
  $wp_customize->add_control ( 'column_three_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Column Three Text',
    'section'						=> 'Columns',
    'settings'					=> 'column_three_text',
  ));

}
add_action('customize_register', 'custom_frontpage_column_three_register');


 ?>