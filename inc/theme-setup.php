<?php 

/*
 ==================
 Theme support
======================	 */


function mukto_bootstraping(){
    load_theme_textdomain('mukto');
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    register_nav_menu('header_menu',__('Header Menu','mukto'));
    register_nav_menu('footer_menu',__('Footer Menu','mukto'));
}
add_action('after_setup_theme','mukto_bootstraping');


// disable for posts
// add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
// add_filter('use_block_editor_for_post_type', '__return_false', 10);

/* Adding a language class to the body to apply styles individually per language */
// function mukto_language_class($classes){
//     $classes[] = 'language-'.ICL_LANGUAGE_CODE; 
//     return $classes;
//     }
// add_filter('body_class', 'mukto_language_class');