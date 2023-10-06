<?php
// theme title
add_theme_support( 'title-tag' );


// Theme CSS and Jquery file calling
function altatech_css_js_file_calling(){
   wp_enqueue_style( 'altatech-style', get_stylesheet_uri() );

   // register the css
   wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', [],'5.3.2','all' );
   wp_register_style('customcss',get_template_directory_uri().'/assets/css/custom.css',[],'1.0.0' );
   // enqueue  css
   wp_enqueue_style('bootstrap');
   wp_enqueue_style('customcss');


   // jquery 
//    wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',[],'5.3.2','true');
   wp_enqueue_script('customjs',get_template_directory_uri().'/assets/js/main.js',[],'1.0.0','true');





}
add_action( 'wp_enqueue_scripts','altatech_css_js_file_calling');