<?php

function custom_frontpage_column_one_register($wp_customize) {

  /**
  * Add Columns section in Customizer
  *
  */
	$wp_customize->add_section( 'Columns', array(
    'title'		=>	__('Columns', 'WDV-245'),
    'priority' => 50,
		'panel'		=>	'front_page',
		'capability'	=>	'edit_theme_options',
	));

  /**
  * Add controls to the Columns section in Customizer
  *
  */
  // Add Columns image
  $wp_customize->add_setting ('column_one_image');
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'column_one_image', array(
    'label'							=> __('Column One Image', 'WDV-245'),
    'section'						=> 'Columns',
    'settings'					=> 'column_one_image',
  )));

  // Add Columns Heading
  $wp_customize->add_setting ( 'column_one_text');
  $wp_customize->add_control ( 'column_one_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Column One Text',
    'section'						=> 'Columns',
    'settings'					=> 'column_one_text',
  ));

}
add_action('customize_register', 'custom_frontpage_column_one_register');


 ?>