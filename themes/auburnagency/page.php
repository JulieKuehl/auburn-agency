<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package auburnagency
 */

get_header(); ?>

<section class="page-title">
	<header class="entry-header container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
</section>


<main id="main" class="" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

	<section class="main-area content-container">

			<div class="breadcrumbs">
				<?php if ( function_exists('yoast_breadcrumb') )
				{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
			</div>

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

		<?php endwhile; // end of the loop. ?>



		<?php get_sidebar(); ?>

	</section><!-- .main-area -->

</main><!-- #main -->

<?php get_footer(); ?>
