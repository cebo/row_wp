<?php 

/* Template Name: Rooms List Page

*/
 get_header(); ?>



	<section class="contentarea">
			
						
			
			
			
			
			<!-- begin rooms -->
			
			
			
			<ul>
					
					<?php query_posts('post_type=rooms&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); 							  
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
			
			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
				
				
					
					
						<div class="suboverlay narrow">
					
							<h1><?php the_title(); ?></h1>
							<h4><?php echo get_post_meta($post->ID, 'cebo_footage', true); ?> SQ.FT.</h4>

						
						</div>
					
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
						
						<a href="<?php the_permalink(); ?>">
		
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>							
						
						</div>
						
						</a>

					<div class="rooms-book-now">

						<div class="left">
							<h4><?php echo get_post_meta($post->ID, 'cebo_tagline', true); ?>  - <?php echo get_post_meta($post->ID, 'cebo_footage', true); ?>  sq.ft.</h4>
						</div>

						<div class="right">
							<a href="<?php echo get_post_meta($post->ID, 'cebo_booklink', true); ?>">Book Now</a>
						</div>
							
					</div>

					<img src="<?php echo $imgsrc; ?>" style="" alt="#">
				</div>

			
			</div>
			
			
			<?php endwhile; endif; wp_reset_query(); ?>	


			<div class="clear"></div>
			
					
<?php get_footer(); ?>