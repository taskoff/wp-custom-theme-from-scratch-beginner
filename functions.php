<?php

//  ============= Add Styles and scripts =====================

function marchos_scripts_enqueue () {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . './css/bootstrap.min.css', array(), '5.0.2', 'all');
        wp_enqueue_style('my-custom', get_template_directory_uri() . './css/my-custom-style.css', array(), '1.0.0', 'all');
            //  ==== add jquery in footer
        wp_dequeue_script('jquery');
        wp_dequeue_script('jquery-core');
        wp_dequeue_script('jquery-migrate');
        wp_enqueue_script('jquery', false, array(), false, true);
        wp_enqueue_script('jquery-core', false, array(), false, true);
        wp_enqueue_script('jquery-migrate', false, array(), false, true);
            //  ==== add custom-js
        wp_enqueue_script('boostrapjs', get_template_directory_uri() . './js/bootstrap.min.js', array(), '1.0.0', true);
        wp_enqueue_script('customjs', get_template_directory_uri() . './js/my-scripts.js', array(), '1.0.0', true);
               
    }

add_action('wp_enqueue_scripts', 'marchos_scripts_enqueue');

   
//  ============= Add Menus ===================== 

function marchos_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Menu');
    register_nav_menu('secondary', 'Secondary Footer Menu');
}

add_action('after_setup_theme', 'marchos_theme_setup');

        // ==== add class for li
add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item';
  return $classes;
}
        // ==== add class for a
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');

//  ============= Theme Support =====================  

add_theme_support('post-thumbnails');
add_theme_support('html5',array('search-form'));
add_theme_support( 'custom-logo' );

//  ============= Register Sidebar and Widget Area ===================== 

function marchos_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(	
			'name'	=> 'footer-widget-area',
			'id'	=> 'footer-widget-area',
			'class'	=> 'custom',
			'description' => 'Footer Widget Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
}
add_action('widgets_init','marchos_widget_setup');

//  ============= Correct Excerpt lenght And remove [...]===================== 

function marchos_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'marchos_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//  ============= Hide WP Version in Head =====================

function marchos_remove_version() {
	return '';
}
add_filter('the_generator', 'marchos_remove_version');

//  ============= ADD Custom Post Type =====================

function awesome_custom_post_type (){
	
	$labels = array(
		'name' => 'Проекти',
		'singular_name' => 'Проекти',
		'add_new' => 'Добави нов',
		'all_items' => 'Всички',
		'add_new_item' => 'Добави',
		'edit_item' => 'Редактирай',
		'new_item' => 'Нов',
		'view_item' => 'Виж',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','awesome_custom_post_type');


// require get_template_directory() . '/inc/walker-class.php';