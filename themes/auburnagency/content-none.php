<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package auburnagency
 */
?>

<section class="page-title">
	<header class="entry-header container">
		<h1 class="entry-title">Search</h1>
	</header><!-- .entry-header -->
</section>

<section class="content-container">
	<div class="breadcrumbs">
		<a href="<?php bloginfo( 'url' ); ?>">Home</a> / Search
	</div><!-- .breadcrumbs -->
</section>

<section class="main-area content-container">

	<div id="primary" class="content-area">

		<?php if ( is_search() ) : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching for something else can help.', 'auburnagency' ); ?></p>
			<?php get_search_form(); ?>

					<?php endif; ?>

			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</section><!-- .main-area -->
	</main><!-- #main -->

<?php get_footer(); ?>