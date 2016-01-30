<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package auburnagency
 */

get_header(); ?>

	<main id="main" class="" role="main">

		<section class="page-title">
			<header class="entry-header container">
				<h1 class="entry-title">Not Found</h1>
			</header><!-- .entry-header -->
		</section>

		<section class="main-area content-container">
			<div id="primary" class="content-area">

				<div class="entry-content content-container">
					<p><?php _e( "We couldn't find that. Try again?", 'auburnagency' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .content-container -->
			</div><!-- #primary -->

		<?php get_sidebar(); ?>

		</section>

	</main><!-- #main -->

<?php get_footer(); ?>
