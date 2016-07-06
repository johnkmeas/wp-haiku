<?php

function learning_resources() {
	//https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet
	wp_enqueue_style( 'icons', '//fonts.googleapis.com/icon?family=Material+Icons', array(), '4.0.3' );
	wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css?family=Oswald' );
	wp_enqueue_style( 'iconsa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.0.3' );
	//wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'style', 
		get_stylesheet_uri()  );

 
}

add_action('wp_enqueue_scripts', 'learning_resources');

function material_resources(){

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.min.js', array( 'script' ), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'material_resources');


// Get top ancestor
function get_top_ancestor_id() {
	global $post;
	$class = "";
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
	return 50;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Custom Theme Setup
function learningWordpress_setup(){

// Navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		'mobile' => __('Mobile Menu')
		));

// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 320, 320, true);
	add_image_size('icon-thumbnail', 200, 200, true);
	add_image_size('action-thumbnail', 300, 200, true);
	add_image_size('banner-image', 960, 320, array('left', 'top'));
	add_image_size('splash-image', 960, 540, array('left', 'top'));

//Add Post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learningWordpress_setup');


// Add our widget locations
function ourWidgetInit() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item center">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title center">',
		'after_title' => '</h3>'
	));
	register_sidebar( array(
		'name' => 'Sidebar 2',
		'id' => 'sidebar2',
		'before_widget' => '<div class="newsletter row widget-item center"><div class="col s12 m6 offset-m3">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title center">',
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

// Customize apperance options
function customizerTheme( $wp_customize) {
	
	$wp_customize->add_setting('link_color', array(
			'default' => '#F3FFE2',
			'transport' => 'refresh',
	));
	$wp_customize->add_setting('btn_color', array(
			'default' => '#2CA0DB',
			'transport' => 'refresh',
	));
	$wp_customize->add_setting('nav_color', array(
			'default' => '#000000',
			'transport' => 'refresh',
	));	
	$wp_customize->add_setting('body_color', array(
			'default' => '#F7F9CB',
			'transport' => 'refresh',
	));				

	$wp_customize->add_section('standard_colors', array(
			'title' => __('Standard Colors', 'learnin_resources'),
			'priority' => 30,
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
			'label' => __('Link Color', 'learnin_resources'),
			'section' => 'standard_colors',
			'settings' => 'link_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_color', array(
			'label' => __('Button Color', 'learnin_resources'),
			'section' => 'standard_colors',
			'settings' => 'btn_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_color', array(
			'label' => __('Navigation', 'learnin_resources'),
			'section' => 'standard_colors',
			'settings' => 'nav_color',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_color', array(
			'label' => __('Body Colour', 'learnin_resources'),
			'section' => 'standard_colors',
			'settings' => 'body_color',
	) ) );				
}

add_action('customize_register', 'customizerTheme' );


// Output Customize CSS 
function customizerCSScolor() { ?>
	<style type="text/css">
		nav ul a:link,
		nav ul a:visited {
			color: <?php echo get_theme_mod( 'link_color'); ?>;
		}

		nav ul li a:hover {
			background-color: <?php echo get_theme_mod( 'btn_color'); ?>;
		}

		.site-header nav ul li.current-menu-item a:link, 
		.site-header nav ul li.current-menu-item a:visited,
		.site-header nav ul li.current-page-ancestor a:link, 
		.site-header nav ul li.current-page-ancestor a:visited,
		div.hd-search #searchsubmit {
			background-color: <?php echo get_theme_mod( 'btn_color'); ?>;
		}

		.site-nav {
	  		width: 100%;
	  		background-color: <?php echo get_theme_mod( 'nav_color'); ?>; 
	  	}

	  	body {
	  		background-color: <?php echo get_theme_mod( 'body_color'); ?>;
	  	}

	</style>
<?php }

add_action('wp_head', 'customizerCSScolor');

function image_uploader_customizer( $wp_customize ) {
    
    // logo uploader
    $wp_customize->add_section( 'learning_logo_section' , array(
    'title'       => __( 'Logo', 'learning' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
    $wp_customize->add_setting( 'learning_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'learning_logo', array(
    'label'    => __( 'Logo', 'learning' ),
    'section'  => 'learning_logo_section',
    'settings' => 'learning_logo',
) ) );

    //image uploader
    $wp_customize->add_section( 'learning_hero_section' , array(
    'title'       => __( 'Hero', 'learning' ),
    'priority'    => 30,
    'description' => 'Upload a image for the hero.',
) );
    $wp_customize->add_setting( 'learning_hero' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'learning_hero', array(
    'label'    => __( 'Hero', 'learning' ),
    'section'  => 'learning_hero_section',
    'settings' => 'learning_hero',
) ) );

       //icon 1 uploader
    $wp_customize->add_section( 'icon_1_section' , array(
    'title'       => __( 'Icon 1', 'learning' ),
    'priority'    => 30,
    'description' => 'Upload a image for the first icon.',
) );
    $wp_customize->add_setting( 'learning_icon_1' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'learning_icon_1', array(
    'label'    => __( 'Icon 1', 'learning' ),
    'section'  => 'learning_hero_section',
    'settings' => 'learning_icon_1',
) ) );


}
add_action( 'customize_register', 'image_uploader_customizer' );

//exclude category
function exclude_category($query) {
if ( $query->is_home() ) {
$query->set('cat', '-10');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');

//exlcude category from widgets
function exclude_widget_categories($args){
$exclude = "10"; // The IDs of the excluding categories
$args["exclude"] = $exclude;
return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");


function remove_my_categories( $wp_query ) {
  // 61 = Daily Tweets, 74 = Testing
  $remove_cat = '-10, -26';
 
  // remove from archives (except category archives), feeds, search, and home page, but not admin areas
  if( (is_home() || is_feed() || is_search() || ( is_archive() && !is_category() )) && !is_admin()) {
    set_query_var('cat', $remove_cat);
    //which is merely the more elegant way to write:
    //$wp_query->;set('cat', '-' . $remove_cat);
  }
}
 
add_action('pre_get_posts', 'remove_my_categories' );

function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
