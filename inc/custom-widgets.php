<?php 
function blog_sidebar(){
    
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'mukto' ),
        'id' => 'sidebar-blog',
        'description' => __( 'Blog wedgets show here', 'mukto' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
add_action('widgets_init','blog_sidebar');



if(!class_exists('CtaWidget')) {

  class CtaWidget extends WP_Widget {

    /**
    * Sets up the widgets name etc
    */
    public function __construct() {
      $widget_ops = array(
        'classname' => 'service_box',
        'description' => 'Service Box wedget',
      );
      parent::__construct( 'service_box', 'Service Box', $widget_ops );
    }

    /**
    * Outputs the content of the widget
    *
    * @param array $args
    * @param array $instance
    */
    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }

      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      $title = get_field( 'title', $widget_id ) ? get_field( 'title', $widget_id ) : '';
      $image = get_field( 'background', $widget_id );
      $btn_link = get_field( 'link', $widget_id ) ? get_field( 'link', $widget_id ) : '#';

      echo $args['before_widget'];
?>

<div class="service_small_box">
    <a href="<?php echo esc_url($btn_link)?>">
        <div class="ssbox_wrapper" style='background:url(<?php echo $image['sizes']['medium']; ?>);background-size:cover;background-position:center'>
            <?php echo esc_html($title) ?>
        </div>
    </a>
</div>

<?php
      echo $args['after_widget'];
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
    	// outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update( $new_instance, $old_instance ) {
    	// processes widget options to be saved
    }

  }

}

/**
 * Register our CTA Widget
 */
function register_service_box()
{
  register_widget( 'CtaWidget' );
}
add_action( 'widgets_init', 'register_service_box' );


