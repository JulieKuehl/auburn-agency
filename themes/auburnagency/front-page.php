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

<section class="info-widgets section group">
	<div class="content-container">

		<div class="col span_8_of_12">

			<script>
				jQuery(document).ready(function($) {
						$(".flexslider").flexslider({
							animation: "slide",
							directionNav: false,
							slideshowSpeed: 9000,
							animationSpeed: 900,
						});
					});
			</script>

			<div id="slider">
				<div class="flexslider">
					<ul class="slides">

						<?php query_posts(array('post_type' => 'daily_messages'));
						if(have_posts()) : while(have_posts()) : the_post(); ?>

						<li class="slide">
							<h2><?php the_title(); ?></h2>
							<?php echo the_field( 'daily_message' ); ?>
						</li>

						<?php endwhile; endif; wp_reset_query(); ?>

					</ul>
				</div>
			</div>

			<div class="weather">
				<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=40.392826&lon=-95.841699&name=Auburn, NE&color=#719a44&&units=us"> </iframe>
			</div><!-- .weather -->

		</div>

		<div class="widget col span_4_of_12">
			<h2>Market Data</h2>
			<?php get_template_part( 'content-front-page-marketdata' ); ?>
		</div>

	</div>
</section>

<section class="crop-info-center section group">

	<h1><span class="title-block">Crop Information Center</span></h1>
	<h2><span class="title-block-subtitle">Click on a stage below</span></h2>

	<div class="crop-info-center-menu-background"></div>

	<div class="crop-info-center-menu">
		<div class="content-container">

			<!-- Begin tabbed content -->
			<div id="tabs" class="ui-tabs section group">

				<!-- Crop Information Center links -->
				<ul class="tabs ui-tabs-nav">

					<li>
						<a href="/risk-management-planning/aph-yield-exclusion/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-planning.png">Planning</a>
					</li>
					<li>
						<a href="/planting/prevented-planting/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-planting.png">Planting</a>
					</li>
					<li>
						<a href="/emergence/first-crop-planted-second-crop-options/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-emergence.png">Emergence</a>
					</li>
					<li>
						<a href="/vegetative/one-stop-reporting/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-vegetative.png">Vegetative</a>
					</li>
					<li>
						<a href="/reproductive/check-your-schedule/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-reproductive.png">Reproductive</a>
					</li>
					<li>
						<a href="/grain-fill/pasture-range-and-forage/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-grain-fill.png">Grain Fill</a>
					</li>
					<li>
						<a href="/harvest/claims/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-harvest.png">Harvest</a>
					</li>
					<li>
						<a href="/production-reporting/actual-production-reporting-aph/" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-reporting.png">Reporting</a>
					</li>
				</ul>

</section>

<section class="news-feeds section group">
	<div class="content-container">
		<div class="col span_3_of_12">
			<div class="twitter-feed">
				<?php dynamic_sidebar( 'twitter-feed' ); ?>
			</div>
			<?php dynamic_sidebar( 'under-twitter-feed' ); ?>
		</div>
		<div class="rss-feeds col span_9_of_12">
			<h2>News Feeds</h2>
			<?php dynamic_sidebar( 'rss-feeds' ); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
