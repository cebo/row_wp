<?php 

/* Template Name: Eat/Drink

*/
 get_header(); ?>
 

	
	<section class="contentarea fullvertical">
			
			

			<div class="third-level">
			
				<?php query_posts('post_type=amenities&p=30'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				
				<div class="leftside">
					
					
					<div class="picone">
					
						<div class="suboverlay narrow textbox">

							<div class="innerbox">
											
								<a href="<?php the_permalink(); ?>"><h1 style="font-size: 29px; padding-top: 5px;"><?php the_title(); ?></h1></a>
								
								<?php echo content(114); ?>
														
							</div>

							<a class="opensays" href="#"><i class="fa fa-chevron-down"></i></a>
							<a class="opensays" href="#"><i class="fa fa-chevron-up"></i></a>

						</div>

						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
						
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
						<?php } ?>
					
					</div>
					
					
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				<?php query_posts('post_type=amenities&p=31'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="rightside">
				
					<div class="picone">
					
						<div class="suboverlay narrow textbox-1"  style="height:20%;">

							<div class="innerbox">
											
								<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
								
								<?php echo content(150); ?>
														
							</div>

							<a class="opensays-1" href="#"><i class="fa fa-chevron-down"></i></a>
							<a class="opensays-1" href="#"><i class="fa fa-chevron-up"></i></a>

						</div>

						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
						
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
		<?php } ?>
					
					</div>
					
					</div>						
								
				<?php endwhile; endif; wp_reset_query(); ?>	
				
				<div class="clear"></div>

			</div>
			
			
		<?php get_footer(); ?>