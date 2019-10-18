<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firstAylmer
 */

get_header();
?>
	<style>
		.banner { background-image: url( '<?php the_field( "main_banner" ); ?>' ); }
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="banner"></div>
			<div data-aos="zoom-in" class="banner-box">
				<div class="banner-box--text">
					<h2>Our Mission</h2>
					<p><?php the_field('mission');?></p>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row events">
					<div class="events-upcoming col-md-8">
						<div class="col-md-5 events-upcoming--header"><h1>UPCOMING EVENTS</h1></div>
						<?php 
							$portrait_styles = array();
							// Get Team Members from database
							$wpb_all_query = new WP_Query(array('post_type'=>'Upcoming', 'post_status'=>'publish', 'posts_per_page'=>1)); ?>
							<?php $i = 0 ?>
							<?php if ( $wpb_all_query->have_posts() ) : while ( $wpb_all_query->have_posts() ) : ?>
							<?php $wpb_all_query->the_post(); ?>
							<div class="container-fluid">
								<div class="row" data-aos="slide-right">
									<div class="events-image col-md-5" style="background-image: url('<?php the_field('image');?>')"></div>
									<div class="col-md-7 events-text--upcoming">
										<h2><?php the_title(); ?> - <?php the_field( 'date' ); ?></h2>
										<p><?php echo get_field( 'description' ); ?></p>
									</div>
								</div>
								<div class="events-tagline"><p><?php the_field('tag_line');?></p></div>
							</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
					</div>
					<div class="events-recent col-md-4">
						<div class="W-100 events-upcoming--header"><h1>RECENT EVENTS</h1></div>
						<?php 
							$portrait_styles = array();
							// Get Team Members from database
							$wpb_all_query = new WP_Query(array('post_type'=>'Recent', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
							<?php $i = 0 ?>
							<?php if ( $wpb_all_query->have_posts() ) : while ( $wpb_all_query->have_posts() ) : ?>
							<?php $wpb_all_query->the_post(); ?>
							<div class="row" data-aos="slide-left">
								<div class="events-image events-image--recent" style="background-image: url('<?php the_field('image');?>')"></div>
								<div class="">
									<h2><?php the_title(); ?> - <?php the_field( 'date' ); ?></h2>
									<p><?php echo get_field( 'description' ); ?></p>
								</div>
							</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
