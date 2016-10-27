<?php 

	/* Template Name: Rooms List Page */

	get_header();

?>

<section class="contentarea">

	<div class="bookingnav-block"></div>

	<div class="roomslist-area">

		<?php

			$args = array (
				'post_type' => array( 'rooms' ),
				'suppress_filters' => false,
				'nopaging' => true,
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

				$roomspage_content = get_field('roomspage_content', $post->ID );
				$enable_more_info = get_field( 'roomsdetail_enable_more_info', $post->ID );
				$enable_book_now = get_field( 'roomsdetail_enable_book_now', $post->ID );
				$book_now_text = get_field( 'roomsdetail_book_now_text', $post->ID );

				$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true);

				if ( $fullpic ) { $image = $fullpic; }
				elseif ( $imgsrc ) { $image = $imgsrc; }
				else { $image = get_bloginfo('template_url') . '/images/watermark.jpg);'; }

				if ( $enable_more_info == 'yes' && ( $enable_book_now == 'roomspage_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) ) {

					$only = '';
					if ( $book_now_text == 'contact_reservations' ) { $only .= ' roomslist-box-contact-reserve-text'; }

				} elseif ( $enable_more_info == 'yes' ) {

					$only = 'roomslist-box-moreinfo-only';

				} elseif ( $enable_book_now == 'roomspage_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) {

					$only = 'roomslist-box-booknow-only';
					if ( $book_now_text == 'contact_reservations' ) { $only .= ' roomslist-box-contact-reserve-text'; }

				} else {

					$only = 'roomslist-box-nolinks';

				}

		?>

			<div class="roomslist-box <?php echo $only; ?>">

				<div class="roomslist-view">

					<?php if ( $enable_more_info == 'yes' ) { ?>

						<a class="roomslist-image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $image; ?>);"></a>

					<?php } else { ?>

						<a class="roomslist-image roomslist-image-nocursor" href="#" onClick='return false;' style="background-image: url(<?php echo $image; ?>);"></a>

					<?php } ?>

					<a class="roomslist-title roomslist-title-desktop" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

				</div>

				<div class="roomslist-panel">

					<h2 class="roomslist-title roomslist-title-mobile"><?php the_title(); ?></h2>

					<div class="roomslist-content">

						<?php
							if ( $roomspage_content && $roomspage_content != '' ) { echo $roomspage_content; }
							else { the_content(); }
						?>

					</div>

					<div class="clear"></div>

					<?php if ( $enable_more_info == 'yes' ) { ?>

						<a class="roomslist-link roomslist-link-moreinfo" href="<?php the_permalink(); ?>"><span><?php _e( 'More Info', 'row-theme-text' ); ?></span></a>

					<?php } ?>

					<?php

						if ( $enable_book_now == 'roomspage_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) {

								$book_now_link = get_field( 'roomsdetail_book_now_link', $post->ID );

								$booknow_target = '';
								$book_now_open_in_new_tab = get_field( 'roomsdetail_book_now_open_in_new_tab', $post->ID );
								if ( $book_now_open_in_new_tab == 'yes' ) { $booknow_target = 'target="_blank"'; }

					?>

						<a <?php echo $booknow_target; ?> class="roomslist-link" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $book_now_link; ?>">
							<span>
								<?php
									if ( $book_now_text == 'contact_reservations' ) { _e( 'Contact Reservations', 'row-theme-text' ); } else { _e( 'Book Now', 'row-theme-text' ); }
								?>
							</span>
						</a>

					<?php } ?>

				</div>

			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>


<?php if ( false ) { ?>

	<section class="contentarea">
			
			<div class="title-div">
				<h1><?php the_title(); ?></h1>
			</div>
						
			<!-- begin rooms -->
			
			
				<?php
					$args = array (
						'post_type'              => array( 'rooms' ),
						'suppress_filters' 		 => false,
						'nopaging' => true,
					);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); ?>

			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
					
					<div class="suboverlay narrow">
				
						<a href="<?php get_site_url(); ?>/<?php echo ICL_LANGUAGE_CODE; ?>/hotel-rooms-times-square-new-york/<?php the_slug();?>">
							<h2 class="h1"><?php the_title(); ?></h2>
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
			

			<?php }
					} 

					wp_reset_postdata(); ?>


			<div class="clear"></div>


<?php } ?>
					
<?php get_footer(); ?>