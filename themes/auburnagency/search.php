<?php
/**
 * The template for displaying search results pages.
 *
 * @package auburnagency
 */

get_header(); ?>

<!--<section id="primary" class="content-area">-->
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

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

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>

				<?php endwhile; ?>

					<?php forward_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</section><!-- .main-area -->
	</main><!-- #main -->

<?php get_footer(); ?>
