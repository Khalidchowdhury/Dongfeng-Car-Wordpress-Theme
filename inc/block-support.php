<?php 
/**
 * Block Support
 *
 * @package WordPress
 * @subpackage Custom_Theme
 * @since Custom Theme 1.0
 */

// Add support for custom colors in the block editor
add_theme_support( 'editor-color-palette', array(
    array(
        'name'  => esc_attr__( 'Black', 'mukto' ),
        'slug'  => 'custom-black',
        'color' => '#000',
    ),
    array(
        'name'  => esc_attr__( 'Primary', 'mukto' ),
        'slug'  => 'custom-primary',
        'color' => '#484847',
    ),
    array(
        'name'  => esc_attr__( 'Dark Gray', 'mukto' ),
        'slug'  => 'custom-dark-gray',
        'color' => '#757575',
    ),
    array(
        'name'  => esc_attr__( 'Mid Gray', 'mukto' ),
        'slug'  => 'custom-min-gray',
        'color' => '#d8d8d8',
    ),
    array(
        'name'  => esc_attr__( 'Light Gray', 'mukto' ),
        'slug'  => 'custom-light-gray',
        'color' => '#e9e8e8',
    ),
    array(
        'name'  => esc_attr__( 'Almost White', 'mukto' ),
        'slug'  => 'custom-almost-white',
        'color' => '#f4f4f4',
    ),
    array(
        'name'  => esc_attr__( 'White', 'mukto' ),
        'slug'  => 'custom-white',
        'color' => '#fff',
    ),
    
) );

// Add support for custom font sizes in the block editor
add_theme_support( 'editor-font-sizes', array(
    array(
        'name'      => esc_attr__( 'Small', 'mukto' ),
        'shortName' => esc_attr__( 'S', 'mukto' ),
        'size'      => 12,
        'slug'      => 'small',
    ),
    array(
        'name'      => esc_attr__( 'Normal', 'mukto' ),
        'shortName' => esc_attr__( 'M', 'mukto' ),
        'size'      => 16,
        'slug'      => 'normal',
    ),
    array(
        'name'      => esc_attr__( 'Large', 'mukto' ),
        'shortName' => esc_attr__( 'L', 'mukto' ),
        'size'      => 20,
        'slug'      => 'large',
    ),
    array(
        'name'      => esc_attr__( 'Huge', 'mukto' ),
        'shortName' => esc_attr__( 'XL', 'mukto' ),
        'size'      => 36,
        'slug'      => 'huge',
    ),
) );

// editor styles
add_theme_support( 'editor-styles' );
add_editor_style( 'assets/css/editor-style.css' );



/**
 * Add a custom block category.
 */
function mukto_block_category( $categories, $post ) {
	$custom_category = array(
        'slug' => 'mukto',
        'title' => 'Mukto',
        'icon' => 'awards',
        'position' => 1,
    );

    // Extract position from the custom category array.
    $position = $custom_category['position'];

    // Remove position from the custom category array.
    unset( $custom_category['position'] );

    // Insert the custom category at the desired position.
    array_splice( $categories, $position, 0, array( $custom_category ) );

    return $categories;
}
add_filter( 'block_categories_all', 'mukto_block_category', 10, 2);

/**
 * Register ACF blocks.
 *
 */

function mukto_register_acf_blocks() {
    $blocks = array(
        'rich-text',
    );
    foreach ( $blocks as $block ) {
        register_block_type( __DIR__ . '/../blocks/' . $block );
    }
}
add_action( 'init', 'mukto_register_acf_blocks' );

