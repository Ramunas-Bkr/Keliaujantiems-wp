<?php 

define('KELIAUK_DIR_CSS', get_template_directory_uri() . '/assets/css/');
define('KELIAUK_DIR_JS', get_template_directory_uri() . '/assets/js/');
define('KELIAUK_DIR_IMG', get_template_directory_uri() . '/assets/img/');

function custom_css_js_script() {
    wp_enqueue_style( 'custom-style', KELIAUK_DIR_CSS . 'main.css' );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap', false );
    wp_enqueue_script( 'js-file', KELIAUK_DIR_JS . 'custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_css_js_script');

function wpkeliauk_after_setup() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'wpkeliauk_after_setup' );

add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
    }
  } 
  return $t;
}