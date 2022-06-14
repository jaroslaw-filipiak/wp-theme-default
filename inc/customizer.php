<?php
/**
 * szymon-janiak Theme Customizer
 *
 * @package szymon-janiak
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function szymon_janiak_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'szymon_janiak_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'szymon_janiak_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'szymon_janiak_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function szymon_janiak_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function szymon_janiak_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function szymon_janiak_customize_preview_js() {
	wp_enqueue_script( 'szymon-janiak-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'szymon_janiak_customize_preview_js' );


/**
 * Removes some menus by page.
 */
function wpdocs_remove_menus(){
   

	remove_menu_page( 'jetpack' );                    
	remove_menu_page( 'edit.php' );                   
	remove_menu_page( 'edit-comments.php' );          
	
  }
  add_action( 'admin_menu', 'wpdocs_remove_menus' );

  if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Szymon Janiak : Opcje globalne',
		'menu_title'	=> 'SJ',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}

  ?>