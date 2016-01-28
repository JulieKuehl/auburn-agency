<?php

/*
Plugin Name: Accordion-Wp
Plugin URI: http://www.themepoints.com
Description: Wp Accordion is a fully responsive and jquery WordPress plugin that offering a modern and engaging user experience.
Version: 1.1
Author: themepoints
Author URI: http://www.themepoints.com
License URI: http://www.themepoints.com/copyright/

*/


if ( ! defined( 'ABSPATH' ) ) exit;

/***************************************
wp accordion plugins path register
***************************************/


require_once( plugin_dir_path( __FILE__ ) . 'theme/theme.php');	
define('CUSTOM_ACCORDION_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/***************************************
wp accordion admin enqueue scripts
***************************************/

function custom_accordion_active_script()
	{
	wp_enqueue_script('jquery');
	wp_enqueue_script('accordion-responsive-js', plugins_url( '/js/responsive-accordion.min.js', __FILE__ ), array('jquery'), '1.0', false);
	wp_enqueue_style('accordion-responsive-css', CUSTOM_ACCORDION_PLUGIN_PATH.'css/responsive-accordion.css');
	wp_enqueue_style('accordion-main-css', CUSTOM_ACCORDION_PLUGIN_PATH.'css/style.css');
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('accordion-wp-color-picker', plugins_url(), array( 'wp-color-picker' ), false, true );
	}
add_action('init', 'custom_accordion_active_script');





/***************************************
wp accordion custom post type setting
***************************************/

function custom_accordion_post_register() {
 
        $labels = array(
                'name' => _x('Accordion', 'post type general name'),
                'singular_name' => _x('Accordion', 'post type singular name'),
                'add_new' => _x('Add New Accordion', 'Accordion'),
                'add_new_item' => __('Add New Accordion'),
                'edit_item' => __('Edit Accordion'),
                'new_item' => __('New Accordion'),
                'view_item' => __('View Accordion'),
                'search_items' => __('Search Accordion'),
                'not_found' =>  __('Nothing found'),
                'not_found_in_trash' => __('Nothing found in Trash'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => null,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title','editor','thumbnail'),
				'menu_icon' => CUSTOM_ACCORDION_PLUGIN_PATH.'/css/accordion.png',				
          );
 
        register_post_type( 'accordion_tp' , $args );

}
add_action('init', 'custom_accordion_post_register');





/***************************************
wp accordion option init
***************************************/
function themepoints_custom_accordion_option_init(){
	
	register_setting( 'custom_accordion_options_setting', 'themepoints_accordion_theme');
	register_setting( 'custom_accordion_options_setting', 'accordion_content_font_pages');
    }

add_action('admin_init', 'themepoints_custom_accordion_option_init' );




/***************************************
wp accordion shortcode setting
***************************************/
function custom_accordion_shortcodes($atts, $content = null ) {
		$atts = shortcode_atts(
			array(
				'id' => "",
				'theme' => "one",
				'color' => '#000',
				'fontcolor' => '#fff',
				'fontsize' => '14',				
				'count' => 50,
				), $atts);


			$count = $atts['count'];
			$theme = $atts['theme'];
			$postid = $atts['id'];
			$color = $atts['color'];
			$fontcolor = $atts['fontcolor'];
			$fontsize = $atts['fontsize'];
			$accordion="";
			
			$themepoints_accordion_theme = get_option( 'themepoints_accordion_theme' );		
			$accordion_content_font_pages = get_option( 'accordion_content_font_pages' );		
			

			$accordion.='<div class="container '.$themepoints_accordion_theme.'" style="width:100%; height:auto">';
				$accordion.='<ul class="responsive-accordion responsive-accordion-default bm-larger">';
					query_posts('post_type=accordion_tp&posts_per_page='.$accordion_content_font_pages);
					
					if (have_posts()) : while (have_posts()) : the_post();
					$title= get_the_title();
					$content= apply_filters( 'the_content', get_the_content() );				
					$accordion.= accordion_theme_body($theme,$title,$content,$color,$fontcolor,$fontsize);

					
					endwhile; endif;
					wp_reset_query();
				$accordion.='</ul>';
			$accordion.='</div>';

		return $accordion;

}

add_shortcode('accordion-themepoints', 'custom_accordion_shortcodes');


/***************************************
wp accordion option page setting
***************************************/


function custom_accordion_option_settings(){
	include('custom-accordion-admin.php');
}
/***************************************
wp accordion menu setting
***************************************/
function custom_accordion_menu_init() {
	add_submenu_page('edit.php?post_type=accordion_tp', __('Accordion Setting','Accordion_option'), __('Accordion Setting','Accordion_option'), 'manage_options', 'custom_accordion_option_settings', 'custom_accordion_option_settings');
}

add_action('admin_menu', 'custom_accordion_menu_init');

?>