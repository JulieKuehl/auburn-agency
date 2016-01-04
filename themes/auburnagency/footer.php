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
			<div class="site-info">
				<?php printf( __( 'Forward by %1$s &mdash; A %2$s Project.', 'auburnagency' ), '<a href="http://design.org" >Design.org</a>', '<a href="http://drawbackwards.com" rel="designer">Drawbackwards</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
