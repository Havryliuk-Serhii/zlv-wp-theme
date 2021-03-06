<?php
/** 
 * Bootstrap Walker Nav menu
**/

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
**/
add_filter('nav_menu_item_id', 'filter_menu_id');
add_filter( 'nav_menu_css_class', 'filter_menu_li' );
function filter_menu_li(){
    return array('');   
}
function filter_menu_id(){
    return; 
}
/**
 * Delete the site name at the end of the title
**/
add_filter( 'document_title_parts', function( $parts ){

	if( isset($parts['site']) ) unset($parts['site']);

	return $parts;
});

/**
*  Breadcrumbs
**/
function custom_breadcrumb(){
$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$separator = ' > '; 
	if( is_front_page() ){
 
		if( $pageNum > 1 ) {
			echo '<li class="breadcrumb-item"><a href="' . site_url() . '"><i class="fas fa-home"></i></a></li>' . $separator . $pageNum ;
		} else {
			echo 'Вы находитесь на главной странице';
		}
 
	} else { 
 
		echo '<li class="breadcrumb-item"><a href="' . site_url() . '"><i class="fas fa-home"></i></a></li>' . $separator . '<li class="breadcrumb-item" aria-current="page">' . wp_get_document_title() . '</li>';
  
		if( is_single() ){ 
 
			 echo  '<li class="breadcrumb-item active" aria-current="page"></li>'; 
		} elseif ( is_page() ){ 
 
			'<li class="breadcrumb-item" aria-current="page">' . wp_get_document_title() . '</li>';
 
		} elseif ( is_category() ) {
 
			single_cat_title();
 
		} elseif( is_tag() ) {
 
			single_tag_title();	 
 
		} elseif ( is_404() ) { 
 
			echo 'Ошибка 404';
 
		}
 
		if ( $pageNum > 1 ) { 
			echo ' (' . $pageNum . '-я страница)';
		} 
	} 
}

/**
*  add a special class to the excerpt's <p> element
**/

add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="card-text"', $excerpt);
}
/**
*  Delete square brackets
**/
add_filter('excerpt_more', 'my_func');
function my_func($more) {
	return '';
}
/**
*  Pagination
**/
function zlv_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => false,
        'previous_string' => __( '«', 'zlv' ),
        'next_string'     => __( '»', 'zlv' ),
        'before_output'   => '<ul class="pagination">',
        'after_output'    => '</ul>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'zlv_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    if ( $previous && (1 != $page) )
        $echo .= '<li class="page-item disabled"><a class="page-link" aria-label="Previous" href="' . $previous . '" title="' . __( 'previous', 'zlv') . '"><span aria-hidden="true">' . $args['previous_string'] . '</span></a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="page-item active" aria-current="page"><a class="page-link">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</a></li>';
            } else {
                $echo .= sprintf( '<li class="page-item" aria-current="page"><a class="page-link" href="%s">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li class="page-item"><a class="page-link" aria-label="Next" href="' . $next . '" title="' . __( 'next', 'zlv') . '"><span aria-hidden="true">' . $args['next_string'] . '</span></a></li>';
    
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}
/**
*  Changing comment form fields
*/
add_filter('comment_form_fields', 'zlv_reorder_comment_fields' );
function zlv_reorder_comment_fields( $fields ){
	

	$new_fields = array(); 

	$myorder = array('author','email','comment'); 
	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}
/**
*  Comment markup HTML output
*/
function zlv_list_comment( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
	?>
	<li class="media">
		<div class="media-left">
			<a href="<?php the_author_link(); ?>">
				<?php 
						echo get_avatar( $comment, '64',  'mysterman', '', array('class'=>'media-img') );
				?>
			</a>						
		</div>		
		<div class="media-body">
			<?php
				printf(
					__( '<h4 class="media-heading">%s</h4>' ),
					get_comment_author()
				);			
			?>
			<?php 
				printf(
					__('<h4 class="media-heading"><span class="comment-date">%1$s</span></h4>'),
					get_comment_date()
				);
			?>
			<?php if ( $comment->comment_approved == '0' ) { ?>
			<em class="comment-awaiting-moderation">
				<?php _e( 'Ваш комментарий ожидает модерации', zlv ); ?>
			</em><br/>
			<?php } ?>
			<?php comment_text(); ?>
		
			<div class="reply">
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => $add_below,
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
						)
					)
				); ?>
			</div>
		</div>
	</li>  
	<?php if ( 'div' != $args['style'] ) { ?>
	
	<?php }
}
/**
* Contact form background
**/
function zlv_get_background($field, $cat = null, $position = true, $repeat = true, $size = true){
    if( get_field($field, $cat) ){
    	$bg_position = $position ? 'background-position: 0 0;' : '';
    	$bg_repeat = $repeat ? 'background-repeat: no-repeat;' : '';
    	$bg_size = $size ? 'background-size: cover;' : '';
       return ' style="background-image: url(' . get_field($field, $cat) . '); ' . $bg_position . $bg_repeat . $bg_size .'"';
    }
    return null;
}
/**
*  Names and phone numbers of contact persons 
**/
//  first person
function first_person_name_option(){
		add_settings_field(
		'first_person_name', 
		'ФИО 1', 
		'display_first_person_name',
		'general' 
	);
    
	register_setting(
		'general', 
		'first_person_name_field' 
	);
}
add_action('admin_init', 'first_person_name_option');
function display_first_person_name(){
	echo "<input type='text' class='regular-text' name='first_person_name_field' value='" . esc_attr(get_option('first_person_name_field')) . "'>";
}

