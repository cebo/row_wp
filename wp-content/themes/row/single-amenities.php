<?php 

/* Single Locations

*/
 get_header(); ?>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>



	<div class="home-intro">
							
	<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
					
					<?php } ?>
	
	</div>	
	
	<section class="contentarea">
						
		<div class="page-content">

			<div class="main-page-content left">

				<div class="text-content no-content-sidebar left">
					
					<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
					

					<?php the_content(); ?>
					
					
					
					<div class="amenity-features">
						
						<ul>
							<?php $details = get_post_meta ($post->ID, 'cebo_details', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>
 							
						</ul>

						<ul>
						
							<?php $details = get_post_meta ($post->ID, 'cebo_workdetails', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>
 						
						</ul>

						<ul>
						
							<?php $details = get_post_meta ($post->ID, 'cebo_entdetails', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>
													</ul>

					</div>

					<div class="wonderline"></div>

					<div class="amenity-contact">

							<div>
								
								<h4>Hours:</h4>
								<p><?php echo get_post_meta ($post->ID, 'cebo_hours', true); ?></p>

							</div>

							<div>
								
								<h4>Contact:</h4>
								<p><?php echo get_post_meta ($post->ID, 'cebo_contact', true); ?></p>

							</div>

							<div>

								<h4>Reservation:</h4>
								<p><?php echo get_post_meta ($post->ID, 'cebo_reserv', true); ?></p>

							</div>

						</div>

					</div>
					

				</div>

				<div class="amenity-featured-images right">
					
					<?php if(get_post_meta($post->ID, 'cebo_thumbone', true)) { ?>
					
					<div class="amenity-featured-image" style="background-image: url(<?php echo get_post_meta ($post->ID, 'cebo_thumbone', true); ?>);"></div>
					
					<?php } ?>
					<?php if(get_post_meta($post->ID, 'cebo_thumbtwo', true)) { ?>

					<div class="amenity-featured-image" style="background-image: url(<?php echo get_post_meta ($post->ID, 'cebo_thumbtwo', true); ?>);"></div>
					
					<?php } ?>

				</div>

			</div>			

		</div>
		
		
		
		
		<div class="clear"></div>
		
		
<?php endwhile; endif; wp_reset_query(); ?>			
		
<?php get_footer(); ?>
