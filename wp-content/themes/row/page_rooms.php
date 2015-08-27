<?php 

/* Template Name: Rooms List Page

*/
 get_header(); ?>



	<section class="contentarea">
			
						
			
			
			
			
			<!-- begin rooms -->
			
			
			
					
					<?php query_posts('post_type=rooms&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); 							  
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
			
			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
					
					<div class="suboverlay narrow">
				
						<a href="<?php get_site_url(); ?>/<?php echo ICL_LANGUAGE_CODE; ?>/hotel-rooms-times-square-new-york/<?php the_slug();?>">
							<h1><?php the_title(); ?></h1>
							<!-- <h4><?php echo get_post_meta($post->ID, 'cebo_footage', true); ?> SQ.FT.</h4> -->
						</a>

					
					</div>
					
					
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
	
					<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
					
					<?php } elseif($imgsrc) { ?>
					
					
					<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
					
					<?php } else { ?>
										
					<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
					
					
					<?php } ?>							
						
				</div>
					

				<div class="rooms-book-now">

					<div class="left">
						<!-- <h4><?php echo get_post_meta($post->ID, 'cebo_tagline', true); ?>  - <?php echo get_post_meta($post->ID, 'cebo_footage', true); ?>  sq.ft.</h4> -->
					</div>

					
					<div class="right">
					
					<?php if(get_the_title() == "Penthouse Suites") { ?>
					
						<a href="mailto:reservations@rownyc.com"><?php _e('Book Now','row-theme-text'); ?></a>
						
						<?php } else { ?>
						
						<a target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_option('cebo_genbooklink') . '/search?selected_room_category=' . get_post_meta($post->ID, 'cebo_room_code', true); } else { echo get_option('cebo_genbooklink'); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>



					<?php } ?>
					
					
					</div>
						
				</div>

					<img src="<?php echo $imgsrc[0]; ?>" style="position: absolute; left: -2000px; display: none;" alt="#">

			</div>			
			
			<?php endwhile; endif; wp_reset_query(); ?>	


			<div class="clear"></div>
			
					
<?php get_footer(); ?>