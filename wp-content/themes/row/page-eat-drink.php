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
											
								<h1><?php the_title(); ?></h1>
								
								<?php the_content(); ?>
									
								<a class="opensays" href="#"><i class="fa fa-chevron-down"></i></a>
								<a class="opensays" href="#"><i class="fa fa-chevron-up"></i></a>
														
							</div>

						</div>

						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
						
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
					
					</div>
					
					
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				<?php query_posts('post_type=amenities&p=31'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="rightside">
				
					<div class="picone">
					
						<div class="suboverlay narrow textbox-1">

							<div class="innerbox">
											
								<h1><?php the_title(); ?></h1>
								
								<?php the_content(); ?>
	
								<a class="opensays-1" href="#"><i class="fa fa-chevron-down"></i></a>
								<a class="opensays-1" href="#"><i class="fa fa-chevron-up"></i></a>
														
							</div>

						</div>

						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
						
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
		<?php } ?>
					
					</div>
					
					</div>						
				
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				
				<div class="clear"></div>

			</div>
			
			
		<?php get_footer(); ?>