<?php
/**
 * wdv-245 Theme Customizer
 *
 * @package wdv-245
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wdv_245_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Remove some defaults from customizer
	$wp_customize->remove_control('blogdescription');
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('static_front_page');

	// Change defaults in Customizer
	$wp_customize->get_section('title_tagline')->title=__('Header');

	// Add Panels
	$wp_customize->add_panel( 'front_page', array(
		'priority'					=> 50,
		'title'							=> __('Front Page', 'Austin Drake Theme'),
		'capability'				=> 'edit_theme_options',
	));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'wdv_245_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'wdv_245_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'wdv_245_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wdv_245_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wdv_245_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wdv_245_customize_preview_js() {
	wp_enqueue_script( 'wdv-245-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wdv_245_customize_preview_js' );
