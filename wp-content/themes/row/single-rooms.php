<?php 

/* Single Rooms

*/
 get_header(); ?>





	<section class="contentarea">

			<!-- begin room details -->
			
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post();  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						

						
			<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
			
		<div class="stretch"  style="min-height: 500px; background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);">
		
			<!--<div class="suboverlay narrow">
					
					<h1>STAY 5 NIGHTS <br>& SAVE 20% OFF YOUR ENTIRE STAY!</h1>
					<h4>Save up to 20% when you stay for 5 nights or more in the Heart of New York City.</h4>
												
				</div>-->
				<div class="slide-booking rooms-book-now">
					<div class="left">
						<?php the_content(); ?>
					</div>
					<div class="right">
						<a href="<?php if(get_post_meta($post->ID,'cebo_booklink',true)) { echo get_post_meta($post->ID,'cebo_booklink',true); } else { echo get_option('cebo_genbooklink'); } ?>">Book Now</a>
					</div>
				</div>
		
		
		</div>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<div class="stretch"  style="min-height: 500px; background-image: url(<?php echo $imgsrc[0]; ?>);">
		
			<!--<div class="suboverlay narrow">
					
					<h1>STAY 5 NIGHTS <br>& SAVE 20% OFF YOUR ENTIRE STAY!</h1>
					<h4>Save up to 20% when you stay for 5 nights or more in the Heart of New York City.</h4>
												
				</div>-->
				<div class="slide-booking rooms-book-now">
					<div class="left">
						<?php the_content(); ?>
					</div>
					<div class="right">
						<a href="<?php if(get_post_meta($post->ID,'cebo_booklink',true)) { echo get_post_meta($post->ID,'cebo_booklink',true); } else { echo get_option('cebo_genbooklink'); } ?>">Book Now</a>
					</div>
				</div>
		</div>
		
				
		</div>
		
		<?php } else { ?>
							
		<div class="stretch"  style="min-height: 500px; background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);">
		
			<!--<div class="suboverlay narrow">
					
					<h1>STAY 5 NIGHTS <br>& SAVE 20% OFF YOUR ENTIRE STAY!</h1>
					<h4>Save up to 20% when you stay for 5 nights or more in the Heart of New York City.</h4>
												
				</div>-->
				
				<div class="slide-booking rooms-book-now">
					<div class="left">
						<?php the_content(); ?>
					</div>
					<div class="right">
						<a href="<?php if(get_post_meta($post->ID,'cebo_booklink',true)) { echo get_post_meta($post->ID,'cebo_booklink',true); } else { echo get_option('cebo_genbooklink'); } ?>">Book Now</a>
					</div>
				</div>
		
		
		
		</div>
		
	
							
		<?php } ?>
		
		
		
			
			<!--<div class="fourth-level room-slider">
			
				<div class="flexslider">
					<ul class="slides">

						<li>
							<div class="suboverlay narrow">
					
								<h1>STAY 5 NIGHTS <br>& SAVE 20% OFF YOUR ENTIRE STAY!</h1>
								<h4>Save up to 20% when you stay for 5 nights or more in the Heart of New York City.</h4>
															
							</div>
							<img src="/rownyc.com/united/images/rooms/master-suite/master-slider-photo-1.jpg" />
							<div class="slide-booking rooms-book-now">
								<div class="left">
									<p>Since 1928, this classic New York City Hotel has been a recognized icon that’s helped define the skyline of the world’s most exciting city - New York.</p>
								</div>
								<div class="right">
									<a href="#">Book Now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="suboverlay narrow">
					
								<h1>STAY 5 NIGHTS <br>& SAVE 20% OFF YOUR ENTIRE STAY!</h1>
								<h4>Save up to 20% when you stay for 5 nights or more in the Heart of New York City.</h4>
															
							</div>
							<img src="/rownyc.com/united/images/rooms/master-suite/master-slider-photo-1.jpg" />
							<div class="slide-booking rooms-book-now">
								<div class="left">
									<p>Since 1928, this classic New York City Hotel has been a recognized icon that’s helped define the skyline of the world’s most exciting city - New York.</p>
								</div>
								<div class="right">
									<a href="#">Book Now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="suboverlay narrow">
					
								<h1>Master Suite</h1>
								<h4>300 SQ.FT.</h4>
															
							</div>
							<img src="/rownyc.com/united/images/rooms/master-suite/master-slider-photo-1.jpg" />
							<div class="slide-booking rooms-book-now">
								<div class="left">
									<p>Since 1928, this classic New York City Hotel has been a recognized icon that’s helped define the skyline of the world’s most exciting city - New York.</p>
								</div>
								<div class="right">
									<a href="#">Book Now</a>
								</div>
							</div>
						</li>-->

					</ul>
				</div>
			
			</div>
			
			
			
			
			
			
			
			<div class="clear"></div>







			<div class="room-more-details">

				<ul class="room-details">
					<li class="room-detail">

						<img src="<?php echo get_post_meta ($post->ID, 'cebo_thumbone', true); ?>" />

						<div class="room-details-content">

							<h4>For Your Comfort</h4>

							<ul>
								<?php $details = get_post_meta ($post->ID, 'cebo_details', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>
 								
 								
 					
							</ul>

						</div>

					</li>

					<li class="room-detail">

						<img src="<?php echo get_post_meta ($post->ID, 'cebo_thumbtwo', true); ?>" />

						<div class="room-details-content">

							<h4>FOR YOUR WORKLIFE</h4>

							<ul>
							
							<?php $details = get_post_meta ($post->ID, 'cebo_workdetails', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>
 								

							</ul>

							<h4>FOR YOUR ENTERTAINMENT</h4>

							<ul>
							
								<?php $details = get_post_meta ($post->ID, 'cebo_entdetails', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>

							</ul>

						</div>

					</li>

					<li class="room-detail">

						<img src="<?php echo get_post_meta ($post->ID, 'cebo_thumbthree', true); ?>" />

						<div class="room-details-content">

							<div class="detail-features">

								<h4>Features</h4>
							
								<ul>
									<li class="ico-mobile">iPod Docking Station</li>
									<li class="ico-tv">Flat screen LCD TVs</li>
									<li class="ico-cable">Cable and HBO</li>
									<li class="ico-wifi">Internet/wireless services</li>
									<li class="ico-desk">Desk and Ergonomic chair</li>
								</ul>

							</div>

						</div>

					</li>
				</ul>

			</div>


			<?php endwhile; endif; wp_reset_query(); ?>	
			
			
			
			
			 
<?php get_footer(); ?>