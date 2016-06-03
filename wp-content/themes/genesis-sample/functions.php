<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );


/** Move Primary Nav Menu Above Header */

/** Reposition the primary navigation menu and then load the js file */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' ); // I wanted my primary nav fixed at the top of the screen
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_scripts' );
/**
 * Enqueue responsive javascript
 * @author Ozzy Rodriguez
 * @todo Change 'prefix' to your theme's prefix
 */
function prefix_enqueue_scripts() {
	wp_enqueue_script( 'genesis-responsive-menu', get_stylesheet_directory_uri() . '/lib/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true ); // Change 'prefix' to your theme's prefix
}

//* Register widget areas
genesis_register_sidebar( array(
	'id'          	=> 'sales-cta-overlay',
	'name'       	  => __( 'Sales Page CTA', 'cegg' ),
	'description'	  => __( 'Widgets placed here will appear on top of sales page background image.', 'cegg' ),
) );

function be_remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}
add_filter( 'theme_page_templates', 'be_remove_genesis_page_templates' );