function first_person_phone_option(){
		add_settings_field(
		'first_person_phone', 
		'Телефон 1', 
		'display_first_person_phone',
		'general' 
	);
    
	register_setting(
		'general', 
		'first_person_phone_field' 
	);
}
add_action('admin_init', 'first_person_phone_option');
function display_first_person_phone(){
	echo "<input type='text' class='regular-text' name='first_person_phone_field' value='" . esc_attr(get_option('first_person_phone_field')) . "'>";
}
//  second person
function second_person_name_option(){
		add_settings_field(
		'second_person_name', 
		'ФИО 2', 
		'display_second_person_name',
		'general' 
	);
    
	register_setting(
		'general', 
		'second_person_name_field' 
	);
}
add_action('admin_init', 'second_person_name_option');
function display_second_person_name(){
	echo "<input type='text' class='regular-text' name='second_person_name_field' value='" . esc_attr(get_option('second_person_name_field')) . "'>";
}

function second_person_phone_option(){
		add_settings_field(
		'second_person_phone', 
		'Телефон 2', 
		'display_second_person_phone',
		'general' 
	);
    
	register_setting(
		'general', 
		'second_person_phone_field' 
	);
}
add_action('admin_init', 'second_person_phone_option');
function display_second_person_phone(){
	echo "<input type='text' class='regular-text' name='second_person_phone_field' value='" . esc_attr(get_option('second_person_phone_field')) . "'>";
}
//  third person
function third_person_name_option(){
		add_settings_field(
		'third_person_name', 
		'ФИО 3', 
		'display_third_person_name',
		'general' 
	);
    
	register_setting(
		'general', 
		'third_person_name_field' 
	);
}
add_action('admin_init', 'third_person_name_option');
function display_third_person_name(){
	echo "<input type='text' class='regular-text' name='third_person_name_field' value='" . esc_attr(get_option('third_person_name_field')) . "'>";
}

function third_person_phone_option(){
		add_settings_field(
		'third_person_phone', 
		'Телефон 3', 
		'display_third_person_phone',
		'general' 
	);
    
	register_setting(
		'general', 
		'third_person_phone_field' 
	);
}
add_action('admin_init', 'third_person_phone_option');
function display_third_person_phone(){
	echo "<input type='text' class='regular-text' name='third_person_phone_field' value='" . esc_attr(get_option('third_person_phone_field')) . "'>";
}