<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package auburnagency
 */
?>

<section class="main-area">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="container">

		Breadcrumbs > page

		<div id="primary" class="content-area">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'auburnagency' ),
							'after'  => '</div>',
							'pagelink' => '<span>%</span>',
						) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php edit_post_link( __( 'Edit', 'auburnagency' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-footer -->

			</article><!-- #post-## -->

		</div><!-- #primary -->

	</div><!-- .container -->
</section><!-- .main-area -->
