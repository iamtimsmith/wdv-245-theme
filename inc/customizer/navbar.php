<?php

function custom_header_register($wp_customize) {

  /**
  * Add Hero section in Customizer
  *
  */
	$wp_customize->add_section( 'Navbar', array(
    'title'		=>	__('Navbar', 'WDV-245'),
    'priority' => 30,
		'panel'		=>	'front_page',
		'capability'	=>	'edit_theme_options',
	));

  // Add Background color
	$wp_customize->add_setting( 'header_bg', array( 'default' => '#fafafa', ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
		'label'							=> 'Header Settings', 'WDV-245',
		'description'				=> 'Background Color',
		'section'						=> 'Navbar',
		'settings'					=> 'header_bg',
    'priority'          => 180,
	)));

  // Link Color
  $wp_customize->add_setting('headerLink', array('default','#000000',));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headerLink', array(
    'label'     =>  '', 'WDV-245',
		'description'	=>	'Link Color',
    'section'   =>  'Navbar',
    'settings'  =>  'headerLink',
    'priority'  =>  190,
  )));
}
add_action('customize_register', 'custom_header_register');


 ?>
