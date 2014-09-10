<?php 

/* Single Rooms

*/
 get_header(); ?>




	<section class="contentarea">
			
						
			
			
			
			
			<!-- begin room details -->
			
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
								
			<div class="fourth-level room-slider">
			
				<?php if(get_post_meta($post->ID, 'cebo_youtube', true)) { ?>
				
					<div class="video-container">
					
						<iframe width="720" height="394" src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'cebo_youtube', true); ?>" allowfullscreen></iframe>
						
					</div>
				
				<?php } else { ?> 
				
					<div class="flexslider-gallery flexslider">
						<ul class="slides">
							
							<?php 

								$repeatable_fields = get_post_meta($post->ID, 'repeatable_fields', true);
								foreach ( $repeatable_fields as $field ) { 

							?>

								<li>
									<div class="slide-image" style="background-image:url(<?php if ($field['url'] != '') echo esc_attr( $field['url'] ); ?>);"></div>
									<div class="slide-description"><?php if ($field['description'] != '') echo esc_attr( $field['description'] ); ?></div>
								</li>								

							<?php

								}

							?>

						</ul>
					</div>
					
				<?php } ?>
					
				<?php endwhile; endif; wp_reset_query(); ?>	

				<div class="gallery-categories">
					<ul>
						
						<?php $currentid = $post->ID; query_posts('post_type=imagegalleries&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php $thersd = $id = get_the_ID(); ?>
						
						
				
						<li><a style="<?php if($currentid == $thersd) { echo 'color: #fa9c03;'; } ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
												
						<?php endwhile; endif; wp_reset_query(); ?>	
					</ul>
				</div>
			
			</div>
			
			
			
			
			
			
			
			<div class="clear"></div>

			
			
			 
<?php get_footer(); ?>