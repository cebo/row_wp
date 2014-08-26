<?php 

/* Single Locations

*/
 get_header(); ?>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>



	<div class="home-intro">
	
		<?php if(get_post_meta($post->ID, 'cebo_pulled_photos', true)) { ?>

			<?php

				include(TEMPLATEPATH . '/library/dropbox-utils.php'); 

				/** settings **/
				$images_dir = 'https://www.dropbox.com/sh/3coxz0uzkhfi9ej/AABpY7uKqCd_kGJWA0tzLYITa';
				$thumbs_dir = bloginfo('template_url') . '/images/bosco-box/';
				$thumbs_width = 200;
				$images_per_row = 3;

				
				/** generate photo gallery **/
				$image_files = get_files($images_dir);
				if(count($image_files)) {
				  $index = 0;
				  foreach($image_files as $index=>$file) {
				    $index++;
				    $thumbnail_image = $thumbs_dir.$file;
				    if(!file_exists($thumbnail_image)) {
				      $extension = get_file_extension($thumbnail_image);
				      if($extension) {
				        make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
				      }
				    }
				    echo '<a href="',$images_dir.$file,'" class="photo-link smoothbox" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
				    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
				  }
				  echo '<div class="clear"></div>';
				}
				else {
				  echo '<p>There are no images in this gallery.</p>';
				}

			?>

		<?php } elseif(get_post_meta($post->ID, 'cebo_fullbannerpic', true)) { ?>
								
			<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullbannerpic', true); ?>);"></div>
		
		<?php } elseif(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
										
			<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>			
		
		<?php } elseif($imgsrc) { ?>
		
			<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
		
		<?php } else { ?>
							
			<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
	
		<?php } ?>
	
	</div>	
	
	<section class="contentarea">
						
		<div class="page-content">

			<div class="amenity-featured-images right">
						
				<?php if(get_post_meta($post->ID, 'cebo_thumbone', true)) { ?>
				
				<div class="amenity-featured-image" style="background-image: url(<?php echo get_post_meta ($post->ID, 'cebo_thumbone', true); ?>);"></div>
				
				<?php } ?>

				<?php if(get_post_meta($post->ID, 'cebo_amenity_yelp', true)) { ?>

					<a href="<?php echo get_post_meta ($post->ID, 'cebo_amenity_yelp', true); ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/yelp.png"></a>

				<?php } ?>					

			</div>

			<div class="main-page-content left">

				<div class="text-content no-content-sidebar left">
					
					<?php if(get_post_meta($post->ID, 'cebo_titlogo', true)) { ?>
					
						<img class="amenity-logo" src="<?php echo get_post_meta($post->ID, 'cebo_titlogo', true); ?>">
					
					<?php } else { ?>
					
						<h1><?php the_title(); ?></h1>
						
					<?php } ?>
					

					<?php the_content(); ?>
					
					
					<?php if( get_post_meta ($post->ID, 'cebo_details', true) ) { ?>

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

					<?php } ?>

					<div class="wonderline"></div>

					<div class="amenity-contact">
							
							<?php if(get_post_meta ($post->ID, 'cebo_hours', true)) { ?>
							
							<div>
								
								<h4>Hours:</h4>
								<p><?php echo get_post_meta ($post->ID, 'cebo_hours', true); ?></p>

							</div>
							<?php } ?>
							
							<?php if(get_post_meta ($post->ID, 'cebo_contact', true)) { ?>
							
							
							<div>
								
								<h4>Contact:</h4>
								<p><?php echo get_post_meta ($post->ID, 'cebo_contact', true); ?></p>

							</div>
							
							<?php } ?>
							<?php if(get_post_meta ($post->ID, 'cebo_reserv', true)) { ?>

							<div>

								<h4>Reservation:</h4>
								<p><?php echo get_post_meta ($post->ID, 'cebo_reserv', true); ?></p>

							</div>
							
							<?php } ?>

						</div>

					</div>
					

				</div>

			</div>					
		
		
		
		<div class="clear"></div>
		
		
<?php endwhile; endif; wp_reset_query(); ?>			
		
<?php get_footer(); ?>
