<?php 

/* Single Rooms

*/
 get_header(); ?>




	<section class="contentarea">
			
						
			
			
			
			
			<!-- begin room details -->
			
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
								
			<div class="fourth-level room-slider">
			
				<div class="flexslider-gallery flexslider">
					<ul class="slides">
						
						
						
						
				
								
						<?php if(sp_get_image(1)) : ?>   
							<?php $i = 0; while($i <= 10) : ?>
						    <?php if(sp_get_image($i)) : ?> 
				    
										
					
							<li>
								<div class="slide-image" style="background-image:url(<?php echo sp_get_image($i) ?>);"></div>
								<!-- <div class="gallery-description">
									<p><?php //echo sp_get_image_id($i) ?></p>
								</div> -->
							</li>
						
						
					
						<?php else : break; endif; ?>
			            <?php $i++; ?>
						<?php endwhile; ?>
			            <?php endif; ?>	  
				
								
						<!--<li>
							<img src="images/gallery/gallery-photo-1.jpg" />
							<div class="gallery-description">
								<p>Since 1928, this classic New York City Hotel has been a recognized icon that’s helped define the skyline of the world’s most exciting city - New York.</p>
							</div>
						</li>-->
						
						
					
					</ul>
				</div>
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