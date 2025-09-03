<?php

function mukto_enque_assets(){
	// theme version 
	$theme_info = wp_get_theme();
	$version = $theme_info->get( 'Version' );
	
	//link css
	wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css?family=Lobster|Poppins:300,400,500,700', array(), '2.0', 'all' );
	
	//direct enqueue
	wp_enqueue_style( 'font-css', get_template_directory_uri().'/assets/fonts/fonts.css', array(), time(), 'all' );
	wp_enqueue_style( 'main_css', get_template_directory_uri().'/assets/css/main.css', array(), time(), 'all' );
	
	// register css
	wp_register_style('theme_css', get_template_directory_uri().'/style.css', array(), $version, 'all');
	wp_enqueue_style('theme_css');
   
	//enqueue js
    wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true );
}
add_action('wp_enqueue_scripts','mukto_enque_assets');



    