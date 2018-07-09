<?php

function custom_frontpage_hero_register($wp_customize) {

  /**
  * Add Hero section in Customizer
  *
  */
	$wp_customize->add_section( 'Hero', array(
    'title'		=>	__('Hero', 'WDV-245'),
    'priority' => 50,
		'panel'		=>	'front_page',
		'capability'	=>	'edit_theme_options',
	));

  /**
  * Add controls to the Hero section in Customizer
  *
  */
  // Add Hero image
  $wp_customize->add_setting ('hero');
  $wp_customize->add_control ( new WP_Customize_Image_Control( $wp_customize, 'hero', array(
    'label'							=> __('Hero', 'WDV-245'),
    'section'						=> 'Hero',
    'settings'					=> 'hero',
  )));

  /**
  * Add Background Color in Customizer
  *
  */
  $wp_customize->add_setting('hero_bg_color', array('default' => '#ffffff'));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_bg_color', array(
    'title'   =>  '', 'WDV-245',
    'description' => 'Background Color',
    'section' =>  'Hero',
    'settings'  =>  'hero_bg_color',
  )));

  /**
  * Add Text Color in Customizer
  *
  */
  $wp_customize->add_setting('hero_color', array('default' => '#ffffff'));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_color', array(
    'title'   =>  '', 'WDV-245',
    'description' => 'Text Color',
    'section' =>  'Hero',
    'settings'  =>  'hero_color',
  )));

  // Add Hero Heading
  $wp_customize->add_setting ( 'hero_text');
  $wp_customize->add_control ( 'hero_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Heading',
    'section'						=> 'Hero',
    'settings'					=> 'hero_text',
  ));

  // Add Hero Sub Heading
  $wp_customize->add_setting ( 'hero_subheading' );
  $wp_customize->add_control( 'hero_subheading', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Subheading',
    'section'						=> 'Hero',
    'settings'					=> 'hero_subheading',
  ));

  // Add Hero Button
  $wp_customize->add_setting ( 'hero_button', array('default' => 'true') );
  $wp_customize->add_control( 'hero_button', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Show Button',
    'section'						=> 'Hero',
    'settings'					=> 'hero_button',
    'type'              => 'radio',
    'choices'           => array(
          'true'  => 'True',
          'false' => 'False'
    )
  ));
  $wp_customize->add_setting ( 'hero_button_text' );
  $wp_customize->add_control( 'hero_button_text', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Button Text',
    'section'						=> 'Hero',
    'settings'					=> 'hero_button_text',
  ));

  $wp_customize->add_setting( 'hero_button_url' );
  $wp_customize->add_control( 'hero_button_url', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Button Link',
    'section'						=> 'Hero',
    'settings'					=> 'hero_button_url',
  ));

  $wp_customize->add_setting ( 'hero_button_color', array('default' => 'black') );
  $wp_customize->add_control( 'hero_button_color', array(
    'label'							=> __('', 'WDV-245'),
    'description'       => 'Button Color',
    'section'						=> 'Hero',
    'settings'					=> 'hero_button_color',
    'type'              => 'radio',
    'choices'           => array(
          'is-black'      => 'Black',
          'is-light'      => 'Grey',
          'is-link'       => 'Blue',
          'is-success'    => 'Green',
          'is-warning'    => 'Yellow',
          'is-danger'     => 'Red',
    )
  ));

}
add_action('customize_register', 'custom_frontpage_hero_register');


 ?>