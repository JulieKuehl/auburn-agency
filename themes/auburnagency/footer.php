<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package auburnagency
 */
?>

		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container">
			<div class="fat-footer">
				<? dynamic_sidebar( 'fat-footer-one' ); ?>
				<!-- Address icon -->
				<span class="fa-stack fa-3x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-map-marker fa-stack-1x"></i>
				</span>
				<? dynamic_sidebar( 'fat-footer-two' ); ?>
				<!-- Phone icon -->
				<span class="fa-stack fa-3x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-phone fa-stack-1x"></i>
				</span>
				<? dynamic_sidebar( 'fat-footer-three' ); ?>
				<!-- Email icon -->
				<span class="fa-stack fa-3x">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-envelope fa-stack-1x"></i>
				</span>
				<? dynamic_sidebar( 'fat-footer-four' ); ?>
			</div>
			<div class="site-info">
				&copy; <?php date( 'Y' ); ?> Auburn Agency Inc. Crop Insurance. Site powered and designed by <a href="http://bcomonline.com">BCom Solutions, LLC.</a>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
