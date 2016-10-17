<?php 

	/* Template Name: Explore List */

	get_header();

?>
	
	<section class="contentarea">

		<div class="bookingnav-block"></div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="toptitle-area toptitle-explorenyc">
			
				<h1><?php the_title(); ?></h1>
				
				<div class="toptitle-description">
					<?php the_content(); ?>
				</div>
			
			</div>

		<?php endwhile; endif; wp_reset_query(); ?>	

		<div class="clear"></div>

		<!-- begin fifth level -->

		<div class="fifth-level">

			<ul class="blogposters">

				<?php if ( false ) { ?>

					<?php

						query_posts(array('post_type' => 'tribe_events','eventDisplay' => 'upcoming', 'posts_per_page' => 1,) );

						if ( have_posts() ) : while ( have_posts() ) : the_post();

							$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
							$default = get_bloginfo('template_url') . '/images/watermark.jpg';

					?>

					<li>

						<?php if ( $fullpic ) { ?>

							<img src="<?php echo tt( $fullpic, 375, 375 ); ?>" style="height: 375px" alt="<?php the_title(); ?>">

						<?php } elseif ( $imgsrc ) { ?>

							<img src="<?php echo tt( $imgsrc[0], 375, 375 ); ?>" style="height: 375px" alt="<?php the_title(); ?>">	

						<?php } else { ?>

							<img src="<?php echo $default; ?>" style="height: 375px" alt="<?php the_title(); ?>">

						<?php } ?>

						<div class="littleover">
							<h1>Coming Soon</h1>
							<p><?php echo excerpt(20); ?></p>
							<a class="gone" href="<?php bloginfo('url'); ?>/events/">All Events ></a>
						</div>

					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	

				<?php } ?>

				<?php

					$this_page_id = $wp_query->post->ID;

					query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page'));

					if ( have_posts() ) : while ( have_posts() ) : the_post();

						$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
						$default = get_bloginfo('template_url') . '/images/watermark.jpg';

				?>

					<li>

						<?php if ( $fullpic ) { ?>

							<img src="<?php echo tt( $fullpic, 375, 375 ); ?>" style="height: 375px;" alt="<?php the_title(); ?>">	

						<?php } elseif ( $imgsrc ) { ?>

							<img src="<?php echo tt( $imgsrc[0], 375, 375 ); ?>" style="height: 375px" alt="<?php the_title(); ?>">	

						<?php } else { ?>

							<img src="<?php echo $default; ?>" style="height: 375px" alt="<?php the_title(); ?>">

						<?php } ?>

						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							<p><?php echo excerpt(20); ?></p>
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>

					</li>

				<?php endwhile; endif; wp_reset_query(); ?>

			</ul>

		</div>

					
<?php get_footer(); ?>