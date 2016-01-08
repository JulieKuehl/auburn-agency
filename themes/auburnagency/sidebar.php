<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package auburnagency
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php dynamic_sidebar( 'twitter-feed' ); ?>
</div><!-- #secondary -->
