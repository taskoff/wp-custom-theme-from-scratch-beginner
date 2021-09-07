<?php

//  ============= Add Styles and scripts =====================

function marchos_scripts_enqueue () {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . './css/bootstrap.min.css', array(), '5.0.2', 'all');
        wp_enqueue_style('my-custom', get_template_directory_uri() . './css/my-custom-style.css', array(), '1.0.0', 'all');

        wp_dequeue_script('jquery');
        wp_dequeue_script('jquery-core');
        wp_dequeue_script('jquery-migrate');
        wp_enqueue_script('jquery', false, array(), false, true);
        wp_enqueue_script('jquery-core', false, array(), false, true);
        wp_enqueue_script('jquery-migrate', false, array(), false, true);

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