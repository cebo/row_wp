<?php 

	/* Template Name: Eat/Drink */

	get_header();

?>
	
	<section class="contentarea fullvertical">

		<div class="bookingnav-block"></div>
			
		<div class="title-div">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="third-level">

			<?php

				query_posts('post_type=amenities&p=30');

				if( have_posts() ) : while ( have_posts() ) : the_post();

					$fullpic = get_post_meta($post->ID, 'cebo_fullpic', true);
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );

					if ( $fullpic ) { $image = $fullpic; }
					elseif ( $imgsrc ) { $image = $imgsrc[0]; }
					else { $image = get_bloginfo('template_url') . '/images/watermark.jpg'; }

			?>

				<div class="leftside">

					<div class="picone">

						<div class="suboverlay narrow textbox">

							<div class="innerbox">

								<a href="<?php the_permalink(); ?>">
									<h2 class="h1" style="font-size: 29px;"><?php the_title(); ?></h2>
								</a>

								<?php echo content(114); ?>

							</div>

							<a class="opensays" href="#"><i class="fa fa-chevron-down"></i></a>
							<a class="opensays" href="#"><i class="fa fa-chevron-up"></i></a>

						</div>

						<div class="stretch"  style="background-image: url(<?php echo $image; ?>);">
							<a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a>
						</div>
					
					</div>

				</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	


			<?php

				query_posts('post_type=amenities&p=31');

				if( have_posts() ) : while ( have_posts() ) : the_post();

					$fullpic = get_post_meta($post->ID, 'cebo_fullpic', true);
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );

					if ( $fullpic ) { $image = $fullpic; }
					elseif ( $imgsrc ) { $image = $imgsrc[0]; }
					else { $image = get_bloginfo('template_url') . '/images/watermark.jpg'; }

			?>

				<div class="rightside">

					<div class="picone">

						<div class="suboverlay narrow textbox-1" style="height:20%;">

							<div class="innerbox">

								<a target="_blank" href="<?php the_permalink(); ?>">
									<h2 class="h1"><?php the_title(); ?></h2>
								</a>

								<?php echo content(150); ?>

							</div>

							<a class="opensays-1" href="#"><i class="fa fa-chevron-down" style="display:none;"></i></a>
							<a class="opensays-1" href="#"><i class="fa fa-chevron-up"></i></a>

						</div>

						<div class="stretch"  style="background-image: url(<?php echo $image; ?>);">
							<a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a>
						</div>

					</div>

				</div>

			<?php endwhile; endif; wp_reset_query(); ?>	

			<div class="clear"></div>

		</div>

<?php get_footer(); ?>