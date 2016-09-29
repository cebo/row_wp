<?php 

	/* Single Rooms */
	
	get_header();

	$acf_fields = get_fields( $post->ID );

	$gallery_repeater = $acf_fields['roomsdetail_gallery_repeater'];

	ini_set('xdebug.var_display_max_depth', -1);
	ini_set('xdebug.var_display_max_children', -1);
	ini_set('xdebug.var_display_max_data', -1);

?>

<?php
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full" );

?>

	<section class="contentarea">

		<div class="headernav-block-secondary"></div>

		<div class="toppage-intro toppage-flexslider-backgroundimage toppage-singlerooms">

			<?php if ( $gallery_repeater ) { ?>
			
				<div class="flexslider-js flexslider">

					<ul class="slides">

						<?php foreach ( $gallery_repeater as $gallery ) : ?>
							<?php $gallery['image']['url'] = get_bloginfo('template_url') . '/images/amenities/amenities-photo-1.jpg'; ?>
							<li class="toppage-image" style="background-image: url(<?php echo $gallery['image']['url']; ?>)"></li>

						<?php endforeach; ?>

					</ul>

				</div>

			<?php } else { ?>

				<div class="toppage-image" style="background-image: url(<?php echo $imgsrc[0]; ?>)"></div>

			<?php } ?>

			<h1 class="roomssingle-title roomssingle-title-desktop"><?php the_title(); ?></h1>

			<div class="roomssingle-panel">

				<h1 class="roomssingle-title roomssingle-title-mobile"><?php the_title(); ?></h1>

				<div class="roomssingle-content">

					<?php the_content(); ?>

				</div>

				<div class="clear"></div>

				<?php if ( get_the_title() == "Penthouse Suites" ) { ?>

					<a class="roomssingle-link" href="mailto:reservations@rownyc.com"><span><?php _e('Book Now','row-theme-text'); ?></span></a>

				<?php } else {

					if ( get_post_meta($post->ID, 'cebo_booklink', true ) ) {

						$booklink = get_option('cebo_genbooklink') . '/search?selected_room_category=' . get_post_meta($post->ID, 'cebo_room_code', true);

					} else {

						$booklink = get_option('cebo_genbooklink');

					}

				?>

					<a class="roomssingle-link" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $booklink; ?>"><span><?php _e('Book Now','row-theme-text'); ?></span></a>

				<?php } ?>

			</div>

		</div>

		<div class="browselist-box browselist-singlerooms">

			<?php 

				$room_page = get_pages(array(
					'meta_key' => '_wp_page_template',
					'meta_value' => 'page_rooms.php'
				));

				$backlink = get_permalink( $room_page[0]->ID );

			?>
				
			<div class="browselist-back"><a href="<?php echo $backlink; ?>"><i class="fa fa-chevron-left"></i>Back</a></div>

			<ul class="browselist-links">

				<li class="browselist-title">Room Types:</li>

				<?php

					$current_id = get_the_ID();

					$rooms_args = array(
						'post_type' => 'rooms',
						'posts_per_page' => -1,
						'nopaging' => true,
					);

					$rooms_query = new WP_Query( $rooms_args );

					if ( $rooms_query->have_posts() ) : while ( $rooms_query->have_posts() ) : $rooms_query->the_post();

						$loop_id = get_the_ID();

						if ( $current_id == $loop_id ) { $addclass = 'active'; }
						else { $addclass= ''; }

				?>

					<li><a class="<?php echo $addclass; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>

		</div>

		<?php

			$list_column_flexible = $acf_fields['roomsdetail_list_column_flexible'];

			// Push array according by column

			$first_col = array();
			$second_col = array();
			$third_col = array();

			if ( $list_column_flexible ) {

				foreach ( $list_column_flexible as $flex ) {

					if ( $flex['placement'] == 'first_col' ) {

						array_push( $first_col, $flex );

					} elseif ( $flex['placement'] == 'second_col' ) {

						array_push( $second_col, $flex );

					} elseif ( $flex['placement'] == 'third_col' ) {

						array_push( $third_col, $flex );

					}

				}

			}

			// Check how many columns are used

			$check = 0;
			$addclass = '';

			if ( count( $first_col ) > 0 ) { $check++; }
			if ( count( $second_col ) > 0 ) { $check++; }
			if ( count( $third_col ) > 0 ) { $check++; }

			if ( $check == 2 ) { $addclass = 'roomsdetail-box-twoway'; }
			elseif ( $check == 3 ) { $addclass = 'roomsdetail-box-threeway'; }

		?>

		<div class="roomsdetail-box <?php echo $addclass; ?>">

			<?php

				// START function roomsdetail()

				function roomsdetail( $col_array ) {

					foreach ( $col_array as $col ) :

						if ( $col['acf_fc_layout'] == 'roomsdetail_list_content' ) :

			?>

				<div class="roomsdetail-list-content">
				
					<h2><?php echo $col['title']; ?></h2>

					<ul>
						<?php foreach ( $col['list_item_repeater'] as $list_item ) : ?>
							<li><?php echo $list_item['text'] ?></li>
						<?php endforeach; ?>
					</ul>

				</div>

			<?php elseif ( $col['acf_fc_layout'] == 'roomsdetail_feature_list_content' ) : ?>

				<div class="roomsdetail-feature-list-content">

					<h2><?php echo $col['title']; ?></h2>

					<ul>
						<?php foreach ( $col['list_item_repeater'] as $list_item ) : ?>
							<li class="roomsdetail-icon-<?php echo $list_item['icon']; ?>"><?php echo $list_item['text'] ?></li>
						<?php endforeach; ?>
					</ul>

				</div>

			<?php
				
				endif; endforeach; }

				// END function roomsdetail()

			?>

			<?php if ( count( $first_col ) > 0 ) { ?>

				<div class="roomsdetail-col">

					<?php roomsdetail( $first_col ); ?>

				</div>

			<?php } ?>

			<?php if ( count( $second_col ) > 0 ) { ?>

				<div class="roomsdetail-col">

					<?php roomsdetail( $second_col ); ?>

				</div>

			<?php } ?>

			<?php

				if ( count( $third_col ) > 0 ) {

					if ( $check == 3 ) {

						echo '<div class="clear clear2"></div>';
						$last = 'last';

					} else {

						$last = '';

					}

			?>

				<div class="roomsdetail-col <?php echo $last; ?>">

					<?php roomsdetail( $third_col ); ?>

				</div>

			<?php } ?>

		</div>

