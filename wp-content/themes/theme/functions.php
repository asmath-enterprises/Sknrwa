<?php

function themeslug_enqueue_style() {
    wp_enqueue_style( 'my-theme', 'style.css', false );
}
 
function themeslug_enqueue_script() {
    wp_enqueue_script( 'my-js', 'filename.js', false );
}
 
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

if ( ! function_exists( 'sknwa_setup' ) ) :

    function sknwa_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-thumbnails', array( 'post' ) );      
        add_theme_support( 'post-thumbnails', array( 'page' ) ); 
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        add_theme_support( 'menus' );
      

        register_nav_menus( array(

            'top-menu' => __('Top Menu','theme'),
        ));
    }
endif;

add_action( 'after_setup_theme', 'sknwa_setup' );




function insert_jquery(){
 wp_enqueue_script('jquery');
}
add_action('init', 'insert_jquery');



//custom image
add_image_size('slider_image_large', 2560, 785, true);
add_image_size('slider_image_small', 892, 408, false);









//add widgets
function desktop_register_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer Area 5',
            'id' => 'footer-5',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
     
}
add_action( 'widgets_init', 'desktop_register_widgets_init' );


//font icon
function wpb_load_fa() {
 
    wp_enqueue_script( 'wpb-fa', 'https://use.fontawesome.com/123456abc.js', array(), '1.0.0', true );
     
    }
     
    add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );
 
if(function_exists('acf_add_options_page')){
    acf_add_options_page();
    acf_add_options_sub_page('Activities & Events');
    acf_add_options_sub_page('Facilities');
    acf_add_options_sub_page('Contact Us');
   
}
