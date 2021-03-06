<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package auburnagency
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container">

			<div class="fat-footer section group">
				<div class="footer-logo col span_3_of_12"><? dynamic_sidebar( 'fat-footer-one' ); ?></div>
				<div class="footer-block"><? dynamic_sidebar( 'fat-footer-two' ); ?></div>
				<div class="footer-block"><? dynamic_sidebar( 'fat-footer-three' ); ?></div>
				<div class="footer-block"><? dynamic_sidebar( 'fat-footer-four' ); ?></div>
			</div>

			<div class="footer-links">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
			</div>

			<div class="site-info section group">
				&copy; <?php echo date( 'Y' ); ?> Auburn Agency Inc. Crop Insurance. Site powered and designed by <a href="http://bcomonline.com">BCom Solutions, LLC.</a>
			</div><!-- .site-info -->

		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
