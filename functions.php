<?php 
/*main_menu -> Name you will use in your code
* Main Navigation Menu -> name that will appear in the dashobard
*/
//registered menu based on http://codex.wordpress.org/Function_Reference/register_nav_menus

register_nav_menu('main_menu', 'Main navigation menu');

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

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
?>