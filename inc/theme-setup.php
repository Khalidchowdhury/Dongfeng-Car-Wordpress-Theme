<?php 



/*=============================================
=             Theme support                   =
=============================================*/

function mukto_bootstraping(){
    load_theme_textdomain('mukto');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'nav_discover'  => __('Discover Menu', 'mukto'),
        'nav_secondary' => __('Secondary Menu', 'mukto'),
        'footer_menu'   => __( 'Footer Menu', 'mukto' ),
    ));
}
add_action('after_setup_theme','mukto_bootstraping');





/*=============================================
=             Allow SVG upload               =
=============================================*/
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';

    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');





/*=============================================
=            Main Menu Walker             =
=============================================*/
class Custom_Nav_Walker extends Walker_Nav_Menu {
    
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<div class="nav-inner-discover">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</div>';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        
        $has_children = in_array('menu-item-has-children', $item->classes);
        
        if ($has_children) {
            $output .= '<div class="nav-tabs-item">'; 
            $output .= '<div class="nav-tabs-discover">';
            $output .= '<p class="nav-discover-text FZHeavy-14 blue" data-text="' . esc_attr($item->title) . '">' . esc_html($item->title) . '</p>';
            $output .= '<svg xmlns="http://www.w3.org/2000/svg" width="15.629" height="11.366" viewBox="0 0 15.629 11.366" class="img arrow-icon">';
            $output .= '<path d="M15.421,6.185l-4.973,4.973a.71.71,0,1,1-1-1l3.76-3.76H.71a.71.71,0,1,1,0-1.421H13.2l-3.76-3.76a.71.71,0,1,1,1-1l4.973,4.973a.71.71,0,0,1,0,1Z" />';
            $output .= '</svg>';
            $output .= '</div>';
        } 
        else {
            $output .= '<a href="' . esc_url($item->url) . '" class="nav-tabs-item FZHeavy-14 blue" data-text="' . esc_attr($item->title) . '">' . esc_html($item->title) . '</a>';
        }
    }
    
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        if ($has_children) {
            $output .= '</div>'; 
        }
    }
}




/*=============================================
=            Footer Menus                    =
=============================================*/

class Footer_Menu_Walker extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        
        $base_classes = 'footer-ref-text FZHeavy-14 white';
        $custom_classes = !empty($item->classes) ? esc_attr(implode(' ', $item->classes)) : '';
        $all_classes = trim($base_classes . ' ' . $custom_classes);
        $url = !empty($item->url) ? esc_url($item->url) : '#';
        $title = esc_html($item->title);
        $data_text = esc_attr(strtoupper($item->title));
        $output .= sprintf(
            '<a href="%s" class="%s" data-text="%s"><span>%s</span></a>',
            $url,
            $all_classes,
            $data_text,
            $title
        );
    }
    
    function start_lvl(&$output, $depth = 0, $args = null) {}
    function end_lvl(&$output, $depth = 0, $args = null) {}
    function end_el(&$output, $item, $depth = 0, $args = null) {}
}