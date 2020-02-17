<?php
show_admin_bar(false);

if ( ! function_exists( 'zlv_setup' ) ) :
	function zlv_setup() {
		add_theme_support( 'title-tag' );

		/**
 		* Register post-thumbnails.
		**/
		add_theme_support( 'post-thumbnails' );

		/**
 		* Register menu.
		**/
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'zlv' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'zlv_setup' );

/**
 * Register widget area.
**/
function zlv_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zlv' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zlv' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'zlv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zlv_scripts() {
	// add styles
	wp_enqueue_style( 'zlv-style', get_stylesheet_uri() );
	wp_enqueue_style( 'zlv-grid-style', get_template_directory_uri() . '/css/bootstrap-grid.css');
	wp_enqueue_style( 'zlv-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'zlv-popup-style', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'zlv-fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array(), '5.11.2' );
	wp_enqueue_style( 'zlv-main-style', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'zlv-media-style',  get_template_directory_uri() . '/css/media.css');
	// add scripts
	wp_enqueue_script( 'zlv-jquery-slim',  get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array(),'3.3.1', true);
	wp_enqueue_script( 'zlv-popper-script', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
	wp_enqueue_script( 'zlv-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'zlv-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array(), '', true );
	wp_enqueue_script( 'zlv-main-script', get_template_directory_uri() . '/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zlv_scripts' );

/** 
 * Bootstrap Walker Nav menu
*/

class Bootstrap_Menu_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

      if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
        $t = '';
        $n = '';
      } else {
        $t = "\t";
        $n = "\n";
      }
      $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      // Filters the arguments for a single nav menu item
      $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

      // Filters the CSS class(es) applied to a menu item's list item element
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      // Filters the ID applied to a menu item's list item element
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $class_names .'>';

      // it would be better to enter the class in Appearance -> Menus -> Screen Options -> CSS classes
      // $output .= $indent . '<li' . $id . $class_names .'>';
      $output .= $indent . '<li class="nav-item">';

      $atts = array();
      $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

      // Filters the HTML attributes applied to a menu item's anchor element
      $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

      $attributes = '';
      foreach ( $atts as $attr => $value ) {
        if ( ! empty( $value ) ) {
          $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
          $attributes .= ' ' . $attr . '="' . $value . '"';
        }
      }
      $title = apply_filters( 'the_title', $item->title, $item->ID );

      // Filters a menu item's title
      $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

      $item_output = $args->before;
      $item_output .= '<a class="nav-link js-scroll-trigger"'. $attributes .'>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

	  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
/**
 * Delete menu item class
 */
add_filter('nav_menu_item_id', 'filter_menu_id');
add_filter( 'nav_menu_css_class', 'filter_menu_li' );
function filter_menu_li(){
    return array('');   
}
function filter_menu_id(){
    return; 
}