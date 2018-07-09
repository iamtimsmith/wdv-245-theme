<?php
function custom_footer_register($wp_customize) {
    /**
    * Add Cover section in Customizer
    *
    */
  	$wp_customize->add_section( 'Footer', array(
  		'title'		=>	__('Footer', 'WDV-245'),
      'panel'   => 'front_page',
      'priority'  =>  70,
  		'capability'	=>	'edit_theme_options',
  	));

    $wp_customize->add_setting( 'footer_bg');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_bg', array(
      'label'   =>  'Footer Settings', 'WDV-245',
      'description'   =>  'Background Color',
      'section'     =>  'Footer',
      'settings'    =>  'footer_bg',
    )));

    $wp_customize->add_setting( 'footer_text');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_text', array(
      'label'   =>  '', 'WDV-245',
      'description'   =>  'Text Color',
      'section'     =>  'Footer',
      'settings'    =>  'footer_text',
    )));

    $wp_customize->add_setting( 'footer_link');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_link', array(
      'label'   =>  '', 'WDV-245',
      'description'   =>  'Link Color',
      'section'     =>  'Footer',
      'settings'    =>  'footer_link',
    )));
}
add_action('customize_register', 'custom_footer_register');
 ?>
