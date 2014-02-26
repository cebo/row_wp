<?php 

/* Template Name: Amenities List

*/
 get_header(); ?>
	
	
	<section class="contentarea">
			
			

			<!-- begin fourth level -->
			
			
			
			
			<?php query_posts('post_type=amenities&p=30'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			
			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
				
					<div class="suboverlay narrow">
					
								<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" style="max-width: 100%" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
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
					
								<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" style="max-width: 100%" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
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
					
								<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" style="max-width: 100%" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
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
					
								<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" style="max-width: 100%" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>
					
					</div>						
				
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				
				<div class="clear"></div>

			</div>

			
			<div class="clear"></div><br>

			<div class="third-level">
			
				<?php query_posts('post_type=amenities&p=34'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="leftside">
					
					
					<div class="picone">
					
						<div class="suboverlay narrow">
					
								<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" style="max-width: 100%" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>
					
					</div>
					
					
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				<?php query_posts('post_type=amenities&p=35'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			
				<div class="rightside">
				
					<div class="picone">
					
						<div class="suboverlay narrow">
					
								<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" style="max-width: 100%" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
							<p><?php echo excerpt(20); ?>. <a href="<?php the_permalink(); ?>">MORE ></a></p>
							
							
						</div>
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
						
						
					
					<?php } ?>					
					</div>						
				
				</div>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				
				<div class="clear"></div>

			</div>


			
<?php get_footer(); ?>