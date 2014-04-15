<?php 
/*main_menu -> Name you will use in your code
* Main Navigation Menu -> name that will appear in the dashobard
* registered menu based on http://codex.wordpress.org/Function_Reference/register_nav_menus
*/
register_nav_menu('main_menu', 'Main navigation menu');

//register custom image sizes for thumbnails and the slider
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
add_image_size('slider', 505, 378, true );

//register widget areas
register_sidebar(array(
	'name'=> 'Home Page Left',
	'id' => 'services',
	'before_widget' => '<div id="secondary_body_widget1">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>',
));
register_sidebar(array(
	'name'=> 'Home Page Center',
	'id' => 'sounds',
	'before_widget' => '<div id="secondary_body_widget2">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>',
));
register_sidebar(array(
	'name'=> 'Home Page Right',
	'id' => 'news',
	'before_widget' => '<div id="secondary_body_widget3">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>',
));

//load jQuery
if (!is_admin()) add_action
	("wp_enqueue_scripts", "cm_jquery_enqueue", 11);
	function cm_jquery_enqueue() {
	   wp_enqueue_script('jquery');
	}

//load flex-slider scripts	
//function fs_scripts(){
//	if (is_page()) {
//	wp_enqueue_style( 'slexstyle1', get_template_directory_uri() . '/js/flexslider/flexslider.css');
//	wp_enqueue_script( 'flexscript1', get_template_directory_uri() . '/js/flexslider/jquery.flexslider.js', array( 'jquery' ), '20120206', false );	
//	wp_enqueue_script( 'flexscript2', get_template_directory_uri() . '/js/flexslider/setup.js', array( 'jquery' ), '20120206', false );	}
//}
//
//add_action( 'wp_enqueue_scripts', 'fs_scripts' );	

//add post excerpt support to pages
add_post_type_support( 'page', 'excerpt' );
?>