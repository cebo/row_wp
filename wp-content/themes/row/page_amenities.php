<?php 

/* Template Name: Amenities List

*/
 get_header(); ?>
	
	
	<section class="contentarea">
			
		<div class="welcomebox" style="padding: 15px;">
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
		
		
			<?php endwhile; endif; wp_reset_query(); ?>	
		
		</div>		

			<!-- begin fourth level -->
			
			
			
			
			<?php query_posts('post_type=amenities&p=30'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			
			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
				
					<div class="suboverlay narrow">
					
			
					
						<h1><?php the_title(); ?></h1>
						
			
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>"><?php _e('MORE >','row-theme-text'); ?></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_listimage', true),1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>
					

				</div>
				

			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			<?php query_posts('post_type=amenities&p=31'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			

			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
				
					<div class="suboverlay narrow">
					
						
					
						<h1><?php the_title(); ?></h1>
						
				
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>
				</div>

			</div>

			<?php endwhile; endif; wp_reset_query(); ?>	
			


			<div class="third-level">
			
				<?php query_posts('post_type=amenities&p=32'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="leftside">
					
					
					<div class="picone">
					
						<div class="suboverlay narrow">
					
							
					
						<h1><?php the_title(); ?></h1>
						
					
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),556,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc,556,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>
					
					</div>
					
					
				</div>
			
				<?php endwhile; endif; wp_reset_query(); ?>	
				<?php query_posts('post_type=amenities&p=33'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="rightside">
				
					<div class="picone">
					
						<div class="suboverlay narrow">
					
							
					
						<h1><?php the_title(); ?></h1>
						
				
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),556,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],556,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>
					
					</div>						
				
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				
				<div class="clear"></div>

			</div>



			<?php query_posts('post_type=amenities&p=3097'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
				<div class="fourth-level">
				
					<div class="fullspan">
					
						<div class="suboverlay narrow">
						
							<h1><?php the_title(); ?></h1>
				
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>"><?php _e('MORE >','row-theme-text'); ?></a></p>
										
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
									
							<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
							
							<?php } elseif($imgsrc) { ?>
							
							
							<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
							
							<?php } else { ?>
												
							<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } ?>

					</div>					

				</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	

			<!-- fitness center -->
			<?php query_posts('post_type=amenities&p=5819'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
				<div class="fourth-level">
				
					<div class="fullspan">
					
						<div class="suboverlay narrow">
						
							<h1><?php the_title(); ?></h1>
				
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>"><?php _e('MORE >','row-theme-text'); ?></a></p>
										
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
									
							<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
							
							<?php } elseif($imgsrc) { ?>
							
							
							<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],1123,320); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
							
							<?php } else { ?>
												
							<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } ?>

					</div>					

				</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>
			<!-- end fitness center -->			
			


<?php get_footer(); ?>