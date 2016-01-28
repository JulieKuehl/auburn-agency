<?php

function custom_accordion_option_init(){
	
	register_setting( 'custom_accordion_options_setting', 'accordion_title_bg');
	register_setting( 'custom_accordion_options_setting', 'accordion_title_color');
	register_setting( 'custom_accordion_options_setting', 'accordion_title_font_size');
	register_setting( 'custom_accordion_options_setting', 'accordion_content_bg');
	register_setting( 'custom_accordion_options_setting', 'accordion_content_font_color');
	register_setting( 'custom_accordion_options_setting', 'accordion_padding');
	register_setting( 'custom_accordion_options_setting', 'accordion_content_font_size');

    }

add_action('admin_init', 'custom_accordion_option_init' );


function accordion_theme_body($theme,$title,$content,$color,$fontcolor,$fontsize)
	{
			$accordion_title_bg = get_option( 'accordion_title_bg' );
			$accordion_title_color = get_option( 'accordion_title_color' );
			$accordion_title_font_size = get_option( 'accordion_title_font_size' );
			$accordion_content_bg = get_option( 'accordion_content_bg' );
			$accordion_padding = get_option( 'accordion_padding' );
			$accordion_content_font_color = get_option( 'accordion_content_font_color' );
			$accordion_content_font_size = get_option( 'accordion_content_font_size' );
		$accordion = "";
		if($theme=="one")
			{
					$accordion.='<li>';
					$accordion.='<div class="responsive-accordion-head" style="background-color:'.$accordion_title_bg.'">';
					$accordion.='<span style="color:'.$accordion_title_color.';font-size:'.$accordion_title_font_size.'px">  '.esc_attr($title).'   </span>';
					$accordion.='<i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i>';
					$accordion.='</div>';
					$accordion.='<div class="responsive-accordion-panel"style="background-color:'.$accordion_content_bg.';padding:'.$accordion_padding.'px;color:'.$accordion_content_font_color.';font-size:'.$accordion_content_font_size.'px">';
					$accordion.='<p>';
					$accordion.=' '.$content.' ';
					$accordion.='</p>';
					$accordion.='</div>';
					$accordion.='</li>';
			}
		elseif($theme=="two")
			{

					$accordion.='<li>';
					$accordion.='<div class="responsive-accordion-head" style="background-color:'.$accordion_title_bg.'">';
					$accordion.='<span style="color:'.$accordion_title_color.';font-size:'.$accordion_title_font_size.'px">  '.esc_attr($title).'   </span>';
					$accordion.='<i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i>';
					$accordion.='</div>';
					$accordion.='<div class="responsive-accordion-panel"style="background-color:'.$accordion_content_bg.';padding:'.$accordion_padding.'px;color:'.$accordion_content_font_color.';font-size:'.$accordion_content_font_size.'px">';
					$accordion.='<p>';
					$accordion.=' '.$content.' ';
					$accordion.='</p>';
					$accordion.='</div>';
					$accordion.='</li>';
			}
		elseif($theme=="three")
			{

					$accordion.='<li>';
					$accordion.='<div class="responsive-accordion-head" style="background-color:'.$color.'!important">';
					$accordion.='<span style="color:'.$fontcolor.';font-size:'.$fontsize.'px">  '.esc_attr($title).'   </span>';
					$accordion.='<i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i>';
					$accordion.='</div>';
					$accordion.='<div class="responsive-accordion-panel"style="background-color:'.$accordion_content_bg.';padding:'.$accordion_padding.'px;color:'.$accordion_content_font_color.';font-size:'.$accordion_content_font_size.'px">';
					$accordion.='<p>';
					$accordion.=' '.$content.' ';
					$accordion.='</p>';
					$accordion.='</div>';
					$accordion.='</li>';

			}			
			
			elseif($theme=="four")
			{

					$accordion.='<li>';
					$accordion.='<div class="responsive-accordion-head" style="background-color:'.$color.'!important">';
					$accordion.='<span style="color:'.$fontcolor.';font-size:'.$fontsize.'px">  '.esc_attr($title).'   </span>';
					$accordion.='<i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i>';
					$accordion.='</div>';
					$accordion.='<div class="responsive-accordion-panel"style="background-color:'.$accordion_content_bg.';padding:'.$accordion_padding.'px;color:'.$accordion_content_font_color.';font-size:'.$accordion_content_font_size.'px">';
					$accordion.='<p>';
					$accordion.=''.$content.' ';
					$accordion.='</p>';					
					$accordion.='</div>';
					$accordion.='</li>';

			}			

			elseif($theme=="five")
			{

					$accordion.='<li>';
					$accordion.='<div class="responsive-accordion-head" style="background-color:'.$color.'!important">';
					$accordion.='<span style="color:'.$fontcolor.';font-size:'.$fontsize.'px">  '.esc_attr($title).'   </span>';
					$accordion.='<i class="fa fa-chevron-down responsive-accordion-plus fa-fw"></i><i class="fa fa-chevron-up responsive-accordion-minus fa-fw"></i>';
					$accordion.='</div>';
					$accordion.='<div class="responsive-accordion-panel"style="background-color:'.$accordion_content_bg.';padding:'.$accordion_padding.'px;color:'.$accordion_content_font_color.';font-size:'.$accordion_content_font_size.'px;">';
					$accordion.='<p>';
					$accordion.=''.$content.' ';
					$accordion.='</p>';				
					$accordion.='</div>';
					$accordion.='</li>';

			}			

				
				
		return $accordion;

	}
?>