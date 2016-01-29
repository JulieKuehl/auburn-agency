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

<section class="message-center section group">

	<div class="content-container">

		<div id="message-slider"class="daily-message col span_12_of_12">
			<?php echo do_shortcode( '[wp_posts_carousel template="default.css" post_type="daily_messages" all_items="10" show_only="id" posts="" ordering="random" categories="" tags="" show_title="true" show_created_date="false" show_description="content" allow_shortcodes="false" show_category="false" show_tags="false" show_more_button="false" show_featured_image="false" image_source="" image_height="100" image_width="100" items_to_show_mobiles="1" items_to_show_tablets="1" items_to_show="1" slide_by="1" margin="5" loop="true" stop_on_hover="true" auto_play="true" auto_play_timeout="5000" auto_play_speed="1000" nav="false" nav_speed="800" dots="true" dots_speed="800" lazy_load="true" mouse_drag="true" mouse_wheel="true" touch_drag="true" easing="linear" auto_height="true"]' ); ?>
		</div>
	</div>

</section>

<section class="crop-info-center section group">

	<h1><span class="title-block">Crop Information Center</span></h1>
	<h2><span class="title-block-subtitle">Select a stage below</span></h2>

	<div class="crop-info-center-menu-background"></div>

	<div class="crop-info-center-menu">
		<div class="content-container">

			<script>
				jQuery(document).ready(function($) {
					$('#tabs').responsiveTabs({
						startCollapsed: 'accordion',
						collapsible: 'accordion',
						animation: 'slide',
					});
					$( "#tabs" ).tabs({
						event: "mouseover",
					});
//					$('#tabs').responsiveTabs('deactivate', 0);
				});
			</script>

			<!-- Begin tabbed content -->
			<div id="tabs" class="ui-tabs section group">

				<!-- Tab navigation menu -->
				<ul class="tabs ui-tabs-nav">

					<li>
						<a href="#tab-planning" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-planning.png">Planning</a>
					</li>
					<li>
						<a href="#tab-planting" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-planting.png">Planting</a>
					</li>
					<li>
						<a href="#tab-emergence" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-emergence.png">Emergence</a>
					</li>
					<li>
						<a href="#tab-vegetative" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-vegetative.png">Vegetative</a>
					</li>
					<li>
						<a href="#tab-reproductive" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-reproductive.png">Reproductive</a>
					</li>
					<li>
						<a href="#tab-grain-fill" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-grain-fill.png">Grain Fill</a>
					</li>
					<li>
						<a href="#tab-harvest" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-harvest.png">Harvest</a>
					</li>
					<li>
						<a href="#tab-reporting" class="crop-stage-graphic">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corn-stage-reporting.png">Reporting</a>
					</li>
				</ul>


				<!-- Planning tab -->
				<div id="tab-planning" class="ui-tabs-panel section group">

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

							<div class="crop-info-planning-months">
								<span>Risk Mgmt. Planning</span>
							</div>

							<div class="info-panel col span_12_of_12">
								<?php echo the_field( 'crop_info_planning_text' ); ?>
								<div class="clearfix"></div>
								<div class="tab-button">
									<a href="<?php the_field( 'crop_info_planning_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_planning_button_text' ); ?></button></a>
								</div>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</div><!-- .tab-planning -->

			<!-- Planting tab -->
			<div id="tab-planting" class="ui-tabs-panel section group">

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

						<div class="crop-info-planting-months">
							<span>Planting</span>
						</div>

						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_planting_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_planting_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_planting_button_text' ); ?></button></a>
							</div>
						</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-planting -->

			<!-- Emergence tab -->
			<div id="tab-emergence" class="ui-tabs-panel section group">

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

						<div class="crop-info-emergence-months">
							<span>Emergence</span>
						</div>

						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_emergence_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_emergence_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_emergence_button_text' ); ?></button></a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-emergence -->

			<!-- Vegetative tab -->
			<div id="tab-vegetative" class="ui-tabs-panel section group">

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

						<div class="crop-info-vegetative-months">
							<span>Vegetative</span>
						</div>


						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_vegetative_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_vegetative_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_vegetative_button_text' ); ?></button></a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-vegetative -->

			<!-- Reproductive tab -->
			<div id="tab-reproductive" class="ui-tabs-panel section group">

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

						<div class="crop-info-reproductive-months">
							<span>Reproductive</span>
						</div>


						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_reproductive_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_reproductive_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_reproductive_button_text' ); ?></button></a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-reproductive -->

			<!-- Grain Fill tab -->
			<div id="tab-grain-fill" class="ui-tabs-panel section group">

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

						<div class="crop-info-grain-fill-months">
							<span>Grain Fill</span>
						</div>


						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_grain_fill_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_grain_fill_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_grain_fill_button_text' ); ?></button></a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-grain-fill -->

			<!-- Harvest tab -->
			<div id="tab-harvest" class="ui-tabs-panel section group">

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

						<div class="crop-info-harvest-months">
							<span>Harvest</span>
						</div>


						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_harvest_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_harvest_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_harvest_button_text' ); ?></button></a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-harvest -->

			<!-- Reporting tab -->
			<div id="tab-reporting" class="ui-tabs-panel section group">

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

						<div class="crop-info-reporting-months">
							<span>Production Reporting</span>
						</div>


						<div class="info-panel col span_12_of_12">
							<?php echo the_field( 'crop_info_reporting_text' ); ?>
							<div class="clearfix"></div>
							<div class="tab-button">
								<a href="<?php the_field( 'crop_info_reporting_button_link' ); ?>"><button class="tab-panel-button"><?php echo the_field( 'crop_info_reporting_button_text' ); ?></button></a>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div><!-- .tab-reporting -->

		</div><!-- .content-container -->
	</div><!-- .crop-info-center-panels -->

</section>

<section class="slider-area section group">
	<div class="content-container">
<!--		--><?php //masterslider(2); ?>
		<?php the_content(); ?>
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

		<div class="widget col span_4_of_12">
			<h2>Market Data</h2>
			<?php get_template_part( 'content-front-page-marketdata' ); ?>
		</div>

		<div class="widget col span_8_of_12">
			<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=40.392826&lon=-95.841699&name=Auburn, NE&color=#719a44&&units=us"> </iframe>
		</div>

	</div>
</section>

<?php get_footer(); ?>
