<?php 




// Custom Post Type: Features
function create_features_cpt() {

    $labels = array(
        'name'                  => _x( 'Features', 'Post Type General Name', 'mukto' ),
        'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'mukto' ),
        'menu_name'             => __( 'Features', 'mukto' ),
        'name_admin_bar'        => __( 'Feature', 'mukto' ),
        'add_new'               => __( 'Add New Feature', 'mukto' ),
        'add_new_item'          => __( 'Add New Feature', 'mukto' ),
        'new_item'              => __( 'New Feature', 'mukto' ),
        'edit_item'             => __( 'Edit Feature', 'mukto' ),
        'view_item'             => __( 'View Feature', 'mukto' ),
        'all_items'             => __( 'All Features', 'mukto' ),
        'search_items'          => __( 'Search Features', 'mukto' ),
        'not_found'             => __( 'No features found', 'mukto' ),
        'not_found_in_trash'    => __( 'No features found in Trash', 'mukto' ),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-star-filled',
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'features' ),
        'show_in_rest'          => true,
        'taxonomies'            => array('feature_category'),
    );

    register_post_type( 'features', $args );
}
add_action( 'init', 'create_features_cpt' );

// Feature Categories
function create_feature_category_taxonomy() {

    $labels = array(
        'name'              => _x( 'Feature Categories', 'taxonomy general name', 'mukto' ),
        'singular_name'     => _x( 'Feature Category', 'taxonomy singular name', 'mukto' ),
        'search_items'      => __( 'Search Categories', 'mukto' ),
        'all_items'         => __( 'All Categories', 'mukto' ),
        'parent_item'       => __( 'Parent Category', 'mukto' ),
        'parent_item_colon' => __( 'Parent Category:', 'mukto' ),
        'edit_item'         => __( 'Edit Category', 'mukto' ),
        'update_item'       => __( 'Update Category', 'mukto' ),
        'add_new_item'      => __( 'Add New Category', 'mukto' ),
        'new_item_name'     => __( 'New Category Name', 'mukto' ),
        'menu_name'         => __( 'Feature Categories', 'mukto' ),
    );

    $args = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'feature-category' ),
        'show_in_rest'      => true, 
    );

    register_taxonomy( 'feature_category', array( 'features' ), $args );
}
add_action( 'init', 'create_feature_category_taxonomy' );




// number_to_word($j); This function converts a number to its corresponding word representation.
function number_to_word($number) {
    $words = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty'
    );

    if (array_key_exists($number, $words)) {
        return 'main-' . $words[$number] . '-wrapper';
    } else {
        return $number; // Return the number itself if it's out of range
    }
}







