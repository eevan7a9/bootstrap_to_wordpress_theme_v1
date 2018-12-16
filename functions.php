<?php
// We include Wp-Navwalker
require_once 'wp-bootstrap-navwalker.php';

// Theme Support
function e7a9_theme_setup() {
	add_theme_support( 'align-wide' );
	//add Feature Image
		add_theme_support('post-thumbnails');
	//Menu for Navbar
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
		));
	//add posts Formats
		add_theme_support( 'post-formats', array( 'aside') );
//		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}
add_action('after_setup_theme', 'e7a9_theme_setup');


// Set navbar Active State
function e7a9_set_nav_active($classes) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'e7a9_set_nav_active', 10, 2);

// Set Excerpt length
function set_excerpt_lenght() {
	return 50;
}
add_filter('excerpt', 'set_excerpt_lenght');

//adding Widgets
function e7a9_widgets_init(){

	register_sidebar( array( /* Sidebar widget */
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="p-3">',
		'after_widget' => '</div>',
		'before_title'  => '<h4 class="font-italic">',
        'after_title'   => '</h4>',	
	));

	//adding box widgets in front page
	register_sidebar( array(
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="card-body">',
		'after_widget' => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="card-body">',
		'after_widget' => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="card-body">',
		'after_widget' => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));

	register_sidebar( array(
		'name' => 'Footer1',
		'id' => 'footer1',
		'before_widget' => '<div class="col-md-3 col-5 footer-list">',
		'after_widget' => '</div>',
		'before_title'  => '<h4 class="text-light">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Footer2',
		'id' => 'footer2',
		'before_widget' => '<div class="col-md-3 col-5 footer-list">',
		'after_widget' => '</div>',
		'before_title'  => '<h4 class="text-light">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Footer3',
		'id' => 'footer3',
		'before_widget' => '<div class="col-md-3 col-5 footer-list">',
		'after_widget' => '</div>',
		'before_title'  => '<h4 class="text-light">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => 'Footer4',
		'id' => 'footer4',
		'before_widget' => '<div class="col-md-3 col-5 footer-list">',
		'after_widget' => '</div>',
		'before_title'  => '<h4 class="text-light">',
		'after_title'   => '</h4>',
	));
}
add_action('widgets_init', 'e7a9_widgets_init');

//add theme customizer functions
//require get_template_directory().'/inc/customizer.php';
require get_template_directory() . '/inc/customizer.php';