<?php endwhile; endif; wp_reset_query(); ?>








<?php if ( false ) { ?>

	<section class="contentarea">

			<?php if(have_posts()) : while(have_posts()) : the_post();  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						

						
			<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
			
		<div class="stretch"  style="min-height: 500px; background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);">
		
			<!--<div class="suboverlay narrow">
					
					<h1>STAY 5 NIGHTS <br>& SAVE 20% OFF YOUR ENTIRE STAY!</h1>
					<h4>Save up to 20% when you stay for 5 nights or more in the Heart of New York City.</h4>
												
				</div>-->
				
				
						<div class="suboverlay narrow">
					
								<h1><?php the_title(); ?></h1>
								<!-- <h4><?php echo get_post_meta($post->ID, 'cebo_footage', true); ?> SQ.FT.</h4> -->
						
						</div>
						
						
				<div class="slide-booking rooms-book-now">
					<div class="left">
						<?php the_content(); ?>
					</div>
					<div class="right">
						<?php if(get_the_title() == "Penthouse Suites" || get_the_title() == "Executive Suites") { ?>
					
						<a style="background: rgba(74,74,74, 0.8)" href="mailto:reservations@rownyc.com"><?php _e('Contact Reservations','row-theme-text'); ?></a>
						
						<?php } else { ?>
						
						<a target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) {  echo get_post_meta($post->ID, 'cebo_booklink', true); } else { echo get_option('cebo_genbooklink'); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>



					<?php } ?>

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
						<?php if(get_the_title() == "Penthouse Suites" || get_the_title() == "Executive Suites") { ?>
					
						<a style="background: rgba(74,74,74, 0.8)" href="mailto:reservations@rownyc.com"><?php _e('Contact Reservations','row-theme-text'); ?></a>
						
						<?php } else { ?>
						
						<a href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) {  echo get_post_meta($post->ID, 'cebo_booklink', true); } else { echo get_option('cebo_genbooklink'); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>



					<?php } ?>

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
						<?php if(get_the_title() == "Penthouse Suites" || get_the_title() == "Executive Suites") { ?>
					
						<a style="background: rgba(74,74,74, 0.8)" href="mailto:reservations@rownyc.com"><?php _e('Contact Reservations','row-theme-text'); ?></a>
						
						<?php } else { ?>
						
						<a href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) {  echo get_post_meta($post->ID, 'cebo_booklink', true); } else { echo get_option('cebo_genbooklink'); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>



					<?php } ?>

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
						</li>

					</ul>
				</div>
			
			</div> -->
			
			
			
			
			
			
			
			<div class="clear"></div>







			<div class="room-more-details">

				<ul class="room-details">
					<li class="room-detail">

						<img src="<?php echo get_post_meta ($post->ID, 'cebo_thumbone', true); ?>" />

						<div class="room-details-content">

							<h3><?php _e('For Your Comfort','row-theme-text'); ?></h3>

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

							<h3><?php _e('FOR YOUR WORKLIFE','row-theme-text'); ?></h3>

							<ul>
							
							<?php $details = get_post_meta ($post->ID, 'cebo_workdetails', true);
			             		$detailer = explode(',', $details);
								
								foreach($detailer as $d) {
 								echo "<li>" . $d . "</li>"; } ?>
 								

							</ul>

							<h3><?php _e('FOR YOUR ENTERTAINMENT','row-theme-text'); ?></h3>

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

								<h2><?php _e('Features','row-theme-text'); ?></h2>
							
								<ul>
									<!-- <li class="ico-wifi"><?php _e('Complimentary Wi-Fi','row-theme-text'); ?></li> -->
									<li class="ico-mobile"><?php _e('iPod Docking Station','row-theme-text'); ?></li>
									<li class="ico-tv"><?php _e('Flat screen LCD TVs','row-theme-text'); ?></li>
									<li class="ico-cable"><?php _e('Cable and HBO','row-theme-text'); ?></li>
									<li class="ico-desk"><?php _e('Desk and Ergonomic chair','row-theme-text'); ?></li>
								</ul>

							</div>

						</div>

					</li>
				</ul>

			</div>

			
			<?php endwhile; endif; wp_reset_query(); ?>
				<div class="gallery-categories">
					<ul>
						
						<?php $currentid = $post->ID; query_posts('post_type=rooms&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php $thersd = $id = get_the_ID(); ?>
						
						
				
						<li><a style="<?php if($currentid == $thersd) { echo 'color: #fa9c03;'; } ?>" href="<?php get_site_url(); ?>/<?php echo ICL_LANGUAGE_CODE; ?>/hotel-rooms-times-square-new-york/<?php the_slug();?>"><?php the_title(); ?></a></li>
												
						<?php endwhile; endif; wp_reset_query(); ?>	
					</ul>
				</div>
			
			
			
			
<?php } ?>
			 
<?php get_footer(); ?>