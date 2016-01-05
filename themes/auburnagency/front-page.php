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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="slider-area">
				<div class="container">
					SLIDER GOES HERE
				</div>
			</section>

			<section class="crop-info-center section group">
				<div class="container">
					<?php wp_nav_menu( array( 'theme_location' => 'utility', 'container' => false ) ); ?>
				</div>
			</section>

			<section class="news-feeds section group">
				<div class="container">
					<div class="twitter-feed col span_3_of_12">
						<?php dynamic_sidebar( 'twitter-feed' ); ?>
					</div>
					<div class="rss-feeds col span_9_of_12">
						<?php dynamic_sidebar( 'rss-feeds' ); ?>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
