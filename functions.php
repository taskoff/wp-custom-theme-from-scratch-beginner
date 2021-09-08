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

    //  ===== jQuary in the footer

// function marchos_jquery_add_footer()
// {
//     wp_dequeue_script('jquery');
//     wp_dequeue_script('jquery-core');
//     wp_dequeue_script('jquery-migrate');
//     wp_enqueue_script('jquery', false, array(), false, true);
//     wp_enqueue_script('jquery-core', false, array(), false, true);
//     wp_enqueue_script('jquery-migrate', false, array(), false, true);
//     //  ====== add custom-js
//     wp_enqueue_script('boostrapjs', get_template_directory_uri() . './js/bootstrap.min.js', array(), '1.0.0', true);
//     wp_enqueue_script('customjs', get_template_directory_uri() . './js/my-scripts.js', array(), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'marchos_jquery_add_footer');

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

//  ============= Add Post Tumbnails =====================  
add_theme_support('post-thumbnails');

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

//  ============= Correct Excerpt lenght ===================== 

function marchos_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'marchos_custom_excerpt_length', 999 );