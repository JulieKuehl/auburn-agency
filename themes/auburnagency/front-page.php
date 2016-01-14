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

<section class="crop-info-center section group">

	<h1><span class="title-block">Crop Information Center</span></h1>
	<h2><span class="title-block-subtitle">Select a stage below</span></h2>

	<div class="crop-info-center-icons"></div>
	<div class="crop-info-center-menu-background"></div>

	<div class="crop-info-center-menu">
		<div class="content-container">

			<!-- Begin tabbed content -->
			<div id="tabs" class="tabs ui-tabs section group">

				<!-- Tab navigation menu -->
				<ul class="tabs ui-tabs-nav">
					<li><a href="#tab-planting">Planting</a></li>
					<li><a href="#tab-emergence">Emergence</a></li>
					<li><a href="#tab-vegetative">Vegetative</a></li>
					<li><a href="#tab-reproductive">Reproductive</a></li>
					<li><a href="#tab-grain-fill">Grain Fill</a></li>
					<li><a href="#tab-harvest">Harvest</a></li>
					<li><a href="#tab-winter">Winter</a></li>
				</ul>

<!--			</div><!-- .tabs -->
<!---->
<!--		</div><!-- .content-container -->
<!--	</div><!-- .crop-info-center-menu -->
<!---->
<!--	<div class="crop-info-center-panels">-->
<!--		<div class="content-container">-->

			<!-- Planting tab -->
			<div id="tab-planting" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

					<?php echo the_field( 'crop_info_planting_text' ); ?>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-planting -->

			<!-- Emergence tab -->
			<div id="tab-emergence" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

						<?php echo the_field( 'crop_info_emergence_text' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-emergence -->

			<!-- Vegetative tab -->
			<div id="tab-vegetative" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

						<?php echo the_field( 'crop_info_vegetative_text' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-vegetative -->

			<!-- Reproductive tab -->
			<div id="tab-reproductive" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

						<?php echo the_field( 'crop_info_reproductive_text' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-reproductive -->

			<!-- Grain Fill tab -->
			<div id="tab-grain-fill" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

						<?php echo the_field( 'crop_info_grain_fill_text' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-grain-fill -->

			<!-- Harvest tab -->
			<div id="tab-harvest" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

						<?php echo the_field( 'crop_info_harvest_text' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-harvest -->

			<!-- Winter tab -->
			<div id="tab-winter" class="ui-tabs-panel">

				<?php
				$args = array(
					'post_type'       => 'crop_info_tabs',
					'nopaging'        => true,
				);

				$cropinfo = new WP_Query( $args );
				?>

				<?php
				if ( $cropinfo->have_posts() ) :
					while ( $cropinfo->have_posts() ) :
						$cropinfo->the_post(); ?>

						<?php echo the_field( 'crop_info_winter_text' ); ?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-winter -->

		</div><!-- .content-container -->
	</div><!-- .crop-info-center-panels -->

</section>

<section class="slider-area section group">
	<div class="content-container">
		<?php masterslider(2); ?>
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
			<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=40.392826&lon=-95.841699&name=Auburn, NE&color=#719a44&&units=us"> </iframe>
		</div>

	</div>
</section>

<?php get_footer(); ?>
