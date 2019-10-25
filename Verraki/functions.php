<?php 
function namespace_theme_stylesheets() {
    wp_enqueue_style( 'fonts',  get_template_directory_uri() .'/assets/css/fonts.css', array(), null, 'all' );
   wp_enqueue_style( 'front_end',  get_template_directory_uri() .'/assets/css/front_end.css', array(), null, 'all' );
	wp_enqueue_style( 'preset',  get_template_directory_uri() .'/assets/css/preset.css', array(), null, 'all' );
	  wp_enqueue_script('script', get_theme_file_uri('/assets/js/script'), NULL, microtime(), false);
	  wp_enqueue_script('jquery.flexslider-min', get_theme_file_uri('/assets/js/jquery.flexslider-min.js'), NULL, microtime(), false);
	  wp_enqueue_script( 'jquery-1.8.2', get_theme_file_uri('/assets/js/jquery-1.8.2.js'), NULL, microtime(), false); 
	  wp_enqueue_script( 'prefixfree-1.0.7', get_theme_file_uri('/assets/js/prefixfree-1.0.7.js') , NULL, microtime(), false);
	  wp_enqueue_script( 'jquery-scrolltofixed', get_theme_file_uri('/assets/js/jquery-scrolltofixed.js') , NULL, microtime(), false);
}
add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets' );
?>