<?php

	if(empty($_POST['custom_accordion_op_hidden']))
		{
					
			$accordion_title_bg = get_option( 'accordion_title_bg' );
			$accordion_title_color = get_option( 'accordion_title_color' );
			$accordion_title_font_size = get_option( 'accordion_title_font_size' );
			$accordion_content_bg = get_option( 'accordion_content_bg' );
			$accordion_content_font_color = get_option( 'accordion_content_font_color' );
			$accordion_padding = get_option( 'accordion_padding' );
			$accordion_content_font_size = get_option( 'accordion_content_font_size' );
			$themepoints_accordion_theme = get_option( 'themepoints_accordion_theme' );			
			$accordion_content_font_pages = get_option( 'accordion_content_font_pages' );			
		}

	else
		{
		
		if($_POST['custom_accordion_op_hidden'] == 'Y')
			{
			//Form data sent

				
			$accordion_title_bg = $_POST['accordion_title_bg'];
			update_option('accordion_title_bg', $accordion_title_bg);

			$accordion_title_color = $_POST['accordion_title_color'];
			update_option('accordion_title_color', $accordion_title_color);
				
			$accordion_content_bg = $_POST['accordion_content_bg'];
			update_option('accordion_content_bg', $accordion_content_bg);
					
			$accordion_content_font_color = $_POST['accordion_content_font_color'];
			update_option('accordion_content_font_color', $accordion_content_font_color);
			
			$accordion_padding = $_POST['accordion_padding'];
			update_option('accordion_padding', $accordion_padding);
			
			$accordion_title_font_size = $_POST['accordion_title_font_size'];
			update_option('accordion_title_font_size', $accordion_title_font_size);
				
			$accordion_content_font_size = $_POST['accordion_content_font_size'];
			update_option('accordion_content_font_size', $accordion_content_font_size);

			$themepoints_accordion_theme = $_POST['themepoints_accordion_theme'];
			update_option('themepoints_accordion_theme', $themepoints_accordion_theme);

			$accordion_content_font_pages = $_POST['accordion_content_font_pages'];
			update_option('accordion_content_font_pages', $accordion_content_font_pages);
			
			
			?>
			<div class="updated"><p><strong><?php _e('Changes Saved.' ); ?></strong></p>
            </div>
      
     
<?php
			}
		} 
?>


<div class="wrap">
<?php echo "<h2>".__('Accordion Option Settings')."</h2>";?>

<form  method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="custom_accordion_op_hidden" value="Y">
        <?php settings_fields( 'custom_accordion_options_setting' );
			do_settings_sections( 'custom_accordion_options_setting' );
		?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Use this Shortcode:
				</th>
				<td style="vertical-align:middle;">
					<input  type="text" name="accordion_shortcode" onClick="this.select();" size="auto" id="accordion-shortcode"  value ="[accordion-themepoints]"><br> <span style="font-size:12px;color:#22aa5d">** Use this shortcode to display accordion in your theme **</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="themepoints_accordion_theme">Accordion Themes</label></th>
                <td style="vertical-align:middle;">
                    <select name="themepoints_accordion_theme">
                        <option value="one" <?php if($themepoints_accordion_theme=='one') echo "selected"; ?> >Sun Flower</option>
                        <option value="two" <?php if($themepoints_accordion_theme=='two') echo "selected"; ?> >Orange</option>
                        <option value="three" <?php if($themepoints_accordion_theme=='three') echo "selected"; ?> >Pumkin</option>
                        <option value="four" <?php if($themepoints_accordion_theme=='four') echo "selected"; ?> >Alizarin</option>
                        <option value="five" <?php if($themepoints_accordion_theme=='five') echo "selected"; ?>>Carrot</option>
                        
                    </select><br>
               		<span style="font-size:12px;color:#22aa5d">Use Dropdown Menu to select Different Accordions Themes.</span>
                </td>
		   </tr>          



                
			<tr valign="top">
				<th scope="row"><label for="accordion_title_bg">Title Bg</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_title_bg' class='accordion-title_bg' type='text' id="accordion-title-bg" value='<?php echo esc_attr($accordion_title_bg); ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select accordion bg color. default bg color: #3498DB.</span>
				</td>
			</tr>
                
			<tr valign="top">
				<th scope="row"><label for="accordion_title_color">Title Font Color</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_title_color' class='accordion-title_color' type='text' id="accordion-title-color" value='<?php echo esc_attr($accordion_title_color); ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select accordion title font color. default bg color: #000000.</span>
				</td>
			</tr>                

			<tr valign="top">
				<th scope="row"><label for="accordion_title_font_size">Title Font Size</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_title_font_size' class='accordion-title-font_size' type='text' id="accordion-title-font-size" value='<?php echo esc_attr($accordion_title_font_size); ?>' />px<br />
<span style="font-size:12px;color:#22aa5d">select accordion title font size. default font size: 14px.</span>
				</td>
			</tr> 

			<tr valign="top">
				<th scope="row"><label for="accordion_content_bg">Content Bg</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_content_bg' class='accordion-content_bg' type='text' id="accordion-content-bg" value='<?php echo esc_attr($accordion_content_bg); ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select accordion bg color. default bg color: #ffffff.</span>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><label for="accordion_content_font_color">Content Font Color</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_content_font_color' class='accordion-font_color' type='text' id="accordion-font-color" value='<?php echo esc_attr($accordion_content_font_color); ?>' /><br />
<span style="font-size:12px;color:#22aa5d">select accordion content font color. default font color: #000000.</span>
				</td>
			</tr>     
						
			<tr valign="top">
				<th scope="row"><label for="accordion_padding">Content Padding</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_padding' class='accordion-padding' type='text' id="content-padding" value='<?php echo esc_attr($accordion_padding); ?>' />px<br />
<span style="font-size:12px;color:#22aa5d">select accordion padding. default padding : 20px</span>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row"><label for="accordion_content_font_size">Content Font Size</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_content_font_size' class='accordion-font_size' type='text' id="content-font-size" value='<?php echo esc_attr($accordion_content_font_size); ?>' />px<br />
<span style="font-size:12px;color:#22aa5d">select accordion font size.default font size :15px</span>
				</td>
			</tr> 
			
			<tr valign="top">
				<th scope="row"><label for="accordion_content_font_pages">Show Post</label></th>
				<td style="vertical-align:middle;">
<input  size='10' name='accordion_content_font_pages' class='accordion-font_size_pages' type='text' id="content-font-size-pages" value='<?php echo esc_attr($accordion_content_font_pages); ?>' /><br />
<span style="font-size:12px;color:#22aa5d">Input how many post you want to show per page.</span>
				</td>
			</tr> 

		</table>
		<p class="submit">
			<input class="button button-primary" type="submit" name="Submit" value="<?php _e('Save Changes' ) ?>" />
		</p>

</form>
		<script>
		jQuery(document).ready(function(jQuery)
			{	
			jQuery('#accordion-title-bg,#accordion-title-color,#accordion-content-bg,#accordion-font-color').wpColorPicker();
			});
		</script> 

</div>