<?php

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
			'menu-1' => esc_html__( 'Primary', 'zlv' ),
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
	wp_enqueue_style( 'vetapteka-media',  get_template_directory_uri() . '/css/media.css');
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