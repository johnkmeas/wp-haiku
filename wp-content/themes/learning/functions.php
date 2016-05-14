<?php

function learning_resources() {
	//wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/main.css',false,'1.1','all');
 
}

add_action('wp_enqueue_scripts', 'learning_resources');

// Get top ancestor
function get_top_ancestor_id() {
	global $post;

	if ($post -> post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post -> ID));
		return $ancestors[0];
	}
	return $post -> ID;
}

// Does page have children?
function has_children() {
	global $post;

	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
}

// Customize excerpt word count
function custom_excerpt_length() {
	return 30;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Custom Theme Setup
function learningWordpress_setup(){

// Navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		));

// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	add_image_size('splash-image', 920, 700, array('left', 'top'));

//Add Post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learningWordpress_setup');


// Add our widget locations
function ourWidgetInit() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
	));
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2'
	));		
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3'
	));	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4'
	));		
}	



add_action('widgets_init', 'ourWidgetInit');