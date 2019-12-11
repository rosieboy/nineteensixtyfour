<?php

// Load style sheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
  
    wp_register_style('lightbox', get_template_directory_uri() . '/css/lightbox.css', array(), false, 'all');
    wp_enqueue_style('lightbox');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
    wp_register_script('lightbox', get_template_directory_uri() . '/js/lightbox.js', 'jquery', false, true);
    wp_enqueue_script('lightbox');
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('gallery');
add_theme_support('caption');


// Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'primary' => __( 'Primary Menu', 'Nineteen Sixtyfour' ),
    )
);

// Custom image sizes
// Install force regenerate thumbnails
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

// Register sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>',
            'class' => 'page-sidebar-widget',
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>',
            'class' => 'blog-sidebar-widget',
        )
    );

    register_sidebar(
        array(
            'name' => 'Image Gallery',
            'id' => 'image-gallery',
            'before_widget' => '',
            'after_widget' => '',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>',
            'class' => 'image-gallery-widget',
        )
    );

}
add_action('widgets_init', 'my_sidebars');

// Integrate a Bootstrap Navbar Into a WordPress Theme.
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function my_first_post_type() {

    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'hierarchical' => true, // Page or Post type of content
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        //'rewrite' => array('slug' => 'my-cars'),
        'menu_icon'   => 'dashicons-admin-tools',
    );

    register_post_type('cars', $args);

}
add_action('init', 'my_first_post_type');

function my_first_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => true, // Page or Post type of content
    );

    register_taxonomy('brands', array('cars'), $args);

}
add_action('init', 'my_first_taxonomy');

