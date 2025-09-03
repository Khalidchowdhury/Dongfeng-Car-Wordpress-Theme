<?php


 

// Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' => 2
	));

}


//acf map
// function my_acf_init() {
	
// 	acf_update_setting('google_api_key', 'XXXXXXXXXXXXXXXXX');
// }
// add_action('acf/init', 'my_acf_init');