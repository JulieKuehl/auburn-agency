<?php
/**
 * Auburnagency functions and definitions
 *
 * @package auburnagency
 */


if ( ! function_exists( 'auburnagency_google_fonts' ) ) :
/**
 * Adds google font support.
 * 
 */
function auburnagency_google_fonts() {
	$query_args = array(
		'family' => 'Muli:400,400italic|Source+Sans+Pro:400,700',

		// Here's an example for changing fonts.
		// 
		// 'family' => 'Open+Sans:400,700|Oswald:700',
		// 'subset' => 'latin,latin-ext',
	);

	wp_register_style( 'source-sans', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	wp_enqueue_style('source-sans');
}
endif; // auburnagency_google_fonts
add_action('wp_enqueue_scripts', 'auburnagency_google_fonts');

/**
 * Add external fontawesome stylesheet
 *
 */
function auburnagency_font_awesome(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','auburnagency_font_awesome');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


if ( ! function_exists( 'auburnagency_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function auburnagency_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Forward, use a find and replace
	 * to change 'auburnagency' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'auburnagency', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'auburnagency' ),
		'utility' => __( 'Utility Menu', 'auburnagency' ),
		'footer' => __( 'Footer Links', 'auburnagency' ),
		'responsive' => __( 'Responsive Menu', 'auburnagency'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'auburnagency_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // auburnagency_setup
add_action( 'after_setup_theme', 'auburnagency_setup' );


if ( ! function_exists( 'auburnagency_widgets_init' ) ) :
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function auburnagency_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'auburnagency' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Twitter Feed', 'auburnagency' ),
		'id'            => 'twitter-feed',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">
		                   <div class="fa-stack fa-2x aligncenter">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x"></i>
							</div><div>',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h1 class="widget-title twitter">FOLLOW <a href="https://twitter.com/aacrop">',
		'after_title'   => '</a></h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'RSS Feeds', 'auburnagency' ),
		'id'            => 'rss-fee',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s rss-item">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer One', 'auburnagency' ),
		'id'            => 'fat-footer-one',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Two', 'auburnagency' ),
		'id'            => 'fat-footer-two',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col span_3_of_12">
							<div class="fa-stack fa-2x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-map-marker fa-stack-1x"></i>
							</div><div class="alignleft">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Three', 'auburnagency' ),
		'id'            => 'fat-footer-three',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col span_3_of_12">
							<div class="fa-stack fa-2x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-phone fa-stack-1x"></i>
							</div><div class="alignleft">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Fat Footer Four', 'auburnagency' ),
		'id'            => 'fat-footer-four',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col span_3_of_12">
							<div class="fa-stack fa-2x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-envelope fa-stack-1x"></i>
							</div><div class="alignleft">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h3 class="footer-widget-title">',
		'after_title'   => '</h3>',
	) );
}
endif; // auburnagency_widgets_init
add_action( 'widgets_init', 'auburnagency_widgets_init' );

//if ( ! function_exists( 'auburnagency_scripts' ) ) :
/**
 * Enqueue scripts and styles.
 */
function auburnagency_scripts() {
	wp_enqueue_style( 'auburnagency-style', get_stylesheet_uri() );

	if ( ! is_admin() ) {

		// Load theme-specific JavaScript with versioning based on last modified time; http://www.ericmmartin.com/5-tips-for-using-jquery-with-wordpress/
		wp_register_script(
			'auburnagency-js-core',
			get_stylesheet_directory_uri() . '/js/core.js',
			array( 'jquery' ),
			filemtime( get_template_directory() . '/js/core.js' ),
			true
		);
		wp_enqueue_script( 'auburnagency-js-core' );

		// Load theme-specific JavaScript
//		wp_register_script(
//			'auburnagency-js-extras',
//			get_stylesheet_directory_uri() . '/js/extras.js',
//			array( 'jquery' ),
//			filemtime( get_template_directory() . '/js/extras.js' ),
//			true
//		);
//		wp_enqueue_script( 'auburnagency-js-extras' );

		// Load jQuery for tabbed displays
		wp_enqueue_script( 'jquery-ui-tabs' );

		// Load JavaScript for responsive tabs
		wp_register_script(
			'auburnagency-js-responsive-tabs',
			get_stylesheet_directory_uri() . '/js/jquery.responsiveTabs.js',
			array( 'jquery' )
		);
		wp_enqueue_script( 'auburnagency-js-responsive-tabs' );
		// Load styles for responsive tabs
		wp_enqueue_style( 'auburnagency-js-responsive-tabs', get_stylesheet_directory_uri() . '/css/responsive-tabs.css' );
	}
}

add_action( 'wp_enqueue_scripts', 'auburnagency_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Enable automatic theme updates.
 */
require_once('wp-updates-theme.php');
new WPUpdatesThemeUpdater_1511( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );

/**
 * Add search icon to nav menu
 */
function add_search_form_to_menu($items, $args) {
	// If this isn't the main navbar menu, do nothing
	if( !($args->theme_location == 'primary') ) // display the search box to the secondary menu, just replacing 'main' with 'secondary'
		return $items;
	// On main menu: put styling around search and append it to the menu items
	return $items . '<li class="menu-item my-nav-menu-search">' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'add_search_form_to_menu', 10, 2);

/*
 * Move Yoast to bottom
 */
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function yoasttobottom() {
	return 'low';
}


/**
 * Register Custom Post Type for Crop Information Center Tabs *
 *
 */
if ( ! function_exists('crop_info_center_tabs') ) {

// Register Custom Post Type
	function crop_info_center_tabs() {

		$labels = array(
			'name'                  => _x( 'Crop Info Center Tabs', 'Post Type General Name', 'auburnagency' ),
			'singular_name'         => _x( 'Crop Info Center Tab', 'Post Type Singular Name', 'auburnagency' ),
			'menu_name'             => __( 'Crop Info Tabs', 'auburnagency' ),
			'name_admin_bar'        => __( 'Crop Info Tabs', 'auburnagency' ),
			'archives'              => __( 'Item Archives', 'auburnagency' ),
			'parent_item_colon'     => __( 'Parent Item:', 'auburnagency' ),
			'all_items'             => __( 'All Items', 'auburnagency' ),
			'add_new_item'          => __( 'Add New Item', 'auburnagency' ),
			'add_new'               => __( 'Add New', 'auburnagency' ),
			'new_item'              => __( 'New Item', 'auburnagency' ),
			'edit_item'             => __( 'Edit Item', 'auburnagency' ),
			'update_item'           => __( 'Update Item', 'auburnagency' ),
			'view_item'             => __( 'View Item', 'auburnagency' ),
			'search_items'          => __( 'Search Item', 'auburnagency' ),
			'not_found'             => __( 'Not found', 'auburnagency' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'auburnagency' ),
			'featured_image'        => __( 'Featured Image', 'auburnagency' ),
			'set_featured_image'    => __( 'Set featured image', 'auburnagency' ),
			'remove_featured_image' => __( 'Remove featured image', 'auburnagency' ),
			'use_featured_image'    => __( 'Use as featured image', 'auburnagency' ),
			'insert_into_item'      => __( 'Insert into item', 'auburnagency' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'auburnagency' ),
			'items_list'            => __( 'Items list', 'auburnagency' ),
			'items_list_navigation' => __( 'Items list navigation', 'auburnagency' ),
			'filter_items_list'     => __( 'Filter items list', 'auburnagency' ),
		);
		$capabilities = array(
			'publish_posts'         => 'edit_others_posts',     // restrict to Editors
			'edit_posts'            => 'edit_others_posts',
			'edit_others_posts'     => 'edit_others_posts',
			'delete_posts'          => 'manage_options',        // restrict to Administrators
			'delete_others_posts'   => 'manage_options',
			'read_private_posts'    => 'edit_others_posts',
			'edit_post'             => 'edit_others_posts',
			'delete_post'           => 'edit_others_posts',
			'read_post'             => 'edit_others_posts',
		);
		$args = array(
			'label'                 => __( 'Crop Info Center Tab', 'auburnagency' ),
			'description'           => __( 'Crop Info Center Tabs', 'auburnagency' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'revisions', ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 20,
			'menu_icon'             => 'dashicons-excerpt-view',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capabilites'           => $capabilities,
//			'capability_type'       => 'post',
//			'map_meta_cap'          => true,
		);
		register_post_type( 'crop_info_tabs', $args );

	}
	add_action( 'init', 'crop_info_center_tabs', 0 );

}

/**
 * Register Custom Post Type for Daily Messages *
 *
 */
// Register Custom Post Type
function daily_messages_cpt() {

	$labels = array(
		'name'                  => _x( 'Daily Messages', 'Post Type General Name', 'auburnagency' ),
		'singular_name'         => _x( 'Daily Message', 'Post Type Singular Name', 'auburnagency' ),
		'menu_name'             => __( 'Daily Messages', 'auburnagency' ),
		'name_admin_bar'        => __( 'Post Type', 'auburnagency' ),
		'archives'              => __( 'Messages Archives', 'auburnagency' ),
		'parent_item_colon'     => __( 'Parent Item:', 'auburnagency' ),
		'all_items'             => __( 'All Messages', 'auburnagency' ),
		'add_new_item'          => __( 'Add New Message', 'auburnagency' ),
		'add_new'               => __( 'Add New', 'auburnagency' ),
		'new_item'              => __( 'New Message', 'auburnagency' ),
		'edit_item'             => __( 'Edit Message', 'auburnagency' ),
		'update_item'           => __( 'Update Message', 'auburnagency' ),
		'view_item'             => __( 'View Message', 'auburnagency' ),
		'search_items'          => __( 'Search Message', 'auburnagency' ),
		'not_found'             => __( 'Not found', 'auburnagency' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'auburnagency' ),
		'featured_image'        => __( 'Featured Image', 'auburnagency' ),
		'set_featured_image'    => __( 'Set featured image', 'auburnagency' ),
		'remove_featured_image' => __( 'Remove featured image', 'auburnagency' ),
		'use_featured_image'    => __( 'Use as featured image', 'auburnagency' ),
		'insert_into_item'      => __( 'Insert into item', 'auburnagency' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'auburnagency' ),
		'items_list'            => __( 'Messages list', 'auburnagency' ),
		'items_list_navigation' => __( 'Messages list navigation', 'auburnagency' ),
		'filter_items_list'     => __( 'Filter message list', 'auburnagency' ),
	);
	$args = array(
		'label'                 => __( 'Daily Message', 'auburnagency' ),
		'description'           => __( 'Daily Messages', 'auburnagency' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'daily_messages', $args );

}
add_action( 'init', 'daily_messages_cpt', 0 );