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

<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main" role="main">-->

			<section class="crop-info-center section group">
				<div class="content-container">
					CROP INFO CENTER
					<?php wp_nav_menu( array( 'theme_location' => 'utility', 'container' => false ) ); ?>
				</div>
			</section>

			<section class="slider-area section group">
				<div class="content-container">
					SLIDER GOES HERE
				</div>
			</section>

			<section class="news-feeds section group">
				<div class="content-container">
					<div class="twitter-feed col span_3_of_12">
						<?php dynamic_sidebar( 'twitter-feed' ); ?>
					</div>
					<div class="rss-feeds col span_9_of_12">
						<h2>News Feeds</h2>
						<?php dynamic_sidebar( 'rss-feeds' ); ?>
					</div>
				</div>
			</section>

			<section class="info-widgets section group">
				<div class="content-container">

					<div class="widget col span_6_of_12">
						<h2>Market Data</h2>
						<?php get_template_part( 'content-front-page-marketdata' ); ?>
					</div>

					<div class="widget col span_6_of_12">
						<h2>Weather Data</h2>
						<?php dynamic_sidebar( 'weather-info' ); ?>
					</div>

				</div>
			</section>

<!--		</main><!-- #main -->-->
<!--	</div><!-- #primary -->-->

<?php get_footer(); ?>
