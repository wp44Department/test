<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");

   wp_enqueue_style( 'fontawsome',get_template_directory_uri() . '/assets/css/fontawesome.css');
   wp_enqueue_style( 'tooplate',get_template_directory_uri() .'/assets/css/tooplate-main.css');
   wp_enqueue_style( 'owl',get_template_directory_uri() .'/assets/css/owl.css');
   wp_enqueue_style( 'bootstrap',get_template_directory_uri() .'/vendor/bootstrap/css/bootstrap.min.css');

   wp_enqueue_script( 'jquery-min',get_template_directory_uri() .'/vendor/jquery/jquery.min.js');
   wp_enqueue_script( 'bundle-min',get_template_directory_uri() .'/vendor/bootstrap/js/bootstrap.bundle.min.js');
   wp_enqueue_script( 'owl-js',get_template_directory_uri() .'/assets/js/owl.js');
   wp_enqueue_script( 'accordations-js',get_template_directory_uri() .'/assets/js/accordations.js');
   wp_enqueue_script( 'main',get_template_directory_uri() .'/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
               register_sidebar( array(
                               'name'          => 'Sidebar',
                               'id'            => 'sidebar',
                               'before_widget' => '<div>',
                               'after_widget'  => '</div>',
                               'before_title'  => '<h2>',
                               'after_title'   => '</h2>',
               ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );