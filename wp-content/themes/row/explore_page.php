<?php 

/* Template Name: Explore List

*/
 get_header(); ?>
	
	<section class="contentarea">
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<div class="page-intro">
			
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
			
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
			
			
			
			
			<div class="clear"></div>
			
			
			<!-- begin fifth level -->
			
			
			
			
			
			
			
				<div class="fifth-level">
			
				
				
				<ul class="blogposters">
					
					
					<?php query_posts(array('post_type' => 'tribe_events','eventDisplay' => 'upcoming', 'posts_per_page' => 1, 'suppress_filters' => 1,) ); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
										
					<li>
					
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="height: 375px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc[0]; ?>" style="height: 375px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="height: 375px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						
						
						
						<div class="littleover">
							<h1>Coming Soon</h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php bloginfo('url'); ?>/events/">All Events ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					<?php $this_page_id=$wp_query->post->ID; ?>
					
					<?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="height: 375px;" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc[0]; ?>" style="height: 375px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="height: 375px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
										
					
					
					
					
								
				</ul>
			
			
			
			</div>

					
<?php get_footer(); ?>